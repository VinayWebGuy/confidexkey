<?php
include 'config.php';
$key = mysqli_real_escape_string($conn, $_POST['key']);
$pin = mysqli_real_escape_string($conn, $_POST['pin']);

$query = mysqli_query($conn, "SELECT * FROM data where unique_key = '$key' && pin = '$pin'");
if(mysqli_num_rows($query) > 0) {
    $row = mysqli_fetch_assoc($query);
    echo $row['msg']."|".$row['file'];
}
else {
    echo "Sorry, There is something wrong with your key or pin. Please try again.|";
}

?>