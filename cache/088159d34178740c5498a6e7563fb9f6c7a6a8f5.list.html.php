<?php /*%%SmartyHeaderCode:2961526675bda734f293421-25580358%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '088159d34178740c5498a6e7563fb9f6c7a6a8f5' => 
    array (
      0 => '../../templates/back-end/penguin/metode_pembayaran/list.html',
      1 => 1538456116,
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
  'nocache_hash' => '2961526675bda734f293421-25580358',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d3f9c712c0507_64596734',
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d3f9c712c0507_64596734')) {function content_5d3f9c712c0507_64596734($_smarty_tpl) {?><!doctype html>
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
                                <span id="total_notif_pesan_baru" class="bubble">3</span>
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
                <li><a href="http://laundry.id/adminweb/metode_pembayaran/">Pengaturan</a></li>
                <li class="active">Metode Pembayaran</li>
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
                            <a href="#transferbank" data-toggle="tab"><b>TRANSFER BANK</b></a>
                        </li>                                 
                        <li>
                            <a href="#cod" data-toggle="tab"><b>COD</b></a>
                        </li>                                
                        <li>
                            <a href="#midtrans" data-toggle="tab"><b>MIDTRANS</b></a>
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
                    <div class="tab-pane fade active in" id="transferbank">
                         
                         <div class="panel-body no-padding-bottom">
                            <div class="input-group">
                                <input type="text" value="" class="form-control" name="query" id="query" placeholder="Masukan kata kunci pencarian..." />
                                <span class="input-group-btn"><div id="btn_cari" type="submit" class="btn btn-default">Cari</div>
                                <a class="btn btn-default" href="list.php?tab=transferbank">Reset</a></span>                                                  
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
                                        <th width="20%"><div style="text-align: center;">Nama Bank</div></th>
                                        <th width="20%"><div style="text-align: center;">No. Rekening</div></th>
                                        <th width="25%"><div style="text-align: center;">Atas Nama</div></th>
                                        <th width="10%"><div style="text-align: center;">Status</div></th>
                                        <th width="10%"><div style="text-align: center;">Logo</div></th>
                                        <th width="10%"><div style="text-align: center;">Aksi</div></th>
                                    </tr>
                                </thead>

                                <tbody>
                                                                                                            
                                        <tr id="baris_4">
                                            <td align="center"><input type="checkbox" id_select="4" name="select_4" class="select" /></td>
                                            <td align="center">1</td>
                                            <td align="left">Muamalat<br />Cabang Palembang</td>
                                            <td align="center">Ryan syarifudin</td>
                                            <td align="center">3660008797</td>
                                            <td align="center"><span style="font-weight: bold; color: green;">Aktif</span></td>
                                            <td align="center"><div style="text-align: center;  white-space: nowrap;">
                                                <img src="http://laundry.id/uploads/bank/muamalat_2121.png" width="75" />
                                            </div></td>
                                            <td>
                                                <div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="4" class="btn btn-success edit">Edit</div>                                                    <div id_select="4" class="btn btn-danger hapus">Hapus</div>                                                         
                                                </div>
                                            </td>                                          
                                        </tr>
                                          
                                                                    </tbody>

                                                            </table>
                        </div>
                        
                    </div>
                    
                    <div class="tab-pane fade" id="cod">
                        
                        
                    </div>
                    
                    <div class="tab-pane fade" id="midtrans">
                        
                        
                        
                        
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
                            window.location='list.php?tab=transferbank';
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
            window.location='list.php?tab=transferbank'+(query.length>0?'&query='+query:'');
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
