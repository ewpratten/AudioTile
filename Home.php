<head>
	<meta charset="utf-8" />
	<title>AudioTile</title>
	<link href="https://unpkg.com/picnic" rel="stylesheet">
	<link href="./css/Main.css" rel="stylesheet">
	<link href="./css/Tiles.css" rel="stylesheet">
	<link href="./css/Animations.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
	<script src="Animate.js"></script>
</head>
<body>
	
	<div id="landingPage">
		<div id="wrapper">
			<span class="bubble b1"></span>
			<span class="bubble b2"></span>
			<span class="bubble b3"></span>
			<span class="bubble b4"></span>
			<span class="bubble b5"></span>
			<span class="bubble b6"></span>
			<div class="contentCircle">
				<div class="content">
					<h1>AudioTile</h1>
					<h4 class="sub">Share Your Music</h4>
					<button onclick="openLandingPage()">Let's Go!</button>
				</div>
			</div>
		</div>
	</div>
	
	<div id="tilesPage">
		<?php include('Tiles.php') ?>
	</div>
	
	<!--
			<a href="./credits.php" class="credit">Credits</a>
			-->
</body>