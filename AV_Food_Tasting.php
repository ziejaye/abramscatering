<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <title> Abram's Catering | Food Tasting </title>

    <meta charset="utf-8">
    <link rel="stylesheet" href="AV_Abram's_Food_Tasting.css">
    <link rel="shortcut icon" type="x-icon" href="AV_logo.png">

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>  </head>
  <body>

  <div class="btn" onclick="myFunction(this)">
    <a href="#">
    <div class="bar1"></div>
    <div class="bar2"></div>
    <div class="bar3"></div>
    </a>
    </div>

    <nav class="sidebar">
      <div class="text">Abram's</div>
      <ul>  
        <input type="search" id="mySearch" onkeyup="myFunctiion()" placeholder="Search..                         ⌕" title="Type in a category">
        <li><a href="AV_BookMeeting.php">Book Meeting</a></li>
        <li><a href="#">Reservation</a></li>
        <li><a href="AV_Inquiries">Inquiries</a></li>
        <li><a href="AV_FoodTasting">Food Tasting</a></li>
    </li>
      </ul>

      <div class="administrator-container">
  <img src="User_Administrator.png" alt="Administrator Image" class="admin-image">
  <div class="container">
    <p class="admin-text">ADMINISTRATOR</p>
  </div>
</div>

<div class="logout-container">
  <button class="logout-button">Log Out → </button>
</div>

    </nav>
 
    <div class="menu-bar">
    <ul>
  <li> <a href="AV_Services.php"> Catering Services </a>
  <div class="sub-menu-1">
           <ul>
              <li><a href="AV_Services.php"> Wedding Catering Services </a></li>
              <li><a href="AV_DebutServices.php">Debut Catering Services</a></li>
              <li><a href="AV_BirthdayServices.php">Birthday Catering Services</a></li>
              <li><a href="AV_CorporateServices.php">Corporate Catering Services</a></li>
              <li><a href="AV_ChristeningServices.php">Christening Catering Services</a></li>
          </ul>
      </div>
  </li>

  <li> <a href="AV_Packages.php"> Catering Package </a>
    <div class="sub-menu-1">
           <ul>
              <li><a href="AV_Packages.php">Wedding Catering Package</a></li>
              <li><a href="AV_Packages.php">Debut Catering Package</a></li>
              <li><a href="AV_Packages.php">Birthday Catering Package</a></li>
              <li><a href="AV_Packages.php">Corporate Catering Package</a></li>
              <li><a href="AV_Packages.php">Christening Catering Package</a></li>
          </ul>
      </div>
</li>
  <li> <a href="AV_Event.php"> Event Styling </a>

  <div class="sub-menu-1">
           <ul>
           <li><a href="AV_Event.php">Wedding</a></li>
              <li><a href="AV_WeddingCeremony_Event_Styling.php">Wedding Ceremony</a></li>
              <li><a href="AV_Debut_Event_Styling.php">Debut</a></li>
              <li><a href="AV_BirthdayParty_Event_Styling.php">Birthday Party</a></li>
              <li><a href="AV_ChristeningParty_Event_Styling.php">Christening Party</a></li>
          </ul>
      </div>
      
</li>
  <li class="logo"><a href="AV_Home.php"> <img src="AV_logo.png"></a></li>
  <li><a href="AV_Venues.php"> Venue </a></li>
  <li><a href="AV_Food_Tasting.php"> Food Tasting </a></li>
  <li><a href="AV_Contact_Us.php"> Contact Us </a></li>
</ul>

</div>


<div class="container">
  <div class="column">
    <div class="image-container">
      <img src="East_Weddings.png" alt="Your Image">
      </div>
    </div>
    <div class="column">
        <div class="form-container">
          <h1 class="center">REGISTER FOR FREE</h1>

        <form action="Food_Tasting.php" method="post" class="registration-form">

        <div class="form-group">
          <input type="text" id="name" name="name" placeholder="Name:" required>
          <input type="number" id="guests" name="guests" placeholder="Number of Guests:" required>
        </div>

        <div class="form-group">
          <input type="tel" id="contact" name="contact" placeholder="Contact Number:" required>
          <select id="event" name="event" required>
            <option value="" disabled selected>Select Event Type:</option>
            <option value="wedding">Wedding</option>
            <option value="debut">Debut</option>
            <option value="birthday">Birthday</option>
            <option value="corporate">Corporate</option>
            <option value="christening">Christening</option>
            <!-- Add more options as needed -->
          </select>
        </div>

        <div class="form-group">
          <input type="email" id="email" name="email" placeholder="Email Address:" required>
          <select id="time" name="time" required>
            <option value="" disabled selected>Select Preferred Time:</option>
            <option value="morning">Morning</option>
            <option value="afternoon">Afternoon</option>
            <!-- Add more options as needed -->
          </select>
        </div>

        <div class="form-group">
          <input type="text" id="venue" name="venue" placeholder="Target Venue:" required>
        </div>

        <div class="form-group">
          <input type=date id="date" name="date"  required>
        </div>

        <div class="form-group center-bottom">
          <button type="register" name="register">Register</button>
        </div>
      </form>
    </div>
  </div>
</div>

    <script>

    function myFunction(x) {
        x.classList.toggle("change");
    }

    $('.btn').click(function(){
      $(this).toggleClass("click");
      $('.sidebar').toggleClass("show");
    });

      $('.feat-btn').click(function(){
        $('nav ul .feat-show').toggleClass("show");
        $('nav ul .first').toggleClass("rotate");
      });

      $('.serv-btn').click(function(){
        $('nav ul .serv-show').toggleClass("show1");
        $('nav ul .second').toggleClass("rotate");
      });

      $('nav ul li').click(function(){
        $(this).addClass("active").siblings().removeClass("active");
      });

      function myFunctiion() {
    // Declare variables
    var input, filter, ul, li, a, i;
    input = document.getElementById("mySearch");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myMenu");
    li = ul.getElementsByTagName("li");

    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}

    </script>

  </body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "abrams_food_tasting";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['register'])) {

$name = $_POST['name'];
$guests = $_POST['guests'];
$contact = $_POST['contact'];
$event = $_POST['event'];
$email = $_POST['email'];
$time = $_POST['time'];
$venue = $_POST['venue'];
$date = $_POST['date'];



$sql = "INSERT INTO food_tasting (Name, Guests, Contact, Event, Email, Time, Venue, Date)
        VALUES ('$name', $guests, '$contact', '$event', '$email', '$time', '$venue', '$date')";

if ($conn->query($sql) === TRUE) {
  ?>


  <script>
      alert ("Register Successfully!")
  </script>


  <?php

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


}
$conn->close();
?>
