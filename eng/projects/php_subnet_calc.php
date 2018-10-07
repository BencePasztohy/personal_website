<html lang="en">
<head>
    <?php include('../../include/head.html'); ?>
    <title>PHP Subnet Calculator <?php include('../title.html'); ?></title>
</head>

<body id="bg-img">
    <?php include("../header.php"); ?>

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
                        <td><input type="submit" value="Calculate" class="button submitbutton" ></td>
                    </tr>
                </table>
            </form>
		</div>

		<div class="explanation">
			<h2>PHP Subnet Calculator</h2>
			<p>Calculates IP subnet ranges. Filters the input against XSS attacs then validates it, so only properly formatted, non-null information enters the calculator itself. The results are displayed in a separate page, formatted with a table.</p>
			<p>The result page's formatting is card-coded into the PHP file itself.</p>
			<a href="https://github.com/BencePasztohy/PHP-Subnet-Calculator" target="_blank" class="button">GitHub Page</a>
			<a href="http://localhost/portfolio.ws/projects.php?lang=eng" class="button">Back</a>
		</div>
	</div>
</main>
    <script src="../../js/binary_clock.js"></script>
    <script src="../../js/main.js"></script>
</body>
</html>