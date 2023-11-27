<!DOCTYPE html>
<html lang="en">

<head>
    <title>NewLife Hospitals-Patient Details</title>
    
    <style>
        body {
            overflow-x: hidden;
            margin: 0px;
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-size: 20px;
            display: flex;
        }

        #d0{
            width: 40%;
            height:100%;
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
        } 

        h1{
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
        #d2{
            width: 60%;
            height:100%;
            padding-top: 30px;
            padding-left: 10px; 
            padding-bottom: 100%;
            align-content: center;
            background-color: lightgoldenrodyellow;
        }
        #d3, #d4{
            display: flex;
            margin-left: 250px;
            margin-bottom: 20px;
        }
        #s3, #s5 {
            width: 200px;
            display: block;
        }
        #s4, #s6{
            width: 200px;
            display: block;
            text-align: right;
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
    <h1>Biological information</h1>
        <div id="d3">
            
            <section id="s3">
                <P>AGE: </P>
                <P>GENDER: </P>
                <p>HEIGHT: </p>
                <P>WEIGHT: </P>
                <P>BLOOD TYPE: </P>
            </section>
            <section id="s4">
                <p><?php echo "$age"; ?></p>
                <p><?php echo "$gender"; ?></p>
                <p><?php echo "$height"; ?> cm</p>
                <p><?php echo "$weight"; ?> kg</p>
                <p><?php echo "$bgrp"; ?></p>
            </section>
        </div>
        <hr><br>
        <h1>Appointment Details</h1>
        <div id="d4">
            
            <section id="s5">
                <p>DATE: </p>
                <p>DOCTOR: </p>
                <p>REGARDING: </p>
            </section>
            <section id="s6">
                <p><?php echo "$nextappntdate"; ?></p>
                <p><?php echo "$nextappntdoc"; ?></p>
                <p><?php echo "$nextappntreg"; ?></p>
            </section>
        </div>

    </div>
</body>

</html>