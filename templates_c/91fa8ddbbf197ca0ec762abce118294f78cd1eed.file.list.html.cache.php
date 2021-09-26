<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-04-05 21:28:22
         compiled from "..\..\templates\back-end\penguin\konfirmasi_pembayaran\list.html" */ ?>
<?php /*%%SmartyHeaderCode:17439041995e89eb062cdda4-26444652%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91fa8ddbbf197ca0ec762abce118294f78cd1eed' => 
    array (
      0 => '..\\..\\templates\\back-end\\penguin\\konfirmasi_pembayaran\\list.html',
      1 => 1538456120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17439041995e89eb062cdda4-26444652',
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
    'filter_status' => 0,
    'query' => 0,
    'listdetail' => 0,
    'entry' => 0,
    'limitpage' => 0,
    'currentpage' => 0,
    'no' => 0,
    'array_akses' => 0,
    'tpl_dir' => 0,
    'homeurl' => 0,
    'totalpage' => 0,
    'frompage' => 0,
    'untilpage' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e89eb067f67a6_84072442',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e89eb067f67a6_84072442')) {function content_5e89eb067f67a6_84072442($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

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
/pengaturan/"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
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
                        <td width="20%" style="padding: 8px;"><label>Status Pembayaran:</label></td>
                        <td width="80%">
                            <select id="filter_status" class="form-control" name="status">
                                <option value="3" <?php if ($_smarty_tpl->tpl_vars['filter_status']->value==3) {?>selected="selected"<?php }?>>Semua Status</option>
                                <option value="0" <?php if ($_smarty_tpl->tpl_vars['filter_status']->value==0) {?>selected="selected"<?php }?>>Status Menunggu</option>              
                                <option value="1" <?php if ($_smarty_tpl->tpl_vars['filter_status']->value==1) {?>selected="selected"<?php }?>>Status Tidak Valid</option>              
                                <option value="2" <?php if ($_smarty_tpl->tpl_vars['filter_status']->value==2) {?>selected="selected"<?php }?>>Status Valid</option> 
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
        					
            <div class="table-responsive">
                <table class="table datatable table-striped">
                    <thead>
                        <tr>
                            <th width="10%"><div style="text-align: center;">No.</div></th>
                            <th width="90%"><div style="text-align: left;">Data Transfer</div></th>
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
                                <td  style='vertical-align: top;' align="center"><?php echo $_smarty_tpl->tpl_vars['limitpage']->value*($_smarty_tpl->tpl_vars['currentpage']->value-1)+$_smarty_tpl->tpl_vars['no']->value;?>
</td>
                                <td>
                                    <table width="100%">
                                        <tr><td>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <table width="100%">
                                                        <tr><td width="30%"><b>Pengguna</b> </td><td><b>:</b> <?php if ($_smarty_tpl->tpl_vars['entry']->value['email']=='Guest') {?>Guest<?php } else {
echo $_smarty_tpl->tpl_vars['entry']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['entry']->value['last_name'];
}?></td></tr>
                                                        <tr><td><b>Email</b> </td><td><b>:</b> <?php echo $_smarty_tpl->tpl_vars['entry']->value['email'];?>
</td></tr>                                                                    
                                                        <tr><td><b>Tanggal</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> <?php echo $_smarty_tpl->tpl_vars['entry']->value['tgl_jam'];?>
</td></tr>
                                                        <tr><td><b>Kode Trx</b> </td><td><b>:</b> <a href='<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/pemesanan/edit.php?id=<?php echo $_smarty_tpl->tpl_vars['entry']->value['kode_pemesanan'];?>
'>#<?php echo $_smarty_tpl->tpl_vars['entry']->value['kode_pemesanan'];?>
</a></td></tr>
                                                        <tr><td><b>Transfer</b>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>:</b> <?php echo $_smarty_tpl->tpl_vars['entry']->value['jumlah_transfer'];?>
</td></tr>                                                                    
                                                    </table>
                                                </div>
                                                <div class="col-md-4">
                                                    <table width="100%">
                                                        <tr><td width="30%"><b>Tujuan</b></td><td><b>:</b> <?php echo $_smarty_tpl->tpl_vars['entry']->value['bank_tujuan'];?>
</td></tr>
                                                        <tr><td><b>Penerima</b></td><td><b>:</b> <?php echo $_smarty_tpl->tpl_vars['entry']->value['nama_penerima'];?>
</td></tr>
                                                        <tr><td><b>Melalui</b> </td><td><b>:</b> <?php echo $_smarty_tpl->tpl_vars['entry']->value['bank_pengirim'];?>
</td></tr>
                                                        <tr><td><b>Pengirim</b> </td><td><b>:</b> <?php echo $_smarty_tpl->tpl_vars['entry']->value['nama_pengirim'];?>
</td></tr>

                                                        <tr><td><b>Status</b> </td><td><b>:</b> <?php if (in_array('E',$_smarty_tpl->tpl_vars['array_akses']->value)) {?>
                                                                <label id="status_valid_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" style="margin-top: 5px;"><input type="radio" name="status_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" id_trf="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" value="2" <?php if ($_smarty_tpl->tpl_vars['entry']->value['status']==2) {?>checked<?php }?> />&nbsp;&nbsp;<span class="label bg-green" style="font-size: 9pt;">VALID</span>&nbsp;&nbsp;</label>
                                                                <label id="status_tidak_valid_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" style="margin-top: 5px;"><input type="radio" name="status_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" id_trf="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" value="1" <?php if ($_smarty_tpl->tpl_vars['entry']->value['status']==1) {?>checked<?php }?> />&nbsp;&nbsp;<span class="label bg-red" style="font-size: 9pt;">TIDAK VALID</span>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                                <img id="i_loading_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/img/loading.gif" style="display: none;" />
                                                            <?php } else { ?>
                                                                <span id='text_status_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
' style="font-weight: bold; color: <?php if ($_smarty_tpl->tpl_vars['entry']->value['status']==1) {?>red<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['status']==2) {?>green<?php } else { ?>orange<?php }?>;"><?php if ($_smarty_tpl->tpl_vars['entry']->value['status']==1) {?>Tidak Valid<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['status']==2) {?>Valid<?php } else { ?>Menunggu<?php }?></span></td></tr>
                                                            <?php }?>
                                                        <tr><td colspan="2">
                                                            <?php if (in_array('E',$_smarty_tpl->tpl_vars['array_akses']->value)) {?>
                                                                <div id="alert_error_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="form-group" style="display: none;">
                                                                    <div class="alert alert-danger">&nbsp;</div>
                                                                </div>
                                                                <div id="alert_success_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="form-group" style="display: none;">                         
                                                                    <div class="alert alert-info">&nbsp;</div>
                                                                </div>
                                                            <?php }?>                                                        
                                                        </div></td></tr>
                                                    </table>
                                                </div>
                                                <div class="col-md-4">
                                                    <div align="right">
                                                        <table>
                                                            <tr><td>
                                                                    <b>Bukti Pembayaran:</b>
                                                                <div class="zoom"><img src="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/konfirmasi/<?php if ($_smarty_tpl->tpl_vars['entry']->value['photo']!='') {
echo $_smarty_tpl->tpl_vars['entry']->value['photo'];
} else { ?>default.jpg<?php }?>" height="250" width="250" /> </div>    
                                                            </td></tr>        
                                                        </table>
                                                    </div>
                                                </div>                                                            
                                        </td></tr>   
                                    </table>    
                                </td>                                           
                            </tr>
                            <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>  
                        <?php } ?>
                    </tbody>

                    <?php if ($_smarty_tpl->tpl_vars['totalpage']->value>1) {?>
                        <tfoot>
                            <tr>
                                <th colspan="2">
                                    <div style="text-align: center;">
                                        <?php if ($_smarty_tpl->tpl_vars['currentpage']->value>1) {?>                                
                                            <a class="btn btn-default" href="list.php?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value-1;
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
if ($_smarty_tpl->tpl_vars['query']->value!='') {?>&query=<?php echo $_smarty_tpl->tpl_vars['query']->value;
}?>"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a>
                                            <?php }?>
                                            <?php $_smarty_tpl->tpl_vars["item"] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value+1, null, 0);?>                                
                                        <?php }} ?>
                                        <?php if ($_smarty_tpl->tpl_vars['totalpage']->value>$_smarty_tpl->tpl_vars['currentpage']->value) {?>                                
                                            <a class="btn btn-default" href="list.php?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value+1;
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
/js/jzoom.js"><?php echo '</script'; ?>
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
            $('.zoom').jzoom({
                position: "left"
            });
        
            $('input').iCheck({
              checkboxClass: 'icheckbox_square-blue',
              radioClass: 'iradio_square-blue',
              increaseArea: '20%' // optional
            });
            
            var setMessage = function(message, tipe, id) {
                $('#alert_'+tipe+'_'+id+' .alert').text(message);
                $('#alert_'+tipe+'_'+id).show('slow');
                setTimeout(function() {
                    $('#alert_'+tipe+'_'+id).hide('slow');
                }, 5000);
                $("body, html").animate({ 
                    //scrollTop: $('#baris_'+i).offset().top-100 
                }, 600);
            }

            var setLoading = function(isLoading, id) {
                if(isLoading) {
                    $('#i_loading_'+id).show();
                    $("#status_valid_"+id).hide();
                    $("#status_tidak_valid_"+id).hide();
                } else {
                    $('#i_loading_'+id).hide();
                    $("#status_valid_"+id).show();
                    $("#status_tidak_valid_"+id).show();
                }
            }
            
            var update_status = function(id, value) {
                setLoading(true, id);
                var data = new FormData();
                data.append('id', id);  
                data.append('status', value);
                $.ajax({
                    type: 'POST',
                    url: 'update.php',
                    data: data,
                    cache: false,
                    dataType: 'json',
                    processData: false, // Don't process the files
                    contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                    success: function(data) {
                        setLoading(false, id);
                        if(!data['success']) {
                            $("input[name=status_"+id+"][value="+value+"]").iCheck('uncheck');
                            $("input[name=status_"+id+"][value="+(value==1?2:1)+"]").iCheck('check'); 
                            setMessage(data['message'], 'error', id);
                        } else {
                            status[id] = value;
                        }
                    }, 
                    error: function() {
                        setLoading(false, id);
                        $("input[name=status_"+id+"][value="+value+"]").iCheck('uncheck');
                        $("input[name=status_"+id+"][value="+(value==1?2:1)+"]").iCheck('check'); 
                        setMessage('Kesalahan server. Mohon diulang kembali!', 'error', id);
                        
                    }
                }); 
            }
            
            var status = [];
            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listdetail']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                status[<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
] = <?php echo $_smarty_tpl->tpl_vars['entry']->value['status'];?>
;
            <?php } ?>
    
            $("input[type='radio']").on('ifChanged', function (e) {
                var id = this.getAttribute('id_trf');
                var value = this.getAttribute('value');
                var select = $("input[name=status_"+id+"][value="+value+"]").prop("checked");
                if(select) {
                    console.log(id+' --> '+value+' --> '+select);
                    if(status[id]!=value) {
                        //alert('update status!');
                        update_status(id, value);
                    }
                }
            });

            $('#filter_status').on('change', function (e) {
                var filter = $('#filter_status').val();
                window.location='list.php?_'+(filter.length>0?'&status='+filter:'');
            });

            $( "#btn_cari" ).click(function() {
                var tanggal_dari = $( '[name=tanggal_dari]' ).val();
                var tanggal_sampai = $( '[name=tanggal_sampai]' ).val();
                var query = $( "#query" ).val();
                var filter = $('#filter_status').val();
                window.location='list.php?_'+
                    (tanggal_dari.length>0?'&tanggal_dari='+tanggal_dari:'')+
                    (tanggal_sampai.length>0?'&tanggal_sampai='+tanggal_sampai:'')+
                    (filter.length>0?'&status='+filter:'')+(query.length>0?'&query='+query:'');
            });
            
        });
    <?php echo '</script'; ?>
>

<!-- /page scripts -->
</body><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/footer_js.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

</html><?php }} ?>
