<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
// 301 Moved Permanently
"<meta http-equiv="Refresh" content="0; url='https://www.w3docs.com'" "/>
exit();
         else{
 echo "<div class='form'> <h3>You are registered successfully.</h3>
<br/>Click here to <a href='index.html'>Login</a></div>";
}
?>
   <!--
     this was in the php form }
    }else{
    }-->

<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
 <label for="username">Username</label>
<input type="text" name="username" placeholder="Username" required />
 <label for="password">Email</label>
<input type="email" name="email" placeholder="Email" required />
 <label for="password">Password</label>
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
     <a href="#">Lost your Password?</a><br>
</form>
</div>
<?php } ?>
</body>
</html>
       
</form>
</div>
<?php } ?>
</body>
</html>