<!DOCTYPE html>
<html>
  <head>
    <title>NewLife Hospitals-Payment</title>
    <link rel="stylesheet" href="payment.css" />
  </head>
  <body>
    <?php
      $name=$_POST["name"];
      $phno=$_POST["phno"];
      $email=$_POST["email"];
      $date=$_POST["date"];
      $time=$_POST["time"];
      $status=$_POST["status"];
      $doc=$_POST["doc"];
    ?>
    <div id="d0">
      <h2>Confirm details:</h2>
      <div id="d1">
        <section id="s1">
          <p>Name:</p>
          <p>Phone number:</p>
          <p>Email:</p>
          <p>Date of appointment:</p>
          <p>Time of appointment:</p>
          <p>Status:</p>
          <p>Consulting Doctor:</p>
          <p>Amount to be paid:</p>
        </section>
        <section id="s2">
          <p id="uname"><?php echo "$name"; ?></p>
          <p id="phno"><?php echo "$phno" ?></p>
          <p id="email"><?php echo "$email"; ?></p>
          <p id="date"><?php echo "$date" ?></p>
          <p id="time"><?php echo "$time" ?></p>
          <p id="status"><?php echo "$status"; ?></p>
          <p id="doc"><?php echo "$doc"; ?></p>
          <?php
            $fee=400;
            if($status=="student")
            {
              $fee=300;
            }
            else if($status=="teacher")
            {
              $fee=200;
            }
            ?>
          <p id="amt">&#8377;<?php echo "$fee";?>/-</p>
        </section>
      </div>
      <br><br>
      <p id="p1">Please confirm by paying.</p>
    </div>
    <div id="d3">
        <h2>Scan the QR code to pay: </h2>
        <img src="qr.png" alt="qr" id="qr"><br><br>
        <?php
          include 'db.php';
        ?>
    </div>
  </body>
</html>
