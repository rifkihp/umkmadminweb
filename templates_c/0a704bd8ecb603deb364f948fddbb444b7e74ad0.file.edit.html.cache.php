<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-11-26 20:50:23
         compiled from "../../templates/back-end/penguin/customer/edit.html" */ ?>
<?php /*%%SmartyHeaderCode:498811235be14924de2472-35886867%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a704bd8ecb603deb364f948fddbb444b7e74ad0' => 
    array (
      0 => '../../templates/back-end/penguin/customer/edit.html',
      1 => 1543240058,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '498811235be14924de2472-35886867',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5be14924e960e8_30488957',
  'variables' => 
  array (
    'title' => 0,
    'adminweburl' => 0,
    'sub_title' => 0,
    'data' => 0,
    'isEdit' => 0,
    'tpl_dir' => 0,
    'listpropinsi' => 0,
    'entry' => 0,
    'jenis_user' => 0,
    'homeurl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be14924e960e8_30488957')) {function content_5be14924e960e8_30488957($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

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
			
			<div class="container-fluid page-content">				
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-flat">
							<div class="panel-heading">
								<h3 class="panel-title"><strong><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</strong></h3>				
								<h5 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['sub_title']->value;?>
</h5>				
							</div>

							<div class="panel panel-flat">
								<div class="form-group panel-body no-padding-bottom">
									<div class="row col-md-12">                    

										<div id="alert_error" class="form-group" style="display: none;">

											<div class="alert alert-danger">&nbsp;</div>

										</div>



										<div class="form-group">

											<label class="control-label">Nama Depan:</label>

											<input type="text" name="first_name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['first_name'];?>
" class="form-control" />

										</div>



										<div class="form-group">

											<label class="control-label">Nama Belakang:</label>

											<input type="text" name="last_name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['last_name'];?>
" class="form-control" />

										</div>



										<div class="form-group">

											<label class="control-label">No. HP:</label>

											<input type="text" name="no_hp" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['phone'];?>
" class="form-control" />

										</div>



										<div class="form-group">

											<label class="control-label">Email:</label>

											<input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['email'];?>
" class="form-control" />

										</div>



										<div class="form-group">

											<label for="password">Password Login:</label>

											<input type="password" value="" class="form-control" name="password" placeholder="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {?>Biarkan jika tidak ingin diganti.<?php }?>" />



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

													height: 120px;

													width: 120px;

													cursor: move;

												}

											</style>



											<div id="photo-editor">

												<div style=" float: right; margin-top: 5px; margin-left: 5px; position: absolute;"><input id="fileupload_photo" type="file" name="fileupload_photo" style="display:none;" class="cropit-image-input" /><a id="upload_photo"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/img/camera-icon.png" width="24px" height="20px" /></a></div>    

												<div class="cropit-image-preview"></div>

											</div>

										</div>



										<div class="form-group">

											<label class="control-label">Alamat:</label>

											<textarea name="alamat" class="form-control"><?php echo $_smarty_tpl->tpl_vars['data']->value[0]['alamat'];?>
</textarea>

										</div>



										<div class="form-group">

											<label class="control-label">Propinsi:</label>

											<select id="profil_prop" name="propinsi" class="form-control">

												<option value="0">-- Pilih Propinsi --</option>

												<?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listpropinsi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>

												<option value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['province_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['entry']->value['province_id']==$_smarty_tpl->tpl_vars['data']->value[0]['id_propinsi']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['entry']->value['province'];?>
</option>

												<?php } ?>

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

											<input type="text" name="kode_pos" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['kode_pos'];?>
" class="form-control" />

										</div>



										<div class="form-group">

											<label class="control-label">Jenis User:</label>

											<select name="jenis_user" class="form-control">

												<?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['jenis_user']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>

												<option value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['entry']->value['id']==$_smarty_tpl->tpl_vars['data']->value[0]['jenis_user']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
</option>

												<?php } ?>

											</select>

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
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/js/jquery.cropit.js"><?php echo '</script'; ?>
>  

    <?php echo '<script'; ?>
 type="text/javascript">

        $(function () {           

            var isEdit = <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {?>true<?php } else { ?>false<?php }?>;

            

            $('#photo-editor').cropit({

                smallImage: 'stretch',

                imageState: {

                    src: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/member/<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['photo'];?>
'

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

//                    scrollTop: $('#wrapper').offset().top 

                }, 600);

            }



            $('#btn_simpan').click(function() {

                

                var data = new FormData();

                var first_name     = $('[name=first_name]').val();

                var last_name      = $('[name=last_name]').val();

                var email          = $('[name=email]').val();

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

                data.append('id', isEdit?'<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['id'];?>
':'');

                data.append('firstname', first_name);

                data.append('lastname', last_name);

                data.append('email', email);

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
							swal('Sukses!', 'Record Data Telah Berhasil Disimpan!', 'success')

                            window.location = 'list.php';                    

                        } else {

                            setLoading(false);
							swal('Error!', data['message'], 'error')

                            setErrorMessage(data['message']);                        

                        }

                    }, 

                    error: function() {

                        setLoading(false);
						swal('Error!', 'Kesalahan server. Mohon diulang kembali!', 'error')

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

                    url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/getKota.php',

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

                        url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/getKecamatan.php',

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



            <?php if ($_smarty_tpl->tpl_vars['data']->value[0]['id_propinsi']>0) {?>loadKota('<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['id_propinsi'];?>
', '<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['id_kota'];?>
');<?php }?>

            <?php if ($_smarty_tpl->tpl_vars['data']->value[0]['id_kota']>0) {?>loadKecamatan('<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['id_kota'];?>
', '<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['id_kecamatan'];?>
');<?php }?>

        });

    <?php echo '</script'; ?>
>
</body><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/footer_js.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

</html><?php }} ?>
