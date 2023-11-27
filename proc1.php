<?php
$name;
$age;
$height;
$weight;
$gender;
$bgrp;
$addr;
$phno;
$email;
$nextappntdate;
$nextappntdoc;
$nextappntreg;
$uname = $_POST['username'];
$pwd = $_POST['password'];

$conn = mysqli_connect("localhost", "root", "nitya", "hms");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$tsql = "SELECT * FROM pdets WHERE uid='$uname' AND pwd='$pwd'";
$stmt = mysqli_query($conn, $tsql);
if ($stmt->num_rows == 0) {
    include "wrong.php";

} else {

    while ($row = mysqli_fetch_array($stmt, MYSQLI_ASSOC)) {
        $name = $row['name'];
        $age = $row['age'];
        $height = $row['height'];
        $weight = $row['weight'];
        $gender = $row['gender'];
        $bgrp = $row['bloodgrp'];
        $addr = $row['address'];
        $phno = $row['phno'];
        $email = $row['email'];
        $nextappntdate = $row['nextappntdate'];
        $nextappntdoc = $row['nextappntdoc'];
        $nextappntreg = $row['nextappntreg'];
    }

    include 'pdets.php';

}

?>
