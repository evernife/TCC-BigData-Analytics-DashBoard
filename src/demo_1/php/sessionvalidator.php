<!DOCTYPE html>
<?php
session_start();
if( !isset($_SESSION['username']) ){
    session_destroy();
    header('Location:../../login.html');
    exit();
}
?>


