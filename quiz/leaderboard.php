<?php include 'header.php'; ?>

<?php 
session_start();
if(!isset($_SESSION['username'])) {
   header("Location: start.php");
   exit();
} 
?>

<section class="leaderboard">
	<div class="container">
		<div class="row">
			<div class="col-md-12 push">
				<h2>Leaderboard</h2>
			</div>
		</div>
			<div class="row">
					<?php
						$counter = 0;
						$sql = "SELECT * FROM users ORDER BY score DESC LIMIT 3"; 
						$result	= mysqli_query($conn, $sql);
						while($row	= mysqli_fetch_array($result))	{
							$counter++;
					?>
				<div class="col-4">
					<div class="thumb">
						<img src='<?php echo $row["image"] ?>'>
						<div class="thumb-numb">
							<p><?php echo $counter ?></p>
						</div>
					</div>
					<h3><?php echo $row["username"] ?></h3>
					<h4><?php echo $row["score"] ?> points</h4>
				</div>
				
				<?php } ?>
			</div>
		<div class="row">
			<div class="col-md-12">
				<a class="btn btn-primary" href="session-kill.php" role="button">Quit quiz</a>
			</div>
		</div>
	</div>
</section>