<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-01-22 11:27:29
         compiled from "..\templates\back-end\penguin\login.html" */ ?>
<?php /*%%SmartyHeaderCode:5710250335e27cf3141c393-89469682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e509b2b2e3088775c76040eeff155b12719dee4c' => 
    array (
      0 => '..\\templates\\back-end\\penguin\\login.html',
      1 => 1538456116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5710250335e27cf3141c393-89469682',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'appname' => 0,
    'tpl_dir' => 0,
    'loginusers' => 0,
    'entry' => 0,
    'homeurl' => 0,
    'appyear' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e27cf31499e25_12086795',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e27cf31499e25_12086795')) {function content_5e27cf31499e25_12086795($_smarty_tpl) {?><!doctype html>

<html style="height:100%">

<head>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title> <?php echo $_smarty_tpl->tpl_vars['appname']->value;?>
 </title>	

	<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/favicon.ico" rel="apple-touch-icon" type="image/png" sizes="144x144">

	<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/favicon.ico" rel="apple-touch-icon" type="image/png" sizes="114x114">

	<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/favicon.ico" rel="apple-touch-icon" type="image/png" sizes="72x72">

	<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/favicon.ico" rel="apple-touch-icon" type="image/png">

	<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/favicon.ico" rel="icon" type="image/png">

	<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/favicon.ico" rel="shortcut icon">

	

	<!-- Global stylesheets -->	

	<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/fonts/fonts.css">

    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/icons/icomoon/icomoon.css">    

	<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/css/bootstrap.css">   

	<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/css/core.css">

	<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/css/bootstrap-extended.css">	    		

	<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/css/plugins.css">	    		

	<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/css/color-system.css">

	<!-- /global stylesheets -->



</head>

<body style="height:100%; background:url('<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/assets/login_bg.jpg') no-repeat 0 0; background-size:cover;">

	<div class="login-container material">



		<!-- Page content -->

		<div class="page-content">



			<!-- Simple login form -->

			<form action="login.php" method="post">		
                            
                                <?php if (count($_smarty_tpl->tpl_vars['loginusers']->value['error'])>0) {?>
                                <div class="login-form no-border no-border-radius">
                                    <div id="alert_error" class="form-group">
                                        <div class="alert alert-danger">
                                            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['loginusers']->value['error']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                                                <?php echo $_smarty_tpl->tpl_vars['entry']->value;?>

                                            <?php } ?></div>
                                    </div>
                                </div>
                                <?php }?>

				<div class="login-form no-border no-border-radius" style="box-shadow: 5px 10px 30px rgba(0,0,0,0.3)">							

<!-- 					<div class="welcome bg-light p-t-20">						

						<div class="welcome-text text-size-huge text-light">

							<img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/logo3.png" style="height: 70px;">

							<img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/logo-light.png" style="height: 40px;">

						</div>

					</div> -->

					<div class="panel panel-flat no-border">

						<div class="panel-body no-padding-bottom">

							<div class="form-group">

								<input type="text" class="form-control" placeholder="Username" name="username" required="required">							

							</div>



							<div class="form-group">

								<input type="password" class="form-control" placeholder="Password" name="password" required="required">							

							</div>



							<div class="login-options">

								<div class="row">

									<div class="col-sm-6 col-xs-6">

										<div class="checkbox">

											<label>

												<input type="checkbox" class="styled" checked="checked">

												Remember me

											</label>

										</div>

									</div>



									<div class="col-sm-6 col-xs-6 text-right">

										<button type="submit" class="btn bg-blue no-border-radius">Login</button>																		

									</div>

								</div>

							</div>



							<div class="form-group text-center">

								<a href="http://localhost/templates/penguin/material/login_password_recover.html">Forgot password?</a>

							</div>

							

						</div>

						<div class="panel-footer text-center hide">

							<a href="login_material.htm#">Create an account</a>

						</div>

					</div>

				</div>

				

			</form>

			<!-- /simple login form -->





			<!-- Footer -->

			<div class="footer text-size-mini">

				<a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['appname']->value;?>
</a>&nbsp;<?php echo $_smarty_tpl->tpl_vars['appyear']->value;?>


			</div>

			<!-- /footer -->



		</div>

		<!-- /page content -->



	</div>



<!-- Global scripts -->

<?php echo '<script'; ?>
 type="text/javascript" src<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/jquery.js"><?php echo '</script'; ?>
>	

<?php echo '<script'; ?>
 type="text/javascript" src<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/bootstrap.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" src<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/forms/uniform.min.js"><?php echo '</script'; ?>
>	

<!-- /global scripts -->



<?php echo '<script'; ?>
>

$(function() {

	$(".styled, .multiselect-container input").uniform({

		radioClass: 'choice'

	});

	$('input,textarea').focus(function(){

	   $(this).data('placeholder',$(this).attr('placeholder'))

			  .attr('placeholder','');

	}).blur(function(){

	   $(this).attr('placeholder',$(this).data('placeholder'));

	});

});

<?php echo '</script'; ?>
>

</body>

</html><?php }} ?>
