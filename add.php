<?php
include 'config.php';

// Get form data and escape it to prevent SQL injection
$msg = mysqli_real_escape_string($conn, $_POST['msg']);
$pin = mysqli_real_escape_string($conn, $_POST['pin']);
$auto_expiry = mysqli_real_escape_string($conn, $_POST['auto_expiry']);
if(isset($_POST['expiry_date']) && $auto_expiry == 1) {
    $expiry_date = mysqli_real_escape_string($conn, $_POST['expiry_date']);
}
else {
    $expiry_date = null;
}

if($expiry_date != null) {
    $currentDateTime = new DateTime(); 
    $currentDateTime->modify($expiry_date); 
    $new_expiry_date = $currentDateTime->format('Y-m-d H:i:s');
}
else {
    $new_expiry_date = null;
}

function getUserIP() {
    $ip = file_get_contents('https://api64.ipify.org?format=json');
    $ipObj = json_decode($ip);
    return $ipObj->ip;
}

$userIP = getUserIP();

$unique_key = generateUniqueKey($conn, 10); 

$created_at = date("Y-m-d H:i:s");

function generateUniqueKey($conn, $length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $key = '';
    $maxTries = 10; 

    while ($maxTries > 0) {
        $key = substr(str_shuffle($characters), 0, $length);
        $check_query = "SELECT * FROM data WHERE unique_key = '$key'";
        $result = mysqli_query($conn, $check_query);

        if (mysqli_num_rows($result) == 0) {
            break;
        }
        $maxTries--;
    }

    return $key;
}

if (isset($_FILES['file']) && $_FILES['file']['error'] !== UPLOAD_ERR_NO_FILE) {
    // File handling
    $target_dir = "files/"; 
    $extension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
    $random_number = mt_rand(10000, 99999);
    $random_filename = $random_number . '_' . basename($_FILES["file"]["name"]);
    $target_file = $target_dir . $random_filename;
    $uploadOk = 1;
    if ($_FILES["file"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            $file_name = $random_filename;
            $insert_query = "INSERT INTO data (msg, pin, created_at, unique_key, file, ip, auto_expiry, expiry_date) VALUES ('$msg', '$pin', '$created_at', '$unique_key', '$file_name', '$userIP', '$auto_expiry', '$new_expiry_date')";
            $result = mysqli_query($conn, $insert_query);

            if ($result) {
                echo $unique_key."|".$pin;
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
} else {
    $insert_query = "INSERT INTO data (msg, pin, created_at, unique_key, ip, auto_expiry, expiry_date) VALUES ('$msg', '$pin', '$created_at', '$unique_key', '$userIP', '$auto_expiry', '$new_expiry_date')";
    $result = mysqli_query($conn, $insert_query);

    if ($result) {
        echo $unique_key."|".$pin;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>