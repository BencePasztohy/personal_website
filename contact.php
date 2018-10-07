<!DOCTYPE html>
<?php 

include('include/session.php');
if ($_SESSION['language'] == 'eng') {
    include('eng/contact.php');
} else {
    include('hun/contact.php');
}
?>