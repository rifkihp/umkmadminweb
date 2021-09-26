<?php /*%%SmartyHeaderCode:10769307975be929e92fa0e7-87897218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b919bec2d9ee3ed1b46dadd4ea0d7bab19edab63' => 
    array (
      0 => '../../templates/back-end/penguin/pemesanan/list.html',
      1 => 1538456120,
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
  'nocache_hash' => '10769307975be929e92fa0e7-87897218',
  'variables' => 
  array (
    'title' => 0,
    'adminweburl' => 0,
    'sub_title' => 0,
    'tanggal_dari' => 0,
    'tanggal_sampai' => 0,
    'jenis' => 0,
    'status' => 0,
    'query' => 0,
    'listdetail' => 0,
    'entry' => 0,
    'limitpage' => 0,
    'currentpage' => 0,
    'no' => 0,
    'array_akses' => 0,
    'tpl_dir' => 0,
    'no_histori' => 0,
    'entry_history' => 0,
    'entry_barang' => 0,
    'no_detail' => 0,
    'homeurl' => 0,
    'total' => 0,
    'totalpage' => 0,
    'frompage' => 0,
    'untilpage' => 0,
    'item' => 0,
    'alert_success' => 0,
    'alert_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5be929e940f280_98310429',
  'cache_lifetime' => 0,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be929e940f280_98310429')) {function content_5be929e940f280_98310429($_smarty_tpl) {?><!doctype html>
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
                                <span id="total_notif_konfirmasi_bayar" class="bubble">1</span>
                                <span style="color: #ffffff;">Konfirmasi Bayar </span></a>
                            </li>
                                                
                                                    <li class="dropdown-toggle hidden-xs" style="border-left: 1px solid #ffffff;">
                                <a href="http://laundry.id/adminweb/pesanandalamproses/pesananperludikirim/" class="dropdown-toggle" style="width: 100%; padding-left: 10px; padding-right: 30px;"><i class="icon-box"></i>
                                <span id="total_notif_perlu_kemas" class="bubble">20</span>
                                <span style="color: #ffffff">Perlu Kemas </span></a>
                            </li>
                                                
                                                    <li class="dropdown-toggle hidden-xs" style="border-left: 1px solid #ffffff;">
                                <a href="http://laundry.id/adminweb/customer/" class="dropdown-toggle" style="width: 100%; padding-left: 10px; padding-right: 30px;"><i class="icon-users4"></i>
                                <span id="total_notif_pelanggan_baru" class="bubble">76</span>
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

                            
                                <li class="active acc-parent-li">

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

                            
                                <li>

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
						<i class="icon-table position-left"></i> Pemesanan
					</div>
					<ul class="breadcrumb">
						<li><a href="http://laundry.id/adminweb">Beranda</a></li>
						<li><a href="http://laundry.id/adminweb/pemesanan/">Pemesanan</a></li>
						<li class="active">List of Pemesanan</li>
					</ul>					
				</div>
			</div>		
			<!--/Page Header-->
			
			<div class="container-fluid page-content">				
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-flat">
							<div class="panel-heading">
								<h3 class="panel-title"><strong>Pemesanan</strong></h3>				
								<h5 class="panel-title">List of Pemesanan</h5>				
							</div>

				<div class="panel panel-flat">
                    <div class="form-group panel-body no-padding-bottom">
                        <table style="width: 100%;">
                            <tr>
                                <td width="20%" style="padding: 8px;"><label>Dari Tanggal:</label></td>
                                <td width="80%">
                                    <table width="100%">
                                        <tr>
                                            <td width="40%">
                                                <input type="text" value="" class="form-control pickadate" name="tanggal_dari" placeholder="Klik Untuk Memilih Tanggal" />
                                            </td>
                                            <td style="text-align: center;">
                                                <label>Sampai Tanggal:</label>
                                            </td>
                                            <td width="40%">
                                                <input type="text" value="" class="form-control pickadate" name="tanggal_sampai" placeholder="Klik Untuk Memilih Tanggal" />                 
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td width="20%" style="padding: 8px;"><label>Jenis Pesanan:</label></td>
                                <td width="80%">
                                    <select id="filter_jenis" class="form-control" name="jenis" placeholder="Klik Untuk Memilih Jenis Pesanan">
                                        <option value="0" selected="selected">Klik Untuk Memilih Jenis Pesanan</option>
                                        <option value="N" >Bukan Dropship</option>
                                        <option value="Y" >Dropship</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td width="20%" style="padding: 8px;"><label>Status Pembayaran:</label></td>
                                <td width="80%">
                                    <select id="filter_status" class="form-control" name="status"  placeholder="Klik Untuk Memilih Status Pembayaran">
                                        <option value="0" selected="selected">Klik Untuk Memilih Status Pembayaran</option>
                                        <option value="N" >Belum Lunas</option>
                                        <option value="Y" >Lunas</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td width="20%" style="padding: 8px;"><label>Keyword Pencarian:</label></td>
                                <td width="80%">
                                    <table>
                                        <tr>
                                            <td width="100%"><input type="text" value="" class="form-control" name="query" id="query" placeholder="Masukan kata kunci pencarian..." /></td>
                                            <td width="5px">&nbsp;</td> 
                                            <td><div id="btn_cari" type="submit" class="btn btn-primary">Cari</div></td>
                                            <td width="5px">&nbsp;</td> 
                                            <td><a class="btn btn-default" href="list.php">Reset</a></td>  
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div>
				</div>
					
							<div class="table-responsive">
								<table class="table datatable table-striped" width="100%">
                                <thead>
                                    <tr>
                                        <th width="1%"><div style="text-align: center;">No.</div></th>

                                        <th width="90%"><div style="text-align: center;">Data Pemesanan</div></th>

                                    </tr>

                                </thead>

                                <tbody>

                                    
                                                                        

                                        <tr id="baris_80">

                                            <!-- td align="center"><input type="checkbox" id_select="80" name="select_80" class="select" /></td -->

                                            <td align="center">1</td>

                                            <td>

                                                <table width="100%">

                                                    <!-- tr><td><b>ID</b> </td><td><b>:</b> 80</td></tr -->

                                                    <tr><td width="25%"><b>Kode Pemesanan</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> <a href="http://laundry.id/adminweb/pemesanan/list.php?_&query=000080	" ><span style="font-weight: bold;">#000080</span></a></td></tr>

                                                    <tr><td><b>Nama Pengguna</b> </td><td><b>:</b> vera  (griyaasrif04@gmail.com)</td></tr>

                                                    <tr><td><b>Tanggal Pesan</b></td><td><b>:</b> 13-09-2018 04:25:51</td></tr>

                                                    <tr><td><b>Pengiriman Kepada</b> </td><td><b>:</b> ee</td></tr>

                                                    <tr><td><b>Alamat</b></td><td><b>:</b> ed</td></tr>

                                                    <tr><td><b>No. HP</b></td><td><b>:</b> 081373011822</td></tr>

                                                    <tr><td><b>Total Belanja</b> </td><td><b>:</b> Rp. 1,102,500</td></tr>                                                    

                                                    <tr><td><b>Kurir Pengiriman</b> </td><td><b>:</b> TIKI</td></tr>                                                    

                                                    <tr><td><b>No. Resi</b> </td><td><b>:</b> <span id="text_no_resi_80"></span></td></tr>                                                    

                                                    <tr><td><b>Jenis Pemesanan</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;">BUKAN DROPSHIP</span></td></tr>

                                                    <tr><td><b>Nama Dropship</b> </td><td><b>:</b> <span id="text_no_resi_80"></span></td></tr>               
                                                    <tr><td><b>No.Telpon Dropship</b> </td><td><b>:</b> <span id="text_no_resi_80"></span></td></tr>                                       
                                                    <tr><td><b>Cara Pembayaran</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;">Transfer Bank</span></td></tr>

                                                    <tr><td><b>Status Pembayaran</b> </td><td><b>:</b> <span id='text_pembayaran_80' style="color: green; font-weight: bold;">LUNAS</span></td></tr>

                                                    <tr><td><b>Status Pemesanan</b> </td><td><b>:</b> <span id='text_status_80' style="font-weight: bold; color: green;">Pesanan dalam proses.</span></td></tr>

                                                    <tr><td colspan="2">

                                                    <div id="message_wrapper_80" style="margin-top: 10px; margin-bottom: 10px;">

                                                        <div id="alert_error_80" class="form-group" style="display: none;">

                                                            <div class="alert alert-danger">&nbsp;</div>

                                                        </div>

                                                        <div id="alert_success_80" class="form-group" style="display: none;">                         

                                                            <div class="alert alert-info">&nbsp;</div>

                                                        </div>                                                                

                                                    </div>

                                                    <div style="margin-top: 10px; margin-bottom: 10px;">

                                                        
                                                            <div id="i_loading_batal_80" class="G-btn-animation" style="display: none;"><img src="http://laundry.id/templates/back-end/penguin/assets/img/loading.gif" /></div>

                                                            <button id="btn_batal_80" id_batal="80" type="button" class="btn btn-danger batal_pesan">Batalkan Pesanan</button>

                                                        
                                                        <button id="btn_histori_80" id_histori="80" type="button" class="btn btn-primary histori">Lihat Status</button>

                                                        <button id="btn_detail_80" id_detail="80" type="button" class="btn btn-warning detail">Tampilkan Detail</button>

                                                        <button id="btn_cetak_80" notrx="000080" type="button" class="btn btn-warning cetak">Cetak</button>
                                                        
                                                        <button onClick="$('#form-alamat-80').toggleClass('hide');" type="button" class="btn btn-succcess">Alamat Pengiriman</button>

                                                        <button id="btn_noresi_80" id_noresi="80" is_open="false" type="button" class="btn btn-info noresi">Proses Pengiriman</button>
                                                        <!-- button id="btn_finish_80" id_finish="80" is_open="false" type="button" class="btn btn-danger finish">Tutup Transaksi</button -->

                                                        

                                                        <div id="detail_histori_80" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                <label for="histori_pemesanan">Histori Pemesanan:</label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">

                                                                    <thead>

                                                                        <tr>

                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>

                                                                            <th width="20%"><div style="text-align: center;">Tanggal Jam</div></th>                                        

                                                                            <th width="70%"><div style="text-align: center;">Penjelasan</div></th>

                                                                        </tr>

                                                                    </thead>

                                                                    <tbody>

                                                                        
                                                                        
                                                                            <tr id="baris_80">

                                                                                <td align="center">1</td>

                                                                                <td align="center">13-09-2018</td>

                                                                                <td align="left">Customer melakukan checkout.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_80">

                                                                                <td align="center">2</td>

                                                                                <td align="center">13-09-2018</td>

                                                                                <td align="left">Customer melakukan konfirmasi pembayaran sebesar Rp 1,102,500.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_80">

                                                                                <td align="center">3</td>

                                                                                <td align="center">13-09-2018</td>

                                                                                <td align="left">Admin menerima pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_80">

                                                                                <td align="center">4</td>

                                                                                <td align="center">13-09-2018</td>

                                                                                <td align="left">Admin menerima pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                    </tbody>                                         

                                                                </table>

                                                            </div>

                                                        </div>

                                                        <div class="table-responsive hide" id="form-alamat-80" style="margin-top: 10px;">

                                                            <div class="form-group">
                                                                <label for="histori_pemesanan">Alamat Pengiriman:</label>
																<div class="table table-xlg" id="alamat-80"  style="width:100%">
																		<p style="font-size: 20px;">Penerima : <hr></p>
																		<p style="font-size: 20px;">Alamat : ed<hr></p>
																		<p style="font-size: 20px;">Telpon : 081373011822<hr></p>
																		<p style="font-size: 20px;">Pengirim : <hr></p>
																		<p style="font-size: 20px; text-transform: uppercase;">Kurir Pengiriman : TIKI</p>
																		<p style="font-size: 20px; text-transform: uppercase;">Kode Pemesanan : #000080</p>
                                                                </div>
																<button onClick="printalamat('alamat-80')" class="btn btn-success" type="button">Print Alamat Pengirman</button>
    															<button class="btn" data-clipboard-action="copy" data-clipboard-target="#alamat-80">Copy Alamat Pengirman</button>						
                                                            </div>

                                                        </div>
                                                        

                                                        <div id="detail_detail_80" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                <label for="histori_pemesanan">Detail Barang:</label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">

                                                                    <thead>

                                                                        <tr>

                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Gambar</div></th>

                                                                            <th width="40%"><div style="text-align: center;">Nama Barang</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Qty</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Harga</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Diskon</div></th>
                                                                        
                                                                            <th width="15%"><div style="text-align: center;">Subtotal</div></th>

                                                                            <th width="15%"><div style="text-align: center;">Grandtotal</div></th>

                                                                        </tr>

                                                                    </thead>

                                                                    <tbody>

                                                                                                                                                
                                                                        
                                                                            <tr id="baris_">

                                                                                <td align="center">1</td>

                                                                                <td align="center"><img src="http://laundry.id/uploads/produk/Christian-Dior-Lady-8907-Semi-Premium-KODE-CD058-Pink.jpg" width="48px" /></td>

                                                                                <td align="left">tas mj (1919)<br />Ukuran: 20X20X20<br />Warna TEST</td>

                                                                                <td align="center">7</td>

                                                                                <td align="center"> Rp. 0</td>
                                                                                <td align="center"> Rp. 0</td>
                                                                                <td align="right">Rp. 120,000</td>

                                                                                <td align="right">Rp. 840,000</td>

                                                                            </tr>

                                                                              
                                                                              

                                                                                                                                                    <tr id="baris_">

                                                                                <td align="right" colspan="7">Voucher</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                            <tr id="baris_">

                                                                                <td align="right" colspan="7">Ongkir</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                            <tr id="baris_">

                                                                                <td align="right" colspan="7">Total</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                        

                                                                    </tbody>                                         

                                                                </table>

                                                            </div>

                                                            <div class="form-group">

                                                                <button id_edit="80" type="button" class="btn btn-danger edit_pesanan">Edit</button>
                                                            </div>

                                                        </div>

                                                        

                                                        
                                                        <div id="edit_no_resi_80" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">                                                                

                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                                                                                         

                                                                    <tr>

                                                                        <td width="25%"><label for="no_resi" style="padding: 7px 0 0 7px;">Status Pesanan:</label></td>

                                                                        <td colspan="2" width="70%">

                                                                            <select class="form-control" name="status_pesanan_80">

                                                                                <option value="2"  selected="selected">Pesanan Dalam Proses.</option>

                                                                                <option value="6" >Pesanan Sudah Dikirim.</option>

                                                                                <option value="5" >Pesanan Sudah Diterima.</option>

                                                                            </select>

                                                                        </td>                                                                        

                                                                    </tr>

                                                                    <tr>

                                                                        <td width="25%"><label for="no_resi" style="padding: 7px 0 0 7px;">Resi Pengiriman:</label></td>

                                                                        <td width="60%"><input type="text" value="" class="form-control" name="no_resi_80" placeholder="" /></td>

                                                                        <td width="15%">

                                                                            <div id="i_loading_noresi_80" class="G-btn-animation" style="display: none;"><img src="http://laundry.id/templates/back-end/penguin/assets/img/loading.gif" /></div>

                                                                            <button id="btn_simpan_noresi_80" id_noresi="80" type="button" class="btn btn-danger simpan_noresi">Update Status</button>

                                                                        </td>

                                                                    </tr>

                                                                </table>

                                                            </div>

                                                        </div>
                                                        
                                                        

                                                        <!-- div id="edit_finish_80" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                

                                                                <label for=""></label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                    

                                                                    <tr>

                                                                        <td width="25%"><label for="nama_penerima" style="padding: 7px 0 0 7px;">Penerima Paket:</label></td>

                                                                        <td width="60%"><input type="text" value="" class="form-control" name="nama_penerima_80" placeholder="" /></td>

                                                                        <td width="15%">

                                                                            <div id="i_loading_finish_80" class="G-btn-animation" style="display: none;"><img src="http://laundry.id/templates/back-end/penguin/assets/img/loading.gif" /></div>

                                                                            <button id="btn_simpan_finish_80" id_finish="80" type="button" class="btn btn-danger simpan_finish">Paket Sudah Diterima</button>

                                                                        </td>

                                                                    </tr>                                                                    

                                                                </table>

                                                            </div>

                                                        </div -->

                                                    </div></td></tr>

                                                </table>

                                            </td>

                                        </tr>

                                          

                                                                        

                                        <tr id="baris_79">

                                            <!-- td align="center"><input type="checkbox" id_select="79" name="select_79" class="select" /></td -->

                                            <td align="center">2</td>

                                            <td>

                                                <table width="100%">

                                                    <!-- tr><td><b>ID</b> </td><td><b>:</b> 79</td></tr -->

                                                    <tr><td width="25%"><b>Kode Pemesanan</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> <a href="http://laundry.id/adminweb/pemesanan/list.php?_&query=000079	" ><span style="font-weight: bold;">#000079</span></a></td></tr>

                                                    <tr><td><b>Nama Pengguna</b> </td><td><b>:</b> vera  (griyaasrif04@gmail.com)</td></tr>

                                                    <tr><td><b>Tanggal Pesan</b></td><td><b>:</b> 13-09-2018 03:19:08</td></tr>

                                                    <tr><td><b>Pengiriman Kepada</b> </td><td><b>:</b> ee</td></tr>

                                                    <tr><td><b>Alamat</b></td><td><b>:</b> ed</td></tr>

                                                    <tr><td><b>No. HP</b></td><td><b>:</b> 081373011822</td></tr>

                                                    <tr><td><b>Total Belanja</b> </td><td><b>:</b> Rp. 120,000</td></tr>                                                    

                                                    <tr><td><b>Kurir Pengiriman</b> </td><td><b>:</b> JNE</td></tr>                                                    

                                                    <tr><td><b>No. Resi</b> </td><td><b>:</b> <span id="text_no_resi_79"></span></td></tr>                                                    

                                                    <tr><td><b>Jenis Pemesanan</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;">BUKAN DROPSHIP</span></td></tr>

                                                    <tr><td><b>Nama Dropship</b> </td><td><b>:</b> <span id="text_no_resi_79"></span></td></tr>               
                                                    <tr><td><b>No.Telpon Dropship</b> </td><td><b>:</b> <span id="text_no_resi_79"></span></td></tr>                                       
                                                    <tr><td><b>Cara Pembayaran</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;">Transfer Bank</span></td></tr>

                                                    <tr><td><b>Status Pembayaran</b> </td><td><b>:</b> <span id='text_pembayaran_79' style="color: green; font-weight: bold;">LUNAS</span></td></tr>

                                                    <tr><td><b>Status Pemesanan</b> </td><td><b>:</b> <span id='text_status_79' style="font-weight: bold; color: green;">Pesanan dalam proses.</span></td></tr>

                                                    <tr><td colspan="2">

                                                    <div id="message_wrapper_79" style="margin-top: 10px; margin-bottom: 10px;">

                                                        <div id="alert_error_79" class="form-group" style="display: none;">

                                                            <div class="alert alert-danger">&nbsp;</div>

                                                        </div>

                                                        <div id="alert_success_79" class="form-group" style="display: none;">                         

                                                            <div class="alert alert-info">&nbsp;</div>

                                                        </div>                                                                

                                                    </div>

                                                    <div style="margin-top: 10px; margin-bottom: 10px;">

                                                        
                                                            <div id="i_loading_batal_79" class="G-btn-animation" style="display: none;"><img src="http://laundry.id/templates/back-end/penguin/assets/img/loading.gif" /></div>

                                                            <button id="btn_batal_79" id_batal="79" type="button" class="btn btn-danger batal_pesan">Batalkan Pesanan</button>

                                                        
                                                        <button id="btn_histori_79" id_histori="79" type="button" class="btn btn-primary histori">Lihat Status</button>

                                                        <button id="btn_detail_79" id_detail="79" type="button" class="btn btn-warning detail">Tampilkan Detail</button>

                                                        <button id="btn_cetak_79" notrx="000079" type="button" class="btn btn-warning cetak">Cetak</button>
                                                        
                                                        <button onClick="$('#form-alamat-79').toggleClass('hide');" type="button" class="btn btn-succcess">Alamat Pengiriman</button>

                                                        <button id="btn_noresi_79" id_noresi="79" is_open="false" type="button" class="btn btn-info noresi">Proses Pengiriman</button>
                                                        <!-- button id="btn_finish_79" id_finish="79" is_open="false" type="button" class="btn btn-danger finish">Tutup Transaksi</button -->

                                                        

                                                        <div id="detail_histori_79" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                <label for="histori_pemesanan">Histori Pemesanan:</label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">

                                                                    <thead>

                                                                        <tr>

                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>

                                                                            <th width="20%"><div style="text-align: center;">Tanggal Jam</div></th>                                        

                                                                            <th width="70%"><div style="text-align: center;">Penjelasan</div></th>

                                                                        </tr>

                                                                    </thead>

                                                                    <tbody>

                                                                        
                                                                        
                                                                            <tr id="baris_79">

                                                                                <td align="center">1</td>

                                                                                <td align="center">13-09-2018</td>

                                                                                <td align="left">Customer melakukan checkout.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_79">

                                                                                <td align="center">2</td>

                                                                                <td align="center">13-09-2018</td>

                                                                                <td align="left">Customer melakukan konfirmasi pembayaran sebesar Rp 120,000.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_79">

                                                                                <td align="center">3</td>

                                                                                <td align="center">13-09-2018</td>

                                                                                <td align="left">Admin menerima pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                    </tbody>                                         

                                                                </table>

                                                            </div>

                                                        </div>

                                                        <div class="table-responsive hide" id="form-alamat-79" style="margin-top: 10px;">

                                                            <div class="form-group">
                                                                <label for="histori_pemesanan">Alamat Pengiriman:</label>
																<div class="table table-xlg" id="alamat-79"  style="width:100%">
																		<p style="font-size: 20px;">Penerima : <hr></p>
																		<p style="font-size: 20px;">Alamat : ed<hr></p>
																		<p style="font-size: 20px;">Telpon : 081373011822<hr></p>
																		<p style="font-size: 20px;">Pengirim : <hr></p>
																		<p style="font-size: 20px; text-transform: uppercase;">Kurir Pengiriman : JNE</p>
																		<p style="font-size: 20px; text-transform: uppercase;">Kode Pemesanan : #000079</p>
                                                                </div>
																<button onClick="printalamat('alamat-79')" class="btn btn-success" type="button">Print Alamat Pengirman</button>
    															<button class="btn" data-clipboard-action="copy" data-clipboard-target="#alamat-79">Copy Alamat Pengirman</button>						
                                                            </div>

                                                        </div>
                                                        

                                                        <div id="detail_detail_79" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                <label for="histori_pemesanan">Detail Barang:</label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">

                                                                    <thead>

                                                                        <tr>

                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Gambar</div></th>

                                                                            <th width="40%"><div style="text-align: center;">Nama Barang</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Qty</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Harga</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Diskon</div></th>
                                                                        
                                                                            <th width="15%"><div style="text-align: center;">Subtotal</div></th>

                                                                            <th width="15%"><div style="text-align: center;">Grandtotal</div></th>

                                                                        </tr>

                                                                    </thead>

                                                                    <tbody>

                                                                                                                                                
                                                                        
                                                                            <tr id="baris_">

                                                                                <td align="center">1</td>

                                                                                <td align="center"><img src="http://laundry.id/uploads/produk/" width="48px" /></td>

                                                                                <td align="left"> ()<br />Ukuran: 20X20X20<br />Warna TEST</td>

                                                                                <td align="center">3</td>

                                                                                <td align="center"> Rp. 0</td>
                                                                                <td align="center"> Rp. 0</td>
                                                                                <td align="right">Rp. 0</td>

                                                                                <td align="right">Rp. 0</td>

                                                                            </tr>

                                                                              
                                                                              

                                                                                                                                                    <tr id="baris_">

                                                                                <td align="right" colspan="7">Voucher</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                            <tr id="baris_">

                                                                                <td align="right" colspan="7">Ongkir</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                            <tr id="baris_">

                                                                                <td align="right" colspan="7">Total</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                        

                                                                    </tbody>                                         

                                                                </table>

                                                            </div>

                                                            <div class="form-group">

                                                                <button id_edit="79" type="button" class="btn btn-danger edit_pesanan">Edit</button>
                                                            </div>

                                                        </div>

                                                        

                                                        
                                                        <div id="edit_no_resi_79" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">                                                                

                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                                                                                         

                                                                    <tr>

                                                                        <td width="25%"><label for="no_resi" style="padding: 7px 0 0 7px;">Status Pesanan:</label></td>

                                                                        <td colspan="2" width="70%">

                                                                            <select class="form-control" name="status_pesanan_79">

                                                                                <option value="2"  selected="selected">Pesanan Dalam Proses.</option>

                                                                                <option value="6" >Pesanan Sudah Dikirim.</option>

                                                                                <option value="5" >Pesanan Sudah Diterima.</option>

                                                                            </select>

                                                                        </td>                                                                        

                                                                    </tr>

                                                                    <tr>

                                                                        <td width="25%"><label for="no_resi" style="padding: 7px 0 0 7px;">Resi Pengiriman:</label></td>

                                                                        <td width="60%"><input type="text" value="" class="form-control" name="no_resi_79" placeholder="" /></td>

                                                                        <td width="15%">

                                                                            <div id="i_loading_noresi_79" class="G-btn-animation" style="display: none;"><img src="http://laundry.id/templates/back-end/penguin/assets/img/loading.gif" /></div>

                                                                            <button id="btn_simpan_noresi_79" id_noresi="79" type="button" class="btn btn-danger simpan_noresi">Update Status</button>

                                                                        </td>

                                                                    </tr>

                                                                </table>

                                                            </div>

                                                        </div>
                                                        
                                                        

                                                        <!-- div id="edit_finish_79" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                

                                                                <label for=""></label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                    

                                                                    <tr>

                                                                        <td width="25%"><label for="nama_penerima" style="padding: 7px 0 0 7px;">Penerima Paket:</label></td>

                                                                        <td width="60%"><input type="text" value="" class="form-control" name="nama_penerima_79" placeholder="" /></td>

                                                                        <td width="15%">

                                                                            <div id="i_loading_finish_79" class="G-btn-animation" style="display: none;"><img src="http://laundry.id/templates/back-end/penguin/assets/img/loading.gif" /></div>

                                                                            <button id="btn_simpan_finish_79" id_finish="79" type="button" class="btn btn-danger simpan_finish">Paket Sudah Diterima</button>

                                                                        </td>

                                                                    </tr>                                                                    

                                                                </table>

                                                            </div>

                                                        </div -->

                                                    </div></td></tr>

                                                </table>

                                            </td>

                                        </tr>

                                          

                                                                        

                                        <tr id="baris_78">

                                            <!-- td align="center"><input type="checkbox" id_select="78" name="select_78" class="select" /></td -->

                                            <td align="center">3</td>

                                            <td>

                                                <table width="100%">

                                                    <!-- tr><td><b>ID</b> </td><td><b>:</b> 78</td></tr -->

                                                    <tr><td width="25%"><b>Kode Pemesanan</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> <a href="http://laundry.id/adminweb/pemesanan/list.php?_&query=000078	" ><span style="font-weight: bold;">#000078</span></a></td></tr>

                                                    <tr><td><b>Nama Pengguna</b> </td><td><b>:</b> vera  (griyaasrif04@gmail.com)</td></tr>

                                                    <tr><td><b>Tanggal Pesan</b></td><td><b>:</b> 13-09-2018 03:02:55</td></tr>

                                                    <tr><td><b>Pengiriman Kepada</b> </td><td><b>:</b> ee</td></tr>

                                                    <tr><td><b>Alamat</b></td><td><b>:</b> ed</td></tr>

                                                    <tr><td><b>No. HP</b></td><td><b>:</b> 081373011822</td></tr>

                                                    <tr><td><b>Total Belanja</b> </td><td><b>:</b> Rp. 80,000</td></tr>                                                    

                                                    <tr><td><b>Kurir Pengiriman</b> </td><td><b>:</b> JNE</td></tr>                                                    

                                                    <tr><td><b>No. Resi</b> </td><td><b>:</b> <span id="text_no_resi_78"></span></td></tr>                                                    

                                                    <tr><td><b>Jenis Pemesanan</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;">BUKAN DROPSHIP</span></td></tr>

                                                    <tr><td><b>Nama Dropship</b> </td><td><b>:</b> <span id="text_no_resi_78"></span></td></tr>               
                                                    <tr><td><b>No.Telpon Dropship</b> </td><td><b>:</b> <span id="text_no_resi_78"></span></td></tr>                                       
                                                    <tr><td><b>Cara Pembayaran</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;">Transfer Bank</span></td></tr>

                                                    <tr><td><b>Status Pembayaran</b> </td><td><b>:</b> <span id='text_pembayaran_78' style="color: green; font-weight: bold;">LUNAS</span></td></tr>

                                                    <tr><td><b>Status Pemesanan</b> </td><td><b>:</b> <span id='text_status_78' style="font-weight: bold; color: green;">Pesanan dalam proses.</span></td></tr>

                                                    <tr><td colspan="2">

                                                    <div id="message_wrapper_78" style="margin-top: 10px; margin-bottom: 10px;">

                                                        <div id="alert_error_78" class="form-group" style="display: none;">

                                                            <div class="alert alert-danger">&nbsp;</div>

                                                        </div>

                                                        <div id="alert_success_78" class="form-group" style="display: none;">                         

                                                            <div class="alert alert-info">&nbsp;</div>

                                                        </div>                                                                

                                                    </div>

                                                    <div style="margin-top: 10px; margin-bottom: 10px;">

                                                        
                                                            <div id="i_loading_batal_78" class="G-btn-animation" style="display: none;"><img src="http://laundry.id/templates/back-end/penguin/assets/img/loading.gif" /></div>

                                                            <button id="btn_batal_78" id_batal="78" type="button" class="btn btn-danger batal_pesan">Batalkan Pesanan</button>

                                                        
                                                        <button id="btn_histori_78" id_histori="78" type="button" class="btn btn-primary histori">Lihat Status</button>

                                                        <button id="btn_detail_78" id_detail="78" type="button" class="btn btn-warning detail">Tampilkan Detail</button>

                                                        <button id="btn_cetak_78" notrx="000078" type="button" class="btn btn-warning cetak">Cetak</button>
                                                        
                                                        <button onClick="$('#form-alamat-78').toggleClass('hide');" type="button" class="btn btn-succcess">Alamat Pengiriman</button>

                                                        <button id="btn_noresi_78" id_noresi="78" is_open="false" type="button" class="btn btn-info noresi">Proses Pengiriman</button>
                                                        <!-- button id="btn_finish_78" id_finish="78" is_open="false" type="button" class="btn btn-danger finish">Tutup Transaksi</button -->

                                                        

                                                        <div id="detail_histori_78" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                <label for="histori_pemesanan">Histori Pemesanan:</label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">

                                                                    <thead>

                                                                        <tr>

                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>

                                                                            <th width="20%"><div style="text-align: center;">Tanggal Jam</div></th>                                        

                                                                            <th width="70%"><div style="text-align: center;">Penjelasan</div></th>

                                                                        </tr>

                                                                    </thead>

                                                                    <tbody>

                                                                        
                                                                        
                                                                            <tr id="baris_78">

                                                                                <td align="center">1</td>

                                                                                <td align="center">13-09-2018</td>

                                                                                <td align="left">Customer melakukan checkout.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_78">

                                                                                <td align="center">2</td>

                                                                                <td align="center">13-09-2018</td>

                                                                                <td align="left">Customer melakukan konfirmasi pembayaran sebesar Rp 80,000.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_78">

                                                                                <td align="center">3</td>

                                                                                <td align="center">13-09-2018</td>

                                                                                <td align="left">Admin menerima pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                    </tbody>                                         

                                                                </table>

                                                            </div>

                                                        </div>

                                                        <div class="table-responsive hide" id="form-alamat-78" style="margin-top: 10px;">

                                                            <div class="form-group">
                                                                <label for="histori_pemesanan">Alamat Pengiriman:</label>
																<div class="table table-xlg" id="alamat-78"  style="width:100%">
																		<p style="font-size: 20px;">Penerima : <hr></p>
																		<p style="font-size: 20px;">Alamat : ed<hr></p>
																		<p style="font-size: 20px;">Telpon : 081373011822<hr></p>
																		<p style="font-size: 20px;">Pengirim : <hr></p>
																		<p style="font-size: 20px; text-transform: uppercase;">Kurir Pengiriman : JNE</p>
																		<p style="font-size: 20px; text-transform: uppercase;">Kode Pemesanan : #000078</p>
                                                                </div>
																<button onClick="printalamat('alamat-78')" class="btn btn-success" type="button">Print Alamat Pengirman</button>
    															<button class="btn" data-clipboard-action="copy" data-clipboard-target="#alamat-78">Copy Alamat Pengirman</button>						
                                                            </div>

                                                        </div>
                                                        

                                                        <div id="detail_detail_78" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                <label for="histori_pemesanan">Detail Barang:</label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">

                                                                    <thead>

                                                                        <tr>

                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Gambar</div></th>

                                                                            <th width="40%"><div style="text-align: center;">Nama Barang</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Qty</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Harga</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Diskon</div></th>
                                                                        
                                                                            <th width="15%"><div style="text-align: center;">Subtotal</div></th>

                                                                            <th width="15%"><div style="text-align: center;">Grandtotal</div></th>

                                                                        </tr>

                                                                    </thead>

                                                                    <tbody>

                                                                                                                                                
                                                                        
                                                                            <tr id="baris_">

                                                                                <td align="center">1</td>

                                                                                <td align="center"><img src="http://laundry.id/uploads/produk/" width="48px" /></td>

                                                                                <td align="left"> ()<br />Ukuran: BESAR<br />Warna SAPPHIRE</td>

                                                                                <td align="center">2</td>

                                                                                <td align="center"> Rp. 0</td>
                                                                                <td align="center"> Rp. 0</td>
                                                                                <td align="right">Rp. 0</td>

                                                                                <td align="right">Rp. 0</td>

                                                                            </tr>

                                                                              
                                                                              

                                                                                                                                                    <tr id="baris_">

                                                                                <td align="right" colspan="7">Voucher</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                            <tr id="baris_">

                                                                                <td align="right" colspan="7">Ongkir</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                            <tr id="baris_">

                                                                                <td align="right" colspan="7">Total</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                        

                                                                    </tbody>                                         

                                                                </table>

                                                            </div>

                                                            <div class="form-group">

                                                                <button id_edit="78" type="button" class="btn btn-danger edit_pesanan">Edit</button>
                                                            </div>

                                                        </div>

                                                        

                                                        
                                                        <div id="edit_no_resi_78" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">                                                                

                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                                                                                         

                                                                    <tr>

                                                                        <td width="25%"><label for="no_resi" style="padding: 7px 0 0 7px;">Status Pesanan:</label></td>

                                                                        <td colspan="2" width="70%">

                                                                            <select class="form-control" name="status_pesanan_78">

                                                                                <option value="2"  selected="selected">Pesanan Dalam Proses.</option>

                                                                                <option value="6" >Pesanan Sudah Dikirim.</option>

                                                                                <option value="5" >Pesanan Sudah Diterima.</option>

                                                                            </select>

                                                                        </td>                                                                        

                                                                    </tr>

                                                                    <tr>

                                                                        <td width="25%"><label for="no_resi" style="padding: 7px 0 0 7px;">Resi Pengiriman:</label></td>

                                                                        <td width="60%"><input type="text" value="" class="form-control" name="no_resi_78" placeholder="" /></td>

                                                                        <td width="15%">

                                                                            <div id="i_loading_noresi_78" class="G-btn-animation" style="display: none;"><img src="http://laundry.id/templates/back-end/penguin/assets/img/loading.gif" /></div>

                                                                            <button id="btn_simpan_noresi_78" id_noresi="78" type="button" class="btn btn-danger simpan_noresi">Update Status</button>

                                                                        </td>

                                                                    </tr>

                                                                </table>

                                                            </div>

                                                        </div>
                                                        
                                                        

                                                        <!-- div id="edit_finish_78" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                

                                                                <label for=""></label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                    

                                                                    <tr>

                                                                        <td width="25%"><label for="nama_penerima" style="padding: 7px 0 0 7px;">Penerima Paket:</label></td>

                                                                        <td width="60%"><input type="text" value="" class="form-control" name="nama_penerima_78" placeholder="" /></td>

                                                                        <td width="15%">

                                                                            <div id="i_loading_finish_78" class="G-btn-animation" style="display: none;"><img src="http://laundry.id/templates/back-end/penguin/assets/img/loading.gif" /></div>

                                                                            <button id="btn_simpan_finish_78" id_finish="78" type="button" class="btn btn-danger simpan_finish">Paket Sudah Diterima</button>

                                                                        </td>

                                                                    </tr>                                                                    

                                                                </table>

                                                            </div>

                                                        </div -->

                                                    </div></td></tr>

                                                </table>

                                            </td>

                                        </tr>

                                          

                                                                        

                                        <tr id="baris_77">

                                            <!-- td align="center"><input type="checkbox" id_select="77" name="select_77" class="select" /></td -->

                                            <td align="center">4</td>

                                            <td>

                                                <table width="100%">

                                                    <!-- tr><td><b>ID</b> </td><td><b>:</b> 77</td></tr -->

                                                    <tr><td width="25%"><b>Kode Pemesanan</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> <a href="http://laundry.id/adminweb/pemesanan/list.php?_&query=000077	" ><span style="font-weight: bold;">#000077</span></a></td></tr>

                                                    <tr><td><b>Nama Pengguna</b> </td><td><b>:</b> vera  (griyaasrif04@gmail.com)</td></tr>

                                                    <tr><td><b>Tanggal Pesan</b></td><td><b>:</b> 06-09-2018 14:08:03</td></tr>

                                                    <tr><td><b>Pengiriman Kepada</b> </td><td><b>:</b> ee</td></tr>

                                                    <tr><td><b>Alamat</b></td><td><b>:</b> ed</td></tr>

                                                    <tr><td><b>No. HP</b></td><td><b>:</b> 081373011822</td></tr>

                                                    <tr><td><b>Total Belanja</b> </td><td><b>:</b> Rp. 329,000</td></tr>                                                    

                                                    <tr><td><b>Kurir Pengiriman</b> </td><td><b>:</b> JNE</td></tr>                                                    

                                                    <tr><td><b>No. Resi</b> </td><td><b>:</b> <span id="text_no_resi_77"></span></td></tr>                                                    

                                                    <tr><td><b>Jenis Pemesanan</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;">BUKAN DROPSHIP</span></td></tr>

                                                    <tr><td><b>Nama Dropship</b> </td><td><b>:</b> <span id="text_no_resi_77"></span></td></tr>               
                                                    <tr><td><b>No.Telpon Dropship</b> </td><td><b>:</b> <span id="text_no_resi_77"></span></td></tr>                                       
                                                    <tr><td><b>Cara Pembayaran</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;">Transfer Bank</span></td></tr>

                                                    <tr><td><b>Status Pembayaran</b> </td><td><b>:</b> <span id='text_pembayaran_77' style="color: green; font-weight: bold;">LUNAS</span></td></tr>

                                                    <tr><td><b>Status Pemesanan</b> </td><td><b>:</b> <span id='text_status_77' style="font-weight: bold; color: green;">Pesanan dalam proses.</span></td></tr>

                                                    <tr><td colspan="2">

                                                    <div id="message_wrapper_77" style="margin-top: 10px; margin-bottom: 10px;">

                                                        <div id="alert_error_77" class="form-group" style="display: none;">

                                                            <div class="alert alert-danger">&nbsp;</div>

                                                        </div>

                                                        <div id="alert_success_77" class="form-group" style="display: none;">                         

                                                            <div class="alert alert-info">&nbsp;</div>

                                                        </div>                                                                

                                                    </div>

                                                    <div style="margin-top: 10px; margin-bottom: 10px;">

                                                        
                                                            <div id="i_loading_batal_77" class="G-btn-animation" style="display: none;"><img src="http://laundry.id/templates/back-end/penguin/assets/img/loading.gif" /></div>

                                                            <button id="btn_batal_77" id_batal="77" type="button" class="btn btn-danger batal_pesan">Batalkan Pesanan</button>

                                                        
                                                        <button id="btn_histori_77" id_histori="77" type="button" class="btn btn-primary histori">Lihat Status</button>

                                                        <button id="btn_detail_77" id_detail="77" type="button" class="btn btn-warning detail">Tampilkan Detail</button>

                                                        <button id="btn_cetak_77" notrx="000077" type="button" class="btn btn-warning cetak">Cetak</button>
                                                        
                                                        <button onClick="$('#form-alamat-77').toggleClass('hide');" type="button" class="btn btn-succcess">Alamat Pengiriman</button>

                                                        <button id="btn_noresi_77" id_noresi="77" is_open="false" type="button" class="btn btn-info noresi">Proses Pengiriman</button>
                                                        <!-- button id="btn_finish_77" id_finish="77" is_open="false" type="button" class="btn btn-danger finish">Tutup Transaksi</button -->

                                                        

                                                        <div id="detail_histori_77" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                <label for="histori_pemesanan">Histori Pemesanan:</label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">

                                                                    <thead>

                                                                        <tr>

                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>

                                                                            <th width="20%"><div style="text-align: center;">Tanggal Jam</div></th>                                        

                                                                            <th width="70%"><div style="text-align: center;">Penjelasan</div></th>

                                                                        </tr>

                                                                    </thead>

                                                                    <tbody>

                                                                        
                                                                        
                                                                            <tr id="baris_77">

                                                                                <td align="center">1</td>

                                                                                <td align="center">06-09-2018</td>

                                                                                <td align="left">Customer melakukan checkout.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_77">

                                                                                <td align="center">2</td>

                                                                                <td align="center">06-09-2018</td>

                                                                                <td align="left">Customer melakukan konfirmasi pembayaran sebesar Rp 329,000.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_77">

                                                                                <td align="center">3</td>

                                                                                <td align="center">06-09-2018</td>

                                                                                <td align="left">Customer melakukan konfirmasi pembayaran sebesar Rp 329,000.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_77">

                                                                                <td align="center">4</td>

                                                                                <td align="center">06-09-2018</td>

                                                                                <td align="left">Customer melakukan konfirmasi pembayaran sebesar Rp 329,000.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_77">

                                                                                <td align="center">5</td>

                                                                                <td align="center">06-09-2018</td>

                                                                                <td align="left">Customer melakukan konfirmasi pembayaran sebesar Rp 329,000.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_77">

                                                                                <td align="center">6</td>

                                                                                <td align="center">06-09-2018</td>

                                                                                <td align="left">Customer melakukan konfirmasi pembayaran sebesar Rp 329,000.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_77">

                                                                                <td align="center">7</td>

                                                                                <td align="center">06-09-2018</td>

                                                                                <td align="left">Admin menerima pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                    </tbody>                                         

                                                                </table>

                                                            </div>

                                                        </div>

                                                        <div class="table-responsive hide" id="form-alamat-77" style="margin-top: 10px;">

                                                            <div class="form-group">
                                                                <label for="histori_pemesanan">Alamat Pengiriman:</label>
																<div class="table table-xlg" id="alamat-77"  style="width:100%">
																		<p style="font-size: 20px;">Penerima : <hr></p>
																		<p style="font-size: 20px;">Alamat : ed<hr></p>
																		<p style="font-size: 20px;">Telpon : 081373011822<hr></p>
																		<p style="font-size: 20px;">Pengirim : <hr></p>
																		<p style="font-size: 20px; text-transform: uppercase;">Kurir Pengiriman : JNE</p>
																		<p style="font-size: 20px; text-transform: uppercase;">Kode Pemesanan : #000077</p>
                                                                </div>
																<button onClick="printalamat('alamat-77')" class="btn btn-success" type="button">Print Alamat Pengirman</button>
    															<button class="btn" data-clipboard-action="copy" data-clipboard-target="#alamat-77">Copy Alamat Pengirman</button>						
                                                            </div>

                                                        </div>
                                                        

                                                        <div id="detail_detail_77" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                <label for="histori_pemesanan">Detail Barang:</label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">

                                                                    <thead>

                                                                        <tr>

                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Gambar</div></th>

                                                                            <th width="40%"><div style="text-align: center;">Nama Barang</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Qty</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Harga</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Diskon</div></th>
                                                                        
                                                                            <th width="15%"><div style="text-align: center;">Subtotal</div></th>

                                                                            <th width="15%"><div style="text-align: center;">Grandtotal</div></th>

                                                                        </tr>

                                                                    </thead>

                                                                    <tbody>

                                                                                                                                                
                                                                        
                                                                            <tr id="baris_">

                                                                                <td align="center">1</td>

                                                                                <td align="center"><img src="http://laundry.id/uploads/produk/raindoz_raindoz-jaket-parka-wanita-hinata-rse-060_full02_1.jpg" width="48px" /></td>

                                                                                <td align="left">HRCN JAKET SWEATER HOODIES WANITA OUTWEAR WANITA CROWN (IKH2076QI)<br />Ukuran: L</td>

                                                                                <td align="center">1</td>

                                                                                <td align="center"> Rp. 0</td>
                                                                                <td align="center"> Rp. 0</td>
                                                                                <td align="right">Rp. 289,000</td>

                                                                                <td align="right">Rp. 289,000</td>

                                                                            </tr>

                                                                              
                                                                              

                                                                                                                                                    <tr id="baris_">

                                                                                <td align="right" colspan="7">Voucher</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                            <tr id="baris_">

                                                                                <td align="right" colspan="7">Ongkir</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                            <tr id="baris_">

                                                                                <td align="right" colspan="7">Total</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                        

                                                                    </tbody>                                         

                                                                </table>

                                                            </div>

                                                            <div class="form-group">

                                                                <button id_edit="77" type="button" class="btn btn-danger edit_pesanan">Edit</button>
                                                            </div>

                                                        </div>

                                                        

                                                        
                                                        <div id="edit_no_resi_77" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">                                                                

                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                                                                                         

                                                                    <tr>

                                                                        <td width="25%"><label for="no_resi" style="padding: 7px 0 0 7px;">Status Pesanan:</label></td>

                                                                        <td colspan="2" width="70%">

                                                                            <select class="form-control" name="status_pesanan_77">

                                                                                <option value="2"  selected="selected">Pesanan Dalam Proses.</option>

                                                                                <option value="6" >Pesanan Sudah Dikirim.</option>

                                                                                <option value="5" >Pesanan Sudah Diterima.</option>

                                                                            </select>

                                                                        </td>                                                                        

                                                                    </tr>

                                                                    <tr>

                                                                        <td width="25%"><label for="no_resi" style="padding: 7px 0 0 7px;">Resi Pengiriman:</label></td>

                                                                        <td width="60%"><input type="text" value="" class="form-control" name="no_resi_77" placeholder="" /></td>

                                                                        <td width="15%">

                                                                            <div id="i_loading_noresi_77" class="G-btn-animation" style="display: none;"><img src="http://laundry.id/templates/back-end/penguin/assets/img/loading.gif" /></div>

                                                                            <button id="btn_simpan_noresi_77" id_noresi="77" type="button" class="btn btn-danger simpan_noresi">Update Status</button>

                                                                        </td>

                                                                    </tr>

                                                                </table>

                                                            </div>

                                                        </div>
                                                        
                                                        

                                                        <!-- div id="edit_finish_77" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                

                                                                <label for=""></label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                    

                                                                    <tr>

                                                                        <td width="25%"><label for="nama_penerima" style="padding: 7px 0 0 7px;">Penerima Paket:</label></td>

                                                                        <td width="60%"><input type="text" value="" class="form-control" name="nama_penerima_77" placeholder="" /></td>

                                                                        <td width="15%">

                                                                            <div id="i_loading_finish_77" class="G-btn-animation" style="display: none;"><img src="http://laundry.id/templates/back-end/penguin/assets/img/loading.gif" /></div>

                                                                            <button id="btn_simpan_finish_77" id_finish="77" type="button" class="btn btn-danger simpan_finish">Paket Sudah Diterima</button>

                                                                        </td>

                                                                    </tr>                                                                    

                                                                </table>

                                                            </div>

                                                        </div -->

                                                    </div></td></tr>

                                                </table>

                                            </td>

                                        </tr>

                                          

                                                                        

                                        <tr id="baris_76">

                                            <!-- td align="center"><input type="checkbox" id_select="76" name="select_76" class="select" /></td -->

                                            <td align="center">5</td>

                                            <td>

                                                <table width="100%">

                                                    <!-- tr><td><b>ID</b> </td><td><b>:</b> 76</td></tr -->

                                                    <tr><td width="25%"><b>Kode Pemesanan</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> <a href="http://laundry.id/adminweb/pemesanan/list.php?_&query=000076	" ><span style="font-weight: bold;">#000076</span></a></td></tr>

                                                    <tr><td><b>Nama Pengguna</b> </td><td><b>:</b>   ()</td></tr>

                                                    <tr><td><b>Tanggal Pesan</b></td><td><b>:</b> 01-04-2018 20:29:15</td></tr>

                                                    <tr><td><b>Pengiriman Kepada</b> </td><td><b>:</b> abv</td></tr>

                                                    <tr><td><b>Alamat</b></td><td><b>:</b> djj</td></tr>

                                                    <tr><td><b>No. HP</b></td><td><b>:</b> 081188</td></tr>

                                                    <tr><td><b>Total Belanja</b> </td><td><b>:</b> Rp. 329,000</td></tr>                                                    

                                                    <tr><td><b>Kurir Pengiriman</b> </td><td><b>:</b> JNE</td></tr>                                                    

                                                    <tr><td><b>No. Resi</b> </td><td><b>:</b> <span id="text_no_resi_76"></span></td></tr>                                                    

                                                    <tr><td><b>Jenis Pemesanan</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;">BUKAN DROPSHIP</span></td></tr>

                                                    <tr><td><b>Nama Dropship</b> </td><td><b>:</b> <span id="text_no_resi_76"></span></td></tr>               
                                                    <tr><td><b>No.Telpon Dropship</b> </td><td><b>:</b> <span id="text_no_resi_76"></span></td></tr>                                       
                                                    <tr><td><b>Cara Pembayaran</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;">Transfer Bank</span></td></tr>

                                                    <tr><td><b>Status Pembayaran</b> </td><td><b>:</b> <span id='text_pembayaran_76' style="color: green; font-weight: bold;">LUNAS</span></td></tr>

                                                    <tr><td><b>Status Pemesanan</b> </td><td><b>:</b> <span id='text_status_76' style="font-weight: bold; color: green;">Pesanan dalam proses.</span></td></tr>

                                                    <tr><td colspan="2">

                                                    <div id="message_wrapper_76" style="margin-top: 10px; margin-bottom: 10px;">

                                                        <div id="alert_error_76" class="form-group" style="display: none;">

                                                            <div class="alert alert-danger">&nbsp;</div>

                                                        </div>

                                                        <div id="alert_success_76" class="form-group" style="display: none;">                         

                                                            <div class="alert alert-info">&nbsp;</div>

                                                        </div>                                                                

                                                    </div>

                                                    <div style="margin-top: 10px; margin-bottom: 10px;">

                                                        
                                                            <div id="i_loading_batal_76" class="G-btn-animation" style="display: none;"><img src="http://laundry.id/templates/back-end/penguin/assets/img/loading.gif" /></div>

                                                            <button id="btn_batal_76" id_batal="76" type="button" class="btn btn-danger batal_pesan">Batalkan Pesanan</button>

                                                        
                                                        <button id="btn_histori_76" id_histori="76" type="button" class="btn btn-primary histori">Lihat Status</button>

                                                        <button id="btn_detail_76" id_detail="76" type="button" class="btn btn-warning detail">Tampilkan Detail</button>

                                                        <button id="btn_cetak_76" notrx="000076" type="button" class="btn btn-warning cetak">Cetak</button>
                                                        
                                                        <button onClick="$('#form-alamat-76').toggleClass('hide');" type="button" class="btn btn-succcess">Alamat Pengiriman</button>

                                                        <button id="btn_noresi_76" id_noresi="76" is_open="false" type="button" class="btn btn-info noresi">Proses Pengiriman</button>
                                                        <!-- button id="btn_finish_76" id_finish="76" is_open="false" type="button" class="btn btn-danger finish">Tutup Transaksi</button -->

                                                        

                                                        <div id="detail_histori_76" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                <label for="histori_pemesanan">Histori Pemesanan:</label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">

                                                                    <thead>

                                                                        <tr>

                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>

                                                                            <th width="20%"><div style="text-align: center;">Tanggal Jam</div></th>                                        

                                                                            <th width="70%"><div style="text-align: center;">Penjelasan</div></th>

                                                                        </tr>

                                                                    </thead>

                                                                    <tbody>

                                                                        
                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">1</td>

                                                                                <td align="center">01-04-2018</td>

                                                                                <td align="left">Customer melakukan checkout.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">2</td>

                                                                                <td align="center">01-04-2018</td>

                                                                                <td align="left">Admin melakukan perubahan pesanan.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">3</td>

                                                                                <td align="center">01-04-2018</td>

                                                                                <td align="left">Admin menerima pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">4</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">5</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menerima pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">6</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">7</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">8</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">9</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">10</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menerima pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">11</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">12</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">13</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menerima pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">14</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">15</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">16</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menerima pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">17</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">18</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">19</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menerima pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">20</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">21</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">22</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menerima pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">23</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">24</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">25</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menerima pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">26</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">27</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">28</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menerima pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">29</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">30</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menerima pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">31</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">32</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">33</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menerima pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">34</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">35</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">36</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menerima pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">37</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">38</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">39</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menerima pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">40</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">41</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">42</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menerima pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">43</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">44</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menerima pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">45</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">46</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menerima pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">47</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">48</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menerima pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">49</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">50</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menerima pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">51</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">52</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menerima pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">53</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">54</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menerima pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">55</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">56</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menerima pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">57</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">58</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menerima pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">59</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">60</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menerima pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">61</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">62</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menerima pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">63</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">64</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menerima pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">65</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">66</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menerima pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">67</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">68</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">69</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">70</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">71</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menerima pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">72</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">73</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">74</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">75</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">76</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">77</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">78</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">79</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">80</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">81</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menerima pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">82</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">83</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">84</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menerima pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">85</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">86</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">87</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">88</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">89</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menerima pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">90</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">91</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">92</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">93</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">94</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">95</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">96</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">97</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menerima pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">98</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">99</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">100</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">101</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">102</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menerima pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">103</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">104</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menerima pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">105</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_76">

                                                                                <td align="center">106</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menerima pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                    </tbody>                                         

                                                                </table>

                                                            </div>

                                                        </div>

                                                        <div class="table-responsive hide" id="form-alamat-76" style="margin-top: 10px;">

                                                            <div class="form-group">
                                                                <label for="histori_pemesanan">Alamat Pengiriman:</label>
																<div class="table table-xlg" id="alamat-76"  style="width:100%">
																		<p style="font-size: 20px;">Penerima : <hr></p>
																		<p style="font-size: 20px;">Alamat : djj<hr></p>
																		<p style="font-size: 20px;">Telpon : 081188<hr></p>
																		<p style="font-size: 20px;">Pengirim : <hr></p>
																		<p style="font-size: 20px; text-transform: uppercase;">Kurir Pengiriman : JNE</p>
																		<p style="font-size: 20px; text-transform: uppercase;">Kode Pemesanan : #000076</p>
                                                                </div>
																<button onClick="printalamat('alamat-76')" class="btn btn-success" type="button">Print Alamat Pengirman</button>
    															<button class="btn" data-clipboard-action="copy" data-clipboard-target="#alamat-76">Copy Alamat Pengirman</button>						
                                                            </div>

                                                        </div>
                                                        

                                                        <div id="detail_detail_76" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                <label for="histori_pemesanan">Detail Barang:</label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">

                                                                    <thead>

                                                                        <tr>

                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Gambar</div></th>

                                                                            <th width="40%"><div style="text-align: center;">Nama Barang</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Qty</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Harga</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Diskon</div></th>
                                                                        
                                                                            <th width="15%"><div style="text-align: center;">Subtotal</div></th>

                                                                            <th width="15%"><div style="text-align: center;">Grandtotal</div></th>

                                                                        </tr>

                                                                    </thead>

                                                                    <tbody>

                                                                                                                                                
                                                                        
                                                                            <tr id="baris_">

                                                                                <td align="center">1</td>

                                                                                <td align="center"><img src="http://laundry.id/uploads/produk/raindoz_raindoz-jaket-parka-wanita-hinata-rse-060_full02_1.jpg" width="48px" /></td>

                                                                                <td align="left">HRCN JAKET SWEATER HOODIES WANITA OUTWEAR WANITA CROWN (IKH2076QI)<br />Ukuran: M</td>

                                                                                <td align="center">1</td>

                                                                                <td align="center"> Rp. 0</td>
                                                                                <td align="center"> Rp. 0</td>
                                                                                <td align="right">Rp. 289,000</td>

                                                                                <td align="right">Rp. 289,000</td>

                                                                            </tr>

                                                                              
                                                                              

                                                                                                                                                    <tr id="baris_">

                                                                                <td align="right" colspan="7">Voucher</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                            <tr id="baris_">

                                                                                <td align="right" colspan="7">Ongkir</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                            <tr id="baris_">

                                                                                <td align="right" colspan="7">Total</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                        

                                                                    </tbody>                                         

                                                                </table>

                                                            </div>

                                                            <div class="form-group">

                                                                <button id_edit="76" type="button" class="btn btn-danger edit_pesanan">Edit</button>
                                                            </div>

                                                        </div>

                                                        

                                                        
                                                        <div id="edit_no_resi_76" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">                                                                

                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                                                                                         

                                                                    <tr>

                                                                        <td width="25%"><label for="no_resi" style="padding: 7px 0 0 7px;">Status Pesanan:</label></td>

                                                                        <td colspan="2" width="70%">

                                                                            <select class="form-control" name="status_pesanan_76">

                                                                                <option value="2"  selected="selected">Pesanan Dalam Proses.</option>

                                                                                <option value="6" >Pesanan Sudah Dikirim.</option>

                                                                                <option value="5" >Pesanan Sudah Diterima.</option>

                                                                            </select>

                                                                        </td>                                                                        

                                                                    </tr>

                                                                    <tr>

                                                                        <td width="25%"><label for="no_resi" style="padding: 7px 0 0 7px;">Resi Pengiriman:</label></td>

                                                                        <td width="60%"><input type="text" value="" class="form-control" name="no_resi_76" placeholder="" /></td>

                                                                        <td width="15%">

                                                                            <div id="i_loading_noresi_76" class="G-btn-animation" style="display: none;"><img src="http://laundry.id/templates/back-end/penguin/assets/img/loading.gif" /></div>

                                                                            <button id="btn_simpan_noresi_76" id_noresi="76" type="button" class="btn btn-danger simpan_noresi">Update Status</button>

                                                                        </td>

                                                                    </tr>

                                                                </table>

                                                            </div>

                                                        </div>
                                                        
                                                        

                                                        <!-- div id="edit_finish_76" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                

                                                                <label for=""></label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                    

                                                                    <tr>

                                                                        <td width="25%"><label for="nama_penerima" style="padding: 7px 0 0 7px;">Penerima Paket:</label></td>

                                                                        <td width="60%"><input type="text" value="" class="form-control" name="nama_penerima_76" placeholder="" /></td>

                                                                        <td width="15%">

                                                                            <div id="i_loading_finish_76" class="G-btn-animation" style="display: none;"><img src="http://laundry.id/templates/back-end/penguin/assets/img/loading.gif" /></div>

                                                                            <button id="btn_simpan_finish_76" id_finish="76" type="button" class="btn btn-danger simpan_finish">Paket Sudah Diterima</button>

                                                                        </td>

                                                                    </tr>                                                                    

                                                                </table>

                                                            </div>

                                                        </div -->

                                                    </div></td></tr>

                                                </table>

                                            </td>

                                        </tr>

                                          

                                                                        

                                        <tr id="baris_75">

                                            <!-- td align="center"><input type="checkbox" id_select="75" name="select_75" class="select" /></td -->

                                            <td align="center">6</td>

                                            <td>

                                                <table width="100%">

                                                    <!-- tr><td><b>ID</b> </td><td><b>:</b> 75</td></tr -->

                                                    <tr><td width="25%"><b>Kode Pemesanan</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> <a href="http://laundry.id/adminweb/pemesanan/list.php?_&query=000075	" ><span style="font-weight: bold;">#000075</span></a></td></tr>

                                                    <tr><td><b>Nama Pengguna</b> </td><td><b>:</b>   ()</td></tr>

                                                    <tr><td><b>Tanggal Pesan</b></td><td><b>:</b> 29-03-2018 16:35:45</td></tr>

                                                    <tr><td><b>Pengiriman Kepada</b> </td><td><b>:</b> hajs</td></tr>

                                                    <tr><td><b>Alamat</b></td><td><b>:</b> ajd</td></tr>

                                                    <tr><td><b>No. HP</b></td><td><b>:</b> 081314418004</td></tr>

                                                    <tr><td><b>Total Belanja</b> </td><td><b>:</b> Rp. 3,169,800</td></tr>                                                    

                                                    <tr><td><b>Kurir Pengiriman</b> </td><td><b>:</b> JNE</td></tr>                                                    

                                                    <tr><td><b>No. Resi</b> </td><td><b>:</b> <span id="text_no_resi_75"></span></td></tr>                                                    

                                                    <tr><td><b>Jenis Pemesanan</b> </td><td><b>:</b> <span style="color: red; font-weight: bold;">DROPSHIP</span></td></tr>

                                                    <tr><td><b>Nama Dropship</b> </td><td><b>:</b> <span id="text_no_resi_75"></span></td></tr>               
                                                    <tr><td><b>No.Telpon Dropship</b> </td><td><b>:</b> <span id="text_no_resi_75"></span></td></tr>                                       
                                                    <tr><td><b>Cara Pembayaran</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;">Transfer Bank</span></td></tr>

                                                    <tr><td><b>Status Pembayaran</b> </td><td><b>:</b> <span id='text_pembayaran_75' style="color: green; font-weight: bold;">LUNAS</span></td></tr>

                                                    <tr><td><b>Status Pemesanan</b> </td><td><b>:</b> <span id='text_status_75' style="font-weight: bold; color: green;">Pesanan dalam proses.</span></td></tr>

                                                    <tr><td colspan="2">

                                                    <div id="message_wrapper_75" style="margin-top: 10px; margin-bottom: 10px;">

                                                        <div id="alert_error_75" class="form-group" style="display: none;">

                                                            <div class="alert alert-danger">&nbsp;</div>

                                                        </div>

                                                        <div id="alert_success_75" class="form-group" style="display: none;">                         

                                                            <div class="alert alert-info">&nbsp;</div>

                                                        </div>                                                                

                                                    </div>

                                                    <div style="margin-top: 10px; margin-bottom: 10px;">

                                                        
                                                            <div id="i_loading_batal_75" class="G-btn-animation" style="display: none;"><img src="http://laundry.id/templates/back-end/penguin/assets/img/loading.gif" /></div>

                                                            <button id="btn_batal_75" id_batal="75" type="button" class="btn btn-danger batal_pesan">Batalkan Pesanan</button>

                                                        
                                                        <button id="btn_histori_75" id_histori="75" type="button" class="btn btn-primary histori">Lihat Status</button>

                                                        <button id="btn_detail_75" id_detail="75" type="button" class="btn btn-warning detail">Tampilkan Detail</button>

                                                        <button id="btn_cetak_75" notrx="000075" type="button" class="btn btn-warning cetak">Cetak</button>
                                                        
                                                        <button onClick="$('#form-alamat-75').toggleClass('hide');" type="button" class="btn btn-succcess">Alamat Pengiriman</button>

                                                        <button id="btn_noresi_75" id_noresi="75" is_open="false" type="button" class="btn btn-info noresi">Proses Pengiriman</button>
                                                        <!-- button id="btn_finish_75" id_finish="75" is_open="false" type="button" class="btn btn-danger finish">Tutup Transaksi</button -->

                                                        

                                                        <div id="detail_histori_75" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                <label for="histori_pemesanan">Histori Pemesanan:</label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">

                                                                    <thead>

                                                                        <tr>

                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>

                                                                            <th width="20%"><div style="text-align: center;">Tanggal Jam</div></th>                                        

                                                                            <th width="70%"><div style="text-align: center;">Penjelasan</div></th>

                                                                        </tr>

                                                                    </thead>

                                                                    <tbody>

                                                                        
                                                                        
                                                                            <tr id="baris_75">

                                                                                <td align="center">1</td>

                                                                                <td align="center">29-03-2018</td>

                                                                                <td align="left">Customer melakukan checkout.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_75">

                                                                                <td align="center">2</td>

                                                                                <td align="center">29-03-2018</td>

                                                                                <td align="left">Customer melakukan konfirmasi pembayaran sebesar Rp 3,169,800.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_75">

                                                                                <td align="center">3</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menerima pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_75">

                                                                                <td align="center">4</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_75">

                                                                                <td align="center">5</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menerima pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_75">

                                                                                <td align="center">6</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_75">

                                                                                <td align="center">7</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menerima pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                    </tbody>                                         

                                                                </table>

                                                            </div>

                                                        </div>

                                                        <div class="table-responsive hide" id="form-alamat-75" style="margin-top: 10px;">

                                                            <div class="form-group">
                                                                <label for="histori_pemesanan">Alamat Pengiriman:</label>
																<div class="table table-xlg" id="alamat-75"  style="width:100%">
																		<p style="font-size: 20px;">Penerima : <hr></p>
																		<p style="font-size: 20px;">Alamat : ajd<hr></p>
																		<p style="font-size: 20px;">Telpon : 081314418004<hr></p>
																		<p style="font-size: 20px;">Pengirim : <hr></p>
																		<p style="font-size: 20px; text-transform: uppercase;">Kurir Pengiriman : JNE</p>
																		<p style="font-size: 20px; text-transform: uppercase;">Kode Pemesanan : #000075</p>
                                                                </div>
																<button onClick="printalamat('alamat-75')" class="btn btn-success" type="button">Print Alamat Pengirman</button>
    															<button class="btn" data-clipboard-action="copy" data-clipboard-target="#alamat-75">Copy Alamat Pengirman</button>						
                                                            </div>

                                                        </div>
                                                        

                                                        <div id="detail_detail_75" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                <label for="histori_pemesanan">Detail Barang:</label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">

                                                                    <thead>

                                                                        <tr>

                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Gambar</div></th>

                                                                            <th width="40%"><div style="text-align: center;">Nama Barang</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Qty</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Harga</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Diskon</div></th>
                                                                        
                                                                            <th width="15%"><div style="text-align: center;">Subtotal</div></th>

                                                                            <th width="15%"><div style="text-align: center;">Grandtotal</div></th>

                                                                        </tr>

                                                                    </thead>

                                                                    <tbody>

                                                                                                                                                
                                                                        
                                                                            <tr id="baris_">

                                                                                <td align="center">1</td>

                                                                                <td align="center"><img src="http://laundry.id/uploads/produk/GUESS-WANITA-MURAH-1.jpg" width="48px" /></td>

                                                                                <td align="left">Fossil Architec Automatic ME3057 Silver Jam Tangan Wanita  (JAM-332)<br />Ukuran: STANDART<br />Warna SILVER</td>

                                                                                <td align="center">1</td>

                                                                                <td align="center"> Rp. 0</td>
                                                                                <td align="center"> Rp. 0</td>
                                                                                <td align="right">Rp. 3,024,900</td>

                                                                                <td align="right">Rp. 3,024,900</td>

                                                                            </tr>

                                                                              
                                                                              

                                                                        
                                                                            <tr id="baris_">

                                                                                <td align="center">2</td>

                                                                                <td align="center"><img src="http://laundry.id/uploads/produk/JAM-TANGAN-FOSSIL-88932-COUPLE.jpg" width="48px" /></td>

                                                                                <td align="left">piyama anak elmo size M (k4934)<br />Warna 0</td>

                                                                                <td align="center">1</td>

                                                                                <td align="center"> Rp. 0</td>
                                                                                <td align="center"> Rp. 0</td>
                                                                                <td align="right">Rp. 39,900</td>

                                                                                <td align="right">Rp. 39,900</td>

                                                                            </tr>

                                                                              
                                                                              

                                                                                                                                                    <tr id="baris_">

                                                                                <td align="right" colspan="7">Voucher</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                            <tr id="baris_">

                                                                                <td align="right" colspan="7">Ongkir</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                            <tr id="baris_">

                                                                                <td align="right" colspan="7">Total</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                        

                                                                    </tbody>                                         

                                                                </table>

                                                            </div>

                                                            <div class="form-group">

                                                                <button id_edit="75" type="button" class="btn btn-danger edit_pesanan">Edit</button>
                                                            </div>

                                                        </div>

                                                        

                                                        
                                                        <div id="edit_no_resi_75" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">                                                                

                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                                                                                         

                                                                    <tr>

                                                                        <td width="25%"><label for="no_resi" style="padding: 7px 0 0 7px;">Status Pesanan:</label></td>

                                                                        <td colspan="2" width="70%">

                                                                            <select class="form-control" name="status_pesanan_75">

                                                                                <option value="2"  selected="selected">Pesanan Dalam Proses.</option>

                                                                                <option value="6" >Pesanan Sudah Dikirim.</option>

                                                                                <option value="5" >Pesanan Sudah Diterima.</option>

                                                                            </select>

                                                                        </td>                                                                        

                                                                    </tr>

                                                                    <tr>

                                                                        <td width="25%"><label for="no_resi" style="padding: 7px 0 0 7px;">Resi Pengiriman:</label></td>

                                                                        <td width="60%"><input type="text" value="" class="form-control" name="no_resi_75" placeholder="" /></td>

                                                                        <td width="15%">

                                                                            <div id="i_loading_noresi_75" class="G-btn-animation" style="display: none;"><img src="http://laundry.id/templates/back-end/penguin/assets/img/loading.gif" /></div>

                                                                            <button id="btn_simpan_noresi_75" id_noresi="75" type="button" class="btn btn-danger simpan_noresi">Update Status</button>

                                                                        </td>

                                                                    </tr>

                                                                </table>

                                                            </div>

                                                        </div>
                                                        
                                                        

                                                        <!-- div id="edit_finish_75" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                

                                                                <label for=""></label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                    

                                                                    <tr>

                                                                        <td width="25%"><label for="nama_penerima" style="padding: 7px 0 0 7px;">Penerima Paket:</label></td>

                                                                        <td width="60%"><input type="text" value="" class="form-control" name="nama_penerima_75" placeholder="" /></td>

                                                                        <td width="15%">

                                                                            <div id="i_loading_finish_75" class="G-btn-animation" style="display: none;"><img src="http://laundry.id/templates/back-end/penguin/assets/img/loading.gif" /></div>

                                                                            <button id="btn_simpan_finish_75" id_finish="75" type="button" class="btn btn-danger simpan_finish">Paket Sudah Diterima</button>

                                                                        </td>

                                                                    </tr>                                                                    

                                                                </table>

                                                            </div>

                                                        </div -->

                                                    </div></td></tr>

                                                </table>

                                            </td>

                                        </tr>

                                          

                                                                        

                                        <tr id="baris_74">

                                            <!-- td align="center"><input type="checkbox" id_select="74" name="select_74" class="select" /></td -->

                                            <td align="center">7</td>

                                            <td>

                                                <table width="100%">

                                                    <!-- tr><td><b>ID</b> </td><td><b>:</b> 74</td></tr -->

                                                    <tr><td width="25%"><b>Kode Pemesanan</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> <a href="http://laundry.id/adminweb/pemesanan/list.php?_&query=000074	" ><span style="font-weight: bold;">#000074</span></a></td></tr>

                                                    <tr><td><b>Nama Pengguna</b> </td><td><b>:</b>   ()</td></tr>

                                                    <tr><td><b>Tanggal Pesan</b></td><td><b>:</b> 27-03-2018 04:35:36</td></tr>

                                                    <tr><td><b>Pengiriman Kepada</b> </td><td><b>:</b> yyyg</td></tr>

                                                    <tr><td><b>Alamat</b></td><td><b>:</b> hhhhh</td></tr>

                                                    <tr><td><b>No. HP</b></td><td><b>:</b> 087885187771</td></tr>

                                                    <tr><td><b>Total Belanja</b> </td><td><b>:</b> Rp. 138,000</td></tr>                                                    

                                                    <tr><td><b>Kurir Pengiriman</b> </td><td><b>:</b> JNE</td></tr>                                                    

                                                    <tr><td><b>No. Resi</b> </td><td><b>:</b> <span id="text_no_resi_74"></span></td></tr>                                                    

                                                    <tr><td><b>Jenis Pemesanan</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;">BUKAN DROPSHIP</span></td></tr>

                                                    <tr><td><b>Nama Dropship</b> </td><td><b>:</b> <span id="text_no_resi_74"></span></td></tr>               
                                                    <tr><td><b>No.Telpon Dropship</b> </td><td><b>:</b> <span id="text_no_resi_74"></span></td></tr>                                       
                                                    <tr><td><b>Cara Pembayaran</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;">Transfer Bank</span></td></tr>

                                                    <tr><td><b>Status Pembayaran</b> </td><td><b>:</b> <span id='text_pembayaran_74' style="color: red; font-weight: bold;">BELUM LUNAS</span></td></tr>

                                                    <tr><td><b>Status Pemesanan</b> </td><td><b>:</b> <span id='text_status_74' style="font-weight: bold; color: orange;">Menunggu pembayaran Customer.</span></td></tr>

                                                    <tr><td colspan="2">

                                                    <div id="message_wrapper_74" style="margin-top: 10px; margin-bottom: 10px;">

                                                        <div id="alert_error_74" class="form-group" style="display: none;">

                                                            <div class="alert alert-danger">&nbsp;</div>

                                                        </div>

                                                        <div id="alert_success_74" class="form-group" style="display: none;">                         

                                                            <div class="alert alert-info">&nbsp;</div>

                                                        </div>                                                                

                                                    </div>

                                                    <div style="margin-top: 10px; margin-bottom: 10px;">

                                                        
                                                            <div id="i_loading_batal_74" class="G-btn-animation" style="display: none;"><img src="http://laundry.id/templates/back-end/penguin/assets/img/loading.gif" /></div>

                                                            <button id="btn_batal_74" id_batal="74" type="button" class="btn btn-danger batal_pesan">Batalkan Pesanan</button>

                                                        
                                                        <button id="btn_histori_74" id_histori="74" type="button" class="btn btn-primary histori">Lihat Status</button>

                                                        <button id="btn_detail_74" id_detail="74" type="button" class="btn btn-warning detail">Tampilkan Detail</button>

                                                        <button id="btn_cetak_74" notrx="000074" type="button" class="btn btn-warning cetak">Cetak</button>
                                                        
                                                        <button onClick="$('#form-alamat-74').toggleClass('hide');" type="button" class="btn btn-succcess">Alamat Pengiriman</button>

                                                        
                                                        <!-- button id="btn_finish_74" id_finish="74" is_open="false" type="button" class="btn btn-danger finish">Tutup Transaksi</button -->

                                                        

                                                        <div id="detail_histori_74" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                <label for="histori_pemesanan">Histori Pemesanan:</label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">

                                                                    <thead>

                                                                        <tr>

                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>

                                                                            <th width="20%"><div style="text-align: center;">Tanggal Jam</div></th>                                        

                                                                            <th width="70%"><div style="text-align: center;">Penjelasan</div></th>

                                                                        </tr>

                                                                    </thead>

                                                                    <tbody>

                                                                        
                                                                        
                                                                            <tr id="baris_74">

                                                                                <td align="center">1</td>

                                                                                <td align="center">27-03-2018</td>

                                                                                <td align="left">Customer melakukan checkout.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                    </tbody>                                         

                                                                </table>

                                                            </div>

                                                        </div>

                                                        <div class="table-responsive hide" id="form-alamat-74" style="margin-top: 10px;">

                                                            <div class="form-group">
                                                                <label for="histori_pemesanan">Alamat Pengiriman:</label>
																<div class="table table-xlg" id="alamat-74"  style="width:100%">
																		<p style="font-size: 20px;">Penerima : <hr></p>
																		<p style="font-size: 20px;">Alamat : hhhhh<hr></p>
																		<p style="font-size: 20px;">Telpon : 087885187771<hr></p>
																		<p style="font-size: 20px;">Pengirim : <hr></p>
																		<p style="font-size: 20px; text-transform: uppercase;">Kurir Pengiriman : JNE</p>
																		<p style="font-size: 20px; text-transform: uppercase;">Kode Pemesanan : #000074</p>
                                                                </div>
																<button onClick="printalamat('alamat-74')" class="btn btn-success" type="button">Print Alamat Pengirman</button>
    															<button class="btn" data-clipboard-action="copy" data-clipboard-target="#alamat-74">Copy Alamat Pengirman</button>						
                                                            </div>

                                                        </div>
                                                        

                                                        <div id="detail_detail_74" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                <label for="histori_pemesanan">Detail Barang:</label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">

                                                                    <thead>

                                                                        <tr>

                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Gambar</div></th>

                                                                            <th width="40%"><div style="text-align: center;">Nama Barang</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Qty</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Harga</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Diskon</div></th>
                                                                        
                                                                            <th width="15%"><div style="text-align: center;">Subtotal</div></th>

                                                                            <th width="15%"><div style="text-align: center;">Grandtotal</div></th>

                                                                        </tr>

                                                                    </thead>

                                                                    <tbody>

                                                                                                                                                
                                                                        
                                                                            <tr id="baris_">

                                                                                <td align="center">1</td>

                                                                                <td align="center"><img src="http://laundry.id/uploads/produk/Christian-Dior-Lady-8907-Semi-Premium-KODE-CD058-Pink.jpg" width="48px" /></td>

                                                                                <td align="left">tas mj (1919)<br />Ukuran: 20X20X20<br />Warna TEST</td>

                                                                                <td align="center">1</td>

                                                                                <td align="center"> Rp. 0</td>
                                                                                <td align="center"> Rp. 0</td>
                                                                                <td align="right">Rp. 120,000</td>

                                                                                <td align="right">Rp. 120,000</td>

                                                                            </tr>

                                                                              
                                                                              

                                                                                                                                                    <tr id="baris_">

                                                                                <td align="right" colspan="7">Voucher</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                            <tr id="baris_">

                                                                                <td align="right" colspan="7">Ongkir</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                            <tr id="baris_">

                                                                                <td align="right" colspan="7">Total</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                        

                                                                    </tbody>                                         

                                                                </table>

                                                            </div>

                                                            <div class="form-group">

                                                                <button id_edit="74" type="button" class="btn btn-danger edit_pesanan">Edit</button>
                                                            </div>

                                                        </div>

                                                        

                                                        
                                                        
                                                        
                                                        

                                                        <!-- div id="edit_finish_74" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                

                                                                <label for=""></label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                    

                                                                    <tr>

                                                                        <td width="25%"><label for="nama_penerima" style="padding: 7px 0 0 7px;">Penerima Paket:</label></td>

                                                                        <td width="60%"><input type="text" value="" class="form-control" name="nama_penerima_74" placeholder="" /></td>

                                                                        <td width="15%">

                                                                            <div id="i_loading_finish_74" class="G-btn-animation" style="display: none;"><img src="http://laundry.id/templates/back-end/penguin/assets/img/loading.gif" /></div>

                                                                            <button id="btn_simpan_finish_74" id_finish="74" type="button" class="btn btn-danger simpan_finish">Paket Sudah Diterima</button>

                                                                        </td>

                                                                    </tr>                                                                    

                                                                </table>

                                                            </div>

                                                        </div -->

                                                    </div></td></tr>

                                                </table>

                                            </td>

                                        </tr>

                                          

                                                                        

                                        <tr id="baris_73">

                                            <!-- td align="center"><input type="checkbox" id_select="73" name="select_73" class="select" /></td -->

                                            <td align="center">8</td>

                                            <td>

                                                <table width="100%">

                                                    <!-- tr><td><b>ID</b> </td><td><b>:</b> 73</td></tr -->

                                                    <tr><td width="25%"><b>Kode Pemesanan</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> <a href="http://laundry.id/adminweb/pemesanan/list.php?_&query=000073	" ><span style="font-weight: bold;">#000073</span></a></td></tr>

                                                    <tr><td><b>Nama Pengguna</b> </td><td><b>:</b>   ()</td></tr>

                                                    <tr><td><b>Tanggal Pesan</b></td><td><b>:</b> 12-03-2018 20:42:40</td></tr>

                                                    <tr><td><b>Pengiriman Kepada</b> </td><td><b>:</b> Siti nurjanah</td></tr>

                                                    <tr><td><b>Alamat</b></td><td><b>:</b> jl. Gedebage Selatan</td></tr>

                                                    <tr><td><b>No. HP</b></td><td><b>:</b> 089646424255</td></tr>

                                                    <tr><td><b>Total Belanja</b> </td><td><b>:</b> Rp. 202,000</td></tr>                                                    

                                                    <tr><td><b>Kurir Pengiriman</b> </td><td><b>:</b> JNE</td></tr>                                                    

                                                    <tr><td><b>No. Resi</b> </td><td><b>:</b> <span id="text_no_resi_73"></span></td></tr>                                                    

                                                    <tr><td><b>Jenis Pemesanan</b> </td><td><b>:</b> <span style="color: red; font-weight: bold;">DROPSHIP</span></td></tr>

                                                    <tr><td><b>Nama Dropship</b> </td><td><b>:</b> <span id="text_no_resi_73"></span></td></tr>               
                                                    <tr><td><b>No.Telpon Dropship</b> </td><td><b>:</b> <span id="text_no_resi_73"></span></td></tr>                                       
                                                    <tr><td><b>Cara Pembayaran</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;">Transfer Bank</span></td></tr>

                                                    <tr><td><b>Status Pembayaran</b> </td><td><b>:</b> <span id='text_pembayaran_73' style="color: red; font-weight: bold;">BELUM LUNAS</span></td></tr>

                                                    <tr><td><b>Status Pemesanan</b> </td><td><b>:</b> <span id='text_status_73' style="font-weight: bold; color: orange;">Menunggu pembayaran Customer.</span></td></tr>

                                                    <tr><td colspan="2">

                                                    <div id="message_wrapper_73" style="margin-top: 10px; margin-bottom: 10px;">

                                                        <div id="alert_error_73" class="form-group" style="display: none;">

                                                            <div class="alert alert-danger">&nbsp;</div>

                                                        </div>

                                                        <div id="alert_success_73" class="form-group" style="display: none;">                         

                                                            <div class="alert alert-info">&nbsp;</div>

                                                        </div>                                                                

                                                    </div>

                                                    <div style="margin-top: 10px; margin-bottom: 10px;">

                                                        
                                                            <div id="i_loading_batal_73" class="G-btn-animation" style="display: none;"><img src="http://laundry.id/templates/back-end/penguin/assets/img/loading.gif" /></div>

                                                            <button id="btn_batal_73" id_batal="73" type="button" class="btn btn-danger batal_pesan">Batalkan Pesanan</button>

                                                        
                                                        <button id="btn_histori_73" id_histori="73" type="button" class="btn btn-primary histori">Lihat Status</button>

                                                        <button id="btn_detail_73" id_detail="73" type="button" class="btn btn-warning detail">Tampilkan Detail</button>

                                                        <button id="btn_cetak_73" notrx="000073" type="button" class="btn btn-warning cetak">Cetak</button>
                                                        
                                                        <button onClick="$('#form-alamat-73').toggleClass('hide');" type="button" class="btn btn-succcess">Alamat Pengiriman</button>

                                                        
                                                        <!-- button id="btn_finish_73" id_finish="73" is_open="false" type="button" class="btn btn-danger finish">Tutup Transaksi</button -->

                                                        

                                                        <div id="detail_histori_73" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                <label for="histori_pemesanan">Histori Pemesanan:</label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">

                                                                    <thead>

                                                                        <tr>

                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>

                                                                            <th width="20%"><div style="text-align: center;">Tanggal Jam</div></th>                                        

                                                                            <th width="70%"><div style="text-align: center;">Penjelasan</div></th>

                                                                        </tr>

                                                                    </thead>

                                                                    <tbody>

                                                                        
                                                                        
                                                                            <tr id="baris_73">

                                                                                <td align="center">1</td>

                                                                                <td align="center">12-03-2018</td>

                                                                                <td align="left">Customer melakukan checkout.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                    </tbody>                                         

                                                                </table>

                                                            </div>

                                                        </div>

                                                        <div class="table-responsive hide" id="form-alamat-73" style="margin-top: 10px;">

                                                            <div class="form-group">
                                                                <label for="histori_pemesanan">Alamat Pengiriman:</label>
																<div class="table table-xlg" id="alamat-73"  style="width:100%">
																		<p style="font-size: 20px;">Penerima : <hr></p>
																		<p style="font-size: 20px;">Alamat : jl. Gedebage Selatan<hr></p>
																		<p style="font-size: 20px;">Telpon : 089646424255<hr></p>
																		<p style="font-size: 20px;">Pengirim : <hr></p>
																		<p style="font-size: 20px; text-transform: uppercase;">Kurir Pengiriman : JNE</p>
																		<p style="font-size: 20px; text-transform: uppercase;">Kode Pemesanan : #000073</p>
                                                                </div>
																<button onClick="printalamat('alamat-73')" class="btn btn-success" type="button">Print Alamat Pengirman</button>
    															<button class="btn" data-clipboard-action="copy" data-clipboard-target="#alamat-73">Copy Alamat Pengirman</button>						
                                                            </div>

                                                        </div>
                                                        

                                                        <div id="detail_detail_73" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                <label for="histori_pemesanan">Detail Barang:</label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">

                                                                    <thead>

                                                                        <tr>

                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Gambar</div></th>

                                                                            <th width="40%"><div style="text-align: center;">Nama Barang</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Qty</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Harga</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Diskon</div></th>
                                                                        
                                                                            <th width="15%"><div style="text-align: center;">Subtotal</div></th>

                                                                            <th width="15%"><div style="text-align: center;">Grandtotal</div></th>

                                                                        </tr>

                                                                    </thead>

                                                                    <tbody>

                                                                                                                                                
                                                                        
                                                                            <tr id="baris_">

                                                                                <td align="center">1</td>

                                                                                <td align="center"><img src="http://laundry.id/uploads/produk/raindoz_raindoz-jaket-parka-wanita-hinata-rse-060_full02.jpg" width="48px" /></td>

                                                                                <td align="left"> Raindoz Hinata RSE 060 Jaket Parka Wanita (JAKET)<br />Ukuran: L<br />Warna MAROON</td>

                                                                                <td align="center">1</td>

                                                                                <td align="center"> Rp. 0</td>
                                                                                <td align="center"> Rp. 0</td>
                                                                                <td align="right">Rp. 180,000</td>

                                                                                <td align="right">Rp. 180,000</td>

                                                                            </tr>

                                                                              
                                                                              

                                                                                                                                                    <tr id="baris_">

                                                                                <td align="right" colspan="7">Voucher</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                            <tr id="baris_">

                                                                                <td align="right" colspan="7">Ongkir</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                            <tr id="baris_">

                                                                                <td align="right" colspan="7">Total</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                        

                                                                    </tbody>                                         

                                                                </table>

                                                            </div>

                                                            <div class="form-group">

                                                                <button id_edit="73" type="button" class="btn btn-danger edit_pesanan">Edit</button>
                                                            </div>

                                                        </div>

                                                        

                                                        
                                                        
                                                        
                                                        

                                                        <!-- div id="edit_finish_73" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                

                                                                <label for=""></label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                    

                                                                    <tr>

                                                                        <td width="25%"><label for="nama_penerima" style="padding: 7px 0 0 7px;">Penerima Paket:</label></td>

                                                                        <td width="60%"><input type="text" value="" class="form-control" name="nama_penerima_73" placeholder="" /></td>

                                                                        <td width="15%">

                                                                            <div id="i_loading_finish_73" class="G-btn-animation" style="display: none;"><img src="http://laundry.id/templates/back-end/penguin/assets/img/loading.gif" /></div>

                                                                            <button id="btn_simpan_finish_73" id_finish="73" type="button" class="btn btn-danger simpan_finish">Paket Sudah Diterima</button>

                                                                        </td>

                                                                    </tr>                                                                    

                                                                </table>

                                                            </div>

                                                        </div -->

                                                    </div></td></tr>

                                                </table>

                                            </td>

                                        </tr>

                                          

                                                                        

                                        <tr id="baris_72">

                                            <!-- td align="center"><input type="checkbox" id_select="72" name="select_72" class="select" /></td -->

                                            <td align="center">9</td>

                                            <td>

                                                <table width="100%">

                                                    <!-- tr><td><b>ID</b> </td><td><b>:</b> 72</td></tr -->

                                                    <tr><td width="25%"><b>Kode Pemesanan</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> <a href="http://laundry.id/adminweb/pemesanan/list.php?_&query=000072	" ><span style="font-weight: bold;">#000072</span></a></td></tr>

                                                    <tr><td><b>Nama Pengguna</b> </td><td><b>:</b>   ()</td></tr>

                                                    <tr><td><b>Tanggal Pesan</b></td><td><b>:</b> 08-03-2018 02:46:26</td></tr>

                                                    <tr><td><b>Pengiriman Kepada</b> </td><td><b>:</b> yahya</td></tr>

                                                    <tr><td><b>Alamat</b></td><td><b>:</b> jl. melati 3</td></tr>

                                                    <tr><td><b>No. HP</b></td><td><b>:</b> 08111980</td></tr>

                                                    <tr><td><b>Total Belanja</b> </td><td><b>:</b> Rp. 313,000</td></tr>                                                    

                                                    <tr><td><b>Kurir Pengiriman</b> </td><td><b>:</b> JNE</td></tr>                                                    

                                                    <tr><td><b>No. Resi</b> </td><td><b>:</b> <span id="text_no_resi_72"></span></td></tr>                                                    

                                                    <tr><td><b>Jenis Pemesanan</b> </td><td><b>:</b> <span style="color: red; font-weight: bold;">DROPSHIP</span></td></tr>

                                                    <tr><td><b>Nama Dropship</b> </td><td><b>:</b> <span id="text_no_resi_72"></span></td></tr>               
                                                    <tr><td><b>No.Telpon Dropship</b> </td><td><b>:</b> <span id="text_no_resi_72"></span></td></tr>                                       
                                                    <tr><td><b>Cara Pembayaran</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;">Transfer Bank</span></td></tr>

                                                    <tr><td><b>Status Pembayaran</b> </td><td><b>:</b> <span id='text_pembayaran_72' style="color: green; font-weight: bold;">LUNAS</span></td></tr>

                                                    <tr><td><b>Status Pemesanan</b> </td><td><b>:</b> <span id='text_status_72' style="font-weight: bold; color: green;">Pesanan dalam proses.</span></td></tr>

                                                    <tr><td colspan="2">

                                                    <div id="message_wrapper_72" style="margin-top: 10px; margin-bottom: 10px;">

                                                        <div id="alert_error_72" class="form-group" style="display: none;">

                                                            <div class="alert alert-danger">&nbsp;</div>

                                                        </div>

                                                        <div id="alert_success_72" class="form-group" style="display: none;">                         

                                                            <div class="alert alert-info">&nbsp;</div>

                                                        </div>                                                                

                                                    </div>

                                                    <div style="margin-top: 10px; margin-bottom: 10px;">

                                                        
                                                            <div id="i_loading_batal_72" class="G-btn-animation" style="display: none;"><img src="http://laundry.id/templates/back-end/penguin/assets/img/loading.gif" /></div>

                                                            <button id="btn_batal_72" id_batal="72" type="button" class="btn btn-danger batal_pesan">Batalkan Pesanan</button>

                                                        
                                                        <button id="btn_histori_72" id_histori="72" type="button" class="btn btn-primary histori">Lihat Status</button>

                                                        <button id="btn_detail_72" id_detail="72" type="button" class="btn btn-warning detail">Tampilkan Detail</button>

                                                        <button id="btn_cetak_72" notrx="000072" type="button" class="btn btn-warning cetak">Cetak</button>
                                                        
                                                        <button onClick="$('#form-alamat-72').toggleClass('hide');" type="button" class="btn btn-succcess">Alamat Pengiriman</button>

                                                        <button id="btn_noresi_72" id_noresi="72" is_open="false" type="button" class="btn btn-info noresi">Proses Pengiriman</button>
                                                        <!-- button id="btn_finish_72" id_finish="72" is_open="false" type="button" class="btn btn-danger finish">Tutup Transaksi</button -->

                                                        

                                                        <div id="detail_histori_72" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                <label for="histori_pemesanan">Histori Pemesanan:</label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">

                                                                    <thead>

                                                                        <tr>

                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>

                                                                            <th width="20%"><div style="text-align: center;">Tanggal Jam</div></th>                                        

                                                                            <th width="70%"><div style="text-align: center;">Penjelasan</div></th>

                                                                        </tr>

                                                                    </thead>

                                                                    <tbody>

                                                                        
                                                                        
                                                                            <tr id="baris_72">

                                                                                <td align="center">1</td>

                                                                                <td align="center">08-03-2018</td>

                                                                                <td align="left">Customer melakukan checkout.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_72">

                                                                                <td align="center">2</td>

                                                                                <td align="center">08-03-2018</td>

                                                                                <td align="left">Customer melakukan konfirmasi pembayaran sebesar Rp 313,000.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_72">

                                                                                <td align="center">3</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_72">

                                                                                <td align="center">4</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menerima pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                    </tbody>                                         

                                                                </table>

                                                            </div>

                                                        </div>

                                                        <div class="table-responsive hide" id="form-alamat-72" style="margin-top: 10px;">

                                                            <div class="form-group">
                                                                <label for="histori_pemesanan">Alamat Pengiriman:</label>
																<div class="table table-xlg" id="alamat-72"  style="width:100%">
																		<p style="font-size: 20px;">Penerima : <hr></p>
																		<p style="font-size: 20px;">Alamat : jl. melati 3<hr></p>
																		<p style="font-size: 20px;">Telpon : 08111980<hr></p>
																		<p style="font-size: 20px;">Pengirim : <hr></p>
																		<p style="font-size: 20px; text-transform: uppercase;">Kurir Pengiriman : JNE</p>
																		<p style="font-size: 20px; text-transform: uppercase;">Kode Pemesanan : #000072</p>
                                                                </div>
																<button onClick="printalamat('alamat-72')" class="btn btn-success" type="button">Print Alamat Pengirman</button>
    															<button class="btn" data-clipboard-action="copy" data-clipboard-target="#alamat-72">Copy Alamat Pengirman</button>						
                                                            </div>

                                                        </div>
                                                        

                                                        <div id="detail_detail_72" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                <label for="histori_pemesanan">Detail Barang:</label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">

                                                                    <thead>

                                                                        <tr>

                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Gambar</div></th>

                                                                            <th width="40%"><div style="text-align: center;">Nama Barang</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Qty</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Harga</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Diskon</div></th>
                                                                        
                                                                            <th width="15%"><div style="text-align: center;">Subtotal</div></th>

                                                                            <th width="15%"><div style="text-align: center;">Grandtotal</div></th>

                                                                        </tr>

                                                                    </thead>

                                                                    <tbody>

                                                                                                                                                
                                                                        
                                                                            <tr id="baris_">

                                                                                <td align="center">1</td>

                                                                                <td align="center"><img src="http://laundry.id/uploads/produk/raindoz_raindoz-jaket-parka-wanita-hinata-rse-060_full02_1.jpg" width="48px" /></td>

                                                                                <td align="left">HRCN JAKET SWEATER HOODIES WANITA OUTWEAR WANITA CROWN (IKH2076QI)<br />Ukuran: L</td>

                                                                                <td align="center">1</td>

                                                                                <td align="center"> Rp. 0</td>
                                                                                <td align="center"> Rp. 0</td>
                                                                                <td align="right">Rp. 289,000</td>

                                                                                <td align="right">Rp. 289,000</td>

                                                                            </tr>

                                                                              
                                                                              

                                                                                                                                                    <tr id="baris_">

                                                                                <td align="right" colspan="7">Voucher</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                            <tr id="baris_">

                                                                                <td align="right" colspan="7">Ongkir</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                            <tr id="baris_">

                                                                                <td align="right" colspan="7">Total</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                        

                                                                    </tbody>                                         

                                                                </table>

                                                            </div>

                                                            <div class="form-group">

                                                                <button id_edit="72" type="button" class="btn btn-danger edit_pesanan">Edit</button>
                                                            </div>

                                                        </div>

                                                        

                                                        
                                                        <div id="edit_no_resi_72" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">                                                                

                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                                                                                         

                                                                    <tr>

                                                                        <td width="25%"><label for="no_resi" style="padding: 7px 0 0 7px;">Status Pesanan:</label></td>

                                                                        <td colspan="2" width="70%">

                                                                            <select class="form-control" name="status_pesanan_72">

                                                                                <option value="2"  selected="selected">Pesanan Dalam Proses.</option>

                                                                                <option value="6" >Pesanan Sudah Dikirim.</option>

                                                                                <option value="5" >Pesanan Sudah Diterima.</option>

                                                                            </select>

                                                                        </td>                                                                        

                                                                    </tr>

                                                                    <tr>

                                                                        <td width="25%"><label for="no_resi" style="padding: 7px 0 0 7px;">Resi Pengiriman:</label></td>

                                                                        <td width="60%"><input type="text" value="" class="form-control" name="no_resi_72" placeholder="" /></td>

                                                                        <td width="15%">

                                                                            <div id="i_loading_noresi_72" class="G-btn-animation" style="display: none;"><img src="http://laundry.id/templates/back-end/penguin/assets/img/loading.gif" /></div>

                                                                            <button id="btn_simpan_noresi_72" id_noresi="72" type="button" class="btn btn-danger simpan_noresi">Update Status</button>

                                                                        </td>

                                                                    </tr>

                                                                </table>

                                                            </div>

                                                        </div>
                                                        
                                                        

                                                        <!-- div id="edit_finish_72" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                

                                                                <label for=""></label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                    

                                                                    <tr>

                                                                        <td width="25%"><label for="nama_penerima" style="padding: 7px 0 0 7px;">Penerima Paket:</label></td>

                                                                        <td width="60%"><input type="text" value="" class="form-control" name="nama_penerima_72" placeholder="" /></td>

                                                                        <td width="15%">

                                                                            <div id="i_loading_finish_72" class="G-btn-animation" style="display: none;"><img src="http://laundry.id/templates/back-end/penguin/assets/img/loading.gif" /></div>

                                                                            <button id="btn_simpan_finish_72" id_finish="72" type="button" class="btn btn-danger simpan_finish">Paket Sudah Diterima</button>

                                                                        </td>

                                                                    </tr>                                                                    

                                                                </table>

                                                            </div>

                                                        </div -->

                                                    </div></td></tr>

                                                </table>

                                            </td>

                                        </tr>

                                          

                                                                        

                                        <tr id="baris_71">

                                            <!-- td align="center"><input type="checkbox" id_select="71" name="select_71" class="select" /></td -->

                                            <td align="center">10</td>

                                            <td>

                                                <table width="100%">

                                                    <!-- tr><td><b>ID</b> </td><td><b>:</b> 71</td></tr -->

                                                    <tr><td width="25%"><b>Kode Pemesanan</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> <a href="http://laundry.id/adminweb/pemesanan/list.php?_&query=000071	" ><span style="font-weight: bold;">#000071</span></a></td></tr>

                                                    <tr><td><b>Nama Pengguna</b> </td><td><b>:</b>   ()</td></tr>

                                                    <tr><td><b>Tanggal Pesan</b></td><td><b>:</b> 07-03-2018 08:33:00</td></tr>

                                                    <tr><td><b>Pengiriman Kepada</b> </td><td><b>:</b> oke</td></tr>

                                                    <tr><td><b>Alamat</b></td><td><b>:</b> jl lusi 8</td></tr>

                                                    <tr><td><b>No. HP</b></td><td><b>:</b> 0812388999985</td></tr>

                                                    <tr><td><b>Total Belanja</b> </td><td><b>:</b> Rp. 80,500</td></tr>                                                    

                                                    <tr><td><b>Kurir Pengiriman</b> </td><td><b>:</b> JNE</td></tr>                                                    

                                                    <tr><td><b>No. Resi</b> </td><td><b>:</b> <span id="text_no_resi_71"></span></td></tr>                                                    

                                                    <tr><td><b>Jenis Pemesanan</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;">BUKAN DROPSHIP</span></td></tr>

                                                    <tr><td><b>Nama Dropship</b> </td><td><b>:</b> <span id="text_no_resi_71"></span></td></tr>               
                                                    <tr><td><b>No.Telpon Dropship</b> </td><td><b>:</b> <span id="text_no_resi_71"></span></td></tr>                                       
                                                    <tr><td><b>Cara Pembayaran</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;">Transfer Bank</span></td></tr>

                                                    <tr><td><b>Status Pembayaran</b> </td><td><b>:</b> <span id='text_pembayaran_71' style="color: red; font-weight: bold;">BELUM LUNAS</span></td></tr>

                                                    <tr><td><b>Status Pemesanan</b> </td><td><b>:</b> <span id='text_status_71' style="font-weight: bold; color: orange;">Menunggu pembayaran Customer.</span></td></tr>

                                                    <tr><td colspan="2">

                                                    <div id="message_wrapper_71" style="margin-top: 10px; margin-bottom: 10px;">

                                                        <div id="alert_error_71" class="form-group" style="display: none;">

                                                            <div class="alert alert-danger">&nbsp;</div>

                                                        </div>

                                                        <div id="alert_success_71" class="form-group" style="display: none;">                         

                                                            <div class="alert alert-info">&nbsp;</div>

                                                        </div>                                                                

                                                    </div>

                                                    <div style="margin-top: 10px; margin-bottom: 10px;">

                                                        
                                                            <div id="i_loading_batal_71" class="G-btn-animation" style="display: none;"><img src="http://laundry.id/templates/back-end/penguin/assets/img/loading.gif" /></div>

                                                            <button id="btn_batal_71" id_batal="71" type="button" class="btn btn-danger batal_pesan">Batalkan Pesanan</button>

                                                        
                                                        <button id="btn_histori_71" id_histori="71" type="button" class="btn btn-primary histori">Lihat Status</button>

                                                        <button id="btn_detail_71" id_detail="71" type="button" class="btn btn-warning detail">Tampilkan Detail</button>

                                                        <button id="btn_cetak_71" notrx="000071" type="button" class="btn btn-warning cetak">Cetak</button>
                                                        
                                                        <button onClick="$('#form-alamat-71').toggleClass('hide');" type="button" class="btn btn-succcess">Alamat Pengiriman</button>

                                                        
                                                        <!-- button id="btn_finish_71" id_finish="71" is_open="false" type="button" class="btn btn-danger finish">Tutup Transaksi</button -->

                                                        

                                                        <div id="detail_histori_71" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                <label for="histori_pemesanan">Histori Pemesanan:</label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">

                                                                    <thead>

                                                                        <tr>

                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>

                                                                            <th width="20%"><div style="text-align: center;">Tanggal Jam</div></th>                                        

                                                                            <th width="70%"><div style="text-align: center;">Penjelasan</div></th>

                                                                        </tr>

                                                                    </thead>

                                                                    <tbody>

                                                                        
                                                                        
                                                                            <tr id="baris_71">

                                                                                <td align="center">1</td>

                                                                                <td align="center">07-03-2018</td>

                                                                                <td align="left">Customer melakukan checkout.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                    </tbody>                                         

                                                                </table>

                                                            </div>

                                                        </div>

                                                        <div class="table-responsive hide" id="form-alamat-71" style="margin-top: 10px;">

                                                            <div class="form-group">
                                                                <label for="histori_pemesanan">Alamat Pengiriman:</label>
																<div class="table table-xlg" id="alamat-71"  style="width:100%">
																		<p style="font-size: 20px;">Penerima : <hr></p>
																		<p style="font-size: 20px;">Alamat : jl lusi 8<hr></p>
																		<p style="font-size: 20px;">Telpon : 0812388999985<hr></p>
																		<p style="font-size: 20px;">Pengirim : <hr></p>
																		<p style="font-size: 20px; text-transform: uppercase;">Kurir Pengiriman : JNE</p>
																		<p style="font-size: 20px; text-transform: uppercase;">Kode Pemesanan : #000071</p>
                                                                </div>
																<button onClick="printalamat('alamat-71')" class="btn btn-success" type="button">Print Alamat Pengirman</button>
    															<button class="btn" data-clipboard-action="copy" data-clipboard-target="#alamat-71">Copy Alamat Pengirman</button>						
                                                            </div>

                                                        </div>
                                                        

                                                        <div id="detail_detail_71" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                <label for="histori_pemesanan">Detail Barang:</label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">

                                                                    <thead>

                                                                        <tr>

                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Gambar</div></th>

                                                                            <th width="40%"><div style="text-align: center;">Nama Barang</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Qty</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Harga</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Diskon</div></th>
                                                                        
                                                                            <th width="15%"><div style="text-align: center;">Subtotal</div></th>

                                                                            <th width="15%"><div style="text-align: center;">Grandtotal</div></th>

                                                                        </tr>

                                                                    </thead>

                                                                    <tbody>

                                                                                                                                                
                                                                        
                                                                            <tr id="baris_">

                                                                                <td align="center">1</td>

                                                                                <td align="center"><img src="http://laundry.id/uploads/produk/minimal_minimal-overslag-jersey-shirt-jet-black_full05.jpg" width="48px" /></td>

                                                                                <td align="left">Minimal Overslag Jersey Shirt Jet Atasan Wanita (ATS-1213)<br />Ukuran: L<br />Warna BLACK</td>

                                                                                <td align="center">1</td>

                                                                                <td align="center"> Rp. 0</td>
                                                                                <td align="center"> Rp. 0</td>
                                                                                <td align="right">Rp. 40,500</td>

                                                                                <td align="right">Rp. 40,500</td>

                                                                            </tr>

                                                                              
                                                                              

                                                                                                                                                    <tr id="baris_">

                                                                                <td align="right" colspan="7">Voucher</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                            <tr id="baris_">

                                                                                <td align="right" colspan="7">Ongkir</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                            <tr id="baris_">

                                                                                <td align="right" colspan="7">Total</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                        

                                                                    </tbody>                                         

                                                                </table>

                                                            </div>

                                                            <div class="form-group">

                                                                <button id_edit="71" type="button" class="btn btn-danger edit_pesanan">Edit</button>
                                                            </div>

                                                        </div>

                                                        

                                                        
                                                        
                                                        
                                                        

                                                        <!-- div id="edit_finish_71" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                

                                                                <label for=""></label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                    

                                                                    <tr>

                                                                        <td width="25%"><label for="nama_penerima" style="padding: 7px 0 0 7px;">Penerima Paket:</label></td>

                                                                        <td width="60%"><input type="text" value="" class="form-control" name="nama_penerima_71" placeholder="" /></td>

                                                                        <td width="15%">

                                                                            <div id="i_loading_finish_71" class="G-btn-animation" style="display: none;"><img src="http://laundry.id/templates/back-end/penguin/assets/img/loading.gif" /></div>

                                                                            <button id="btn_simpan_finish_71" id_finish="71" type="button" class="btn btn-danger simpan_finish">Paket Sudah Diterima</button>

                                                                        </td>

                                                                    </tr>                                                                    

                                                                </table>

                                                            </div>

                                                        </div -->

                                                    </div></td></tr>

                                                </table>

                                            </td>

                                        </tr>

                                          

                                                                        

                                        <tr id="baris_70">

                                            <!-- td align="center"><input type="checkbox" id_select="70" name="select_70" class="select" /></td -->

                                            <td align="center">11</td>

                                            <td>

                                                <table width="100%">

                                                    <!-- tr><td><b>ID</b> </td><td><b>:</b> 70</td></tr -->

                                                    <tr><td width="25%"><b>Kode Pemesanan</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> <a href="http://laundry.id/adminweb/pemesanan/list.php?_&query=000070	" ><span style="font-weight: bold;">#000070</span></a></td></tr>

                                                    <tr><td><b>Nama Pengguna</b> </td><td><b>:</b>   ()</td></tr>

                                                    <tr><td><b>Tanggal Pesan</b></td><td><b>:</b> 05-03-2018 00:52:24</td></tr>

                                                    <tr><td><b>Pengiriman Kepada</b> </td><td><b>:</b> ery</td></tr>

                                                    <tr><td><b>Alamat</b></td><td><b>:</b> wong kalideres55 jawa barat</td></tr>

                                                    <tr><td><b>No. HP</b></td><td><b>:</b> 085264848464</td></tr>

                                                    <tr><td><b>Total Belanja</b> </td><td><b>:</b> Rp. 658,000</td></tr>                                                    

                                                    <tr><td><b>Kurir Pengiriman</b> </td><td><b>:</b> JNE</td></tr>                                                    

                                                    <tr><td><b>No. Resi</b> </td><td><b>:</b> <span id="text_no_resi_70"></span></td></tr>                                                    

                                                    <tr><td><b>Jenis Pemesanan</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;">BUKAN DROPSHIP</span></td></tr>

                                                    <tr><td><b>Nama Dropship</b> </td><td><b>:</b> <span id="text_no_resi_70"></span></td></tr>               
                                                    <tr><td><b>No.Telpon Dropship</b> </td><td><b>:</b> <span id="text_no_resi_70"></span></td></tr>                                       
                                                    <tr><td><b>Cara Pembayaran</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;">Transfer Bank</span></td></tr>

                                                    <tr><td><b>Status Pembayaran</b> </td><td><b>:</b> <span id='text_pembayaran_70' style="color: red; font-weight: bold;">BELUM LUNAS</span></td></tr>

                                                    <tr><td><b>Status Pemesanan</b> </td><td><b>:</b> <span id='text_status_70' style="font-weight: bold; color: red;">Pemesanan dibatalakan oleh Admin.</span></td></tr>

                                                    <tr><td colspan="2">

                                                    <div id="message_wrapper_70" style="margin-top: 10px; margin-bottom: 10px;">

                                                        <div id="alert_error_70" class="form-group" style="display: none;">

                                                            <div class="alert alert-danger">&nbsp;</div>

                                                        </div>

                                                        <div id="alert_success_70" class="form-group" style="display: none;">                         

                                                            <div class="alert alert-info">&nbsp;</div>

                                                        </div>                                                                

                                                    </div>

                                                    <div style="margin-top: 10px; margin-bottom: 10px;">

                                                        
                                                        <button id="btn_histori_70" id_histori="70" type="button" class="btn btn-primary histori">Lihat Status</button>

                                                        <button id="btn_detail_70" id_detail="70" type="button" class="btn btn-warning detail">Tampilkan Detail</button>

                                                        <button id="btn_cetak_70" notrx="000070" type="button" class="btn btn-warning cetak">Cetak</button>
                                                        
                                                        <button onClick="$('#form-alamat-70').toggleClass('hide');" type="button" class="btn btn-succcess">Alamat Pengiriman</button>

                                                        
                                                        <!-- button id="btn_finish_70" id_finish="70" is_open="false" type="button" class="btn btn-danger finish">Tutup Transaksi</button -->

                                                        

                                                        <div id="detail_histori_70" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                <label for="histori_pemesanan">Histori Pemesanan:</label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">

                                                                    <thead>

                                                                        <tr>

                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>

                                                                            <th width="20%"><div style="text-align: center;">Tanggal Jam</div></th>                                        

                                                                            <th width="70%"><div style="text-align: center;">Penjelasan</div></th>

                                                                        </tr>

                                                                    </thead>

                                                                    <tbody>

                                                                        
                                                                        
                                                                            <tr id="baris_70">

                                                                                <td align="center">1</td>

                                                                                <td align="center">05-03-2018</td>

                                                                                <td align="left">Customer melakukan checkout.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                    </tbody>                                         

                                                                </table>

                                                            </div>

                                                        </div>

                                                        <div class="table-responsive hide" id="form-alamat-70" style="margin-top: 10px;">

                                                            <div class="form-group">
                                                                <label for="histori_pemesanan">Alamat Pengiriman:</label>
																<div class="table table-xlg" id="alamat-70"  style="width:100%">
																		<p style="font-size: 20px;">Penerima : <hr></p>
																		<p style="font-size: 20px;">Alamat : wong kalideres55 jawa barat<hr></p>
																		<p style="font-size: 20px;">Telpon : 085264848464<hr></p>
																		<p style="font-size: 20px;">Pengirim : <hr></p>
																		<p style="font-size: 20px; text-transform: uppercase;">Kurir Pengiriman : JNE</p>
																		<p style="font-size: 20px; text-transform: uppercase;">Kode Pemesanan : #000070</p>
                                                                </div>
																<button onClick="printalamat('alamat-70')" class="btn btn-success" type="button">Print Alamat Pengirman</button>
    															<button class="btn" data-clipboard-action="copy" data-clipboard-target="#alamat-70">Copy Alamat Pengirman</button>						
                                                            </div>

                                                        </div>
                                                        

                                                        <div id="detail_detail_70" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                <label for="histori_pemesanan">Detail Barang:</label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">

                                                                    <thead>

                                                                        <tr>

                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Gambar</div></th>

                                                                            <th width="40%"><div style="text-align: center;">Nama Barang</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Qty</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Harga</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Diskon</div></th>
                                                                        
                                                                            <th width="15%"><div style="text-align: center;">Subtotal</div></th>

                                                                            <th width="15%"><div style="text-align: center;">Grandtotal</div></th>

                                                                        </tr>

                                                                    </thead>

                                                                    <tbody>

                                                                                                                                                
                                                                        
                                                                            <tr id="baris_">

                                                                                <td align="center">1</td>

                                                                                <td align="center"><img src="http://laundry.id/uploads/produk/raindoz_raindoz-jaket-parka-wanita-hinata-rse-060_full02_1.jpg" width="48px" /></td>

                                                                                <td align="left">HRCN JAKET SWEATER HOODIES WANITA OUTWEAR WANITA CROWN (IKH2076QI)<br />Ukuran: M</td>

                                                                                <td align="center">2</td>

                                                                                <td align="center"> Rp. 0</td>
                                                                                <td align="center"> Rp. 0</td>
                                                                                <td align="right">Rp. 289,000</td>

                                                                                <td align="right">Rp. 578,000</td>

                                                                            </tr>

                                                                              
                                                                              

                                                                                                                                                    <tr id="baris_">

                                                                                <td align="right" colspan="7">Voucher</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                            <tr id="baris_">

                                                                                <td align="right" colspan="7">Ongkir</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                            <tr id="baris_">

                                                                                <td align="right" colspan="7">Total</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                        

                                                                    </tbody>                                         

                                                                </table>

                                                            </div>

                                                            <div class="form-group">

                                                                <button id_edit="70" type="button" class="btn btn-danger edit_pesanan">Edit</button>
                                                            </div>

                                                        </div>

                                                        

                                                        
                                                        
                                                        
                                                        

                                                        <!-- div id="edit_finish_70" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                

                                                                <label for=""></label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                    

                                                                    <tr>

                                                                        <td width="25%"><label for="nama_penerima" style="padding: 7px 0 0 7px;">Penerima Paket:</label></td>

                                                                        <td width="60%"><input type="text" value="" class="form-control" name="nama_penerima_70" placeholder="" /></td>

                                                                        <td width="15%">

                                                                            <div id="i_loading_finish_70" class="G-btn-animation" style="display: none;"><img src="http://laundry.id/templates/back-end/penguin/assets/img/loading.gif" /></div>

                                                                            <button id="btn_simpan_finish_70" id_finish="70" type="button" class="btn btn-danger simpan_finish">Paket Sudah Diterima</button>

                                                                        </td>

                                                                    </tr>                                                                    

                                                                </table>

                                                            </div>

                                                        </div -->

                                                    </div></td></tr>

                                                </table>

                                            </td>

                                        </tr>

                                          

                                                                        

                                        <tr id="baris_69">

                                            <!-- td align="center"><input type="checkbox" id_select="69" name="select_69" class="select" /></td -->

                                            <td align="center">12</td>

                                            <td>

                                                <table width="100%">

                                                    <!-- tr><td><b>ID</b> </td><td><b>:</b> 69</td></tr -->

                                                    <tr><td width="25%"><b>Kode Pemesanan</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> <a href="http://laundry.id/adminweb/pemesanan/list.php?_&query=000069	" ><span style="font-weight: bold;">#000069</span></a></td></tr>

                                                    <tr><td><b>Nama Pengguna</b> </td><td><b>:</b>   ()</td></tr>

                                                    <tr><td><b>Tanggal Pesan</b></td><td><b>:</b> 03-03-2018 04:28:00</td></tr>

                                                    <tr><td><b>Pengiriman Kepada</b> </td><td><b>:</b> oke</td></tr>

                                                    <tr><td><b>Alamat</b></td><td><b>:</b> jl lusi 8</td></tr>

                                                    <tr><td><b>No. HP</b></td><td><b>:</b> 0812388999985</td></tr>

                                                    <tr><td><b>Total Belanja</b> </td><td><b>:</b> Rp. 156,000</td></tr>                                                    

                                                    <tr><td><b>Kurir Pengiriman</b> </td><td><b>:</b> POS</td></tr>                                                    

                                                    <tr><td><b>No. Resi</b> </td><td><b>:</b> <span id="text_no_resi_69"></span></td></tr>                                                    

                                                    <tr><td><b>Jenis Pemesanan</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;">BUKAN DROPSHIP</span></td></tr>

                                                    <tr><td><b>Nama Dropship</b> </td><td><b>:</b> <span id="text_no_resi_69"></span></td></tr>               
                                                    <tr><td><b>No.Telpon Dropship</b> </td><td><b>:</b> <span id="text_no_resi_69"></span></td></tr>                                       
                                                    <tr><td><b>Cara Pembayaran</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;">Transfer Bank</span></td></tr>

                                                    <tr><td><b>Status Pembayaran</b> </td><td><b>:</b> <span id='text_pembayaran_69' style="color: red; font-weight: bold;">BELUM LUNAS</span></td></tr>

                                                    <tr><td><b>Status Pemesanan</b> </td><td><b>:</b> <span id='text_status_69' style="font-weight: bold; color: orange;">Menunggu pembayaran Customer.</span></td></tr>

                                                    <tr><td colspan="2">

                                                    <div id="message_wrapper_69" style="margin-top: 10px; margin-bottom: 10px;">

                                                        <div id="alert_error_69" class="form-group" style="display: none;">

                                                            <div class="alert alert-danger">&nbsp;</div>

                                                        </div>

                                                        <div id="alert_success_69" class="form-group" style="display: none;">                         

                                                            <div class="alert alert-info">&nbsp;</div>

                                                        </div>                                                                

                                                    </div>

                                                    <div style="margin-top: 10px; margin-bottom: 10px;">

                                                        
                                                            <div id="i_loading_batal_69" class="G-btn-animation" style="display: none;"><img src="http://laundry.id/templates/back-end/penguin/assets/img/loading.gif" /></div>

                                                            <button id="btn_batal_69" id_batal="69" type="button" class="btn btn-danger batal_pesan">Batalkan Pesanan</button>

                                                        
                                                        <button id="btn_histori_69" id_histori="69" type="button" class="btn btn-primary histori">Lihat Status</button>

                                                        <button id="btn_detail_69" id_detail="69" type="button" class="btn btn-warning detail">Tampilkan Detail</button>

                                                        <button id="btn_cetak_69" notrx="000069" type="button" class="btn btn-warning cetak">Cetak</button>
                                                        
                                                        <button onClick="$('#form-alamat-69').toggleClass('hide');" type="button" class="btn btn-succcess">Alamat Pengiriman</button>

                                                        
                                                        <!-- button id="btn_finish_69" id_finish="69" is_open="false" type="button" class="btn btn-danger finish">Tutup Transaksi</button -->

                                                        

                                                        <div id="detail_histori_69" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                <label for="histori_pemesanan">Histori Pemesanan:</label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">

                                                                    <thead>

                                                                        <tr>

                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>

                                                                            <th width="20%"><div style="text-align: center;">Tanggal Jam</div></th>                                        

                                                                            <th width="70%"><div style="text-align: center;">Penjelasan</div></th>

                                                                        </tr>

                                                                    </thead>

                                                                    <tbody>

                                                                        
                                                                        
                                                                            <tr id="baris_69">

                                                                                <td align="center">1</td>

                                                                                <td align="center">03-03-2018</td>

                                                                                <td align="left">Customer melakukan checkout.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                    </tbody>                                         

                                                                </table>

                                                            </div>

                                                        </div>

                                                        <div class="table-responsive hide" id="form-alamat-69" style="margin-top: 10px;">

                                                            <div class="form-group">
                                                                <label for="histori_pemesanan">Alamat Pengiriman:</label>
																<div class="table table-xlg" id="alamat-69"  style="width:100%">
																		<p style="font-size: 20px;">Penerima : <hr></p>
																		<p style="font-size: 20px;">Alamat : jl lusi 8<hr></p>
																		<p style="font-size: 20px;">Telpon : 0812388999985<hr></p>
																		<p style="font-size: 20px;">Pengirim : <hr></p>
																		<p style="font-size: 20px; text-transform: uppercase;">Kurir Pengiriman : POS</p>
																		<p style="font-size: 20px; text-transform: uppercase;">Kode Pemesanan : #000069</p>
                                                                </div>
																<button onClick="printalamat('alamat-69')" class="btn btn-success" type="button">Print Alamat Pengirman</button>
    															<button class="btn" data-clipboard-action="copy" data-clipboard-target="#alamat-69">Copy Alamat Pengirman</button>						
                                                            </div>

                                                        </div>
                                                        

                                                        <div id="detail_detail_69" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                <label for="histori_pemesanan">Detail Barang:</label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">

                                                                    <thead>

                                                                        <tr>

                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Gambar</div></th>

                                                                            <th width="40%"><div style="text-align: center;">Nama Barang</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Qty</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Harga</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Diskon</div></th>
                                                                        
                                                                            <th width="15%"><div style="text-align: center;">Subtotal</div></th>

                                                                            <th width="15%"><div style="text-align: center;">Grandtotal</div></th>

                                                                        </tr>

                                                                    </thead>

                                                                    <tbody>

                                                                                                                                                
                                                                        
                                                                            <tr id="baris_">

                                                                                <td align="center">1</td>

                                                                                <td align="center"><img src="http://laundry.id/uploads/produk/Christian-Dior-Lady-8907-Semi-Premium-KODE-CD058-Pink.jpg" width="48px" /></td>

                                                                                <td align="left">tas mj (1919)<br />Ukuran: 20X20X20<br />Warna TEST</td>

                                                                                <td align="center">1</td>

                                                                                <td align="center"> Rp. 0</td>
                                                                                <td align="center"> Rp. 0</td>
                                                                                <td align="right">Rp. 120,000</td>

                                                                                <td align="right">Rp. 120,000</td>

                                                                            </tr>

                                                                              
                                                                              

                                                                                                                                                    <tr id="baris_">

                                                                                <td align="right" colspan="7">Voucher</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                            <tr id="baris_">

                                                                                <td align="right" colspan="7">Ongkir</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                            <tr id="baris_">

                                                                                <td align="right" colspan="7">Total</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                        

                                                                    </tbody>                                         

                                                                </table>

                                                            </div>

                                                            <div class="form-group">

                                                                <button id_edit="69" type="button" class="btn btn-danger edit_pesanan">Edit</button>
                                                            </div>

                                                        </div>

                                                        

                                                        
                                                        
                                                        
                                                        

                                                        <!-- div id="edit_finish_69" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                

                                                                <label for=""></label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                    

                                                                    <tr>

                                                                        <td width="25%"><label for="nama_penerima" style="padding: 7px 0 0 7px;">Penerima Paket:</label></td>

                                                                        <td width="60%"><input type="text" value="" class="form-control" name="nama_penerima_69" placeholder="" /></td>

                                                                        <td width="15%">

                                                                            <div id="i_loading_finish_69" class="G-btn-animation" style="display: none;"><img src="http://laundry.id/templates/back-end/penguin/assets/img/loading.gif" /></div>

                                                                            <button id="btn_simpan_finish_69" id_finish="69" type="button" class="btn btn-danger simpan_finish">Paket Sudah Diterima</button>

                                                                        </td>

                                                                    </tr>                                                                    

                                                                </table>

                                                            </div>

                                                        </div -->

                                                    </div></td></tr>

                                                </table>

                                            </td>

                                        </tr>

                                          

                                                                        

                                        <tr id="baris_68">

                                            <!-- td align="center"><input type="checkbox" id_select="68" name="select_68" class="select" /></td -->

                                            <td align="center">13</td>

                                            <td>

                                                <table width="100%">

                                                    <!-- tr><td><b>ID</b> </td><td><b>:</b> 68</td></tr -->

                                                    <tr><td width="25%"><b>Kode Pemesanan</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> <a href="http://laundry.id/adminweb/pemesanan/list.php?_&query=000068	" ><span style="font-weight: bold;">#000068</span></a></td></tr>

                                                    <tr><td><b>Nama Pengguna</b> </td><td><b>:</b> Guest ()</td></tr>

                                                    <tr><td><b>Tanggal Pesan</b></td><td><b>:</b> 02-03-2018 11:41:26</td></tr>

                                                    <tr><td><b>Pengiriman Kepada</b> </td><td><b>:</b> Hafizah</td></tr>

                                                    <tr><td><b>Alamat</b></td><td><b>:</b> jl. bakti, rt 1/12 No. 43</td></tr>

                                                    <tr><td><b>No. HP</b></td><td><b>:</b> 081266062411</td></tr>

                                                    <tr><td><b>Total Belanja</b> </td><td><b>:</b> Rp. 309,000</td></tr>                                                    

                                                    <tr><td><b>Kurir Pengiriman</b> </td><td><b>:</b> JNT</td></tr>                                                    

                                                    <tr><td><b>No. Resi</b> </td><td><b>:</b> <span id="text_no_resi_68"></span></td></tr>                                                    

                                                    <tr><td><b>Jenis Pemesanan</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;">BUKAN DROPSHIP</span></td></tr>

                                                    <tr><td><b>Nama Dropship</b> </td><td><b>:</b> <span id="text_no_resi_68"></span></td></tr>               
                                                    <tr><td><b>No.Telpon Dropship</b> </td><td><b>:</b> <span id="text_no_resi_68"></span></td></tr>                                       
                                                    <tr><td><b>Cara Pembayaran</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;">Transfer Bank</span></td></tr>

                                                    <tr><td><b>Status Pembayaran</b> </td><td><b>:</b> <span id='text_pembayaran_68' style="color: red; font-weight: bold;">BELUM LUNAS</span></td></tr>

                                                    <tr><td><b>Status Pemesanan</b> </td><td><b>:</b> <span id='text_status_68' style="font-weight: bold; color: orange;">Menunggu pembayaran Customer.</span></td></tr>

                                                    <tr><td colspan="2">

                                                    <div id="message_wrapper_68" style="margin-top: 10px; margin-bottom: 10px;">

                                                        <div id="alert_error_68" class="form-group" style="display: none;">

                                                            <div class="alert alert-danger">&nbsp;</div>

                                                        </div>

                                                        <div id="alert_success_68" class="form-group" style="display: none;">                         

                                                            <div class="alert alert-info">&nbsp;</div>

                                                        </div>                                                                

                                                    </div>

                                                    <div style="margin-top: 10px; margin-bottom: 10px;">

                                                        
                                                            <div id="i_loading_batal_68" class="G-btn-animation" style="display: none;"><img src="http://laundry.id/templates/back-end/penguin/assets/img/loading.gif" /></div>

                                                            <button id="btn_batal_68" id_batal="68" type="button" class="btn btn-danger batal_pesan">Batalkan Pesanan</button>

                                                        
                                                        <button id="btn_histori_68" id_histori="68" type="button" class="btn btn-primary histori">Lihat Status</button>

                                                        <button id="btn_detail_68" id_detail="68" type="button" class="btn btn-warning detail">Tampilkan Detail</button>

                                                        <button id="btn_cetak_68" notrx="000068" type="button" class="btn btn-warning cetak">Cetak</button>
                                                        
                                                        <button onClick="$('#form-alamat-68').toggleClass('hide');" type="button" class="btn btn-succcess">Alamat Pengiriman</button>

                                                        
                                                        <!-- button id="btn_finish_68" id_finish="68" is_open="false" type="button" class="btn btn-danger finish">Tutup Transaksi</button -->

                                                        

                                                        <div id="detail_histori_68" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                <label for="histori_pemesanan">Histori Pemesanan:</label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">

                                                                    <thead>

                                                                        <tr>

                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>

                                                                            <th width="20%"><div style="text-align: center;">Tanggal Jam</div></th>                                        

                                                                            <th width="70%"><div style="text-align: center;">Penjelasan</div></th>

                                                                        </tr>

                                                                    </thead>

                                                                    <tbody>

                                                                        
                                                                        
                                                                            <tr id="baris_68">

                                                                                <td align="center">1</td>

                                                                                <td align="center">02-03-2018</td>

                                                                                <td align="left">Customer melakukan checkout.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                    </tbody>                                         

                                                                </table>

                                                            </div>

                                                        </div>

                                                        <div class="table-responsive hide" id="form-alamat-68" style="margin-top: 10px;">

                                                            <div class="form-group">
                                                                <label for="histori_pemesanan">Alamat Pengiriman:</label>
																<div class="table table-xlg" id="alamat-68"  style="width:100%">
																		<p style="font-size: 20px;">Penerima : <hr></p>
																		<p style="font-size: 20px;">Alamat : jl. bakti, rt 1/12 No. 43<hr></p>
																		<p style="font-size: 20px;">Telpon : 081266062411<hr></p>
																		<p style="font-size: 20px;">Pengirim : <hr></p>
																		<p style="font-size: 20px; text-transform: uppercase;">Kurir Pengiriman : JNT</p>
																		<p style="font-size: 20px; text-transform: uppercase;">Kode Pemesanan : #000068</p>
                                                                </div>
																<button onClick="printalamat('alamat-68')" class="btn btn-success" type="button">Print Alamat Pengirman</button>
    															<button class="btn" data-clipboard-action="copy" data-clipboard-target="#alamat-68">Copy Alamat Pengirman</button>						
                                                            </div>

                                                        </div>
                                                        

                                                        <div id="detail_detail_68" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                <label for="histori_pemesanan">Detail Barang:</label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">

                                                                    <thead>

                                                                        <tr>

                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Gambar</div></th>

                                                                            <th width="40%"><div style="text-align: center;">Nama Barang</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Qty</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Harga</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Diskon</div></th>
                                                                        
                                                                            <th width="15%"><div style="text-align: center;">Subtotal</div></th>

                                                                            <th width="15%"><div style="text-align: center;">Grandtotal</div></th>

                                                                        </tr>

                                                                    </thead>

                                                                    <tbody>

                                                                                                                                                
                                                                        
                                                                            <tr id="baris_">

                                                                                <td align="center">1</td>

                                                                                <td align="center"><img src="http://laundry.id/uploads/produk/raindoz_raindoz-jaket-parka-wanita-hinata-rse-060_full02_1.jpg" width="48px" /></td>

                                                                                <td align="left">HRCN JAKET SWEATER HOODIES WANITA OUTWEAR WANITA CROWN (IKH2076QI)<br />Ukuran: M</td>

                                                                                <td align="center">1</td>

                                                                                <td align="center"> Rp. 0</td>
                                                                                <td align="center"> Rp. 0</td>
                                                                                <td align="right">Rp. 289,000</td>

                                                                                <td align="right">Rp. 289,000</td>

                                                                            </tr>

                                                                              
                                                                              

                                                                                                                                                    <tr id="baris_">

                                                                                <td align="right" colspan="7">Voucher</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                            <tr id="baris_">

                                                                                <td align="right" colspan="7">Ongkir</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                            <tr id="baris_">

                                                                                <td align="right" colspan="7">Total</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                        

                                                                    </tbody>                                         

                                                                </table>

                                                            </div>

                                                            <div class="form-group">

                                                                <button id_edit="68" type="button" class="btn btn-danger edit_pesanan">Edit</button>
                                                            </div>

                                                        </div>

                                                        

                                                        
                                                        
                                                        
                                                        

                                                        <!-- div id="edit_finish_68" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                

                                                                <label for=""></label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                    

                                                                    <tr>

                                                                        <td width="25%"><label for="nama_penerima" style="padding: 7px 0 0 7px;">Penerima Paket:</label></td>

                                                                        <td width="60%"><input type="text" value="" class="form-control" name="nama_penerima_68" placeholder="" /></td>

                                                                        <td width="15%">

                                                                            <div id="i_loading_finish_68" class="G-btn-animation" style="display: none;"><img src="http://laundry.id/templates/back-end/penguin/assets/img/loading.gif" /></div>

                                                                            <button id="btn_simpan_finish_68" id_finish="68" type="button" class="btn btn-danger simpan_finish">Paket Sudah Diterima</button>

                                                                        </td>

                                                                    </tr>                                                                    

                                                                </table>

                                                            </div>

                                                        </div -->

                                                    </div></td></tr>

                                                </table>

                                            </td>

                                        </tr>

                                          

                                                                        

                                        <tr id="baris_67">

                                            <!-- td align="center"><input type="checkbox" id_select="67" name="select_67" class="select" /></td -->

                                            <td align="center">14</td>

                                            <td>

                                                <table width="100%">

                                                    <!-- tr><td><b>ID</b> </td><td><b>:</b> 67</td></tr -->

                                                    <tr><td width="25%"><b>Kode Pemesanan</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> <a href="http://laundry.id/adminweb/pemesanan/list.php?_&query=000067	" ><span style="font-weight: bold;">#000067</span></a></td></tr>

                                                    <tr><td><b>Nama Pengguna</b> </td><td><b>:</b>   ()</td></tr>

                                                    <tr><td><b>Tanggal Pesan</b></td><td><b>:</b> 14-02-2018 16:33:39</td></tr>

                                                    <tr><td><b>Pengiriman Kepada</b> </td><td><b>:</b> Ferry </td></tr>

                                                    <tr><td><b>Alamat</b></td><td><b>:</b> Btn darussamam 2 </td></tr>

                                                    <tr><td><b>No. HP</b></td><td><b>:</b> 085386742325</td></tr>

                                                    <tr><td><b>Total Belanja</b> </td><td><b>:</b> Rp. 338,500</td></tr>                                                    

                                                    <tr><td><b>Kurir Pengiriman</b> </td><td><b>:</b> POS</td></tr>                                                    

                                                    <tr><td><b>No. Resi</b> </td><td><b>:</b> <span id="text_no_resi_67"></span></td></tr>                                                    

                                                    <tr><td><b>Jenis Pemesanan</b> </td><td><b>:</b> <span style="color: red; font-weight: bold;">DROPSHIP</span></td></tr>

                                                    <tr><td><b>Nama Dropship</b> </td><td><b>:</b> <span id="text_no_resi_67"></span></td></tr>               
                                                    <tr><td><b>No.Telpon Dropship</b> </td><td><b>:</b> <span id="text_no_resi_67"></span></td></tr>                                       
                                                    <tr><td><b>Cara Pembayaran</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;">Transfer Bank</span></td></tr>

                                                    <tr><td><b>Status Pembayaran</b> </td><td><b>:</b> <span id='text_pembayaran_67' style="color: red; font-weight: bold;">BELUM LUNAS</span></td></tr>

                                                    <tr><td><b>Status Pemesanan</b> </td><td><b>:</b> <span id='text_status_67' style="font-weight: bold; color: orange;">Menunggu pembayaran Customer.</span></td></tr>

                                                    <tr><td colspan="2">

                                                    <div id="message_wrapper_67" style="margin-top: 10px; margin-bottom: 10px;">

                                                        <div id="alert_error_67" class="form-group" style="display: none;">

                                                            <div class="alert alert-danger">&nbsp;</div>

                                                        </div>

                                                        <div id="alert_success_67" class="form-group" style="display: none;">                         

                                                            <div class="alert alert-info">&nbsp;</div>

                                                        </div>                                                                

                                                    </div>

                                                    <div style="margin-top: 10px; margin-bottom: 10px;">

                                                        
                                                            <div id="i_loading_batal_67" class="G-btn-animation" style="display: none;"><img src="http://laundry.id/templates/back-end/penguin/assets/img/loading.gif" /></div>

                                                            <button id="btn_batal_67" id_batal="67" type="button" class="btn btn-danger batal_pesan">Batalkan Pesanan</button>

                                                        
                                                        <button id="btn_histori_67" id_histori="67" type="button" class="btn btn-primary histori">Lihat Status</button>

                                                        <button id="btn_detail_67" id_detail="67" type="button" class="btn btn-warning detail">Tampilkan Detail</button>

                                                        <button id="btn_cetak_67" notrx="000067" type="button" class="btn btn-warning cetak">Cetak</button>
                                                        
                                                        <button onClick="$('#form-alamat-67').toggleClass('hide');" type="button" class="btn btn-succcess">Alamat Pengiriman</button>

                                                        
                                                        <!-- button id="btn_finish_67" id_finish="67" is_open="false" type="button" class="btn btn-danger finish">Tutup Transaksi</button -->

                                                        

                                                        <div id="detail_histori_67" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                <label for="histori_pemesanan">Histori Pemesanan:</label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">

                                                                    <thead>

                                                                        <tr>

                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>

                                                                            <th width="20%"><div style="text-align: center;">Tanggal Jam</div></th>                                        

                                                                            <th width="70%"><div style="text-align: center;">Penjelasan</div></th>

                                                                        </tr>

                                                                    </thead>

                                                                    <tbody>

                                                                        
                                                                        
                                                                            <tr id="baris_67">

                                                                                <td align="center">1</td>

                                                                                <td align="center">14-02-2018</td>

                                                                                <td align="left">Customer melakukan checkout.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                    </tbody>                                         

                                                                </table>

                                                            </div>

                                                        </div>

                                                        <div class="table-responsive hide" id="form-alamat-67" style="margin-top: 10px;">

                                                            <div class="form-group">
                                                                <label for="histori_pemesanan">Alamat Pengiriman:</label>
																<div class="table table-xlg" id="alamat-67"  style="width:100%">
																		<p style="font-size: 20px;">Penerima : <hr></p>
																		<p style="font-size: 20px;">Alamat : Btn darussamam 2 <hr></p>
																		<p style="font-size: 20px;">Telpon : 085386742325<hr></p>
																		<p style="font-size: 20px;">Pengirim : <hr></p>
																		<p style="font-size: 20px; text-transform: uppercase;">Kurir Pengiriman : POS</p>
																		<p style="font-size: 20px; text-transform: uppercase;">Kode Pemesanan : #000067</p>
                                                                </div>
																<button onClick="printalamat('alamat-67')" class="btn btn-success" type="button">Print Alamat Pengirman</button>
    															<button class="btn" data-clipboard-action="copy" data-clipboard-target="#alamat-67">Copy Alamat Pengirman</button>						
                                                            </div>

                                                        </div>
                                                        

                                                        <div id="detail_detail_67" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                <label for="histori_pemesanan">Detail Barang:</label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">

                                                                    <thead>

                                                                        <tr>

                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Gambar</div></th>

                                                                            <th width="40%"><div style="text-align: center;">Nama Barang</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Qty</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Harga</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Diskon</div></th>
                                                                        
                                                                            <th width="15%"><div style="text-align: center;">Subtotal</div></th>

                                                                            <th width="15%"><div style="text-align: center;">Grandtotal</div></th>

                                                                        </tr>

                                                                    </thead>

                                                                    <tbody>

                                                                                                                                                
                                                                        
                                                                            <tr id="baris_">

                                                                                <td align="center">1</td>

                                                                                <td align="center"><img src="http://laundry.id/uploads/produk/raindoz_raindoz-jaket-parka-wanita-hinata-rse-060_full02_1.jpg" width="48px" /></td>

                                                                                <td align="left">HRCN JAKET SWEATER HOODIES WANITA OUTWEAR WANITA CROWN (IKH2076QI)<br />Ukuran: L</td>

                                                                                <td align="center">1</td>

                                                                                <td align="center"> Rp. 0</td>
                                                                                <td align="center"> Rp. 0</td>
                                                                                <td align="right">Rp. 289,000</td>

                                                                                <td align="right">Rp. 289,000</td>

                                                                            </tr>

                                                                              
                                                                              

                                                                                                                                                    <tr id="baris_">

                                                                                <td align="right" colspan="7">Voucher</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                            <tr id="baris_">

                                                                                <td align="right" colspan="7">Ongkir</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                            <tr id="baris_">

                                                                                <td align="right" colspan="7">Total</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                        

                                                                    </tbody>                                         

                                                                </table>

                                                            </div>

                                                            <div class="form-group">

                                                                <button id_edit="67" type="button" class="btn btn-danger edit_pesanan">Edit</button>
                                                            </div>

                                                        </div>

                                                        

                                                        
                                                        
                                                        
                                                        

                                                        <!-- div id="edit_finish_67" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                

                                                                <label for=""></label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                    

                                                                    <tr>

                                                                        <td width="25%"><label for="nama_penerima" style="padding: 7px 0 0 7px;">Penerima Paket:</label></td>

                                                                        <td width="60%"><input type="text" value="" class="form-control" name="nama_penerima_67" placeholder="" /></td>

                                                                        <td width="15%">

                                                                            <div id="i_loading_finish_67" class="G-btn-animation" style="display: none;"><img src="http://laundry.id/templates/back-end/penguin/assets/img/loading.gif" /></div>

                                                                            <button id="btn_simpan_finish_67" id_finish="67" type="button" class="btn btn-danger simpan_finish">Paket Sudah Diterima</button>

                                                                        </td>

                                                                    </tr>                                                                    

                                                                </table>

                                                            </div>

                                                        </div -->

                                                    </div></td></tr>

                                                </table>

                                            </td>

                                        </tr>

                                          

                                                                        

                                        <tr id="baris_66">

                                            <!-- td align="center"><input type="checkbox" id_select="66" name="select_66" class="select" /></td -->

                                            <td align="center">15</td>

                                            <td>

                                                <table width="100%">

                                                    <!-- tr><td><b>ID</b> </td><td><b>:</b> 66</td></tr -->

                                                    <tr><td width="25%"><b>Kode Pemesanan</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> <a href="http://laundry.id/adminweb/pemesanan/list.php?_&query=000066	" ><span style="font-weight: bold;">#000066</span></a></td></tr>

                                                    <tr><td><b>Nama Pengguna</b> </td><td><b>:</b>   ()</td></tr>

                                                    <tr><td><b>Tanggal Pesan</b></td><td><b>:</b> 14-02-2018 16:29:04</td></tr>

                                                    <tr><td><b>Pengiriman Kepada</b> </td><td><b>:</b> Ferry </td></tr>

                                                    <tr><td><b>Alamat</b></td><td><b>:</b> Btn darussamam 2 </td></tr>

                                                    <tr><td><b>No. HP</b></td><td><b>:</b> 085386742325</td></tr>

                                                    <tr><td><b>Total Belanja</b> </td><td><b>:</b> Rp. 228,000</td></tr>                                                    

                                                    <tr><td><b>Kurir Pengiriman</b> </td><td><b>:</b> JNE</td></tr>                                                    

                                                    <tr><td><b>No. Resi</b> </td><td><b>:</b> <span id="text_no_resi_66"></span></td></tr>                                                    

                                                    <tr><td><b>Jenis Pemesanan</b> </td><td><b>:</b> <span style="color: red; font-weight: bold;">DROPSHIP</span></td></tr>

                                                    <tr><td><b>Nama Dropship</b> </td><td><b>:</b> <span id="text_no_resi_66"></span></td></tr>               
                                                    <tr><td><b>No.Telpon Dropship</b> </td><td><b>:</b> <span id="text_no_resi_66"></span></td></tr>                                       
                                                    <tr><td><b>Cara Pembayaran</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;">Transfer Bank</span></td></tr>

                                                    <tr><td><b>Status Pembayaran</b> </td><td><b>:</b> <span id='text_pembayaran_66' style="color: green; font-weight: bold;">LUNAS</span></td></tr>

                                                    <tr><td><b>Status Pemesanan</b> </td><td><b>:</b> <span id='text_status_66' style="font-weight: bold; color: green;">Pesanan dalam proses.</span></td></tr>

                                                    <tr><td colspan="2">

                                                    <div id="message_wrapper_66" style="margin-top: 10px; margin-bottom: 10px;">

                                                        <div id="alert_error_66" class="form-group" style="display: none;">

                                                            <div class="alert alert-danger">&nbsp;</div>

                                                        </div>

                                                        <div id="alert_success_66" class="form-group" style="display: none;">                         

                                                            <div class="alert alert-info">&nbsp;</div>

                                                        </div>                                                                

                                                    </div>

                                                    <div style="margin-top: 10px; margin-bottom: 10px;">

                                                        
                                                            <div id="i_loading_batal_66" class="G-btn-animation" style="display: none;"><img src="http://laundry.id/templates/back-end/penguin/assets/img/loading.gif" /></div>

                                                            <button id="btn_batal_66" id_batal="66" type="button" class="btn btn-danger batal_pesan">Batalkan Pesanan</button>

                                                        
                                                        <button id="btn_histori_66" id_histori="66" type="button" class="btn btn-primary histori">Lihat Status</button>

                                                        <button id="btn_detail_66" id_detail="66" type="button" class="btn btn-warning detail">Tampilkan Detail</button>

                                                        <button id="btn_cetak_66" notrx="000066" type="button" class="btn btn-warning cetak">Cetak</button>
                                                        
                                                        <button onClick="$('#form-alamat-66').toggleClass('hide');" type="button" class="btn btn-succcess">Alamat Pengiriman</button>

                                                        <button id="btn_noresi_66" id_noresi="66" is_open="false" type="button" class="btn btn-info noresi">Proses Pengiriman</button>
                                                        <!-- button id="btn_finish_66" id_finish="66" is_open="false" type="button" class="btn btn-danger finish">Tutup Transaksi</button -->

                                                        

                                                        <div id="detail_histori_66" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                <label for="histori_pemesanan">Histori Pemesanan:</label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">

                                                                    <thead>

                                                                        <tr>

                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>

                                                                            <th width="20%"><div style="text-align: center;">Tanggal Jam</div></th>                                        

                                                                            <th width="70%"><div style="text-align: center;">Penjelasan</div></th>

                                                                        </tr>

                                                                    </thead>

                                                                    <tbody>

                                                                        
                                                                        
                                                                            <tr id="baris_66">

                                                                                <td align="center">1</td>

                                                                                <td align="center">14-02-2018</td>

                                                                                <td align="left">Customer melakukan checkout.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_66">

                                                                                <td align="center">2</td>

                                                                                <td align="center">14-02-2018</td>

                                                                                <td align="left">Customer melakukan konfirmasi pembayaran sebesar Rp 228,000.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_66">

                                                                                <td align="center">3</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menerima pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                    </tbody>                                         

                                                                </table>

                                                            </div>

                                                        </div>

                                                        <div class="table-responsive hide" id="form-alamat-66" style="margin-top: 10px;">

                                                            <div class="form-group">
                                                                <label for="histori_pemesanan">Alamat Pengiriman:</label>
																<div class="table table-xlg" id="alamat-66"  style="width:100%">
																		<p style="font-size: 20px;">Penerima : <hr></p>
																		<p style="font-size: 20px;">Alamat : Btn darussamam 2 <hr></p>
																		<p style="font-size: 20px;">Telpon : 085386742325<hr></p>
																		<p style="font-size: 20px;">Pengirim : <hr></p>
																		<p style="font-size: 20px; text-transform: uppercase;">Kurir Pengiriman : JNE</p>
																		<p style="font-size: 20px; text-transform: uppercase;">Kode Pemesanan : #000066</p>
                                                                </div>
																<button onClick="printalamat('alamat-66')" class="btn btn-success" type="button">Print Alamat Pengirman</button>
    															<button class="btn" data-clipboard-action="copy" data-clipboard-target="#alamat-66">Copy Alamat Pengirman</button>						
                                                            </div>

                                                        </div>
                                                        

                                                        <div id="detail_detail_66" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                <label for="histori_pemesanan">Detail Barang:</label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">

                                                                    <thead>

                                                                        <tr>

                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Gambar</div></th>

                                                                            <th width="40%"><div style="text-align: center;">Nama Barang</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Qty</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Harga</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Diskon</div></th>
                                                                        
                                                                            <th width="15%"><div style="text-align: center;">Subtotal</div></th>

                                                                            <th width="15%"><div style="text-align: center;">Grandtotal</div></th>

                                                                        </tr>

                                                                    </thead>

                                                                    <tbody>

                                                                                                                                                
                                                                        
                                                                            <tr id="baris_">

                                                                                <td align="center">1</td>

                                                                                <td align="center"><img src="http://laundry.id/uploads/produk/index.jpg" width="48px" /></td>

                                                                                <td align="left">piyama anak elmo size S (K409)</td>

                                                                                <td align="center">4</td>

                                                                                <td align="center"> Rp. 0</td>
                                                                                <td align="center"> Rp. 0</td>
                                                                                <td align="right">Rp. 42,000</td>

                                                                                <td align="right">Rp. 168,000</td>

                                                                            </tr>

                                                                              
                                                                              

                                                                                                                                                    <tr id="baris_">

                                                                                <td align="right" colspan="7">Voucher</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                            <tr id="baris_">

                                                                                <td align="right" colspan="7">Ongkir</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                            <tr id="baris_">

                                                                                <td align="right" colspan="7">Total</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                        

                                                                    </tbody>                                         

                                                                </table>

                                                            </div>

                                                            <div class="form-group">

                                                                <button id_edit="66" type="button" class="btn btn-danger edit_pesanan">Edit</button>
                                                            </div>

                                                        </div>

                                                        

                                                        
                                                        <div id="edit_no_resi_66" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">                                                                

                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                                                                                         

                                                                    <tr>

                                                                        <td width="25%"><label for="no_resi" style="padding: 7px 0 0 7px;">Status Pesanan:</label></td>

                                                                        <td colspan="2" width="70%">

                                                                            <select class="form-control" name="status_pesanan_66">

                                                                                <option value="2"  selected="selected">Pesanan Dalam Proses.</option>

                                                                                <option value="6" >Pesanan Sudah Dikirim.</option>

                                                                                <option value="5" >Pesanan Sudah Diterima.</option>

                                                                            </select>

                                                                        </td>                                                                        

                                                                    </tr>

                                                                    <tr>

                                                                        <td width="25%"><label for="no_resi" style="padding: 7px 0 0 7px;">Resi Pengiriman:</label></td>

                                                                        <td width="60%"><input type="text" value="" class="form-control" name="no_resi_66" placeholder="" /></td>

                                                                        <td width="15%">

                                                                            <div id="i_loading_noresi_66" class="G-btn-animation" style="display: none;"><img src="http://laundry.id/templates/back-end/penguin/assets/img/loading.gif" /></div>

                                                                            <button id="btn_simpan_noresi_66" id_noresi="66" type="button" class="btn btn-danger simpan_noresi">Update Status</button>

                                                                        </td>

                                                                    </tr>

                                                                </table>

                                                            </div>

                                                        </div>
                                                        
                                                        

                                                        <!-- div id="edit_finish_66" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                

                                                                <label for=""></label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                    

                                                                    <tr>

                                                                        <td width="25%"><label for="nama_penerima" style="padding: 7px 0 0 7px;">Penerima Paket:</label></td>

                                                                        <td width="60%"><input type="text" value="" class="form-control" name="nama_penerima_66" placeholder="" /></td>

                                                                        <td width="15%">

                                                                            <div id="i_loading_finish_66" class="G-btn-animation" style="display: none;"><img src="http://laundry.id/templates/back-end/penguin/assets/img/loading.gif" /></div>

                                                                            <button id="btn_simpan_finish_66" id_finish="66" type="button" class="btn btn-danger simpan_finish">Paket Sudah Diterima</button>

                                                                        </td>

                                                                    </tr>                                                                    

                                                                </table>

                                                            </div>

                                                        </div -->

                                                    </div></td></tr>

                                                </table>

                                            </td>

                                        </tr>

                                          

                                                                        

                                        <tr id="baris_65">

                                            <!-- td align="center"><input type="checkbox" id_select="65" name="select_65" class="select" /></td -->

                                            <td align="center">16</td>

                                            <td>

                                                <table width="100%">

                                                    <!-- tr><td><b>ID</b> </td><td><b>:</b> 65</td></tr -->

                                                    <tr><td width="25%"><b>Kode Pemesanan</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> <a href="http://laundry.id/adminweb/pemesanan/list.php?_&query=000065	" ><span style="font-weight: bold;">#000065</span></a></td></tr>

                                                    <tr><td><b>Nama Pengguna</b> </td><td><b>:</b> Guest ()</td></tr>

                                                    <tr><td><b>Tanggal Pesan</b></td><td><b>:</b> 13-02-2018 17:17:50</td></tr>

                                                    <tr><td><b>Pengiriman Kepada</b> </td><td><b>:</b> ian</td></tr>

                                                    <tr><td><b>Alamat</b></td><td><b>:</b> plamongan indah</td></tr>

                                                    <tr><td><b>No. HP</b></td><td><b>:</b> 085740324325</td></tr>

                                                    <tr><td><b>Total Belanja</b> </td><td><b>:</b> Rp. 132,200</td></tr>                                                    

                                                    <tr><td><b>Kurir Pengiriman</b> </td><td><b>:</b> JNT</td></tr>                                                    

                                                    <tr><td><b>No. Resi</b> </td><td><b>:</b> <span id="text_no_resi_65"></span></td></tr>                                                    

                                                    <tr><td><b>Jenis Pemesanan</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;">BUKAN DROPSHIP</span></td></tr>

                                                    <tr><td><b>Nama Dropship</b> </td><td><b>:</b> <span id="text_no_resi_65"></span></td></tr>               
                                                    <tr><td><b>No.Telpon Dropship</b> </td><td><b>:</b> <span id="text_no_resi_65"></span></td></tr>                                       
                                                    <tr><td><b>Cara Pembayaran</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;">Transfer Bank</span></td></tr>

                                                    <tr><td><b>Status Pembayaran</b> </td><td><b>:</b> <span id='text_pembayaran_65' style="color: red; font-weight: bold;">BELUM LUNAS</span></td></tr>

                                                    <tr><td><b>Status Pemesanan</b> </td><td><b>:</b> <span id='text_status_65' style="font-weight: bold; color: orange;">Menunggu pembayaran Customer.</span></td></tr>

                                                    <tr><td colspan="2">

                                                    <div id="message_wrapper_65" style="margin-top: 10px; margin-bottom: 10px;">

                                                        <div id="alert_error_65" class="form-group" style="display: none;">

                                                            <div class="alert alert-danger">&nbsp;</div>

                                                        </div>

                                                        <div id="alert_success_65" class="form-group" style="display: none;">                         

                                                            <div class="alert alert-info">&nbsp;</div>

                                                        </div>                                                                

                                                    </div>

                                                    <div style="margin-top: 10px; margin-bottom: 10px;">

                                                        
                                                            <div id="i_loading_batal_65" class="G-btn-animation" style="display: none;"><img src="http://laundry.id/templates/back-end/penguin/assets/img/loading.gif" /></div>

                                                            <button id="btn_batal_65" id_batal="65" type="button" class="btn btn-danger batal_pesan">Batalkan Pesanan</button>

                                                        
                                                        <button id="btn_histori_65" id_histori="65" type="button" class="btn btn-primary histori">Lihat Status</button>

                                                        <button id="btn_detail_65" id_detail="65" type="button" class="btn btn-warning detail">Tampilkan Detail</button>

                                                        <button id="btn_cetak_65" notrx="000065" type="button" class="btn btn-warning cetak">Cetak</button>
                                                        
                                                        <button onClick="$('#form-alamat-65').toggleClass('hide');" type="button" class="btn btn-succcess">Alamat Pengiriman</button>

                                                        
                                                        <!-- button id="btn_finish_65" id_finish="65" is_open="false" type="button" class="btn btn-danger finish">Tutup Transaksi</button -->

                                                        

                                                        <div id="detail_histori_65" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                <label for="histori_pemesanan">Histori Pemesanan:</label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">

                                                                    <thead>

                                                                        <tr>

                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>

                                                                            <th width="20%"><div style="text-align: center;">Tanggal Jam</div></th>                                        

                                                                            <th width="70%"><div style="text-align: center;">Penjelasan</div></th>

                                                                        </tr>

                                                                    </thead>

                                                                    <tbody>

                                                                        
                                                                        
                                                                            <tr id="baris_65">

                                                                                <td align="center">1</td>

                                                                                <td align="center">13-02-2018</td>

                                                                                <td align="left">Customer melakukan checkout.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                    </tbody>                                         

                                                                </table>

                                                            </div>

                                                        </div>

                                                        <div class="table-responsive hide" id="form-alamat-65" style="margin-top: 10px;">

                                                            <div class="form-group">
                                                                <label for="histori_pemesanan">Alamat Pengiriman:</label>
																<div class="table table-xlg" id="alamat-65"  style="width:100%">
																		<p style="font-size: 20px;">Penerima : <hr></p>
																		<p style="font-size: 20px;">Alamat : plamongan indah<hr></p>
																		<p style="font-size: 20px;">Telpon : 085740324325<hr></p>
																		<p style="font-size: 20px;">Pengirim : <hr></p>
																		<p style="font-size: 20px; text-transform: uppercase;">Kurir Pengiriman : JNT</p>
																		<p style="font-size: 20px; text-transform: uppercase;">Kode Pemesanan : #000065</p>
                                                                </div>
																<button onClick="printalamat('alamat-65')" class="btn btn-success" type="button">Print Alamat Pengirman</button>
    															<button class="btn" data-clipboard-action="copy" data-clipboard-target="#alamat-65">Copy Alamat Pengirman</button>						
                                                            </div>

                                                        </div>
                                                        

                                                        <div id="detail_detail_65" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                <label for="histori_pemesanan">Detail Barang:</label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">

                                                                    <thead>

                                                                        <tr>

                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Gambar</div></th>

                                                                            <th width="40%"><div style="text-align: center;">Nama Barang</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Qty</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Harga</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Diskon</div></th>
                                                                        
                                                                            <th width="15%"><div style="text-align: center;">Subtotal</div></th>

                                                                            <th width="15%"><div style="text-align: center;">Grandtotal</div></th>

                                                                        </tr>

                                                                    </thead>

                                                                    <tbody>

                                                                                                                                                
                                                                        
                                                                            <tr id="baris_">

                                                                                <td align="center">1</td>

                                                                                <td align="center"><img src="http://laundry.id/uploads/produk/vm_vm-polos-slimfit-katun-panjang-long-shirt-kemeja-pria---dark-grey_full18.jpg" width="48px" /></td>

                                                                                <td align="left">VM Polos Slimfit Katun Panjang Long Shirt Kemeja Pria (KMJ-101)<br />Ukuran: M<br />Warna DARK GREY</td>

                                                                                <td align="center">1</td>

                                                                                <td align="center"> Rp. 0</td>
                                                                                <td align="center"> Rp. 0</td>
                                                                                <td align="right">Rp. 103,200</td>

                                                                                <td align="right">Rp. 103,200</td>

                                                                            </tr>

                                                                              
                                                                              

                                                                                                                                                    <tr id="baris_">

                                                                                <td align="right" colspan="7">Voucher</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                            <tr id="baris_">

                                                                                <td align="right" colspan="7">Ongkir</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                            <tr id="baris_">

                                                                                <td align="right" colspan="7">Total</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                        

                                                                    </tbody>                                         

                                                                </table>

                                                            </div>

                                                            <div class="form-group">

                                                                <button id_edit="65" type="button" class="btn btn-danger edit_pesanan">Edit</button>
                                                            </div>

                                                        </div>

                                                        

                                                        
                                                        
                                                        
                                                        

                                                        <!-- div id="edit_finish_65" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                

                                                                <label for=""></label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                    

                                                                    <tr>

                                                                        <td width="25%"><label for="nama_penerima" style="padding: 7px 0 0 7px;">Penerima Paket:</label></td>

                                                                        <td width="60%"><input type="text" value="" class="form-control" name="nama_penerima_65" placeholder="" /></td>

                                                                        <td width="15%">

                                                                            <div id="i_loading_finish_65" class="G-btn-animation" style="display: none;"><img src="http://laundry.id/templates/back-end/penguin/assets/img/loading.gif" /></div>

                                                                            <button id="btn_simpan_finish_65" id_finish="65" type="button" class="btn btn-danger simpan_finish">Paket Sudah Diterima</button>

                                                                        </td>

                                                                    </tr>                                                                    

                                                                </table>

                                                            </div>

                                                        </div -->

                                                    </div></td></tr>

                                                </table>

                                            </td>

                                        </tr>

                                          

                                                                        

                                        <tr id="baris_64">

                                            <!-- td align="center"><input type="checkbox" id_select="64" name="select_64" class="select" /></td -->

                                            <td align="center">17</td>

                                            <td>

                                                <table width="100%">

                                                    <!-- tr><td><b>ID</b> </td><td><b>:</b> 64</td></tr -->

                                                    <tr><td width="25%"><b>Kode Pemesanan</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> <a href="http://laundry.id/adminweb/pemesanan/list.php?_&query=000064	" ><span style="font-weight: bold;">#000064</span></a></td></tr>

                                                    <tr><td><b>Nama Pengguna</b> </td><td><b>:</b> olshophari  (hariyanto.sa94@gmail.com)</td></tr>

                                                    <tr><td><b>Tanggal Pesan</b></td><td><b>:</b> 07-02-2018 15:46:13</td></tr>

                                                    <tr><td><b>Pengiriman Kepada</b> </td><td><b>:</b> natan</td></tr>

                                                    <tr><td><b>Alamat</b></td><td><b>:</b> keputran panjunan</td></tr>

                                                    <tr><td><b>No. HP</b></td><td><b>:</b> 085755555441</td></tr>

                                                    <tr><td><b>Total Belanja</b> </td><td><b>:</b> Rp. 316,000</td></tr>                                                    

                                                    <tr><td><b>Kurir Pengiriman</b> </td><td><b>:</b> JNE</td></tr>                                                    

                                                    <tr><td><b>No. Resi</b> </td><td><b>:</b> <span id="text_no_resi_64"></span></td></tr>                                                    

                                                    <tr><td><b>Jenis Pemesanan</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;">BUKAN DROPSHIP</span></td></tr>

                                                    <tr><td><b>Nama Dropship</b> </td><td><b>:</b> <span id="text_no_resi_64"></span></td></tr>               
                                                    <tr><td><b>No.Telpon Dropship</b> </td><td><b>:</b> <span id="text_no_resi_64"></span></td></tr>                                       
                                                    <tr><td><b>Cara Pembayaran</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;">Transfer Bank</span></td></tr>

                                                    <tr><td><b>Status Pembayaran</b> </td><td><b>:</b> <span id='text_pembayaran_64' style="color: red; font-weight: bold;">BELUM LUNAS</span></td></tr>

                                                    <tr><td><b>Status Pemesanan</b> </td><td><b>:</b> <span id='text_status_64' style="font-weight: bold; color: orange;">Menunggu pembayaran Customer.</span></td></tr>

                                                    <tr><td colspan="2">

                                                    <div id="message_wrapper_64" style="margin-top: 10px; margin-bottom: 10px;">

                                                        <div id="alert_error_64" class="form-group" style="display: none;">

                                                            <div class="alert alert-danger">&nbsp;</div>

                                                        </div>

                                                        <div id="alert_success_64" class="form-group" style="display: none;">                         

                                                            <div class="alert alert-info">&nbsp;</div>

                                                        </div>                                                                

                                                    </div>

                                                    <div style="margin-top: 10px; margin-bottom: 10px;">

                                                        
                                                            <div id="i_loading_batal_64" class="G-btn-animation" style="display: none;"><img src="http://laundry.id/templates/back-end/penguin/assets/img/loading.gif" /></div>

                                                            <button id="btn_batal_64" id_batal="64" type="button" class="btn btn-danger batal_pesan">Batalkan Pesanan</button>

                                                        
                                                        <button id="btn_histori_64" id_histori="64" type="button" class="btn btn-primary histori">Lihat Status</button>

                                                        <button id="btn_detail_64" id_detail="64" type="button" class="btn btn-warning detail">Tampilkan Detail</button>

                                                        <button id="btn_cetak_64" notrx="000064" type="button" class="btn btn-warning cetak">Cetak</button>
                                                        
                                                        <button onClick="$('#form-alamat-64').toggleClass('hide');" type="button" class="btn btn-succcess">Alamat Pengiriman</button>

                                                        
                                                        <!-- button id="btn_finish_64" id_finish="64" is_open="false" type="button" class="btn btn-danger finish">Tutup Transaksi</button -->

                                                        

                                                        <div id="detail_histori_64" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                <label for="histori_pemesanan">Histori Pemesanan:</label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">

                                                                    <thead>

                                                                        <tr>

                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>

                                                                            <th width="20%"><div style="text-align: center;">Tanggal Jam</div></th>                                        

                                                                            <th width="70%"><div style="text-align: center;">Penjelasan</div></th>

                                                                        </tr>

                                                                    </thead>

                                                                    <tbody>

                                                                        
                                                                        
                                                                            <tr id="baris_64">

                                                                                <td align="center">1</td>

                                                                                <td align="center">07-02-2018</td>

                                                                                <td align="left">Customer melakukan checkout.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                    </tbody>                                         

                                                                </table>

                                                            </div>

                                                        </div>

                                                        <div class="table-responsive hide" id="form-alamat-64" style="margin-top: 10px;">

                                                            <div class="form-group">
                                                                <label for="histori_pemesanan">Alamat Pengiriman:</label>
																<div class="table table-xlg" id="alamat-64"  style="width:100%">
																		<p style="font-size: 20px;">Penerima : <hr></p>
																		<p style="font-size: 20px;">Alamat : keputran panjunan<hr></p>
																		<p style="font-size: 20px;">Telpon : 085755555441<hr></p>
																		<p style="font-size: 20px;">Pengirim : <hr></p>
																		<p style="font-size: 20px; text-transform: uppercase;">Kurir Pengiriman : JNE</p>
																		<p style="font-size: 20px; text-transform: uppercase;">Kode Pemesanan : #000064</p>
                                                                </div>
																<button onClick="printalamat('alamat-64')" class="btn btn-success" type="button">Print Alamat Pengirman</button>
    															<button class="btn" data-clipboard-action="copy" data-clipboard-target="#alamat-64">Copy Alamat Pengirman</button>						
                                                            </div>

                                                        </div>
                                                        

                                                        <div id="detail_detail_64" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                <label for="histori_pemesanan">Detail Barang:</label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">

                                                                    <thead>

                                                                        <tr>

                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Gambar</div></th>

                                                                            <th width="40%"><div style="text-align: center;">Nama Barang</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Qty</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Harga</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Diskon</div></th>
                                                                        
                                                                            <th width="15%"><div style="text-align: center;">Subtotal</div></th>

                                                                            <th width="15%"><div style="text-align: center;">Grandtotal</div></th>

                                                                        </tr>

                                                                    </thead>

                                                                    <tbody>

                                                                                                                                                
                                                                        
                                                                            <tr id="baris_">

                                                                                <td align="center">1</td>

                                                                                <td align="center"><img src="http://laundry.id/uploads/produk/raindoz_raindoz-jaket-parka-wanita-hinata-rse-060_full02_1.jpg" width="48px" /></td>

                                                                                <td align="left">HRCN JAKET SWEATER HOODIES WANITA OUTWEAR WANITA CROWN (IKH2076QI)<br />Ukuran: M</td>

                                                                                <td align="center">1</td>

                                                                                <td align="center"> Rp. 0</td>
                                                                                <td align="center"> Rp. 0</td>
                                                                                <td align="right">Rp. 289,000</td>

                                                                                <td align="right">Rp. 289,000</td>

                                                                            </tr>

                                                                              
                                                                              

                                                                                                                                                    <tr id="baris_">

                                                                                <td align="right" colspan="7">Voucher</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                            <tr id="baris_">

                                                                                <td align="right" colspan="7">Ongkir</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                            <tr id="baris_">

                                                                                <td align="right" colspan="7">Total</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                        

                                                                    </tbody>                                         

                                                                </table>

                                                            </div>

                                                            <div class="form-group">

                                                                <button id_edit="64" type="button" class="btn btn-danger edit_pesanan">Edit</button>
                                                            </div>

                                                        </div>

                                                        

                                                        
                                                        
                                                        
                                                        

                                                        <!-- div id="edit_finish_64" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                

                                                                <label for=""></label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                    

                                                                    <tr>

                                                                        <td width="25%"><label for="nama_penerima" style="padding: 7px 0 0 7px;">Penerima Paket:</label></td>

                                                                        <td width="60%"><input type="text" value="" class="form-control" name="nama_penerima_64" placeholder="" /></td>

                                                                        <td width="15%">

                                                                            <div id="i_loading_finish_64" class="G-btn-animation" style="display: none;"><img src="http://laundry.id/templates/back-end/penguin/assets/img/loading.gif" /></div>

                                                                            <button id="btn_simpan_finish_64" id_finish="64" type="button" class="btn btn-danger simpan_finish">Paket Sudah Diterima</button>

                                                                        </td>

                                                                    </tr>                                                                    

                                                                </table>

                                                            </div>

                                                        </div -->

                                                    </div></td></tr>

                                                </table>

                                            </td>

                                        </tr>

                                          

                                                                        

                                        <tr id="baris_63">

                                            <!-- td align="center"><input type="checkbox" id_select="63" name="select_63" class="select" /></td -->

                                            <td align="center">18</td>

                                            <td>

                                                <table width="100%">

                                                    <!-- tr><td><b>ID</b> </td><td><b>:</b> 63</td></tr -->

                                                    <tr><td width="25%"><b>Kode Pemesanan</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> <a href="http://laundry.id/adminweb/pemesanan/list.php?_&query=000063	" ><span style="font-weight: bold;">#000063</span></a></td></tr>

                                                    <tr><td><b>Nama Pengguna</b> </td><td><b>:</b> olshophari  (hariyanto.sa94@gmail.com)</td></tr>

                                                    <tr><td><b>Tanggal Pesan</b></td><td><b>:</b> 07-02-2018 08:25:21</td></tr>

                                                    <tr><td><b>Pengiriman Kepada</b> </td><td><b>:</b> natan</td></tr>

                                                    <tr><td><b>Alamat</b></td><td><b>:</b> keputran panjunan</td></tr>

                                                    <tr><td><b>No. HP</b></td><td><b>:</b> 085755555441</td></tr>

                                                    <tr><td><b>Total Belanja</b> </td><td><b>:</b> Rp. 66,900</td></tr>                                                    

                                                    <tr><td><b>Kurir Pengiriman</b> </td><td><b>:</b> JNE</td></tr>                                                    

                                                    <tr><td><b>No. Resi</b> </td><td><b>:</b> <span id="text_no_resi_63"></span></td></tr>                                                    

                                                    <tr><td><b>Jenis Pemesanan</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;">BUKAN DROPSHIP</span></td></tr>

                                                    <tr><td><b>Nama Dropship</b> </td><td><b>:</b> <span id="text_no_resi_63"></span></td></tr>               
                                                    <tr><td><b>No.Telpon Dropship</b> </td><td><b>:</b> <span id="text_no_resi_63"></span></td></tr>                                       
                                                    <tr><td><b>Cara Pembayaran</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;">Transfer Bank</span></td></tr>

                                                    <tr><td><b>Status Pembayaran</b> </td><td><b>:</b> <span id='text_pembayaran_63' style="color: green; font-weight: bold;">LUNAS</span></td></tr>

                                                    <tr><td><b>Status Pemesanan</b> </td><td><b>:</b> <span id='text_status_63' style="font-weight: bold; color: green;">Pesanan dalam proses.</span></td></tr>

                                                    <tr><td colspan="2">

                                                    <div id="message_wrapper_63" style="margin-top: 10px; margin-bottom: 10px;">

                                                        <div id="alert_error_63" class="form-group" style="display: none;">

                                                            <div class="alert alert-danger">&nbsp;</div>

                                                        </div>

                                                        <div id="alert_success_63" class="form-group" style="display: none;">                         

                                                            <div class="alert alert-info">&nbsp;</div>

                                                        </div>                                                                

                                                    </div>

                                                    <div style="margin-top: 10px; margin-bottom: 10px;">

                                                        
                                                            <div id="i_loading_batal_63" class="G-btn-animation" style="display: none;"><img src="http://laundry.id/templates/back-end/penguin/assets/img/loading.gif" /></div>

                                                            <button id="btn_batal_63" id_batal="63" type="button" class="btn btn-danger batal_pesan">Batalkan Pesanan</button>

                                                        
                                                        <button id="btn_histori_63" id_histori="63" type="button" class="btn btn-primary histori">Lihat Status</button>

                                                        <button id="btn_detail_63" id_detail="63" type="button" class="btn btn-warning detail">Tampilkan Detail</button>

                                                        <button id="btn_cetak_63" notrx="000063" type="button" class="btn btn-warning cetak">Cetak</button>
                                                        
                                                        <button onClick="$('#form-alamat-63').toggleClass('hide');" type="button" class="btn btn-succcess">Alamat Pengiriman</button>

                                                        <button id="btn_noresi_63" id_noresi="63" is_open="false" type="button" class="btn btn-info noresi">Proses Pengiriman</button>
                                                        <!-- button id="btn_finish_63" id_finish="63" is_open="false" type="button" class="btn btn-danger finish">Tutup Transaksi</button -->

                                                        

                                                        <div id="detail_histori_63" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                <label for="histori_pemesanan">Histori Pemesanan:</label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">

                                                                    <thead>

                                                                        <tr>

                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>

                                                                            <th width="20%"><div style="text-align: center;">Tanggal Jam</div></th>                                        

                                                                            <th width="70%"><div style="text-align: center;">Penjelasan</div></th>

                                                                        </tr>

                                                                    </thead>

                                                                    <tbody>

                                                                        
                                                                        
                                                                            <tr id="baris_63">

                                                                                <td align="center">1</td>

                                                                                <td align="center">07-02-2018</td>

                                                                                <td align="left">Customer melakukan checkout.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_63">

                                                                                <td align="center">2</td>

                                                                                <td align="center">07-02-2018</td>

                                                                                <td align="left">Customer melakukan konfirmasi pembayaran sebesar Rp 66,900.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_63">

                                                                                <td align="center">3</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menerima pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                    </tbody>                                         

                                                                </table>

                                                            </div>

                                                        </div>

                                                        <div class="table-responsive hide" id="form-alamat-63" style="margin-top: 10px;">

                                                            <div class="form-group">
                                                                <label for="histori_pemesanan">Alamat Pengiriman:</label>
																<div class="table table-xlg" id="alamat-63"  style="width:100%">
																		<p style="font-size: 20px;">Penerima : <hr></p>
																		<p style="font-size: 20px;">Alamat : keputran panjunan<hr></p>
																		<p style="font-size: 20px;">Telpon : 085755555441<hr></p>
																		<p style="font-size: 20px;">Pengirim : <hr></p>
																		<p style="font-size: 20px; text-transform: uppercase;">Kurir Pengiriman : JNE</p>
																		<p style="font-size: 20px; text-transform: uppercase;">Kode Pemesanan : #000063</p>
                                                                </div>
																<button onClick="printalamat('alamat-63')" class="btn btn-success" type="button">Print Alamat Pengirman</button>
    															<button class="btn" data-clipboard-action="copy" data-clipboard-target="#alamat-63">Copy Alamat Pengirman</button>						
                                                            </div>

                                                        </div>
                                                        

                                                        <div id="detail_detail_63" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                <label for="histori_pemesanan">Detail Barang:</label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">

                                                                    <thead>

                                                                        <tr>

                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Gambar</div></th>

                                                                            <th width="40%"><div style="text-align: center;">Nama Barang</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Qty</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Harga</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Diskon</div></th>
                                                                        
                                                                            <th width="15%"><div style="text-align: center;">Subtotal</div></th>

                                                                            <th width="15%"><div style="text-align: center;">Grandtotal</div></th>

                                                                        </tr>

                                                                    </thead>

                                                                    <tbody>

                                                                                                                                                
                                                                        
                                                                            <tr id="baris_">

                                                                                <td align="center">1</td>

                                                                                <td align="center"><img src="http://laundry.id/uploads/produk/JAM-TANGAN-FOSSIL-88932-COUPLE.jpg" width="48px" /></td>

                                                                                <td align="left">piyama anak elmo size M (k4934)<br />Warna 0</td>

                                                                                <td align="center">1</td>

                                                                                <td align="center"> Rp. 0</td>
                                                                                <td align="center"> Rp. 0</td>
                                                                                <td align="right">Rp. 39,900</td>

                                                                                <td align="right">Rp. 39,900</td>

                                                                            </tr>

                                                                              
                                                                              

                                                                                                                                                    <tr id="baris_">

                                                                                <td align="right" colspan="7">Voucher</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                            <tr id="baris_">

                                                                                <td align="right" colspan="7">Ongkir</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                            <tr id="baris_">

                                                                                <td align="right" colspan="7">Total</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                        

                                                                    </tbody>                                         

                                                                </table>

                                                            </div>

                                                            <div class="form-group">

                                                                <button id_edit="63" type="button" class="btn btn-danger edit_pesanan">Edit</button>
                                                            </div>

                                                        </div>

                                                        

                                                        
                                                        <div id="edit_no_resi_63" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">                                                                

                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                                                                                         

                                                                    <tr>

                                                                        <td width="25%"><label for="no_resi" style="padding: 7px 0 0 7px;">Status Pesanan:</label></td>

                                                                        <td colspan="2" width="70%">

                                                                            <select class="form-control" name="status_pesanan_63">

                                                                                <option value="2"  selected="selected">Pesanan Dalam Proses.</option>

                                                                                <option value="6" >Pesanan Sudah Dikirim.</option>

                                                                                <option value="5" >Pesanan Sudah Diterima.</option>

                                                                            </select>

                                                                        </td>                                                                        

                                                                    </tr>

                                                                    <tr>

                                                                        <td width="25%"><label for="no_resi" style="padding: 7px 0 0 7px;">Resi Pengiriman:</label></td>

                                                                        <td width="60%"><input type="text" value="" class="form-control" name="no_resi_63" placeholder="" /></td>

                                                                        <td width="15%">

                                                                            <div id="i_loading_noresi_63" class="G-btn-animation" style="display: none;"><img src="http://laundry.id/templates/back-end/penguin/assets/img/loading.gif" /></div>

                                                                            <button id="btn_simpan_noresi_63" id_noresi="63" type="button" class="btn btn-danger simpan_noresi">Update Status</button>

                                                                        </td>

                                                                    </tr>

                                                                </table>

                                                            </div>

                                                        </div>
                                                        
                                                        

                                                        <!-- div id="edit_finish_63" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                

                                                                <label for=""></label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                    

                                                                    <tr>

                                                                        <td width="25%"><label for="nama_penerima" style="padding: 7px 0 0 7px;">Penerima Paket:</label></td>

                                                                        <td width="60%"><input type="text" value="" class="form-control" name="nama_penerima_63" placeholder="" /></td>

                                                                        <td width="15%">

                                                                            <div id="i_loading_finish_63" class="G-btn-animation" style="display: none;"><img src="http://laundry.id/templates/back-end/penguin/assets/img/loading.gif" /></div>

                                                                            <button id="btn_simpan_finish_63" id_finish="63" type="button" class="btn btn-danger simpan_finish">Paket Sudah Diterima</button>

                                                                        </td>

                                                                    </tr>                                                                    

                                                                </table>

                                                            </div>

                                                        </div -->

                                                    </div></td></tr>

                                                </table>

                                            </td>

                                        </tr>

                                          

                                                                        

                                        <tr id="baris_62">

                                            <!-- td align="center"><input type="checkbox" id_select="62" name="select_62" class="select" /></td -->

                                            <td align="center">19</td>

                                            <td>

                                                <table width="100%">

                                                    <!-- tr><td><b>ID</b> </td><td><b>:</b> 62</td></tr -->

                                                    <tr><td width="25%"><b>Kode Pemesanan</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> <a href="http://laundry.id/adminweb/pemesanan/list.php?_&query=000062	" ><span style="font-weight: bold;">#000062</span></a></td></tr>

                                                    <tr><td><b>Nama Pengguna</b> </td><td><b>:</b> olshophari  (hariyanto.sa94@gmail.com)</td></tr>

                                                    <tr><td><b>Tanggal Pesan</b></td><td><b>:</b> 07-02-2018 08:23:08</td></tr>

                                                    <tr><td><b>Pengiriman Kepada</b> </td><td><b>:</b> natan</td></tr>

                                                    <tr><td><b>Alamat</b></td><td><b>:</b> keputran panjunan</td></tr>

                                                    <tr><td><b>No. HP</b></td><td><b>:</b> 085755555441</td></tr>

                                                    <tr><td><b>Total Belanja</b> </td><td><b>:</b> Rp. 2,100,400</td></tr>                                                    

                                                    <tr><td><b>Kurir Pengiriman</b> </td><td><b>:</b> JNE</td></tr>                                                    

                                                    <tr><td><b>No. Resi</b> </td><td><b>:</b> <span id="text_no_resi_62"></span></td></tr>                                                    

                                                    <tr><td><b>Jenis Pemesanan</b> </td><td><b>:</b> <span style="color: red; font-weight: bold;">DROPSHIP</span></td></tr>

                                                    <tr><td><b>Nama Dropship</b> </td><td><b>:</b> <span id="text_no_resi_62"></span></td></tr>               
                                                    <tr><td><b>No.Telpon Dropship</b> </td><td><b>:</b> <span id="text_no_resi_62"></span></td></tr>                                       
                                                    <tr><td><b>Cara Pembayaran</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;">Transfer Bank</span></td></tr>

                                                    <tr><td><b>Status Pembayaran</b> </td><td><b>:</b> <span id='text_pembayaran_62' style="color: red; font-weight: bold;">BELUM LUNAS</span></td></tr>

                                                    <tr><td><b>Status Pemesanan</b> </td><td><b>:</b> <span id='text_status_62' style="font-weight: bold; color: red;">Pembayaran ditolak Admin.</span></td></tr>

                                                    <tr><td colspan="2">

                                                    <div id="message_wrapper_62" style="margin-top: 10px; margin-bottom: 10px;">

                                                        <div id="alert_error_62" class="form-group" style="display: none;">

                                                            <div class="alert alert-danger">&nbsp;</div>

                                                        </div>

                                                        <div id="alert_success_62" class="form-group" style="display: none;">                         

                                                            <div class="alert alert-info">&nbsp;</div>

                                                        </div>                                                                

                                                    </div>

                                                    <div style="margin-top: 10px; margin-bottom: 10px;">

                                                        
                                                            <div id="i_loading_batal_62" class="G-btn-animation" style="display: none;"><img src="http://laundry.id/templates/back-end/penguin/assets/img/loading.gif" /></div>

                                                            <button id="btn_batal_62" id_batal="62" type="button" class="btn btn-danger batal_pesan">Batalkan Pesanan</button>

                                                        
                                                        <button id="btn_histori_62" id_histori="62" type="button" class="btn btn-primary histori">Lihat Status</button>

                                                        <button id="btn_detail_62" id_detail="62" type="button" class="btn btn-warning detail">Tampilkan Detail</button>

                                                        <button id="btn_cetak_62" notrx="000062" type="button" class="btn btn-warning cetak">Cetak</button>
                                                        
                                                        <button onClick="$('#form-alamat-62').toggleClass('hide');" type="button" class="btn btn-succcess">Alamat Pengiriman</button>

                                                        
                                                        <!-- button id="btn_finish_62" id_finish="62" is_open="false" type="button" class="btn btn-danger finish">Tutup Transaksi</button -->

                                                        

                                                        <div id="detail_histori_62" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                <label for="histori_pemesanan">Histori Pemesanan:</label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">

                                                                    <thead>

                                                                        <tr>

                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>

                                                                            <th width="20%"><div style="text-align: center;">Tanggal Jam</div></th>                                        

                                                                            <th width="70%"><div style="text-align: center;">Penjelasan</div></th>

                                                                        </tr>

                                                                    </thead>

                                                                    <tbody>

                                                                        
                                                                        
                                                                            <tr id="baris_62">

                                                                                <td align="center">1</td>

                                                                                <td align="center">07-02-2018</td>

                                                                                <td align="left">Customer melakukan checkout.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_62">

                                                                                <td align="center">2</td>

                                                                                <td align="center">07-02-2018</td>

                                                                                <td align="left">Customer melakukan konfirmasi pembayaran sebesar Rp 2,100,400.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_62">

                                                                                <td align="center">3</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menerima pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_62">

                                                                                <td align="center">4</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                    </tbody>                                         

                                                                </table>

                                                            </div>

                                                        </div>

                                                        <div class="table-responsive hide" id="form-alamat-62" style="margin-top: 10px;">

                                                            <div class="form-group">
                                                                <label for="histori_pemesanan">Alamat Pengiriman:</label>
																<div class="table table-xlg" id="alamat-62"  style="width:100%">
																		<p style="font-size: 20px;">Penerima : <hr></p>
																		<p style="font-size: 20px;">Alamat : keputran panjunan<hr></p>
																		<p style="font-size: 20px;">Telpon : 085755555441<hr></p>
																		<p style="font-size: 20px;">Pengirim : <hr></p>
																		<p style="font-size: 20px; text-transform: uppercase;">Kurir Pengiriman : JNE</p>
																		<p style="font-size: 20px; text-transform: uppercase;">Kode Pemesanan : #000062</p>
                                                                </div>
																<button onClick="printalamat('alamat-62')" class="btn btn-success" type="button">Print Alamat Pengirman</button>
    															<button class="btn" data-clipboard-action="copy" data-clipboard-target="#alamat-62">Copy Alamat Pengirman</button>						
                                                            </div>

                                                        </div>
                                                        

                                                        <div id="detail_detail_62" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                <label for="histori_pemesanan">Detail Barang:</label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">

                                                                    <thead>

                                                                        <tr>

                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Gambar</div></th>

                                                                            <th width="40%"><div style="text-align: center;">Nama Barang</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Qty</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Harga</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Diskon</div></th>
                                                                        
                                                                            <th width="15%"><div style="text-align: center;">Subtotal</div></th>

                                                                            <th width="15%"><div style="text-align: center;">Grandtotal</div></th>

                                                                        </tr>

                                                                    </thead>

                                                                    <tbody>

                                                                                                                                                
                                                                        
                                                                            <tr id="baris_">

                                                                                <td align="center">1</td>

                                                                                <td align="center"><img src="http://laundry.id/uploads/produk/7844829_5887988c-a4e9-42ff-988b-920a7a3c99ea.jpg" width="48px" /></td>

                                                                                <td align="left">Fossil Chelsey Multifunction ES3923 Gold Jam Tangan Wanita (JAM-433)<br />Ukuran: STANDART<br />Warna GOLD</td>

                                                                                <td align="center">1</td>

                                                                                <td align="center"> Rp. 0</td>
                                                                                <td align="center"> Rp. 0</td>
                                                                                <td align="right">Rp. 1,918,400</td>

                                                                                <td align="right">Rp. 1,918,400</td>

                                                                            </tr>

                                                                              
                                                                              

                                                                        
                                                                            <tr id="baris_">

                                                                                <td align="center">2</td>

                                                                                <td align="center"><img src="http://laundry.id/uploads/produk/Christian-Dior-Lady-8907-Semi-Premium-KODE-CD058-Pink.jpg" width="48px" /></td>

                                                                                <td align="left">tas mj (1919)<br />Ukuran: 20X20X20<br />Warna TEST</td>

                                                                                <td align="center">1</td>

                                                                                <td align="center"> Rp. 0</td>
                                                                                <td align="center"> Rp. 0</td>
                                                                                <td align="right">Rp. 120,000</td>

                                                                                <td align="right">Rp. 120,000</td>

                                                                            </tr>

                                                                              
                                                                              

                                                                                                                                                    <tr id="baris_">

                                                                                <td align="right" colspan="7">Voucher</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                            <tr id="baris_">

                                                                                <td align="right" colspan="7">Ongkir</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                            <tr id="baris_">

                                                                                <td align="right" colspan="7">Total</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                        

                                                                    </tbody>                                         

                                                                </table>

                                                            </div>

                                                            <div class="form-group">

                                                                <button id_edit="62" type="button" class="btn btn-danger edit_pesanan">Edit</button>
                                                            </div>

                                                        </div>

                                                        

                                                        
                                                        
                                                        
                                                        

                                                        <!-- div id="edit_finish_62" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                

                                                                <label for=""></label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                    

                                                                    <tr>

                                                                        <td width="25%"><label for="nama_penerima" style="padding: 7px 0 0 7px;">Penerima Paket:</label></td>

                                                                        <td width="60%"><input type="text" value="" class="form-control" name="nama_penerima_62" placeholder="" /></td>

                                                                        <td width="15%">

                                                                            <div id="i_loading_finish_62" class="G-btn-animation" style="display: none;"><img src="http://laundry.id/templates/back-end/penguin/assets/img/loading.gif" /></div>

                                                                            <button id="btn_simpan_finish_62" id_finish="62" type="button" class="btn btn-danger simpan_finish">Paket Sudah Diterima</button>

                                                                        </td>

                                                                    </tr>                                                                    

                                                                </table>

                                                            </div>

                                                        </div -->

                                                    </div></td></tr>

                                                </table>

                                            </td>

                                        </tr>

                                          

                                                                        

                                        <tr id="baris_61">

                                            <!-- td align="center"><input type="checkbox" id_select="61" name="select_61" class="select" /></td -->

                                            <td align="center">20</td>

                                            <td>

                                                <table width="100%">

                                                    <!-- tr><td><b>ID</b> </td><td><b>:</b> 61</td></tr -->

                                                    <tr><td width="25%"><b>Kode Pemesanan</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> <a href="http://laundry.id/adminweb/pemesanan/list.php?_&query=000061	" ><span style="font-weight: bold;">#000061</span></a></td></tr>

                                                    <tr><td><b>Nama Pengguna</b> </td><td><b>:</b> Guest ()</td></tr>

                                                    <tr><td><b>Tanggal Pesan</b></td><td><b>:</b> 06-02-2018 07:10:27</td></tr>

                                                    <tr><td><b>Pengiriman Kepada</b> </td><td><b>:</b> Wiro Sableng</td></tr>

                                                    <tr><td><b>Alamat</b></td><td><b>:</b> Gunung Gedhe</td></tr>

                                                    <tr><td><b>No. HP</b></td><td><b>:</b> 000000000000</td></tr>

                                                    <tr><td><b>Total Belanja</b> </td><td><b>:</b> Rp. 100,004,100,000</td></tr>                                                    

                                                    <tr><td><b>Kurir Pengiriman</b> </td><td><b>:</b> TIKI</td></tr>                                                    

                                                    <tr><td><b>No. Resi</b> </td><td><b>:</b> <span id="text_no_resi_61"></span></td></tr>                                                    

                                                    <tr><td><b>Jenis Pemesanan</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;">BUKAN DROPSHIP</span></td></tr>

                                                    <tr><td><b>Nama Dropship</b> </td><td><b>:</b> <span id="text_no_resi_61"></span></td></tr>               
                                                    <tr><td><b>No.Telpon Dropship</b> </td><td><b>:</b> <span id="text_no_resi_61"></span></td></tr>                                       
                                                    <tr><td><b>Cara Pembayaran</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;">Transfer Bank</span></td></tr>

                                                    <tr><td><b>Status Pembayaran</b> </td><td><b>:</b> <span id='text_pembayaran_61' style="color: red; font-weight: bold;">BELUM LUNAS</span></td></tr>

                                                    <tr><td><b>Status Pemesanan</b> </td><td><b>:</b> <span id='text_status_61' style="font-weight: bold; color: red;">Pembayaran ditolak Admin.</span></td></tr>

                                                    <tr><td colspan="2">

                                                    <div id="message_wrapper_61" style="margin-top: 10px; margin-bottom: 10px;">

                                                        <div id="alert_error_61" class="form-group" style="display: none;">

                                                            <div class="alert alert-danger">&nbsp;</div>

                                                        </div>

                                                        <div id="alert_success_61" class="form-group" style="display: none;">                         

                                                            <div class="alert alert-info">&nbsp;</div>

                                                        </div>                                                                

                                                    </div>

                                                    <div style="margin-top: 10px; margin-bottom: 10px;">

                                                        
                                                            <div id="i_loading_batal_61" class="G-btn-animation" style="display: none;"><img src="http://laundry.id/templates/back-end/penguin/assets/img/loading.gif" /></div>

                                                            <button id="btn_batal_61" id_batal="61" type="button" class="btn btn-danger batal_pesan">Batalkan Pesanan</button>

                                                        
                                                        <button id="btn_histori_61" id_histori="61" type="button" class="btn btn-primary histori">Lihat Status</button>

                                                        <button id="btn_detail_61" id_detail="61" type="button" class="btn btn-warning detail">Tampilkan Detail</button>

                                                        <button id="btn_cetak_61" notrx="000061" type="button" class="btn btn-warning cetak">Cetak</button>
                                                        
                                                        <button onClick="$('#form-alamat-61').toggleClass('hide');" type="button" class="btn btn-succcess">Alamat Pengiriman</button>

                                                        
                                                        <!-- button id="btn_finish_61" id_finish="61" is_open="false" type="button" class="btn btn-danger finish">Tutup Transaksi</button -->

                                                        

                                                        <div id="detail_histori_61" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                <label for="histori_pemesanan">Histori Pemesanan:</label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">

                                                                    <thead>

                                                                        <tr>

                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>

                                                                            <th width="20%"><div style="text-align: center;">Tanggal Jam</div></th>                                        

                                                                            <th width="70%"><div style="text-align: center;">Penjelasan</div></th>

                                                                        </tr>

                                                                    </thead>

                                                                    <tbody>

                                                                        
                                                                        
                                                                            <tr id="baris_61">

                                                                                <td align="center">1</td>

                                                                                <td align="center">06-02-2018</td>

                                                                                <td align="left">Customer melakukan checkout.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_61">

                                                                                <td align="center">2</td>

                                                                                <td align="center">06-02-2018</td>

                                                                                <td align="left">Customer melakukan konfirmasi pembayaran sebesar Rp 2,147,483,647.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_61">

                                                                                <td align="center">3</td>

                                                                                <td align="center">06-02-2018</td>

                                                                                <td align="left">Admin menerima pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                            <tr id="baris_61">

                                                                                <td align="center">4</td>

                                                                                <td align="center">21-08-2018</td>

                                                                                <td align="left">Admin menolak pembayaran customer.</td>

                                                                            </tr>

                                                                              

                                                                        
                                                                    </tbody>                                         

                                                                </table>

                                                            </div>

                                                        </div>

                                                        <div class="table-responsive hide" id="form-alamat-61" style="margin-top: 10px;">

                                                            <div class="form-group">
                                                                <label for="histori_pemesanan">Alamat Pengiriman:</label>
																<div class="table table-xlg" id="alamat-61"  style="width:100%">
																		<p style="font-size: 20px;">Penerima : <hr></p>
																		<p style="font-size: 20px;">Alamat : Gunung Gedhe<hr></p>
																		<p style="font-size: 20px;">Telpon : 000000000000<hr></p>
																		<p style="font-size: 20px;">Pengirim : <hr></p>
																		<p style="font-size: 20px; text-transform: uppercase;">Kurir Pengiriman : TIKI</p>
																		<p style="font-size: 20px; text-transform: uppercase;">Kode Pemesanan : #000061</p>
                                                                </div>
																<button onClick="printalamat('alamat-61')" class="btn btn-success" type="button">Print Alamat Pengirman</button>
    															<button class="btn" data-clipboard-action="copy" data-clipboard-target="#alamat-61">Copy Alamat Pengirman</button>						
                                                            </div>

                                                        </div>
                                                        

                                                        <div id="detail_detail_61" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                <label for="histori_pemesanan">Detail Barang:</label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">

                                                                    <thead>

                                                                        <tr>

                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Gambar</div></th>

                                                                            <th width="40%"><div style="text-align: center;">Nama Barang</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Qty</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Harga</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Diskon</div></th>
                                                                        
                                                                            <th width="15%"><div style="text-align: center;">Subtotal</div></th>

                                                                            <th width="15%"><div style="text-align: center;">Grandtotal</div></th>

                                                                        </tr>

                                                                    </thead>

                                                                    <tbody>

                                                                                                                                                
                                                                        
                                                                            <tr id="baris_">

                                                                                <td align="center">1</td>

                                                                                <td align="center"><img src="http://laundry.id/uploads/produk/papercut-fashion_papercut-fashion-c38-kanaya-5606-blouse---navy_full03_1.jpg" width="48px" /></td>

                                                                                <td align="left">Kapak Maut Naga Geni 212 (212)<br />Ukuran: L<br />Warna SILVER</td>

                                                                                <td align="center">100</td>

                                                                                <td align="center"> Rp. 0</td>
                                                                                <td align="center"> Rp. 0</td>
                                                                                <td align="right">Rp. 1,000,000,000</td>

                                                                                <td align="right">Rp. 100,000,000,000</td>

                                                                            </tr>

                                                                              
                                                                              

                                                                                                                                                    <tr id="baris_">

                                                                                <td align="right" colspan="7">Voucher</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                            <tr id="baris_">

                                                                                <td align="right" colspan="7">Ongkir</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                            <tr id="baris_">

                                                                                <td align="right" colspan="7">Total</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                        

                                                                    </tbody>                                         

                                                                </table>

                                                            </div>

                                                            <div class="form-group">

                                                                <button id_edit="61" type="button" class="btn btn-danger edit_pesanan">Edit</button>
                                                            </div>

                                                        </div>

                                                        

                                                        
                                                        
                                                        
                                                        

                                                        <!-- div id="edit_finish_61" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                

                                                                <label for=""></label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                    

                                                                    <tr>

                                                                        <td width="25%"><label for="nama_penerima" style="padding: 7px 0 0 7px;">Penerima Paket:</label></td>

                                                                        <td width="60%"><input type="text" value="" class="form-control" name="nama_penerima_61" placeholder="" /></td>

                                                                        <td width="15%">

                                                                            <div id="i_loading_finish_61" class="G-btn-animation" style="display: none;"><img src="http://laundry.id/templates/back-end/penguin/assets/img/loading.gif" /></div>

                                                                            <button id="btn_simpan_finish_61" id_finish="61" type="button" class="btn btn-danger simpan_finish">Paket Sudah Diterima</button>

                                                                        </td>

                                                                    </tr>                                                                    

                                                                </table>

                                                            </div>

                                                        </div -->

                                                    </div></td></tr>

                                                </table>

                                            </td>

                                        </tr>

                                          

                                    
                                </tbody>

                                
                                <tfoot><tr><th colspan="3">

                                    <div style="text-align: center;">

                                        
                                        
                                        
                                            
                                                <span class="btn btn-info">1</span>                                

                                            
                                                                            

                                        
                                            
                                                <a class="btn btn-default" href="list.php?page=2">2</a>

                                            
                                                                            

                                        
                                            
                                                <a class="btn btn-default" href="list.php?page=3">3</a>

                                            
                                                                            

                                        
                                            
                                                <a class="btn btn-default" href="list.php?page=4">4</a>

                                            
                                                                            

                                        
                                                                        

                                            <a class="btn btn-default" href="list.php?page=2">Next &rarr;</a>

                                                                        

                                    </div>  

                            </th></tr></tfoot>

                            
								</table>
							</div>
						</div>
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
									<img src="assets/images/faces/face12.png" alt="user">
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
										<a href="assets/images/demo/pic7.jpg" class="venobox"><img src="assets/images/demo/pic7.jpg" alt=""/></a>
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
								<div><span class="chat-avatar"><img src="assets/images/faces/face1.png" alt="Avatar"></span><span class="chat-u-info">Jane Elliott<cite>Li Europan lingues es...</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
							<li>
								<div><span class="chat-avatar"><img src="assets/images/faces/face2.png" alt="Avatar"></span><span class="chat-u-info">Florence Douglas<cite>Busy</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
							<li class="chat-u-online">
								<div><span class="chat-avatar"><img src="assets/images/faces/face3.png" alt="Avatar"></span><span class="chat-u-info">Jacqueline Howell<cite>Available</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
							<li class="chat-u-online">
								<div><span class="chat-avatar"><img src="assets/images/faces/face4.png" alt="Avatar"></span><span class="chat-u-info">Eugine Turner<cite>Occidental in fact...</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
							<li class="chat-u-busy">
								<div><span class="chat-avatar"><img src="assets/images/faces/face5.png" alt="Avatar"></span><span class="chat-u-info">Andrew Brewer<cite>Busy</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
							<li class="chat-u-away">
								<div><span class="chat-avatar"><img src="assets/images/faces/face6.png" alt="Avatar"></span><span class="chat-u-info">Jonaly Smith<cite>Available</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
							<li class="chat-u-online">
								<div><span class="chat-avatar"><img src="assets/images/faces/face7.png" alt="Avatar"></span><span class="chat-u-info">Ann Porter<cite>Available</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
							<li class="chat-u-away">
								<div><span class="chat-avatar"><img src="assets/images/faces/face8.png" alt="Avatar"></span><span class="chat-u-info">John Deo<cite>Do not disturb</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
							<li>
								<div><span class="chat-avatar"><img src="assets/images/faces/face9.png" alt="Avatar"></span><span class="chat-u-info">Marilyn Romero<cite>On refusa continuar payar...</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
							<li>
								<div><span class="chat-avatar"><img src="assets/images/faces/face10.png" alt="Avatar"></span><span class="chat-u-info">Carol Gibson<cite>Gone for a weekend</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
							<li>
								<div><span class="chat-avatar"><img src="assets/images/faces/face11.png" alt="Avatar"></span><span class="chat-u-info">Scott Ruiz<cite>At solmen va esser...</cite></span>
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

--><a id="scrollTop" href="index1.htm#top"><i class="icon-arrow-up12"></i></a>	

<!-- Global scripts -->
<script src="http://laundry.id/templates/back-end/penguin/js/jquery.js"></script>	
<script src="http://laundry.id/templates/back-end/penguin/js/bootstrap.js"></script>
<script src="http://laundry.id/templates/back-end/penguin/js/jquery.ui.js"></script>
<script src="http://laundry.id/templates/back-end/penguin/assets/js/jquery-printme.js"></script>
<script src="http://laundry.id/templates/back-end/penguin/assets/js/clipboard.min.js"></script>
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
    <script type="text/javascript">

		function printalamat(id){
			$('#'+id).printMe();
		}
        $(function () {

            var delete_selected = "";

//            $('.tanggal').datepick({ dateFormat: 'dd-mm-yyyy' });

            

            $( ".batal_pesan" ).click(function() {

                var id = this.getAttribute('id_batal');

                prosesBatalPesanan(id);                

            });

               

            $( ".histori" ).click(function() {

                var id = this.getAttribute('id_histori');

                var text = $('#btn_histori_'+id).text();

                if(text=='Sembunyikan Status') {

                    $('#detail_histori_'+id).hide('slow');

                    $('#btn_histori_'+id).html('Lihat Status');

                } else                

                if(text=='Lihat Status') {

                    $('#detail_histori_'+id).show('slow');

                    $('#btn_histori_'+id).html('Sembunyikan Status');

                    

                    $("body, html").animate({ 

                        scrollTop: $('#detail_histori_'+id).offset().top 

                    }, 600);

                }

            });

            

            $( ".detail" ).click(function() {

                var id = this.getAttribute('id_detail');

                var text = $('#btn_detail_'+id).text();

                if(text=='Sembunyikan Detail') {

                    $('#detail_detail_'+id).hide('slow');

                    $('#btn_detail_'+id).html('Tampilkan Detail');

                } else                

                if(text=='Tampilkan Detail') {

                    $('#detail_detail_'+id).show('slow');

                    $('#btn_detail_'+id).html('Sembunyikan Detail');

                    

                    $("body, html").animate({ 

                        scrollTop: $('#btn_detail_'+id).offset().top 

                    }, 600);

                }

            });

            

            $( ".cetak" ).click(function() {

                var notrx = this.getAttribute('notrx');

                var url = 'cetak.php?notrx='+notrx;

                window.open(url, '_blank');

            });

            

            $( ".noresi" ).click(function() {

                var id = this.getAttribute('id_noresi');

                var is_open = this.getAttribute('is_open');

                

                if(is_open=='false') {

                    $('#edit_no_resi_'+id).show('slow');

                    $('#btn_noresi_'+id).attr('is_open', 'true');                    

                } else                

                if(is_open=='true') {

                    $('#edit_no_resi_'+id).hide('slow');

                    $('#btn_noresi_'+id).attr('is_open', 'false');

                    

                    $("body, html").animate({ 

                        scrollTop: $('#btn_noresi_'+id).offset().top 

                    }, 600);

                }

            });

            

            /*$( ".finish" ).click(function() {

                var id = this.getAttribute('id_finish');

                var is_open = this.getAttribute('is_open');

                $('[name=nama_penerima_'+id+']').val('');        

                if(is_open=='false') {

                    $('#edit_finish_'+id).show('slow');

                    $('#btn_finish_'+id).attr('is_open', 'true');                    

                } else                

                if(is_open=='true') {

                    $('#edit_finish_'+id).hide('slow');

                    $('#btn_finish_'+id).attr('is_open', 'false');

                    

                    $("body, html").animate({ 

                        scrollTop: $('#btn_finish_'+id).offset().top 

                    }, 600);

                }

            });*/

            

            $( ".edit_pesanan" ).click(function() {

                var id = this.getAttribute('id_edit');

                window.location = 'http://laundry.id/adminweb/pemesanan/edit.php?id='+id;

                

            });

            

            $( ".simpan_noresi" ).click(function() {

                var id = this.getAttribute('id_noresi');

                $('#i_loading_noresi_'+id).show();

                $('#btn_simpan_noresi_'+id).hide();

                                                                                

                $.ajax({

                    url: 'http://laundry.id/adminweb/pemesanan/updateResi.php',

                    type: 'POST',

                    dataType: 'json',

                    data: { id: id, no_resi: $('[name=no_resi_'+id+']').val(), status: $('[name=status_pesanan_'+id+']').val()},

                    success: function(data, textStatus, jqXHR) {

                        $('#i_loading_noresi_'+id).hide();

                        $('#btn_simpan_noresi_'+id).show();

                        if(data['success']) {                

                            $('#text_no_resi_'+id).text($('[name=no_resi_'+id+']').val());

                            

                            var status_pesanan = $('[name=status_pesanan_'+id+']').val();

                            $('#text_status_'+id).text((status_pesanan==2 || status_pesanan==7)?"Pesanan Dalam Proses.":(status_pesanan==5?'Pesanan sudah diterima.':((status_pesanan==6 || status_pesanan==8)?'Pesanan sudah dikirim.':'')));

                            $('#text_status_'+id).attr('style', 'color: green; font-weight: bold;');

                            

                            

                            $('#text_pembayaran_'+id).text((status_pesanan==2 || status_pesanan==6 || status_pesanan==5)?"LUNAS":'BELUM LUNAS');

                            $('#text_pembayaran_'+id).attr('style', 'color: '+((status_pesanan==2 || status_pesanan==6 || status_pesanan==5)?"green":'red')+'; font-weight: bold;');

                            

                            $('#edit_no_resi_'+id).hide('slow');

                            $('#btn_noresi_'+id).attr('is_open', 'false');

                            

                        } else {                            

                            setRowMessage('error', data['message'], id);

                        }

                    },

                    error: function(jqXHR, textStatus, errorThrown) {

                        $('#i_loading_noresi_'+id).hide();

                        $('#btn_simpan_noresi_'+id).show();

                        setRowMessage('error', 'Edit no. resi gagal.', id);

                    }

                });

            });

            

            $( ".simpan_finish" ).click(function() {

                var id = this.getAttribute('id_finish');

                $('#i_loading_finish_'+id).show();

                $('#btn_simpan_finish_'+id).hide();

                                                                                

                $.ajax({

                    url: 'http://laundry.id/adminweb/pemesanan/updateTutup.php',

                    type: 'POST',

                    dataType: 'json',

                    data: { id: id, nama_penerima: $('[name=nama_penerima_'+id+']').val()},

                    success: function(data, textStatus, jqXHR) {

                        $('#i_loading_finish_'+id).hide();

                        $('#btn_simpan_finish_'+id).show();

                        if(data['success']) {                

                            $('[name=nama_penerima_'+id+']').val('');

                            $('#edit_nama_penerima_'+id).hide('slow');

                            $('#btn_finish_'+id).attr('is_open', 'false'); 

                        } else {                            

                            setRowMessage('error', data['message'], id);

                        }

                    },

                    error: function(jqXHR, textStatus, errorThrown) {

                        $('#i_loading_finish_'+id).hide();

                        $('#btn_simpan_finish_'+id).show();

                        setRowMessage('error', 'Edit no. resi gagal.', id);

                    }

                });

            });

            

            $( "#btn_cari" ).click(function() {

                var tanggal_dari = $( '[name=tanggal_dari]' ).val();

                var tanggal_sampai = $( '[name=tanggal_sampai]' ).val();

                var jenis = $( '[name=jenis]' ).val();

                var status = $( '[name=status]' ).val();

                var query = $( "#query" ).val();

                

                window.location='list.php?_'+

                    (tanggal_dari.length>0?'&tanggal_dari='+tanggal_dari:'')+

                    (tanggal_sampai.length>0?'&tanggal_sampai='+tanggal_sampai:'')+

                    (jenis!='0'?'&jenis='+jenis:'')+

                    (status!='0'?'&status='+status:'')+

                    (query.length>0?'&query='+query:'');

            });



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



            function setRowMessage(type, message, id) {

                $('#alert_'+type+'_'+id+' .alert').text(message);

                $('#alert_'+type+'_'+id).show('slow');

                setTimeout(function() {

                    $('#alert_'+type+'_'+id).hide('slow');

                }, 5000);

                $("body, html").animate({ 

                    scrollTop: $('#message_wrapper_'+id).offset().top-100

                }, 600);

            }

            
            function prosesBatalPesanan(id) {

                $('<div></div>').appendTo('body')

                .html('<div>Yakin ingin membatalkan pesanan yang dipilih?</div>')

                .dialog({

                    modal: true,

                    title: 'Konfirmasi Pembatalan',

                    zIndex: 10000,

                    autoOpen: true,

                    width: 'auto',

                    resizable: false,

                    buttons: {

                        Yes: function () {

                            $('#i_loading_batal_'+id).show();

                            $('#btn_batal_'+id).hide();

                            $.ajax({

                                url: 'cancelOrder.php',

                                type: 'POST',

                                dataType: 'json',

                                data: { id: id },

                                success: function(data, textStatus, jqXHR) {

                                    if(data['success']) {

                                        setRowMessage('success', data['message'], id);

                                        $('#btn_batal_'+id).hide();

                                        $('#i_loading_batal_'+id).hide();

                                        var status_pesanan = $('[name=status_pesanan_'+id+']').val();

                                        $('#text_status_'+id).text("Pemesanan dibatalakan oleh Admin.");

                                        $('#text_status_'+id).attr('style', 'color: red; font-weight: bold;');



                                    } else {

                                        setRowMessage('error', data['message'], id);

                                    }

                                },

                                error: function(jqXHR, textStatus, errorThrown) {

                                    setRowMessage('error', 'Terjadi kesalahan system.', id);

                                }

                            });                                

                            $(this).dialog("close");

                        },

                        No: function () {

                            //doFunctionForNo();

                            $(this).dialog("close");

                        }

                    },

                    close: function (event, ui) {

                        $(this).remove();

                    }

                });                

            }

            

                    

             

        });

    </script>
    <script>
    var clipboard = new Clipboard('.btn');

    clipboard.on('success', function(e) {
        console.log(e);
    });

    clipboard.on('error', function(e) {
        console.log(e);
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
