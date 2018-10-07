<?php include('include/session.php'); ?>
<select name="lang-selector" id="lang-selector" onChange="document.location.href = '?lang=' + this.value">
    <?php if($_SESSION['language'] == 'eng') {
        ?> <option value="hun">HUN</option> <?php
        ?> <option selected="selected" value="eng">ENG</option> <?php
    } else {
        ?> <option selected="selected" value="hun">HUN</option> <?php
        ?> <option value="eng">ENG</option> <?php
    } ?>
    
</select>