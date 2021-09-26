<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-12-14 05:45:37
         compiled from "../../templates/back-end/penguin/laporan_jual_ppob/list.html" */ ?>
<?php /*%%SmartyHeaderCode:1413295525c12d68cb56e56-59716721%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e57febc0ffb5310737ce3a6dc72a319c8fc6458' => 
    array (
      0 => '../../templates/back-end/penguin/laporan_jual_ppob/list.html',
      1 => 1544741124,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1413295525c12d68cb56e56-59716721',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5c12d68cbebf43_93712536',
  'variables' => 
  array (
    'title' => 0,
    'adminweburl' => 0,
    'sub_title' => 0,
    'tanggal_dari' => 0,
    'tanggal_sampai' => 0,
    'query' => 0,
    'listdetail' => 0,
    'entry' => 0,
    'limitpage' => 0,
    'currentpage' => 0,
    'no' => 0,
    'beli' => 0,
    'jual' => 0,
    'laba' => 0,
    'totalpage' => 0,
    'frompage' => 0,
    'untilpage' => 0,
    'item' => 0,
    'tpl_dir' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c12d68cbebf43_93712536')) {function content_5c12d68cbebf43_93712536($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<!--sidebar-->
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<!--/sidebar-->
	
<!--Page Container-->
<section class="main-container">

    <!--Page Header-->
    <div class="header">
        <div class="header-content">
            <div class="page-title">
                <i class="icon-table position-left"></i><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 
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

    <!--Page Detail-->
    <div class="container-fluid page-content">
        <div class="panel panel-flat">
            <div class="panel-body no-padding-bottom">
                <div class="form-group">
                    <div id="alert_success" class="form-group" style="display: none;">                         
                        <div class="alert alert-info">&nbsp;</div>
                    </div>

                    <div id="alert_error" class="form-group" style="display: none;">
                        <div class="alert alert-danger">&nbsp;</div>
                    </div>
                </div>


                <div class="form-group">
                    <table style="width: 100%;">
                        <tr>
                            <td width="20%" style="padding: 10px;"><label>Dari Tanggal:</label></td>
                            <td width="80%">
                                <table width="100%">
                                    <tr>
                                        <td width="40%">
                                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['tanggal_dari']->value;?>
" class="form-control pickadate" name="tanggal_dari" placeholder="Klik Untuk Memilih Tanggal" />
                                        </td>
                                        <td style="text-align: center;">
                                            <label>Sd. Tanggal:</label>
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
                            <td width="20%" style="padding: 8px;"><label>Pencarian Username:</label></td>
                            <td width="80%">
                                <table>
                                    <tr>
                                        <td width="100%"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
" class="form-control" name="query" id="query" placeholder="Ketik username yang dicari..." /></td>
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

                <!-- div class="form-group">
                    <div id="ekspor_xls" class="btn btn-info">Eksport To Xls</div>
                    <div id="ekspor_pdf" class="btn btn-info">Eksport To Pdf</div>
                </div -->

            </div>

            <div class="table-responsive">
                <table class="table table-togglable table-hover">
                    <thead>
                        <tr>
                            <th width="5%"><div style="text-align: center;">No.</div></th>
                            <th width="10%"><div style="text-align: center;">No. Trx</div></th>
                            <th width="15%"><div style="text-align: center;">Tanggal</div></th>
                            <th width="10%"><div style="text-align: center;">Username</div></th>
                            <th width="20%"><div style="text-align: center;">Produk</div></th>
                            <th width="10%"><div style="text-align: center;">No. Tujuan</div></th>
                            <th width="10%"><div style="text-align: center;">Beli</div></th>
                            <th width="10%"><div style="text-align: center;">Jual</div></th>
                            <th width="10%"><div style="text-align: center;">Laba</div></th>
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
                                <td align="center"><?php echo $_smarty_tpl->tpl_vars['limitpage']->value*($_smarty_tpl->tpl_vars['currentpage']->value-1)+$_smarty_tpl->tpl_vars['no']->value;?>
</td>
                                <td align="center"><?php echo $_smarty_tpl->tpl_vars['entry']->value['kode'];?>
</td>
                                <td align="center"><?php echo $_smarty_tpl->tpl_vars['entry']->value['tanggal'];?>
</td>
                                <td align="left"><?php echo $_smarty_tpl->tpl_vars['entry']->value['username'];?>
</td>
                                <td align="left"><?php echo $_smarty_tpl->tpl_vars['entry']->value['description'];?>
</td>
                                <td align="left"><?php echo $_smarty_tpl->tpl_vars['entry']->value['nomer_tujuan'];?>
</td>
                                <td align="right"><span style="font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['entry']->value['beli'];?>
</span></td>                                                                                   
                                <td align="right"><span style="font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['entry']->value['jual'];?>
</span></td>                                                                                   
                                <td align="right"><span style="font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['entry']->value['laba'];?>
</span></td>                                                                                   
                            </tr>
                            <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>  
                        <?php } ?>

                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td align="right"><span style="font-weight: bold;">TOTAL:&nbsp;&nbsp;</span></td>
                            <td>&nbsp;</td>
                            <td align="right"><span style="font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['beli']->value;?>
</span></td>
                            <td align="right"><span style="font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['jual']->value;?>
</span></td>
                            <td align="right"><span style="font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['laba']->value;?>
</span></td>
                        </tr>
                    </tbody>

                    <?php if ($_smarty_tpl->tpl_vars['totalpage']->value>1) {?>
                        <tfoot><tr><th colspan="9">
                            <div style="text-align: center;">
                                <?php if ($_smarty_tpl->tpl_vars['currentpage']->value>1) {?>
                                    <a class="btn btn-default" href="list.php?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value-1;
if ($_smarty_tpl->tpl_vars['tanggal_dari']->value!='') {?>&tanggal_dari=<?php echo $_smarty_tpl->tpl_vars['tanggal_dari']->value;
}
if ($_smarty_tpl->tpl_vars['tanggal_sampai']->value!='') {?>&tanggal_sampai=<?php echo $_smarty_tpl->tpl_vars['tanggal_sampai']->value;
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
if ($_smarty_tpl->tpl_vars['tanggal_sampai']->value!='') {?>&tanggal_sampai=<?php echo $_smarty_tpl->tpl_vars['tanggal_sampai']->value;
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
if ($_smarty_tpl->tpl_vars['tanggal_sampai']->value!='') {?>&tanggal_sampai=<?php echo $_smarty_tpl->tpl_vars['tanggal_sampai']->value;
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
    <!--/Page Detail-->

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
            //$('.tanggal').datepick({ dateFormat: 'dd-mm-yyyy' });
            $( "#btn_cari" ).click(function() {                
                var tanggal_dari = $( '[name=tanggal_dari]' ).val();
                var tanggal_sampai = $( '[name=tanggal_sampai]' ).val();
                var query = $( "#query" ).val();
                /*alert('list.php?_'+(query.length>0?'&query='+query:'')+
                    (tanggal_dari.length>0?'&tanggal_dari='+tanggal_dari:'')+
                    (tanggal_sampai.length>0?'&tanggal_sampai='+tanggal_sampai:''));*/
            
                window.location='list.php?_'+(query.length>0?'&query='+query:'')+
                    (tanggal_dari.length>0?'&tanggal_dari='+tanggal_dari:'')+
                    (tanggal_sampai.length>0?'&tanggal_sampai='+tanggal_sampai:'');            
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

            $( "#ekspor_xls" ).click(function() {
                var tanggal_dari = $( '[name=tanggal_dari]' ).val();
                var tanggal_sampai = $( '[name=tanggal_sampai]' ).val();

                $.ajax({
                    type: 'POST',
                    url: 'ekspor.php?tanggal_dari='+tanggal_dari+'&tanggal_sampai='+tanggal_sampai,
                    cache: false,
                    dataType: 'json',
                    processData: false, // Don't process the files
                    contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                    success: function(data, textStatus, jqXHR) {
                        if(data['success']) {
                            window.location = '<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/readFile.php?name=' + data['filename'];
                        } else {
                            setMessage('error', data['message']);
                        }
                    }, 

                    error: function(jqXHR, textStatus, errorThrown) {
                        setMessage('error', 'Terjadi kesalahan system.');
                    }
                });
            });

            $( "#ekspor_pdf" ).click(function() {
                var tanggal_dari = $( '[name=tanggal_dari]' ).val();
                var tanggal_sampai = $( '[name=tanggal_sampai]' ).val();
                var url = 'cetak.php?tanggal_dari='+tanggal_dari+'&tanggal_sampai='+tanggal_sampai;
                window.open(url, '_blank');
            });
        });
    <?php echo '</script'; ?>
>
</body><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/footer_js.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

</html><?php }} ?>
