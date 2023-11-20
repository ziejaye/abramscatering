<html lang="en" dir="ltr">
  <head>
  <title> Abram's Catering | Services </title>
    <link rel="shortcut icon" type="x-icon" href="AV_logo.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="AV_Christening_CS.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  </head>

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


      <div class="image-container top-image">
        <img src="AV_Christening_CS5.png" alt="">
        <div class="text-overlay">
          <h1> Christening Catering Services </h1> 
          <p> Embrace the Blessing of a Christening - Cherish the Moment with Our Exclusive Packages. Explore Today! </p> 
        </div>
      </div>


    <div class="container">
      <div class="image-container">
        <img src="AV_Weddings_silver_package.png" alt="">
        <div class="details">
          <h2> SILVER <span> PACKAGE </span></h2>
          <div class="more">
            <a href="#" class="learn-more"> LEARN MORE </a>
          </div>
        </div>
      </div>

      <div class="image-container">
        <img src="AV_Weddings_gold_package.png" alt="">
        <div class="details">
          <h2> GOLD <span> PACKAGE </span></h2>
          <div class="more">
            <a href="#" class="learn-more"> LEARN MORE </a>
          </div>
        </div>
      </div>

      <div class="image-container">
        <img src="AV_Weddings_diamond_package.png" alt="">
        <div class="details">
          <h2> DIAMOND <span> PACKAGE </span></h2>
          <div class="more">
            <a href="#" class="learn-more"> LEARN MORE </a>
          </div>
        </div>
      </div>

      <div class="image-container">
        <img src="AV_Weddings_customize_package.png" alt="">
        <div class="details">
          <h2> CUSTOMIZE YOUR <span> PACKAGE </span></h2>
          <div class="more">
            <a href="#" class="learn-more">LEARN MORE</a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>