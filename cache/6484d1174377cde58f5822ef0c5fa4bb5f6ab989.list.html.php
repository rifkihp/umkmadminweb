<?php /*%%SmartyHeaderCode:21216514225e841b32d57226-77173710%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6484d1174377cde58f5822ef0c5fa4bb5f6ab989' => 
    array (
      0 => '..\\..\\templates\\back-end\\penguin\\product\\list.html',
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
  'nocache_hash' => '21216514225e841b32d57226-77173710',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e89ec79765e59_52853015',
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e89ec79765e59_52853015')) {function content_5e89ec79765e59_52853015($_smarty_tpl) {?><!doctype html>
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
						<i class="icon-table position-left"></i> Product
					</div>
					<ul class="breadcrumb">
						<li><a href="http://localhost/laundry/adminweb">Beranda</a></li>
						<li><a href="http://localhost/laundry/adminweb/dashboard/">Product</a></li>
						<li class="active">List of Product</li>
					</ul>					
				</div>
			</div>		
			<!--/Page Header-->
		
			<div class="container-fluid page-content">
			
				<div class="panel panel-flat">
					<div class="form-group panel-body no-padding-bottom">
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
							<label><input type="checkbox" name="produk_promo" > <span class="btn label btn-success btn-xs">promo</span></label>&nbsp;&nbsp;&nbsp;
							<label><input type="checkbox" name="produk_featured" > <span class="btn label btn-warning btn-xs">featured</span></label>&nbsp;&nbsp;&nbsp;
							<label><input type="checkbox" name="produk_terbaru"  > <span class="btn label btn-success btn-xs">baru</span></label>&nbsp;&nbsp;&nbsp;
							<label><input type="checkbox" name="produk_preorder" > <span class="btn label btn-warning btn-xs">pre order</span></label>&nbsp;&nbsp;&nbsp;
							<label><input type="checkbox" name="produk_soldout"  > <span class="btn label btn-danger btn-xs">sold out</span></label>&nbsp;&nbsp;&nbsp;
							<label><input type="checkbox" name="produk_freeongkir"  > <span class="btn label btn-danger btn-xs">free ongkir</span></label>&nbsp;&nbsp;&nbsp;
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

                                    <th  width="1%"><input type="checkbox" id="select_all" /></th>

                                    <th data-toggle="false" width="1%"><div style="text-align: center;">No.</div></th>

                                    <th data-hide="phone, tablet" width="15%"><div style="text-align: center;">Tanggal / Jam</div></th>

                                    <th width="60%"><div style="text-align: left;">Nama</div></th>

                                    <th data-hide="phone, tablet" width="15%"><div style="text-align: center;">Aksi</div></th>

                                </tr>

                            </thead>

                            <tbody>

                                
                                                                    

                                    <tr id="baris_28">

                                        <td align="center"><input type="checkbox" id_select="28" name="select_28" class="select" /></td>

                                        <td align="center"><small>1</small></td>

                                        <td align="center"><small>05-04-2020 21:34:33</small></td>

                                        <td align="left">

                                            <img align="left" style="margin-right: 10px; margin-bottom: 10px; margin-top: 3px;" src="http://localhost/laundry/uploads/produk/index.jpg" width="75" />

                                            <table><tr><td>

                                                K409<br />
                                                piyama anak elmo size S<br /> 
                                                <small>Kategori: </small><br />
                                                <span style="font-weight: bold;"><small>Rp. 42,000</small></span><br />

                                                <span style="font-weight: bold;"><small>Status: </small><span style="color: green;"><small>Publish</small></span></span><br />

                                                
                                                <span class="btn label bg-yellow"><small>featured</small></span>
                                                <span class="btn label bg-green"><small>baru</small></span>
                                                
                                                                                                
                                                
                                                <br />

                                            </td></tr></table>

                                        </td>

                                        <td><div style="text-align: center;  white-space: nowrap;">

                                                
                                                    <div id_select="28" class="btn btn-primary up">Up</div>

                                                    <div id_select="28" class="btn btn-success edit">Edit</div>

                                                
                                                <div id_select="28" class="btn btn-danger hapus">Hapus</div>                                                        

                                            </div>

                                        </td>                                          

                                    </tr>

                                      

                                                                    

                                    <tr id="baris_34">

                                        <td align="center"><input type="checkbox" id_select="34" name="select_34" class="select" /></td>

                                        <td align="center"><small>2</small></td>

                                        <td align="center"><small>01-04-2020 11:41:15</small></td>

                                        <td align="left">

                                            <img align="left" style="margin-right: 10px; margin-bottom: 10px; margin-top: 3px;" src="http://localhost/laundry/uploads/produk/pukis.jpg" width="75" />

                                            <table><tr><td>

                                                pks<br />
                                                Pukis Jovita<br /> 
                                                <small>Kategori: Kuliner</small><br />
                                                <span style="font-weight: bold;"><small>Rp. 33,000</small></span><br />

                                                <span style="font-weight: bold;"><small>Status: </small><span style="color: green;"><small>Publish</small></span></span><br />

                                                
                                                
                                                <span class="btn label bg-green"><small>baru</small></span>
                                                
                                                                                                
                                                
                                                <br />

                                            </td></tr></table>

                                        </td>

                                        <td><div style="text-align: center;  white-space: nowrap;">

                                                
                                                    <div id_select="34" class="btn btn-primary up">Up</div>

                                                    <div id_select="34" class="btn btn-success edit">Edit</div>

                                                
                                                <div id_select="34" class="btn btn-danger hapus">Hapus</div>                                                        

                                            </div>

                                        </td>                                          

                                    </tr>

                                      

                                                                    

                                    <tr id="baris_35">

                                        <td align="center"><input type="checkbox" id_select="35" name="select_35" class="select" /></td>

                                        <td align="center"><small>3</small></td>

                                        <td align="center"><small>22-02-2019 03:28:16</small></td>

                                        <td align="left">

                                            <img align="left" style="margin-right: 10px; margin-bottom: 10px; margin-top: 3px;" src="http://localhost/laundry/uploads/produk/WhatsApp Image 2019-02-21 at 18.15.27.jpeg" width="75" />

                                            <table><tr><td>

                                                PKS1<br />
                                                aaa<br /> 
                                                <small>Kategori: Fashion Pria</small><br />
                                                <span style="font-weight: bold;"><small>Rp. 0</small></span><br />

                                                <span style="font-weight: bold;"><small>Status: </small><span style="color: green;"><small>Publish</small></span></span><br />

                                                
                                                
                                                
                                                
                                                                                                
                                                
                                                

                                            </td></tr></table>

                                        </td>

                                        <td><div style="text-align: center;  white-space: nowrap;">

                                                
                                                    <div id_select="35" class="btn btn-primary up">Up</div>

                                                    <div id_select="35" class="btn btn-success edit">Edit</div>

                                                
                                                <div id_select="35" class="btn btn-danger hapus">Hapus</div>                                                        

                                            </div>

                                        </td>                                          

                                    </tr>

                                      

                                                                    

                                    <tr id="baris_33">

                                        <td align="center"><input type="checkbox" id_select="33" name="select_33" class="select" /></td>

                                        <td align="center"><small>4</small></td>

                                        <td align="center"><small>21-10-2018 20:31:05</small></td>

                                        <td align="left">

                                            <img align="left" style="margin-right: 10px; margin-bottom: 10px; margin-top: 3px;" src="http://localhost/laundry/uploads/produk/IMG-20181017-WA0002.jpg" width="75" />

                                            <table><tr><td>

                                                528<br />
                                                Benq Digital Proyektor MS504<br /> 
                                                <small>Kategori: Second Pede, Elektronik, Proyektor</small><br />
                                                <span style="font-weight: bold;"><small>Rp. 3,300,000</small></span><br />

                                                <span style="font-weight: bold;"><small>Status: </small><span style="color: green;"><small>Publish</small></span></span><br />

                                                
                                                
                                                <span class="btn label bg-green"><small>baru</small></span>
                                                
                                                                                                
                                                
                                                <br />

                                            </td></tr></table>

                                        </td>

                                        <td><div style="text-align: center;  white-space: nowrap;">

                                                
                                                    <div id_select="33" class="btn btn-primary up">Up</div>

                                                    <div id_select="33" class="btn btn-success edit">Edit</div>

                                                
                                                <div id_select="33" class="btn btn-danger hapus">Hapus</div>                                                        

                                            </div>

                                        </td>                                          

                                    </tr>

                                      

                                                                    

                                    <tr id="baris_12">

                                        <td align="center"><input type="checkbox" id_select="12" name="select_12" class="select" /></td>

                                        <td align="center"><small>5</small></td>

                                        <td align="center"><small>21-10-2018 15:38:49</small></td>

                                        <td align="left">

                                            <img align="left" style="margin-right: 10px; margin-bottom: 10px; margin-top: 3px;" src="http://localhost/laundry/uploads/produk/raindoz_raindoz-jaket-parka-wanita-hinata-rse-060_full02.jpg" width="75" />

                                            <table><tr><td>

                                                JAKET<br />
                                                 Raindoz Hinata RSE 060 Jaket Parka Wanita<br /> 
                                                <small>Kategori: Fashion Wanita</small><br />
                                                <span style="font-weight: bold;"><small>Rp. 180,000</small></span><br />

                                                <span style="font-weight: bold;"><small>Status: </small><span style="color: green;"><small>Publish</small></span></span><br />

                                                
                                                
                                                <span class="btn label bg-green"><small>baru</small></span>
                                                
                                                                                                
                                                
                                                <br />

                                            </td></tr></table>

                                        </td>

                                        <td><div style="text-align: center;  white-space: nowrap;">

                                                
                                                    <div id_select="12" class="btn btn-primary up">Up</div>

                                                    <div id_select="12" class="btn btn-success edit">Edit</div>

                                                
                                                <div id_select="12" class="btn btn-danger hapus">Hapus</div>                                                        

                                            </div>

                                        </td>                                          

                                    </tr>

                                      

                                                                    

                                    <tr id="baris_24">

                                        <td align="center"><input type="checkbox" id_select="24" name="select_24" class="select" /></td>

                                        <td align="center"><small>6</small></td>

                                        <td align="center"><small>21-10-2018 15:38:16</small></td>

                                        <td align="left">

                                            <img align="left" style="margin-right: 10px; margin-bottom: 10px; margin-top: 3px;" src="http://localhost/laundry/uploads/produk/index_1.jpg" width="75" />

                                            <table><tr><td>

                                                JAM-1216<br />
                                                Seiko Quartz classic SXDC40P1 <br /> 
                                                <small>Kategori: Fashion Wanita, Jam tangan</small><br />
                                                <span style="font-weight: bold;"><small>Rp. 1,049,000</small></span><br />

                                                <span style="font-weight: bold;"><small>Status: </small><span style="color: green;"><small>Publish</small></span></span><br />

                                                <span class="btn label bg-green"><small>promo</small></span>
                                                
                                                <span class="btn label bg-green"><small>baru</small></span>
                                                
                                                                                                
                                                
                                                <br />

                                            </td></tr></table>

                                        </td>

                                        <td><div style="text-align: center;  white-space: nowrap;">

                                                
                                                    <div id_select="24" class="btn btn-primary up">Up</div>

                                                    <div id_select="24" class="btn btn-success edit">Edit</div>

                                                
                                                <div id_select="24" class="btn btn-danger hapus">Hapus</div>                                                        

                                            </div>

                                        </td>                                          

                                    </tr>

                                      

                                                                    

                                    <tr id="baris_31">

                                        <td align="center"><input type="checkbox" id_select="31" name="select_31" class="select" /></td>

                                        <td align="center"><small>7</small></td>

                                        <td align="center"><small>12-06-2018 05:01:48</small></td>

                                        <td align="left">

                                            <img align="left" style="margin-right: 10px; margin-bottom: 10px; margin-top: 3px;" src="http://localhost/laundry/uploads/produk/papercut-fashion_papercut-fashion-c38-kanaya-5606-blouse---navy_full03_1.jpg" width="75" />

                                            <table><tr><td>

                                                212<br />
                                                Kapak Maut Naga Geni 212<br /> 
                                                <small>Kategori: </small><br />
                                                <span style="font-weight: bold;"><small>Rp. 1,000,000,000</small></span><br />

                                                <span style="font-weight: bold;"><small>Status: </small><span style="color: green;"><small>Publish</small></span></span><br />

                                                
                                                
                                                <span class="btn label bg-green"><small>baru</small></span>
                                                
                                                                                                
                                                
                                                <br />

                                            </td></tr></table>

                                        </td>

                                        <td><div style="text-align: center;  white-space: nowrap;">

                                                
                                                    <div id_select="31" class="btn btn-primary up">Up</div>

                                                    <div id_select="31" class="btn btn-success edit">Edit</div>

                                                
                                                <div id_select="31" class="btn btn-danger hapus">Hapus</div>                                                        

                                            </div>

                                        </td>                                          

                                    </tr>

                                      

                                                                    

                                    <tr id="baris_30">

                                        <td align="center"><input type="checkbox" id_select="30" name="select_30" class="select" /></td>

                                        <td align="center"><small>8</small></td>

                                        <td align="center"><small>12-06-2018 04:49:10</small></td>

                                        <td align="left">

                                            <img align="left" style="margin-right: 10px; margin-bottom: 10px; margin-top: 3px;" src="http://localhost/laundry/uploads/produk/raindoz_raindoz-jaket-parka-wanita-hinata-rse-060_full02_1.jpg" width="75" />

                                            <table><tr><td>

                                                IKH2076QI<br />
                                                HRCN JAKET SWEATER HOODIES WANITA OUTWEAR WANITA CROWN<br /> 
                                                <small>Kategori: Second Pede</small><br />
                                                <span style="font-weight: bold;"><small>Rp. 289,000</small></span><br />

                                                <span style="font-weight: bold;"><small>Status: </small><span style="color: green;"><small>Publish</small></span></span><br />

                                                
                                                
                                                <span class="btn label bg-green"><small>baru</small></span>
                                                <span class="btn label bg-yellow"><small>pre order</small></span>
                                                                                                
                                                <span class="btn label bg-red"><small>free ongkir</small></span>
                                                <br />

                                            </td></tr></table>

                                        </td>

                                        <td><div style="text-align: center;  white-space: nowrap;">

                                                
                                                    <div id_select="30" class="btn btn-primary up">Up</div>

                                                    <div id_select="30" class="btn btn-success edit">Edit</div>

                                                
                                                <div id_select="30" class="btn btn-danger hapus">Hapus</div>                                                        

                                            </div>

                                        </td>                                          

                                    </tr>

                                      

                                                                    

                                    <tr id="baris_29">

                                        <td align="center"><input type="checkbox" id_select="29" name="select_29" class="select" /></td>

                                        <td align="center"><small>9</small></td>

                                        <td align="center"><small>07-05-2018 08:59:32</small></td>

                                        <td align="left">

                                            <img align="left" style="margin-right: 10px; margin-bottom: 10px; margin-top: 3px;" src="http://localhost/laundry/uploads/produk/Christian-Dior-Lady-8907-Semi-Premium-KODE-CD058-Pink.jpg" width="75" />

                                            <table><tr><td>

                                                1919<br />
                                                tas mj<br /> 
                                                <small>Kategori: Home & Living</small><br />
                                                <span style="font-weight: bold;"><small>Rp. 120,000</small></span><br />

                                                <span style="font-weight: bold;"><small>Status: </small><span style="color: green;"><small>Publish</small></span></span><br />

                                                
                                                
                                                <span class="btn label bg-green"><small>baru</small></span>
                                                
                                                                                                
                                                <span class="btn label bg-red"><small>free ongkir</small></span>
                                                <br />

                                            </td></tr></table>

                                        </td>

                                        <td><div style="text-align: center;  white-space: nowrap;">

                                                
                                                    <div id_select="29" class="btn btn-primary up">Up</div>

                                                    <div id_select="29" class="btn btn-success edit">Edit</div>

                                                
                                                <div id_select="29" class="btn btn-danger hapus">Hapus</div>                                                        

                                            </div>

                                        </td>                                          

                                    </tr>

                                      

                                                                    

                                    <tr id="baris_26">

                                        <td align="center"><input type="checkbox" id_select="26" name="select_26" class="select" /></td>

                                        <td align="center"><small>10</small></td>

                                        <td align="center"><small>13-11-2017 01:51:14</small></td>

                                        <td align="left">

                                            <img align="left" style="margin-right: 10px; margin-bottom: 10px; margin-top: 3px;" src="http://localhost/laundry/uploads/produk/GUESS-WANITA-MURAH-1.jpg" width="75" />

                                            <table><tr><td>

                                                JAM-332<br />
                                                Fossil Architec Automatic ME3057 Silver Jam Tangan Wanita <br /> 
                                                <small>Kategori: Fashion Wanita</small><br />
                                                <span style="font-weight: bold;"><small>Rp. 3,361,000</small></span><br />

                                                <span style="font-weight: bold;"><small>Status: </small><span style="color: green;"><small>Publish</small></span></span><br />

                                                <span class="btn label bg-green"><small>promo</small></span>
                                                
                                                <span class="btn label bg-green"><small>baru</small></span>
                                                
                                                                                                
                                                
                                                <br />

                                            </td></tr></table>

                                        </td>

                                        <td><div style="text-align: center;  white-space: nowrap;">

                                                
                                                    <div id_select="26" class="btn btn-primary up">Up</div>

                                                    <div id_select="26" class="btn btn-success edit">Edit</div>

                                                
                                                <div id_select="26" class="btn btn-danger hapus">Hapus</div>                                                        

                                            </div>

                                        </td>                                          

                                    </tr>

                                      

                                                                    

                                    <tr id="baris_25">

                                        <td align="center"><input type="checkbox" id_select="25" name="select_25" class="select" /></td>

                                        <td align="center"><small>11</small></td>

                                        <td align="center"><small>12-11-2017 22:42:02</small></td>

                                        <td align="left">

                                            <img align="left" style="margin-right: 10px; margin-bottom: 10px; margin-top: 3px;" src="http://localhost/laundry/uploads/produk/7844829_5887988c-a4e9-42ff-988b-920a7a3c99ea.jpg" width="75" />

                                            <table><tr><td>

                                                JAM-433<br />
                                                Fossil Chelsey Multifunction ES3923 Gold Jam Tangan Wanita<br /> 
                                                <small>Kategori: Fashion Wanita</small><br />
                                                <span style="font-weight: bold;"><small>Rp. 2,398,000</small></span><br />

                                                <span style="font-weight: bold;"><small>Status: </small><span style="color: green;"><small>Publish</small></span></span><br />

                                                <span class="btn label bg-green"><small>promo</small></span>
                                                
                                                <span class="btn label bg-green"><small>baru</small></span>
                                                
                                                                                                
                                                
                                                <br />

                                            </td></tr></table>

                                        </td>

                                        <td><div style="text-align: center;  white-space: nowrap;">

                                                
                                                    <div id_select="25" class="btn btn-primary up">Up</div>

                                                    <div id_select="25" class="btn btn-success edit">Edit</div>

                                                
                                                <div id_select="25" class="btn btn-danger hapus">Hapus</div>                                                        

                                            </div>

                                        </td>                                          

                                    </tr>

                                      

                                                                    

                                    <tr id="baris_27">

                                        <td align="center"><input type="checkbox" id_select="27" name="select_27" class="select" /></td>

                                        <td align="center"><small>12</small></td>

                                        <td align="center"><small>12-11-2017 22:38:44</small></td>

                                        <td align="left">

                                            <img align="left" style="margin-right: 10px; margin-bottom: 10px; margin-top: 3px;" src="http://localhost/laundry/uploads/produk/JAM-TANGAN-FOSSIL-88932-COUPLE.jpg" width="75" />

                                            <table><tr><td>

                                                k4934<br />
                                                piyama anak elmo size M<br /> 
                                                <small>Kategori: Kuliner</small><br />
                                                <span style="font-weight: bold;"><small>Rp. 42,000</small></span><br />

                                                <span style="font-weight: bold;"><small>Status: </small><span style="color: green;"><small>Publish</small></span></span><br />

                                                <span class="btn label bg-green"><small>promo</small></span>
                                                <span class="btn label bg-yellow"><small>featured</small></span>
                                                <span class="btn label bg-green"><small>baru</small></span>
                                                
                                                                                                
                                                
                                                <br />

                                            </td></tr></table>

                                        </td>

                                        <td><div style="text-align: center;  white-space: nowrap;">

                                                
                                                    <div id_select="27" class="btn btn-primary up">Up</div>

                                                    <div id_select="27" class="btn btn-success edit">Edit</div>

                                                
                                                <div id_select="27" class="btn btn-danger hapus">Hapus</div>                                                        

                                            </div>

                                        </td>                                          

                                    </tr>

                                      

                                                                    

                                    <tr id="baris_20">

                                        <td align="center"><input type="checkbox" id_select="20" name="select_20" class="select" /></td>

                                        <td align="center"><small>13</small></td>

                                        <td align="center"><small>28-10-2017 19:38:21</small></td>

                                        <td align="left">

                                            <img align="left" style="margin-right: 10px; margin-bottom: 10px; margin-top: 3px;" src="http://localhost/laundry/uploads/produk/minimal_minimal-layered-sleevless-tunic-atasan-wanita---dark-navy_full05.jpg" width="75" />

                                            <table><tr><td>

                                                ATS-447<br />
                                                Minimal Layered Sleevless Tunic Atasan Wanita<br /> 
                                                <small>Kategori: Second Pede</small><br />
                                                <span style="font-weight: bold;"><small>Rp. 90,000</small></span><br />

                                                <span style="font-weight: bold;"><small>Status: </small><span style="color: green;"><small>Publish</small></span></span><br />

                                                
                                                
                                                <span class="btn label bg-green"><small>baru</small></span>
                                                
                                                                                                
                                                
                                                <br />

                                            </td></tr></table>

                                        </td>

                                        <td><div style="text-align: center;  white-space: nowrap;">

                                                
                                                    <div id_select="20" class="btn btn-primary up">Up</div>

                                                    <div id_select="20" class="btn btn-success edit">Edit</div>

                                                
                                                <div id_select="20" class="btn btn-danger hapus">Hapus</div>                                                        

                                            </div>

                                        </td>                                          

                                    </tr>

                                      

                                                                    

                                    <tr id="baris_23">

                                        <td align="center"><input type="checkbox" id_select="23" name="select_23" class="select" /></td>

                                        <td align="center"><small>14</small></td>

                                        <td align="center"><small>21-09-2017 07:56:43</small></td>

                                        <td align="left">

                                            <img align="left" style="margin-right: 10px; margin-bottom: 10px; margin-top: 3px;" src="http://localhost/laundry/uploads/produk/asia-watch_fossil-cecile-am4482_full01.jpg" width="75" />

                                            <table><tr><td>

                                                JAM-4747<br />
                                                Fossil Cecile AM4482 Jam Tangan Wanita<br /> 
                                                <small>Kategori: Fashion Wanita</small><br />
                                                <span style="font-weight: bold;"><small>Rp. 2,155,000</small></span><br />

                                                <span style="font-weight: bold;"><small>Status: </small><span style="color: green;"><small>Publish</small></span></span><br />

                                                <span class="btn label bg-green"><small>promo</small></span>
                                                
                                                <span class="btn label bg-green"><small>baru</small></span>
                                                
                                                                                                
                                                
                                                <br />

                                            </td></tr></table>

                                        </td>

                                        <td><div style="text-align: center;  white-space: nowrap;">

                                                
                                                    <div id_select="23" class="btn btn-primary up">Up</div>

                                                    <div id_select="23" class="btn btn-success edit">Edit</div>

                                                
                                                <div id_select="23" class="btn btn-danger hapus">Hapus</div>                                                        

                                            </div>

                                        </td>                                          

                                    </tr>

                                      

                                                                    

                                    <tr id="baris_22">

                                        <td align="center"><input type="checkbox" id_select="22" name="select_22" class="select" /></td>

                                        <td align="center"><small>15</small></td>

                                        <td align="center"><small>21-09-2017 07:55:12</small></td>

                                        <td align="left">

                                            <img align="left" style="margin-right: 10px; margin-bottom: 10px; margin-top: 3px;" src="http://localhost/laundry/uploads/produk/asia-watch_lee-cooper-beverly-lc-34l-c-silver-jam-tangan-wanita_full01.jpg" width="75" />

                                            <table><tr><td>

                                                JAM-121<br />
                                                 Lee Cooper Beverly LC-34L-C Silver Jam Tangan Wanita <br /> 
                                                <small>Kategori: Fashion Wanita</small><br />
                                                <span style="font-weight: bold;"><small>Rp. 1,359,000</small></span><br />

                                                <span style="font-weight: bold;"><small>Status: </small><span style="color: green;"><small>Publish</small></span></span><br />

                                                <span class="btn label bg-green"><small>promo</small></span>
                                                
                                                <span class="btn label bg-green"><small>baru</small></span>
                                                
                                                                                                
                                                
                                                <br />

                                            </td></tr></table>

                                        </td>

                                        <td><div style="text-align: center;  white-space: nowrap;">

                                                
                                                    <div id_select="22" class="btn btn-primary up">Up</div>

                                                    <div id_select="22" class="btn btn-success edit">Edit</div>

                                                
                                                <div id_select="22" class="btn btn-danger hapus">Hapus</div>                                                        

                                            </div>

                                        </td>                                          

                                    </tr>

                                      

                                                                    

                                    <tr id="baris_21">

                                        <td align="center"><input type="checkbox" id_select="21" name="select_21" class="select" /></td>

                                        <td align="center"><small>16</small></td>

                                        <td align="center"><small>21-09-2017 07:49:07</small></td>

                                        <td align="left">

                                            <img align="left" style="margin-right: 10px; margin-bottom: 10px; margin-top: 3px;" src="http://localhost/laundry/uploads/produk/fossil_fossil-abilene-chronograph-ch3088-jam-tangan-wanita-kulit---silver_full04.jpg" width="75" />

                                            <table><tr><td>

                                                ORI-211<br />
                                                Fossil Abilene Chronograph CH3088 Jam Tangan Wanita<br /> 
                                                <small>Kategori: Fashion Wanita</small><br />
                                                <span style="font-weight: bold;"><small>Rp. 1,975,000</small></span><br />

                                                <span style="font-weight: bold;"><small>Status: </small><span style="color: green;"><small>Publish</small></span></span><br />

                                                <span class="btn label bg-green"><small>promo</small></span>
                                                
                                                <span class="btn label bg-green"><small>baru</small></span>
                                                
                                                                                                
                                                
                                                <br />

                                            </td></tr></table>

                                        </td>

                                        <td><div style="text-align: center;  white-space: nowrap;">

                                                
                                                    <div id_select="21" class="btn btn-primary up">Up</div>

                                                    <div id_select="21" class="btn btn-success edit">Edit</div>

                                                
                                                <div id_select="21" class="btn btn-danger hapus">Hapus</div>                                                        

                                            </div>

                                        </td>                                          

                                    </tr>

                                      

                                                                    

                                    <tr id="baris_19">

                                        <td align="center"><input type="checkbox" id_select="19" name="select_19" class="select" /></td>

                                        <td align="center"><small>17</small></td>

                                        <td align="center"><small>21-09-2017 07:32:40</small></td>

                                        <td align="left">

                                            <img align="left" style="margin-right: 10px; margin-bottom: 10px; margin-top: 3px;" src="http://localhost/laundry/uploads/produk/minimal_minimal-overslag-jersey-shirt-jet-black_full05.jpg" width="75" />

                                            <table><tr><td>

                                                ATS-1213<br />
                                                Minimal Overslag Jersey Shirt Jet Atasan Wanita<br /> 
                                                <small>Kategori: Second Pede</small><br />
                                                <span style="font-weight: bold;"><small>Rp. 45,000</small></span><br />

                                                <span style="font-weight: bold;"><small>Status: </small><span style="color: green;"><small>Publish</small></span></span><br />

                                                <span class="btn label bg-green"><small>promo</small></span>
                                                
                                                <span class="btn label bg-green"><small>baru</small></span>
                                                
                                                                                                
                                                
                                                <br />

                                            </td></tr></table>

                                        </td>

                                        <td><div style="text-align: center;  white-space: nowrap;">

                                                
                                                    <div id_select="19" class="btn btn-primary up">Up</div>

                                                    <div id_select="19" class="btn btn-success edit">Edit</div>

                                                
                                                <div id_select="19" class="btn btn-danger hapus">Hapus</div>                                                        

                                            </div>

                                        </td>                                          

                                    </tr>

                                      

                                                                    

                                    <tr id="baris_17">

                                        <td align="center"><input type="checkbox" id_select="17" name="select_17" class="select" /></td>

                                        <td align="center"><small>18</small></td>

                                        <td align="center"><small>21-09-2017 07:26:59</small></td>

                                        <td align="left">

                                            <img align="left" style="margin-right: 10px; margin-bottom: 10px; margin-top: 3px;" src="http://localhost/laundry/uploads/produk/vm_vm-polos-slimfit-katun-panjang-long-shirt-kemeja-pria---dark-grey_full18.jpg" width="75" />

                                            <table><tr><td>

                                                KMJ-101<br />
                                                VM Polos Slimfit Katun Panjang Long Shirt Kemeja Pria<br /> 
                                                <small>Kategori: Kuliner</small><br />
                                                <span style="font-weight: bold;"><small>Rp. 129,000</small></span><br />

                                                <span style="font-weight: bold;"><small>Status: </small><span style="color: green;"><small>Publish</small></span></span><br />

                                                <span class="btn label bg-green"><small>promo</small></span>
                                                
                                                <span class="btn label bg-green"><small>baru</small></span>
                                                
                                                                                                
                                                
                                                <br />

                                            </td></tr></table>

                                        </td>

                                        <td><div style="text-align: center;  white-space: nowrap;">

                                                
                                                    <div id_select="17" class="btn btn-primary up">Up</div>

                                                    <div id_select="17" class="btn btn-success edit">Edit</div>

                                                
                                                <div id_select="17" class="btn btn-danger hapus">Hapus</div>                                                        

                                            </div>

                                        </td>                                          

                                    </tr>

                                      

                                                                    

                                    <tr id="baris_18">

                                        <td align="center"><input type="checkbox" id_select="18" name="select_18" class="select" /></td>

                                        <td align="center"><small>19</small></td>

                                        <td align="center"><small>21-09-2017 07:25:39</small></td>

                                        <td align="left">

                                            <img align="left" style="margin-right: 10px; margin-bottom: 10px; margin-top: 3px;" src="http://localhost/laundry/uploads/produk/vm_vm-kemeja-polos-pendek-slimfit-hitam_full10.jpg" width="75" />

                                            <table><tr><td>

                                                KMJ-211<br />
                                                VM Kemeja Polos Pendek Slimfit<br /> 
                                                <small>Kategori: Kuliner</small><br />
                                                <span style="font-weight: bold;"><small>Rp. 129,000</small></span><br />

                                                <span style="font-weight: bold;"><small>Status: </small><span style="color: green;"><small>Publish</small></span></span><br />

                                                <span class="btn label bg-green"><small>promo</small></span>
                                                
                                                <span class="btn label bg-green"><small>baru</small></span>
                                                
                                                                                                
                                                
                                                <br />

                                            </td></tr></table>

                                        </td>

                                        <td><div style="text-align: center;  white-space: nowrap;">

                                                
                                                    <div id_select="18" class="btn btn-primary up">Up</div>

                                                    <div id_select="18" class="btn btn-success edit">Edit</div>

                                                
                                                <div id_select="18" class="btn btn-danger hapus">Hapus</div>                                                        

                                            </div>

                                        </td>                                          

                                    </tr>

                                      

                                                                    

                                    <tr id="baris_16">

                                        <td align="center"><input type="checkbox" id_select="16" name="select_16" class="select" /></td>

                                        <td align="center"><small>20</small></td>

                                        <td align="center"><small>21-09-2017 07:12:03</small></td>

                                        <td align="left">

                                            <img align="left" style="margin-right: 10px; margin-bottom: 10px; margin-top: 3px;" src="http://localhost/laundry/uploads/produk/ps-career_ps-career-long-sleeve-shirt-pc203tw60030-shirts-white_full02.jpg" width="75" />

                                            <table><tr><td>

                                                ATS-121<br />
                                                PS Career Long Sleeve PC203TW60030 Shirts Wanita<br /> 
                                                <small>Kategori: Second Pede</small><br />
                                                <span style="font-weight: bold;"><small>Rp. 80,000</small></span><br />

                                                <span style="font-weight: bold;"><small>Status: </small><span style="color: green;"><small>Publish</small></span></span><br />

                                                <span class="btn label bg-green"><small>promo</small></span>
                                                
                                                
                                                
                                                                                                
                                                
                                                <br />

                                            </td></tr></table>

                                        </td>

                                        <td><div style="text-align: center;  white-space: nowrap;">

                                                
                                                    <div id_select="16" class="btn btn-primary up">Up</div>

                                                    <div id_select="16" class="btn btn-success edit">Edit</div>

                                                
                                                <div id_select="16" class="btn btn-danger hapus">Hapus</div>                                                        

                                            </div>

                                        </td>                                          

                                    </tr>

                                      

                                
                            </tbody>

                            
                            <tfoot><tr><th colspan="7">

                                <div style="text-align: center;">

                                    
                                    
                                    
                                        
                                            <span class="btn btn-info">1</span>                                

                                        
                                                                        

                                    
                                        
                                            <a class="btn btn-default" href="list.php?page=2">2</a>

                                        
                                                                        

                                    
                                                                    

                                        <a class="btn btn-default" href="list.php?page=2">Next &rarr;</a>

                                                                    

                                </div>  

                            </th></tr></tfoot>

                            
							</tbody>
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

            

            var proses_cari = function() {

                var query = $( "#query" ).val();

                var produk_promo = $( "[name=produk_promo]" ).is(':checked')?'1':'';

                var produk_featured = $( "[name=produk_featured]" ).is(':checked')?'2':'';

                var produk_terbaru = $( "[name=produk_terbaru]" ).is(':checked')?'3':'';

                var produk_preorder = $( "[name=produk_preorder]" ).is(':checked')?'4':'';

                var produk_soldout = $( "[name=produk_soldout]" ).is(':checked')?'5':'';

                

                window.location='list.php?'+

                    (query.length>0?'&query='+query:'')+

                    (produk_promo.length>0?'&produk_promo='+produk_promo:'')+

                    (produk_featured.length>0?'&produk_featured='+produk_featured:'')+

                    (produk_terbaru.length>0?'&produk_terbaru='+produk_terbaru:'')+

                    (produk_preorder.length>0?'&produk_preorder='+produk_preorder:'')+

                    (produk_soldout.length>0?'&produk_soldout='+produk_soldout:'');

            };

            

            $( "[name=produk_promo]" ).change(function() {

                proses_cari();

            });

            

            $( "[name=produk_featured]" ).change(function() {

                proses_cari();

            });

            

            $( "[name=produk_terbaru]" ).change(function() {

                proses_cari();

            });

            

            $( "[name=produk_preorder]" ).change(function() {

                proses_cari();

            });

            

            $( "[name=produk_soldout]" ).change(function() {

                proses_cari();

            });

            

            $( "#btn_cari" ).click(function() {

                proses_cari();

            });

            

            $( ".up" ).click(function() {                

                var id = this.getAttribute('id_select');

                prosesUp(id);                

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

            

            $( ".btn_promo" ).click(function() {

                //alert('promo');

                

                var id = this.getAttribute('id_produk');

                var status = this.getAttribute('is_true');

                

                $.ajax({

                    url: 'update_jenis_produk.php',

                    type: 'POST',

                    dataType: 'json',

                    data: { id: id, status: status, jenis: 'promo' },

                    success: function(data, textStatus, jqXHR) {

                        if(data['success']) {

                            if(status==1) {

                                $( "#btn_promo_"+id ).removeClass('bg-green').addClass('bg-gray');

                                $( "#btn_promo_"+id ).attr( "is_true", '0');

                            } else {

                                $( "#btn_promo_"+id ).removeClass('bg-gray').addClass('bg-green');

                                $( "#btn_promo_"+id ).attr( "is_true", '1');

                            }

                        }

                    }

                });

            });

            

            $( ".btn_featured" ).click(function() {

                //alert('featured');

                

                var id = this.getAttribute('id_produk');

                var status = this.getAttribute('is_true');

                

                $.ajax({

                    url: 'update_jenis_produk.php',

                    type: 'POST',

                    dataType: 'json',

                    data: { id: id, status: status, jenis: 'featured' },

                    success: function(data, textStatus, jqXHR) {

                        if(data['success']) {

                            if(status==1) {

                                $( "#btn_featured_"+id ).removeClass('bg-yellow').addClass('bg-gray');

                                $( "#btn_featured_"+id ).attr( "is_true", '0');

                            } else {

                                $( "#btn_featured_"+id ).removeClass('bg-gray').addClass('bg-yellow');

                                $( "#btn_featured_"+id ).attr( "is_true", '1');

                            }

                        }

                    }

                });

            });

            

            $( ".btn_terbaru" ).click(function() {

                //alert('terbaru');

                

                var id = this.getAttribute('id_produk');

                var status = this.getAttribute('is_true');

                

                $.ajax({

                    url: 'update_jenis_produk.php',

                    type: 'POST',

                    dataType: 'json',

                    data: { id: id, status: status, jenis: 'terbaru' },

                    success: function(data, textStatus, jqXHR) {

                        if(data['success']) {

                            if(status==1) {

                                $( "#btn_terbaru_"+id ).removeClass('bg-red').addClass('bg-gray');

                                $( "#btn_terbaru_"+id ).attr( "is_true", '0');

                            } else {

                                $( "#btn_terbaru_"+id ).removeClass('bg-gray').addClass('bg-red');

                                $( "#btn_terbaru_"+id ).attr( "is_true", '1');

                            }

                        }

                    }

                });

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

//                    scrollTop: $('#wrapper').offset().top 

                }, 600);

            }



            function prosesDelete(id) {
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
								swal('Terhapus!', 'Record Data Telah Berhasil Dihapus!', 'success')
								window.location='list.php';
							} else {
								swal('Error', data['message'], 'error')
								setMessage('error', data['message']);
							}
						},
						error: function(jqXHR, textStatus, errorThrown) {
							swal('Error', 'Terjadi Kesalahan System', 'error')
						}
					});                                

				}, function (dismiss) {
				  // dismiss can be 'cancel', 'overlay', 'close', 'timer'
				  if (dismiss === 'cancel') {
					swal('Cancelled', 'Record Data Batal Dihapus', 'error')
				  }
				})

            }

            

            function prosesUp(id) {

//                $('#detail').mask('Hapus...');

                $.ajax({

                    url: 'up.php',

                    type: 'POST',

                    dataType: 'json',

                    data: { id: id },

                    success: function(data, textStatus, jqXHR) {

                        if(data['success']) {

                            window.location='list.php';

                        } else {

//                            $('#detail').unmask();

                            setMessage('error', data['message']);

                        }

                    },

                    error: function(jqXHR, textStatus, errorThrown) {

//                        $('#detail').unmask();

                        setMessage('error', 'Terjadi kesalahan system.');

                    }

                });                             

            }

            

            setMessage('success', 'Edit data produk berhasil.');        

             

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
