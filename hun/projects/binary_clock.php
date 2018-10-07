<html lang="hu">
<head>
    <?php include('../../include/head.html'); ?>
    <title>Bináris Óra <?php include('../title.html'); ?></title>
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
			<p>Idő: <span id="time"></span></p>
		</div>

		<div class="explanation">
			<h2>Bináris Óra</h2>
			<p>BCD alapú, Javascriptben írt bináris óra. A script az oldal betültése után automatikusan elindul. A fő függvény másodpercenként lefut, és egy bizonyos, a háttérszínt megváltoztató CSS osztályt ad a megfelelő celláknak.</p>
			<p>Implementáció: Miután beillesztjük a táblázatot tartalmazó HTML kódot az oldalba, a CSS osztályokat a CSS fájlba és belinkeljük a JS fájlt az oldal aljára, az óra használatra kész. Minden módosítható stíluselem megtalálható a CSS fájlban.</p>
			<a href="https://github.com/BencePasztohy/Binary-Clock" target="_blank" class="button">GitHub Oldal</a>
			<a href="http://localhost/portfolio.ws/projects.php" class="button">Vissza</a>
		</div>
	</div>
</main>
    <script src="../../js/binary_clock.js"></script>
    <script src="../../js/main.js"></script>
</body>
</html>