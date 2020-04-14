<?php
$title = 'Page deux';
$style = 'style2';
?>

<?php ob_start(); ?>

<div class="container">
    <a href="page1">Page une</a>
    <a href="page2">Page deux</a>
</div>
<h1>PAGE2</h1>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>