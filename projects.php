<!DOCTYPE html>
<?php 

include('include/session.php');
if ($_SESSION['language'] == 'eng') {
    include('eng/projects/projects.php');
} else {
    include('hun/projects/projects.php');
}
?>