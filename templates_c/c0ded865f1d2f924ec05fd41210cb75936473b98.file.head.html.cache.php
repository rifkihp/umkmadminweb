<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-06-17 06:37:38
         compiled from "/home/u6060452/public_html/bekamonline/templates/back-end/penguin/includes/head.html" */ ?>
<?php /*%%SmartyHeaderCode:8004589245ee957c27a2079-48063758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0ded865f1d2f924ec05fd41210cb75936473b98' => 
    array (
      0 => '/home/u6060452/public_html/bekamonline/templates/back-end/penguin/includes/head.html',
      1 => 1592350430,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8004589245ee957c27a2079-48063758',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'appname' => 0,
    'tpl_dir' => 0,
    'homeurl' => 0,
    'is_android' => 0,
    'tampil_notif_belum_lunas' => 0,
    'adminweburl' => 0,
    'total_belum_lunas' => 0,
    'tampil_notif_konfirmasi_bayar' => 0,
    'total_konfirmasi_bayar' => 0,
    'tampil_notif_perlu_kemas' => 0,
    'total_perlu_kemas' => 0,
    'tampil_notif_pelanggan_baru' => 0,
    'total_pelanggan_baru' => 0,
    'tampil_notif_pesan_baru' => 0,
    'total_pesan_baru' => 0,
    'data_user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ee957c27ce373_81583416',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee957c27ce373_81583416')) {function content_5ee957c27ce373_81583416($_smarty_tpl) {?><!doctype html>
<html lang="en">
    <head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><?php echo $_smarty_tpl->tpl_vars['appname']->value;?>
</title>	
	<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/favicon.ico" rel="icon" type="image/png">
	
	<!-- Global stylesheets -->	
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
	<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/fonts/fonts.css">
        <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/icons/icomoon/icomoon.css">
        <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/css/animate.min.css">
	<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/css/bootstrap.css">   
	<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/css/core.css">	
	<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/css/layout.css">	
	<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/css/bootstrap-extended.css">	    
	<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/css/components.css">
	<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/css/plugins.css">
	<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/css/loaders.css">
	<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/css/responsive.css">
	<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/css/color-system.css">		
	<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/css/fancybox/jquery.fancybox.css">
	<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/sweetalert2/sweetalert2.min.css">
	<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/bootstrap-fileinput/css/fileinput.min.css">
	<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/css/burnt_sienna_light.css">	
        <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/css/AdminLTE.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo $_SESSION['tpl']-'theme';?>
" id="theme">
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/sweetalert2/sweetalert2.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
		var base_tpl_url = "<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/css/themes/";
		var base_url = "<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/";
	<?php echo '</script'; ?>
>
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
	<?php if ($_smarty_tpl->tpl_vars['is_android']->value!=true) {?>
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
                        <?php if ($_smarty_tpl->tpl_vars['tampil_notif_belum_lunas']->value==true) {?>
                            <li class="dropdown-toggle hidden-xs" style="border-left: 1px solid #ffffff;">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/pesanandalamproses/pesananbelumlunas/" class="dropdown-toggle" style="width: 100%; padding-left: 10px; padding-right: 30px;"><i class="icon-cart"></i>
                                <span id="total_notif_belum_lunas" class="bubble"<?php if ($_smarty_tpl->tpl_vars['total_belum_lunas']->value==0) {?> style="display: none"<?php }?>><?php echo $_smarty_tpl->tpl_vars['total_belum_lunas']->value;?>
</span>
                                <span style="color: #ffffff">Belum Bayar / KEEP </span></a>
                            </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['tampil_notif_konfirmasi_bayar']->value==true) {?>
                            <li class="dropdown-toggle hidden-xs" style="border-left: 1px solid #ffffff;">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/konfirmasi/list.php?status=0" class="dropdown-toggle" style="width: 100%; padding-left: 10px; padding-right: 30px;"><i class="icon-reading"></i>
                                <span id="total_notif_konfirmasi_bayar" class="bubble"<?php if ($_smarty_tpl->tpl_vars['total_konfirmasi_bayar']->value==0) {?> style="display: none"<?php }?>><?php echo $_smarty_tpl->tpl_vars['total_konfirmasi_bayar']->value;?>
</span>
                                <span style="color: #ffffff;">Konfirmasi Bayar </span></a>
                            </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['tampil_notif_perlu_kemas']->value==true) {?>
                            <li class="dropdown-toggle hidden-xs" style="border-left: 1px solid #ffffff;">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/pesanandalamproses/pesananperludikirim/" class="dropdown-toggle" style="width: 100%; padding-left: 10px; padding-right: 30px;"><i class="icon-box"></i>
                                <span id="total_notif_perlu_kemas" class="bubble"<?php if ($_smarty_tpl->tpl_vars['total_perlu_kemas']->value==0) {?> style="display: none"<?php }?>><?php echo $_smarty_tpl->tpl_vars['total_perlu_kemas']->value;?>
</span>
                                <span style="color: #ffffff">Perlu Kemas </span></a>
                            </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['tampil_notif_pelanggan_baru']->value==true) {?>
                            <li class="dropdown-toggle hidden-xs" style="border-left: 1px solid #ffffff;">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/customer/" class="dropdown-toggle" style="width: 100%; padding-left: 10px; padding-right: 30px;"><i class="icon-users4"></i>
                                <span id="total_notif_pelanggan_baru" class="bubble"<?php if ($_smarty_tpl->tpl_vars['total_pelanggan_baru']->value==0) {?> style="display: none"<?php }?>><?php echo $_smarty_tpl->tpl_vars['total_pelanggan_baru']->value;?>
</span>
                                <span style="color: #ffffff;">Pelanggan Baru</span></a>
                            </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['tampil_notif_pesan_baru']->value==true) {?>
                            <li class="dropdown-toggle hidden-xs" style="border-left: 1px solid #ffffff;">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/message_in/" class="dropdown-toggle" style="width: 100%; padding-left: 10px; padding-right: 30px;"><i class="icon-envelope"></i>
                                <span id="total_notif_pesan_baru" class="bubble"<?php if ($_smarty_tpl->tpl_vars['total_pesan_baru']->value==0) {?> style="display: none"<?php }?>><?php echo $_smarty_tpl->tpl_vars['total_pesan_baru']->value;?>
</span>
                                <span style="color: #ffffff">Pesan Baru </span></a>
                            </li>
                        <?php }?>		

                        <li class="dropdown user-dropdown" style="border-left: 1px solid #ffffff;padding-left: 10px">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
#" class="btn-user dropdown-toggle hidden-xs" data-toggle="dropdown"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/faces/face1.png" class="img-circle user" alt=""/></a>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
#" class="dropdown-toggle visible-xs" data-toggle="dropdown"><i class="icon-more"></i></a>
                            <div class="dropdown-menu">	
                                <div class="text-center"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/faces/face1.png" class="img-circle img-70" alt=""/></div>
                                <h5 class="text-center"><b>Hi! <?php echo $_smarty_tpl->tpl_vars['data_user']->value['nama'];?>
</b></h5>
                                <ul class="more-apps">
                                        <!-- li><a href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/material/user_profile_social.html"><i class="icon-profile"></i> My profile</a></li -->
                                        <!-- li><a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
#"><i class="icon-envelop5"></i> Inbox <span class="badge badge-danger pull-right">4</span></a></li -->
                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/editprofile/"><i class="icon-profile"></i> My Profile</a></li>
                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/gantipassword/edit.php"><i class="icon-lock5"></i> Ganti Password</a></li>
                                </ul>
                                <div class="text-center"><a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/logout.php" class="btn btn-sm btn-info"><i class="icon-exit3 i-16 position-left"></i> Logout</a></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
	</header>
<?php }?><?php }} ?>
