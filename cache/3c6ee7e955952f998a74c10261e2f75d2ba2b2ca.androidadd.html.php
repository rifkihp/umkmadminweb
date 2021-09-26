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
    '2df2c9ac62c14bf9cd21e0097fb4725e6b68716e' => 
    array (
      0 => 'D:\\www\\bekamonline\\templates\\back-end\\penguin\\includes\\head.html',
      1 => 1592350430,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14841258805f01f06a949bb4-27605106',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f01f10a8100d0_55581378',
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f01f10a8100d0_55581378')) {function content_5f01f10a8100d0_55581378($_smarty_tpl) {?><!doctype html>
<html lang="en">
    <head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title></title>	
	<link href="http://192.168.8.106/bekamonline/templates/back-end/penguin/assets/images/favicon.ico" rel="icon" type="image/png">
	
	<!-- Global stylesheets -->	
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
	<link type="text/css" rel="stylesheet" href="http://192.168.8.106/bekamonline/templates/back-end/penguin/assets/fonts/fonts.css">
        <link type="text/css" rel="stylesheet" href="http://192.168.8.106/bekamonline/templates/back-end/penguin/assets/icons/icomoon/icomoon.css">
        <link type="text/css" rel="stylesheet" href="http://192.168.8.106/bekamonline/templates/back-end/penguin/css/animate.min.css">
	<link type="text/css" rel="stylesheet" href="http://192.168.8.106/bekamonline/templates/back-end/penguin/css/bootstrap.css">   
	<link type="text/css" rel="stylesheet" href="http://192.168.8.106/bekamonline/templates/back-end/penguin/css/core.css">	
	<link type="text/css" rel="stylesheet" href="http://192.168.8.106/bekamonline/templates/back-end/penguin/css/layout.css">	
	<link type="text/css" rel="stylesheet" href="http://192.168.8.106/bekamonline/templates/back-end/penguin/css/bootstrap-extended.css">	    
	<link type="text/css" rel="stylesheet" href="http://192.168.8.106/bekamonline/templates/back-end/penguin/css/components.css">
	<link type="text/css" rel="stylesheet" href="http://192.168.8.106/bekamonline/templates/back-end/penguin/css/plugins.css">
	<link type="text/css" rel="stylesheet" href="http://192.168.8.106/bekamonline/templates/back-end/penguin/css/loaders.css">
	<link type="text/css" rel="stylesheet" href="http://192.168.8.106/bekamonline/templates/back-end/penguin/css/responsive.css">
	<link type="text/css" rel="stylesheet" href="http://192.168.8.106/bekamonline/templates/back-end/penguin/css/color-system.css">		
	<link type="text/css" rel="stylesheet" href="http://192.168.8.106/bekamonline/templates/back-end/penguin/css/fancybox/jquery.fancybox.css">
	<link type="text/css" rel="stylesheet" href="http://192.168.8.106/bekamonline/templates/back-end/penguin/assets/sweetalert2/sweetalert2.min.css">
	<link type="text/css" rel="stylesheet" href="http://192.168.8.106/bekamonline/templates/back-end/penguin/assets/bootstrap-fileinput/css/fileinput.min.css">
	<link type="text/css" rel="stylesheet" href="http://192.168.8.106/bekamonline/templates/back-end/penguin/css/burnt_sienna_light.css">	
        <link type="text/css" rel="stylesheet" href="http://192.168.8.106/bekamonline/templates/back-end/penguin/css/AdminLTE.css" />
	<link type="text/css" rel="stylesheet" href="0" id="theme">
	<script src="http://192.168.8.106/bekamonline/templates/back-end/penguin/assets/sweetalert2/sweetalert2.min.js"></script>
	<script>
		var base_tpl_url = "http://192.168.8.106/bekamonline/templates/back-end/penguin/css/themes/";
		var base_url = "http://192.168.8.106/bekamonline/";
	</script>
	<style>
            .main-nav .navbar-left {
                background-color: rgb(255, 255, 255) !important;
                height: 50px;
                padding: 0 15px;
                width: 250px !important;
            }		
	</style>
	<!-- /global stylesheets -->        
    </head>

    <body class="material-menu" id="top">

        <!-- <div id="preloader">
            <div id="status">
                <div class="loader">
                    <div class="loader-inner ball-pulse">
                        <div class="bg-blue"></div>
                        <div class="bg-amber"></div>
                        <div class="bg-success"></div>
                    </div>
                </div>
            </div>
        </div> -->
	
	
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
										<input type="text" name="first_name" value="" class="form-control" />
									</div>

									<div class="form-group">
										<label class="control-label">Nama Belakang:</label>
										<input type="text" name="last_name" value="" class="form-control" />
									</div>

									<div class="form-group">
										<label class="control-label">No. HP:</label>
										<input type="text" name="no_hp" value="" class="form-control" />
									</div>

									<div class="form-group">
										<label class="control-label">Email:</label>
										<input type="text" name="email" value="" class="form-control" />
									</div>

									<div class="form-group">
										<label class="control-label">Username:</label>
										<input type="text" name="username" value="" class="form-control" />
									</div>

									<div class="form-group">
										<label for="password">Password Login:</label>
										<input type="password" value="" class="form-control" name="password" placeholder="" />
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
											<div style=" float: right; margin-top: 5px; margin-left: 5px; position: absolute;"><input id="fileupload_photo" type="file" name="fileupload_photo" style="display:none;" class="cropit-image-input" /><a id="upload_photo"><img src="http://192.168.8.106/bekamonline/templates/back-end/penguin/assets/img/camera-icon.png" width="24px" height="20px" /></a></div>
											<div class="cropit-image-preview"></div>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label">Alamat:</label>
										<textarea name="alamat" class="form-control"></textarea>
									</div>

									<div class="form-group">
										<label class="control-label">Propinsi:</label>
										<select id="profil_prop" name="propinsi" class="form-control">
											<option value="0">-- Pilih Propinsi --</option>
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
										<input type="text" name="kode_pos" value="" class="form-control" />
									</div>

									<div class="form-group">
										<label class="control-label">Jenis User:</label>
										<select name="jenis_user" class="form-control">
																					</select>
									</div>

				                    <div class="form-group">
				                        <table>
				                            <tbody>
				                                <tr>
				                                    <td width="100%">&nbsp;</td> 
				                                    <td nowrap>
				                                        <div id="i_loading" class="G-btn-animation" style="display: none;"><img src="http://192.168.8.106/bekamonline/templates/back-end/penguin/assets/img/loading.gif" /></div>                  
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
		<script src="http://192.168.8.106/bekamonline/templates/back-end/penguin/js/jquery.js"></script>	
		<script src="http://192.168.8.106/bekamonline/templates/back-end/penguin/js/bootstrap.js"></script>
		<script src="http://192.168.8.106/bekamonline/templates/back-end/penguin/js/jquery.ui.js"></script>
		<script src="http://192.168.8.106/bekamonline/templates/back-end/penguin/js/nav.accordion.js"></script>	
		<script src="http://192.168.8.106/bekamonline/templates/back-end/penguin/js/hammerjs.js"></script>
		<script src="http://192.168.8.106/bekamonline/templates/back-end/penguin/js/jquery.hammer.js"></script>

		<script src="http://192.168.8.106/bekamonline/templates/back-end/penguin/js/jquery.slimscroll.js"></script>	
		<script src="http://192.168.8.106/bekamonline/templates/back-end/penguin/js/smart-resize.js"></script>
		<script src="http://192.168.8.106/bekamonline/templates/back-end/penguin/js/blockui.min.js"></script>		
		<script src="http://192.168.8.106/bekamonline/templates/back-end/penguin/js/wow.min.js"></script>					
		<script src="http://192.168.8.106/bekamonline/templates/back-end/penguin/js/fancybox.min.js"></script>
		<script src="http://192.168.8.106/bekamonline/templates/back-end/penguin/js/venobox.js"></script>
		<script src="http://192.168.8.106/bekamonline/templates/back-end/penguin/js/forms/uniform.min.js"></script>
		<script src="http://192.168.8.106/bekamonline/templates/back-end/penguin/js/forms/switchery.js"></script>
		<script src="http://192.168.8.106/bekamonline/templates/back-end/penguin/js/forms/select2.min.js"></script>	
		<script src="http://192.168.8.106/bekamonline/templates/back-end/penguin/js/core.js"></script>
		<!-- /global scripts -->

		<!-- Page scripts -->
		<script src="http://192.168.8.106/bekamonline/templates/back-end/penguin/assets/bootstrap-fileinput/js/fileinput.js"></script>
		<script type="text/javascript" src="http://192.168.8.106/bekamonline/templates/back-end/penguin/assets/js/jquery.input.formatter.js"></script>  

		<link href="http://192.168.8.106/bekamonline/templates/back-end/penguin/assets/datepick/jquery.datepick.css" rel="stylesheet">
		<script src="http://192.168.8.106/bekamonline/templates/back-end/penguin/assets/datepick/jquery.plugin.js"></script>
		<script src="http://192.168.8.106/bekamonline/templates/back-end/penguin/assets/datepick/jquery.datepick.js"></script>

		<script type="text/javascript">

	        $(function () {    

	            var isEdit = false;
	            $('#photo-editor').cropit({
					smallImage: 'stretch',
					imageState: {
						src: 'http://192.168.8.106/bekamonline/uploads/member/'
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
					data.append('id', isEdit?'':'');
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
						url: 'http://192.168.8.106/bekamonline/store/getKota.php',
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
							url: 'http://192.168.8.106/bekamonline/store/getKecamatan.php',
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
	    </script>

	</body>
</html><?php }} ?>
