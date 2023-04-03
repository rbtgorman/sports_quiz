<?php 
session_start();
include "conn.php";
if (isset($_SESSION['id'])) {
$query = "SELECT * FROM questions";
$run = mysqli_query($conn , $query) or die(mysqli_error($conn));
$total = mysqli_num_rows($run);
?>

<html>
	<head>
		<title>Sports Quiz by RDG83</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/darkly/bootstrap.min.css">

	</head>

	<body>
		<header>
			<div class="container">
				<h1>Sports Quiz by RDG83</h1>
			</div>
		</header>

		<main>
			<div class="container">
				<h2>Welcome to Sports Quiz !</h2>
				<p>This is just a simple quiz game to test your knowledge!</p>
				<ul>
				    <li><strong>Number of questions: </strong><?php echo $total; ?></li>
				    <li><strong>Type: </strong>Multiple Choice</li>
				    <li><strong>Estimated time for each question: </strong><?php echo $total * 0.05 * 60; ?> seconds</li>
				     <li><strong>Score: </strong>   &nbsp; +1 point for each correct answer</li>
				</ul>
				<!-- <a href="question.php?n=1" class="start">Start Kuiz</a>
				<a href="exit.php" class="add">Exit</a> -->

<nav class="navbar navbar-expand-lg navbar-light bg-danger ">
  		 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
 		 </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
				<a class="nav-item nav-link active" href="question.php?n=1"> <u><span class="start">Start Quiz</span></a></u>
				<a class="nav-item nav-link active" href="exit.php"> <u><span class="add">Exit</span></a></u>
	  <br>
    </div>
  </div>
</nav>

			</div>
		</main>

		<footer>
			
		</footer>

	</body>
</html>
<?php unset($_SESSION['score']); ?>
<?php }
else {
	header("location: index.php");
}
?>