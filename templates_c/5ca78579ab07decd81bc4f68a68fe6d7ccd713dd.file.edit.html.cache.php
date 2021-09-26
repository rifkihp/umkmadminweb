<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-11-04 20:02:14
         compiled from "../../templates/back-end/penguin/pengaturan_website/edit.html" */ ?>
<?php /*%%SmartyHeaderCode:2556903315bdeedd6c8ec44-67686134%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ca78579ab07decd81bc4f68a68fe6d7ccd713dd' => 
    array (
      0 => '../../templates/back-end/penguin/pengaturan_website/edit.html',
      1 => 1538456116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2556903315bdeedd6c8ec44-67686134',
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
    'datacategory' => 0,
    'entry' => 0,
    'tpl_dir' => 0,
    'homeurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5bdeedd76e6bc1_71881247',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bdeedd76e6bc1_71881247')) {function content_5bdeedd76e6bc1_71881247($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

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
/pengaturan_website/"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
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

                <div id="alert_error" class="form-group" style="display: none;">
                    <div class="alert alert-danger">&nbsp;</div>
                </div>

                <div class="form-group">
                    <label for="nama">Nama Banner:</label>
                    <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['nama'];
}?>" class="form-control" name="nama" placeholder="" />
                </div>
                
                <div class="form-group">
                    <label for="banner">Banner:</label>                        
                    <style type="text/css">
                        #div-banner .cropit-image-preview {
                            margin-bottom: 5px;
                            background-color: #a6bac4;
                            width: 870px;
                            height: 473px;
                            cursor: move;
                        }
                        #div-banner .H-new-kol-post-img {
                            margin-bottom: 5px;
                            width: 870px;
                            height: 473px;                                
                        }
                    </style>
                    <div id="div-banner" class="H-new-kol-post-img image-editor-banner">
                        <input id="fileupload_banner" type="file" name="fileupload_banner" style="display:none;" class="cropit-image-input" />
                        <div class="cropit-image-preview"></div>
                    </div>
                    <div id="upload_banner" class="btn btn-primary">Upload</div>
                </div>

                <div class="form-group">
                    <label for="status">Status:</label>
                    <select class="form-control" name="status">
                        <option value="Y" <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true&&$_smarty_tpl->tpl_vars['data']->value[0]['status']=="Y") {?> selected="selected" <?php }?>>Aktif</option>
                        <option value="N" <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true&&$_smarty_tpl->tpl_vars['data']->value[0]['status']=="N") {?> selected="selected" <?php }?>>Tidak Aktif</option>
                    </select>
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
                    <label>Gunakan tombol Ctrl untuk pilih lebih dari 1 kategori.
                </div>
                
                <div class="form-group">
                    <table>
                        <tbody>
                            <tr>
                                <td width="100%">&nbsp;</td> 
                                <td nowrap>
                                    <div id="i_loading" class="G-btn-animation" style="display: none;"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/img/loading.gif" /></div>                  
                                    <div id="btn_submit"  class="btn btn-primary">Simpan</div>
                                    <a id="btn_batal"  href="list.php?tab=banner" class="btn btn-warning">Batal</a>                                                        
                                </td>
                            </tr>
                        </tbody>                                
                    </table>
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
<!-- Page scripts -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/tables/datatables/datatables.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/pages/datatable_basic.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://www.google.com/jsapi"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/pages/dashboard_minimalistic.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/jquery.cropit.js"><?php echo '</script'; ?>
>  
        

    <?php echo '<script'; ?>
 type="text/javascript">
        $(function () {           

            var isEdit = <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {?>true<?php } else { ?>false<?php }?>;

            var setLoading = function(isLoading) {
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

            $('#upload_banner').click(function(){
                $('#fileupload_banner').trigger('click'); 
                return false;
            });
            
            $('.image-editor-banner').cropit({
                smallImage: 'stretch'<?php if ($_smarty_tpl->tpl_vars['data']->value[0]['filename']!='') {?>,
                imageState: {
                    src: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/banner/<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['filename'];?>
'
                }<?php }?>
            });
            
            var setErrorMessage = function(message) {

                $('#alert_error .alert').text(message);
                $('#alert_error').show('slow');
                setTimeout(function() {
                    $('#alert_error').hide('slow');
                }, 5000);

                $("body, html").animate({ 
                    scrollTop: $('#wrapper').offset().top 
                }, 600);
            };

            $('#btn_submit').click(function() {
               
                var data = new FormData();
                data.append('id', isEdit?'<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['id'];?>
':'');
                data.append('nama', $('[name=nama]').val());
                var imageDataBanner = $('.image-editor-banner').cropit('export');
                data.append('filename_banner', imageDataBanner==undefined?'':imageDataBanner);
                data.append('is_aktif', $('[name=status]').val());
                var kategori = $('[name=id_kategori]').val();
                
                sid_kategori = '';
                for(var key in kategori) {
                    sid_kategori+=(key>0?',':'')+kategori[key]
                }
                data.append('id_kategori', sid_kategori);

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
                            window.location = 'list.php?tab=banner';
                        } else {
                            setErrorMessage(data['message']);                        
                        }
                    }, 

                    error: function() {
                        setLoading(false);
                        setErrorMessage('Kesalahan server. Mohon diulang kembali!');
                    }
                }); 
            });
        });

    <?php echo '</script'; ?>
>
</body><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/footer_js.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

</html><?php }} ?>
