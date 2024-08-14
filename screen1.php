<?php
error_reporting(0);
if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];

    // start database connection
    $servername = 'localhost';
    $username ='root';
    $password = '';
    $dbname = 'mind';

    // check connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    //check connection
    if (!$conn) {
    	die("connection faild:".mysql_connect_error());    	
    }else{
    	echo"";
    }
    //end database connection
if (empty($email) && empty($password)) {
			echo"All fields are required";
		}else{
			$sql="INSERT INTO `tbl_user`( `email`, `password`) VALUES ('$email','$password')";
		}

			if (mysqli_query($conn,$sql) == true){

				header("location:screen2.php");

			} else{
				echo "something went wrong.please try agein...!";
		 
	       
	       }		
	   }
				
?>	
<!DOCTYPE html>
<html>
<head>																					
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MindEase</title>
</head>
<body>
<img src="images/hero.png" id="dim">
<form action="" method="POST">
<h2 id="text">Create an account</h2>
<h5 id="tea">sign up to continue</h5>
<label>Email</label>
<br><input type="email" name="email" required><br>
<br>
<label>password</label>
<br><input type="password" name="password" maxlength="200px" required>
<br>
<br>
<br>
<a href="screen2.php">
	<input type="submit" name="submit" value="submit" id="btn"></a>
	<br>
	<br>
	<br>
	<br>
	<br>
	<div class="line-container">
	<hr >
	<h4>OR</h4>
	<hr>
</div>
<br><br>
	<button id="btn">
	<svg xmlns="http://www.w3.org/2000/svg" width="0.98em" height="1em" viewBox="0 0 256 262"><path fill="#4285f4" d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622l38.755 30.023l2.685.268c24.659-22.774 38.875-56.282 38.875-96.027"/><path fill="#34a853" d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055c-34.523 0-63.824-22.773-74.269-54.25l-1.531.13l-40.298 31.187l-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1"/><path fill="#fbbc05" d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82c0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602z"/><path fill="#eb4335" d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0C79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251"/></svg>
	Continue with google
</button>
</form>
<br>
<br>							
<h5 id="text"><a href="login.php">Already have an account?Login</h5></a>
</body>
</html>
<style type="text/css">
	body{
		background-color: #8FD7D7;
		text-align: center;

		
	}
#dim{
	width: 250px;
	height: 250px;

}
h5{
	font-size: 28px;
}
#text{
	font-size: 18px;
}
input{
	width: 70%;
	height: 45px;
	border-radius: 7px;
}
#btn{
	width: 50%;
	height: 45px;
	border-radius: 100px;

}
.line-container {
    display: flex;
    align-items: center;
    text-align: center;
}

hr {
    border: none;
    border-top: 3px solid #000;
    flex: 1;
    margin: 0;
}

h4 {
    margin: 0 5px; /* Adjust the spacing as needed */
}
</style>