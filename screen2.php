<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MindEase</title>
</head>
<body>
<header>
		   <img src="images/hero.png" id="img">
</header>
<main>
	<h2 id="hy">Good morning, Clidan!</h2>
	<p id="hy">"Take a deep breath and start your day with a smile."</p>
	<br><meta charset="utf-8">
	<a href="screen3.php">
	<button onclick="navigateTo('Meditation')" id="un">Start Meditation</button alt="screen3.php"></a>
	<br>
	<br>
	<button id="un" style="text-align: center;"><a href="screen4.php" alt="screen4.php" >Track Mood</a></button>
	<br>
	<br>
	<button id="un" style="text-align: center;"><a href="screen4.php" alt="screen4.php">Progress & insights </button>
    <br>
	<br>
	<button id="un" style="text-align: center;"><a href="screen4.php" alt="screen4.php">Resource & support</button>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<a href="screen2.php">
	<button class="btn" onclick="navigateTo('dashboard')" id="home">Home</button alt="screen2.php"></a>
</main>
</body>
</html>
<style type="text/css">
	body{
		background-color:#8FD7D7;
		text-align: center;
		margin-top: 80px;
	}
	#un{
		text-align: center;
		font-size: 18px;
	}
	#img{
		width: 400px;
		height: 400px;
		text-align: center;
	}
	#home{
		width: 50%;
	height: 45px;
	border-radius: 100px;

	}		
</style>