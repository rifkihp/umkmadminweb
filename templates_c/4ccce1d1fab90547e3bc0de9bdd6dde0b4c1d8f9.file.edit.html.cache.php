<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-11-19 17:18:17
         compiled from "../../templates/back-end/penguin/voucher/edit.html" */ ?>
<?php /*%%SmartyHeaderCode:21326870985bf28de916b165-45266711%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ccce1d1fab90547e3bc0de9bdd6dde0b4c1d8f9' => 
    array (
      0 => '../../templates/back-end/penguin/voucher/edit.html',
      1 => 1538456116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21326870985bf28de916b165-45266711',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'adminweburl' => 0,
    'sub_title' => 0,
    'isEdit' => 0,
    'data' => 0,
    'tpl_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5bf28de9207271_90400542',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bf28de9207271_90400542')) {function content_5bf28de9207271_90400542($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

	<!--sidebar-->
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

	<!--/sidebar-->
	<!--Page Container-->
	<section class="main-container">	
			<!--Page Header-->
			<div class="header">
				<div class="header-content">
					<div class="page-title">
						<i class="icon-table position-left"></i> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

					</div>
					<ul class="breadcrumb">
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
">Beranda</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/dashboard/"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a></li>
						<li class="active"><?php echo $_smarty_tpl->tpl_vars['sub_title']->value;?>
</li>
					</ul>					
				</div>
			</div>		
			<!--/Page Header-->
			
			<div id="wrapper" class="container-fluid page-content">				
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-flat">
							

							<div class="panel panel-flat" style="margin: 5px;">
								<div class="form-group panel-body no-padding-bottom">
									<div id="alert_error" class="form-group" style="display: none;">
										<div class="alert alert-danger">&nbsp;</div>
									</div>

									<div class="form-group">

										<label for="kode_voucher">Kode Voucher:</label>

										<input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['kode_voucher'];
}?>" class="form-control" name="kode_voucher" placeholder="" />

									</div>



									<?php if ($_smarty_tpl->tpl_vars['isEdit']->value!=true) {?>

									<div class="form-group">

										<label for="jumlah">Jumlah Pembuatan:</label>

										<input type="text" value="1" class="form-control" name="jumlah" placeholder="" />

									</div>

									<?php }?>



									<div class="form-group">

										<label for="nominal">Nominal:</label>

										<input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['nominal'];
}?>" class="form-control harga" name="nominal" placeholder="" />

									</div>



									<div class="form-group">

										<label for="tipe_voucher">Tipe Voucher:</label>

										<select class="form-control" name="tipe_voucher">

											<option value="nominal" <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true&&$_smarty_tpl->tpl_vars['data']->value[0]['tipe_voucher']=="nominal") {?> selected="selected" <?php }?>>Nominal</option>

											<option value="persentase" <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true&&$_smarty_tpl->tpl_vars['data']->value[0]['tipe_voucher']=="persentase") {?> selected="selected" <?php }?>>Persentase</option>                            

										</select>

									</div>



									<div class="form-group">

										<label for="jenis_voucher">Jenis Voucher:</label>

										<select class="form-control" name="jenis_voucher">

											<option value="ongkir" <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true&&$_smarty_tpl->tpl_vars['data']->value[0]['jenis_voucher']=="ongkir") {?> selected="selected" <?php }?>>Ongkos Kirim</option>

											<option value="belanja" <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true&&$_smarty_tpl->tpl_vars['data']->value[0]['jenis_voucher']=="belanja") {?> selected="selected" <?php }?>>Belanja</option>                            

										</select>

									</div>



									<div class="form-group">

										<label for="batas_valid">Berlaku Hingga Tanggal :</label>

										<input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['batas_valid'];
}?>" class="form-control pickadate" name="batas_valid" placeholder="" />

									</div>



									<div class="form-group">

										<table>

											<tbody>

												<tr>

													<td width="100%">&nbsp;</td> 

													<td nowrap>

														<div id="i_loading" class="G-btn-animation" style="display: none;"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/img/loading.gif" /></div>                  

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
	
			<!--Rightbar Chat-->
			<aside class="rightbar">
				<div class="rightbar-container">
					<div class="right-chat-bar">
						<div class="coversation-header">
							<div class="chat-back" data-popup="tooltip" data-placement="left" title="Back">
								<i class="icon-arrow-left12"></i>
							</div>
							<div class="active-conversation">
								<div class="chat-avatar">
									<img src="assets/images/faces/face12.png" alt="user">
								</div>
								<div class="chat-user-status">
									<ul>
										<li class="text-semibold"> John Parker</li>
										<li><small>Online</small></li>
									</ul>
								</div>
							</div>
							<div class="conversation-actions">
								<ul>
									<li><i class="icon-phone-wave" data-popup="tooltip" data-placement="bottom" title="Call"></i></li>
									<li><i class="icon-attachment" data-popup="tooltip" data-placement="bottom" title="Send file"></i></li>
									<li><i class="icon-mic2" data-popup="tooltip" data-placement="bottom" title="Send voice"></i></li>
									<li><i class="icon-user-block" data-popup="tooltip" data-placement="bottom" title="Block"></i></li>					
								</ul>
							</div>
						</div>
						<div class="conversation-container">
							<div class="conversation-row even">
								<ul class="conversation-list">
									<li>
										<p>
											Lorem ipsum dolor sit amet?
										</p>
									</li>							
								</ul>
							</div>
							<div class="conversation-row odd">
								<ul class="conversation-list">
									<li>
										<p>
											Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus
										</p>
									</li>
								</ul>
							</div>
							<div class="conversation-row even">
								<ul class="conversation-list">
									<li>
										<p>
											Maecenas nec odio et ante tincidunt tempus. 
										</p>
									</li>
								</ul>
							</div>
							<div class="conversation-row even">
								<ul class="conversation-list">
									<li>						
										<a href="assets/images/demo/pic7.jpg" class="venobox"><img src="assets/images/demo/pic7.jpg" alt=""/></a>
									</li>
								</ul>
							</div>
							<div class="conversation-row odd">
								<ul class="conversation-list">
									<li>
										<p>
											Donec sodales :)
										</p>
									</li>
								</ul>
							</div>
						</div>
						<div class="chat-text-input">			
							<div class="input-group">
								<input type="text" class="form-control input-xs" placeholder="Type a message...">
								<span class="input-group-btn">
								<button class="btn btn-default" type="button"><i class="icon-enter5"></i></button>
								</span>
							</div>
						</div>
					</div>
					
					<div class="chat-user-toolbar clearfix">
						<div class="chat-user-search pull-left">
							<span class="addon-icon"><i class="icon-search4"></i></span>
							<input type="text" class="form-control" placeholder="Search">
						</div>
						<div class="add-chat-list pull-right">
							<i class="icon-user-plus" data-toggle="tooltip" data-placement="left" title="Add new user"></i>
						</div>
					</div>
					
					<div class="chat-user-container">			
						<ul class="chat-user-list">
							<li>
								<div><span class="chat-avatar"><img src="assets/images/faces/face1.png" alt="Avatar"></span><span class="chat-u-info">Jane Elliott<cite>Li Europan lingues es...</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
							<li>
								<div><span class="chat-avatar"><img src="assets/images/faces/face2.png" alt="Avatar"></span><span class="chat-u-info">Florence Douglas<cite>Busy</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
							<li class="chat-u-online">
								<div><span class="chat-avatar"><img src="assets/images/faces/face3.png" alt="Avatar"></span><span class="chat-u-info">Jacqueline Howell<cite>Available</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
							<li class="chat-u-online">
								<div><span class="chat-avatar"><img src="assets/images/faces/face4.png" alt="Avatar"></span><span class="chat-u-info">Eugine Turner<cite>Occidental in fact...</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
							<li class="chat-u-busy">
								<div><span class="chat-avatar"><img src="assets/images/faces/face5.png" alt="Avatar"></span><span class="chat-u-info">Andrew Brewer<cite>Busy</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
							<li class="chat-u-away">
								<div><span class="chat-avatar"><img src="assets/images/faces/face6.png" alt="Avatar"></span><span class="chat-u-info">Jonaly Smith<cite>Available</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
							<li class="chat-u-online">
								<div><span class="chat-avatar"><img src="assets/images/faces/face7.png" alt="Avatar"></span><span class="chat-u-info">Ann Porter<cite>Available</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
							<li class="chat-u-away">
								<div><span class="chat-avatar"><img src="assets/images/faces/face8.png" alt="Avatar"></span><span class="chat-u-info">John Deo<cite>Do not disturb</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
							<li>
								<div><span class="chat-avatar"><img src="assets/images/faces/face9.png" alt="Avatar"></span><span class="chat-u-info">Marilyn Romero<cite>On refusa continuar payar...</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
							<li>
								<div><span class="chat-avatar"><img src="assets/images/faces/face10.png" alt="Avatar"></span><span class="chat-u-info">Carol Gibson<cite>Gone for a weekend</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
							<li>
								<div><span class="chat-avatar"><img src="assets/images/faces/face11.png" alt="Avatar"></span><span class="chat-u-info">Scott Ruiz<cite>At solmen va esser...</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
						</ul>						
					</div>		
				</div>
			</aside>
			<!--/Rightbar Chat-->
				
		</div>
	
		<!--Footer -->
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

		<!--/Footer-->
		
	</section>
	<!--/Page Container-->
	
	<!-- div class="theme-switcher">
		<span class="theme-switcher-icon">
			<i class="icon icon-color-sampler"></i>
		</span>
		
		<div class="themes-container">
			<ul class="switch-theme-colors clearfix">
				<li class="list-title">Light</li>
				<li>
					<div class="theme" id="light">
						<img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/themes/light.jpg" alt=""/>
					</div>				
				</li>
				<li class="list-title clearfix">Mirage</li>
				<li>
					<div class="theme pull-left" id="mirage">
						<img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/themes/mirage_dark.jpg" alt=""/>
					</div>				
				</li>			
				<li>
					<div class="theme pull-left" id="mirage_light">
						<img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/themes/mirage_light.jpg" alt=""/>
					</div>				
				</li>
				<li>
					<div class="theme pull-left" id="mirage_light_sidebar">
						<img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/themes/mirage_light_sidebar.jpg" alt=""/>
					</div>				
				</li>										
				<li class="list-title clearfix">Burnt Sienna</li>
				<li>
					<div class="theme pull-left" id="burnt_sienna_dark">
						<img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/themes/burnt_sienna_dark.jpg" alt=""/>
					</div>				
				</li>			
				<li>
					<div class="theme pull-left" id="burnt_sienna_light">
						<img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/themes/burnt_sienna_light.jpg" alt=""/>
					</div>				
				</li>
				<li>
					<div class="theme pull-left" id="burnt_sienna_light_sidebar">
						<img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/themes/burnt_sienna_light_sidebar.jpg" alt=""/>
					</div>				
				</li>		

				<li class="list-title clearfix">Amethyst</li>
				<li>
					<div class="theme pull-left" id="amethyst_dark">
						<img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/themes/amethyst_dark.jpg" alt=""/>
					</div>				
				</li>			
				<li>
					<div class="theme pull-left" id="amethyst_light">
						<img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/themes/amethyst_light.jpg" alt=""/>
					</div>				
				</li>
				<li>
					<div class="theme pull-left" id="amethyst_light_sidebar">
						<img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/themes/amethyst_light_sidebar.jpg" alt=""/>
					</div>				
				</li>		

				<li class="list-title clearfix">Fuchsia Blue</li>
				<li>
					<div class="theme pull-left" id="fuchsiablue_dark">
						<img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/themes/fuchsiablue_dark.jpg" alt=""/>
					</div>				
				</li>			
				<li>
					<div class="theme pull-left" id="fuchsiablue_light">
						<img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/themes/fuchsiablue_light.jpg" alt=""/>
					</div>				
				</li>
				<li>
					<div class="theme pull-left" id="fuchsiablue_light_sidebar">
						<img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/themes/fuchsiablue_light_sidebar.jpg" alt=""/>
					</div>				
				</li>

				<li class="list-title clearfix">Picton Blue</li>
				<li>
					<div class="theme pull-left" id="pictonblue_dark">
						<img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/themes/pictonblue_dark.jpg" alt=""/>
					</div>				
				</li>			
				<li>
					<div class="theme pull-left" id="pictonblue_light">
						<img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/themes/pictonblue_light.jpg" alt=""/>
					</div>				
				</li>
				<li>
					<div class="theme pull-left" id="pictonblue_light_sidebar">
						<img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/themes/pictonblue_light_sidebar.jpg" alt=""/>
					</div>				
				</li>
				
				<li class="list-title clearfix">Jungle Green</li>
				<li>
					<div class="theme pull-left" id="junglegreen_dark">
						<img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/themes/junglegreen_dark.jpg" alt=""/>
					</div>				
				</li>			
				<li>
					<div class="theme pull-left" id="junglegreen_light">
						<img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/themes/junglegreen_light.jpg" alt=""/>
					</div>				
				</li>
				<li>
					<div class="theme pull-left" id="junglegreen_light_sidebar">
						<img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/themes/junglegreen_light_sidebar.jpg" alt=""/>
					</div>				
				</li>
				
				<li class="list-title clearfix">Fern</li>
				<li>
					<div class="theme pull-left" id="fern_dark">
						<img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/themes/fern_dark.jpg" alt=""/>
					</div>				
				</li>			
				<li>
					<div class="theme pull-left" id="fern_light">
						<img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/themes/fern_light.jpg" alt=""/>
					</div>				
				</li>
				<li>
					<div class="theme pull-left" id="fern_light_sidebar">
						<img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/themes/fern_light_sidebar.jpg" alt=""/>
					</div>				
				</li>
				
				<li class="list-title clearfix">Sunglow</li>
				<li>
					<div class="theme pull-left" id="sunglow_dark">
						<img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/themes/sunglow_dark.jpg" alt=""/>
					</div>				
				</li>			
				<li>
					<div class="theme pull-left" id="sunglow_light">
						<img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/themes/sunglow_light.jpg" alt=""/>
					</div>				
				</li>
				<li>
					<div class="theme pull-left" id="sunglow_light_sidebar">
						<img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/themes/sunglow_light_sidebar.jpg" alt=""/>
					</div>				
				</li>
				
				<li class="list-title clearfix">Regent Grey</li>
				<li>
					<div class="theme pull-left" id="regentgrey_dark">
						<img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/themes/regentgrey_dark.jpg" alt=""/>
					</div>				
				</li>			
				<li>
					<div class="theme pull-left" id="regentgrey_light">
						<img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/themes/regentgrey_light.jpg" alt=""/>
					</div>				
				</li>
				<li>
					<div class="theme pull-left" id="regentgrey_light_sidebar">
						<img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/themes/regentgrey_light_sidebar.jpg" alt=""/>
					</div>				
				</li>
			</ul>	
		</div>
	</div>

--><a id="scrollTop" href="index1.htm#top"><i class="icon-arrow-up12"></i></a>	

<!-- Global scripts -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/jquery.js"><?php echo '</script'; ?>
>	
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/bootstrap.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/jquery.ui.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/nav.accordion.js"><?php echo '</script'; ?>
>	
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/hammerjs.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/jquery.hammer.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/scrollup.js"><?php echo '</script'; ?>
>	
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/jquery.slimscroll.js"><?php echo '</script'; ?>
>	
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/smart-resize.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/blockui.min.js"><?php echo '</script'; ?>
>		
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/wow.min.js"><?php echo '</script'; ?>
>					
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/fancybox.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/venobox.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/forms/uniform.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/forms/switchery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/forms/select2.min.js"><?php echo '</script'; ?>
>	
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/core.js"><?php echo '</script'; ?>
>
<!-- /global scripts -->	
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/moment.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/legacy.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/forms/daterangepicker.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/forms/picker.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/forms/picker.date.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/forms/picker.time.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/forms/spectrum.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/pages/pickers.js"><?php echo '</script'; ?>
>
<!-- Page scripts -->
<!-- Page scripts -->
    <?php echo '<script'; ?>
 type="text/javascript">

        $(function () {

            var isEdit = <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {?>true<?php } else { ?>false<?php }?>;

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
            };

            $('#btn_simpan').click(function() {
                var data = new FormData();
                data.append('id', isEdit?'<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['id'];?>
':'');
                data.append('kode_voucher', $('[name=kode_voucher]').val());
                data.append('nominal', $('[name=nominal]').val().replace(/\,/g, ""));
                data.append('tipe_voucher', $('[name=tipe_voucher]').val());
                data.append('jenis_voucher', $('[name=jenis_voucher]').val());
                data.append('batas_valid', $('[name=batas_valid]').val());
                <?php if ($_smarty_tpl->tpl_vars['isEdit']->value!=true) {?>
                data.append('jumlah', $('[name=jumlah]').val().replace(/\,/g, ""));
                <?php }?>
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
                            window.location = 'list.php';                    
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
    <?php echo '</script'; ?>
>


</body><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/footer_js.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

</html><?php }} ?>
