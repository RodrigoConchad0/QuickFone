<?php
// Define a URL base dinamicamente
$base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . "/QuickFone-main/";
?>
<link rel="stylesheet" href="<?= $base_url ?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= $base_url ?>/css/bootstrap-icons.min.css">