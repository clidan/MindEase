<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MindEase-Meditation</title>
</head>
<body>
<header>
	   <img src="images/hero.png" id="img">

	
</header>
<main>
	
	<h2>meditations</h2>
	<br><br>
	<ul>
		<li id="hoo">Anxiety-10mins<button onclick="startmeditation()" id="btn">play</button></li>
		<br>
		<br>
		<br><br>
		<li id="hoo">Sleep-15mins<button onclick="startmeditation()" id="btn">play</button></li>
		<br>
		<br>
		<br><br>
		<li id="hoo">Focus-20mins<button onclick="startmeditation()" id="btn">play</button></li>
	</ul>
</main>
<a href="screen2.php">
	<button onclick="navigateTo('dashboard')" id="home">home</button alt="screen2.php"></a>
</body>
<style type="text/css">
	body{
		background-color: #8FD7D7;
/*		margin-top: 50%;*/
	}
	.hr{
		text-align: right;
	}
	.if{
		text-align: center;
	}
	#btn{
		border-radius: 100px;
	}
	#home{
		width: 40%;
		height: 45px;
		border-radius: 100px;
		margin-left: 35%;
		margin-top: 30%;
	}
	#img{
		width: 400px;
		height: 400px;
		text-align: center;
	}
	h2{
		text-align: center;
	}
</style>
</html>