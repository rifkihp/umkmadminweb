<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-01-02 13:20:13
         compiled from "../../templates/back-end/penguin/message/edit.html" */ ?>
<?php /*%%SmartyHeaderCode:2476212825c2c581d855c03-15882941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08452609479c7c11d9252e15b6a1e106dcd14940' => 
    array (
      0 => '../../templates/back-end/penguin/message/edit.html',
      1 => 1538456120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2476212825c2c581d855c03-15882941',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'adminweburl' => 0,
    'sub_title' => 0,
    'homeurl' => 0,
    'detail_produk' => 0,
    'listkomentar' => 0,
    'entry' => 0,
    'no' => 0,
    'tpl_dir' => 0,
    'last_id_komentar' => 0,
    'is_chatting' => 0,
    'id_head' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5c2c581da554b9_11903994',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c2c581da554b9_11903994')) {function content_5c2c581da554b9_11903994($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

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
<div class="row">                    

                  <!-- DIRECT CHAT -->
                        <div class="box box-warning direct-chat direct-chat-warning">
                            <div class="box-header with-border">
                                <h3 class="box-title">Komunikasi Langsung</h3>

                                <div class="box-tools pull-right">
                                    <!-- span data-toggle="tooltip" title="3 New Messages" class="badge bg-yellow">3</span -->
                                    <!-- button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">
                                    <i class="fa fa-comments"></i></button>
                                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                                    </button -->
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <table>
                                        <tr>
                                            <td>
                                                <img align="left" style="margin: 10px;" src="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/produk/<?php if ($_smarty_tpl->tpl_vars['detail_produk']->value['gambar_utama']!='') {
echo $_smarty_tpl->tpl_vars['detail_produk']->value['gambar_utama'];
} else { ?>default.png<?php }?>" width="75" />                                            
                                            </td>
                                            <td valign="top">
                                                <div class="form-group" style="margin-top: 10px;"><?php echo $_smarty_tpl->tpl_vars['detail_produk']->value['kode'];?>
<br />
                                                <?php echo $_smarty_tpl->tpl_vars['detail_produk']->value['nama'];?>
</div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <!-- Conversations are loaded here -->
                                <div class="direct-chat-messages" style="height: 300px;">

                                    <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable(1, null, 0);?>
                                    <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listkomentar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['entry']->value['is_self']==0) {?>
                                            <!-- Message. Default to the left -->
                                            <div class="direct-chat-msg">
                                                <div class="direct-chat-info clearfix">
                                                    <span class="direct-chat-name pull-left"><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
</span>
                                                    <span class="direct-chat-timestamp pull-right"><?php echo $_smarty_tpl->tpl_vars['entry']->value['tanggal_komentar'];?>
</span>
                                                </div>

                                                <!-- /.direct-chat-info -->
                                                <img class="direct-chat-img" src="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/member/<?php echo $_smarty_tpl->tpl_vars['entry']->value['photo'];?>
" alt=""><!-- /.direct-chat-img -->
                                                <div class="direct-chat-text">
                                                    <?php echo $_smarty_tpl->tpl_vars['entry']->value['komentar'];?>

                                                </div>
                                            <!-- /.direct-chat-text -->
                                            </div>
                                            <!-- /.direct-chat-msg -->
                                        <?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['is_self']==1) {?>    
                                            <!-- Message to the right -->
                                            <div class="direct-chat-msg right">
                                                <div class="direct-chat-info clearfix">
                                                    <span class="direct-chat-name pull-right"><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
</span>
                                                    <span class="direct-chat-timestamp pull-left"><?php echo $_smarty_tpl->tpl_vars['entry']->value['tanggal_komentar'];?>
</span>
                                                </div>

                                                <!-- /.direct-chat-info -->
                                                <img class="direct-chat-img" src="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/member/admin.png" alt=""><!-- /.direct-chat-img -->
                                                <div class="direct-chat-text">
                                                    <?php echo $_smarty_tpl->tpl_vars['entry']->value['komentar'];?>

                                                </div>
                                            <!-- /.direct-chat-text -->
                                            </div>
                                            <!-- /.direct-chat-msg -->
                                        <?php }?>
                                        <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>  
                                    <?php } ?>

                                  </div>
                                  <!--/.direct-chat-messages-->


                                <!-- Contacts are loaded here -->
                                <div class="direct-chat-contacts">
                                    <ul class="contacts-list">
                                        <li>
                                            <a href="#">
                                                <img class="contacts-list-img" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/img/avatar5.png" alt="User Image">

                                                <div class="contacts-list-info">
                                                    <span class="contacts-list-name">
                                                        Count Dracula
                                                        <small class="contacts-list-date pull-right">2/28/2015</small>
                                                    </span>
                                                    <span class="contacts-list-msg">How have you been? I was...</span>
                                                </div>
                                            <!-- /.contacts-list-info -->
                                            </a>
                                        </li>
                                        <!-- End Contact Item -->

                                        <li>
                                            <a href="#">
                                                <img class="contacts-list-img" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/img/user7-128x128.jpg" alt="User Image">

                                                <div class="contacts-list-info">
                                                    <span class="contacts-list-name">
                                                        Sarah Doe
                                                        <small class="contacts-list-date pull-right">2/23/2015</small>
                                                    </span>
                                                    <span class="contacts-list-msg">I will be waiting for...</span>
                                                </div>
                                            <!-- /.contacts-list-info -->
                                            </a>
                                        </li>
                                        <!-- End Contact Item -->

                                        <li>
                                            <a href="#">
                                                <img class="contacts-list-img" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/img/avatar5.png" alt="User Image">

                                                <div class="contacts-list-info">
                                                    <span class="contacts-list-name">
                                                        Nadia Jolie
                                                        <small class="contacts-list-date pull-right">2/20/2015</small>
                                                    </span>
                                                    <span class="contacts-list-msg">I'll call you back at...</span>
                                                </div>
                                                <!-- /.contacts-list-info -->
                                            </a>
                                        </li>
                                        <!-- End Contact Item -->

                                        <li>
                                            <a href="#">
                                                <img class="contacts-list-img" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/img/user5-128x128.jpg" alt="User Image">

                                                <div class="contacts-list-info">
                                                    <span class="contacts-list-name">
                                                        Nora S. Vans
                                                        <small class="contacts-list-date pull-right">2/10/2015</small>
                                                    </span>
                                                    <span class="contacts-list-msg">Where is your new...</span>
                                                </div>
                                                <!-- /.contacts-list-info -->
                                            </a>
                                        </li>
                                        <!-- End Contact Item -->

                                        <li>
                                            <a href="#">
                                                <img class="contacts-list-img" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/img/user6-128x128.jpg" alt="User Image">

                                                <div class="contacts-list-info">
                                                    <span class="contacts-list-name">
                                                        John K.
                                                        <small class="contacts-list-date pull-right">1/27/2015</small>
                                                    </span>
                                                    <span class="contacts-list-msg">Can I take a look at...</span>
                                                </div>
                                                <!-- /.contacts-list-info -->
                                            </a>
                                        </li>
                                        <!-- End Contact Item -->

                                        <li>
                                            <a href="#">
                                                <img class="contacts-list-img" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/img/user8-128x128.jpg" alt="User Image">

                                                <div class="contacts-list-info">
                                                    <span class="contacts-list-name">
                                                        Kenneth M.
                                                        <small class="contacts-list-date pull-right">1/4/2015</small>
                                                    </span>
                                                    <span class="contacts-list-msg">Never mind I found...</span>
                                                </div>
                                                <!-- /.contacts-list-info -->
                                            </a>
                                        </li>
                                        <!-- End Contact Item -->

                                    </ul>
                                    <!-- /.contatcts-list -->

                                </div>
                                <!-- /.direct-chat-pane -->

                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <!-- form action="#" method="post" -->
                                    <input type="hidden" name="last_id_komentar" id="last_id_komentar" value="<?php echo $_smarty_tpl->tpl_vars['last_id_komentar']->value;?>
">
                                        <div class="input-group">
                                        <input type="text" name="komentar" placeholder="Tulis Pesan ..." class="form-control">
                                        <span class="input-group-btn">
                                            <button id="send_message" type="button" class="btn btn-warning btn-flat">Send</button>
                                        </span>
                                    </div>
                                <!-- /form -->
                            </div>
                            <!-- /.box-footer-->

                        </div>
                        <!--/.direct-chat -->

                        <div id="alert_error_komentar" class="form-group" style="display: none;">                         
                            <div class="alert alert-danger">Komentar harus diisi!</div>
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
<!-- Page scripts -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/editors/tinymce/tinymce.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/pages/editor_tinymce.js"><?php echo '</script'; ?>
>
<!-- /page scripts -->
    <?php echo '<script'; ?>
 type="text/javascript">            
        var is_sending = false;
        $(function () {
            
            var load_data_dashboard = function() {
                setTimeout(function() {
                    var data = new FormData();
                    data.append('last_id_order', $('[name=last_id_order]').val());
                    data.append('last_id_konfirmasi', $('[name=last_id_konfirmasi]').val());
                    data.append('last_id_pelanggan', $('[name=last_id_pelanggan]').val());
                
                    <?php if ($_smarty_tpl->tpl_vars['is_chatting']->value==true) {?>
                        data.append('id_head_komentar', '<?php echo $_smarty_tpl->tpl_vars['id_head']->value;?>
');
                        data.append('last_id_komentar', $('[name=last_id_komentar]').val());
                    <?php }?>
                        
                    $.ajax({
                        type: 'POST',
                        url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/notifDataStore.php',
                        data: data,
                        cache: false,
                        dataType: 'json',
                        processData: false, // Don't process the files
                        contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                        success: function(data) {

                            <?php if ($_smarty_tpl->tpl_vars['is_chatting']->value==true) {?>
                                if(data['data_komentar']) {
                                    var last_id_komentar = data['data_komentar']['last_id_komentar'];
                                    var list_komentar    = data['data_komentar']['list_new_komentar'];
                                    for(var key in list_komentar) {
                                        var message = list_komentar[key];        
                                        $( ".direct-chat-messages" ).append( '<div class="direct-chat-msg">' +
                                                '<div class="direct-chat-info clearfix">' +
                                            '<span class="direct-chat-name pull-right">'+message['nama']+'</span>' +
                                            '<span class="direct-chat-timestamp pull-left">'+message['tanggal_komentar']+'</span>' +
                                            '</div>' +
                                            '<img class="direct-chat-img" src="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/member/'+message['photo']+'" alt="">' +
                                            '<div class="direct-chat-text">' +
                                            message['komentar'] +
                                            '</div' +
                                            '</div>' 
                                        );
                                    }
                                    
                                    if(list_komentar.length>0) {
                                        $('#last_id_komentar').val(last_id_komentar);
                                        $('.direct-chat-messages').animate( { scrollTop: $('.direct-chat-messages').prop("scrollHeight") } , 500);
                                        $('embed').remove();
                                        $('body').append('<embed src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/sound/filling_your_inbox.mp3" autostart="true" hidden="true" loop="false">');
                                        //alert('new '+ last_id_komentar);
                                    }
                                }                      
                            <?php }?>


                            if(data['success']) {
                                //console.log('sebelum: '+data['data_message']);
                                if(data['data_message']!='') {
                                    var data_message = data['data_message'];
                                    
                                    //TOTAL NEW MESSAGE
                                    var total_new_message = eval(data_message['total_new_message']); //+last_total_new_message;
                                    $('#total_new_message').html(total_new_message);
                                    if(total_new_message>0) { $('#total_new_message').show(); } else { $('#total_new_message').hide(); }
                                    
                                                                        
                                    while($('#list_new_message').children()>0) {
                                        var lis = $('#list_new_message').children();
                                        $(lis.get(0)).remove();
                                    }
                                        
                                    var html_replace = '<ul id="list_new_message" class="dropdown-menu dropdown-messages">';
                                    var list_new_message = data_message['list_new_message'];
                                    for(var key in list_new_message) {
                                        html_replace+='<li>' +
                                            '<a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/message_in/edit.php?id='+list_new_message[key]["id"]+'">' +
                                                '<div style="white-space: nowrap;">' +
                                                    '<strong>'+list_new_message[key]["from_nama"]+' </strong>'+(list_new_message[key]["status"]==0?' <span class="pull-right label label-danger">'+list_new_message[key]["total_unread"]+'</span>':'') +
                                                '</div>' +
                                                '<div>' +
                                                    list_new_message[key]["pesan"] + ' ' +
                                                    '<span class="pull-right text-muted">' +
                                                        '<em>'+list_new_message[key]["waktu"]+'</em>' +
                                                    '</span> <br /><br />' +
                                                '</div>' +
                                            '</a>' +
                                        '</li>' +
                                        '<li class="divider"></li>';                                        
                                    }                           
                                    html_replace+='<li>' +
                                            '<a class="text-center" href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/message_in/">' +
                                                '<strong>Baca Semua Pesan</strong>' +
                                                '<i class="fa fa-angle-right"></i>' +
                                            '</a>' +
                                        '</li>' +
                                    '</ul>';
                                    $( '#list_new_message').replaceWith( html_replace ); 
                                }
                                
                                
                                //console.log('sebelum: '+data['data_order']);
                                if(data['data_order']!='') {
                                    //console.log('sesudah: '+data['data_order']);
                                    var data_order = data['data_order'];
                                    var last_total_new_order = eval($('#total_new_order').text());
                                    last_total_new_order = last_total_new_order==undefined?0:last_total_new_order;
                                    var total_new_order = eval(data_order['total_new_order'])+last_total_new_order;
                                    $('#total_new_order').html(total_new_order);
                                    if(total_new_order>0) { $('#total_new_order').show(); } else { $('#total_new_order').hide(); }
                                    
                                    var last_id_order = data_order['last_id_order'];
                                    $('[name=last_id_order]').val(last_id_order);
                                    
                                    while($('#list_new_order').children()>0) {
                                        var lis = $('#list_new_order').children();
                                        $(lis.get(0)).remove();
                                    }
                                        
                                    var html_replace = '<ul id="list_new_order" class="dropdown-menu dropdown-messages">';
                                    var list_new_order = data_order['list_new_order'];
                                    for(var key in list_new_order) {
                                        html_replace+='<li>' +
                                            '<a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/pemesanan/list.php?query=?id='+list_new_order[key]["kode"]+'">' +
                                                '<div style="white-space: nowrap;">' +
                                                    '<strong>Customer: '+(list_new_order[key]['id_member']==0?'Tamu':list_new_order[key]['nama'])+' </strong>'+(list_new_order[key]["status"]==0?' <span class="pull-right label label-danger">wait</span>':'') +
                                                '</div>' +
                                                
                                                '<div>' +
                                                    'ID Pesanan: #'+list_new_order[key]['kode']+' '+(list_new_order[key]['is_dropship']=='Y'?'<span class="label label-danger">DROPSHIP</span>':'')+'<br />' +
                                                    '<span class="label label-info">'+list_new_order[key]['jumlah']+' Pcs</span> <span class="label label-danger">Rp. '+list_new_order[key]['total']+'</span> ' +
                                                    '<span class="pull-right text-muted">' +
                                                        '<em>'+list_new_order[key]["waktu"]+'</em>' +
                                                    '</span> <br /><br />' +
                                                '</div>' +
                                            '</a>' +
                                        '</li>' +
                                        '<li class="divider"></li>';                                        
                                    }                           
                                    html_replace+='<li>' +
                                            '<a class="text-center" href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/pemesanan/">' +
                                                '<strong>Lihat Semua Pesanan</strong>' +
                                                '<i class="fa fa-angle-right"></i>' +
                                            '</a>' +
                                        '</li>' +
                                    '</ul>';
                                    $( '#list_new_order').replaceWith( html_replace ); 
                                }
                                
                                //console.log('sebelum: '+data['data_konfirmasi']);
                                if(data['data_konfirmasi']!='') {
                                    //console.log('sesudah: '+data['data_konfirmasi']);
                                    var data_konfirmasi = data['data_konfirmasi'];
                                    var last_total_new_konfirmasi = eval($('#total_new_konfirmasi').text());
                                    last_total_new_konfirmasi = last_total_new_konfirmasi==undefined?0:last_total_new_konfirmasi;
                                    var total_new_konfirmasi = eval(data_konfirmasi['total_new_konfirmasi'])+last_total_new_konfirmasi;
                                    $('#total_new_konfirmasi').html(total_new_konfirmasi);
                                    if(total_new_konfirmasi>0) { $('#total_new_konfirmasi').show(); } else { $('#total_new_konfirmasi').hide(); }
                                    
                                    var last_id_konfirmasi = data_konfirmasi['last_id_konfirmasi'];
                                    $('[name=last_id_konfirmasi]').val(last_id_konfirmasi);
                                    
                                    while($('#list_new_konfirmasi').children()>0) {
                                        var lis = $('#list_new_konfirmasi').children();
                                        $(lis.get(0)).remove();
                                    }
                                        
                                    var html_replace = '<ul id="list_new_konfirmasi" class="dropdown-menu dropdown-messages">';
                                    var list_new_konfirmasi = data_konfirmasi['list_new_konfirmasi'];
                                    for(var key in list_new_konfirmasi) {
                                        html_replace+='<li>' +
                                            '<a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/konfirmasi/list.php?query='+list_new_konfirmasi[key]["kode_pemesanan"]+'">' +
                                                '<div style="white-space: nowrap;">' +
                                                    '<strong>Customer: '+(list_new_konfirmasi[key]['id_member']==0?'Tamu':list_new_konfirmasi[key]['nama'])+' </strong>'+(list_new_konfirmasi[key]["status"]==0?' <span class="pull-right label label-danger">wait</span>':'') +
                                                '</div>' +                                                
                                                '<div>' +
                                                    list_new_konfirmasi[key]["text"] + ' ' +
                                                    '<span class="pull-right text-muted">' +
                                                        '<em>'+list_new_konfirmasi[key]["waktu"]+'</em>' +
                                                    '</span> <br /><br />' +
                                                '</div>' +
                                            '</a>' +
                                        '</li>' +
                                        '<li class="divider"></li>';                                        
                                    }                           
                                    html_replace+='<li>' +
                                            '<a class="text-center" href="konfirmasi/list.php">' +
                                                '<strong>Lihat Semua Konfirmasi</strong>' +
                                                '<i class="fa fa-angle-right"></i>' +
                                            '</a>' +
                                        '</li>' +
                                    '</ul>';
                                    $( '#list_new_konfirmasi').replaceWith( html_replace ); 
                                }
                                
                                
                                //console.log('sebelum: '+data['data_pelanggan']);
                                if(data['data_pelanggan']!='') {
                                    //console.log('sesudah: '+data['data_pelanggan']);
                                    var data_pelanggan = data['data_pelanggan'];
                                    var last_total_new_pelanggan = eval($('#total_new_pelanggan').text());
                                    last_total_new_pelanggan = last_total_new_pelanggan==undefined?0:last_total_new_pelanggan;
                                    var total_new_pelanggan = eval(data_pelanggan['total_new_pelanggan'])+last_total_new_pelanggan;
                                    $('#total_new_pelanggan').html(total_new_pelanggan);
                                    if(total_new_pelanggan>0) { $('#total_new_pelanggan').show(); } else { $('#total_new_pelanggan').hide(); }
                                    
                                    var last_id_pelanggan = data_pelanggan['last_id_pelanggan'];
                                    $('[name=last_id_pelanggan]').val(last_id_pelanggan);
                                    
                                    while($('#list_new_pelanggan').children()>0) {
                                        var lis = $('#list_new_pelanggan').children();
                                        $(lis.get(0)).remove();
                                    }
                                        
                                    var html_replace = '<ul id="list_new_pelanggan" class="dropdown-menu dropdown-messages">';
                                    var list_new_pelanggan = data_pelanggan['list_new_pelanggan'];
                                    for(var key in list_new_pelanggan) {
                                        html_replace+='<li>' +
                                            '<a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/customer/list.php?query='+list_new_pelanggan[key]["email"]+'&id='+list_new_pelanggan[key]["id"]+'">' +
                                                '<div style="white-space: nowrap;">' +
                                                    '<strong>Nama '+list_new_pelanggan[key]['nama']+' </strong>'+(list_new_pelanggan[key]["status"]==0?' <span class="pull-right label label-danger">baru</span>':'') +
                                                '</div>' +                                                
                                                '<div>' +
                                                    list_new_pelanggan[key]["email"] + ' ' +
                                                    '<span class="pull-right text-muted">' +
                                                        '<em>'+list_new_pelanggan[key]["waktu"]+'</em>' +
                                                    '</span> <br /><br />' +
                                                '</div>' +
                                            '</a>' +
                                        '</li>' +
                                        '<li class="divider"></li>';                                        
                                    }                           
                                    html_replace+='<li>' +
                                            '<a class="text-center" href="customer/list.php">' +
                                                '<strong>Lihat Semua Pelanggan</strong>' +
                                                '<i class="fa fa-angle-right"></i>' +
                                            '</a>' +
                                        '</li>' +
                                    '</ul>';
                                    $( '#list_new_pelanggan').replaceWith( html_replace ); 
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
            
            
            function sendMessage() {
                if($('[name=komentar]').val()=='') {
                    setErrorMessageKomentar('Komentar harus diisi!');
                    $('[name=komentar]').focus();
                    
                    return;
                } 
                
                var data = new FormData();
                data.append('id_head', '<?php echo $_smarty_tpl->tpl_vars['id_head']->value;?>
');
                data.append('komentar', $('[name=komentar]').val());
                
                //setLoadingKomentar(true);
            	$( "#send_message" ).text('...');
            	is_sending = true;
                $.ajax({
                    type: 'POST',
                    url: 'add_komentar.php',
                    data: data,
                    cache: false,
                    dataType: 'json',
                    processData: false, // Don't process the files
                    contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                    success: function(data) {
                		//setLoadingKomentar(false);
                    	$( "#send_message" ).text('Send');
            			is_sending = false;
                    
                        if(data['success']) {
                            var last_id_komentar = data['last_id_komentar'];
                        	var message = data['message'];
                        	$( ".direct-chat-messages" ).append( '<div class="direct-chat-msg right">' +
                                                                '<div class="direct-chat-info clearfix">' +
                                                                    '<span class="direct-chat-name pull-right">'+message['nama']+'</span>' +
                                                                    '<span class="direct-chat-timestamp pull-left">'+message['tanggal_komentar']+'</span>' +
                                                                '</div>' +

                                                                '<img class="direct-chat-img" src="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/member/'+message['photo']+'" alt="">' +
                                                                '<div class="direct-chat-text">' +
                                                                    message['komentar'] +
                                                                '</div' +
                                                            '</div>' );
                        	$('#last_id_komentar').val(last_id_komentar);
                        	$('.direct-chat-messages').animate( { scrollTop: $('.direct-chat-messages').prop("scrollHeight") } , 500);
                        	$('[name=komentar]').val('');
                        
                        } else {
                            setErrorMessageKomentar(data['message']);                        
                        }
                    }, 
                    error: function() {
                        //setLoadingKomentar(false);
                        $( "#send_message" ).text('Send');
            			is_sending = false;
                    	setErrorMessageKomentar('Kesalahan server. Mohon diulang kembali!');
                    }
                });
            }
            
            
            $('[name=komentar]').on("keypress", function(e) {
                    if (e.keyCode == 13) {
                        sendMessage();
                        return false;
                    }
            });
            
            $( "#send_message" ).click(function() {
            	if(is_sending) return;
            
                sendMessage();
                
            });
            
            
            
            function setErrorMessageKomentar(message) {
                $('#alert_error_komentar .alert').text(message);
                $('#alert_error_komentar').show('slow');
                setTimeout(function() {
                    $('#alert_error_komentar').hide('slow');
                }, 5000);                
            }
            
            $('.direct-chat-messages').animate( { scrollTop: $('.direct-chat-messages').prop("scrollHeight") } , 500);
        });
    <?php echo '</script'; ?>
>

</body><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/footer_js.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

</html><?php }} ?>
