<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Abram's_Contact_Us.css">
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
        <li><a href="AV_Reservation.php">Reservation</a></li>
        <li><a href="AV_Inquiries.php">Inquiries</a></li>
        <li><a href="AV_FoodTasting.php">Food Tasting</a></li>
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
  <li> <a href="Services.php"> Catering Services </a>
  <div class="sub-menu-1">
           <ul>
              <li><a href="Services.php"> Wedding Catering Services </a></li>
              <li><a href="DebutServices.php">Debut Catering Services</a></li>
              <li><a href="BirthdayServices.php">Birthday Catering Services</a></li>
              <li><a href="CorporateServices.php">Corporate Catering Services</a></li>
              <li><a href="ChristeningServices.php">Christening Catering Services</a></li>
          </ul>
      </div>
  </li>

  <li> <a href="Packages.php"> Catering Package </a>
    <div class="sub-menu-1">
           <ul>
              <li><a href="Packages.php">Wedding Catering Package</a></li>
              <li><a href="Packages.php">Debut Catering Package</a></li>
              <li><a href="Packages.php">Birthday Catering Package</a></li>
              <li><a href="Packages.php">Corporate Catering Package</a></li>
              <li><a href="Packages.php">Christening Catering Package</a></li>
          </ul>
      </div>
</li>
  <li> <a href="Event.php"> Event Styling </a>

  <div class="sub-menu-1">
           <ul>
           <li><a href="Event.php">Wedding</a></li>
              <li><a href="WeddingCeremony_Event_Styling.php">Wedding Ceremony</a></li>
              <li><a href="Debut_Event_Styling.php">Debut</a></li>
              <li><a href="BirthdayParty_Event_Styling.php">Birthday Party</a></li>
              <li><a href="ChristeningParty_Event_Styling.php">Christening Party</a></li>
          </ul>
      </div>
      
</li>
  <li class="logo"><a href="Home.php"> <img src="logo.png"></a></li>
  <li><a href="Venues.php"> Venue </a></li>
  <li><a href="Food_Tasting.php"> Food Tasting </a></li>
  <li><a href="Contact_Us.php"> Contact Us </a></li>
</ul>

</div>

<div class="image-container top-image">
  <img src="Contact_Us.png" alt="" class="centered-image">
  <div class="text-overlay">
    <h1> GET IN TOUCH </h1>
    <p> Please feel free to contact us anytime. </p>
    <P> 09286201627 | abrams.eventscatering@gmail.com | Facebook: https://www.facebook.com/abramseventscatering </p>
  </div>
</div>

<div class="container">
  <div class="column">
    <div class="form-container">
      <h1 class="center"> CONTACT US</h1>
      <form action="Contact_Us.php" method="post" class="contact_us-form">

        <div class="form-group row">
          <div class="input-center left">
            <input type="text" id="name" name="name" placeholder="Name:" required>
            <input type="tel" id="contact" name="contact" placeholder="Contact Number:" required>
            <input type="email" id="email" name="email" placeholder="Email Address:" required>
          </div>
         
          <div class="input-center middle">
            <input type="text" id="subject" name="subject" placeholder="Subject" required>

            <select id="event" name="event" required>
              <option value="" disabled selected>Type of Event:</option>
              <option value="wedding">Wedding</option>
              <option value="debut">Debut</option>
              <option value="birthday">Birthday</option>
              <option value="corporate">Corporate</option>
              <option value="christening">Christening</option>
              <!-- Add more options as needed -->
            </select>
            <input type="date" id="date" name="date"  required>
          </div>
         
          <div class="input-center right">
            <textarea id="message" name="message" rows="4" placeholder="Message" required></textarea>
          </div>
        </div>

        <div class="form-group center-bottom">
          <button type="send" name="send">Send</button>
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
$dbname = "abrams_contact_us";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['send'])) {

$name = $_POST['name'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$event = $_POST['event'];
$date = $_POST['date'];
$message = $_POST['message'];



$sql = "INSERT INTO contact_us (Name, Contact, Email, Subject, Event, Date, Message)
        VALUES ('$name', $contact, '$email', '$subject', '$event', '$date', '$message')";

if ($conn->query($sql) === TRUE) {
  ?>


  <script>
      alert ("Send Successfully!")
  </script>


  <?php

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


}
$conn->close();
?>

