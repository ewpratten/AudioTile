<?php
$album_art = "https://f4.bcbits.com/img/a3534973311_10.jpg";
$artist_name = "RetryLife";
?>
<head>
	<link href="https://unpkg.com/picnic" rel="stylesheet">
	<link href="./css/album.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
</head>
<body>
	
<div class="Content">
	<img src="<?php echo $album_art ?>" style="width:100%;">
	
	<div class="info">
		<p class="artist"><?php echo $artist_name ?></p>
	</div>
	
	<div class="tracks">
		(add php to list tracks here)
	</div>
</div>
</body>