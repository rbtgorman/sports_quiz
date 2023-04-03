<?php 
session_start();
include "conn.php";
if (isset($_SESSION['id'])) {
	?>
	<?php if(!isset($_SESSION['score'])) {
		header("location: question.php?n=1");
	}
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
			<div class= "container">
			<h2>Congratulations!</h2> 
				<p>You have successfully completed the test</p>
				<p>Total points: <?php if (isset($_SESSION['score'])) {
echo $_SESSION['score']; 
}; ?> </p>
		<!-- <a href="question.php?n=1" class="start">Start Again</a>
		<br>
		<a href="home.php" class="start">Go Home</a> -->
<nav class="navbar navbar-expand-lg navbar-light bg-danger ">
  		 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
 		 </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
				<a class="nav-item nav-link active" href="question.php?n=1"> <u><span class="start">Start Again</span></a></u>
				<a class="nav-item nav-link active" href="home.php"> <u><span class="start">Go Home</span></a></u>
	  <br>
    </div>
  </div>
</nav>
		</div>
		</main>
		</body>
		</html>

		<?php 
		$score = $_SESSION['score'];
		$email = $_SESSION['email'];
		$query = "UPDATE users SET score = '$score' WHERE email = '$email'";
		$run = mysqli_query($conn , $query) or die(mysqli_error($conn));
 		?>


<?php unset($_SESSION['score']); ?>
<?php unset($_SESSION['time_up']); ?>
<?php unset($_SESSION['start_time']); ?>
<?php }
else {
	header("location: home.php");
}
?>

