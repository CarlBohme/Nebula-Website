<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Nebula Gaming | Application</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">

</head>
<body background="stars.jpg";>

<!-- Nav Bar -->

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

<?php
  if(isset($_SESSION['currentuser'])){
?>
<?php
if (!isset($_POST['submit'])){
?>
<div class="row">
  <div class="col-lg-12 page-header text-center">
    <h2><font color="white">Requirements</h2>
      <p class="text-center"><strong>You Must Meet All Requirements Or You Will Be Denied</strong><br>
        <br>
        1: Must be at least 15 years old [No Exception]<br>
        2: Must be able to read and write fluently in English<br>
        3: Must Be frequently active on Discord and in-game<br>
        4: Know and abide by all the server rules<br>
        5: Must be rank Advanced on the server<br>
        6: If you have been denied, allow 15 days before re-applying<br>
        7: If you have been staff for us before, explain why<br>
        you should regain your role<br>
      </p>
    </div>
  </div>
<div class="container">
  <div class="row">
    <div class="col-lg-offset-3 col-xs-12 col-lg-6">
      <div class="jumbotron" style="background-color:#222;">
        <div class="row text-center">
          <div class="text-center col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h2><font color="white">Create Your Application</h2>
          </div>
          <div class="text-center col-lg-12"> 
            <form action="staffapp.php" method="post" class="text-center" id="staffappForm" role="form">
             <div class="form-group">
                <label for="server">Server</label>
                <input name="server" type="text" required class="form-control" id="server" form="staffappForm" placeholder="Server You Wish To Apply For" align="center">
              <span class="help-block" style="display: none;">Please enter The Server.</span></div>
              <div class="form-group">
                <label for="MC_User">Minecraft Username</label>
                <input name="MC_User" type="text" required class="form-control" id="MC_User" form="staffappForm" placeholder="MInecraft Username">
              <span class="help-block" style="display: none;">Please enter your MC Username.</span></div>
              <div class="form-group">
                <label for="name">First Name</label>
                <input name="name" type="text" required class="form-control" id="name" form="staffappForm" placeholder="First Name" value="<?php echo $_SESSION['cur_first_name']." ".$_SESSION['cur_last_name']?>" readonly>
              <span class="help-block" style="display: none;">Please enter your name.</span></div>
              <div class="form-group">
                <label for="age">Age</label>
                <input name="age" type="text" required class="form-control" id="age" form="staffappForm" placeholder="Age">
              <span class="help-block" style="display: none;">Please enter your name.</span></div>
              <div class="form-group">
                <label for="email">E-Mail</label>
                <input name="email" type="email" required class="form-control" id="email" form="staffappForm" placeholder="Email Address" value="<?php echo $_SESSION['cur_email']?>" readonly>
                <span class="help-block" style="display: none;">Please enter a valid e-mail address.</span></div>
              <div class="form-group">
                <label for="timeplayed">How Long Have You Been Playing On Our Server?</label>
                <input name="timeplayed" type="text" required class="form-control" id="timeplayed" form="staffappForm" placeholder="How long have you played on our server?">
              <span class="help-block" style="display: none;">Please enter how long you have been playing.</span></div>
              <div class="form-group">
                <label for="server">Will you be active on both the server and discord?</label>
                <input name="active" type="text" required class="form-control" id="active" form="staffappForm" placeholder="Will you be active?">
              <span class="help-block" style="display: none;">Please enter your name.</span></div>
              <div class="form-group">
                <label for="aboutyou">Tell us a bit about yourself:</label>
                <textarea name="aboutyou" cols="100" rows="10" required class="form-control" id="aboutyou" form="staffappForm" placeholder="A little about yourself"></textarea>
              <span class="help-block" style="display: none;">Please enter a message.</span></div>
              <div class="form-group">
                <label for="aboutyou">Why should we choose you over the other applicants?</label>
                <textarea name="whyyou" cols="100" rows="10" required class="form-control" id="whyyou" form="staffappForm" placeholder="Why should we choose you?"></textarea>
              <span class="help-block" style="display: none;">Please enter a message.</span></div>
              <div class="form-group">
                <label for="aboutyou">Why do you want to become server staff?</label>
                <textarea name="whystaff" cols="100" rows="10" required class="form-control" id="whystaff" form="staffappForm" placeholder="Why do you want to be server staff?"></textarea>
              <span class="help-block" style="display: none;">Please enter a message.</span></div>
              <span class="help-block" style="display: none;">Please enter a the security code.</span>
              <a href="staffapp.php">
              <button type="submit" id="submit" name="submit" class="btn btn-primary btn-lg" style=" margin-top: 10px;"> Send</button>
              </a>
            </form>
            <!-- END CONTACT FORM --> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Creates mail -->
<?php
  } else {

$server = $_POST['server'];
$mcuser = $_POST['MC_User'];
$name = $_POST['name'];
$email = $_POST['email'];
$timeplayed = $_POST['timeplayed'];
$active = $_POST['active'];
$aboutyou = $_POST['aboutyou'];
$whyyou = $_POST['whyyou'];
$whystaff = $_POST['whystaff'];
$age = $_POST['age'];

$to = "support@nebulagaming.net";
$subject = "Staff Application";

mail ($to,$subject,"Website Username: " . $_SESSION['currentuser'] . "Minecraft Username: " . $mcuser . "
Server: " . $server  . "
First Name: " . $name . "
Age: " . $age . "
Email: " . $email . "
Time Played: " . $timeplayed . "
Will Be Active: " . $active . "
About Them:: " . $aboutyou . "
Why Them: " . $whyyou . "
Why They Want Staff: " . $whystaff);
?>
<div class="container">
  <div class="row">
    <div class="col-lg-offset-3 col-xs-12 col-lg-6">
      <div class="jumbotron" style="background-color:#222;">
        <div class="row text-center">
          <div class="text-center col-xs-12 col-sm-12 col-md-12 col-lg-12">			
			<div class="text-center col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <h2><font color="white">Your Application Has Been Submitted</h2>
              <a href="index.php">
              <button type="button" class="btn btn-info btn-lg">Home</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
}
?>

<?php
} else {
?>
<div class="container">
  <div class="row">
    <div class="col-lg-offset-3 col-xs-12 col-lg-6">
      <div class="jumbotron" style="background-color:#222;">
        <div class="row text-center">
          <div class="text-center col-xs-12 col-sm-12 col-md-12 col-lg-12">			
			<div class="text-center col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <h2><font color="white">You Must Be Logged In To Apply For Staff</h2>
              <a href="login.php">
              <button type="button" class="btn btn-success btn-lg">Login</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
  }
?>
            
<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p><font color="white">Copyright © NebulaGamingNetwork. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>
<!-- / FOOTER --> 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script> 
<script src="js/bootstrap.js"></script>
</body>
</html>
