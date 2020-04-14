<?php
$title = 'Page une';
$style = 'style1';
?>

<?php ob_start(); ?>

<div class="container">
    <a href="page1">Page une</a>
    <a href="page2">Page deux</a>
</div>
<h1>PAGE1</h1>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>