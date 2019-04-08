<?php
	include 'header.php';
?>
<?php session_start(); ?>

<section class="start">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form method="post" action="start-session.php" class="needs-validation" novalidate>
				  <div class="form-group">
				    <div class="col-md-12 emblem">
						<h2>Choose emblem</h2>
						<select class="image-picker" name="emblem">
							<option data-img-src='img/BearEmblem.png' value='img/BearEmblem.png'></option>
							<option data-img-src='img/CrowEmblem.png' value='img/CrowEmblem.png'></option>
							<option data-img-src='img/EagleEmblem.png' value='img/EagleEmblem.png'></option>
							<option data-img-src='img/LionEmblem.png' value='img/LionEmblem.png'></option>
							<option data-img-src='img/OctopusEmblem.png' value='img/OctopusEmblem.png'></option>
							<option data-img-src='img/SharkEmblem.png' value='img/SharkEmblem.png'></option>
							<option data-img-src='img/SnakeEmblem.png' value='img/SnakeEmblem.png'></option>
							<option data-img-src='img/StagEmblem.png' value='img/StagEmblem.png'></option>
						</select>	
						<input type="text" id="username" class="form-control username"  placeholder="Team name"  name="username" required/>
					  </div>
					</div>
					<input type="submit" name="submit" class="btn btn-primary" role="button" value="Start">
				</form>
			</div>
		</div>
	</div>
</section>

</body>
<script src="js/image-script.js"></script>
</html>