<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-01-22 14:15:39
         compiled from "..\..\templates\back-end\penguin\product\androidedit.html" */ ?>
<?php /*%%SmartyHeaderCode:2835159615e27d72ab820d4-61560809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '330e5089de6ebc30cff24e55c5a2daaa3f9cde1a' => 
    array (
      0 => '..\\..\\templates\\back-end\\penguin\\product\\androidedit.html',
      1 => 1579677337,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2835159615e27d72ab820d4-61560809',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e27d72ac9cbe4_08547475',
  'variables' => 
  array (
    'title' => 0,
    'sub_title' => 0,
    'isEdit' => 0,
    'data' => 0,
    'entry' => 0,
    'listbrand' => 0,
    'datacategory' => 0,
    'listjenisuser' => 0,
    'foo' => 0,
    'no' => 0,
    'listfoto' => 0,
    'homeurl' => 0,
    'tpl_dir' => 0,
    'listgrosir' => 0,
    'listvarian' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e27d72ac9cbe4_08547475')) {function content_5e27d72ac9cbe4_08547475($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

	
    <!--Page Container-->
	<section class="main-container">	
			
			
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

            <div class="panel-body">
                <div id="wrapper" class="row" style="margin: 5px;">                    
                    <div id="alert_error" class="form-group" style="display: none;">
                        <div class="alert alert-danger">&nbsp;</div>
                    </div>
                
                    <div class="form-group">
                        <label for="kode">Kode Produk:</label>
                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['kode'];
}?>" class="form-control" name="kode" placeholder="" />
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama Produk:</label>
                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['nama'];
}?>" class="form-control" name="nama" placeholder="" />
                    </div>

                    <div class="form-group">
                        <label for="brand">Brand:</label>
                        <select class="form-control" name="id_brand">
                            <option value="0" <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true&&$_smarty_tpl->tpl_vars['entry']->value['id']==0) {?> selected="selected" <?php }?>>-- Pilih Brand --</option>                                        
                            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listbrand']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true&&$_smarty_tpl->tpl_vars['entry']->value['id']==$_smarty_tpl->tpl_vars['data']->value[0]['id_brand']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
</option>                                        
                            <?php } ?>                            
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="penjelasan">Penjelasan Produk:</label>
                        <div class="summernote"></div>
                    </div>

                    <div class="form-group">
                        <label class="control-label"><input type="checkbox" name="produk_terbaru" <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true&&$_smarty_tpl->tpl_vars['data']->value[0]['produk_terbaru']==1) {?>checked<?php }?> /> Atur sebagai Produk Terbaru.</label><br />
                        <label class="control-label"><input type="checkbox" name="produk_featured" <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true&&$_smarty_tpl->tpl_vars['data']->value[0]['produk_featured']==1) {?>checked<?php }?> /> Atur sebagai Produk Featured.</label><br />
                        <label class="control-label"><input type="checkbox" name="produk_preorder" <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true&&$_smarty_tpl->tpl_vars['data']->value[0]['produk_preorder']==1) {?>checked<?php }?> /> Atur sebagai Produk Pre Order.</label><br />
                        <label class="control-label"><input type="checkbox" name="produk_soldout" <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true&&$_smarty_tpl->tpl_vars['data']->value[0]['produk_soldout']==1) {?>checked<?php }?> /> Atur sebagai Produk Sold Out.</label><br />
                        <label class="control-label"><input type="checkbox" name="produk_freeongkir" <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true&&$_smarty_tpl->tpl_vars['data']->value[0]['produk_freeongkir']==1) {?>checked<?php }?> /> Atur sebagai Produk Free Ongkir.</label><br />
                    </div>

                    <div class="form-group">
                        <label for="kategori">Kategori Produk:</label>
                        <select multiple class="form-control" name="id_kategori" style="height: 200px;">
                            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datacategory']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                                <option <?php if ($_smarty_tpl->tpl_vars['entry']->value['id_parent']==0) {?>style="font-weight: bold;"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true&&$_smarty_tpl->tpl_vars['entry']->value['is_select']=='Y') {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
</option>                                        
                            <?php } ?>                            
                        </select>
                        <label>Gunakan tombol Ctrl untuk pilih lebih dari 1 kategori.</label>
                    </div>

                    <div class="form-group">
                        <label for="keyword">Katakunci Pencarian:</label>
                        <textarea class="form-control" style="height: 80px" name="keyword"><?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['keyword'];
}?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="berat_produk">Berat Produk:</label>
                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['berat'];
} else { ?>1,000<?php }?>" class="form-control harga" name="berat" placeholder="" />
                        <label for="label_berat_produk">Berat produk dalam Gram.</label>
                    </div>

                    <div class="form-group">
                        <label for="harga_modal">Harga Modal:</label>
                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['harga_modal'];
} else { ?>0<?php }?>" class="form-control harga" name="harga_modal" placeholder="" />
                    </div>

                    <div class="form-group">
                        <label for="harga_jual_umum">Harga Jual Normal:</label>
                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['harga_jual'];
} else { ?>0<?php }?>" class="form-control harga" name="harga_jual_umum" placeholder="" />
                    </div>

                    <div class="form-group">
                        <label for="harga_jual_jenis_user">Harga Jual Jenis User:</label>                        
                        <div id="detail_harga_jual" class="table-responsive">
                            <table id="tblHargaUser" width="100%">
                                <thead>
                                    <tr>
                                        <th width="50%"><div style="text-align: center;">Jenis User</div></th>
                                        <th width="50%"><div style="text-align: center;">Harga</div></th>
                                    </tr>
                                </thead>
                                <tbody id="hargauser">
                                    <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listjenisuser']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                                        <tr>
                                            <td style="padding: 5px;"><input type="hidden" name="id_jenis_user" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id_jenis_user'];?>
" /><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['jenis_user'];?>
" class="form-control" name="jenis_user" class="form-control" readonly="readOnly" /></td>
                                            <td style="padding: 5px;"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['harga_jual'];?>
" class="form-control harga" name="harga_jual" class="form-control" placeholder="" /></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="form-group">                        
                        <label for="harga_jual_grosir">Harga Jual Grosir:</label>
                        <div id="detail_grosir" class="table-responsive">
                            <table id="tblGrosir" width="100%">
                                <thead>
                                    <tr>
                                        <th width="30%"><div style="text-align: center;">Jumlah Min</div></th>
                                        <th width="30%"><div style="text-align: center;">Jumlah Max</div></th>
                                        <th width="30%"><div style="text-align: center;">Harga</div></th>
                                        <th width="5%"><div style="text-align: center;">&nbsp;</div></th>
                                        <th width="5%"><div style="text-align: center;">&nbsp;</div></th>
                                    </tr>
                                </thead>
                                <tbody id="grosir"></tbody>
                            </table>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="minimum_pesan">Minimum Pesan:</label>
                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['minimum_pesan'];
} else { ?>1<?php }?>" class="form-control harga" name="minimum_pesan" placeholder="" />
                    </div>

                    <div class="form-group">
                        <label for="harga_diskon">Harga Promo:</label>
                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['harga_diskon'];
} else { ?>0<?php }?>" class="form-control harga" name="harga_diskon" placeholder="" />
                    </div>

                    <div class="form-group">
                        <label for="from_date_harga_diskon">Tanggal Harga Promo Dari:</label>
                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['from_date_harga_diskon'];
}?>" class="form-control tanggal" name="from_date_harga_diskon" placeholder="" />
                    </div>

                    <div class="form-group">
                        <label for="to_date_harga_diskon">Tanggal Harga Promo Sampai:</label>
                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['to_date_harga_diskon'];
}?>" class="form-control tanggal" name="to_date_harga_diskon" placeholder="" />
                    </div>

                    <div class="form-group">
                        <label for="persen_diskon">Diskon Promo:</label>
                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['persen_diskon'];
} else { ?>0<?php }?>" class="form-control" name="persen_diskon" placeholder="" />
                    </div>

                    <div class="form-group">
                        <label for="from_date_persen_diskon">Tanggal Diskon Promo Dari:</label>
                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['from_date_persen_diskon'];
}?>" class="form-control tanggal" name="from_date_persen_diskon" placeholder="" />
                    </div>

                    <div class="form-group">
                        <label for="to_date_persen_diskon">Tanggal Diskon Promo Sampai:</label>
                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['to_date_persen_diskon'];
}?>" class="form-control tanggal" name="to_date_persen_diskon" placeholder="" />
                    </div>

                    <div class="form-group">                        
                        <label for="varian">Varian Stok:</label>
                        <div id="detail_varian" class="table-responsive">
                            <table id="tblVarian" width="100%">
                                <thead>
                                    <tr>
                                        <th width="30%"><div style="text-align: center;">Ukuran</div></th>
                                        <th width="30%"><div style="text-align: center;">Warna</div></th>
                                        <th width="30%"><div style="text-align: center;">Jumlah</div></th>
                                        <th width="5%"><div style="text-align: center;">&nbsp;</div></th>
                                        <th width="5%"><div style="text-align: center;">&nbsp;</div></th>
                                    </tr>
                                </thead>
                                <tbody id="varian"></tbody>
                            </table>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="photo">Foto Produk:</label>
                        <input type="file" id="fileupload_foto_1" name="fileupload_foto_1" multiple />
                    </div>

                    <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 20+1 - (1) : 1-(20)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                        <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['foo']->value-1, null, 0);?>
                        <div class="form-group">
                            <img id="preview_foto_<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" src="<?php if ($_smarty_tpl->tpl_vars['listfoto']->value[$_smarty_tpl->tpl_vars['no']->value]['nama_file']!='') {
echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/produk/<?php echo $_smarty_tpl->tpl_vars['listfoto']->value[$_smarty_tpl->tpl_vars['no']->value]['nama_file'];
} else { ?>#<?php }?>" style="height: 300px;<?php if ($_smarty_tpl->tpl_vars['listfoto']->value[$_smarty_tpl->tpl_vars['no']->value]['nama_file']=='') {?>display: none;<?php }?>" alt="<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" />
                            <div id="blok_hapus_<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" style="margin-top: 5px;<?php if ($_smarty_tpl->tpl_vars['listfoto']->value[$_smarty_tpl->tpl_vars['no']->value]['nama_file']=='') {?>display: none;<?php }?>">
                                <div id_hapus_foto="<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" class="btn btn btn-danger hapus_foto">Hapus</div>
                                <label class="control-label"><input type="checkbox" id="gambar_utama_<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" id_gambar_utama="<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" class="pilih_gambar_utama" <?php if ($_smarty_tpl->tpl_vars['listfoto']->value[$_smarty_tpl->tpl_vars['no']->value]['as_default']=='Y') {?>checked<?php }?> /> Atur sebagai gambar utama.</label>
                            </div>
                        </div>
                    <?php }} ?>
                    
                    <div class="form-group">
                        <label for="status">Status Produk:</label>
                        <select class="form-control" name="status">
                            <option value="1" <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true&&$_smarty_tpl->tpl_vars['data']->value[0]['status']=="1") {?> selected="selected" <?php }?>>Publish</option>
                            <option value="0" <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true&&$_smarty_tpl->tpl_vars['data']->value[0]['status']=="0") {?> selected="selected" <?php }?>>Unpublish</option>
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
/assets/bootstrap-fileinput/js/fileinput.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/js/jquery.input.formatter.js"><?php echo '</script'; ?>
>  

<!-- include summernote -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/dist/summernote.css">
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/dist/summernote.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/dist/summernote-ext-video.js"><?php echo '</script'; ?>
> 
<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/datepick/jquery.datepick.css" rel="stylesheet">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/datepick/jquery.plugin.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/datepick/jquery.datepick.js"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 type="text/javascript">

        $(function () {           
            <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable(1, null, 0);?>
            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listgrosir']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                var record = 
                    '<tr>' +
                        '<td style="padding: 5px;"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['jumlah_min'];?>
" name="jumlah_min" class="form-control harga" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['jumlah_max'];?>
" name="jumlah_max" class="form-control harga" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['harga'];?>
" name="harga" class="form-control harga" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><?php if ($_smarty_tpl->tpl_vars['no']->value==1) {?><div id="btn_tambah_grosir" class="btn btn-primary">Tambah</div><?php } elseif ($_smarty_tpl->tpl_vars['no']->value>1) {?><div class="btn btn-danger hapus_grosir">Hapus</div><?php }?></div></td>' +
                    '</tr>';
            
                $( record ).insertBefore( "#grosir" );
                <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>
            <?php } ?>

            <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable(1, null, 0);?>
            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listvarian']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                var record = 
                    '<tr>' +
                        '<td style="padding: 5px;"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['ukuran'];?>
" name="ukuran" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['warna'];?>
" name="warna" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['jumlah'];?>
" name="jumlah" class="form-control harga" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><?php if ($_smarty_tpl->tpl_vars['no']->value==1) {?><div id="btn_tambah_varian" class="btn btn-primary">Tambah</div><?php } elseif ($_smarty_tpl->tpl_vars['no']->value>1) {?><div class="btn btn-danger hapus_varian">Hapus</div><?php }?></div></td>' +
                    '</tr>';

                $( record ).insertBefore( "#varian" );
                <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>
            <?php } ?>

            $("input.harga").formatInput();

            var isEdit = <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {?>true<?php } else { ?>false<?php }?>;
            $('.summernote').summernote({
                height: 300,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    //['fontname', ['fontname']],
                    // ['fontsize', ['fontsize']], Still buggy
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    // ['height', ['height']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    //['view', ['fullscreen' , 'codeview' ]],
                    ['help', ['help']]
                ]
            });
            
            $(".summernote").code('<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['penjelasan'];
}?>');

            function setErrorMessage(message) {
                $('#alert_error .alert').text(message);
                $('#alert_error').show('slow');
                setTimeout(function() {
                    $('#alert_error').hide('slow');
                }, 5000);
                $("body, html").animate({ 
                    scrollTop: $('#wrapper').offset().top - 70
                }, 600);

            }

            $('#btn_simpan').click(function() {            
                submitProduk();
            });
            
            function submitProduk() {
                var grosir = ''; 
                var row = 0;
                $("#tblGrosir tr").each(function() {
                    if(row>0) {
                        var jumlah_min = $(this).find('[name=jumlah_min]').val();
                        var jumlah_max = $(this).find('[name=jumlah_max]').val();
                        var harga = $(this).find('[name=harga]').val();
                        grosir+=(grosir==''?'':'\n')+jumlah_min.replace(/\,/g, '')+'\t'+jumlah_max.replace(/\,/g, '')+'\t'+harga.replace(/\,/g, '');
                    } 
                    row++;
                });

                var varian = ''; 
                var row = 0;
                $("#tblVarian tr").each(function() {
                    if(row>0) {
                        var ukuran = $(this).find('[name=ukuran]').val();
                        var warna = $(this).find('[name=warna]').val();
                        var jumlah = $(this).find('[name=jumlah]').val();
                        varian+=(varian==''?'':'\n')+ukuran+'\t'+warna+'\t'+jumlah.replace(/\,/g, '');
                    } 
                    row++;
                });

                var harga_user = ''; 
                var row = 0;
                $("#tblHargaUser tr").each(function() {
                    if(row>0) {
                        var id_jenis_user = $(this).find('[name=id_jenis_user]').val();
                        var harga_jual = $(this).find('[name=harga_jual]').val();
                        harga_user+=(harga_user==''?'':'\n')+id_jenis_user+'\t'+harga_jual.replace(/\,/g, '');
                    } 
                    row++;
                });

                var data = new FormData();
                data.append('id', isEdit?'<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['id'];?>
':'');
                data.append('kode', $('[name=kode]').val());
                data.append('nama', $('[name=nama]').val());
                data.append('penjelasan', $('.summernote').summernote().code().replace(/\n/, '<br />'));
                data.append('id_brand', $('[name=id_brand]').val());
                data.append('produk_terbaru', $('[name=produk_terbaru]').is(':checked')?'1':'0');
                data.append('produk_featured', $('[name=produk_featured]').is(':checked')?'1':'0');
                data.append('produk_preorder', $('[name=produk_preorder]').is(':checked')?'1':'0');
                data.append('produk_soldout', $('[name=produk_soldout]').is(':checked')?'1':'0');
                data.append('produk_freeongkir', $('[name=produk_freeongkir]').is(':checked')?'1':'0');
                data.append('keyword', $('[name=keyword]').val());
                data.append('berat', $('[name=berat]').val().replace(/\,/g, ''));

                var kategori = $('[name=id_kategori]').val();
                $id_kategori = '';
                for(var key in kategori) {
                    $id_kategori+=(key>0?',':'')+kategori[key]
                }

                data.append('id_kategori', $id_kategori);
                data.append('harga_modal', ($('[name=harga_modal]').val()).replace(/\,/g, ''));
                data.append('harga_jual', ($('[name=harga_jual_umum]').val()).replace(/\,/g, ''));
                data.append('harga_jual_user', harga_user);
                data.append('minimum_pesan', ($('[name=minimum_pesan]').val()).replace(/\,/g, ''));               
                data.append('harga_diskon', ($('[name=harga_diskon]').val()).replace(/\,/g, ''));
                data.append('from_date_harga_diskon', $('[name=from_date_harga_diskon]').val());
                data.append('to_date_harga_diskon', $('[name=to_date_harga_diskon]').val());
                data.append('persen_diskon', $('[name=persen_diskon]').val());
                data.append('from_date_persen_diskon', $('[name=from_date_persen_diskon]').val());
                data.append('to_date_persen_diskon', $('[name=to_date_persen_diskon]').val());
                data.append('grosir', grosir);
                data.append('varian', varian);
                
                for(var key in files) {
                    data.append('filename_foto_'+(eval(key)+1), files[key]);
                    /*if(files[key]!=undefined && typeof files[key] === 'object') {
                        $.each(files[key], function(keys, value) {
                            alert();
                        });                        
                    }*/
                }

                for(var i=0; i<20; i++) {
                    if($('#gambar_utama_'+(i+1)).is(':checked')) {
                        data.append('as_default', (i+1));
                        //console.log('as_default: '+(i+1));
                        //alert('as_default: '+(i+1));
                        break;
                    }
                }
                
                var changes_data='';
                for(var key in changes) {
                    changes_data+=key+',';
                }
                console.log(changes_data);
                data.append('changes', changes_data);
                data.append('status', $('[name=status]').val());

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
                            swal('Sukses', 'Record Data Batal Disimpan', 'success')
                            window.location = 'list.php';                    
                        } else {
                            setErrorMessage(data['message']);                        
                        }
                    }, 

                    error: function() {
                        setLoading(false);
                        setErrorMessage('Proses simpan data produk gagal!');
                    }

                });
            }
            
            //FUNGSI GROSIR
            $( document ).on( 'click', '.hapus_grosir', function() {
                var element = $(this).closest('tr');
                element.remove();
            });
            
            $('#btn_tambah_grosir').click(function() {
                var record =
                    '<tr>' +
                        '<td style="padding: 5px;"><input type="text" value="" name="jumlah_min" class="form-control harga" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><input type="text" value="" name="jumlah_max" class="form-control harga" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><input type="text" value="" name="harga" class="form-control harga" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div class="btn btn-danger hapus_grosir">Hapus</div></div></td>' +
                    '</tr>';
                $( record ).insertBefore( "#grosir" );
                $("input.harga").formatInput();                         
            });

            //FUNGSI VARIANT
            $( document ).on( 'click', '.hapus_varian', function() {
                var element = $(this).closest('tr');
                element.remove();
            });

            $('#btn_tambah_varian').click(function() {
                var record = 
                    '<tr>' +
                        '<td style="padding: 5px;"><input type="text" value="" name="ukuran" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><input type="text" value="" name="warna" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><input type="text" value="" name="jumlah" class="form-control  harga" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div class="btn btn-danger hapus_varian">Hapus</div></div></td>' +
                    '</tr>';
                $( record ).insertBefore( "#varian" );
                $("input.harga").formatInput();                         
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

            //FUNGSI GAMBAR
            function readURL(input, id) {
                if (input.files && input.files[id-1]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#preview_foto_'+id).attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[id-1]);
                }
            }

            var files = new Array();
            <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 20+1 - (1) : 1-(20)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['foo']->value-1, null, 0);?>
                <?php if ($_smarty_tpl->tpl_vars['listfoto']->value[$_smarty_tpl->tpl_vars['no']->value]['nama_file']!='') {?>files[<?php echo $_smarty_tpl->tpl_vars['no']->value;?>
] = '<?php echo $_smarty_tpl->tpl_vars['listfoto']->value[$_smarty_tpl->tpl_vars['no']->value]['nama_file'];?>
';<?php }?>
            <?php }} ?>
            
            var changes = new Array();
            $("#fileupload_foto_1").change(function(event) {
                if(!event.target.files) return;
                var f = event.target.files;
                var len = f.length>20?20:f.length;
                for(var i=0; i < len; i++) {
                    readURL(this, i+1);
                    files[i] = f[i];
                    changes[i] = true;
                    console.log('changes '+i+ ' '+changes[i]);
                    $('#preview_foto_'+(i+1)).show();
                    $('#blok_hapus_'+(i+1)).show();
                }
                for(var i=1; i<20; i++) {
                    if($('#gambar_utama_'+(i+1)).is(':checked')) return;
                }
                $('#gambar_utama_1').prop('checked', true);
            });

            $('.hapus_foto').click(function() {
                var id = this.getAttribute("id_hapus_foto");
                files[eval(id)-1] = undefined;
                changes[eval(id)-1] = true;                
                $('#fileupload_foto_'+id).val('');
                $('#preview_foto_'+id).hide();
                $('#blok_hapus_'+id).hide();
                if($('#gambar_utama_'+id).is(':checked')) {
                    $('#gambar_utama_'+id).prop('checked', false);
                    for(var i=0; i<20; i++) {
                        if(files[i] != undefined) {
                            $('#gambar_utama_'+(i+1)).prop('checked', true);    
                            break;
                        }
                    }
                }
            });

            $('.pilih_gambar_utama').click(function() {
                var id = this.getAttribute("id_gambar_utama");
                for(var i=0; i<20; i++) {
                    $('#gambar_utama_'+(i+1)).prop('checked', id==i+1);
                }
            });
        });
    <?php echo '</script'; ?>
>

</body><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/footer_js.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

</html><?php }} ?>
