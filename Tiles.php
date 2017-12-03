<?php

$loggedIn = true;
$loginButtonText = "";
$loginButtonLink = "";

if ($loggedIn) {
	$loginButtonText = "Log Out";
	$loginButtonLink = "logout.php";
} else {
	$loginButtonText = "Login";
	$loginButtonLink = "login.php";
}

?>

<nav id="navigationBar">
	<div id="navbarTitle">
		<a href="/" class="brand">AudioTile</a>
	</div>
	
	<div id="navbarMiddle">
		<input type="text" id="searchBar" class="textbox" placeholder="Search for song/artist/album" />
	</div>

	<ul id="navbarButtons">
		<li>
			<?php
			if ($loggedIn) {
				echo '<a href="#" onmouseover="animateBorder(this)">Dashboard
			<div id="navbarItemBorder"></div></a>';
			} else {
				echo '<a href="#" onmouseover="animateBorder(this)">Register
			<div id="navbarItemBorder"></div></a>';
			}

			?>
		</li>
		<li>
			<?php 
			if ($loggedIn) {
				echo '<a href="#" onmouseover="animateBorder(this)">Account</a>';
			} else {
				echo '<a href="#" onmouseover="animateBorder(this)">Login</a>';
			}
			?>
		</li>
	</ul>
	<script src="Script/Tiles.js"></script>
</nav>

<div id="sideBar">

</div>

<div id="tilesBody">

</div>

<!--<div class="flex two three-600 six-1200 demo">

</div>-->