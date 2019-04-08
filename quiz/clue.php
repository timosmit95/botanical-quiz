<?php include 'header.php'; ?>
<?php 
session_start();
if(!isset($_SESSION['username'])) {
   header("Location: start.php");
   exit();
} 
?>

<section class="header-link">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<a class="btn-leader" href="leaderboard.php" role="button"><i class="fas fa-trophy"></i></a>
			</div>
		</div>
	</div>
</section>

<section class="quiz-con">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php
					$sql = "SELECT clueid, cluename FROM clue WHERE clueid=".intval($_REQUEST['id']); 
					$result	= mysqli_query($conn, $sql);
					while($row	= mysqli_fetch_assoc($result))	{						
				?>
					<h2>Clue #<?php echo $row["clueid"] ?></h2>
					<hr/>
					<h3><?php echo $row["cluename"] ?></h3>
				<?php 	
					}
				?>
			</div>
			<div class="col-md-12 cbn">
				<a class="btn btn-primary" href="scanner.php" role="button">Scan QR Code</a>
			</div>
		</div>
	</div>
</section>
	
</body>
</html>