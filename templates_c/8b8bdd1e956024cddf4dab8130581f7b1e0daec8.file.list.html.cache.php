<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-04-20 13:24:00
         compiled from "..\..\templates\back-end\penguin\pengaturan_umum\list.html" */ ?>
<?php /*%%SmartyHeaderCode:18151064205e9d4000a62527-91441089%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b8bdd1e956024cddf4dab8130581f7b1e0daec8' => 
    array (
      0 => '..\\..\\templates\\back-end\\penguin\\pengaturan_umum\\list.html',
      1 => 1538456116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18151064205e9d4000a62527-91441089',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'adminweburl' => 0,
    'sub_title' => 0,
    'tab' => 0,
    'data' => 0,
    'tpl_dir' => 0,
    'array_akses' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e9d4000b19364_04356608',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e9d4000b19364_04356608')) {function content_5e9d4000b19364_04356608($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

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
/pengaturan_umum/"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
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
                        <li<?php if ($_smarty_tpl->tpl_vars['tab']->value=="pelanggan") {?> class="active"<?php }?>>
                            <a href="#pelanggan" data-toggle="tab"><b>PELANGGAN</b></a>
                        </li>                                 
                        <li<?php if ($_smarty_tpl->tpl_vars['tab']->value=="stok") {?> class="active"<?php }?>>
                            <a href="#stok" data-toggle="tab"><b>STOK</b></a>
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
                    <div class="tab-pane fade<?php if ($_smarty_tpl->tpl_vars['tab']->value=="pelanggan") {?> active in<?php }?>" id="pelanggan">
                        
                        <div class="form-group">
                            <label for="aktivasi_sms">Konfirmasi Registrasi By SMS:</label>
                            <table>
                                <tr>
                                    <td>
                                        <label><input type="radio" name="aktivasi_sms" value="0" <?php if ($_smarty_tpl->tpl_vars['data']->value[0]['aktivasi_sms']==0) {?>checked<?php }?> />&nbsp;&nbsp;<span class="label bg-blue" style="font-size: 9pt;">TIDAK AKTIF</span>&nbsp;&nbsp;</label>
                                        <label><input type="radio" name="aktivasi_sms" value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value[0]['aktivasi_sms']==1) {?>checked<?php }?> />&nbsp;&nbsp;<span class="label bg-blue" style="font-size: 9pt;">AKTIF</span>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <div class="form-group">
                            <label for="admin">Konfirmasi Registrasi By ADMIN:</label>
                            <table>
                                <tr>
                                    <td>
                                        <label><input type="radio" name="aktivasi_admin" value="0" <?php if ($_smarty_tpl->tpl_vars['data']->value[0]['aktivasi_admin']==0) {?>checked<?php }?> />&nbsp;&nbsp;<span class="label bg-blue" style="font-size: 9pt;">TIDAK AKTIF</span>&nbsp;&nbsp;</label>
                                        <label><input type="radio" name="aktivasi_admin" value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value[0]['aktivasi_admin']==1) {?>checked<?php }?> />&nbsp;&nbsp;<span class="label bg-blue" style="font-size: 9pt;">AKTIF</span>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        
                        <div class="form-group">&nbsp;</div>

                        <div class="form-group">
                            <div id="i_loading_pelanggan" class="G-btn-animation" style="display: none;"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/img/loading.gif" /></div>                  
                            <?php if (in_array('E',$_smarty_tpl->tpl_vars['array_akses']->value)) {?><div id="btn_simpan_pelanggan" class="btn btn-primary">Update</div><?php }?>
                        </div>
                        
                    </div>
                    
                    <div class="tab-pane fade<?php if ($_smarty_tpl->tpl_vars['tab']->value=="stok") {?> active in<?php }?>" id="stok">
                    
                        <div class="form-group">
                            <label for="jatuh_tempo">Jatuh Tempo Pemesanan:</label>
                            <select name="jatuh_tempo" class="form-control">
                                <option value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value[0]['jatuh_tempo']=="1") {?> selected="selected" <?php }?>>1 Hari</option>
                                <option value="2" <?php if ($_smarty_tpl->tpl_vars['data']->value[0]['jatuh_tempo']=="2") {?> selected="selected" <?php }?>>2 Hari</option>
                                <option value="3" <?php if ($_smarty_tpl->tpl_vars['data']->value[0]['jatuh_tempo']=="3") {?> selected="selected" <?php }?>>3 Hari</option>
                                <option value="4" <?php if ($_smarty_tpl->tpl_vars['data']->value[0]['jatuh_tempo']=="4") {?> selected="selected" <?php }?>>4 Hari</option>
                                <option value="5" <?php if ($_smarty_tpl->tpl_vars['data']->value[0]['jatuh_tempo']=="5") {?> selected="selected" <?php }?>>5 Hari</option>
                                <option value="6" <?php if ($_smarty_tpl->tpl_vars['data']->value[0]['jatuh_tempo']=="6") {?> selected="selected" <?php }?>>6 Hari</option>
                                <option value="7" <?php if ($_smarty_tpl->tpl_vars['data']->value[0]['jatuh_tempo']=="7") {?> selected="selected" <?php }?>>7 Hari</option>                                    
                            </select>
                        </div>
                         
                        <div class="form-group">
                            <label for="stok_minimum">Peringatan Stok Minimum:</label>
                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['stok_minimum'];?>
" class="form-control" name="stok_minimum" />
                        </div>

                        <div class="form-group">
                            <label class="control-label"><input type="checkbox" id="checkbox_tampilkan_stok" name="tampilkan_stok" value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value[0]['is_tampilkan_stok']=='Y') {?>checked<?php }?>> Tampilkan stok pada detail produk.</label>                    
                        </div>

                        <div class="form-group">
                            <label for="status_stok">Status Stok:</label>
                            <select id="propinsi" name="status_stok" class="form-control">
                                <option value="0" <?php if ($_smarty_tpl->tpl_vars['data']->value[0]['status_stok']==0) {?> selected="selected" <?php }?>>Real Stok</option>
                                <option value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value[0]['status_stok']==1) {?> selected="selected" <?php }?>>Status</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="parameter_status">Parameter Stok:</label>
                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['parameter_status'];?>
" class="form-control" name="parameter_status" />
                        </div>

                        <div class="form-group">
                            <label for="jam">Produk Keep (JAM):</label>
                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['jam'];?>
" class="form-control" name="jam" />
                        </div>

                        <div class="form-group">
                            <label for="menit">Produk Keep (MENIT):</label>
                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['menit'];?>
" class="form-control" name="menit" />
                        </div>

                        <div class="form-group">&nbsp;</div>

                        <div class="form-group">
                            <div id="i_loading_stok" class="G-btn-animation" style="display: none;"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/img/loading.gif" /></div>                  
                            <?php if (in_array('E',$_smarty_tpl->tpl_vars['array_akses']->value)) {?><div id="btn_simpan_stok" class="btn btn-primary">Update</div><?php }?>
                        </div>
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
        
        var aktivasi_sms = <?php echo $_smarty_tpl->tpl_vars['data']->value[0]['aktivasi_sms'];?>
;        
        $('input[name=aktivasi_sms]').on('ifChecked', function(event){
            aktivasi_sms = $(this).val();
        });

        var aktivasi_admin = <?php echo $_smarty_tpl->tpl_vars['data']->value[0]['aktivasi_admin'];?>
;        
        $('input[name=aktivasi_admin]').on('ifChecked', function(event){
            aktivasi_admin = $(this).val();
        });
        
        $('#btn_simpan_pelanggan').click(function() {            

            var data = new FormData();
            data.append('aktivasi_sms', aktivasi_sms);
            data.append('aktivasi_admin', aktivasi_admin);
            
            setLoading(true, "pelanggan");
            $.ajax({
                type: 'POST',
                url: 'updatePelanggan.php',
                data: data,
                cache: false,
                dataType: 'json',
                processData: false, // Don't process the files
                contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                success: function(data) {
                    setLoading(false, 'pelanggan');
                    if(data['success']) {
                        setMessage('success', data['message']);  
                    } else {
                        setMessage('error', data['message']);                        
                    }
                }, 
                error: function() {
                    setLoading(false, 'pelanggan');
                    setMessage('error', 'Kesalahan server. Mohon diulang kembali!');
                }
            }); 
        });
        
        $('#btn_simpan_stok').click(function() {            

            var data = new FormData();
            data.append('jatuh_tempo', $('[name=jatuh_tempo]').val());
            data.append('stok_minimum', $('[name=stok_minimum]').val());
            data.append('is_tampilkan_stok', $('[name=tampilkan_stok]').is(':checked')?'Y':'N');     
            data.append('status_stok', $('[name=status_stok]').val());
            data.append('parameter_status', $('[name=parameter_status]').val());
            data.append('jam', $('[name=jam]').val());
            data.append('menit', $('[name=menit]').val());
            
            setLoading(true, "stok");
            $.ajax({
                type: 'POST',
                url: 'updateStok.php',
                data: data,
                cache: false,
                dataType: 'json',
                processData: false, // Don't process the files
                contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                success: function(data) {
                    setLoading(false, 'stok');
                    if(data['success']) {
                        setMessage('success', data['message']);  
                    } else {
                        setMessage('error', data['message']);                        
                    }
                }, 
                error: function() {
                    setLoading(false, 'stok');
                    setMessage('error', 'Kesalahan server. Mohon diulang kembali!');
                }
            }); 
        });
    });
<?php echo '</script'; ?>
>
</body><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/footer_js.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

</html><?php }} ?>
