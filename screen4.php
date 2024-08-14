<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MindEase-Mood Tracking</title>
</head>
<body>
<header>
		   <img src="images/hero.png" id="img">
		   <br><br>
		   <br>
		   <br>

	
</header>
<br>
<br>
<main>
	<h2 style="text-align: center;">Track Your Mood</h2>
	<select id="mood">
		<option value="happy" id="qw">Happy</option>
		<option value="sad" id="qw">Sad</option>
		<option value="anxious" id="qw">Anxious</option>
		<option value="exited" id="qw">Exited</option>
		<option value="stressed" id="qw">Stressed</option>
		<option value="calm" id="qw">Calm</option>
	</select>
	<br>
	<br>
	<br>
	<br>
	<div class="mood-note">
		<label for="note">Add a note</label>
		<br>
		<br>
		<br>
		<br>
		<textarea  placeholder="Describe your feelings..." id="note"></textarea>
		<br>
		<br>
		<br>
		<br>
	</div>
	<div class="mood-actions">
	<button onclick="savemood()" id="home">save</button>
    </div>
    <br>
    <br>
    <div class="mood-history">
    	<h3>Your Mood History</h3>
    	<ul id="mood-list">
    		<!-- Mood entries will appear here -->
    	</ul>
    </div>
    <br>
    <br>
    <a href="screen2.php">
	<button onclick="navigateTo('dashboard')" id="home">Home</button alt="screen2.php"></a>
</main>
</body>
<style type="text/css">
	body{
		background-color: #8FD7D7;
		text-align: center;

	}
	.qw{
		text-align: center;
	}
	#note{
		width: 90%;
		height: 100px;
	}
	#mood{
		width: 20%;
		height: 20px;
		text-align: center;
	}
	#img{
		width: 50%;
		height: 50%;
	}
	#home{
		width: 50%;
	height: 45px;
	border-radius: 100px;
}
</style>
</html>