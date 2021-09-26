<?php /*%%SmartyHeaderCode:724957675614a5b9cd4fce1-32591559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fc3c9d074f67f66e8903e202c4f22a1f6c1a884' => 
    array (
      0 => '..\\..\\templates\\back-end\\penguin\\mitra\\list.html',
      1 => 1595214764,
      2 => 'file',
    ),
    '418caae967518118291346a833d37c8507829867' => 
    array (
      0 => 'D:\\www\\sogi-admin-web-master\\templates\\back-end\\penguin\\includes\\head.html',
      1 => 1595214764,
      2 => 'file',
    ),
    'd749d5869ae2bae08bd3c122240f56817d0d6b0c' => 
    array (
      0 => 'D:\\www\\sogi-admin-web-master\\templates\\back-end\\penguin\\includes\\sidebar.html',
      1 => 1595214764,
      2 => 'file',
    ),
    '9d06ca168abe08a1dd825f209d474cdc4d7ad639' => 
    array (
      0 => 'D:\\www\\sogi-admin-web-master\\templates\\back-end\\penguin\\includes\\footer.html',
      1 => 1595214764,
      2 => 'file',
    ),
    '9b6683513d83910aeb82dd3db0315ad0a57a452f' => 
    array (
      0 => 'D:\\www\\sogi-admin-web-master\\templates\\back-end\\penguin\\includes\\footer_js.html',
      1 => 1595214764,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '724957675614a5b9cd4fce1-32591559',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_614f79660f0838_41106312',
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_614f79660f0838_41106312')) {function content_614f79660f0838_41106312($_smarty_tpl) {?><!doctype html>
<html lang="en">
    <head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>SOGI</title>	
	<link href="http://localhost/sogi-admin-web-master/templates/back-end/penguin/assets/images/favicon.ico" rel="icon" type="image/png">
	
	<!-- Global stylesheets -->	
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
	<link type="text/css" rel="stylesheet" href="http://localhost/sogi-admin-web-master/templates/back-end/penguin/assets/fonts/fonts.css">
        <link type="text/css" rel="stylesheet" href="http://localhost/sogi-admin-web-master/templates/back-end/penguin/assets/icons/icomoon/icomoon.css">
        <link type="text/css" rel="stylesheet" href="http://localhost/sogi-admin-web-master/templates/back-end/penguin/css/animate.min.css">
	<link type="text/css" rel="stylesheet" href="http://localhost/sogi-admin-web-master/templates/back-end/penguin/css/bootstrap.css">   
	<link type="text/css" rel="stylesheet" href="http://localhost/sogi-admin-web-master/templates/back-end/penguin/css/core.css">	
	<link type="text/css" rel="stylesheet" href="http://localhost/sogi-admin-web-master/templates/back-end/penguin/css/layout.css">	
	<link type="text/css" rel="stylesheet" href="http://localhost/sogi-admin-web-master/templates/back-end/penguin/css/bootstrap-extended.css">	    
	<link type="text/css" rel="stylesheet" href="http://localhost/sogi-admin-web-master/templates/back-end/penguin/css/components.css">
	<link type="text/css" rel="stylesheet" href="http://localhost/sogi-admin-web-master/templates/back-end/penguin/css/plugins.css">
	<link type="text/css" rel="stylesheet" href="http://localhost/sogi-admin-web-master/templates/back-end/penguin/css/loaders.css">
	<link type="text/css" rel="stylesheet" href="http://localhost/sogi-admin-web-master/templates/back-end/penguin/css/responsive.css">
	<link type="text/css" rel="stylesheet" href="http://localhost/sogi-admin-web-master/templates/back-end/penguin/css/color-system.css">		
	<link type="text/css" rel="stylesheet" href="http://localhost/sogi-admin-web-master/templates/back-end/penguin/css/fancybox/jquery.fancybox.css">
	<link type="text/css" rel="stylesheet" href="http://localhost/sogi-admin-web-master/templates/back-end/penguin/assets/sweetalert2/sweetalert2.min.css">
	<link type="text/css" rel="stylesheet" href="http://localhost/sogi-admin-web-master/templates/back-end/penguin/assets/bootstrap-fileinput/css/fileinput.min.css">
	<link type="text/css" rel="stylesheet" href="http://localhost/sogi-admin-web-master/templates/back-end/penguin/css/burnt_sienna_light.css">	
        <link type="text/css" rel="stylesheet" href="http://localhost/sogi-admin-web-master/templates/back-end/penguin/css/AdminLTE.css" />
	<link type="text/css" rel="stylesheet" href="0" id="theme">
	<script src="http://localhost/sogi-admin-web-master/templates/back-end/penguin/assets/sweetalert2/sweetalert2.min.js"></script>
	<script>
		var base_tpl_url = "http://localhost/sogi-admin-web-master/templates/back-end/penguin/css/themes/";
		var base_url = "http://localhost/sogi-admin-web-master/";
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
                                <a href="http://localhost/sogi-admin-web-master/adminweb/pesanandalamproses/pesananbelumlunas/" class="dropdown-toggle" style="width: 100%; padding-left: 10px; padding-right: 30px;"><i class="icon-cart"></i>
                                <span id="total_notif_belum_lunas" class="bubble">57</span>
                                <span style="color: #ffffff">Belum Bayar / KEEP </span></a>
                            </li>
                        
                        
                                                    <li class="dropdown-toggle hidden-xs" style="border-left: 1px solid #ffffff;">
                                <a href="http://localhost/sogi-admin-web-master/adminweb/pesanandalamproses/pesananperludikirim/" class="dropdown-toggle" style="width: 100%; padding-left: 10px; padding-right: 30px;"><i class="icon-box"></i>
                                <span id="total_notif_perlu_kemas" class="bubble">20</span>
                                <span style="color: #ffffff">Perlu Kemas </span></a>
                            </li>
                        
                                                    <li class="dropdown-toggle hidden-xs" style="border-left: 1px solid #ffffff;">
                                <a href="http://localhost/sogi-admin-web-master/adminweb/customer/" class="dropdown-toggle" style="width: 100%; padding-left: 10px; padding-right: 30px;"><i class="icon-users4"></i>
                                <span id="total_notif_pelanggan_baru" class="bubble">111</span>
                                <span style="color: #ffffff;">Pelanggan Baru</span></a>
                            </li>
                        
                        		

                        <li class="dropdown user-dropdown" style="border-left: 1px solid #ffffff;padding-left: 10px">
                            <a href="http://localhost/sogi-admin-web-master/adminweb#" class="btn-user dropdown-toggle hidden-xs" data-toggle="dropdown"><img src="http://localhost/sogi-admin-web-master/templates/back-end/penguin/assets/images/faces/face1.png" class="img-circle user" alt=""/></a>
                            <a href="http://localhost/sogi-admin-web-master/adminweb#" class="dropdown-toggle visible-xs" data-toggle="dropdown"><i class="icon-more"></i></a>
                            <div class="dropdown-menu">	
                                <div class="text-center"><img src="http://localhost/sogi-admin-web-master/templates/back-end/penguin/assets/images/faces/face1.png" class="img-circle img-70" alt=""/></div>
                                <h5 class="text-center"><b>Hi! Administrator</b></h5>
                                <ul class="more-apps">
                                        <!-- li><a href="http://localhost/sogi-admin-web-master/templates/back-end/penguin/material/user_profile_social.html"><i class="icon-profile"></i> My profile</a></li -->
                                        <!-- li><a href="http://localhost/sogi-admin-web-master/adminweb#"><i class="icon-envelop5"></i> Inbox <span class="badge badge-danger pull-right">4</span></a></li -->
                                        <li><a href="http://localhost/sogi-admin-web-master/adminweb/editprofile/"><i class="icon-profile"></i> My Profile</a></li>
                                        <li><a href="http://localhost/sogi-admin-web-master/adminweb/gantipassword/edit.php"><i class="icon-lock5"></i> Ganti Password</a></li>
                                </ul>
                                <div class="text-center"><a href="http://localhost/sogi-admin-web-master/adminweb/logout.php" class="btn btn-sm btn-info"><i class="icon-exit3 i-16 position-left"></i> Logout</a></div>
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
                    <img src="http://localhost/sogi-admin-web-master/templates/back-end/penguin/assets/images/faces/face1.png" alt="admin" class="img-circle" />
                </div>

                <div class="admin-user-info">
                    <ul class="user-info">
                        <li><a href="http://localhost/sogi-admin-web-master/adminweb/logout.php" class="text-semibold text-size-large">Administrator</a></li>
                        <li><a href="http://localhost/sogi-admin-web-master/adminweb/logout.php"><small>-- subtitle here --</small></a></li>
                    </ul>
                    <div class="logout-icon"><a href="http://localhost/sogi-admin-web-master/adminweb/logout.php"><i class="icon-exit2"></i></a></div>
                </div>
            </div>				
        </div>

        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active fadeIn" id="menu">
                <ul class="sidebar-accordion">
                    <li><br />&nbsp;&nbsp;&nbsp;</li>
                                            <li>
                            <a  href="http://localhost/sogi-admin-web-master/adminweb/dashboard/"><i class="icon-display4"></i> Dashboard </a>
                                                    </li>
                                            <li>
                            <a class="acc-parent active" href="#"><i class="icon-cart2"></i> Daftar Pesanan <span class="fa arrow"></span></a>
                                                            <ul>
                                                                    <li>
                                        <a href="http://localhost/sogi-admin-web-master/adminweb/pesanandalamproses/pesananbelumlunas/"><i class="fa fa-bars"></i> Menunggu</a>
                                    </li>
                                                                    <li>
                                        <a href="http://localhost/sogi-admin-web-master/adminweb/pesanandalamproses/pesanantelahdikirim/"><i class="fa fa-bars"></i> Dalam Proses</a>
                                    </li>
                                                                    <li>
                                        <a href="http://localhost/sogi-admin-web-master/adminweb/pesanandalamproses/pesananselesai/"><i class="fa fa-bars"></i> Selesai</a>
                                    </li>
                                                                    <li>
                                        <a href="http://localhost/sogi-admin-web-master/adminweb/pesanandalamproses/pesanandibatalkan/"><i class="fa fa-bars"></i> Dibatalkan</a>
                                    </li>
                                                                </ul>
                                                    </li>
                                            <li class="active acc-parent-li">
                            <a class="acc-parent active" href="#"><i class="icon-users"></i> Pelanggan & Mitra <span class="fa arrow"></span></a>
                                                            <ul>
                                                                    <li>
                                        <a href="http://localhost/sogi-admin-web-master/adminweb/mitra/"><i class="fa fa-users4"></i> Mitra</a>
                                    </li>
                                                                    <li>
                                        <a href="http://localhost/sogi-admin-web-master/adminweb/customer/"><i class="fa fa-users4"></i> Pelanggan</a>
                                    </li>
                                                                </ul>
                                                    </li>
                                            <li>
                            <a class="acc-parent active" href="#"><i class="icon-book"></i> Produk & Informasi <span class="fa arrow"></span></a>
                                                            <ul>
                                                                    <li>
                                        <a href="http://localhost/sogi-admin-web-master/adminweb/product/"><i class="fa fa-archive"></i> Produk</a>
                                    </li>
                                                                    <li>
                                        <a href="http://localhost/sogi-admin-web-master/adminweb/informasi/"><i class="fa fa-info3"></i> Informasi</a>
                                    </li>
                                                                </ul>
                                                    </li>
                                            <li>
                            <a class="acc-parent active" href="#"><i class="icon-cog3"></i> Pengaturan <span class="fa arrow"></span></a>
                                                            <ul>
                                                                    <li>
                                        <a href="http://localhost/sogi-admin-web-master/adminweb/pengaturan_aplikasi/"><i class="fa fa-edit"></i> Pengaturan Aplikasi</a>
                                    </li>
                                                                    <li>
                                        <a href="http://localhost/sogi-admin-web-master/adminweb/pengaturan_website/"><i class="fa fa-edit"></i> Pengaturan Konten</a>
                                    </li>
                                                                </ul>
                                                    </li>
                                            <li>
                            <a class="acc-parent active" href="#"><i class="icon-users"></i> Managemen User <span class="fa arrow"></span></a>
                                                            <ul>
                                                                    <li>
                                        <a href="http://localhost/sogi-admin-web-master/adminweb/jenisuser/"><i class="fa fa-truck"></i> Grup User</a>
                                    </li>
                                                                    <li>
                                        <a href="http://localhost/sogi-admin-web-master/adminweb/pengguna/"><i class="fa fa-truck"></i> User</a>
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
						<i class="icon-table position-left"></i> Mitra
					</div>
					<ul class="breadcrumb">
						<li><a href="http://localhost/sogi-admin-web-master/adminweb">Beranda</a></li>
						<li><a href="http://localhost/sogi-admin-web-master/adminweb/dashboard/">Mitra</a></li>
						<li class="active">List of Mitra</li>
					</ul>					
				</div>
			</div>		
			<!--/Page Header-->
		
			<div class="container-fluid page-content">
				<div class="panel panel-flat">
					<div class="panel-body no-padding-bottom">
						<div class="form-group">
															<div id='btn_aktif' class="btn btn-success disabled">Aktif</div>
								<div id='btn_non_aktif' class="btn btn-danger disabled">Non Aktif</div>
														<div id='btn_add' class="btn btn-primary">Baru</div>							<div id='btn_edit' class="btn btn-success disabled">Edit</div>							<div id='btn_delete' class="btn btn-danger disabled">Hapus</div>						</div>
						<div class="form-group">
							<table style="width: 100%;">
								<tr>
									<td width="20%" style="padding: 8px;"><label>Keyword Pencarian:</label></td>
									<td width="80%">
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
					</div>
					
					<div class="table-responsive">
						<table class="table table-togglable table-hover">
                                <thead>
                                    <tr>
                                        <th width="1%" class="no-sort"><input type="checkbox" id="select_all"  /></th>
                                        <th data-toggle="false"  style="width: 1% !important;"><div style="text-align: center;">No.</div></th>
                                        <th data-toggle="false" width="10%"><div style="text-align: left;">Nama</div></th>
                                        <th data-hide="phone" width="15%"><div style="text-align: center;">Email</div></th>
                                        <th data-hide="phone" width="10%"><div style="text-align: center;">Username</div></th>
                                        <th data-hide="phone" width="25%"><div style="text-align: center;">Alamat</div></th>
                                        <th data-toggle="false" width="5%"><div style="text-align: center;">Status</div></th>
                                        <th data-hide="phone" width="5%"><div style="text-align: center;">Aksi</div></th>
                                    </tr>

                                </thead>
									<tbody>

                                    
                                                                        
                                        <tr id="baris_154">
                                            <td align="center"><input type="checkbox" id_select="154" name="select_154" class="select" /></td>
                                            <td align="center">1</td>
                                            <td align="left">AHMAD  SALEH</td>
                                            <td align="left">ahmadsalehangsaigama@gmail.com</td>
                                            <td align="left">saleh</td>
                                            <td align="left">KERAMASAN <br />No. HP: 085267311959</td>
                                        	<td align="center"><span style="font-weight: bold; color: green;">Aktif</span></td>
                                            <td><div style="text-align: center;  white-space: nowrap;">
												<div id_select="154" class="btn btn-success edit">Edit</div>												<div id_select="154" class="btn btn-danger hapus">Hapus</div>											</div></td>            
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_153">
                                            <td align="center"><input type="checkbox" id_select="153" name="select_153" class="select" /></td>
                                            <td align="center">2</td>
                                            <td align="left">DEVITA  PUTRI UTAMI</td>
                                            <td align="left">vitaput71@gmail.com</td>
                                            <td align="left">devita</td>
                                            <td align="left">JL. SUTAN SYAHRIR LR. M SOLI NO.1063<br />No. HP: 089652089499</td>
                                        	<td align="center"><span style="font-weight: bold; color: green;">Aktif</span></td>
                                            <td><div style="text-align: center;  white-space: nowrap;">
												<div id_select="153" class="btn btn-success edit">Edit</div>												<div id_select="153" class="btn btn-danger hapus">Hapus</div>											</div></td>            
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_152">
                                            <td align="center"><input type="checkbox" id_select="152" name="select_152" class="select" /></td>
                                            <td align="center">3</td>
                                            <td align="left">MIKARDIANTO MIKARDIANTO</td>
                                            <td align="left">mhychar@yahoo.co.id</td>
                                            <td align="left">mikardianto</td>
                                            <td align="left">JL. GUBURNUR  HABASTARI BUNGARAN 3 <br />No. HP: 081373712371</td>
                                        	<td align="center"><span style="font-weight: bold; color: green;">Aktif</span></td>
                                            <td><div style="text-align: center;  white-space: nowrap;">
												<div id_select="152" class="btn btn-success edit">Edit</div>												<div id_select="152" class="btn btn-danger hapus">Hapus</div>											</div></td>            
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_151">
                                            <td align="center"><input type="checkbox" id_select="151" name="select_151" class="select" /></td>
                                            <td align="center">4</td>
                                            <td align="left">MAT LAPANG</td>
                                            <td align="left">juriati1945@gmail.com</td>
                                            <td align="left">matlapang</td>
                                            <td align="left">JL. ANGGREK UJUNG <br />No. HP: 085357730828</td>
                                        	<td align="center"><span style="font-weight: bold; color: green;">Aktif</span></td>
                                            <td><div style="text-align: center;  white-space: nowrap;">
												<div id_select="151" class="btn btn-success edit">Edit</div>												<div id_select="151" class="btn btn-danger hapus">Hapus</div>											</div></td>            
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_150">
                                            <td align="center"><input type="checkbox" id_select="150" name="select_150" class="select" /></td>
                                            <td align="center">5</td>
                                            <td align="left">EPIK HASTUTI</td>
                                            <td align="left">efikhartutievi011@gmail.com</td>
                                            <td align="left">efikhartuti</td>
                                            <td align="left">JL. HARAPAN NO. 9 RT25<br />No. HP: 082386728621</td>
                                        	<td align="center"><span style="font-weight: bold; color: green;">Aktif</span></td>
                                            <td><div style="text-align: center;  white-space: nowrap;">
												<div id_select="150" class="btn btn-success edit">Edit</div>												<div id_select="150" class="btn btn-danger hapus">Hapus</div>											</div></td>            
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_148">
                                            <td align="center"><input type="checkbox" id_select="148" name="select_148" class="select" /></td>
                                            <td align="center">6</td>
                                            <td align="left">YULIANSYAH TAMARA</td>
                                            <td align="left">Xutama@gmail.com</td>
                                            <td align="left">yuta</td>
                                            <td align="left">JL. KOPRAL RAMIN NO. 3763 B <br />No. HP: 0819681836</td>
                                        	<td align="center"><span style="font-weight: bold; color: green;">Aktif</span></td>
                                            <td><div style="text-align: center;  white-space: nowrap;">
												<div id_select="148" class="btn btn-success edit">Edit</div>												<div id_select="148" class="btn btn-danger hapus">Hapus</div>											</div></td>            
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_147">
                                            <td align="center"><input type="checkbox" id_select="147" name="select_147" class="select" /></td>
                                            <td align="center">7</td>
                                            <td align="left">LUKMAN  HAKIM</td>
                                            <td align="left">Nasionalgrafik@gmail.com</td>
                                            <td align="left">lukmanhakim</td>
                                            <td align="left">LR. PRAJURIT NANGYU<br />No. HP: 085273402347</td>
                                        	<td align="center"><span style="font-weight: bold; color: green;">Aktif</span></td>
                                            <td><div style="text-align: center;  white-space: nowrap;">
												<div id_select="147" class="btn btn-success edit">Edit</div>												<div id_select="147" class="btn btn-danger hapus">Hapus</div>											</div></td>            
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_146">
                                            <td align="center"><input type="checkbox" id_select="146" name="select_146" class="select" /></td>
                                            <td align="center">8</td>
                                            <td align="left">DIAN OKTARIANTI</td>
                                            <td align="left">dianputribae2018@gmail.com</td>
                                            <td align="left">dianoktarianti</td>
                                            <td align="left">JL. SUTAN SYAHRIR LR. MASJID NO. 40<br />No. HP: 089629568268</td>
                                        	<td align="center"><span style="font-weight: bold; color: green;">Aktif</span></td>
                                            <td><div style="text-align: center;  white-space: nowrap;">
												<div id_select="146" class="btn btn-success edit">Edit</div>												<div id_select="146" class="btn btn-danger hapus">Hapus</div>											</div></td>            
                                        </tr>
                                          
                                                                        
                                        <tr id="baris_145">
                                            <td align="center"><input type="checkbox" id_select="145" name="select_145" class="select" /></td>
                                            <td align="center">9</td>
                                            <td align="left">DEDE ROHMANA</td>
                                            <td align="left">dederohmana29829@gmail.com</td>
                                            <td align="left">dederohmana</td>
                                            <td align="left">LORONG SEPAKAT RT. 14/03 KEL. 9-10 ULU SEBERANG ULU 1 <br />No. HP: 082115235215</td>
                                        	<td align="center"><span style="font-weight: bold; color: green;">Aktif</span></td>
                                            <td><div style="text-align: center;  white-space: nowrap;">
												<div id_select="145" class="btn btn-success edit">Edit</div>												<div id_select="145" class="btn btn-danger hapus">Hapus</div>											</div></td>            
                                        </tr>
                                          
                                    
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
                    <a href="http://localhost/sogi-admin-web-master" target="_blank">SOGI</a>&nbsp;2020
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
<script src="http://localhost/sogi-admin-web-master/templates/back-end/penguin/js/jquery.js"></script>	
<script src="http://localhost/sogi-admin-web-master/templates/back-end/penguin/js/bootstrap.js"></script>
<script src="http://localhost/sogi-admin-web-master/templates/back-end/penguin/js/jquery.ui.js"></script>
<script src="http://localhost/sogi-admin-web-master/templates/back-end/penguin/js/nav.accordion.js"></script>	
<script src="http://localhost/sogi-admin-web-master/templates/back-end/penguin/js/hammerjs.js"></script>
<script src="http://localhost/sogi-admin-web-master/templates/back-end/penguin/js/jquery.hammer.js"></script>
<script src="http://localhost/sogi-admin-web-master/templates/back-end/penguin/js/scrollup.js"></script>	
<script src="http://localhost/sogi-admin-web-master/templates/back-end/penguin/js/jquery.slimscroll.js"></script>	
<script src="http://localhost/sogi-admin-web-master/templates/back-end/penguin/js/smart-resize.js"></script>
<script src="http://localhost/sogi-admin-web-master/templates/back-end/penguin/js/blockui.min.js"></script>		
<script src="http://localhost/sogi-admin-web-master/templates/back-end/penguin/js/wow.min.js"></script>					
<script src="http://localhost/sogi-admin-web-master/templates/back-end/penguin/js/fancybox.min.js"></script>
<script src="http://localhost/sogi-admin-web-master/templates/back-end/penguin/js/venobox.js"></script>
<script src="http://localhost/sogi-admin-web-master/templates/back-end/penguin/js/forms/uniform.min.js"></script>
<script src="http://localhost/sogi-admin-web-master/templates/back-end/penguin/js/forms/switchery.js"></script>
<script src="http://localhost/sogi-admin-web-master/templates/back-end/penguin/js/forms/select2.min.js"></script>	
<script src="http://localhost/sogi-admin-web-master/templates/back-end/penguin/js/core.js"></script>
<!-- /global scripts -->
<script type="text/javascript" src="http://localhost/sogi-admin-web-master/templates/back-end/penguin/js/moment.min.js"></script>
<script type="text/javascript" src="http://localhost/sogi-admin-web-master/templates/back-end/penguin/js/legacy.js"></script>
<script type="text/javascript" src="http://localhost/sogi-admin-web-master/templates/back-end/penguin/js/forms/daterangepicker.js"></script>
<script type="text/javascript" src="http://localhost/sogi-admin-web-master/templates/back-end/penguin/js/forms/picker.js"></script>
<script type="text/javascript" src="http://localhost/sogi-admin-web-master/templates/back-end/penguin/js/forms/picker.date.js"></script>
<script type="text/javascript" src="http://localhost/sogi-admin-web-master/templates/back-end/penguin/js/forms/picker.time.js"></script>
<script type="text/javascript" src="http://localhost/sogi-admin-web-master/templates/back-end/penguin/js/forms/spectrum.js"></script>
<script type="text/javascript" src="http://localhost/sogi-admin-web-master/templates/back-end/penguin/js/pages/pickers.js"></script>
<!-- Page scripts -->
<script src="http://localhost/sogi-admin-web-master/templates/back-end/penguin/js/tables/footable.min.js"></script>
<script src="http://localhost/sogi-admin-web-master/templates/back-end/penguin/js/pages/tables_responsive.js"></script>
<script src="http://localhost/sogi-admin-web-master/templates/back-end/penguin/assets/js/jquery-ui/jquery-ui-1.10.3.custom.min.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/blitzer/jquery-ui.css" type="text/css" />

<link href="http://localhost/sogi-admin-web-master/templates/back-end/penguin/assets/css/loadmask.css" rel="stylesheet" />
<script src="http://localhost/sogi-admin-web-master/templates/back-end/penguin/assets/js/jquery.loadmask.min.js"></script>



    
<!-- /page scripts -->
    <script type="text/javascript">

        $(function () {

            var delete_selected = "";
            $( "#btn_aktif" ).click(function() {
                updateStatus(delete_selected, 1);
            });

            $( "#btn_non_aktif" ).click(function() {
                updateStatus(delete_selected, 0);
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

            $( ".hapus" ).click(function() {
				var id = this.getAttribute('id_select');
				prosesDelete(id);
			});

			$( ".edit" ).click(function() {
				var id = this.getAttribute('id_select');
				window.location='edit.php?id='+id;
			});
            
            $( "#btn_cari" ).click(function() {
                var query = $( "#query" ).val();
                window.location='list.php'+(query.length>0?'?query='+query:'');
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

            function setButton() {

                var temp = new Array();
                if(delete_selected.length>0) temp = delete_selected.split(',');                
                $( "#btn_aktif" ).removeClass('disabled').addClass(temp.length>0?'':'disabled');
                $( "#btn_non_aktif" ).removeClass('disabled').addClass(temp.length>0?'':'disabled');
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
                    scrollTop: $('#wrapper').offset().top 
                }, 600);
            }

            function prosesDelete(id) {

                $('<div></div>').appendTo('body')
                .html('<div>Yakin ingin menghapus data?</div>')
                .dialog({
                    modal: true,
                    title: 'Konfirmasi Penghapusan',
                    zIndex: 10000,
                    autoOpen: true,
                    width: 'auto',
                    resizable: false,
                    buttons: {
                        Yes: function () {
                            $('#detail').mask('Hapus...');
                            $.ajax({
                                url: 'delete.php',
                                type: 'POST',
                                dataType: 'json',
                                data: { id: id },
                                success: function(data, textStatus, jqXHR) {
                                    if(data['success']) {
                                        window.location='list.php';
                                    } else {
                                        $('#detail').unmask();
                                        setMessage('error', data['message']);
                                    }
                                },

                                error: function(jqXHR, textStatus, errorThrown) {
                                    $('#detail').unmask();
                                    setMessage('error', 'Terjadi kesalahan system.');
                                }
                            });
                            $(this).dialog("close");
                        },

                        No: function () {
                            //doFunctionForNo();
                            $(this).dialog("close");
                        }
                    },

                    close: function (event, ui) {
                        $(this).remove();
                    }
                });                
            }

            function updateStatus(id, status) {

                $('<div></div>').appendTo('body')
                .html('<div>Yakin ingin merubah status?</div>')
                .dialog({
                    modal: true,
                    title: 'Konfirmasi',
                    zIndex: 10000,
                    autoOpen: true,
                    width: 'auto',
                    resizable: false,
                    buttons: {
                        Yes: function () {
                            $('#detail').mask('Update...');
                            $.ajax({
                                url: 'update.php',
                                type: 'POST',
                                dataType: 'json',
                                data: { id: id, status: status },
                                success: function(data, textStatus, jqXHR) {
                                    if(data['success']) {
                                        window.location='list.php';
                                    } else {
                                        $('#detail').unmask();
                                        setMessage('error', data['message']);
                                    }
                                },

                                error: function(jqXHR, textStatus, errorThrown) {
                                    $('#detail').unmask();
                                    setMessage('error', 'Terjadi kesalahan system.');
                                }
                            });
                            $(this).dialog("close");
                        },

                        No: function () {
                            $(this).dialog("close");
                        }
                    },

                    close: function (event, ui) {
                        $(this).remove();
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
                        url: 'http://localhost/sogi-admin-web-master/store/notifDataStore.php',
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
