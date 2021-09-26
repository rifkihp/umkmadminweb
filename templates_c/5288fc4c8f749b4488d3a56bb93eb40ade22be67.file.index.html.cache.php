<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-01-22 11:27:20
         compiled from "..\..\templates\back-end\penguin\index.html" */ ?>
<?php /*%%SmartyHeaderCode:3185218295e27cf282f8597-28789015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5288fc4c8f749b4488d3a56bb93eb40ade22be67' => 
    array (
      0 => '..\\..\\templates\\back-end\\penguin\\index.html',
      1 => 1538456116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3185218295e27cf282f8597-28789015',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'adminweburl' => 0,
    'sub_title' => 0,
    'dashboard' => 0,
    'stok_totalrecord' => 0,
    'stok_listdetail' => 0,
    'entry' => 0,
    'limitpage' => 0,
    'stok_currentpage' => 0,
    'no' => 0,
    'pemesanan_totalrecord' => 0,
    'pemesanan_listdetail' => 0,
    'pemesanan_currentpage' => 0,
    'pemesanan_totalpage' => 0,
    'konfirmasi_currentpage' => 0,
    'pemesanan_frompage' => 0,
    'pemesanan_untilpage' => 0,
    'item' => 0,
    'konfirmasi_totalrecord' => 0,
    'konfirmasi_listdetail' => 0,
    'konfirmasi_totalpage' => 0,
    'konfirmasi_frompage' => 0,
    'konfirmasi_untilpage' => 0,
    'tpl_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e27cf28398445_55907560',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e27cf28398445_55907560')) {function content_5e27cf28398445_55907560($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

	<!--sidebar-->
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

	<!--/sidebar-->
	
	<!--Page Container-->
	<section class="main-container">	
			<!--Page Header-->
			<div class="header">
				<div class="header-content">
					<div class="page-title"><i class="icon-display4"></i> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
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
					<div class="col-md-3">
						<div class="panel panel-flat">
							<div class="panel-body p-b-10">
								<div class="row">
									<div class="col-md-8 col-xs-8">
										<div class="text-size-huge text-regular text-blue-dark text-semibold no-padding no-margin m-t-5 m-b-10"><?php echo $_smarty_tpl->tpl_vars['dashboard']->value['jumlah_pengunjung'];?>
</div>
										<span class="text-muted">Total Jumlah Pengunjung</span>
									</div>
									<div class="col-md-4 col-xs-4">
										<i class="icon-statistics icon-4x icon-light"></i>
									</div>
								</div>
							</div>
							<div class="panel-footer bg-blue">							
								<div class="elements">
									<span class="heading-text text-semibold">Pengunjung</span>
									<a href="index1.htm#" class="pull-right no-padding-right text-white">View all <i class="icon-arrow-right6 position-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-3">
						<div class="panel panel-flat">
							<div class="panel-body p-b-10">
								<div class="row">
									<div class="col-md-8 col-xs-8">
										<div class="text-size-huge text-regular text-danger-dark text-semibold no-padding no-margin m-t-5 m-b-10"><?php echo $_smarty_tpl->tpl_vars['dashboard']->value['jumlah_lunas'];?>
</div>
										<span class="text-muted">Total Pembayaran Lunas</span>
									</div>
									<div class="col-md-4 col-xs-4">
										<i class="icon-cash icon-4x icon-light"></i>
									</div>
								</div>
							</div>
							<div class="panel-footer bg-danger">							
								<div class="elements">
									<span class="heading-text text-semibold">Lunas</span>
									<a href="index1.htm#" class="pull-right no-padding-right text-white">View all <i class="icon-arrow-right6 position-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-3">
						<div class="panel panel-flat">
							<div class="panel-body p-b-10">
								<div class="row">
									<div class="col-md-8 col-xs-8">
										<div class="text-size-huge text-regular text-success-dark text-semibold no-padding no-margin m-t-5 m-b-10"><?php echo $_smarty_tpl->tpl_vars['dashboard']->value['jumlah_belum_lunas'];?>
</div>
										<span class="text-muted">Total Belum Lunas</span>
									</div>
									<div class="col-md-4 col-xs-4">
										<i class="icon-cart5 icon-4x icon-light"></i>
									</div>
								</div>
							</div>
							<div class="panel-footer bg-success">							
								<div class="elements">
									<span class="heading-text text-semibold">Keep</span>
									<a href="index1.htm#" class="pull-right no-padding-right text-white">View all <i class="icon-arrow-right6 position-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-3">
						<div class="panel panel-flat">
							<div class="panel-body p-b-10">
								<div class="row">
									<div class="col-md-8 col-xs-8">
										<div class="text-size-huge text-regular text-amber-dark text-semibold no-padding no-margin m-t-5 m-b-10"><?php echo $_smarty_tpl->tpl_vars['dashboard']->value['jumlah_pelanggan'];?>
</div>
										<span class="text-muted">Total Orders</span>
									</div>
									<div class="col-md-4 col-xs-4">
										<i class="icon-users icon-4x icon-light"></i>
									</div>
								</div>
							</div>
							<div class="panel-footer bg-amber">							
								<div class="elements">
									<span class="heading-text text-semibold">Pelanggan</span>
									<a href="index1.htm#" class="pull-right no-padding-right text-white">View all <i class="icon-arrow-right6 position-right"></i></a>
								</div>
							</div>
						</div>
					</div>						
				</div>			
				
				<div class="panel panel-flat">
					<div class="panel-body">
						<div class="row">
							<div class="col-md-12">
								<div class="panel-heading">Statistik Penjualan</div>
								<div class="panel-body">
									<div style="width:100%; height:100%;" id="layarfullscreen">123</div>                     
								</div>
							</div>		

						</div> 	
					</div>
				</div>
				
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h4 class="panel-title">Peringatan Stok  &nbsp;&nbsp;<span class="label label-danger"><?php echo $_smarty_tpl->tpl_vars['stok_totalrecord']->value;
if ($_smarty_tpl->tpl_vars['stok_totalrecord']->value>0) {?> items<?php }?></span></h4>				
					</div>
					<div class="table-responsive">
						<table class="table table-hover user-list">
							<thead>
								<tr>
									<th>No</th>							
									<th>Product</th>
									<th>Ukuran</th>							
									<th>Warna</th>						
									<th>Sisa Stok</th>
									<th align="center">Aksi</th>							
								</tr>
							</thead>
							<tbody>

								<?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable(1, null, 0);?>

								<?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stok_listdetail']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>                                    

									<tr id="baris_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
">

										<td align="center"><?php echo $_smarty_tpl->tpl_vars['limitpage']->value*($_smarty_tpl->tpl_vars['stok_currentpage']->value-1)+$_smarty_tpl->tpl_vars['no']->value;?>
</td>

										<td align="left"><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
 (<?php echo $_smarty_tpl->tpl_vars['entry']->value['kode'];?>
)</td>

										<td align="left"><?php echo $_smarty_tpl->tpl_vars['entry']->value['ukuran'];?>
</td>

										<td align="left"><?php echo $_smarty_tpl->tpl_vars['entry']->value['warna'];?>
</td>

										<td align="left"><?php echo $_smarty_tpl->tpl_vars['entry']->value['jumlah'];?>
 Pcs</td>

										<td><div style="text-align: center;  white-space: nowrap;">

												<a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/product/edit.php?id=<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="btn btn-success update">Edit Stok</a>

											</div>

										</td>                                          

									</tr>

									<?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>  

								<?php } ?>

							</tbody>
						</table>
					</div>
				</div>
<!--Pesanan Baru-->	
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h4 class="panel-title">Pesanan Baru &nbsp;&nbsp;<span class="label label-danger"><?php echo $_smarty_tpl->tpl_vars['pemesanan_totalrecord']->value;
if ($_smarty_tpl->tpl_vars['pemesanan_totalrecord']->value>0) {?> items<?php }?></span></h4>				
					</div>
					<div class="table-responsive">
						<table class="table table-hover user-list">
							<thead>

								<tr>

									<th width="5%"><div style="text-align: center;">No.</div></th>

									<th width="15%"><div style="text-align: left;">Tanggal</div></th>

									<th width="20%"><div style="text-align: left;">Kode</div></th>

									<th width="25%"><div style="text-align: left;">Pelanggan</div></th>                                    

									<th width="15%"><div style="text-align: left;">Jumlah</div></th>

									<th width="15%"><div style="text-align: left;">Total</div></th>    

									<th width="5%"><div style="text-align: center;">Aksi</div></th>

								</tr>

							</thead>

							<tbody>

								<?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable(1, null, 0);?>

								<?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pemesanan_listdetail']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>                                    

									<tr id="baris_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
">

										<td align="center"><?php echo $_smarty_tpl->tpl_vars['limitpage']->value*($_smarty_tpl->tpl_vars['pemesanan_currentpage']->value-1)+$_smarty_tpl->tpl_vars['no']->value;?>
</td>

										<td align="left"><?php echo $_smarty_tpl->tpl_vars['entry']->value['waktu'];?>
</td>

										<td align="left">#<?php echo $_smarty_tpl->tpl_vars['entry']->value['kode'];?>
 <?php if ($_smarty_tpl->tpl_vars['entry']->value['is_dropship']=='Y') {?><span class="label label-danger">DROPSHIP</span><?php }?></td>

										<td align="left"><?php if ($_smarty_tpl->tpl_vars['entry']->value['id_member']==0) {?>Tamu<?php } else {
echo $_smarty_tpl->tpl_vars['entry']->value['nama'];
}?></td>

										<td align="left"><?php echo $_smarty_tpl->tpl_vars['entry']->value['jumlah'];?>
 Pcs</td>

										<td align="left">Rp. <?php echo $_smarty_tpl->tpl_vars['entry']->value['total'];?>
</td>

										<td><div style="text-align: center;  white-space: nowrap;">

												<a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/pemesanan/list.php?query=<?php echo $_smarty_tpl->tpl_vars['entry']->value['kode'];?>
" class="btn btn-success update">Detail</a>

											</div>

										</td>                                          

									</tr>

									<?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>  

								<?php } ?>

							</tbody>

							<?php if ($_smarty_tpl->tpl_vars['pemesanan_totalpage']->value>1) {?>

							<tfoot><tr><th colspan="8">

								<div style="text-align: center;">

									<?php if ($_smarty_tpl->tpl_vars['pemesanan_currentpage']->value>1) {?>                                

										<a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/dashboard/index.php?page_pemesanan=<?php echo $_smarty_tpl->tpl_vars['pemesanan_currentpage']->value-1;?>
&page_stok=<?php echo $_smarty_tpl->tpl_vars['stok_currentpage']->value;?>
&page_konfirmasi=<?php echo $_smarty_tpl->tpl_vars['konfirmasi_currentpage']->value;?>
">&larr; Prev</a>

									<?php }?>

									<?php $_smarty_tpl->tpl_vars["item"] = new Smarty_variable($_smarty_tpl->tpl_vars['pemesanan_frompage']->value, null, 0);?>

									<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['pemesanan_untilpage']->value+1 - ($_smarty_tpl->tpl_vars['pemesanan_frompage']->value) : $_smarty_tpl->tpl_vars['pemesanan_frompage']->value-($_smarty_tpl->tpl_vars['pemesanan_untilpage']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = $_smarty_tpl->tpl_vars['pemesanan_frompage']->value, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>

										<?php if ($_smarty_tpl->tpl_vars['item']->value==$_smarty_tpl->tpl_vars['pemesanan_currentpage']->value) {?>

											<span class="btn btn-info"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</span>                                

										<?php } else { ?>

											<a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/dashboard/index.php?page_pemesanan=<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
&page_stok=<?php echo $_smarty_tpl->tpl_vars['stok_currentpage']->value;?>
&page_konfirmasi=<?php echo $_smarty_tpl->tpl_vars['konfirmasi_currentpage']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a>

										<?php }?>

										<?php $_smarty_tpl->tpl_vars["item"] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value+1, null, 0);?>                                

									<?php }} ?>

									<?php if ($_smarty_tpl->tpl_vars['pemesanan_totalpage']->value>$_smarty_tpl->tpl_vars['pemesanan_currentpage']->value) {?>                                

										<a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/dashboard/index.php?page_pemesanan=<?php echo $_smarty_tpl->tpl_vars['pemesanan_currentpage']->value+1;?>
&page_stok=<?php echo $_smarty_tpl->tpl_vars['stok_currentpage']->value;?>
&page_konfirmasi=<?php echo $_smarty_tpl->tpl_vars['konfirmasi_currentpage']->value;?>
">Next &rarr;</a>

									<?php }?>                                

								</div>  

							</th></tr></tfoot><?php }?>
						</table>
					</div>
				</div>
				
<!--Konfirmasi Pembayaran-->	
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h4 class="panel-title">Konfirmasi Pembayaran &nbsp;&nbsp;<span class="label label-danger"><?php echo $_smarty_tpl->tpl_vars['konfirmasi_totalrecord']->value;
if ($_smarty_tpl->tpl_vars['konfirmasi_totalrecord']->value>0) {?> items<?php }?></span></h4>				
					</div>
					<div class="table-responsive">
						<table class="table table-hover user-list">
							<thead>

								<tr>

									<th width="5%"><div style="text-align: left;">No.</div></th>

									<th width="15%"><div style="text-align: left;">Tanggal</div></th>

									<th width="15%"><div style="text-align: left;">Kode</div></th>

									<th width="25%"><div style="text-align: left;">Pelanggan</div></th>                                    

									<th width="20%"><div style="text-align: left;">Bank Tujuan</div></th>    

									<th width="15%"><div style="text-align: left;">Jumlah</div></th>

									<th width="5%"><div style="text-align: center;">Aksi</div></th>

								</tr>

							</thead>

							<tbody>

								<?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable(1, null, 0);?>

								<?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['konfirmasi_listdetail']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>                                    

									<tr id="baris_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
">

										<td align="center"><?php echo $_smarty_tpl->tpl_vars['limitpage']->value*($_smarty_tpl->tpl_vars['konfirmasi_currentpage']->value-1)+$_smarty_tpl->tpl_vars['no']->value;?>
</td>

										<td align="left"><?php echo $_smarty_tpl->tpl_vars['entry']->value['waktu'];?>
</td>

										<td align="left">#<?php echo $_smarty_tpl->tpl_vars['entry']->value['kode_pemesanan'];?>
</td>

										<td align="left"><?php if ($_smarty_tpl->tpl_vars['entry']->value['id_member']==0) {?>Tamu<?php } else {
echo $_smarty_tpl->tpl_vars['entry']->value['nama'];
}?></td>

										<td align="left"><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama_bank'];?>
</td>

										<td align="left">Rp. <?php echo $_smarty_tpl->tpl_vars['entry']->value['jumlah_transfer'];?>
</td>

										<td><div style="text-align: center;  white-space: nowrap;">

												<a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/konfirmasi/list.php?query=<?php echo $_smarty_tpl->tpl_vars['entry']->value['kode_pemesanan'];?>
" class="btn btn-success update">Detail</a>

											</div>

										</td>                                          

									</tr>

									<?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>  

								<?php } ?>

							</tbody>

							<?php if ($_smarty_tpl->tpl_vars['konfirmasi_totalpage']->value>1) {?>

							<tfoot><tr><th colspan="8">

								<div style="text-align: center;">

									<?php if ($_smarty_tpl->tpl_vars['konfirmasi_currentpage']->value>1) {?>                                

										<a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/dashboard/index.php?page_konfirmasi=<?php echo $_smarty_tpl->tpl_vars['konfirmasi_currentpage']->value-1;?>
&page_stok=<?php echo $_smarty_tpl->tpl_vars['stok_currentpage']->value;?>
&page_pemesanan=<?php echo $_smarty_tpl->tpl_vars['pemesanan_currentpage']->value;?>
">&larr; Prev</a>

									<?php }?>

									<?php $_smarty_tpl->tpl_vars["item"] = new Smarty_variable($_smarty_tpl->tpl_vars['konfirmasi_frompage']->value, null, 0);?>

									<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['konfirmasi_untilpage']->value+1 - ($_smarty_tpl->tpl_vars['konfirmasi_frompage']->value) : $_smarty_tpl->tpl_vars['konfirmasi_frompage']->value-($_smarty_tpl->tpl_vars['konfirmasi_untilpage']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = $_smarty_tpl->tpl_vars['konfirmasi_frompage']->value, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>

										<?php if ($_smarty_tpl->tpl_vars['item']->value==$_smarty_tpl->tpl_vars['konfirmasi_currentpage']->value) {?>

											<span class="btn btn-info"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</span>                                

										<?php } else { ?>

											<a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/dashboard/index.php?page_konfirmasi=<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
&page_stok=<?php echo $_smarty_tpl->tpl_vars['stok_currentpage']->value;?>
&page_pemesanan=<?php echo $_smarty_tpl->tpl_vars['pemesanan_currentpage']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a>

										<?php }?>

										<?php $_smarty_tpl->tpl_vars["item"] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value+1, null, 0);?>                                

									<?php }} ?>

									<?php if ($_smarty_tpl->tpl_vars['konfirmasi_totalpage']->value>$_smarty_tpl->tpl_vars['konfirmasi_currentpage']->value) {?>                                

										<a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/dashboard/index.php?page_konfirmasi=<?php echo $_smarty_tpl->tpl_vars['konfirmasi_currentpage']->value+1;?>
&page_stok=<?php echo $_smarty_tpl->tpl_vars['stok_currentpage']->value;?>
&page_pemesanan=<?php echo $_smarty_tpl->tpl_vars['pemesanan_currentpage']->value;?>
">Next &rarr;</a>

									<?php }?>                                

								</div>  

							</th></tr></tfoot><?php }?>

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
 type="text/javascript" src="http://code.highcharts.com/highcharts.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 type="text/javascript" src="http://code.highcharts.com/modules/exporting.js"><?php echo '</script'; ?>
>



    <?php echo '<script'; ?>
 type="text/javascript">

        $(function () {

            $.ajax({

                type: 'POST',

                url: '<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/dashboard/statistikpenjualan.php',

                //data: data,

                cache: false,

                dataType: 'json',

                processData: false, // Don't process the files

                contentType: false, // Set content type to false as jQuery will tell the server its a query string request

                success: function(data) {

                    

                    

                    var tanggal = [];

                    var jumlah = [];

                    var topics = data['topics'];

                    for(var key=topics.length-1; key>=0; key--) {

                        tanggal[tanggal.length] = topics[key]['tanggal'];

                        jumlah[jumlah.length] = 1*topics[key]['jumlah'];

                        //console.log(topics[key]['jumlah']);

                    }



                    loadGrafik(tanggal, jumlah);

                }, 

                error: function() {



                }

            }); 

            

            

            function loadGrafik(tanggal, jumlah) {

                $('#layarfullscreen').highcharts({

                    chart: {

                        type: 'spline'

                    },

                    title: {

                        text: ''

                    },

                    subtitle: {

                        text: ''

                    },

                    xAxis: [{

                        categories: tanggal,

                        reversed: false,

                        title: {

                            text: 'Tanggal'

                        },

                        labels: {

                            step: 1

                        }

                    }],

                    yAxis: {

                        title: {

                            text: 'Penjualan'

                        },

                        labels: {

                            formatter: function () {

                                var val = this.value/1000000;

                                val = val<0?(-1*val):val;

                                return (Math.round(val*100)/100) +' JT';

                            }

                        }

                    },



                    plotOptions: {

                        series: {

                            stacking: 'normal'

                        }

                    },



                    tooltip: {

                        formatter: function () {

                            var val = this.point.y/1000000;

                            val = val<0?(-1*val):val;

                            return '<b>' + this.series.name + ', Tanggal ' + this.point.category + '</b><br/>' +

                                'Jumlah: ' + (Math.round(val*100)/100) +' JT';

                        //Highcharts.numberFormat(Math.abs(this.point.y), 0);

                        }

                    },



                    series: [{

                        name: 'Penjualan',

                        data: jumlah

                    }]

                });



            };

        });

    <?php echo '</script'; ?>
>
<!-- /page scripts -->
</body><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/footer_js.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

</html><?php }} ?>
