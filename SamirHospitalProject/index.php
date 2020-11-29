<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="img/favicon.png">

    <title>Samir Hospital | Login and Validation Page</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <!-- <link rel="stylesheet" type="text/css" href="css/login.css"> -->
    <style type="text/css">
      /* Bordered form */
      form {
        border: 3px solid #f1f1f1;
        padding-left: 20px;
        padding-right: 20px; 
      }

      /* Full-width inputs */
      input[type=text], input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
      }
      input[type=text], input[type=password]:hover{
        border-color: red;
      }

      /* Set a style for all buttons */
      button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        border-radius: 30px;
      }

      /* Add a hover effect for buttons */
      button:hover {
        font-size: 19px;
        font-weight: bold;
        background: #00cb82;
        border: none;
        min-width: 200px;

      }

      /* Center the avatar image inside this container */
      .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
        border-color: black;
        border-width: 
      }

      /* Avatar image */
      img.avatar {
        width: 40%;
        border-radius: 50%;
        max-width: 150px;
        max-height: 150px;
      }

      /* Add padding to containers */
      .container {
        padding: 16px;
      }

      /* The "Forgot password" text */
      span.password {
        float: right;
        padding-top: 16px;
      }

      /* Change styles for span and cancel button on extra small screens */
      @media screen and (max-width: 300px) {
        span.password {
          display: block;
          float: none;
        }
      }
    </style>
  </head>

  <body class="text-center">
    <center>
      <form action="usersignin.php" method="post">
        <div class="imgcontainer">
          <img src="img/avtaar.jpg" alt="Avatar" class="avatar">
        </div>

        <div class="container">
          <label for="uname"><font size = 5 color="red" face="Times New roman"><b>Username</b></font></label>
          <input type="text" placeholder="Enter Username" name="username" required>

          <label for="psw"><font size = 5 color="red" face="Times New roman"><b>Password</b></font></label>
          <input type="password" placeholder="Enter Password" name="user_password" required>

          <button type="submit" name='login' id="login">Login</button>
        </div>
      </form>
    </center>
    <?php 
      include 'usersignin.php'; 
    ?>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
