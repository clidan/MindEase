<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MindEase-profile</title>
</head>
<body>
<header>
	<h1>MindEase</h1>
</header>
<main>
	<h2>profile</h2>
	<img src="images/benz.jpg" alt="profile picture" id="vii">
	<p>Name: Clidan Odhiambo</p>
	<a href="profile picture">
	<button onclick="navigateTo('edit-profile')">Edit profile</button alt="profile picture"></a>
	<br>
	<br>
	<a href="index.html">
	<button onclick="logout()">Logout</button alt="index.html"></a>
	<br>
	<br>
	<a href="screen2.html">
	<button onclick="navigateTo('dashboard')">Home</button alt="screen2.html"></a>
</main>
</body>
<style type="text/css">
	body{
		background-color: #8FD7D7;
		text-align: left;
	}
	#vii{
		width: 200px;
		height: 200px;
		border-radius: 100px;
	}
</style>
</html>