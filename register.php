<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Nebula Gaming | Register</title>

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
            <h2><font color="white">You Already Have An Account</h2>
            <a href="logout.php">
            <button type="button" class="btn btn-danger">Log Out</button>
            </a>
          </div> 
<?php
} else {
	require_once("db_const.php");
	if (!isset($_POST['submit'])) {
	?>	<!-- The HTML registration form -->
			 
			  <div class="text-center col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h2><font color="white">Create An Account</h2>
			  </div>
			  <div class="text-center col-lg-12">        
				<form action="register.php" method="post" class="text-center" id="registerForm" role="form">
				  <div class="form-group">
					<label for="username">Username</label>
					<input name="username" type="text" required class="form-control" id="name" form="registerForm" placeholder="Username">
					<span class="help-block" style="display: none;">Please enter your name.</span></div>
					<div class="form-group">
					<label for="username">Password</label>
					<input name="password" type="password" required class="form-control" id="name" form="registerForm" placeholder="Password">
					<span class="help-block" style="display: none;">Please enter your name.</span></div>
					<div class="form-group">
					<label for="username">First Name</label>
					<input name="first_name" type="text" required class="form-control" id="name" form="registerForm" placeholder="First Name">
					<span class="help-block" style="display: none;">Please enter your name.</span></div>
					<div class="form-group">
					<label for="username">Last Name</label>
					<input name="last_name" type="text" required class="form-control" id="name" form="registerForm" placeholder="Last Name">
					<span class="help-block" style="display: none;">Please enter your name.</span></div>
				  <div class="form-group">
					<label for="email">E-Mail</label>
					<input name="email" type="email" required class="form-control" id="email" form="registerForm" placeholder="Email Address">
					<span class="help-block" style="display: none;">Please enter a valid e-mail address.</span></div>
				  <span class="help-block" style="display: none;">Please enter a the security code.</span>
				  <a href="login.php">
				  <button name="submit" value="Register" type="submit" class="btn btn-primary btn-lg" id="submit" style=" margin-top: 10px;"> Create</button>
				  </a>
				</form>
				
				
				<!-- END CONTACT FORM --> 
	<?php
	} else {
	## connect mysql server
		$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		# check connection to mysql
		if ($mysqli->connect_errno) {
			echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
			exit();
		}
	## query database
		# prepare data for insertion
		$username	= $_POST['username'];
		$password	= $_POST['password'];
		$first_name	= $_POST['first_name'];
		$last_name	= $_POST['last_name'];
		$email		= $_POST['email'];
	 
		# check if username and email exist else insert
		$exists = 0;
		$result = $mysqli->query("SELECT username from users WHERE username = '{$username}' LIMIT 1");
		if ($result->num_rows == 1) {
			$exists = 1;
			$result = $mysqli->query("SELECT email from users WHERE email = '{$email}' LIMIT 1");
			if ($result->num_rows == 1) $exists = 2;	
		} else {
			$result = $mysqli->query("SELECT email from users WHERE email = '{$email}' LIMIT 1");
			if ($result->num_rows == 1) $exists = 3;
		}
	 
		if ($exists == 1) {
			?>
			<p><font color="white">Username already exists!</p>
			<p><a href='register.php'><button type='button' class='btn btn-danger btn-lg'>Back</button></a></p>	
			<?php	
		}
		else if ($exists == 2) {
			?>
			<p><font color="white">Username and Email already exists!<p>
			<p><a href='register.php'><button type='button' class='btn btn-danger btn-lg'>Back</button></a></p>
			<?php
		}
		else if ($exists == 3) {
			?>
			<p><font color="white">Email already exists!</p>
			<p><a href='register.php'><button type='button' class='btn btn-danger btn-lg'>Back</button></a></p>
			<?php
		}
		else {
			# insert data into mysql database
			
			$created = date('Y-m-d H:i:s');
			
			$verificationCode = md5(uniqid("blahblahblah", true));
			
			$sql = "INSERT  INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `email`, `verified`, `verification_code`, `created`, `photo`) 
					VALUES (NULL, '{$username}', '{$password}', '{$first_name}', '{$last_name}', '{$email}', '0', '{$verificationCode}', '{$created}', 'no_user.png')";
			if ($mysqli->query($sql)) {
				//echo "New Record has id ".$mysqli->insert_id;
				?>
				<p><font color="white">Registered successfully!</p>
				<p><input type="button" name="SuccessLogin" class="btn btn-success" value="Login" onclick="window.location =\'login.php\'" /></p>
				<?php
				

	//Email Verification Code

						// now, compose the content of the verification email, it will be sent to the email provided during sign up
						
						// generate verification code, acts as the "key"

						// send the email verification
						$verificationLink = "http://nebulagaming.net/activated.php?code=" . $verificationCode;

						$htmlStr = "";
						$htmlStr .= "Hi " . $first_name . ",<br /><br />";

						$htmlStr .= "Please click the button below to verify your Nebula Gaming  account.<br /><br /><br />";
						$htmlStr .= "<a href='{$verificationLink}' target='_blank' style='padding:1em; font-weight:bold; background-color:blue; color:#fff;'>VERIFY EMAIL</a><br /><br /><br />";

						$htmlStr .= "Kind regards,<br />";
						$htmlStr .= "<a href='https://nebulagaming.net/' target='_blank'>Nebula Gaming</a><br />";


						$name = "Nebula Gaming";
						$email_sender = "no-reply@nebulagaming.net";
						$subject = "Verification Link | The Nova Gaming Network";
						$recipient_email = $email;

						$headers  = "MIME-Version: 1.0\r\n";
						$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
						$headers .= "From: {$name} <{$email_sender}> \n";

						$body = $htmlStr;

						// send email using the mail function, you can also use php mailer library if you want
						if( mail($recipient_email, $subject, $body, $headers) ){

							// tell the user a verification email were sent
							?>
							<div id='successMessage'><font color="white">A verification email were sent to <b><?php echo $email ?>"</b>, please open your email inbox and click the given link so you can login.</div>
							<?php


							// save the email in the database

							//write query


						}else{
							die("Sending failed.");
						}
					
	//End Of Email Verification Code			
			} else {
				echo "<p>MySQL error no {$mysqli->errno} : {$mysqli->error}</p>";
				exit();
			}
		}
	}
}
?>	
            
            
          </div>
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
