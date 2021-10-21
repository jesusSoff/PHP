<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Objective 3</h1>
	<?php  
		$text = "A random sentence i wrote";
		$myArray = explode(' ', $text);
		echo "<pre>";
		print_r($myArray);
		echo "</pre>";
		echo("Length of the string (word count): ".count($myArray));
		
	?>
</body>
</html>