<?php

if(isset($_POST["submit"]))
{
		$ans = $_POST['answer'];

	if($ans=="aluminium" || $ans=="Aluminium" || $ans=="ALUMINIUM"){
		header("location: s2.html");
	}
}
		?>


<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset="utf-8"/>
	<meta name="author" content="first">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
?????????????????????????
	</title>
	</head>
	<body>
		<style>
		body{
		  background-color: #2babc2;
		  background-image: url("https://www.transparenttextures.com/patterns/green-gobbler.png");
		  /* This is mostly intended for prototyping; please download the pattern and re-host for production environments. Thank you! */
		  color: #e6e6e6;
		  padding: 100px;
		  font-family: Arial, Helvetica, sans-serif;
		}

		h1 { font-family: Garamond; font-size: 32px; font-style: normal; font-variant: normal; font-weight: 900; line-height: 30px; }
		  .pad{
		    margin: 0;
		     position: absolute;               /* 2 */
		     top: 50%;                         /* 3 */
		     transform: translate(0, -50%) }   /* 4 */

		  }

		  input, textarea {
		  background-color: blue;
		}
</style>
<div class = "pad">
			<h1>
				I come in different shapes although I emanate from the ground. <br>
				 You can see me in the sky, yet you can find me in your dwelling. <br>
				 I am the most abundant of my kind and I am commonly associated <br>
				 with the numbers 13 and 27 <i>(if generous)</i>. Who am I?

	 </h1>
	 <form method = "POST">
								<input type="text" name="answer" STYLE="font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #72A4D2;" size="10" maxlength="30">

								<input type="submit" name="submit" value="?????????" STYLE="font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #72A4D2;" size="10" maxlength="30">
</div>


	</body>
</html>
</html>
