<?php

$loggedIn = false;
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

<div id="pageFill" onclick="pageFillClicked()"></div>

<div id="registerForm" class="slideDownForm">
	<h2>Join Us!</h2>

	<form>
		<input type="text" name="username" class="username textBox" placeholder="Choose a Username..." /><br />
		<input type="email" name="email" class="email textBox" placeholder="Your Email Address..." /><br />
		<input type="submit" name="submit" class="register button" value="Register" />
	</form>
</div>

<div id="loginForm" class="slideDownForm">
	<h2>Welcome Back!</h2>

	<form>
		<input type="text" name="username" class="username textBox" placeholder="Your Username..." /><br />
		<input type="password" name="password" class="password textBox" placeholder="Your Password..." /><br />
		<input type="submit" name="submit" class="login button" value="Login" />
	</form>
</div>

<nav id="navigationBar">
	<div id="navbarTitle">
		<a href="/" class="brand" style="font-size: 19px">AudioTile</a>
	</div>
	
	<div id="navbarMiddle">
		<input type="text" id="searchBar" class="textbox" placeholder="Search for Song/Artist/Album" />
	</div>

	<ul id="navbarButtons">
		<li>
			<?php
			if ($loggedIn) {
				echo '<a href="#" onmouseover="animateBorder(this)">Dashboard
			<div id="navbarItemBorder"></div></a>';
			} else {
				echo '<a onmouseover="animateBorder(this)" onclick="slideForm(\'registerForm\')">Register
			<div id="navbarItemBorder"></div></a>';
			}

			?>
		</li>
		<li>
			<?php 
			if ($loggedIn) {
				echo '<a onmouseover="animateBorder(this)">Account</a>';
			} else {
				echo '<a onmouseover="animateBorder(this)" onclick="slideForm(\'loginForm\')">Login</a>';
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