<?php /*%%SmartyHeaderCode:13590729215ea4cb23d05501-07385934%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90363c0921f16b233db7c4161e67728fbfc835e3' => 
    array (
      0 => '../../templates/back-end/penguin/pengaturan_website/edit.html',
      1 => 1538456116,
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
  'nocache_hash' => '13590729215ea4cb23d05501-07385934',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ea509bc81afc3_38172316',
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ea509bc81afc3_38172316')) {function content_5ea509bc81afc3_38172316($_smarty_tpl) {?><!doctype html>
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
                                <span id="total_notif_belum_lunas" class="bubble">49</span>
                                <span style="color: #ffffff">Belum Bayar / KEEP </span></a>
                            </li>
                        
                        
                                                    <li class="dropdown-toggle hidden-xs" style="border-left: 1px solid #ffffff;">
                                <a href="http://kiezie.web.id/laundry/adminweb/pesanandalamproses/pesananperludikirim/" class="dropdown-toggle" style="width: 100%; padding-left: 10px; padding-right: 30px;"><i class="icon-box"></i>
                                <span id="total_notif_perlu_kemas" class="bubble">20</span>
                                <span style="color: #ffffff">Perlu Kemas </span></a>
                            </li>
                        
                                                    <li class="dropdown-toggle hidden-xs" style="border-left: 1px solid #ffffff;">
                                <a href="http://kiezie.web.id/laundry/adminweb/customer/" class="dropdown-toggle" style="width: 100%; padding-left: 10px; padding-right: 30px;"><i class="icon-users4"></i>
                                <span id="total_notif_pelanggan_baru" class="bubble">104</span>
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
                                            <li>
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
                                            <li class="active acc-parent-li">
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
                <i class="icon-table position-left"></i> Pengaturan
            </div>
            <ul class="breadcrumb">
                <li><a href="http://kiezie.web.id/laundry/adminweb">Beranda</a></li>
                <li><a href="http://kiezie.web.id/laundry/adminweb/pengaturan_website/">Pengaturan</a></li>
                <li class="active">Edit Banner</li>
            </ul>					
        </div>
    </div>		
    <!--/Page Header-->

    <!--Page Content-->
    <div id="wrapper" class="container-fluid page-content">				
        <div class="panel panel-flat" style="margin: 5px;">
            <div class="form-group panel-body no-padding-bottom">

                <div id="alert_error" class="form-group" style="display: none;">
                    <div class="alert alert-danger">&nbsp;</div>
                </div>

                <div class="form-group">
                    <label for="nama">Nama Banner:</label>
                    <input type="text" value="Pempek Atha" class="form-control" name="nama" placeholder="" />
                </div>
                
                <div class="form-group">
                    <label for="banner">Banner:</label>                        
                    <style type="text/css">
                        #div-banner .cropit-image-preview {
                            margin-bottom: 5px;
                            background-color: #a6bac4;
                            width: 870px;
                            height: 473px;
                            cursor: move;
                        }
                        #div-banner .H-new-kol-post-img {
                            margin-bottom: 5px;
                            width: 870px;
                            height: 473px;                                
                        }
                    </style>
                    <div id="div-banner" class="H-new-kol-post-img image-editor-banner">
                        <input id="fileupload_banner" type="file" name="fileupload_banner" style="display:none;" class="cropit-image-input" />
                        <div class="cropit-image-preview"></div>
                    </div>
                    <div id="upload_banner" class="btn btn-primary">Upload</div>
                </div>

                <div class="form-group">
                    <label for="status">Status:</label>
                    <select class="form-control" name="status">
                        <option value="Y" >Aktif</option>
                        <option value="N"  selected="selected" >Tidak Aktif</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="kategori">Kategori Produk:</label>
                    <select multiple class="form-control" name="id_kategori" style="height: 200px;">
                                                    <option style="font-weight: bold;" value="38" >Beauty and Care</option>                                        
                                                    <option style="font-weight: bold;" value="12" >Elektronik</option>                                        
                                                    <option  value="32" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Baterai</option>                                        
                                                    <option  value="25" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CD, VCD, DVD, BLUE-Ray Player</option>                                        
                                                    <option  value="30" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Elektronik Lainnya</option>                                        
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
                                                    <option style="font-weight: bold;" value="2"  selected="selected" >Kuliner</option>                                        
                                                    <option style="font-weight: bold;" value="20" >Mobil dan aksesoris</option>                                        
                                                    <option style="font-weight: bold;" value="21" >Motor</option>                                        
                                                    <option style="font-weight: bold;" value="15" >Olah Raga</option>                                        
                                                    <option style="font-weight: bold;" value="18" >Perlengkapan Bayi</option>                                        
                                                    <option style="font-weight: bold;" value="23" >Perlengkapan Kantor</option>                                        
                                                    <option style="font-weight: bold;" value="19" >Rumah Tangga</option>                                        
                                                    <option style="font-weight: bold;" value="1" >Second Pede</option>                                        
                                                    <option style="font-weight: bold;" value="16" >Sepeda</option>                                        
                                                    
                    </select>
                    <label>Gunakan tombol Ctrl untuk pilih lebih dari 1 kategori.
                </div>
                
                <div class="form-group">
                    <table>
                        <tbody>
                            <tr>
                                <td width="100%">&nbsp;</td> 
                                <td nowrap>
                                    <div id="i_loading" class="G-btn-animation" style="display: none;"><img src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/img/loading.gif" /></div>                  
                                    <div id="btn_submit"  class="btn btn-primary">Simpan</div>
                                    <a id="btn_batal"  href="list.php?tab=banner" class="btn btn-warning">Batal</a>                                                        
                                </td>
                            </tr>
                        </tbody>                                
                    </table>
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
                    <a href="http://kiezie.web.id/laundry" target="_blank">LAUNDRY</a>&nbsp;2020
                </div>
            </div>				
        </div>
    </div>
</footer>
    <!--/Footer-->

</section>
<!--/Page Container-->

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
<script src="http://kiezie.web.id/laundry/templates/back-end/penguin/js/tables/datatables/datatables.min.js"></script>
<script src="http://kiezie.web.id/laundry/templates/back-end/penguin/js/pages/datatable_basic.js"></script>
<script src="https://www.google.com/jsapi"></script>
<script src="http://kiezie.web.id/laundry/templates/back-end/penguin/js/pages/dashboard_minimalistic.js"></script>
<script type="text/javascript" src="http://kiezie.web.id/laundry/templates/back-end/penguin/js/jquery.cropit.js"></script>  
        

    <script type="text/javascript">
        $(function () {           

            var isEdit = true;

            var setLoading = function(isLoading) {
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

            $('#upload_banner').click(function(){
                $('#fileupload_banner').trigger('click'); 
                return false;
            });
            
            $('.image-editor-banner').cropit({
                smallImage: 'stretch',
                imageState: {
                    src: 'http://kiezie.web.id/laundry/uploads/banner/7314.png'
                }            });
            
            var setErrorMessage = function(message) {

                $('#alert_error .alert').text(message);
                $('#alert_error').show('slow');
                setTimeout(function() {
                    $('#alert_error').hide('slow');
                }, 5000);

                $("body, html").animate({ 
                    scrollTop: $('#wrapper').offset().top 
                }, 600);
            };

            $('#btn_submit').click(function() {
               
                var data = new FormData();
                data.append('id', isEdit?'5':'');
                data.append('nama', $('[name=nama]').val());
                var imageDataBanner = $('.image-editor-banner').cropit('export');
                data.append('filename_banner', imageDataBanner==undefined?'':imageDataBanner);
                data.append('is_aktif', $('[name=status]').val());
                var kategori = $('[name=id_kategori]').val();
                
                sid_kategori = '';
                for(var key in kategori) {
                    sid_kategori+=(key>0?',':'')+kategori[key]
                }
                data.append('id_kategori', sid_kategori);

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
                            window.location = 'list.php?tab=banner';
                        } else {
                            setErrorMessage(data['message']);                        
                        }
                    }, 

                    error: function() {
                        setLoading(false);
                        setErrorMessage('Kesalahan server. Mohon diulang kembali!');
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
