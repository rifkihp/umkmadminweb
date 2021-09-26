<?php /*%%SmartyHeaderCode:1413295525c12d68cb56e56-59716721%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e57febc0ffb5310737ce3a6dc72a319c8fc6458' => 
    array (
      0 => '../../templates/back-end/penguin/laporan_jual_ppob/list.html',
      1 => 1544741124,
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
  'nocache_hash' => '1413295525c12d68cb56e56-59716721',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d687fc741f203_50756141',
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d687fc741f203_50756141')) {function content_5d687fc741f203_50756141($_smarty_tpl) {?><!doctype html>
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
                                            <li class="active acc-parent-li">
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
                <i class="icon-table position-left"></i>Laporan Penjualan PPOB 
            </div>
            <ul class="breadcrumb">
                <li><a href="http://laundry.id/adminweb">Beranda</a></li>
                <li><a href="http://laundry.id/adminweb/dashboard/">Laporan Penjualan PPOB</a></li>
                <li class="active">List of Laporan Penjualan PPOB</li>
            </ul>					
        </div>
    </div>		
    <!--/Page Header-->

    <!--Page Detail-->
    <div class="container-fluid page-content">
        <div class="panel panel-flat">
            <div class="panel-body no-padding-bottom">
                <div class="form-group">
                    <div id="alert_success" class="form-group" style="display: none;">                         
                        <div class="alert alert-info">&nbsp;</div>
                    </div>

                    <div id="alert_error" class="form-group" style="display: none;">
                        <div class="alert alert-danger">&nbsp;</div>
                    </div>
                </div>


                <div class="form-group">
                    <table style="width: 100%;">
                        <tr>
                            <td width="20%" style="padding: 10px;"><label>Dari Tanggal:</label></td>
                            <td width="80%">
                                <table width="100%">
                                    <tr>
                                        <td width="40%">
                                            <input type="text" value="" class="form-control pickadate" name="tanggal_dari" placeholder="Klik Untuk Memilih Tanggal" />
                                        </td>
                                        <td style="text-align: center;">
                                            <label>Sd. Tanggal:</label>
                                        </td>
                                        <td width="40%">
                                            <input type="text" value="" class="form-control pickadate" name="tanggal_sampai" placeholder="Klik Untuk Memilih Tanggal" />                                        
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td width="20%" style="padding: 8px;"><label>Pencarian Username:</label></td>
                            <td width="80%">
                                <table>
                                    <tr>
                                        <td width="100%"><input type="text" value="" class="form-control" name="query" id="query" placeholder="Ketik username yang dicari..." /></td>
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

                <!-- div class="form-group">
                    <div id="ekspor_xls" class="btn btn-info">Eksport To Xls</div>
                    <div id="ekspor_pdf" class="btn btn-info">Eksport To Pdf</div>
                </div -->

            </div>

            <div class="table-responsive">
                <table class="table table-togglable table-hover">
                    <thead>
                        <tr>
                            <th width="5%"><div style="text-align: center;">No.</div></th>
                            <th width="10%"><div style="text-align: center;">No. Trx</div></th>
                            <th width="15%"><div style="text-align: center;">Tanggal</div></th>
                            <th width="10%"><div style="text-align: center;">Username</div></th>
                            <th width="20%"><div style="text-align: center;">Produk</div></th>
                            <th width="10%"><div style="text-align: center;">No. Tujuan</div></th>
                            <th width="10%"><div style="text-align: center;">Beli</div></th>
                            <th width="10%"><div style="text-align: center;">Jual</div></th>
                            <th width="10%"><div style="text-align: center;">Laba</div></th>
                        </tr>
                    </thead>

                    <tbody>
                                                                                    
                            <tr id="baris_">
                                <td align="center">1</td>
                                <td align="center">GJK-20181124-0002</td>
                                <td align="center">24-11-2018 14:20:38</td>
                                <td align="left">Ade Utami</td>
                                <td align="left">SALDO GOJEK  RB</td>
                                <td align="left">082281684500</td>
                                <td align="right"><span style="font-weight: bold;">21,300</span></td>                                                                                   
                                <td align="right"><span style="font-weight: bold;">21,500</span></td>                                                                                   
                                <td align="right"><span style="font-weight: bold;">200</span></td>                                                                                   
                            </tr>
                              
                                                            
                            <tr id="baris_">
                                <td align="center">2</td>
                                <td align="center">OVO-20181203-0002</td>
                                <td align="center">03-12-2018 12:16:02</td>
                                <td align="left">Ade Utami</td>
                                <td align="left">OVO GRAB 25. RB</td>
                                <td align="left">082279936313</td>
                                <td align="right"><span style="font-weight: bold;">31,950</span></td>                                                                                   
                                <td align="right"><span style="font-weight: bold;">32,150</span></td>                                                                                   
                                <td align="right"><span style="font-weight: bold;">200</span></td>                                                                                   
                            </tr>
                              
                                                            
                            <tr id="baris_">
                                <td align="center">3</td>
                                <td align="center">PLS-20181212-0005</td>
                                <td align="center">12-12-2018 08:42:31</td>
                                <td align="left">Ade Utami</td>
                                <td align="left">TELKOMSEL 5000</td>
                                <td align="left">082281684500</td>
                                <td align="right"><span style="font-weight: bold;">5,699</span></td>                                                                                   
                                <td align="right"><span style="font-weight: bold;">5,899</span></td>                                                                                   
                                <td align="right"><span style="font-weight: bold;">200</span></td>                                                                                   
                            </tr>
                              
                                                            
                            <tr id="baris_">
                                <td align="center">4</td>
                                <td align="center">PLS-20190129-0003</td>
                                <td align="center">29-01-2019 20:12:13</td>
                                <td align="left">Ade Utami</td>
                                <td align="left">TELKOMSEL 10000</td>
                                <td align="left">081366488622</td>
                                <td align="right"><span style="font-weight: bold;">0</span></td>                                                                                   
                                <td align="right"><span style="font-weight: bold;">10,799</span></td>                                                                                   
                                <td align="right"><span style="font-weight: bold;">10,799</span></td>                                                                                   
                            </tr>
                              
                                                            
                            <tr id="baris_">
                                <td align="center">5</td>
                                <td align="center">PLS-20190108-0008</td>
                                <td align="center">08-01-2019 21:57:01</td>
                                <td align="left">Ade Utami</td>
                                <td align="left">TELKOMSEL 10000</td>
                                <td align="left">081366488622</td>
                                <td align="right"><span style="font-weight: bold;">0</span></td>                                                                                   
                                <td align="right"><span style="font-weight: bold;">10,799</span></td>                                                                                   
                                <td align="right"><span style="font-weight: bold;">10,799</span></td>                                                                                   
                            </tr>
                              
                                                            
                            <tr id="baris_">
                                <td align="center">6</td>
                                <td align="center">PLS-20181229-0007</td>
                                <td align="center">29-12-2018 16:04:49</td>
                                <td align="left">Ade Utami</td>
                                <td align="left">TELKOMSEL 5000</td>
                                <td align="left">081366488622</td>
                                <td align="right"><span style="font-weight: bold;">0</span></td>                                                                                   
                                <td align="right"><span style="font-weight: bold;">5,899</span></td>                                                                                   
                                <td align="right"><span style="font-weight: bold;">5,899</span></td>                                                                                   
                            </tr>
                              
                                                            
                            <tr id="baris_">
                                <td align="center">7</td>
                                <td align="center">PLS-20190104-0002</td>
                                <td align="center">04-01-2019 13:51:54</td>
                                <td align="left">Ade Utami</td>
                                <td align="left">XL REGULER 10000</td>
                                <td align="left">087848486635</td>
                                <td align="right"><span style="font-weight: bold;">0</span></td>                                                                                   
                                <td align="right"><span style="font-weight: bold;">11,000</span></td>                                                                                   
                                <td align="right"><span style="font-weight: bold;">11,000</span></td>                                                                                   
                            </tr>
                              
                                                            
                            <tr id="baris_">
                                <td align="center">8</td>
                                <td align="center">PLS-20181220-0009</td>
                                <td align="center">20-12-2018 16:05:33</td>
                                <td align="left">Agus leo</td>
                                <td align="left">TELKOMSEL 100000</td>
                                <td align="left">085273899678</td>
                                <td align="right"><span style="font-weight: bold;">97,650</span></td>                                                                                   
                                <td align="right"><span style="font-weight: bold;">97,850</span></td>                                                                                   
                                <td align="right"><span style="font-weight: bold;">200</span></td>                                                                                   
                            </tr>
                              
                                                            
                            <tr id="baris_">
                                <td align="center">9</td>
                                <td align="center">PLS-20181128-0001</td>
                                <td align="center">28-11-2018 09:18:48</td>
                                <td align="left">Amri Yo</td>
                                <td align="left">TELKOMSEL 10 RB</td>
                                <td align="left">081279076618</td>
                                <td align="right"><span style="font-weight: bold;">10,599</span></td>                                                                                   
                                <td align="right"><span style="font-weight: bold;">10,799</span></td>                                                                                   
                                <td align="right"><span style="font-weight: bold;">200</span></td>                                                                                   
                            </tr>
                              
                                                            
                            <tr id="baris_">
                                <td align="center">10</td>
                                <td align="center">PLS-20181124-0003</td>
                                <td align="center">24-11-2018 10:41:44</td>
                                <td align="left">Amri Yo</td>
                                <td align="left">TELKOMSEL 10 RB</td>
                                <td align="left">081279076618</td>
                                <td align="right"><span style="font-weight: bold;">10,599</span></td>                                                                                   
                                <td align="right"><span style="font-weight: bold;">10,799</span></td>                                                                                   
                                <td align="right"><span style="font-weight: bold;">200</span></td>                                                                                   
                            </tr>
                              
                                                            
                            <tr id="baris_">
                                <td align="center">11</td>
                                <td align="center">PLS-20181125-0001</td>
                                <td align="center">25-11-2018 07:21:13</td>
                                <td align="left">Amri Yo</td>
                                <td align="left">THREE 10 RB</td>
                                <td align="left">089627108910</td>
                                <td align="right"><span style="font-weight: bold;">10,395</span></td>                                                                                   
                                <td align="right"><span style="font-weight: bold;">10,595</span></td>                                                                                   
                                <td align="right"><span style="font-weight: bold;">200</span></td>                                                                                   
                            </tr>
                              
                                                            
                            <tr id="baris_">
                                <td align="center">12</td>
                                <td align="center">PLS-20181231-0003</td>
                                <td align="center">31-12-2018 08:21:52</td>
                                <td align="left">Amri Yo</td>
                                <td align="left">TELKOMSEL 10000</td>
                                <td align="left">081273444797</td>
                                <td align="right"><span style="font-weight: bold;">0</span></td>                                                                                   
                                <td align="right"><span style="font-weight: bold;">10,799</span></td>                                                                                   
                                <td align="right"><span style="font-weight: bold;">10,799</span></td>                                                                                   
                            </tr>
                              
                                                            
                            <tr id="baris_">
                                <td align="center">13</td>
                                <td align="center">PLS-20181228-0009</td>
                                <td align="center">28-12-2018 19:45:34</td>
                                <td align="left">Amri Yo</td>
                                <td align="left">TELKOMSEL 10000</td>
                                <td align="left">081273444797</td>
                                <td align="right"><span style="font-weight: bold;">0</span></td>                                                                                   
                                <td align="right"><span style="font-weight: bold;">10,799</span></td>                                                                                   
                                <td align="right"><span style="font-weight: bold;">10,799</span></td>                                                                                   
                            </tr>
                              
                                                            
                            <tr id="baris_">
                                <td align="center">14</td>
                                <td align="center">PLS-20190101-0009</td>
                                <td align="center">01-01-2019 20:11:51</td>
                                <td align="left">Amri Yo</td>
                                <td align="left">TELKOMSEL 5000</td>
                                <td align="left">081273444797</td>
                                <td align="right"><span style="font-weight: bold;">0</span></td>                                                                                   
                                <td align="right"><span style="font-weight: bold;">5,899</span></td>                                                                                   
                                <td align="right"><span style="font-weight: bold;">5,899</span></td>                                                                                   
                            </tr>
                              
                                                            
                            <tr id="baris_">
                                <td align="center">15</td>
                                <td align="center">PLS-20181226-0008</td>
                                <td align="center">26-12-2018 12:18:19</td>
                                <td align="left">Amri Yo</td>
                                <td align="left">THREE 10000</td>
                                <td align="left">089627108910</td>
                                <td align="right"><span style="font-weight: bold;">0</span></td>                                                                                   
                                <td align="right"><span style="font-weight: bold;">10,595</span></td>                                                                                   
                                <td align="right"><span style="font-weight: bold;">10,595</span></td>                                                                                   
                            </tr>
                              
                                                            
                            <tr id="baris_">
                                <td align="center">16</td>
                                <td align="center">PLS-20181226-0007</td>
                                <td align="center">26-12-2018 10:55:42</td>
                                <td align="left">Amri Yo</td>
                                <td align="left">XL REGULER 25000</td>
                                <td align="left">087830912478</td>
                                <td align="right"><span style="font-weight: bold;">0</span></td>                                                                                   
                                <td align="right"><span style="font-weight: bold;">25,450</span></td>                                                                                   
                                <td align="right"><span style="font-weight: bold;">25,450</span></td>                                                                                   
                            </tr>
                              
                                                            
                            <tr id="baris_">
                                <td align="center">17</td>
                                <td align="center">PLS-20181229-0004</td>
                                <td align="center">29-12-2018 10:04:40</td>
                                <td align="left">Ana</td>
                                <td align="left">INDOSAT 25000</td>
                                <td align="left">081632171671</td>
                                <td align="right"><span style="font-weight: bold;">25,300</span></td>                                                                                   
                                <td align="right"><span style="font-weight: bold;">25,500</span></td>                                                                                   
                                <td align="right"><span style="font-weight: bold;">200</span></td>                                                                                   
                            </tr>
                              
                                                            
                            <tr id="baris_">
                                <td align="center">18</td>
                                <td align="center">PLS-20190103-0007</td>
                                <td align="center">03-01-2019 11:27:57</td>
                                <td align="left">Ana</td>
                                <td align="left">INDOSAT 5000</td>
                                <td align="left">085840998243</td>
                                <td align="right"><span style="font-weight: bold;">5,950</span></td>                                                                                   
                                <td align="right"><span style="font-weight: bold;">6,150</span></td>                                                                                   
                                <td align="right"><span style="font-weight: bold;">200</span></td>                                                                                   
                            </tr>
                              
                                                            
                            <tr id="baris_">
                                <td align="center">19</td>
                                <td align="center">TKN-20181219-0003</td>
                                <td align="center">19-12-2018 15:24:58</td>
                                <td align="left">Ana</td>
                                <td align="left">Voucher PLN 20000</td>
                                <td align="left">32109003833</td>
                                <td align="right"><span style="font-weight: bold;">20,395</span></td>                                                                                   
                                <td align="right"><span style="font-weight: bold;">21,000</span></td>                                                                                   
                                <td align="right"><span style="font-weight: bold;">605</span></td>                                                                                   
                            </tr>
                              
                                                            
                            <tr id="baris_">
                                <td align="center">20</td>
                                <td align="center">TKN-20181219-0002</td>
                                <td align="center">19-12-2018 12:45:50</td>
                                <td align="left">Ana</td>
                                <td align="left">Voucher PLN 20000</td>
                                <td align="left">141202728298</td>
                                <td align="right"><span style="font-weight: bold;">20,395</span></td>                                                                                   
                                <td align="right"><span style="font-weight: bold;">21,000</span></td>                                                                                   
                                <td align="right"><span style="font-weight: bold;">605</span></td>                                                                                   
                            </tr>
                              
                        
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td align="right"><span style="font-weight: bold;">TOTAL:&nbsp;&nbsp;</span></td>
                            <td>&nbsp;</td>
                            <td align="right"><span style="font-weight: bold;">49,355,994</span></td>
                            <td align="right"><span style="font-weight: bold;">51,504,103</span></td>
                            <td align="right"><span style="font-weight: bold;">2,148,109</span></td>
                        </tr>
                    </tbody>

                                            <tfoot><tr><th colspan="9">
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
    </div>
    <!--/Page Detail-->

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
            //$('.tanggal').datepick({ dateFormat: 'dd-mm-yyyy' });
            $( "#btn_cari" ).click(function() {                
                var tanggal_dari = $( '[name=tanggal_dari]' ).val();
                var tanggal_sampai = $( '[name=tanggal_sampai]' ).val();
                var query = $( "#query" ).val();
                /*alert('list.php?_'+(query.length>0?'&query='+query:'')+
                    (tanggal_dari.length>0?'&tanggal_dari='+tanggal_dari:'')+
                    (tanggal_sampai.length>0?'&tanggal_sampai='+tanggal_sampai:''));*/
            
                window.location='list.php?_'+(query.length>0?'&query='+query:'')+
                    (tanggal_dari.length>0?'&tanggal_dari='+tanggal_dari:'')+
                    (tanggal_sampai.length>0?'&tanggal_sampai='+tanggal_sampai:'');            
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

            $( "#ekspor_xls" ).click(function() {
                var tanggal_dari = $( '[name=tanggal_dari]' ).val();
                var tanggal_sampai = $( '[name=tanggal_sampai]' ).val();

                $.ajax({
                    type: 'POST',
                    url: 'ekspor.php?tanggal_dari='+tanggal_dari+'&tanggal_sampai='+tanggal_sampai,
                    cache: false,
                    dataType: 'json',
                    processData: false, // Don't process the files
                    contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                    success: function(data, textStatus, jqXHR) {
                        if(data['success']) {
                            window.location = 'http://laundry.id/adminweb/readFile.php?name=' + data['filename'];
                        } else {
                            setMessage('error', data['message']);
                        }
                    }, 

                    error: function(jqXHR, textStatus, errorThrown) {
                        setMessage('error', 'Terjadi kesalahan system.');
                    }
                });
            });

            $( "#ekspor_pdf" ).click(function() {
                var tanggal_dari = $( '[name=tanggal_dari]' ).val();
                var tanggal_sampai = $( '[name=tanggal_sampai]' ).val();
                var url = 'cetak.php?tanggal_dari='+tanggal_dari+'&tanggal_sampai='+tanggal_sampai;
                window.open(url, '_blank');
            });
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
