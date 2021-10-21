<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Objective N2</h1>
	<?php  
		$text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque finibus quis enim id malesuada. Maecenas nulla erat, egestas quis vulputate quis, tristique nec elit.";
		echo("<p>".$text."</p>");
		echo("<p>The length of the paragraph : ".strlen($text)."</p>");
		$upText = strtoupper($text);
		echo("<p>".$upText."</p>");
		$fupText = ucwords($text);
		echo("<p>".$fupText."</p>");
		$sub1 = substr($text, 0, 10);
		$sub2 = substr($text, 10, 20);
		echo("<p>Subtext 1 : ".$sub1."</p>");
		echo("<p>Subtext 2 : ".$sub2."</p>");
		echo("<p>Subtext 1+2 : ".$sub1.$sub2."</p>");
		$text = "      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque finibus quis enim id malesuada. Maecenas nulla erat, egestas quis vulputate quis, tristique nec elit.      ";
		echo("Left trimmed text : |".$text."|<br>");
		echo("Left trimmed text : |".ltrim($text)."|<br>");
		echo("Right trimmed text : |".rtrim($text)."|<br>");
		echo("Both trimmed text : |".trim($text)."|<br>");
		$password = "someword";
		$passwordhash = md5($password);
		echo("<p>This is the password : ".$password."<p>");
		echo("<p>This is the hash  : ".$passwordhash."<p>");

	?>
</body>
</html>