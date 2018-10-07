<!DOCTYPE html>
<?php 
session_start();
include('include/session.php');
if ($_SESSION['language'] == 'eng') {
    include('eng/index.php');
} else {
    include('hun/index.php');
}
?>