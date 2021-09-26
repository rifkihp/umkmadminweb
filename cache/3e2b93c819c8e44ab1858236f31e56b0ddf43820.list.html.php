<?php /*%%SmartyHeaderCode:9787641515bda7287f3c913-36334102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e2b93c819c8e44ab1858236f31e56b0ddf43820' => 
    array (
      0 => '../../templates/back-end/penguin/metode_pengiriman/list.html',
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
  'nocache_hash' => '9787641515bda7287f3c913-36334102',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d3ebab0886817_24183854',
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d3ebab0886817_24183854')) {function content_5d3ebab0886817_24183854($_smarty_tpl) {?><!doctype html>
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
                                <span id="total_notif_pelanggan_baru" class="bubble">111</span>
                                <span style="color: #ffffff;">Pelanggan Baru</span></a>
                            </li>
                        
                                                    <li class="dropdown-toggle hidden-xs" style="border-left: 1px solid #ffffff;">
                                <a href="http://laundry.id/adminweb/message_in/" class="dropdown-toggle" style="width: 100%; padding-left: 10px; padding-right: 30px;"><i class="icon-envelope"></i>
                                <span id="total_notif_pesan_baru" class="bubble">2</span>
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
                                            <li class="active acc-parent-li">
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
                <i class="icon-table position-left"></i> Pengaturan
            </div>
            <ul class="breadcrumb">
                <li><a href="http://laundry.id/adminweb">Beranda</a></li>
                <li><a href="http://laundry.id/adminweb/metode_pengiriman/">Pengaturan</a></li>
                <li class="active">Metode Pengiriman</li>
            </ul>					
        </div>
    </div>		
    <!--/Page Header-->

    <!--Page Content-->
    <div id="wrapper" class="container-fluid page-content">				
        <div class="panel panel-flat" style="margin: 5px;">
            <div class="form-group panel-body no-padding-bottom">

                <div class="form-group">
                    <ul id="myTab" class="nav nav-tabs">                                
                        <li class="active">
                            <a href="#dataekspedisi" data-toggle="tab"><b>DATA EKSPEDISI</b></a>
                        </li>                                 
                        <li>
                            <a href="#freeongkir" data-toggle="tab"><b>FREE ONGKIR</b></a>
                        </li>                                
                        <li>
                            <a href="#cod" data-toggle="tab"><b>COD</b></a>
                        </li>
                    </ul>
                </div>
                
                <div id="alert_success" class="form-group" style="display: none;">                         
                    <div class="alert alert-info">&nbsp;</div>
                </div>
                    
                <div id="alert_error" class="form-group" style="display: none;">                         
                    <div class="alert alert-danger">&nbsp;</div>
                </div>

                <div class="form-group tab-content">
                    <div class="tab-pane fade active in" id="dataekspedisi">
                         
                         <div class="panel-body no-padding-bottom">
                            <div class="input-group">
                                <input type="text" value="" class="form-control" name="query" id="query" placeholder="Masukan kata kunci pencarian..." />
                                <span class="input-group-btn"><div id="btn_cari" type="submit" class="btn btn-default">Cari</div>
                                <a class="btn btn-default" href="list.php?tab=dataekspedisi">Reset</a></span>                                                  
                            </div>

                            <div class="form-group"></div>

                            <div class="form-group">
                                <div id='btn_add' class="btn btn-primary">Baru</div>                                <div id='btn_edit' class="btn btn-success disabled">Edit</div>                                <div id='btn_delete' class="btn btn-danger disabled">Hapus</div>                            </div>
                        </div>
			
                        <div class="form-group"></div>
                        
                        <div class="table-responsive">
                            <table class="table datatable table-striped">
                                <thead>
                                    <tr>
                                        <th width="5px"><input type="checkbox" id="select_all" /></th>
                                        <th width="5%"><div style="text-align: center;">No.</div></th>
                                        <th width="25%"><div style="text-align: center;">Kode</div></th>
                                        <th width="35%"><div style="text-align: center;">Nama</div></th>
                                        <th width="15%"><div style="text-align: center;">Status</div></th>
                                        <th width="10%"><div style="text-align: center;">Logo</div></th>
                                        <th width="10%"><div style="text-align: center;">Aksi</div></th>
                                    </tr>
                                </thead>

                                <tbody>
                                                                                                            
                                        <tr id="baris_7">
                                            <td align="center"><input type="checkbox" id_select="7" name="select_7" class="select" /></td>
                                            <td align="center">1</td>
                                            <td align="center">I091</td>
                                            <td align="center">Indah Cargo</td>
                                            <td align="center"><span style="font-weight: bold; color: green;">Aktif</span></td>
                                            <td align="center"><div style="text-align: center;  white-space: nowrap;">
                                                <img src="http://laundry.id/uploads/ekspedisi/indah-cargo_1693.png" width="75px" />                                            </div></td>
                                            <td>
                                                <div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="7" class="btn btn-success edit">Edit</div>                                                    <div id_select="7" class="btn btn-danger hapus">Hapus</div>                                                         
                                                </div>
                                            </td>                                          
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_6">
                                            <td align="center"><input type="checkbox" id_select="6" name="select_6" class="select" /></td>
                                            <td align="center">2</td>
                                            <td align="center">COD</td>
                                            <td align="center">Cash On Delivery</td>
                                            <td align="center"><span style="font-weight: bold; color: green;">Aktif</span></td>
                                            <td align="center"><div style="text-align: center;  white-space: nowrap;">
                                                <img src="http://laundry.id/uploads/ekspedisi/cash-on-delivery_1436.png" width="75px" />                                            </div></td>
                                            <td>
                                                <div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="6" class="btn btn-success edit">Edit</div>                                                    <div id_select="6" class="btn btn-danger hapus">Hapus</div>                                                         
                                                </div>
                                            </td>                                          
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_5">
                                            <td align="center"><input type="checkbox" id_select="5" name="select_5" class="select" /></td>
                                            <td align="center">3</td>
                                            <td align="center">JNT</td>
                                            <td align="center">JNT</td>
                                            <td align="center"><span style="font-weight: bold; color: green;">Aktif</span></td>
                                            <td align="center"><div style="text-align: center;  white-space: nowrap;">
                                                <img src="http://laundry.id/uploads/ekspedisi/jnt_7684.png" width="75px" />                                            </div></td>
                                            <td>
                                                <div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="5" class="btn btn-success edit">Edit</div>                                                    <div id_select="5" class="btn btn-danger hapus">Hapus</div>                                                         
                                                </div>
                                            </td>                                          
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_4">
                                            <td align="center"><input type="checkbox" id_select="4" name="select_4" class="select" /></td>
                                            <td align="center">4</td>
                                            <td align="center">WAHANA</td>
                                            <td align="center">WAHANA</td>
                                            <td align="center"><span style="font-weight: bold; color: red;">Tidak Aktif</span></td>
                                            <td align="center"><div style="text-align: center;  white-space: nowrap;">
                                                <img src="http://laundry.id/uploads/ekspedisi/wahana_6289.png" width="75px" />                                            </div></td>
                                            <td>
                                                <div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="4" class="btn btn-success edit">Edit</div>                                                    <div id_select="4" class="btn btn-danger hapus">Hapus</div>                                                         
                                                </div>
                                            </td>                                          
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_3">
                                            <td align="center"><input type="checkbox" id_select="3" name="select_3" class="select" /></td>
                                            <td align="center">5</td>
                                            <td align="center">POS</td>
                                            <td align="center">POS</td>
                                            <td align="center"><span style="font-weight: bold; color: green;">Aktif</span></td>
                                            <td align="center"><div style="text-align: center;  white-space: nowrap;">
                                                <img src="http://laundry.id/uploads/ekspedisi/pos_1684.png" width="75px" />                                            </div></td>
                                            <td>
                                                <div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="3" class="btn btn-success edit">Edit</div>                                                    <div id_select="3" class="btn btn-danger hapus">Hapus</div>                                                         
                                                </div>
                                            </td>                                          
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_2">
                                            <td align="center"><input type="checkbox" id_select="2" name="select_2" class="select" /></td>
                                            <td align="center">6</td>
                                            <td align="center">TIKI</td>
                                            <td align="center">TIKI</td>
                                            <td align="center"><span style="font-weight: bold; color: green;">Aktif</span></td>
                                            <td align="center"><div style="text-align: center;  white-space: nowrap;">
                                                <img src="http://laundry.id/uploads/ekspedisi/tiki_1683.png" width="75px" />                                            </div></td>
                                            <td>
                                                <div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="2" class="btn btn-success edit">Edit</div>                                                    <div id_select="2" class="btn btn-danger hapus">Hapus</div>                                                         
                                                </div>
                                            </td>                                          
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_1">
                                            <td align="center"><input type="checkbox" id_select="1" name="select_1" class="select" /></td>
                                            <td align="center">7</td>
                                            <td align="center">JNE</td>
                                            <td align="center">JNE</td>
                                            <td align="center"><span style="font-weight: bold; color: green;">Aktif</span></td>
                                            <td align="center"><div style="text-align: center;  white-space: nowrap;">
                                                <img src="http://laundry.id/uploads/ekspedisi/jne_7861.png" width="75px" />                                            </div></td>
                                            <td>
                                                <div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="1" class="btn btn-success edit">Edit</div>                                                    <div id_select="1" class="btn btn-danger hapus">Hapus</div>                                                         
                                                </div>
                                            </td>                                          
                                        </tr>
                                          
                                                                    </tbody>

                                                            </table>
                        </div>                        
                    </div>
                    
                    <div class="tab-pane fade" id="freeongkir">

                        <div class="form-group">
                            <label for="is_aktif_freeongkir">Aktifkan Free Ongkir:</label>
                            <table>
                                <tr>
                                    <td>
                                        <label><input type="radio" name="is_aktif_freeongkir" value="1"  />&nbsp;&nbsp;<span class="label bg-blue" style="font-size: 9pt;">AKTIF</span>&nbsp;&nbsp;</label>
                                        <label><input type="radio" name="is_aktif_freeongkir" value="0" checked />&nbsp;&nbsp;<span class="label bg-blue" style="font-size: 9pt;">TIDAK AKTIF</span>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <div class="form-group">
                            <label for="all_produk_freeongkir">Free Ongkir Untuk Semua Produk:</label>
                            <table>
                                <tr>
                                    <td>
                                        <label><input type="radio" name="all_produk_freeongkir" value="1" checked />&nbsp;&nbsp;<span class="label bg-blue" style="font-size: 9pt;">AKTIF</span>&nbsp;&nbsp;</label>
                                        <label><input type="radio" name="all_produk_freeongkir" value="0"  />&nbsp;&nbsp;<span class="label bg-blue" style="font-size: 9pt;">TIDAK AKTIF</span>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <div class="form-group">
                            <label for="min_pembelian_freeongkir">Jumlah Minimum Pembelian (Rp.):</label>
                            <input type="text" value="300,000" class="form-control harga" name="min_pembelian_freeongkir" />
                        </div>

                        <div class="form-group">
                            <label for="kurir_freeongkir">Jenis Kurir Free Ongkir:</label>
                            <select multiple class="form-control" name="kurir_freeongkir" style="height: 200px;">
                                                                    <option value="1"  selected="selected" >JNE</option>                                        
                                                                    <option value="2"  selected="selected" >TIKI</option>                                        
                                                                    <option value="3"  selected="selected" >POS</option>                                        
                                                                    <option value="5"  selected="selected" >JNT</option>                                        
                                                                    <option value="4" >WAHANA</option>                                        
                                                                    <option value="6" >COD</option>                                        
                                                                    <option value="7" >I091</option>                                        
                                                            
                            </select>
                            <label>Gunakan tombol Ctrl untuk pilih lebih dari 1 kurir.</label>
                        </div>
                         
                        <div id="list_tujuan" class="table-responsive" style="margin-top: 10px;">
                            <div class="form-group">
                                <label for="detail_tujuan">Tujuan Free Ongkir:</label>
                                <table  id="tblDetail_tujuan" class="table table-striped table-bordered table-hover" width="100%">
                                    <thead>
                                        <tr>
                                            <th width="5px"><span class="fa fa-trash-o"></span></th>
                                            <th width="50%"><div style="text-align: left;">Propinsi</div></th>
                                            <th width="50%"><div style="text-align: left;">Kota</div></th> 
                                        </tr>
                                    </thead>
                                    <tbody id="detail_tujuan">
                                    </tbody>
                                </table>
                            </div>

                            <div class="form-group">
                                <div id='btn_add_tujuan' class="btn btn-primary">Tambah</div>                       
                            </div>      
                        </div>
                        
                        <div class="form-group"></div>
                                      
                        <div class="form-group">
                            <div id="i_loading_freeongkir" class="G-btn-animation" style="display: none;"><img src="http://laundry.id/templates/back-end/penguin/assets/img/loading.gif" /></div>                  
                            <div id="btn_simpan_freeongkir" class="btn btn-primary">Update</div>                        </div>    
                    </div>
                    
                    <div class="tab-pane fade" id="cod">
                    </div>
                </div>
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
    
<script type="text/javascript" src="http://laundry.id/templates/back-end/penguin/assets/js/jquery.cropit.js"></script> 
<!-- iCheck -->
<link rel="stylesheet" href="http://laundry.id/templates/back-end/penguin/js/iCheck/square/blue.css">
<script src="http://laundry.id/templates/back-end/penguin/js/iCheck/icheck.min.js"></script>  

<script type="text/javascript">        

    $(function () {           
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
        
        var setLoading = function(isLoading, tab) {
            if(isLoading) {
                $('#i_loading_'+tab).show();
                $('#btn_simpan_'+tab).hide();
            } else {
                $('#i_loading_'+tab).hide();
                $('#btn_simpan_'+tab).show();                    
            }
        };
        
        var setMessage = function(type, message) {
            $('#alert_'+type+' .alert').text(message);
            $('#alert_'+type).show('slow');
            setTimeout(function() {
                $('#alert_'+type).hide('slow');
            }, 5000);
            $("body, html").animate({ 
                scrollTop: $('#wrapper').offset().top 
            }, 600);
        };
        
        var setButton = function() {
            var temp = new Array();
            if(delete_selected.length>0) temp = delete_selected.split(',');                
            $( "#btn_edit" ).removeClass('disabled').addClass(temp.length==1?'':'disabled');
            $( "#btn_delete" ).removeClass('disabled').addClass(temp.length>0?'':'disabled');
        };

        var prosesDelete = function(id) {
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
                        
                        if(data['success']) {
                            window.location='list.php?tab=dataekspedisi';
                        } else {
                            setMessage('error', data['message']);
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        setMessage('error', 'Terjadi kesalahan system.');
                    }
                }); 
            }, function (dismiss) {
                // dismiss can be 'cancel', 'overlay', 'close', 'timer'
                //if (dismiss === 'cancel') {
                    //swal('Cancelled', 'Record Data Batal Dihapus', 'error');
                //}
            });
        };

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
            window.location='list.php?tab=dataekspedisi'+(query.length>0?'&query='+query:'');
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
        
        
        
        
                

        var setNamaPropinsiChange = function() {

            $('.nama_propinsi').on('change', function (e) {

                var element = $(this).closest('tr');
                var kolom_kota = element.find('[name=kota]');

                loadKotaTujuan(this.value, kolom_kota);

            });
        };

        var loadKotaTujuan = function(propinsi, kolom_kota) {
            kolom_kota.empty();
            $.ajax({
                type: 'POST',
                url: 'http://laundry.id/store/getKota.php',
                data: { 'propinsi': propinsi },
                dataType: 'json',
                success: function(data) {
                    var store = data['topics'];
                    kolom_kota.empty();
                    for(var key in store) {
                        kolom_kota.append($('<option>', {
                            value: store[key]['city_id'],
                            text: store[key]['city_name']
                        }));
                    }                        
                }
            });
        };


                    var record = 
                '<tr>' +                        
                    '<td align="center"><span class="fa fa-trash-o hapus_tujuan" style="cursor: pointer;"></span></td>' +  
                    '<td align="left">' +
                        '<select name="propinsi" class="form-control nama_propinsi">' +
                                                            '<option value="1"  selected="selected" >Bali</option>' +
                                                            '<option value="2" >Bangka Belitung</option>' +
                                                            '<option value="3" >Banten</option>' +
                                                            '<option value="4" >Bengkulu</option>' +
                                                            '<option value="5" >DI Yogyakarta</option>' +
                                                            '<option value="6" >DKI Jakarta</option>' +
                                                            '<option value="7" >Gorontalo</option>' +
                                                            '<option value="8" >Jambi</option>' +
                                                            '<option value="9" >Jawa Barat</option>' +
                                                            '<option value="10" >Jawa Tengah</option>' +
                                                            '<option value="11" >Jawa Timur</option>' +
                                                            '<option value="12" >Kalimantan Barat</option>' +
                                                            '<option value="13" >Kalimantan Selatan</option>' +
                                                            '<option value="14" >Kalimantan Tengah</option>' +
                                                            '<option value="15" >Kalimantan Timur</option>' +
                                                            '<option value="16" >Kalimantan Utara</option>' +
                                                            '<option value="17" >Kepulauan Riau</option>' +
                                                            '<option value="18" >Lampung</option>' +
                                                            '<option value="19" >Maluku</option>' +
                                                            '<option value="20" >Maluku Utara</option>' +
                                                            '<option value="21" >Nanggroe Aceh Darussalam (NAD)</option>' +
                                                            '<option value="22" >Nusa Tenggara Barat (NTB)</option>' +
                                                            '<option value="23" >Nusa Tenggara Timur (NTT)</option>' +
                                                            '<option value="24" >Papua</option>' +
                                                            '<option value="25" >Papua Barat</option>' +
                                                            '<option value="26" >Riau</option>' +
                                                            '<option value="27" >Sulawesi Barat</option>' +
                                                            '<option value="28" >Sulawesi Selatan</option>' +
                                                            '<option value="29" >Sulawesi Tengah</option>' +
                                                            '<option value="30" >Sulawesi Tenggara</option>' +
                                                            '<option value="31" >Sulawesi Utara</option>' +
                                                            '<option value="32" >Sumatera Barat</option>' +
                                                            '<option value="33" >Sumatera Selatan</option>' +
                                                            '<option value="34" >Sumatera Utara</option>' +
                                                    '</select>' +
                    '</td>' +
                    '<td align="left">' +
                        '<select name="kota" class="form-control">' +
                            '<option value="0" selected="selected"></option>' +
                        '</select>' +
                    '</td>' +
                '</tr>';
             $( record ).insertBefore( "#detail_tujuan" );
                    
         setNamaPropinsiChange();

        $('#btn_add_tujuan').click(function() {
            var record = 
                '<tr>' +                        
                    '<td align="center"><span class="fa fa-trash-o hapus_tujuan" style="cursor: pointer;"></span></td>' +  
                    '<td align="left">' +
                        '<select name="propinsi" class="form-control nama_propinsi">' +
                            '<option value=""></option>' +
                                                            '<option value="1">Bali</option>' +
                                                            '<option value="2">Bangka Belitung</option>' +
                                                            '<option value="3">Banten</option>' +
                                                            '<option value="4">Bengkulu</option>' +
                                                            '<option value="5">DI Yogyakarta</option>' +
                                                            '<option value="6">DKI Jakarta</option>' +
                                                            '<option value="7">Gorontalo</option>' +
                                                            '<option value="8">Jambi</option>' +
                                                            '<option value="9">Jawa Barat</option>' +
                                                            '<option value="10">Jawa Tengah</option>' +
                                                            '<option value="11">Jawa Timur</option>' +
                                                            '<option value="12">Kalimantan Barat</option>' +
                                                            '<option value="13">Kalimantan Selatan</option>' +
                                                            '<option value="14">Kalimantan Tengah</option>' +
                                                            '<option value="15">Kalimantan Timur</option>' +
                                                            '<option value="16">Kalimantan Utara</option>' +
                                                            '<option value="17">Kepulauan Riau</option>' +
                                                            '<option value="18">Lampung</option>' +
                                                            '<option value="19">Maluku</option>' +
                                                            '<option value="20">Maluku Utara</option>' +
                                                            '<option value="21">Nanggroe Aceh Darussalam (NAD)</option>' +
                                                            '<option value="22">Nusa Tenggara Barat (NTB)</option>' +
                                                            '<option value="23">Nusa Tenggara Timur (NTT)</option>' +
                                                            '<option value="24">Papua</option>' +
                                                            '<option value="25">Papua Barat</option>' +
                                                            '<option value="26">Riau</option>' +
                                                            '<option value="27">Sulawesi Barat</option>' +
                                                            '<option value="28">Sulawesi Selatan</option>' +
                                                            '<option value="29">Sulawesi Tengah</option>' +
                                                            '<option value="30">Sulawesi Tenggara</option>' +
                                                            '<option value="31">Sulawesi Utara</option>' +
                                                            '<option value="32">Sumatera Barat</option>' +
                                                            '<option value="33">Sumatera Selatan</option>' +
                                                            '<option value="34">Sumatera Utara</option>' +
                                                    '</select>' +
                    '</td>' +
                    '<td align="left">' +
                        '<select name="kota" class="form-control"></select>' +
                    '</td>' +
                '</tr>';
             $( record ).insertBefore( "#detail_tujuan" );
             setNamaPropinsiChange();
        });


        $( document ).on( 'click', '.hapus_tujuan', function() {
            var element = $(this).closest('tr');
            element.remove();
        });

        var is_aktif_freeongkir = "0";        
        $('input[name=is_aktif_freeongkir]').on('ifChecked', function(event){
            is_aktif_freeongkir = $(this).val();
        });

        var all_produk_freeongkir = "1";        
        $('input[name=all_produk_freeongkir]').on('ifChecked', function(event){
            all_produk_freeongkir = $(this).val();
        });

        $('#btn_simpan_freeongkir').click(function() {            
            var data = new FormData();
            data.append('is_aktif', is_aktif_freeongkir);
            data.append('all_produk', all_produk_freeongkir);
            data.append('min_pembelian', ($('[name=min_pembelian_freeongkir]').val()).replace(/\,/g, ''));     
            var kurir = $('[name=kurir_freeongkir]').val();
            $id_kurir = '';
            for(var key in kurir) {
                $id_kurir+=(key>0?',':'')+kurir[key]
            }
            data.append('id_kurir', $id_kurir);

            var row = 0;
            var detail = '';
            $("#tblDetail_tujuan tr").each(function() {
                if(row>0) {
                    var id_propinsi = $(this).find('[name=propinsi]').val();
                    var propinsi    = $(this).find('[name=propinsi] option:selected').text();
                    var id_kota     = $(this).find('[name=kota]').val();
                    var kota        = $(this).find('[name=kota] option:selected').text();

                    detail+=(detail==''?'':'\n')+id_propinsi+'\t'+propinsi+'\t'+id_kota+'\t'+kota+'\t';                                                 
                }
                row++;
            });  
            data.append('detail_tujuan', detail);
            //console.log(detail);

            setLoading(true, 'freeongkir');
            $.ajax({
                type: 'POST',
                url: 'updateFreeongkir.php',
                data: data,
                cache: false,
                dataType: 'json',
                processData: false, // Don't process the files
                contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                success: function(data) {
                    setLoading(false, 'freeongkir');
                    if(data['success']) {
                        setMessage('success', data['message']);  
                    } else {
                        setMessage('error', data['message']);                        
                    }
                }, 

                error: function() {
                    setLoading(false, 'freeongkir');
                    setMessage('error', 'Kesalahan server. Mohon diulang kembali!');
                }
            }); 
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
