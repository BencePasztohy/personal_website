<html lang="hu">
<head>
    <?php include('../../include/head.html'); ?>
    <title>Portfólió Weboldal <?php include('../title.html'); ?></title>
</head>

<body id="bg-img">
    <?php include("../header.html"); ?>

    <main id="project-main">
	<div class="project-container">
		<div class="demo">
            <img src="../images/portf_hun.png" alt="portf">
		</div>

		<div class="explanation">
            <h2>Személyes Portfolio Oldal</h2>
            <p>Ez a weboldal. Egy saját magam által kódolt oldal, aminek elkészítéséhez HTML-t, PHP-t, JavaScriptet és Sass-t hasznátam. A felépítést és a színpalettát ez a Brad Traversy által készített <a href="https://www.youtube.com/playlist?list=PLillGF-RfqbYoGoCjKoMOkVznV6aSXKzU" target="_blank" class="inline-link">YouTube videósorozat</a> inspirálta.</p>
            <p>A weblap szokványos diveket használ a menü és a fő tartalom elkülönítésére, és CSS Flexboxot az egyes oldalak tartalmának struktúrálására. Minden animáció CSS alapú. A kisképernyős beúszó menut egy JavaScript click event triggereli.</p>
            <p>A menü linkjeit egy külön HTML oldal tartalmazza, amit a PHP egy inlcude() paranccsal húz be minde egyes oldalra.</p>
            <a href="https://github.com/BencePasztohy/personal_website" target="_blank" class="button">GitHub Oldal</a>
			<a href="http://localhost/portfolio.ws/projects.php" class="button">Vissza</a>
		</div>
	</div>
</main>
    <script src="../../js/main.js"></script>
</body>
</html>