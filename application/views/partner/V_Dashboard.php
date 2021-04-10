<?php
$this->load->view('partner/parts/V_Header');
$this->load->view('partner/parts/V_Navigation');

$name 	= $this->session->userdata('nama');
$email 	= $this->session->userdata('email');
$id 	= $this->session->userdata('id_partner');
?>
<!-- BEGIN: Content -->
<div class="content">
	<!-- BEGIN: Top Bar -->
	<div class="top-bar">
		<!-- BEGIN: Breadcrumb -->
		<div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="">Application</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Dashboard</a> </div>
		<!-- END: Breadcrumb -->
		<!-- BEGIN: Search -->

		<!-- END: Search -->
		<!-- BEGIN: Notifications -->

		<!-- END: Notifications -->
		<!-- BEGIN: Account Menu -->
		<div class="intro-x dropdown w-8 h-8">
			<div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in" role="button" aria-expanded="false">
				<img alt="Midone Tailwind HTML Admin Template" src="<?php echo base_url();?>assets/dist/images/profile-6.jpg">
			</div>
			<div class="dropdown-menu w-56">
				<div class="dropdown-menu__content box bg-theme-26 dark:bg-dark-6 text-white">
					<div class="p-4 border-b border-theme-27 dark:border-dark-3">
						<div class="font-medium"><?php echo $name?></div>
						<div class="text-xs text-theme-28 mt-0.5 dark:text-gray-600"><?php echo $email?></div>
					</div>
					<div class="p-2">
						<a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile </a>
						<a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="edit" class="w-4 h-4 mr-2"></i> Add Account </a>
						<a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
						<a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="help-circle" class="w-4 h-4 mr-2"></i> Help </a>
					</div>
					<div class="p-2 border-t border-theme-27 dark:border-dark-3">
						<a href="<?php echo base_url('partner/logout')?>" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
					</div>
				</div>
			</div>
		</div>
		<!-- END: Account Menu -->
	</div>
	<!-- END: Top Bar -->
	<div class="grid grid-cols-12 gap-6">
		<div class="col-span-12 xxl:col-span-9">
			<div class="grid grid-cols-12 gap-6">
				<!-- BEGIN: General Report -->
				<div class="col-span-12 mt-8">
					<div class="intro-y flex items-center h-10">
						<h2 class="text-lg font-medium truncate mr-5">
							General Report
						</h2>
						<a href="" class="ml-auto flex text-theme-1 dark:text-theme-10"> <i data-feather="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data </a>
					</div>

				</div>
				<!-- END: General Report -->
			</div>
		</div>
	</div>
</div>
<!-- END: Content -->
<?php
$this->load->view('admin/parts/V_Footer');
?>
