<html lang="hu">
<head>
    <?php include('../../include/head.html'); ?>
    <title>Nyelvválasztó <?php include('../title.html'); ?></title>
</head>

<body id="bg-img">
    <?php include("../header.php"); ?>

    <main id="project-main">
        <?php include('../../include/lang-selector.php'); ?>
        <div class="project-container">
            <div class="demo">
                <img src="../images/multilang.png" alt="lang-selector">
            </div>

            <div class="explanation">
            <h2>Nyelvválasztó</h2>
                <p>Weboldal nyelvét kiválasztó mechanizmus, HTML, PHP és JS felhasználásával.</p>
                <p>Az index.php egy PHP session változó értéke alapján állítja össze az oldal tartalmát include()-okon keresztül. A session alapértelmezett értéke magyar, de könnyen átállítható. A legördülő menü onChange() függvényel $_GET-en keresztül átírja a session értékét, ami újratölti az oldalt az új érték szerint, és átállítja a legördülő menü kiválasztott értékét is. </p>
                <a href="https://github.com/BencePasztohy/language-selector" target="_blank" class="button">GitHub Oldal</a>
                <a href="http://localhost/portfolio.ws/projects.php" class="button">Vissza</a>
            </div>
        </div>
    </main>
    <script src="../../js/main.js"></script>
</body>
</html>