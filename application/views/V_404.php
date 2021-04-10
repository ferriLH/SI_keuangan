<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en" class="light">
<!-- BEGIN: Head -->
<head>
	<meta charset="utf-8">
	<link href="<?php echo base_url();?>assets/dist/images/logo.svg" rel="shortcut icon">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
	<meta name="keywords" content="admin template, Midone admin template, dashboard template, flat admin template, responsive admin template, web app">
	<meta name="author" content="LEFT4CODE">
	<title>404 Page Not Found</title>
	<!-- BEGIN: CSS Assets-->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/app.css" />
	<!-- END: CSS Assets-->
</head>
<!-- END: Head -->
<body class="main">
<div class="container">
	<!-- BEGIN: Error Page -->
	<div class="error-page flex flex-col lg:flex-row items-center justify-center h-screen text-center lg:text-left">
		<div class="-intro-x lg:mr-20">
			<img alt="Midone Tailwind HTML Admin Template" class="h-48 lg:h-auto" src="<?php echo base_url()?>assets/dist/images/error-illustration.svg">
		</div>
		<div class="text-white mt-10 lg:mt-0">
			<div class="intro-x text-8xl font-medium">404</div>
			<div class="intro-x text-xl lg:text-3xl font-medium mt-5">Oops. This page has gone missing.</div>
			<div class="intro-x text-lg mt-3">You may have mistyped the address or the page may have moved.</div>
			<a href="<?php echo base_url()?>">
				<button class="intro-x btn py-3 px-4 text-white border-white dark:border-dark-5 dark:text-gray-300 mt-10">Back to Home</button>
			</a>
		</div>
	</div>
	<!-- END: Error Page -->
</div>
<!-- BEGIN: JS Assets-->
<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
<script src="<?php echo base_url()?>assets/dist/js/app.js"></script>
<!-- END: JS Assets-->
</body>
</html>