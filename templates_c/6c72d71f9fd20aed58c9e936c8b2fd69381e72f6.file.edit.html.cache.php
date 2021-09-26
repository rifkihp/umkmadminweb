<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-04-20 21:37:00
         compiled from "..\..\templates\back-end\penguin\product\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:13037894925e9bd91ef3e4c8-81780420%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c72d71f9fd20aed58c9e936c8b2fd69381e72f6' => 
    array (
      0 => '..\\..\\templates\\back-end\\penguin\\product\\edit.html',
      1 => 1587393417,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13037894925e9bd91ef3e4c8-81780420',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e9bd91f0feea5_89691388',
  'variables' => 
  array (
    'title' => 0,
    'adminweburl' => 0,
    'sub_title' => 0,
    'listmitra' => 0,
    'entry' => 0,
    'data' => 0,
    'isEdit' => 0,
    'foo' => 0,
    'no' => 0,
    'listfoto' => 0,
    'homeurl' => 0,
    'tpl_dir' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e9bd91f0feea5_89691388')) {function content_5e9bd91f0feea5_89691388($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

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

                            <div class="panel-body">
                                <div id="wrapper" class="row" style="margin: 5px;">  
                                    <!---- BUKA ---->        
                                    <div class="form-group"> </div>
                                                    
                                    <div id="alert_error" class="form-group" style="display: none;">
                                        <div class="alert alert-danger">&nbsp;</div>
                                    </div>
                                
                                    <div class="form-group">
                                        <label class="control-label">Mitra:</label>
                                        <select id="mitra" name="mitra" class="form-control">
                                            <option value="0">-- Pilih Mitra --</option>
                                            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listmitra']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['entry']->value['id']==$_smarty_tpl->tpl_vars['data']->value[0]['id_member']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
</option>
                                            <?php } ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="kode">Kode Produk:</label>
                                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['kode'];
}?>" class="form-control" name="kode" placeholder="" />
                                    </div>

                                    <div class="form-group">
                                        <label for="nama">Nama Produk:</label>
                                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['nama'];
}?>" class="form-control" name="nama" placeholder="" />
                                    </div>

                                    <div class="form-group">
                                        <label for="penjelasan">Penjelasan Produk:</label>
                                        <div class="summernote"></div>
                                    </div>

                                    <div class="form-group">
                                        <label for="satuan">Satuan:</label>
                                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['satuan'];
}?>" class="form-control" name="satuan" placeholder="" />
                                    </div>

                                    <div class="form-group">
                                        <label for="harga_jual_umum">Harga Per Satuan:</label>
                                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['harga_jual'];
} else { ?>0<?php }?>" class="form-control harga" name="harga_jual_umum" placeholder="" />
                                    </div>

                                    <div class="form-group">
                                        <label for="minimum_pesan">Minimum Pesan:</label>
                                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['minimum_pesan'];
} else { ?>1<?php }?>" class="form-control harga" name="minimum_pesan" placeholder="" />
                                    </div>

                                    <div class="form-group">
                                        <label for="harga_diskon">Harga Promo:</label>
                                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['harga_diskon'];
} else { ?>0<?php }?>" class="form-control harga" name="harga_diskon" placeholder="" />
                                    </div>

                                    <div class="form-group">
                                        <label for="from_date_harga_diskon">Tanggal Harga Promo Dari:</label>
                                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['from_date_harga_diskon'];
}?>" class="form-control tanggal" name="from_date_harga_diskon" placeholder="" />
                                    </div>

                                    <div class="form-group">
                                        <label for="to_date_harga_diskon">Tanggal Harga Promo Sampai:</label>
                                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['to_date_harga_diskon'];
}?>" class="form-control tanggal" name="to_date_harga_diskon" placeholder="" />
                                    </div>

                                    <div class="form-group">
                                        <label for="persen_diskon">Diskon Promo:</label>
                                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['persen_diskon'];
} else { ?>0<?php }?>" class="form-control" name="persen_diskon" placeholder="" />
                                    </div>

                                    <div class="form-group">
                                        <label for="from_date_persen_diskon">Tanggal Diskon Promo Dari:</label>
                                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['from_date_persen_diskon'];
}?>" class="form-control tanggal" name="from_date_persen_diskon" placeholder="" />
                                    </div>

                                    <div class="form-group">
                                        <label for="to_date_persen_diskon">Tanggal Diskon Promo Sampai:</label>
                                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['to_date_persen_diskon'];
}?>" class="form-control tanggal" name="to_date_persen_diskon" placeholder="" />
                                    </div>

                                    <div class="form-group">
                                        <label for="photo">Foto Produk:</label>
                                        <input type="file" id="fileupload_foto_1" name="fileupload_foto_1" multiple />
                                    </div>

                                    <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 20+1 - (1) : 1-(20)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                                        <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['foo']->value-1, null, 0);?>
                                        <div class="form-group">
                                            <img id="preview_foto_<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" src="<?php if ($_smarty_tpl->tpl_vars['listfoto']->value[$_smarty_tpl->tpl_vars['no']->value]['nama_file']!='') {
echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/produk/<?php echo $_smarty_tpl->tpl_vars['listfoto']->value[$_smarty_tpl->tpl_vars['no']->value]['nama_file'];
} else { ?>#<?php }?>" style="height: 300px;<?php if ($_smarty_tpl->tpl_vars['listfoto']->value[$_smarty_tpl->tpl_vars['no']->value]['nama_file']=='') {?>display: none;<?php }?>" alt="<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" />
                                            <div id="blok_hapus_<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" style="margin-top: 5px;<?php if ($_smarty_tpl->tpl_vars['listfoto']->value[$_smarty_tpl->tpl_vars['no']->value]['nama_file']=='') {?>display: none;<?php }?>">
                                                <div id_hapus_foto="<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" class="btn btn btn-danger hapus_foto">Hapus</div>
                                                <label class="control-label"><input type="checkbox" id="gambar_utama_<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" id_gambar_utama="<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" class="pilih_gambar_utama" <?php if ($_smarty_tpl->tpl_vars['listfoto']->value[$_smarty_tpl->tpl_vars['no']->value]['as_default']=='Y') {?>checked<?php }?> /> Atur sebagai gambar utama.</label>
                                            </div>
                                        </div>
                                    <?php }} ?>
                                    
                                    <div class="form-group">
                                        <label for="status">Status Produk:</label>
                                        <select class="form-control" name="status">
                                            <option value="1" <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true&&$_smarty_tpl->tpl_vars['data']->value[0]['status']=="1") {?> selected="selected" <?php }?>>Publish</option>
                                            <option value="0" <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true&&$_smarty_tpl->tpl_vars['data']->value[0]['status']=="0") {?> selected="selected" <?php }?>>Unpublish</option>
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

<!-- Page scripts -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/bootstrap-fileinput/js/fileinput.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/js/jquery.input.formatter.js"><?php echo '</script'; ?>
>  

