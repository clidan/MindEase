<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MindEase-Progress & insights</title>
</head>
<body>
<header>
		   <img src="images/hero.png" id="img">

	
</header>
<main class="insights">
	<h2>Your Progress</h2>
	<div class="insights-charts">
		<!--placeholder for charts-->
		<div class="chart" id="mood-trend-chart">
			<h3>Mood Trends</h3>
			<!--use a chart library like chart.js for this-->
		</div>
	</div>
	<div class="insights-summary">
		<h3>insights</h3>
		<p>You've been feeling <strong>Happy</strong> more often in the past week. Keep up the good work!</p>
		<p>Consider more meditation sessions to help with <strong>anxiety</strong>.</p>
	</div>
	<br>
	<br>
	<br>
	<br>
	<a href="screen2.php">
	<button class="btn" onclick="navigateTo('dashboard')" id="home">Home</button alt="screen2.php"></a>
</main>
</body>
<style type="text/css">
	body{
		background-color:#8FD7D7;
		text-align: center;
		margin-top: 100px;
	}
	#img{
		width: 400px;
		height: 300px;
		text-align: center;
	}
	#home{
		width: 40%;
		height: 45px;
		border-radius: 100px;
		margin-left: 5%;
		margin-top: 30%;
	}
</style>
</html>