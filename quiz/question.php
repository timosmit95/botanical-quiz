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
			<div class="col-10">
				<div id="progressBar">
				  <div class="bar"></div>
				</div>
			</div>
			<div class="col-2">
				<a class="btn-leader" href="leaderboard.php" role="button"><i class="fas fa-trophy"></i></a>
			</div>
		</div>
	</div>
</section>

<section class="question-con">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php
					$sql = "SELECT questionid, question FROM questions WHERE questionid=".intval($_REQUEST['id']); 
					$result	= mysqli_query($conn, $sql);
					while($row	= mysqli_fetch_assoc($result))	{						
				?>
					<h2>Question #<?php echo $row["questionid"] ?>/20</h2>
					<hr/>
					<h3><?php echo $row["question"] ?></h3>
				<?php 	
					}
				?>
			</div>
		</div>
	</div>
</section>

<section class="answers">
	<div class="container">
		<div class="row">
			<div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
			<?php
				$sql = "SELECT * FROM answers WHERE questionid=".intval($_REQUEST['id']);
				$result	= mysqli_query($conn, $sql);
				while($row	= mysqli_fetch_assoc($result))	{						
			?>
			<div class="col-md-12">
				<label class="btn answer-box">
				    <input type="radio" name="options" id="option1" autocomplete="off" value='<?php echo $row["rightanswer"] ?>' > <p><?php echo $row["answer"] ?></p>
				 </label>
			</div>
			<?php 	
				}
			?>
			</div>
			<?php 
				$id = $_GET['id'];
				$sql2 = "SELECT clueid FROM clue WHERE clueid > $id ORDER BY clueid ASC LIMIT 1";
				$result = mysqli_query($conn, $sql2);
				$row	 = mysqli_fetch_assoc($result);
				if ($row > 0) {
			?>
				<div class="col-md-12 cbn2">
					<a class="btn btn-primary" href='clue.php?id=<?php echo $row["clueid"] ?>' role="button">Next</a>
				</div>
			<?php } 
				else {
			?>
			<div class="col-md-12 cbn2">
					<a class="btn btn-primary" href="results.php" role="button">See Results</a>
				</div>
			<?php } ?>
		</div>
	</div>
</section>

				

</body>
<script>
	function progress(timeleft, timetotal, $element) {
    var progressBarWidth = timeleft * $element.width() / timetotal;
    $element.find('div').animate({ width: progressBarWidth }, 500).html(Math.floor(timeleft/60) + ":"+ timeleft%60);
    if(timeleft > 0) {
        setTimeout(function() {
            progress(timeleft - 1, timetotal, $element);
        }, 1000);
    }
};

progress(120, 120, $('#progressBar'));
</script>
</html>