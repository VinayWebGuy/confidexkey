<?php
include 'config.php';
$key = mysqli_real_escape_string($conn, $_POST['key']);
$pin = mysqli_real_escape_string($conn, $_POST['pin']);

$query = mysqli_query($conn, "SELECT * FROM data WHERE BINARY unique_key = '$key' AND pin = BINARY '$pin' AND COALESCE(expiry_date, '9999-12-31 23:59:59') > NOW()");



if(mysqli_num_rows($query) > 0) {
    $row = mysqli_fetch_assoc($query);
    echo $row['msg']."|".$row['file'];
}


?>