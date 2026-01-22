<?php
$conn = mysqli_connect("localhost", "root", "", "robinhoodlogin");

if (!$conn) {
    die("DB Connection Failed: " . mysqli_connect_error());
}
?>
