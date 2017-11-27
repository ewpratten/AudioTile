
<?php
//this stuff is for testing
$USER_LOGGED_IN = true
?>
<head>
	<meta charset="utf-8" />
	<title>AudioTile</title>
	<link href="https://unpkg.com/picnic" rel="stylesheet">
	<link href="./css/tiles.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
	<script src="Animate.js"></script>
</head>
<body>
	<nav class="demo">
  <a href="/" class="brand">
    <span>AudioTile</span>
  </a>

  <!-- responsive-->
  <input id="bmenub" type="checkbox" class="show">
  <label for="bmenub" class="burger pseudo button">menu</label>

  <div class="menu">
    <a href="#" class="pseudo button icon-picture">Upload</a>
    <a href="./accountmanage/<?php if($USER_LOGGED_IN == true){ echo "logout.php"; }else{ echo "login.php"; }?>" class="pseudo button icon-picture"><?php if($USER_LOGGED_IN == true){ echo "Log out"; }else{ echo "Log In"; }?></a>
  </div>
</nav>
<br>
<br>
<br>


<div class="flex two three-600 six-1200 demo">
	
	<!--
	This is an example grid box
	
	<div><span>
		<a href="./album.php/?album=xmas02">
	<img width="100%" src="https://f4.bcbits.com/img/a3534973311_16.jpg">
	<div width="100%" class="albumtitle">
		<h9>X-MAS 02</h9>
	</div>
	</a>
</span></div>

-->
	<?php
	// this should be fixed
	// just a basic idea
	for($i = 1; $i <= $tilecount; ++$i)
	{
	echo "<div><span>", $tiledata[$i]; "</span></div>";
	}
	?>
	</div>

</body>