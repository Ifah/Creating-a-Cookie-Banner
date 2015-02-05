<?php
if(isset($_GET['accept-cookies'])){
	setcookie('accept-cookies', 'true', time() + 31556925);
	header('Location: ./');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>A website</title>
	<link rel="stylesheet" href="css/global.css">
</head>
<body>
	<?php
	if(!isset($_COOKIE['accept-cookies'])){
	?>
		<div class="cookie-banner">
			<div class="container">
				<p>We use cookies on this website. By using this website, we'll assume you consent to <a href="/cookies">the cookie we set.</a></p>
				<a href="?accept-cookies" class="button">Ok, continue</a>
			</div>
		</div>
	<?php
	}
	?>
	<p>Here's a lovely website paragraph.</p>

	<script src="js/jquery.js"></script>
	<script src="js/global.js"></script>
</body>
</html>