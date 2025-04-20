<?php $title = "FurAffinity Viewer"; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= $title ?></title>
<link rel="stylesheet" href="gay.css">
</head>
<body>
	<form id="top-form">
		<?php 
		if(!isset($_GET["links"])) {
		    echo "<textarea name='links' placeholder='Input links to FA posts' required style='width: 50%; height: 7.5rem'></textarea><br>";
		} else {
		    echo "<input type='text' name='links' placeholder='Input links to FA posts' required>";
		}
		?>
		<input type="radio" name="singleView" id="single" value=1 checked>
		<label for="single">Single view</label>
		<input type="radio" name="singleView" id="gallery" value=0>
		<label for="gallery">Gallery view</label>
		<input type="submit" value="Go!">
	</form>
	<?php 
	if(isset($_GET["links"])) {
	    if(isset($_GET["singleView"]) && $_GET["singleView"] == 0) {
	        require 'bodies/straight.php';
	    } else {
	        require 'bodies/gay.php';
	    }
	}
	?>
</body>
</html>