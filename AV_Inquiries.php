<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "abrams_contact_us";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$updateMessage = $deleteMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $updatedName = $_POST['updatedName'];
        $updatedContact = $_POST['updatedContact'];
        $updatedEmail = $_POST['updatedEmail'];
        $updatedSubject = $_POST['updatedSubject'];
        $updatedEvent = $_POST['updatedEvent'];
        $updatedDate = $_POST['updatedDate'];
        $updatedMessage = $_POST['updatedMessage'];

        $updateSql = "UPDATE contact_us SET 
                        Name='$updatedName', 
                        Contact='$updatedContact', 
                        Email='$updatedEmail', 
                        Subject='$updatedSubject', 
                        Event='$updatedEvent', 
                        Date='$updatedDate', 
                        Message='$updatedMessage' 
                        WHERE id=$id";

        if ($conn->query($updateSql) === TRUE) {
            $updateMessage = "Record updated successfully";
        } else {
            $updateMessage = "Error updating record: " . $conn->error;
        }
    }

    if (isset($_POST['delete'])) {
        $id = $_POST['id'];

        $deleteSql = "DELETE FROM contact_us WHERE id=$id";

        if ($conn->query($deleteSql) === TRUE) {
            $deleteMessage = "Record deleted successfully";
        } else {
            $deleteMessage = "Error deleting record: " . $conn->error;
        }
    }
}

$search = '';

if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $sql = "SELECT * FROM contact_us 
            WHERE ID LIKE '%$search%' 
            OR Name LIKE '%$search%' 
            OR Contact LIKE '%$search%' 
            OR Email LIKE '%$search%' 
            OR Subject LIKE '%$search%' 
            OR Event LIKE '%$search%' 
            OR Date LIKE '%$search%'";
} else {
    $sql = "SELECT * FROM contact_us";
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
    <title> Abram's Catering | Inquiries </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="AV_Inquiries.css">
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
    <button type="submit" id="Sbutton">Search</button>
    <?php if (!empty($search)) : ?>
        <button type="button" id="Sbutton" onclick="clearSearch()">Clear</button>
    <?php endif; ?>
</form>

<?php
if ($result->num_rows > 0) {
    echo "
    <table>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Contact</th>
    <th>Email</th>
    <th>Subject</th>
    <th>Event</th>
    <th>Date</th>
    <th>Message</th>
    <th>Action</th>
    </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "
        <tr>
        <td>".$row["ID"]."</td>
        <td>".$row["Name"]."</td>
        <td>".$row["Contact"]."</td>
        <td>".$row["Email"]."</td>
        <td>".$row["Subject"]."</td>
        <td>".$row["Event"]."</td>
        <td>".$row["Date"]."</td>
        <td>".$row["Message"]."</td>
        <td>
            <button onclick='showUpdateForm(".$row["ID"].")'>Update</button>
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
        Contact: <input type="text" id="updateContact" name="updatedContact" required><br>
        Email: <input type="text" id="updateEmail" name="updatedEmail" required><br>
        Subject: <input type="text" id="updateSubject" name="updatedSubject" required><br>
        Event: <input type="text" id="updateEvent" name="updatedEvent" required><br>
        Date: <input type="text" id="updateDate" name="updatedDate" required><br>
        Message: <input type="text" id="updateMessage" name="updatedMessage" required><br>
        <input type="submit" name="update" value="Update">
        <input type="button" onclick="hideUpdateForm()">Cancel</button>
    </form>
</div>

<script>
    function showUpdateForm(id) {
        window.location.href = '?action=update&id=' + id;
    }

    function hideUpdateForm() {
        window.location.href = '?';
    }

    function confirmDelete(message) {
        return confirm(message);
    }

    function clearSearch() {
        window.location.href = '?';
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