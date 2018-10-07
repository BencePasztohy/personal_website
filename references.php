<!DOCTYPE html>
<?php 

include('include/session.php');
if ($_SESSION['language'] == 'eng') {
    include('eng/references/references.php');
} else {
    include('hun/references/references.php');
}
?>