<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Nebula Gaming | Rust</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">

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
        <li><a href="https://sdonate.com/stores/NebulaGaming/index.php" target="_blank">Donate</a>
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
  
<p>&nbsp;</p>
<p>&nbsp;</p>

<div class="container">
  <div class="row">
    <div class="col-lg-12 page-header text-center">
      <img src="Rust-Banner-2.gif" width="60%" height="" alt=""/>
    </div>
  </div>
  <div class="row">
      <div class="col-lg-12 text-center">

        
	  </div>
  </div>
  <div class="row">
    <div class="col-lg-6 col-md-6 text-center">
      <h3><font color="white"><strong>Features</strong></h3>
      <p>-3X Gather And Smelting<br>-Insta-Crafting<br>-Clans<br>-Starter Kits<br>-VIP Kits<br>-Teleportation<br>-Weekly Wipes<br>-Teamspeak Server<br></p>
    </div>
    <div class="col-lg-6 col-md-6 text-center">
      <h3><font color="white"><strong>Rules</strong></h3>
      <p>-No Griefing<br>-No Advertising<br>-No Hacking<br>-Be Respectful<br>-3 Layer External Wall Limit<br>-No Spamming Chat<br>-No Impersonating Staff<br>-Have Fun!<br></p>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6 col-md-6 text-center">
      <h3><font color="white"><strong>Server IP: rust.nebulagaming.net:28015</strong></h3>
    </div>
    <div class="col-lg-6 col-md-6  text-center">
      <h3><font color="white"><strong>TeamSpeak IP: ts.nebulagaming.net</strong></h3>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12 text-center">
		<font color="white"><a class="btn btn-primary btn-lg" href="#" role="button">Live Map</a> <a class="btn btn-primary btn-lg" href="https://rust-servers.net/server/112137/" target="_blank" role="button">Vote</a> <a class="btn btn-primary btn-lg" href="https://sdonate.com/stores/NebulaGaming/index.php" target="_blank" role="button">VIP Kits</a>
    </div>
    </div>

<!-- FOOTER -->

<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p><br>Copyright © NebulaGamingNetwork. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>
</div>
<!-- / FOOTER --> 
<script src="js/jquery-1.11.3.min.js"></script> 
<script src="js/bootstrap.js"></script>
</body>
</html>