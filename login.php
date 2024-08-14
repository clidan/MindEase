<?php
error_reporting(0);
session_start();
if (isset($_SESSION['userid'])) {
    header('Location: screen5.php');
    exit();
}

$msg = null;
include 'dbconfig.php'; // Ensure this file sets up the $conn variable correctly.

if (isset($_POST['submit'])) {
    // Submitted user data
    $userFullname = $_POST['fullname'];
    $userEmail = $_POST['email'];
    $userPassword = $_POST['password'];

    if (empty($userFullname) || empty($userEmail) || empty($userPassword)) {
        $msg = "All fields are required";
    } else {
        // Prepare SQL statement with placeholders
        $sql = "SELECT * FROM tbl_users WHERE fullname = ? AND email = ?";
        $stmt = $conn->prepare($sql);
             }
        if ($stmt === false) {
            $msg = "SQL prepare failed: " . htmlspecialchars($conn->error);
        } else {
            // Bind parameters
            $stmt->bind_param('ss', $userFullname, $userEmail);
            $stmt->execute();
            $result = $stmt->get_result();
            }
            // Records found
            // After executing the query
if ($result->num_rows < 1) {
    $msg = "No records found";
    // echo " No records found in the database.<br>";
} else {
    // Fetch user data
    $userData = $result->fetch_assoc();
    // echo " User data fetched from database.<br>";

    // Debugging output
    // echo "User email from DB: " . htmlspecialchars($userData['email']) . "<br>";
    // echo "User password from DB (hashed): " . htmlspecialchars($userData['password']) . "<br>";

    // Verify the password
    if (password_verify($userPassword, $userData['password'])) {
        $msg = "login failed. Please try again...";
        $_SESSION['username'] = $userData['fullname'];
        $_SESSION['userid'] = $userData['id'];
        $_SESSION['useremail'] = $userData['email'];
        header('Location: screen5.php');
        exit();
    } else {
        header('Location:screen5.php');
    }
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
<div class="container">
	<h2 align="center">Login to MindEase</h2>
    <br>
    <br>
    <br>
	<form action="/mindease/login.php" method="post">
		<input type="email" name="email" name="password" required placeholder="Email">
		<br>
		<br>
        <br><br>
        <br>
		<input type="password" name="Password" name="password" required placeholder="Password">
		<br>
		<br>
        <br><br>
        <br>
        <a href="screen2.php">
		<input type="submit" value="Login" id="btn"></a>
		<br>
		<br>
        <br><br>
        <br>
	</form>
	<br>
    <br>
    <br>

    <br><br>
	<a href="/mindease/screen1.php">Don't have an account?sign up</a>
</div>
</body>
<style type="text/css">
	body{
		background-color: #8FD7D7;
        text-align: center;
        margin-top: 50%;
	}
    input{
        width: 70%;
        height: 55px;
        border-radius: 5px;
        text-align: center;
    }
    #btn{
        width: 55%;
        height: 55px;
        border-radius: 100px;
    }
</style>
</html>