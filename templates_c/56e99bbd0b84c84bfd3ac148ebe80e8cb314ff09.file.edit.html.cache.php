<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-11-18 22:05:33
         compiled from "../../templates/back-end/penguin/ppob_produk/edit.html" */ ?>
<?php /*%%SmartyHeaderCode:5348153315bf17fbdeb3ec0-40860723%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56e99bbd0b84c84bfd3ac148ebe80e8cb314ff09' => 
    array (
      0 => '../../templates/back-end/penguin/ppob_produk/edit.html',
      1 => 1542553114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5348153315bf17fbdeb3ec0-40860723',
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
    'listprovider' => 0,
    'entry' => 0,
    'tpl_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5bf17fbdef8841_96477959',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bf17fbdef8841_96477959')) {function content_5bf17fbdef8841_96477959($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

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

				<div class="panel panel-flat">
                    <div class="form-group panel-body no-padding-bottom">
                        
                    <div class="form-group">

                        <label for="provider">Produk:</label>
                        <select class="form-control" name="provider">
                            <option value="" <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true&&$_smarty_tpl->tpl_vars['data']->value[0]['provider']=='') {?> selected="selected" <?php }?>>-- Pilih Produk --</option>                                        
                            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listprovider']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['kode'];?>
" <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true&&$_smarty_tpl->tpl_vars['entry']->value['kode']==$_smarty_tpl->tpl_vars['data']->value[0]['provider']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['entry']->value['kode'];?>
</option>                                        
                            <?php } ?>
                        </select>

                    </div>

                    

                    <div class="form-group">
                        <label for="provider_sub">Paket:</label>
                        <select class="form-control" name="provider_sub">
                            <option value="" <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true&&$_smarty_tpl->tpl_vars['data']->value[0]['provider_sub']=='') {?> selected="selected" <?php }?>>-- Pilih Paket --</option>                                        
                            <option value="REGULER" <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true&&$_smarty_tpl->tpl_vars['data']->value[0]['provider_sub']=="REGULER") {?> selected="selected" <?php }?>>REGULER</option>                                        
                            <option value="INTERNET" <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true&&$_smarty_tpl->tpl_vars['data']->value[0]['provider_sub']=="INTERNET") {?> selected="selected" <?php }?>>INTERNET</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="kode">Kode Transaksi:</label>
                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['code'];
}?>" class="form-control" name="code" placeholder="" />
                    </div>

                    <div class="form-group">
                        <label for="description">Keterangan:</label>
                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['description'];
}?>" class="form-control" name="description" placeholder="" />
                    </div>
                    

                    <div class="form-group">
                        <label for="price">Harga Beli:</label>
                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['price'];
} else { ?>0<?php }?>" class="form-control harga" name="price" placeholder="" />
                    </div>

                    <div class="form-group">
                        <label for="jual">Harga Jual:</label>
                        <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {
echo $_smarty_tpl->tpl_vars['data']->value[0]['jual'];
} else { ?>0<?php }?>" class="form-control harga" name="jual" placeholder="" />
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
<!-- Page scripts -->

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/bootstrap-fileinput/js/fileinput.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/js/jquery.input.formatter.js"><?php echo '</script'; ?>
>  
<!-- /page scripts -->
    <?php echo '<script'; ?>
 type="text/javascript">

        

        $(function () {           

            $("input.harga").formatInput();

            var isEdit = <?php if ($_smarty_tpl->tpl_vars['isEdit']->value==true) {?>true<?php } else { ?>false<?php }?>;

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



            //var is_delete_gambar = false;

            $('#btn_simpan').click(function() {            

                var data = new FormData();

                data.append('id', isEdit?'<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['id'];?>
':'');
                data.append('provider', $('[name=provider]').val());
                data.append('provider_sub', $('[name=provider_sub]').val());
                data.append('code', $('[name=code]').val());
                data.append('description', $('[name=description]').val());
                data.append('price', ($('[name=price]').val()).replace(/\,/g, ''));
                data.append('jual', ($('[name=jual]').val()).replace(/\,/g, ''));
                
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
