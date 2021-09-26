<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-07-05 22:23:22
         compiled from "..\..\templates\back-end\penguin\mitra\androidadd.html" */ ?>
<?php /*%%SmartyHeaderCode:14841258805f01f06a949bb4-27605106%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c6ee7e955952f998a74c10261e2f75d2ba2b2ca' => 
    array (
      0 => '..\\..\\templates\\back-end\\penguin\\mitra\\androidadd.html',
      1 => 1593644608,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14841258805f01f06a949bb4-27605106',
  'function' => 
  array (
  ),
  'variables' => 
  array (
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
  'unifunc' => 'content_5f01f06a9a9d73_82257989',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f01f06a9a9d73_82257989')) {function content_5f01f06a9a9d73_82257989($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

	
		<!--Page Container-->
		<section>	
					
			<div class="container-fluid page-content">				
				<div class="row">
					<div id="wrapper" class="col-md-12">
						
		            
							<!---- BUKA ---->
				            
				                	<div class="form-group"> </div>
				                    
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
				                                    </td>
				                                </tr>
				                            </tbody>                                
				                        </table>
				                    </div>
				                
				        	
				        	<!---- TUTUP ---->	
		    			
					</div>
				</div>
			</div>
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
/assets/bootstrap-fileinput/js/fileinput.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/js/jquery.input.formatter.js"><?php echo '</script'; ?>
>  

		<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/datepick/jquery.datepick.css" rel="stylesheet">
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/datepick/jquery.plugin.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/datepick/jquery.datepick.js"><?php echo '</script'; ?>
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
	                    scrollTop: $('#wrapper').offset().top - 70
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
					//data.append('status', $('[name=status]').val());

	                //setLoading(true);
	                try {
					    window.cpjs.showProgressDialog(true);
					} catch(err) {
					    console.log(err.message);
					}

	                $.ajax({
	                    type: 'POST',
                    url: isEdit?'update_member.php':'save_member.php',
                    data: data,
                    cache: false,
                    dataType: 'json',
                    processData: false, // Don't process the files
                    contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                    success: function(data) {
	                        
	                        try {
					            window.cpjs.showProgressDialog(false);
					          	window.cpjs.showMessageDialog(data['message'], data['success']);
					        } catch(err) {
					           	console.log(err.message);
					        }

	                    }, 

	                    error: function() {
	                        
	                        try {
							    window.cpjs.showProgressDialog(false);
							    window.cpjs.showMessageDialog('Proses simpan data produk gagal!', false);
							} catch(err) {
							    console.log(err.message);
							}

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
	    	});
	    <?php echo '</script'; ?>
>

	</body>
</html><?php }} ?>
