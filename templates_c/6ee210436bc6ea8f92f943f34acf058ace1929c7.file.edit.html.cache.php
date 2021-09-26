<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-11-01 10:28:15
         compiled from "../../templates/back-end/penguin/metode_pengiriman/edit.html" */ ?>
<?php /*%%SmartyHeaderCode:17274062995bda72cf3dd4f1-77797973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ee210436bc6ea8f92f943f34acf058ace1929c7' => 
    array (
      0 => '../../templates/back-end/penguin/metode_pengiriman/edit.html',
      1 => 1538456120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17274062995bda72cf3dd4f1-77797973',
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
    'tpl_dir' => 0,
    'homeurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5bda72cf4557e2_81151352',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bda72cf4557e2_81151352')) {function content_5bda72cf4557e2_81151352($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

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

                <div id="alert_error" class="form-group" style="display: none;">
                    <div class="alert alert-danger">&nbsp;</div>
                </div>

                <div class="form-group">
                    <label for="kode">Kode:</label>
                    <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['kode'];
}?>" class="form-control" name="kode" placeholder="" />
                </div>

                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['nama'];
}?>" class="form-control" name="nama" placeholder="" />
                </div>

                <div class="form-group">
                    <label for="gambar">Logo Ekspedisi:</label>                        
                    <style type="text/css">
                        .cropit-image-preview {
                            border:1px solid #a6bac4;
                            width: 225px;
                            height: 93px;
                            cursor: move;
                        }

                        .H-new-kol-post-img {
                            width: 225px;
                            height: 93px;
                        }
                    </style>

                    <div class="H-new-kol-post-img image-editor">
                        <input id="fileupload_gambar" type="file" name="fileupload_gambar" style="display:none;" class="cropit-image-input" />
                        <div class="cropit-image-preview"></div>
                    </div>
                    <label>Ukuran 225 X 93 px</label><br />   
                    <div id="upload_gambar" class="btn btn-primary">Upload</div>
                </div>
                
                <div class="form-group">
                    <label for="status">Status:</label>
                    <table>
                        <tr>
                            <td>
                                <label><input type="radio" name="status" value="Y" <?php if ($_smarty_tpl->tpl_vars['data']->value[0]['status']=='Y') {?>checked<?php }?> />&nbsp;&nbsp;<span class="label bg-blue" style="font-size: 9pt;">AKTIF</span>&nbsp;&nbsp;</label>
                                <label><input type="radio" name="status" value="N" <?php if ($_smarty_tpl->tpl_vars['data']->value[0]['status']=='N') {?>checked<?php }?> />&nbsp;&nbsp;<span class="label bg-blue" style="font-size: 9pt;">TIDAK AKTIF</span>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            </td>
                        </tr>
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
                                    <div id="btn_submit"  class="btn btn-primary">Simpan</div>
                                    <a id="btn_batal"  href="list.php" class="btn btn-warning">Batal</a>                                                        
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

            $('#upload_gambar').click(function(){
                $('#fileupload_gambar').trigger('click'); 
                return false;
            });
            
            $('.image-editor').cropit({
              smallImage: 'stretch',
              imageState: {
                src: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/ekspedisi/<?php if ($_smarty_tpl->tpl_vars['data']->value[0]['gambar']!='') {
echo $_smarty_tpl->tpl_vars['data']->value[0]['gambar'];
} else { ?>default.png<?php }?>',
              }
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

            var is_aktif = "<?php if ($_smarty_tpl->tpl_vars['data']->value[0]['status']=='') {?>N<?php } else {
echo $_smarty_tpl->tpl_vars['data']->value[0]['status'];
}?>";        
            $('input[name=status]').on('ifChecked', function(event){
                is_aktif = $(this).val();
            });
        
            $('#btn_submit').click(function() {
               
                var data = new FormData();
                data.append('id', isEdit?'<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['id'];?>
':'');
                data.append('kode', $('[name=kode]').val());
                data.append('nama', $('[name=nama]').val());
                var imageData = $('.image-editor').cropit('export');
                data.append('filename_gambar', imageData==undefined?'':imageData);
                data.append('is_aktif', is_aktif);

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
                            window.location = 'list.php?tab=dataekspedisi';
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
