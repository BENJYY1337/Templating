<?php
$title = 'Accueil';
$style = "";
?>

<?php ob_start(); ?>

<div class="container">
    <a href="page1">Page une</a>
    <a href="page2">Page deux</a>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>