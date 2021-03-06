<!DOCTYPE html>
<!--
Template Name: Midone - HTML Admin Dashboard Template
Author: Left4code
Website: http://www.left4code.com/
Contact: muhammadrizki@left4code.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" class="light">
<!-- BEGIN: Head -->
<head>
	<meta charset="utf-8">
	<link href="<?php echo base_url();?>assets/dist/images/logo.svg" rel="shortcut icon">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
	<meta name="keywords" content="admin template, Midone admin template, dashboard template, flat admin template, responsive admin template, web app">
	<meta name="author" content="LEFT4CODE">
	<title><?php echo $title?></title>
	<!-- BEGIN: CSS Assets-->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/app.css" />
	<!-- END: CSS Assets-->
</head>
<!-- END: Head -->
<body class="login">
<div class="container sm:px-10">
	<div class="block xl:grid grid-cols-2 gap-4">
		<!-- BEGIN: Login Info -->
		<div class="hidden xl:flex flex-col min-h-screen">
			<a href="" class="-intro-x flex items-center pt-5">
				<img alt="Midone Tailwind HTML Admin Template" class="w-6" src="<?php echo base_url();?>assets/dist/images/logo.svg">
				<span class="text-white text-lg ml-3"> Alpha<span class="font-medium">Omega</span> </span>
			</a>
			<div class="my-auto">
				<img alt="Midone Tailwind HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="<?php echo base_url();?>assets/dist/images/illustration.svg">
				<div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
					A few more clicks to
					<br>
					sign in to your account.
				</div>
				<div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-gray-500">Manage all in one place</div>
			</div>
		</div>
		<!-- END: Login Info -->
		<!-- BEGIN: Login Form -->
		<div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
			<div class="my-auto mx-auto xl:ml-20 bg-white dark:bg-dark-1 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
				<?php if(validation_errors()||$this->session->flashdata('failed')){ ?>
					<div class="alert alert-danger alert-dismissible show flex items-center mb-2" role="alert">
						<i data-feather="alert-octagon" class="w-6 h-6 mr-2"></i>
						<?php echo validation_errors(); ?>
						<?php echo $this->session->flashdata('failed'); ?>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
							<i data-feather="x" class="w-4 h-4"></i>
						</button>
					</div>
				<?php }?>
				<form method="post" action="<?php echo base_url('login/auth') ?>">
					<h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
						Sign In
					</h2>
					<div class="intro-x mt-2 text-gray-500 xl:hidden text-center">A few more clicks to sign in to your account. Manage all your e-commerce accounts in one place</div>
					<div class="intro-x mt-8">
						<input type="email"
							   class="intro-x login__input form-control py-3 px-4 border-gray-300 block"
							   placeholder="Email"
							   name="email_admin"
						>
						<input type="password"
							   class="intro-x login__input form-control py-3 px-4 border-gray-300 block mt-4"
							   placeholder="Password"
							   name="password"
						>
					</div>
					<div class="intro-x flex text-gray-700 dark:text-gray-600 text-xs sm:text-sm mt-4">
						<div class="flex items-center mr-auto">
							<input id="remember-me" type="checkbox" class="form-check-input border mr-2">
							<label class="cursor-pointer select-none" for="remember-me">Remember me</label>
						</div>
						<a href="">Forgot Password?</a>
					</div>
					<div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
						<input type="submit"
							   class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top"
							   value="Login"
						>
					</div>
				</form>
			</div>
		</div>
		<!-- END: Login Form -->
	</div>
</div>
<!-- BEGIN: Dark Mode Switcher-->
<div data-url="login-dark-login.html" class="dark-mode-switcher cursor-pointer shadow-md fixed bottom-0 right-0 box dark:bg-dark-2 border rounded-full w-40 h-12 flex items-center justify-center z-50 mb-10 mr-10">
	<div class="mr-4 text-gray-700 dark:text-gray-300">Dark Mode</div>
	<div class="dark-mode-switcher__toggle border"></div>
</div>
<!-- END: Dark Mode Switcher-->
<!-- BEGIN: JS Assets-->
<script src="<?php echo base_url();?>assets/dist/js/app.js"></script>
<!-- END: JS Assets-->
</body>
</html>
