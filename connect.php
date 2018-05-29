<?php
$connection = mysqli_connect('185.176.40.140', 'username', 'password');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
else {
    print("connection successful");
}
$select_db = mysqli_select_db($connection, '2566940_file');

if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
?>