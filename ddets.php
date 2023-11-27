<!DOCTYPE html>
<html lang="en">

<head>
    <title>NewLife Hospitals-Doctor Details</title>

    <style>
        body {
            overflow-x: hidden;
            margin: 0px;
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-size: 20px;
            display: flex;
        }

        #d0 {
            width: 40%;
            height: fit-content;
            background-color: lightblue;
            padding-top: 30px;
            padding-right: 10px;
            padding-bottom: 100%;
            align-content: center;
        }

        #d1 {
            background-color: lightblue;
            display: flex;
            margin-left: 100px;
            height: 400px;
        }

        h1 {
            text-align: center;
            font-size: 30px;
        }

        img {
            width: 200px;
            height: 200px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 60px;
            border-radius: 50%;
            margin-top:50px;
        }

        #s1 {
            width: 200px;
            display: block;
        }

        #s2 {
            width: 200px;
            display: block;
            text-align: right;
        }

        #d2 {
            width: 60%;
            height: 100%;
            padding-top: 30px;
            padding-left: 10px;
            padding-bottom: 100%;
            align-content: center;
            background-color: lightgoldenrodyellow;
        }

        #d3,
        #d4 {
            display: flex;
            margin-left: 250px;
            margin-bottom: 20px;
        }

        #s3,
        #s5 {
            width: 200px;
            display: block;
        }

        #s4,
        #s6 {
            width: 200px;
            display: block;
            text-align: right;
        }
        table{
            margin-left: 100px;
            width: 700px;
            font-size: 20px;
            text-align: center;
        }

    </style>
</head>

<body>
    <div id="d0">
        <img src="logo.jpeg" alt="NewLife">
        <h1>Personal Details</h1>
        <div id="d1">
            <section id="s1">
                <p>NAME: </p>
                <p>PHONE NUMBER: </p>
                <p>EMAIL: </p>
                <p>ADDRESS: </p>
            </section>
            <section id="s2">
                <p><?php echo "$name"; ?></p>
                <p><?php echo "$phno"; ?></p>
                <p><?php echo "$email"; ?></p>
                <p><?php echo "$addr"; ?></p>
            </section>
        </div>
    </div>
    <div id="d2">
        <h1>Details</h1>
        <div id="d3">

            <section id="s3">
                <P>DEPARTMENT: </P>
                <P>EDUCATION: </P>
                <p>EXPERIENCE: </p>
            </section>
            <section id="s4">
                <p><?php echo "$dept"; ?></p>
                <p><?php echo "$edu"; ?></p>
                <p><?php echo "$exp"; ?> years</p>
            </section>
        </div>
        <hr><br>
        <h1>Weekly Schedule</h1>
        <div id="d4">
            <section id="s5">
                <p>MON: </p>
                <p>TUE: </p>
                <p>WED: </p>
                <p>THU: </p>
                <p>FRI: </p>
                <p>SAT: </p>
                <p>SUN: </p>
            </section>
            <section id="s6">
                <p><?php echo "$mon"; ?></p>
                <p><?php echo "$tue"; ?></p>
                <p><?php echo "$wed"; ?></p>
                <p><?php echo "$thu"; ?></p>
                <p><?php echo "$fri"; ?></p>
                <p><?php echo "$sat"; ?></p>
                <p><?php echo "$sun"; ?></p>
            </section>
        </div>
        <hr><br>
        <div id="d5">
            <h1>Upcoming appointments</h1><br>
            <?php
            $tsql = "select name, date, time from appnt where doc='$name' order by date asc";
            $stmt = mysqli_query($conn, $tsql);
            if($stmt->num_rows == 0){
                echo "None";
            }
            else{
                echo "<table>";
                echo "<tr>";
                echo "<th>Patient</th>";
                echo "<th>Date</th>";
                echo "<th>Time</th>";
                echo "</tr>";
                while ($row = mysqli_fetch_array($stmt, MYSQLI_ASSOC)) {
                    echo "<tr>";
                    echo "<td>";
                    echo $row['name'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['date'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['time'];
                    echo "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                
            }
            ?>
           
        </div>
    </div>
</body>

</html>