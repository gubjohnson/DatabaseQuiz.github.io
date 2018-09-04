<?php 

	session_start();
	if (!isset($_SESSION['username'])) {
		header('location:login.php');
	} 
	
	$con = mysqli_connect('sql12.freemysqlhosting.net','sql12255101',"NXAER7KBuw");
	
	mysqli_select_db($con, 'sql12255101');

 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
 </head>
 <body>
 	<div class="container">
 		<br/><h1 class="text-center text-primary">WEBDEVELOPER QUIZ</h1><br/>

 		<h2 class="text-center text-success">Welcome <?php echo $_SESSION['username']; ?></h2>
 		<div class="col-lg-8 m-auto d-block">
	 		<div class="card">
	 			
	 			<h3 class="text-center card-header"> Welcome <?php echo $_SESSION['username']; ?>, you have to select only one answer. Best of luck :)</h3>
	 		<br/>

	 	<form action="check.php" method="post">
	 			
	 		

	 		<?php 

	 		for ($i=1; $i < 11; $i++) { 
	 			
	 		
	 		$q = " select * from questions where qid = $i";
	 		$query = mysqli_query($con, $q);

	 		while ($rows = mysqli_fetch_array($query)) {
	 			?>

	 			<div class="card">
	 				<h4 class="card-header"> <?php echo $rows['question']; ?></h4>

	 				<?php 
	 					$q = " select * from answers where ans_id = $i";
	 					$query = mysqli_query($con, $q);

	 					while($rows = mysqli_fetch_array($query)){
	 				 ?>

	 				 	<div class="card-body">
	 				 		<input type="radio" name="quizcheck[<?php echo $rows['ans_id']; ?>]" value="<?php echo $rows['aid']; ?>">
	 				 		<?php echo $rows['answer']; ?>

	 				 	</div>
	 				 
	 				 <?php		
	 					}

	 				 ?>
	 			</div>

	 		<?php	
	 		}
	 		}
	 		 ?>
	 		 <input type="submit" name="submit" value="Submit" class="btn btn-success m-auto d-block">
	 	</form>
	 		
	 		
 		<br/>
 		<br/>
 		<div class="m-auto d-block">
 			<a href="logout.php" class="btn btn-primary">Log out</a>
 		</div>

 		<div>
 			<h5 class="text-center"> &copy; 2018 ZijinTechnical</h5>
 				</div>
 			</div>
 		</div>
 	</div>
 </body>
 </html>