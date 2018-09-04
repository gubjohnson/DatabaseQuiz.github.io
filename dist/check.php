<?php 

	session_start();
	if (!isset($_SESSION['username'])) {
		header('location:login.php');
	}

	$con = mysqli_connect('sql12.freemysqlhosting.net','sql12255101',"NXAER7KBuw");

	mysqli_select_db($con,'sql12255101');

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Quiz Result</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>

	<div class="container text-center">
		<br/><br/>
		<h1 class="text-center text-success text-uppercase">Database quiz</h1>
		<br/><br/><br/><br/>
		<table class="table text-center table-bordered table-hover">
			<tr>
				<th colspan="2" class="bg-dark"><h1 class="text-white">Results</h1></th>

			</tr>
			<tr>
				<td>
					Questions Attemped
				</td>
				<?php 
				$result = 0;
				if (isset($_POST['submit'])) {
					if(!empty($_POST['quizcheck'])){

					$count = count($_POST['quizcheck']);
				?>
				<td>
				<?php

					echo "Out of 10, you have selected ".$count." options";
				 ?>
				 </td>
				 <?php 

					 $selected = $_POST['quizcheck'];
						// print_r($selected);

						$q = "select * from questions";
						$query = mysqli_query($con,$q);
						
						$i =1;

						while ($rows = mysqli_fetch_array($query)) {
							// print_r($rows['ans_id']);

							$checked = $rows['ans_id'] == $selected[$i];

							if($checked){

								$result++;
							}
							$i++;
						}

				  ?>
				<tr>
					<td>
						Your Total score
					</td>
					<td>
						<?php 
							echo " Your total score is".$result.".";
							}
							else{
								echo "<strong>Please Select At Least One Option.</strong>";
							}
						}


						 ?>
					</td>
				</tr>
			</tr>

		</table>
		<div class="m-auto d-block">
 			<a href="logout.php" class="btn btn-primary">Log out</a>
 		</div>

	</div>

</body>
</html>


<?php 

	$name = $_SESSION['username'];
	$finalresult = " insert into user(username, totalques, answerscorrect) values ('$name', '10', '$result')";
	$queryresult = mysqli_query($con, $finalresult);

 ?>