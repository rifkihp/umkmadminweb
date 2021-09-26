<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-11-02 10:20:19
         compiled from "../../templates/back-end/penguin/jenisuser/edit.html" */ ?>
<?php /*%%SmartyHeaderCode:6389085915bdbc273b481b0-47464814%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd28529c0f2311574fe93d0173ace39e6955bc0ed' => 
    array (
      0 => '../../templates/back-end/penguin/jenisuser/edit.html',
      1 => 1538456120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6389085915bdbc273b481b0-47464814',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'adminweburl' => 0,
    'sub_title' => 0,
    'isEdit' => 0,
    'data' => 0,
    'menu' => 0,
    'entry' => 0,
    'no' => 0,
    'akses' => 0,
    'tpl_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5bdbc273c081e4_37318480',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bdbc273c081e4_37318480')) {function content_5bdbc273c081e4_37318480($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

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
">Home</a></li>
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
        <div class="panel panel-flat" style="margin: 5px;">
            <div class="form-group panel-body no-padding-bottom">
                <div id="alert_error" class="form-group" style="display: none;">
                    <div class="alert alert-danger">&nbsp;</div>
                </div>

                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['nama'];
}?>" class="form-control" name="nama" placeholder="" />
                </div>

                <div class="form-group">
                    <label for="keterangan">Keterangan:</label>
                    <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['keterangan'];
}?>" class="form-control" name="keterangan" placeholder="" />
                </div>

                <div class="form-group">
                    <label for="menu">Menu Akses</label>
                    <table id="tblMenu" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th width="10%"><div style="text-align: center;">No.</div></th>
                                <th width="30%"><div style="text-align: left;">Menu</div></th>
                                <th width="60%"><div style="text-align: left;">Akses</div></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable(1, null, 0);?>
                            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>                                    
                                <tr id="baris_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" id_menu="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
">
                                    <td align="center"><?php echo $_smarty_tpl->tpl_vars['no']->value;?>
</td>
                                    <td align="left"><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
</td>                                        
                                    <td>
                                        <?php  $_smarty_tpl->tpl_vars['akses'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['akses']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['entry']->value['akses']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['akses']->key => $_smarty_tpl->tpl_vars['akses']->value) {
$_smarty_tpl->tpl_vars['akses']->_loop = true;
?>
                                            <label class="control-label"><input name="checkbox_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['akses']->value['id'];?>
" class="check_box" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['akses']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['akses']->value['checked']==true) {?>checked<?php }?> /> <?php echo $_smarty_tpl->tpl_vars['akses']->value['keterangan'];?>
</label>&nbsp;&nbsp;&nbsp;
                                        <?php } ?>
                                    </td>
                                </tr>
                                <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>  
                            <?php } ?>
                        </tbody>
                    </table>
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
<!-- Page scripts -->
    <?php echo '<script'; ?>
 type="text/javascript">

        $(function () {           

            var isEdit = <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {?>true<?php } else { ?>false<?php }?>;

            

            function setErrorMessage(message) {

                $('#alert_error .alert').text(message);

                $('#alert_error').show('slow');

                setTimeout(function() {

                    $('#alert_error').hide('slow');

                }, 5000);

                $("body, html").animate({ 

                    scrollTop: $('body').offset().top 

                }, 600);

            }



            $('#btn_simpan').click(function() {

                var menu = "";

                $("#tblMenu tr").each(function() {

                    var id_menu = this.getAttribute('id_menu');

                    var result = "";

                    $("#baris_"+id_menu+" .check_box").each(function() {

                        var value = this.getAttribute('value');

                        var name = "checkbox_"+id_menu+"_"+value;

                        if($('[name='+name+']').is(':checked')) { result+=value; }

                    });

                        

                    if(result.length>0) { menu+=(menu.length>0?'\n':'')+id_menu+'\t'+result; }

                });
                
                //console.log(menu);

                //alert(menu);

                var data = new FormData();

                data.append('id', isEdit?'<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['id'];?>
':'');

                data.append('nama', $('[name=nama]').val());

                data.append('keterangan', $('[name=keterangan]').val());

                data.append('menu', menu);



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

                            window.location = 'list.php';                    

                        } else {

                            setLoading(false);

                            setErrorMessage(data['message']);                        

                        }

                    }, 

                    error: function() {

                        setLoading(false);

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

        });

    <?php echo '</script'; ?>
>
</body><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/footer_js.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

</html><?php }} ?>
