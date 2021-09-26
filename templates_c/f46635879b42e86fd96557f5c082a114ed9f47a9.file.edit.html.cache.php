<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-11-01 10:00:47
         compiled from "../../templates/back-end/penguin/pemesanan/edit.html" */ ?>
<?php /*%%SmartyHeaderCode:6949938235bda6c5fbcc5d5-04287490%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f46635879b42e86fd96557f5c082a114ed9f47a9' => 
    array (
      0 => '../../templates/back-end/penguin/pemesanan/edit.html',
      1 => 1538456120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6949938235bda6c5fbcc5d5-04287490',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'adminweburl' => 0,
    'sub_title' => 0,
    'isEdit' => 0,
    'header' => 0,
    'current_date' => 0,
    'listpropinsi' => 0,
    'entry' => 0,
    'listkota' => 0,
    'listkecamatan' => 0,
    'listkurir' => 0,
    'ongkir' => 0,
    'listlayanan' => 0,
    'cara_bayar' => 0,
    'list_bank' => 0,
    'pembayaran' => 0,
    'tpl_dir' => 0,
    'from_page' => 0,
    'homeurl' => 0,
    'listdetail' => 0,
    'entry_ukuran_warna' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5bda6c5fed0cd6_22157314',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bda6c5fed0cd6_22157314')) {function content_5bda6c5fed0cd6_22157314($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

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
/pemesanan/"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
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

							<div class="panel-body">
        <div id="page-wrapper" class="col-md-12">

            <div id="page-inner">

                <!-- /. ROW  -->

                <div class="row">                    

                    <div id="alert_error" class="form-group" style="display: none;">

                        <div class="alert alert-danger">&nbsp;</div>

                    </div>

                

                    <div class="form-group">

                        <label for="kode">No. Pemesanan:</label>

                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['header']->value['kode'];
}?>" class="form-control" name="kode" readonly placeholder="Auto" />

                    </div>

                    

                    <div class="form-group">

                        <label for="tanggal">Tanggal Pemesanan:</label>

                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['header']->value['tanggal'];
} else {
echo $_smarty_tpl->tpl_vars['current_date']->value;
}?>" class="form-control pickadate" name="tanggal" />

                    </div>

                    

                    <div id="panel_member" class="form-group" <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true&&$_smarty_tpl->tpl_vars['header']->value['id_member']==0) {?>style="display: none;"<?php }?>>

                        <label for="kode_member">Member:</label>

                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['header']->value['nama_member'];
}?>" class="form-control" name="nama_member" />

                        <input type="hidden" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
if ($_smarty_tpl->tpl_vars['header']->value['id_member']!='') {
echo $_smarty_tpl->tpl_vars['header']->value['id_member'];
} else { ?>0<?php }
}?>" name="id_member" />

                    </div>

                    

                    <div class="form-group">

                        <label for="kepada">Kepada:</label>

                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['header']->value['nama'];
}?>" class="form-control" name="kepada" />

                    </div>

                    

                    <div class="form-group">

                        <label for="alamat">Alamat:</label>

                        <textarea class="form-control" name="alamat" style="height: 80px;"><?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['header']->value['alamat'];
}?></textarea>

                    </div>



                    <div class="form-group">

                        <label for="no_hp">No. HP:</label>

                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['header']->value['no_hp'];
}?>" class="form-control" name="no_hp" />

                    </div>



                    <div class="form-group">

                        <label for="propinsi">Propinsi:</label>

                        <select id="header_prop" name="propinsi" class="form-control">

                            <option value="0">-- Pilih Propinsi --</option>

                            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listpropinsi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>

                                <option value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['province_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['entry']->value['province_id']==$_smarty_tpl->tpl_vars['header']->value['id_propinsi']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['entry']->value['province'];?>
</option>

                            <?php } ?>

                        </select>

                    </div>



                    <div class="form-group">

                        <label for="kota">Kota:</label>

                        <select id="header_kota" name="kota" class="form-control">

                            <option value="0">-- Pilih Kota --</option>

                            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listkota']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>

                                <option value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['city_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['entry']->value['city_id']==$_smarty_tpl->tpl_vars['header']->value['id_kota']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['entry']->value['city_name'];?>
</option>

                            <?php } ?>

                        </select>

                    </div>

                    

                    <div class="form-group">

                        <label for="kecamatan">Kecamatan:</label>

                        <select id="header_kecamatan" name="kecamatan" class="form-control">

                            <option value="0">-- Pilih Kecamatan --</option>

                            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listkecamatan']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>

                                <option value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['subdistrict_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['entry']->value['subdistrict_id']==$_smarty_tpl->tpl_vars['header']->value['id_kecamatan']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['entry']->value['subdistrict_name'];?>
</option>

                            <?php } ?>

                        </select>

                    </div>

                    

                    <div class="form-group">

                        <label for="kode_pos">Kode Pos:</label>

                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['header']->value['kode_pos'];
}?>" class="form-control" name="kode_pos" />

                    </div>

                    

                    <div class="form-group">

                        <label for="kurir">Jasa Kurir:</label>

                        <select id="header_kurir" name="kurir" class="form-control">

                            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listkurir']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>

                                <option value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['kode'];?>
" <?php if ($_smarty_tpl->tpl_vars['entry']->value['kode']==$_smarty_tpl->tpl_vars['ongkir']->value['kurir']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
</option>

                            <?php } ?>

                            <!-- option value="0" <?php if ($_smarty_tpl->tpl_vars['ongkir']->value['kurir']=='0') {?> selected="selected" <?php }?>>LAINNYA</option -->                            

                        </select>

                    </div>



                    <div class="form-group">

                        <label for="layanan">Layanan:</label>

                        <select id="header_layanan" name="layanan"  class="form-control">

                            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listlayanan']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>

                                <option value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['service'];?>
" <?php if ($_smarty_tpl->tpl_vars['entry']->value['service']==$_smarty_tpl->tpl_vars['ongkir']->value['layanan']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['entry']->value['description'];?>
 <?php if ($_smarty_tpl->tpl_vars['entry']->value['service']!=$_smarty_tpl->tpl_vars['entry']->value['description']) {?>(<?php echo $_smarty_tpl->tpl_vars['entry']->value['service'];?>
)<?php }?></option>

                            <?php } ?>

                        </select>

                    </div>

                    

                    <div class="form-group">

                        <label for="jenis">Jenis Pesanan:</label>

                        <select name="is_dropship" class="form-control">

                            <option value="N" <?php if ($_smarty_tpl->tpl_vars['header']->value['is_dropship']=='N') {?> selected="selected" <?php }?>>Bukan Dropship</option>

                            <option value="Y" <?php if ($_smarty_tpl->tpl_vars['header']->value['is_dropship']=='Y') {?> selected="selected" <?php }?>>Dropship</option>

                        </select>                            

                    </div>

                    

                    <div class="form-group" id="p_dropship_name" <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true&&$_smarty_tpl->tpl_vars['header']->value['is_dropship']=="Y") {
} else { ?>style="display: none;"<?php }?>>

                        <label for="dropship_name">Nama Dropshiper:</label>

                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['header']->value['dropship_name'];
}?>" class="form-control" name="dropship_name" />

                    </div>



                    <div class="form-group" id="p_dropship_phone" <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true&&$_smarty_tpl->tpl_vars['header']->value['is_dropship']=="Y") {
} else { ?>style="display: none;"<?php }?>>

                        <label for="dropship_phone">No. HP Dropshiper:</label>

                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['header']->value['dropship_phone'];
}?>" class="form-control" name="dropship_phone" />

                    </div>

                    

                    <div id="p_email_notifikasi" class="form-group" <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true&&$_smarty_tpl->tpl_vars['header']->value['id_member']>0) {?>style="display: none;"<?php }?>>

                        <label for="email_notifikasi">Email Notifikasi: </label>

                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['header']->value['email_notifikasi'];
}?>" class="form-control" name="email_notifikasi" />                                                        

                    </div>

                    

                    <div id="list_detail" class="table-responsive" style="margin-top: 10px;">

                        <div class="form-group">

                            <label for="detail_produk">Detail Produk Pesanan:</label>

                            <table  id="tblDetail_produk" class="table table-striped table-bordered table-hover" width="100%">

                                <thead>

                                    <tr>

                                        <th width="5px"><span class="fa fa-trash-o"></span></th>

                                        <th width="25%"><div style="text-align: center;">Nama Barang</div></th>

                                        <th width="20%"><div style="text-align: center;">Ukuran / Warna</div></th>

                                        <th width="10%"><div style="text-align: center;">Qty</div></th>

                                        <th width="10%"><div style="text-align: center;">Harga</div></th>

                                        <th width="10%"><div style="text-align: center;">Diskon</div></th>

                                        <th width="10%"><div style="text-align: center;">Subtotal</div></th>

                                        <th width="15%"><div style="text-align: center;">Grandtotal</div></th>    

                                    </tr>

                                </thead>

                                <tbody id="detail_produk">

                                    <tr>

                                        <td colspan="7" style="padding: 5px 0 0 0; margin: 0;"><span style="text-align: right; width: 100%; font-weight: bold;">Voucher:</span></td>    

                                        <td style="padding: 0; margin: 0;"><input id="header_voucher" type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['header']->value['voucher'];
} else { ?>0<?php }?>" class="form-control" name="voucher" style="text-align: right; font-weight: bold;" disabled="disabled" /></td>

                                    </tr>

                                    <tr>

                                        <td colspan="7" style="padding: 5px 0 0 0; margin: 0;"><span style="text-align: right; width: 100%; font-weight: bold;">Ongkir:</span></td>    

                                        <td style="padding: 0; margin: 0;"><input type="hidden" name="etd" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['ongkir']->value['etd'];
}?>" /><input id="header_tarif" type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['header']->value['ongkir'];
} else { ?>0<?php }?>" class="form-control harga" name="ongkir" style="text-align: right; font-weight: bold;" <?php if ($_smarty_tpl->tpl_vars['ongkir']->value['kurir']!='0') {?>disabled="disabled"<?php }?> /></td>

                                    </tr>

                                    <tr>

                                        <td colspan="7" style="padding: 5px 0 0 0; margin: 0;"><span style="text-align: right; width: 100%; font-weight: bold;">Total:</span></td>    

                                        <td style="padding: 0; margin: 0;"><input id="header_total" type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['header']->value['total'];
} else { ?>0<?php }?>" class="form-control" name="total" style="text-align: right; font-weight: bold;" disabled="disabled" /></td>

                                    </tr>

                                </tbody>

                            </table>

                        </div>

                        

                        <div class="form-group">

                            <div id='btn_add' class="btn btn-primary">Tambah</div>

                            <!-- div id='btn_update_cart' class="btn btn-warning">UPDATE CART</div -->

                        </div>                        

                    </div>

                    

                    <div class="form-group">&nbsp;</div>

                    

                    <div class="form-group" id="cara_pembayaran">

                        <label for="cara_bayar">Cara Pembayaran:</label>

                        <select name="cara_bayar" class="form-control">

                            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cara_bayar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>

                                <option value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['kode'];?>
" <?php if ($_smarty_tpl->tpl_vars['entry']->value['kode']==$_smarty_tpl->tpl_vars['header']->value['pembayaran']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
</option>

                            <?php } ?>

                        </select>                        

                    </div>

                    

                    <div class="form-group">

                        <label for="status">Status Pembayaran:</label>

                        <select name="status" class="form-control">

                            <option value="0" <?php if ($_smarty_tpl->tpl_vars['header']->value['status']=='0'||$_smarty_tpl->tpl_vars['header']->value['status']=='1'||$_smarty_tpl->tpl_vars['header']->value['status']=='3') {?> selected="selected" <?php }?>>Belum Lunas</option>

                            <option value="7" <?php if ($_smarty_tpl->tpl_vars['header']->value['status']=='7') {?> selected="selected" <?php }?>>Belum Lunas (Sedang Diproses)</option>

                            <option value="7" <?php if ($_smarty_tpl->tpl_vars['header']->value['status']=='8') {?> selected="selected" <?php }?>>Belum Lunas (Proses Pengiriman)</option>

                            <option value="2" <?php if ($_smarty_tpl->tpl_vars['header']->value['status']=='2') {?> selected="selected" <?php }?>>Lunas (Sedang Diproses)</option>

                            <option value="6" <?php if ($_smarty_tpl->tpl_vars['header']->value['status']=='6') {?> selected="selected" <?php }?>>Lunas (Proses Pengiriman)</option>

                            <option value="5" <?php if ($_smarty_tpl->tpl_vars['header']->value['status']=='5') {?> selected="selected" <?php }?>>Lunas (Transaksi Selesai)</option>

                        </select>                        

                    </div>

                    

                    <div class="form-group" id="metode_pembayaran" <?php if ($_smarty_tpl->tpl_vars['header']->value['pembayaran']!='1'||($_smarty_tpl->tpl_vars['header']->value['status']!='2'&&$_smarty_tpl->tpl_vars['header']->value['status']!='6'&&$_smarty_tpl->tpl_vars['header']->value['status']!='5')) {?>style="display: none;"<?php }?>>

                        <label for="metode_pembayaran">Metode Pembayaran:</label>

                        <select name="bank_tujuan" class="form-control">

                            <option value="0">-- Pilih Bank Tujuan --</option>

                            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_bank']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>

                                <option value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['entry']->value['id']==$_smarty_tpl->tpl_vars['pembayaran']->value['bank_tujuan']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama_bank'];?>
 (<?php echo $_smarty_tpl->tpl_vars['entry']->value['no_rekening'];?>
 - an. <?php echo $_smarty_tpl->tpl_vars['entry']->value['nama_pemilik_rekening'];?>
)</option>

                            <?php } ?>

                        </select>                        

                    </div>

                    

                    <div class="form-group" id="jumlah_transfer" <?php if ($_smarty_tpl->tpl_vars['header']->value['pembayaran']!='1'||($_smarty_tpl->tpl_vars['header']->value['status']!='2'&&$_smarty_tpl->tpl_vars['header']->value['status']!='6'&&$_smarty_tpl->tpl_vars['header']->value['status']!='5')) {?>style="display: none;"<?php }?>>

                        <label for="jumlah_transfer">Jumlah Transfer:</label>

                        <input type="text" name="jumlah_transfer" value="<?php if ($_smarty_tpl->tpl_vars['pembayaran']->value['jumlah_transfer']!='') {
echo $_smarty_tpl->tpl_vars['pembayaran']->value['jumlah_transfer'];
} else {
echo $_smarty_tpl->tpl_vars['header']->value['total'];
}?>" class="form-control harga" />

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

                                        <a id="btn_batal"  href="<?php if ($_smarty_tpl->tpl_vars['from_page']->value=='keepbelumlunas') {
echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/pesanandalamproses/keepbelumlunas/list.php<?php } elseif ($_smarty_tpl->tpl_vars['from_page']->value=='keepperproduk') {
echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/pesanandalamproses/keepperproduk/list.php<?php } elseif ($_smarty_tpl->tpl_vars['from_page']->value=='pesananbelumlunas') {
echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/pesanandalamproses/pesananbelumlunas/list.php<?php } else { ?>list.php<?php }?>" class="btn btn-warning">Batal</a>                                                        

                                    </td>

                                </tr>

                            </tbody>                                

                        </table>

                    </div>

                </div>

                <!-- /. ROW  -->
            </div>

            <!-- /. PAGE INNER  -->

        </div>

        <!-- /. PAGE WRAPPER  -->								
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
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/js/jquery.input.formatter.js"><?php echo '</script'; ?>
>
  
   <?php echo '<script'; ?>
 type="text/javascript">

        var array_tarif = [];

        var delete_selected = "";

        var token = '';

        var is_cart_valid = false;

        

        $(function () {

//            $('.tanggal').datepick({ dateFormat: 'dd-mm-yyyy' });

            

            $('[name=nama_member]').autocomplete({

                source: function( request, response ) {

                    $.ajax({

                        url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/memberDataStore.php',

                        dataType: "json",

                        method: 'post',

                        data: {

                            query: request.term

                        },

                        success: function( data ) {

                            response( $.map( data, function( item ) {

                                return {

                                    label: item['display'],

                                    value: item['value'],

                                    data : item['data']

                                }

                            }));

                        }

                    });

                },

                autoFocus: true,	      	

                minLength: 1,

                select: function( event, ui ) {

                    var data = ui.item.data;

                    $('[name=id_member]').val(data['id']);

                    if(eval(data['id'])==0) {

                        $('#p_email_notifikasi').show();

                    } else {

                        $('#p_email_notifikasi').hide();

                    }

                }		      	

            });

            

            $('[name=kepada]').autocomplete({

                source: function( request, response ) {

                    

                    var id_member = $('[name=id_member]').val();

                    $.ajax({

                        url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/getAlamatMember.php',

                        dataType: "json",

                        method: 'post',

                        data: {

                            query: request.term,

                            'id': id_member 

                        },

                        success: function( data ) {

                            response( $.map( data, function( item ) {

                                return {

                                    label: item['display'],

                                    value: item['value'],

                                    data : item['data']

                                }

                            }));

                        }

                    });

                },

                autoFocus: true,	      	

                minLength: 1,

                select: function( event, ui ) {

                    var alamat = ui.item.data;



                    $('[name=kepada]').val(alamat['nama']);

                    $('[name=alamat]').val(alamat['alamat']);

                    $('[name=no_hp]').val(alamat['no_hp']);

                    $('[name=kode_pos]').val(alamat['kode_pos']);



                    var propinsi = alamat['id_propinsi']==undefined?'0':alamat['id_propinsi'];

                    var kota = alamat['id_kota']==undefined?'0':alamat['id_kota'];

                    var kecamatan = alamat['id_kecamatan']==undefined?'0':alamat['id_kecamatan'];



                    $('[name=propinsi]').val(propinsi);

                    loadKota(propinsi, kota);

                    loadKecamatan(kota, kecamatan);

                    loadLayanan($('#header_kurir').val(), kecamatan, 0);

                }		      	

            });

            

            $('[name=is_dropship]').on('change', function (e) {

                if($('[name=is_dropship]').val()=='Y') {                    

                    $('#p_dropship_name').show();

                    $('#p_dropship_phone').show();

                } else {

                    $('#p_dropship_name').hide();

                    $('#p_dropship_phone').hide();

                }

            });

            

            $('#header_tarif').keyup(function () { 

                getTotal();

            });

            

            $('[name=status]').on('change', function (e) {

                if($('[name=status]').val()=='0') {                    

                    $('#metode_pembayaran').hide();

                    $('#jumlah_transfer').hide();

                } else if ($('[name=cara_bayar]').val()=='1') {

                    $('#metode_pembayaran').show();

                    $('#jumlah_transfer').show();

                }

            });

            

            $('[name=cara_bayar]').on('change', function (e) {

                if($('[name=cara_bayar]').val()!='1') {                    

                    $('#metode_pembayaran').hide();

                    $('#jumlah_transfer').hide();

                } else if ($('[name=status]').val()!='0') {

                    $('#metode_pembayaran').show();

                    $('#jumlah_transfer').show();

                }

            });

            

            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listdetail']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>

                var record = 

                    '<tr>' +

                        '<td align="center"><span class="fa fa-trash-o hapus_detail" style="cursor: pointer;"></span></td>' +                                            

                        '<td align="center">' +

                            '<input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['entry']->value['nama'];
}?>" class="form-control nama_produk" name="nama" />' +                                                

                            '<input type="hidden" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['entry']->value['id_produk'];
}?>" name="id_produk" />' +

                            '<input type="hidden" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['entry']->value['kode'];
}?>" name="kode" />' +

                            '<input type="hidden" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['entry']->value['berat'];
}?>" name="berat" />' +

                            '<input type="hidden" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['entry']->value['harga_beli'];
}?>" name="harga_beli" />' +

                            '<input type="hidden" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['entry']->value['list_grosir'];
}?>" name="list_grosir" />' +

                            '<input type="hidden" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['entry']->value['harga_jual_ori'];
}?>" name="harga_jual_ori" />' +

                        '</td>' +

                        '<td align="center">' +

                            '<select class="form-control" name="ukuran_warna">' +                            

                                <?php  $_smarty_tpl->tpl_vars['entry_ukuran_warna'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry_ukuran_warna']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['entry']->value['list_ukuran_warna']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry_ukuran_warna']->key => $_smarty_tpl->tpl_vars['entry_ukuran_warna']->value) {
$_smarty_tpl->tpl_vars['entry_ukuran_warna']->_loop = true;
?>

                                    '<option value="<?php echo $_smarty_tpl->tpl_vars['entry_ukuran_warna']->value['kode'];?>
"<?php if ($_smarty_tpl->tpl_vars['entry']->value['ukuran_warna']==$_smarty_tpl->tpl_vars['entry_ukuran_warna']->value['kode']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['entry_ukuran_warna']->value['ukuran'];
if ($_smarty_tpl->tpl_vars['entry_ukuran_warna']->value['ukuran']!=''&&$_smarty_tpl->tpl_vars['entry_ukuran_warna']->value['warna']!='') {?> / <?php }
echo $_smarty_tpl->tpl_vars['entry_ukuran_warna']->value['warna'];?>
</option>' +

                                <?php } ?>

                            '</select>' +                            

                        '</td>' +

                        '<td align="center">' +

                            '<input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['entry']->value['jumlah'];
}?>" class="form-control harga jumlah" name="jumlah" style="text-align: right;" />' +

                        '</td>' +

                        '<td align="center">' +

                            '<input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['entry']->value['harga_jual'];
}?>" class="form-control harga" name="harga_jual" style="text-align: right;"  disabled="disabled" />' +

                        '</td>' +                                            

                        '<td align="center">' +

                            '<input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['entry']->value['persen_diskon'];?>
%<?php }?>" class="form-control" name="diskon" style="text-align: right;"  disabled="disabled" />' +

                        '</td>' +

                        '<td align="center">' +

                            '<input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['entry']->value['sub_total'];
}?>" class="form-control harga" name="sub_total" style="text-align: right;" disabled="disabled" />' +

                        '</td>' +

                        '<td align="center">' +

                            '<input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['entry']->value['grand_total'];
}?>" class="form-control harga" name="grand_total" style="text-align: right;"  disabled="disabled" />' +

                        '</td>' +

                    '</tr>';

            

                $( record ).insertBefore( "#detail_produk" );

            <?php } ?>

             

            setAutocomplete();

            setQtyChangeListeners();

            

            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listlayanan']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>    

                array_tarif.push({ service: '<?php echo $_smarty_tpl->tpl_vars['entry']->value['service'];?>
', description: '<?php echo $_smarty_tpl->tpl_vars['entry']->value['description'];?>
', cost:[{ value: '<?php echo $_smarty_tpl->tpl_vars['entry']->value['cost'][0]['value'];?>
', tarif: '<?php echo $_smarty_tpl->tpl_vars['entry']->value['cost'][0]['tarif'];?>
', etd: '<?php echo $_smarty_tpl->tpl_vars['entry']->value['cost'][0]['etd'];?>
' }] });

            <?php } ?>

            for(var key in array_tarif) {

                if(array_tarif[key]['service']=='<?php echo $_smarty_tpl->tpl_vars['ongkir']->value['layanan'];?>
') {

                    $('#header_tarif').val(currency(array_tarif[key]['cost'][0]['value']));

                    break;

                }

            }

            

            getTotal();

            

            function setAutocomplete() {

                

                $('.nama_produk').autocomplete({

                    source: function( request, response ) {

                        $.ajax({

                            url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/produkDataStore.php',

                            dataType: "json",

                            method: 'post',

                            data: {

                                query: request.term,

                                id_member: '<?php echo $_smarty_tpl->tpl_vars['header']->value['id_member'];?>
'

                            },

                            success: function( data ) {

                                response( $.map( data, function( item ) {



                                    return {

                                        label: item['display'],

                                        value: item['value'],

                                        data : item['data']

                                    }

                                }));

                            }

                        });

                    },

                    autoFocus: true,	      	

                    minLength: 1,

                    select: function( event, ui ) {

                        //console.log(ui.item.data);



                        var data = ui.item.data;

                        /*for(var key in data) {

                            console.log(key+' --- '+data[key]);

                        }*/

                        var element = $(this).closest('tr');

                        var id_produk = element.find('[name=id_produk]');

                        var kode = element.find('[name=kode]');

                        var berat = element.find('[name=berat]');

                        var ukuran_warna = element.find('[name=ukuran_warna]');

                        var jumlah = element.find('[name=jumlah]');

                        var harga_beli = element.find('[name=harga_beli]');

                        var list_grosir = element.find('[name=list_grosir]');

                        

                        var harga_jual_ori = element.find('[name=harga_jual_ori]');

                        var harga_jual = element.find('[name=harga_jual]');

                        

                        var diskon = element.find('[name=diskon]');

                        var sub_total = element.find('[name=sub_total]');

                        var grand_total = element.find('[name=grand_total]');



                        id_produk.val(data['id']);

                        kode.val(data['kode']);

                        berat.val(data['berat']);

                        if(jumlah.val().length==0) jumlah.val(1);

                        var datas = '';

                        var store = data['list_ukuran_warna'];

                        for(var key in store) {

                            datas+='<option value="'+store[key]['kode']+'">'+store[key]['ukuran']+((store[key]['ukuran']!="" && store[key]['warna']!="")?" / ":"")+store[key]['warna']+'</option>';

                        }

                        ukuran_warna.empty();

                        $(datas).appendTo(ukuran_warna);



                        harga_beli.val(data['harga_beli']);

                        list_grosir.val(data['list_grosir']);

                        

                        harga_jual_ori.val(data['harga_jual']);

                        harga_jual.val(eval(data['harga_diskon'].replace(/\,/g, ''))>0?data['harga_diskon']:data['harga_jual']);

                        

                        diskon.val(data['persen_diskon']+"%");

                        updateGrand(jumlah, list_grosir, harga_jual_ori, harga_jual, diskon, sub_total, grand_total);

                        loadTarif($('#header_kurir').val(), $('#header_kecamatan').val(), $('#header_layanan').val());

                    }		      	

                });

            }    

            

            function setQtyChangeListeners() {

                $('.jumlah').on('input', function() { 

                    var element = $(this).closest('tr');

                    var jumlah         = element.find('[name=jumlah]');

                    var list_grosir    = element.find('[name=list_grosir]');

                    var harga_jual_ori = element.find('[name=harga_jual_ori]');

                    var harga_jual     = element.find('[name=harga_jual]');

                    var diskon         = element.find('[name=diskon]');

                    var sub_total      = element.find('[name=sub_total]');

                    var grand_total    = element.find('[name=grand_total]');

                    

                    updateGrand(jumlah, list_grosir, harga_jual_ori, harga_jual, diskon, sub_total, grand_total);

                    loadTarif($('#header_kurir').val(), $('#header_kecamatan').val(), $('#header_layanan').val());

                });

            };

            

            

            function updateGrand(jumlah, list_grosir, harga_jual_ori, harga_jual, diskon, sub_total, grand_total) {

                var row = list_grosir.val().split("\\n");

                    

                harga_jual.val(currency(eval(harga_jual_ori.val().replace(/\,/g, ''))));

                for(var key in row) {

                     col = row[key].split("|");

                    var jumlah_min = eval(col[0]);

                    if(jumlah_min<=eval(jumlah.val().replace(/\,/g, ''))) {

                        harga_jual.val(currency(eval(col[2])));

                        break;

                    }

                }



                var disc = eval(diskon.val().replace('%', ''));

                var harga =  eval(harga_jual.val().replace(/\,/g, ''));

                var subtotal = harga-(harga*disc*0.01);



                sub_total.val(currency(subtotal));



                var grand_tot = eval(jumlah.val().replace(/\,/g, ''))*eval(sub_total.val().replace(/\,/g, ''));

                grand_total.val(currency(grand_tot));

                    

                getTotal();            

            }

            

            

            function currency(nums) {



                if(!nums) return '0';

                if(nums=='') return '0';



                nums = String(nums).replace(/[\,%]/g, '');

                nums = nums.split('.').length<2?

                            nums:

                            (nums.split('.')[1].length>2?

                                String(eval(nums).toFixed(2)):

                                nums);



                if(nums=='' || nums=='0') return '0';



                while (nums.substring(0,1)=='0' && nums.substring(1,2)!='.') {

                    nums = nums.substring(1,nums.length);

                    if(nums=='0') return '0';

                }



                nums = nums.replace('.','. ');



                var num = nums.split('.')[0];

                var numArr=new String(num).split('').reverse();

                for (var i=3;i<numArr.length;i+=3)

                    numArr[i]+=',';



                var decimal = (nums.split('.')[1]?('.'+(nums.split('.')[1]).trim()):'');



                return (numArr.reverse().join('') + decimal.replace('.00',''));



            };



            $('#btn_add').click(function() {

                var record = 

                    '<tr>' +                        

                        '<td align="center"><span class="fa fa-trash-o hapus_detail" style="cursor: pointer;"></span></td>' +  

                        '<td align="center">' +

                            '<input type="text" class="form-control nama_produk" name="nama" />' +

                            '<input type="hidden" name="id_produk" />' +

                            '<input type="hidden" name="kode" />' +

                            '<input type="hidden" name="berat" />' +                            

                            '<input type="hidden" name="harga_beli" />' +

                            '<input type="hidden" name="list_grosir" />' + 

                            '<input type="hidden" name="harga_jual_ori" />' +                             

                        '</td>' +

                        '<td align="center">' +

                            '<select class="form-control" name="ukuran_warna"></select>' +

                        '</td>' +

                        '<td align="center">' +

                            '<input type="text" class="form-control harga jumlah" name="jumlah" style="text-align: right;" />' +

                        '</td>' +

                        '<td align="center">' +

                            '<input type="text" class="form-control harga" name="harga_jual" style="text-align: right;" disabled="disabled" />' +

                        '</td>' +

                        '<td align="center">' +

                            '<input type="text" class="form-control" name="diskon" style="text-align: right;" disabled="disabled" />' +

                        '</td>' +

                        '<td align="center">' +

                            '<input type="text" class="form-control harga" name="sub_total" style="text-align: right;" disabled="disabled" />' +

                        '</td>' +

                        '<td align="center">' +

                            '<input type="text" class="form-control harga" name="grand_total" style="text-align: right;" disabled="disabled" />' +

                        '</td>' + 

                    '</tr>';



                $( record ).insertBefore( "#detail_produk" );

                setAutocomplete();

                setQtyChangeListeners();                

            });

            

            $( document ).on( 'click', '.hapus_detail', function() {

               

                var element = $(this).closest('tr');

                element.remove();

                

                getTotal();

                loadTarif($('#header_kurir').val(), $('#header_kecamatan').val(), $('#header_layanan').val());                

            });

            

            var isEdit = <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {?>true<?php } else { ?>false<?php }?>;

            $("input.harga").formatInput();

                

            function setErrorMessage(message) {

                $('#alert_error .alert').text(message);

                $('#alert_error').show('slow');

                setTimeout(function() {

                    $('#alert_error').hide('slow');

                }, 5000);

                $("body, html").animate({ 

                    scrollTop: $('#wrapper').offset().top 

                }, 600);

            }



            $('#btn_update_cart').click(function() {

                $('#btn_update_cart').hide();

                is_cart_valid = true;

            });   



            $('#btn_simpan').click(function() {

                

                //data header

                var id             = isEdit?'<?php echo $_smarty_tpl->tpl_vars['header']->value['id'];?>
':'';

                var tanggal        = $('[name=tanggal]').val();

                var nama_member    = $('[name=nama_member]').val();

                var id_member      = $('[name=id_member]').val();

                var kepada         = $('[name=kepada]').val();

                var alamat         = $('[name=alamat]').val();

                var no_hp          = $('[name=no_hp]').val();

                var id_propinsi    = $('[name=propinsi]').val();

                var nama_propinsi  = $("#header_prop option[value='"+id_propinsi+"']").text();

                var id_kota        = $('[name=kota]').val();

                var nama_kota      = $("#header_kota option[value='"+id_kota+"']").text();

                var id_kecamatan   = $('[name=kecamatan]').val();

                var nama_kecamatan = $("#header_kecamatan option[value='"+id_kecamatan+"']").text();

                var kode_pos       = $('[name=kode_pos]').val();

                var kurir          = $('[name=kurir]').val();

                var layanan        = $('[name=layanan]').val();

                var etd            = $('[name=etd]').val();

                var tarif          = $('[name=ongkir]').val();

                var is_dropship    = $('[name=is_dropship]').val();

                var dropship_name  = $('[name=dropship_name]').val();

                var dropship_phone   = $('[name=dropship_phone]').val();

                var email_notifikasi = $('[name=email_notifikasi]').val();

                var pembayaran       = $('[name=cara_bayar]').val();

                var status           = ($('[name=status]').val()=='0')?'<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['header']->value['status'];
} else { ?>0<?php }?>':($('[name=status]').val());

                var bank_tujuan      = $('[name=bank_tujuan]').val();

                var jumlah_transfer  = $('[name=jumlah_transfer]').val();

                var voucher        = $('[name=voucher]').val();

                var total          = $('[name=total]').val();

                

                //data detail

                var detail = ''; var row = 0;

                grandtotal = 0;

                $("#tblDetail_produk tr").each(function() {

                    if(row>0) {

                        var id_produk      = $(this).find('[name=id_produk]').val();

                        var kode           = $(this).find('[name=kode]').val();

                        var nama           = $(this).find('[name=nama]').val();

                        var berat          = $(this).find('[name=berat]').val();

                        var ukuran_warna   = $(this).find('[name=ukuran_warna]').val();                        

                        var jumlah         = $(this).find('[name=jumlah]').val();

                        var harga_beli     = $(this).find('[name=harga_beli]').val();

                        var harga_jual     = $(this).find('[name=harga_jual]').val();

                        var diskon         = $(this).find('[name=diskon]').val();

                        var sub_total      = $(this).find('[name=sub_total]').val();

                        var grand_total    = $(this).find('[name=grand_total]').val();



                        if(id_produk!=undefined) {

                            grandtotal+=eval(grand_total.replace(/\,/g, ""));                                                    

                            detail+=(detail==''?'':'\n')+id_produk+'\t'+kode+'\t'+nama+'\t'+berat+'\t'+ukuran_warna+'\t'+jumlah.replace(/\,/g, "")+'\t'+harga_jual.replace(/\,/g, "")+'\t'+(diskon.replace(/\,/g, "")).replace(/\%/g, "")+'\t'+sub_total.replace(/\,/g, "")+'\t'+grand_total.replace(/\,/g, "")+'\t'+harga_beli.replace(/\,/g, "");

                        }

                    } 

                    row++;

                });                

                //console.log(detail);

                

                var data = new FormData();

                data.append('id', id);

                data.append('tanggal', tanggal);

                data.append('nama_member', nama_member);

                data.append('id_member', id_member);

                

                data.append('nama', kepada);

                data.append('alamat', alamat);

                data.append('no_hp', no_hp);

                data.append('id_propinsi', id_propinsi);

                data.append('nama_propinsi', nama_propinsi);

                data.append('id_kota', id_kota);

                data.append('nama_kota', nama_kota);

                data.append('id_kecamatan', id_kecamatan);

                data.append('nama_kecamatan', nama_kecamatan);                                

                data.append('kode_pos', kode_pos);

                

                data.append('is_dropship', is_dropship);

                data.append('dropship_name', dropship_name);                                

                data.append('dropship_phone', dropship_phone);

                data.append('email_notifikasi', email_notifikasi);

                

                data.append('kurir', kurir);

                data.append('layanan', layanan);

                data.append('etd', etd);

                data.append('ongkir', tarif.replace(/\,/g, ""));

                

                data.append('grandtotal', grandtotal);

                data.append('voucher', voucher.replace(/\,/g, ""));

                data.append('total', total.replace(/\,/g, ""));

                data.append('detail', detail);

                

                data.append('pembayaran', pembayaran);

                data.append('status', status);

                data.append('bank_tujuan', bank_tujuan);

                data.append('jumlah_transfer', jumlah_transfer.replace(/\,/g, ""));

                



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

                        if(data['success']) {

							swal('Saved!', 'Berhasil Menambahkan/Update Record Data Pemesanan!', 'success')
                            <?php if ($_smarty_tpl->tpl_vars['from_page']->value=='keepbelumlunas') {?>

                                window.location = '<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/pesanandalamproses/keepbelumlunas/list.php';

                            <?php } elseif ($_smarty_tpl->tpl_vars['from_page']->value=='keepperproduk') {?>

                                window.location = '<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/pesanandalamproses/keepperproduk/list.php';

                            <?php } elseif ($_smarty_tpl->tpl_vars['from_page']->value=='pesananbelumlunas') {?>

                                window.location = '<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/pesanandalamproses/pesananbelumlunas/list.php';

                            <?php } else { ?>

                                window.location = 'list.php';                    

                            <?php }?>

                        } else {

                            setLoading(false);
							swal('Error!', 'Gagal Menambahkan/Update Record Data Pemesanan!', 'error')

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

            

            $('#header_prop').on('change', function (e) {

                loadKota(this.value, 0);

                loadKecamatan(0, 0);

                loadLayanan($('#header_kurir').val(), 0, 0);

            });



            $('#header_kota').on('change', function (e) {

                loadKecamatan(this.value, 0);

                loadLayanan($('#header_kurir').val(), 0, 0);

            });



            $('#header_kecamatan').on('change', function (e) {

                loadLayanan($('#header_kurir').val(), this.value, 0);

            });



            $('#header_kurir').on('change', function (e) {

                loadLayanan(this.value, $('#header_kecamatan').val(), 0);

            });



            $('#header_layanan').on('change', function (e) {

                

                for(var key in array_tarif) {

                    if(array_tarif[key]['service']==this.value) {

                        $('#header_tarif').val(currency(array_tarif[key]['cost'][0]['value']));

                        $('[name=etd]').val(array_tarif[key]['cost'][0]['etd']);

                        console.log($('[name=etd]').val());

                        break;

                    }

                }

                getTotal();

            });



            function loadKota(propinsi, kota) {

                $("#header_kota").empty();

                $('<option value="0">-- Pilih Kota --</option>').appendTo('#header_kota');



                var date = new Date();

                var token = date.getTime();

                    

                $.ajax({

                    type: 'POST',

                    url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/getKota.php',

                    data: { 'propinsi': propinsi, 'token': token },

                    dataType: 'json',

                    success: function(data) {

                        var success = data['success'];

                        if(success) {

                            var store = data['topics'];

                            var data = '<option value="0">-- Pilih Kota --</option>';

                            for(var key in store) {

                                data+='<option value="'+store[key]['city_id']+'"'+(store[key]['city_id']==kota?' selected="selected"':'')+'>'+store[key]['city_name']+'</option>';

                            }

                            $("#header_kota").empty();

                            $(data).appendTo('#header_kota');

                        } else {

                            loadKota(propinsi, kota);

                        }

                    }, 

                    error: function() {

                        loadKota(propinsi, kota);

                    }

                });    

            }



            function loadKecamatan(kota, kecamatan) {

                $("#header_kecamatan").empty();

                $('<option value="0">-- Pilih Kecamatan --</option>').appendTo('#header_kecamatan');



                if(kota>0) {

                    var date = new Date();

                    var token = date.getTime();

                    

                    $.ajax({

                        type: 'POST',

                        url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/getKecamatan.php',

                        data: { 'kota': kota, 'token': token },

                        dataType: 'json',

                        success: function(data) {

                            var success = data['success'];

                            if(success) {

                                var store = data['topics'];

                                var data = '<option value="0">-- Pilih Kecamatan --</option>';

                                for(var key in store) {

                                    data+='<option value="'+store[key]['subdistrict_id']+'"'+(store[key]['subdistrict_id']==kecamatan?' selected="selected"':'')+'>'+store[key]['subdistrict_name']+'</option>';

                                }

                                $("#header_kecamatan").empty();

                                $(data).appendTo('#header_kecamatan');

                            } else {

                                loadKecamatan(kota, kecamatan);

                            }

                        }, 

                        error: function() {

                            loadKecamatan(kota, kecamatan);

                        }

                    });

                }    

            }



            function loadLayanan(kurir, kecamatan, layanan) {

                $('#header_tarif').val(0);            

                $("#header_layanan").empty();

                $('<option value="0">-- Pilih Layanan --</option>').appendTo('#header_layanan');

                array_tarif = [];

                if(kecamatan>0 && kurir!='') {

                    var date = new Date();

                    var token = date.getTime();

                    var berat = getTotalBerat();

                    

                    $.ajax({

                        type: 'POST',

                        url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/getLayanan.php',

                        data: { 'kurir': kurir, 'kecamatan': kecamatan, 'berat': berat, 'token': token },

                        dataType: 'json',

                        success: function(data) {

                            var success = data['success'];

                            if(success) {

                                array_tarif = data['topics'];

                                var data = '<option value="0">-- Pilih Layanan --</option>';



                                for(var key in array_tarif) {

                                    data+='<option value="'+array_tarif[key]['service']+'"'+(array_tarif[key]['service']==layanan?' selected="selected"':'')+'>'+array_tarif[key]['description']+' '+(array_tarif[key]['service']!=array_tarif[key]['description']?('('+array_tarif[key]['service']+')'):'')+'</option>'; //' - '+array_tarif[key]['cost'][0]['tarif']+'</option>';

                                    if(array_tarif[key]['service']==layanan) {

                                        $('#header_tarif').val(currency(array_tarif[key]['cost'][0]['value']));

                                        getTotal();

                                    }

                                }



                                $("#header_layanan").empty();

                                $(data).appendTo('#header_layanan');

                            } else {

                                loadLayanan(kurir, kecamatan, layanan);

                            }

                        }, 

                        error: function() {

                            loadLayanan(kurir, kecamatan, layanan);

                        }

                    });

                }    

            }

            

            function loadTarif(kurir, kecamatan, layanan) {

                if(kecamatan>0 && kurir!='') {

                    var date = new Date();

                    var token = date.getTime();

                    var berat = getTotalBerat();

                    

                    $.ajax({

                        type: 'POST',

                        url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/getTarif.php',

                        data: { 'kurir': kurir, 'kecamatan': kecamatan, 'berat': berat, 'token': token },

                        dataType: 'json',

                        success: function(data) {

                            if(data['token']==token) {

                                var success = data['success'];

                                if(success) {

                                    array_tarif = data['topics'];

                                    for(var key in array_tarif) {

                                        if(array_tarif[key]['service']==layanan) {

                                            $('#header_tarif').val(currency(array_tarif[key]['cost'][0]['value']));

                                            getTotal();

                                        }

                                    }

                                } else {

                                    loadTarif(kurir, kecamatan, layanan);

                                } 

                            }

                        }, 

                        error: function() {

                            loadTarif(kurir, kecamatan, layanan);

                        }

                    });

                }

            }

            

            function getTotalBerat() {

                var total_berat = 0;

                $("#tblDetail_produk tr").each(function() {

                    var berat = $(this).find('[name=berat]').val();

                    var jumlah = $(this).find('[name=jumlah]').val();

                    if(berat!=undefined && jumlah!=undefined) {                        

                        total_berat+=(eval(jumlah.replace(/\,/g, ""))*eval(berat));

                    }

                });

                

                //console.log('Total Berat: '+total_berat);

                return total_berat;

            }

            

            function getTotal() {

                var grand_tot = 0;

                $("#tblDetail_produk tr").each(function() {

                    var grand_total = $(this).find('[name=grand_total]').val();

                    if(grand_total!=undefined) {                        

                        grand_tot+=eval(grand_total.replace(/\,/g, ""));

                    }

                });

                

                var voucher = eval($('#header_voucher').val().replace(/\,/g, ""));

                var ongkir  = eval($('#header_tarif').val().replace(/\,/g, ""));

                

                ongkir = (ongkir==undefined?0:ongkir);

                var total   = grand_tot+ongkir-voucher;

                $('#header_total').val(currency(total));                

            }

            

            

        });

    <?php echo '</script'; ?>
>



</body><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/footer_js.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

</html><?php }} ?>
