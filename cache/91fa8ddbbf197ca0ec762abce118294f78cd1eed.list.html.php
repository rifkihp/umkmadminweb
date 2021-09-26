<?php /*%%SmartyHeaderCode:17439041995e89eb062cdda4-26444652%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91fa8ddbbf197ca0ec762abce118294f78cd1eed' => 
    array (
      0 => '..\\..\\templates\\back-end\\penguin\\konfirmasi_pembayaran\\list.html',
      1 => 1538456120,
      2 => 'file',
    ),
    '36c957d0ce96fcd53b0aabe947fd7b28daf672cf' => 
    array (
      0 => 'D:\\www\\laundry\\templates\\back-end\\penguin\\includes\\head.html',
      1 => 1579678289,
      2 => 'file',
    ),
    '3eb110c78870580645555cb43e9fd05f5361d06e' => 
    array (
      0 => 'D:\\www\\laundry\\templates\\back-end\\penguin\\includes\\sidebar.html',
      1 => 1544655944,
      2 => 'file',
    ),
    'a9757af04b4825029762721ec8738ba815eb3390' => 
    array (
      0 => 'D:\\www\\laundry\\templates\\back-end\\penguin\\includes\\footer.html',
      1 => 1544657450,
      2 => 'file',
    ),
    '8555d6efa4281b027236b553715ba6977ad1f015' => 
    array (
      0 => 'D:\\www\\laundry\\templates\\back-end\\penguin\\includes\\footer_js.html',
      1 => 1538456120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17439041995e89eb062cdda4-26444652',
  'variables' => 
  array (
    'title' => 0,
    'adminweburl' => 0,
    'sub_title' => 0,
    'tanggal_dari' => 0,
    'tanggal_sampai' => 0,
    'filter_status' => 0,
    'query' => 0,
    'listdetail' => 0,
    'entry' => 0,
    'limitpage' => 0,
    'currentpage' => 0,
    'no' => 0,
    'array_akses' => 0,
    'tpl_dir' => 0,
    'homeurl' => 0,
    'totalpage' => 0,
    'frompage' => 0,
    'untilpage' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e89eb06c4a388_62449033',
  'cache_lifetime' => 0,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e89eb06c4a388_62449033')) {function content_5e89eb06c4a388_62449033($_smarty_tpl) {?><!doctype html>
<html lang="en">
    <head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>laundry</title>	
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
                                <span id="total_notif_belum_lunas" class="bubble">40</span>
                                <span style="color: #ffffff">Belum Bayar / KEEP </span></a>
                            </li>
                        
                                                    <li class="dropdown-toggle hidden-xs" style="border-left: 1px solid #ffffff;">
                                <a href="http://localhost/laundry/adminweb/konfirmasi/list.php?status=0" class="dropdown-toggle" style="width: 100%; padding-left: 10px; padding-right: 30px;"><i class="icon-reading"></i>
                                <span id="total_notif_konfirmasi_bayar" class="bubble">1</span>
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
                                            <li class="active acc-parent-li">
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
                <i class="icon-table position-left"></i> Konfirmasi Pembayaran
            </div>
            <ul class="breadcrumb">
                <li><a href="http://localhost/laundry/adminweb">Beranda</a></li>
                <li><a href="http://localhost/laundry/adminweb/pengaturan/">Konfirmasi Pembayaran</a></li>
                <li class="active">List of Konfirmasi Pembayaran</li>
            </ul>					
        </div>
    </div>		
    <!--/Page Header-->
			
    <!--Page Content-->
    <div id="wrapper" class="container-fluid page-content">				
        <div class="panel panel-flat" style="margin: 5px;">
            
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
                        <td width="20%" style="padding: 8px;"><label>Status Pembayaran:</label></td>
                        <td width="80%">
                            <select id="filter_status" class="form-control" name="status">
                                <option value="3" selected="selected">Semua Status</option>
                                <option value="0" >Status Menunggu</option>              
                                <option value="1" >Status Tidak Valid</option>              
                                <option value="2" >Status Valid</option> 
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
        					
            <div class="table-responsive">
                <table class="table datatable table-striped">
                    <thead>
                        <tr>
                            <th width="10%"><div style="text-align: center;">No.</div></th>
                            <th width="90%"><div style="text-align: left;">Data Transfer</div></th>
                        </tr>
                    </thead>

                    <tbody>
                                                                                    
                            <tr id="baris_139">
                                <td  style='vertical-align: top;' align="center">1</td>
                                <td>
                                    <table width="100%">
                                        <tr><td>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <table width="100%">
                                                        <tr><td width="30%"><b>Pengguna</b> </td><td><b>:</b> Rifki Heruprasetyo</td></tr>
                                                        <tr><td><b>Email</b> </td><td><b>:</b> kiezie08@gmail.com</td></tr>                                                                    
                                                        <tr><td><b>Tanggal</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> 05-04-2020 21:27:16</td></tr>
                                                        <tr><td><b>Kode Trx</b> </td><td><b>:</b> <a href='http://localhost/laundry/adminweb/pemesanan/edit.php?id=000082'>#000082</a></td></tr>
                                                        <tr><td><b>Transfer</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> 95,330,000</td></tr>                                                                    
                                                    </table>
                                                </div>
                                                <div class="col-md-4">
                                                    <table width="100%">
                                                        <tr><td width="30%"><b>Tujuan</b></td><td><b>:</b> Muamalat</td></tr>
                                                        <tr><td><b>Penerima</b></td><td><b>:</b> 3660008797</td></tr>
                                                        <tr><td><b>Melalui</b> </td><td><b>:</b> Bank Mandiri</td></tr>
                                                        <tr><td><b>Pengirim</b> </td><td><b>:</b> Rifki</td></tr>

                                                        <tr><td><b>Status</b> </td><td><b>:</b>                                                                 <label id="status_valid_139" style="margin-top: 5px;"><input type="radio" name="status_139" id_trf="139" value="2"  />&nbsp;&nbsp;<span class="label bg-green" style="font-size: 9pt;">VALID</span>&nbsp;&nbsp;</label>
                                                                <label id="status_tidak_valid_139" style="margin-top: 5px;"><input type="radio" name="status_139" id_trf="139" value="1"  />&nbsp;&nbsp;<span class="label bg-red" style="font-size: 9pt;">TIDAK VALID</span>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                                <img id="i_loading_139" src="http://localhost/laundry/templates/back-end/penguin/assets/img/loading.gif" style="display: none;" />
                                                                                                                    <tr><td colspan="2">
                                                                                                                            <div id="alert_error_139" class="form-group" style="display: none;">
                                                                    <div class="alert alert-danger">&nbsp;</div>
                                                                </div>
                                                                <div id="alert_success_139" class="form-group" style="display: none;">                         
                                                                    <div class="alert alert-info">&nbsp;</div>
                                                                </div>
                                                                                                                    
                                                        </div></td></tr>
                                                    </table>
                                                </div>
                                                <div class="col-md-4">
                                                    <div align="right">
                                                        <table>
                                                            <tr><td>
                                                                    <b>Bukti Pembayaran:</b>
                                                                <div class="zoom"><img src="http://localhost/laundry/uploads/konfirmasi/17862349.jpg" height="250" width="250" /> </div>    
                                                            </td></tr>        
                                                        </table>
                                                    </div>
                                                </div>                                                            
                                        </td></tr>   
                                    </table>    
                                </td>                                           
                            </tr>
                              
                                                            
                            <tr id="baris_138">
                                <td  style='vertical-align: top;' align="center">2</td>
                                <td>
                                    <table width="100%">
                                        <tr><td>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <table width="100%">
                                                        <tr><td width="30%"><b>Pengguna</b> </td><td><b>:</b> astiti </td></tr>
                                                        <tr><td><b>Email</b> </td><td><b>:</b> dedee.astiti10@gmail.com</td></tr>                                                                    
                                                        <tr><td><b>Tanggal</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> 14-02-2019 17:34:38</td></tr>
                                                        <tr><td><b>Kode Trx</b> </td><td><b>:</b> <a href='http://localhost/laundry/adminweb/pemesanan/edit.php?id=DPT-20190214-0001'>#DPT-20190214-0001</a></td></tr>
                                                        <tr><td><b>Transfer</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> 400,000</td></tr>                                                                    
                                                    </table>
                                                </div>
                                                <div class="col-md-4">
                                                    <table width="100%">
                                                        <tr><td width="30%"><b>Tujuan</b></td><td><b>:</b> Muamalat</td></tr>
                                                        <tr><td><b>Penerima</b></td><td><b>:</b> 3660008797</td></tr>
                                                        <tr><td><b>Melalui</b> </td><td><b>:</b> Bank Mandiri</td></tr>
                                                        <tr><td><b>Pengirim</b> </td><td><b>:</b> Sri Astiti Widayanti</td></tr>

                                                        <tr><td><b>Status</b> </td><td><b>:</b>                                                                 <label id="status_valid_138" style="margin-top: 5px;"><input type="radio" name="status_138" id_trf="138" value="2" checked />&nbsp;&nbsp;<span class="label bg-green" style="font-size: 9pt;">VALID</span>&nbsp;&nbsp;</label>
                                                                <label id="status_tidak_valid_138" style="margin-top: 5px;"><input type="radio" name="status_138" id_trf="138" value="1"  />&nbsp;&nbsp;<span class="label bg-red" style="font-size: 9pt;">TIDAK VALID</span>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                                <img id="i_loading_138" src="http://localhost/laundry/templates/back-end/penguin/assets/img/loading.gif" style="display: none;" />
                                                                                                                    <tr><td colspan="2">
                                                                                                                            <div id="alert_error_138" class="form-group" style="display: none;">
                                                                    <div class="alert alert-danger">&nbsp;</div>
                                                                </div>
                                                                <div id="alert_success_138" class="form-group" style="display: none;">                         
                                                                    <div class="alert alert-info">&nbsp;</div>
                                                                </div>
                                                                                                                    
                                                        </div></td></tr>
                                                    </table>
                                                </div>
                                                <div class="col-md-4">
                                                    <div align="right">
                                                        <table>
                                                            <tr><td>
                                                                    <b>Bukti Pembayaran:</b>
                                                                <div class="zoom"><img src="http://localhost/laundry/uploads/konfirmasi/62134978.jpg" height="250" width="250" /> </div>    
                                                            </td></tr>        
                                                        </table>
                                                    </div>
                                                </div>                                                            
                                        </td></tr>   
                                    </table>    
                                </td>                                           
                            </tr>
                              
                                                            
                            <tr id="baris_137">
                                <td  style='vertical-align: top;' align="center">3</td>
                                <td>
                                    <table width="100%">
                                        <tr><td>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <table width="100%">
                                                        <tr><td width="30%"><b>Pengguna</b> </td><td><b>:</b> BAROKAH MULTI PAYMENT</td></tr>
                                                        <tr><td><b>Email</b> </td><td><b>:</b> siskalaurensia30@gmail.com</td></tr>                                                                    
                                                        <tr><td><b>Tanggal</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> 28-01-2019 07:41:53</td></tr>
                                                        <tr><td><b>Kode Trx</b> </td><td><b>:</b> <a href='http://localhost/laundry/adminweb/pemesanan/edit.php?id=DPT-20190128-0001'>#DPT-20190128-0001</a></td></tr>
                                                        <tr><td><b>Transfer</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> 500,000</td></tr>                                                                    
                                                    </table>
                                                </div>
                                                <div class="col-md-4">
                                                    <table width="100%">
                                                        <tr><td width="30%"><b>Tujuan</b></td><td><b>:</b> Muamalat</td></tr>
                                                        <tr><td><b>Penerima</b></td><td><b>:</b> 3660008797</td></tr>
                                                        <tr><td><b>Melalui</b> </td><td><b>:</b> Mandiri</td></tr>
                                                        <tr><td><b>Pengirim</b> </td><td><b>:</b> Maria Siska Laurensia</td></tr>

                                                        <tr><td><b>Status</b> </td><td><b>:</b>                                                                 <label id="status_valid_137" style="margin-top: 5px;"><input type="radio" name="status_137" id_trf="137" value="2"  />&nbsp;&nbsp;<span class="label bg-green" style="font-size: 9pt;">VALID</span>&nbsp;&nbsp;</label>
                                                                <label id="status_tidak_valid_137" style="margin-top: 5px;"><input type="radio" name="status_137" id_trf="137" value="1" checked />&nbsp;&nbsp;<span class="label bg-red" style="font-size: 9pt;">TIDAK VALID</span>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                                <img id="i_loading_137" src="http://localhost/laundry/templates/back-end/penguin/assets/img/loading.gif" style="display: none;" />
                                                                                                                    <tr><td colspan="2">
                                                                                                                            <div id="alert_error_137" class="form-group" style="display: none;">
                                                                    <div class="alert alert-danger">&nbsp;</div>
                                                                </div>
                                                                <div id="alert_success_137" class="form-group" style="display: none;">                         
                                                                    <div class="alert alert-info">&nbsp;</div>
                                                                </div>
                                                                                                                    
                                                        </div></td></tr>
                                                    </table>
                                                </div>
                                                <div class="col-md-4">
                                                    <div align="right">
                                                        <table>
                                                            <tr><td>
                                                                    <b>Bukti Pembayaran:</b>
                                                                <div class="zoom"><img src="http://localhost/laundry/uploads/konfirmasi/default.jpg" height="250" width="250" /> </div>    
                                                            </td></tr>        
                                                        </table>
                                                    </div>
                                                </div>                                                            
                                        </td></tr>   
                                    </table>    
                                </td>                                           
                            </tr>
                              
                                                            
                            <tr id="baris_136">
                                <td  style='vertical-align: top;' align="center">4</td>
                                <td>
                                    <table width="100%">
                                        <tr><td>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <table width="100%">
                                                        <tr><td width="30%"><b>Pengguna</b> </td><td><b>:</b> Heri </td></tr>
                                                        <tr><td><b>Email</b> </td><td><b>:</b> heri.yuli8488@yahoo.co.id</td></tr>                                                                    
                                                        <tr><td><b>Tanggal</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> 22-01-2019 17:21:57</td></tr>
                                                        <tr><td><b>Kode Trx</b> </td><td><b>:</b> <a href='http://localhost/laundry/adminweb/pemesanan/edit.php?id=DPT-20190122-0001'>#DPT-20190122-0001</a></td></tr>
                                                        <tr><td><b>Transfer</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> 200,000</td></tr>                                                                    
                                                    </table>
                                                </div>
                                                <div class="col-md-4">
                                                    <table width="100%">
                                                        <tr><td width="30%"><b>Tujuan</b></td><td><b>:</b> Muamalat</td></tr>
                                                        <tr><td><b>Penerima</b></td><td><b>:</b> 3660008797</td></tr>
                                                        <tr><td><b>Melalui</b> </td><td><b>:</b> Heri</td></tr>
                                                        <tr><td><b>Pengirim</b> </td><td><b>:</b> Heri</td></tr>

                                                        <tr><td><b>Status</b> </td><td><b>:</b>                                                                 <label id="status_valid_136" style="margin-top: 5px;"><input type="radio" name="status_136" id_trf="136" value="2"  />&nbsp;&nbsp;<span class="label bg-green" style="font-size: 9pt;">VALID</span>&nbsp;&nbsp;</label>
                                                                <label id="status_tidak_valid_136" style="margin-top: 5px;"><input type="radio" name="status_136" id_trf="136" value="1" checked />&nbsp;&nbsp;<span class="label bg-red" style="font-size: 9pt;">TIDAK VALID</span>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                                <img id="i_loading_136" src="http://localhost/laundry/templates/back-end/penguin/assets/img/loading.gif" style="display: none;" />
                                                                                                                    <tr><td colspan="2">
                                                                                                                            <div id="alert_error_136" class="form-group" style="display: none;">
                                                                    <div class="alert alert-danger">&nbsp;</div>
                                                                </div>
                                                                <div id="alert_success_136" class="form-group" style="display: none;">                         
                                                                    <div class="alert alert-info">&nbsp;</div>
                                                                </div>
                                                                                                                    
                                                        </div></td></tr>
                                                    </table>
                                                </div>
                                                <div class="col-md-4">
                                                    <div align="right">
                                                        <table>
                                                            <tr><td>
                                                                    <b>Bukti Pembayaran:</b>
                                                                <div class="zoom"><img src="http://localhost/laundry/uploads/konfirmasi/default.jpg" height="250" width="250" /> </div>    
                                                            </td></tr>        
                                                        </table>
                                                    </div>
                                                </div>                                                            
                                        </td></tr>   
                                    </table>    
                                </td>                                           
                            </tr>
                              
                                                            
                            <tr id="baris_135">
                                <td  style='vertical-align: top;' align="center">5</td>
                                <td>
                                    <table width="100%">
                                        <tr><td>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <table width="100%">
                                                        <tr><td width="30%"><b>Pengguna</b> </td><td><b>:</b> desti anggraini</td></tr>
                                                        <tr><td><b>Email</b> </td><td><b>:</b> judesdesti@gmail.com</td></tr>                                                                    
                                                        <tr><td><b>Tanggal</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> 21-01-2019 07:59:09</td></tr>
                                                        <tr><td><b>Kode Trx</b> </td><td><b>:</b> <a href='http://localhost/laundry/adminweb/pemesanan/edit.php?id=DPT-20190121-0003'>#DPT-20190121-0003</a></td></tr>
                                                        <tr><td><b>Transfer</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> 200,000</td></tr>                                                                    
                                                    </table>
                                                </div>
                                                <div class="col-md-4">
                                                    <table width="100%">
                                                        <tr><td width="30%"><b>Tujuan</b></td><td><b>:</b> Muamalat</td></tr>
                                                        <tr><td><b>Penerima</b></td><td><b>:</b> 3660008797</td></tr>
                                                        <tr><td><b>Melalui</b> </td><td><b>:</b> jully admin</td></tr>
                                                        <tr><td><b>Pengirim</b> </td><td><b>:</b> desti anggraini</td></tr>

                                                        <tr><td><b>Status</b> </td><td><b>:</b>                                                                 <label id="status_valid_135" style="margin-top: 5px;"><input type="radio" name="status_135" id_trf="135" value="2" checked />&nbsp;&nbsp;<span class="label bg-green" style="font-size: 9pt;">VALID</span>&nbsp;&nbsp;</label>
                                                                <label id="status_tidak_valid_135" style="margin-top: 5px;"><input type="radio" name="status_135" id_trf="135" value="1"  />&nbsp;&nbsp;<span class="label bg-red" style="font-size: 9pt;">TIDAK VALID</span>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                                <img id="i_loading_135" src="http://localhost/laundry/templates/back-end/penguin/assets/img/loading.gif" style="display: none;" />
                                                                                                                    <tr><td colspan="2">
                                                                                                                            <div id="alert_error_135" class="form-group" style="display: none;">
                                                                    <div class="alert alert-danger">&nbsp;</div>
                                                                </div>
                                                                <div id="alert_success_135" class="form-group" style="display: none;">                         
                                                                    <div class="alert alert-info">&nbsp;</div>
                                                                </div>
                                                                                                                    
                                                        </div></td></tr>
                                                    </table>
                                                </div>
                                                <div class="col-md-4">
                                                    <div align="right">
                                                        <table>
                                                            <tr><td>
                                                                    <b>Bukti Pembayaran:</b>
                                                                <div class="zoom"><img src="http://localhost/laundry/uploads/konfirmasi/default.jpg" height="250" width="250" /> </div>    
                                                            </td></tr>        
                                                        </table>
                                                    </div>
                                                </div>                                                            
                                        </td></tr>   
                                    </table>    
                                </td>                                           
                            </tr>
                              
                                                            
                            <tr id="baris_134">
                                <td  style='vertical-align: top;' align="center">6</td>
                                <td>
                                    <table width="100%">
                                        <tr><td>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <table width="100%">
                                                        <tr><td width="30%"><b>Pengguna</b> </td><td><b>:</b> Heri </td></tr>
                                                        <tr><td><b>Email</b> </td><td><b>:</b> heri.yuli8488@yahoo.co.id</td></tr>                                                                    
                                                        <tr><td><b>Tanggal</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> 20-01-2019 19:20:51</td></tr>
                                                        <tr><td><b>Kode Trx</b> </td><td><b>:</b> <a href='http://localhost/laundry/adminweb/pemesanan/edit.php?id=DPT-20190120-0001'>#DPT-20190120-0001</a></td></tr>
                                                        <tr><td><b>Transfer</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> 200,000</td></tr>                                                                    
                                                    </table>
                                                </div>
                                                <div class="col-md-4">
                                                    <table width="100%">
                                                        <tr><td width="30%"><b>Tujuan</b></td><td><b>:</b> Muamalat</td></tr>
                                                        <tr><td><b>Penerima</b></td><td><b>:</b> 3660008797</td></tr>
                                                        <tr><td><b>Melalui</b> </td><td><b>:</b> heri</td></tr>
                                                        <tr><td><b>Pengirim</b> </td><td><b>:</b> heri</td></tr>

                                                        <tr><td><b>Status</b> </td><td><b>:</b>                                                                 <label id="status_valid_134" style="margin-top: 5px;"><input type="radio" name="status_134" id_trf="134" value="2"  />&nbsp;&nbsp;<span class="label bg-green" style="font-size: 9pt;">VALID</span>&nbsp;&nbsp;</label>
                                                                <label id="status_tidak_valid_134" style="margin-top: 5px;"><input type="radio" name="status_134" id_trf="134" value="1" checked />&nbsp;&nbsp;<span class="label bg-red" style="font-size: 9pt;">TIDAK VALID</span>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                                <img id="i_loading_134" src="http://localhost/laundry/templates/back-end/penguin/assets/img/loading.gif" style="display: none;" />
                                                                                                                    <tr><td colspan="2">
                                                                                                                            <div id="alert_error_134" class="form-group" style="display: none;">
                                                                    <div class="alert alert-danger">&nbsp;</div>
                                                                </div>
                                                                <div id="alert_success_134" class="form-group" style="display: none;">                         
                                                                    <div class="alert alert-info">&nbsp;</div>
                                                                </div>
                                                                                                                    
                                                        </div></td></tr>
                                                    </table>
                                                </div>
                                                <div class="col-md-4">
                                                    <div align="right">
                                                        <table>
                                                            <tr><td>
                                                                    <b>Bukti Pembayaran:</b>
                                                                <div class="zoom"><img src="http://localhost/laundry/uploads/konfirmasi/default.jpg" height="250" width="250" /> </div>    
                                                            </td></tr>        
                                                        </table>
                                                    </div>
                                                </div>                                                            
                                        </td></tr>   
                                    </table>    
                                </td>                                           
                            </tr>
                              
                                                            
                            <tr id="baris_133">
                                <td  style='vertical-align: top;' align="center">7</td>
                                <td>
                                    <table width="100%">
                                        <tr><td>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <table width="100%">
                                                        <tr><td width="30%"><b>Pengguna</b> </td><td><b>:</b> Heri </td></tr>
                                                        <tr><td><b>Email</b> </td><td><b>:</b> heri.yuli8488@yahoo.co.id</td></tr>                                                                    
                                                        <tr><td><b>Tanggal</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> 18-01-2019 13:00:56</td></tr>
                                                        <tr><td><b>Kode Trx</b> </td><td><b>:</b> <a href='http://localhost/laundry/adminweb/pemesanan/edit.php?id=DPT-20190118-0002'>#DPT-20190118-0002</a></td></tr>
                                                        <tr><td><b>Transfer</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> 325,000</td></tr>                                                                    
                                                    </table>
                                                </div>
                                                <div class="col-md-4">
                                                    <table width="100%">
                                                        <tr><td width="30%"><b>Tujuan</b></td><td><b>:</b> Muamalat</td></tr>
                                                        <tr><td><b>Penerima</b></td><td><b>:</b> 3660008797</td></tr>
                                                        <tr><td><b>Melalui</b> </td><td><b>:</b> Heri</td></tr>
                                                        <tr><td><b>Pengirim</b> </td><td><b>:</b> Heri</td></tr>

                                                        <tr><td><b>Status</b> </td><td><b>:</b>                                                                 <label id="status_valid_133" style="margin-top: 5px;"><input type="radio" name="status_133" id_trf="133" value="2" checked />&nbsp;&nbsp;<span class="label bg-green" style="font-size: 9pt;">VALID</span>&nbsp;&nbsp;</label>
                                                                <label id="status_tidak_valid_133" style="margin-top: 5px;"><input type="radio" name="status_133" id_trf="133" value="1"  />&nbsp;&nbsp;<span class="label bg-red" style="font-size: 9pt;">TIDAK VALID</span>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                                <img id="i_loading_133" src="http://localhost/laundry/templates/back-end/penguin/assets/img/loading.gif" style="display: none;" />
                                                                                                                    <tr><td colspan="2">
                                                                                                                            <div id="alert_error_133" class="form-group" style="display: none;">
                                                                    <div class="alert alert-danger">&nbsp;</div>
                                                                </div>
                                                                <div id="alert_success_133" class="form-group" style="display: none;">                         
                                                                    <div class="alert alert-info">&nbsp;</div>
                                                                </div>
                                                                                                                    
                                                        </div></td></tr>
                                                    </table>
                                                </div>
                                                <div class="col-md-4">
                                                    <div align="right">
                                                        <table>
                                                            <tr><td>
                                                                    <b>Bukti Pembayaran:</b>
                                                                <div class="zoom"><img src="http://localhost/laundry/uploads/konfirmasi/default.jpg" height="250" width="250" /> </div>    
                                                            </td></tr>        
                                                        </table>
                                                    </div>
                                                </div>                                                            
                                        </td></tr>   
                                    </table>    
                                </td>                                           
                            </tr>
                              
                                                            
                            <tr id="baris_132">
                                <td  style='vertical-align: top;' align="center">8</td>
                                <td>
                                    <table width="100%">
                                        <tr><td>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <table width="100%">
                                                        <tr><td width="30%"><b>Pengguna</b> </td><td><b>:</b> trisia afrianti</td></tr>
                                                        <tr><td><b>Email</b> </td><td><b>:</b> buraqwings@gmail.com</td></tr>                                                                    
                                                        <tr><td><b>Tanggal</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> 18-01-2019 09:18:42</td></tr>
                                                        <tr><td><b>Kode Trx</b> </td><td><b>:</b> <a href='http://localhost/laundry/adminweb/pemesanan/edit.php?id=DPT-20190118-0001'>#DPT-20190118-0001</a></td></tr>
                                                        <tr><td><b>Transfer</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> 40,000</td></tr>                                                                    
                                                    </table>
                                                </div>
                                                <div class="col-md-4">
                                                    <table width="100%">
                                                        <tr><td width="30%"><b>Tujuan</b></td><td><b>:</b> </td></tr>
                                                        <tr><td><b>Penerima</b></td><td><b>:</b> </td></tr>
                                                        <tr><td><b>Melalui</b> </td><td><b>:</b> admin</td></tr>
                                                        <tr><td><b>Pengirim</b> </td><td><b>:</b> tere</td></tr>

                                                        <tr><td><b>Status</b> </td><td><b>:</b>                                                                 <label id="status_valid_132" style="margin-top: 5px;"><input type="radio" name="status_132" id_trf="132" value="2" checked />&nbsp;&nbsp;<span class="label bg-green" style="font-size: 9pt;">VALID</span>&nbsp;&nbsp;</label>
                                                                <label id="status_tidak_valid_132" style="margin-top: 5px;"><input type="radio" name="status_132" id_trf="132" value="1"  />&nbsp;&nbsp;<span class="label bg-red" style="font-size: 9pt;">TIDAK VALID</span>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                                <img id="i_loading_132" src="http://localhost/laundry/templates/back-end/penguin/assets/img/loading.gif" style="display: none;" />
                                                                                                                    <tr><td colspan="2">
                                                                                                                            <div id="alert_error_132" class="form-group" style="display: none;">
                                                                    <div class="alert alert-danger">&nbsp;</div>
                                                                </div>
                                                                <div id="alert_success_132" class="form-group" style="display: none;">                         
                                                                    <div class="alert alert-info">&nbsp;</div>
                                                                </div>
                                                                                                                    
                                                        </div></td></tr>
                                                    </table>
                                                </div>
                                                <div class="col-md-4">
                                                    <div align="right">
                                                        <table>
                                                            <tr><td>
                                                                    <b>Bukti Pembayaran:</b>
                                                                <div class="zoom"><img src="http://localhost/laundry/uploads/konfirmasi/13679284.jpg" height="250" width="250" /> </div>    
                                                            </td></tr>        
                                                        </table>
                                                    </div>
                                                </div>                                                            
                                        </td></tr>   
                                    </table>    
                                </td>                                           
                            </tr>
                              
                                                            
                            <tr id="baris_131">
                                <td  style='vertical-align: top;' align="center">9</td>
                                <td>
                                    <table width="100%">
                                        <tr><td>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <table width="100%">
                                                        <tr><td width="30%"><b>Pengguna</b> </td><td><b>:</b> Heri </td></tr>
                                                        <tr><td><b>Email</b> </td><td><b>:</b> heri.yuli8488@yahoo.co.id</td></tr>                                                                    
                                                        <tr><td><b>Tanggal</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> 17-01-2019 12:00:24</td></tr>
                                                        <tr><td><b>Kode Trx</b> </td><td><b>:</b> <a href='http://localhost/laundry/adminweb/pemesanan/edit.php?id=DPT-20190117-0002'>#DPT-20190117-0002</a></td></tr>
                                                        <tr><td><b>Transfer</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> 200,000</td></tr>                                                                    
                                                    </table>
                                                </div>
                                                <div class="col-md-4">
                                                    <table width="100%">
                                                        <tr><td width="30%"><b>Tujuan</b></td><td><b>:</b> Muamalat</td></tr>
                                                        <tr><td><b>Penerima</b></td><td><b>:</b> 3660008797</td></tr>
                                                        <tr><td><b>Melalui</b> </td><td><b>:</b> Heri</td></tr>
                                                        <tr><td><b>Pengirim</b> </td><td><b>:</b> Heri</td></tr>

                                                        <tr><td><b>Status</b> </td><td><b>:</b>                                                                 <label id="status_valid_131" style="margin-top: 5px;"><input type="radio" name="status_131" id_trf="131" value="2" checked />&nbsp;&nbsp;<span class="label bg-green" style="font-size: 9pt;">VALID</span>&nbsp;&nbsp;</label>
                                                                <label id="status_tidak_valid_131" style="margin-top: 5px;"><input type="radio" name="status_131" id_trf="131" value="1"  />&nbsp;&nbsp;<span class="label bg-red" style="font-size: 9pt;">TIDAK VALID</span>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                                <img id="i_loading_131" src="http://localhost/laundry/templates/back-end/penguin/assets/img/loading.gif" style="display: none;" />
                                                                                                                    <tr><td colspan="2">
                                                                                                                            <div id="alert_error_131" class="form-group" style="display: none;">
                                                                    <div class="alert alert-danger">&nbsp;</div>
                                                                </div>
                                                                <div id="alert_success_131" class="form-group" style="display: none;">                         
                                                                    <div class="alert alert-info">&nbsp;</div>
                                                                </div>
                                                                                                                    
                                                        </div></td></tr>
                                                    </table>
                                                </div>
                                                <div class="col-md-4">
                                                    <div align="right">
                                                        <table>
                                                            <tr><td>
                                                                    <b>Bukti Pembayaran:</b>
                                                                <div class="zoom"><img src="http://localhost/laundry/uploads/konfirmasi/default.jpg" height="250" width="250" /> </div>    
                                                            </td></tr>        
                                                        </table>
                                                    </div>
                                                </div>                                                            
                                        </td></tr>   
                                    </table>    
                                </td>                                           
                            </tr>
                              
                                                            
                            <tr id="baris_130">
                                <td  style='vertical-align: top;' align="center">10</td>
                                <td>
                                    <table width="100%">
                                        <tr><td>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <table width="100%">
                                                        <tr><td width="30%"><b>Pengguna</b> </td><td><b>:</b> BAROKAH MULTI PAYMENT</td></tr>
                                                        <tr><td><b>Email</b> </td><td><b>:</b> siskalaurensia30@gmail.com</td></tr>                                                                    
                                                        <tr><td><b>Tanggal</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> 17-01-2019 08:39:23</td></tr>
                                                        <tr><td><b>Kode Trx</b> </td><td><b>:</b> <a href='http://localhost/laundry/adminweb/pemesanan/edit.php?id=DPT-20190117-0001'>#DPT-20190117-0001</a></td></tr>
                                                        <tr><td><b>Transfer</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> 500,000</td></tr>                                                                    
                                                    </table>
                                                </div>
                                                <div class="col-md-4">
                                                    <table width="100%">
                                                        <tr><td width="30%"><b>Tujuan</b></td><td><b>:</b> Muamalat</td></tr>
                                                        <tr><td><b>Penerima</b></td><td><b>:</b> 3660008797</td></tr>
                                                        <tr><td><b>Melalui</b> </td><td><b>:</b> Mandiri</td></tr>
                                                        <tr><td><b>Pengirim</b> </td><td><b>:</b> Maria Siska Laurensia</td></tr>

                                                        <tr><td><b>Status</b> </td><td><b>:</b>                                                                 <label id="status_valid_130" style="margin-top: 5px;"><input type="radio" name="status_130" id_trf="130" value="2" checked />&nbsp;&nbsp;<span class="label bg-green" style="font-size: 9pt;">VALID</span>&nbsp;&nbsp;</label>
                                                                <label id="status_tidak_valid_130" style="margin-top: 5px;"><input type="radio" name="status_130" id_trf="130" value="1"  />&nbsp;&nbsp;<span class="label bg-red" style="font-size: 9pt;">TIDAK VALID</span>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                                <img id="i_loading_130" src="http://localhost/laundry/templates/back-end/penguin/assets/img/loading.gif" style="display: none;" />
                                                                                                                    <tr><td colspan="2">
                                                                                                                            <div id="alert_error_130" class="form-group" style="display: none;">
                                                                    <div class="alert alert-danger">&nbsp;</div>
                                                                </div>
                                                                <div id="alert_success_130" class="form-group" style="display: none;">                         
                                                                    <div class="alert alert-info">&nbsp;</div>
                                                                </div>
                                                                                                                    
                                                        </div></td></tr>
                                                    </table>
                                                </div>
                                                <div class="col-md-4">
                                                    <div align="right">
                                                        <table>
                                                            <tr><td>
                                                                    <b>Bukti Pembayaran:</b>
                                                                <div class="zoom"><img src="http://localhost/laundry/uploads/konfirmasi/default.jpg" height="250" width="250" /> </div>    
                                                            </td></tr>        
                                                        </table>
                                                    </div>
                                                </div>                                                            
                                        </td></tr>   
                                    </table>    
                                </td>                                           
                            </tr>
                              
                                                            
                            <tr id="baris_129">
                                <td  style='vertical-align: top;' align="center">11</td>
                                <td>
                                    <table width="100%">
                                        <tr><td>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <table width="100%">
                                                        <tr><td width="30%"><b>Pengguna</b> </td><td><b>:</b> Heri </td></tr>
                                                        <tr><td><b>Email</b> </td><td><b>:</b> heri.yuli8488@yahoo.co.id</td></tr>                                                                    
                                                        <tr><td><b>Tanggal</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> 16-01-2019 14:14:14</td></tr>
                                                        <tr><td><b>Kode Trx</b> </td><td><b>:</b> <a href='http://localhost/laundry/adminweb/pemesanan/edit.php?id=DPT-20190116-0002'>#DPT-20190116-0002</a></td></tr>
                                                        <tr><td><b>Transfer</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> 670,000</td></tr>                                                                    
                                                    </table>
                                                </div>
                                                <div class="col-md-4">
                                                    <table width="100%">
                                                        <tr><td width="30%"><b>Tujuan</b></td><td><b>:</b> Muamalat</td></tr>
                                                        <tr><td><b>Penerima</b></td><td><b>:</b> 3660008797</td></tr>
                                                        <tr><td><b>Melalui</b> </td><td><b>:</b> heri</td></tr>
                                                        <tr><td><b>Pengirim</b> </td><td><b>:</b> heri</td></tr>

                                                        <tr><td><b>Status</b> </td><td><b>:</b>                                                                 <label id="status_valid_129" style="margin-top: 5px;"><input type="radio" name="status_129" id_trf="129" value="2" checked />&nbsp;&nbsp;<span class="label bg-green" style="font-size: 9pt;">VALID</span>&nbsp;&nbsp;</label>
                                                                <label id="status_tidak_valid_129" style="margin-top: 5px;"><input type="radio" name="status_129" id_trf="129" value="1"  />&nbsp;&nbsp;<span class="label bg-red" style="font-size: 9pt;">TIDAK VALID</span>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                                <img id="i_loading_129" src="http://localhost/laundry/templates/back-end/penguin/assets/img/loading.gif" style="display: none;" />
                                                                                                                    <tr><td colspan="2">
                                                                                                                            <div id="alert_error_129" class="form-group" style="display: none;">
                                                                    <div class="alert alert-danger">&nbsp;</div>
                                                                </div>
                                                                <div id="alert_success_129" class="form-group" style="display: none;">                         
                                                                    <div class="alert alert-info">&nbsp;</div>
                                                                </div>
                                                                                                                    
                                                        </div></td></tr>
                                                    </table>
                                                </div>
                                                <div class="col-md-4">
                                                    <div align="right">
                                                        <table>
                                                            <tr><td>
                                                                    <b>Bukti Pembayaran:</b>
                                                                <div class="zoom"><img src="http://localhost/laundry/uploads/konfirmasi/default.jpg" height="250" width="250" /> </div>    
                                                            </td></tr>        
                                                        </table>
                                                    </div>
                                                </div>                                                            
                                        </td></tr>   
                                    </table>    
                                </td>                                           
                            </tr>
                              
                                                            
                            <tr id="baris_128">
                                <td  style='vertical-align: top;' align="center">12</td>
                                <td>
                                    <table width="100%">
                                        <tr><td>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <table width="100%">
                                                        <tr><td width="30%"><b>Pengguna</b> </td><td><b>:</b> Heri </td></tr>
                                                        <tr><td><b>Email</b> </td><td><b>:</b> heri.yuli8488@yahoo.co.id</td></tr>                                                                    
                                                        <tr><td><b>Tanggal</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> 16-01-2019 11:41:16</td></tr>
                                                        <tr><td><b>Kode Trx</b> </td><td><b>:</b> <a href='http://localhost/laundry/adminweb/pemesanan/edit.php?id=DPT-20190116-0001'>#DPT-20190116-0001</a></td></tr>
                                                        <tr><td><b>Transfer</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> 2,200,000</td></tr>                                                                    
                                                    </table>
                                                </div>
                                                <div class="col-md-4">
                                                    <table width="100%">
                                                        <tr><td width="30%"><b>Tujuan</b></td><td><b>:</b> Muamalat</td></tr>
                                                        <tr><td><b>Penerima</b></td><td><b>:</b> 3660008797</td></tr>
                                                        <tr><td><b>Melalui</b> </td><td><b>:</b> admin</td></tr>
                                                        <tr><td><b>Pengirim</b> </td><td><b>:</b> herianto</td></tr>

                                                        <tr><td><b>Status</b> </td><td><b>:</b>                                                                 <label id="status_valid_128" style="margin-top: 5px;"><input type="radio" name="status_128" id_trf="128" value="2" checked />&nbsp;&nbsp;<span class="label bg-green" style="font-size: 9pt;">VALID</span>&nbsp;&nbsp;</label>
                                                                <label id="status_tidak_valid_128" style="margin-top: 5px;"><input type="radio" name="status_128" id_trf="128" value="1"  />&nbsp;&nbsp;<span class="label bg-red" style="font-size: 9pt;">TIDAK VALID</span>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                                <img id="i_loading_128" src="http://localhost/laundry/templates/back-end/penguin/assets/img/loading.gif" style="display: none;" />
                                                                                                                    <tr><td colspan="2">
                                                                                                                            <div id="alert_error_128" class="form-group" style="display: none;">
                                                                    <div class="alert alert-danger">&nbsp;</div>
                                                                </div>
                                                                <div id="alert_success_128" class="form-group" style="display: none;">                         
                                                                    <div class="alert alert-info">&nbsp;</div>
                                                                </div>
                                                                                                                    
                                                        </div></td></tr>
                                                    </table>
                                                </div>
                                                <div class="col-md-4">
                                                    <div align="right">
                                                        <table>
                                                            <tr><td>
                                                                    <b>Bukti Pembayaran:</b>
                                                                <div class="zoom"><img src="http://localhost/laundry/uploads/konfirmasi/93281746.jpg" height="250" width="250" /> </div>    
                                                            </td></tr>        
                                                        </table>
                                                    </div>
                                                </div>                                                            
                                        </td></tr>   
                                    </table>    
                                </td>                                           
                            </tr>
                              
                                                            
                            <tr id="baris_127">
                                <td  style='vertical-align: top;' align="center">13</td>
                                <td>
                                    <table width="100%">
                                        <tr><td>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <table width="100%">
                                                        <tr><td width="30%"><b>Pengguna</b> </td><td><b>:</b> trisia afrianti</td></tr>
                                                        <tr><td><b>Email</b> </td><td><b>:</b> buraqwings@gmail.com</td></tr>                                                                    
                                                        <tr><td><b>Tanggal</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> 15-01-2019 08:23:33</td></tr>
                                                        <tr><td><b>Kode Trx</b> </td><td><b>:</b> <a href='http://localhost/laundry/adminweb/pemesanan/edit.php?id=DPT-20190115-0001'>#DPT-20190115-0001</a></td></tr>
                                                        <tr><td><b>Transfer</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> 300,000</td></tr>                                                                    
                                                    </table>
                                                </div>
                                                <div class="col-md-4">
                                                    <table width="100%">
                                                        <tr><td width="30%"><b>Tujuan</b></td><td><b>:</b> Muamalat</td></tr>
                                                        <tr><td><b>Penerima</b></td><td><b>:</b> 3660008797</td></tr>
                                                        <tr><td><b>Melalui</b> </td><td><b>:</b> admin</td></tr>
                                                        <tr><td><b>Pengirim</b> </td><td><b>:</b> trisia afrianti</td></tr>

                                                        <tr><td><b>Status</b> </td><td><b>:</b>                                                                 <label id="status_valid_127" style="margin-top: 5px;"><input type="radio" name="status_127" id_trf="127" value="2" checked />&nbsp;&nbsp;<span class="label bg-green" style="font-size: 9pt;">VALID</span>&nbsp;&nbsp;</label>
                                                                <label id="status_tidak_valid_127" style="margin-top: 5px;"><input type="radio" name="status_127" id_trf="127" value="1"  />&nbsp;&nbsp;<span class="label bg-red" style="font-size: 9pt;">TIDAK VALID</span>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                                <img id="i_loading_127" src="http://localhost/laundry/templates/back-end/penguin/assets/img/loading.gif" style="display: none;" />
                                                                                                                    <tr><td colspan="2">
                                                                                                                            <div id="alert_error_127" class="form-group" style="display: none;">
                                                                    <div class="alert alert-danger">&nbsp;</div>
                                                                </div>
                                                                <div id="alert_success_127" class="form-group" style="display: none;">                         
                                                                    <div class="alert alert-info">&nbsp;</div>
                                                                </div>
                                                                                                                    
                                                        </div></td></tr>
                                                    </table>
                                                </div>
                                                <div class="col-md-4">
                                                    <div align="right">
                                                        <table>
                                                            <tr><td>
                                                                    <b>Bukti Pembayaran:</b>
                                                                <div class="zoom"><img src="http://localhost/laundry/uploads/konfirmasi/87134926.jpg" height="250" width="250" /> </div>    
                                                            </td></tr>        
                                                        </table>
                                                    </div>
                                                </div>                                                            
                                        </td></tr>   
                                    </table>    
                                </td>                                           
                            </tr>
                              
                                                            
                            <tr id="baris_126">
                                <td  style='vertical-align: top;' align="center">14</td>
                                <td>
                                    <table width="100%">
                                        <tr><td>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <table width="100%">
                                                        <tr><td width="30%"><b>Pengguna</b> </td><td><b>:</b> hariyanto </td></tr>
                                                        <tr><td><b>Email</b> </td><td><b>:</b> hariyanto@gmail.com</td></tr>                                                                    
                                                        <tr><td><b>Tanggal</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> 12-01-2019 14:26:35</td></tr>
                                                        <tr><td><b>Kode Trx</b> </td><td><b>:</b> <a href='http://localhost/laundry/adminweb/pemesanan/edit.php?id=DPT-20190112-0003'>#DPT-20190112-0003</a></td></tr>
                                                        <tr><td><b>Transfer</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> 2,000,000</td></tr>                                                                    
                                                    </table>
                                                </div>
                                                <div class="col-md-4">
                                                    <table width="100%">
                                                        <tr><td width="30%"><b>Tujuan</b></td><td><b>:</b> Muamalat</td></tr>
                                                        <tr><td><b>Penerima</b></td><td><b>:</b> 3660008797</td></tr>
                                                        <tr><td><b>Melalui</b> </td><td><b>:</b> jully admin</td></tr>
                                                        <tr><td><b>Pengirim</b> </td><td><b>:</b> hariyanto</td></tr>

                                                        <tr><td><b>Status</b> </td><td><b>:</b>                                                                 <label id="status_valid_126" style="margin-top: 5px;"><input type="radio" name="status_126" id_trf="126" value="2" checked />&nbsp;&nbsp;<span class="label bg-green" style="font-size: 9pt;">VALID</span>&nbsp;&nbsp;</label>
                                                                <label id="status_tidak_valid_126" style="margin-top: 5px;"><input type="radio" name="status_126" id_trf="126" value="1"  />&nbsp;&nbsp;<span class="label bg-red" style="font-size: 9pt;">TIDAK VALID</span>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                                <img id="i_loading_126" src="http://localhost/laundry/templates/back-end/penguin/assets/img/loading.gif" style="display: none;" />
                                                                                                                    <tr><td colspan="2">
                                                                                                                            <div id="alert_error_126" class="form-group" style="display: none;">
                                                                    <div class="alert alert-danger">&nbsp;</div>
                                                                </div>
                                                                <div id="alert_success_126" class="form-group" style="display: none;">                         
                                                                    <div class="alert alert-info">&nbsp;</div>
                                                                </div>
                                                                                                                    
                                                        </div></td></tr>
                                                    </table>
                                                </div>
                                                <div class="col-md-4">
                                                    <div align="right">
                                                        <table>
                                                            <tr><td>
                                                                    <b>Bukti Pembayaran:</b>
                                                                <div class="zoom"><img src="http://localhost/laundry/uploads/konfirmasi/79132648.jpg" height="250" width="250" /> </div>    
                                                            </td></tr>        
                                                        </table>
                                                    </div>
                                                </div>                                                            
                                        </td></tr>   
                                    </table>    
                                </td>                                           
                            </tr>
                              
                                                            
                            <tr id="baris_125">
                                <td  style='vertical-align: top;' align="center">15</td>
                                <td>
                                    <table width="100%">
                                        <tr><td>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <table width="100%">
                                                        <tr><td width="30%"><b>Pengguna</b> </td><td><b>:</b> Rian Nursaputra</td></tr>
                                                        <tr><td><b>Email</b> </td><td><b>:</b> perdhaki123@gmail.com</td></tr>                                                                    
                                                        <tr><td><b>Tanggal</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> 12-01-2019 13:59:31</td></tr>
                                                        <tr><td><b>Kode Trx</b> </td><td><b>:</b> <a href='http://localhost/laundry/adminweb/pemesanan/edit.php?id=DPT-20190112-0002'>#DPT-20190112-0002</a></td></tr>
                                                        <tr><td><b>Transfer</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> 200,000</td></tr>                                                                    
                                                    </table>
                                                </div>
                                                <div class="col-md-4">
                                                    <table width="100%">
                                                        <tr><td width="30%"><b>Tujuan</b></td><td><b>:</b> Muamalat</td></tr>
                                                        <tr><td><b>Penerima</b></td><td><b>:</b> 3660008797</td></tr>
                                                        <tr><td><b>Melalui</b> </td><td><b>:</b> admin</td></tr>
                                                        <tr><td><b>Pengirim</b> </td><td><b>:</b> rian</td></tr>

                                                        <tr><td><b>Status</b> </td><td><b>:</b>                                                                 <label id="status_valid_125" style="margin-top: 5px;"><input type="radio" name="status_125" id_trf="125" value="2" checked />&nbsp;&nbsp;<span class="label bg-green" style="font-size: 9pt;">VALID</span>&nbsp;&nbsp;</label>
                                                                <label id="status_tidak_valid_125" style="margin-top: 5px;"><input type="radio" name="status_125" id_trf="125" value="1"  />&nbsp;&nbsp;<span class="label bg-red" style="font-size: 9pt;">TIDAK VALID</span>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                                <img id="i_loading_125" src="http://localhost/laundry/templates/back-end/penguin/assets/img/loading.gif" style="display: none;" />
                                                                                                                    <tr><td colspan="2">
                                                                                                                            <div id="alert_error_125" class="form-group" style="display: none;">
                                                                    <div class="alert alert-danger">&nbsp;</div>
                                                                </div>
                                                                <div id="alert_success_125" class="form-group" style="display: none;">                         
                                                                    <div class="alert alert-info">&nbsp;</div>
                                                                </div>
                                                                                                                    
                                                        </div></td></tr>
                                                    </table>
                                                </div>
                                                <div class="col-md-4">
                                                    <div align="right">
                                                        <table>
                                                            <tr><td>
                                                                    <b>Bukti Pembayaran:</b>
                                                                <div class="zoom"><img src="http://localhost/laundry/uploads/konfirmasi/98237641.jpg" height="250" width="250" /> </div>    
                                                            </td></tr>        
                                                        </table>
                                                    </div>
                                                </div>                                                            
                                        </td></tr>   
                                    </table>    
                                </td>                                           
                            </tr>
                              
                                                            
                            <tr id="baris_124">
                                <td  style='vertical-align: top;' align="center">16</td>
                                <td>
                                    <table width="100%">
                                        <tr><td>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <table width="100%">
                                                        <tr><td width="30%"><b>Pengguna</b> </td><td><b>:</b> Delly </td></tr>
                                                        <tr><td><b>Email</b> </td><td><b>:</b> delly_yusuf@yahoo.com</td></tr>                                                                    
                                                        <tr><td><b>Tanggal</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> 12-01-2019 13:41:28</td></tr>
                                                        <tr><td><b>Kode Trx</b> </td><td><b>:</b> <a href='http://localhost/laundry/adminweb/pemesanan/edit.php?id=DPT-20190112-0001'>#DPT-20190112-0001</a></td></tr>
                                                        <tr><td><b>Transfer</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> 4,000,000</td></tr>                                                                    
                                                    </table>
                                                </div>
                                                <div class="col-md-4">
                                                    <table width="100%">
                                                        <tr><td width="30%"><b>Tujuan</b></td><td><b>:</b> Muamalat</td></tr>
                                                        <tr><td><b>Penerima</b></td><td><b>:</b> 3660008797</td></tr>
                                                        <tr><td><b>Melalui</b> </td><td><b>:</b> bca</td></tr>
                                                        <tr><td><b>Pengirim</b> </td><td><b>:</b> delly</td></tr>

                                                        <tr><td><b>Status</b> </td><td><b>:</b>                                                                 <label id="status_valid_124" style="margin-top: 5px;"><input type="radio" name="status_124" id_trf="124" value="2" checked />&nbsp;&nbsp;<span class="label bg-green" style="font-size: 9pt;">VALID</span>&nbsp;&nbsp;</label>
                                                                <label id="status_tidak_valid_124" style="margin-top: 5px;"><input type="radio" name="status_124" id_trf="124" value="1"  />&nbsp;&nbsp;<span class="label bg-red" style="font-size: 9pt;">TIDAK VALID</span>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                                <img id="i_loading_124" src="http://localhost/laundry/templates/back-end/penguin/assets/img/loading.gif" style="display: none;" />
                                                                                                                    <tr><td colspan="2">
                                                                                                                            <div id="alert_error_124" class="form-group" style="display: none;">
                                                                    <div class="alert alert-danger">&nbsp;</div>
                                                                </div>
                                                                <div id="alert_success_124" class="form-group" style="display: none;">                         
                                                                    <div class="alert alert-info">&nbsp;</div>
                                                                </div>
                                                                                                                    
                                                        </div></td></tr>
                                                    </table>
                                                </div>
                                                <div class="col-md-4">
                                                    <div align="right">
                                                        <table>
                                                            <tr><td>
                                                                    <b>Bukti Pembayaran:</b>
                                                                <div class="zoom"><img src="http://localhost/laundry/uploads/konfirmasi/69241387.jpg" height="250" width="250" /> </div>    
                                                            </td></tr>        
                                                        </table>
                                                    </div>
                                                </div>                                                            
                                        </td></tr>   
                                    </table>    
                                </td>                                           
                            </tr>
                              
                                                            
                            <tr id="baris_123">
                                <td  style='vertical-align: top;' align="center">17</td>
                                <td>
                                    <table width="100%">
                                        <tr><td>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <table width="100%">
                                                        <tr><td width="30%"><b>Pengguna</b> </td><td><b>:</b> Heri </td></tr>
                                                        <tr><td><b>Email</b> </td><td><b>:</b> heri.yuli8488@yahoo.co.id</td></tr>                                                                    
                                                        <tr><td><b>Tanggal</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> 11-01-2019 13:48:27</td></tr>
                                                        <tr><td><b>Kode Trx</b> </td><td><b>:</b> <a href='http://localhost/laundry/adminweb/pemesanan/edit.php?id=DPT-20190111-0001'>#DPT-20190111-0001</a></td></tr>
                                                        <tr><td><b>Transfer</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> 75,000</td></tr>                                                                    
                                                    </table>
                                                </div>
                                                <div class="col-md-4">
                                                    <table width="100%">
                                                        <tr><td width="30%"><b>Tujuan</b></td><td><b>:</b> Muamalat</td></tr>
                                                        <tr><td><b>Penerima</b></td><td><b>:</b> 3660008797</td></tr>
                                                        <tr><td><b>Melalui</b> </td><td><b>:</b> heri</td></tr>
                                                        <tr><td><b>Pengirim</b> </td><td><b>:</b> heri</td></tr>

                                                        <tr><td><b>Status</b> </td><td><b>:</b>                                                                 <label id="status_valid_123" style="margin-top: 5px;"><input type="radio" name="status_123" id_trf="123" value="2" checked />&nbsp;&nbsp;<span class="label bg-green" style="font-size: 9pt;">VALID</span>&nbsp;&nbsp;</label>
                                                                <label id="status_tidak_valid_123" style="margin-top: 5px;"><input type="radio" name="status_123" id_trf="123" value="1"  />&nbsp;&nbsp;<span class="label bg-red" style="font-size: 9pt;">TIDAK VALID</span>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                                <img id="i_loading_123" src="http://localhost/laundry/templates/back-end/penguin/assets/img/loading.gif" style="display: none;" />
                                                                                                                    <tr><td colspan="2">
                                                                                                                            <div id="alert_error_123" class="form-group" style="display: none;">
                                                                    <div class="alert alert-danger">&nbsp;</div>
                                                                </div>
                                                                <div id="alert_success_123" class="form-group" style="display: none;">                         
                                                                    <div class="alert alert-info">&nbsp;</div>
                                                                </div>
                                                                                                                    
                                                        </div></td></tr>
                                                    </table>
                                                </div>
                                                <div class="col-md-4">
                                                    <div align="right">
                                                        <table>
                                                            <tr><td>
                                                                    <b>Bukti Pembayaran:</b>
                                                                <div class="zoom"><img src="http://localhost/laundry/uploads/konfirmasi/default.jpg" height="250" width="250" /> </div>    
                                                            </td></tr>        
                                                        </table>
                                                    </div>
                                                </div>                                                            
                                        </td></tr>   
                                    </table>    
                                </td>                                           
                            </tr>
                              
                                                            
                            <tr id="baris_122">
                                <td  style='vertical-align: top;' align="center">18</td>
                                <td>
                                    <table width="100%">
                                        <tr><td>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <table width="100%">
                                                        <tr><td width="30%"><b>Pengguna</b> </td><td><b>:</b> hariyanto </td></tr>
                                                        <tr><td><b>Email</b> </td><td><b>:</b> hariyanto@gmail.com</td></tr>                                                                    
                                                        <tr><td><b>Tanggal</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> 10-01-2019 16:09:11</td></tr>
                                                        <tr><td><b>Kode Trx</b> </td><td><b>:</b> <a href='http://localhost/laundry/adminweb/pemesanan/edit.php?id=DPT-20190110-0001'>#DPT-20190110-0001</a></td></tr>
                                                        <tr><td><b>Transfer</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> 1,000,000</td></tr>                                                                    
                                                    </table>
                                                </div>
                                                <div class="col-md-4">
                                                    <table width="100%">
                                                        <tr><td width="30%"><b>Tujuan</b></td><td><b>:</b> Muamalat</td></tr>
                                                        <tr><td><b>Penerima</b></td><td><b>:</b> 3660008797</td></tr>
                                                        <tr><td><b>Melalui</b> </td><td><b>:</b> by admin</td></tr>
                                                        <tr><td><b>Pengirim</b> </td><td><b>:</b> ariyanto</td></tr>

                                                        <tr><td><b>Status</b> </td><td><b>:</b>                                                                 <label id="status_valid_122" style="margin-top: 5px;"><input type="radio" name="status_122" id_trf="122" value="2" checked />&nbsp;&nbsp;<span class="label bg-green" style="font-size: 9pt;">VALID</span>&nbsp;&nbsp;</label>
                                                                <label id="status_tidak_valid_122" style="margin-top: 5px;"><input type="radio" name="status_122" id_trf="122" value="1"  />&nbsp;&nbsp;<span class="label bg-red" style="font-size: 9pt;">TIDAK VALID</span>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                                <img id="i_loading_122" src="http://localhost/laundry/templates/back-end/penguin/assets/img/loading.gif" style="display: none;" />
                                                                                                                    <tr><td colspan="2">
                                                                                                                            <div id="alert_error_122" class="form-group" style="display: none;">
                                                                    <div class="alert alert-danger">&nbsp;</div>
                                                                </div>
                                                                <div id="alert_success_122" class="form-group" style="display: none;">                         
                                                                    <div class="alert alert-info">&nbsp;</div>
                                                                </div>
                                                                                                                    
                                                        </div></td></tr>
                                                    </table>
                                                </div>
                                                <div class="col-md-4">
                                                    <div align="right">
                                                        <table>
                                                            <tr><td>
                                                                    <b>Bukti Pembayaran:</b>
                                                                <div class="zoom"><img src="http://localhost/laundry/uploads/konfirmasi/12347698.jpg" height="250" width="250" /> </div>    
                                                            </td></tr>        
                                                        </table>
                                                    </div>
                                                </div>                                                            
                                        </td></tr>   
                                    </table>    
                                </td>                                           
                            </tr>
                              
                                                            
                            <tr id="baris_121">
                                <td  style='vertical-align: top;' align="center">19</td>
                                <td>
                                    <table width="100%">
                                        <tr><td>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <table width="100%">
                                                        <tr><td width="30%"><b>Pengguna</b> </td><td><b>:</b> desti anggraini</td></tr>
                                                        <tr><td><b>Email</b> </td><td><b>:</b> judesdesti@gmail.com</td></tr>                                                                    
                                                        <tr><td><b>Tanggal</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> 09-01-2019 22:17:52</td></tr>
                                                        <tr><td><b>Kode Trx</b> </td><td><b>:</b> <a href='http://localhost/laundry/adminweb/pemesanan/edit.php?id=DPT-20190109-0003'>#DPT-20190109-0003</a></td></tr>
                                                        <tr><td><b>Transfer</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> 200,000</td></tr>                                                                    
                                                    </table>
                                                </div>
                                                <div class="col-md-4">
                                                    <table width="100%">
                                                        <tr><td width="30%"><b>Tujuan</b></td><td><b>:</b> Muamalat</td></tr>
                                                        <tr><td><b>Penerima</b></td><td><b>:</b> 3660008797</td></tr>
                                                        <tr><td><b>Melalui</b> </td><td><b>:</b> jully</td></tr>
                                                        <tr><td><b>Pengirim</b> </td><td><b>:</b> desti anggraini</td></tr>

                                                        <tr><td><b>Status</b> </td><td><b>:</b>                                                                 <label id="status_valid_121" style="margin-top: 5px;"><input type="radio" name="status_121" id_trf="121" value="2" checked />&nbsp;&nbsp;<span class="label bg-green" style="font-size: 9pt;">VALID</span>&nbsp;&nbsp;</label>
                                                                <label id="status_tidak_valid_121" style="margin-top: 5px;"><input type="radio" name="status_121" id_trf="121" value="1"  />&nbsp;&nbsp;<span class="label bg-red" style="font-size: 9pt;">TIDAK VALID</span>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                                <img id="i_loading_121" src="http://localhost/laundry/templates/back-end/penguin/assets/img/loading.gif" style="display: none;" />
                                                                                                                    <tr><td colspan="2">
                                                                                                                            <div id="alert_error_121" class="form-group" style="display: none;">
                                                                    <div class="alert alert-danger">&nbsp;</div>
                                                                </div>
                                                                <div id="alert_success_121" class="form-group" style="display: none;">                         
                                                                    <div class="alert alert-info">&nbsp;</div>
                                                                </div>
                                                                                                                    
                                                        </div></td></tr>
                                                    </table>
                                                </div>
                                                <div class="col-md-4">
                                                    <div align="right">
                                                        <table>
                                                            <tr><td>
                                                                    <b>Bukti Pembayaran:</b>
                                                                <div class="zoom"><img src="http://localhost/laundry/uploads/konfirmasi/81397642.jpg" height="250" width="250" /> </div>    
                                                            </td></tr>        
                                                        </table>
                                                    </div>
                                                </div>                                                            
                                        </td></tr>   
                                    </table>    
                                </td>                                           
                            </tr>
                              
                                                            
                            <tr id="baris_120">
                                <td  style='vertical-align: top;' align="center">20</td>
                                <td>
                                    <table width="100%">
                                        <tr><td>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <table width="100%">
                                                        <tr><td width="30%"><b>Pengguna</b> </td><td><b>:</b> Heri </td></tr>
                                                        <tr><td><b>Email</b> </td><td><b>:</b> heri.yuli8488@yahoo.co.id</td></tr>                                                                    
                                                        <tr><td><b>Tanggal</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> 09-01-2019 21:05:32</td></tr>
                                                        <tr><td><b>Kode Trx</b> </td><td><b>:</b> <a href='http://localhost/laundry/adminweb/pemesanan/edit.php?id=DPT-20190109-0002'>#DPT-20190109-0002</a></td></tr>
                                                        <tr><td><b>Transfer</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> 200,000</td></tr>                                                                    
                                                    </table>
                                                </div>
                                                <div class="col-md-4">
                                                    <table width="100%">
                                                        <tr><td width="30%"><b>Tujuan</b></td><td><b>:</b> Muamalat</td></tr>
                                                        <tr><td><b>Penerima</b></td><td><b>:</b> 3660008797</td></tr>
                                                        <tr><td><b>Melalui</b> </td><td><b>:</b> heri</td></tr>
                                                        <tr><td><b>Pengirim</b> </td><td><b>:</b> heri</td></tr>

                                                        <tr><td><b>Status</b> </td><td><b>:</b>                                                                 <label id="status_valid_120" style="margin-top: 5px;"><input type="radio" name="status_120" id_trf="120" value="2" checked />&nbsp;&nbsp;<span class="label bg-green" style="font-size: 9pt;">VALID</span>&nbsp;&nbsp;</label>
                                                                <label id="status_tidak_valid_120" style="margin-top: 5px;"><input type="radio" name="status_120" id_trf="120" value="1"  />&nbsp;&nbsp;<span class="label bg-red" style="font-size: 9pt;">TIDAK VALID</span>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                                <img id="i_loading_120" src="http://localhost/laundry/templates/back-end/penguin/assets/img/loading.gif" style="display: none;" />
                                                                                                                    <tr><td colspan="2">
                                                                                                                            <div id="alert_error_120" class="form-group" style="display: none;">
                                                                    <div class="alert alert-danger">&nbsp;</div>
                                                                </div>
                                                                <div id="alert_success_120" class="form-group" style="display: none;">                         
                                                                    <div class="alert alert-info">&nbsp;</div>
                                                                </div>
                                                                                                                    
                                                        </div></td></tr>
                                                    </table>
                                                </div>
                                                <div class="col-md-4">
                                                    <div align="right">
                                                        <table>
                                                            <tr><td>
                                                                    <b>Bukti Pembayaran:</b>
                                                                <div class="zoom"><img src="http://localhost/laundry/uploads/konfirmasi/97348621.jpg" height="250" width="250" /> </div>    
                                                            </td></tr>        
                                                        </table>
                                                    </div>
                                                </div>                                                            
                                        </td></tr>   
                                    </table>    
                                </td>                                           
                            </tr>
                              
                                            </tbody>

                                            <tfoot>
                            <tr>
                                <th colspan="2">
                                    <div style="text-align: center;">
                                                                                                                                                                                                                    <span class="btn btn-info">1</span>                                
                                                                                                                        
                                                                                                                                    <a class="btn btn-default" href="list.php?page=2">2</a>
                                                                                                                        
                                                                                                                                    <a class="btn btn-default" href="list.php?page=3">3</a>
                                                                                                                        
                                                                                                                                    <a class="btn btn-default" href="list.php?page=4">4</a>
                                                                                                                        
                                                                                                                                    <a class="btn btn-default" href="list.php?page=5">5</a>
                                                                                                                        
                                                                                                                
                                            <a class="btn btn-default" href="list.php?page=2">Next &rarr;</a>
                                                                        
                                    </div>  
                                </th>
                            </tr>
                        </tfoot>
                                    </table>
            </div>
        </div>
    </div>
    <!--/Page Content-->

    <!--Footer -->
    <footer class="footer-container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="footer-left">
                    <a href="http://localhost/laundry" target="_blank">laundry</a>&nbsp;2020
                </div>
            </div>				
        </div>
    </div>
</footer>
    <!--/Footer-->

</section>
<!--/Page Container-->

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

<script type="text/javascript" src="http://localhost/laundry/templates/back-end/penguin/js/moment.min.js"></script>
<script type="text/javascript" src="http://localhost/laundry/templates/back-end/penguin/js/legacy.js"></script>
<script type="text/javascript" src="http://localhost/laundry/templates/back-end/penguin/js/forms/daterangepicker.js"></script>
<script type="text/javascript" src="http://localhost/laundry/templates/back-end/penguin/js/forms/picker.js"></script>
<script type="text/javascript" src="http://localhost/laundry/templates/back-end/penguin/js/forms/picker.date.js"></script>
<script type="text/javascript" src="http://localhost/laundry/templates/back-end/penguin/js/forms/picker.time.js"></script>
<script type="text/javascript" src="http://localhost/laundry/templates/back-end/penguin/js/forms/spectrum.js"></script>
<script type="text/javascript" src="http://localhost/laundry/templates/back-end/penguin/js/pages/pickers.js"></script>
<script type="text/javascript" src="http://localhost/laundry/templates/back-end/penguin/js/jzoom.js"></script>
<!-- iCheck -->
<link rel="stylesheet" href="http://localhost/laundry/templates/back-end/penguin/js/iCheck/square/blue.css">
<script src="http://localhost/laundry/templates/back-end/penguin/js/iCheck/icheck.min.js"></script>  
    <script type="text/javascript">

        $(function () {
            $('.zoom').jzoom({
                position: "left"
            });
        
            $('input').iCheck({
              checkboxClass: 'icheckbox_square-blue',
              radioClass: 'iradio_square-blue',
              increaseArea: '20%' // optional
            });
            
            var setMessage = function(message, tipe, id) {
                $('#alert_'+tipe+'_'+id+' .alert').text(message);
                $('#alert_'+tipe+'_'+id).show('slow');
                setTimeout(function() {
                    $('#alert_'+tipe+'_'+id).hide('slow');
                }, 5000);
                $("body, html").animate({ 
                    //scrollTop: $('#baris_'+i).offset().top-100 
                }, 600);
            }

            var setLoading = function(isLoading, id) {
                if(isLoading) {
                    $('#i_loading_'+id).show();
                    $("#status_valid_"+id).hide();
                    $("#status_tidak_valid_"+id).hide();
                } else {
                    $('#i_loading_'+id).hide();
                    $("#status_valid_"+id).show();
                    $("#status_tidak_valid_"+id).show();
                }
            }
            
            var update_status = function(id, value) {
                setLoading(true, id);
                var data = new FormData();
                data.append('id', id);  
                data.append('status', value);
                $.ajax({
                    type: 'POST',
                    url: 'update.php',
                    data: data,
                    cache: false,
                    dataType: 'json',
                    processData: false, // Don't process the files
                    contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                    success: function(data) {
                        setLoading(false, id);
                        if(!data['success']) {
                            $("input[name=status_"+id+"][value="+value+"]").iCheck('uncheck');
                            $("input[name=status_"+id+"][value="+(value==1?2:1)+"]").iCheck('check'); 
                            setMessage(data['message'], 'error', id);
                        } else {
                            status[id] = value;
                        }
                    }, 
                    error: function() {
                        setLoading(false, id);
                        $("input[name=status_"+id+"][value="+value+"]").iCheck('uncheck');
                        $("input[name=status_"+id+"][value="+(value==1?2:1)+"]").iCheck('check'); 
                        setMessage('Kesalahan server. Mohon diulang kembali!', 'error', id);
                        
                    }
                }); 
            }
            
            var status = [];
                            status[139] = 0;
                            status[138] = 2;
                            status[137] = 1;
                            status[136] = 1;
                            status[135] = 2;
                            status[134] = 1;
                            status[133] = 2;
                            status[132] = 2;
                            status[131] = 2;
                            status[130] = 2;
                            status[129] = 2;
                            status[128] = 2;
                            status[127] = 2;
                            status[126] = 2;
                            status[125] = 2;
                            status[124] = 2;
                            status[123] = 2;
                            status[122] = 2;
                            status[121] = 2;
                            status[120] = 2;
                
            $("input[type='radio']").on('ifChanged', function (e) {
                var id = this.getAttribute('id_trf');
                var value = this.getAttribute('value');
                var select = $("input[name=status_"+id+"][value="+value+"]").prop("checked");
                if(select) {
                    console.log(id+' --> '+value+' --> '+select);
                    if(status[id]!=value) {
                        //alert('update status!');
                        update_status(id, value);
                    }
                }
            });

            $('#filter_status').on('change', function (e) {
                var filter = $('#filter_status').val();
                window.location='list.php?_'+(filter.length>0?'&status='+filter:'');
            });

            $( "#btn_cari" ).click(function() {
                var tanggal_dari = $( '[name=tanggal_dari]' ).val();
                var tanggal_sampai = $( '[name=tanggal_sampai]' ).val();
                var query = $( "#query" ).val();
                var filter = $('#filter_status').val();
                window.location='list.php?_'+
                    (tanggal_dari.length>0?'&tanggal_dari='+tanggal_dari:'')+
                    (tanggal_sampai.length>0?'&tanggal_sampai='+tanggal_sampai:'')+
                    (filter.length>0?'&status='+filter:'')+(query.length>0?'&query='+query:'');
            });
            
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
