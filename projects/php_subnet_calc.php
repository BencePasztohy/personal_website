<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <title>PHP Alhálózat Kalkulátor</title>
</head>

<body id="bg-img">
<?php include("../header.html"); ?>
<main id="project-main">
	<div class="project-container">
		<div class="demo subnet">
            <form name="inputForm" action="ipsnc_calculator.php" method="get">
                <table>
                    <tr>
                        <td>IP: </td>
                        <td><input type="text" name="input_ip"></td>
                    </tr>
                    <tr>
                        <td>SM: </td>
                        <td><input type="text" name="input_sm"></td>
                        <td><input type="submit" value="Számítás" class="button submitbutton" ></td>
                    </tr>
                </table>
            </form>
		</div>

		<div class="explanation">
        <h2>PHP Alhálózat Kalkulátor</h2>
        <p>IP alhálózati tartományok kiszámolására. A PHP script megszűri a bevitt adatot XSS támadások ellen majd validálja azt, biztosítva, hogy csak megfelelően formázott, nem NULL információ jut el magához a fő függvényhez. Az eredmény egy külön oldalon jelenik meg, egy táblázat segítségével formázva.</p>
        <p>Az eredmény formázása magába a PHP fájlba van kódolva.</p>
        <a href="https://github.com/BencePasztohy/PHP-Subnet-Calculator" target="_blank" class="button">GitHub Oldal</a>
        <a href="../projects.php" class="button">Vissza</a>
		</div>
	</div>
</main>
<script src="../js/main.js"></script>
</body>

</html>