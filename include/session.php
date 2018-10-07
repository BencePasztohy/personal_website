<?php
// $_SESSION['language'] = 'eng';
$_SESSION['language'] = 'hun';
if (isset($_GET["lang"])) $_SESSION["language"] = $_GET["lang"];
else $_SESSION['language'] = 'hun';
?>