<?php
$name;
$addr;
$phno;
$email;
$edu;
$dept;
$exp;
$mon;
$tue;
$wed;
$thu;
$fri;
$sat;   
$sun;
$uname = $_POST['username'];
$pwd = $_POST['password'];

$conn = mysqli_connect("localhost", "root", "nitya", "hms");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$tsql = "SELECT * FROM ddets WHERE did='$uname' AND pwd='$pwd'";
$stmt = mysqli_query($conn, $tsql);
if ($stmt->num_rows == 0) {
    include "wrong.php";

} else {

    while ($row = mysqli_fetch_array($stmt, MYSQLI_ASSOC)) {
        $name = $row['name'];
        $addr = $row['address'];
        $phno = $row['phno'];
        $email = $row['email'];
        $edu = $row['edu'];
        $dept = $row['dept'];
        $exp = $row['exp'];
    }
    $tsql = "SELECT * FROM schedule WHERE did='$uname'";
    $stmt = mysqli_query($conn, $tsql);
    while ($row = mysqli_fetch_array($stmt, MYSQLI_ASSOC)) {
        $mon = $row['mon'];
        $tue = $row['tue'];
        $wed = $row['wed'];
        $thu = $row['thur'];
        $fri = $row['fri'];
        $sat = $row['sat'];
        $sun = $row['sun'];
    }

    include 'ddets.php';

}

?>
