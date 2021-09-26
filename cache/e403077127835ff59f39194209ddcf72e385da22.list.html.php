<?php /*%%SmartyHeaderCode:21358101405ee9cc9edea591-08123016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e403077127835ff59f39194209ddcf72e385da22' => 
    array (
      0 => '../../templates/back-end/penguin/pengaturan_aplikasi/list.html',
      1 => 1592350429,
      2 => 'file',
    ),
    'c0ded865f1d2f924ec05fd41210cb75936473b98' => 
    array (
      0 => '/home/u6060452/public_html/bekamonline/templates/back-end/penguin/includes/head.html',
      1 => 1592350430,
      2 => 'file',
    ),
    '7c8d6ed8746194223c9a7cfc28f2f68d93f82d3d' => 
    array (
      0 => '/home/u6060452/public_html/bekamonline/templates/back-end/penguin/includes/sidebar.html',
      1 => 1592350430,
      2 => 'file',
    ),
    '2a0257aa7791b611672bc7d682c88482223222b1' => 
    array (
      0 => '/home/u6060452/public_html/bekamonline/templates/back-end/penguin/includes/footer.html',
      1 => 1592350430,
      2 => 'file',
    ),
    '052086c5436c251ecb7814ad5937b05a1f5d5589' => 
    array (
      0 => '/home/u6060452/public_html/bekamonline/templates/back-end/penguin/includes/footer_js.html',
      1 => 1592350430,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21358101405ee9cc9edea591-08123016',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5eebf4d083a254_06069483',
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eebf4d083a254_06069483')) {function content_5eebf4d083a254_06069483($_smarty_tpl) {?><!doctype html>
<html lang="en">
    <head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>BEKAM ONLINE</title>	
	<link href="http://kiezie.web.id/bekamonline/templates/back-end/penguin/assets/images/favicon.ico" rel="icon" type="image/png">
	
	<!-- Global stylesheets -->	
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
	<link type="text/css" rel="stylesheet" href="http://kiezie.web.id/bekamonline/templates/back-end/penguin/assets/fonts/fonts.css">
        <link type="text/css" rel="stylesheet" href="http://kiezie.web.id/bekamonline/templates/back-end/penguin/assets/icons/icomoon/icomoon.css">
        <link type="text/css" rel="stylesheet" href="http://kiezie.web.id/bekamonline/templates/back-end/penguin/css/animate.min.css">
	<link type="text/css" rel="stylesheet" href="http://kiezie.web.id/bekamonline/templates/back-end/penguin/css/bootstrap.css">   
	<link type="text/css" rel="stylesheet" href="http://kiezie.web.id/bekamonline/templates/back-end/penguin/css/core.css">	
	<link type="text/css" rel="stylesheet" href="http://kiezie.web.id/bekamonline/templates/back-end/penguin/css/layout.css">	
	<link type="text/css" rel="stylesheet" href="http://kiezie.web.id/bekamonline/templates/back-end/penguin/css/bootstrap-extended.css">	    
	<link type="text/css" rel="stylesheet" href="http://kiezie.web.id/bekamonline/templates/back-end/penguin/css/components.css">
	<link type="text/css" rel="stylesheet" href="http://kiezie.web.id/bekamonline/templates/back-end/penguin/css/plugins.css">
	<link type="text/css" rel="stylesheet" href="http://kiezie.web.id/bekamonline/templates/back-end/penguin/css/loaders.css">
	<link type="text/css" rel="stylesheet" href="http://kiezie.web.id/bekamonline/templates/back-end/penguin/css/responsive.css">
	<link type="text/css" rel="stylesheet" href="http://kiezie.web.id/bekamonline/templates/back-end/penguin/css/color-system.css">		
	<link type="text/css" rel="stylesheet" href="http://kiezie.web.id/bekamonline/templates/back-end/penguin/css/fancybox/jquery.fancybox.css">
	<link type="text/css" rel="stylesheet" href="http://kiezie.web.id/bekamonline/templates/back-end/penguin/assets/sweetalert2/sweetalert2.min.css">
	<link type="text/css" rel="stylesheet" href="http://kiezie.web.id/bekamonline/templates/back-end/penguin/assets/bootstrap-fileinput/css/fileinput.min.css">
	<link type="text/css" rel="stylesheet" href="http://kiezie.web.id/bekamonline/templates/back-end/penguin/css/burnt_sienna_light.css">	
        <link type="text/css" rel="stylesheet" href="http://kiezie.web.id/bekamonline/templates/back-end/penguin/css/AdminLTE.css" />
	<link type="text/css" rel="stylesheet" href="0" id="theme">
	<script src="http://kiezie.web.id/bekamonline/templates/back-end/penguin/assets/sweetalert2/sweetalert2.min.js"></script>
	<script>
		var base_tpl_url = "http://kiezie.web.id/bekamonline/templates/back-end/penguin/css/themes/";
		var base_url = "http://kiezie.web.id/bekamonline/";
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
                                <a href="http://kiezie.web.id/bekamonline/adminweb/pesanandalamproses/pesananbelumlunas/" class="dropdown-toggle" style="width: 100%; padding-left: 10px; padding-right: 30px;"><i class="icon-cart"></i>
                                <span id="total_notif_belum_lunas" class="bubble">57</span>
                                <span style="color: #ffffff">Belum Bayar / KEEP </span></a>
                            </li>
                        
                        
                                                    <li class="dropdown-toggle hidden-xs" style="border-left: 1px solid #ffffff;">
                                <a href="http://kiezie.web.id/bekamonline/adminweb/pesanandalamproses/pesananperludikirim/" class="dropdown-toggle" style="width: 100%; padding-left: 10px; padding-right: 30px;"><i class="icon-box"></i>
                                <span id="total_notif_perlu_kemas" class="bubble">20</span>
                                <span style="color: #ffffff">Perlu Kemas </span></a>
                            </li>
                        
                                                    <li class="dropdown-toggle hidden-xs" style="border-left: 1px solid #ffffff;">
                                <a href="http://kiezie.web.id/bekamonline/adminweb/customer/" class="dropdown-toggle" style="width: 100%; padding-left: 10px; padding-right: 30px;"><i class="icon-users4"></i>
                                <span id="total_notif_pelanggan_baru" class="bubble">112</span>
                                <span style="color: #ffffff;">Pelanggan Baru</span></a>
                            </li>
                        
                        		

                        <li class="dropdown user-dropdown" style="border-left: 1px solid #ffffff;padding-left: 10px">
                            <a href="http://kiezie.web.id/bekamonline/adminweb#" class="btn-user dropdown-toggle hidden-xs" data-toggle="dropdown"><img src="http://kiezie.web.id/bekamonline/templates/back-end/penguin/assets/images/faces/face1.png" class="img-circle user" alt=""/></a>
                            <a href="http://kiezie.web.id/bekamonline/adminweb#" class="dropdown-toggle visible-xs" data-toggle="dropdown"><i class="icon-more"></i></a>
                            <div class="dropdown-menu">	
                                <div class="text-center"><img src="http://kiezie.web.id/bekamonline/templates/back-end/penguin/assets/images/faces/face1.png" class="img-circle img-70" alt=""/></div>
                                <h5 class="text-center"><b>Hi! Administrator</b></h5>
                                <ul class="more-apps">
                                        <!-- li><a href="http://kiezie.web.id/bekamonline/templates/back-end/penguin/material/user_profile_social.html"><i class="icon-profile"></i> My profile</a></li -->
                                        <!-- li><a href="http://kiezie.web.id/bekamonline/adminweb#"><i class="icon-envelop5"></i> Inbox <span class="badge badge-danger pull-right">4</span></a></li -->
                                        <li><a href="http://kiezie.web.id/bekamonline/adminweb/editprofile/"><i class="icon-profile"></i> My Profile</a></li>
                                        <li><a href="http://kiezie.web.id/bekamonline/adminweb/gantipassword/edit.php"><i class="icon-lock5"></i> Ganti Password</a></li>
                                </ul>
                                <div class="text-center"><a href="http://kiezie.web.id/bekamonline/adminweb/logout.php" class="btn btn-sm btn-info"><i class="icon-exit3 i-16 position-left"></i> Logout</a></div>
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
                    <img src="http://kiezie.web.id/bekamonline/templates/back-end/penguin/assets/images/faces/face1.png" alt="admin" class="img-circle" />
                </div>

                <div class="admin-user-info">
                    <ul class="user-info">
                        <li><a href="http://kiezie.web.id/bekamonline/adminweb/logout.php" class="text-semibold text-size-large">Administrator</a></li>
                        <li><a href="http://kiezie.web.id/bekamonline/adminweb/logout.php"><small>-- subtitle here --</small></a></li>
                    </ul>
                    <div class="logout-icon"><a href="http://kiezie.web.id/bekamonline/adminweb/logout.php"><i class="icon-exit2"></i></a></div>
                </div>
            </div>				
        </div>

        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active fadeIn" id="menu">
                <ul class="sidebar-accordion">
                    <li><br />&nbsp;&nbsp;&nbsp;</li>
                                            <li>
                            <a  href="http://kiezie.web.id/bekamonline/adminweb/dashboard/"><i class="icon-display4"></i> Dashboard </a>
                                                    </li>
                                            <li>
                            <a class="acc-parent active" href="#"><i class="icon-cart2"></i> Daftar Pesanan <span class="fa arrow"></span></a>
                                                            <ul>
                                                                    <li>
                                        <a href="http://kiezie.web.id/bekamonline/adminweb/pesanandalamproses/pesananbelumlunas/"><i class="fa fa-bars"></i> Belum Lunas</a>
                                    </li>
                                                                    <li>
                                        <a href="http://kiezie.web.id/bekamonline/adminweb/pesanandalamproses/pesananperludikirim/"><i class="fa fa-bars"></i> Perlu Dikirim</a>
                                    </li>
                                                                    <li>
                                        <a href="http://kiezie.web.id/bekamonline/adminweb/pesanandalamproses/pesanantelahdikirim/"><i class="fa fa-bars"></i> Telah Dikirim</a>
                                    </li>
                                                                    <li>
                                        <a href="http://kiezie.web.id/bekamonline/adminweb/pesanandalamproses/pesananselesai/"><i class="fa fa-bars"></i> Selesai</a>
                                    </li>
                                                                    <li>
                                        <a href="http://kiezie.web.id/bekamonline/adminweb/pesanandalamproses/pesanandibatalkan/"><i class="fa fa-bars"></i> Dibatalkan</a>
                                    </li>
                                                                </ul>
                                                    </li>
                                            <li>
                            <a class="acc-parent active" href="#"><i class="icon-users"></i> Pelanggan & Mitra <span class="fa arrow"></span></a>
                                                            <ul>
                                                                    <li>
                                        <a href="http://kiezie.web.id/bekamonline/adminweb/mitra/"><i class="fa fa-users4"></i> Mitra</a>
                                    </li>
                                                                    <li>
                                        <a href="http://kiezie.web.id/bekamonline/adminweb/customer/"><i class="fa fa-users4"></i> Pelanggan</a>
                                    </li>
                                                                </ul>
                                                    </li>
                                            <li>
                            <a class="acc-parent active" href="#"><i class="icon-book"></i> Produk & Informasi <span class="fa arrow"></span></a>
                                                            <ul>
                                                                    <li>
                                        <a href="http://kiezie.web.id/bekamonline/adminweb/product/"><i class="fa fa-archive"></i> Produk</a>
                                    </li>
                                                                    <li>
                                        <a href="http://kiezie.web.id/bekamonline/adminweb/informasi/"><i class="fa fa-info3"></i> Informasi</a>
                                    </li>
                                                                </ul>
                                                    </li>
                                            <li class="active acc-parent-li">
                            <a class="acc-parent active" href="#"><i class="icon-cog3"></i> Pengaturan <span class="fa arrow"></span></a>
                                                            <ul>
                                                                    <li>
                                        <a href="http://kiezie.web.id/bekamonline/adminweb/pengaturan_aplikasi/"><i class="fa fa-edit"></i> Pengaturan Aplikasi</a>
                                    </li>
                                                                    <li>
                                        <a href="http://kiezie.web.id/bekamonline/adminweb/pengaturan_website/"><i class="fa fa-edit"></i> Pengaturan Konten</a>
                                    </li>
                                                                </ul>
                                                    </li>
                                            <li>
                            <a class="acc-parent active" href="#"><i class="icon-users"></i> Managemen User <span class="fa arrow"></span></a>
                                                            <ul>
                                                                    <li>
                                        <a href="http://kiezie.web.id/bekamonline/adminweb/jenisuser/"><i class="fa fa-truck"></i> Grup User</a>
                                    </li>
                                                                    <li>
                                        <a href="http://kiezie.web.id/bekamonline/adminweb/pengguna/"><i class="fa fa-truck"></i> User</a>
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
                <li><a href="http://kiezie.web.id/bekamonline/adminweb">Beranda</a></li>
                <li><a href="http://kiezie.web.id/bekamonline/adminweb/pengaturan_aplikasi/">Pengaturan</a></li>
                <li class="active">Pengaturan Aplikasi</li>
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
                            <a href="#general1" data-toggle="tab"><b>GENERAL 1</b></a>
                        </li>                                 
                        <li>
                            <a href="#general2" data-toggle="tab"><b>GENERAL 2</b></a>
                        </li>                                
                        <li>
                            <a href="#shortcut" data-toggle="tab"><b>SHORTCUT</b></a>
                        </li>                                
                        <li>
                            <a href="#updateapp" data-toggle="tab"><b>UPDATE APP</b></a>
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
                    <div class="tab-pane fade active in" id="general1">
                        
                        <div class="form-group">
                            <label for="admin">Avatar:</label>                        
                            <style type="text/css">
                                .preview-avatar {
                                    border:1px solid #a6bac4;
                                    width: 180px;
                                    height: 180px;
                                    cursor: move;
                                }

                                .post-img-avatar {
                                    width: 180px;
                                    height: 180px;
                                }
                            </style>
                            <div class="image-editor-avatar post-img-avatar">
                                <input id="fileupload_avatar" type="file" name="fileupload_avatar" style="display:none;" class="cropit-image-input" />
                                <div class="cropit-image-preview preview-avatar"></div>
                            </div>
                            <label>Ukuran 180 X 180 px</label><br />   
                            <div id="upload_avatar" class="btn btn-primary">Upload</div>
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
                        
                        <div class="form-group">
                            <label for="bg">Splash Screen:</label>                        
                            <style type="text/css">
                                .preview-bg {
                                    border:1px solid #a6bac4;
                                    width: 320px;
                                    height: 569px;
                                    cursor: move;
                                }

                                .post-img-bg {
                                    width: 320px;
                                    height: 569px;
                                }
                            </style>

                            <div class="image-editor-bg post-img-bg">
                                <input id="fileupload_bg" type="file" name="fileupload_bg" style="display:none;" class="cropit-image-input" />
                                <div class="cropit-image-preview preview-bg"></div>
                            </div>

                            <label>Ukuran 320 X 569 px</label><br />   
                            <div id="upload_bg" class="btn btn-primary">Upload</div>
                        </div>
                        
                        <div class="form-group">&nbsp;</div>

                        <div class="form-group">
                            <div id="i_loading_general1" class="G-btn-animation" style="display: none;"><img src="http://kiezie.web.id/bekamonline/templates/back-end/penguin/assets/img/loading.gif" /></div>                  
                            <div id="btn_simpan_general1" class="btn btn-primary">Update</div>                        </div>
                        
                    </div>
                    
                    <div class="tab-pane fade" id="general2">
                        
                        <div class="form-group">
                            <label for="landing_page">Landing Page:</label>
                            <table>
                                <tr>
                                    <td>
                                        <label><input type="radio" name="landing_page" value="0"  />&nbsp;&nbsp;<span class="label bg-blue" style="font-size: 9pt;">BERANDA</span>&nbsp;&nbsp;</label>
                                        <label><input type="radio" name="landing_page" value="1" checked />&nbsp;&nbsp;<span class="label bg-blue" style="font-size: 9pt;">LOGIN</span>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <div class="form-group">
                            <label for="tampilkan_shortcut">Tampilkan Shortcut:</label>
                            <table>
                                <tr>
                                    <td>
                                        <label><input type="radio" name="tampilkan_shortcut" value="1"  />&nbsp;&nbsp;<span class="label bg-blue" style="font-size: 9pt;">YA</span>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                        <label><input type="radio" name="tampilkan_shortcut" value="0" checked />&nbsp;&nbsp;<span class="label bg-blue" style="font-size: 9pt;">TIDAK</span>&nbsp;&nbsp;</label>
                                    </td>
                                </tr>
                            </table>        
                        </div>

                        <div class="form-group">
                            <label for="tampilkan_kategori">Tampilkan Kategori:</label>
                            <table>
                                <tr>
                                    <td>
                                        <label><input type="radio" name="tampilkan_kategori" value="1" checked />&nbsp;&nbsp;<span class="label bg-blue" style="font-size: 9pt;">YA</span>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                        <label><input type="radio" name="tampilkan_kategori" value="0"  />&nbsp;&nbsp;<span class="label bg-blue" style="font-size: 9pt;">TIDAK</span>&nbsp;&nbsp;</label>
                                    </td>
                                </tr>
                            </table> 
                        </div>


                        <div class="form-group">
                            <label for="tampilkan_induk_kategori">Tampilkan Induk Kategori:</label>
                            <table>
                                <tr>
                                    <td>
                                        <label><input type="radio" name="tampilkan_induk_kategori" value="1"  />&nbsp;&nbsp;<span class="label bg-blue" style="font-size: 9pt;">YA</span>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                        <label><input type="radio" name="tampilkan_induk_kategori" value="0" checked />&nbsp;&nbsp;<span class="label bg-blue" style="font-size: 9pt;">TIDAK</span>&nbsp;&nbsp;</label>
                                    </td>
                                </tr>
                            </table> 
                        </div>

                        <div class="form-group">&nbsp;</div>

                        <div class="form-group">
                            <div id="i_loading_general2" class="G-btn-animation" style="display: none;"><img src="http://kiezie.web.id/bekamonline/templates/back-end/penguin/assets/img/loading.gif" /></div>                  
                            <div id="btn_simpan_general2" class="btn btn-primary">Update</div>                        </div>
                    </div>
                    
                    <div class="tab-pane fade" id="shortcut">
                        
                        <div class="panel-body no-padding-bottom">
                            <div class="input-group">
                                <input type="text" value="" class="form-control" name="query" id="query" placeholder="Masukan kata kunci pencarian..." />
                                <span class="input-group-btn"><div id="btn_cari" type="submit" class="btn btn-default">Cari</div>
                                <a class="btn btn-default" href="list.php?tab=shortcut">Reset</a></span>                                                  
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
                                        <th width="1%"><input type="checkbox" id="select_all" /></th>
                                        <th width="1%"><div style="text-align: center;">No.</div></th>
                                        <th width="10%"><div style="text-align: center;">Logo</div></th>
                                        <th width="30%"><div style="text-align: left;">Nama Shortcut</div></th>
                                        <th width="30%"><div style="text-align: left;">Tujuan Shortcut</div></th>
                                        <th width="10%"><div style="text-align: left;">Aksi</div></th>
                                    </tr>
                                </thead>

                                <tbody>
                                                                                                            
                                        <tr id="baris_12">
                                            <td align="center"><input type="checkbox" id_select="12" name="select_12" class="select" /></td>
                                            <td align="center">1</td>
                                            <td align="center">
                                                <img src="http://kiezie.web.id/bekamonline/uploads/shortcut/pesawat_6123.png" width="35" />
                                            </td>
                                            <td align="left">Pesawat</td>
                                            <td align="left">Beranda</td>
                                            <td>
                                                <div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="12" class="btn btn-success edit">Edit</div>                                                    <div id_select="12" class="btn btn-danger hapus">Hapus</div>                                                         
                                                </div>
                                            </td>                                          
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_11">
                                            <td align="center"><input type="checkbox" id_select="11" name="select_11" class="select" /></td>
                                            <td align="center">2</td>
                                            <td align="center">
                                                <img src="http://kiezie.web.id/bekamonline/uploads/shortcut/tiket-ka_6872.png" width="35" />
                                            </td>
                                            <td align="left">Tiket KA</td>
                                            <td align="left">Beranda</td>
                                            <td>
                                                <div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="11" class="btn btn-success edit">Edit</div>                                                    <div id_select="11" class="btn btn-danger hapus">Hapus</div>                                                         
                                                </div>
                                            </td>                                          
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_10">
                                            <td align="center"><input type="checkbox" id_select="10" name="select_10" class="select" /></td>
                                            <td align="center">3</td>
                                            <td align="center">
                                                <img src="http://kiezie.web.id/bekamonline/uploads/shortcut/indi-home_6419.png" width="35" />
                                            </td>
                                            <td align="left">Indi Home</td>
                                            <td align="left">Beranda</td>
                                            <td>
                                                <div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="10" class="btn btn-success edit">Edit</div>                                                    <div id_select="10" class="btn btn-danger hapus">Hapus</div>                                                         
                                                </div>
                                            </td>                                          
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_9">
                                            <td align="center"><input type="checkbox" id_select="9" name="select_9" class="select" /></td>
                                            <td align="center">4</td>
                                            <td align="center">
                                                <img src="http://kiezie.web.id/bekamonline/uploads/shortcut/tv-kabel_9361.png" width="35" />
                                            </td>
                                            <td align="left">TV Kabel</td>
                                            <td align="left">Beranda</td>
                                            <td>
                                                <div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="9" class="btn btn-success edit">Edit</div>                                                    <div id_select="9" class="btn btn-danger hapus">Hapus</div>                                                         
                                                </div>
                                            </td>                                          
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_8">
                                            <td align="center"><input type="checkbox" id_select="8" name="select_8" class="select" /></td>
                                            <td align="center">5</td>
                                            <td align="center">
                                                <img src="http://kiezie.web.id/bekamonline/uploads/shortcut/game-online_8136.png" width="35" />
                                            </td>
                                            <td align="left">Game Online</td>
                                            <td align="left">Beranda</td>
                                            <td>
                                                <div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="8" class="btn btn-success edit">Edit</div>                                                    <div id_select="8" class="btn btn-danger hapus">Hapus</div>                                                         
                                                </div>
                                            </td>                                          
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_7">
                                            <td align="center"><input type="checkbox" id_select="7" name="select_7" class="select" /></td>
                                            <td align="center">6</td>
                                            <td align="center">
                                                <img src="http://kiezie.web.id/bekamonline/uploads/shortcut/pdam_8263.png" width="35" />
                                            </td>
                                            <td align="left">PDAM</td>
                                            <td align="left">Beranda</td>
                                            <td>
                                                <div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="7" class="btn btn-success edit">Edit</div>                                                    <div id_select="7" class="btn btn-danger hapus">Hapus</div>                                                         
                                                </div>
                                            </td>                                          
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_6">
                                            <td align="center"><input type="checkbox" id_select="6" name="select_6" class="select" /></td>
                                            <td align="center">7</td>
                                            <td align="center">
                                                <img src="http://kiezie.web.id/bekamonline/uploads/shortcut/pln_4237.png" width="35" />
                                            </td>
                                            <td align="left">PLN</td>
                                            <td align="left">Beranda</td>
                                            <td>
                                                <div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="6" class="btn btn-success edit">Edit</div>                                                    <div id_select="6" class="btn btn-danger hapus">Hapus</div>                                                         
                                                </div>
                                            </td>                                          
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_5">
                                            <td align="center"><input type="checkbox" id_select="5" name="select_5" class="select" /></td>
                                            <td align="center">8</td>
                                            <td align="center">
                                                <img src="http://kiezie.web.id/bekamonline/uploads/shortcut/token-listrik_6374.png" width="35" />
                                            </td>
                                            <td align="left">Token Listrik</td>
                                            <td align="left">Beranda</td>
                                            <td>
                                                <div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="5" class="btn btn-success edit">Edit</div>                                                    <div id_select="5" class="btn btn-danger hapus">Hapus</div>                                                         
                                                </div>
                                            </td>                                          
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_4">
                                            <td align="center"><input type="checkbox" id_select="4" name="select_4" class="select" /></td>
                                            <td align="center">9</td>
                                            <td align="center">
                                                <img src="http://kiezie.web.id/bekamonline/uploads/shortcut/telepon_2946.png" width="35" />
                                            </td>
                                            <td align="left">Telepon</td>
                                            <td align="left">Beranda</td>
                                            <td>
                                                <div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="4" class="btn btn-success edit">Edit</div>                                                    <div id_select="4" class="btn btn-danger hapus">Hapus</div>                                                         
                                                </div>
                                            </td>                                          
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_3">
                                            <td align="center"><input type="checkbox" id_select="3" name="select_3" class="select" /></td>
                                            <td align="center">10</td>
                                            <td align="center">
                                                <img src="http://kiezie.web.id/bekamonline/uploads/shortcut/paket-data_7639.png" width="35" />
                                            </td>
                                            <td align="left">Paket Data</td>
                                            <td align="left">Beranda</td>
                                            <td>
                                                <div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="3" class="btn btn-success edit">Edit</div>                                                    <div id_select="3" class="btn btn-danger hapus">Hapus</div>                                                         
                                                </div>
                                            </td>                                          
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_2">
                                            <td align="center"><input type="checkbox" id_select="2" name="select_2" class="select" /></td>
                                            <td align="center">11</td>
                                            <td align="center">
                                                <img src="http://kiezie.web.id/bekamonline/uploads/shortcut/pulsa_9317.png" width="35" />
                                            </td>
                                            <td align="left">Pulsa</td>
                                            <td align="left">Beranda</td>
                                            <td>
                                                <div style="text-align: center;  white-space: nowrap;">
                                                    <div id_select="2" class="btn btn-success edit">Edit</div>                                                    <div id_select="2" class="btn btn-danger hapus">Hapus</div>                                                         
                                                </div>
                                            </td>                                          
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_1">
                                            <td align="center"><input type="checkbox" id_select="1" name="select_1" class="select" /></td>
                                            <td align="center">12</td>
                                            <td align="center">
                                                <img src="http://kiezie.web.id/bekamonline/uploads/shortcut/deposit_2318.png" width="35" />
                                            </td>
                                            <td align="left">Deposit</td>
                                            <td align="left">Beranda</td>
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
                    
                    <div class="tab-pane fade" id="updateapp">
                        <div class="form-group">
                            <label for="app_ver_no">Nomer Versi Update:</label>
                            <input type="text" value="1" class="form-control" name="app_ver_no" placeholder="" />
                        </div>

                        <div class="form-group">
                            <label for="app_ver_name">Nama Versi Update:</label>
                            <input type="text" value="1.0.0" class="form-control" name="app_ver_name" placeholder="" />
                        </div> 
                         
                        <div class="form-group">
                            <label for="app_desc">Update Description:</label>
                            <textarea class="form-control" name="app_desc" style="height: 150px;" placeholder="">Tes
1. satu
2. dua
3. tiga</textarea>
                        </div>
                         
                        <div class="form-group">&nbsp;</div>

                        <div class="form-group">
                            <div id="i_loading_updateapp" class="G-btn-animation" style="display: none;"><img src="http://kiezie.web.id/bekamonline/templates/back-end/penguin/assets/img/loading.gif" /></div>                  
                            <div id="btn_simpan_updateapp" class="btn btn-primary">Update</div>                        </div>
                    
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
                    <a href="http://kiezie.web.id/bekamonline" target="_blank">BEKAM ONLINE</a>&nbsp;2020
                </div>
            </div>				
        </div>
    </div>
</footer>
    <!--/Footer-->

</section>
<!--/Page Container-->

<!-- Global scripts -->
<script src="http://kiezie.web.id/bekamonline/templates/back-end/penguin/js/jquery.js"></script>	
<script src="http://kiezie.web.id/bekamonline/templates/back-end/penguin/js/bootstrap.js"></script>
<script src="http://kiezie.web.id/bekamonline/templates/back-end/penguin/js/jquery.ui.js"></script>
<script src="http://kiezie.web.id/bekamonline/templates/back-end/penguin/js/nav.accordion.js"></script>	
<script src="http://kiezie.web.id/bekamonline/templates/back-end/penguin/js/hammerjs.js"></script>
<script src="http://kiezie.web.id/bekamonline/templates/back-end/penguin/js/jquery.hammer.js"></script>
<script src="http://kiezie.web.id/bekamonline/templates/back-end/penguin/js/scrollup.js"></script>	
<script src="http://kiezie.web.id/bekamonline/templates/back-end/penguin/js/jquery.slimscroll.js"></script>	
<script src="http://kiezie.web.id/bekamonline/templates/back-end/penguin/js/smart-resize.js"></script>
<script src="http://kiezie.web.id/bekamonline/templates/back-end/penguin/js/blockui.min.js"></script>		
<script src="http://kiezie.web.id/bekamonline/templates/back-end/penguin/js/wow.min.js"></script>					
<script src="http://kiezie.web.id/bekamonline/templates/back-end/penguin/js/fancybox.min.js"></script>
<script src="http://kiezie.web.id/bekamonline/templates/back-end/penguin/js/venobox.js"></script>
<script src="http://kiezie.web.id/bekamonline/templates/back-end/penguin/js/forms/uniform.min.js"></script>
<script src="http://kiezie.web.id/bekamonline/templates/back-end/penguin/js/forms/switchery.js"></script>
<script src="http://kiezie.web.id/bekamonline/templates/back-end/penguin/js/forms/select2.min.js"></script>	
<script src="http://kiezie.web.id/bekamonline/templates/back-end/penguin/js/core.js"></script>
<!-- /global scripts -->

<script type="text/javascript" src="http://kiezie.web.id/bekamonline/templates/back-end/penguin/assets/js/jquery.cropit.js"></script> 
<!-- iCheck -->
<link rel="stylesheet" href="http://kiezie.web.id/bekamonline/templates/back-end/penguin/js/iCheck/square/blue.css">
<script src="http://kiezie.web.id/bekamonline/templates/back-end/penguin/js/iCheck/icheck.min.js"></script>  

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
                            window.location='list.php?tab=shortcut';
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
            window.location='list.php?tab=shortcut'+(query.length>0?'&query='+query:'');
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
            
            
        
        $('#upload_avatar').click(function(){
            $('#fileupload_avatar').trigger('click'); 
            return false;
        });

        $('.image-editor-avatar').cropit({
            smallImage: 'stretch',
            imageState: {
                src: 'http://kiezie.web.id/bekamonline/uploads/umum/3724.png',
            }        });

        $('#upload_logo').click(function(){
            $('#fileupload_logo').trigger('click'); 
            return false;
        });

        $('.image-editor-logo').cropit({
            smallImage: 'stretch',
            imageState: {
                src: 'http://kiezie.web.id/bekamonline/uploads/umum/6798.png',
            }        });
            
        $('#upload_bg').click(function() {
            $('#fileupload_bg').trigger('click'); 
            return false;
        });

        $('.image-editor-bg').cropit({
          smallImage: 'stretch',
          imageState: {
            src: 'http://kiezie.web.id/bekamonline/uploads/umum/4326.png',
          }        });
        
        var landing_page = 1;        
        $('input[name=landing_page]').on('ifChecked', function(event){
            landing_page = $(this).val();
            //alert("tampilkan_shortcut:" + tampilkan_shortcut);
        });

        var tampilkan_shortcut = 0;        
        $('input[name=tampilkan_shortcut]').on('ifChecked', function(event){
            tampilkan_shortcut = $(this).val();
            //alert("tampilkan_shortcut:" + tampilkan_shortcut);
        });
        
        var tampilkan_kategori = 1;        
        $('input[name=tampilkan_kategori]').on('ifChecked', function(event){
            tampilkan_kategori = $(this).val();
            //alert("tampilkan_kategori:" + tampilkan_kategori);
        });

        var tampilkan_induk_kategori = 0;        
        $('input[name=tampilkan_induk_kategori]').on('ifChecked', function(event){
            tampilkan_induk_kategori = $(this).val();
            //alert("tampilkan_induk_kategori:" + tampilkan_induk_kategori);
        });
        
        $('#btn_simpan_general1').click(function() {            

            var data = new FormData();
            var imageDataAvatar = $('.image-editor-avatar').cropit('export');
            data.append('filename_avatar', imageDataAvatar==undefined?'':imageDataAvatar);
            var imageDataLogo = $('.image-editor-logo').cropit('export');
            data.append('filename_logo', imageDataLogo==undefined?'':imageDataLogo);
            var imageDataBg = $('.image-editor-bg').cropit('export');
            data.append('filename_bg', imageDataBg==undefined?'':imageDataBg);
            
            setLoading(true, "general1");
            $.ajax({
                type: 'POST',
                url: 'updateGeneral1.php',
                data: data,
                cache: false,
                dataType: 'json',
                processData: false, // Don't process the files
                contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                success: function(data) {
                    setLoading(false, 'general1');
                    if(data['success']) {
                        setMessage('success', data['message']);  
                    } else {
                        setMessage('error', data['message']);                        
                    }
                }, 
                error: function() {
                    setLoading(false, 'general1');
                    setMessage('error', 'Kesalahan server. Mohon diulang kembali!');
                }
            }); 
        });
        
        $('#btn_simpan_general2').click(function() {            

            var data = new FormData();
            data.append('landing_page', landing_page);
            data.append('tampilkan_shortcut', tampilkan_shortcut);
            data.append('tampilkan_kategori', tampilkan_kategori);
            data.append('tampilkan_induk_kategori', tampilkan_induk_kategori);

            setLoading(true, "general2");
            $.ajax({
                type: 'POST',
                url: 'updateGeneral2.php',
                data: data,
                cache: false,
                dataType: 'json',
                processData: false, // Don't process the files
                contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                success: function(data) {
                    setLoading(false, 'general2');
                    if(data['success']) {
                        setMessage('success', data['message']);  
                    } else {
                        setMessage('error', data['message']);                        
                    }
                }, 
                error: function() {
                    setLoading(false, 'general2');
                    setMessage('error', 'Kesalahan server. Mohon diulang kembali!');
                }
            }); 
        });
        
        
        
        
        $('#btn_simpan_updateapp').click(function() {
            var data = new FormData();                
            data.append('app_ver_no', $('[name=app_ver_no]').val());
            data.append('app_desc', $('[name=app_desc]').val());
            data.append('app_ver_name', $('[name=app_ver_name]').val());

            setLoading(true, 'updateapp');
            $.ajax({
                type: 'POST',
                url: 'updateRealease.php',
                data: data,
                cache: false,
                dataType: 'json',
                processData: false, // Don't process the files
                contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                success: function(data) {
                    setLoading(false, 'updateapp');
                    if(data['success']) {
                        setMessage('success', data['message']);  
                    } else {
                        setMessage('error', data['message']);                        
                    }
                }, 

                error: function() {
                    setLoading(false, 'updateapp');
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
                        url: 'http://kiezie.web.id/bekamonline/store/notifDataStore.php',
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
