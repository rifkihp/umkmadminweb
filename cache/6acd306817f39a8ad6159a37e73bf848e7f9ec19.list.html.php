<?php /*%%SmartyHeaderCode:18627651575f0198c0ea7c44-62125184%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6acd306817f39a8ad6159a37e73bf848e7f9ec19' => 
    array (
      0 => '..\\..\\templates\\back-end\\penguin\\product\\list.html',
      1 => 1592350419,
      2 => 'file',
    ),
    '2df2c9ac62c14bf9cd21e0097fb4725e6b68716e' => 
    array (
      0 => 'D:\\www\\bekamonline\\templates\\back-end\\penguin\\includes\\head.html',
      1 => 1592350430,
      2 => 'file',
    ),
    '5863fef7869a3dc0c587ac5f19847f6d56984788' => 
    array (
      0 => 'D:\\www\\bekamonline\\templates\\back-end\\penguin\\includes\\sidebar.html',
      1 => 1592350430,
      2 => 'file',
    ),
    '6a86ea33dfb5cde7af5ad0d6d4fb488beb7abdd4' => 
    array (
      0 => 'D:\\www\\bekamonline\\templates\\back-end\\penguin\\includes\\footer.html',
      1 => 1592350430,
      2 => 'file',
    ),
    '2760a483f6be578369069873379a0a7ad6882180' => 
    array (
      0 => 'D:\\www\\bekamonline\\templates\\back-end\\penguin\\includes\\footer_js.html',
      1 => 1592350430,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18627651575f0198c0ea7c44-62125184',
  'variables' => 
  array (
    'title' => 0,
    'adminweburl' => 0,
    'sub_title' => 0,
    'listmitra' => 0,
    'entry' => 0,
    'id_mitra' => 0,
    'query' => 0,
    'array_akses' => 0,
    'listdetail' => 0,
    'limitpage' => 0,
    'currentpage' => 0,
    'no' => 0,
    'homeurl' => 0,
    'totalpage' => 0,
    'id_event' => 0,
    'frompage' => 0,
    'untilpage' => 0,
    'item' => 0,
    'tpl_dir' => 0,
    'alert_success' => 0,
    'alert_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f0198c22cf456_66493574',
  'cache_lifetime' => 0,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f0198c22cf456_66493574')) {function content_5f0198c22cf456_66493574($_smarty_tpl) {?><!doctype html>
<html lang="en">
    <head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>BEKAM ONLINE</title>	
	<link href="http://192.168.8.106/bekamonline/templates/back-end/penguin/assets/images/favicon.ico" rel="icon" type="image/png">
	
	<!-- Global stylesheets -->	
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
	<link type="text/css" rel="stylesheet" href="http://192.168.8.106/bekamonline/templates/back-end/penguin/assets/fonts/fonts.css">
        <link type="text/css" rel="stylesheet" href="http://192.168.8.106/bekamonline/templates/back-end/penguin/assets/icons/icomoon/icomoon.css">
        <link type="text/css" rel="stylesheet" href="http://192.168.8.106/bekamonline/templates/back-end/penguin/css/animate.min.css">
	<link type="text/css" rel="stylesheet" href="http://192.168.8.106/bekamonline/templates/back-end/penguin/css/bootstrap.css">   
	<link type="text/css" rel="stylesheet" href="http://192.168.8.106/bekamonline/templates/back-end/penguin/css/core.css">	
	<link type="text/css" rel="stylesheet" href="http://192.168.8.106/bekamonline/templates/back-end/penguin/css/layout.css">	
	<link type="text/css" rel="stylesheet" href="http://192.168.8.106/bekamonline/templates/back-end/penguin/css/bootstrap-extended.css">	    
	<link type="text/css" rel="stylesheet" href="http://192.168.8.106/bekamonline/templates/back-end/penguin/css/components.css">
	<link type="text/css" rel="stylesheet" href="http://192.168.8.106/bekamonline/templates/back-end/penguin/css/plugins.css">
	<link type="text/css" rel="stylesheet" href="http://192.168.8.106/bekamonline/templates/back-end/penguin/css/loaders.css">
	<link type="text/css" rel="stylesheet" href="http://192.168.8.106/bekamonline/templates/back-end/penguin/css/responsive.css">
	<link type="text/css" rel="stylesheet" href="http://192.168.8.106/bekamonline/templates/back-end/penguin/css/color-system.css">		
	<link type="text/css" rel="stylesheet" href="http://192.168.8.106/bekamonline/templates/back-end/penguin/css/fancybox/jquery.fancybox.css">
	<link type="text/css" rel="stylesheet" href="http://192.168.8.106/bekamonline/templates/back-end/penguin/assets/sweetalert2/sweetalert2.min.css">
	<link type="text/css" rel="stylesheet" href="http://192.168.8.106/bekamonline/templates/back-end/penguin/assets/bootstrap-fileinput/css/fileinput.min.css">
	<link type="text/css" rel="stylesheet" href="http://192.168.8.106/bekamonline/templates/back-end/penguin/css/burnt_sienna_light.css">	
        <link type="text/css" rel="stylesheet" href="http://192.168.8.106/bekamonline/templates/back-end/penguin/css/AdminLTE.css" />
	<link type="text/css" rel="stylesheet" href="0" id="theme">
	<script src="http://192.168.8.106/bekamonline/templates/back-end/penguin/assets/sweetalert2/sweetalert2.min.js"></script>
	<script>
		var base_tpl_url = "http://192.168.8.106/bekamonline/templates/back-end/penguin/css/themes/";
		var base_url = "http://192.168.8.106/bekamonline/";
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
                                <a href="http://192.168.8.106/bekamonline/adminweb/pesanandalamproses/pesananbelumlunas/" class="dropdown-toggle" style="width: 100%; padding-left: 10px; padding-right: 30px;"><i class="icon-cart"></i>
                                <span id="total_notif_belum_lunas" class="bubble">57</span>
                                <span style="color: #ffffff">Belum Bayar / KEEP </span></a>
                            </li>
                        
                        
                                                    <li class="dropdown-toggle hidden-xs" style="border-left: 1px solid #ffffff;">
                                <a href="http://192.168.8.106/bekamonline/adminweb/pesanandalamproses/pesananperludikirim/" class="dropdown-toggle" style="width: 100%; padding-left: 10px; padding-right: 30px;"><i class="icon-box"></i>
                                <span id="total_notif_perlu_kemas" class="bubble">20</span>
                                <span style="color: #ffffff">Perlu Kemas </span></a>
                            </li>
                        
                                                    <li class="dropdown-toggle hidden-xs" style="border-left: 1px solid #ffffff;">
                                <a href="http://192.168.8.106/bekamonline/adminweb/customer/" class="dropdown-toggle" style="width: 100%; padding-left: 10px; padding-right: 30px;"><i class="icon-users4"></i>
                                <span id="total_notif_pelanggan_baru" class="bubble">111</span>
                                <span style="color: #ffffff;">Pelanggan Baru</span></a>
                            </li>
                        
                        		

                        <li class="dropdown user-dropdown" style="border-left: 1px solid #ffffff;padding-left: 10px">
                            <a href="http://192.168.8.106/bekamonline/adminweb#" class="btn-user dropdown-toggle hidden-xs" data-toggle="dropdown"><img src="http://192.168.8.106/bekamonline/templates/back-end/penguin/assets/images/faces/face1.png" class="img-circle user" alt=""/></a>
                            <a href="http://192.168.8.106/bekamonline/adminweb#" class="dropdown-toggle visible-xs" data-toggle="dropdown"><i class="icon-more"></i></a>
                            <div class="dropdown-menu">	
                                <div class="text-center"><img src="http://192.168.8.106/bekamonline/templates/back-end/penguin/assets/images/faces/face1.png" class="img-circle img-70" alt=""/></div>
                                <h5 class="text-center"><b>Hi! Administrator</b></h5>
                                <ul class="more-apps">
                                        <!-- li><a href="http://192.168.8.106/bekamonline/templates/back-end/penguin/material/user_profile_social.html"><i class="icon-profile"></i> My profile</a></li -->
                                        <!-- li><a href="http://192.168.8.106/bekamonline/adminweb#"><i class="icon-envelop5"></i> Inbox <span class="badge badge-danger pull-right">4</span></a></li -->
                                        <li><a href="http://192.168.8.106/bekamonline/adminweb/editprofile/"><i class="icon-profile"></i> My Profile</a></li>
                                        <li><a href="http://192.168.8.106/bekamonline/adminweb/gantipassword/edit.php"><i class="icon-lock5"></i> Ganti Password</a></li>
                                </ul>
                                <div class="text-center"><a href="http://192.168.8.106/bekamonline/adminweb/logout.php" class="btn btn-sm btn-info"><i class="icon-exit3 i-16 position-left"></i> Logout</a></div>
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
                    <img src="http://192.168.8.106/bekamonline/templates/back-end/penguin/assets/images/faces/face1.png" alt="admin" class="img-circle" />
                </div>

                <div class="admin-user-info">
                    <ul class="user-info">
                        <li><a href="http://192.168.8.106/bekamonline/adminweb/logout.php" class="text-semibold text-size-large">Administrator</a></li>
                        <li><a href="http://192.168.8.106/bekamonline/adminweb/logout.php"><small>-- subtitle here --</small></a></li>
                    </ul>
                    <div class="logout-icon"><a href="http://192.168.8.106/bekamonline/adminweb/logout.php"><i class="icon-exit2"></i></a></div>
                </div>
            </div>				
        </div>

        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active fadeIn" id="menu">
                <ul class="sidebar-accordion">
                    <li><br />&nbsp;&nbsp;&nbsp;</li>
                                            <li>
                            <a  href="http://192.168.8.106/bekamonline/adminweb/dashboard/"><i class="icon-display4"></i> Dashboard </a>
                                                    </li>
                                            <li>
                            <a class="acc-parent active" href="#"><i class="icon-cart2"></i> Daftar Pesanan <span class="fa arrow"></span></a>
                                                            <ul>
                                                                    <li>
                                        <a href="http://192.168.8.106/bekamonline/adminweb/pesanandalamproses/pesananbelumlunas/"><i class="fa fa-bars"></i> Menunggu</a>
                                    </li>
                                                                    <li>
                                        <a href="http://192.168.8.106/bekamonline/adminweb/pesanandalamproses/pesanantelahdikirim/"><i class="fa fa-bars"></i> Dalam Proses</a>
                                    </li>
                                                                    <li>
                                        <a href="http://192.168.8.106/bekamonline/adminweb/pesanandalamproses/pesananselesai/"><i class="fa fa-bars"></i> Selesai</a>
                                    </li>
                                                                    <li>
                                        <a href="http://192.168.8.106/bekamonline/adminweb/pesanandalamproses/pesanandibatalkan/"><i class="fa fa-bars"></i> Dibatalkan</a>
                                    </li>
                                                                </ul>
                                                    </li>
                                            <li>
                            <a class="acc-parent active" href="#"><i class="icon-users"></i> Pelanggan & Mitra <span class="fa arrow"></span></a>
                                                            <ul>
                                                                    <li>
                                        <a href="http://192.168.8.106/bekamonline/adminweb/mitra/"><i class="fa fa-users4"></i> Mitra</a>
                                    </li>
                                                                    <li>
                                        <a href="http://192.168.8.106/bekamonline/adminweb/customer/"><i class="fa fa-users4"></i> Pelanggan</a>
                                    </li>
                                                                </ul>
                                                    </li>
                                            <li class="active acc-parent-li">
                            <a class="acc-parent active" href="#"><i class="icon-book"></i> Produk & Informasi <span class="fa arrow"></span></a>
                                                            <ul>
                                                                    <li>
                                        <a href="http://192.168.8.106/bekamonline/adminweb/product/"><i class="fa fa-archive"></i> Produk</a>
                                    </li>
                                                                    <li>
                                        <a href="http://192.168.8.106/bekamonline/adminweb/informasi/"><i class="fa fa-info3"></i> Informasi</a>
                                    </li>
                                                                </ul>
                                                    </li>
                                            <li>
                            <a class="acc-parent active" href="#"><i class="icon-cog3"></i> Pengaturan <span class="fa arrow"></span></a>
                                                            <ul>
                                                                    <li>
                                        <a href="http://192.168.8.106/bekamonline/adminweb/pengaturan_aplikasi/"><i class="fa fa-edit"></i> Pengaturan Aplikasi</a>
                                    </li>
                                                                    <li>
                                        <a href="http://192.168.8.106/bekamonline/adminweb/pengaturan_website/"><i class="fa fa-edit"></i> Pengaturan Konten</a>
                                    </li>
                                                                </ul>
                                                    </li>
                                            <li>
                            <a class="acc-parent active" href="#"><i class="icon-users"></i> Managemen User <span class="fa arrow"></span></a>
                                                            <ul>
                                                                    <li>
                                        <a href="http://192.168.8.106/bekamonline/adminweb/jenisuser/"><i class="fa fa-truck"></i> Grup User</a>
                                    </li>
                                                                    <li>
                                        <a href="http://192.168.8.106/bekamonline/adminweb/pengguna/"><i class="fa fa-truck"></i> User</a>
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
						<li><a href="http://192.168.8.106/bekamonline/adminweb">Beranda</a></li>
						<li><a href="http://192.168.8.106/bekamonline/adminweb/dashboard/">Product</a></li>
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
																									<option value="145" >DEDE ROHMANA</option>
																									<option value="146" >DIAN OKTARIANTI</option>
																									<option value="147" >LUKMAN  HAKIM</option>
																									<option value="148" >YULIANSYAH TAMARA</option>
																									<option value="150" >EPIK HASTUTI</option>
																									<option value="151" >MAT LAPANG</option>
																									<option value="152" >MIKARDIANTO MIKARDIANTO</option>
																									<option value="153" >DEVITA  PUTRI UTAMI</option>
																									<option value="154" >AHMAD  SALEH</option>
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

                                
                                                                    

                                    <tr id="baris_1">

                                        <td align="center"><input type="checkbox" id_select="1" name="select_1" class="select" /></td>

                                        <td align="center"><small>1</small></td>

                                        <td align="center"><small>19-06-2020 06:12:00</small></td>

										<td align="left">DEDE ROHMANA</td>
                                        <td align="left">

                                            <img align="left" style="margin-right: 10px; margin-bottom: 10px; margin-top: 3px;" src="http://192.168.8.106/bekamonline/uploads/produk/cop +darah_3.jpeg" width="75" />

                                            <table><tr><td>

                                                PRO-001<br />
                                                Bekam<br /> 
                                                <small>Kategori: </small><br />
                                                <span style="font-weight: bold;"><small>Rp. 100,000</small></span><br />

                                                <span style="font-weight: bold;"><small>Status: </small><span style="color: green;"><small>Publish</small></span></span><br />

                                                
                                                
                                                
                                                
                                                                                                
                                                
                                                

                                            </td></tr></table>

										</td>
										
										

                                        <td><div style="text-align: center;  white-space: nowrap;">

                                                
                                                    <div id_select="1" class="btn btn-primary up">Up</div>

                                                    <div id_select="1" class="btn btn-success edit">Edit</div>

                                                
                                                <div id_select="1" class="btn btn-danger hapus">Hapus</div>                                                        

                                            </div>

                                        </td>                                          

                                    </tr>

                                      

                                                                    

                                    <tr id="baris_2">

                                        <td align="center"><input type="checkbox" id_select="2" name="select_2" class="select" /></td>

                                        <td align="center"><small>2</small></td>

                                        <td align="center"><small>19-06-2020 06:11:32</small></td>

										<td align="left">DIAN OKTARIANTI</td>
                                        <td align="left">

                                            <img align="left" style="margin-right: 10px; margin-bottom: 10px; margin-top: 3px;" src="http://192.168.8.106/bekamonline/uploads/produk/cop +darah_2.jpeg" width="75" />

                                            <table><tr><td>

                                                PRO-002<br />
                                                Bekam<br /> 
                                                <small>Kategori: </small><br />
                                                <span style="font-weight: bold;"><small>Rp. 100,000</small></span><br />

                                                <span style="font-weight: bold;"><small>Status: </small><span style="color: green;"><small>Publish</small></span></span><br />

                                                
                                                
                                                
                                                
                                                                                                
                                                
                                                

                                            </td></tr></table>

										</td>
										
										

                                        <td><div style="text-align: center;  white-space: nowrap;">

                                                
                                                    <div id_select="2" class="btn btn-primary up">Up</div>

                                                    <div id_select="2" class="btn btn-success edit">Edit</div>

                                                
                                                <div id_select="2" class="btn btn-danger hapus">Hapus</div>                                                        

                                            </div>

                                        </td>                                          

                                    </tr>

                                      

                                                                    

                                    <tr id="baris_3">

                                        <td align="center"><input type="checkbox" id_select="3" name="select_3" class="select" /></td>

                                        <td align="center"><small>3</small></td>

                                        <td align="center"><small>19-06-2020 06:11:03</small></td>

										<td align="left">LUKMAN  HAKIM</td>
                                        <td align="left">

                                            <img align="left" style="margin-right: 10px; margin-bottom: 10px; margin-top: 3px;" src="http://192.168.8.106/bekamonline/uploads/produk/cop +darah_1.jpeg" width="75" />

                                            <table><tr><td>

                                                PRO-003<br />
                                                Bekam<br /> 
                                                <small>Kategori: </small><br />
                                                <span style="font-weight: bold;"><small>Rp. 100,000</small></span><br />

                                                <span style="font-weight: bold;"><small>Status: </small><span style="color: green;"><small>Publish</small></span></span><br />

                                                
                                                
                                                
                                                
                                                                                                
                                                
                                                

                                            </td></tr></table>

										</td>
										
										

                                        <td><div style="text-align: center;  white-space: nowrap;">

                                                
                                                    <div id_select="3" class="btn btn-primary up">Up</div>

                                                    <div id_select="3" class="btn btn-success edit">Edit</div>

                                                
                                                <div id_select="3" class="btn btn-danger hapus">Hapus</div>                                                        

                                            </div>

                                        </td>                                          

                                    </tr>

                                      

                                                                    

                                    <tr id="baris_4">

                                        <td align="center"><input type="checkbox" id_select="4" name="select_4" class="select" /></td>

                                        <td align="center"><small>4</small></td>

                                        <td align="center"><small>19-06-2020 06:10:15</small></td>

										<td align="left">YULIANSYAH TAMARA</td>
                                        <td align="left">

                                            <img align="left" style="margin-right: 10px; margin-bottom: 10px; margin-top: 3px;" src="http://192.168.8.106/bekamonline/uploads/produk/cop +darah.jpeg" width="75" />

                                            <table><tr><td>

                                                PRO-004<br />
                                                Bekam<br /> 
                                                <small>Kategori: </small><br />
                                                <span style="font-weight: bold;"><small>Rp. 100,000</small></span><br />

                                                <span style="font-weight: bold;"><small>Status: </small><span style="color: green;"><small>Publish</small></span></span><br />

                                                
                                                
                                                
                                                
                                                                                                
                                                
                                                

                                            </td></tr></table>

										</td>
										
										

                                        <td><div style="text-align: center;  white-space: nowrap;">

                                                
                                                    <div id_select="4" class="btn btn-primary up">Up</div>

                                                    <div id_select="4" class="btn btn-success edit">Edit</div>

                                                
                                                <div id_select="4" class="btn btn-danger hapus">Hapus</div>                                                        

                                            </div>

                                        </td>                                          

                                    </tr>

                                      

                                
                            </tbody>

                            
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
                    <a href="http://192.168.8.106/bekamonline" target="_blank">BEKAM ONLINE</a>&nbsp;2020
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
<script src="http://192.168.8.106/bekamonline/templates/back-end/penguin/js/jquery.js"></script>	
<script src="http://192.168.8.106/bekamonline/templates/back-end/penguin/js/bootstrap.js"></script>
<script src="http://192.168.8.106/bekamonline/templates/back-end/penguin/js/jquery.ui.js"></script>
<script src="http://192.168.8.106/bekamonline/templates/back-end/penguin/js/nav.accordion.js"></script>	
<script src="http://192.168.8.106/bekamonline/templates/back-end/penguin/js/hammerjs.js"></script>
<script src="http://192.168.8.106/bekamonline/templates/back-end/penguin/js/jquery.hammer.js"></script>
<script src="http://192.168.8.106/bekamonline/templates/back-end/penguin/js/scrollup.js"></script>	
<script src="http://192.168.8.106/bekamonline/templates/back-end/penguin/js/jquery.slimscroll.js"></script>	
<script src="http://192.168.8.106/bekamonline/templates/back-end/penguin/js/smart-resize.js"></script>
<script src="http://192.168.8.106/bekamonline/templates/back-end/penguin/js/blockui.min.js"></script>		
<script src="http://192.168.8.106/bekamonline/templates/back-end/penguin/js/wow.min.js"></script>					
<script src="http://192.168.8.106/bekamonline/templates/back-end/penguin/js/fancybox.min.js"></script>
<script src="http://192.168.8.106/bekamonline/templates/back-end/penguin/js/venobox.js"></script>
<script src="http://192.168.8.106/bekamonline/templates/back-end/penguin/js/forms/uniform.min.js"></script>
<script src="http://192.168.8.106/bekamonline/templates/back-end/penguin/js/forms/switchery.js"></script>
<script src="http://192.168.8.106/bekamonline/templates/back-end/penguin/js/forms/select2.min.js"></script>	
<script src="http://192.168.8.106/bekamonline/templates/back-end/penguin/js/core.js"></script>
<!-- /global scripts -->
<script type="text/javascript" src="http://192.168.8.106/bekamonline/templates/back-end/penguin/js/moment.min.js"></script>
<script type="text/javascript" src="http://192.168.8.106/bekamonline/templates/back-end/penguin/js/legacy.js"></script>
<script type="text/javascript" src="http://192.168.8.106/bekamonline/templates/back-end/penguin/js/forms/daterangepicker.js"></script>
<script type="text/javascript" src="http://192.168.8.106/bekamonline/templates/back-end/penguin/js/forms/picker.js"></script>
<script type="text/javascript" src="http://192.168.8.106/bekamonline/templates/back-end/penguin/js/forms/picker.date.js"></script>
<script type="text/javascript" src="http://192.168.8.106/bekamonline/templates/back-end/penguin/js/forms/picker.time.js"></script>
<script type="text/javascript" src="http://192.168.8.106/bekamonline/templates/back-end/penguin/js/forms/spectrum.js"></script>
<script type="text/javascript" src="http://192.168.8.106/bekamonline/templates/back-end/penguin/js/pages/pickers.js"></script>
<!-- Page scripts -->
<script src="http://192.168.8.106/bekamonline/templates/back-end/penguin/js/tables/footable.min.js"></script>
<script src="http://192.168.8.106/bekamonline/templates/back-end/penguin/js/pages/tables_responsive.js"></script>
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
                        url: 'http://192.168.8.106/bekamonline/store/notifDataStore.php',
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
