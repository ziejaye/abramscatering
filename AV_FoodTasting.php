<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "abrams_food_tasting";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$search = ''; // Initialize the search variable

if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $sql = "SELECT * FROM food_tasting 
            WHERE Name LIKE '%$search%' 
            OR Guests LIKE '%$search%' 
            OR Contact LIKE '%$search%' 
            OR Event LIKE '%$search%' 
            OR Email LIKE '%$search%' 
            OR Time LIKE '%$search%' 
            OR Venue LIKE '%$search%' 
            OR Date LIKE '%$search%'";
} else {
    $sql = "SELECT * FROM food_tasting";
}

$updateMessage = $deleteMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $updatedName = $_POST['updatedName'];
        $updatedGuest = $_POST['updatedGuest'];
        $updatedContact = $_POST['updatedContact'];
        $updatedEvent = $_POST['updatedEvent'];
        $updatedEmail = $_POST['updatedEmail'];
        $updatedTime = $_POST['updatedTime'];
        $updatedVenue = $_POST['updatedVenue'];
        $updatedDate = $_POST['updatedDate'];

        $updateSql = "UPDATE food_tasting SET 
                        Name='$updatedName', 
                        Guests='$updatedGuest', 
                        Contact='$updatedContact', 
                        Event='$updatedEvent', 
                        Email='$updatedEmail', 
                        Time='$updatedTime', 
                        Venue='$updatedVenue', 
                        Date='$updatedDate' 
                        WHERE id=$id";

        if ($conn->query($updateSql) === TRUE) {
            $updateMessage = "Record updated successfully";
        } else {
            $updateMessage = "Error updating record: " . $conn->error;
        }
    }

    if (isset($_POST['delete'])) {
        $id = $_POST['id'];

        $deleteSql = "DELETE FROM food_tasting WHERE id=$id";

        if ($conn->query($deleteSql) === TRUE) {
            $deleteMessage = "Record deleted successfully";
        } else {
            $deleteMessage = "Error deleting record: " . $conn->error;
        }
    }
}

$result = $conn->query($sql);
?>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title> Abram's Catering | Food Tasting </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="AV_FoodTasting.css">
    <link rel="shortcut icon" type="x-icon" href="AV_logo.png">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>  
    <script>
        // Check if the user is logged in
        var isLoggedIn = <?php echo isset($_SESSION['admin']) && $_SESSION['admin'] == true ? 'true' : 'false'; ?>;
        if (isLoggedIn) {
            // If logged in, prevent going back to the login page
            history.pushState(null, null, location.href);
            window.addEventListener('popstate', function () {
                history.pushState(null, null, location.href);
            });
        }
    </script>
  </head>
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
<a href="logout.php"> <button class="logout-button"> Log Out → </button> </a>
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

<form method="get" action="">
    <input type="text" id="search" name="search" value="<?php echo $search; ?>">
    <input type="submit" id="Sbutton" value="Search">
    <?php if (!empty($search)) : ?>
        <input type="button" id="Sbutton" value="Clear" onclick="clearSearch()">
    <?php endif; ?>
</form>

<?php
if ($result->num_rows > 0) {
    echo "
    <table>
    <tr>
    <th>Name</th>
    <th>Guests</th>
    <th>Contact</th>
    <th>Event</th>
    <th>Email</th>
    <th>Time</th>
    <th>Venue</th>
    <th>Date</th>
    <th>Action</th>
    </tr>";

    while($row = $result->fetch_assoc()) {
        echo "
        <tr>
        <td>".$row["Name"]."</td>
        <td>".$row["Guests"]."</td>
        <td>".$row["Contact"]."</td>
        <td>".$row["Event"]."</td>
        <td>".$row["Email"]."</td>
        <td>".$row["Time"]."</td>
        <td>".$row["Venue"]."</td>
        <td>".$row["Date"]."</td>
        <td>
            <button onclick='showUpdateForm(".$row["ID"].", this)'>Update</button>
            <form style='display: inline;' method='post' onsubmit='return confirmDelete(\"Are you sure?\");'>
                <input type='hidden' name='id' value='".$row["ID"]."'>
                <input type='submit' name='delete' value='Delete'>
            </form>
        </td>
        </tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}
?>

<!-- Update Form -->
<div id="updateForm" style="display: none;">
    <h2>Update Record</h2>
    <form method="post">
        <input type="hidden" id="updateId" name="id">
        Name: <input type="text" id="updateName" name="updatedName" required><br>
        Guest: <input type="text" id="updateGuest" name="updatedGuest" required><br>
        Contact: <input type="text" id="updateContact" name="updatedContact" required><br>
        Event: <input type="text" id="updateEvent" name="updatedEvent" required><br>
        Email: <input type="text" id="updateEmail" name="updatedEmail" required><br>
        Time: <input type="text" id="updateTime" name="updatedTime" required><br>
        Venue: <input type="text" id="updateVenue" name="updatedVenue" required><br>
        Date: <input type="text" id="updateDate" name="updatedDate" required><br>
        <input type="submit" name="update" value="Update">
        <button type="button" onclick="hideUpdateForm()">Cancel</button>
    </form>
</div>

<script>
    function showUpdateForm(id, button) {
        var row = button.parentNode.parentNode;

        document.getElementById('updateId').value = id;

        var name = row.cells[0].innerText;
        var guest = row.cells[1].innerText;
        var contact = row.cells[2].innerText;
        var event = row.cells[3].innerText;
        var email = row.cells[4].innerText;
        var time = row.cells[5].innerText;
        var venue = row.cells[6].innerText;
        var date = row.cells[7].innerText;

        document.getElementById('updateName').value = name;
        document.getElementById('updateGuest').value = guest;
        document.getElementById('updateContact').value = contact;
        document.getElementById('updateEvent').value = event;
        document.getElementById('updateEmail').value = email;
        document.getElementById('updateTime').value = time;
        document.getElementById('updateVenue').value = venue;
        document.getElementById('updateDate').value = date;

        document.getElementById('updateForm').style.display = 'block';
    }

    function hideUpdateForm() {
        document.getElementById('updateForm').style.display = 'none';
    }

    function confirmDelete(message) {
        return confirm(message);
    }

    function clearSearch() {
        document.getElementById('search').value = '';
        document.forms[0].submit(); // Submit the form
    }

    // Display success or error messages
    window.onload = function () {
        var updateMessage = '<?php echo $updateMessage; ?>';
        var deleteMessage = '<?php echo $deleteMessage; ?>';

        if (updateMessage !== "") {
            alert(updateMessage);
        }

        if (deleteMessage !== "") {
            alert(deleteMessage);
        }
    };
</script>

<?php
$conn->close();
?>

</body>
</html>