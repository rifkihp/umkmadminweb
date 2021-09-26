<?php /*%%SmartyHeaderCode:14380498625ea389d32f87b4-04866761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f2fa701da6ab00c7cd283106e1ee71c7990f618' => 
    array (
      0 => '../../templates/back-end/penguin/product/edit.html',
      1 => 1587393418,
      2 => 'file',
    ),
    '2582a88d538f2a764cab178bddde668a4d6b2166' => 
    array (
      0 => '/home/u6060452/public_html/laundry/templates/back-end/penguin/includes/head.html',
      1 => 1579678290,
      2 => 'file',
    ),
    'd93547b11b26dd83b4ad99518c98e414da31b665' => 
    array (
      0 => '/home/u6060452/public_html/laundry/templates/back-end/penguin/includes/sidebar.html',
      1 => 1544655944,
      2 => 'file',
    ),
    '2c513717dcb00904cf69ebd24ba23766bb0e8f3f' => 
    array (
      0 => '/home/u6060452/public_html/laundry/templates/back-end/penguin/includes/footer.html',
      1 => 1544657450,
      2 => 'file',
    ),
    '0c2665944da5f183e6696e3b984c9ec8cdbe514e' => 
    array (
      0 => '/home/u6060452/public_html/laundry/templates/back-end/penguin/includes/footer_js.html',
      1 => 1538456120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14380498625ea389d32f87b4-04866761',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ea4e802bd4cb8_39321418',
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ea4e802bd4cb8_39321418')) {function content_5ea4e802bd4cb8_39321418($_smarty_tpl) {?><!doctype html>
<html lang="en">
    <head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>LAUNDRY</title>	
	<link href="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/images/favicon.ico" rel="icon" type="image/png">
	
	<!-- Global stylesheets -->	
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
	<link type="text/css" rel="stylesheet" href="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/fonts/fonts.css">
        <link type="text/css" rel="stylesheet" href="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/icons/icomoon/icomoon.css">
        <link type="text/css" rel="stylesheet" href="http://kiezie.web.id/laundry/templates/back-end/penguin/css/animate.min.css">
	<link type="text/css" rel="stylesheet" href="http://kiezie.web.id/laundry/templates/back-end/penguin/css/bootstrap.css">   
	<link type="text/css" rel="stylesheet" href="http://kiezie.web.id/laundry/templates/back-end/penguin/css/core.css">	
	<link type="text/css" rel="stylesheet" href="http://kiezie.web.id/laundry/templates/back-end/penguin/css/layout.css">	
	<link type="text/css" rel="stylesheet" href="http://kiezie.web.id/laundry/templates/back-end/penguin/css/bootstrap-extended.css">	    
	<link type="text/css" rel="stylesheet" href="http://kiezie.web.id/laundry/templates/back-end/penguin/css/components.css">
	<link type="text/css" rel="stylesheet" href="http://kiezie.web.id/laundry/templates/back-end/penguin/css/plugins.css">
	<link type="text/css" rel="stylesheet" href="http://kiezie.web.id/laundry/templates/back-end/penguin/css/loaders.css">
	<link type="text/css" rel="stylesheet" href="http://kiezie.web.id/laundry/templates/back-end/penguin/css/responsive.css">
	<link type="text/css" rel="stylesheet" href="http://kiezie.web.id/laundry/templates/back-end/penguin/css/color-system.css">		
	<link type="text/css" rel="stylesheet" href="http://kiezie.web.id/laundry/templates/back-end/penguin/css/fancybox/jquery.fancybox.css">
	<link type="text/css" rel="stylesheet" href="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/sweetalert2/sweetalert2.min.css">
	<link type="text/css" rel="stylesheet" href="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/bootstrap-fileinput/css/fileinput.min.css">
	<link type="text/css" rel="stylesheet" href="http://kiezie.web.id/laundry/templates/back-end/penguin/css/burnt_sienna_light.css">	
        <link type="text/css" rel="stylesheet" href="http://kiezie.web.id/laundry/templates/back-end/penguin/css/AdminLTE.css" />
	<link type="text/css" rel="stylesheet" href="0" id="theme">
	<script src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/sweetalert2/sweetalert2.min.js"></script>
	<script>
		var base_tpl_url = "http://kiezie.web.id/laundry/templates/back-end/penguin/css/themes/";
		var base_url = "http://kiezie.web.id/laundry/";
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
                                <a href="http://kiezie.web.id/laundry/adminweb/pesanandalamproses/pesananbelumlunas/" class="dropdown-toggle" style="width: 100%; padding-left: 10px; padding-right: 30px;"><i class="icon-cart"></i>
                                <span id="total_notif_belum_lunas" class="bubble">47</span>
                                <span style="color: #ffffff">Belum Bayar / KEEP </span></a>
                            </li>
                        
                        
                                                    <li class="dropdown-toggle hidden-xs" style="border-left: 1px solid #ffffff;">
                                <a href="http://kiezie.web.id/laundry/adminweb/pesanandalamproses/pesananperludikirim/" class="dropdown-toggle" style="width: 100%; padding-left: 10px; padding-right: 30px;"><i class="icon-box"></i>
                                <span id="total_notif_perlu_kemas" class="bubble">20</span>
                                <span style="color: #ffffff">Perlu Kemas </span></a>
                            </li>
                        
                                                    <li class="dropdown-toggle hidden-xs" style="border-left: 1px solid #ffffff;">
                                <a href="http://kiezie.web.id/laundry/adminweb/customer/" class="dropdown-toggle" style="width: 100%; padding-left: 10px; padding-right: 30px;"><i class="icon-users4"></i>
                                <span id="total_notif_pelanggan_baru" class="bubble">103</span>
                                <span style="color: #ffffff;">Pelanggan Baru</span></a>
                            </li>
                        
                        		

                        <li class="dropdown user-dropdown" style="border-left: 1px solid #ffffff;padding-left: 10px">
                            <a href="http://kiezie.web.id/laundry/adminweb#" class="btn-user dropdown-toggle hidden-xs" data-toggle="dropdown"><img src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/images/faces/face1.png" class="img-circle user" alt=""/></a>
                            <a href="http://kiezie.web.id/laundry/adminweb#" class="dropdown-toggle visible-xs" data-toggle="dropdown"><i class="icon-more"></i></a>
                            <div class="dropdown-menu">	
                                <div class="text-center"><img src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/images/faces/face1.png" class="img-circle img-70" alt=""/></div>
                                <h5 class="text-center"><b>Hi! Administrator</b></h5>
                                <ul class="more-apps">
                                        <!-- li><a href="http://kiezie.web.id/laundry/templates/back-end/penguin/material/user_profile_social.html"><i class="icon-profile"></i> My profile</a></li -->
                                        <!-- li><a href="http://kiezie.web.id/laundry/adminweb#"><i class="icon-envelop5"></i> Inbox <span class="badge badge-danger pull-right">4</span></a></li -->
                                        <li><a href="http://kiezie.web.id/laundry/adminweb/editprofile/"><i class="icon-profile"></i> My Profile</a></li>
                                        <li><a href="http://kiezie.web.id/laundry/adminweb/gantipassword/edit.php"><i class="icon-lock5"></i> Ganti Password</a></li>
                                </ul>
                                <div class="text-center"><a href="http://kiezie.web.id/laundry/adminweb/logout.php" class="btn btn-sm btn-info"><i class="icon-exit3 i-16 position-left"></i> Logout</a></div>
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
                    <img src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/images/faces/face1.png" alt="admin" class="img-circle" />
                </div>

                <div class="admin-user-info">
                    <ul class="user-info">
                        <li><a href="http://kiezie.web.id/laundry/adminweb/logout.php" class="text-semibold text-size-large">Administrator</a></li>
                        <li><a href="http://kiezie.web.id/laundry/adminweb/logout.php"><small>-- subtitle here --</small></a></li>
                    </ul>
                    <div class="logout-icon"><a href="http://kiezie.web.id/laundry/adminweb/logout.php"><i class="icon-exit2"></i></a></div>
                </div>
            </div>				
        </div>

        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active fadeIn" id="menu">
                <ul class="sidebar-accordion">
                    <li><br />&nbsp;&nbsp;&nbsp;</li>
                                            <li>
                            <a  href="http://kiezie.web.id/laundry/adminweb/dashboard/"><i class="icon-display4"></i> Dashboard </a>
                                                    </li>
                                            <li>
                            <a class="acc-parent active" href="#"><i class="icon-cart2"></i> Daftar Pesanan <span class="fa arrow"></span></a>
                                                            <ul>
                                                                    <li>
                                        <a href="http://kiezie.web.id/laundry/adminweb/pesanandalamproses/pesananbelumlunas/"><i class="fa fa-bars"></i> Belum Lunas</a>
                                    </li>
                                                                    <li>
                                        <a href="http://kiezie.web.id/laundry/adminweb/pesanandalamproses/pesananperludikirim/"><i class="fa fa-bars"></i> Perlu Dikirim</a>
                                    </li>
                                                                    <li>
                                        <a href="http://kiezie.web.id/laundry/adminweb/pesanandalamproses/pesanantelahdikirim/"><i class="fa fa-bars"></i> Telah Dikirim</a>
                                    </li>
                                                                    <li>
                                        <a href="http://kiezie.web.id/laundry/adminweb/pesanandalamproses/pesananselesai/"><i class="fa fa-bars"></i> Selesai</a>
                                    </li>
                                                                    <li>
                                        <a href="http://kiezie.web.id/laundry/adminweb/pesanandalamproses/pesanandibatalkan/"><i class="fa fa-bars"></i> Dibatalkan</a>
                                    </li>
                                                                </ul>
                                                    </li>
                                            <li>
                            <a class="acc-parent active" href="#"><i class="icon-users"></i> Pelanggan & Mitra <span class="fa arrow"></span></a>
                                                            <ul>
                                                                    <li>
                                        <a href="http://kiezie.web.id/laundry/adminweb/mitra/"><i class="fa fa-users4"></i> Mitra</a>
                                    </li>
                                                                    <li>
                                        <a href="http://kiezie.web.id/laundry/adminweb/customer/"><i class="fa fa-users4"></i> Pelanggan</a>
                                    </li>
                                                                </ul>
                                                    </li>
                                            <li class="active acc-parent-li">
                            <a class="acc-parent active" href="#"><i class="icon-book"></i> Produk & Informasi <span class="fa arrow"></span></a>
                                                            <ul>
                                                                    <li>
                                        <a href="http://kiezie.web.id/laundry/adminweb/product/"><i class="fa fa-archive"></i> Produk</a>
                                    </li>
                                                                    <li>
                                        <a href="http://kiezie.web.id/laundry/adminweb/informasi/"><i class="fa fa-info3"></i> Informasi</a>
                                    </li>
                                                                </ul>
                                                    </li>
                                            <li>
                            <a class="acc-parent active" href="#"><i class="icon-cog3"></i> Pengaturan <span class="fa arrow"></span></a>
                                                            <ul>
                                                                    <li>
                                        <a href="http://kiezie.web.id/laundry/adminweb/pengaturan_aplikasi/"><i class="fa fa-edit"></i> Pengaturan Aplikasi</a>
                                    </li>
                                                                    <li>
                                        <a href="http://kiezie.web.id/laundry/adminweb/pengaturan_website/"><i class="fa fa-edit"></i> Pengaturan Konten</a>
                                    </li>
                                                                </ul>
                                                    </li>
                                            <li>
                            <a class="acc-parent active" href="#"><i class="icon-users"></i> Managemen User <span class="fa arrow"></span></a>
                                                            <ul>
                                                                    <li>
                                        <a href="http://kiezie.web.id/laundry/adminweb/jenisuser/"><i class="fa fa-truck"></i> Grup User</a>
                                    </li>
                                                                    <li>
                                        <a href="http://kiezie.web.id/laundry/adminweb/pengguna/"><i class="fa fa-truck"></i> User</a>
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
						<li><a href="http://kiezie.web.id/laundry/adminweb">Beranda</a></li>
						<li><a href="http://kiezie.web.id/laundry/adminweb/dashboard/">Produk</a></li>
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
                                    <!---- BUKA ---->        
                                    <div class="form-group"> </div>
                                                    
                                    <div id="alert_error" class="form-group" style="display: none;">
                                        <div class="alert alert-danger">&nbsp;</div>
                                    </div>
                                
                                    <div class="form-group">
                                        <label class="control-label">Mitra:</label>
                                        <select id="mitra" name="mitra" class="form-control">
                                            <option value="0">-- Pilih Mitra --</option>
                                                                                        <option value="1"  selected="selected" >MAMA LAUNDRY</option>
                                                                                        <option value="3" >ARUM LAUNDRY</option>
                                                                                        <option value="4" >EDI LAUNDRY</option>
                                                                                        <option value="5" >JHONI LAUNDRY</option>
                                                                                        <option value="6" >MUAZ LAUNDRY</option>
                                                                                        <option value="7" >TSABITA LAUNDRY</option>
                                                                                        <option value="8" >QURROTA LAUNDRY</option>
                                                                                        <option value="9" >IZUMI LAUNDRY</option>
                                                                                        <option value="10" >AGA LAUNDRY</option>
                                                                                        <option value="11" >ABABIL LAUNDRY</option>
                                                                                        <option value="12" >YB LAUNDRY</option>
                                                                                        <option value="143" >ALI LAUNDRY</option>
                                                                                    </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="kode">Kode Produk:</label>
                                        <input type="text" value="004" class="form-control" name="kode" placeholder="" />
                                    </div>

                                    <div class="form-group">
                                        <label for="nama">Nama Produk:</label>
                                        <input type="text" value="SETRIKA KILOAN" class="form-control" name="nama" placeholder="" />
                                    </div>

                                    <div class="form-group">
                                        <label for="penjelasan">Penjelasan Produk:</label>
                                        <div class="summernote"></div>
                                    </div>

                                    <div class="form-group">
                                        <label for="satuan">Satuan:</label>
                                        <input type="text" value="Kg" class="form-control" name="satuan" placeholder="" />
                                    </div>

                                    <div class="form-group">
                                        <label for="harga_jual_umum">Harga Per Satuan:</label>
                                        <input type="text" value="5,000" class="form-control harga" name="harga_jual_umum" placeholder="" />
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
                                        <label for="photo">Foto Produk:</label>
                                        <input type="file" id="fileupload_foto_1" name="fileupload_foto_1" multiple />
                                    </div>

                                                                                                                    <div class="form-group">
                                            <img id="preview_foto_1" src="http://kiezie.web.id/laundry/uploads/produk/laundry-kiloan-depok-featured-2_1.jpg" style="height: 300px;" alt="1" />
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
                                                        <div id="i_loading" class="G-btn-animation" style="display: none;"><img src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/img/loading.gif" /></div>                  
                                                        <div id="btn_simpan" type="submit" class="btn btn-primary">Simpan</div>
                                                    </td>
                                                </tr>
                                            </tbody>                                
                                        </table>
                                    </div>
                                    <!---- TUTUP ---->	
                                </div>
                            </div>
                        </div>
                    </div>
                </div>		
		    </div>
	
		<!--Footer -->
		<footer class="footer-container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="footer-left">
                    <a href="http://kiezie.web.id/laundry" target="_blank">LAUNDRY</a>&nbsp;2020
                </div>
            </div>				
        </div>
    </div>
</footer>
		<!--/Footer-->
		
	</section>
	<!--/Page Container-->
    
    <a id="scrollTop" href="index1.htm#top"><i class="icon-arrow-up12"></i></a>	

<!-- Global scripts -->
<script src="http://kiezie.web.id/laundry/templates/back-end/penguin/js/jquery.js"></script>	
<script src="http://kiezie.web.id/laundry/templates/back-end/penguin/js/bootstrap.js"></script>
<script src="http://kiezie.web.id/laundry/templates/back-end/penguin/js/jquery.ui.js"></script>
<script src="http://kiezie.web.id/laundry/templates/back-end/penguin/js/nav.accordion.js"></script>	
<script src="http://kiezie.web.id/laundry/templates/back-end/penguin/js/hammerjs.js"></script>
<script src="http://kiezie.web.id/laundry/templates/back-end/penguin/js/jquery.hammer.js"></script>
<script src="http://kiezie.web.id/laundry/templates/back-end/penguin/js/scrollup.js"></script>	
<script src="http://kiezie.web.id/laundry/templates/back-end/penguin/js/jquery.slimscroll.js"></script>	
<script src="http://kiezie.web.id/laundry/templates/back-end/penguin/js/smart-resize.js"></script>
<script src="http://kiezie.web.id/laundry/templates/back-end/penguin/js/blockui.min.js"></script>		
<script src="http://kiezie.web.id/laundry/templates/back-end/penguin/js/wow.min.js"></script>					
<script src="http://kiezie.web.id/laundry/templates/back-end/penguin/js/fancybox.min.js"></script>
<script src="http://kiezie.web.id/laundry/templates/back-end/penguin/js/venobox.js"></script>
<script src="http://kiezie.web.id/laundry/templates/back-end/penguin/js/forms/uniform.min.js"></script>
<script src="http://kiezie.web.id/laundry/templates/back-end/penguin/js/forms/switchery.js"></script>
<script src="http://kiezie.web.id/laundry/templates/back-end/penguin/js/forms/select2.min.js"></script>	
<script src="http://kiezie.web.id/laundry/templates/back-end/penguin/js/core.js"></script>
<!-- /global scripts -->

<!-- Page scripts -->
<script src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/bootstrap-fileinput/js/fileinput.js"></script>
<script type="text/javascript" src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/js/jquery.input.formatter.js"></script>  

<!-- include summernote -->
<link rel="stylesheet" href="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/dist/summernote.css">
<script type="text/javascript" src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/dist/summernote.js"></script>
<script type="text/javascript" src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/dist/summernote-ext-video.js"></script> 
<link href="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/datepick/jquery.datepick.css" rel="stylesheet">
<script src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/datepick/jquery.plugin.js"></script>
<script src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/datepick/jquery.datepick.js"></script>


<script type="text/javascript">
            $(function () {           
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
	            
	            $(".summernote").code('');

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
	                var data = new FormData();
	                data.append('id', isEdit?'41':'');
	                data.append('id_member', $('[name=mitra]').val());
	                data.append('kode', $('[name=kode]').val());
	                data.append('nama', $('[name=nama]').val());
	                data.append('penjelasan', $('.summernote').summernote().code().replace(/\n/, '<br />'));

	                data.append('satuan', $('[name=satuan]').val());
	                data.append('harga_jual', ($('[name=harga_jual_umum]').val()).replace(/\,/g, ''));
					
	                data.append('minimum_pesan', ($('[name=minimum_pesan]').val()).replace(/\,/g, ''));               
	                data.append('harga_diskon', ($('[name=harga_diskon]').val()).replace(/\,/g, ''));
	                data.append('from_date_harga_diskon', $('[name=from_date_harga_diskon]').val());
	                data.append('to_date_harga_diskon', $('[name=to_date_harga_diskon]').val());
	                data.append('persen_diskon', $('[name=persen_diskon]').val());
	                data.append('from_date_persen_diskon', $('[name=from_date_persen_diskon]').val());
	                data.append('to_date_persen_diskon', $('[name=to_date_persen_diskon]').val());
	                
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
	                //console.log(changes_data);
	                data.append('changes', changes_data);
	                data.append('status', $('[name=status]').val());

	                //setLoading(true);
	                try {
					    window.cpjs.showProgressDialog(true);
					} catch(err) {
					    console.log(err.message);
					}

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
	                        $("#fileupload_gambar").val(e.target.result);
	                    }
	                    reader.readAsDataURL(input.files[id-1]);
	                }
	            }

				var files = new Array();
	            	                	                files[0] = 'laundry-kiloan-depok-featured-2_1.jpg';	            	                	                	            	                	                	            	                	                	            	                	                	            	                	                	            	                	                	            	                	                	            	                	                	            	                	                	            	                	                	            	                	                	            	                	                	            	                	                	            	                	                	            	                	                	            	                	                	            	                	                	            	                	                	            	                	                	            	            
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
                        url: 'http://kiezie.web.id/laundry/store/notifDataStore.php',
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
