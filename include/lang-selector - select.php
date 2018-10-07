<?php 
if (file_exists('include/session.php')) {
    include('include/session.php');
} else if (file_exists('../include/session.php')) {
    include('../include/session.php');
} else {
    include('../../include/session.php');
}
?>
<select class="lang-selector" onChange="document.location.href = '?lang=' + this.value" width="200px">
    <?php if($_SESSION['language'] == 'eng') {
        ?> <option value="hun">HUN</option> <?php
        ?> <option selected="selected" value="eng">ENG</option> <?php
    } else {
        ?> <option selected="selected" value="hun">HUN</option> <?php
        ?> <option value="eng">ENG</option> <?php
    } ?>
    
</select>