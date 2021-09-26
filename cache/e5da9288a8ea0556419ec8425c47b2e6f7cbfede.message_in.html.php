<?php /*%%SmartyHeaderCode:6498897235bdbc25aba5703-78981907%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5da9288a8ea0556419ec8425c47b2e6f7cbfede' => 
    array (
      0 => '../../templates/back-end/penguin/message/message_in.html',
      1 => 1538456120,
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
  'nocache_hash' => '6498897235bdbc25aba5703-78981907',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d68801a1e3816_41610790',
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d68801a1e3816_41610790')) {function content_5d68801a1e3816_41610790($_smarty_tpl) {?><!doctype html>
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
                                            <li>
                            <a  href="http://laundry.id/adminweb/customer/"><i class="icon-users4"></i> Data Pelanggan </a>
                                                    </li>
                                            <li class="active acc-parent-li">
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
						<i class="icon-table position-left"></i> Message
					</div>
					<ul class="breadcrumb">
						<li><a href="http://laundry.id/adminweb">Beranda</a></li>
						<li><a href="http://laundry.id/adminweb/dashboard/">Message</a></li>
						<li class="active">List of Message</li>
					</ul>					
				</div>
			</div>		
			<!--/Page Header-->
		
			<div class="container-fluid page-content">
			
				<div class="panel panel-flat">
					<div class="panel-body no-padding-bottom">
						<!-- div class="alert alert-info alert-bordered col-md-12 col-xs-12">
							<a class="btn bg-slate btn-lg col-xs-12 col-md-3" style="z-index: 5">Inbox (Pesan Masuk)</a>
							<a href="http://laundry.id/adminweb/message_out/" class="btn btn-default btn-lg col-xs-12 col-md-3" style="z-index: 5">Outbox (Pesan Keluar)</a>
						</div -->					
						<div class="form-group">
							<table style="width: 100%;">
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

                                        <th width="5px"><input type="checkbox" id="select_all" /></th>
                                        <th width="5%"><div style="text-align: center;">No.</div></th>
                                        <th width="20%"><div style="text-align: center;">Tanggal</div></th>
                                        <th width="20%"><div style="text-align: center;">Dari</div></th>
                                        <th width="50%"><div style="text-align: center;">Pesan</div></th>
                                        <th width="10%"><div style="text-align: center;">Unread</div></th>
                                        <th width="5%"><div style="text-align: center;">Aksi</div></th>

                                    </tr>

                                </thead>

                                <tbody>

                                                                                                            
                                        <tr id="baris_69">
                                            <td align="center"><input type="checkbox" id_select="69" name="select_69" class="select" /></td>
                                            <td align="center"><span style="font-weight: bold;">1</span></td>
                                            <td align="center"><span style="font-weight: bold;">01-08-2019 08:25:42</span></td>
                                            <td align="left"><span style="font-weight: bold;">bejo</span></td>
                                            <td align="left"><span style="font-weight: bold;">ok</span></td>
                                            <td align="left"><span class="label label-warning" style="font-weight: bold;">2</span></td>
                                            <td><div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="69" class="btn btn-danger baca">Baca</div>                                                  
                                                </div>
                                            </td>                                      
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_68">
                                            <td align="center"><input type="checkbox" id_select="68" name="select_68" class="select" /></td>
                                            <td align="center"><span style="font-weight: bold;">2</span></td>
                                            <td align="center"><span style="font-weight: bold;">26-07-2019 17:32:01</span></td>
                                            <td align="left"><span style="font-weight: bold;">martin</span></td>
                                            <td align="left"><span style="font-weight: bold;">halo</span></td>
                                            <td align="left"><span class="label label-warning" style="font-weight: bold;">1</span></td>
                                            <td><div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="68" class="btn btn-danger baca">Baca</div>                                                  
                                                </div>
                                            </td>                                      
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_67">
                                            <td align="center"><input type="checkbox" id_select="67" name="select_67" class="select" /></td>
                                            <td align="center"><span style="font-weight: bold;">3</span></td>
                                            <td align="center"><span style="font-weight: bold;">26-07-2019 15:06:26</span></td>
                                            <td align="left"><span style="font-weight: bold;">Rifki Heruprasetyo</span></td>
                                            <td align="left"><span style="font-weight: bold;">Tes</span></td>
                                            <td align="left"><span class="label label-warning" style="font-weight: bold;">1</span></td>
                                            <td><div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="67" class="btn btn-danger baca">Baca</div>                                                  
                                                </div>
                                            </td>                                      
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_66">
                                            <td align="center"><input type="checkbox" id_select="66" name="select_66" class="select" /></td>
                                            <td align="center"><span >4</span></td>
                                            <td align="center"><span >08-09-2018 06:02:25</span></td>
                                            <td align="left"><span >vera</span></td>
                                            <td align="left"><span >Coba Kirim Ajah...</span></td>
                                            <td align="left"><span class="label label-warning" ></span></td>
                                            <td><div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="66" class="btn btn-danger baca">Baca</div>                                                  
                                                </div>
                                            </td>                                      
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_65">
                                            <td align="center"><input type="checkbox" id_select="65" name="select_65" class="select" /></td>
                                            <td align="center"><span >5</span></td>
                                            <td align="center"><span >30-06-2018 11:22:14</span></td>
                                            <td align="left"><span >Administrator</span></td>
                                            <td align="left"><span >tes</span></td>
                                            <td align="left"><span class="label label-warning" ></span></td>
                                            <td><div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="65" class="btn btn-danger baca">Baca</div>                                                  
                                                </div>
                                            </td>                                      
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_64">
                                            <td align="center"><input type="checkbox" id_select="64" name="select_64" class="select" /></td>
                                            <td align="center"><span >6</span></td>
                                            <td align="center"><span >01-04-2018 20:34:05</span></td>
                                            <td align="left"><span >Administrator</span></td>
                                            <td align="left"><span >Topp</span></td>
                                            <td align="left"><span class="label label-warning" ></span></td>
                                            <td><div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="64" class="btn btn-danger baca">Baca</div>                                                  
                                                </div>
                                            </td>                                      
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_63">
                                            <td align="center"><input type="checkbox" id_select="63" name="select_63" class="select" /></td>
                                            <td align="center"><span >7</span></td>
                                            <td align="center"><span >12-03-2018 20:25:45</span></td>
                                            <td align="left"><span ></span></td>
                                            <td align="left"><span >bahan nya dari apa yah???</span></td>
                                            <td align="left"><span class="label label-warning" ></span></td>
                                            <td><div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="63" class="btn btn-danger baca">Baca</div>                                                  
                                                </div>
                                            </td>                                      
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_62">
                                            <td align="center"><input type="checkbox" id_select="62" name="select_62" class="select" /></td>
                                            <td align="center"><span >8</span></td>
                                            <td align="center"><span >08-03-2018 02:38:53</span></td>
                                            <td align="left"><span ></span></td>
                                            <td align="left"><span >tes</span></td>
                                            <td align="left"><span class="label label-warning" ></span></td>
                                            <td><div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="62" class="btn btn-danger baca">Baca</div>                                                  
                                                </div>
                                            </td>                                      
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_61">
                                            <td align="center"><input type="checkbox" id_select="61" name="select_61" class="select" /></td>
                                            <td align="center"><span >9</span></td>
                                            <td align="center"><span >07-03-2018 19:00:21</span></td>
                                            <td align="left"><span ></span></td>
                                            <td align="left"><span >Ready Sis ?</span></td>
                                            <td align="left"><span class="label label-warning" ></span></td>
                                            <td><div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="61" class="btn btn-danger baca">Baca</div>                                                  
                                                </div>
                                            </td>                                      
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_60">
                                            <td align="center"><input type="checkbox" id_select="60" name="select_60" class="select" /></td>
                                            <td align="center"><span >10</span></td>
                                            <td align="center"><span >03-03-2018 19:59:37</span></td>
                                            <td align="left"><span ></span></td>
                                            <td align="left"><span >mahak amat</span></td>
                                            <td align="left"><span class="label label-warning" ></span></td>
                                            <td><div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="60" class="btn btn-danger baca">Baca</div>                                                  
                                                </div>
                                            </td>                                      
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_59">
                                            <td align="center"><input type="checkbox" id_select="59" name="select_59" class="select" /></td>
                                            <td align="center"><span >11</span></td>
                                            <td align="center"><span >19-02-2018 14:26:51</span></td>
                                            <td align="left"><span ></span></td>
                                            <td align="left"><span >tes</span></td>
                                            <td align="left"><span class="label label-warning" ></span></td>
                                            <td><div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="59" class="btn btn-danger baca">Baca</div>                                                  
                                                </div>
                                            </td>                                      
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_58">
                                            <td align="center"><input type="checkbox" id_select="58" name="select_58" class="select" /></td>
                                            <td align="center"><span >12</span></td>
                                            <td align="center"><span >14-02-2018 16:24:29</span></td>
                                            <td align="left"><span ></span></td>
                                            <td align="left"><span >Ikut percobaan ni.. </span></td>
                                            <td align="left"><span class="label label-warning" ></span></td>
                                            <td><div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="58" class="btn btn-danger baca">Baca</div>                                                  
                                                </div>
                                            </td>                                      
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_57">
                                            <td align="center"><input type="checkbox" id_select="57" name="select_57" class="select" /></td>
                                            <td align="center"><span >13</span></td>
                                            <td align="center"><span >08-02-2018 20:41:51</span></td>
                                            <td align="left"><span ></span></td>
                                            <td align="left"><span >tes</span></td>
                                            <td align="left"><span class="label label-warning" ></span></td>
                                            <td><div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="57" class="btn btn-danger baca">Baca</div>                                                  
                                                </div>
                                            </td>                                      
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_56">
                                            <td align="center"><input type="checkbox" id_select="56" name="select_56" class="select" /></td>
                                            <td align="center"><span >14</span></td>
                                            <td align="center"><span >07-02-2018 12:42:01</span></td>
                                            <td align="left"><span >olshophari</span></td>
                                            <td align="left"><span >tess</span></td>
                                            <td align="left"><span class="label label-warning" ></span></td>
                                            <td><div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="56" class="btn btn-danger baca">Baca</div>                                                  
                                                </div>
                                            </td>                                      
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_50">
                                            <td align="center"><input type="checkbox" id_select="50" name="select_50" class="select" /></td>
                                            <td align="center"><span >15</span></td>
                                            <td align="center"><span >31-01-2018 09:24:34</span></td>
                                            <td align="left"><span >Administrator</span></td>
                                            <td align="left"><span >pesan ?</span></td>
                                            <td align="left"><span class="label label-warning" ></span></td>
                                            <td><div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="50" class="btn btn-danger baca">Baca</div>                                                  
                                                </div>
                                            </td>                                      
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_55">
                                            <td align="center"><input type="checkbox" id_select="55" name="select_55" class="select" /></td>
                                            <td align="center"><span >16</span></td>
                                            <td align="center"><span >30-01-2018 11:18:41</span></td>
                                            <td align="left"><span ></span></td>
                                            <td align="left"><span >Tess</span></td>
                                            <td align="left"><span class="label label-warning" ></span></td>
                                            <td><div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="55" class="btn btn-danger baca">Baca</div>                                                  
                                                </div>
                                            </td>                                      
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_54">
                                            <td align="center"><input type="checkbox" id_select="54" name="select_54" class="select" /></td>
                                            <td align="center"><span >17</span></td>
                                            <td align="center"><span >27-01-2018 18:43:36</span></td>
                                            <td align="left"><span ></span></td>
                                            <td align="left"><span >Test</span></td>
                                            <td align="left"><span class="label label-warning" ></span></td>
                                            <td><div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="54" class="btn btn-danger baca">Baca</div>                                                  
                                                </div>
                                            </td>                                      
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_53">
                                            <td align="center"><input type="checkbox" id_select="53" name="select_53" class="select" /></td>
                                            <td align="center"><span >18</span></td>
                                            <td align="center"><span >25-01-2018 15:06:52</span></td>
                                            <td align="left"><span ></span></td>
                                            <td align="left"><span >Ini jasa bikin aplikasi apa gimana ya </span></td>
                                            <td align="left"><span class="label label-warning" ></span></td>
                                            <td><div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="53" class="btn btn-danger baca">Baca</div>                                                  
                                                </div>
                                            </td>                                      
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_52">
                                            <td align="center"><input type="checkbox" id_select="52" name="select_52" class="select" /></td>
                                            <td align="center"><span >19</span></td>
                                            <td align="center"><span >24-01-2018 11:07:38</span></td>
                                            <td align="left"><span ></span></td>
                                            <td align="left"><span >Ready mbak?</span></td>
                                            <td align="left"><span class="label label-warning" ></span></td>
                                            <td><div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="52" class="btn btn-danger baca">Baca</div>                                                  
                                                </div>
                                            </td>                                      
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_51">
                                            <td align="center"><input type="checkbox" id_select="51" name="select_51" class="select" /></td>
                                            <td align="center"><span >20</span></td>
                                            <td align="center"><span >24-01-2018 09:48:41</span></td>
                                            <td align="left"><span ></span></td>
                                            <td align="left"><span >tesss</span></td>
                                            <td align="left"><span class="label label-warning" ></span></td>
                                            <td><div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="51" class="btn btn-danger baca">Baca</div>                                                  
                                                </div>
                                            </td>                                      
                                        </tr>
                                          
                                    
                                </tbody>

                                                                <tfoot><tr><th colspan="8">
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
<!-- /page scripts -->
    <script type="text/javascript">

        $(function () {

            var delete_selected = "";

            

            $( "#btn_balas" ).click(function() {

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

            

            $( ".baca" ).click(function() {

                var id = this.getAttribute('id_select');

                window.location='edit.php?id='+id;

            });

            

            function setButton() {

                var temp = new Array();

                if(delete_selected.length>0) temp = delete_selected.split(',');                

                $( "#btn_balas" ).removeClass('disabled').addClass(temp.length==1?'':'disabled');

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
