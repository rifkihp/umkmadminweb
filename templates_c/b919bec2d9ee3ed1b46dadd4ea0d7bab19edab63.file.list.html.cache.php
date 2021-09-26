<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-11-12 14:21:13
         compiled from "../../templates/back-end/penguin/pemesanan/list.html" */ ?>
<?php /*%%SmartyHeaderCode:10769307975be929e92fa0e7-87897218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b919bec2d9ee3ed1b46dadd4ea0d7bab19edab63' => 
    array (
      0 => '../../templates/back-end/penguin/pemesanan/list.html',
      1 => 1538456120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10769307975be929e92fa0e7-87897218',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'adminweburl' => 0,
    'sub_title' => 0,
    'tanggal_dari' => 0,
    'tanggal_sampai' => 0,
    'jenis' => 0,
    'status' => 0,
    'query' => 0,
    'listdetail' => 0,
    'entry' => 0,
    'limitpage' => 0,
    'currentpage' => 0,
    'no' => 0,
    'array_akses' => 0,
    'tpl_dir' => 0,
    'no_histori' => 0,
    'entry_history' => 0,
    'entry_barang' => 0,
    'no_detail' => 0,
    'homeurl' => 0,
    'total' => 0,
    'totalpage' => 0,
    'frompage' => 0,
    'untilpage' => 0,
    'item' => 0,
    'alert_success' => 0,
    'alert_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5be929e93f1618_57405965',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be929e93f1618_57405965')) {function content_5be929e93f1618_57405965($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

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

				<div class="panel panel-flat">
                    <div class="form-group panel-body no-padding-bottom">
                        <table style="width: 100%;">
                            <tr>
                                <td width="20%" style="padding: 8px;"><label>Dari Tanggal:</label></td>
                                <td width="80%">
                                    <table width="100%">
                                        <tr>
                                            <td width="40%">
                                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['tanggal_dari']->value;?>
" class="form-control pickadate" name="tanggal_dari" placeholder="Klik Untuk Memilih Tanggal" />
                                            </td>
                                            <td style="text-align: center;">
                                                <label>Sampai Tanggal:</label>
                                            </td>
                                            <td width="40%">
                                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['tanggal_sampai']->value;?>
" class="form-control pickadate" name="tanggal_sampai" placeholder="Klik Untuk Memilih Tanggal" />                 
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td width="20%" style="padding: 8px;"><label>Jenis Pesanan:</label></td>
                                <td width="80%">
                                    <select id="filter_jenis" class="form-control" name="jenis" placeholder="Klik Untuk Memilih Jenis Pesanan">
                                        <option value="0" <?php if ($_smarty_tpl->tpl_vars['jenis']->value=='0') {?>selected="selected"<?php }?>>Klik Untuk Memilih Jenis Pesanan</option>
                                        <option value="N" <?php if ($_smarty_tpl->tpl_vars['jenis']->value=='N') {?>selected="selected"<?php }?>>Bukan Dropship</option>
                                        <option value="Y" <?php if ($_smarty_tpl->tpl_vars['jenis']->value=='Y') {?>selected="selected"<?php }?>>Dropship</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td width="20%" style="padding: 8px;"><label>Status Pembayaran:</label></td>
                                <td width="80%">
                                    <select id="filter_status" class="form-control" name="status"  placeholder="Klik Untuk Memilih Status Pembayaran">
                                        <option value="0" <?php if ($_smarty_tpl->tpl_vars['status']->value=='0') {?>selected="selected"<?php }?>>Klik Untuk Memilih Status Pembayaran</option>
                                        <option value="N" <?php if ($_smarty_tpl->tpl_vars['status']->value=='N') {?>selected="selected"<?php }?>>Belum Lunas</option>
                                        <option value="Y" <?php if ($_smarty_tpl->tpl_vars['status']->value=='Y') {?>selected="selected"<?php }?>>Lunas</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td width="20%" style="padding: 8px;"><label>Keyword Pencarian:</label></td>
                                <td width="80%">
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
				</div>
					
							<div class="table-responsive">
								<table class="table datatable table-striped" width="100%">
                                <thead>
                                    <tr>
                                        <th width="1%"><div style="text-align: center;">No.</div></th>

                                        <th width="90%"><div style="text-align: center;">Data Pemesanan</div></th>

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

                                            <!-- td align="center"><input type="checkbox" id_select="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" name="select_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="select" /></td -->

                                            <td align="center"><?php echo $_smarty_tpl->tpl_vars['limitpage']->value*($_smarty_tpl->tpl_vars['currentpage']->value-1)+$_smarty_tpl->tpl_vars['no']->value;?>
</td>

                                            <td>

                                                <table width="100%">

                                                    <!-- tr><td><b>ID</b> </td><td><b>:</b> <?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
</td></tr -->

                                                    <tr><td width="25%"><b>Kode Pemesanan</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> <a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/pemesanan/list.php?_&query=<?php echo $_smarty_tpl->tpl_vars['entry']->value['kode_pemesanan'];?>
	" ><span style="font-weight: bold;">#<?php echo $_smarty_tpl->tpl_vars['entry']->value['kode_pemesanan'];?>
</span></a></td></tr>

                                                    <tr><td><b>Nama Pengguna</b> </td><td><b>:</b> <?php if ($_smarty_tpl->tpl_vars['entry']->value['id_member']==0) {?>Guest<?php } else {
echo $_smarty_tpl->tpl_vars['entry']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['entry']->value['last_name'];
}?> (<?php echo $_smarty_tpl->tpl_vars['entry']->value['email'];?>
)</td></tr>

                                                    <tr><td><b>Tanggal Pesan</b></td><td><b>:</b> <?php echo $_smarty_tpl->tpl_vars['entry']->value['tanggal'];?>
</td></tr>

                                                    <tr><td><b>Pengiriman Kepada</b> </td><td><b>:</b> <?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
</td></tr>

                                                    <tr><td><b>Alamat</b></td><td><b>:</b> <?php echo $_smarty_tpl->tpl_vars['entry']->value['alamat'];?>
</td></tr>

                                                    <tr><td><b>No. HP</b></td><td><b>:</b> <?php echo $_smarty_tpl->tpl_vars['entry']->value['no_hp'];?>
</td></tr>

                                                    <tr><td><b>Total Belanja</b> </td><td><b>:</b> <?php echo $_smarty_tpl->tpl_vars['entry']->value['total'];?>
</td></tr>                                                    

                                                    <tr><td><b>Kurir Pengiriman</b> </td><td><b>:</b> <?php echo $_smarty_tpl->tpl_vars['entry']->value['kurir'];?>
</td></tr>                                                    

                                                    <tr><td><b>No. Resi</b> </td><td><b>:</b> <span id="text_no_resi_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['entry']->value['no_resi'];?>
</span></td></tr>                                                    

                                                    <tr><td><b>Jenis Pemesanan</b> </td><td><b>:</b> <?php if ($_smarty_tpl->tpl_vars['entry']->value['is_dropship']=='Y') {?><span style="color: red; font-weight: bold;">DROPSHIP</span><?php } else { ?><span style="color: green; font-weight: bold;">BUKAN DROPSHIP</span><?php }?></td></tr>

                                                    <tr><td><b>Nama Dropship</b> </td><td><b>:</b> <span id="text_no_resi_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['entry']->value['dropship_name'];?>
</span></td></tr>               
                                                    <tr><td><b>No.Telpon Dropship</b> </td><td><b>:</b> <span id="text_no_resi_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['entry']->value['dropship_phone'];?>
</span></td></tr>                                       
                                                    <tr><td><b>Cara Pembayaran</b> </td><td><b>:</b> <span style="color: green; font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['entry']->value['cara_bayar'];?>
</span></td></tr>

                                                    <tr><td><b>Status Pembayaran</b> </td><td><b>:</b> <span id='text_pembayaran_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
' style="color: <?php if ($_smarty_tpl->tpl_vars['entry']->value['status']=='0'||$_smarty_tpl->tpl_vars['entry']->value['status']=='1'||$_smarty_tpl->tpl_vars['entry']->value['status']=='3'||$_smarty_tpl->tpl_vars['entry']->value['status']=='4'||$_smarty_tpl->tpl_vars['entry']->value['status']=='7'||$_smarty_tpl->tpl_vars['entry']->value['status']=='8') {?>red<?php } else { ?>green<?php }?>; font-weight: bold;"><?php if ($_smarty_tpl->tpl_vars['entry']->value['status']=='0'||$_smarty_tpl->tpl_vars['entry']->value['status']=='1'||$_smarty_tpl->tpl_vars['entry']->value['status']=='3'||$_smarty_tpl->tpl_vars['entry']->value['status']=='4'||$_smarty_tpl->tpl_vars['entry']->value['status']=='7'||$_smarty_tpl->tpl_vars['entry']->value['status']=='8') {?>BELUM LUNAS<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['status']=='2'||$_smarty_tpl->tpl_vars['entry']->value['status']=='5'||$_smarty_tpl->tpl_vars['entry']->value['status']=='6') {?>LUNAS<?php }?></span></td></tr>

                                                    <tr><td><b>Status Pemesanan</b> </td><td><b>:</b> <span id='text_status_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
' style="font-weight: bold; color: <?php if ($_smarty_tpl->tpl_vars['entry']->value['status']==0) {?>orange<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['status']==1) {?>red<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['status']==2||$_smarty_tpl->tpl_vars['entry']->value['status']==7||$_smarty_tpl->tpl_vars['entry']->value['status']==5||$_smarty_tpl->tpl_vars['entry']->value['status']==6||$_smarty_tpl->tpl_vars['entry']->value['status']==8) {?>green<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['status']==3) {?>orange<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['status']==4) {?>red<?php }?>;"><?php if ($_smarty_tpl->tpl_vars['entry']->value['status']==0) {?>Menunggu pembayaran Customer.<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['status']==1) {?>Pembayaran ditolak Admin.<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['status']==2) {?>Pesanan dalam proses.<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['status']==3) {?>Customer melakukan konfirmasi pembayaran.<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['status']==4) {?>Pemesanan dibatalakan oleh Admin.<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['status']==5) {?>Pesanan sudah diterima.<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['status']==6) {?>Pesanan telah dikirim.<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['status']==7) {?>Pesanan dalam proses.<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['status']==8) {?>Pesanan telah dikirim.<?php }?></span></td></tr>

                                                    <tr><td colspan="2">

                                                    <div id="message_wrapper_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" style="margin-top: 10px; margin-bottom: 10px;">

                                                        <div id="alert_error_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="form-group" style="display: none;">

                                                            <div class="alert alert-danger">&nbsp;</div>

                                                        </div>

                                                        <div id="alert_success_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="form-group" style="display: none;">                         

                                                            <div class="alert alert-info">&nbsp;</div>

                                                        </div>                                                                

                                                    </div>

                                                    <div style="margin-top: 10px; margin-bottom: 10px;">

                                                        <?php if (in_array('B',$_smarty_tpl->tpl_vars['array_akses']->value)&&$_smarty_tpl->tpl_vars['entry']->value['status']<4) {?>

                                                            <div id="i_loading_batal_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="G-btn-animation" style="display: none;"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/img/loading.gif" /></div>

                                                            <button id="btn_batal_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" id_batal="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" type="button" class="btn btn-danger batal_pesan">Batalkan Pesanan</button>

                                                        <?php }?>

                                                        <button id="btn_histori_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" id_histori="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" type="button" class="btn btn-primary histori">Lihat Status</button>

                                                        <button id="btn_detail_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" id_detail="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" type="button" class="btn btn-warning detail">Tampilkan Detail</button>

                                                        <button id="btn_cetak_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" notrx="<?php echo $_smarty_tpl->tpl_vars['entry']->value['kode_pemesanan'];?>
" type="button" class="btn btn-warning cetak">Cetak</button>
                                                        
                                                        <button onClick="$('#form-alamat-<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
').toggleClass('hide');" type="button" class="btn btn-succcess">Alamat Pengiriman</button>

                                                        <?php if (in_array('P',$_smarty_tpl->tpl_vars['array_akses']->value)) {
if ($_smarty_tpl->tpl_vars['entry']->value['status']==2||$_smarty_tpl->tpl_vars['entry']->value['status']==5||$_smarty_tpl->tpl_vars['entry']->value['status']==6||$_smarty_tpl->tpl_vars['entry']->value['status']==7||$_smarty_tpl->tpl_vars['entry']->value['status']==8) {?><button id="btn_noresi_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" id_noresi="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" is_open="false" type="button" class="btn btn-info noresi">Proses Pengiriman</button><?php }
}?>

                                                        <!-- button id="btn_finish_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" id_finish="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" is_open="false" type="button" class="btn btn-danger finish">Tutup Transaksi</button -->

                                                        

                                                        <div id="detail_histori_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                <label for="histori_pemesanan">Histori Pemesanan:</label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">

                                                                    <thead>

                                                                        <tr>

                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>

                                                                            <th width="20%"><div style="text-align: center;">Tanggal Jam</div></th>                                        

                                                                            <th width="70%"><div style="text-align: center;">Penjelasan</div></th>

                                                                        </tr>

                                                                    </thead>

                                                                    <tbody>

                                                                        <?php $_smarty_tpl->tpl_vars["no_histori"] = new Smarty_variable(1, null, 0);?>

                                                                        <?php  $_smarty_tpl->tpl_vars['entry_history'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry_history']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['entry']->value['histori_status_pemesanan']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry_history']->key => $_smarty_tpl->tpl_vars['entry_history']->value) {
$_smarty_tpl->tpl_vars['entry_history']->_loop = true;
?>

                                                                            <tr id="baris_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
">

                                                                                <td align="center"><?php echo $_smarty_tpl->tpl_vars['limitpage']->value*($_smarty_tpl->tpl_vars['currentpage']->value-1)+$_smarty_tpl->tpl_vars['no_histori']->value;?>
</td>

                                                                                <td align="center"><?php echo $_smarty_tpl->tpl_vars['entry_history']->value['tanggal'];?>
</td>

                                                                                <td align="left"><?php echo $_smarty_tpl->tpl_vars['entry_history']->value['penjelasan'];?>
</td>

                                                                            </tr>

                                                                            <?php $_smarty_tpl->tpl_vars["no_histori"] = new Smarty_variable($_smarty_tpl->tpl_vars['no_histori']->value+1, null, 0);?>  

                                                                        <?php } ?>

                                                                    </tbody>                                         

                                                                </table>

                                                            </div>

                                                        </div>

                                                        <div class="table-responsive hide" id="form-alamat-<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" style="margin-top: 10px;">

                                                            <div class="form-group">
                                                                <label for="histori_pemesanan">Alamat Pengiriman:</label>
																<div class="table table-xlg" id="alamat-<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
"  style="width:100%">
																		<p style="font-size: 20px;">Penerima : <?php echo $_smarty_tpl->tpl_vars['entry']->value['nama_penerima'];?>
<hr></p>
																		<p style="font-size: 20px;">Alamat : <?php echo $_smarty_tpl->tpl_vars['entry']->value['alamat'];?>
<hr></p>
																		<p style="font-size: 20px;">Telpon : <?php echo $_smarty_tpl->tpl_vars['entry']->value['no_hp'];?>
<hr></p>
																		<p style="font-size: 20px;">Pengirim : <?php echo $_smarty_tpl->tpl_vars['entry']->value['nama_pengirim'];?>
<hr></p>
																		<p style="font-size: 20px; text-transform: uppercase;">Kurir Pengiriman : <?php echo $_smarty_tpl->tpl_vars['entry']->value['kurir'];?>
</p>
																		<p style="font-size: 20px; text-transform: uppercase;">Kode Pemesanan : #<?php echo $_smarty_tpl->tpl_vars['entry']->value['kode_pemesanan'];?>
</p>
                                                                </div>
																<button onClick="printalamat('alamat-<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
')" class="btn btn-success" type="button">Print Alamat Pengirman</button>
    															<button class="btn" data-clipboard-action="copy" data-clipboard-target="#alamat-<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
">Copy Alamat Pengirman</button>						
                                                            </div>

                                                        </div>
                                                        

                                                        <div id="detail_detail_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                <label for="histori_pemesanan">Detail Barang:</label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">

                                                                    <thead>

                                                                        <tr>

                                                                            <th width="10%"><div style="text-align: center;">No.</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Gambar</div></th>

                                                                            <th width="40%"><div style="text-align: center;">Nama Barang</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Qty</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Harga</div></th>

                                                                            <th width="10%"><div style="text-align: center;">Diskon</div></th>
                                                                        
                                                                            <th width="15%"><div style="text-align: center;">Subtotal</div></th>

                                                                            <th width="15%"><div style="text-align: center;">Grandtotal</div></th>

                                                                        </tr>

                                                                    </thead>

                                                                    <tbody>

                                                                        <?php $_smarty_tpl->tpl_vars["no_detail"] = new Smarty_variable(1, null, 0);?>
                                                                        <?php $_smarty_tpl->tpl_vars["total"] = new Smarty_variable(0, null, 0);?>

                                                                        <?php  $_smarty_tpl->tpl_vars['entry_barang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry_barang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['entry']->value['detail_pemesanan']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry_barang']->key => $_smarty_tpl->tpl_vars['entry_barang']->value) {
$_smarty_tpl->tpl_vars['entry_barang']->_loop = true;
?>

                                                                            <tr id="baris_<?php echo $_smarty_tpl->tpl_vars['entry_barang']->value['id'];?>
">

                                                                                <td align="center"><?php echo $_smarty_tpl->tpl_vars['no_detail']->value;?>
</td>

                                                                                <td align="center"><img src="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/produk/<?php echo $_smarty_tpl->tpl_vars['entry_barang']->value['gambar'];?>
" width="48px" /></td>

                                                                                <td align="left"><?php echo $_smarty_tpl->tpl_vars['entry_barang']->value['nama'];?>
 (<?php echo $_smarty_tpl->tpl_vars['entry_barang']->value['kode'];?>
)<?php if ($_smarty_tpl->tpl_vars['entry_barang']->value['ukuran']!='') {?><br />Ukuran: <?php echo $_smarty_tpl->tpl_vars['entry_barang']->value['ukuran'];
}
if ($_smarty_tpl->tpl_vars['entry_barang']->value['warna']!='') {?><br />Warna <?php echo $_smarty_tpl->tpl_vars['entry_barang']->value['warna'];
}?></td>

                                                                                <td align="center"><?php echo $_smarty_tpl->tpl_vars['entry_barang']->value['jumlah'];?>
</td>

                                                                                <td align="center"> Rp. <?php echo number_format($_smarty_tpl->tpl_vars['entry_barang']->value['harga_jual']);?>
</td>
                                                                                <td align="center"> Rp. <?php echo number_format($_smarty_tpl->tpl_vars['entry_barang']->value['harga_diskon']);?>
</td>
                                                                                <td align="right"><?php echo $_smarty_tpl->tpl_vars['entry_barang']->value['sub_total'];?>
</td>

                                                                                <td align="right"><?php echo $_smarty_tpl->tpl_vars['entry_barang']->value['grand_total'];?>
</td>

                                                                            </tr>

                                                                            <?php $_smarty_tpl->tpl_vars["no_detail"] = new Smarty_variable($_smarty_tpl->tpl_vars['no_detail']->value+1, null, 0);?>  
                                                                            <?php $_smarty_tpl->tpl_vars['total'] = new Smarty_variable($_smarty_tpl->tpl_vars['total']->value+$_smarty_tpl->tpl_vars['entry_barang']->value['grand_total'], null, 0);?>  

                                                                        <?php } ?>
                                                                            <tr id="baris_<?php echo $_smarty_tpl->tpl_vars['entry_barang']->value['id'];?>
">

                                                                                <td align="right" colspan="7">Voucher</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                            <tr id="baris_<?php echo $_smarty_tpl->tpl_vars['entry_barang']->value['id'];?>
">

                                                                                <td align="right" colspan="7">Ongkir</td>

                                                                                <td align="center">0</td>
                                                                            </tr>
                                                                            <tr id="baris_<?php echo $_smarty_tpl->tpl_vars['entry_barang']->value['id'];?>
">

                                                                                <td align="right" colspan="7">Total</td>

                                                                                <td align="center"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</td>
                                                                            </tr>
                                                                        

                                                                    </tbody>                                         

                                                                </table>

                                                            </div>

                                                            <div class="form-group">

                                                                <?php if (in_array('E',$_smarty_tpl->tpl_vars['array_akses']->value)) {?><button id_edit="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" type="button" class="btn btn-danger edit_pesanan">Edit</button><?php }?>

                                                            </div>

                                                        </div>

                                                        

                                                        <?php if (in_array('P',$_smarty_tpl->tpl_vars['array_akses']->value)) {?>

                                                        <?php if ($_smarty_tpl->tpl_vars['entry']->value['status']==2||$_smarty_tpl->tpl_vars['entry']->value['status']==5||$_smarty_tpl->tpl_vars['entry']->value['status']==6||$_smarty_tpl->tpl_vars['entry']->value['status']==7||$_smarty_tpl->tpl_vars['entry']->value['status']==8) {?><div id="edit_no_resi_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">                                                                

                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                                                                                         

                                                                    <tr>

                                                                        <td width="25%"><label for="no_resi" style="padding: 7px 0 0 7px;">Status Pesanan:</label></td>

                                                                        <td colspan="2" width="70%">

                                                                            <select class="form-control" name="status_pesanan_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
">

                                                                                <option value="<?php if ($_smarty_tpl->tpl_vars['entry']->value['pembayaran']==1) {?>2<?php } else { ?>7<?php }?>" <?php if ($_smarty_tpl->tpl_vars['entry']->value['status']==2||$_smarty_tpl->tpl_vars['entry']->value['status']==7) {?> selected="selected"<?php }?>>Pesanan Dalam Proses.</option>

                                                                                <option value="<?php if ($_smarty_tpl->tpl_vars['entry']->value['pembayaran']==1) {?>6<?php } else { ?>8<?php }?>" <?php if ($_smarty_tpl->tpl_vars['entry']->value['status']==6||$_smarty_tpl->tpl_vars['entry']->value['status']==8) {?> selected="selected"<?php }?>>Pesanan Sudah Dikirim.</option>

                                                                                <option value="5" <?php if ($_smarty_tpl->tpl_vars['entry']->value['status']==5) {?> selected="selected"<?php }?>>Pesanan Sudah Diterima.</option>

                                                                            </select>

                                                                        </td>                                                                        

                                                                    </tr>

                                                                    <tr>

                                                                        <td width="25%"><label for="no_resi" style="padding: 7px 0 0 7px;">Resi Pengiriman:</label></td>

                                                                        <td width="60%"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['no_resi'];?>
" class="form-control" name="no_resi_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" placeholder="" /></td>

                                                                        <td width="15%">

                                                                            <div id="i_loading_noresi_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="G-btn-animation" style="display: none;"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/img/loading.gif" /></div>

                                                                            <button id="btn_simpan_noresi_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" id_noresi="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" type="button" class="btn btn-danger simpan_noresi">Update Status</button>

                                                                        </td>

                                                                    </tr>

                                                                </table>

                                                            </div>

                                                        </div><?php }?>

                                                        <?php }?>

                                                        

                                                        <!-- div id="edit_finish_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="table-responsive" style="margin-top: 10px; display: none;">

                                                            <div class="form-group">

                                                                

                                                                <label for=""></label>

                                                                <table class="table table-striped table-bordered table-hover" width="100%">                                                                    

                                                                    <tr>

                                                                        <td width="25%"><label for="nama_penerima" style="padding: 7px 0 0 7px;">Penerima Paket:</label></td>

                                                                        <td width="60%"><input type="text" value="" class="form-control" name="nama_penerima_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" placeholder="" /></td>

                                                                        <td width="15%">

                                                                            <div id="i_loading_finish_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="G-btn-animation" style="display: none;"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/img/loading.gif" /></div>

                                                                            <button id="btn_simpan_finish_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" id_finish="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" type="button" class="btn btn-danger simpan_finish">Paket Sudah Diterima</button>

                                                                        </td>

                                                                    </tr>                                                                    

                                                                </table>

                                                            </div>

                                                        </div -->

                                                    </div></td></tr>

                                                </table>

                                            </td>

                                        </tr>

                                        <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>  

                                    <?php } ?>

                                </tbody>

                                <?php if ($_smarty_tpl->tpl_vars['totalpage']->value>1) {?>

                                <tfoot><tr><th colspan="3">

                                    <div style="text-align: center;">

                                        <?php if ($_smarty_tpl->tpl_vars['currentpage']->value>1) {?>                                

                                            <a class="btn btn-default" href="list.php?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value-1;
if ($_smarty_tpl->tpl_vars['tanggal_dari']->value!='') {?>&tanggal_dari=<?php echo $_smarty_tpl->tpl_vars['tanggal_dari']->value;
}
if ($_smarty_tpl->tpl_vars['tanggal_sampai']->value!='') {?>&tanggal_dari=<?php echo $_smarty_tpl->tpl_vars['tanggal_sampai']->value;
}
if ($_smarty_tpl->tpl_vars['jenis']->value!='0') {?>&jenis=<?php echo $_smarty_tpl->tpl_vars['jenis']->value;
}
if ($_smarty_tpl->tpl_vars['status']->value!='0') {?>&status=<?php echo $_smarty_tpl->tpl_vars['status']->value;
}
if ($_smarty_tpl->tpl_vars['query']->value!='') {?>&query=<?php echo $_smarty_tpl->tpl_vars['query']->value;
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
if ($_smarty_tpl->tpl_vars['tanggal_dari']->value!='') {?>&tanggal_dari=<?php echo $_smarty_tpl->tpl_vars['tanggal_dari']->value;
}
if ($_smarty_tpl->tpl_vars['tanggal_sampai']->value!='') {?>&tanggal_dari=<?php echo $_smarty_tpl->tpl_vars['tanggal_sampai']->value;
}
if ($_smarty_tpl->tpl_vars['jenis']->value!='0') {?>&jenis=<?php echo $_smarty_tpl->tpl_vars['jenis']->value;
}
if ($_smarty_tpl->tpl_vars['status']->value!='0') {?>&status=<?php echo $_smarty_tpl->tpl_vars['status']->value;
}
if ($_smarty_tpl->tpl_vars['query']->value!='') {?>&query=<?php echo $_smarty_tpl->tpl_vars['query']->value;
}?>"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a>

                                            <?php }?>

                                            <?php $_smarty_tpl->tpl_vars["item"] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value+1, null, 0);?>                                

                                        <?php }} ?>

                                        <?php if ($_smarty_tpl->tpl_vars['totalpage']->value>$_smarty_tpl->tpl_vars['currentpage']->value) {?>                                

                                            <a class="btn btn-default" href="list.php?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value+1;
if ($_smarty_tpl->tpl_vars['tanggal_dari']->value!='') {?>&tanggal_dari=<?php echo $_smarty_tpl->tpl_vars['tanggal_dari']->value;
}
if ($_smarty_tpl->tpl_vars['tanggal_sampai']->value!='') {?>&tanggal_dari=<?php echo $_smarty_tpl->tpl_vars['tanggal_sampai']->value;
}
if ($_smarty_tpl->tpl_vars['jenis']->value!='0') {?>&jenis=<?php echo $_smarty_tpl->tpl_vars['jenis']->value;
}
if ($_smarty_tpl->tpl_vars['status']->value!='0') {?>&status=<?php echo $_smarty_tpl->tpl_vars['status']->value;
}
if ($_smarty_tpl->tpl_vars['query']->value!='') {?>&query=<?php echo $_smarty_tpl->tpl_vars['query']->value;
}?>">Next &rarr;</a>

                                        <?php }?>                                

                                    </div>  

                            </th></tr></tfoot>

                            <?php }?>

								</table>
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
/assets/js/jquery-printme.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/js/clipboard.min.js"><?php echo '</script'; ?>
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
 type="text/javascript">

		function printalamat(id){
			$('#'+id).printMe();
		}
        $(function () {

            var delete_selected = "";

//            $('.tanggal').datepick({ dateFormat: 'dd-mm-yyyy' });

            

            $( ".batal_pesan" ).click(function() {

                var id = this.getAttribute('id_batal');

                prosesBatalPesanan(id);                

            });

               

            $( ".histori" ).click(function() {

                var id = this.getAttribute('id_histori');

                var text = $('#btn_histori_'+id).text();

                if(text=='Sembunyikan Status') {

                    $('#detail_histori_'+id).hide('slow');

                    $('#btn_histori_'+id).html('Lihat Status');

                } else                

                if(text=='Lihat Status') {

                    $('#detail_histori_'+id).show('slow');

                    $('#btn_histori_'+id).html('Sembunyikan Status');

                    

                    $("body, html").animate({ 

                        scrollTop: $('#detail_histori_'+id).offset().top 

                    }, 600);

                }

            });

            

            $( ".detail" ).click(function() {

                var id = this.getAttribute('id_detail');

                var text = $('#btn_detail_'+id).text();

                if(text=='Sembunyikan Detail') {

                    $('#detail_detail_'+id).hide('slow');

                    $('#btn_detail_'+id).html('Tampilkan Detail');

                } else                

                if(text=='Tampilkan Detail') {

                    $('#detail_detail_'+id).show('slow');

                    $('#btn_detail_'+id).html('Sembunyikan Detail');

                    

                    $("body, html").animate({ 

                        scrollTop: $('#btn_detail_'+id).offset().top 

                    }, 600);

                }

            });

            

            $( ".cetak" ).click(function() {

                var notrx = this.getAttribute('notrx');

                var url = 'cetak.php?notrx='+notrx;

                window.open(url, '_blank');

            });

            

            $( ".noresi" ).click(function() {

                var id = this.getAttribute('id_noresi');

                var is_open = this.getAttribute('is_open');

                

                if(is_open=='false') {

                    $('#edit_no_resi_'+id).show('slow');

                    $('#btn_noresi_'+id).attr('is_open', 'true');                    

                } else                

                if(is_open=='true') {

                    $('#edit_no_resi_'+id).hide('slow');

                    $('#btn_noresi_'+id).attr('is_open', 'false');

                    

                    $("body, html").animate({ 

                        scrollTop: $('#btn_noresi_'+id).offset().top 

                    }, 600);

                }

            });

            

            /*$( ".finish" ).click(function() {

                var id = this.getAttribute('id_finish');

                var is_open = this.getAttribute('is_open');

                $('[name=nama_penerima_'+id+']').val('');        

                if(is_open=='false') {

                    $('#edit_finish_'+id).show('slow');

                    $('#btn_finish_'+id).attr('is_open', 'true');                    

                } else                

                if(is_open=='true') {

                    $('#edit_finish_'+id).hide('slow');

                    $('#btn_finish_'+id).attr('is_open', 'false');

                    

                    $("body, html").animate({ 

                        scrollTop: $('#btn_finish_'+id).offset().top 

                    }, 600);

                }

            });*/

            

            $( ".edit_pesanan" ).click(function() {

                var id = this.getAttribute('id_edit');

                window.location = '<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/pemesanan/edit.php?id='+id;

                

            });

            

            $( ".simpan_noresi" ).click(function() {

                var id = this.getAttribute('id_noresi');

                $('#i_loading_noresi_'+id).show();

                $('#btn_simpan_noresi_'+id).hide();

                                                                                

                $.ajax({

                    url: '<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/pemesanan/updateResi.php',

                    type: 'POST',

                    dataType: 'json',

                    data: { id: id, no_resi: $('[name=no_resi_'+id+']').val(), status: $('[name=status_pesanan_'+id+']').val()},

                    success: function(data, textStatus, jqXHR) {

                        $('#i_loading_noresi_'+id).hide();

                        $('#btn_simpan_noresi_'+id).show();

                        if(data['success']) {                

                            $('#text_no_resi_'+id).text($('[name=no_resi_'+id+']').val());

                            

                            var status_pesanan = $('[name=status_pesanan_'+id+']').val();

                            $('#text_status_'+id).text((status_pesanan==2 || status_pesanan==7)?"Pesanan Dalam Proses.":(status_pesanan==5?'Pesanan sudah diterima.':((status_pesanan==6 || status_pesanan==8)?'Pesanan sudah dikirim.':'')));

                            $('#text_status_'+id).attr('style', 'color: green; font-weight: bold;');

                            

                            

                            $('#text_pembayaran_'+id).text((status_pesanan==2 || status_pesanan==6 || status_pesanan==5)?"LUNAS":'BELUM LUNAS');

                            $('#text_pembayaran_'+id).attr('style', 'color: '+((status_pesanan==2 || status_pesanan==6 || status_pesanan==5)?"green":'red')+'; font-weight: bold;');

                            

                            $('#edit_no_resi_'+id).hide('slow');

                            $('#btn_noresi_'+id).attr('is_open', 'false');

                            

                        } else {                            

                            setRowMessage('error', data['message'], id);

                        }

                    },

                    error: function(jqXHR, textStatus, errorThrown) {

                        $('#i_loading_noresi_'+id).hide();

                        $('#btn_simpan_noresi_'+id).show();

                        setRowMessage('error', 'Edit no. resi gagal.', id);

                    }

                });

            });

            

            $( ".simpan_finish" ).click(function() {

                var id = this.getAttribute('id_finish');

                $('#i_loading_finish_'+id).show();

                $('#btn_simpan_finish_'+id).hide();

                                                                                

                $.ajax({

                    url: '<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/pemesanan/updateTutup.php',

                    type: 'POST',

                    dataType: 'json',

                    data: { id: id, nama_penerima: $('[name=nama_penerima_'+id+']').val()},

                    success: function(data, textStatus, jqXHR) {

                        $('#i_loading_finish_'+id).hide();

                        $('#btn_simpan_finish_'+id).show();

                        if(data['success']) {                

                            $('[name=nama_penerima_'+id+']').val('');

                            $('#edit_nama_penerima_'+id).hide('slow');

                            $('#btn_finish_'+id).attr('is_open', 'false'); 

                        } else {                            

                            setRowMessage('error', data['message'], id);

                        }

                    },

                    error: function(jqXHR, textStatus, errorThrown) {

                        $('#i_loading_finish_'+id).hide();

                        $('#btn_simpan_finish_'+id).show();

                        setRowMessage('error', 'Edit no. resi gagal.', id);

                    }

                });

            });

            

            $( "#btn_cari" ).click(function() {

                var tanggal_dari = $( '[name=tanggal_dari]' ).val();

                var tanggal_sampai = $( '[name=tanggal_sampai]' ).val();

                var jenis = $( '[name=jenis]' ).val();

                var status = $( '[name=status]' ).val();

                var query = $( "#query" ).val();

                

                window.location='list.php?_'+

                    (tanggal_dari.length>0?'&tanggal_dari='+tanggal_dari:'')+

                    (tanggal_sampai.length>0?'&tanggal_sampai='+tanggal_sampai:'')+

                    (jenis!='0'?'&jenis='+jenis:'')+

                    (status!='0'?'&status='+status:'')+

                    (query.length>0?'&query='+query:'');

            });



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



            function setRowMessage(type, message, id) {

                $('#alert_'+type+'_'+id+' .alert').text(message);

                $('#alert_'+type+'_'+id).show('slow');

                setTimeout(function() {

                    $('#alert_'+type+'_'+id).hide('slow');

                }, 5000);

                $("body, html").animate({ 

                    scrollTop: $('#message_wrapper_'+id).offset().top-100

                }, 600);

            }

            
            function prosesBatalPesanan(id) {

                $('<div></div>').appendTo('body')

                .html('<div>Yakin ingin membatalkan pesanan yang dipilih?</div>')

                .dialog({

                    modal: true,

                    title: 'Konfirmasi Pembatalan',

                    zIndex: 10000,

                    autoOpen: true,

                    width: 'auto',

                    resizable: false,

                    buttons: {

                        Yes: function () {

                            $('#i_loading_batal_'+id).show();

                            $('#btn_batal_'+id).hide();

                            $.ajax({

                                url: 'cancelOrder.php',

                                type: 'POST',

                                dataType: 'json',

                                data: { id: id },

                                success: function(data, textStatus, jqXHR) {

                                    if(data['success']) {

                                        setRowMessage('success', data['message'], id);

                                        $('#btn_batal_'+id).hide();

                                        $('#i_loading_batal_'+id).hide();

                                        var status_pesanan = $('[name=status_pesanan_'+id+']').val();

                                        $('#text_status_'+id).text("Pemesanan dibatalakan oleh Admin.");

                                        $('#text_status_'+id).attr('style', 'color: red; font-weight: bold;');



                                    } else {

                                        setRowMessage('error', data['message'], id);

                                    }

                                },

                                error: function(jqXHR, textStatus, errorThrown) {

                                    setRowMessage('error', 'Terjadi kesalahan system.', id);

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

            

            <?php if ($_smarty_tpl->tpl_vars['alert_success']->value!='') {?>setMessage('success', '<?php echo $_smarty_tpl->tpl_vars['alert_success']->value;?>
');<?php }?>        

            <?php if ($_smarty_tpl->tpl_vars['alert_error']->value!='') {?>setMessage('error', '<?php echo $_smarty_tpl->tpl_vars['alert_error']->value;?>
');<?php }?> 

        });

    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
    var clipboard = new Clipboard('.btn');

    clipboard.on('success', function(e) {
        console.log(e);
    });

    clipboard.on('error', function(e) {
        console.log(e);
    });
    <?php echo '</script'; ?>
>
<!-- /page scripts -->
</body><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/footer_js.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

</html><?php }} ?>
