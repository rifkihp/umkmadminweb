<?php /*%%SmartyHeaderCode:3567958415ea2a29ad531a8-47298264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6937529d84e6c29ad4fcdbd62c3948798b6a1dd' => 
    array (
      0 => '../../templates/back-end/penguin/index.html',
      1 => 1538456116,
      2 => 'file',
    ),
    '2582a88d538f2a764cab178bddde668a4d6b2166' => 
    array (
      0 => '/home/u6060452/public_html/laundry/templates/back-end/penguin/includes/head.html',
      1 => 1579678290,
      2 => 'file',
    ),
    'd93547b11b26dd83b4ad99518c98e414da31b665' => 
    array (
      0 => '/home/u6060452/public_html/laundry/templates/back-end/penguin/includes/sidebar.html',
      1 => 1544655944,
      2 => 'file',
    ),
    '2c513717dcb00904cf69ebd24ba23766bb0e8f3f' => 
    array (
      0 => '/home/u6060452/public_html/laundry/templates/back-end/penguin/includes/footer.html',
      1 => 1544657450,
      2 => 'file',
    ),
    '0c2665944da5f183e6696e3b984c9ec8cdbe514e' => 
    array (
      0 => '/home/u6060452/public_html/laundry/templates/back-end/penguin/includes/footer_js.html',
      1 => 1538456120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3567958415ea2a29ad531a8-47298264',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ea505cfe49d89_14295001',
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ea505cfe49d89_14295001')) {function content_5ea505cfe49d89_14295001($_smarty_tpl) {?><!doctype html>
<html lang="en">
    <head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>LAUNDRY</title>	
	<link href="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/images/favicon.ico" rel="icon" type="image/png">
	
	<!-- Global stylesheets -->	
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
	<link type="text/css" rel="stylesheet" href="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/fonts/fonts.css">
        <link type="text/css" rel="stylesheet" href="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/icons/icomoon/icomoon.css">
        <link type="text/css" rel="stylesheet" href="http://kiezie.web.id/laundry/templates/back-end/penguin/css/animate.min.css">
	<link type="text/css" rel="stylesheet" href="http://kiezie.web.id/laundry/templates/back-end/penguin/css/bootstrap.css">   
	<link type="text/css" rel="stylesheet" href="http://kiezie.web.id/laundry/templates/back-end/penguin/css/core.css">	
	<link type="text/css" rel="stylesheet" href="http://kiezie.web.id/laundry/templates/back-end/penguin/css/layout.css">	
	<link type="text/css" rel="stylesheet" href="http://kiezie.web.id/laundry/templates/back-end/penguin/css/bootstrap-extended.css">	    
	<link type="text/css" rel="stylesheet" href="http://kiezie.web.id/laundry/templates/back-end/penguin/css/components.css">
	<link type="text/css" rel="stylesheet" href="http://kiezie.web.id/laundry/templates/back-end/penguin/css/plugins.css">
	<link type="text/css" rel="stylesheet" href="http://kiezie.web.id/laundry/templates/back-end/penguin/css/loaders.css">
	<link type="text/css" rel="stylesheet" href="http://kiezie.web.id/laundry/templates/back-end/penguin/css/responsive.css">
	<link type="text/css" rel="stylesheet" href="http://kiezie.web.id/laundry/templates/back-end/penguin/css/color-system.css">		
	<link type="text/css" rel="stylesheet" href="http://kiezie.web.id/laundry/templates/back-end/penguin/css/fancybox/jquery.fancybox.css">
	<link type="text/css" rel="stylesheet" href="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/sweetalert2/sweetalert2.min.css">
	<link type="text/css" rel="stylesheet" href="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/bootstrap-fileinput/css/fileinput.min.css">
	<link type="text/css" rel="stylesheet" href="http://kiezie.web.id/laundry/templates/back-end/penguin/css/burnt_sienna_light.css">	
        <link type="text/css" rel="stylesheet" href="http://kiezie.web.id/laundry/templates/back-end/penguin/css/AdminLTE.css" />
	<link type="text/css" rel="stylesheet" href="0" id="theme">
	<script src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/sweetalert2/sweetalert2.min.js"></script>
	<script>
		var base_tpl_url = "http://kiezie.web.id/laundry/templates/back-end/penguin/css/themes/";
		var base_url = "http://kiezie.web.id/laundry/";
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
                                <a href="http://kiezie.web.id/laundry/adminweb/pesanandalamproses/pesananbelumlunas/" class="dropdown-toggle" style="width: 100%; padding-left: 10px; padding-right: 30px;"><i class="icon-cart"></i>
                                <span id="total_notif_belum_lunas" class="bubble">49</span>
                                <span style="color: #ffffff">Belum Bayar / KEEP </span></a>
                            </li>
                        
                        
                                                    <li class="dropdown-toggle hidden-xs" style="border-left: 1px solid #ffffff;">
                                <a href="http://kiezie.web.id/laundry/adminweb/pesanandalamproses/pesananperludikirim/" class="dropdown-toggle" style="width: 100%; padding-left: 10px; padding-right: 30px;"><i class="icon-box"></i>
                                <span id="total_notif_perlu_kemas" class="bubble">20</span>
                                <span style="color: #ffffff">Perlu Kemas </span></a>
                            </li>
                        
                                                    <li class="dropdown-toggle hidden-xs" style="border-left: 1px solid #ffffff;">
                                <a href="http://kiezie.web.id/laundry/adminweb/customer/" class="dropdown-toggle" style="width: 100%; padding-left: 10px; padding-right: 30px;"><i class="icon-users4"></i>
                                <span id="total_notif_pelanggan_baru" class="bubble">104</span>
                                <span style="color: #ffffff;">Pelanggan Baru</span></a>
                            </li>
                        
                        		

                        <li class="dropdown user-dropdown" style="border-left: 1px solid #ffffff;padding-left: 10px">
                            <a href="http://kiezie.web.id/laundry/adminweb#" class="btn-user dropdown-toggle hidden-xs" data-toggle="dropdown"><img src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/images/faces/face1.png" class="img-circle user" alt=""/></a>
                            <a href="http://kiezie.web.id/laundry/adminweb#" class="dropdown-toggle visible-xs" data-toggle="dropdown"><i class="icon-more"></i></a>
                            <div class="dropdown-menu">	
                                <div class="text-center"><img src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/images/faces/face1.png" class="img-circle img-70" alt=""/></div>
                                <h5 class="text-center"><b>Hi! Administrator</b></h5>
                                <ul class="more-apps">
                                        <!-- li><a href="http://kiezie.web.id/laundry/templates/back-end/penguin/material/user_profile_social.html"><i class="icon-profile"></i> My profile</a></li -->
                                        <!-- li><a href="http://kiezie.web.id/laundry/adminweb#"><i class="icon-envelop5"></i> Inbox <span class="badge badge-danger pull-right">4</span></a></li -->
                                        <li><a href="http://kiezie.web.id/laundry/adminweb/editprofile/"><i class="icon-profile"></i> My Profile</a></li>
                                        <li><a href="http://kiezie.web.id/laundry/adminweb/gantipassword/edit.php"><i class="icon-lock5"></i> Ganti Password</a></li>
                                </ul>
                                <div class="text-center"><a href="http://kiezie.web.id/laundry/adminweb/logout.php" class="btn btn-sm btn-info"><i class="icon-exit3 i-16 position-left"></i> Logout</a></div>
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
                    <img src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/images/faces/face1.png" alt="admin" class="img-circle" />
                </div>

                <div class="admin-user-info">
                    <ul class="user-info">
                        <li><a href="http://kiezie.web.id/laundry/adminweb/logout.php" class="text-semibold text-size-large">Administrator</a></li>
                        <li><a href="http://kiezie.web.id/laundry/adminweb/logout.php"><small>-- subtitle here --</small></a></li>
                    </ul>
                    <div class="logout-icon"><a href="http://kiezie.web.id/laundry/adminweb/logout.php"><i class="icon-exit2"></i></a></div>
                </div>
            </div>				
        </div>

        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active fadeIn" id="menu">
                <ul class="sidebar-accordion">
                    <li><br />&nbsp;&nbsp;&nbsp;</li>
                                            <li class="active acc-parent-li">
                            <a  href="http://kiezie.web.id/laundry/adminweb/dashboard/"><i class="icon-display4"></i> Dashboard </a>
                                                    </li>
                                            <li>
                            <a class="acc-parent active" href="#"><i class="icon-cart2"></i> Daftar Pesanan <span class="fa arrow"></span></a>
                                                            <ul>
                                                                    <li>
                                        <a href="http://kiezie.web.id/laundry/adminweb/pesanandalamproses/pesananbelumlunas/"><i class="fa fa-bars"></i> Belum Lunas</a>
                                    </li>
                                                                    <li>
                                        <a href="http://kiezie.web.id/laundry/adminweb/pesanandalamproses/pesananperludikirim/"><i class="fa fa-bars"></i> Perlu Dikirim</a>
                                    </li>
                                                                    <li>
                                        <a href="http://kiezie.web.id/laundry/adminweb/pesanandalamproses/pesanantelahdikirim/"><i class="fa fa-bars"></i> Telah Dikirim</a>
                                    </li>
                                                                    <li>
                                        <a href="http://kiezie.web.id/laundry/adminweb/pesanandalamproses/pesananselesai/"><i class="fa fa-bars"></i> Selesai</a>
                                    </li>
                                                                    <li>
                                        <a href="http://kiezie.web.id/laundry/adminweb/pesanandalamproses/pesanandibatalkan/"><i class="fa fa-bars"></i> Dibatalkan</a>
                                    </li>
                                                                </ul>
                                                    </li>
                                            <li>
                            <a class="acc-parent active" href="#"><i class="icon-users"></i> Pelanggan & Mitra <span class="fa arrow"></span></a>
                                                            <ul>
                                                                    <li>
                                        <a href="http://kiezie.web.id/laundry/adminweb/mitra/"><i class="fa fa-users4"></i> Mitra</a>
                                    </li>
                                                                    <li>
                                        <a href="http://kiezie.web.id/laundry/adminweb/customer/"><i class="fa fa-users4"></i> Pelanggan</a>
                                    </li>
                                                                </ul>
                                                    </li>
                                            <li>
                            <a class="acc-parent active" href="#"><i class="icon-book"></i> Produk & Informasi <span class="fa arrow"></span></a>
                                                            <ul>
                                                                    <li>
                                        <a href="http://kiezie.web.id/laundry/adminweb/product/"><i class="fa fa-archive"></i> Produk</a>
                                    </li>
                                                                    <li>
                                        <a href="http://kiezie.web.id/laundry/adminweb/informasi/"><i class="fa fa-info3"></i> Informasi</a>
                                    </li>
                                                                </ul>
                                                    </li>
                                            <li>
                            <a class="acc-parent active" href="#"><i class="icon-cog3"></i> Pengaturan <span class="fa arrow"></span></a>
                                                            <ul>
                                                                    <li>
                                        <a href="http://kiezie.web.id/laundry/adminweb/pengaturan_aplikasi/"><i class="fa fa-edit"></i> Pengaturan Aplikasi</a>
                                    </li>
                                                                    <li>
                                        <a href="http://kiezie.web.id/laundry/adminweb/pengaturan_website/"><i class="fa fa-edit"></i> Pengaturan Konten</a>
                                    </li>
                                                                </ul>
                                                    </li>
                                            <li>
                            <a class="acc-parent active" href="#"><i class="icon-users"></i> Managemen User <span class="fa arrow"></span></a>
                                                            <ul>
                                                                    <li>
                                        <a href="http://kiezie.web.id/laundry/adminweb/jenisuser/"><i class="fa fa-truck"></i> Grup User</a>
                                    </li>
                                                                    <li>
                                        <a href="http://kiezie.web.id/laundry/adminweb/pengguna/"><i class="fa fa-truck"></i> User</a>
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
					<div class="page-title"><i class="icon-display4"></i> Dashboard</div>
					<ul class="breadcrumb">
						<li><a href="http://kiezie.web.id/laundry/adminweb">Beranda</a></li>
						<li><a href="http://kiezie.web.id/laundry/adminweb/dashboard/">Dashboard</a></li>
						<li class="active">Summary of your App</li>
					</ul>					
				</div>
			</div>		
			<!--/Page Header-->
			
			<div class="container-fluid page-content">
			
				<div class="row">
					<div class="col-md-3">
						<div class="panel panel-flat">
							<div class="panel-body p-b-10">
								<div class="row">
									<div class="col-md-8 col-xs-8">
										<div class="text-size-huge text-regular text-blue-dark text-semibold no-padding no-margin m-t-5 m-b-10">0</div>
										<span class="text-muted">Total Jumlah Pengunjung</span>
									</div>
									<div class="col-md-4 col-xs-4">
										<i class="icon-statistics icon-4x icon-light"></i>
									</div>
								</div>
							</div>
							<div class="panel-footer bg-blue">							
								<div class="elements">
									<span class="heading-text text-semibold">Pengunjung</span>
									<a href="index1.htm#" class="pull-right no-padding-right text-white">View all <i class="icon-arrow-right6 position-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-3">
						<div class="panel panel-flat">
							<div class="panel-body p-b-10">
								<div class="row">
									<div class="col-md-8 col-xs-8">
										<div class="text-size-huge text-regular text-danger-dark text-semibold no-padding no-margin m-t-5 m-b-10">31</div>
										<span class="text-muted">Total Pembayaran Lunas</span>
									</div>
									<div class="col-md-4 col-xs-4">
										<i class="icon-cash icon-4x icon-light"></i>
									</div>
								</div>
							</div>
							<div class="panel-footer bg-danger">							
								<div class="elements">
									<span class="heading-text text-semibold">Lunas</span>
									<a href="index1.htm#" class="pull-right no-padding-right text-white">View all <i class="icon-arrow-right6 position-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-3">
						<div class="panel panel-flat">
							<div class="panel-body p-b-10">
								<div class="row">
									<div class="col-md-8 col-xs-8">
										<div class="text-size-huge text-regular text-success-dark text-semibold no-padding no-margin m-t-5 m-b-10">54</div>
										<span class="text-muted">Total Belum Lunas</span>
									</div>
									<div class="col-md-4 col-xs-4">
										<i class="icon-cart5 icon-4x icon-light"></i>
									</div>
								</div>
							</div>
							<div class="panel-footer bg-success">							
								<div class="elements">
									<span class="heading-text text-semibold">Keep</span>
									<a href="index1.htm#" class="pull-right no-padding-right text-white">View all <i class="icon-arrow-right6 position-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-3">
						<div class="panel panel-flat">
							<div class="panel-body p-b-10">
								<div class="row">
									<div class="col-md-8 col-xs-8">
										<div class="text-size-huge text-regular text-amber-dark text-semibold no-padding no-margin m-t-5 m-b-10">139</div>
										<span class="text-muted">Total Orders</span>
									</div>
									<div class="col-md-4 col-xs-4">
										<i class="icon-users icon-4x icon-light"></i>
									</div>
								</div>
							</div>
							<div class="panel-footer bg-amber">							
								<div class="elements">
									<span class="heading-text text-semibold">Pelanggan</span>
									<a href="index1.htm#" class="pull-right no-padding-right text-white">View all <i class="icon-arrow-right6 position-right"></i></a>
								</div>
							</div>
						</div>
					</div>						
				</div>			
				
				<div class="panel panel-flat">
					<div class="panel-body">
						<div class="row">
							<div class="col-md-12">
								<div class="panel-heading">Statistik Penjualan</div>
								<div class="panel-body">
									<div style="width:100%; height:100%;" id="layarfullscreen">123</div>                     
								</div>
							</div>		

						</div> 	
					</div>
				</div>
				
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h4 class="panel-title">Peringatan Stok  &nbsp;&nbsp;<span class="label label-danger">0</span></h4>				
					</div>
					<div class="table-responsive">
						<table class="table table-hover user-list">
							<thead>
								<tr>
									<th>No</th>							
									<th>Product</th>
									<th>Ukuran</th>							
									<th>Warna</th>						
									<th>Sisa Stok</th>
									<th align="center">Aksi</th>							
								</tr>
							</thead>
							<tbody>

								
								
							</tbody>
						</table>
					</div>
				</div>
<!--Pesanan Baru-->	
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h4 class="panel-title">Pesanan Baru &nbsp;&nbsp;<span class="label label-danger">44 items</span></h4>				
					</div>
					<div class="table-responsive">
						<table class="table table-hover user-list">
							<thead>

								<tr>

									<th width="5%"><div style="text-align: center;">No.</div></th>

									<th width="15%"><div style="text-align: left;">Tanggal</div></th>

									<th width="20%"><div style="text-align: left;">Kode</div></th>

									<th width="25%"><div style="text-align: left;">Pelanggan</div></th>                                    

									<th width="15%"><div style="text-align: left;">Jumlah</div></th>

									<th width="15%"><div style="text-align: left;">Total</div></th>    

									<th width="5%"><div style="text-align: center;">Aksi</div></th>

								</tr>

							</thead>

							<tbody>

								
								                                    

									<tr id="baris_36">

										<td align="center">1</td>

										<td align="left">12-12-2017</td>

										<td align="left">#000036 </td>

										<td align="left">bayu </td>

										<td align="left">1 Pcs</td>

										<td align="left">Rp. 193,000</td>

										<td><div style="text-align: center;  white-space: nowrap;">

												<a href="http://kiezie.web.id/laundry/adminweb/pemesanan/list.php?query=000036" class="btn btn-success update">Detail</a>

											</div>

										</td>                                          

									</tr>

									  

								                                    

									<tr id="baris_34">

										<td align="center">2</td>

										<td align="left">02-12-2017</td>

										<td align="left">#000034 </td>

										<td align="left">Nova Heryanto</td>

										<td align="left">1 Pcs</td>

										<td align="left">Rp. 1,939,400</td>

										<td><div style="text-align: center;  white-space: nowrap;">

												<a href="http://kiezie.web.id/laundry/adminweb/pemesanan/list.php?query=000034" class="btn btn-success update">Detail</a>

											</div>

										</td>                                          

									</tr>

									  

								                                    

									<tr id="baris_31">

										<td align="center">3</td>

										<td align="left">16-11-2017</td>

										<td align="left">#000031 </td>

										<td align="left">Martha </td>

										<td align="left">1 Pcs</td>

										<td align="left">Rp. 108,000</td>

										<td><div style="text-align: center;  white-space: nowrap;">

												<a href="http://kiezie.web.id/laundry/adminweb/pemesanan/list.php?query=000031" class="btn btn-success update">Detail</a>

											</div>

										</td>                                          

									</tr>

									  

								                                    

									<tr id="baris_29">

										<td align="center">4</td>

										<td align="left">15-11-2017</td>

										<td align="left">#000029 </td>

										<td align="left">juwita </td>

										<td align="left">1 Pcs</td>

										<td align="left">Rp. 138,000</td>

										<td><div style="text-align: center;  white-space: nowrap;">

												<a href="http://kiezie.web.id/laundry/adminweb/pemesanan/list.php?query=000029" class="btn btn-success update">Detail</a>

											</div>

										</td>                                          

									</tr>

									  

								                                    

									<tr id="baris_30">

										<td align="center">5</td>

										<td align="left">15-11-2017</td>

										<td align="left">#000030 </td>

										<td align="left">juwita </td>

										<td align="left">1 Pcs</td>

										<td align="left">Rp. 138,000</td>

										<td><div style="text-align: center;  white-space: nowrap;">

												<a href="http://kiezie.web.id/laundry/adminweb/pemesanan/list.php?query=000030" class="btn btn-success update">Detail</a>

											</div>

										</td>                                          

									</tr>

									  

								                                    

									<tr id="baris_7">

										<td align="center">6</td>

										<td align="left">12-09-2017</td>

										<td align="left">#000007 </td>

										<td align="left">ARTIANA </td>

										<td align="left">1 Pcs</td>

										<td align="left">Rp. 420,000</td>

										<td><div style="text-align: center;  white-space: nowrap;">

												<a href="http://kiezie.web.id/laundry/adminweb/pemesanan/list.php?query=000007" class="btn btn-success update">Detail</a>

											</div>

										</td>                                          

									</tr>

									  

								                                    

									<tr id="baris_38">

										<td align="center">7</td>

										<td align="left">15-12-2017</td>

										<td align="left">#000038 </td>

										<td align="left">ARTIANA </td>

										<td align="left">1 Pcs</td>

										<td align="left">Rp. 104,500</td>

										<td><div style="text-align: center;  white-space: nowrap;">

												<a href="http://kiezie.web.id/laundry/adminweb/pemesanan/list.php?query=000038" class="btn btn-success update">Detail</a>

											</div>

										</td>                                          

									</tr>

									  

								                                    

									<tr id="baris_64">

										<td align="center">8</td>

										<td align="left">07-02-2018</td>

										<td align="left">#000064 </td>

										<td align="left">olshophari </td>

										<td align="left">1 Pcs</td>

										<td align="left">Rp. 316,000</td>

										<td><div style="text-align: center;  white-space: nowrap;">

												<a href="http://kiezie.web.id/laundry/adminweb/pemesanan/list.php?query=000064" class="btn btn-success update">Detail</a>

											</div>

										</td>                                          

									</tr>

									  

								                                    

									<tr id="baris_81">

										<td align="center">9</td>

										<td align="left">05-04-2020</td>

										<td align="left">#000081 </td>

										<td align="left">MAMA LAUNDRY</td>

										<td align="left">1 Pcs</td>

										<td align="left">Rp. 85,330,000</td>

										<td><div style="text-align: center;  white-space: nowrap;">

												<a href="http://kiezie.web.id/laundry/adminweb/pemesanan/list.php?query=000081" class="btn btn-success update">Detail</a>

											</div>

										</td>                                          

									</tr>

									  

								                                    

									<tr id="baris_83">

										<td align="center">10</td>

										<td align="left">06-04-2020</td>

										<td align="left">#000083 </td>

										<td align="left">MAMA LAUNDRY</td>

										<td align="left">2 Pcs</td>

										<td align="left">Rp. 120,000</td>

										<td><div style="text-align: center;  white-space: nowrap;">

												<a href="http://kiezie.web.id/laundry/adminweb/pemesanan/list.php?query=000083" class="btn btn-success update">Detail</a>

											</div>

										</td>                                          

									</tr>

									  

								                                    

									<tr id="baris_84">

										<td align="center">11</td>

										<td align="left">25-04-2020</td>

										<td align="left">#000084 </td>

										<td align="left">MAMA LAUNDRY</td>

										<td align="left">1 Pcs</td>

										<td align="left">Rp. 75,000</td>

										<td><div style="text-align: center;  white-space: nowrap;">

												<a href="http://kiezie.web.id/laundry/adminweb/pemesanan/list.php?query=000084" class="btn btn-success update">Detail</a>

											</div>

										</td>                                          

									</tr>

									  

								                                    

									<tr id="baris_85">

										<td align="center">12</td>

										<td align="left">25-04-2020</td>

										<td align="left">#000085 </td>

										<td align="left">MAMA LAUNDRY</td>

										<td align="left">1 Pcs</td>

										<td align="left">Rp. 50,000</td>

										<td><div style="text-align: center;  white-space: nowrap;">

												<a href="http://kiezie.web.id/laundry/adminweb/pemesanan/list.php?query=000085" class="btn btn-success update">Detail</a>

											</div>

										</td>                                          

									</tr>

									  

								                                    

									<tr id="baris_86">

										<td align="center">13</td>

										<td align="left">25-04-2020</td>

										<td align="left">#000086 </td>

										<td align="left">MAMA LAUNDRY</td>

										<td align="left">2 Pcs</td>

										<td align="left">Rp. 12,000</td>

										<td><div style="text-align: center;  white-space: nowrap;">

												<a href="http://kiezie.web.id/laundry/adminweb/pemesanan/list.php?query=000086" class="btn btn-success update">Detail</a>

											</div>

										</td>                                          

									</tr>

									  

								                                    

									<tr id="baris_87">

										<td align="center">14</td>

										<td align="left">25-04-2020</td>

										<td align="left">#000087 </td>

										<td align="left">MAMA LAUNDRY</td>

										<td align="left">2 Pcs</td>

										<td align="left">Rp. 29,000</td>

										<td><div style="text-align: center;  white-space: nowrap;">

												<a href="http://kiezie.web.id/laundry/adminweb/pemesanan/list.php?query=000087" class="btn btn-success update">Detail</a>

											</div>

										</td>                                          

									</tr>

									  

								                                    

									<tr id="baris_88">

										<td align="center">15</td>

										<td align="left">26-04-2020</td>

										<td align="left">#000088 </td>

										<td align="left">MAMA LAUNDRY</td>

										<td align="left">1 Pcs</td>

										<td align="left">Rp. 7,000</td>

										<td><div style="text-align: center;  white-space: nowrap;">

												<a href="http://kiezie.web.id/laundry/adminweb/pemesanan/list.php?query=000088" class="btn btn-success update">Detail</a>

											</div>

										</td>                                          

									</tr>

									  

								                                    

									<tr id="baris_89">

										<td align="center">16</td>

										<td align="left">26-04-2020</td>

										<td align="left">#000089 </td>

										<td align="left">MAMA LAUNDRY</td>

										<td align="left">1 Pcs</td>

										<td align="left">Rp. 21,000</td>

										<td><div style="text-align: center;  white-space: nowrap;">

												<a href="http://kiezie.web.id/laundry/adminweb/pemesanan/list.php?query=000089" class="btn btn-success update">Detail</a>

											</div>

										</td>                                          

									</tr>

									  

								                                    

									<tr id="baris_90">

										<td align="center">17</td>

										<td align="left">26-04-2020</td>

										<td align="left">#000090 </td>

										<td align="left">MAMA LAUNDRY</td>

										<td align="left">1 Pcs</td>

										<td align="left">Rp. 75,000</td>

										<td><div style="text-align: center;  white-space: nowrap;">

												<a href="http://kiezie.web.id/laundry/adminweb/pemesanan/list.php?query=000090" class="btn btn-success update">Detail</a>

											</div>

										</td>                                          

									</tr>

									  

								                                    

									<tr id="baris_91">

										<td align="center">18</td>

										<td align="left">26-04-2020</td>

										<td align="left">#000091 </td>

										<td align="left">MAMA LAUNDRY</td>

										<td align="left">1 Pcs</td>

										<td align="left">Rp. 28,000</td>

										<td><div style="text-align: center;  white-space: nowrap;">

												<a href="http://kiezie.web.id/laundry/adminweb/pemesanan/list.php?query=000091" class="btn btn-success update">Detail</a>

											</div>

										</td>                                          

									</tr>

									  

								                                    

									<tr id="baris_43">

										<td align="center">19</td>

										<td align="left">29-12-2017</td>

										<td align="left">#000043 </td>

										<td align="left">Tamu</td>

										<td align="left">1 Pcs</td>

										<td align="left">Rp. 360,000</td>

										<td><div style="text-align: center;  white-space: nowrap;">

												<a href="http://kiezie.web.id/laundry/adminweb/pemesanan/list.php?query=000043" class="btn btn-success update">Detail</a>

											</div>

										</td>                                          

									</tr>

									  

								                                    

									<tr id="baris_44">

										<td align="center">20</td>

										<td align="left">02-01-2018</td>

										<td align="left">#000044 </td>

										<td align="left">Tamu</td>

										<td align="left">1 Pcs</td>

										<td align="left">Rp. 1,936,400</td>

										<td><div style="text-align: center;  white-space: nowrap;">

												<a href="http://kiezie.web.id/laundry/adminweb/pemesanan/list.php?query=000044" class="btn btn-success update">Detail</a>

											</div>

										</td>                                          

									</tr>

									  

								
							</tbody>

							
							<tfoot><tr><th colspan="8">

								<div style="text-align: center;">

									
									
									
										
											<span class="btn btn-info">1</span>                                

										
										                                

									
										
											<a class="btn btn-default" href="http://kiezie.web.id/laundry/adminweb/dashboard/index.php?page_pemesanan=2&page_stok=1&page_konfirmasi=1">2</a>

										
										                                

									
										
											<a class="btn btn-default" href="http://kiezie.web.id/laundry/adminweb/dashboard/index.php?page_pemesanan=3&page_stok=1&page_konfirmasi=1">3</a>

										
										                                

									
									                                

										<a class="btn btn-default" href="http://kiezie.web.id/laundry/adminweb/dashboard/index.php?page_pemesanan=2&page_stok=1&page_konfirmasi=1">Next &rarr;</a>

									                                

								</div>  

							</th></tr></tfoot>						</table>
					</div>
				</div>
				
<!--Konfirmasi Pembayaran-->	
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h4 class="panel-title">Konfirmasi Pembayaran &nbsp;&nbsp;<span class="label label-danger">0</span></h4>				
					</div>
					<div class="table-responsive">
						<table class="table table-hover user-list">
							<thead>

								<tr>

									<th width="5%"><div style="text-align: left;">No.</div></th>

									<th width="15%"><div style="text-align: left;">Tanggal</div></th>

									<th width="15%"><div style="text-align: left;">Kode</div></th>

									<th width="25%"><div style="text-align: left;">Pelanggan</div></th>                                    

									<th width="20%"><div style="text-align: left;">Bank Tujuan</div></th>    

									<th width="15%"><div style="text-align: left;">Jumlah</div></th>

									<th width="5%"><div style="text-align: center;">Aksi</div></th>

								</tr>

							</thead>

							<tbody>

								
								
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
									<img src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/images/faces/face12.png" alt="user">
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
										<a href="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/images/demo/pic7.jpg" class="venobox"><img src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/images/demo/pic7.jpg" alt=""/></a>
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
								<div><span class="chat-avatar"><img src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/images/faces/face1.png" alt="Avatar"></span><span class="chat-u-info">Jane Elliott<cite>Li Europan lingues es...</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
							<li>
								<div><span class="chat-avatar"><img src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/images/faces/face2.png" alt="Avatar"></span><span class="chat-u-info">Florence Douglas<cite>Busy</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
							<li class="chat-u-online">
								<div><span class="chat-avatar"><img src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/images/faces/face3.png" alt="Avatar"></span><span class="chat-u-info">Jacqueline Howell<cite>Available</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
							<li class="chat-u-online">
								<div><span class="chat-avatar"><img src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/images/faces/face4.png" alt="Avatar"></span><span class="chat-u-info">Eugine Turner<cite>Occidental in fact...</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
							<li class="chat-u-busy">
								<div><span class="chat-avatar"><img src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/images/faces/face5.png" alt="Avatar"></span><span class="chat-u-info">Andrew Brewer<cite>Busy</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
							<li class="chat-u-away">
								<div><span class="chat-avatar"><img src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/images/faces/face6.png" alt="Avatar"></span><span class="chat-u-info">Jonaly Smith<cite>Available</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
							<li class="chat-u-online">
								<div><span class="chat-avatar"><img src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/images/faces/face7.png" alt="Avatar"></span><span class="chat-u-info">Ann Porter<cite>Available</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
							<li class="chat-u-away">
								<div><span class="chat-avatar"><img src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/images/faces/face8.png" alt="Avatar"></span><span class="chat-u-info">John Deo<cite>Do not disturb</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
							<li>
								<div><span class="chat-avatar"><img src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/images/faces/face9.png" alt="Avatar"></span><span class="chat-u-info">Marilyn Romero<cite>On refusa continuar payar...</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
							<li>
								<div><span class="chat-avatar"><img src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/images/faces/face10.png" alt="Avatar"></span><span class="chat-u-info">Carol Gibson<cite>Gone for a weekend</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
							<li>
								<div><span class="chat-avatar"><img src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/images/faces/face11.png" alt="Avatar"></span><span class="chat-u-info">Scott Ruiz<cite>At solmen va esser...</cite></span>
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
                    <a href="http://kiezie.web.id/laundry" target="_blank">LAUNDRY</a>&nbsp;2020
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
						<img src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/images/themes/light.jpg" alt=""/>
					</div>				
				</li>
				<li class="list-title clearfix">Mirage</li>
				<li>
					<div class="theme pull-left" id="mirage">
						<img src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/images/themes/mirage_dark.jpg" alt=""/>
					</div>				
				</li>			
				<li>
					<div class="theme pull-left" id="mirage_light">
						<img src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/images/themes/mirage_light.jpg" alt=""/>
					</div>				
				</li>
				<li>
					<div class="theme pull-left" id="mirage_light_sidebar">
						<img src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/images/themes/mirage_light_sidebar.jpg" alt=""/>
					</div>				
				</li>										
				<li class="list-title clearfix">Burnt Sienna</li>
				<li>
					<div class="theme pull-left" id="burnt_sienna_dark">
						<img src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/images/themes/burnt_sienna_dark.jpg" alt=""/>
					</div>				
				</li>			
				<li>
					<div class="theme pull-left" id="burnt_sienna_light">
						<img src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/images/themes/burnt_sienna_light.jpg" alt=""/>
					</div>				
				</li>
				<li>
					<div class="theme pull-left" id="burnt_sienna_light_sidebar">
						<img src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/images/themes/burnt_sienna_light_sidebar.jpg" alt=""/>
					</div>				
				</li>		

				<li class="list-title clearfix">Amethyst</li>
				<li>
					<div class="theme pull-left" id="amethyst_dark">
						<img src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/images/themes/amethyst_dark.jpg" alt=""/>
					</div>				
				</li>			
				<li>
					<div class="theme pull-left" id="amethyst_light">
						<img src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/images/themes/amethyst_light.jpg" alt=""/>
					</div>				
				</li>
				<li>
					<div class="theme pull-left" id="amethyst_light_sidebar">
						<img src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/images/themes/amethyst_light_sidebar.jpg" alt=""/>
					</div>				
				</li>		

				<li class="list-title clearfix">Fuchsia Blue</li>
				<li>
					<div class="theme pull-left" id="fuchsiablue_dark">
						<img src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/images/themes/fuchsiablue_dark.jpg" alt=""/>
					</div>				
				</li>			
				<li>
					<div class="theme pull-left" id="fuchsiablue_light">
						<img src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/images/themes/fuchsiablue_light.jpg" alt=""/>
					</div>				
				</li>
				<li>
					<div class="theme pull-left" id="fuchsiablue_light_sidebar">
						<img src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/images/themes/fuchsiablue_light_sidebar.jpg" alt=""/>
					</div>				
				</li>

				<li class="list-title clearfix">Picton Blue</li>
				<li>
					<div class="theme pull-left" id="pictonblue_dark">
						<img src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/images/themes/pictonblue_dark.jpg" alt=""/>
					</div>				
				</li>			
				<li>
					<div class="theme pull-left" id="pictonblue_light">
						<img src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/images/themes/pictonblue_light.jpg" alt=""/>
					</div>				
				</li>
				<li>
					<div class="theme pull-left" id="pictonblue_light_sidebar">
						<img src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/images/themes/pictonblue_light_sidebar.jpg" alt=""/>
					</div>				
				</li>
				
				<li class="list-title clearfix">Jungle Green</li>
				<li>
					<div class="theme pull-left" id="junglegreen_dark">
						<img src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/images/themes/junglegreen_dark.jpg" alt=""/>
					</div>				
				</li>			
				<li>
					<div class="theme pull-left" id="junglegreen_light">
						<img src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/images/themes/junglegreen_light.jpg" alt=""/>
					</div>				
				</li>
				<li>
					<div class="theme pull-left" id="junglegreen_light_sidebar">
						<img src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/images/themes/junglegreen_light_sidebar.jpg" alt=""/>
					</div>				
				</li>
				
				<li class="list-title clearfix">Fern</li>
				<li>
					<div class="theme pull-left" id="fern_dark">
						<img src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/images/themes/fern_dark.jpg" alt=""/>
					</div>				
				</li>			
				<li>
					<div class="theme pull-left" id="fern_light">
						<img src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/images/themes/fern_light.jpg" alt=""/>
					</div>				
				</li>
				<li>
					<div class="theme pull-left" id="fern_light_sidebar">
						<img src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/images/themes/fern_light_sidebar.jpg" alt=""/>
					</div>				
				</li>
				
				<li class="list-title clearfix">Sunglow</li>
				<li>
					<div class="theme pull-left" id="sunglow_dark">
						<img src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/images/themes/sunglow_dark.jpg" alt=""/>
					</div>				
				</li>			
				<li>
					<div class="theme pull-left" id="sunglow_light">
						<img src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/images/themes/sunglow_light.jpg" alt=""/>
					</div>				
				</li>
				<li>
					<div class="theme pull-left" id="sunglow_light_sidebar">
						<img src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/images/themes/sunglow_light_sidebar.jpg" alt=""/>
					</div>				
				</li>
				
				<li class="list-title clearfix">Regent Grey</li>
				<li>
					<div class="theme pull-left" id="regentgrey_dark">
						<img src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/images/themes/regentgrey_dark.jpg" alt=""/>
					</div>				
				</li>			
				<li>
					<div class="theme pull-left" id="regentgrey_light">
						<img src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/images/themes/regentgrey_light.jpg" alt=""/>
					</div>				
				</li>
				<li>
					<div class="theme pull-left" id="regentgrey_light_sidebar">
						<img src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/images/themes/regentgrey_light_sidebar.jpg" alt=""/>
					</div>				
				</li>
			</ul>	
		</div>
	</div>

--><a id="scrollTop" href="index1.htm#top"><i class="icon-arrow-up12"></i></a>	

<!-- Global scripts -->
<script src="http://kiezie.web.id/laundry/templates/back-end/penguin/js/jquery.js"></script>	
<script src="http://kiezie.web.id/laundry/templates/back-end/penguin/js/bootstrap.js"></script>
<script src="http://kiezie.web.id/laundry/templates/back-end/penguin/js/jquery.ui.js"></script>
<script src="http://kiezie.web.id/laundry/templates/back-end/penguin/js/nav.accordion.js"></script>	
<script src="http://kiezie.web.id/laundry/templates/back-end/penguin/js/hammerjs.js"></script>
<script src="http://kiezie.web.id/laundry/templates/back-end/penguin/js/jquery.hammer.js"></script>
<script src="http://kiezie.web.id/laundry/templates/back-end/penguin/js/scrollup.js"></script>	
<script src="http://kiezie.web.id/laundry/templates/back-end/penguin/js/jquery.slimscroll.js"></script>	
<script src="http://kiezie.web.id/laundry/templates/back-end/penguin/js/smart-resize.js"></script>
<script src="http://kiezie.web.id/laundry/templates/back-end/penguin/js/blockui.min.js"></script>		
<script src="http://kiezie.web.id/laundry/templates/back-end/penguin/js/wow.min.js"></script>					
<script src="http://kiezie.web.id/laundry/templates/back-end/penguin/js/fancybox.min.js"></script>
<script src="http://kiezie.web.id/laundry/templates/back-end/penguin/js/venobox.js"></script>
<script src="http://kiezie.web.id/laundry/templates/back-end/penguin/js/forms/uniform.min.js"></script>
<script src="http://kiezie.web.id/laundry/templates/back-end/penguin/js/forms/switchery.js"></script>
<script src="http://kiezie.web.id/laundry/templates/back-end/penguin/js/forms/select2.min.js"></script>	
<script src="http://kiezie.web.id/laundry/templates/back-end/penguin/js/core.js"></script>
<!-- /global scripts -->	
<!-- Page scripts -->
    <script type="text/javascript" src="http://code.highcharts.com/highcharts.js"></script>

    <script type="text/javascript" src="http://code.highcharts.com/modules/exporting.js"></script>



    <script type="text/javascript">

        $(function () {

            $.ajax({

                type: 'POST',

                url: 'http://kiezie.web.id/laundry/adminweb/dashboard/statistikpenjualan.php',

                //data: data,

                cache: false,

                dataType: 'json',

                processData: false, // Don't process the files

                contentType: false, // Set content type to false as jQuery will tell the server its a query string request

                success: function(data) {

                    

                    

                    var tanggal = [];

                    var jumlah = [];

                    var topics = data['topics'];

                    for(var key=topics.length-1; key>=0; key--) {

                        tanggal[tanggal.length] = topics[key]['tanggal'];

                        jumlah[jumlah.length] = 1*topics[key]['jumlah'];

                        //console.log(topics[key]['jumlah']);

                    }



                    loadGrafik(tanggal, jumlah);

                }, 

                error: function() {



                }

            }); 

            

            

            function loadGrafik(tanggal, jumlah) {

                $('#layarfullscreen').highcharts({

                    chart: {

                        type: 'spline'

                    },

                    title: {

                        text: ''

                    },

                    subtitle: {

                        text: ''

                    },

                    xAxis: [{

                        categories: tanggal,

                        reversed: false,

                        title: {

                            text: 'Tanggal'

                        },

                        labels: {

                            step: 1

                        }

                    }],

                    yAxis: {

                        title: {

                            text: 'Penjualan'

                        },

                        labels: {

                            formatter: function () {

                                var val = this.value/1000000;

                                val = val<0?(-1*val):val;

                                return (Math.round(val*100)/100) +' JT';

                            }

                        }

                    },



                    plotOptions: {

                        series: {

                            stacking: 'normal'

                        }

                    },



                    tooltip: {

                        formatter: function () {

                            var val = this.point.y/1000000;

                            val = val<0?(-1*val):val;

                            return '<b>' + this.series.name + ', Tanggal ' + this.point.category + '</b><br/>' +

                                'Jumlah: ' + (Math.round(val*100)/100) +' JT';

                        //Highcharts.numberFormat(Math.abs(this.point.y), 0);

                        }

                    },



                    series: [{

                        name: 'Penjualan',

                        data: jumlah

                    }]

                });



            };

        });

    </script>
<!-- /page scripts -->
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
                        url: 'http://kiezie.web.id/laundry/store/notifDataStore.php',
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
