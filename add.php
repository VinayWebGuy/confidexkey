<?php
include 'config.php';

// Get form data and escape it to prevent SQL injection
$msg = mysqli_real_escape_string($conn, $_POST['msg']);
$pin = mysqli_real_escape_string($conn, $_POST['pin']);

function getUserIP() {
    $ip = file_get_contents('https://api64.ipify.org?format=json');
    $ipObj = json_decode($ip);
    return $ipObj->ip;
}

// Get the user's IP address
$userIP = getUserIP();

// Generate a unique alphanumeric key
$unique_key = generateUniqueKey($conn, 10); // You can adjust the length as needed

// Get the current date and time
$created_at = date("Y-m-d H:i:s");

// Function to generate a unique key
function generateUniqueKey($conn, $length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $key = '';
    $maxTries = 10; // Maximum attempts to generate a unique key

    while ($maxTries > 0) {
        $key = substr(str_shuffle($characters), 0, $length);
        $check_query = "SELECT * FROM data WHERE unique_key = '$key'";
        $result = mysqli_query($conn, $check_query);

        if (mysqli_num_rows($result) == 0) {
            // Key doesn't exist in the table, break the loop
            break;
        }
        $maxTries--;
    }

    return $key;
}

// Check if a file is uploaded
if (isset($_FILES['file']) && $_FILES['file']['error'] !== UPLOAD_ERR_NO_FILE) {
    // File handling
    $target_dir = "files/"; // Specify the directory where files will be stored
    $extension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
    $random_number = mt_rand(10000, 99999); // Generate a random 5-digit number
    $random_filename = $random_number . '_' . basename($_FILES["file"]["name"]);
    $target_file = $target_dir . $random_filename;
    $uploadOk = 1;

    // Check file size (you can set your own file size limit)
    if ($_FILES["file"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            // Insert data into the database with file
            $file_name = $random_filename;
            $insert_query = "INSERT INTO data (msg, pin, created_at, unique_key, file, ip) VALUES ('$msg', '$pin', '$created_at', '$unique_key', '$file_name', '$userIP')";
            $result = mysqli_query($conn, $insert_query);

            if ($result) {
                // Data insertion successful
                echo $unique_key."|".$pin;
            } else {
                // Error in insertion
                echo "Error: " . mysqli_error($conn);
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
} else {
    // Insert data into the database without file
    $insert_query = "INSERT INTO data (msg, pin, created_at, unique_key, ip) VALUES ('$msg', '$pin', '$created_at', '$unique_key', '$userIP')";
    $result = mysqli_query($conn, $insert_query);

    if ($result) {
        // Data insertion successful
        echo $unique_key."|".$pin;
    } else {
        // Error in insertion
        echo "Error: " . mysqli_error($conn);
    }
}
?>
