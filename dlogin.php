<!DOCTYPE html>
<html>
  <head>
    <title>NewLife Hospitals-Doctor's login</title>
    <style>
      body {
        background-position: center;
        font-family: Georgia, "Times New Roman", Times, serif;
      }

      #d1 {
        float: left;
        height: 50px;
        width: 50px;
        margin-left: 10px;
        margin-top: 20px;
        background-color: white;
        border-radius: 50%;
        border-width: 0px;
        position: relative;
        cursor: pointer;
      }

      #d13 {
        height: 50px;
        margin-right: 50px;
        font-size: 22px;
        padding-top: 35px;
        padding-left: 75px;
      }

      #back {
        height: 50px;
        width: 50px;
        margin-top: 0px;
        margin-left: 0px;
        border-radius: 50%;
      }

      .login-container {
        width: 350px;
        margin: 0 auto;
        margin-top: 150px;
        padding: 20px;
        background-color: rgba(255, 255, 255, 0.7);
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        background-image: url("img10.jpg");
        background-repeat: no-repeat;
        background-size: cover;
      }

      h2 {
        text-align: center;
        color: #000000;
        margin-top: 5px;
      }

      input[type="text"],
      input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px 1px 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
        padding-right: 0px;

        opacity: 0.7;
      }

      input[type="submit"] {
        width: 100%;
        padding: 10px;
        border: none;
        background-color: rgba(24, 236, 127, 0.837);
        color: #fff;
        font-size: 16px;
        cursor: pointer;
        border-radius: 5px;
        font-family: Georgia, 'Times New Roman', Times, serif;
      }
    </style>
  </head>
  <body>
    <button id="d1" onclick="window.location.href='login.php'"><img id="back" src="backarrow.png" alt="Back to homepage"/></button>
    <div id="d13">Back to Login</div>
    <div class="login-container">
      <h2>Doctor's Login</h2>
      <form action="proc2.php" method="post">
        <input type="text" name="username" placeholder="  Username" />
        <input type="password" name="password" placeholder="  Password" />
        <input type="submit" value="Login" />
      </form>
    </div>
  </body>
</html>
