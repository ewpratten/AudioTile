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
		<a href="/" class="brand">
		<span>AudioTile</span>
		</a>

<!-- responsive-->
	<ul id="navbarButtons">
		<li><a href="#" onmouseover="animateBorder(this)">Dashboard
			<div id="navbarItemBorder"></div></a></li>
		<li><a href="#" onmouseover="animateBorder(this)">Account</a></li>
	</ul>
<script src="Tiles.js"></script>
</nav>

<div class="flex two three-600 six-1200 demo">

</div>