<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <title>Projects</title>
</head>

<body id="bg-img">
<?php include("../header.html"); ?>
<main id="project-main">
	<div class="project-container">
		<div class="demo">
			<table>
				<tr>
					<td id="6-1"></td>
					<td id="5-1"></td>	
					<td id="4-1"></td>
					<td id="3-1"></td>
					<td id="2-1"></td>
					<td id="1-1"></td>
				</tr><tr>
					<td id="6-2"></td>
					<td id="5-2"></td>
					<td id="4-2"></td>
					<td id="3-2"></td>
					<td id="2-2"></td>
					<td id="1-2"></td>
				</tr><tr>
					<td id="6-3"></td>
					<td id="5-3"></td>
					<td id="4-3"></td>
					<td id="3-3"></td>
					<td id="2-3"></td>
					<td id="1-3"></td>
				</tr><tr>
					<td id="6-4"></td>
					<td id="5-4"></td>
					<td id="4-4"></td>
					<td id="3-4"></td>
					<td id="2-4"></td>
					<td id="1-4"></td>
				</tr>
			</table>
			<p>Time: <span id="time"></span></p>
		</div>

		<div class="explanation">
			<h2>Binary Clock</h2>
			<p>A BCD based binary clock, written in JavaScript. The whole main function cycles every second, and adds a certain class to each cell with a background property. It auto-starts on page load and begins showing the time. </p>
			<p>Implementation: paste the HTML code into the page, the CSS into the CSS file, and link the JS at the bottom. The CSS has every styling options needed for a basic display. </p>
			<a href="https://github.com/BencePasztohy/Binary-Clock" target="_blank" class="button">GitHub Page</a>
			<a href="../projects.php" class="button">Back</a>
		</div>
	</div>
</main>
<script src="../js/binary_clock.js"></script>
<script src="../js/main.js"></script>
</body>

</html>