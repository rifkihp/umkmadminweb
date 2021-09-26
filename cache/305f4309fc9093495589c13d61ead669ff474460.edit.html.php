<?php /*%%SmartyHeaderCode:1761829595e89eb9b6f8a43-36834206%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '305f4309fc9093495589c13d61ead669ff474460' => 
    array (
      0 => '..\\..\\templates\\back-end\\penguin\\pemesanan\\edit.html',
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
  'nocache_hash' => '1761829595e89eb9b6f8a43-36834206',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e89eb9fc50434_95754576',
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e89eb9fc50434_95754576')) {function content_5e89eb9fc50434_95754576($_smarty_tpl) {?><!doctype html>
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
                                <span id="total_notif_perlu_kemas" class="bubble">21</span>
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
                                            <li class="active acc-parent-li">
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
						<i class="icon-table position-left"></i> Pemesanan
					</div>
					<ul class="breadcrumb">
						<li><a href="http://localhost/laundry/adminweb">Beranda</a></li>
						<li><a href="http://localhost/laundry/adminweb/pemesanan/">Pemesanan</a></li>
						<li class="active">Edit Pemesanan</li>
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
								<h5 class="panel-title">Edit Pemesanan</h5>				
							</div>

							<div class="panel-body">
        <div id="page-wrapper" class="col-md-12">

            <div id="page-inner">

                <!-- /. ROW  -->

                <div class="row">                    

                    <div id="alert_error" class="form-group" style="display: none;">

                        <div class="alert alert-danger">&nbsp;</div>

                    </div>

                

                    <div class="form-group">

                        <label for="kode">No. Pemesanan:</label>

                        <input type="text" value="000082" class="form-control" name="kode" readonly placeholder="Auto" />

                    </div>

                    

                    <div class="form-group">

                        <label for="tanggal">Tanggal Pemesanan:</label>

                        <input type="text" value="05-04-2020" class="form-control pickadate" name="tanggal" />

                    </div>

                    

                    <div id="panel_member" class="form-group" >

                        <label for="kode_member">Member:</label>

                        <input type="text" value="Rifki Heruprasetyo" class="form-control" name="nama_member" />

                        <input type="hidden" value="1" name="id_member" />

                    </div>

                    

                    <div class="form-group">

                        <label for="kepada">Kepada:</label>

                        <input type="text" value="Rifki Heruprasetyo" class="form-control" name="kepada" />

                    </div>

                    

                    <div class="form-group">

                        <label for="alamat">Alamat:</label>

                        <textarea class="form-control" name="alamat" style="height: 80px;">Komp. TNI AD Jalan Kenari 6 Blok K4 No. 5</textarea>

                    </div>



                    <div class="form-group">

                        <label for="no_hp">No. HP:</label>

                        <input type="text" value="081373011823" class="form-control" name="no_hp" />

                    </div>



                    <div class="form-group">

                        <label for="propinsi">Propinsi:</label>

                        <select id="header_prop" name="propinsi" class="form-control">

                            <option value="0">-- Pilih Propinsi --</option>

                            
                                <option value="1" >Bali</option>

                            
                                <option value="2" >Bangka Belitung</option>

                            
                                <option value="3" >Banten</option>

                            
                                <option value="4" >Bengkulu</option>

                            
                                <option value="5" >DI Yogyakarta</option>

                            
                                <option value="6" >DKI Jakarta</option>

                            
                                <option value="7" >Gorontalo</option>

                            
                                <option value="8" >Jambi</option>

                            
                                <option value="9"  selected="selected" >Jawa Barat</option>

                            
                                <option value="10" >Jawa Tengah</option>

                            
                                <option value="11" >Jawa Timur</option>

                            
                                <option value="12" >Kalimantan Barat</option>

                            
                                <option value="13" >Kalimantan Selatan</option>

                            
                                <option value="14" >Kalimantan Tengah</option>

                            
                                <option value="15" >Kalimantan Timur</option>

                            
                                <option value="16" >Kalimantan Utara</option>

                            
                                <option value="17" >Kepulauan Riau</option>

                            
                                <option value="18" >Lampung</option>

                            
                                <option value="19" >Maluku</option>

                            
                                <option value="20" >Maluku Utara</option>

                            
                                <option value="21" >Nanggroe Aceh Darussalam (NAD)</option>

                            
                                <option value="22" >Nusa Tenggara Barat (NTB)</option>

                            
                                <option value="23" >Nusa Tenggara Timur (NTT)</option>

                            
                                <option value="24" >Papua</option>

                            
                                <option value="25" >Papua Barat</option>

                            
                                <option value="26" >Riau</option>

                            
                                <option value="27" >Sulawesi Barat</option>

                            
                                <option value="28" >Sulawesi Selatan</option>

                            
                                <option value="29" >Sulawesi Tengah</option>

                            
                                <option value="30" >Sulawesi Tenggara</option>

                            
                                <option value="31" >Sulawesi Utara</option>

                            
                                <option value="32" >Sumatera Barat</option>

                            
                                <option value="33" >Sumatera Selatan</option>

                            
                                <option value="34" >Sumatera Utara</option>

                            
                        </select>

                    </div>



                    <div class="form-group">

                        <label for="kota">Kota:</label>

                        <select id="header_kota" name="kota" class="form-control">

                            <option value="0">-- Pilih Kota --</option>

                            
                                <option value="22" >Bandung</option>

                            
                                <option value="23" >Bandung</option>

                            
                                <option value="24" >Bandung Barat</option>

                            
                                <option value="34" >Banjar</option>

                            
                                <option value="54" >Bekasi</option>

                            
                                <option value="55" >Bekasi</option>

                            
                                <option value="78" >Bogor</option>

                            
                                <option value="79" >Bogor</option>

                            
                                <option value="103" >Ciamis</option>

                            
                                <option value="104" >Cianjur</option>

                            
                                <option value="107" >Cimahi</option>

                            
                                <option value="108" >Cirebon</option>

                            
                                <option value="109" >Cirebon</option>

                            
                                <option value="115"  selected="selected" >Depok</option>

                            
                                <option value="126" >Garut</option>

                            
                                <option value="149" >Indramayu</option>

                            
                                <option value="171" >Karawang</option>

                            
                                <option value="211" >Kuningan</option>

                            
                                <option value="252" >Majalengka</option>

                            
                                <option value="332" >Pangandaran</option>

                            
                                <option value="376" >Purwakarta</option>

                            
                                <option value="428" >Subang</option>

                            
                                <option value="430" >Sukabumi</option>

                            
                                <option value="431" >Sukabumi</option>

                            
                                <option value="440" >Sumedang</option>

                            
                                <option value="468" >Tasikmalaya</option>

                            
                                <option value="469" >Tasikmalaya</option>

                            
                        </select>

                    </div>

                    

                    <div class="form-group">

                        <label for="kecamatan">Kecamatan:</label>

                        <select id="header_kecamatan" name="kecamatan" class="form-control">

                            <option value="0">-- Pilih Kecamatan --</option>

                            
                                <option value="1577" >Beji</option>

                            
                                <option value="1578" >Bojongsari</option>

                            
                                <option value="1579" >Cilodong</option>

                            
                                <option value="1580" >Cimanggis</option>

                            
                                <option value="1581" >Cinere</option>

                            
                                <option value="1582" >Cipayung</option>

                            
                                <option value="1583" >Limo</option>

                            
                                <option value="1584" >Pancoran Mas</option>

                            
                                <option value="1585" >Sawangan</option>

                            
                                <option value="1586" >Sukmajaya</option>

                            
                                <option value="1587"  selected="selected" >Tapos</option>

                            
                        </select>

                    </div>

                    

                    <div class="form-group">

                        <label for="kode_pos">Kode Pos:</label>

                        <input type="text" value="16455" class="form-control" name="kode_pos" />

                    </div>

                    

                    <div class="form-group">

                        <label for="kurir">Jasa Kurir:</label>

                        <select id="header_kurir" name="kurir" class="form-control">

                            
                                <option value="JNE"  selected="selected" >JNE</option>

                            
                                <option value="TIKI" >TIKI</option>

                            
                                <option value="POS" >POS</option>

                            
                                <option value="JNT" >JNT</option>

                            
                                <option value="COD" >Cash On Delivery</option>

                            
                                <option value="I091" >Indah Cargo</option>

                            
                            <!-- option value="0" >LAINNYA</option -->                            

                        </select>

                    </div>



                    <div class="form-group">

                        <label for="layanan">Layanan:</label>

                        <select id="header_layanan" name="layanan"  class="form-control">

                            
                                <option value="OKE" >Ongkos Kirim Ekonomis (OKE)</option>

                            
                                <option value="REG" >Layanan Reguler (REG)</option>

                            
                                <option value="YES" >Yakin Esok Sampai (YES)</option>

                            
                        </select>

                    </div>

                    

                    <div class="form-group">

                        <label for="jenis">Jenis Pesanan:</label>

                        <select name="is_dropship" class="form-control">

                            <option value="N"  selected="selected" >Bukan Dropship</option>

                            <option value="Y" >Dropship</option>

                        </select>                            

                    </div>

                    

                    <div class="form-group" id="p_dropship_name" style="display: none;">

                        <label for="dropship_name">Nama Dropshiper:</label>

                        <input type="text" value="" class="form-control" name="dropship_name" />

                    </div>



                    <div class="form-group" id="p_dropship_phone" style="display: none;">

                        <label for="dropship_phone">No. HP Dropshiper:</label>

                        <input type="text" value="" class="form-control" name="dropship_phone" />

                    </div>

                    

                    <div id="p_email_notifikasi" class="form-group" style="display: none;">

                        <label for="email_notifikasi">Email Notifikasi: </label>

                        <input type="text" value="" class="form-control" name="email_notifikasi" />                                                        

                    </div>

                    

                    <div id="list_detail" class="table-responsive" style="margin-top: 10px;">

                        <div class="form-group">

                            <label for="detail_produk">Detail Produk Pesanan:</label>

                            <table  id="tblDetail_produk" class="table table-striped table-bordered table-hover" width="100%">

                                <thead>

                                    <tr>

                                        <th width="5px"><span class="fa fa-trash-o"></span></th>

                                        <th width="25%"><div style="text-align: center;">Nama Barang</div></th>

                                        <th width="20%"><div style="text-align: center;">Ukuran / Warna</div></th>

                                        <th width="10%"><div style="text-align: center;">Qty</div></th>

                                        <th width="10%"><div style="text-align: center;">Harga</div></th>

                                        <th width="10%"><div style="text-align: center;">Diskon</div></th>

                                        <th width="10%"><div style="text-align: center;">Subtotal</div></th>

                                        <th width="15%"><div style="text-align: center;">Grandtotal</div></th>    

                                    </tr>

                                </thead>

                                <tbody id="detail_produk">

                                    <tr>

                                        <td colspan="7" style="padding: 5px 0 0 0; margin: 0;"><span style="text-align: right; width: 100%; font-weight: bold;">Voucher:</span></td>    

                                        <td style="padding: 0; margin: 0;"><input id="header_voucher" type="text" value="0" class="form-control" name="voucher" style="text-align: right; font-weight: bold;" disabled="disabled" /></td>

                                    </tr>

                                    <tr>

                                        <td colspan="7" style="padding: 5px 0 0 0; margin: 0;"><span style="text-align: right; width: 100%; font-weight: bold;">Ongkir:</span></td>    

                                        <td style="padding: 0; margin: 0;"><input type="hidden" name="etd" value="+" /><input id="header_tarif" type="text" value="95,000,000" class="form-control harga" name="ongkir" style="text-align: right; font-weight: bold;" disabled="disabled" /></td>

                                    </tr>

                                    <tr>

                                        <td colspan="7" style="padding: 5px 0 0 0; margin: 0;"><span style="text-align: right; width: 100%; font-weight: bold;">Total:</span></td>    

                                        <td style="padding: 0; margin: 0;"><input id="header_total" type="text" value="95,330,000" class="form-control" name="total" style="text-align: right; font-weight: bold;" disabled="disabled" /></td>

                                    </tr>

                                </tbody>

                            </table>

                        </div>

                        

                        <div class="form-group">

                            <div id='btn_add' class="btn btn-primary">Tambah</div>

                            <!-- div id='btn_update_cart' class="btn btn-warning">UPDATE CART</div -->

                        </div>                        

                    </div>

                    

                    <div class="form-group">&nbsp;</div>

                    

                    <div class="form-group" id="cara_pembayaran">

                        <label for="cara_bayar">Cara Pembayaran:</label>

                        <select name="cara_bayar" class="form-control">

                            
                                <option value="1"  selected="selected" >Transfer Bank</option>

                            
                                <option value="2" >Kartu Kredit / Debet</option>

                            
                                <option value="3" >Cash on Delivery (COD)</option>

                            
                        </select>                        

                    </div>

                    

                    <div class="form-group">

                        <label for="status">Status Pembayaran:</label>

                        <select name="status" class="form-control">

                            <option value="0" >Belum Lunas</option>

                            <option value="7" >Belum Lunas (Sedang Diproses)</option>

                            <option value="7" >Belum Lunas (Proses Pengiriman)</option>

                            <option value="2"  selected="selected" >Lunas (Sedang Diproses)</option>

                            <option value="6" >Lunas (Proses Pengiriman)</option>

                            <option value="5" >Lunas (Transaksi Selesai)</option>

                        </select>                        

                    </div>

                    

                    <div class="form-group" id="metode_pembayaran" >

                        <label for="metode_pembayaran">Metode Pembayaran:</label>

                        <select name="bank_tujuan" class="form-control">

                            <option value="0">-- Pilih Bank Tujuan --</option>

                            
                                <option value="4"  selected="selected" >Muamalat (Ryan syarifudin - an. 3660008797)</option>

                            
                        </select>                        

                    </div>

                    

                    <div class="form-group" id="jumlah_transfer" >

                        <label for="jumlah_transfer">Jumlah Transfer:</label>

                        <input type="text" name="jumlah_transfer" value="95,330,000" class="form-control harga" />

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

                <!-- /. ROW  -->
            </div>

            <!-- /. PAGE INNER  -->

        </div>

        <!-- /. PAGE WRAPPER  -->								
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
<!-- /global scripts -->
<script type="text/javascript" src="http://localhost/laundry/templates/back-end/penguin/js/moment.min.js"></script>
<script type="text/javascript" src="http://localhost/laundry/templates/back-end/penguin/js/legacy.js"></script>
<script type="text/javascript" src="http://localhost/laundry/templates/back-end/penguin/js/forms/daterangepicker.js"></script>
<script type="text/javascript" src="http://localhost/laundry/templates/back-end/penguin/js/forms/picker.js"></script>
<script type="text/javascript" src="http://localhost/laundry/templates/back-end/penguin/js/forms/picker.date.js"></script>
<script type="text/javascript" src="http://localhost/laundry/templates/back-end/penguin/js/forms/picker.time.js"></script>
<script type="text/javascript" src="http://localhost/laundry/templates/back-end/penguin/js/forms/spectrum.js"></script>
<script type="text/javascript" src="http://localhost/laundry/templates/back-end/penguin/js/pages/pickers.js"></script>
<script type="text/javascript" src="http://localhost/laundry/templates/back-end/penguin/assets/js/jquery.input.formatter.js"></script>
  
   <script type="text/javascript">

        var array_tarif = [];

        var delete_selected = "";

        var token = '';

        var is_cart_valid = false;

        

        $(function () {

//            $('.tanggal').datepick({ dateFormat: 'dd-mm-yyyy' });

            

            $('[name=nama_member]').autocomplete({

                source: function( request, response ) {

                    $.ajax({

                        url: 'http://localhost/laundry/store/memberDataStore.php',

                        dataType: "json",

                        method: 'post',

                        data: {

                            query: request.term

                        },

                        success: function( data ) {

                            response( $.map( data, function( item ) {

                                return {

                                    label: item['display'],

                                    value: item['value'],

                                    data : item['data']

                                }

                            }));

                        }

                    });

                },

                autoFocus: true,	      	

                minLength: 1,

                select: function( event, ui ) {

                    var data = ui.item.data;

                    $('[name=id_member]').val(data['id']);

                    if(eval(data['id'])==0) {

                        $('#p_email_notifikasi').show();

                    } else {

                        $('#p_email_notifikasi').hide();

                    }

                }		      	

            });

            

            $('[name=kepada]').autocomplete({

                source: function( request, response ) {

                    

                    var id_member = $('[name=id_member]').val();

                    $.ajax({

                        url: 'http://localhost/laundry/store/getAlamatMember.php',

                        dataType: "json",

                        method: 'post',

                        data: {

                            query: request.term,

                            'id': id_member 

                        },

                        success: function( data ) {

                            response( $.map( data, function( item ) {

                                return {

                                    label: item['display'],

                                    value: item['value'],

                                    data : item['data']

                                }

                            }));

                        }

                    });

                },

                autoFocus: true,	      	

                minLength: 1,

                select: function( event, ui ) {

                    var alamat = ui.item.data;



                    $('[name=kepada]').val(alamat['nama']);

                    $('[name=alamat]').val(alamat['alamat']);

                    $('[name=no_hp]').val(alamat['no_hp']);

                    $('[name=kode_pos]').val(alamat['kode_pos']);



                    var propinsi = alamat['id_propinsi']==undefined?'0':alamat['id_propinsi'];

                    var kota = alamat['id_kota']==undefined?'0':alamat['id_kota'];

                    var kecamatan = alamat['id_kecamatan']==undefined?'0':alamat['id_kecamatan'];



                    $('[name=propinsi]').val(propinsi);

                    loadKota(propinsi, kota);

                    loadKecamatan(kota, kecamatan);

                    loadLayanan($('#header_kurir').val(), kecamatan, 0);

                }		      	

            });

            

            $('[name=is_dropship]').on('change', function (e) {

                if($('[name=is_dropship]').val()=='Y') {                    

                    $('#p_dropship_name').show();

                    $('#p_dropship_phone').show();

                } else {

                    $('#p_dropship_name').hide();

                    $('#p_dropship_phone').hide();

                }

            });

            

            $('#header_tarif').keyup(function () { 

                getTotal();

            });

            

            $('[name=status]').on('change', function (e) {

                if($('[name=status]').val()=='0') {                    

                    $('#metode_pembayaran').hide();

                    $('#jumlah_transfer').hide();

                } else if ($('[name=cara_bayar]').val()=='1') {

                    $('#metode_pembayaran').show();

                    $('#jumlah_transfer').show();

                }

            });

            

            $('[name=cara_bayar]').on('change', function (e) {

                if($('[name=cara_bayar]').val()!='1') {                    

                    $('#metode_pembayaran').hide();

                    $('#jumlah_transfer').hide();

                } else if ($('[name=status]').val()!='0') {

                    $('#metode_pembayaran').show();

                    $('#jumlah_transfer').show();

                }

            });

            

            
                var record = 

                    '<tr>' +

                        '<td align="center"><span class="fa fa-trash-o hapus_detail" style="cursor: pointer;"></span></td>' +                                            

                        '<td align="center">' +

                            '<input type="text" value="Pukis Jovita" class="form-control nama_produk" name="nama" />' +                                                

                            '<input type="hidden" value="34" name="id_produk" />' +

                            '<input type="hidden" value="pks" name="kode" />' +

                            '<input type="hidden" value="500000" name="berat" />' +

                            '<input type="hidden" value="30000" name="harga_beli" />' +

                            '<input type="hidden" value="" name="list_grosir" />' +

                            '<input type="hidden" value="33000" name="harga_jual_ori" />' +

                        '</td>' +

                        '<td align="center">' +

                            '<select class="form-control" name="ukuran_warna">' +                            

                                
                                    '<option value="|" selected="selected" ></option>' +

                                
                            '</select>' +                            

                        '</td>' +

                        '<td align="center">' +

                            '<input type="text" value="10" class="form-control harga jumlah" name="jumlah" style="text-align: right;" />' +

                        '</td>' +

                        '<td align="center">' +

                            '<input type="text" value="33,000" class="form-control harga" name="harga_jual" style="text-align: right;"  disabled="disabled" />' +

                        '</td>' +                                            

                        '<td align="center">' +

                            '<input type="text" value="0%" class="form-control" name="diskon" style="text-align: right;"  disabled="disabled" />' +

                        '</td>' +

                        '<td align="center">' +

                            '<input type="text" value="33,000" class="form-control harga" name="sub_total" style="text-align: right;" disabled="disabled" />' +

                        '</td>' +

                        '<td align="center">' +

                            '<input type="text" value="330,000" class="form-control harga" name="grand_total" style="text-align: right;"  disabled="disabled" />' +

                        '</td>' +

                    '</tr>';

            

                $( record ).insertBefore( "#detail_produk" );

            
             

            setAutocomplete();

            setQtyChangeListeners();

            

                

                array_tarif.push({ service: 'OKE', description: 'Ongkos Kirim Ekonomis', cost:[{ value: '8500000', tarif: 'Rp 8,500,000', etd: '+' }] });

                

                array_tarif.push({ service: 'REG', description: 'Layanan Reguler', cost:[{ value: '9500000', tarif: 'Rp 9,500,000', etd: '+' }] });

                

                array_tarif.push({ service: 'YES', description: 'Yakin Esok Sampai', cost:[{ value: '16500000', tarif: 'Rp 16,500,000', etd: '+' }] });

            
            for(var key in array_tarif) {

                if(array_tarif[key]['service']=='Layanan Reguler') {

                    $('#header_tarif').val(currency(array_tarif[key]['cost'][0]['value']));

                    break;

                }

            }

            

            getTotal();

            

            function setAutocomplete() {

                

                $('.nama_produk').autocomplete({

                    source: function( request, response ) {

                        $.ajax({

                            url: 'http://localhost/laundry/store/produkDataStore.php',

                            dataType: "json",

                            method: 'post',

                            data: {

                                query: request.term,

                                id_member: '1'

                            },

                            success: function( data ) {

                                response( $.map( data, function( item ) {



                                    return {

                                        label: item['display'],

                                        value: item['value'],

                                        data : item['data']

                                    }

                                }));

                            }

                        });

                    },

                    autoFocus: true,	      	

                    minLength: 1,

                    select: function( event, ui ) {

                        //console.log(ui.item.data);



                        var data = ui.item.data;

                        /*for(var key in data) {

                            console.log(key+' --- '+data[key]);

                        }*/

                        var element = $(this).closest('tr');

                        var id_produk = element.find('[name=id_produk]');

                        var kode = element.find('[name=kode]');

                        var berat = element.find('[name=berat]');

                        var ukuran_warna = element.find('[name=ukuran_warna]');

                        var jumlah = element.find('[name=jumlah]');

                        var harga_beli = element.find('[name=harga_beli]');

                        var list_grosir = element.find('[name=list_grosir]');

                        

                        var harga_jual_ori = element.find('[name=harga_jual_ori]');

                        var harga_jual = element.find('[name=harga_jual]');

                        

                        var diskon = element.find('[name=diskon]');

                        var sub_total = element.find('[name=sub_total]');

                        var grand_total = element.find('[name=grand_total]');



                        id_produk.val(data['id']);

                        kode.val(data['kode']);

                        berat.val(data['berat']);

                        if(jumlah.val().length==0) jumlah.val(1);

                        var datas = '';

                        var store = data['list_ukuran_warna'];

                        for(var key in store) {

                            datas+='<option value="'+store[key]['kode']+'">'+store[key]['ukuran']+((store[key]['ukuran']!="" && store[key]['warna']!="")?" / ":"")+store[key]['warna']+'</option>';

                        }

                        ukuran_warna.empty();

                        $(datas).appendTo(ukuran_warna);



                        harga_beli.val(data['harga_beli']);

                        list_grosir.val(data['list_grosir']);

                        

                        harga_jual_ori.val(data['harga_jual']);

                        harga_jual.val(eval(data['harga_diskon'].replace(/\,/g, ''))>0?data['harga_diskon']:data['harga_jual']);

                        

                        diskon.val(data['persen_diskon']+"%");

                        updateGrand(jumlah, list_grosir, harga_jual_ori, harga_jual, diskon, sub_total, grand_total);

                        loadTarif($('#header_kurir').val(), $('#header_kecamatan').val(), $('#header_layanan').val());

                    }		      	

                });

            }    

            

            function setQtyChangeListeners() {

                $('.jumlah').on('input', function() { 

                    var element = $(this).closest('tr');

                    var jumlah         = element.find('[name=jumlah]');

                    var list_grosir    = element.find('[name=list_grosir]');

                    var harga_jual_ori = element.find('[name=harga_jual_ori]');

                    var harga_jual     = element.find('[name=harga_jual]');

                    var diskon         = element.find('[name=diskon]');

                    var sub_total      = element.find('[name=sub_total]');

                    var grand_total    = element.find('[name=grand_total]');

                    

                    updateGrand(jumlah, list_grosir, harga_jual_ori, harga_jual, diskon, sub_total, grand_total);

                    loadTarif($('#header_kurir').val(), $('#header_kecamatan').val(), $('#header_layanan').val());

                });

            };

            

            

            function updateGrand(jumlah, list_grosir, harga_jual_ori, harga_jual, diskon, sub_total, grand_total) {

                var row = list_grosir.val().split("\\n");

                    

                harga_jual.val(currency(eval(harga_jual_ori.val().replace(/\,/g, ''))));

                for(var key in row) {

                     col = row[key].split("|");

                    var jumlah_min = eval(col[0]);

                    if(jumlah_min<=eval(jumlah.val().replace(/\,/g, ''))) {

                        harga_jual.val(currency(eval(col[2])));

                        break;

                    }

                }



                var disc = eval(diskon.val().replace('%', ''));

                var harga =  eval(harga_jual.val().replace(/\,/g, ''));

                var subtotal = harga-(harga*disc*0.01);



                sub_total.val(currency(subtotal));



                var grand_tot = eval(jumlah.val().replace(/\,/g, ''))*eval(sub_total.val().replace(/\,/g, ''));

                grand_total.val(currency(grand_tot));

                    

                getTotal();            

            }

            

            

            function currency(nums) {



                if(!nums) return '0';

                if(nums=='') return '0';



                nums = String(nums).replace(/[\,%]/g, '');

                nums = nums.split('.').length<2?

                            nums:

                            (nums.split('.')[1].length>2?

                                String(eval(nums).toFixed(2)):

                                nums);



                if(nums=='' || nums=='0') return '0';



                while (nums.substring(0,1)=='0' && nums.substring(1,2)!='.') {

                    nums = nums.substring(1,nums.length);

                    if(nums=='0') return '0';

                }



                nums = nums.replace('.','. ');



                var num = nums.split('.')[0];

                var numArr=new String(num).split('').reverse();

                for (var i=3;i<numArr.length;i+=3)

                    numArr[i]+=',';



                var decimal = (nums.split('.')[1]?('.'+(nums.split('.')[1]).trim()):'');



                return (numArr.reverse().join('') + decimal.replace('.00',''));



            };



            $('#btn_add').click(function() {

                var record = 

                    '<tr>' +                        

                        '<td align="center"><span class="fa fa-trash-o hapus_detail" style="cursor: pointer;"></span></td>' +  

                        '<td align="center">' +

                            '<input type="text" class="form-control nama_produk" name="nama" />' +

                            '<input type="hidden" name="id_produk" />' +

                            '<input type="hidden" name="kode" />' +

                            '<input type="hidden" name="berat" />' +                            

                            '<input type="hidden" name="harga_beli" />' +

                            '<input type="hidden" name="list_grosir" />' + 

                            '<input type="hidden" name="harga_jual_ori" />' +                             

                        '</td>' +

                        '<td align="center">' +

                            '<select class="form-control" name="ukuran_warna"></select>' +

                        '</td>' +

                        '<td align="center">' +

                            '<input type="text" class="form-control harga jumlah" name="jumlah" style="text-align: right;" />' +

                        '</td>' +

                        '<td align="center">' +

                            '<input type="text" class="form-control harga" name="harga_jual" style="text-align: right;" disabled="disabled" />' +

                        '</td>' +

                        '<td align="center">' +

                            '<input type="text" class="form-control" name="diskon" style="text-align: right;" disabled="disabled" />' +

                        '</td>' +

                        '<td align="center">' +

                            '<input type="text" class="form-control harga" name="sub_total" style="text-align: right;" disabled="disabled" />' +

                        '</td>' +

                        '<td align="center">' +

                            '<input type="text" class="form-control harga" name="grand_total" style="text-align: right;" disabled="disabled" />' +

                        '</td>' + 

                    '</tr>';



                $( record ).insertBefore( "#detail_produk" );

                setAutocomplete();

                setQtyChangeListeners();                

            });

            

            $( document ).on( 'click', '.hapus_detail', function() {

               

                var element = $(this).closest('tr');

                element.remove();

                

                getTotal();

                loadTarif($('#header_kurir').val(), $('#header_kecamatan').val(), $('#header_layanan').val());                

            });

            

            var isEdit = true;

            $("input.harga").formatInput();

                

            function setErrorMessage(message) {

                $('#alert_error .alert').text(message);

                $('#alert_error').show('slow');

                setTimeout(function() {

                    $('#alert_error').hide('slow');

                }, 5000);

                $("body, html").animate({ 

                    scrollTop: $('#wrapper').offset().top 

                }, 600);

            }



            $('#btn_update_cart').click(function() {

                $('#btn_update_cart').hide();

                is_cart_valid = true;

            });   



            $('#btn_simpan').click(function() {

                

                //data header

                var id             = isEdit?'82':'';

                var tanggal        = $('[name=tanggal]').val();

                var nama_member    = $('[name=nama_member]').val();

                var id_member      = $('[name=id_member]').val();

                var kepada         = $('[name=kepada]').val();

                var alamat         = $('[name=alamat]').val();

                var no_hp          = $('[name=no_hp]').val();

                var id_propinsi    = $('[name=propinsi]').val();

                var nama_propinsi  = $("#header_prop option[value='"+id_propinsi+"']").text();

                var id_kota        = $('[name=kota]').val();

                var nama_kota      = $("#header_kota option[value='"+id_kota+"']").text();

                var id_kecamatan   = $('[name=kecamatan]').val();

                var nama_kecamatan = $("#header_kecamatan option[value='"+id_kecamatan+"']").text();

                var kode_pos       = $('[name=kode_pos]').val();

                var kurir          = $('[name=kurir]').val();

                var layanan        = $('[name=layanan]').val();

                var etd            = $('[name=etd]').val();

                var tarif          = $('[name=ongkir]').val();

                var is_dropship    = $('[name=is_dropship]').val();

                var dropship_name  = $('[name=dropship_name]').val();

                var dropship_phone   = $('[name=dropship_phone]').val();

                var email_notifikasi = $('[name=email_notifikasi]').val();

                var pembayaran       = $('[name=cara_bayar]').val();

                var status           = ($('[name=status]').val()=='0')?'2':($('[name=status]').val());

                var bank_tujuan      = $('[name=bank_tujuan]').val();

                var jumlah_transfer  = $('[name=jumlah_transfer]').val();

                var voucher        = $('[name=voucher]').val();

                var total          = $('[name=total]').val();

                

                //data detail

                var detail = ''; var row = 0;

                grandtotal = 0;

                $("#tblDetail_produk tr").each(function() {

                    if(row>0) {

                        var id_produk      = $(this).find('[name=id_produk]').val();

                        var kode           = $(this).find('[name=kode]').val();

                        var nama           = $(this).find('[name=nama]').val();

                        var berat          = $(this).find('[name=berat]').val();

                        var ukuran_warna   = $(this).find('[name=ukuran_warna]').val();                        

                        var jumlah         = $(this).find('[name=jumlah]').val();

                        var harga_beli     = $(this).find('[name=harga_beli]').val();

                        var harga_jual     = $(this).find('[name=harga_jual]').val();

                        var diskon         = $(this).find('[name=diskon]').val();

                        var sub_total      = $(this).find('[name=sub_total]').val();

                        var grand_total    = $(this).find('[name=grand_total]').val();



                        if(id_produk!=undefined) {

                            grandtotal+=eval(grand_total.replace(/\,/g, ""));                                                    

                            detail+=(detail==''?'':'\n')+id_produk+'\t'+kode+'\t'+nama+'\t'+berat+'\t'+ukuran_warna+'\t'+jumlah.replace(/\,/g, "")+'\t'+harga_jual.replace(/\,/g, "")+'\t'+(diskon.replace(/\,/g, "")).replace(/\%/g, "")+'\t'+sub_total.replace(/\,/g, "")+'\t'+grand_total.replace(/\,/g, "")+'\t'+harga_beli.replace(/\,/g, "");

                        }

                    } 

                    row++;

                });                

                //console.log(detail);

                

                var data = new FormData();

                data.append('id', id);

                data.append('tanggal', tanggal);

                data.append('nama_member', nama_member);

                data.append('id_member', id_member);

                

                data.append('nama', kepada);

                data.append('alamat', alamat);

                data.append('no_hp', no_hp);

                data.append('id_propinsi', id_propinsi);

                data.append('nama_propinsi', nama_propinsi);

                data.append('id_kota', id_kota);

                data.append('nama_kota', nama_kota);

                data.append('id_kecamatan', id_kecamatan);

                data.append('nama_kecamatan', nama_kecamatan);                                

                data.append('kode_pos', kode_pos);

                

                data.append('is_dropship', is_dropship);

                data.append('dropship_name', dropship_name);                                

                data.append('dropship_phone', dropship_phone);

                data.append('email_notifikasi', email_notifikasi);

                

                data.append('kurir', kurir);

                data.append('layanan', layanan);

                data.append('etd', etd);

                data.append('ongkir', tarif.replace(/\,/g, ""));

                

                data.append('grandtotal', grandtotal);

                data.append('voucher', voucher.replace(/\,/g, ""));

                data.append('total', total.replace(/\,/g, ""));

                data.append('detail', detail);

                

                data.append('pembayaran', pembayaran);

                data.append('status', status);

                data.append('bank_tujuan', bank_tujuan);

                data.append('jumlah_transfer', jumlah_transfer.replace(/\,/g, ""));

                



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

                        if(data['success']) {

							swal('Saved!', 'Berhasil Menambahkan/Update Record Data Pemesanan!', 'success')
                            
                                window.location = 'list.php';                    

                            
                        } else {

                            setLoading(false);
							swal('Error!', 'Gagal Menambahkan/Update Record Data Pemesanan!', 'error')

                            setErrorMessage(data['message']);                        

                        }

                    }, 

                    error: function() {

                        setLoading(false);
						swal('Error!', 'Kesalahan server. Mohon diulang kembali!', 'error')

                        setErrorMessage('Kesalahan server. Mohon diulang kembali!');

                    }

                }); 

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

            

            $('#header_prop').on('change', function (e) {

                loadKota(this.value, 0);

                loadKecamatan(0, 0);

                loadLayanan($('#header_kurir').val(), 0, 0);

            });



            $('#header_kota').on('change', function (e) {

                loadKecamatan(this.value, 0);

                loadLayanan($('#header_kurir').val(), 0, 0);

            });



            $('#header_kecamatan').on('change', function (e) {

                loadLayanan($('#header_kurir').val(), this.value, 0);

            });



            $('#header_kurir').on('change', function (e) {

                loadLayanan(this.value, $('#header_kecamatan').val(), 0);

            });



            $('#header_layanan').on('change', function (e) {

                

                for(var key in array_tarif) {

                    if(array_tarif[key]['service']==this.value) {

                        $('#header_tarif').val(currency(array_tarif[key]['cost'][0]['value']));

                        $('[name=etd]').val(array_tarif[key]['cost'][0]['etd']);

                        console.log($('[name=etd]').val());

                        break;

                    }

                }

                getTotal();

            });



            function loadKota(propinsi, kota) {

                $("#header_kota").empty();

                $('<option value="0">-- Pilih Kota --</option>').appendTo('#header_kota');



                var date = new Date();

                var token = date.getTime();

                    

                $.ajax({

                    type: 'POST',

                    url: 'http://localhost/laundry/store/getKota.php',

                    data: { 'propinsi': propinsi, 'token': token },

                    dataType: 'json',

                    success: function(data) {

                        var success = data['success'];

                        if(success) {

                            var store = data['topics'];

                            var data = '<option value="0">-- Pilih Kota --</option>';

                            for(var key in store) {

                                data+='<option value="'+store[key]['city_id']+'"'+(store[key]['city_id']==kota?' selected="selected"':'')+'>'+store[key]['city_name']+'</option>';

                            }

                            $("#header_kota").empty();

                            $(data).appendTo('#header_kota');

                        } else {

                            loadKota(propinsi, kota);

                        }

                    }, 

                    error: function() {

                        loadKota(propinsi, kota);

                    }

                });    

            }



            function loadKecamatan(kota, kecamatan) {

                $("#header_kecamatan").empty();

                $('<option value="0">-- Pilih Kecamatan --</option>').appendTo('#header_kecamatan');



                if(kota>0) {

                    var date = new Date();

                    var token = date.getTime();

                    

                    $.ajax({

                        type: 'POST',

                        url: 'http://localhost/laundry/store/getKecamatan.php',

                        data: { 'kota': kota, 'token': token },

                        dataType: 'json',

                        success: function(data) {

                            var success = data['success'];

                            if(success) {

                                var store = data['topics'];

                                var data = '<option value="0">-- Pilih Kecamatan --</option>';

                                for(var key in store) {

                                    data+='<option value="'+store[key]['subdistrict_id']+'"'+(store[key]['subdistrict_id']==kecamatan?' selected="selected"':'')+'>'+store[key]['subdistrict_name']+'</option>';

                                }

                                $("#header_kecamatan").empty();

                                $(data).appendTo('#header_kecamatan');

                            } else {

                                loadKecamatan(kota, kecamatan);

                            }

                        }, 

                        error: function() {

                            loadKecamatan(kota, kecamatan);

                        }

                    });

                }    

            }



            function loadLayanan(kurir, kecamatan, layanan) {

                $('#header_tarif').val(0);            

                $("#header_layanan").empty();

                $('<option value="0">-- Pilih Layanan --</option>').appendTo('#header_layanan');

                array_tarif = [];

                if(kecamatan>0 && kurir!='') {

                    var date = new Date();

                    var token = date.getTime();

                    var berat = getTotalBerat();

                    

                    $.ajax({

                        type: 'POST',

                        url: 'http://localhost/laundry/store/getLayanan.php',

                        data: { 'kurir': kurir, 'kecamatan': kecamatan, 'berat': berat, 'token': token },

                        dataType: 'json',

                        success: function(data) {

                            var success = data['success'];

                            if(success) {

                                array_tarif = data['topics'];

                                var data = '<option value="0">-- Pilih Layanan --</option>';



                                for(var key in array_tarif) {

                                    data+='<option value="'+array_tarif[key]['service']+'"'+(array_tarif[key]['service']==layanan?' selected="selected"':'')+'>'+array_tarif[key]['description']+' '+(array_tarif[key]['service']!=array_tarif[key]['description']?('('+array_tarif[key]['service']+')'):'')+'</option>'; //' - '+array_tarif[key]['cost'][0]['tarif']+'</option>';

                                    if(array_tarif[key]['service']==layanan) {

                                        $('#header_tarif').val(currency(array_tarif[key]['cost'][0]['value']));

                                        getTotal();

                                    }

                                }



                                $("#header_layanan").empty();

                                $(data).appendTo('#header_layanan');

                            } else {

                                loadLayanan(kurir, kecamatan, layanan);

                            }

                        }, 

                        error: function() {

                            loadLayanan(kurir, kecamatan, layanan);

                        }

                    });

                }    

            }

            

            function loadTarif(kurir, kecamatan, layanan) {

                if(kecamatan>0 && kurir!='') {

                    var date = new Date();

                    var token = date.getTime();

                    var berat = getTotalBerat();

                    

                    $.ajax({

                        type: 'POST',

                        url: 'http://localhost/laundry/store/getTarif.php',

                        data: { 'kurir': kurir, 'kecamatan': kecamatan, 'berat': berat, 'token': token },

                        dataType: 'json',

                        success: function(data) {

                            if(data['token']==token) {

                                var success = data['success'];

                                if(success) {

                                    array_tarif = data['topics'];

                                    for(var key in array_tarif) {

                                        if(array_tarif[key]['service']==layanan) {

                                            $('#header_tarif').val(currency(array_tarif[key]['cost'][0]['value']));

                                            getTotal();

                                        }

                                    }

                                } else {

                                    loadTarif(kurir, kecamatan, layanan);

                                } 

                            }

                        }, 

                        error: function() {

                            loadTarif(kurir, kecamatan, layanan);

                        }

                    });

                }

            }

            

            function getTotalBerat() {

                var total_berat = 0;

                $("#tblDetail_produk tr").each(function() {

                    var berat = $(this).find('[name=berat]').val();

                    var jumlah = $(this).find('[name=jumlah]').val();

                    if(berat!=undefined && jumlah!=undefined) {                        

                        total_berat+=(eval(jumlah.replace(/\,/g, ""))*eval(berat));

                    }

                });

                

                //console.log('Total Berat: '+total_berat);

                return total_berat;

            }

            

            function getTotal() {

                var grand_tot = 0;

                $("#tblDetail_produk tr").each(function() {

                    var grand_total = $(this).find('[name=grand_total]').val();

                    if(grand_total!=undefined) {                        

                        grand_tot+=eval(grand_total.replace(/\,/g, ""));

                    }

                });

                

                var voucher = eval($('#header_voucher').val().replace(/\,/g, ""));

                var ongkir  = eval($('#header_tarif').val().replace(/\,/g, ""));

                

                ongkir = (ongkir==undefined?0:ongkir);

                var total   = grand_tot+ongkir-voucher;

                $('#header_total').val(currency(total));                

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
