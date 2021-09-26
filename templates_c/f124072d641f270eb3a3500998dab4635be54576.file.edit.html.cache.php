<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-04-02 14:38:04
         compiled from "..\..\templates\back-end\penguin\pengaturan_toko\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:6665471725e85965c545f52-89750679%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f124072d641f270eb3a3500998dab4635be54576' => 
    array (
      0 => '..\\..\\templates\\back-end\\penguin\\pengaturan_toko\\edit.html',
      1 => 1538456117,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6665471725e85965c545f52-89750679',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'adminweburl' => 0,
    'sub_title' => 0,
    'data' => 0,
    'listpropinsi' => 0,
    'entry' => 0,
    'tpl_dir' => 0,
    'array_akses' => 0,
    'homeurl' => 0,
    'listno_hp' => 0,
    'no' => 0,
    'listwa' => 0,
    'listsms' => 0,
    'listbbm' => 0,
    'listline' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e85965c6d6e35_71371183',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e85965c6d6e35_71371183')) {function content_5e85965c6d6e35_71371183($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

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
/pengaturan_toko/"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
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
                        <li class="active">
                            <a href="#profiltoko" data-toggle="tab"><b>PROFIL TOKO</b></a>
                        </li>                                 
                        <li>
                            <a href="#hubungikami" data-toggle="tab"><b>HUBUNGI KAMI</b></a>
                        </li>                                
                        <li>
                            <a href="#sosialmedia" data-toggle="tab"><b>SOSIAL MEDIA</b></a>
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
                    <div class="tab-pane fade active in" id="profiltoko">

                        <div class="form-group">
                            <label for="judul">Judul Webite:</label>
                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['judul'];?>
" class="form-control" name="judul" placeholder="" />
                        </div>

                        <div class="form-group">
                            <label for="tagline">Tag Line:</label>
                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['tagline'];?>
" class="form-control" name="tagline" placeholder="" />
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat Toko:</label>
                            <textarea class="form-control" style="height: 50px;" name="alamat"><?php echo $_smarty_tpl->tpl_vars['data']->value[0]['alamat'];?>
</textarea>
                        </div>

                        <div class="form-group">
                            <label for="propinsi">Propinsi:</label>
                            <select id="propinsi" name="propinsi" class="form-control">
                                <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listpropinsi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['province_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['entry']->value['province_id']==$_smarty_tpl->tpl_vars['data']->value[0]['propinsi']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['entry']->value['province'];?>
</option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="kota">Kota:</label>
                            <select id="kota" name="kota" class="form-control"></select>
                        </div>

                        <div class="form-group">
                            <label for="kode_pos">Kode Pos:</label>
                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['kode_pos'];?>
" class="form-control" name="kode_pos" />
                        </div>

                        <div class="form-group">
                            <label for="latitude">Latitude:</label>
                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['latitude'];?>
" class="form-control" name="latitude" />
                        </div>

                        <div class="form-group">
                            <label for="longitude">Longitude:</label>
                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['longitude'];?>
" class="form-control" name="longitude" />
                        </div>

                        <div class="form-group">
                            <label for="logo">Logo:</label>                        
                            <style type="text/css">
                                .preview-logo {
                                    border:1px solid #a6bac4;
                                    width: 180px;
                                    height: 180px;
                                    cursor: move;
                                }
                                .post-img-logo {
                                    width: 180px;
                                    height: 180px;
                                }
                            </style>
                            <div class="image-editor-logo post-img-logo">
                                <input id="fileupload_logo" type="file" name="fileupload_logo" style="display:none;" class="cropit-image-input" />
                                <div class="cropit-image-preview preview-logo"></div>
                            </div>
                            <label>Ukuran 180 X 180 px</label><br />   
                            <div id="upload_logo" class="btn btn-primary">Upload</div>
                        </div>

                        <div class="form-group">&nbsp;</div>

                        <div class="form-group">
                            <div id="i_loading_profiltoko" class="G-btn-animation" style="display: none;"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/img/loading.gif" /></div>                  
                            <?php if (in_array('E',$_smarty_tpl->tpl_vars['array_akses']->value)) {?><div id="btn_simpan_profiltoko" class="btn btn-primary">Update</div><?php }?>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="hubungikami">

                        <div class="form-group">&nbsp;</div>

                        <div class="form-group">
                            <label for="jam_kerja">Jam Kerja:</label>
                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['jam_kerja'];?>
" class="form-control" name="jam_kerja" placeholder="" />
                        </div>
                        
                        <div class="form-group">                        
                            <label for="no_hp">No. HP:</label>
                            <div id="detail_no_hp" class="table-responsive">
                                <table id="tblNo_hp" width="100%">
                                    <tbody id="no_hp"></tbody>
                                </table>
                            </div>
                        </div>

                        <div class="form-group">                        
                            <label for="wa">WA:</label>
                            <div id="detail_wa" class="table-responsive">
                                <table id="tblWa" width="100%">
                                    <tbody id="wa"></tbody>
                                </table>
                            </div>
                        </div>

                        <div class="form-group">                        
                            <label for="sms">SMS:</label>
                            <div id="detail_sms" class="table-responsive">
                                <table id="tblSms" width="100%">
                                    <tbody id="sms"></tbody>
                                </table>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['email'];?>
" class="form-control" name="email" placeholder="" />
                        </div>

                        <div class="form-group">                        
                            <label for="line">Line:</label>
                            <div id="detail_line" class="table-responsive">
                                <table id="tblLine" width="100%">
                                    <tbody id="line"></tbody>
                                </table>
                            </div>
                        </div>

                        <div class="form-group">                        
                            <label for="bbm">BBM:</label>
                            <div id="detail_bbm" class="table-responsive">
                                <table id="tblBbm" width="100%">
                                    <tbody id="bbm"></tbody>
                                </table>
                            </div>
                        </div>
                        
                        <div class="form-group">&nbsp;</div>

                        <div class="form-group">
                            <div id="i_loading_hubungikami" class="G-btn-animation" style="display: none;"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/img/loading.gif" /></div>                  
                            <?php if (in_array('E',$_smarty_tpl->tpl_vars['array_akses']->value)) {?><div id="btn_simpan_hubungikami" class="btn btn-primary">Update</div><?php }?>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="sosialmedia">

                        <div class="form-group">&nbsp;</div>

                        <div class="form-group">
                            <label for="facebook">Facebook:</label>
                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['facebook'];?>
" class="form-control" name="facebook" placeholder="" />
                        </div>
                        
                        <div class="form-group">
                            <label for="instagram">Instagram:</label>
                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['instagram'];?>
" class="form-control" name="instagram" placeholder="" />
                        </div>
                        
                        <div class="form-group">
                            <label for="twitter">Twitter:</label>
                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['twitter'];?>
" class="form-control" name="twitter" placeholder="" />
                        </div>
                        
                        <div class="form-group">&nbsp;</div>

                        <div class="form-group">
                            <div id="i_loading_sosialmedia" class="G-btn-animation" style="display: none;"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/img/loading.gif" /></div>                  
                            <?php if (in_array('E',$_smarty_tpl->tpl_vars['array_akses']->value)) {?><div id="btn_simpan_sosialmedia" class="btn btn-primary">Update</div><?php }?>
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
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/bootstrap-fileinput/js/fileinput.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">        
        $(function () {           

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
            
            $('#upload_logo').click(function(){
                $('#fileupload_logo').trigger('click'); 
                return false;
            });
            
            $('.image-editor-logo').cropit({
              smallImage: 'stretch'<?php if ($_smarty_tpl->tpl_vars['data']->value[0]['logo']!='') {?>,
              imageState: {
                src: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/umum/<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['logo'];?>
',
              }<?php }?>
            });

            <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable(1, null, 0);?>
            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listno_hp']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                var record = 
                    '<tr>' +
                        '<td style="padding: 5px;" width="100%"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['no_hp'];?>
" name="no_hp" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><?php if ($_smarty_tpl->tpl_vars['no']->value>1) {?><div class="btn btn-danger hapus_no_hp">Hapus</div><?php }?></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><?php if ($_smarty_tpl->tpl_vars['no']->value==1) {?><div id="btn_tambah_no_hp" class="btn btn-primary">Tambah</div><?php }?></div></td>' +
                    '</tr>';
                $( record ).insertBefore( "#no_hp" );
                <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>
            <?php } ?>
            
            $( document ).on( 'click', '.hapus_no_hp', function() {
                var element = $(this).closest('tr');
                element.remove();
            });
            
            $('#btn_tambah_no_hp').click(function() {
                var record = 
                    '<tr>' +
                        '<td style="padding: 5px;" width="100%"><input type="text" value="" name="no_hp" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div class="btn btn-danger hapus_no_hp">Hapus</div></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"></div></td>' +
                    '</tr>';
                $( record ).insertBefore( "#no_hp" );
            });

            <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable(1, null, 0);?>
            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listwa']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                var record = 
                    '<tr>' +
                        '<td style="padding: 5px;" width="100%"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['wa'];?>
" name="wa" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><?php if ($_smarty_tpl->tpl_vars['no']->value>1) {?><div class="btn btn-danger hapus_wa">Hapus</div><?php }?></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><?php if ($_smarty_tpl->tpl_vars['no']->value==1) {?><div id="btn_tambah_wa" class="btn btn-primary">Tambah</div><?php }?></div></td>' +
                    '</tr>';
                $( record ).insertBefore( "#wa" );
                <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>
            <?php } ?>

            $( document ).on( 'click', '.hapus_wa', function() {
                var element = $(this).closest('tr');
                element.remove();
            });

            $('#btn_tambah_wa').click(function() {
                var record = 
                    '<tr>' +
                        '<td style="padding: 5px;" width="100%"><input type="text" value="" name="wa" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div class="btn btn-danger hapus_wa">Hapus</div></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"></div></td>' +
                    '</tr>';
                $( record ).insertBefore( "#wa" );
            });

            <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable(1, null, 0);?>
            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listsms']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                var record = 
                    '<tr>' +
                        '<td style="padding: 5px;" width="100%"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['sms'];?>
" name="sms" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><?php if ($_smarty_tpl->tpl_vars['no']->value>1) {?><div class="btn btn-danger hapus_sms">Hapus</div><?php }?></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><?php if ($_smarty_tpl->tpl_vars['no']->value==1) {?><div id="btn_tambah_sms" class="btn btn-primary">Tambah</div><?php }?></div></td>' +
                    '</tr>';
                $( record ).insertBefore( "#sms" );
                <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>
            <?php } ?>

            $( document ).on( 'click', '.hapus_sms', function() {
                var element = $(this).closest('tr');
                element.remove();
            });

            $('#btn_tambah_sms').click(function() {
                var record = 
                    '<tr>' +
                        '<td style="padding: 5px;" width="100%"><input type="text" value="" name="sms" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div class="btn btn-danger hapus_sms">Hapus</div></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"></div></td>' +
                    '</tr>';
                $( record ).insertBefore( "#sms" );
            });
            
            <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable(1, null, 0);?>
            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listbbm']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                var record = 
                    '<tr>' +
                        '<td style="padding: 5px;" width="100%"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['bbm'];?>
" name="bbm" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><?php if ($_smarty_tpl->tpl_vars['no']->value>1) {?><div class="btn btn-danger hapus_bbm">Hapus</div><?php }?></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><?php if ($_smarty_tpl->tpl_vars['no']->value==1) {?><div id="btn_tambah_bbm" class="btn btn-primary">Tambah</div><?php }?></div></td>' +
                    '</tr>';
                $( record ).insertBefore( "#bbm" );
                <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>
            <?php } ?>

            $( document ).on( 'click', '.hapus_bbm', function() {
                var element = $(this).closest('tr');
                element.remove();
            });

            $('#btn_tambah_bbm').click(function() {
                var record = 
                    '<tr>' +
                        '<td style="padding: 5px;" width="100%"><input type="text" value="" name="bbm" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div class="btn btn-danger hapus_bbm">Hapus</div></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"></div></td>' +
                    '</tr>';
                $( record ).insertBefore( "#bbm" );
            });

            <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable(1, null, 0);?>
            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listline']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                var record = 
                    '<tr>' +
                        '<td style="padding: 5px;" width="100%"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['line'];?>
" name="line" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><?php if ($_smarty_tpl->tpl_vars['no']->value>1) {?><div class="btn btn-danger hapus_line">Hapus</div><?php }?></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><?php if ($_smarty_tpl->tpl_vars['no']->value==1) {?><div id="btn_tambah_line" class="btn btn-primary">Tambah</div><?php }?></div></td>' +
                    '</tr>';
                $( record ).insertBefore( "#line" );
                <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>
            <?php } ?>

            $( document ).on( 'click', '.hapus_line', function() {
                var element = $(this).closest('tr');
                element.remove();
            });

            $('#btn_tambah_line').click(function() {
                var record = 
                    '<tr>' +
                        '<td style="padding: 5px;" width="100%"><input type="text" value="" name="line" class="form-control" placeholder="" /></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"><div class="btn btn-danger hapus_line">Hapus</div></div></td>' +
                        '<td style="padding: 5px;"><div style="text-align: center;  white-space: nowrap;"></div></td>' +
                    '</tr>';
                $( record ).insertBefore( "#line" );
            });

            $('#propinsi').on('change', function (e) {
                loadKota(this.value, 0);
            });

            var loadKota = function(propinsi, kota) {
                $("#kota").empty();
                //$('<option value="0">-- Pilih Kota --</option>').appendTo('#kota');
                $.ajax({
                    type: 'POST',
                    url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/getKota.php',
                    data: { 'propinsi': propinsi },
                    dataType: 'json',
                    success: function(data) {
                        var store = data['topics'];
                        var data = ''; //'<option value="0">-- Pilih Kota --</option>';
                        for(var key in store) {
                            data+='<option value="'+store[key]['city_id']+'"'+(store[key]['city_id']==kota?' selected="selected"':'')+'>'+store[key]['city_name']+'</option>';
                        }
                        $("#kota").empty();
                        $(data).appendTo('#kota');
                    }
                });    
            };

            <?php if ($_smarty_tpl->tpl_vars['data']->value[0]['propinsi']>0) {?>loadKota('<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['propinsi'];?>
', '<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['kota'];?>
');<?php }?>
            
            $('#btn_simpan_profiltoko').click(function() {
                var data = new FormData();
                data.append('judul', $('[name=judul]').val());
                data.append('tagline', $('[name=tagline]').val());
                data.append('address', $('[name=alamat]').val());
                data.append('propinsi', $('[name=propinsi]').val());
                data.append('nama_propinsi', $("#propinsi option[value='"+$('[name=propinsi]').val()+"']").text());
                data.append('kota', $('[name=kota]').val());
                data.append('nama_kota', $("#kota option[value='"+$('[name=kota]').val()+"']").text());
                data.append('kode_pos', $('[name=kode_pos]').val());                
                data.append('latitude', $('[name=latitude]').val());                
                data.append('longitude', $('[name=longitude]').val());
                var imageDataLogo = $('.image-editor-logo').cropit('export');
                data.append('filename_logo', imageDataLogo==undefined?'':imageDataLogo);
                
                setLoading(true, 'profiltoko');
                $.ajax({
                    type: 'POST',
                    url: 'updateProfiltoko.php',
                    data: data,
                    cache: false,
                    dataType: 'json',
                    processData: false, // Don't process the files
                    contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                    success: function(data) {
                        setLoading(false, 'profiltoko');
                        if(data['success']) {
                            setMessage('success', data['message']);  
                        } else {
                            setMessage('error', data['message']);                        
                        }
                    }, 
                    error: function() {
                        setLoading(false, 'profiltoko');
                        setMessage('error', 'Kesalahan server. Mohon diulang kembali!');
                    }
                }); 
            });

            $('#btn_simpan_hubungikami').click(function() {            
                var no_hp = '';
                $("#tblNo_hp tr").each(function() {
                    var data = $(this).find('[name=no_hp]').val();
                    no_hp+=(no_hp==''?'':'\t')+data;
                });

                var wa = '';
                $("#tblWa tr").each(function() {
                    var data = $(this).find('[name=wa]').val();
                    wa+=(wa==''?'':'\t')+data;
                });
                
                var sms = '';
                $("#tblSms tr").each(function() {
                    var data = $(this).find('[name=sms]').val();
                    sms+=(sms==''?'':'\t')+data;
                });
                
                var line = '';
                $("#tblLine tr").each(function() {
                    var data = $(this).find('[name=line]').val();
                    line+=(line==''?'':'\t')+data;
                });

                var bbm = '';
                $("#tblBbm tr").each(function() {
                    var data = $(this).find('[name=bbm]').val();
                    bbm+=(bbm==''?'':'\t')+data;
                });
                
                var data = new FormData();
                data.append('jam_kerja', $('[name=jam_kerja]').val());                
                data.append('no_hp', no_hp);
                data.append('wa', wa);
                data.append('sms', sms);                
                data.append('email', $('[name=email]').val());                
                data.append('bbm', bbm);                
                data.append('line', line);
                
                setLoading(true, 'hubungikami');
                $.ajax({
                    type: 'POST',
                    url: 'updateHubungikami.php',
                    data: data,
                    cache: false,
                    dataType: 'json',
                    processData: false, // Don't process the files
                    contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                    success: function(data) {
                        setLoading(false, 'hubungikami');
                        if(data['success']) {
                            setMessage('success', data['message']);  
                        } else {
                            setMessage('error', data['message']);                        
                        }
                    }, 
                    error: function() {
                        setLoading(false, 'hubungikami');
                        setMessage('error', 'Kesalahan server. Mohon diulang kembali!');
                    }
                }); 
            });

            $('#btn_simpan_sosialmedia').click(function() {
                var data = new FormData();
                data.append('facebook', $('[name=facebook]').val());
                data.append('instagram', $('[name=instagram]').val());
                data.append('twitter', $('[name=twitter]').val());
                
                setLoading(true, 'sosialmedia');
                $.ajax({
                    type: 'POST',
                    url: 'updateSosialmedia.php',
                    data: data,
                    cache: false,
                    dataType: 'json',
                    processData: false, // Don't process the files
                    contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                    success: function(data) {
                        setLoading(false, 'sosialmedia');
                        if(data['success']) {
                            setMessage('success', data['message']);  
                        } else {
                            setMessage('error', data['message']);                        
                        }
                    }, 
                    error: function() {
                        setLoading(false, 'sosialmedia');
                        setMessage('error', 'Kesalahan server. Mohon diulang kembali!');
                    }
                }); 
            });
        });
        
    <?php echo '</script'; ?>
>
</body><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/footer_js.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

</html><?php }} ?>
