<?php include 'header.php'; ?>

<?php 
session_start();
if(!isset($_SESSION['username'])) {
   header("Location: start.php");
   exit();
} 
?>

<section class="results">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Results</h2>
			    <hr>
			    <div class="circle">
				   <?php
					$sql = "SELECT questionid FROM questions ORDER BY questionid DESC LIMIT 1"; 
					$result	= mysqli_query($conn, $sql);
					while($row	= mysqli_fetch_assoc($result))	{						
				?>
				    <h2>2/<?php echo $row["questionid"] ?></h2>
				    
				<?php } ?>
			    </div>
			</div>
			<?php
					$sql = "SELECT answer, questionid FROM answers WHERE rightanswer = 1"; 
					$result	= mysqli_query($conn, $sql);
					while($row	= mysqli_fetch_assoc($result))	{						
				?>
			<div class="col-md-12">
				<div class="result-box">
					<p><?php echo $row["answer"] ?> <i class="fas fa-check"></i></p> 
					
			    </div>
			</div>
			<?php } ?>
			<div class="col-md-12">
				<a class="btn btn-primary" href="leaderboard.php" role="button">Go to Leaderboad</a>
			</div>
		</div>
	</div>
</section>


</body>
</html>