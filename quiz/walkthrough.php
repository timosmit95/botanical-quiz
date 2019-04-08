<?php
	include 'header.php';
?>

<div id="custom-overlay">
	<div class="flb">
		<div class="container">
			<div class="row">
				<div class="Aligner-item Aligner-item--top"></div>
                	<div class="col-md-12">
					<img src="img/logo.png" alt="logosplash">
                	</div>
				<div class="col-md-12 logo-title">
                		<h2>Sprout</h2>
                	</div>
				<div class="Aligner-item Aligner-item--bottom"></div>
			</div>
		</div>
    </div>
</div>

<section class="walktrough slides">
	<div class="row no-gutters">
		<div class="col-md-12 wt">
			<img src="img/botanical-1.png"/>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Welcome!</h2>
				<hr/>
				<p>SPROUTE is an interactive treasure hunt game for teams that want to learn more about plants. </p>
				<button type="button" class="btn btn-primary" onclick="plusDivs(1)">Next</button>
			</div>
		</div>
	</div>
</section>
<section class="walktrough slides">
	<div class="row no-gutters">
		<div class="col-md-12 wt">
			<img src="img/botanical-3.png"/>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>QR Codes</h2>
				<hr/>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
				<button type="button" class="btn btn-primary" onclick="plusDivs(1)">Next</button>
			</div>
		</div>
	</div>
</section>
<section class="walktrough slides">
	<div class="row no-gutters">
		<div class="col-md-12 wt">
			<img src="img/botanical-2.png"/>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Become the best!</h2>
				<hr/>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
				<a class="btn btn-primary" href="start.php" role="button">Let's begin!</a>
			</div>
		</div>
	</div>
</section>
<div class="container">
	<div class="row">
		<div class="col-md-12 slide-btn">
			<span class="w3-badge check w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
		    <span class="w3-badge check w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
		    <span class="w3-badge check w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
		</div>	
	</div>
</div>			


</body>
<script src="js/script.js"></script>
</html>
