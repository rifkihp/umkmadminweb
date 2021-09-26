<?php /*%%SmartyHeaderCode:18216301945bfbf829e7ba61-16998858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd226289a268ceeb112e453dfc3271259aeb91789' => 
    array (
      0 => '../../templates/back-end/penguin/gantipassword/edit.html',
      1 => 1538456116,
      2 => 'file',
    ),
    '19b01e268ee2de01c3d1e0dee5e3489fe757f2cd' => 
    array (
      0 => '/home/u5183746/public_html/laundry.id/templates/back-end/penguin/includes/head.html',
      1 => 1538456120,
      2 => 'file',
    ),
    'f785f3b72631f470c0625ef892c96f11cc2ec974' => 
    array (
      0 => '/home/u5183746/public_html/laundry.id/templates/back-end/penguin/includes/sidebar.html',
      1 => 1538456120,
      2 => 'file',
    ),
    '159c8283a96384917a8b183f0f224b53a8e5c184' => 
    array (
      0 => '/home/u5183746/public_html/laundry.id/templates/back-end/penguin/includes/footer.html',
      1 => 1538456120,
      2 => 'file',
    ),
    '03756350d2402d879b23738023b6f6db05024476' => 
    array (
      0 => '/home/u5183746/public_html/laundry.id/templates/back-end/penguin/includes/footer_js.html',
      1 => 1538456120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18216301945bfbf829e7ba61-16998858',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5bfbf9ecd8a966_72520468',
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bfbf9ecd8a966_72520468')) {function content_5bfbf9ecd8a966_72520468($_smarty_tpl) {?><!doctype html>
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
                                <span id="total_notif_konfirmasi_bayar" class="bubble">2</span>
                                <span style="color: #ffffff;">Konfirmasi Bayar </span></a>
                            </li>
                                                
                                                    <li class="dropdown-toggle hidden-xs" style="border-left: 1px solid #ffffff;">
                                <a href="http://laundry.id/adminweb/pesanandalamproses/pesananperludikirim/" class="dropdown-toggle" style="width: 100%; padding-left: 10px; padding-right: 30px;"><i class="icon-box"></i>
                                <span id="total_notif_perlu_kemas" class="bubble">20</span>
                                <span style="color: #ffffff">Perlu Kemas </span></a>
                            </li>
                                                
                                                    <li class="dropdown-toggle hidden-xs" style="border-left: 1px solid #ffffff;">
                                <a href="http://laundry.id/adminweb/customer/" class="dropdown-toggle" style="width: 100%; padding-left: 10px; padding-right: 30px;"><i class="icon-users4"></i>
                                <span id="total_notif_pelanggan_baru" class="bubble">89</span>
                                <span style="color: #ffffff;">Pelanggan Baru</span></a>
                            </li>
                                                
                                                    <li class="dropdown-toggle hidden-xs" style="border-left: 1px solid #ffffff;">
                                <a href="http://laundry.id/adminweb/message_in/" class="dropdown-toggle" style="width: 100%; padding-left: 10px; padding-right: 30px;"><i class="icon-envelope"></i>
                                <span id="total_notif_pesan_baru" class="bubble">1</span>
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

                            <img src="http://laundry.id/templates/back-end/penguin/assets/images/faces/face1.png" alt="admin" class="img-circle">

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

                            
                                <li>

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
                <i class="icon-table position-left"></i> Ganti Password
            </div>
            <ul class="breadcrumb">
                <li><a href="http://laundry.id/adminweb">Beranda</a></li>
                <li><a href="http://laundry.id/adminweb/dashboard/">Ganti Password</a></li>
                <li class="active">Ganti Password</li>
            </ul>					
        </div>
    </div>		
    <!--/Page Header-->
			
    <!--Page Content-->
    <div id="wrapper" class="container-fluid page-content">
        <div class="panel panel-flat" style="margin: 5px;">
            <div class="form-group panel-body no-padding-bottom">             
		<div id="alert_success" class="form-group" style="display: none;"> 
                    <div class="alert alert-info">&nbsp;</div>
                </div>

                <div id="alert_error" class="form-group" style="display: none;">                         
                    <div class="alert alert-danger">&nbsp;</div>
                </div>

                <div class="form-group">
                    <label for="old_password">Password Lama:</label>
                    <input type="password" class="form-control" name="old_password" placeholder="" />
                </div>

                <div class="form-group">
                    <label for="new_password">Password Baru:</label>
                    <input type="password" class="form-control" name="new_password" placeholder="" />
                </div>

                <div class="form-group">
                    <label for="konfirmasi_password">Konfirmasi Password:</label>
                    <input type="password" class="form-control" name="konfirmasi_password" placeholder="" />
                </div>								
                
                <div class="form-group">&nbsp;</div>
                
                <div class="form-group">
                    <div id="i_loading" class="G-btn-animation" style="display: none;"><img src="http://laundry.id/templates/back-end/penguin/assets/img/loading.gif" /></div>                  
                    <div id="btn_simpan" class="btn btn-primary">Update</div>
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
						</span>
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
<!-- Page scripts -->
    <script type="text/javascript">       
        
        $(function () {           
    
            var setMessage = function(tipe, message) {
                $('#alert_'+tipe+' .alert').text(message);
                $('#alert_'+tipe).show('slow');
                setTimeout(function() {
                    $('#alert_'+tipe).hide('slow');
                }, 5000);
                $("body, html").animate({ 
                    scrollTop: $('#wrapper').offset().top 
                }, 600);
            };
            
            var setLoading = function(isLoading) {
                if(isLoading) {
                    $('#i_loading').show();
                    $('#btn_simpan').hide();
                } else {
                    $('#i_loading').hide();
                    $('#btn_simpan').show();
                }
            };

            $('#btn_simpan').click(function() {            
                    
                var data = new FormData();
                data.append('old_password', $('[name=old_password]').val());
                data.append('new_password', $('[name=new_password]').val());
                data.append('konfirmasi_password', $('[name=konfirmasi_password]').val());
                
                setLoading(true);
                $.ajax({
                    type: 'POST',
                    url: 'update.php',
                    data: data,
                    cache: false,
                    dataType: 'json',
                    processData: false, // Don't process the files
                    contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                    success: function(data) {
                        setLoading(false);
                        if(data['success']) {
                            setMessage('success', data['message']);
                            $('[name=old_password]').val('');
                            $('[name=new_password]').val('');
                            $('[name=konfirmasi_password]').val('');                            
                        } else {
                            setMessage('error', data['message']);                        
                        }
                    }, 
                    error: function() {
                        setLoading(false);
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
