<?php
$conn = mysqli_connect("localhost", "root", "nitya", "hms");
if (!$conn) {
    include 'fail.php';
}
else{
    try{
        $tsql="insert into appnt values('$name','$phno','$email','$date','$status','$doc','$fee', '$time')";
        $stmt = mysqli_query($conn, $tsql);
        if($stmt){
            include 'success.php';
        }
        else{
            include 'fail.php';
        }
    }
    catch(Exception $e){
        include 'fail.php';
    }
}
?>

 
