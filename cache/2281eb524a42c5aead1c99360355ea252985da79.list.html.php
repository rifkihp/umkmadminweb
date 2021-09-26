<?php /*%%SmartyHeaderCode:8478613645bd6cb596cc324-07118571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2281eb524a42c5aead1c99360355ea252985da79' => 
    array (
      0 => '../../templates/back-end/penguin/customer/list.html',
      1 => 1548664488,
      2 => 'file',
    ),
    '19b01e268ee2de01c3d1e0dee5e3489fe757f2cd' => 
    array (
      0 => '/home/u5183746/public_html/laundry.id/templates/back-end/penguin/includes/head.html',
      1 => 1544656163,
      2 => 'file',
    ),
    'f785f3b72631f470c0625ef892c96f11cc2ec974' => 
    array (
      0 => '/home/u5183746/public_html/laundry.id/templates/back-end/penguin/includes/sidebar.html',
      1 => 1544655944,
      2 => 'file',
    ),
    '159c8283a96384917a8b183f0f224b53a8e5c184' => 
    array (
      0 => '/home/u5183746/public_html/laundry.id/templates/back-end/penguin/includes/footer.html',
      1 => 1544657450,
      2 => 'file',
    ),
    '03756350d2402d879b23738023b6f6db05024476' => 
    array (
      0 => '/home/u5183746/public_html/laundry.id/templates/back-end/penguin/includes/footer_js.html',
      1 => 1538456120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8478613645bd6cb596cc324-07118571',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d6881bdf1f605_29081004',
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d6881bdf1f605_29081004')) {function content_5d6881bdf1f605_29081004($_smarty_tpl) {?><!doctype html>
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
                                <span id="total_notif_konfirmasi_bayar" class="bubble" style="display: none">0</span>
                                <span style="color: #ffffff;">Konfirmasi Bayar </span></a>
                            </li>
                        
                                                    <li class="dropdown-toggle hidden-xs" style="border-left: 1px solid #ffffff;">
                                <a href="http://laundry.id/adminweb/pesanandalamproses/pesananperludikirim/" class="dropdown-toggle" style="width: 100%; padding-left: 10px; padding-right: 30px;"><i class="icon-box"></i>
                                <span id="total_notif_perlu_kemas" class="bubble">20</span>
                                <span style="color: #ffffff">Perlu Kemas </span></a>
                            </li>
                        
                                                    <li class="dropdown-toggle hidden-xs" style="border-left: 1px solid #ffffff;">
                                <a href="http://laundry.id/adminweb/customer/" class="dropdown-toggle" style="width: 100%; padding-left: 10px; padding-right: 30px;"><i class="icon-users4"></i>
                                <span id="total_notif_pelanggan_baru" class="bubble">112</span>
                                <span style="color: #ffffff;">Pelanggan Baru</span></a>
                            </li>
                        
                                                    <li class="dropdown-toggle hidden-xs" style="border-left: 1px solid #ffffff;">
                                <a href="http://laundry.id/adminweb/message_in/" class="dropdown-toggle" style="width: 100%; padding-left: 10px; padding-right: 30px;"><i class="icon-envelope"></i>
                                <span id="total_notif_pesan_baru" class="bubble">4</span>
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
                    <img src="http://laundry.id/templates/back-end/penguin/assets/images/faces/face1.png" alt="admin" class="img-circle" />
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
                            <a class="acc-parent active" href="#"><i class="icon-book"></i> PPOB <span class="fa arrow"></span></a>
                                                            <ul>
                                                                    <li>
                                        <a href="http://laundry.id/adminweb/ppob_produk/"><i class="fa fa-archive"></i> Produk</a>
                                    </li>
                                                                </ul>
                                                    </li>
                                            <li class="active acc-parent-li">
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
                                                                    <li>
                                        <a href="http://laundry.id/adminweb/laporan_jual_ppob/"><i class="fa fa-foursquare"></i> Penjualan PPOB</a>
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
						<i class="icon-table position-left"></i> Customer
					</div>
					<ul class="breadcrumb">
						<li><a href="http://laundry.id/adminweb">Beranda</a></li>
						<li><a href="http://laundry.id/adminweb/dashboard/">Customer</a></li>
						<li class="active">List of Customer</li>
					</ul>					
				</div>
			</div>		
			<!--/Page Header-->
		
			<div class="container-fluid page-content">
			
				<div class="panel panel-flat">

					<div class="panel-body no-padding-bottom">
						<div class="form-group">
															<div id='btn_aktif' class="btn btn-success disabled">Aktif</div>
								<div id='btn_non_aktif' class="btn btn-danger disabled">Non Aktif</div>
														<div id='btn_add' class="btn btn-primary">Baru</div>							<div id='btn_edit' class="btn btn-success disabled">Edit</div>							<div id='btn_delete' class="btn btn-danger disabled">Hapus</div>						</div>
						<div class="form-group">
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
						<table class="table table-togglable table-hover">
                                <thead>
                                    <tr>
                                        <th width="1%" class="no-sort"><input type="checkbox" id="select_all"  /></th>
                                        <th data-toggle="false"  style="width: 1% !important;"><div style="text-align: center;">No.</div></th>
                                        <th data-toggle="false" width="10%"><div style="text-align: left;">Nama</div></th>
                                        <th data-hide="phone" width="15%"><div style="text-align: center;">Email</div></th>
                                        <th data-hide="phone" width="10%"><div style="text-align: center;">Username</div></th>
                                        <th data-hide="phone" width="10%"><div style="text-align: center;">Alamat</div></th>
                                        <th data-hide="phone" width="10%"><div style="text-align: center;">Referensi</div></th>
                                        <th data-toggle="false" width="5%"><div style="text-align: right;">Saldo</div></th>
                                        <th data-toggle="false" width="5%"><div style="text-align: center;">Status</div></th>
                                        <th data-hide="phone" width="5%"><div style="text-align: center;">Aksi</div></th>
                                    </tr>

                                </thead>
									<tbody>

                                    
                                                                        

                                        <tr id="baris_131">

                                            <td align="center"><input type="checkbox" id_select="131" name="select_131" class="select" /></td>

                                            <td align="center">1</td>

                                            <td align="left"><a href="http://laundry.id/adminweb/customer/edit.php?id=131">Agus leo</a></td>

                                            <td align="left">agusleohandali@gmail.com</td>
                                            
                                            <td align="left">Agus leo</td>

                                            <td align="left"><br />No. HP: 085273899678</td>

                                            <td align="left"></td>

                                            <td align="right">Rp. 2.150</td>
                                            
                                            <td align="center"><span style="font-weight: bold; color: green;">Aktif</span></td>                                                                                  

                                            <td><div style="text-align: center;  white-space: nowrap;">

                                                <a href="http://laundry.id/adminweb/customer/detailpesanan.php?id=131" class="btn btn-success">Detail Pesanan</a>

                                            </div></td>

                                        </tr>

                                                

                                          

                                                                        

                                        <tr id="baris_127">

                                            <td align="center"><input type="checkbox" id_select="127" name="select_127" class="select" /></td>

                                            <td align="center">2</td>

                                            <td align="left"><a href="http://laundry.id/adminweb/customer/edit.php?id=127">Kedai REI</a></td>

                                            <td align="left">srimaharani0985@gmail.com</td>
                                            
                                            <td align="left">rani_kedairei</td>

                                            <td align="left"><br />No. HP: 082182108995</td>

                                            <td align="left">laundry</td>

                                            <td align="right">Rp. 49.000</td>
                                            
                                            <td align="center"><span style="font-weight: bold; color: green;">Aktif</span></td>                                                                                  

                                            <td><div style="text-align: center;  white-space: nowrap;">

                                                <a href="http://laundry.id/adminweb/customer/detailpesanan.php?id=127" class="btn btn-success">Detail Pesanan</a>

                                            </div></td>

                                        </tr>

                                                

                                          

                                                                        

                                        <tr id="baris_126">

                                            <td align="center"><input type="checkbox" id_select="126" name="select_126" class="select" /></td>

                                            <td align="center">3</td>

                                            <td align="left"><a href="http://laundry.id/adminweb/customer/edit.php?id=126">sanjung sutria</a></td>

                                            <td align="left">sanjunggip@gmail.com</td>
                                            
                                            <td align="left">sanjung</td>

                                            <td align="left"><br />No. HP: 081272911030</td>

                                            <td align="left"></td>

                                            <td align="right">Rp. 18.240</td>
                                            
                                            <td align="center"><span style="font-weight: bold; color: green;">Aktif</span></td>                                                                                  

                                            <td><div style="text-align: center;  white-space: nowrap;">

                                                <a href="http://laundry.id/adminweb/customer/detailpesanan.php?id=126" class="btn btn-success">Detail Pesanan</a>

                                            </div></td>

                                        </tr>

                                                

                                          

                                                                        

                                        <tr id="baris_125">

                                            <td align="center"><input type="checkbox" id_select="125" name="select_125" class="select" /></td>

                                            <td align="center">4</td>

                                            <td align="left"><a href="http://laundry.id/adminweb/customer/edit.php?id=125">desti anggraini</a></td>

                                            <td align="left">judesdesti@gmail.com</td>
                                            
                                            <td align="left">destijudes</td>

                                            <td align="left"><br />No. HP: 083163781930</td>

                                            <td align="left">Jully laundry</td>

                                            <td align="right">Rp. 2.500</td>
                                            
                                            <td align="center"><span style="font-weight: bold; color: green;">Aktif</span></td>                                                                                  

                                            <td><div style="text-align: center;  white-space: nowrap;">

                                                <a href="http://laundry.id/adminweb/customer/detailpesanan.php?id=125" class="btn btn-success">Detail Pesanan</a>

                                            </div></td>

                                        </tr>

                                                

                                          

                                                                        

                                        <tr id="baris_123">

                                            <td align="center"><input type="checkbox" id_select="123" name="select_123" class="select" /></td>

                                            <td align="center">5</td>

                                            <td align="left"><a href="http://laundry.id/adminweb/customer/edit.php?id=123">faisal</a></td>

                                            <td align="left">faisaltagana653@gmail.com</td>
                                            
                                            <td align="left">faisal panca</td>

                                            <td align="left"><br />No. HP: 08994452011</td>

                                            <td align="left">Jully laundry</td>

                                            <td align="right">Rp. 5.062</td>
                                            
                                            <td align="center"><span style="font-weight: bold; color: green;">Aktif</span></td>                                                                                  

                                            <td><div style="text-align: center;  white-space: nowrap;">

                                                <a href="http://laundry.id/adminweb/customer/detailpesanan.php?id=123" class="btn btn-success">Detail Pesanan</a>

                                            </div></td>

                                        </tr>

                                                

                                          

                                                                        

                                        <tr id="baris_122">

                                            <td align="center"><input type="checkbox" id_select="122" name="select_122" class="select" /></td>

                                            <td align="center">6</td>

                                            <td align="left"><a href="http://laundry.id/adminweb/customer/edit.php?id=122">Rian Nursaputra</a></td>

                                            <td align="left">perdhaki123@gmail.com</td>
                                            
                                            <td align="left">Rian</td>

                                            <td align="left"><br />No. HP: 082281770147</td>

                                            <td align="left">Jully laundry</td>

                                            <td align="right">Rp. 518</td>
                                            
                                            <td align="center"><span style="font-weight: bold; color: green;">Aktif</span></td>                                                                                  

                                            <td><div style="text-align: center;  white-space: nowrap;">

                                                <a href="http://laundry.id/adminweb/customer/detailpesanan.php?id=122" class="btn btn-success">Detail Pesanan</a>

                                            </div></td>

                                        </tr>

                                                

                                          

                                                                        

                                        <tr id="baris_121">

                                            <td align="center"><input type="checkbox" id_select="121" name="select_121" class="select" /></td>

                                            <td align="center">7</td>

                                            <td align="left"><a href="http://laundry.id/adminweb/customer/edit.php?id=121">RM Ali Ahtor</a></td>

                                            <td align="left">rm.aliahtor@gmail.com</td>
                                            
                                            <td align="left">RMAli</td>

                                            <td align="left"><br />No. HP: 081927661710</td>

                                            <td align="left"></td>

                                            <td align="right">Rp. 2.100</td>
                                            
                                            <td align="center"><span style="font-weight: bold; color: green;">Aktif</span></td>                                                                                  

                                            <td><div style="text-align: center;  white-space: nowrap;">

                                                <a href="http://laundry.id/adminweb/customer/detailpesanan.php?id=121" class="btn btn-success">Detail Pesanan</a>

                                            </div></td>

                                        </tr>

                                                

                                          

                                                                        

                                        <tr id="baris_119">

                                            <td align="center"><input type="checkbox" id_select="119" name="select_119" class="select" /></td>

                                            <td align="center">8</td>

                                            <td align="left"><a href="http://laundry.id/adminweb/customer/edit.php?id=119">212 MART Plaju</a></td>

                                            <td align="left">martplajumart@gmail.com</td>
                                            
                                            <td align="left">212 Plaju</td>

                                            <td align="left"><br />No. HP: 081273404658</td>

                                            <td align="left"></td>

                                            <td align="right">Rp. 0</td>
                                            
                                            <td align="center"><span style="font-weight: bold; color: green;">Aktif</span></td>                                                                                  

                                            <td><div style="text-align: center;  white-space: nowrap;">

                                                <a href="http://laundry.id/adminweb/customer/detailpesanan.php?id=119" class="btn btn-success">Detail Pesanan</a>

                                            </div></td>

                                        </tr>

                                                

                                          

                                                                        

                                        <tr id="baris_118">

                                            <td align="center"><input type="checkbox" id_select="118" name="select_118" class="select" /></td>

                                            <td align="center">9</td>

                                            <td align="left"><a href="http://laundry.id/adminweb/customer/edit.php?id=118">Marisa Icha</a></td>

                                            <td align="left">risaca@rocketmail.com</td>
                                            
                                            <td align="left">payment</td>

                                            <td align="left"><br />No. HP: 081370700182</td>

                                            <td align="left">laundry</td>

                                            <td align="right">Rp. 950</td>
                                            
                                            <td align="center"><span style="font-weight: bold; color: green;">Aktif</span></td>                                                                                  

                                            <td><div style="text-align: center;  white-space: nowrap;">

                                                <a href="http://laundry.id/adminweb/customer/detailpesanan.php?id=118" class="btn btn-success">Detail Pesanan</a>

                                            </div></td>

                                        </tr>

                                                

                                          

                                                                        

                                        <tr id="baris_117">

                                            <td align="center"><input type="checkbox" id_select="117" name="select_117" class="select" /></td>

                                            <td align="center">10</td>

                                            <td align="left"><a href="http://laundry.id/adminweb/customer/edit.php?id=117">Marisa Payment</a></td>

                                            <td align="left">marisaicha848@gmail.com</td>
                                            
                                            <td align="left">marisapayment</td>

                                            <td align="left"><br />No. HP: 083178097106</td>

                                            <td align="left"></td>

                                            <td align="right">Rp. 94.101</td>
                                            
                                            <td align="center"><span style="font-weight: bold; color: green;">Aktif</span></td>                                                                                  

                                            <td><div style="text-align: center;  white-space: nowrap;">

                                                <a href="http://laundry.id/adminweb/customer/detailpesanan.php?id=117" class="btn btn-success">Detail Pesanan</a>

                                            </div></td>

                                        </tr>

                                                

                                          

                                                                        

                                        <tr id="baris_112">

                                            <td align="center"><input type="checkbox" id_select="112" name="select_112" class="select" /></td>

                                            <td align="center">11</td>

                                            <td align="left"><a href="http://laundry.id/adminweb/customer/edit.php?id=112">Muhajir Santoso</a></td>

                                            <td align="left">muhajirsantoso11@gmail.com</td>
                                            
                                            <td align="left">irzara</td>

                                            <td align="left"><br />No. HP: 081373593030</td>

                                            <td align="left"></td>

                                            <td align="right">Rp. 1.099</td>
                                            
                                            <td align="center"><span style="font-weight: bold; color: green;">Aktif</span></td>                                                                                  

                                            <td><div style="text-align: center;  white-space: nowrap;">

                                                <a href="http://laundry.id/adminweb/customer/detailpesanan.php?id=112" class="btn btn-success">Detail Pesanan</a>

                                            </div></td>

                                        </tr>

                                                

                                          

                                                                        

                                        <tr id="baris_107">

                                            <td align="center"><input type="checkbox" id_select="107" name="select_107" class="select" /></td>

                                            <td align="center">12</td>

                                            <td align="left"><a href="http://laundry.id/adminweb/customer/edit.php?id=107">Syaiful Anwar</a></td>

                                            <td align="left">ngocedong@gmail.com</td>
                                            
                                            <td align="left">syaiful</td>

                                            <td align="left"><br />No. HP: 085261814431</td>

                                            <td align="left"></td>

                                            <td align="right">Rp. 2.150</td>
                                            
                                            <td align="center"><span style="font-weight: bold; color: green;">Aktif</span></td>                                                                                  

                                            <td><div style="text-align: center;  white-space: nowrap;">

                                                <a href="http://laundry.id/adminweb/customer/detailpesanan.php?id=107" class="btn btn-success">Detail Pesanan</a>

                                            </div></td>

                                        </tr>

                                                

                                          

                                                                        

                                        <tr id="baris_106">

                                            <td align="center"><input type="checkbox" id_select="106" name="select_106" class="select" /></td>

                                            <td align="center">13</td>

                                            <td align="left"><a href="http://laundry.id/adminweb/customer/edit.php?id=106">atho illah</a></td>

                                            <td align="left">pondokblongket98@gmail.com</td>
                                            
                                            <td align="left">pondok blongket</td>

                                            <td align="left"><br />No. HP: 082184807751</td>

                                            <td align="left"></td>

                                            <td align="right">Rp. 23.500</td>
                                            
                                            <td align="center"><span style="font-weight: bold; color: green;">Aktif</span></td>                                                                                  

                                            <td><div style="text-align: center;  white-space: nowrap;">

                                                <a href="http://laundry.id/adminweb/customer/detailpesanan.php?id=106" class="btn btn-success">Detail Pesanan</a>

                                            </div></td>

                                        </tr>

                                                

                                          

                                                                        

                                        <tr id="baris_105">

                                            <td align="center"><input type="checkbox" id_select="105" name="select_105" class="select" /></td>

                                            <td align="center">14</td>

                                            <td align="left"><a href="http://laundry.id/adminweb/customer/edit.php?id=105">Catur Dahana F</a></td>

                                            <td align="left">mrspeak2018@gmail.com</td>
                                            
                                            <td align="left">Britishcell</td>

                                            <td align="left"><br />No. HP: 081271645434</td>

                                            <td align="left"></td>

                                            <td align="right">Rp. 38.102</td>
                                            
                                            <td align="center"><span style="font-weight: bold; color: green;">Aktif</span></td>                                                                                  

                                            <td><div style="text-align: center;  white-space: nowrap;">

                                                <a href="http://laundry.id/adminweb/customer/detailpesanan.php?id=105" class="btn btn-success">Detail Pesanan</a>

                                            </div></td>

                                        </tr>

                                                

                                          

                                                                        

                                        <tr id="baris_104">

                                            <td align="center"><input type="checkbox" id_select="104" name="select_104" class="select" /></td>

                                            <td align="center">15</td>

                                            <td align="left"><a href="http://laundry.id/adminweb/customer/edit.php?id=104">Ade Amoorea</a></td>

                                            <td align="left">adeutami08@gmail.com</td>
                                            
                                            <td align="left">Ade Utami</td>

                                            <td align="left"><br />No. HP: 081366488622</td>

                                            <td align="left">laundry</td>

                                            <td align="right">Rp. 1.954</td>
                                            
                                            <td align="center"><span style="font-weight: bold; color: green;">Aktif</span></td>                                                                                  

                                            <td><div style="text-align: center;  white-space: nowrap;">

                                                <a href="http://laundry.id/adminweb/customer/detailpesanan.php?id=104" class="btn btn-success">Detail Pesanan</a>

                                            </div></td>

                                        </tr>

                                                

                                          

                                                                        

                                        <tr id="baris_100">

                                            <td align="center"><input type="checkbox" id_select="100" name="select_100" class="select" /></td>

                                            <td align="center">16</td>

                                            <td align="left"><a href="http://laundry.id/adminweb/customer/edit.php?id=100">Muhammad Syukri SH</a></td>

                                            <td align="left">syukrisoha@yahoo.com</td>
                                            
                                            <td align="left">syukrilaundry</td>

                                            <td align="left"><br />No. HP: 081271173735</td>

                                            <td align="left"></td>

                                            <td align="right">Rp. 79.650</td>
                                            
                                            <td align="center"><span style="font-weight: bold; color: green;">Aktif</span></td>                                                                                  

                                            <td><div style="text-align: center;  white-space: nowrap;">

                                                <a href="http://laundry.id/adminweb/customer/detailpesanan.php?id=100" class="btn btn-success">Detail Pesanan</a>

                                            </div></td>

                                        </tr>

                                                

                                          

                                                                        

                                        <tr id="baris_99">

                                            <td align="center"><input type="checkbox" id_select="99" name="select_99" class="select" /></td>

                                            <td align="center">17</td>

                                            <td align="left"><a href="http://laundry.id/adminweb/customer/edit.php?id=99">Sri Multi Payment</a></td>

                                            <td align="left">sris34114@gmail.com</td>
                                            
                                            <td align="left">Sri</td>

                                            <td align="left"><br />No. HP: 085264939020</td>

                                            <td align="left">laundry</td>

                                            <td align="right">Rp. 313</td>
                                            
                                            <td align="center"><span style="font-weight: bold; color: green;">Aktif</span></td>                                                                                  

                                            <td><div style="text-align: center;  white-space: nowrap;">

                                                <a href="http://laundry.id/adminweb/customer/detailpesanan.php?id=99" class="btn btn-success">Detail Pesanan</a>

                                            </div></td>

                                        </tr>

                                                

                                          

                                                                        

                                        <tr id="baris_98">

                                            <td align="center"><input type="checkbox" id_select="98" name="select_98" class="select" /></td>

                                            <td align="center">18</td>

                                            <td align="left"><a href="http://laundry.id/adminweb/customer/edit.php?id=98">Difa seluler</a></td>

                                            <td align="left">difarahmaaja65@gmail.com</td>
                                            
                                            <td align="left">Nora Theresia</td>

                                            <td align="left"><br />No. HP: 082397974232</td>

                                            <td align="left">laundry</td>

                                            <td align="right">Rp. 3.765</td>
                                            
                                            <td align="center"><span style="font-weight: bold; color: green;">Aktif</span></td>                                                                                  

                                            <td><div style="text-align: center;  white-space: nowrap;">

                                                <a href="http://laundry.id/adminweb/customer/detailpesanan.php?id=98" class="btn btn-success">Detail Pesanan</a>

                                            </div></td>

                                        </tr>

                                                

                                          

                                                                        

                                        <tr id="baris_97">

                                            <td align="center"><input type="checkbox" id_select="97" name="select_97" class="select" /></td>

                                            <td align="center">19</td>

                                            <td align="left"><a href="http://laundry.id/adminweb/customer/edit.php?id=97">BAROKAH MULTI PAYMENT</a></td>

                                            <td align="left">siskalaurensia30@gmail.com</td>
                                            
                                            <td align="left">Siska Laurensia</td>

                                            <td align="left"><br />No. HP: 085273341700</td>

                                            <td align="left">laundry</td>

                                            <td align="right">Rp. 5.679</td>
                                            
                                            <td align="center"><span style="font-weight: bold; color: green;">Aktif</span></td>                                                                                  

                                            <td><div style="text-align: center;  white-space: nowrap;">

                                                <a href="http://laundry.id/adminweb/customer/detailpesanan.php?id=97" class="btn btn-success">Detail Pesanan</a>

                                            </div></td>

                                        </tr>

                                                

                                          

                                                                        

                                        <tr id="baris_96">

                                            <td align="center"><input type="checkbox" id_select="96" name="select_96" class="select" /></td>

                                            <td align="center">20</td>

                                            <td align="left"><a href="http://laundry.id/adminweb/customer/edit.php?id=96">Emil Qadri Adnan</a></td>

                                            <td align="left">emilqodri4777@gmail.com</td>
                                            
                                            <td align="left">Amri Yo</td>

                                            <td align="left"><br />No. HP: 081279076618</td>

                                            <td align="left"></td>

                                            <td align="right">Rp. 4.265</td>
                                            
                                            <td align="center"><span style="font-weight: bold; color: green;">Aktif</span></td>                                                                                  

                                            <td><div style="text-align: center;  white-space: nowrap;">

                                                <a href="http://laundry.id/adminweb/customer/detailpesanan.php?id=96" class="btn btn-success">Detail Pesanan</a>

                                            </div></td>

                                        </tr>

                                                

                                          

                                    
                                </tbody>

                                
                                <tfoot><tr><th colspan="6">

                                    <div style="text-align: center;">

                                        
                                        
                                        
                                            
                                                <span class="btn btn-info">1</span>                                

                                            
                                                                            

                                        
                                            
                                                <a class="btn btn-default" href="list.php?page=2">2</a>

                                            
                                                                            

                                        
                                                                        

                                            <a class="btn btn-default" href="list.php?page=2">Next &rarr;</a>

                                                                        

                                    </div>  

                            </th></tr></tfoot>

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
<script src="http://laundry.id/templates/back-end/penguin/assets/js/jquery-ui/jquery-ui-1.10.3.custom.min.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/blitzer/jquery-ui.css" type="text/css" />

<link href="http://laundry.id/templates/back-end/penguin/assets/css/loadmask.css" rel="stylesheet" />
<script src="http://laundry.id/templates/back-end/penguin/assets/js/jquery.loadmask.min.js"></script>



    
<!-- /page scripts -->
    <script type="text/javascript">

        $(function () {

            var delete_selected = "";

            

            $( "#btn_aktif" ).click(function() {

                updateStatus(delete_selected, 1);

            });

            

            $( "#btn_non_aktif" ).click(function() {

                updateStatus(delete_selected, 0);

            });

            

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

                $( "#btn_aktif" ).removeClass('disabled').addClass(temp.length>0?'':'disabled');

                $( "#btn_non_aktif" ).removeClass('disabled').addClass(temp.length>0?'':'disabled');

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

                $('<div></div>').appendTo('body')

                .html('<div>Yakin ingin menghapus data?</div>')

                .dialog({

                    modal: true,

                    title: 'Konfirmasi Penghapusan',

                    zIndex: 10000,

                    autoOpen: true,

                    width: 'auto',

                    resizable: false,

                    buttons: {

                        Yes: function () {

                            $('#detail').mask('Hapus...');

                            $.ajax({

                                url: 'delete.php',

                                type: 'POST',

                                dataType: 'json',

                                data: { id: id },

                                success: function(data, textStatus, jqXHR) {

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

            

            function updateStatus(id, status) {

                $('<div></div>').appendTo('body')

                .html('<div>Yakin ingin merubah status?</div>')

                .dialog({

                    modal: true,

                    title: 'Konfirmasi',

                    zIndex: 10000,

                    autoOpen: true,

                    width: 'auto',

                    resizable: false,

                    buttons: {

                        Yes: function () {

                            $('#detail').mask('Update...');

                            $.ajax({

                                url: 'update.php',

                                type: 'POST',

                                dataType: 'json',

                                data: { id: id, status: status },

                                success: function(data, textStatus, jqXHR) {

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

                            $(this).dialog("close");

                        },

                        No: function () {

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
