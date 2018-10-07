<?php 
if (file_exists('include/session.php')) {
    include('include/session.php');
} else if (file_exists('../include/session.php')) {
    include('../include/session.php');
} else {
    include('../../include/session.php');
}
?>
<span class="select" onClick="document.location.href = '?lang=hun'">HUN</span>
<span class="bar">|</span>
<span class="select" onClick="document.location.href = '?lang=eng'">ENG</span>
