<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		.header {
			background-color: DeepSkyBlue;
			padding: 10px;
			text-align: center;
		}
	
		#logo {
			display: block;
			margin-left: auto;
			margin-right: auto;
			max-width: 75%;
			height: auto;
		}
	
		#acct {
			position: fixed;
			top: 0;
			right: 0;
			width: 25px;
			height: 25px;
		}
		
		.button {
			
		}
	</style>
</head>

<body style="background-color:LightCyan;">
<div class="header">
	<img src="logo.png" alt="FitnessTracker" id="logo">
</div>
<h2>Coach Home</h2>
<br>What would you like to do?&nbsp;<br>
<br>
<div class="main">
<a href="admin_acct.php"><img src="acct.png" alt="MyAcct" id="acct"></a>
<a href="user_post.php" class="button">Post Workouts</a>
<a href="user_view.php" class="button">View Workouts</a>
</div>
</form> 
</body>
</html>