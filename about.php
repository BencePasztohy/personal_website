<!DOCTYPE html>
<?php 

include('include/session.php');
if ($_SESSION['language'] == 'eng') {
    include('eng/about.php');
} else {
    include('hun/about.php');
}
?>