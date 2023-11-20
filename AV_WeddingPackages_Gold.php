<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <title> Abram's Catering | Packages </title>
    <link rel="shortcut icon" type="x-icon" href="AV_logo.png">
    <meta charset="utf-8">
    <link rel="stylesheet" href="AV_WeddingP_Gold.css">
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


<div class="AV_image-container top-image">
  <img src="AV_Weddings_CS1.png" alt="" class="centered-image">
  <div class="text-overlay">
    <h1>Wedding Catering Packages</h1>
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

<div class="bottom-container">
  <div class="top-packages">
  <a href="AV_Packages.php" class="Packages">Silver Package</a>
    <a href="AV_WeddingPackages_Gold.php" class="Packages" id="active">Gold Package</a>
    <a href="AV_WeddingPackages_Diamond.php" class="Packages">Diamond Package</a>
    <a href="#" class="Packages">Customize Package</a>
  </div>

  <div class="center-packages">
    <h1>GOLD PACKAGE - VENUE EXCLUDED</h1>
    <a href="#" class="Guests">50 Guests - ₱58,000</a>
    <a href="#" class="Guests">100 Guests - ₱78,000</a>
  </div>

  <ul class="bottom-packages">
    <li><div class="title">Menu</div></li>
    <li><div class="title">VIP Table Setup</div></li>
    <li><div class="title">Guest Table Setup</div></li>
    <li><div class="title">Buffet Table Setup</div></li>
    <li><div class="title">Stage Table Setup</div></li>
    </ul>

    <div class="bottom-page">
    <a href="#" class="Quote">GET FORMAL QUOTE</a>
</div>

<div class="gold-packages package-row">
  <div class="package">
    <h2>GOLD PACKAGE - A</h2>
    <p>Venue Included</p>
    <a href="#" class="Guest">50 Guests - ₱217,000</a>
    <a href="#" class="Guest">100 Guests - ₱232,000</a>
    <h3>Venue & Accommodations</h3>
    <p>Use of Flor's Garden Main House & Swimming Pool (with 6 air-conditioned rooms, good for 22 pax)</p>
    <p>Two garden air-conditioned rooms good for 8 pax</p>
    <p>22 hours stay; check-in time 2 pm; check-out 12 pm</p>
    <p>Use of MIDDLE Garden for Reception</p>
  </div>

  <div class="package">
    <h2>GOLD PACKAGE - B</h2>
    <p>Venue Included</p>
    <a href="#" class="Guest">50 Guests - ₱232,000</a>
    <a href="#" class="Guest">100 Guests - ₱247,000</a>
    <h3>Venue & Accommodation</h3>
    <p>Use of Flor's Garden Main House & Swimming Pool (with 6 air-conditioned rooms, good for 22 pax)</p>
    <p>Two garden air-conditioned rooms (good for 8 pax)</p>
    <p>22 hours stay; Check-in time 2 PM; Check-out 12 PM</p>
    <p>Use of MAIN Garden for Reception</p>
  </div>
</div>

    <ul class="bottom-packages">
    <li><div class="title">Menu</div></li>
    <li><div class="title">VIP Table Setup</div></li>
    <li><div class="title">Guest Table Setup</div></li>
    <li><div class="title">Buffet Table Setup</div></li>
    <li><div class="title">Stage Table Setup</div></li>
  </ul>
     
    <ul class="bottom-packages center">
    <li><div class="title">Other Inclusions</div></li>
  <li><div class="title">FREEBIES (CHOOSE1)</div></li>
</ul>

  <div class="bottom-page">
    <a href="#" class="Quote">GET FORMAL QUOTE</a>
</div>
</div> 

</body>
</html>