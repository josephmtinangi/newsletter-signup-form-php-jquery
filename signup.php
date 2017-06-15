<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'cool_site';

$conn = mysqli_connect($host, $username, $password, $database) or die(mysqli_error($conn));

if (isset($_POST['submitForm'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    mysqli_query($conn, "INSERT INTO newsletter_signups VALUES ('', '$name', '$email')");
    echo "Thank You For Joining Our Newsletter";
}
