<?php
$con=mysqli_connect("localhost","root","","employee");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
