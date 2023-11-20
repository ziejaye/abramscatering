<!DOCTYPE html>
<html lang="en">
  <head>
  <title> Abram's Catering | Log In </title>
    <link rel="shortcut icon" type="x-icon" href="AV_logo.png">
    <title> Abram's Catering </title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="AV_login.css" />
    <link rel="shortcut icon" type="x-icon" href="AV_logo.png">
  </head>
  <body>
    <section class="wrapper">












      <div class="form signup">
        <header>Sign up</header>
        <form action="login.php" method="post">
          <input type="text" name="fullname" placeholder="Full name" required />
          <input type="text" name="email" placeholder="Email address" required />
          <input type="password" name="password" placeholder="Password" required />
          <div class="checkbox">
            <input type="checkbox" id="signupCheck" />
            <label for="signupCheck">I accept all terms & conditions</label>
          </div>
          <input type="submit" name="register" value="Sign up" />
        </form>
      </div>










      <div class="form login">
        <header>Login</header>
        <form action="login.php" method="post">
          <input type="text" name="email" placeholder="Email address" required />
          <input type="password" name="password" placeholder="Password" required />
          <a href="#">Forgot password?</a>
          <input type="submit" name="login" value="Login" />
        </form>
      </div>
      <script>
        const wrapper = document.querySelector(".wrapper"),
          signupHeader = document.querySelector(".signup header"),
          loginHeader = document.querySelector(".login header");
        loginHeader.addEventListener("click", () => {
          wrapper.classList.add("active");
        });
        signupHeader.addEventListener("click", () => {
          wrapper.classList.remove("active");
        });
      </script>
    </section>
  </body>
</html>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbase = "abrams_login";


$conn = new mysqli($servername, $username, $password, $dbase);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if (isset($_POST['register'])) {
  $fullname = $_POST['fullname'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $insertSql = "INSERT INTO login (Full_Name, Email_Address, Password, Position) VALUES ('$fullname', '$email', '$password', 'customer')";


  if ($conn->query($insertSql) === TRUE) {
      echo '<script>alert("Registration successful!");</script>';
  } else {
      echo "Error: " . $insertSql . "<br>" . $conn->error;
  }
}


if (isset($_POST['login'])) {
  $username = $_POST['email'];
  $password = $_POST['password'];


  $sql = "SELECT * FROM login WHERE Email_Address = '$username' AND Password = '$password'";
  $result = $conn->query($sql);


  if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $pos = $row['Position'];


      if($pos == "admin"){
          ?>


          <script>
              alert ("Welcome administrator!")
          </script>


          <?php


          header("refresh:0; url=Home.php");
      }else if($pos == "customer"){
          ?>


          <script>
              alert ("Welcome customer!")
          </script>


          <?php


          header("refresh:0; url=Home.php");
      }
  }else{
    ?>


    <script>
        alert ("Invalid username/password!")
    </script>


    <?php


    header("refresh:0; url=login.php");
  }




}




?>





