<?php /*%%SmartyHeaderCode:11481195105ea388ff6ab994-76008808%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6af38fdf3be5aefb6beda0b637f86e1c26f0f8d9' => 
    array (
      0 => '../../templates/back-end/penguin/product/list.html',
      1 => 1587395114,
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
  'nocache_hash' => '11481195105ea388ff6ab994-76008808',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ea505e2e629a3_91918068',
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ea505e2e629a3_91918068')) {function content_5ea505e2e629a3_91918068($_smarty_tpl) {?><!doctype html>
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
						<i class="icon-table position-left"></i> Product
					</div>
					<ul class="breadcrumb">
						<li><a href="http://kiezie.web.id/laundry/adminweb">Beranda</a></li>
						<li><a href="http://kiezie.web.id/laundry/adminweb/dashboard/">Product</a></li>
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
										<div class="form-group">
											<select name="select_mitra" class="form-control">
												<option value="">[Pilih Mitra]</option>
																									<option value="1" >MAMA LAUNDRY</option>
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
																									<option value="144" >MUKHLIS LAUNDRY</option>
																							</select>
										</div>
									</td>
								</tr>
								<tr>
									<td width="100%">&nbsp;</td></tr>	
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

									<th width="20%"><div style="text-align: left;">Mitra</div></th>
									<th width="40%"><div style="text-align: left;">Nama</div></th>
									
                                    <th data-hide="phone, tablet" width="15%"><div style="text-align: center;">Aksi</div></th>

                                </tr>

                            </thead>

                            <tbody>

                                
                                                                    

                                    <tr id="baris_41">

                                        <td align="center"><input type="checkbox" id_select="41" name="select_41" class="select" /></td>

                                        <td align="center"><small>1</small></td>

                                        <td align="center"><small>26-04-2020 08:47:17</small></td>

										<td align="left">MAMA LAUNDRY</td>
                                        <td align="left">

                                            <img align="left" style="margin-right: 10px; margin-bottom: 10px; margin-top: 3px;" src="http://kiezie.web.id/laundry/uploads/produk/jasa-setrika-pakaian.jpg" width="75" />

                                            <table><tr><td>

                                                004<br />
                                                SETRIKA KILOAN<br /> 
                                                <small>Kategori: </small><br />
                                                <span style="font-weight: bold;"><small>Rp. 5,000</small></span><br />

                                                <span style="font-weight: bold;"><small>Status: </small><span style="color: green;"><small>Publish</small></span></span><br />

                                                
                                                
                                                
                                                
                                                                                                
                                                
                                                

                                            </td></tr></table>

										</td>
										
										

                                        <td><div style="text-align: center;  white-space: nowrap;">

                                                
                                                    <div id_select="41" class="btn btn-primary up">Up</div>

                                                    <div id_select="41" class="btn btn-success edit">Edit</div>

                                                
                                                <div id_select="41" class="btn btn-danger hapus">Hapus</div>                                                        

                                            </div>

                                        </td>                                          

                                    </tr>

                                      

                                                                    

                                    <tr id="baris_40">

                                        <td align="center"><input type="checkbox" id_select="40" name="select_40" class="select" /></td>

                                        <td align="center"><small>2</small></td>

                                        <td align="center"><small>26-04-2020 08:44:31</small></td>

										<td align="left">MAMA LAUNDRY</td>
                                        <td align="left">

                                            <img align="left" style="margin-right: 10px; margin-bottom: 10px; margin-top: 3px;" src="http://kiezie.web.id/laundry/uploads/produk/6377748_preview_2.png" width="75" />

                                            <table><tr><td>

                                                003<br />
                                                LAUNDRY EKSPRESS ( 1 HARI )<br /> 
                                                <small>Kategori: </small><br />
                                                <span style="font-weight: bold;"><small>Rp. 14,000</small></span><br />

                                                <span style="font-weight: bold;"><small>Status: </small><span style="color: green;"><small>Publish</small></span></span><br />

                                                
                                                
                                                
                                                
                                                                                                
                                                
                                                

                                            </td></tr></table>

										</td>
										
										

                                        <td><div style="text-align: center;  white-space: nowrap;">

                                                
                                                    <div id_select="40" class="btn btn-primary up">Up</div>

                                                    <div id_select="40" class="btn btn-success edit">Edit</div>

                                                
                                                <div id_select="40" class="btn btn-danger hapus">Hapus</div>                                                        

                                            </div>

                                        </td>                                          

                                    </tr>

                                      

                                                                    

                                    <tr id="baris_37">

                                        <td align="center"><input type="checkbox" id_select="37" name="select_37" class="select" /></td>

                                        <td align="center"><small>3</small></td>

                                        <td align="center"><small>26-04-2020 08:44:03</small></td>

										<td align="left">MAMA LAUNDRY</td>
                                        <td align="left">

                                            <img align="left" style="margin-right: 10px; margin-bottom: 10px; margin-top: 3px;" src="http://kiezie.web.id/laundry/uploads/produk/6377748_preview_1.png" width="75" />

                                            <table><tr><td>

                                                002<br />
                                                LAUNDRY KILOAN EKSPRESS ( 2 HARI )<br /> 
                                                <small>Kategori: </small><br />
                                                <span style="font-weight: bold;"><small>Rp. 10,000</small></span><br />

                                                <span style="font-weight: bold;"><small>Status: </small><span style="color: green;"><small>Publish</small></span></span><br />

                                                
                                                
                                                
                                                
                                                                                                
                                                
                                                

                                            </td></tr></table>

										</td>
										
										

                                        <td><div style="text-align: center;  white-space: nowrap;">

                                                
                                                    <div id_select="37" class="btn btn-primary up">Up</div>

                                                    <div id_select="37" class="btn btn-success edit">Edit</div>

                                                
                                                <div id_select="37" class="btn btn-danger hapus">Hapus</div>                                                        

                                            </div>

                                        </td>                                          

                                    </tr>

                                      

                                                                    

                                    <tr id="baris_39">

                                        <td align="center"><input type="checkbox" id_select="39" name="select_39" class="select" /></td>

                                        <td align="center"><small>4</small></td>

                                        <td align="center"><small>26-04-2020 08:43:11</small></td>

										<td align="left">MAMA LAUNDRY</td>
                                        <td align="left">

                                            <img align="left" style="margin-right: 10px; margin-bottom: 10px; margin-top: 3px;" src="http://kiezie.web.id/laundry/uploads/produk/6377748_preview.png" width="75" />

                                            <table><tr><td>

                                                001<br />
                                                LAUNDRY REGULER (3 HARI)<br /> 
                                                <small>Kategori: </small><br />
                                                <span style="font-weight: bold;"><small>Rp. 7,000</small></span><br />

                                                <span style="font-weight: bold;"><small>Status: </small><span style="color: green;"><small>Publish</small></span></span><br />

                                                
                                                
                                                
                                                
                                                                                                
                                                
                                                

                                            </td></tr></table>

										</td>
										
										

                                        <td><div style="text-align: center;  white-space: nowrap;">

                                                
                                                    <div id_select="39" class="btn btn-primary up">Up</div>

                                                    <div id_select="39" class="btn btn-success edit">Edit</div>

                                                
                                                <div id_select="39" class="btn btn-danger hapus">Hapus</div>                                                        

                                            </div>

                                        </td>                                          

                                    </tr>

                                      

                                                                    

                                    <tr id="baris_57">

                                        <td align="center"><input type="checkbox" id_select="57" name="select_57" class="select" /></td>

                                        <td align="center"><small>5</small></td>

                                        <td align="center"><small>26-04-2020 08:37:53</small></td>

										<td align="left">ARUM LAUNDRY</td>
                                        <td align="left">

                                            <img align="left" style="margin-right: 10px; margin-bottom: 10px; margin-top: 3px;" src="http://kiezie.web.id/laundry/uploads/produk/18620257-white-laundry-basket-full-of-colorful-clothing-and-a-bottle-of-cleaning-detergent-.jpg" width="75" />

                                            <table><tr><td>

                                                004<br />
                                                LAUNDRY KILOAN<br /> 
                                                <small>Kategori: </small><br />
                                                <span style="font-weight: bold;"><small>Rp. 7,000</small></span><br />

                                                <span style="font-weight: bold;"><small>Status: </small><span style="color: green;"><small>Publish</small></span></span><br />

                                                
                                                
                                                
                                                
                                                                                                
                                                
                                                

                                            </td></tr></table>

										</td>
										
										

                                        <td><div style="text-align: center;  white-space: nowrap;">

                                                
                                                    <div id_select="57" class="btn btn-primary up">Up</div>

                                                    <div id_select="57" class="btn btn-success edit">Edit</div>

                                                
                                                <div id_select="57" class="btn btn-danger hapus">Hapus</div>                                                        

                                            </div>

                                        </td>                                          

                                    </tr>

                                      

                                                                    

                                    <tr id="baris_54">

                                        <td align="center"><input type="checkbox" id_select="54" name="select_54" class="select" /></td>

                                        <td align="center"><small>6</small></td>

                                        <td align="center"><small>26-04-2020 08:37:44</small></td>

										<td align="left">ARUM LAUNDRY</td>
                                        <td align="left">

                                            <img align="left" style="margin-right: 10px; margin-bottom: 10px; margin-top: 3px;" src="http://kiezie.web.id/laundry/uploads/produk/bd81add467cedba05f249cff9899d60e.jpg" width="75" />

                                            <table><tr><td>

                                                001<br />
                                                JAS PANJANG<br /> 
                                                <small>Kategori: </small><br />
                                                <span style="font-weight: bold;"><small>Rp. 25,000</small></span><br />

                                                <span style="font-weight: bold;"><small>Status: </small><span style="color: green;"><small>Publish</small></span></span><br />

                                                
                                                
                                                
                                                
                                                                                                
                                                
                                                

                                            </td></tr></table>

										</td>
										
										

                                        <td><div style="text-align: center;  white-space: nowrap;">

                                                
                                                    <div id_select="54" class="btn btn-primary up">Up</div>

                                                    <div id_select="54" class="btn btn-success edit">Edit</div>

                                                
                                                <div id_select="54" class="btn btn-danger hapus">Hapus</div>                                                        

                                            </div>

                                        </td>                                          

                                    </tr>

                                      

                                                                    

                                    <tr id="baris_55">

                                        <td align="center"><input type="checkbox" id_select="55" name="select_55" class="select" /></td>

                                        <td align="center"><small>7</small></td>

                                        <td align="center"><small>26-04-2020 08:37:36</small></td>

										<td align="left">ARUM LAUNDRY</td>
                                        <td align="left">

                                            <img align="left" style="margin-right: 10px; margin-bottom: 10px; margin-top: 3px;" src="http://kiezie.web.id/laundry/uploads/produk/images.jpg" width="75" />

                                            <table><tr><td>

                                                002<br />
                                                JAS JAKET<br /> 
                                                <small>Kategori: </small><br />
                                                <span style="font-weight: bold;"><small>Rp. 25,000</small></span><br />

                                                <span style="font-weight: bold;"><small>Status: </small><span style="color: green;"><small>Publish</small></span></span><br />

                                                
                                                
                                                
                                                
                                                                                                
                                                
                                                

                                            </td></tr></table>

										</td>
										
										

                                        <td><div style="text-align: center;  white-space: nowrap;">

                                                
                                                    <div id_select="55" class="btn btn-primary up">Up</div>

                                                    <div id_select="55" class="btn btn-success edit">Edit</div>

                                                
                                                <div id_select="55" class="btn btn-danger hapus">Hapus</div>                                                        

                                            </div>

                                        </td>                                          

                                    </tr>

                                      

                                                                    

                                    <tr id="baris_56">

                                        <td align="center"><input type="checkbox" id_select="56" name="select_56" class="select" /></td>

                                        <td align="center"><small>8</small></td>

                                        <td align="center"><small>26-04-2020 08:37:28</small></td>

										<td align="left">ARUM LAUNDRY</td>
                                        <td align="left">

                                            <img align="left" style="margin-right: 10px; margin-bottom: 10px; margin-top: 3px;" src="http://kiezie.web.id/laundry/uploads/produk/Latest-design-caot-pant-men-slim-fit.jpg_350x350.jpg" width="75" />

                                            <table><tr><td>

                                                003<br />
                                                JAS SETELAN<br /> 
                                                <small>Kategori: </small><br />
                                                <span style="font-weight: bold;"><small>Rp. 30,000</small></span><br />

                                                <span style="font-weight: bold;"><small>Status: </small><span style="color: green;"><small>Publish</small></span></span><br />

                                                
                                                
                                                
                                                
                                                                                                
                                                
                                                

                                            </td></tr></table>

										</td>
										
										

                                        <td><div style="text-align: center;  white-space: nowrap;">

                                                
                                                    <div id_select="56" class="btn btn-primary up">Up</div>

                                                    <div id_select="56" class="btn btn-success edit">Edit</div>

                                                
                                                <div id_select="56" class="btn btn-danger hapus">Hapus</div>                                                        

                                            </div>

                                        </td>                                          

                                    </tr>

                                      

                                                                    

                                    <tr id="baris_58">

                                        <td align="center"><input type="checkbox" id_select="58" name="select_58" class="select" /></td>

                                        <td align="center"><small>9</small></td>

                                        <td align="center"><small>26-04-2020 08:37:21</small></td>

										<td align="left">ARUM LAUNDRY</td>
                                        <td align="left">

                                            <img align="left" style="margin-right: 10px; margin-bottom: 10px; margin-top: 3px;" src="http://kiezie.web.id/laundry/uploads/produk/kemeja-batik-motif-sekar-jagad.jpg" width="75" />

                                            <table><tr><td>

                                                005<br />
                                                KEMEJA BATIK<br /> 
                                                <small>Kategori: </small><br />
                                                <span style="font-weight: bold;"><small>Rp. 15,000</small></span><br />

                                                <span style="font-weight: bold;"><small>Status: </small><span style="color: green;"><small>Publish</small></span></span><br />

                                                
                                                
                                                
                                                
                                                                                                
                                                
                                                

                                            </td></tr></table>

										</td>
										
										

                                        <td><div style="text-align: center;  white-space: nowrap;">

                                                
                                                    <div id_select="58" class="btn btn-primary up">Up</div>

                                                    <div id_select="58" class="btn btn-success edit">Edit</div>

                                                
                                                <div id_select="58" class="btn btn-danger hapus">Hapus</div>                                                        

                                            </div>

                                        </td>                                          

                                    </tr>

                                      

                                                                    

                                    <tr id="baris_59">

                                        <td align="center"><input type="checkbox" id_select="59" name="select_59" class="select" /></td>

                                        <td align="center"><small>10</small></td>

                                        <td align="center"><small>26-04-2020 08:37:14</small></td>

										<td align="left">ARUM LAUNDRY</td>
                                        <td align="left">

                                            <img align="left" style="margin-right: 10px; margin-bottom: 10px; margin-top: 3px;" src="http://kiezie.web.id/laundry/uploads/produk/nh500-regular-women-s-country-walking-trousers-grey.jpg" width="75" />

                                            <table><tr><td>

                                                006<br />
                                                CELANA PANJANG<br /> 
                                                <small>Kategori: </small><br />
                                                <span style="font-weight: bold;"><small>Rp. 10,000</small></span><br />

                                                <span style="font-weight: bold;"><small>Status: </small><span style="color: green;"><small>Publish</small></span></span><br />

                                                
                                                
                                                
                                                
                                                                                                
                                                
                                                

                                            </td></tr></table>

										</td>
										
										

                                        <td><div style="text-align: center;  white-space: nowrap;">

                                                
                                                    <div id_select="59" class="btn btn-primary up">Up</div>

                                                    <div id_select="59" class="btn btn-success edit">Edit</div>

                                                
                                                <div id_select="59" class="btn btn-danger hapus">Hapus</div>                                                        

                                            </div>

                                        </td>                                          

                                    </tr>

                                      

                                                                    

                                    <tr id="baris_60">

                                        <td align="center"><input type="checkbox" id_select="60" name="select_60" class="select" /></td>

                                        <td align="center"><small>11</small></td>

                                        <td align="center"><small>26-04-2020 08:37:08</small></td>

										<td align="left">ARUM LAUNDRY</td>
                                        <td align="left">

                                            <img align="left" style="margin-right: 10px; margin-bottom: 10px; margin-top: 3px;" src="http://kiezie.web.id/laundry/uploads/produk/KAOS_HOBI_AUDIO_SOUND_SYSTEM_SPL_AUDIO_KAOS_SPL_AUDIO_SOUND_.jpg" width="75" />

                                            <table><tr><td>

                                                007<br />
                                                KAOS OBLONG<br /> 
                                                <small>Kategori: </small><br />
                                                <span style="font-weight: bold;"><small>Rp. 10,000</small></span><br />

                                                <span style="font-weight: bold;"><small>Status: </small><span style="color: green;"><small>Publish</small></span></span><br />

                                                
                                                
                                                
                                                
                                                                                                
                                                
                                                

                                            </td></tr></table>

										</td>
										
										

                                        <td><div style="text-align: center;  white-space: nowrap;">

                                                
                                                    <div id_select="60" class="btn btn-primary up">Up</div>

                                                    <div id_select="60" class="btn btn-success edit">Edit</div>

                                                
                                                <div id_select="60" class="btn btn-danger hapus">Hapus</div>                                                        

                                            </div>

                                        </td>                                          

                                    </tr>

                                      

                                                                    

                                    <tr id="baris_61">

                                        <td align="center"><input type="checkbox" id_select="61" name="select_61" class="select" /></td>

                                        <td align="center"><small>12</small></td>

                                        <td align="center"><small>26-04-2020 08:37:00</small></td>

										<td align="left">ARUM LAUNDRY</td>
                                        <td align="left">

                                            <img align="left" style="margin-right: 10px; margin-bottom: 10px; margin-top: 3px;" src="http://kiezie.web.id/laundry/uploads/produk/6ec208d193c4c879542c95977e5fced1.jpg" width="75" />

                                            <table><tr><td>

                                                008<br />
                                                SAFARI<br /> 
                                                <small>Kategori: </small><br />
                                                <span style="font-weight: bold;"><small>Rp. 15,000</small></span><br />

                                                <span style="font-weight: bold;"><small>Status: </small><span style="color: green;"><small>Publish</small></span></span><br />

                                                
                                                
                                                
                                                
                                                                                                
                                                
                                                

                                            </td></tr></table>

										</td>
										
										

                                        <td><div style="text-align: center;  white-space: nowrap;">

                                                
                                                    <div id_select="61" class="btn btn-primary up">Up</div>

                                                    <div id_select="61" class="btn btn-success edit">Edit</div>

                                                
                                                <div id_select="61" class="btn btn-danger hapus">Hapus</div>                                                        

                                            </div>

                                        </td>                                          

                                    </tr>

                                      

                                                                    

                                    <tr id="baris_62">

                                        <td align="center"><input type="checkbox" id_select="62" name="select_62" class="select" /></td>

                                        <td align="center"><small>13</small></td>

                                        <td align="center"><small>26-04-2020 08:36:54</small></td>

										<td align="left">ARUM LAUNDRY</td>
                                        <td align="left">

                                            <img align="left" style="margin-right: 10px; margin-bottom: 10px; margin-top: 3px;" src="http://kiezie.web.id/laundry/uploads/produk/349dcfa9e37c1016951d61dd80175a47.jpg" width="75" />

                                            <table><tr><td>

                                                009<br />
                                                SAFARI SETELAN<br /> 
                                                <small>Kategori: </small><br />
                                                <span style="font-weight: bold;"><small>Rp. 25,000</small></span><br />

                                                <span style="font-weight: bold;"><small>Status: </small><span style="color: green;"><small>Publish</small></span></span><br />

                                                
                                                
                                                
                                                
                                                                                                
                                                
                                                

                                            </td></tr></table>

										</td>
										
										

                                        <td><div style="text-align: center;  white-space: nowrap;">

                                                
                                                    <div id_select="62" class="btn btn-primary up">Up</div>

                                                    <div id_select="62" class="btn btn-success edit">Edit</div>

                                                
                                                <div id_select="62" class="btn btn-danger hapus">Hapus</div>                                                        

                                            </div>

                                        </td>                                          

                                    </tr>

                                      

                                                                    

                                    <tr id="baris_63">

                                        <td align="center"><input type="checkbox" id_select="63" name="select_63" class="select" /></td>

                                        <td align="center"><small>14</small></td>

                                        <td align="center"><small>26-04-2020 08:36:41</small></td>

										<td align="left">ARUM LAUNDRY</td>
                                        <td align="left">

                                            <img align="left" style="margin-right: 10px; margin-bottom: 10px; margin-top: 3px;" src="http://kiezie.web.id/laundry/uploads/produk/268260_Mulyocreative-Dasi-Merah-Polos_aOtuSlQrJSgkYESl_1553267490.jpg" width="75" />

                                            <table><tr><td>

                                                010<br />
                                                DASI<br /> 
                                                <small>Kategori: </small><br />
                                                <span style="font-weight: bold;"><small>Rp. 5,000</small></span><br />

                                                <span style="font-weight: bold;"><small>Status: </small><span style="color: green;"><small>Publish</small></span></span><br />

                                                
                                                
                                                
                                                
                                                                                                
                                                
                                                

                                            </td></tr></table>

										</td>
										
										

                                        <td><div style="text-align: center;  white-space: nowrap;">

                                                
                                                    <div id_select="63" class="btn btn-primary up">Up</div>

                                                    <div id_select="63" class="btn btn-success edit">Edit</div>

                                                
                                                <div id_select="63" class="btn btn-danger hapus">Hapus</div>                                                        

                                            </div>

                                        </td>                                          

                                    </tr>

                                      

                                                                    

                                    <tr id="baris_64">

                                        <td align="center"><input type="checkbox" id_select="64" name="select_64" class="select" /></td>

                                        <td align="center"><small>15</small></td>

                                        <td align="center"><small>26-04-2020 08:36:34</small></td>

										<td align="left">ARUM LAUNDRY</td>
                                        <td align="left">

                                            <img align="left" style="margin-right: 10px; margin-bottom: 10px; margin-top: 3px;" src="http://kiezie.web.id/laundry/uploads/produk/kebaya_biru_dongker_sz_m_1558409934_37eaf08a_progressive.jpg" width="75" />

                                            <table><tr><td>

                                                011<br />
                                                BLOUSE KEBAYA<br /> 
                                                <small>Kategori: </small><br />
                                                <span style="font-weight: bold;"><small>Rp. 12,000</small></span><br />

                                                <span style="font-weight: bold;"><small>Status: </small><span style="color: green;"><small>Publish</small></span></span><br />

                                                
                                                
                                                
                                                
                                                                                                
                                                
                                                

                                            </td></tr></table>

										</td>
										
										

                                        <td><div style="text-align: center;  white-space: nowrap;">

                                                
                                                    <div id_select="64" class="btn btn-primary up">Up</div>

                                                    <div id_select="64" class="btn btn-success edit">Edit</div>

                                                
                                                <div id_select="64" class="btn btn-danger hapus">Hapus</div>                                                        

                                            </div>

                                        </td>                                          

                                    </tr>

                                      

                                                                    

                                    <tr id="baris_65">

                                        <td align="center"><input type="checkbox" id_select="65" name="select_65" class="select" /></td>

                                        <td align="center"><small>16</small></td>

                                        <td align="center"><small>26-04-2020 08:35:41</small></td>

										<td align="left">ARUM LAUNDRY</td>
                                        <td align="left">

                                            <img align="left" style="margin-right: 10px; margin-bottom: 10px; margin-top: 3px;" src="http://kiezie.web.id/laundry/uploads/produk/52574795_20aaf814-8450-4d20-b2ca-1299947f89f2_700_700.png" width="75" />

                                            <table><tr><td>

                                                012<br />
                                                KEBAYA MOTIF<br /> 
                                                <small>Kategori: </small><br />
                                                <span style="font-weight: bold;"><small>Rp. 35,000</small></span><br />

                                                <span style="font-weight: bold;"><small>Status: </small><span style="color: green;"><small>Publish</small></span></span><br />

                                                
                                                
                                                
                                                
                                                                                                
                                                
                                                

                                            </td></tr></table>

										</td>
										
										

                                        <td><div style="text-align: center;  white-space: nowrap;">

                                                
                                                    <div id_select="65" class="btn btn-primary up">Up</div>

                                                    <div id_select="65" class="btn btn-success edit">Edit</div>

                                                
                                                <div id_select="65" class="btn btn-danger hapus">Hapus</div>                                                        

                                            </div>

                                        </td>                                          

                                    </tr>

                                      

                                                                    

                                    <tr id="baris_42">

                                        <td align="center"><input type="checkbox" id_select="42" name="select_42" class="select" /></td>

                                        <td align="center"><small>17</small></td>

                                        <td align="center"><small>26-04-2020 06:34:21</small></td>

										<td align="left">MAMA LAUNDRY</td>
                                        <td align="left">

                                            <img align="left" style="margin-right: 10px; margin-bottom: 10px; margin-top: 3px;" src="http://kiezie.web.id/laundry/uploads/produk/dress pendek.jpg" width="75" />

                                            <table><tr><td>

                                                005<br />
                                                DRESS PENDEK<br /> 
                                                <small>Kategori: </small><br />
                                                <span style="font-weight: bold;"><small>Rp. 15,000</small></span><br />

                                                <span style="font-weight: bold;"><small>Status: </small><span style="color: green;"><small>Publish</small></span></span><br />

                                                
                                                
                                                
                                                
                                                                                                
                                                
                                                

                                            </td></tr></table>

										</td>
										
										

                                        <td><div style="text-align: center;  white-space: nowrap;">

                                                
                                                    <div id_select="42" class="btn btn-primary up">Up</div>

                                                    <div id_select="42" class="btn btn-success edit">Edit</div>

                                                
                                                <div id_select="42" class="btn btn-danger hapus">Hapus</div>                                                        

                                            </div>

                                        </td>                                          

                                    </tr>

                                      

                                                                    

                                    <tr id="baris_43">

                                        <td align="center"><input type="checkbox" id_select="43" name="select_43" class="select" /></td>

                                        <td align="center"><small>18</small></td>

                                        <td align="center"><small>26-04-2020 06:34:14</small></td>

										<td align="left">MAMA LAUNDRY</td>
                                        <td align="left">

                                            <img align="left" style="margin-right: 10px; margin-bottom: 10px; margin-top: 3px;" src="http://kiezie.web.id/laundry/uploads/produk/data.jpeg" width="75" />

                                            <table><tr><td>

                                                006<br />
                                                DRESS PANJANG<br /> 
                                                <small>Kategori: </small><br />
                                                <span style="font-weight: bold;"><small>Rp. 20,000</small></span><br />

                                                <span style="font-weight: bold;"><small>Status: </small><span style="color: green;"><small>Publish</small></span></span><br />

                                                
                                                
                                                
                                                
                                                                                                
                                                
                                                

                                            </td></tr></table>

										</td>
										
										

                                        <td><div style="text-align: center;  white-space: nowrap;">

                                                
                                                    <div id_select="43" class="btn btn-primary up">Up</div>

                                                    <div id_select="43" class="btn btn-success edit">Edit</div>

                                                
                                                <div id_select="43" class="btn btn-danger hapus">Hapus</div>                                                        

                                            </div>

                                        </td>                                          

                                    </tr>

                                      

                                                                    

                                    <tr id="baris_44">

                                        <td align="center"><input type="checkbox" id_select="44" name="select_44" class="select" /></td>

                                        <td align="center"><small>19</small></td>

                                        <td align="center"><small>26-04-2020 06:34:07</small></td>

										<td align="left">MAMA LAUNDRY</td>
                                        <td align="left">

                                            <img align="left" style="margin-right: 10px; margin-bottom: 10px; margin-top: 3px;" src="http://kiezie.web.id/laundry/uploads/produk/720aa1b0349743ce77727eb4bf8e5a98.jpg" width="75" />

                                            <table><tr><td>

                                                007<br />
                                                KEBAYA ATASAN<br /> 
                                                <small>Kategori: </small><br />
                                                <span style="font-weight: bold;"><small>Rp. 20,000</small></span><br />

                                                <span style="font-weight: bold;"><small>Status: </small><span style="color: green;"><small>Publish</small></span></span><br />

                                                
                                                
                                                
                                                
                                                                                                
                                                
                                                

                                            </td></tr></table>

										</td>
										
										

                                        <td><div style="text-align: center;  white-space: nowrap;">

                                                
                                                    <div id_select="44" class="btn btn-primary up">Up</div>

                                                    <div id_select="44" class="btn btn-success edit">Edit</div>

                                                
                                                <div id_select="44" class="btn btn-danger hapus">Hapus</div>                                                        

                                            </div>

                                        </td>                                          

                                    </tr>

                                      

                                                                    

                                    <tr id="baris_45">

                                        <td align="center"><input type="checkbox" id_select="45" name="select_45" class="select" /></td>

                                        <td align="center"><small>20</small></td>

                                        <td align="center"><small>26-04-2020 06:33:59</small></td>

										<td align="left">MAMA LAUNDRY</td>
                                        <td align="left">

                                            <img align="left" style="margin-right: 10px; margin-bottom: 10px; margin-top: 3px;" src="http://kiezie.web.id/laundry/uploads/produk/8851172_b40ec7cb-a036-4325-911c-7a23005f4358_999_999.jpg" width="75" />

                                            <table><tr><td>

                                                008<br />
                                                JAS / BLEZER<br /> 
                                                <small>Kategori: </small><br />
                                                <span style="font-weight: bold;"><small>Rp. 25,000</small></span><br />

                                                <span style="font-weight: bold;"><small>Status: </small><span style="color: green;"><small>Publish</small></span></span><br />

                                                
                                                
                                                
                                                
                                                                                                
                                                
                                                

                                            </td></tr></table>

										</td>
										
										

                                        <td><div style="text-align: center;  white-space: nowrap;">

                                                
                                                    <div id_select="45" class="btn btn-primary up">Up</div>

                                                    <div id_select="45" class="btn btn-success edit">Edit</div>

                                                
                                                <div id_select="45" class="btn btn-danger hapus">Hapus</div>                                                        

                                            </div>

                                        </td>                                          

                                    </tr>

                                      

                                
                            </tbody>

                            
                            <tfoot><tr><th colspan="7">

                                <div style="text-align: center;">

                                                                                                                                                                                                                                                                <span class="btn btn-info">1</span>                                
                                                                                                                                                
                                                                                                                                                                        <a class="btn btn-default" href="list.php?id=&page=2">2</a>
                                                                                                                                                
                                                                                                                                        
                                                        <a class="btn btn-default" href="list.php?id=&page=2">Next &rarr;</a>
                                                                                  

                                </div>  

                            </th></tr></tfoot>

                            
							</tbody>
						</table>
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
	
	

<a id="scrollTop" href="tables_responsive.htm#top"><i class="icon-arrow-up12"></i></a>	

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
<script src="http://kiezie.web.id/laundry/templates/back-end/penguin/js/tables/footable.min.js"></script>
<script src="http://kiezie.web.id/laundry/templates/back-end/penguin/js/pages/tables_responsive.js"></script>
<!-- /page scripts -->
    <script type="text/javascript">

        $(function () {

            var delete_selected = "";

            $('[name=select_mitra]').on('change', function (e) {                
                var id_mitra = $('[name=select_mitra]').val();
                window.location='list.php'+(id_mitra.length>0?'?id_mitra='+id_mitra:'');
            });

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
                var id_mitra = $('[name=select_mitra]').val();
                window.location='list.php?'+(query.length>0?'&query='+query:'')+(id_mitra.length>0?'&id_mitra='+id_mitra:'');
            };

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
