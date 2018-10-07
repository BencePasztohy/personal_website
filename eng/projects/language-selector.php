<html lang="en">
<head>
    <?php include('../../include/head.html'); ?>
    <title>Language Selector <?php include('../title.html'); ?></title>
</head>

<body id="bg-img">
    <?php include("../header.php"); ?>

    <main id="project-main">
        <div class="project-container">
            <div class="demo">
                <img src="../images/multilang.png" alt="lang-selector">
            </div>

            <div class="explanation">
                <h2>Language Selector</h2>
                <p>Mechanism to select the language of a website, made with HTML, PHP and JS.</p>
                <p>The site is pieced together through include() functions based on a value of a PHP session. The session's default value is Hungarian, but it can be easily changed. The dropdown menu uses an onChange() function to modify the session's value through $_GET, which then reloads the page in the new language and modifies the selected value in the dropdown menu.</p>
                <a href="https://github.com/BencePasztohy/language-selector" target="_blank" class="button">GitHub Page</a>
                <a href="http://localhost/portfolio.ws/projects.php?lang=eng" class="button">Back</a>
            </div>
        </div>
    </main>
    <script src="../../js/main.js"></script>
</body>
</html>