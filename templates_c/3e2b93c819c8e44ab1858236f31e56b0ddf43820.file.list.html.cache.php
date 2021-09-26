<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-11-01 10:27:03
         compiled from "../../templates/back-end/penguin/metode_pengiriman/list.html" */ ?>
<?php /*%%SmartyHeaderCode:9787641515bda7287f3c913-36334102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e2b93c819c8e44ab1858236f31e56b0ddf43820' => 
    array (
      0 => '../../templates/back-end/penguin/metode_pengiriman/list.html',
      1 => 1538456120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9787641515bda7287f3c913-36334102',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'adminweburl' => 0,
    'sub_title' => 0,
    'tab' => 0,
    'query' => 0,
    'array_akses' => 0,
    'listdetail' => 0,
    'entry' => 0,
    'limitpage' => 0,
    'currentpage' => 0,
    'no' => 0,
    'homeurl' => 0,
    'totalpage' => 0,
    'frompage' => 0,
    'untilpage' => 0,
    'item' => 0,
    'data' => 0,
    'datakurir' => 0,
    'tpl_dir' => 0,
    'freeongkir_tujuan' => 0,
    'listpropinsi' => 0,
    'entries' => 0,
    'alert_success' => 0,
    'alert_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5bda72883d6932_16419950',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bda72883d6932_16419950')) {function content_5bda72883d6932_16419950($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

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
/metode_pengiriman/"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a></li>
                <li class="active"><?php echo $_smarty_tpl->tpl_vars['sub_title']->value;?>
</li>
            </ul>					
        </div>
    </div>		
    <!--/Page Header-->

    <!--Page Content-->
    <div id="wrapper" class="container-fluid page-content">				
        <div class="panel panel-flat" style="margin: 5px;">
            <div class="form-group panel-body no-padding-bottom">

                <div class="form-group">
                    <ul id="myTab" class="nav nav-tabs">                                
                        <li<?php if ($_smarty_tpl->tpl_vars['tab']->value=="dataekspedisi") {?> class="active"<?php }?>>
                            <a href="#dataekspedisi" data-toggle="tab"><b>DATA EKSPEDISI</b></a>
                        </li>                                 
                        <li<?php if ($_smarty_tpl->tpl_vars['tab']->value=="freeongkir") {?> class="active"<?php }?>>
                            <a href="#freeongkir" data-toggle="tab"><b>FREE ONGKIR</b></a>
                        </li>                                
                        <li<?php if ($_smarty_tpl->tpl_vars['tab']->value=="cod") {?> class="active"<?php }?>>
                            <a href="#cod" data-toggle="tab"><b>COD</b></a>
                        </li>
                    </ul>
                </div>
                
                <div id="alert_success" class="form-group" style="display: none;">                         
                    <div class="alert alert-info">&nbsp;</div>
                </div>
                    
                <div id="alert_error" class="form-group" style="display: none;">                         
                    <div class="alert alert-danger">&nbsp;</div>
                </div>

                <div class="form-group tab-content">
                    <div class="tab-pane fade<?php if ($_smarty_tpl->tpl_vars['tab']->value=="dataekspedisi") {?> active in<?php }?>" id="dataekspedisi">
                         
                         <div class="panel-body no-padding-bottom">
                            <div class="input-group">
                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
" class="form-control" name="query" id="query" placeholder="Masukan kata kunci pencarian..." />
                                <span class="input-group-btn"><div id="btn_cari" type="submit" class="btn btn-default">Cari</div>
                                <a class="btn btn-default" href="list.php?tab=dataekspedisi">Reset</a></span>                                                  
                            </div>

                            <div class="form-group"></div>

                            <div class="form-group">
                                <?php if (in_array('T',$_smarty_tpl->tpl_vars['array_akses']->value)) {?><div id='btn_add' class="btn btn-primary">Baru</div><?php }?>
                                <?php if (in_array('E',$_smarty_tpl->tpl_vars['array_akses']->value)) {?><div id='btn_edit' class="btn btn-success disabled">Edit</div><?php }?>
                                <?php if (in_array('H',$_smarty_tpl->tpl_vars['array_akses']->value)) {?><div id='btn_delete' class="btn btn-danger disabled">Hapus</div><?php }?>
                            </div>
                        </div>
			
                        <div class="form-group"></div>
                        
                        <div class="table-responsive">
                            <table class="table datatable table-striped">
                                <thead>
                                    <tr>
                                        <th width="5px"><input type="checkbox" id="select_all" /></th>
                                        <th width="5%"><div style="text-align: center;">No.</div></th>
                                        <th width="25%"><div style="text-align: center;">Kode</div></th>
                                        <th width="35%"><div style="text-align: center;">Nama</div></th>
                                        <th width="15%"><div style="text-align: center;">Status</div></th>
                                        <th width="10%"><div style="text-align: center;">Logo</div></th>
                                        <th width="10%"><div style="text-align: center;">Aksi</div></th>
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
                                            <td align="center"><?php echo $_smarty_tpl->tpl_vars['limitpage']->value*($_smarty_tpl->tpl_vars['currentpage']->value-1)+$_smarty_tpl->tpl_vars['no']->value;?>
</td>
                                            <td align="center"><?php echo $_smarty_tpl->tpl_vars['entry']->value['kode'];?>
</td>
                                            <td align="center"><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
</td>
                                            <td align="center"><span style="font-weight: bold; color: <?php if ($_smarty_tpl->tpl_vars['entry']->value['is_aktif']=="Y") {?>green<?php } else { ?>red<?php }?>;"><?php if ($_smarty_tpl->tpl_vars['entry']->value['is_aktif']=="Y") {?>Aktif<?php } else { ?>Tidak Aktif<?php }?></span></td>
                                            <td align="center"><div style="text-align: center;  white-space: nowrap;">
                                                <?php if ($_smarty_tpl->tpl_vars['entry']->value['gambar']!='') {?><img src="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/ekspedisi/<?php echo $_smarty_tpl->tpl_vars['entry']->value['gambar'];?>
" width="75px" /><?php }?>
                                            </div></td>
                                            <td>
                                                <div style="text-align: center;  white-space: nowrap;">
                                                    <?php if (in_array('E',$_smarty_tpl->tpl_vars['array_akses']->value)) {?><div id_select="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="btn btn-success edit">Edit</div><?php }?>
                                                    <?php if (in_array('H',$_smarty_tpl->tpl_vars['array_akses']->value)) {?><div id_select="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="btn btn-danger hapus">Hapus</div><?php }?>                                                         
                                                </div>
                                            </td>                                          
                                        </tr>
                                        <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>  
                                    <?php } ?>
                                </tbody>

                                <?php if ($_smarty_tpl->tpl_vars['totalpage']->value>1) {?>
                                    <tfoot>
                                        <tr>
                                            <th colspan="7">
                                                <div style="text-align: center;">
                                                    <?php if ($_smarty_tpl->tpl_vars['currentpage']->value>1) {?>                                
                                                        <a class="btn btn-default" href="list.php?tab=dataekspedisi&page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value-1;
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
                                                            <a class="btn btn-default" href="list.php?tab=dataekspedisi&page=<?php echo $_smarty_tpl->tpl_vars['item']->value;
if ($_smarty_tpl->tpl_vars['query']->value!='') {?>&query=<?php echo $_smarty_tpl->tpl_vars['query']->value;
}?>"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a>
                                                        <?php }?>
                                                        <?php $_smarty_tpl->tpl_vars["item"] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value+1, null, 0);?>                                
                                                    <?php }} ?>

                                                    <?php if ($_smarty_tpl->tpl_vars['totalpage']->value>$_smarty_tpl->tpl_vars['currentpage']->value) {?>                                
                                                        <a class="btn btn-default" href="list.php?tab=dataekspedisi&page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value+1;
if ($_smarty_tpl->tpl_vars['query']->value!='') {?>&query=<?php echo $_smarty_tpl->tpl_vars['query']->value;
}?>">Next &rarr;</a>
                                                    <?php }?>                                
                                                </div>  
                                            </th>
                                        </tr>
                                    </tfoot>
                                <?php }?>
                            </table>
                        </div>                        
                    </div>
                    
                    <div class="tab-pane fade<?php if ($_smarty_tpl->tpl_vars['tab']->value=="freeongkir") {?> active in<?php }?>" id="freeongkir">

                        <div class="form-group">
                            <label for="is_aktif_freeongkir">Aktifkan Free Ongkir:</label>
                            <table>
                                <tr>
                                    <td>
                                        <label><input type="radio" name="is_aktif_freeongkir" value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value[0]['is_aktif_freeongkir']=='1') {?>checked<?php }?> />&nbsp;&nbsp;<span class="label bg-blue" style="font-size: 9pt;">AKTIF</span>&nbsp;&nbsp;</label>
                                        <label><input type="radio" name="is_aktif_freeongkir" value="0" <?php if ($_smarty_tpl->tpl_vars['data']->value[0]['is_aktif_freeongkir']=='0') {?>checked<?php }?> />&nbsp;&nbsp;<span class="label bg-blue" style="font-size: 9pt;">TIDAK AKTIF</span>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <div class="form-group">
                            <label for="all_produk_freeongkir">Free Ongkir Untuk Semua Produk:</label>
                            <table>
                                <tr>
                                    <td>
                                        <label><input type="radio" name="all_produk_freeongkir" value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value[0]['all_produk_freeongkir']=='1') {?>checked<?php }?> />&nbsp;&nbsp;<span class="label bg-blue" style="font-size: 9pt;">AKTIF</span>&nbsp;&nbsp;</label>
                                        <label><input type="radio" name="all_produk_freeongkir" value="0" <?php if ($_smarty_tpl->tpl_vars['data']->value[0]['all_produk_freeongkir']=='0') {?>checked<?php }?> />&nbsp;&nbsp;<span class="label bg-blue" style="font-size: 9pt;">TIDAK AKTIF</span>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <div class="form-group">
                            <label for="min_pembelian_freeongkir">Jumlah Minimum Pembelian (Rp.):</label>
                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['min_pembelian_freeongkir'];?>
" class="form-control harga" name="min_pembelian_freeongkir" />
                        </div>

                        <div class="form-group">
                            <label for="kurir_freeongkir">Jenis Kurir Free Ongkir:</label>
                            <select multiple class="form-control" name="kurir_freeongkir" style="height: 200px;">
                                <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datakurir']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['entry']->value['is_select']=='Y') {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['entry']->value['kode'];?>
</option>                                        
                                <?php } ?>                            
                            </select>
                            <label>Gunakan tombol Ctrl untuk pilih lebih dari 1 kurir.</label>
                        </div>
                         
                        <div id="list_tujuan" class="table-responsive" style="margin-top: 10px;">
                            <div class="form-group">
                                <label for="detail_tujuan">Tujuan Free Ongkir:</label>
                                <table  id="tblDetail_tujuan" class="table table-striped table-bordered table-hover" width="100%">
                                    <thead>
                                        <tr>
                                            <th width="5px"><span class="fa fa-trash-o"></span></th>
                                            <th width="50%"><div style="text-align: left;">Propinsi</div></th>
                                            <th width="50%"><div style="text-align: left;">Kota</div></th> 
                                        </tr>
                                    </thead>
                                    <tbody id="detail_tujuan">
                                    </tbody>
                                </table>
                            </div>

                            <div class="form-group">
                                <div id='btn_add_tujuan' class="btn btn-primary">Tambah</div>                       
                            </div>      
                        </div>
                        
                        <div class="form-group"></div>
                                      
                        <div class="form-group">
                            <div id="i_loading_freeongkir" class="G-btn-animation" style="display: none;"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/img/loading.gif" /></div>                  
                            <?php if (in_array('E',$_smarty_tpl->tpl_vars['array_akses']->value)) {?><div id="btn_simpan_freeongkir" class="btn btn-primary">Update</div><?php }?>
                        </div>    
                    </div>
                    
                    <div class="tab-pane fade<?php if ($_smarty_tpl->tpl_vars['tab']->value=="cod") {?> active in<?php }?>" id="cod">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/Page Content-->

    <!--Footer -->
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

    <!--/Footer-->

</section>
<!--/Page Container-->

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
/assets/js/jquery.cropit.js"><?php echo '</script'; ?>
> 
<!-- iCheck -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/iCheck/square/blue.css">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/iCheck/icheck.min.js"><?php echo '</script'; ?>
>  

<?php echo '<script'; ?>
 type="text/javascript">        

    $(function () {           
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
        
        var setLoading = function(isLoading, tab) {
            if(isLoading) {
                $('#i_loading_'+tab).show();
                $('#btn_simpan_'+tab).hide();
            } else {
                $('#i_loading_'+tab).hide();
                $('#btn_simpan_'+tab).show();                    
            }
        };
        
        var setMessage = function(type, message) {
            $('#alert_'+type+' .alert').text(message);
            $('#alert_'+type).show('slow');
            setTimeout(function() {
                $('#alert_'+type).hide('slow');
            }, 5000);
            $("body, html").animate({ 
                scrollTop: $('#wrapper').offset().top 
            }, 600);
        };
        
        var setButton = function() {
            var temp = new Array();
            if(delete_selected.length>0) temp = delete_selected.split(',');                
            $( "#btn_edit" ).removeClass('disabled').addClass(temp.length==1?'':'disabled');
            $( "#btn_delete" ).removeClass('disabled').addClass(temp.length>0?'':'disabled');
        };

        var prosesDelete = function(id) {
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
                            window.location='list.php?tab=dataekspedisi<?php if ($_smarty_tpl->tpl_vars['query']->value!='') {?>&query=<?php echo $_smarty_tpl->tpl_vars['query']->value;
}?>';
                        } else {
                            setMessage('error', data['message']);
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        setMessage('error', 'Terjadi kesalahan system.');
                    }
                }); 
            }, function (dismiss) {
                // dismiss can be 'cancel', 'overlay', 'close', 'timer'
                //if (dismiss === 'cancel') {
                    //swal('Cancelled', 'Record Data Batal Dihapus', 'error');
                //}
            });
        };

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

        $( "#btn_cari" ).click(function() {
            var query = $( "#query" ).val();
            window.location='list.php?tab=dataekspedisi'+(query.length>0?'&query='+query:'');
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
        
        
        
        
                

        var setNamaPropinsiChange = function() {

            $('.nama_propinsi').on('change', function (e) {

                var element = $(this).closest('tr');
                var kolom_kota = element.find('[name=kota]');

                loadKotaTujuan(this.value, kolom_kota);

            });
        };

        var loadKotaTujuan = function(propinsi, kolom_kota) {
            kolom_kota.empty();
            $.ajax({
                type: 'POST',
                url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/getKota.php',
                data: { 'propinsi': propinsi },
                dataType: 'json',
                success: function(data) {
                    var store = data['topics'];
                    kolom_kota.empty();
                    for(var key in store) {
                        kolom_kota.append($('<option>', {
                            value: store[key]['city_id'],
                            text: store[key]['city_name']
                        }));
                    }                        
                }
            });
        };


        <?php  $_smarty_tpl->tpl_vars['entries'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entries']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['freeongkir_tujuan']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entries']->key => $_smarty_tpl->tpl_vars['entries']->value) {
$_smarty_tpl->tpl_vars['entries']->_loop = true;
?>
            var record = 
                '<tr>' +                        
                    '<td align="center"><span class="fa fa-trash-o hapus_tujuan" style="cursor: pointer;"></span></td>' +  
                    '<td align="left">' +
                        '<select name="propinsi" class="form-control nama_propinsi">' +
                            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listpropinsi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                                '<option value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['province_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['entry']->value['province_id']==$_smarty_tpl->tpl_vars['entries']->value['id_propinsi']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['entry']->value['province'];?>
</option>' +
                            <?php } ?>
                        '</select>' +
                    '</td>' +
                    '<td align="left">' +
                        '<select name="kota" class="form-control">' +
                            '<option value="<?php echo $_smarty_tpl->tpl_vars['entries']->value['id_kota'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['entries']->value['kota'];?>
</option>' +
                        '</select>' +
                    '</td>' +
                '</tr>';
             $( record ).insertBefore( "#detail_tujuan" );
        <?php } ?>
            
         setNamaPropinsiChange();

        $('#btn_add_tujuan').click(function() {
            var record = 
                '<tr>' +                        
                    '<td align="center"><span class="fa fa-trash-o hapus_tujuan" style="cursor: pointer;"></span></td>' +  
                    '<td align="left">' +
                        '<select name="propinsi" class="form-control nama_propinsi">' +
                            '<option value=""></option>' +
                            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listpropinsi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                                '<option value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['province_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['entry']->value['province'];?>
</option>' +
                            <?php } ?>
                        '</select>' +
                    '</td>' +
                    '<td align="left">' +
                        '<select name="kota" class="form-control"></select>' +
                    '</td>' +
                '</tr>';
             $( record ).insertBefore( "#detail_tujuan" );
             setNamaPropinsiChange();
        });


        $( document ).on( 'click', '.hapus_tujuan', function() {
            var element = $(this).closest('tr');
            element.remove();
        });

        var is_aktif_freeongkir = "<?php if ($_smarty_tpl->tpl_vars['data']->value[0]['is_aktif_freeongkir']=='') {?>0<?php } else {
echo $_smarty_tpl->tpl_vars['data']->value[0]['is_aktif_freeongkir'];
}?>";        
        $('input[name=is_aktif_freeongkir]').on('ifChecked', function(event){
            is_aktif_freeongkir = $(this).val();
        });

        var all_produk_freeongkir = "<?php if ($_smarty_tpl->tpl_vars['data']->value[0]['all_produk_freeongkir']=='') {?>0<?php } else {
echo $_smarty_tpl->tpl_vars['data']->value[0]['all_produk_freeongkir'];
}?>";        
        $('input[name=all_produk_freeongkir]').on('ifChecked', function(event){
            all_produk_freeongkir = $(this).val();
        });

        $('#btn_simpan_freeongkir').click(function() {            
            var data = new FormData();
            data.append('is_aktif', is_aktif_freeongkir);
            data.append('all_produk', all_produk_freeongkir);
            data.append('min_pembelian', ($('[name=min_pembelian_freeongkir]').val()).replace(/\,/g, ''));     
            var kurir = $('[name=kurir_freeongkir]').val();
            $id_kurir = '';
            for(var key in kurir) {
                $id_kurir+=(key>0?',':'')+kurir[key]
            }
            data.append('id_kurir', $id_kurir);

            var row = 0;
            var detail = '';
            $("#tblDetail_tujuan tr").each(function() {
                if(row>0) {
                    var id_propinsi = $(this).find('[name=propinsi]').val();
                    var propinsi    = $(this).find('[name=propinsi] option:selected').text();
                    var id_kota     = $(this).find('[name=kota]').val();
                    var kota        = $(this).find('[name=kota] option:selected').text();

                    detail+=(detail==''?'':'\n')+id_propinsi+'\t'+propinsi+'\t'+id_kota+'\t'+kota+'\t';                                                 
                }
                row++;
            });  
            data.append('detail_tujuan', detail);
            //console.log(detail);

            setLoading(true, 'freeongkir');
            $.ajax({
                type: 'POST',
                url: 'updateFreeongkir.php',
                data: data,
                cache: false,
                dataType: 'json',
                processData: false, // Don't process the files
                contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                success: function(data) {
                    setLoading(false, 'freeongkir');
                    if(data['success']) {
                        setMessage('success', data['message']);  
                    } else {
                        setMessage('error', data['message']);                        
                    }
                }, 

                error: function() {
                    setLoading(false, 'freeongkir');
                    setMessage('error', 'Kesalahan server. Mohon diulang kembali!');
                }
            }); 
        });

        <?php if ($_smarty_tpl->tpl_vars['alert_success']->value!='') {?>setMessage('success', '<?php echo $_smarty_tpl->tpl_vars['alert_success']->value;?>
');<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['alert_error']->value!='') {?>setMessage('error', '<?php echo $_smarty_tpl->tpl_vars['alert_error']->value;?>
');<?php }?> 
    });
<?php echo '</script'; ?>
>
</body><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/footer_js.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

</html><?php }} ?>
