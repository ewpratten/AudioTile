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
		<li><a href="#">Dashboard</a></li>
		<li><a href="#">Account</a></li>
	</ul>

</nav>

<div class="flex two three-600 six-1200 demo">

</div>