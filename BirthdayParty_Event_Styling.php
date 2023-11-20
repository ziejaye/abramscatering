<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <title> Abram's Catering | Event Styling </title>
    <link rel="shortcut icon" type="x-icon" href="logo.png">
    <meta charset="utf-8">
    <link rel="stylesheet" href="BirthdayParty_ES.css">
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
  <img src="BirthdayParty_ES4.png" alt="" class="centered-image">
  <div class="text-overlay">
    <h1> Birthday Party </h1>
    <p>Your love, your choice, your unforgettable day - discover our wedding packages that cater to every style, all designed with safety in mind.</p>
  </div>
</div>


<div class="select"> 
  <label for="cars" class="select1">Filter by:</label>
  <select name="1" id="cars">
    <option value="volvo"> Select Event Type </option>
    <option value="saab"> 1 </option>
    <option value="opel"> 2 </option>
    <option value="audi"> 3 </option>
  </select>

  <select name="2" id="cars">
    <option value="volvo"> Select Theme </option>
    <option value="saab"> 1 </option>
    <option value="opel"> 2 </option>
    <option value="audi"> 3 </option>
  </select>

  <select name="3" id="cars">
    <option value="volvo"> Select Color </option>
    <option value="saab"> 1 </option>
    <option value="opel"> 2 </option>
    <option value="audi"> 3 </option>
  </select>
</div> 


<div class="container">
<ul> 
<li> <div class="title" > Theme 1 </div> </li> 
<li> <div class="title" > Theme 2</div> </li> 
<li> <div class="title" > Theme 3</div> </li> 
<li> <div class="title" > Theme 4</div> </li> 
<li> <div class="title" > Theme 5</div> </li> 
<li> <div class="title" > Theme 6</div> </li> 
<li> <div class="title" > Theme 7</div> </li> 
<li> <div class="title" > Theme 8</div> </li> 
</ul> 
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