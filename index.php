<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nebula Gaming | Home</title>
	<link rel="icon" href="http://nebulagaming.net/favicon.ico">

	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.css">
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<style style="text/css"></style>
</head>
<body background="stars.jpg";>
<section style="background-color:white;">
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    <a href="index.php"><img src="NebulaThinText.png" width="125" height="50" alt=""/></a></div>
    
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">Servers <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="rust.php">Rust</a> </li>
            <li><a href="#">Garry's Mod</a> </li>
            <li><a href="#">CS:GO</a> </li>
            <li><a href="#">Space Engineers</a> </li>
            <li role="separator" class="divider"></li>
			  <li><a href="servers.php">All Servers</a> </li>
          </ul>
	    </li>
       <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">Clans<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Robocraft</a> </li>
            <li role="separator" class="divider"></li>
			  <li><a href="#">All Clans</a> </li>
          </ul>
	    </li>
        <li><a href="staff.php">Staff</a> </li>
        <li><a href="https://sdonate.com/stores/NebulaGaming/index.php" target="_blank">Donate</a> </li>
        <li><a href="contact.php">Contact</a> </li>
        
      </ul>
      <div class="btn-group">
        <ul class="dropdown-menu">
          <li role="presentation" class="dropdown-header">Dropdown header 1</li>
          <li role="presentation">
            <label for="textfield">Text Field:</label>
            <input type="text" name="textfield" id="textfield">
          <a href="#">First Link</a></li>
          <li role="presentation" class="disabled"><a href="#">Disabled Link</a></li>
          <li role="presentation" class="divider"></li>
          <li role="presentation"><a href="#">Separated Link</a></li>
        </ul>
      </div>
      <form class="navbar-form navbar-right">
	  
<?php
if(isset($_SESSION['currentuser'])){
?>
        
		<span><font color="white">Hello <a href="profile.php"><?php echo $_SESSION['currentuser'];?></a>! </font>&nbsp;&nbsp;</span>
        <img src="/uploads/<?php echo $_SESSION['cur_pic'];?>" alt="" width="35" height="35" class="img-circle"/>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="logout.php">
        <button type="button" class="btn btn-danger">Log Out</button>
        </a>
		
<?php
} else {
?>

        <a href="login.php">
        <button type="button" class="btn btn-success">Login</button>
        </a>
        <a href="register.php">
        <button type="button" class="btn btn-primary">Register</button>
        </a> 
		
<?php
}
?>
        
      </form>
      <ul class="nav navbar-nav navbar-right">
      
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
</section>

<!-- HEADER -->
<header>
 <p>&nbsp;</p>
 <p>&nbsp;</p>
 <p>&nbsp;</p>
 <p>&nbsp;</p>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          
          <!--<img src="NovaNewWhole.png" width="50%" alt=""/>-->
          <br>
          <p class="text-center"><img src="NebulaTextAndLogo.png" width="75%" alt=""/></p>
		  <p>&nbsp;</p>
          <p class="text-center"><a class="btn btn-primary btn-lg" href="servers.php" role="button">Our Servers »</a> <a class="btn btn-primary btn-lg" href="#" role="button">Our Clans »</a> </p>
        </div>
      </div>
    </div>
  </section>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</header>
<!-- / HEADER --> 

<!--  SECTION-1 -->
<section>
  
  <!-- /container -->
  
  <div class="container">
   	<div class="row">
      <div class="col-lg-12 page-header text-center">
	    <h2><font color="white">OUR NETWORK</font></h2>
      </div>
    </div>
    
    <div class="row">
      <div class="col-xs-6 col-lg-4">
        <h3><font color="white">Game Servers</h3>
        <p>Nova Gaming Network is a community of game servers. Our newest hosted game is Rust. Do you have a game you would like us to host? Click below to see our game servers or go to the contact page to tell us what games you would like us to have!<br></p>
        <p><a class="btn btn-primary" href="servers.php">View Servers »</a></p>
      </div>
      <div class="col-xs-6 col-lg-4">
        <h3>Dedicated Staff</h3>
        <p>Our staff are always friendly and willing to help! Every server has its own staff dedicated to improve your player experience. We are always looking for dedicated players to help us out! Click below to see our staff and to apply for a position on one of out servers!</p>
        <p><a class="btn btn-primary" href="staff.php">Our Staff »</a></p>
      </div>
      <div class="col-xs-6 col-lg-4">
        <h3>Support</h3>
        <p> <em class="icon-desktop "></em>Need help? Don't worry, we've got you covered. Our friendly staff are always willing to answer questions. You can join our <a href="https://discord.gg/Zkqpr5W">Discord</a> and ask us or click below to send us a message about whatever you need!<br><br></p>
		<p><a class="btn btn-primary" href="contact.php">Get Support »</a></p>
      </div>
      <div class="col-xs-6 col-lg-4">
        <h3>Donation Store</h3>
        <p>Want to contribute to your favorite server and get in-game rewards? Our donation store is the place for you! We greatly appreciate any donation and would like to thank you for helping keep the servers running!<br><br></p>
        <p><a class="btn btn-primary" href="https://sdonate.com/stores/NebulaGaming/index.php">View Store »</a></p>
      </div>
      <div class="col-xs-6 col-lg-4">
        <h3>Great Community</h3>
        <p> <em class="icon-desktop "></em>Become part of an amazing community of friendly gamers. We are always accepting new players looking for others to have a good time with! Click below to join our steam group and become part of The Nebula Gaming Network!</p>
        <p><a class="btn btn-primary" href="http://steamcommunity.com/groups/nova-gaming-network">Steam Group »</a></p>
      </div>
      <div class="col-xs-6 col-lg-4">
        <h3>Nebula Groups And Clans</h3>
        <p>Nebula Gaming Network is not only a host of amazing game servers, we also have groups, guilds and clans in all sorts of games for you to join! If we don't have a group in the game you want just send us a message and suggest that we add your game to the list!</p>
        <p><a class="btn btn-primary" href="#">View Clans »</a></p>
      </div>
      <p>&nbsp;</p>
    </div>
  </div>
  <!-- / CONTAINER--> 
</section>
<p>&nbsp;</p>
<p>&nbsp;</p>

<section>
<div class="container">  
<div class="row">
    <div class="col-lg-12 page-header text-center">
      <h2>Community Links</h2>
    </div>
</div>
  <div class="row">
     <div class="col-lg-2 col-sm-2 text-center">
	 </div>
      <div class="col-lg-4 col-sm-4 text-center"><img class="img-circle" alt="140x140" style="width: 140px; height: 140px;" src="ts_logo.png" data-holder-rendered="true">
        <h3>TeamSpeak</h3>
		  <p>Join Our TeamSpeak Server at <strong>ts.nebulagaming.net</strong><br><br><br></p>
      </div>
      <div class="col-lg-4 col-sm-4 text-center"><a href="http://steamcommunity.com/groups/NebulaGamingNet"><img class="img-circle" alt="140x140" style="width: 140px; height: 140px;" src="steam_logo.png" data-holder-rendered="true"></a>
        <h3>Steam</h3>
        <p>Join Our Steam Group To Get<br>All Our Announcements and<br>To Get In Touch With The Communinty</p>
      <p>&nbsp;</p>
      </div>
  </div>
</div>
</section>

<!-- FOOTER -->
<p>&nbsp;</p>
<section>
<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p><br>Copyright © NebulaGamingNetwork. All rights reserved.<br><br></p>
      </div>
    </div>
  </div>
</footer>
</section>
<!-- / FOOTER --> 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script>  
<script src="js/bootstrap.js"></script>
</body>
</html>
