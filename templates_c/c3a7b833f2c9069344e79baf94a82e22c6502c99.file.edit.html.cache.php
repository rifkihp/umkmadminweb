<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-09-26 02:33:04
         compiled from "..\..\templates\back-end\penguin\customer\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:1848167467614f79704b4ec0-99669908%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3a7b833f2c9069344e79baf94a82e22c6502c99' => 
    array (
      0 => '..\\..\\templates\\back-end\\penguin\\customer\\edit.html',
      1 => 1595214764,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1848167467614f79704b4ec0-99669908',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'adminweburl' => 0,
    'sub_title' => 0,
    'data' => 0,
    'isEdit' => 0,
    'tpl_dir' => 0,
    'listpropinsi' => 0,
    'entry' => 0,
    'jenis_user' => 0,
    'homeurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_614f7970825a81_23767424',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_614f7970825a81_23767424')) {function content_614f7970825a81_23767424($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

	<!--sidebar-->
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

	<!--/sidebar-->
	<!--Page Container-->
	<section id="wrapper" class="main-container">	

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
									<div class="row col-md-12">                    

										<div id="alert_error" class="form-group" style="display: none;">

											<div class="alert alert-danger">&nbsp;</div>

										</div>



										<div class="form-group">

											<label class="control-label">Nama Depan:</label>

											<input type="text" name="first_name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['first_name'];?>
" class="form-control" />

										</div>



										<div class="form-group">

											<label class="control-label">Nama Belakang:</label>

											<input type="text" name="last_name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['last_name'];?>
" class="form-control" />

										</div>



										<div class="form-group">

											<label class="control-label">No. HP:</label>

											<input type="text" name="no_hp" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['phone'];?>
" class="form-control" />

										</div>



										<div class="form-group">

											<label class="control-label">Email:</label>

											<input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['email'];?>
" class="form-control" />

										</div>

										<div class="form-group">

											<label class="control-label">Username:</label>

											<input type="text" name="username" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['username'];?>
" class="form-control" />

										</div>

										<div class="form-group">

											<label for="password">Password Login:</label>

											<input type="password" value="" class="form-control" name="password" placeholder="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {?>Biarkan jika tidak ingin diganti.<?php }?>" />



										</div>



										<div class="form-group">

											<label for="konfirmasi">Konfirmasi Password Login:</label>

											<input type="password" value="" class="form-control" name="konfirmasi" placeholder="" />

										</div>



										<div class="form-group">

											<label class="control-label">Photo Profil:</label>

											<style type="text/css">

												#photo-editor .cropit-image-preview {

													background-color: #a6bac4;

													height: 300px;

													width: 300px;

													cursor: move;

												}

											</style>



											<div id="photo-editor">

												<div style=" float: right; margin-top: 5px; margin-left: 5px; position: absolute;"><input id="fileupload_photo" type="file" name="fileupload_photo" style="display:none;" class="cropit-image-input" /><a id="upload_photo"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/img/camera-icon.png" width="24px" height="20px" /></a></div>    

												<div class="cropit-image-preview"></div>

											</div>

										</div>



										<div class="form-group">

											<label class="control-label">Alamat:</label>

											<textarea name="alamat" class="form-control"><?php echo $_smarty_tpl->tpl_vars['data']->value[0]['alamat'];?>
</textarea>

										</div>



										<div class="form-group">

											<label class="control-label">Propinsi:</label>

											<select id="profil_prop" name="propinsi" class="form-control">

												<option value="0">-- Pilih Propinsi --</option>

												<?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listpropinsi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>

												<option value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['province_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['entry']->value['province_id']==$_smarty_tpl->tpl_vars['data']->value[0]['id_propinsi']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['entry']->value['province'];?>
</option>

												<?php } ?>

											</select>

										</div>



										<div class="form-group">

											<label class="control-label">Kota:</label>

											<select id="profil_kota" name="kota" class="form-control">

												<option value="0">-- Pilih Kota --</option>

											</select>

										</div>



										<div class="form-group">

											<label class="control-label">Kecamatan:</label>

											<select id="profil_kecamatan" name="kecamatan"  class="form-control">

												<option value="0">-- Pilih Kecamatan --</option>

											</select>

										</div>



										<div class="form-group">

											<label class="control-label">Kode Pos:</label>

											<input type="text" name="kode_pos" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['kode_pos'];?>
" class="form-control" />

										</div>



										<div class="form-group">

											<label class="control-label">Jenis User:</label>

											<select name="jenis_user" class="form-control">

												<?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['jenis_user']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>

												<option value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['entry']->value['id']==$_smarty_tpl->tpl_vars['data']->value[0]['jenis_user']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