<!-- include summernote -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/dist/summernote.css">
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/dist/summernote.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/dist/summernote-ext-video.js"><?php echo '</script'; ?>
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
	            $("input.harga").formatInput();

	            var isEdit = <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {?>true<?php } else { ?>false<?php }?>;
	            $('.summernote').summernote({
	                height: 300,
	                toolbar: [
	                    ['style', ['style']],
	                    ['font', ['bold', 'italic', 'underline', 'clear']],
	                    //['fontname', ['fontname']],
	                    // ['fontsize', ['fontsize']], Still buggy
	                    ['color', ['color']],
	                    ['para', ['ul', 'ol', 'paragraph']],
	                    // ['height', ['height']],
	                    ['table', ['table']],
	                    ['insert', ['link', 'picture', 'video']],
	                    //['view', ['fullscreen' , 'codeview' ]],
	                    ['help', ['help']]
	                ]
	            });
	            
	            $(".summernote").code('<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['penjelasan'];
}?>');

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
	                submitProduk();
	            });
	            
	            function submitProduk() {
	                var data = new FormData();
	                data.append('id', isEdit?'<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['id'];?>
':'');
	                data.append('id_member', $('[name=mitra]').val());
	                data.append('kode', $('[name=kode]').val());
	                data.append('nama', $('[name=nama]').val());
	                data.append('penjelasan', $('.summernote').summernote().code().replace(/\n/, '<br />'));

	                data.append('satuan', $('[name=satuan]').val());
	                data.append('harga_jual', ($('[name=harga_jual_umum]').val()).replace(/\,/g, ''));
					
	                data.append('minimum_pesan', ($('[name=minimum_pesan]').val()).replace(/\,/g, ''));               
	                data.append('harga_diskon', ($('[name=harga_diskon]').val()).replace(/\,/g, ''));
	                data.append('from_date_harga_diskon', $('[name=from_date_harga_diskon]').val());
	                data.append('to_date_harga_diskon', $('[name=to_date_harga_diskon]').val());
	                data.append('persen_diskon', $('[name=persen_diskon]').val());
	                data.append('from_date_persen_diskon', $('[name=from_date_persen_diskon]').val());
	                data.append('to_date_persen_diskon', $('[name=to_date_persen_diskon]').val());
	                
	                for(var key in files) {
	                    data.append('filename_foto_'+(eval(key)+1), files[key]);
	                    /*if(files[key]!=undefined && typeof files[key] === 'object') {
	                        $.each(files[key], function(keys, value) {
	                            alert();
	                        });                        
	                    }*/
	                }

	                for(var i=0; i<20; i++) {
	                    if($('#gambar_utama_'+(i+1)).is(':checked')) {
	                        data.append('as_default', (i+1));
	                        //console.log('as_default: '+(i+1));
	                        //alert('as_default: '+(i+1));
	                        break;
	                    }
	                }
	                
	                var changes_data='';
	                for(var key in changes) {
	                    changes_data+=key+',';
	                }
	                //console.log(changes_data);
	                data.append('changes', changes_data);
	                data.append('status', $('[name=status]').val());

	                //setLoading(true);
	                try {
					    window.cpjs.showProgressDialog(true);
					} catch(err) {
					    console.log(err.message);
					}

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
                                swal('Sukses', 'Record Data Batal Disimpan', 'success')
                                window.location = 'list.php';                    
                            } else {
                                setErrorMessage(data['message']);                        
                            }
                        }, 

                        error: function() {
                            setLoading(false);
                            setErrorMessage('Proses simpan data produk gagal!');
                        }

	                });
	            }

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

	            //FUNGSI GAMBAR
	            function readURL(input, id) {
	                if (input.files && input.files[id-1]) {
	                    var reader = new FileReader();
	                    reader.onload = function (e) {
	                        $('#preview_foto_'+id).attr('src', e.target.result);
	                        $("#fileupload_gambar").val(e.target.result);
	                    }
	                    reader.readAsDataURL(input.files[id-1]);
	                }
	            }

				var files = new Array();
	            <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 20+1 - (1) : 1-(20)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
	                <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['foo']->value-1, null, 0);?>
	                <?php if ($_smarty_tpl->tpl_vars['listfoto']->value[$_smarty_tpl->tpl_vars['no']->value]['nama_file']!='') {?>files[<?php echo $_smarty_tpl->tpl_vars['no']->value;?>
] = '<?php echo $_smarty_tpl->tpl_vars['listfoto']->value[$_smarty_tpl->tpl_vars['no']->value]['nama_file'];?>
';<?php }?>
	            <?php }} ?>
	            
	            var changes = new Array();
	            $("#fileupload_foto_1").change(function(event) {
	                if(!event.target.files) return;
	                var f = event.target.files;
	                var len = f.length>20?20:f.length;
	                for(var i=0; i < len; i++) {
	                    readURL(this, i+1);
	                    files[i] = f[i];
	                    changes[i] = true;
	                    console.log('changes '+i+ ' '+changes[i]);
	                    $('#preview_foto_'+(i+1)).show();
	                    $('#blok_hapus_'+(i+1)).show();
	                }
	                for(var i=1; i<20; i++) {
	                    if($('#gambar_utama_'+(i+1)).is(':checked')) return;
	                }
	                $('#gambar_utama_1').prop('checked', true);
	            });

	            $('.hapus_foto').click(function() {
	                var id = this.getAttribute("id_hapus_foto");
	                files[eval(id)-1] = undefined;
	                changes[eval(id)-1] = true;                
	                $('#fileupload_foto_'+id).val('');
	                $('#preview_foto_'+id).hide();
	                $('#blok_hapus_'+id).hide();
	                if($('#gambar_utama_'+id).is(':checked')) {
	                    $('#gambar_utama_'+id).prop('checked', false);
	                    for(var i=0; i<20; i++) {
	                        if(files[i] != undefined) {
	                            $('#gambar_utama_'+(i+1)).prop('checked', true);    
	                            break;
	                        }
	                    }
	                }
	            });

	            $('.pilih_gambar_utama').click(function() {
	                var id = this.getAttribute("id_gambar_utama");
	                for(var i=0; i<20; i++) {
	                    $('#gambar_utama_'+(i+1)).prop('checked', id==i+1);
	                }
	            });
	        });
    <?php echo '</script'; ?>
>

</body><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/footer_js.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

</html><?php }} ?>
