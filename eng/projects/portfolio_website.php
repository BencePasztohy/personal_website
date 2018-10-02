<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <title>Portfolio Website</title>
</head>

<body id="bg-img">
<?php include("../header.html"); ?>
<main id="project-main">
	<div class="project-container">
		<div class="demo ">
            <img src="../images/portf.png" alt="">
		</div>

		<div class="explanation">
        <h2>Personal Portfolio Website</h2>
        <p>This very website. It's a custom-made, responsive site, with HTML, PHP, JavaScript and Sass. The layout and color design was inspired by this <a href="https://www.youtube.com/playlist?list=PLillGF-RfqbYoGoCjKoMOkVznV6aSXKzU" target="_blank" class="inline-link">YouTube tutorial</a> made by Brad Traversy.</p>
        <p>It uses standard divs as the main structure, and each subsequent page was built with CSS flexbox. All the animations use CSS. The small-screen menu is triggered with a JavaScript click event.</p>
        <a href="https://github.com/BencePasztohy/portfolio-website" target="_blank" class="button">GitHub Page</a>
        <a href="../projects.php" class="button">Back</a>
		</div>
	</div>
</main>
<script src="../js/main.js"></script>
</body>

</html>