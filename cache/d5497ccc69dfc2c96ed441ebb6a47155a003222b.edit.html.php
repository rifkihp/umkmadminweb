<?php /*%%SmartyHeaderCode:17033798355ea4fab1daf967-42465788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5497ccc69dfc2c96ed441ebb6a47155a003222b' => 
    array (
      0 => '../../templates/back-end/penguin/mitra/edit.html',
      1 => 1587385570,
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
  'nocache_hash' => '17033798355ea4fab1daf967-42465788',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ea4fb0c312564_77808237',
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ea4fb0c312564_77808237')) {function content_5ea4fb0c312564_77808237($_smarty_tpl) {?><!doctype html>
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
                                            <li class="active acc-parent-li">
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
	<section id="wrapper" class="main-container">	
			
			<!--Page Header-->
			<div class="header">
				<div class="header-content">
					<div class="page-title">
						<i class="icon-table position-left"></i> Mitra
					</div>
					<ul class="breadcrumb">
						<li><a href="http://kiezie.web.id/laundry/adminweb">Beranda</a></li>
						<li><a href="http://kiezie.web.id/laundry/adminweb/dashboard/">Mitra</a></li>
						<li class="active">Add New Mitra</li>
					</ul>					
				</div>
			</div>		
			<!--/Page Header-->
			
			<div class="container-fluid page-content">				
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-flat">
							<div class="panel-heading">
								<h3 class="panel-title"><strong>Mitra</strong></h3>				
								<h5 class="panel-title">Add New Mitra</h5>				
							</div>

							<div class="panel panel-flat">
								<div class="form-group panel-body no-padding-bottom">
									<div class="row col-md-12">                    

										<div id="alert_error" class="form-group" style="display: none;">
											<div class="alert alert-danger">&nbsp;</div>
										</div>

										<div class="form-group">
											<label class="control-label">Nama Depan:</label>
											<input type="text" name="first_name" value="" class="form-control" />
										</div>

										<div class="form-group">
											<label class="control-label">Nama Belakang:</label>
											<input type="text" name="last_name" value="" class="form-control" />
										</div>

										<div class="form-group">
											<label class="control-label">No. HP:</label>
											<input type="text" name="no_hp" value="" class="form-control" />
										</div>

										<div class="form-group">
											<label class="control-label">Email:</label>
											<input type="text" name="email" value="" class="form-control" />
										</div>

										<div class="form-group">
											<label class="control-label">Username:</label>
											<input type="text" name="username" value="" class="form-control" />
										</div>

										<div class="form-group">
											<label for="password">Password Login:</label>
											<input type="password" value="" class="form-control" name="password" placeholder="" />
										</div>

										<div class="form-group">
											<label for="konfirmasi">Konfirmasi Password Login:</label>
											<input type="password" value="" class="form-control" name="konfirmasi" placeholder="" />
										</div>

										<div class="form-group">
											<label class="control-label">Photo Profil:</label>
											<style type="text/css">
												#photo-editor .cropit-image-preview {
													background-color: #a6bac4;
													height: 300px;
													width: 300px;
													cursor: move;
												}
											</style>

											<div id="photo-editor">
												<div style=" float: right; margin-top: 5px; margin-left: 5px; position: absolute;"><input id="fileupload_photo" type="file" name="fileupload_photo" style="display:none;" class="cropit-image-input" /><a id="upload_photo"><img src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/img/camera-icon.png" width="24px" height="20px" /></a></div>
												<div class="cropit-image-preview"></div>
											</div>
										</div>

										<div class="form-group">
											<label class="control-label">Alamat:</label>
											<textarea name="alamat" class="form-control"></textarea>
										</div>

										<div class="form-group">
											<label class="control-label">Propinsi:</label>
											<select id="profil_prop" name="propinsi" class="form-control">
												<option value="0">-- Pilih Propinsi --</option>
																								<option value="1" >Bali</option>
																								<option value="2" >Bangka Belitung</option>
																								<option value="3" >Banten</option>
																								<option value="4" >Bengkulu</option>
																								<option value="5" >DI Yogyakarta</option>
																								<option value="6" >DKI Jakarta</option>
																								<option value="7" >Gorontalo</option>
																								<option value="8" >Jambi</option>
																								<option value="9" >Jawa Barat</option>
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
											<label class="control-label">Kota:</label>
											<select id="profil_kota" name="kota" class="form-control">
												<option value="0">-- Pilih Kota --</option>
											</select>
										</div>

										<div class="form-group">
											<label class="control-label">Kecamatan:</label>
											<select id="profil_kecamatan" name="kecamatan"  class="form-control">
												<option value="0">-- Pilih Kecamatan --</option>
											</select>
										</div>

										<div class="form-group">
											<label class="control-label">Kode Pos:</label>
											<input type="text" name="kode_pos" value="" class="form-control" />
										</div>

										<div class="form-group">
											<label class="control-label">Jenis User:</label>
											<select name="jenis_user" class="form-control">
																								<option value="1" >Standard</option>
																								<option value="2" >Silver</option>
																								<option value="3" >Gold</option>
																								<option value="4" >Premium</option>
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
<script type="text/javascript" src="http://kiezie.web.id/laundry/templates/back-end/penguin/js/moment.min.js"></script>
<script type="text/javascript" src="http://kiezie.web.id/laundry/templates/back-end/penguin/js/legacy.js"></script>
<script type="text/javascript" src="http://kiezie.web.id/laundry/templates/back-end/penguin/js/forms/daterangepicker.js"></script>
<script type="text/javascript" src="http://kiezie.web.id/laundry/templates/back-end/penguin/js/forms/picker.js"></script>
<script type="text/javascript" src="http://kiezie.web.id/laundry/templates/back-end/penguin/js/forms/picker.date.js"></script>
<script type="text/javascript" src="http://kiezie.web.id/laundry/templates/back-end/penguin/js/forms/picker.time.js"></script>
<script type="text/javascript" src="http://kiezie.web.id/laundry/templates/back-end/penguin/js/forms/spectrum.js"></script>
<script type="text/javascript" src="http://kiezie.web.id/laundry/templates/back-end/penguin/js/pages/pickers.js"></script>
<!-- Page scripts -->
    <script type="text/javascript" src="http://kiezie.web.id/laundry/templates/back-end/penguin/assets/js/jquery.cropit.js"></script>  

    <script type="text/javascript">

        $(function () {           

            var isEdit = false;
            $('#photo-editor').cropit({
                smallImage: 'stretch',
                imageState: {
                    src: 'http://kiezie.web.id/laundry/uploads/member/'
                }
            });

            $('#upload_photo').click(function(){
                $('#fileupload_photo').trigger('click'); 
                return false;
            });

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

            $('#btn_simpan').click(function() {

                var data = new FormData();
                var first_name     = $('[name=first_name]').val();
                var last_name      = $('[name=last_name]').val();
                var email          = $('[name=email]').val();
                var username       = $('[name=username]').val();
                var no_hp          = $('[name=no_hp]').val();
                var alamat         = $('[name=alamat]').val();
                var id_propinsi    = $('[name=propinsi]').val();
                var nama_propinsi  = $("#profil_prop option[value='"+id_propinsi+"']").text();
                var id_kota        = $('[name=kota]').val();
                var nama_kota      = $("#profil_kota option[value='"+id_kota+"']").text();
                var id_kecamatan   = $('[name=kecamatan]').val();
                var nama_kecamatan = $("#profil_kecamatan option[value='"+id_kecamatan+"']").text();
                var kode_pos       = $('[name=kode_pos]').val();
                var jenis_user     = $('[name=jenis_user]').val();
                var photoData      = $('#photo-editor').cropit('export');

                var data = new FormData();
                data.append('id', isEdit?'':'');
                data.append('firstname', first_name);
                data.append('lastname', last_name);
                data.append('email', email);
                data.append('username', username);
                data.append('no_hp', no_hp);
                data.append('alamat', alamat);
                data.append('propinsi', id_propinsi);
                data.append('nama_propinsi', nama_propinsi);
                data.append('kota', id_kota);
                data.append('nama_kota', nama_kota);
                data.append('kecamatan', id_kecamatan);
                data.append('nama_kecamatan', nama_kecamatan);                                
                data.append('kode_pos', kode_pos);                                
                data.append('jenis_user', jenis_user);
                data.append('filename_photo', photoData);    
                data.append('password', $('[name=password]').val());
                data.append('konfirmasi', $('[name=konfirmasi]').val());

                setLoading(true);

                $.ajax({
                    type: 'POST',
                    url: isEdit?'update_member.php':'save_member.php',
                    data: data,
                    cache: false,
                    dataType: 'json',
                    processData: false, // Don't process the files
                    contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                    success: function(data) {
                        if(data['success']) {
							swal('Sukses!', 'Record Data Telah Berhasil Disimpan!', 'success');
                            window.location = 'list.php';                    
                        } else {
                            setLoading(false);
                            setErrorMessage(data['message']);                        
                        }

                    }, 

                    error: function() {
                        setLoading(false);
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

            $('#profil_prop').on('change', function (e) {
                loadKota(this.value, 0);
                loadKecamatan(0, 0);
            });

            $('#profil_kota').on('change', function (e) {
                loadKecamatan(this.value, 0);
            });

            function loadKota(propinsi, kota) {
                $("#profil_kota").empty();
                $('<option value="0">-- Pilih Kota --</option>').appendTo('#profil_kota');

                $.ajax({
                    type: 'POST',
                    url: 'http://kiezie.web.id/laundry/store/getKota.php',
                    data: { 'propinsi': propinsi },
                    dataType: 'json',
                    success: function(data) {
                        var store = data['topics'];
                        var data = '<option value="0">-- Pilih Kota --</option>';
                        for(var key in store) {
                            data+='<option value="'+store[key]['city_id']+'"'+(store[key]['city_id']==kota?' selected="selected"':'')+'>'+store[key]['city_name']+'</option>';
                        }
                        $("#profil_kota").empty();
                        $(data).appendTo('#profil_kota');
                    }
                });
            }

            function loadKecamatan(kota, kecamatan) {
                $("#profil_kecamatan").empty();
                $('<option value="0">-- Pilih Kecamatan --</option>').appendTo('#profil_kecamatan');

                if(kota>0) {
                    $.ajax({
                        type: 'POST',
                        url: 'http://kiezie.web.id/laundry/store/getKecamatan.php',
                        data: { 'kota': kota },
                        dataType: 'json',
                        success: function(data) {
                            var store = data['topics'];
                            var data = '<option value="0">-- Pilih Kecamatan --</option>';
                            for(var key in store) {
                                data+='<option value="'+store[key]['subdistrict_id']+'"'+(store[key]['subdistrict_id']==kecamatan?' selected="selected"':'')+'>'+store[key]['subdistrict_name']+'</option>';
                            }

                            $("#profil_kecamatan").empty();
                            $(data).appendTo('#profil_kecamatan');
                        }
                    });
                }
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
