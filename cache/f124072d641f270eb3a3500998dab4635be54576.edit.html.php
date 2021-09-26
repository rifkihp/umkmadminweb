<?php /*%%SmartyHeaderCode:6665471725e85965c545f52-89750679%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f124072d641f270eb3a3500998dab4635be54576' => 
    array (
      0 => '..\\..\\templates\\back-end\\penguin\\pengaturan_toko\\edit.html',
      1 => 1538456117,
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
  'nocache_hash' => '6665471725e85965c545f52-89750679',
  'variables' => 
  array (
    'title' => 0,
    'adminweburl' => 0,
    'sub_title' => 0,
    'data' => 0,
    'listpropinsi' => 0,
    'entry' => 0,
    'tpl_dir' => 0,
    'array_akses' => 0,
    'homeurl' => 0,
    'listno_hp' => 0,
    'no' => 0,
    'listwa' => 0,
    'listsms' => 0,
    'listbbm' => 0,
    'listline' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e85965c743a08_27627553',
  'cache_lifetime' => 0,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e85965c743a08_27627553')) {function content_5e85965c743a08_27627553($_smarty_tpl) {?><!doctype html>
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
                                <span id="total_notif_belum_lunas" class="bubble">39</span>
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
                                            <li class="active acc-parent-li">
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
                <i class="icon-table position-left"></i> Pengaturan
            </div>
            <ul class="breadcrumb">
                <li><a href="http://localhost/laundry/adminweb">Beranda</a></li>
                <li><a href="http://localhost/laundry/adminweb/pengaturan_toko/">Pengaturan</a></li>
                <li class="active">Pengaturan Toko</li>
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
                            <a href="#profiltoko" data-toggle="tab"><b>PROFIL TOKO</b></a>
                        </li>                                 
                        <li>
                            <a href="#hubungikami" data-toggle="tab"><b>HUBUNGI KAMI</b></a>
                        </li>                                
                        <li>
                            <a href="#sosialmedia" data-toggle="tab"><b>SOSIAL MEDIA</b></a>
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
                    <div class="tab-pane fade active in" id="profiltoko">

                        <div class="form-group">
                            <label for="judul">Judul Webite:</label>
                            <input type="text" value="Online Shop" class="form-control" name="judul" placeholder="" />
                        </div>

                        <div class="form-group">
                            <label for="tagline">Tag Line:</label>
                            <input type="text" value="Web and Mobile Online Store Application" class="form-control" name="tagline" placeholder="" />
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat Toko:</label>
                            <textarea class="form-control" style="height: 50px;" name="alamat">Jl. Puncak Sekuning No 520, 26 Ilir D. I, Ilir Bar. I, Kota Palembang, Sumatera Selatan 30128</textarea>
                        </div>

                        <div class="form-group">
                            <label for="propinsi">Propinsi:</label>
                            <select id="propinsi" name="propinsi" class="form-control">
                                                                    <option value="1">Bali</option>
                                                                    <option value="2">Bangka Belitung</option>
                                                                    <option value="3">Banten</option>
                                                                    <option value="4">Bengkulu</option>
                                                                    <option value="5">DI Yogyakarta</option>
                                                                    <option value="6">DKI Jakarta</option>
                                                                    <option value="7">Gorontalo</option>
                                                                    <option value="8">Jambi</option>
                                                                    <option value="9">Jawa Barat</option>
                                                                    <option value="10">Jawa Tengah</option>
                                                                    <option value="11">Jawa Timur</option>
                                                                    <option value="12">Kalimantan Barat</option>
                                                                    <option value="13">Kalimantan Selatan</option>
                                                                    <option value="14">Kalimantan Tengah</option>
                                                                    <option value="15">Kalimantan Timur</option>
                                                                    <option value="16">Kalimantan Utara</option>
                                                                    <option value="17">Kepulauan Riau</option>
                                                                    <option value="18">Lampung</option>
                                                                    <option value="19">Maluku</option>
                                                                    <option value="20">Maluku Utara</option>
                                                                    <option value="21">Nanggroe Aceh Darussalam (NAD)</option>
                                                                    <option value="22">Nusa Tenggara Barat (NTB)</option>
                                                                    <option value="23">Nusa Tenggara Timur (NTT)</option>
                                                                    <option value="24">Papua</option>
                                                                    <option value="25">Papua Barat</option>
                                                                    <option value="26">Riau</option>
                                                                    <option value="27">Sulawesi Barat</option>
                                                                    <option value="28">Sulawesi Selatan</option>
                                                                    <option value="29">Sulawesi Tengah</option>
                                                                    <option value="30">Sulawesi Tenggara</option>
                                                                    <option value="31">Sulawesi Utara</option>
                                                                    <option value="32">Sumatera Barat</option>
                                                                    <option value="33" selected="selected">Sumatera Selatan</option>
                                                                    <option value="34">Sumatera Utara</option>
                                                            </select>
                        </div>

                        <div class="form-group">
                            <label for="kota">Kota:</label>
                            <select id="kota" name="kota" class="form-control"></select>
                        </div>

                        <div class="form-group">
                            <label for="kode_pos">Kode Pos:</label>
                            <input type="text" value="30128" class="form-control" name="kode_pos" />
                        </div>

                        <div class="form-group">
                            <label for="latitude">Latitude:</label>
                            <input type="text" value="-2.984773" class="form-control" name="latitude" />
                        </div>

                        <div class="form-group">
                            <label for="longitude">Longitude:</label>
                            <input type="text" value="104.737325" class="form-control" name="longitude" />
                        </div>

                        <div class="form-group">
                            <label for="logo">Logo:</label>                        
                            <style type="text/css">
                                .preview-logo {
                                    border:1px solid #a6bac4;
                                    width: 180px;
                                    height: 180px;
                                    cursor: move;
                                }
                                .post-img-logo {
                                    width: 180px;
                                    height: 180px;
                                }
                            </style>
                            <div class="image-editor-logo post-img-logo">
                                <input id="fileupload_logo" type="file" name="fileupload_logo" style="display:none;" class="cropit-image-input" />
                                <div class="cropit-image-preview preview-logo"></div>
                            </div>
                            <label>Ukuran 180 X 180 px</label><br />   
                            <div id="upload_logo" class="btn btn-primary">Upload</div>
                        </div>

                        <div class="form-group">&nbsp;</div>

                        <div class="form-group">
                            <div id="i_loading_profiltoko" class="G-btn-animation" style="display: none;"><img src="http://localhost/laundry/templates/back-end/penguin/assets/img/loading.gif" /></div>                  
                            <div id="btn_simpan_profiltoko" class="btn btn-primary">Update</div>                        </div>
                    </div>

                    <div class="tab-pane fade" id="hubungikami">

                        <div class="form-group">&nbsp;</div>

                        <div class="form-group">
                            <label for="jam_kerja">Jam Kerja:</label>
                            <input type="text" value="08:00 s/d 17:00" class="form-control" name="jam_kerja" placeholder="" />
                        </div>
                        
                        <div class="form-group">                        
                            <label for="no_hp">No. HP:</label>
                            <div id="detail_no_hp" class="table-responsive">
                                <table id="tblNo_hp" width="100%">
                                    <tbody id="no_hp"></tbody>
                                </table>
                            </div>
                        </div>

                        <div class="form-group">                        
                            <label for="wa">WA:</label>
                            <div id="detail_wa" class="table-responsive">
                                <table id="tblWa" width="100%">
                                    <tbody id="wa"></tbody>
                                </table>
                            </div>
                        </div>

                        <div class="form-group">                        
                            <label for="sms">SMS:</label>
                            <div id="detail_sms" class="table-responsive">
                                <table id="tblSms" width="100%">
                                    <tbody id="sms"></tbody>
                                </table>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" value="gomocart@gmail.com" class="form-control" name="email" placeholder="" />
                        </div>

                        <div class="form-group">                        
                            <label for="line">Line:</label>
                            <div id="detail_line" class="table-responsive">
                                <table id="tblLine" width="100%">
                                    <tbody id="line"></tbody>
                                </table>
                            </div>
                        </div>

                        <div class="form-group">                        
                            <label for="bbm">BBM:</label>
                            <div id="detail_bbm" class="table-responsive">
                                <table id="tblBbm" width="100%">
                                    <tbody id="bbm"></tbody>
                                </table>
                            </div>
                        </div>
                        
                        <div class="form-group">&nbsp;</div>

                        <div class="form-group">
                            <div id="i_loading_hubungikami" class="G-btn-animation" style="display: none;"><img src="http://localhost/laundry/templates/back-end/penguin/assets/img/loading.gif" /></div>                  
                            <div id="btn_simpan_hubungikami" class="btn btn-primary">Update</div>                        </div>
                    </div>

                    <div class="tab-pane fade" id="sosialmedia">

                        <div class="form-group">&nbsp;</div>

                        <div class="form-group">
                            <label for="facebook">Facebook:</label>
                            <input type="text" value="kiezie08" class="form-control" name="facebook" placeholder="" />
                        </div>
                        
                        <div class="form-group">
                            <label for="instagram">Instagram:</label>
                            <input type="text" value="@kiezie08" class="form-control" name="instagram" placeholder="" />
                        </div>
                        
                        <div class="form-group">
                            <label for="twitter">Twitter:</label>
                            <input type="text" value="@kiezie" class="form-control" name="twitter" placeholder="" />
                        </div>
                        
                        <div class="form-group">&nbsp;</div>

                        <div class="form-group">
                            <div id="i_loading_sosialmedia" class="G-btn-animation" style="display: none;"><img src="http://localhost/laundry/templates/back-end/penguin/assets/img/loading.gif" /></div>                  
                            <div id="btn_simpan_sosialmedia" class="btn btn-primary">Update</div>                        </div>
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
<!-- /global scripts -->	

<script type="text/javascript" src="http://localhost/laundry/templates/back-end/penguin/assets/js/jquery.cropit.js"></script>  
<script src="http://localhost/laundry/templates/back-end/penguin/assets/bootstrap-fileinput/js/fileinput.js"></script>

<script type="text/javascript">        
        $(function () {           

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
            
            $('#upload_logo').click(function(){
                $('#fileupload_logo').trigger('click'); 
                return false;
            });
            
            $('.image-editor-logo').cropit({
              smallImage: 'stretch',
              imageState: {
                src: 'http://localhost/laundry/uploads/umum/default_logo.png',
              }            });

                                        var record = 
                    '<tr>' +
                        '<td style="padding: 5px;" width="100%"><input type="text" value="081373011823" name="no_hp" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div id="btn_tambah_no_hp" class="btn btn-primary">Tambah</div></div></td>' +
                    '</tr>';
                $( record ).insertBefore( "#no_hp" );
                                        
            $( document ).on( 'click', '.hapus_no_hp', function() {
                var element = $(this).closest('tr');
                element.remove();
            });
            
            $('#btn_tambah_no_hp').click(function() {
                var record = 
                    '<tr>' +
                        '<td style="padding: 5px;" width="100%"><input type="text" value="" name="no_hp" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div class="btn btn-danger hapus_no_hp">Hapus</div></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"></div></td>' +
                    '</tr>';
                $( record ).insertBefore( "#no_hp" );
            });

                                        var record = 
                    '<tr>' +
                        '<td style="padding: 5px;" width="100%"><input type="text" value="081373011823" name="wa" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div id="btn_tambah_wa" class="btn btn-primary">Tambah</div></div></td>' +
                    '</tr>';
                $( record ).insertBefore( "#wa" );
                            
            $( document ).on( 'click', '.hapus_wa', function() {
                var element = $(this).closest('tr');
                element.remove();
            });

            $('#btn_tambah_wa').click(function() {
                var record = 
                    '<tr>' +
                        '<td style="padding: 5px;" width="100%"><input type="text" value="" name="wa" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div class="btn btn-danger hapus_wa">Hapus</div></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"></div></td>' +
                    '</tr>';
                $( record ).insertBefore( "#wa" );
            });

                                        var record = 
                    '<tr>' +
                        '<td style="padding: 5px;" width="100%"><input type="text" value="08137301182" name="sms" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div id="btn_tambah_sms" class="btn btn-primary">Tambah</div></div></td>' +
                    '</tr>';
                $( record ).insertBefore( "#sms" );
                            
            $( document ).on( 'click', '.hapus_sms', function() {
                var element = $(this).closest('tr');
                element.remove();
            });

            $('#btn_tambah_sms').click(function() {
                var record = 
                    '<tr>' +
                        '<td style="padding: 5px;" width="100%"><input type="text" value="" name="sms" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div class="btn btn-danger hapus_sms">Hapus</div></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"></div></td>' +
                    '</tr>';
                $( record ).insertBefore( "#sms" );
            });
            
                                        var record = 
                    '<tr>' +
                        '<td style="padding: 5px;" width="100%"><input type="text" value="CS 1 : 57B87ET5" name="bbm" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div id="btn_tambah_bbm" class="btn btn-primary">Tambah</div></div></td>' +
                    '</tr>';
                $( record ).insertBefore( "#bbm" );
                            
            $( document ).on( 'click', '.hapus_bbm', function() {
                var element = $(this).closest('tr');
                element.remove();
            });

            $('#btn_tambah_bbm').click(function() {
                var record = 
                    '<tr>' +
                        '<td style="padding: 5px;" width="100%"><input type="text" value="" name="bbm" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div class="btn btn-danger hapus_bbm">Hapus</div></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"></div></td>' +
                    '</tr>';
                $( record ).insertBefore( "#bbm" );
            });

                                        var record = 
                    '<tr>' +
                        '<td style="padding: 5px;" width="100%"><input type="text" value="@gomocart" name="line" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div id="btn_tambah_line" class="btn btn-primary">Tambah</div></div></td>' +
                    '</tr>';
                $( record ).insertBefore( "#line" );
                            
            $( document ).on( 'click', '.hapus_line', function() {
                var element = $(this).closest('tr');
                element.remove();
            });

            $('#btn_tambah_line').click(function() {
                var record = 
                    '<tr>' +
                        '<td style="padding: 5px;" width="100%"><input type="text" value="" name="line" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div class="btn btn-danger hapus_line">Hapus</div></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"></div></td>' +
                    '</tr>';
                $( record ).insertBefore( "#line" );
            });

            $('#propinsi').on('change', function (e) {
                loadKota(this.value, 0);
            });

            var loadKota = function(propinsi, kota) {
                $("#kota").empty();
                //$('<option value="0">-- Pilih Kota --</option>').appendTo('#kota');
                $.ajax({
                    type: 'POST',
                    url: 'http://localhost/laundry/store/getKota.php',
                    data: { 'propinsi': propinsi },
                    dataType: 'json',
                    success: function(data) {
                        var store = data['topics'];
                        var data = ''; //'<option value="0">-- Pilih Kota --</option>';
                        for(var key in store) {
                            data+='<option value="'+store[key]['city_id']+'"'+(store[key]['city_id']==kota?' selected="selected"':'')+'>'+store[key]['city_name']+'</option>';
                        }
                        $("#kota").empty();
                        $(data).appendTo('#kota');
                    }
                });    
            };

            loadKota('33', '327');            
            $('#btn_simpan_profiltoko').click(function() {
                var data = new FormData();
                data.append('judul', $('[name=judul]').val());
                data.append('tagline', $('[name=tagline]').val());
                data.append('address', $('[name=alamat]').val());
                data.append('propinsi', $('[name=propinsi]').val());
                data.append('nama_propinsi', $("#propinsi option[value='"+$('[name=propinsi]').val()+"']").text());
                data.append('kota', $('[name=kota]').val());
                data.append('nama_kota', $("#kota option[value='"+$('[name=kota]').val()+"']").text());
                data.append('kode_pos', $('[name=kode_pos]').val());                
                data.append('latitude', $('[name=latitude]').val());                
                data.append('longitude', $('[name=longitude]').val());
                var imageDataLogo = $('.image-editor-logo').cropit('export');
                data.append('filename_logo', imageDataLogo==undefined?'':imageDataLogo);
                
                setLoading(true, 'profiltoko');
                $.ajax({
                    type: 'POST',
                    url: 'updateProfiltoko.php',
                    data: data,
                    cache: false,
                    dataType: 'json',
                    processData: false, // Don't process the files
                    contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                    success: function(data) {
                        setLoading(false, 'profiltoko');
                        if(data['success']) {
                            setMessage('success', data['message']);  
                        } else {
                            setMessage('error', data['message']);                        
                        }
                    }, 
                    error: function() {
                        setLoading(false, 'profiltoko');
                        setMessage('error', 'Kesalahan server. Mohon diulang kembali!');
                    }
                }); 
            });

            $('#btn_simpan_hubungikami').click(function() {            
                var no_hp = '';
                $("#tblNo_hp tr").each(function() {
                    var data = $(this).find('[name=no_hp]').val();
                    no_hp+=(no_hp==''?'':'\t')+data;
                });

                var wa = '';
                $("#tblWa tr").each(function() {
                    var data = $(this).find('[name=wa]').val();
                    wa+=(wa==''?'':'\t')+data;
                });
                
                var sms = '';
                $("#tblSms tr").each(function() {
                    var data = $(this).find('[name=sms]').val();
                    sms+=(sms==''?'':'\t')+data;
                });
                
                var line = '';
                $("#tblLine tr").each(function() {
                    var data = $(this).find('[name=line]').val();
                    line+=(line==''?'':'\t')+data;
                });

                var bbm = '';
                $("#tblBbm tr").each(function() {
                    var data = $(this).find('[name=bbm]').val();
                    bbm+=(bbm==''?'':'\t')+data;
                });
                
                var data = new FormData();
                data.append('jam_kerja', $('[name=jam_kerja]').val());                
                data.append('no_hp', no_hp);
                data.append('wa', wa);
                data.append('sms', sms);                
                data.append('email', $('[name=email]').val());                
                data.append('bbm', bbm);                
                data.append('line', line);
                
                setLoading(true, 'hubungikami');
                $.ajax({
                    type: 'POST',
                    url: 'updateHubungikami.php',
                    data: data,
                    cache: false,
                    dataType: 'json',
                    processData: false, // Don't process the files
                    contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                    success: function(data) {
                        setLoading(false, 'hubungikami');
                        if(data['success']) {
                            setMessage('success', data['message']);  
                        } else {
                            setMessage('error', data['message']);                        
                        }
                    }, 
                    error: function() {
                        setLoading(false, 'hubungikami');
                        setMessage('error', 'Kesalahan server. Mohon diulang kembali!');
                    }
                }); 
            });

            $('#btn_simpan_sosialmedia').click(function() {
                var data = new FormData();
                data.append('facebook', $('[name=facebook]').val());
                data.append('instagram', $('[name=instagram]').val());
                data.append('twitter', $('[name=twitter]').val());
                
                setLoading(true, 'sosialmedia');
                $.ajax({
                    type: 'POST',
                    url: 'updateSosialmedia.php',
                    data: data,
                    cache: false,
                    dataType: 'json',
                    processData: false, // Don't process the files
                    contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                    success: function(data) {
                        setLoading(false, 'sosialmedia');
                        if(data['success']) {
                            setMessage('success', data['message']);  
                        } else {
                            setMessage('error', data['message']);                        
                        }
                    }, 
                    error: function() {
                        setLoading(false, 'sosialmedia');
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