</option>

												<?php } ?>

											</select>

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
						</div>
					</div>
				</div>
	
			
				
		</div>
	
		<!--Footer -->
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

		<!--/Footer-->
		
	</section>
	<!--/Page Container-->
	
	
	<a id="scrollTop" href="index1.htm#top"><i class="icon-arrow-up12"></i></a>	

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
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/js/jquery.cropit.js"><?php echo '</script'; ?>
>  

    <?php echo '<script'; ?>
 type="text/javascript">

        $(function () {           

            var isEdit = <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {?>true<?php } else { ?>false<?php }?>;
            $('#photo-editor').cropit({
                smallImage: 'stretch',
                imageState: {
                    src: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/member/<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['photo'];?>
'
                }
            });

            $('#upload_photo').click(function(){
                $('#fileupload_photo').trigger('click'); 
                return false;
            });

            function setErrorMessage(message) {
                $('#alert_error .alert').text(message);
                $('#alert_error').show('slow');
                setTimeout(function() {
                    $('#alert_error').hide('slow');
                }, 5000);

                $("body, html").animate({ 
                    scrollTop: $('#wrapper').offset().top 
                }, 600);
            }

            $('#btn_simpan').click(function() {

                var data = new FormData();
                var first_name     = $('[name=first_name]').val();
                var last_name      = $('[name=last_name]').val();
                var email          = $('[name=email]').val();
                var username       = $('[name=username]').val();
                var no_hp          = $('[name=no_hp]').val();
                var alamat         = $('[name=alamat]').val();
                var id_propinsi    = $('[name=propinsi]').val();
                var nama_propinsi  = $("#profil_prop option[value='"+id_propinsi+"']").text();
                var id_kota        = $('[name=kota]').val();
                var nama_kota      = $("#profil_kota option[value='"+id_kota+"']").text();
                var id_kecamatan   = $('[name=kecamatan]').val();
                var nama_kecamatan = $("#profil_kecamatan option[value='"+id_kecamatan+"']").text();
                var kode_pos       = $('[name=kode_pos]').val();
                var jenis_user     = $('[name=jenis_user]').val();
                var photoData      = $('#photo-editor').cropit('export');

                var data = new FormData();
                data.append('id', isEdit?'<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['id'];?>
':'');
                data.append('firstname', first_name);
                data.append('lastname', last_name);
                data.append('email', email);
                data.append('username', username);
                data.append('no_hp', no_hp);
                data.append('alamat', alamat);
                data.append('propinsi', id_propinsi);
                data.append('nama_propinsi', nama_propinsi);
                data.append('kota', id_kota);
                data.append('nama_kota', nama_kota);
                data.append('kecamatan', id_kecamatan);
                data.append('nama_kecamatan', nama_kecamatan);                                
                data.append('kode_pos', kode_pos);                                
                data.append('jenis_user', jenis_user);
                data.append('filename_photo', photoData);    
                data.append('password', $('[name=password]').val());
                data.append('konfirmasi', $('[name=konfirmasi]').val());

                setLoading(true);

                $.ajax({
                    type: 'POST',
                    url: isEdit?'update_member.php':'save_member.php',
                    data: data,
                    cache: false,
                    dataType: 'json',
                    processData: false, // Don't process the files
                    contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                    success: function(data) {
                        if(data['success']) {
							swal('Sukses!', 'Record Data Telah Berhasil Disimpan!', 'success');
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

            $('#profil_prop').on('change', function (e) {
                loadKota(this.value, 0);
                loadKecamatan(0, 0);
            });

            $('#profil_kota').on('change', function (e) {
                loadKecamatan(this.value, 0);
            });

            function loadKota(propinsi, kota) {
                $("#profil_kota").empty();
                $('<option value="0">-- Pilih Kota --</option>').appendTo('#profil_kota');

                $.ajax({
                    type: 'POST',
                    url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/getKota.php',
                    data: { 'propinsi': propinsi },
                    dataType: 'json',
                    success: function(data) {
                        var store = data['topics'];
                        var data = '<option value="0">-- Pilih Kota --</option>';
                        for(var key in store) {
                            data+='<option value="'+store[key]['city_id']+'"'+(store[key]['city_id']==kota?' selected="selected"':'')+'>'+store[key]['city_name']+'</option>';
                        }
                        $("#profil_kota").empty();
                        $(data).appendTo('#profil_kota');
                    }
                });
            }

            function loadKecamatan(kota, kecamatan) {
                $("#profil_kecamatan").empty();
                $('<option value="0">-- Pilih Kecamatan --</option>').appendTo('#profil_kecamatan');

                if(kota>0) {
                    $.ajax({
                        type: 'POST',
                        url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/getKecamatan.php',
                        data: { 'kota': kota },
                        dataType: 'json',
                        success: function(data) {
                            var store = data['topics'];
                            var data = '<option value="0">-- Pilih Kecamatan --</option>';
                            for(var key in store) {
                                data+='<option value="'+store[key]['subdistrict_id']+'"'+(store[key]['subdistrict_id']==kecamatan?' selected="selected"':'')+'>'+store[key]['subdistrict_name']+'</option>';
                            }

                            $("#profil_kecamatan").empty();
                            $(data).appendTo('#profil_kecamatan');
                        }
                    });
                }
            }

            <?php if ($_smarty_tpl->tpl_vars['data']->value[0]['id_propinsi']>0) {?>loadKota('<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['id_propinsi'];?>
', '<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['id_kota'];?>
');<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['data']->value[0]['id_kota']>0) {?>loadKecamatan('<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['id_kota'];?>
', '<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['id_kecamatan'];?>
');<?php }?>

        });

    <?php echo '</script'; ?>
>
</body><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/footer_js.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

</html><?php }} ?>
