<?php session_start(); ?>
<?php include "conn.php";
if (isset($_SESSION['admin'])) {
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Sports Quiz By RDG83</title>
		<!-- <link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/style1.css"> -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/darkly/bootstrap.min.css">

	</head>

	<body>
		<header>
			<div class="container">
				<h1>Sports Quiz By RDG83</h1>
				<!-- <a href="index.php" class="start">Home</a>
				<a href="add.php" class="start">Add Question</a>
				<a href="allquestions.php" class="start">All Questions</a>
				<a href="players.php" class="start">Players</a>
				<a href="exit.php" class="start">Logout</a>
			 -->
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

		
	<h1> All Questions</h1>
	<table class="data-table">
		<caption class="title">All Quiz questions</caption>
		<thead>
			<tr>
				<th>Q #</th><br>
				<th>Question</th>
				<th>Option-1</th>
				<th>Option-2</th>
				<th>Option-3</th>
				<th>Option-4</th>
				<th>Correct Answer </th>
				<th>Edit</th>
			</tr>
		</thead>
		<tbody>
        
        <?php 
            
            $query = "SELECT * FROM questions ORDER BY qno DESC";
            $select_questions = mysqli_query($conn, $query) or die(mysqli_error($conn));
            if (mysqli_num_rows($select_questions) > 0 ) {
            while ($row = mysqli_fetch_array($select_questions)) {
                $qno = $row['qno'];
                $question = $row['question'];
                $option1 = $row['ans1'];
                $option2 = $row['ans2'];
                $option3 = $row['ans3'];
                $option4 = $row['ans4'];
                $Answer = $row['correct_answer'];
                echo "<tr>";
                echo "<td>$qno</td>";
                echo "<td>$question</td>";
                echo "<td>$option1</td>";
                echo "<td>$option2</td>";
                echo "<td>$option3</td>";
                echo "<td>$option4</td>";
                echo "<td>$Answer</td>";
                echo "<td> <a href='editquestion.php?qno=$qno'> Edit </a></td>";
              
                echo "</tr>";
             }
         }
        ?>
	
		</tbody>
		
	</table>
</body>
</html>

<?php } 
else {
	header("location: admin.php");
}
?>


