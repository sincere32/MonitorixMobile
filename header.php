<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>MonitorixMobile : Access Monitorix from Mobile</title>
	<link rel="icon" type="image/x-icon" href="favicon.ico"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="jqmobile/jquery.mobile-1.4.0.min.css"/>
	<link rel="stylesheet" href="jqmobile/jquery.mobile.theme-1.4.0.min.css"/>
	<script type="text/javascript" src="jqmobile/jquery.min.js"></script>
	<script type="text/javascript" src="jqmobile/jquery.mobile-1.4.0.min.js"></script>
</head>
<body>
<?php
include_once 'config.php';
define('VERSION', '0.5');
?>
<div data-role="page" data-theme="<?php echo $theme ?>" data-add-back-btn="true">
	<div data-role="header" data-theme="<?php echo $theme ?>">
		<a data-icon="back" data-role="button" href="index.php" data-transition="slide" data-theme="<?php echo $theme ?>" >Back</a>
		<h1><?php echo HOST ?></h1>
		<a data-icon="refresh" data-role="button" onclick="javascript:load();" data-iconpos="right" data-theme=""<?php echo $theme ?>">Refesh</a>
	</div>