<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Objective N1</h1>
	<?php  
		$currentTime = time();
		echo("<p> Current date by french standarts: ".date("d-m-Y",$currentTime)."</p>");
		echo("<p> Default format : ".date("Y-m-d",$currentTime)."</p>");
		echo("<p> Current date : ".date("d-m-Y",$currentTime)."</p>");
		echo("<p> Day before the current date : ".date("d-m-Y",$currentTime - 24*3600)."</p>");
		$bday = mktime(0,0,0,12,16,2021);
		echo("<p> The date of my birthday : ".date("d-m-Y",$bday)."</p>");
		echo("<p> Number of the week : ".date("W",$bday)."</p>");
		$mybday = strtotime("2022-12-16");
		echo("<p> The date of my birthday (with strtotime): ".date("d-m-Y",$mybday)."</p>");
		$weekaftermybday = strtotime("+1 week", $mybday);
		$monthaftermybday = strtotime("+1 month", $mybday);
		echo("<p> Week after the date of my birthday (with strtotime): ".date("d-m-Y",$weekaftermybday)."</p>");		
		echo("<p> Month after the date of my birthday (with strtotime): ".date("d-m-Y",$monthaftermybday)."</p>");
		for ($i = 1 ; $i<=12 ; $i++){
			if($i == 1){ 
				echo("<p> Date after $i month : ".date("Y-m-d",strtotime("+$i month", $currentTime))."</p>");
			}
			else{
				echo("<p> Date after $i months : ".date("Y-m-d",strtotime("+$i month", $currentTime))."</p>");	
			}
		}
		echo("<p> Current date : ".date("l d F Y H:i:s A")."</p>");
		echo("<p> Current date (default): ".strftime("%A %d %B %Y %X %Z")."</p>"); 
		setlocale(LC_TIME,"fr");
		echo("<p> Current date (French): ".strftime("%A %d %B %Y %X %Z")."</p>"); 
	?>
</body>
</html>