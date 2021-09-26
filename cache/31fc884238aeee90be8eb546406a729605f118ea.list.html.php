<?php /*%%SmartyHeaderCode:10001344495e9bd916285d29-20960436%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31fc884238aeee90be8eb546406a729605f118ea' => 
    array (
      0 => '..\\..\\templates\\back-end\\penguin\\ppob_produk\\list.html',
      1 => 1542553592,
      2 => 'file',
    ),
    '9efdb38e93e7d5a216b36e93ff0c59d83d15499d' => 
    array (
      0 => 'D:\\www\\laundry\\templates\\back-end\\penguin\\includes\\head.html',
      1 => 1579678289,
      2 => 'file',
    ),
    '27e17335a03c2bd691fd0357056aecf704abdc7b' => 
    array (
      0 => 'D:\\www\\laundry\\templates\\back-end\\penguin\\includes\\sidebar.html',
      1 => 1544655944,
      2 => 'file',
    ),
    '204ceac23fd5eb049a8ee7888c4565efacbd38cf' => 
    array (
      0 => 'D:\\www\\laundry\\templates\\back-end\\penguin\\includes\\footer.html',
      1 => 1544657450,
      2 => 'file',
    ),
    'd7300f18b60b803b0b85871436601f2ca9b937ff' => 
    array (
      0 => 'D:\\www\\laundry\\templates\\back-end\\penguin\\includes\\footer_js.html',
      1 => 1538456120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10001344495e9bd916285d29-20960436',
  'variables' => 
  array (
    'title' => 0,
    'adminweburl' => 0,
    'sub_title' => 0,
    'query' => 0,
    'array_akses' => 0,
    'listdetail' => 0,
    'entry' => 0,
    'homeurl' => 0,
    'no' => 0,
    'totalpage' => 0,
    'currentpage' => 0,
    'frompage' => 0,
    'untilpage' => 0,
    'item' => 0,
    'tpl_dir' => 0,
    'alert_success' => 0,
    'alert_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e9bd916752278_70899362',
  'cache_lifetime' => 0,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e9bd916752278_70899362')) {function content_5e9bd916752278_70899362($_smarty_tpl) {?><!doctype html>
<html lang="en">
    <head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>LAUNDRY</title>	
	<link href="http://localhost/laundry/templates/back-end/penguin/assets/images/favicon.ico" rel="icon" type="image/png">
	
	<!-- Global stylesheets -->	
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
	<link type="text/css" rel="stylesheet" href="http://localhost/laundry/templates/back-end/penguin/assets/fonts/fonts.css">
        <link type="text/css" rel="stylesheet" href="http://localhost/laundry/templates/back-end/penguin/assets/icons/icomoon/icomoon.css">
        <link type="text/css" rel="stylesheet" href="http://localhost/laundry/templates/back-end/penguin/css/animate.min.css">
	<link type="text/css" rel="stylesheet" href="http://localhost/laundry/templates/back-end/penguin/css/bootstrap.css">   
	<link type="text/css" rel="stylesheet" href="http://localhost/laundry/templates/back-end/penguin/css/core.css">	
	<link type="text/css" rel="stylesheet" href="http://localhost/laundry/templates/back-end/penguin/css/layout.css">	
	<link type="text/css" rel="stylesheet" href="http://localhost/laundry/templates/back-end/penguin/css/bootstrap-extended.css">	    
	<link type="text/css" rel="stylesheet" href="http://localhost/laundry/templates/back-end/penguin/css/components.css">
	<link type="text/css" rel="stylesheet" href="http://localhost/laundry/templates/back-end/penguin/css/plugins.css">
	<link type="text/css" rel="stylesheet" href="http://localhost/laundry/templates/back-end/penguin/css/loaders.css">
	<link type="text/css" rel="stylesheet" href="http://localhost/laundry/templates/back-end/penguin/css/responsive.css">
	<link type="text/css" rel="stylesheet" href="http://localhost/laundry/templates/back-end/penguin/css/color-system.css">		
	<link type="text/css" rel="stylesheet" href="http://localhost/laundry/templates/back-end/penguin/css/fancybox/jquery.fancybox.css">
	<link type="text/css" rel="stylesheet" href="http://localhost/laundry/templates/back-end/penguin/assets/sweetalert2/sweetalert2.min.css">
	<link type="text/css" rel="stylesheet" href="http://localhost/laundry/templates/back-end/penguin/assets/bootstrap-fileinput/css/fileinput.min.css">
	<link type="text/css" rel="stylesheet" href="http://localhost/laundry/templates/back-end/penguin/css/burnt_sienna_light.css">	
        <link type="text/css" rel="stylesheet" href="http://localhost/laundry/templates/back-end/penguin/css/AdminLTE.css" />
	<link type="text/css" rel="stylesheet" href="0" id="theme">
	<script src="http://localhost/laundry/templates/back-end/penguin/assets/sweetalert2/sweetalert2.min.js"></script>
	<script>
		var base_tpl_url = "http://localhost/laundry/templates/back-end/penguin/css/themes/";
		var base_url = "http://localhost/laundry/";
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
                                <a href="http://localhost/laundry/adminweb/pesanandalamproses/pesananbelumlunas/" class="dropdown-toggle" style="width: 100%; padding-left: 10px; padding-right: 30px;"><i class="icon-cart"></i>
                                <span id="total_notif_belum_lunas" class="bubble">41</span>
                                <span style="color: #ffffff">Belum Bayar / KEEP </span></a>
                            </li>
                        
                                                    <li class="dropdown-toggle hidden-xs" style="border-left: 1px solid #ffffff;">
                                <a href="http://localhost/laundry/adminweb/konfirmasi/list.php?status=0" class="dropdown-toggle" style="width: 100%; padding-left: 10px; padding-right: 30px;"><i class="icon-reading"></i>
                                <span id="total_notif_konfirmasi_bayar" class="bubble" style="display: none">0</span>
                                <span style="color: #ffffff;">Konfirmasi Bayar </span></a>
                            </li>
                        
                                                    <li class="dropdown-toggle hidden-xs" style="border-left: 1px solid #ffffff;">
                                <a href="http://localhost/laundry/adminweb/pesanandalamproses/pesananperludikirim/" class="dropdown-toggle" style="width: 100%; padding-left: 10px; padding-right: 30px;"><i class="icon-box"></i>
                                <span id="total_notif_perlu_kemas" class="bubble">20</span>
                                <span style="color: #ffffff">Perlu Kemas </span></a>
                            </li>
                        
                                                    <li class="dropdown-toggle hidden-xs" style="border-left: 1px solid #ffffff;">
                                <a href="http://localhost/laundry/adminweb/customer/" class="dropdown-toggle" style="width: 100%; padding-left: 10px; padding-right: 30px;"><i class="icon-users4"></i>
                                <span id="total_notif_pelanggan_baru" class="bubble">113</span>
                                <span style="color: #ffffff;">Pelanggan Baru</span></a>
                            </li>
                        
                                                    <li class="dropdown-toggle hidden-xs" style="border-left: 1px solid #ffffff;">
                                <a href="http://localhost/laundry/adminweb/message_in/" class="dropdown-toggle" style="width: 100%; padding-left: 10px; padding-right: 30px;"><i class="icon-envelope"></i>
                                <span id="total_notif_pesan_baru" class="bubble">4</span>
                                <span style="color: #ffffff">Pesan Baru </span></a>
                            </li>
                        		

                        <li class="dropdown user-dropdown" style="border-left: 1px solid #ffffff;padding-left: 10px">
                            <a href="http://localhost/laundry/adminweb#" class="btn-user dropdown-toggle hidden-xs" data-toggle="dropdown"><img src="http://localhost/laundry/templates/back-end/penguin/assets/images/faces/face1.png" class="img-circle user" alt=""/></a>
                            <a href="http://localhost/laundry/adminweb#" class="dropdown-toggle visible-xs" data-toggle="dropdown"><i class="icon-more"></i></a>
                            <div class="dropdown-menu">	
                                <div class="text-center"><img src="http://localhost/laundry/templates/back-end/penguin/assets/images/faces/face1.png" class="img-circle img-70" alt=""/></div>
                                <h5 class="text-center"><b>Hi! Administrator</b></h5>
                                <ul class="more-apps">
                                        <!-- li><a href="http://localhost/laundry/templates/back-end/penguin/material/user_profile_social.html"><i class="icon-profile"></i> My profile</a></li -->
                                        <!-- li><a href="http://localhost/laundry/adminweb#"><i class="icon-envelop5"></i> Inbox <span class="badge badge-danger pull-right">4</span></a></li -->
                                        <li><a href="http://localhost/laundry/adminweb/editprofile/"><i class="icon-profile"></i> My Profile</a></li>
                                        <li><a href="http://localhost/laundry/adminweb/gantipassword/edit.php"><i class="icon-lock5"></i> Ganti Password</a></li>
                                </ul>
                                <div class="text-center"><a href="http://localhost/laundry/adminweb/logout.php" class="btn btn-sm btn-info"><i class="icon-exit3 i-16 position-left"></i> Logout</a></div>
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
                    <img src="http://localhost/laundry/templates/back-end/penguin/assets/images/faces/face1.png" alt="admin" class="img-circle" />
                </div>

                <div class="admin-user-info">
                    <ul class="user-info">
                        <li><a href="http://localhost/laundry/adminweb/logout.php" class="text-semibold text-size-large">Administrator</a></li>
                        <li><a href="http://localhost/laundry/adminweb/logout.php"><small>-- subtitle here --</small></a></li>
                    </ul>
                    <div class="logout-icon"><a href="http://localhost/laundry/adminweb/logout.php"><i class="icon-exit2"></i></a></div>
                </div>
            </div>				
        </div>

        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active fadeIn" id="menu">
                <ul class="sidebar-accordion">
                    <li><br />&nbsp;&nbsp;&nbsp;</li>
                                            <li>
                            <a  href="http://localhost/laundry/adminweb/dashboard/"><i class="icon-display4"></i> Dashboard </a>
                                                    </li>
                                            <li>
                            <a class="acc-parent active" href="#"><i class="icon-cart2"></i> Daftar Pesanan <span class="fa arrow"></span></a>
                                                            <ul>
                                                                    <li>
                                        <a href="http://localhost/laundry/adminweb/pesanandalamproses/pesananbelumlunas/"><i class="fa fa-bars"></i> Belum Lunas</a>
                                    </li>
                                                                    <li>
                                        <a href="http://localhost/laundry/adminweb/pesanandalamproses/pesananperludikirim/"><i class="fa fa-bars"></i> Perlu Dikirim</a>
                                    </li>
                                                                    <li>
                                        <a href="http://localhost/laundry/adminweb/pesanandalamproses/pesanantelahdikirim/"><i class="fa fa-bars"></i> Telah Dikirim</a>
                                    </li>
                                                                    <li>
                                        <a href="http://localhost/laundry/adminweb/pesanandalamproses/pesananselesai/"><i class="fa fa-bars"></i> Selesai</a>
                                    </li>
                                                                    <li>
                                        <a href="http://localhost/laundry/adminweb/pesanandalamproses/pesanandibatalkan/"><i class="fa fa-bars"></i> Dibatalkan</a>
                                    </li>
                                                                    <li>
                                        <a href="http://localhost/laundry/adminweb/pemesanan/add.php"><i class="fa fa-desktop"></i> Buat Pesanan</a>
                                    </li>
                                                                </ul>
                                                    </li>
                                            <li>
                            <a  href="http://localhost/laundry/adminweb/konfirmasi/"><i class="icon-foursquare"></i> Konfirmasi Pembayaran </a>
                                                    </li>
                                            <li>
                            <a class="acc-parent active" href="#"><i class="icon-book"></i> PPOB <span class="fa arrow"></span></a>
                                                            <ul>
                                                                    <li>
                                        <a href="http://localhost/laundry/adminweb/ppob_produk/"><i class="fa fa-archive"></i> Produk</a>
                                    </li>
                                                                </ul>
                                                    </li>
                                            <li>
                            <a class="acc-parent active" href="#"><i class="icon-book"></i> Katalog Produk <span class="fa arrow"></span></a>
                                                            <ul>
                                                                    <li>
                                        <a href="http://localhost/laundry/adminweb/product/"><i class="fa fa-archive"></i> Produk</a>
                                    </li>
                                                                    <li>
                                        <a href="http://localhost/laundry/adminweb/stok/"><i class="fa fa-dropbox"></i> Stok</a>
                                    </li>
                                                                    <li>
                                        <a href="http://localhost/laundry/adminweb/category/"><i class="fa fa-folder"></i> Kategori</a>
                                    </li>
                                                                    <li>
                                        <a href="http://localhost/laundry/adminweb/brand/"><i class="fa fa-folder"></i> Merek</a>
                                    </li>
                                                                </ul>
                                                    </li>
                                            <li>
                            <a  href="http://localhost/laundry/adminweb/customer/"><i class="icon-users4"></i> Data Pelanggan </a>
                                                    </li>
                                            <li>
                            <a  href="http://localhost/laundry/adminweb/message_in/"><i class="icon-comment-discussion"></i> Message </a>
                                                    </li>
                                            <li>
                            <a  href="http://localhost/laundry/adminweb/voucher/"><i class="icon-ticket"></i> Voucher </a>
                                                    </li>
                                            <li>
                            <a class="acc-parent active" href="#"><i class="icon-cog3"></i> Pengaturan <span class="fa arrow"></span></a>
                                                            <ul>
                                                                    <li>
                                        <a href="http://localhost/laundry/adminweb/pengaturan_toko/"><i class="fa fa-edit"></i> Pengaturan Toko</a>
                                    </li>
                                                                    <li>
                                        <a href="http://localhost/laundry/adminweb/pengaturan_aplikasi/"><i class="fa fa-edit"></i> Pengaturan Aplikasi</a>
                                    </li>
                                                                    <li>
                                        <a href="http://localhost/laundry/adminweb/pengaturan_website/"><i class="fa fa-edit"></i> Pengaturan Website</a>
                                    </li>
                                                                    <li>
                                        <a href="http://localhost/laundry/adminweb/pengaturan_umum/"><i class="fa fa-edit"></i> Pengaturan Umum</a>
                                    </li>
                                                                    <li>
                                        <a href="http://localhost/laundry/adminweb/metode_pembayaran/"><i class="fa fa-edit"></i> Metode Pembayaran</a>
                                    </li>
                                                                    <li>
                                        <a href="http://localhost/laundry/adminweb/metode_pengiriman/"><i class="fa fa-edit"></i> Metode Pengiriman</a>
                                    </li>
                                                                </ul>
                                                    </li>
                                            <li>
                            <a class="acc-parent active" href="#"><i class="icon-stack-text"></i> Laporan <span class="fa arrow"></span></a>
                                                            <ul>
                                                                    <li>
                                        <a href="http://localhost/laundry/adminweb/laporan_pembayaran/"><i class="fa fa-money"></i> Pembayaran</a>
                                    </li>
                                                                    <li>
                                        <a href="http://localhost/laundry/adminweb/laporan_pesanan/"><i class="fa fa-foursquare"></i> Pesanan</a>
                                    </li>
                                                                    <li>
                                        <a href="http://localhost/laundry/adminweb/laporan_jual_ppob/"><i class="fa fa-foursquare"></i> Penjualan PPOB</a>
                                    </li>
                                                                </ul>
                                                    </li>
                                            <li>
                            <a  href="http://localhost/laundry/adminweb/informasi/"><i class="icon-info3"></i> Informasi </a>
                                                    </li>
                                            <li>
                            <a class="acc-parent active" href="#"><i class="icon-users"></i> Managemen User <span class="fa arrow"></span></a>
                                                            <ul>
                                                                    <li>
                                        <a href="http://localhost/laundry/adminweb/jenisuser/"><i class="fa fa-truck"></i> Grup User</a>
                                    </li>
                                                                    <li>
                                        <a href="http://localhost/laundry/adminweb/pengguna/"><i class="fa fa-truck"></i> User</a>
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

						<i class="icon-table position-left"></i> PPOB Produk

					</div>

					<ul class="breadcrumb">

						<li><a href="http://localhost/laundry/adminweb">Beranda</a></li>

						<li><a href="http://localhost/laundry/adminweb/dashboard/">PPOB Produk</a></li>

						<li class="active">List of PPOB Produk</li>

					</ul>					

				</div>

			</div>		

			<!--/Page Header-->

		

			<div class="container-fluid page-content">

			

				<div class="panel panel-flat">

					<div class="panel-heading">

						<h5 class="panel-title">Keyword Pencarian:</h5>				

					</div>



					<div class="panel-body no-padding-bottom">

						<div class="form-group">

							<table style="width: 100%;">

								<tr>

									<td width="100%">

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

						<div class="form-group">

	

							<div id='btn_add' class="btn btn-primary">Baru</div>
	

							<div id='btn_edit' class="btn btn-success disabled">Edit</div>
	

							<div id='btn_delete' class="btn btn-danger disabled">Hapus</div>
	

						</div>						

						

					</div>

					

					<div class="table-responsive">

						<table class="table table-togglable table-hover">

                                <thead>



                                    <tr>



                                        <th width="1%" style="text-align: center;"><input type="checkbox" id="select_all" /></th>

                                        <th width="15%"><div style="text-align: center;">Produk</div></th>

                                        <th width="15%"><div style="text-align: center;">Paket</div></th>

                                        <th width="10%"><div style="text-align: center;">Kode</div></th>

                                        <th width="20%"><div style="text-align: left;">Keterangan</div></th>
        
                                        <th width="15%"><div style="text-align: right;">Beli</div></th>

                                        <th width="15%"><div style="text-align: right;">Jual</div></th>

                                        <th width="10%"><div style="text-align: center;">Aksi</div></th>



                                    </tr>



                                </thead>



                                <tbody>



                                    


                                                                        



                                        <tr id="baris_1">

                                            <td align="center" style="width: 1%;"><input type="checkbox" id_select="1" name="select_1" class="select" /></td>

                                            <td align="center"><div style="text-align: center;  white-space: nowrap;">

                                                <img src="http://localhost/laundry/uploads/provider/axis.png" width="95px" /><br />
                                                AXIS

                                            </div></td>

                                            <td align="center">REGULER</td>

                                            <td align="center">AX5</td>

                                            <td align="left">AXIS 5000</td>

                                            <td align="right">Rp. 5,750</td>

                                            <td align="right">Rp. 5,950</td>

                                            <td><div style="text-align: center;  white-space: nowrap;">

                                                    <div id_select="1" class="btn btn-success edit">Edit</div>
                                                    <div id_select="1" class="btn btn-danger hapus">Hapus</div>                                                         

                                                </div>
                                            </td>                                          



                                        </tr>



                                          



                                                                        



                                        <tr id="baris_2">

                                            <td align="center" style="width: 1%;"><input type="checkbox" id_select="2" name="select_2" class="select" /></td>

                                            <td align="center"><div style="text-align: center;  white-space: nowrap;">

                                                <img src="http://localhost/laundry/uploads/provider/axis.png" width="95px" /><br />
                                                AXIS

                                            </div></td>

                                            <td align="center">REGULER</td>

                                            <td align="center">AX10</td>

                                            <td align="left">AXIS 10000</td>

                                            <td align="right">Rp. 10,750</td>

                                            <td align="right">Rp. 10,950</td>

                                            <td><div style="text-align: center;  white-space: nowrap;">

                                                    <div id_select="2" class="btn btn-success edit">Edit</div>
                                                    <div id_select="2" class="btn btn-danger hapus">Hapus</div>                                                         

                                                </div>
                                            </td>                                          



                                        </tr>



                                          



                                                                        



                                        <tr id="baris_3">

                                            <td align="center" style="width: 1%;"><input type="checkbox" id_select="3" name="select_3" class="select" /></td>

                                            <td align="center"><div style="text-align: center;  white-space: nowrap;">

                                                <img src="http://localhost/laundry/uploads/provider/axis.png" width="95px" /><br />
                                                AXIS

                                            </div></td>

                                            <td align="center">REGULER</td>

                                            <td align="center">AX25</td>

                                            <td align="left">AXIS 25000</td>

                                            <td align="right">Rp. 25,250</td>

                                            <td align="right">Rp. 25,450</td>

                                            <td><div style="text-align: center;  white-space: nowrap;">

                                                    <div id_select="3" class="btn btn-success edit">Edit</div>
                                                    <div id_select="3" class="btn btn-danger hapus">Hapus</div>                                                         

                                                </div>
                                            </td>                                          



                                        </tr>



                                          



                                                                        



                                        <tr id="baris_5">

                                            <td align="center" style="width: 1%;"><input type="checkbox" id_select="5" name="select_5" class="select" /></td>

                                            <td align="center"><div style="text-align: center;  white-space: nowrap;">

                                                <img src="http://localhost/laundry/uploads/provider/axis.png" width="95px" /><br />
                                                AXIS

                                            </div></td>

                                            <td align="center">REGULER</td>

                                            <td align="center">AX50</td>

                                            <td align="left">AXIS 50000</td>

                                            <td align="right">Rp. 50,300</td>

                                            <td align="right">Rp. 50,500</td>

                                            <td><div style="text-align: center;  white-space: nowrap;">

                                                    <div id_select="5" class="btn btn-success edit">Edit</div>
                                                    <div id_select="5" class="btn btn-danger hapus">Hapus</div>                                                         

                                                </div>
                                            </td>                                          



                                        </tr>



                                          



                                                                        



                                        <tr id="baris_6">

                                            <td align="center" style="width: 1%;"><input type="checkbox" id_select="6" name="select_6" class="select" /></td>

                                            <td align="center"><div style="text-align: center;  white-space: nowrap;">

                                                <img src="http://localhost/laundry/uploads/provider/axis.png" width="95px" /><br />
                                                AXIS

                                            </div></td>

                                            <td align="center">REGULER</td>

                                            <td align="center">AX100</td>

                                            <td align="left">AXIS 100000</td>

                                            <td align="right">Rp. 100,100</td>

                                            <td align="right">Rp. 100,300</td>

                                            <td><div style="text-align: center;  white-space: nowrap;">

                                                    <div id_select="6" class="btn btn-success edit">Edit</div>
                                                    <div id_select="6" class="btn btn-danger hapus">Hapus</div>                                                         

                                                </div>
                                            </td>                                          



                                        </tr>



                                          



                                                                        



                                        <tr id="baris_523">

                                            <td align="center" style="width: 1%;"><input type="checkbox" id_select="523" name="select_523" class="select" /></td>

                                            <td align="center"><div style="text-align: center;  white-space: nowrap;">

                                                <img src="http://localhost/laundry/uploads/provider/axis.png" width="95px" /><br />
                                                AXIS

                                            </div></td>

                                            <td align="center">INTERNET</td>

                                            <td align="center">BRO300</td>

                                            <td align="left">BRONET 300MB 24 JAM 7 HARI</td>

                                            <td align="right">Rp. 10,000</td>

                                            <td align="right">Rp. 10,200</td>

                                            <td><div style="text-align: center;  white-space: nowrap;">

                                                    <div id_select="523" class="btn btn-success edit">Edit</div>
                                                    <div id_select="523" class="btn btn-danger hapus">Hapus</div>                                                         

                                                </div>
                                            </td>                                          



                                        </tr>



                                          



                                                                        



                                        <tr id="baris_12">

                                            <td align="center" style="width: 1%;"><input type="checkbox" id_select="12" name="select_12" class="select" /></td>

                                            <td align="center"><div style="text-align: center;  white-space: nowrap;">

                                                <img src="http://localhost/laundry/uploads/provider/axis.png" width="95px" /><br />
                                                AXIS

                                            </div></td>

                                            <td align="center">INTERNET</td>

                                            <td align="center">BRO1</td>

                                            <td align="left">BRONET 1 GB 30 Hari</td>

                                            <td align="right">Rp. 22,100</td>

                                            <td align="right">Rp. 22,300</td>

                                            <td><div style="text-align: center;  white-space: nowrap;">

                                                    <div id_select="12" class="btn btn-success edit">Edit</div>
                                                    <div id_select="12" class="btn btn-danger hapus">Hapus</div>                                                         

                                                </div>
                                            </td>                                          



                                        </tr>



                                          



                                                                        



                                        <tr id="baris_525">

                                            <td align="center" style="width: 1%;"><input type="checkbox" id_select="525" name="select_525" class="select" /></td>

                                            <td align="center"><div style="text-align: center;  white-space: nowrap;">

                                                <img src="http://localhost/laundry/uploads/provider/axis.png" width="95px" /><br />
                                                AXIS

                                            </div></td>

                                            <td align="center">INTERNET</td>

                                            <td align="center">OWS2</td>

                                            <td align="left">OWSEM 1+ 1GB (4G) 24 JAM 30 HR</td>

                                            <td align="right">Rp. 24,100</td>

                                            <td align="right">Rp. 24,300</td>

                                            <td><div style="text-align: center;  white-space: nowrap;">

                                                    <div id_select="525" class="btn btn-success edit">Edit</div>
                                                    <div id_select="525" class="btn btn-danger hapus">Hapus</div>                                                         

                                                </div>
                                            </td>                                          



                                        </tr>



                                          



                                                                        



                                        <tr id="baris_13">

                                            <td align="center" style="width: 1%;"><input type="checkbox" id_select="13" name="select_13" class="select" /></td>

                                            <td align="center"><div style="text-align: center;  white-space: nowrap;">

                                                <img src="http://localhost/laundry/uploads/provider/axis.png" width="95px" /><br />
                                                AXIS

                                            </div></td>

                                            <td align="center">INTERNET</td>

                                            <td align="center">BRO2</td>

                                            <td align="left">BRONET 2GB 30Hr</td>

                                            <td align="right">Rp. 30,100</td>

                                            <td align="right">Rp. 30,300</td>

                                            <td><div style="text-align: center;  white-space: nowrap;">

                                                    <div id_select="13" class="btn btn-success edit">Edit</div>
                                                    <div id_select="13" class="btn btn-danger hapus">Hapus</div>                                                         

                                                </div>
                                            </td>                                          



                                        </tr>



                                          



                                                                        



                                        <tr id="baris_529">

                                            <td align="center" style="width: 1%;"><input type="checkbox" id_select="529" name="select_529" class="select" /></td>

                                            <td align="center"><div style="text-align: center;  white-space: nowrap;">

                                                <img src="http://localhost/laundry/uploads/provider/axis.png" width="95px" /><br />
                                                AXIS

                                            </div></td>

                                            <td align="center">INTERNET</td>

                                            <td align="center">AXUL</td>

                                            <td align="left">AXIS UNLIMITED FUP 1,5 GB 30 HARI</td>

                                            <td align="right">Rp. 32,050</td>

                                            <td align="right">Rp. 32,250</td>

                                            <td><div style="text-align: center;  white-space: nowrap;">

                                                    <div id_select="529" class="btn btn-success edit">Edit</div>
                                                    <div id_select="529" class="btn btn-danger hapus">Hapus</div>                                                         

                                                </div>
                                            </td>                                          



                                        </tr>



                                          



                                                                        



                                        <tr id="baris_526">

                                            <td align="center" style="width: 1%;"><input type="checkbox" id_select="526" name="select_526" class="select" /></td>

                                            <td align="center"><div style="text-align: center;  white-space: nowrap;">

                                                <img src="http://localhost/laundry/uploads/provider/axis.png" width="95px" /><br />
                                                AXIS

                                            </div></td>

                                            <td align="center">INTERNET</td>

                                            <td align="center">OWS4</td>

                                            <td align="left">OWSEM 1+ 3GB (4G) 24 JAM 30 HR</td>

                                            <td align="right">Rp. 39,100</td>

                                            <td align="right">Rp. 39,300</td>

                                            <td><div style="text-align: center;  white-space: nowrap;">

                                                    <div id_select="526" class="btn btn-success edit">Edit</div>
                                                    <div id_select="526" class="btn btn-danger hapus">Hapus</div>                                                         

                                                </div>
                                            </td>                                          



                                        </tr>



                                          



                                                                        



                                        <tr id="baris_15">

                                            <td align="center" style="width: 1%;"><input type="checkbox" id_select="15" name="select_15" class="select" /></td>

                                            <td align="center"><div style="text-align: center;  white-space: nowrap;">

                                                <img src="http://localhost/laundry/uploads/provider/axis.png" width="95px" /><br />
                                                AXIS

                                            </div></td>

                                            <td align="center">INTERNET</td>

                                            <td align="center">BRO3</td>

                                            <td align="left">BRONET 3 GB 30Hr</td>

                                            <td align="right">Rp. 40,100</td>

                                            <td align="right">Rp. 40,300</td>

                                            <td><div style="text-align: center;  white-space: nowrap;">

                                                    <div id_select="15" class="btn btn-success edit">Edit</div>
                                                    <div id_select="15" class="btn btn-danger hapus">Hapus</div>                                                         

                                                </div>
                                            </td>                                          



                                        </tr>



                                          



                                                                        



                                        <tr id="baris_16">

                                            <td align="center" style="width: 1%;"><input type="checkbox" id_select="16" name="select_16" class="select" /></td>

                                            <td align="center"><div style="text-align: center;  white-space: nowrap;">

                                                <img src="http://localhost/laundry/uploads/provider/axis.png" width="95px" /><br />
                                                AXIS

                                            </div></td>

                                            <td align="center">INTERNET</td>

                                            <td align="center">BRO5</td>

                                            <td align="left">BRONET 5 GB 30Hr</td>

                                            <td align="right">Rp. 61,000</td>

                                            <td align="right">Rp. 63,000</td>

                                            <td><div style="text-align: center;  white-space: nowrap;">

                                                    <div id_select="16" class="btn btn-success edit">Edit</div>
                                                    <div id_select="16" class="btn btn-danger hapus">Hapus</div>                                                         

                                                </div>
                                            </td>                                          



                                        </tr>



                                          



                                                                        



                                        <tr id="baris_527">

                                            <td align="center" style="width: 1%;"><input type="checkbox" id_select="527" name="select_527" class="select" /></td>

                                            <td align="center"><div style="text-align: center;  white-space: nowrap;">

                                                <img src="http://localhost/laundry/uploads/provider/axis.png" width="95px" /><br />
                                                AXIS

                                            </div></td>

                                            <td align="center">INTERNET</td>

                                            <td align="center">OWS8</td>

                                            <td align="left">OWSEM 2+ 6GB (4G) 24 JAM 30 HR</td>

                                            <td align="right">Rp. 62,100</td>

                                            <td align="right">Rp. 62,300</td>

                                            <td><div style="text-align: center;  white-space: nowrap;">

                                                    <div id_select="527" class="btn btn-success edit">Edit</div>
                                                    <div id_select="527" class="btn btn-danger hapus">Hapus</div>                                                         

                                                </div>
                                            </td>                                          



                                        </tr>



                                          



                                                                        



                                        <tr id="baris_528">

                                            <td align="center" style="width: 1%;"><input type="checkbox" id_select="528" name="select_528" class="select" /></td>

                                            <td align="center"><div style="text-align: center;  white-space: nowrap;">

                                                <img src="http://localhost/laundry/uploads/provider/axis.png" width="95px" /><br />
                                                AXIS

                                            </div></td>

                                            <td align="center">INTERNET</td>

                                            <td align="center">OWS12</td>

                                            <td align="left">OWSEM 3 + 9GB (4G) 24 JAM 30 HR</td>

                                            <td align="right">Rp. 81,100</td>

                                            <td align="right">Rp. 81,300</td>

                                            <td><div style="text-align: center;  white-space: nowrap;">

                                                    <div id_select="528" class="btn btn-success edit">Edit</div>
                                                    <div id_select="528" class="btn btn-danger hapus">Hapus</div>                                                         

                                                </div>
                                            </td>                                          



                                        </tr>



                                          



                                                                        



                                        <tr id="baris_524">

                                            <td align="center" style="width: 1%;"><input type="checkbox" id_select="524" name="select_524" class="select" /></td>

                                            <td align="center"><div style="text-align: center;  white-space: nowrap;">

                                                <img src="http://localhost/laundry/uploads/provider/axis.png" width="95px" /><br />
                                                AXIS

                                            </div></td>

                                            <td align="center">INTERNET</td>

                                            <td align="center">BRO8</td>

                                            <td align="left">BRONET 8GB 24 JAM 30 HARI</td>

                                            <td align="right">Rp. 83,100</td>

                                            <td align="right">Rp. 80,300</td>

                                            <td><div style="text-align: center;  white-space: nowrap;">

                                                    <div id_select="524" class="btn btn-success edit">Edit</div>
                                                    <div id_select="524" class="btn btn-danger hapus">Hapus</div>                                                         

                                                </div>
                                            </td>                                          



                                        </tr>



                                          



                                                                        



                                        <tr id="baris_494">

                                            <td align="center" style="width: 1%;"><input type="checkbox" id_select="494" name="select_494" class="select" /></td>

                                            <td align="center"><div style="text-align: center;  white-space: nowrap;">

                                                <img src="http://localhost/laundry/uploads/provider/default.png" width="95px" /><br />
                                                GAME

                                            </div></td>

                                            <td align="center">ZYNGA</td>

                                            <td align="center">ZNG20</td>

                                            <td align="left">ZYNGA 20.000</td>

                                            <td align="right">Rp. 26,550</td>

                                            <td align="right">Rp. 26,850</td>

                                            <td><div style="text-align: center;  white-space: nowrap;">

                                                    <div id_select="494" class="btn btn-success edit">Edit</div>
                                                    <div id_select="494" class="btn btn-danger hapus">Hapus</div>                                                         

                                                </div>
                                            </td>                                          



                                        </tr>



                                          



                                                                        



                                        <tr id="baris_495">

                                            <td align="center" style="width: 1%;"><input type="checkbox" id_select="495" name="select_495" class="select" /></td>

                                            <td align="center"><div style="text-align: center;  white-space: nowrap;">

                                                <img src="http://localhost/laundry/uploads/provider/default.png" width="95px" /><br />
                                                GAME

                                            </div></td>

                                            <td align="center">ZYNGA</td>

                                            <td align="center">ZNG50</td>

                                            <td align="left">ZYNGA 50.000</td>

                                            <td align="right">Rp. 65,550</td>

                                            <td align="right">Rp. 65,850</td>

                                            <td><div style="text-align: center;  white-space: nowrap;">

                                                    <div id_select="495" class="btn btn-success edit">Edit</div>
                                                    <div id_select="495" class="btn btn-danger hapus">Hapus</div>                                                         

                                                </div>
                                            </td>                                          



                                        </tr>



                                          



                                                                        



                                        <tr id="baris_496">

                                            <td align="center" style="width: 1%;"><input type="checkbox" id_select="496" name="select_496" class="select" /></td>

                                            <td align="center"><div style="text-align: center;  white-space: nowrap;">

                                                <img src="http://localhost/laundry/uploads/provider/default.png" width="95px" /><br />
                                                GAME

                                            </div></td>

                                            <td align="center">ZYNGA</td>

                                            <td align="center">ZNG100</td>

                                            <td align="left">ZYNGA 100.000</td>

                                            <td align="right">Rp. 130,550</td>

                                            <td align="right">Rp. 130,850</td>

                                            <td><div style="text-align: center;  white-space: nowrap;">

                                                    <div id_select="496" class="btn btn-success edit">Edit</div>
                                                    <div id_select="496" class="btn btn-danger hapus">Hapus</div>                                                         

                                                </div>
                                            </td>                                          



                                        </tr>



                                          



                                                                        



                                        <tr id="baris_239">

                                            <td align="center" style="width: 1%;"><input type="checkbox" id_select="239" name="select_239" class="select" /></td>

                                            <td align="center"><div style="text-align: center;  white-space: nowrap;">

                                                <img src="http://localhost/laundry/uploads/provider/default.png" width="95px" /><br />
                                                GAME

                                            </div></td>

                                            <td align="center">Xbox Live Gift Card</td>

                                            <td align="center">BOX10</td>

                                            <td align="left">Xbox Live Gift Card $10</td>

                                            <td align="right">Rp. 140,550</td>

                                            <td align="right">Rp. 140,850</td>

                                            <td><div style="text-align: center;  white-space: nowrap;">

                                                    <div id_select="239" class="btn btn-success edit">Edit</div>
                                                    <div id_select="239" class="btn btn-danger hapus">Hapus</div>                                                         

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



                                            


                                                                            



                                        


                                            


                                                <a class="btn btn-default" href="list.php?page=5">5</a>



                                            


                                                                            



                                        


                                                                        



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

									<img src="http://localhost/laundry/templates/back-end/penguin/assets/images/faces/face12.png" alt="user">

								</div>

								<div class="chat-user-status">

									<ul>

										<li class="text-semibold"> John Parker</li>

										<li><small>Online</small></li>

									</ul>

								</div>

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

										<a href="http://localhost/laundry/templates/back-end/penguin/assets/images/demo/pic7.jpg" class="venobox"><img src="http://localhost/laundry/templates/back-end/penguin/assets/images/demo/pic7.jpg" alt=""/></a>

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

								<div><span class="chat-avatar"><img src="http://localhost/laundry/templates/back-end/penguin/assets/images/faces/face1.png" alt="Avatar"></span><span class="chat-u-info">Jane Elliott<cite>Li Europan lingues es...</cite></span>

								</div>

								<span class="chat-u-status"><i class="icon icon-circles"></i></span>

							</li>

							<li>

								<div><span class="chat-avatar"><img src="http://localhost/laundry/templates/back-end/penguin/assets/images/faces/face2.png" alt="Avatar"></span><span class="chat-u-info">Florence Douglas<cite>Busy</cite></span>

								</div>

								<span class="chat-u-status"><i class="icon icon-circles"></i></span>

							</li>

							<li class="chat-u-online">

								<div><span class="chat-avatar"><img src="http://localhost/laundry/templates/back-end/penguin/assets/images/faces/face3.png" alt="Avatar"></span><span class="chat-u-info">Jacqueline Howell<cite>Available</cite></span>

								</div>

								<span class="chat-u-status"><i class="icon icon-circles"></i></span>

							</li>

							<li class="chat-u-online">

								<div><span class="chat-avatar"><img src="http://localhost/laundry/templates/back-end/penguin/assets/images/faces/face4.png" alt="Avatar"></span><span class="chat-u-info">Eugine Turner<cite>Occidental in fact...</cite></span>

								</div>

								<span class="chat-u-status"><i class="icon icon-circles"></i></span>

							</li>

							<li class="chat-u-busy">

								<div><span class="chat-avatar"><img src="http://localhost/laundry/templates/back-end/penguin/assets/images/faces/face5.png" alt="Avatar"></span><span class="chat-u-info">Andrew Brewer<cite>Busy</cite></span>

								</div>

								<span class="chat-u-status"><i class="icon icon-circles"></i></span>

							</li>

							<li class="chat-u-away">

								<div><span class="chat-avatar"><img src="http://localhost/laundry/templates/back-end/penguin/assets/images/faces/face6.png" alt="Avatar"></span><span class="chat-u-info">Jonaly Smith<cite>Available</cite></span>

								</div>

								<span class="chat-u-status"><i class="icon icon-circles"></i></span>

							</li>

							<li class="chat-u-online">

								<div><span class="chat-avatar"><img src="http://localhost/laundry/templates/back-end/penguin/assets/images/faces/face7.png" alt="Avatar"></span><span class="chat-u-info">Ann Porter<cite>Available</cite></span>

								</div>

								<span class="chat-u-status"><i class="icon icon-circles"></i></span>

							</li>

							<li class="chat-u-away">

								<div><span class="chat-avatar"><img src="http://localhost/laundry/templates/back-end/penguin/assets/images/faces/face8.png" alt="Avatar"></span><span class="chat-u-info">John Deo<cite>Do not disturb</cite></span>

								</div>

								<span class="chat-u-status"><i class="icon icon-circles"></i></span>

							</li>

							<li>

								<div><span class="chat-avatar"><img src="http://localhost/laundry/templates/back-end/penguin/assets/images/faces/face9.png" alt="Avatar"></span><span class="chat-u-info">Marilyn Romero<cite>On refusa continuar payar...</cite></span>

								</div>

								<span class="chat-u-status"><i class="icon icon-circles"></i></span>

							</li>

							<li>

								<div><span class="chat-avatar"><img src="http://localhost/laundry/templates/back-end/penguin/assets/images/faces/face10.png" alt="Avatar"></span><span class="chat-u-info">Carol Gibson<cite>Gone for a weekend</cite></span>

								</div>

								<span class="chat-u-status"><i class="icon icon-circles"></i></span>

							</li>

							<li>

								<div><span class="chat-avatar"><img src="http://localhost/laundry/templates/back-end/penguin/assets/images/faces/face11.png" alt="Avatar"></span><span class="chat-u-info">Scott Ruiz<cite>At solmen va esser...</cite></span>

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
                    <a href="http://localhost/laundry" target="_blank">LAUNDRY</a>&nbsp;2020
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

						<img src="http://localhost/laundry/templates/back-end/penguin/assets/images/themes/light.jpg" alt=""/>

					</div>				

				</li>

				<li class="list-title clearfix">Mirage</li>

				<li>

					<div class="theme pull-left" id="mirage">

						<img src="http://localhost/laundry/templates/back-end/penguin/assets/images/themes/mirage_dark.jpg" alt=""/>

					</div>				

				</li>			

				<li>

					<div class="theme pull-left" id="mirage_light">

						<img src="http://localhost/laundry/templates/back-end/penguin/assets/images/themes/mirage_light.jpg" alt=""/>

					</div>				

				</li>

				<li>

					<div class="theme pull-left" id="mirage_light_sidebar">

						<img src="http://localhost/laundry/templates/back-end/penguin/assets/images/themes/mirage_light_sidebar.jpg" alt=""/>

					</div>				

				</li>										

				<li class="list-title clearfix">Burnt Sienna</li>

				<li>

					<div class="theme pull-left" id="burnt_sienna_dark">

						<img src="http://localhost/laundry/templates/back-end/penguin/assets/images/themes/burnt_sienna_dark.jpg" alt=""/>

					</div>				

				</li>			

				<li>

					<div class="theme pull-left" id="burnt_sienna_light">

						<img src="http://localhost/laundry/templates/back-end/penguin/assets/images/themes/burnt_sienna_light.jpg" alt=""/>

					</div>				

				</li>

				<li>

					<div class="theme pull-left" id="burnt_sienna_light_sidebar">

						<img src="http://localhost/laundry/templates/back-end/penguin/assets/images/themes/burnt_sienna_light_sidebar.jpg" alt=""/>

					</div>				

				</li>		



				<li class="list-title clearfix">Amethyst</li>

				<li>

					<div class="theme pull-left" id="amethyst_dark">

						<img src="http://localhost/laundry/templates/back-end/penguin/assets/images/themes/amethyst_dark.jpg" alt=""/>

					</div>				

				</li>			

				<li>

					<div class="theme pull-left" id="amethyst_light">

						<img src="http://localhost/laundry/templates/back-end/penguin/assets/images/themes/amethyst_light.jpg" alt=""/>

					</div>				

				</li>

				<li>

					<div class="theme pull-left" id="amethyst_light_sidebar">

						<img src="http://localhost/laundry/templates/back-end/penguin/assets/images/themes/amethyst_light_sidebar.jpg" alt=""/>

					</div>				

				</li>		



				<li class="list-title clearfix">Fuchsia Blue</li>

				<li>

					<div class="theme pull-left" id="fuchsiablue_dark">

						<img src="http://localhost/laundry/templates/back-end/penguin/assets/images/themes/fuchsiablue_dark.jpg" alt=""/>

					</div>				

				</li>			

				<li>

					<div class="theme pull-left" id="fuchsiablue_light">

						<img src="http://localhost/laundry/templates/back-end/penguin/assets/images/themes/fuchsiablue_light.jpg" alt=""/>

					</div>				

				</li>

				<li>

					<div class="theme pull-left" id="fuchsiablue_light_sidebar">

						<img src="http://localhost/laundry/templates/back-end/penguin/assets/images/themes/fuchsiablue_light_sidebar.jpg" alt=""/>

					</div>				

				</li>



				<li class="list-title clearfix">Picton Blue</li>

				<li>

					<div class="theme pull-left" id="pictonblue_dark">

						<img src="http://localhost/laundry/templates/back-end/penguin/assets/images/themes/pictonblue_dark.jpg" alt=""/>

					</div>				

				</li>			

				<li>

					<div class="theme pull-left" id="pictonblue_light">

						<img src="http://localhost/laundry/templates/back-end/penguin/assets/images/themes/pictonblue_light.jpg" alt=""/>

					</div>				

				</li>

				<li>

					<div class="theme pull-left" id="pictonblue_light_sidebar">

						<img src="http://localhost/laundry/templates/back-end/penguin/assets/images/themes/pictonblue_light_sidebar.jpg" alt=""/>

					</div>				

				</li>

				

				<li class="list-title clearfix">Jungle Green</li>

				<li>

					<div class="theme pull-left" id="junglegreen_dark">

						<img src="http://localhost/laundry/templates/back-end/penguin/assets/images/themes/junglegreen_dark.jpg" alt=""/>

					</div>				

				</li>			

				<li>

					<div class="theme pull-left" id="junglegreen_light">

						<img src="http://localhost/laundry/templates/back-end/penguin/assets/images/themes/junglegreen_light.jpg" alt=""/>

					</div>				

				</li>

				<li>

					<div class="theme pull-left" id="junglegreen_light_sidebar">

						<img src="http://localhost/laundry/templates/back-end/penguin/assets/images/themes/junglegreen_light_sidebar.jpg" alt=""/>

					</div>				

				</li>

				

				<li class="list-title clearfix">Fern</li>

				<li>

					<div class="theme pull-left" id="fern_dark">

						<img src="http://localhost/laundry/templates/back-end/penguin/assets/images/themes/fern_dark.jpg" alt=""/>

					</div>				

				</li>			

				<li>

					<div class="theme pull-left" id="fern_light">

						<img src="http://localhost/laundry/templates/back-end/penguin/assets/images/themes/fern_light.jpg" alt=""/>

					</div>				

				</li>

				<li>

					<div class="theme pull-left" id="fern_light_sidebar">

						<img src="http://localhost/laundry/templates/back-end/penguin/assets/images/themes/fern_light_sidebar.jpg" alt=""/>

					</div>				

				</li>

				

				<li class="list-title clearfix">Sunglow</li>

				<li>

					<div class="theme pull-left" id="sunglow_dark">

						<img src="http://localhost/laundry/templates/back-end/penguin/assets/images/themes/sunglow_dark.jpg" alt=""/>

					</div>				

				</li>			

				<li>

					<div class="theme pull-left" id="sunglow_light">

						<img src="http://localhost/laundry/templates/back-end/penguin/assets/images/themes/sunglow_light.jpg" alt=""/>

					</div>				

				</li>

				<li>

					<div class="theme pull-left" id="sunglow_light_sidebar">

						<img src="http://localhost/laundry/templates/back-end/penguin/assets/images/themes/sunglow_light_sidebar.jpg" alt=""/>

					</div>				

				</li>

				

				<li class="list-title clearfix">Regent Grey</li>

				<li>

					<div class="theme pull-left" id="regentgrey_dark">

						<img src="http://localhost/laundry/templates/back-end/penguin/assets/images/themes/regentgrey_dark.jpg" alt=""/>

					</div>				

				</li>			

				<li>

					<div class="theme pull-left" id="regentgrey_light">

						<img src="http://localhost/laundry/templates/back-end/penguin/assets/images/themes/regentgrey_light.jpg" alt=""/>

					</div>				

				</li>

				<li>

					<div class="theme pull-left" id="regentgrey_light_sidebar">

						<img src="http://localhost/laundry/templates/back-end/penguin/assets/images/themes/regentgrey_light_sidebar.jpg" alt=""/>

					</div>				

				</li>

			</ul>	

		</div>

	</div>



<a id="scrollTop" href="tables_responsive.htm#top"><i class="icon-arrow-up12"></i></a>	



<!-- Global scripts -->

<script src="http://localhost/laundry/templates/back-end/penguin/js/jquery.js"></script>	

<script src="http://localhost/laundry/templates/back-end/penguin/js/bootstrap.js"></script>

<script src="http://localhost/laundry/templates/back-end/penguin/js/jquery.ui.js"></script>

<script src="http://localhost/laundry/templates/back-end/penguin/js/nav.accordion.js"></script>	

<script src="http://localhost/laundry/templates/back-end/penguin/js/hammerjs.js"></script>

<script src="http://localhost/laundry/templates/back-end/penguin/js/jquery.hammer.js"></script>

<script src="http://localhost/laundry/templates/back-end/penguin/js/scrollup.js"></script>	

<script src="http://localhost/laundry/templates/back-end/penguin/js/jquery.slimscroll.js"></script>	

<script src="http://localhost/laundry/templates/back-end/penguin/js/smart-resize.js"></script>

<script src="http://localhost/laundry/templates/back-end/penguin/js/blockui.min.js"></script>		

<script src="http://localhost/laundry/templates/back-end/penguin/js/wow.min.js"></script>					

<script src="http://localhost/laundry/templates/back-end/penguin/js/fancybox.min.js"></script>

<script src="http://localhost/laundry/templates/back-end/penguin/js/venobox.js"></script>

<script src="http://localhost/laundry/templates/back-end/penguin/js/forms/uniform.min.js"></script>

<script src="http://localhost/laundry/templates/back-end/penguin/js/forms/switchery.js"></script>

<script src="http://localhost/laundry/templates/back-end/penguin/js/forms/select2.min.js"></script>	

<script src="http://localhost/laundry/templates/back-end/penguin/js/core.js"></script>

<!-- /global scripts -->

<script type="text/javascript" src="http://localhost/laundry/templates/back-end/penguin/js/moment.min.js"></script>

<script type="text/javascript" src="http://localhost/laundry/templates/back-end/penguin/js/legacy.js"></script>

<script type="text/javascript" src="http://localhost/laundry/templates/back-end/penguin/js/forms/daterangepicker.js"></script>

<script type="text/javascript" src="http://localhost/laundry/templates/back-end/penguin/js/forms/picker.js"></script>

<script type="text/javascript" src="http://localhost/laundry/templates/back-end/penguin/js/forms/picker.date.js"></script>

<script type="text/javascript" src="http://localhost/laundry/templates/back-end/penguin/js/forms/picker.time.js"></script>

<script type="text/javascript" src="http://localhost/laundry/templates/back-end/penguin/js/forms/spectrum.js"></script>

<script type="text/javascript" src="http://localhost/laundry/templates/back-end/penguin/js/pages/pickers.js"></script>

<!-- Page scripts -->

<script src="http://localhost/laundry/templates/back-end/penguin/js/tables/footable.min.js"></script>

<script src="http://localhost/laundry/templates/back-end/penguin/js/pages/tables_responsive.js"></script>

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

            	var $input = $( this );

                var id = $input.attr( "id_select" );

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



            



            $( "#select_all" ).change(function() {



                var is_checked = $( "#select_all" ).is(':checked');







                var element = $( ".select" );



                var lengh = element.size();



                delete_selected = '';



                for(var i=0; i<lengh; i++) {



                    var id = element[i].getAttribute('id_select');



                    var nama = element[i].getAttribute('name');



                



                    $('[name='+nama+']').prop('checked', is_checked);                    



                    if(is_checked) delete_selected+=(delete_selected.length>0?',':'')+(is_checked?id:"");                    



                }



                



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



                // var id = this.getAttribute('id');

				swal({

				  title: 'Konfirmasi Penghapusan',

				  text: 'Apakah Anda Yakin ingin menghapus data?',

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

							if(data['success']) {

								swal('Sukses', 'Data Berhasil Dihapus', 'success')

								window.location='list.php';

							} else {

								swal('Error', data['message'], 'error')

								setMessage('error', data['message']);

							}

						},

						error: function(jqXHR, textStatus, errorThrown) {

							swal('Error', 'Terjadi kesalahan system', 'error')

							setMessage('error', 'Terjadi kesalahan system.');

						}

					});                                



				}, function (dismiss) {

				  // dismiss can be 'cancel', 'overlay', 'close', 'timer'

				  if (dismiss === 'cancel') {

					swal('Cancelled', 'Batal Menghapus Data', 'warning')

				  }

				})

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
                        url: 'http://localhost/laundry/store/notifDataStore.php',
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
