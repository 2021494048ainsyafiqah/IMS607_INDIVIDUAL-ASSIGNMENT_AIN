<?php
include "db_conn.php";
?>

<!DOCTYPE html>
<html>
<head>
<title>ShutterVerse Club (SVC)</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Cascadia Code", sans-serif}
</style>
<!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-grey w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <center><img src="photos/svc logo.jpg" style="width:60%;" class="w3-round"><br><br></center>
    <center><h4><b>ShutterVerse Club (SVC)</b></h4></center>
    <center><p class="w3-text-white">UiTM Cawangan Kelantan</p></center>
  </div>
  <div class="w3-bar-block">
    <b><a href="#home" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-th-list fa-fw w3-margin-right"></i>Home</a></b>
    <b><a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-heart fa-fw w3-margin-right"></i>About SVC</a></b>
	<b><a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-thumbs-up fa-fw w3-margin-right"></i>Skills Target</a></b>
	<b><a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw w3-margin-right"></i>Committee Members</a></b>
	<b><a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>SVC Admin List</a></b>
	<b><a href="#activity" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-camera fa-fw w3-margin-right"></i>Activities</a></b> 
    <b><a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>Contact</a></b>
	<b><a href="admin/index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-th-large fa-fw w3-margin-right"></i>Administrator</a></b>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="portfolio">
    <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1><b><center>Welcome to ShutterVerse Club (SVC)</b></h1></center>
    <div class="w3-section w3-bottombar w3-padding-14"> 
    </div>
    </div>
  </header>
  
  <!-- First Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="photos/photo 1.jpg" style="width:100%" class="w3-hover-opacity">
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="photos/photo 2.jpg" style="width:100%" class="w3-hover-opacity">
    </div>
    <div class="w3-third w3-container">
      <img src="photos/photo 3.jpg" style="width:100%" class="w3-hover-opacity">
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="photos/photo 4.jpg" style="width:100%" class="w3-hover-opacity">
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="photos/photo 5.jpg" style="width:100%" class="w3-hover-opacity">
    </div>
    <div class="w3-third w3-container">
      <img src="photos/photo 6.jpg" style="width:100%" class="w3-hover-opacity">
    </div>
  </div>

  <!-- About SVC Section --> 
  <div class="w3-container w3-padding-large" style="margin-bottom:32px">
    <h4><b><center>About ShutterVerse Club (SVC)</b></h4></center>
    <p><center>Welcome to our photographer's club, where creativity and passion unite behind the lens! Established with the aim of fostering a vibrant community of shutterbugs, our club provides a supportive space for photographers of all levels to share their love for visual storytelling. Whether you're a seasoned professional or just starting on your photographic journey, our club offers a collaborative environment where members can exchange ideas, participate in photo walks, attend workshops, and showcase their work. Join us in capturing the beauty of the world and forging lasting connections with like-minded individuals who share a common fascination for the art of photography. Together, let's frame moments that last a lifetime!</p></center>
	<div class="w3-section w3-bottombar w3-padding-10"></div>
	
    <!-- Skills Target Section --> 
	<h4><center><b>Skills Target</center></b></h4>
    <p>Photography</p>
    <div class="w3-grey">
      <div class="w3-container w3-dark-grey w3-padding w3-center" style="width:95%">95%</div>
    </div>
    <p>Web Design</p>
    <div class="w3-grey">
      <div class="w3-container w3-dark-grey w3-padding w3-center" style="width:90%">90%</div>
    </div>
    <p>Photoshop</p>
    <div class="w3-grey">
      <div class="w3-container w3-dark-grey w3-padding w3-center" style="width:85%">85%</div>
    </div>
	<p>
	<div class="w3-section w3-bottombar w3-padding-10"></div>
  
  <!-- Top Committees Section -->
  <p><h4><center><b>Committee Members<center></b></h4></p>
  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Ain</div>
        <img src="photos/com 4.jpg" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Rifqi</div>
        <img src="photos/com 2.jpg" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Amalin</div>
        <img src="photos/com 3.jpg" alt="House" style="width:100%">
      </div>
    </div>
	<div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Alia</div>
        <img src="photos/com 1.jpg" alt="House" style="width:100%">
      </div>
    </div>
	<div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Braim</div>
        <img src="photos/com 5.jpg" alt="House" style="width:100%">
      </div>
    </div>
	<div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Izzah</div>
        <img src="photos/com 6.jpg" alt="House" style="width:100%">
      </div>
    </div>
	<div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Lis</div>
        <img src="photos/com 7.jpg" alt="House" style="width:100%">
      </div>
    </div>
	<div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Amin</div>
        <img src="photos/com 8.jpg" alt="House" style="width:100%">
      </div>
    </div>
	<div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Hakim</div>
        <img src="photos/com 9.jpg" alt="House" style="width:100%">
      </div>
    </div>
	<div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Hanun</div>
        <img src="photos/com 10.jpg" alt="House" style="width:100%">
      </div>
    </div>
	<div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Ikmal</div>
        <img src="photos/com 11.jpg" alt="House" style="width:100%">
      </div>
    </div>
	<div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Qilah</div>
        <img src="photos/com 12.jpg" alt="House" style="width:100%">
      </div>
    </div>
	<div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Muzakkir</div>
        <img src="photos/com 13.jpg" alt="House" style="width:100%">
      </div>
    </div>
	<div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Nuwai</div>
        <img src="photos/com 14.jpg" alt="House" style="width:100%">
      </div>
    </div>
	<div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Ismail</div>
        <img src="photos/com 15.jpg" alt="House" style="width:100%">
      </div>
    </div>
	<div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Yasmin</div>
        <img src="photos/com 16.jpg" alt="House" style="width:100%">
      </div>
    </div>
	<div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Rafiq</div>
        <img src="photos/com 17.jpg" alt="House" style="width:100%">
      </div>
    </div>
	<div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Shafiq</div>
        <img src="photos/com 18.jpg" alt="House" style="width:100%">
      </div>
    </div>
	<div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Shumi</div>
        <img src="photos/com 19.jpg" alt="House" style="width:100%">
      </div>
    </div>
	<div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Amal</div>
        <img src="photos/com 20.jpg" alt="House" style="width:100%">
      </div>
    </div>
  </div>
 
  <div class="w3-section w3-bottombar w3-padding-10"></div>
  <div class="w3-container w3-padding-large" style="margin-bottom:32px">
	<center><h4><b>ShutterVerse Club Admin List</h4></b></center>
  <p><?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Gender</th>
        </tr>
      </thead>
      <tbody>
	 
        <?php
        $sql = "SELECT * FROM `members`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["first_name"] ?></td>
            <td><?php echo $row["last_name"] ?></td>
            <td><?php echo $row["gender"] ?></td>
          </tr>
        <?php
        }
        ?></p>
      </tbody>
    </table>
  </div>
  <div class="w3-section w3-bottombar w3-padding-10"></div>
  
  <!-- Activities Section -->
  <!-- First Photo Grid-->
  <h4><b><center>Activities</b></h4></center>
  <p><div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="photos/act 1.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <center><p><b>Workshops and Tutorials</b></p>
        <p>SVC conduct workshops on various photography techniques, equipment usage, and post-processing skills. SVC also invite experienced photographers and industry professionals as guest speakers.</p>
	  </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="photos/act 2.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <center><p><b>Community Outreach</b></p>
        <p>SVC use photography as a means to contribute to the community. This could involve volunteering to document local events, working with charities, or capturing the beauty of a specific area.</p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="photos/act 3.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <center><p><b>Photography Tours</b></p>
        <p>SVC always plan group trips to pictures que locations, providing opportunities for members to capture unique landscapes and scenes. This activity can be a fantastic way to enhance your photography skills.</p>
      </div>
    </div>
  </div></p>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="photos/act 4.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <center><p><b>Exhibitions and Galleries</b></p>
        <p>SVC always arrange for exhibitions or gallery spaces to showcase the club members' best work, providing them with a platform to display their talent to a broader audience. This activity will be organize every month.</p>
	  </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="photos/act 5.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <center><p><b>Theme Photo Contests</b></p>
        <p>SVC host monthly or quarterly themed photo contests to encourage creativity. Themes could range from seasons and emotions to abstract concepts. Offer small prizes for the winners.</p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="photos/act 6.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <center><p><b>Photography Challenges</b></p>
        <p>SVC set up weekly or monthly photography challenges with specific rules or constraints. This could include using a particular lens, shooting in black and white, or capturing a specific emotion.</p>
      </div>
    </div>
  </div>
  <div class="w3-section w3-bottombar w3-padding-10"></div>
	
  <!-- Contact Section -->
  <p><div class="w3-container w3-padding-large w3-grey"></p>
    <center><h4 id="contact"><b>Contact Us</b></h4></center>
    <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
        <p>shutterverseclub@email.com</p>
      </div>
      <div class="w3-third w3-black">
        <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>
        <p>UiTM Machang, Kelantan</p>
      </div>
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
        <p>03-36748950</p>
      </div>
    </div>
    <hr class="w3-opacity">
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <button type="submit" class="w3-button w3-black w3-margin-bottom"><i class="fa fa-paper-plane w3-margin-right"></i>Send Message</button>
    </form>
  </div>
  <div class="w3-section w3-bottombar w3-padding-10"></div>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
