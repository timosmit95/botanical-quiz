<?php
	include 'header.php';
?>
<?php 
session_start();
if(!isset($_SESSION['username'])) {
   header("Location: start.php");
   exit();
} 
?>
<div class="container">
	<div class="row">
		<div class="col-12">
		    <video muted playsinline id="qr-video"></video>
		</div>
	</div>
</div>
<script type="module">
    import QrScanner from "/quiz/js/qr-scanner.min.js";
    QrScanner.WORKER_PATH = '/quiz/js/qr-scanner-worker.min.js';

    const video = document.getElementById('qr-video');
    const camHasCamera = document.getElementById('cam-has-camera');
    const camQrResult = document.getElementById('cam-qr-result');

    function setResult(label, result) {
        window.open(result);
        label.style.color = 'teal';
    }

    // ####### Web Cam Scanning #######

    QrScanner.hasCamera().then(hasCamera => camHasCamera.textContent = hasCamera);

    const scanner = new QrScanner(video, result => setResult(camQrResult, result));
    scanner.start();

</script>

</body>

</html>