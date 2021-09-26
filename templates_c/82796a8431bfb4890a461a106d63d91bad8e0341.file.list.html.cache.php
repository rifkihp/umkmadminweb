<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-11-01 10:03:16
         compiled from "../../templates/back-end/penguin/product/list.html" */ ?>
<?php /*%%SmartyHeaderCode:13327483585bda6cf407e3a8-00700622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82796a8431bfb4890a461a106d63d91bad8e0341' => 
    array (
      0 => '../../templates/back-end/penguin/product/list.html',
      1 => 1538456116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13327483585bda6cf407e3a8-00700622',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'adminweburl' => 0,
    'sub_title' => 0,
    'query' => 0,
    'produk_promo' => 0,
    'produk_featured' => 0,
    'produk_terbaru' => 0,
    'produk_preorder' => 0,
    'produk_soldout' => 0,
    'produk_freeongkir' => 0,
    'array_akses' => 0,
    'listdetail' => 0,
    'entry' => 0,
    'limitpage' => 0,
    'currentpage' => 0,
    'no' => 0,
    'homeurl' => 0,
    'totalpage' => 0,
    'jenis_produk' => 0,
    'frompage' => 0,
    'untilpage' => 0,
    'item' => 0,
    'tpl_dir' => 0,
    'alert_success' => 0,
    'alert_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5bda6cf42bf4d7_81400497',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bda6cf42bf4d7_81400497')) {function content_5bda6cf42bf4d7_81400497($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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
			
				<div class="panel panel-flat">
					<div class="form-group panel-body no-padding-bottom">
						<div class="form-group">
							<table style="width: 100%;">
								<tr>
									<td width="100%">
										<table>
											<tr>
												<td width="100%"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
" class="form-control" name="query" id="query" placeholder="Masukan kata kunci pencarian..." /></td>
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
							<label><input type="checkbox" name="produk_promo" <?php if ($_smarty_tpl->tpl_vars['produk_promo']->value==1) {?>checked<?php }?>> <span class="btn label btn-success btn-xs">promo</span></label>&nbsp;&nbsp;&nbsp;
							<label><input type="checkbox" name="produk_featured" <?php if ($_smarty_tpl->tpl_vars['produk_featured']->value==2) {?>checked<?php }?>> <span class="btn label btn-warning btn-xs">featured</span></label>&nbsp;&nbsp;&nbsp;
							<label><input type="checkbox" name="produk_terbaru"  <?php if ($_smarty_tpl->tpl_vars['produk_terbaru']->value==3) {?>checked<?php }?>> <span class="btn label btn-success btn-xs">baru</span></label>&nbsp;&nbsp;&nbsp;
							<label><input type="checkbox" name="produk_preorder" <?php if ($_smarty_tpl->tpl_vars['produk_preorder']->value==4) {?>checked<?php }?>> <span class="btn label btn-warning btn-xs">pre order</span></label>&nbsp;&nbsp;&nbsp;
							<label><input type="checkbox" name="produk_soldout"  <?php if ($_smarty_tpl->tpl_vars['produk_soldout']->value==5) {?>checked<?php }?>> <span class="btn label btn-danger btn-xs">sold out</span></label>&nbsp;&nbsp;&nbsp;
							<label><input type="checkbox" name="produk_freeongkir"  <?php if ($_smarty_tpl->tpl_vars['produk_freeongkir']->value==6) {?>checked<?php }?>> <span class="btn label btn-danger btn-xs">free ongkir</span></label>&nbsp;&nbsp;&nbsp;
						</div>
					    <div class="form-group">
			
					    <?php if (in_array('T',$_smarty_tpl->tpl_vars['array_akses']->value)) {?><div id='btn_add' class="btn btn-primary">Baru</div><?php }?>
		    
					    <?php if (in_array('E',$_smarty_tpl->tpl_vars['array_akses']->value)) {?><div id='btn_edit' class="btn btn-success disabled">Edit</div><?php }?>
		    
					    <?php if (in_array('H',$_smarty_tpl->tpl_vars['array_akses']->value)) {?><div id='btn_delete' class="btn btn-danger disabled">Hapus</div><?php }?>
			
					    </div>
					</div>
					
					<div class="table-responsive">
						<table class="table table-togglable table-hover">
                            <thead>

                                <tr>

                                    <th  width="1%"><input type="checkbox" id="select_all" /></th>

                                    <th data-toggle="false" width="1%"><div style="text-align: center;">No.</div></th>

                                    <th data-hide="phone, tablet" width="15%"><div style="text-align: center;">Tanggal / Jam</div></th>

                                    <th width="60%"><div style="text-align: left;">Nama</div></th>

                                    <th data-hide="phone, tablet" width="15%"><div style="text-align: center;">Aksi</div></th>

                                </tr>

                            </thead>

                            <tbody>

                                <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable(1, null, 0);?>

                                <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listdetail']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>                                    

                                    <tr id="baris_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
">

                                        <td align="center"><input type="checkbox" id_select="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" name="select_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="select" /></td>

                                        <td align="center"><small><?php echo $_smarty_tpl->tpl_vars['limitpage']->value*($_smarty_tpl->tpl_vars['currentpage']->value-1)+$_smarty_tpl->tpl_vars['no']->value;?>
</small></td>

                                        <td align="center"><small><?php echo $_smarty_tpl->tpl_vars['entry']->value['tanggal'];?>
</small></td>

                                        <td align="left">

                                            <img align="left" style="margin-right: 10px; margin-bottom: 10px; margin-top: 3px;" src="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/produk/<?php if ($_smarty_tpl->tpl_vars['entry']->value['foto1_produk']!='') {
echo $_smarty_tpl->tpl_vars['entry']->value['foto1_produk'];
} else { ?>default.png<?php }?>" width="75" />

                                            <table><tr><td>

                                                <?php echo $_smarty_tpl->tpl_vars['entry']->value['kode'];?>
<br />
                                                <?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
<br /> 
                                                <small>Kategori: <?php echo $_smarty_tpl->tpl_vars['entry']->value['kategori'];?>
</small><br />
                                                <span style="font-weight: bold;"><small>Rp. <?php echo $_smarty_tpl->tpl_vars['entry']->value['harga_jual'];?>
</small></span><br />

                                                <span style="font-weight: bold;"><small>Status: </small><span style="color: <?php if ($_smarty_tpl->tpl_vars['entry']->value['status']==1) {?>green<?php } else { ?>red<?php }?>;"><small><?php if ($_smarty_tpl->tpl_vars['entry']->value['status']==1) {?>Publish<?php } else { ?>Unpublish<?php }?></small></span></span><br />

                                                <?php if ($_smarty_tpl->tpl_vars['entry']->value['produk_promo']==1) {?><span class="btn label bg-green"><small>promo</small></span><?php }?>

                                                <?php if ($_smarty_tpl->tpl_vars['entry']->value['produk_featured']==1) {?><span class="btn label bg-yellow"><small>featured</small></span><?php }?>

                                                <?php if ($_smarty_tpl->tpl_vars['entry']->value['produk_terbaru']==1) {?><span class="btn label bg-green"><small>baru</small></span><?php }?>

                                                <?php if ($_smarty_tpl->tpl_vars['entry']->value['produk_preorder']==1) {?><span class="btn label bg-yellow"><small>pre order</small></span><?php }?>

                                                <?php if ($_smarty_tpl->tpl_vars['entry']->value['produk_soldout']==1) {?><span class="btn label bg-red"><small>sold out</small></span><?php }?>
                                                
                                                <?php if ($_smarty_tpl->tpl_vars['entry']->value['produk_freeongkir']==1) {?><span class="btn label bg-red"><small>free ongkir</small></span><?php }?>

                                                <?php if ($_smarty_tpl->tpl_vars['entry']->value['produk_promo']==1||$_smarty_tpl->tpl_vars['entry']->value['produk_featured']==1||$_smarty_tpl->tpl_vars['entry']->value['produk_terbaru']==1||$_smarty_tpl->tpl_vars['entry']->value['produk_preorder']==1||$_smarty_tpl->tpl_vars['entry']->value['produk_soldout']==1||$_smarty_tpl->tpl_vars['entry']->value['produk_freeongkir']==1) {?><br /><?php }?>


                                            </td></tr></table>

                                        </td>

                                        <td><div style="text-align: center;  white-space: nowrap;">

                                                <?php if (in_array('E',$_smarty_tpl->tpl_vars['array_akses']->value)) {?>

                                                    <div id_select="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="btn btn-primary up">Up</div>

                                                    <div id_select="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="btn btn-success edit">Edit</div>

                                                <?php }?>

                                                <?php if (in_array('H',$_smarty_tpl->tpl_vars['array_akses']->value)) {?><div id_select="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="btn btn-danger hapus">Hapus</div><?php }?>                                                        

                                            </div>

                                        </td>                                          

                                    </tr>

                                    <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>  

                                <?php } ?>

                            </tbody>

                            <?php if ($_smarty_tpl->tpl_vars['totalpage']->value>1) {?>

                            <tfoot><tr><th colspan="7">

                                <div style="text-align: center;">

                                    <?php if ($_smarty_tpl->tpl_vars['currentpage']->value>1) {?>                                

                                        <a class="btn btn-default" href="list.php?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value-1;
if ($_smarty_tpl->tpl_vars['query']->value!='') {?>&query=<?php echo $_smarty_tpl->tpl_vars['query']->value;
}
if ($_smarty_tpl->tpl_vars['jenis_produk']->value!='') {?>&jenis_produk=<?php echo $_smarty_tpl->tpl_vars['jenis_produk']->value;
}?>">&larr; Prev</a>

                                    <?php }?>

                                    <?php $_smarty_tpl->tpl_vars["item"] = new Smarty_variable($_smarty_tpl->tpl_vars['frompage']->value, null, 0);?>

                                    <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['untilpage']->value+1 - ($_smarty_tpl->tpl_vars['frompage']->value) : $_smarty_tpl->tpl_vars['frompage']->value-($_smarty_tpl->tpl_vars['untilpage']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = $_smarty_tpl->tpl_vars['frompage']->value, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>

                                        <?php if ($_smarty_tpl->tpl_vars['item']->value==$_smarty_tpl->tpl_vars['currentpage']->value) {?>

                                            <span class="btn btn-info"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</span>                                

                                        <?php } else { ?>

                                            <a class="btn btn-default" href="list.php?page=<?php echo $_smarty_tpl->tpl_vars['item']->value;
if ($_smarty_tpl->tpl_vars['query']->value!='') {?>&query=<?php echo $_smarty_tpl->tpl_vars['query']->value;
}
if ($_smarty_tpl->tpl_vars['jenis_produk']->value!='') {?>&jenis_produk=<?php echo $_smarty_tpl->tpl_vars['jenis_produk']->value;
}?>"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a>

                                        <?php }?>

                                        <?php $_smarty_tpl->tpl_vars["item"] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value+1, null, 0);?>                                

                                    <?php }} ?>

                                    <?php if ($_smarty_tpl->tpl_vars['totalpage']->value>$_smarty_tpl->tpl_vars['currentpage']->value) {?>                                

                                        <a class="btn btn-default" href="list.php?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value+1;
if ($_smarty_tpl->tpl_vars['query']->value!='') {?>&query=<?php echo $_smarty_tpl->tpl_vars['query']->value;
}
if ($_smarty_tpl->tpl_vars['jenis_produk']->value!='') {?>&jenis_produk=<?php echo $_smarty_tpl->tpl_vars['jenis_produk']->value;
}?>">Next &rarr;</a>

                                    <?php }?>                                

                                </div>  

                            </th></tr></tfoot>

                            <?php }?>

							</tbody>
						</table>
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
									<img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/faces/face12.png" alt="user">
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
										<a href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/demo/pic7.jpg" class="venobox"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/demo/pic7.jpg" alt=""/></a>
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
								<div><span class="chat-avatar"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/faces/face1.png" alt="Avatar"></span><span class="chat-u-info">Jane Elliott<cite>Li Europan lingues es...</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
							<li>
								<div><span class="chat-avatar"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/faces/face2.png" alt="Avatar"></span><span class="chat-u-info">Florence Douglas<cite>Busy</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
							<li class="chat-u-online">
								<div><span class="chat-avatar"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/faces/face3.png" alt="Avatar"></span><span class="chat-u-info">Jacqueline Howell<cite>Available</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
							<li class="chat-u-online">
								<div><span class="chat-avatar"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/faces/face4.png" alt="Avatar"></span><span class="chat-u-info">Eugine Turner<cite>Occidental in fact...</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
							<li class="chat-u-busy">
								<div><span class="chat-avatar"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/faces/face5.png" alt="Avatar"></span><span class="chat-u-info">Andrew Brewer<cite>Busy</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
							<li class="chat-u-away">
								<div><span class="chat-avatar"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/faces/face6.png" alt="Avatar"></span><span class="chat-u-info">Jonaly Smith<cite>Available</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
							<li class="chat-u-online">
								<div><span class="chat-avatar"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/faces/face7.png" alt="Avatar"></span><span class="chat-u-info">Ann Porter<cite>Available</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
							<li class="chat-u-away">
								<div><span class="chat-avatar"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/faces/face8.png" alt="Avatar"></span><span class="chat-u-info">John Deo<cite>Do not disturb</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
							<li>
								<div><span class="chat-avatar"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/faces/face9.png" alt="Avatar"></span><span class="chat-u-info">Marilyn Romero<cite>On refusa continuar payar...</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
							<li>
								<div><span class="chat-avatar"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/faces/face10.png" alt="Avatar"></span><span class="chat-u-info">Carol Gibson<cite>Gone for a weekend</cite></span>
								</div>
								<span class="chat-u-status"><i class="icon icon-circles"></i></span>
							</li>
							<li>
								<div><span class="chat-avatar"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/images/faces/face11.png" alt="Avatar"></span><span class="chat-u-info">Scott Ruiz<cite>At solmen va esser...</cite></span>
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

<a id="scrollTop" href="tables_responsive.htm#top"><i class="icon-arrow-up12"></i></a>	

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
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/tables/footable.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/pages/tables_responsive.js"><?php echo '</script'; ?>
>
<!-- /page scripts -->
    <?php echo '<script'; ?>
 type="text/javascript">

        $(function () {

            var delete_selected = "";

            

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

                var produk_promo = $( "[name=produk_promo]" ).is(':checked')?'1':'';

                var produk_featured = $( "[name=produk_featured]" ).is(':checked')?'2':'';

                var produk_terbaru = $( "[name=produk_terbaru]" ).is(':checked')?'3':'';

                var produk_preorder = $( "[name=produk_preorder]" ).is(':checked')?'4':'';

                var produk_soldout = $( "[name=produk_soldout]" ).is(':checked')?'5':'';

                

                window.location='list.php?'+

                    (query.length>0?'&query='+query:'')+

                    (produk_promo.length>0?'&produk_promo='+produk_promo:'')+

                    (produk_featured.length>0?'&produk_featured='+produk_featured:'')+

                    (produk_terbaru.length>0?'&produk_terbaru='+produk_terbaru:'')+

                    (produk_preorder.length>0?'&produk_preorder='+produk_preorder:'')+

                    (produk_soldout.length>0?'&produk_soldout='+produk_soldout:'');

            };

            

            $( "[name=produk_promo]" ).change(function() {

                proses_cari();

            });

            

            $( "[name=produk_featured]" ).change(function() {

                proses_cari();

            });

            

            $( "[name=produk_terbaru]" ).change(function() {

                proses_cari();

            });

            

            $( "[name=produk_preorder]" ).change(function() {

                proses_cari();

            });

            

            $( "[name=produk_soldout]" ).change(function() {

                proses_cari();

            });

            

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
								window.location='list.php<?php if ($_smarty_tpl->tpl_vars['query']->value!='') {?>?query=<?php echo $_smarty_tpl->tpl_vars['query']->value;
}?>';
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

                            window.location='list.php<?php if ($_smarty_tpl->tpl_vars['query']->value!='') {?>?query=<?php echo $_smarty_tpl->tpl_vars['query']->value;
}?>';

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

            

            <?php if ($_smarty_tpl->tpl_vars['alert_success']->value!='') {?>setMessage('success', '<?php echo $_smarty_tpl->tpl_vars['alert_success']->value;?>
');<?php }?>        

            <?php if ($_smarty_tpl->tpl_vars['alert_error']->value!='') {?>setMessage('error', '<?php echo $_smarty_tpl->tpl_vars['alert_error']->value;?>
');<?php }?> 

        });

    <?php echo '</script'; ?>
>

</body><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/footer_js.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

</html><?php }} ?>
