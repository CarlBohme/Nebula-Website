<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Nebula Gaming | Login</title>

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
            <h2><font color="white">Login</h2>
          </div>
          <div class="text-center col-lg-12"> 
            <!-- CONTACT FORM https://github.com/jonmbake/bootstrap3-contact-form -->
            <form action="login.php" method="post" class="text-center" id="loginForm" role="form">
              <div class="form-group">
                <label for="name">Username</label>
                <input name="username" type="text" required class="form-control" id="name" form="loginForm" placeholder="Username">
                <span class="help-block" style="display: none;">Please enter your name.</span></div>
              <div class="form-group">
                <label for="name">Password</label>
                <input name="password" type="password" required class="form-control" id="name" form="loginForm" placeholder="Password">
                <span class="help-block" style="display: none;">Please enter your name.</span></div>
              <span class="help-block" style="display: none;">Please enter a the security code.</span>             
              <a href="contact.php">
              <button type="submit" name="submit" id="submit" class="btn btn-success btn-lg" style=" margin-top: 10px;">Login</button>
              </a>
              <a href="forgot_pass.php">
              <button type="button" class="btn btn-info btn-lg" style=" margin-top: 10px;">Forgot Password</button>
              </a>
            </form>
            <!-- END CONTACT FORM --> 

<?php
	} else {
		require_once("db_const.php");
		$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		# check connection
		if ($mysqli->connect_errno) {
			echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
			exit();
		}
	 
		$username = $_POST['username'];
		$password = $_POST['password'];
	 
		$sql = "SELECT * from users WHERE username LIKE '{$username}' AND password LIKE '{$password}' LIMIT 1";
		$result = $mysqli->query($sql);
		if (!$result->num_rows == 1) {
			?>
			<p><font color="white">Invalid username/password combination</p>
			<p><a href="login.php"><button type="button" class="btn btn-danger btn-lg">Back</button></a></p>
			<?php
		} else {
			
			$sql = "SELECT * from users WHERE username LIKE '{$username}' AND verified LIKE '1' LIMIT 1";
			$result = $mysqli->query($sql);
			if (!$result->num_rows == 1) {
				?>
				<p><font color="white">Account Not Activated.<br>Please Check Your Email For The<br>Activation Link</p>
				<p><a href="login.php"><button type="button" class="btn btn-danger btn-lg">Back</button></a></p>
				<?php
			} else {
	 
					$_SESSION["currentuser"] = "{$username}";
			
					while($row = $result->fetch_assoc()){
					$_SESSION["cur_first_name"] = "{$row['first_name']}";
					$_SESSION["cur_last_name"] = "{$row['last_name']}";
					$_SESSION["cur_email"] = "{$row['email']}";
					$_SESSION["cur_pic"] = "{$row['photo']}";	
					}
					?>
					<p><font color="white">Welcome <?php echo $_SESSION["cur_first_name"];?></p>
					<p><a href="index.php"><button type="button" class="btn btn-info btn-lg">Home</button></a></p>
					<?php
				
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



