<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Nebula Gaming | Password Reset</title>

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
<p>&nbsp;</p>

<div class="container">
  <div class="row">
    <div class="col-lg-offset-3 col-xs-12 col-lg-6">
      <div class="jumbotron" style="background-color:#222;">
        <div class="row text-center">
        
<?php
  if(isset($_SESSION['currentuser'])){
?>
          <div class="text-center col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h2><font color="white">You Are Already Logged In</h2>
            <a href="logout.php">
            <button type="button" class="btn btn-danger btn-lg">Log Out</button>
            </a>
          </div> 
<?php
  } else {         
if (!isset($_POST['submit'])){
?>
         
          <div class="text-center col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h2>Forgot Password</h2>
          </div>
          <div class="text-center col-lg-12"> 
            <form action="forgot_pass.php" method="post" class="text-center" id="feedbackForm" role="form">
             <div class="form-group">
                <label for="name">Username</label>
                <input name="username" type="text" required class="form-control" id="name" form="feedbackForm" placeholder="Username">
                <span class="help-block" style="display: none;">Please enter your name.</span></div>
              <div class="form-group">
                <label for="email">E-Mail</label>
                <input name="email" type="email" required class="form-control" id="email" form="feedbackForm" placeholder="Email Address">
                <span class="help-block" style="display: none;">Please enter a valid e-mail address.</span></div>
              <span class="help-block" style="display: none;">Please enter a the security code.</span>
              <a href="contact.php">
              <button type="submit" id="submit" name="submit" class="btn btn-primary btn-lg" style=" margin-top: 10px;"> Send</button>
              </a>
            </form>
            <!-- END CONTACT FORM --> 
          </div>
          
<?php
} else {
	require_once("db_const.php");
	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	# check connection
	if ($mysqli->connect_errno) {
		echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
		exit();
	}
 
	$email = $_POST['email'];
	$username = $_POST['username'];
 
	$sql = "SELECT * from users WHERE email LIKE '{$email}' AND username LIKE '{$username}' LIMIT 1";
	$result = $mysqli->query($sql);
	if (!$result->num_rows == 1) {
		echo "<p>Invalid Username/Email Invalid</p>";
		echo '<p><a href="forgot_pass.php"><button type="button" class="btn btn-danger btn-lg">Back</button></a></p>';
	} else {
	
	while($row = $result->fetch_assoc()){
			$email = "{$row['email']}";
			$user = "{$row['username']}";
			$pass = "{$row['password']}";
	}
	$email_sender = "no-reply@novagamingnetwork.com";
	$name = "Nova Password";

	$to = $email;
	$subject = "Forgot Password";
	$headers = "From: {$name} <{$email_sender}> \n";

	if(mail ($to,$subject,"User Information:
	Username: " . $user . "
	Password: " . $pass,$headers)){
	echo "<p><br>An email with your password has been sent to <strong>$email</strong>.</p>";
	echo '<p><a href="login.php"><button type="button" class="btn btn-success btn-lg">Login</button></a></p>';}
	
}
}
}
?>
          
        </div>
      </div>
    </div>
  </div>
</div>
<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>Copyright © NebulaGamingNetwork. All rights reserved.</p>
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