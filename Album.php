<?php
$album_art = "https://f4.bcbits.com/img/a3534973311_10.jpg";
$artist_name = "RetryLife";
$tracks = 5;
?>
<head>
	<link href="https://unpkg.com/picnic" rel="stylesheet">
	<link href="Style/Album.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
</head>
<body>
	
<div class="Content">
	<img src="<?php echo $album_art ?>" style="width:100%;">
	
	<div class="info">
		<p class="artist"><?php echo $artist_name ?></p>
	</div>
	
	<div class="tracks">
		<br>
		<?php
		for($i = 1; $i <= $tracks; ++$i){
			echo "
		<audio controls>
  <source src='$track[$i]' type='audio/mpeg'>
Your browser does not support the audio element.
</audio>
<br>
<br>
";
}
?>
	</div>
</div>
</body>