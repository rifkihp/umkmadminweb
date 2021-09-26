<?php /*%%SmartyHeaderCode:18151064205e9d4000a62527-91441089%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b8bdd1e956024cddf4dab8130581f7b1e0daec8' => 
    array (
      0 => '..\\..\\templates\\back-end\\penguin\\pengaturan_umum\\list.html',
      1 => 1538456116,
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
  'nocache_hash' => '18151064205e9d4000a62527-91441089',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e9d426015f5c0_10102926',
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e9d426015f5c0_10102926')) {function content_5e9d426015f5c0_10102926($_smarty_tpl) {?><!doctype html>
<html lang="en">
    <head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>LAUNDRY</title>	
	<link href="http://192.168.43.183/laundry/templates/back-end/penguin/assets/images/favicon.ico" rel="icon" type="image/png">
	
	<!-- Global stylesheets -->	
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
	<link type="text/css" rel="stylesheet" href="http://192.168.43.183/laundry/templates/back-end/penguin/assets/fonts/fonts.css">
        <link type="text/css" rel="stylesheet" href="http://192.168.43.183/laundry/templates/back-end/penguin/assets/icons/icomoon/icomoon.css">
        <link type="text/css" rel="stylesheet" href="http://192.168.43.183/laundry/templates/back-end/penguin/css/animate.min.css">
	<link type="text/css" rel="stylesheet" href="http://192.168.43.183/laundry/templates/back-end/penguin/css/bootstrap.css">   
	<link type="text/css" rel="stylesheet" href="http://192.168.43.183/laundry/templates/back-end/penguin/css/core.css">	
	<link type="text/css" rel="stylesheet" href="http://192.168.43.183/laundry/templates/back-end/penguin/css/layout.css">	
	<link type="text/css" rel="stylesheet" href="http://192.168.43.183/laundry/templates/back-end/penguin/css/bootstrap-extended.css">	    
	<link type="text/css" rel="stylesheet" href="http://192.168.43.183/laundry/templates/back-end/penguin/css/components.css">
	<link type="text/css" rel="stylesheet" href="http://192.168.43.183/laundry/templates/back-end/penguin/css/plugins.css">
	<link type="text/css" rel="stylesheet" href="http://192.168.43.183/laundry/templates/back-end/penguin/css/loaders.css">
	<link type="text/css" rel="stylesheet" href="http://192.168.43.183/laundry/templates/back-end/penguin/css/responsive.css">
	<link type="text/css" rel="stylesheet" href="http://192.168.43.183/laundry/templates/back-end/penguin/css/color-system.css">		
	<link type="text/css" rel="stylesheet" href="http://192.168.43.183/laundry/templates/back-end/penguin/css/fancybox/jquery.fancybox.css">
	<link type="text/css" rel="stylesheet" href="http://192.168.43.183/laundry/templates/back-end/penguin/assets/sweetalert2/sweetalert2.min.css">
	<link type="text/css" rel="stylesheet" href="http://192.168.43.183/laundry/templates/back-end/penguin/assets/bootstrap-fileinput/css/fileinput.min.css">
	<link type="text/css" rel="stylesheet" href="http://192.168.43.183/laundry/templates/back-end/penguin/css/burnt_sienna_light.css">	
        <link type="text/css" rel="stylesheet" href="http://192.168.43.183/laundry/templates/back-end/penguin/css/AdminLTE.css" />
	<link type="text/css" rel="stylesheet" href="0" id="theme">
	<script src="http://192.168.43.183/laundry/templates/back-end/penguin/assets/sweetalert2/sweetalert2.min.js"></script>
	<script>
		var base_tpl_url = "http://192.168.43.183/laundry/templates/back-end/penguin/css/themes/";
		var base_url = "http://192.168.43.183/laundry/";
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
                                <a href="http://192.168.43.183/laundry/adminweb/pesanandalamproses/pesananbelumlunas/" class="dropdown-toggle" style="width: 100%; padding-left: 10px; padding-right: 30px;"><i class="icon-cart"></i>
                                <span id="total_notif_belum_lunas" class="bubble">41</span>
                                <span style="color: #ffffff">Belum Bayar / KEEP </span></a>
                            </li>
                        
                        
                                                    <li class="dropdown-toggle hidden-xs" style="border-left: 1px solid #ffffff;">
                                <a href="http://192.168.43.183/laundry/adminweb/pesanandalamproses/pesananperludikirim/" class="dropdown-toggle" style="width: 100%; padding-left: 10px; padding-right: 30px;"><i class="icon-box"></i>
                                <span id="total_notif_perlu_kemas" class="bubble">20</span>
                                <span style="color: #ffffff">Perlu Kemas </span></a>
                            </li>
                        
                                                    <li class="dropdown-toggle hidden-xs" style="border-left: 1px solid #ffffff;">
                                <a href="http://192.168.43.183/laundry/adminweb/customer/" class="dropdown-toggle" style="width: 100%; padding-left: 10px; padding-right: 30px;"><i class="icon-users4"></i>
                                <span id="total_notif_pelanggan_baru" class="bubble">113</span>
                                <span style="color: #ffffff;">Pelanggan Baru</span></a>
                            </li>
                        
                        		

                        <li class="dropdown user-dropdown" style="border-left: 1px solid #ffffff;padding-left: 10px">
                            <a href="http://192.168.43.183/laundry/adminweb#" class="btn-user dropdown-toggle hidden-xs" data-toggle="dropdown"><img src="http://192.168.43.183/laundry/templates/back-end/penguin/assets/images/faces/face1.png" class="img-circle user" alt=""/></a>
                            <a href="http://192.168.43.183/laundry/adminweb#" class="dropdown-toggle visible-xs" data-toggle="dropdown"><i class="icon-more"></i></a>
                            <div class="dropdown-menu">	
                                <div class="text-center"><img src="http://192.168.43.183/laundry/templates/back-end/penguin/assets/images/faces/face1.png" class="img-circle img-70" alt=""/></div>
                                <h5 class="text-center"><b>Hi! Administrator</b></h5>
                                <ul class="more-apps">
                                        <!-- li><a href="http://192.168.43.183/laundry/templates/back-end/penguin/material/user_profile_social.html"><i class="icon-profile"></i> My profile</a></li -->
                                        <!-- li><a href="http://192.168.43.183/laundry/adminweb#"><i class="icon-envelop5"></i> Inbox <span class="badge badge-danger pull-right">4</span></a></li -->
                                        <li><a href="http://192.168.43.183/laundry/adminweb/editprofile/"><i class="icon-profile"></i> My Profile</a></li>
                                        <li><a href="http://192.168.43.183/laundry/adminweb/gantipassword/edit.php"><i class="icon-lock5"></i> Ganti Password</a></li>
                                </ul>
                                <div class="text-center"><a href="http://192.168.43.183/laundry/adminweb/logout.php" class="btn btn-sm btn-info"><i class="icon-exit3 i-16 position-left"></i> Logout</a></div>
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
                    <img src="http://192.168.43.183/laundry/templates/back-end/penguin/assets/images/faces/face1.png" alt="admin" class="img-circle" />
                </div>

                <div class="admin-user-info">
                    <ul class="user-info">
                        <li><a href="http://192.168.43.183/laundry/adminweb/logout.php" class="text-semibold text-size-large">Administrator</a></li>
                        <li><a href="http://192.168.43.183/laundry/adminweb/logout.php"><small>-- subtitle here --</small></a></li>
                    </ul>
                    <div class="logout-icon"><a href="http://192.168.43.183/laundry/adminweb/logout.php"><i class="icon-exit2"></i></a></div>
                </div>
            </div>				
        </div>

        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active fadeIn" id="menu">
                <ul class="sidebar-accordion">
                    <li><br />&nbsp;&nbsp;&nbsp;</li>
                                            <li>
                            <a  href="http://192.168.43.183/laundry/adminweb/dashboard/"><i class="icon-display4"></i> Dashboard </a>
                                                    </li>
                                            <li>
                            <a class="acc-parent active" href="#"><i class="icon-cart2"></i> Daftar Pesanan <span class="fa arrow"></span></a>
                                                            <ul>
                                                                    <li>
                                        <a href="http://192.168.43.183/laundry/adminweb/pesanandalamproses/pesananbelumlunas/"><i class="fa fa-bars"></i> Belum Lunas</a>
                                    </li>
                                                                    <li>
                                        <a href="http://192.168.43.183/laundry/adminweb/pesanandalamproses/pesananperludikirim/"><i class="fa fa-bars"></i> Perlu Dikirim</a>
                                    </li>
                                                                    <li>
                                        <a href="http://192.168.43.183/laundry/adminweb/pesanandalamproses/pesanantelahdikirim/"><i class="fa fa-bars"></i> Telah Dikirim</a>
                                    </li>
                                                                    <li>
                                        <a href="http://192.168.43.183/laundry/adminweb/pesanandalamproses/pesananselesai/"><i class="fa fa-bars"></i> Selesai</a>
                                    </li>
                                                                    <li>
                                        <a href="http://192.168.43.183/laundry/adminweb/pesanandalamproses/pesanandibatalkan/"><i class="fa fa-bars"></i> Dibatalkan</a>
                                    </li>
                                                                </ul>
                                                    </li>
                                            <li>
                            <a class="acc-parent active" href="#"><i class="icon-users"></i> Pelanggan & Mitra <span class="fa arrow"></span></a>
                                                            <ul>
                                                                    <li>
                                        <a href="http://192.168.43.183/laundry/adminweb/mitra/"><i class="fa fa-users4"></i> Mitra</a>
                                    </li>
                                                                    <li>
                                        <a href="http://192.168.43.183/laundry/adminweb/customer/"><i class="fa fa-users4"></i> Pelanggan</a>
                                    </li>
                                                                </ul>
                                                    </li>
                                            <li>
                            <a class="acc-parent active" href="#"><i class="icon-book"></i> Produk <span class="fa arrow"></span></a>
                                                            <ul>
                                                                    <li>
                                        <a href="http://192.168.43.183/laundry/adminweb/product/"><i class="fa fa-archive"></i> Produk</a>
                                    </li>
                                                                </ul>
                                                    </li>
                                            <li class="active acc-parent-li">
                            <a class="acc-parent active" href="#"><i class="icon-cog3"></i> Pengaturan <span class="fa arrow"></span></a>
                                                            <ul>
                                                                    <li>
                                        <a href="http://192.168.43.183/laundry/adminweb/pengaturan_aplikasi/"><i class="fa fa-edit"></i> Pengaturan Aplikasi</a>
                                    </li>
                                                                    <li>
                                        <a href="http://192.168.43.183/laundry/adminweb/pengaturan_website/"><i class="fa fa-edit"></i> Pengaturan Konten</a>
                                    </li>
                                                                    <li>
                                        <a href="http://192.168.43.183/laundry/adminweb/pengaturan_umum/"><i class="fa fa-edit"></i> Pengaturan Umum</a>
                                    </li>
                                                                    <li>
                                        <a href="http://192.168.43.183/laundry/adminweb/metode_pembayaran/"><i class="fa fa-edit"></i> Metode Pembayaran</a>
                                    </li>
                                                                    <li>
                                        <a href="http://192.168.43.183/laundry/adminweb/metode_pengiriman/"><i class="fa fa-edit"></i> Metode Pengiriman</a>
                                    </li>
                                                                </ul>
                                                    </li>
                                            <li>
                            <a class="acc-parent active" href="#"><i class="icon-stack-text"></i> Laporan <span class="fa arrow"></span></a>
                                                            <ul>
                                                                    <li>
                                        <a href="http://192.168.43.183/laundry/adminweb/laporan_pembayaran/"><i class="fa fa-money"></i> Pembayaran</a>
                                    </li>
                                                                    <li>
                                        <a href="http://192.168.43.183/laundry/adminweb/laporan_pesanan/"><i class="fa fa-foursquare"></i> Pesanan</a>
                                    </li>
                                                                </ul>
                                                    </li>
                                            <li>
                            <a  href="http://192.168.43.183/laundry/adminweb/informasi/"><i class="icon-info3"></i> Informasi </a>
                                                    </li>
                                            <li>
                            <a class="acc-parent active" href="#"><i class="icon-users"></i> Managemen User <span class="fa arrow"></span></a>
                                                            <ul>
                                                                    <li>
                                        <a href="http://192.168.43.183/laundry/adminweb/jenisuser/"><i class="fa fa-truck"></i> Grup User</a>
                                    </li>
                                                                    <li>
                                        <a href="http://192.168.43.183/laundry/adminweb/pengguna/"><i class="fa fa-truck"></i> User</a>
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
                <li><a href="http://192.168.43.183/laundry/adminweb">Beranda</a></li>
                <li><a href="http://192.168.43.183/laundry/adminweb/pengaturan_umum/">Pengaturan</a></li>
                <li class="active">Pengaturan Umum</li>
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
                            <a href="#pelanggan" data-toggle="tab"><b>PELANGGAN</b></a>
                        </li>                                 
                        <li>
                            <a href="#stok" data-toggle="tab"><b>STOK</b></a>
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
                    <div class="tab-pane fade active in" id="pelanggan">
                        
                        <div class="form-group">
                            <label for="aktivasi_sms">Konfirmasi Registrasi By SMS:</label>
                            <table>
                                <tr>
                                    <td>
                                        <label><input type="radio" name="aktivasi_sms" value="0" checked />&nbsp;&nbsp;<span class="label bg-blue" style="font-size: 9pt;">TIDAK AKTIF</span>&nbsp;&nbsp;</label>
                                        <label><input type="radio" name="aktivasi_sms" value="1"  />&nbsp;&nbsp;<span class="label bg-blue" style="font-size: 9pt;">AKTIF</span>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <div class="form-group">
                            <label for="admin">Konfirmasi Registrasi By ADMIN:</label>
                            <table>
                                <tr>
                                    <td>
                                        <label><input type="radio" name="aktivasi_admin" value="0" checked />&nbsp;&nbsp;<span class="label bg-blue" style="font-size: 9pt;">TIDAK AKTIF</span>&nbsp;&nbsp;</label>
                                        <label><input type="radio" name="aktivasi_admin" value="1"  />&nbsp;&nbsp;<span class="label bg-blue" style="font-size: 9pt;">AKTIF</span>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        
                        <div class="form-group">&nbsp;</div>

                        <div class="form-group">
                            <div id="i_loading_pelanggan" class="G-btn-animation" style="display: none;"><img src="http://192.168.43.183/laundry/templates/back-end/penguin/assets/img/loading.gif" /></div>                  
                            <div id="btn_simpan_pelanggan" class="btn btn-primary">Update</div>                        </div>
                        
                    </div>
                    
                    <div class="tab-pane fade" id="stok">
                    
                        <div class="form-group">
                            <label for="jatuh_tempo">Jatuh Tempo Pemesanan:</label>
                            <select name="jatuh_tempo" class="form-control">
                                <option value="1"  selected="selected" >1 Hari</option>
                                <option value="2" >2 Hari</option>
                                <option value="3" >3 Hari</option>
                                <option value="4" >4 Hari</option>
                                <option value="5" >5 Hari</option>
                                <option value="6" >6 Hari</option>
                                <option value="7" >7 Hari</option>                                    
                            </select>
                        </div>
                         
                        <div class="form-group">
                            <label for="stok_minimum">Peringatan Stok Minimum:</label>
                            <input type="text" value="5" class="form-control" name="stok_minimum" />
                        </div>

                        <div class="form-group">
                            <label class="control-label"><input type="checkbox" id="checkbox_tampilkan_stok" name="tampilkan_stok" value="1" checked> Tampilkan stok pada detail produk.</label>                    
                        </div>

                        <div class="form-group">
                            <label for="status_stok">Status Stok:</label>
                            <select id="propinsi" name="status_stok" class="form-control">
                                <option value="0"  selected="selected" >Real Stok</option>
                                <option value="1" >Status</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="parameter_status">Parameter Stok:</label>
                            <input type="text" value="0" class="form-control" name="parameter_status" />
                        </div>

                        <div class="form-group">
                            <label for="jam">Produk Keep (JAM):</label>
                            <input type="text" value="0" class="form-control" name="jam" />
                        </div>

                        <div class="form-group">
                            <label for="menit">Produk Keep (MENIT):</label>
                            <input type="text" value="5" class="form-control" name="menit" />
                        </div>

                        <div class="form-group">&nbsp;</div>

                        <div class="form-group">
                            <div id="i_loading_stok" class="G-btn-animation" style="display: none;"><img src="http://192.168.43.183/laundry/templates/back-end/penguin/assets/img/loading.gif" /></div>                  
                            <div id="btn_simpan_stok" class="btn btn-primary">Update</div>                        </div>
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
                    <a href="http://192.168.43.183/laundry" target="_blank">LAUNDRY</a>&nbsp;2020
                </div>
            </div>				
        </div>
    </div>
</footer>
    <!--/Footer-->

</section>
<!--/Page Container-->

<!-- Global scripts -->
<script src="http://192.168.43.183/laundry/templates/back-end/penguin/js/jquery.js"></script>	
<script src="http://192.168.43.183/laundry/templates/back-end/penguin/js/bootstrap.js"></script>
<script src="http://192.168.43.183/laundry/templates/back-end/penguin/js/jquery.ui.js"></script>
<script src="http://192.168.43.183/laundry/templates/back-end/penguin/js/nav.accordion.js"></script>	
<script src="http://192.168.43.183/laundry/templates/back-end/penguin/js/hammerjs.js"></script>
<script src="http://192.168.43.183/laundry/templates/back-end/penguin/js/jquery.hammer.js"></script>
<script src="http://192.168.43.183/laundry/templates/back-end/penguin/js/scrollup.js"></script>	
<script src="http://192.168.43.183/laundry/templates/back-end/penguin/js/jquery.slimscroll.js"></script>	
<script src="http://192.168.43.183/laundry/templates/back-end/penguin/js/smart-resize.js"></script>
<script src="http://192.168.43.183/laundry/templates/back-end/penguin/js/blockui.min.js"></script>		
<script src="http://192.168.43.183/laundry/templates/back-end/penguin/js/wow.min.js"></script>					
<script src="http://192.168.43.183/laundry/templates/back-end/penguin/js/fancybox.min.js"></script>
<script src="http://192.168.43.183/laundry/templates/back-end/penguin/js/venobox.js"></script>
<script src="http://192.168.43.183/laundry/templates/back-end/penguin/js/forms/uniform.min.js"></script>
<script src="http://192.168.43.183/laundry/templates/back-end/penguin/js/forms/switchery.js"></script>
<script src="http://192.168.43.183/laundry/templates/back-end/penguin/js/forms/select2.min.js"></script>	
<script src="http://192.168.43.183/laundry/templates/back-end/penguin/js/core.js"></script>
<!-- /global scripts -->	
    
<script type="text/javascript" src="http://192.168.43.183/laundry/templates/back-end/penguin/assets/js/jquery.cropit.js"></script> 
<!-- iCheck -->
<link rel="stylesheet" href="http://192.168.43.183/laundry/templates/back-end/penguin/js/iCheck/square/blue.css">
<script src="http://192.168.43.183/laundry/templates/back-end/penguin/js/iCheck/icheck.min.js"></script>  

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
        
        var aktivasi_sms = 0;        
        $('input[name=aktivasi_sms]').on('ifChecked', function(event){
            aktivasi_sms = $(this).val();
        });

        var aktivasi_admin = 0;        
        $('input[name=aktivasi_admin]').on('ifChecked', function(event){
            aktivasi_admin = $(this).val();
        });
        
        $('#btn_simpan_pelanggan').click(function() {            

            var data = new FormData();
            data.append('aktivasi_sms', aktivasi_sms);
            data.append('aktivasi_admin', aktivasi_admin);
            
            setLoading(true, "pelanggan");
            $.ajax({
                type: 'POST',
                url: 'updatePelanggan.php',
                data: data,
                cache: false,
                dataType: 'json',
                processData: false, // Don't process the files
                contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                success: function(data) {
                    setLoading(false, 'pelanggan');
                    if(data['success']) {
                        setMessage('success', data['message']);  
                    } else {
                        setMessage('error', data['message']);                        
                    }
                }, 
                error: function() {
                    setLoading(false, 'pelanggan');
                    setMessage('error', 'Kesalahan server. Mohon diulang kembali!');
                }
            }); 
        });
        
        $('#btn_simpan_stok').click(function() {            

            var data = new FormData();
            data.append('jatuh_tempo', $('[name=jatuh_tempo]').val());
            data.append('stok_minimum', $('[name=stok_minimum]').val());
            data.append('is_tampilkan_stok', $('[name=tampilkan_stok]').is(':checked')?'Y':'N');     
            data.append('status_stok', $('[name=status_stok]').val());
            data.append('parameter_status', $('[name=parameter_status]').val());
            data.append('jam', $('[name=jam]').val());
            data.append('menit', $('[name=menit]').val());
            
            setLoading(true, "stok");
            $.ajax({
                type: 'POST',
                url: 'updateStok.php',
                data: data,
                cache: false,
                dataType: 'json',
                processData: false, // Don't process the files
                contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                success: function(data) {
                    setLoading(false, 'stok');
                    if(data['success']) {
                        setMessage('success', data['message']);  
                    } else {
                        setMessage('error', data['message']);                        
                    }
                }, 
                error: function() {
                    setLoading(false, 'stok');
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
                        url: 'http://192.168.43.183/laundry/store/notifDataStore.php',
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
