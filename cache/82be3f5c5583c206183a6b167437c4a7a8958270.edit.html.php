<?php /*%%SmartyHeaderCode:2306032375e841b3f59ee68-42474400%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82be3f5c5583c206183a6b167437c4a7a8958270' => 
    array (
      0 => '..\\..\\templates\\back-end\\penguin\\product\\edit.html',
      1 => 1538456116,
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
  'nocache_hash' => '2306032375e841b3f59ee68-42474400',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e89ec40777b01_61066937',
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e89ec40777b01_61066937')) {function content_5e89ec40777b01_61066937($_smarty_tpl) {?><!doctype html>
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
                                            <li class="active acc-parent-li">
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
                                            <li class="active acc-parent-li">
                            <a class="acc-parent active" href="#"><i class="icon-book"></i> PPOB <span class="fa arrow"></span></a>
                                                            <ul>
                                                                    <li>
                                        <a href="http://localhost/laundry/adminweb/ppob_produk/"><i class="fa fa-archive"></i> Produk</a>
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
						<i class="icon-table position-left"></i> Produk
					</div>
					<ul class="breadcrumb">
						<li><a href="http://localhost/laundry/adminweb">Beranda</a></li>
						<li><a href="http://localhost/laundry/adminweb/dashboard/">Produk</a></li>
						<li class="active">Edit Produk</li>
					</ul>					
				</div>
			</div>		
			<!--/Page Header-->
			
			<div class="container-fluid page-content">				
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-flat">
            <div class="panel-heading">
                <h3 class="panel-title"><strong>Produk</strong></h3>				
                <h5 class="panel-title">Edit Produk</h5>				
            </div>

            <div class="panel-body">
                <div id="wrapper" class="row" style="margin: 5px;">                    
                    <div id="alert_error" class="form-group" style="display: none;">
                        <div class="alert alert-danger">&nbsp;</div>
                    </div>
                
                    <div class="form-group">
                        <label for="kode">Kode Produk:</label>
                        <input type="text" value="K409" class="form-control" name="kode" placeholder="" />
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama Produk:</label>
                        <input type="text" value="piyama anak elmo size S" class="form-control" name="nama" placeholder="" />
                    </div>

                    <div class="form-group">
                        <label for="brand">Brand:</label>
                        <select class="form-control" name="id_brand">
                            <option value="0"  selected="selected" >-- Pilih Brand --</option>                                        
                                                            <option value="4" >Sophie Martin Paris</option>                                        
                                                            <option value="5" >Adidas</option>                                        
                                                            <option value="6"  selected="selected" >Nike</option>                                        
                                                            <option value="7" >Levis</option>                                        
                                                            <option value="8" >Georgio Armani</option>                                        
                                                            <option value="9" >Saint Laurent</option>                                        
                                                            <option value="10" >Asus</option>                                        
                                                            <option value="11" >Dell</option>                                        
                                                            <option value="12" >Lenovo</option>                                        
                                                        
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="penjelasan">Penjelasan Produk:</label>
                        <div class="summernote"></div>
                    </div>

                    <div class="form-group">
                        <label class="control-label"><input type="checkbox" name="produk_terbaru" checked /> Atur sebagai Produk Terbaru.</label><br />
                        <label class="control-label"><input type="checkbox" name="produk_featured" checked /> Atur sebagai Produk Featured.</label><br />
                        <label class="control-label"><input type="checkbox" name="produk_preorder"  /> Atur sebagai Produk Pre Order.</label><br />
                        <label class="control-label"><input type="checkbox" name="produk_soldout"  /> Atur sebagai Produk Sold Out.</label><br />
                        <label class="control-label"><input type="checkbox" name="produk_freeongkir"  /> Atur sebagai Produk Free Ongkir.</label><br />
                    </div>

                    <div class="form-group">
                        <label for="kategori">Kategori Produk:</label>
                        <select multiple class="form-control" name="id_kategori" style="height: 200px;">
                                                            <option style="font-weight: bold;" value="38" >Beauty and Care</option>                                        
                                                            <option style="font-weight: bold;" value="12" >Elektronik</option>                                        
                                                            <option  value="32" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Baterai</option>                                        
                                                            <option  value="25" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CD, VCD, DVD, BLUE-Ray Player</option>                                        
                                                            <option  value="30" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Elektronik Lainnya</option>                                        
                                                            <option  value="31" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GPS</option>                                        
                                                            <option  value="5" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Handphone & Tablet</option>                                        
                                                            <option  value="27" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home Theater</option>                                        
                                                            <option  value="28" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Portable Audio Player</option>                                        
                                                            <option  value="29" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Proyektor</option>                                        
                                                            <option  value="24" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Radio & Tape</option>                                        
                                                            <option  value="26" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Speaker</option>                                        
                                                            <option style="font-weight: bold;" value="17" >Fashion anak</option>                                        
                                                            <option style="font-weight: bold;" value="10" >Fashion Pria</option>                                        
                                                            <option style="font-weight: bold;" value="6" >Fashion Wanita</option>                                        
                                                            <option  value="9" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jam tangan</option>                                        
                                                            <option  value="7" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sandal</option>                                        
                                                            <option style="font-weight: bold;" value="39" >Herbal</option>                                        
                                                            <option style="font-weight: bold;" value="14" >Hobi</option>                                        
                                                            <option style="font-weight: bold;" value="3" >Home & Living</option>                                        
                                                            <option style="font-weight: bold;" value="37" >HP dan Aksesoris</option>                                        
                                                            <option style="font-weight: bold;" value="22" >Industrial</option>                                        
                                                            <option style="font-weight: bold;" value="13" >Kamera</option>                                        
                                                            <option  value="33" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Action Kamera</option>                                        
                                                            <option  value="36" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CCTV</option>                                        
                                                            <option  value="34" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Drone</option>                                        
                                                            <option  value="35" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kamera digital </option>                                        
                                                            <option style="font-weight: bold;" value="11" >Komputer</option>                                        
                                                            <option style="font-weight: bold;" value="2" >Kuliner</option>                                        
                                                            <option style="font-weight: bold;" value="20" >Mobil dan aksesoris</option>                                        
                                                            <option style="font-weight: bold;" value="21" >Motor</option>                                        
                                                            <option style="font-weight: bold;" value="15" >Olah Raga</option>                                        
                                                            <option style="font-weight: bold;" value="18" >Perlengkapan Bayi</option>                                        
                                                            <option style="font-weight: bold;" value="23" >Perlengkapan Kantor</option>                                        
                                                            <option style="font-weight: bold;" value="19" >Rumah Tangga</option>                                        
                                                            <option style="font-weight: bold;" value="1" >Second Pede</option>                                        
                                                            <option style="font-weight: bold;" value="16" >Sepeda</option>                                        
                                                        
                        </select>
                        <label>Gunakan tombol Ctrl untuk pilih lebih dari 1 kategori.</label>
                    </div>

                    <div class="form-group">
                        <label for="keyword">Katakunci Pencarian:</label>
                        <textarea class="form-control" style="height: 80px" name="keyword">guess</textarea>
                    </div>

                    <div class="form-group">
                        <label for="berat_produk">Berat Produk:</label>
                        <input type="text" value="250" class="form-control harga" name="berat" placeholder="" />
                        <label for="label_berat_produk">Berat produk dalam Gram.</label>
                    </div>

                    <div class="form-group">
                        <label for="harga_modal">Harga Modal:</label>
                        <input type="text" value="0" class="form-control harga" name="harga_modal" placeholder="" />
                    </div>

                    <div class="form-group">
                        <label for="harga_jual_umum">Harga Jual Normal:</label>
                        <input type="text" value="42,000" class="form-control harga" name="harga_jual_umum" placeholder="" />
                    </div>

                    <div class="form-group">
                        <label for="harga_jual_jenis_user">Harga Jual Jenis User:</label>                        
                        <div id="detail_harga_jual" class="table-responsive">
                            <table id="tblHargaUser" width="100%">
                                <thead>
                                    <tr>
                                        <th width="50%"><div style="text-align: center;">Jenis User</div></th>
                                        <th width="50%"><div style="text-align: center;">Harga</div></th>
                                    </tr>
                                </thead>
                                <tbody id="hargauser">
                                                                            <tr>
                                            <td style="padding: 5px;"><input type="hidden" name="id_jenis_user" value="2" /><input type="text" value="Silver" class="form-control" name="jenis_user" class="form-control" readonly="readOnly" /></td>
                                            <td style="padding: 5px;"><input type="text" value="0" class="form-control harga" name="harga_jual" class="form-control" placeholder="" /></td>
                                        </tr>
                                                                            <tr>
                                            <td style="padding: 5px;"><input type="hidden" name="id_jenis_user" value="3" /><input type="text" value="Gold" class="form-control" name="jenis_user" class="form-control" readonly="readOnly" /></td>
                                            <td style="padding: 5px;"><input type="text" value="0" class="form-control harga" name="harga_jual" class="form-control" placeholder="" /></td>
                                        </tr>
                                                                            <tr>
                                            <td style="padding: 5px;"><input type="hidden" name="id_jenis_user" value="4" /><input type="text" value="Premium" class="form-control" name="jenis_user" class="form-control" readonly="readOnly" /></td>
                                            <td style="padding: 5px;"><input type="text" value="0" class="form-control harga" name="harga_jual" class="form-control" placeholder="" /></td>
                                        </tr>
                                                                    </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="form-group">                        
                        <label for="harga_jual_grosir">Harga Jual Grosir:</label>
                        <div id="detail_grosir" class="table-responsive">
                            <table id="tblGrosir" width="100%">
                                <thead>
                                    <tr>
                                        <th width="30%"><div style="text-align: center;">Jumlah Min</div></th>
                                        <th width="30%"><div style="text-align: center;">Jumlah Max</div></th>
                                        <th width="30%"><div style="text-align: center;">Harga</div></th>
                                        <th width="5%"><div style="text-align: center;">&nbsp;</div></th>
                                        <th width="5%"><div style="text-align: center;">&nbsp;</div></th>
                                    </tr>
                                </thead>
                                <tbody id="grosir"></tbody>
                            </table>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="minimum_pesan">Minimum Pesan:</label>
                        <input type="text" value="1" class="form-control harga" name="minimum_pesan" placeholder="" />
                    </div>

                    <div class="form-group">
                        <label for="harga_diskon">Harga Promo:</label>
                        <input type="text" value="0" class="form-control harga" name="harga_diskon" placeholder="" />
                    </div>

                    <div class="form-group">
                        <label for="from_date_harga_diskon">Tanggal Harga Promo Dari:</label>
                        <input type="text" value="" class="form-control tanggal" name="from_date_harga_diskon" placeholder="" />
                    </div>

                    <div class="form-group">
                        <label for="to_date_harga_diskon">Tanggal Harga Promo Sampai:</label>
                        <input type="text" value="" class="form-control tanggal" name="to_date_harga_diskon" placeholder="" />
                    </div>

                    <div class="form-group">
                        <label for="persen_diskon">Diskon Promo:</label>
                        <input type="text" value="0" class="form-control" name="persen_diskon" placeholder="" />
                    </div>

                    <div class="form-group">
                        <label for="from_date_persen_diskon">Tanggal Diskon Promo Dari:</label>
                        <input type="text" value="" class="form-control tanggal" name="from_date_persen_diskon" placeholder="" />
                    </div>

                    <div class="form-group">
                        <label for="to_date_persen_diskon">Tanggal Diskon Promo Sampai:</label>
                        <input type="text" value="" class="form-control tanggal" name="to_date_persen_diskon" placeholder="" />
                    </div>

                    <div class="form-group">                        
                        <label for="varian">Varian Stok:</label>
                        <div id="detail_varian" class="table-responsive">
                            <table id="tblVarian" width="100%">
                                <thead>
                                    <tr>
                                        <th width="30%"><div style="text-align: center;">Ukuran</div></th>
                                        <th width="30%"><div style="text-align: center;">Warna</div></th>
                                        <th width="30%"><div style="text-align: center;">Jumlah</div></th>
                                        <th width="5%"><div style="text-align: center;">&nbsp;</div></th>
                                        <th width="5%"><div style="text-align: center;">&nbsp;</div></th>
                                    </tr>
                                </thead>
                                <tbody id="varian"></tbody>
                            </table>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="photo">Foto Produk:</label>
                        <input type="file" id="fileupload_foto_1" name="fileupload_foto_1" multiple />
                    </div>

                                                                    <div class="form-group">
                            <img id="preview_foto_1" src="http://localhost/laundry/uploads/produk/index.jpg" style="height: 300px;" alt="1" />
                            <div id="blok_hapus_1" style="margin-top: 5px;">
                                <div id_hapus_foto="1" class="btn btn btn-danger hapus_foto">Hapus</div>
                                <label class="control-label"><input type="checkbox" id="gambar_utama_1" id_gambar_utama="1" class="pilih_gambar_utama" checked /> Atur sebagai gambar utama.</label>
                            </div>
                        </div>
                                                                    <div class="form-group">
                            <img id="preview_foto_2" src="#" style="height: 300px;display: none;" alt="2" />
                            <div id="blok_hapus_2" style="margin-top: 5px;display: none;">
                                <div id_hapus_foto="2" class="btn btn btn-danger hapus_foto">Hapus</div>
                                <label class="control-label"><input type="checkbox" id="gambar_utama_2" id_gambar_utama="2" class="pilih_gambar_utama"  /> Atur sebagai gambar utama.</label>
                            </div>
                        </div>
                                                                    <div class="form-group">
                            <img id="preview_foto_3" src="#" style="height: 300px;display: none;" alt="3" />
                            <div id="blok_hapus_3" style="margin-top: 5px;display: none;">
                                <div id_hapus_foto="3" class="btn btn btn-danger hapus_foto">Hapus</div>
                                <label class="control-label"><input type="checkbox" id="gambar_utama_3" id_gambar_utama="3" class="pilih_gambar_utama"  /> Atur sebagai gambar utama.</label>
                            </div>
                        </div>
                                                                    <div class="form-group">
                            <img id="preview_foto_4" src="#" style="height: 300px;display: none;" alt="4" />
                            <div id="blok_hapus_4" style="margin-top: 5px;display: none;">
                                <div id_hapus_foto="4" class="btn btn btn-danger hapus_foto">Hapus</div>
                                <label class="control-label"><input type="checkbox" id="gambar_utama_4" id_gambar_utama="4" class="pilih_gambar_utama"  /> Atur sebagai gambar utama.</label>
                            </div>
                        </div>
                                                                    <div class="form-group">
                            <img id="preview_foto_5" src="#" style="height: 300px;display: none;" alt="5" />
                            <div id="blok_hapus_5" style="margin-top: 5px;display: none;">
                                <div id_hapus_foto="5" class="btn btn btn-danger hapus_foto">Hapus</div>
                                <label class="control-label"><input type="checkbox" id="gambar_utama_5" id_gambar_utama="5" class="pilih_gambar_utama"  /> Atur sebagai gambar utama.</label>
                            </div>
                        </div>
                                                                    <div class="form-group">
                            <img id="preview_foto_6" src="#" style="height: 300px;display: none;" alt="6" />
                            <div id="blok_hapus_6" style="margin-top: 5px;display: none;">
                                <div id_hapus_foto="6" class="btn btn btn-danger hapus_foto">Hapus</div>
                                <label class="control-label"><input type="checkbox" id="gambar_utama_6" id_gambar_utama="6" class="pilih_gambar_utama"  /> Atur sebagai gambar utama.</label>
                            </div>
                        </div>
                                                                    <div class="form-group">
                            <img id="preview_foto_7" src="#" style="height: 300px;display: none;" alt="7" />
                            <div id="blok_hapus_7" style="margin-top: 5px;display: none;">
                                <div id_hapus_foto="7" class="btn btn btn-danger hapus_foto">Hapus</div>
                                <label class="control-label"><input type="checkbox" id="gambar_utama_7" id_gambar_utama="7" class="pilih_gambar_utama"  /> Atur sebagai gambar utama.</label>
                            </div>
                        </div>
                                                                    <div class="form-group">
                            <img id="preview_foto_8" src="#" style="height: 300px;display: none;" alt="8" />
                            <div id="blok_hapus_8" style="margin-top: 5px;display: none;">
                                <div id_hapus_foto="8" class="btn btn btn-danger hapus_foto">Hapus</div>
                                <label class="control-label"><input type="checkbox" id="gambar_utama_8" id_gambar_utama="8" class="pilih_gambar_utama"  /> Atur sebagai gambar utama.</label>
                            </div>
                        </div>
                                                                    <div class="form-group">
                            <img id="preview_foto_9" src="#" style="height: 300px;display: none;" alt="9" />
                            <div id="blok_hapus_9" style="margin-top: 5px;display: none;">
                                <div id_hapus_foto="9" class="btn btn btn-danger hapus_foto">Hapus</div>
                                <label class="control-label"><input type="checkbox" id="gambar_utama_9" id_gambar_utama="9" class="pilih_gambar_utama"  /> Atur sebagai gambar utama.</label>
                            </div>
                        </div>
                                                                    <div class="form-group">
                            <img id="preview_foto_10" src="#" style="height: 300px;display: none;" alt="10" />
                            <div id="blok_hapus_10" style="margin-top: 5px;display: none;">
                                <div id_hapus_foto="10" class="btn btn btn-danger hapus_foto">Hapus</div>
                                <label class="control-label"><input type="checkbox" id="gambar_utama_10" id_gambar_utama="10" class="pilih_gambar_utama"  /> Atur sebagai gambar utama.</label>
                            </div>
                        </div>
                                                                    <div class="form-group">
                            <img id="preview_foto_11" src="#" style="height: 300px;display: none;" alt="11" />
                            <div id="blok_hapus_11" style="margin-top: 5px;display: none;">
                                <div id_hapus_foto="11" class="btn btn btn-danger hapus_foto">Hapus</div>
                                <label class="control-label"><input type="checkbox" id="gambar_utama_11" id_gambar_utama="11" class="pilih_gambar_utama"  /> Atur sebagai gambar utama.</label>
                            </div>
                        </div>
                                                                    <div class="form-group">
                            <img id="preview_foto_12" src="#" style="height: 300px;display: none;" alt="12" />
                            <div id="blok_hapus_12" style="margin-top: 5px;display: none;">
                                <div id_hapus_foto="12" class="btn btn btn-danger hapus_foto">Hapus</div>
                                <label class="control-label"><input type="checkbox" id="gambar_utama_12" id_gambar_utama="12" class="pilih_gambar_utama"  /> Atur sebagai gambar utama.</label>
                            </div>
                        </div>
                                                                    <div class="form-group">
                            <img id="preview_foto_13" src="#" style="height: 300px;display: none;" alt="13" />
                            <div id="blok_hapus_13" style="margin-top: 5px;display: none;">
                                <div id_hapus_foto="13" class="btn btn btn-danger hapus_foto">Hapus</div>
                                <label class="control-label"><input type="checkbox" id="gambar_utama_13" id_gambar_utama="13" class="pilih_gambar_utama"  /> Atur sebagai gambar utama.</label>
                            </div>
                        </div>
                                                                    <div class="form-group">
                            <img id="preview_foto_14" src="#" style="height: 300px;display: none;" alt="14" />
                            <div id="blok_hapus_14" style="margin-top: 5px;display: none;">
                                <div id_hapus_foto="14" class="btn btn btn-danger hapus_foto">Hapus</div>
                                <label class="control-label"><input type="checkbox" id="gambar_utama_14" id_gambar_utama="14" class="pilih_gambar_utama"  /> Atur sebagai gambar utama.</label>
                            </div>
                        </div>
                                                                    <div class="form-group">
                            <img id="preview_foto_15" src="#" style="height: 300px;display: none;" alt="15" />
                            <div id="blok_hapus_15" style="margin-top: 5px;display: none;">
                                <div id_hapus_foto="15" class="btn btn btn-danger hapus_foto">Hapus</div>
                                <label class="control-label"><input type="checkbox" id="gambar_utama_15" id_gambar_utama="15" class="pilih_gambar_utama"  /> Atur sebagai gambar utama.</label>
                            </div>
                        </div>
                                                                    <div class="form-group">
                            <img id="preview_foto_16" src="#" style="height: 300px;display: none;" alt="16" />
                            <div id="blok_hapus_16" style="margin-top: 5px;display: none;">
                                <div id_hapus_foto="16" class="btn btn btn-danger hapus_foto">Hapus</div>
                                <label class="control-label"><input type="checkbox" id="gambar_utama_16" id_gambar_utama="16" class="pilih_gambar_utama"  /> Atur sebagai gambar utama.</label>
                            </div>
                        </div>
                                                                    <div class="form-group">
                            <img id="preview_foto_17" src="#" style="height: 300px;display: none;" alt="17" />
                            <div id="blok_hapus_17" style="margin-top: 5px;display: none;">
                                <div id_hapus_foto="17" class="btn btn btn-danger hapus_foto">Hapus</div>
                                <label class="control-label"><input type="checkbox" id="gambar_utama_17" id_gambar_utama="17" class="pilih_gambar_utama"  /> Atur sebagai gambar utama.</label>
                            </div>
                        </div>
                                                                    <div class="form-group">
                            <img id="preview_foto_18" src="#" style="height: 300px;display: none;" alt="18" />
                            <div id="blok_hapus_18" style="margin-top: 5px;display: none;">
                                <div id_hapus_foto="18" class="btn btn btn-danger hapus_foto">Hapus</div>
                                <label class="control-label"><input type="checkbox" id="gambar_utama_18" id_gambar_utama="18" class="pilih_gambar_utama"  /> Atur sebagai gambar utama.</label>
                            </div>
                        </div>
                                                                    <div class="form-group">
                            <img id="preview_foto_19" src="#" style="height: 300px;display: none;" alt="19" />
                            <div id="blok_hapus_19" style="margin-top: 5px;display: none;">
                                <div id_hapus_foto="19" class="btn btn btn-danger hapus_foto">Hapus</div>
                                <label class="control-label"><input type="checkbox" id="gambar_utama_19" id_gambar_utama="19" class="pilih_gambar_utama"  /> Atur sebagai gambar utama.</label>
                            </div>
                        </div>
                                                                    <div class="form-group">
                            <img id="preview_foto_20" src="#" style="height: 300px;display: none;" alt="20" />
                            <div id="blok_hapus_20" style="margin-top: 5px;display: none;">
                                <div id_hapus_foto="20" class="btn btn btn-danger hapus_foto">Hapus</div>
                                <label class="control-label"><input type="checkbox" id="gambar_utama_20" id_gambar_utama="20" class="pilih_gambar_utama"  /> Atur sebagai gambar utama.</label>
                            </div>
                        </div>
                                        
                    <div class="form-group">
                        <label for="status">Status Produk:</label>
                        <select class="form-control" name="status">
                            <option value="1"  selected="selected" >Publish</option>
                            <option value="0" >Unpublish</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <table>
                            <tbody>
                                <tr>
                                    <td width="100%">&nbsp;</td> 
                                    <td nowrap>
                                        <div id="i_loading" class="G-btn-animation" style="display: none;"><img src="http://localhost/laundry/templates/back-end/penguin/assets/img/loading.gif" /></div>                  
                                        <div id="btn_simpan" type="submit" class="btn btn-primary">Simpan</div>
                                        <a id="btn_batal"  href="list.php" class="btn btn-warning">Batal</a>                                                        
                                    </td>
                                </tr>
                            </tbody>                                
                        </table>
                    </div>
                </div>									

            
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
                    <a href="http://localhost/laundry" target="_blank">laundry</a>&nbsp;2020
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

--><a id="scrollTop" href="index1.htm#top"><i class="icon-arrow-up12"></i></a>	

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

<!-- Page scripts -->
<script src="http://localhost/laundry/templates/back-end/penguin/assets/bootstrap-fileinput/js/fileinput.js"></script>
<script type="text/javascript" src="http://localhost/laundry/templates/back-end/penguin/assets/js/jquery.input.formatter.js"></script>  

<!-- include summernote -->
<link rel="stylesheet" href="http://localhost/laundry/templates/back-end/penguin/assets/dist/summernote.css">
<script type="text/javascript" src="http://localhost/laundry/templates/back-end/penguin/assets/dist/summernote.js"></script>
<script type="text/javascript" src="http://localhost/laundry/templates/back-end/penguin/assets/dist/summernote-ext-video.js"></script> 
<link href="http://localhost/laundry/templates/back-end/penguin/assets/datepick/jquery.datepick.css" rel="stylesheet">
<script src="http://localhost/laundry/templates/back-end/penguin/assets/datepick/jquery.plugin.js"></script>
<script src="http://localhost/laundry/templates/back-end/penguin/assets/datepick/jquery.datepick.js"></script>


<script type="text/javascript">

        $(function () {           
                                        var record = 
                    '<tr>' +
                        '<td style="padding: 5px;"><input type="text" value="1" name="jumlah_min" class="form-control harga" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><input type="text" value="11" name="jumlah_max" class="form-control harga" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><input type="text" value="42,000" name="harga" class="form-control harga" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div id="btn_tambah_grosir" class="btn btn-primary">Tambah</div></div></td>' +
                    '</tr>';
            
                $( record ).insertBefore( "#grosir" );
                                            var record = 
                    '<tr>' +
                        '<td style="padding: 5px;"><input type="text" value="12" name="jumlah_min" class="form-control harga" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><input type="text" value="20" name="jumlah_max" class="form-control harga" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><input type="text" value="39,000" name="harga" class="form-control harga" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div class="btn btn-danger hapus_grosir">Hapus</div></div></td>' +
                    '</tr>';
            
                $( record ).insertBefore( "#grosir" );
                            
                                        var record = 
                    '<tr>' +
                        '<td style="padding: 5px;"><input type="text" value="" name="ukuran" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><input type="text" value="" name="warna" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><input type="text" value="0" name="jumlah" class="form-control harga" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div id="btn_tambah_varian" class="btn btn-primary">Tambah</div></div></td>' +
                    '</tr>';

                $( record ).insertBefore( "#varian" );
                            
            $("input.harga").formatInput();

            var isEdit = true;
            $('.summernote').summernote({
                height: 300,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    //['fontname', ['fontname']],
                    // ['fontsize', ['fontsize']], Still buggy
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    // ['height', ['height']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    //['view', ['fullscreen' , 'codeview' ]],
                    ['help', ['help']]
                ]
            });
            
            $(".summernote").code('Jam Tangan Guess&nbsp;');

            function setErrorMessage(message) {
                $('#alert_error .alert').text(message);
                $('#alert_error').show('slow');
                setTimeout(function() {
                    $('#alert_error').hide('slow');
                }, 5000);
                $("body, html").animate({ 
                    scrollTop: $('#wrapper').offset().top - 70
                }, 600);

            }

            $('#btn_simpan').click(function() {            
                submitProduk();
            });
            
            function submitProduk() {
                var grosir = ''; 
                var row = 0;
                $("#tblGrosir tr").each(function() {
                    if(row>0) {
                        var jumlah_min = $(this).find('[name=jumlah_min]').val();
                        var jumlah_max = $(this).find('[name=jumlah_max]').val();
                        var harga = $(this).find('[name=harga]').val();
                        grosir+=(grosir==''?'':'\n')+jumlah_min.replace(/\,/g, '')+'\t'+jumlah_max.replace(/\,/g, '')+'\t'+harga.replace(/\,/g, '');
                    } 
                    row++;
                });

                var varian = ''; 
                var row = 0;
                $("#tblVarian tr").each(function() {
                    if(row>0) {
                        var ukuran = $(this).find('[name=ukuran]').val();
                        var warna = $(this).find('[name=warna]').val();
                        var jumlah = $(this).find('[name=jumlah]').val();
                        varian+=(varian==''?'':'\n')+ukuran+'\t'+warna+'\t'+jumlah.replace(/\,/g, '');
                    } 
                    row++;
                });

                var harga_user = ''; 
                var row = 0;
                $("#tblHargaUser tr").each(function() {
                    if(row>0) {
                        var id_jenis_user = $(this).find('[name=id_jenis_user]').val();
                        var harga_jual = $(this).find('[name=harga_jual]').val();
                        harga_user+=(harga_user==''?'':'\n')+id_jenis_user+'\t'+harga_jual.replace(/\,/g, '');
                    } 
                    row++;
                });

                var data = new FormData();
                data.append('id', isEdit?'28':'');
                data.append('kode', $('[name=kode]').val());
                data.append('nama', $('[name=nama]').val());
                data.append('penjelasan', $('.summernote').summernote().code().replace(/\n/, '<br />'));
                data.append('id_brand', $('[name=id_brand]').val());
                data.append('produk_terbaru', $('[name=produk_terbaru]').is(':checked')?'1':'0');
                data.append('produk_featured', $('[name=produk_featured]').is(':checked')?'1':'0');
                data.append('produk_preorder', $('[name=produk_preorder]').is(':checked')?'1':'0');
                data.append('produk_soldout', $('[name=produk_soldout]').is(':checked')?'1':'0');
                data.append('produk_freeongkir', $('[name=produk_freeongkir]').is(':checked')?'1':'0');
                data.append('keyword', $('[name=keyword]').val());
                data.append('berat', $('[name=berat]').val().replace(/\,/g, ''));

                var kategori = $('[name=id_kategori]').val();
                $id_kategori = '';
                for(var key in kategori) {
                    $id_kategori+=(key>0?',':'')+kategori[key]
                }

                data.append('id_kategori', $id_kategori);
                data.append('harga_modal', ($('[name=harga_modal]').val()).replace(/\,/g, ''));
                data.append('harga_jual', ($('[name=harga_jual_umum]').val()).replace(/\,/g, ''));
                data.append('harga_jual_user', harga_user);
                data.append('minimum_pesan', ($('[name=minimum_pesan]').val()).replace(/\,/g, ''));               
                data.append('harga_diskon', ($('[name=harga_diskon]').val()).replace(/\,/g, ''));
                data.append('from_date_harga_diskon', $('[name=from_date_harga_diskon]').val());
                data.append('to_date_harga_diskon', $('[name=to_date_harga_diskon]').val());
                data.append('persen_diskon', $('[name=persen_diskon]').val());
                data.append('from_date_persen_diskon', $('[name=from_date_persen_diskon]').val());
                data.append('to_date_persen_diskon', $('[name=to_date_persen_diskon]').val());
                data.append('grosir', grosir);
                data.append('varian', varian);
                
                for(var key in files) {
                    data.append('filename_foto_'+(eval(key)+1), files[key]);
                    /*if(files[key]!=undefined && typeof files[key] === 'object') {
                        $.each(files[key], function(keys, value) {
                            alert();
                        });                        
                    }*/
                }

                for(var i=0; i<20; i++) {
                    if($('#gambar_utama_'+(i+1)).is(':checked')) {
                        data.append('as_default', (i+1));
                        //console.log('as_default: '+(i+1));
                        //alert('as_default: '+(i+1));
                        break;
                    }
                }
                
                var changes_data='';
                for(var key in changes) {
                    changes_data+=key+',';
                }
                console.log(changes_data);
                data.append('changes', changes_data);
                data.append('status', $('[name=status]').val());

                setLoading(true);

                $.ajax({
                    type: 'POST',
                    url: isEdit?'update.php':'save.php',
                    data: data,
                    cache: false,
                    dataType: 'json',
                    processData: false, // Don't process the files
                    contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                    success: function(data) {
                        setLoading(false);
                        if(data['success']) {
                            swal('Sukses', 'Record Data Batal Disimpan', 'success')
                            window.location = 'list.php';                    
                        } else {
                            setErrorMessage(data['message']);                        
                        }
                    }, 

                    error: function() {
                        setLoading(false);
                        setErrorMessage('Proses simpan data produk gagal!');
                    }

                });
            }
            
            //FUNGSI GROSIR
            $( document ).on( 'click', '.hapus_grosir', function() {
                var element = $(this).closest('tr');
                element.remove();
            });
            
            $('#btn_tambah_grosir').click(function() {
                var record =
                    '<tr>' +
                        '<td style="padding: 5px;"><input type="text" value="" name="jumlah_min" class="form-control harga" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><input type="text" value="" name="jumlah_max" class="form-control harga" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><input type="text" value="" name="harga" class="form-control harga" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div class="btn btn-danger hapus_grosir">Hapus</div></div></td>' +
                    '</tr>';
                $( record ).insertBefore( "#grosir" );
                $("input.harga").formatInput();                         
            });

            //FUNGSI VARIANT
            $( document ).on( 'click', '.hapus_varian', function() {
                var element = $(this).closest('tr');
                element.remove();
            });

            $('#btn_tambah_varian').click(function() {
                var record = 
                    '<tr>' +
                        '<td style="padding: 5px;"><input type="text" value="" name="ukuran" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><input type="text" value="" name="warna" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><input type="text" value="" name="jumlah" class="form-control  harga" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div class="btn btn-danger hapus_varian">Hapus</div></div></td>' +
                    '</tr>';
                $( record ).insertBefore( "#varian" );
                $("input.harga").formatInput();                         
            });

            function setLoading(isLoading) {
                if(isLoading) {
                    $('#i_loading').show();
                    $('#btn_simpan').hide();
                    $('#btn_batal').hide();
                } else {
                    $('#i_loading').hide();
                    $('#btn_simpan').show(); 
                    $('#btn_batal').show();
                }
            }

            //FUNGSI GAMBAR
            function readURL(input, id) {
                if (input.files && input.files[id-1]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#preview_foto_'+id).attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[id-1]);
                }
            }

            var files = new Array();
                                            files[0] = 'index.jpg';                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
            var changes = new Array();
            $("#fileupload_foto_1").change(function(event) {
                if(!event.target.files) return;
                var f = event.target.files;
                var len = f.length>20?20:f.length;
                for(var i=0; i < len; i++) {
                    readURL(this, i+1);
                    files[i] = f[i];
                    changes[i] = true;
                    console.log('changes '+i+ ' '+changes[i]);
                    $('#preview_foto_'+(i+1)).show();
                    $('#blok_hapus_'+(i+1)).show();
                }
                for(var i=1; i<20; i++) {
                    if($('#gambar_utama_'+(i+1)).is(':checked')) return;
                }
                $('#gambar_utama_1').prop('checked', true);
            });

            $('.hapus_foto').click(function() {
                var id = this.getAttribute("id_hapus_foto");
                files[eval(id)-1] = undefined;
                changes[eval(id)-1] = true;                
                $('#fileupload_foto_'+id).val('');
                $('#preview_foto_'+id).hide();
                $('#blok_hapus_'+id).hide();
                if($('#gambar_utama_'+id).is(':checked')) {
                    $('#gambar_utama_'+id).prop('checked', false);
                    for(var i=0; i<20; i++) {
                        if(files[i] != undefined) {
                            $('#gambar_utama_'+(i+1)).prop('checked', true);    
                            break;
                        }
                    }
                }
            });

            $('.pilih_gambar_utama').click(function() {
                var id = this.getAttribute("id_gambar_utama");
                for(var i=0; i<20; i++) {
                    $('#gambar_utama_'+(i+1)).prop('checked', id==i+1);
                }
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
