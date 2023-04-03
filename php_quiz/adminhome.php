<?php 
session_start();
if (isset($_SESSION['admin'])) {
?>




<!DOCTYPE html>
<html>
	<head>
		<title>RDG83</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/darkly/bootstrap.min.css">
	</head>

	<body>
		<header>
			<div class="container">
				<h1>RDG83</h1>
				<!-- <a href="index.php" class="start">Home</a>
				<a href="add.php" class="start">Add Question</a>
				<a href="allquestions.php" class="start">All Questions</a>
				<a href="players.php" class="start">Players</a>
				<a href="exit.php" class="start">Logout</a> -->

	<nav class="navbar navbar-expand-lg navbar-light bg-danger ">
  				<a class="navbar-brand" href="#">RDG83</a>
  					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    					<span class="navbar-toggler-icon"></span>
  					</button>
  			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    		<div class="navbar-nav">
				<a class="nav-item nav-link active" href="index.php"> <u><span class="start">Home</span></a></u>
				<a class="nav-item nav-link active" href="add.php"> <u><span class="start">Add Questions</span></a></u>
				<a class="nav-item nav-link active" href="allquestions.php"> <u><span class="start">All Questions</span></a></u>
				<a class="nav-item nav-link active" href="players.php"> <u><span class="start">Players</span></a></u>
				<a class="nav-item nav-link active" href="exit.php"> <u><span class="start">Logout</span></a></u> 
    		</div>
  			</div>
	</nav>
			</div>
		</header>

		<main>
			<div class="container">
				<h2>Welcome back, Admin</h2>
				</div>
				</main>
				</body>
				</html>

				<?php } 
				else {
				header("location: admin.php");
				}
				?>