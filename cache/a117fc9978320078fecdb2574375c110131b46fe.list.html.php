<?php /*%%SmartyHeaderCode:14000273015bd293b781b377-86239286%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a117fc9978320078fecdb2574375c110131b46fe' => 
    array (
      0 => '../../templates/back-end/penguin/category/list.html',
      1 => 1538456116,
      2 => 'file',
    ),
    '19b01e268ee2de01c3d1e0dee5e3489fe757f2cd' => 
    array (
      0 => '/home/u5183746/public_html/laundry.id/templates/back-end/penguin/includes/head.html',
      1 => 1538456120,
      2 => 'file',
    ),
    'f785f3b72631f470c0625ef892c96f11cc2ec974' => 
    array (
      0 => '/home/u5183746/public_html/laundry.id/templates/back-end/penguin/includes/sidebar.html',
      1 => 1538456120,
      2 => 'file',
    ),
    '159c8283a96384917a8b183f0f224b53a8e5c184' => 
    array (
      0 => '/home/u5183746/public_html/laundry.id/templates/back-end/penguin/includes/footer.html',
      1 => 1538456120,
      2 => 'file',
    ),
    '03756350d2402d879b23738023b6f6db05024476' => 
    array (
      0 => '/home/u5183746/public_html/laundry.id/templates/back-end/penguin/includes/footer_js.html',
      1 => 1538456120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14000273015bd293b781b377-86239286',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5be54ed2944324_16689264',
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be54ed2944324_16689264')) {function content_5be54ed2944324_16689264($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>laundry.ID</title>	
	<link href="http://laundry.id/templates/back-end/penguin/assets/images/favicon.ico" rel="icon" type="image/png">
	
	<!-- Global stylesheets -->	
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
	<link type="text/css" rel="stylesheet" href="http://laundry.id/templates/back-end/penguin/assets/fonts/fonts.css">
        <link type="text/css" rel="stylesheet" href="http://laundry.id/templates/back-end/penguin/assets/icons/icomoon/icomoon.css">
        <link type="text/css" rel="stylesheet" href="http://laundry.id/templates/back-end/penguin/css/animate.min.css">
	<link type="text/css" rel="stylesheet" href="http://laundry.id/templates/back-end/penguin/css/bootstrap.css">   
	<link type="text/css" rel="stylesheet" href="http://laundry.id/templates/back-end/penguin/css/core.css">	
	<link type="text/css" rel="stylesheet" href="http://laundry.id/templates/back-end/penguin/css/layout.css">	
	<link type="text/css" rel="stylesheet" href="http://laundry.id/templates/back-end/penguin/css/bootstrap-extended.css">	    
	<link type="text/css" rel="stylesheet" href="http://laundry.id/templates/back-end/penguin/css/components.css">
	<link type="text/css" rel="stylesheet" href="http://laundry.id/templates/back-end/penguin/css/plugins.css">
	<link type="text/css" rel="stylesheet" href="http://laundry.id/templates/back-end/penguin/css/loaders.css">
	<link type="text/css" rel="stylesheet" href="http://laundry.id/templates/back-end/penguin/css/responsive.css">
	<link type="text/css" rel="stylesheet" href="http://laundry.id/templates/back-end/penguin/css/color-system.css">		
	<link type="text/css" rel="stylesheet" href="http://laundry.id/templates/back-end/penguin/css/fancybox/jquery.fancybox.css">
	<link type="text/css" rel="stylesheet" href="http://laundry.id/templates/back-end/penguin/assets/sweetalert2/sweetalert2.min.css">
	<link type="text/css" rel="stylesheet" href="http://laundry.id/templates/back-end/penguin/assets/bootstrap-fileinput/css/fileinput.min.css">
	<link type="text/css" rel="stylesheet" href="http://laundry.id/templates/back-end/penguin/css/burnt_sienna_light.css">	
        <link type="text/css" rel="stylesheet" href="http://laundry.id/templates/back-end/penguin/css/AdminLTE.css" />
	<link type="text/css" rel="stylesheet" href="0" id="theme">
	<script src="http://laundry.id/templates/back-end/penguin/assets/sweetalert2/sweetalert2.min.js"></script>
	<script>
		var base_tpl_url = "http://laundry.id/templates/back-end/penguin/css/themes/";
		var base_url = "http://laundry.id/";
	</script>
	<style>
		.main-nav .navbar-left {
			background-color: rgb(255, 255, 255) !important;
			height: 50px;
			padding: 0 15px;
			width: 250px !important;
		}		
	</style>
	<!-- /global stylesheets -->
</head>
<body class="material-menu" id="top">
	<!-- <div id="preloader">
		<div id="status">
			<div class="loader">
				<div class="loader-inner ball-pulse">
				  <div class="bg-blue"></div>
				  <div class="bg-amber"></div>
				  <div class="bg-success"></div>
				</div>
			</div>
		</div>
	</div> -->
	
	<header class="main-nav clearfix">	
		<div class="top-search-bar">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="search-input-addon">
							<span class="addon-icon"><i class="icon-search4"></i></span>
							<input type="text" class="form-control top-search-input" placeholder="Search">
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="navbar-left pull-left">
                    <div class="clearfix">
                        <ul class="left-branding pull-left">
                            <li><span class="left-toggle-switch"><i class="icon-menu7"></i></span></li>
                        </ul>				
                    </div>
		</div>
		
		<div class="navbar-right pull-right">
                    <div class="clearfix">				
                    <ul class="pull-right top-right-icons">
                                                    <li class="dropdown-toggle hidden-xs" style="border-left: 1px solid #ffffff;">
                                <a href="http://laundry.id/adminweb/pesanandalamproses/pesananbelumlunas/" class="dropdown-toggle" style="width: 100%; padding-left: 10px; padding-right: 30px;"><i class="icon-cart"></i>
                                <span id="total_notif_belum_lunas" class="bubble">39</span>
                                <span style="color: #ffffff">Belum Bayar / KEEP </span></a>
                            </li>
                                                
                                                    <li class="dropdown-toggle hidden-xs" style="border-left: 1px solid #ffffff;">
                                <a href="http://laundry.id/adminweb/konfirmasi/list.php?status=0" class="dropdown-toggle" style="width: 100%; padding-left: 10px; padding-right: 30px;"><i class="icon-reading"></i>
                                <span id="total_notif_konfirmasi_bayar" class="bubble">4</span>
                                <span style="color: #ffffff;">Konfirmasi Bayar </span></a>
                            </li>
                                                
                                                    <li class="dropdown-toggle hidden-xs" style="border-left: 1px solid #ffffff;">
                                <a href="http://laundry.id/adminweb/pesanandalamproses/pesananperludikirim/" class="dropdown-toggle" style="width: 100%; padding-left: 10px; padding-right: 30px;"><i class="icon-box"></i>
                                <span id="total_notif_perlu_kemas" class="bubble">20</span>
                                <span style="color: #ffffff">Perlu Kemas </span></a>
                            </li>
                                                
                                                    <li class="dropdown-toggle hidden-xs" style="border-left: 1px solid #ffffff;">
                                <a href="http://laundry.id/adminweb/customer/" class="dropdown-toggle" style="width: 100%; padding-left: 10px; padding-right: 30px;"><i class="icon-users4"></i>
                                <span id="total_notif_pelanggan_baru" class="bubble">50</span>
                                <span style="color: #ffffff;">Pelanggan Baru</span></a>
                            </li>
                                                
                                                    <li class="dropdown-toggle hidden-xs" style="border-left: 1px solid #ffffff;">
                                <a href="http://laundry.id/adminweb/message_in/" class="dropdown-toggle" style="width: 100%; padding-left: 10px; padding-right: 30px;"><i class="icon-envelope"></i>
                                <span id="total_notif_pesan_baru" class="bubble">1</span>
                                <span style="color: #ffffff">Pesan Baru </span></a>
                            </li>
					
                                   
                        <li class="dropdown user-dropdown" style="border-left: 1px solid #ffffff;padding-left: 10px">
                            <a href="http://laundry.id/adminweb#" class="btn-user dropdown-toggle hidden-xs" data-toggle="dropdown"><img src="http://laundry.id/templates/back-end/penguin/assets/images/faces/face1.png" class="img-circle user" alt=""/></a>
                            <a href="http://laundry.id/adminweb#" class="dropdown-toggle visible-xs" data-toggle="dropdown"><i class="icon-more"></i></a>
                            <div class="dropdown-menu">	
                                <div class="text-center"><img src="http://laundry.id/templates/back-end/penguin/assets/images/faces/face1.png" class="img-circle img-70" alt=""/></div>
                                <h5 class="text-center"><b>Hi! Administrator</b></h5>
                                <ul class="more-apps">
                                        <!-- li><a href="http://laundry.id/templates/back-end/penguin/material/user_profile_social.html"><i class="icon-profile"></i> My profile</a></li -->
                                        <!-- li><a href="http://laundry.id/adminweb#"><i class="icon-envelop5"></i> Inbox <span class="badge badge-danger pull-right">4</span></a></li -->
                                        <li><a href="http://laundry.id/adminweb/editprofile/"><i class="icon-profile"></i> My Profile</a></li>
                                        <li><a href="http://laundry.id/adminweb/gantipassword/edit.php"><i class="icon-lock5"></i> Ganti Password</a></li>
                                </ul>
                                <div class="text-center"><a href="http://laundry.id/adminweb/logout.php" class="btn btn-sm btn-info"><i class="icon-exit3 i-16 position-left"></i> Logout</a></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
	</header>


	<!--sidebar-->
		<aside class="sidebar">

            <div class="left-aside-container">

                <div class="user-profile-container">

                    <div class="user-profile clearfix">

                        <div class="admin-user-thumb">

                            <img src="http://laundry.id/templates/back-end/penguin/assets/images/faces/face1.png" alt="admin" class="img-circle">

                        </div>

                        <div class="admin-user-info">

                            <ul class="user-info">

                                <li><a href="http://laundry.id/adminweb/logout.php" class="text-semibold text-size-large">Administrator</a></li>

                                <li><a href="http://laundry.id/adminweb/logout.php"><small>-- subtitle here --</small></a></li>

                            </ul>

                            <div class="logout-icon"><a href="http://laundry.id/adminweb/logout.php"><i class="icon-exit2"></i></a></div>

                        </div>

                    </div>				

                </div>

                

                <div class="tab-content">

                    <div role="tabpanel" class="tab-pane active fadeIn" id="menu">

                        <ul class="sidebar-accordion">

                            <li><br />&nbsp;&nbsp;&nbsp;</li>

                            
                                <li>

                                    <a  href="http://laundry.id/adminweb/dashboard/"><i class="icon-display4"></i> Dashboard </a>

                                    
                                </li>

                            
                                <li>

                                    <a class="acc-parent active" href="#"><i class="icon-cart2"></i> Daftar Pesanan <span class="fa arrow"></span></a>

                                    
                                        <ul>

                                        
                                            <li>

                                                <a href="http://laundry.id/adminweb/pesanandalamproses/pesananbelumlunas/"><i class="fa fa-bars"></i> Belum Lunas</a>

                                            </li>

                                        
                                            <li>

                                                <a href="http://laundry.id/adminweb/pesanandalamproses/pesananperludikirim/"><i class="fa fa-bars"></i> Perlu Dikirim</a>

                                            </li>

                                        
                                            <li>

                                                <a href="http://laundry.id/adminweb/pesanandalamproses/pesanantelahdikirim/"><i class="fa fa-bars"></i> Telah Dikirim</a>

                                            </li>

                                        
                                            <li>

                                                <a href="http://laundry.id/adminweb/pesanandalamproses/pesananselesai/"><i class="fa fa-bars"></i> Selesai</a>

                                            </li>

                                        
                                            <li>

                                                <a href="http://laundry.id/adminweb/pesanandalamproses/pesanandibatalkan/"><i class="fa fa-bars"></i> Dibatalkan</a>

                                            </li>

                                        
                                            <li>

                                                <a href="http://laundry.id/adminweb/pemesanan/add.php"><i class="fa fa-desktop"></i> Buat Pesanan</a>

                                            </li>

                                        
                                        </ul>

                                    
                                </li>

                            
                                <li>

                                    <a  href="http://laundry.id/adminweb/konfirmasi/"><i class="icon-foursquare"></i> Konfirmasi Pembayaran </a>

                                    
                                </li>

                            
                                <li class="active acc-parent-li">

                                    <a class="acc-parent active" href="#"><i class="icon-book"></i> Katalog Produk <span class="fa arrow"></span></a>

                                    
                                        <ul>

                                        
                                            <li>

                                                <a href="http://laundry.id/adminweb/product/"><i class="fa fa-archive"></i> Produk</a>

                                            </li>

                                        
                                            <li>

                                                <a href="http://laundry.id/adminweb/stok/"><i class="fa fa-dropbox"></i> Stok</a>

                                            </li>

                                        
                                            <li>

                                                <a href="http://laundry.id/adminweb/category/"><i class="fa fa-folder"></i> Kategori</a>

                                            </li>

                                        
                                            <li>

                                                <a href="http://laundry.id/adminweb/brand/"><i class="fa fa-folder"></i> Merek</a>

                                            </li>

                                        
                                        </ul>

                                    
                                </li>

                            
                                <li>

                                    <a  href="http://laundry.id/adminweb/customer/"><i class="icon-users4"></i> Data Pelanggan </a>

                                    
                                </li>

                            
                                <li>

                                    <a  href="http://laundry.id/adminweb/message_in/"><i class="icon-comment-discussion"></i> Message </a>

                                    
                                </li>

                            
                                <li>

                                    <a  href="http://laundry.id/adminweb/voucher/"><i class="icon-ticket"></i> Voucher </a>

                                    
                                </li>

                            
                                <li>

                                    <a class="acc-parent active" href="#"><i class="icon-cog3"></i> Pengaturan <span class="fa arrow"></span></a>

                                    
                                        <ul>

                                        
                                            <li>

                                                <a href="http://laundry.id/adminweb/pengaturan_toko/"><i class="fa fa-edit"></i> Pengaturan Toko</a>

                                            </li>

                                        
                                            <li>

                                                <a href="http://laundry.id/adminweb/pengaturan_aplikasi/"><i class="fa fa-edit"></i> Pengaturan Aplikasi</a>

                                            </li>

                                        
                                            <li>

                                                <a href="http://laundry.id/adminweb/pengaturan_website/"><i class="fa fa-edit"></i> Pengaturan Website</a>

                                            </li>

                                        
                                            <li>

                                                <a href="http://laundry.id/adminweb/pengaturan_umum/"><i class="fa fa-edit"></i> Pengaturan Umum</a>

                                            </li>

                                        
                                            <li>

                                                <a href="http://laundry.id/adminweb/metode_pembayaran/"><i class="fa fa-edit"></i> Metode Pembayaran</a>

                                            </li>

                                        
                                            <li>

                                                <a href="http://laundry.id/adminweb/metode_pengiriman/"><i class="fa fa-edit"></i> Metode Pengiriman</a>

                                            </li>

                                        
                                        </ul>

                                    
                                </li>

                            
                                <li>

                                    <a class="acc-parent active" href="#"><i class="icon-stack-text"></i> Laporan <span class="fa arrow"></span></a>

                                    
                                        <ul>

                                        
                                            <li>

                                                <a href="http://laundry.id/adminweb/laporan_pembayaran/"><i class="fa fa-money"></i> Pembayaran</a>

                                            </li>

                                        
                                            <li>

                                                <a href="http://laundry.id/adminweb/laporan_pesanan/"><i class="fa fa-foursquare"></i> Pesanan</a>

                                            </li>

                                        
                                        </ul>

                                    
                                </li>

                            
                                <li>

                                    <a  href="http://laundry.id/adminweb/informasi/"><i class="icon-info3"></i> Informasi </a>

                                    
                                </li>

                            
                                <li>

                                    <a class="acc-parent active" href="#"><i class="icon-users"></i> Managemen User <span class="fa arrow"></span></a>

                                    
                                        <ul>

                                        
                                            <li>

                                                <a href="http://laundry.id/adminweb/jenisuser/"><i class="fa fa-truck"></i> Grup User</a>

                                            </li>

                                        
                                            <li>

                                                <a href="http://laundry.id/adminweb/pengguna/"><i class="fa fa-truck"></i> User</a>

                                            </li>

                                        
                                        </ul>

                                    
                                </li>

                            					

                        </ul>

                    </div>

                </div>          

            </div>

	</aside>


	<!--/sidebar-->
	
	<!--Page Container-->
	<section class="main-container">
			<!--Page Header-->
			<div class="header">
				<div class="header-content">
					<div class="page-title">
						<i class="icon-table position-left"></i> Category
					</div>
					<ul class="breadcrumb">
						<li><a href="http://laundry.id/adminweb">Beranda</a></li>
						<li><a href="http://laundry.id/adminweb/dashboard/">Category</a></li>
						<li class="active">List of Category</li>
					</ul>					
				</div>
			</div>		
			<!--/Page Header-->
		
			<div class="container-fluid page-content">
			
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">Keyword Pencarian</h5>				
					</div>

					<div class="panel-body no-padding-bottom">
						<div class="input-group">
							<input type="text" value="" class="form-control" name="query" id="query" placeholder="Masukan kata kunci pencarian..." />
							<span class="input-group-btn"><div id="btn_cari" type="submit" class="btn btn-default">Cari</div>
							<a class="btn btn-default" href="list.php">Reset</a></span>                                                  
						</div><br>
						<div class="form-group">
							<div id='btn_add' class="btn btn-primary">Baru</div>							<div id='btn_edit' class="btn btn-success disabled">Edit</div>							<div id='btn_delete' class="btn btn-danger disabled">Hapus</div>						</div>
					</div>
					
					<div class="table-responsive">
						<table class="table table-togglable table-hover">
							<thead>

								<tr>

									<th width="1%"><input type="checkbox" id="select_all" /></th>
									<th width="1%"><div style="text-align: center;">No.</div></th>
                                                                        <th width="10%"><div style="text-align: center;">Logo</div></th>
									<th width="20%"><div style="text-align: left;">Nama Kategori</div></th>
									<!-- th data-hide="phone, tablet" width="30%"><div style="text-align: left;">Penjelasan</div></th -->
									<th data-hide="phone, tablet" width="50%"><div style="text-align: left;">Induk Kategori</div></th>
									<th width="10%"><div style="text-align: left;">Aksi</div></th>

								</tr>

							</thead>

							<tbody>

								
								                                    

									<tr id="baris_39">

										<td align="center"><input type="checkbox" id_select="39" name="select_39" class="select" /></td>
										<td align="center">1</td>
                                                                                <td align="center">
                                                                                    <img src="http://laundry.id/uploads/category/herbal_3798.png" width="75" />
                                                                                </td>
										<td align="left">Herbal</td>

										<!-- td align="left"></td -->

										<td align="left"></td>

										<td><div style="text-align: center;  white-space: nowrap;">

												<div id_select="39" class="btn btn-success edit">Edit</div>
												<div id_select="39" class="btn btn-danger hapus">Hapus</div>                                                         

											</div>

										</td>                                          

									</tr>

									  

								                                    

									<tr id="baris_38">

										<td align="center"><input type="checkbox" id_select="38" name="select_38" class="select" /></td>
										<td align="center">2</td>
                                                                                <td align="center">
                                                                                    <img src="http://laundry.id/uploads/category/beauty-and-care_6384.png" width="75" />
                                                                                </td>
										<td align="left">Beauty and Care</td>

										<!-- td align="left"></td -->

										<td align="left"></td>

										<td><div style="text-align: center;  white-space: nowrap;">

												<div id_select="38" class="btn btn-success edit">Edit</div>
												<div id_select="38" class="btn btn-danger hapus">Hapus</div>                                                         

											</div>

										</td>                                          

									</tr>

									  

								                                    

									<tr id="baris_37">

										<td align="center"><input type="checkbox" id_select="37" name="select_37" class="select" /></td>
										<td align="center">3</td>
                                                                                <td align="center">
                                                                                    <img src="http://laundry.id/uploads/category/hp-dan-aksesoris_3721.png" width="75" />
                                                                                </td>
										<td align="left">HP dan Aksesoris</td>

										<!-- td align="left"></td -->

										<td align="left"></td>

										<td><div style="text-align: center;  white-space: nowrap;">

												<div id_select="37" class="btn btn-success edit">Edit</div>
												<div id_select="37" class="btn btn-danger hapus">Hapus</div>                                                         

											</div>

										</td>                                          

									</tr>

									  

								                                    

									<tr id="baris_36">

										<td align="center"><input type="checkbox" id_select="36" name="select_36" class="select" /></td>
										<td align="center">4</td>
                                                                                <td align="center">
                                                                                    <img src="http://laundry.id/uploads/category/cctv_9648.png" width="75" />
                                                                                </td>
										<td align="left">CCTV</td>

										<!-- td align="left">CCTV</td -->

										<td align="left">Kamera</td>

										<td><div style="text-align: center;  white-space: nowrap;">

												<div id_select="36" class="btn btn-success edit">Edit</div>
												<div id_select="36" class="btn btn-danger hapus">Hapus</div>                                                         

											</div>

										</td>                                          

									</tr>

									  

								                                    

									<tr id="baris_35">

										<td align="center"><input type="checkbox" id_select="35" name="select_35" class="select" /></td>
										<td align="center">5</td>
                                                                                <td align="center">
                                                                                    <img src="http://laundry.id/uploads/category/kamera-digital_6193.png" width="75" />
                                                                                </td>
										<td align="left">Kamera digital </td>

										<!-- td align="left">kamera digital</td -->

										<td align="left">Kamera</td>

										<td><div style="text-align: center;  white-space: nowrap;">

												<div id_select="35" class="btn btn-success edit">Edit</div>
												<div id_select="35" class="btn btn-danger hapus">Hapus</div>                                                         

											</div>

										</td>                                          

									</tr>

									  

								                                    

									<tr id="baris_34">

										<td align="center"><input type="checkbox" id_select="34" name="select_34" class="select" /></td>
										<td align="center">6</td>
                                                                                <td align="center">
                                                                                    <img src="http://laundry.id/uploads/category/drone_3962.png" width="75" />
                                                                                </td>
										<td align="left">Drone</td>

										<!-- td align="left">drone</td -->

										<td align="left">Kamera</td>

										<td><div style="text-align: center;  white-space: nowrap;">

												<div id_select="34" class="btn btn-success edit">Edit</div>
												<div id_select="34" class="btn btn-danger hapus">Hapus</div>                                                         

											</div>

										</td>                                          

									</tr>

									  

								                                    

									<tr id="baris_33">

										<td align="center"><input type="checkbox" id_select="33" name="select_33" class="select" /></td>
										<td align="center">7</td>
                                                                                <td align="center">
                                                                                    <img src="http://laundry.id/uploads/category/action-kamera_2196.png" width="75" />
                                                                                </td>
										<td align="left">Action Kamera</td>

										<!-- td align="left"></td -->

										<td align="left">Kamera</td>

										<td><div style="text-align: center;  white-space: nowrap;">

												<div id_select="33" class="btn btn-success edit">Edit</div>
												<div id_select="33" class="btn btn-danger hapus">Hapus</div>                                                         

											</div>

										</td>                                          

									</tr>

									  

								                                    

									<tr id="baris_32">

										<td align="center"><input type="checkbox" id_select="32" name="select_32" class="select" /></td>
										<td align="center">8</td>
                                                                                <td align="center">
                                                                                    <img src="http://laundry.id/uploads/category/baterai_1798.png" width="75" />
                                                                                </td>
										<td align="left">Baterai</td>

										<!-- td align="left">Baterai</td -->

										<td align="left">Elektronik</td>

										<td><div style="text-align: center;  white-space: nowrap;">

												<div id_select="32" class="btn btn-success edit">Edit</div>
												<div id_select="32" class="btn btn-danger hapus">Hapus</div>                                                         

											</div>

										</td>                                          

									</tr>

									  

								                                    

									<tr id="baris_31">

										<td align="center"><input type="checkbox" id_select="31" name="select_31" class="select" /></td>
										<td align="center">9</td>
                                                                                <td align="center">
                                                                                    <img src="http://laundry.id/uploads/category/gps_3149.png" width="75" />
                                                                                </td>
										<td align="left">GPS</td>

										<!-- td align="left"></td -->

										<td align="left">Elektronik > Elektronik Lainnya</td>

										<td><div style="text-align: center;  white-space: nowrap;">

												<div id_select="31" class="btn btn-success edit">Edit</div>
												<div id_select="31" class="btn btn-danger hapus">Hapus</div>                                                         

											</div>

										</td>                                          

									</tr>

									  

								                                    

									<tr id="baris_30">

										<td align="center"><input type="checkbox" id_select="30" name="select_30" class="select" /></td>
										<td align="center">10</td>
                                                                                <td align="center">
                                                                                    <img src="http://laundry.id/uploads/category/elektronik-lainnya_9137.png" width="75" />
                                                                                </td>
										<td align="left">Elektronik Lainnya</td>

										<!-- td align="left"></td -->

										<td align="left">Elektronik</td>

										<td><div style="text-align: center;  white-space: nowrap;">

												<div id_select="30" class="btn btn-success edit">Edit</div>
												<div id_select="30" class="btn btn-danger hapus">Hapus</div>                                                         

											</div>

										</td>                                          

									</tr>

									  

								                                    

									<tr id="baris_29">

										<td align="center"><input type="checkbox" id_select="29" name="select_29" class="select" /></td>
										<td align="center">11</td>
                                                                                <td align="center">
                                                                                    <img src="http://laundry.id/uploads/category/proyektor_8693.png" width="75" />
                                                                                </td>
										<td align="left">Proyektor</td>

										<!-- td align="left">Proyektor</td -->

										<td align="left">Elektronik</td>

										<td><div style="text-align: center;  white-space: nowrap;">

												<div id_select="29" class="btn btn-success edit">Edit</div>
												<div id_select="29" class="btn btn-danger hapus">Hapus</div>                                                         

											</div>

										</td>                                          

									</tr>

									  

								                                    

									<tr id="baris_28">

										<td align="center"><input type="checkbox" id_select="28" name="select_28" class="select" /></td>
										<td align="center">12</td>
                                                                                <td align="center">
                                                                                    <img src="http://laundry.id/uploads/category/portable-audio-player_6172.png" width="75" />
                                                                                </td>
										<td align="left">Portable Audio Player</td>

										<!-- td align="left"></td -->

										<td align="left">Elektronik</td>

										<td><div style="text-align: center;  white-space: nowrap;">

												<div id_select="28" class="btn btn-success edit">Edit</div>
												<div id_select="28" class="btn btn-danger hapus">Hapus</div>                                                         

											</div>

										</td>                                          

									</tr>

									  

								                                    

									<tr id="baris_27">

										<td align="center"><input type="checkbox" id_select="27" name="select_27" class="select" /></td>
										<td align="center">13</td>
                                                                                <td align="center">
                                                                                    <img src="http://laundry.id/uploads/category/home-theater_3718.png" width="75" />
                                                                                </td>
										<td align="left">Home Theater</td>

										<!-- td align="left"></td -->

										<td align="left">Elektronik</td>

										<td><div style="text-align: center;  white-space: nowrap;">

												<div id_select="27" class="btn btn-success edit">Edit</div>
												<div id_select="27" class="btn btn-danger hapus">Hapus</div>                                                         

											</div>

										</td>                                          

									</tr>

									  

								                                    

									<tr id="baris_26">

										<td align="center"><input type="checkbox" id_select="26" name="select_26" class="select" /></td>
										<td align="center">14</td>
                                                                                <td align="center">
                                                                                    <img src="http://laundry.id/uploads/category/speaker_4129.png" width="75" />
                                                                                </td>
										<td align="left">Speaker</td>

										<!-- td align="left">Sound </td -->

										<td align="left">Elektronik</td>

										<td><div style="text-align: center;  white-space: nowrap;">

												<div id_select="26" class="btn btn-success edit">Edit</div>
												<div id_select="26" class="btn btn-danger hapus">Hapus</div>                                                         

											</div>

										</td>                                          

									</tr>

									  

								                                    

									<tr id="baris_25">

										<td align="center"><input type="checkbox" id_select="25" name="select_25" class="select" /></td>
										<td align="center">15</td>
                                                                                <td align="center">
                                                                                    <img src="http://laundry.id/uploads/category/cd-vcd-dvd-blue-ray-player_4932.png" width="75" />
                                                                                </td>
										<td align="left">CD, VCD, DVD, BLUE-Ray Player</td>

										<!-- td align="left">Player</td -->

										<td align="left">Elektronik</td>

										<td><div style="text-align: center;  white-space: nowrap;">

												<div id_select="25" class="btn btn-success edit">Edit</div>
												<div id_select="25" class="btn btn-danger hapus">Hapus</div>                                                         

											</div>

										</td>                                          

									</tr>

									  

								                                    

									<tr id="baris_24">

										<td align="center"><input type="checkbox" id_select="24" name="select_24" class="select" /></td>
										<td align="center">16</td>
                                                                                <td align="center">
                                                                                    <img src="http://laundry.id/uploads/category/radio-tape_9724.png" width="75" />
                                                                                </td>
										<td align="left">Radio & Tape</td>

										<!-- td align="left">Player</td -->

										<td align="left">Elektronik</td>

										<td><div style="text-align: center;  white-space: nowrap;">

												<div id_select="24" class="btn btn-success edit">Edit</div>
												<div id_select="24" class="btn btn-danger hapus">Hapus</div>                                                         

											</div>

										</td>                                          

									</tr>

									  

								                                    

									<tr id="baris_23">

										<td align="center"><input type="checkbox" id_select="23" name="select_23" class="select" /></td>
										<td align="center">17</td>
                                                                                <td align="center">
                                                                                    <img src="http://laundry.id/uploads/category/perlengkapan-kantor_7842.png" width="75" />
                                                                                </td>
										<td align="left">Perlengkapan Kantor</td>

										<!-- td align="left">Alat tulis kantor </td -->

										<td align="left"></td>

										<td><div style="text-align: center;  white-space: nowrap;">

												<div id_select="23" class="btn btn-success edit">Edit</div>
												<div id_select="23" class="btn btn-danger hapus">Hapus</div>                                                         

											</div>

										</td>                                          

									</tr>

									  

								                                    

									<tr id="baris_22">

										<td align="center"><input type="checkbox" id_select="22" name="select_22" class="select" /></td>
										<td align="center">18</td>
                                                                                <td align="center">
                                                                                    <img src="http://laundry.id/uploads/category/industrial_6738.png" width="75" />
                                                                                </td>
										<td align="left">Industrial</td>

										<!-- td align="left">Industrial kemasan dll</td -->

										<td align="left"></td>

										<td><div style="text-align: center;  white-space: nowrap;">

												<div id_select="22" class="btn btn-success edit">Edit</div>
												<div id_select="22" class="btn btn-danger hapus">Hapus</div>                                                         

											</div>

										</td>                                          

									</tr>

									  

								                                    

									<tr id="baris_21">

										<td align="center"><input type="checkbox" id_select="21" name="select_21" class="select" /></td>
										<td align="center">19</td>
                                                                                <td align="center">
                                                                                    <img src="http://laundry.id/uploads/category/motor_7213.png" width="75" />
                                                                                </td>
										<td align="left">Motor</td>

										<!-- td align="left">Part dan aksesoris motor</td -->

										<td align="left"></td>

										<td><div style="text-align: center;  white-space: nowrap;">

												<div id_select="21" class="btn btn-success edit">Edit</div>
												<div id_select="21" class="btn btn-danger hapus">Hapus</div>                                                         

											</div>

										</td>                                          

									</tr>

									  

								                                    

									<tr id="baris_20">

										<td align="center"><input type="checkbox" id_select="20" name="select_20" class="select" /></td>
										<td align="center">20</td>
                                                                                <td align="center">
                                                                                    <img src="http://laundry.id/uploads/category/mobil-dan-aksesoris_3417.png" width="75" />
                                                                                </td>
										<td align="left">Mobil dan aksesoris</td>

										<!-- td align="left">Part dan akaesoria mobil</td -->

										<td align="left"></td>

										<td><div style="text-align: center;  white-space: nowrap;">

												<div id_select="20" class="btn btn-success edit">Edit</div>
												<div id_select="20" class="btn btn-danger hapus">Hapus</div>                                                         

											</div>

										</td>                                          

									</tr>

									  

								
							</tbody>

							
							<tfoot><tr><th colspan="7">

								<div style="text-align: center;">

									
									
									
										
											<span class="btn btn-info">1</span>                                

										
										                                

									
										
											<a class="btn btn-default" href="list.php?page=2">2</a>

										
										                                

									
									                                

										<a class="btn btn-default" href="list.php?page=2">Next &rarr;</a>

									                                

								</div>  

						</th></tr></tfoot>

													
										
						</tbody>
					</table>
					</div>
				</div>

				
			<!--Rightbar Chat-->
			<aside class="rightbar">
				<div class="rightbar-container">
					<div class="right-chat-bar">
						<div class="coversation-header">
							<div class="chat-back" data-popup="tooltip" data-placement="left" title="Back">
								<i class="icon-arrow-left12"></i>
							</div>
							<div class="active-conversation">
								<div class="chat-avatar">
									<img src="http://laundry.id/templates/back-end/penguin/assets/images/faces/face12.png" alt="user">
								</div>
								<div class="chat-user-status">
									<ul>
										<li class="text-semibold"> John Parker</li>
										<li><small>Online</small></li>
									</ul>
								</div>
							</div>
							<div class="conversation-actions">
								<ul>
									<li><i class="icon-phone-wave" data-popup="tooltip" data-placement="bottom" title="Call"></i></li>
									<li><i class="icon-attachment" data-popup="tooltip" data-placement="bottom" title="Send file"></i></li>
									<li><i class="icon-mic2" data-popup="tooltip" data-placement="bottom" title="Send voice"></i></li>
									<li><i class="icon-user-block" data-popup="tooltip" data-placement="bottom" title="Block"></i></li>					
								</ul>
							</div>
						</div>
						<div class="conversation-container">
							<div class="conversation-row even">
								<ul class="conversation-list">
									<li>
										<p>
											Lorem ipsum dolor sit amet?
										</p>
									</li>							
								</ul>
							</div>
							<div class="conversation-row odd">
								<ul class="conversation-list">
									<li>
										<p>
											Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus
										</p>
									</li>
								</ul>
							</div>
							<div class="conversation-row even">
								<ul class="conversation-list">
									<li>
										<p>
											Maecenas nec odio et ante tincidunt tempus. 
										</p>
									</li>
								</ul>
							</div>
							<div class="conversation-row even">
								<ul class="conversation-list">
									<li>						
										<a href="http://laundry.id/templates/back-end/penguin/assets/images/demo/pic7.jpg" class="venobox"><img src="http://laundry.id/templates/back-end/penguin/assets/images/demo/pic7.jpg" alt=""/></a>
									</li>
								</ul>
							</div>
							<div class="conversation-row odd">
								<ul class="conversation-list">
									<li>
										<p>
											Donec sodales :)
										</p>
									</li>
								</ul>
							</div>
						</div>
						<div class="chat-text-input">			
							<div class="input-group">
								<input type="text" class="form-control input-xs" placeholder="Type a message...">
								<span class="input-group-btn">
								<button class="btn btn-default" type="button"><i class="icon-enter5"></i></button>
								</span>
							</div>
						</div>
					</div>
					
					<div class="chat-user-toolbar clearfix">
						<div class="chat-user-search pull-left">
							<span class="addon-icon"><i class="icon-search4"></i></span>
							<input type="text" class="form-control" placeholder="Search">
						</div>
						<div class="add-chat-list pull-right">
							<i class="icon-user-plus" data-toggle="tooltip" data-placement="left" title="Add new user"></i>
						</div>
					</div>
					
					<div class="chat-user-container">			
						<ul class="chat-user-list">
							<li>
								<div><span class="chat-avatar"><img src="http://laundry.id/templates/back-end/penguin/assets/images/faces/face1.png" alt="Avatar"></span><span class="chat-u-info">Jane Elliott<cite>Li Europan lingues es...</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
							<li>
								<div><span class="chat-avatar"><img src="http://laundry.id/templates/back-end/penguin/assets/images/faces/face2.png" alt="Avatar"></span><span class="chat-u-info">Florence Douglas<cite>Busy</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
							<li class="chat-u-online">
								<div><span class="chat-avatar"><img src="http://laundry.id/templates/back-end/penguin/assets/images/faces/face3.png" alt="Avatar"></span><span class="chat-u-info">Jacqueline Howell<cite>Available</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
							<li class="chat-u-online">
								<div><span class="chat-avatar"><img src="http://laundry.id/templates/back-end/penguin/assets/images/faces/face4.png" alt="Avatar"></span><span class="chat-u-info">Eugine Turner<cite>Occidental in fact...</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
							<li class="chat-u-busy">
								<div><span class="chat-avatar"><img src="http://laundry.id/templates/back-end/penguin/assets/images/faces/face5.png" alt="Avatar"></span><span class="chat-u-info">Andrew Brewer<cite>Busy</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
							<li class="chat-u-away">
								<div><span class="chat-avatar"><img src="http://laundry.id/templates/back-end/penguin/assets/images/faces/face6.png" alt="Avatar"></span><span class="chat-u-info">Jonaly Smith<cite>Available</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
							<li class="chat-u-online">
								<div><span class="chat-avatar"><img src="http://laundry.id/templates/back-end/penguin/assets/images/faces/face7.png" alt="Avatar"></span><span class="chat-u-info">Ann Porter<cite>Available</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
							<li class="chat-u-away">
								<div><span class="chat-avatar"><img src="http://laundry.id/templates/back-end/penguin/assets/images/faces/face8.png" alt="Avatar"></span><span class="chat-u-info">John Deo<cite>Do not disturb</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
							<li>
								<div><span class="chat-avatar"><img src="http://laundry.id/templates/back-end/penguin/assets/images/faces/face9.png" alt="Avatar"></span><span class="chat-u-info">Marilyn Romero<cite>On refusa continuar payar...</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
							<li>
								<div><span class="chat-avatar"><img src="http://laundry.id/templates/back-end/penguin/assets/images/faces/face10.png" alt="Avatar"></span><span class="chat-u-info">Carol Gibson<cite>Gone for a weekend</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
							<li>
								<div><span class="chat-avatar"><img src="http://laundry.id/templates/back-end/penguin/assets/images/faces/face11.png" alt="Avatar"></span><span class="chat-u-info">Scott Ruiz<cite>At solmen va esser...</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
						</ul>						
					</div>		
				</div>
			</aside>
			<!--/Rightbar Chat-->
					</div>
	
		<!--Footer -->
				<footer class="footer-container">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="footer-left">
							<a href="http://laundry.id" target="_blank">laundry.ID</a>&nbsp;2018
						</span>
						</div>
					</div>				
				</div>
			</div>
		</footer>
		<!--/Footer-->
		
	</section>
	<!--/Page Container-->
	
	<!-- div class="theme-switcher">
		<span class="theme-switcher-icon">
			<i class="icon icon-color-sampler"></i>
		</span>
		
		<div class="themes-container">
			<ul class="switch-theme-colors clearfix">
				<li class="list-title">Light</li>
				<li>
					<div class="theme" id="light">
						<img src="http://laundry.id/templates/back-end/penguin/assets/images/themes/light.jpg" alt=""/>
					</div>				
				</li>
				<li class="list-title clearfix">Mirage</li>
				<li>
					<div class="theme pull-left" id="mirage">
						<img src="http://laundry.id/templates/back-end/penguin/assets/images/themes/mirage_dark.jpg" alt=""/>
					</div>				
				</li>			
				<li>
					<div class="theme pull-left" id="mirage_light">
						<img src="http://laundry.id/templates/back-end/penguin/assets/images/themes/mirage_light.jpg" alt=""/>
					</div>				
				</li>
				<li>
					<div class="theme pull-left" id="mirage_light_sidebar">
						<img src="http://laundry.id/templates/back-end/penguin/assets/images/themes/mirage_light_sidebar.jpg" alt=""/>
					</div>				
				</li>										
				<li class="list-title clearfix">Burnt Sienna</li>
				<li>
					<div class="theme pull-left" id="burnt_sienna_dark">
						<img src="http://laundry.id/templates/back-end/penguin/assets/images/themes/burnt_sienna_dark.jpg" alt=""/>
					</div>				
				</li>			
				<li>
					<div class="theme pull-left" id="burnt_sienna_light">
						<img src="http://laundry.id/templates/back-end/penguin/assets/images/themes/burnt_sienna_light.jpg" alt=""/>
					</div>				
				</li>
				<li>
					<div class="theme pull-left" id="burnt_sienna_light_sidebar">
						<img src="http://laundry.id/templates/back-end/penguin/assets/images/themes/burnt_sienna_light_sidebar.jpg" alt=""/>
					</div>				
				</li>		

				<li class="list-title clearfix">Amethyst</li>
				<li>
					<div class="theme pull-left" id="amethyst_dark">
						<img src="http://laundry.id/templates/back-end/penguin/assets/images/themes/amethyst_dark.jpg" alt=""/>
					</div>				
				</li>			
				<li>
					<div class="theme pull-left" id="amethyst_light">
						<img src="http://laundry.id/templates/back-end/penguin/assets/images/themes/amethyst_light.jpg" alt=""/>
					</div>				
				</li>
				<li>
					<div class="theme pull-left" id="amethyst_light_sidebar">
						<img src="http://laundry.id/templates/back-end/penguin/assets/images/themes/amethyst_light_sidebar.jpg" alt=""/>
					</div>				
				</li>		

				<li class="list-title clearfix">Fuchsia Blue</li>
				<li>
					<div class="theme pull-left" id="fuchsiablue_dark">
						<img src="http://laundry.id/templates/back-end/penguin/assets/images/themes/fuchsiablue_dark.jpg" alt=""/>
					</div>				
				</li>			
				<li>
					<div class="theme pull-left" id="fuchsiablue_light">
						<img src="http://laundry.id/templates/back-end/penguin/assets/images/themes/fuchsiablue_light.jpg" alt=""/>
					</div>				
				</li>
				<li>
					<div class="theme pull-left" id="fuchsiablue_light_sidebar">
						<img src="http://laundry.id/templates/back-end/penguin/assets/images/themes/fuchsiablue_light_sidebar.jpg" alt=""/>
					</div>				
				</li>

				<li class="list-title clearfix">Picton Blue</li>
				<li>
					<div class="theme pull-left" id="pictonblue_dark">
						<img src="http://laundry.id/templates/back-end/penguin/assets/images/themes/pictonblue_dark.jpg" alt=""/>
					</div>				
				</li>			
				<li>
					<div class="theme pull-left" id="pictonblue_light">
						<img src="http://laundry.id/templates/back-end/penguin/assets/images/themes/pictonblue_light.jpg" alt=""/>
					</div>				
				</li>
				<li>
					<div class="theme pull-left" id="pictonblue_light_sidebar">
						<img src="http://laundry.id/templates/back-end/penguin/assets/images/themes/pictonblue_light_sidebar.jpg" alt=""/>
					</div>				
				</li>
				
				<li class="list-title clearfix">Jungle Green</li>
				<li>
					<div class="theme pull-left" id="junglegreen_dark">
						<img src="http://laundry.id/templates/back-end/penguin/assets/images/themes/junglegreen_dark.jpg" alt=""/>
					</div>				
				</li>			
				<li>
					<div class="theme pull-left" id="junglegreen_light">
						<img src="http://laundry.id/templates/back-end/penguin/assets/images/themes/junglegreen_light.jpg" alt=""/>
					</div>				
				</li>
				<li>
					<div class="theme pull-left" id="junglegreen_light_sidebar">
						<img src="http://laundry.id/templates/back-end/penguin/assets/images/themes/junglegreen_light_sidebar.jpg" alt=""/>
					</div>				
				</li>
				
				<li class="list-title clearfix">Fern</li>
				<li>
					<div class="theme pull-left" id="fern_dark">
						<img src="http://laundry.id/templates/back-end/penguin/assets/images/themes/fern_dark.jpg" alt=""/>
					</div>				
				</li>			
				<li>
					<div class="theme pull-left" id="fern_light">
						<img src="http://laundry.id/templates/back-end/penguin/assets/images/themes/fern_light.jpg" alt=""/>
					</div>				
				</li>
				<li>
					<div class="theme pull-left" id="fern_light_sidebar">
						<img src="http://laundry.id/templates/back-end/penguin/assets/images/themes/fern_light_sidebar.jpg" alt=""/>
					</div>				
				</li>
				
				<li class="list-title clearfix">Sunglow</li>
				<li>
					<div class="theme pull-left" id="sunglow_dark">
						<img src="http://laundry.id/templates/back-end/penguin/assets/images/themes/sunglow_dark.jpg" alt=""/>
					</div>				
				</li>			
				<li>
					<div class="theme pull-left" id="sunglow_light">
						<img src="http://laundry.id/templates/back-end/penguin/assets/images/themes/sunglow_light.jpg" alt=""/>
					</div>				
				</li>
				<li>
					<div class="theme pull-left" id="sunglow_light_sidebar">
						<img src="http://laundry.id/templates/back-end/penguin/assets/images/themes/sunglow_light_sidebar.jpg" alt=""/>
					</div>				
				</li>
				
				<li class="list-title clearfix">Regent Grey</li>
				<li>
					<div class="theme pull-left" id="regentgrey_dark">
						<img src="http://laundry.id/templates/back-end/penguin/assets/images/themes/regentgrey_dark.jpg" alt=""/>
					</div>				
				</li>			
				<li>
					<div class="theme pull-left" id="regentgrey_light">
						<img src="http://laundry.id/templates/back-end/penguin/assets/images/themes/regentgrey_light.jpg" alt=""/>
					</div>				
				</li>
				<li>
					<div class="theme pull-left" id="regentgrey_light_sidebar">
						<img src="http://laundry.id/templates/back-end/penguin/assets/images/themes/regentgrey_light_sidebar.jpg" alt=""/>
					</div>				
				</li>
			</ul>	
		</div>
	</div>

<a id="scrollTop" href="tables_responsive.htm#top"><i class="icon-arrow-up12"></i></a>	

<!-- Global scripts -->
<script src="http://laundry.id/templates/back-end/penguin/js/jquery.js"></script>	
<script src="http://laundry.id/templates/back-end/penguin/js/bootstrap.js"></script>
<script src="http://laundry.id/templates/back-end/penguin/js/jquery.ui.js"></script>
<script src="http://laundry.id/templates/back-end/penguin/js/nav.accordion.js"></script>	
<script src="http://laundry.id/templates/back-end/penguin/js/hammerjs.js"></script>
<script src="http://laundry.id/templates/back-end/penguin/js/jquery.hammer.js"></script>
<script src="http://laundry.id/templates/back-end/penguin/js/scrollup.js"></script>	
<script src="http://laundry.id/templates/back-end/penguin/js/jquery.slimscroll.js"></script>	
<script src="http://laundry.id/templates/back-end/penguin/js/smart-resize.js"></script>
<script src="http://laundry.id/templates/back-end/penguin/js/blockui.min.js"></script>		
<script src="http://laundry.id/templates/back-end/penguin/js/wow.min.js"></script>					
<script src="http://laundry.id/templates/back-end/penguin/js/fancybox.min.js"></script>
<script src="http://laundry.id/templates/back-end/penguin/js/venobox.js"></script>
<script src="http://laundry.id/templates/back-end/penguin/js/forms/uniform.min.js"></script>
<script src="http://laundry.id/templates/back-end/penguin/js/forms/switchery.js"></script>
<script src="http://laundry.id/templates/back-end/penguin/js/forms/select2.min.js"></script>	
<script src="http://laundry.id/templates/back-end/penguin/js/core.js"></script>
<!-- /global scripts -->
<script type="text/javascript" src="http://laundry.id/templates/back-end/penguin/js/moment.min.js"></script>
<script type="text/javascript" src="http://laundry.id/templates/back-end/penguin/js/legacy.js"></script>
<script type="text/javascript" src="http://laundry.id/templates/back-end/penguin/js/forms/daterangepicker.js"></script>
<script type="text/javascript" src="http://laundry.id/templates/back-end/penguin/js/forms/picker.js"></script>
<script type="text/javascript" src="http://laundry.id/templates/back-end/penguin/js/forms/picker.date.js"></script>
<script type="text/javascript" src="http://laundry.id/templates/back-end/penguin/js/forms/picker.time.js"></script>
<script type="text/javascript" src="http://laundry.id/templates/back-end/penguin/js/forms/spectrum.js"></script>
<script type="text/javascript" src="http://laundry.id/templates/back-end/penguin/js/pages/pickers.js"></script>
<!-- Page scripts -->
<script src="http://laundry.id/templates/back-end/penguin/js/tables/footable.min.js"></script>
<script src="http://laundry.id/templates/back-end/penguin/js/pages/tables_responsive.js"></script>

<!-- /page scripts -->
    <script type="text/javascript">

        $(function () {

            var delete_selected = "";

            

            $( "#btn_add" ).click(function() {

                window.location='add.php';

            });

            

            $( "#btn_edit" ).click(function() {

                window.location='edit.php?id='+delete_selected;

            });

            

            $( "#btn_delete" ).click(function() {

                prosesDelete(delete_selected);

            });

            

            $( "#btn_cari" ).click(function() {

                var query = $( "#query" ).val();

                window.location='list.php'+(query.length>0?'?query='+query:'');

            });



            $( ".hapus" ).click(function() {                

                var id = this.getAttribute('id_select');

                prosesDelete(id);                

            });



            $( ".edit" ).click(function() {

                var id = this.getAttribute('id_select');

                window.location='edit.php?id='+id;

            });

            

            $( "#select_all" ).change(function() {

                var is_checked = $( "#select_all" ).is(':checked');



                var element = $( ".select" );

                var lengh = element.size();

                

                delete_selected = '';

                for(var i=0; i<lengh; i++) {

                    var id = element[i].getAttribute('id_select');

                    var nama = element[i].getAttribute('name');

                

                    $('[name='+nama+']').prop('checked', is_checked);                    

                    if(is_checked) delete_selected+=(delete_selected==''?'':',')+(is_checked?id:"");

                }

                

                setButton();

            });

            

            $( ".select" ).change(function() {

                var id = this.getAttribute('id_select');

                var nama = this.getAttribute('name');

                var is_checked = $( '[name='+nama+']').is(':checked');

        

                var temps = delete_selected.split(',');

                delete_selected='';

                for(var key in temps) {

                    if(temps[key]!=id) delete_selected+=(delete_selected.length>0?",":"")+temps[key];

                }

                delete_selected+=(delete_selected.length>0?",":"")+(is_checked?id:""); 

                

                setButton();

            });

            

            function setButton() {

                var temp = new Array();

                if(delete_selected.length>0) temp = delete_selected.split(',');                

                $( "#btn_edit" ).removeClass('disabled').addClass(temp.length==1?'':'disabled');

                $( "#btn_delete" ).removeClass('disabled').addClass(temp.length>0?'':'disabled');

            }

            

            function setMessage(type, message) {

                $('#alert_'+type+' .alert').text(message);

                $('#alert_'+type).show('slow');

                setTimeout(function() {

                    $('#alert_'+type).hide('slow');

                }, 5000);

                $("body, html").animate({ 

                    scrollTop: $('#wrapper').offset().top 

                }, 600);

            }



            function prosesDelete(id) {

				swal({
				  title: 'Menghapus Data',
				  text: 'Apakah Anda Yakin Akan Menghapus Record Data Ini?',
				  type: 'warning',
				  showCancelButton: true,
				  confirmButtonColor: '#3085d6',
				  cancelButtonColor: '#d33',
				  confirmButtonText: 'Ya, Hapus Sekarang!',
				  cancelButtonText: 'Batal',
				  confirmButtonClass: 'btn btn-success',
				  cancelButtonClass: 'btn btn-danger',
				  buttonsStyling: false
				}).then(function () {

					$.ajax({

						url: 'delete.php',

						type: 'POST',

						dataType: 'json',

						data: { id: id },

						success: function(data, textStatus, jqXHR) {
							
							swal('Terhapus!', 'Record Data Telah Berhasil Dihapus!', 'success')

							if(data['success']) {

								window.location='list.php';

							} else {

								$('#detail').unmask();

								setMessage('error', data['message']);

							}

						},

						error: function(jqXHR, textStatus, errorThrown) {

							$('#detail').unmask();

							setMessage('error', 'Terjadi kesalahan system.');

						}

					});                                

				}, function (dismiss) {
				  // dismiss can be 'cancel', 'overlay', 'close', 'timer'
				  if (dismiss === 'cancel') {
					swal('Cancelled', 'Record Data Batal Dihapus', 'error')
				  }
				})


            }

            

            setMessage('success', 'Tambah kategori baru berhasil.');        

             

        });

    </script>
</body>    <script type="text/javascript">
        $( document ).ready(function() {
            var load_data_dashboard = function() {
                setTimeout(function() {
                    var data = new FormData();
                    data.append('last_id_order', $('[name=last_id_order]').val());
                    data.append('last_id_konfirmasi', $('[name=last_id_konfirmasi]').val());
                    data.append('last_id_pelanggan', $('[name=last_id_pelanggan]').val());
                
                                            
                    $.ajax({
                        type: 'POST',
                        url: 'http://laundry.id/store/notifDataStore.php',
                        data: data,
                        cache: false,
                        dataType: 'json',
                        processData: false, // Don't process the files
                        contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                        success: function(data) {

                            

                            if(data['success']) {
                                //BELUM LUNAS
                                $('#total_notif_belum_lunas').text(data['total_belum_lunas']);
                                if(data['total_belum_lunas']>0) {
                                    $('#total_notif_belum_lunas').show();
                                } else {
                                    $('#total_notif_belum_lunas').hide();
                                }
                                
                                //KONFIRMASI BAYAR
                                $('#total_notif_konfirmasi_bayar').text(data['total_konfirmasi_bayar']);
                                if(data['total_konfirmasi_bayar']>0) {
                                    $('#total_notif_konfirmasi_bayar').show();
                                } else {
                                    $('#total_notif_konfirmasi_bayar').hide();
                                }
                                
                                //PERLU KEMAS
                                $('#total_notif_perlu_kemas').text(data['total_perlu_kemas']);
                                if(data['total_perlu_kemas']>0) {
                                    $('#total_notif_perlu_kemas').show();
                                } else {
                                    $('#total_notif_perlu_kemas').hide();
                                }
                                
                                //PELANGGAN BARU
                                $('#total_notif_pelanggan_baru').text(data['total_pelanggan_baru']);
                                if(data['total_pelanggan_baru']>0) {
                                    $('#total_notif_pelanggan_baru').show();
                                } else {
                                    $('#total_notif_pelanggan_baru').hide();
                                }
                                
                                //PESAN BARU
                                $('#total_notif_pesan_baru').text(data['total_pesan_baru']);
                                if(data['total_pesan_baru']>0) {
                                    $('#total_notif_pesan_baru').show();
                                } else {
                                    $('#total_notif_pesan_baru').hide();
                                }
                            }        
                                
                                    
                            load_data_dashboard();
                        }, 
                        error: function() {
                            load_data_dashboard();
                        }
                    }); 
                }, 5000);
            };

            load_data_dashboard();
        });
    </script>
</html><?php }} ?>
