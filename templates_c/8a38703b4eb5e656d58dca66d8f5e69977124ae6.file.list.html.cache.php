<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-06-17 06:37:44
         compiled from "../../templates/back-end/penguin/mitra/list.html" */ ?>
<?php /*%%SmartyHeaderCode:7187651335ee957c8075a67-32053576%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a38703b4eb5e656d58dca66d8f5e69977124ae6' => 
    array (
      0 => '../../templates/back-end/penguin/mitra/list.html',
      1 => 1592350419,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7187651335ee957c8075a67-32053576',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'adminweburl' => 0,
    'sub_title' => 0,
    'array_akses' => 0,
    'query' => 0,
    'listdetail' => 0,
    'entry' => 0,
    'limitpage' => 0,
    'currentpage' => 0,
    'no' => 0,
    'totalpage' => 0,
    'frompage' => 0,
    'untilpage' => 0,
    'item' => 0,
    'tpl_dir' => 0,
    'alert_success' => 0,
    'alert_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ee957c811bb79_27984960',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee957c811bb79_27984960')) {function content_5ee957c811bb79_27984960($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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
				<div class="panel panel-flat">
					<div class="panel-body no-padding-bottom">
						<div class="form-group">
							<?php if (in_array('E',$_smarty_tpl->tpl_vars['array_akses']->value)) {?>
								<div id='btn_aktif' class="btn btn-success disabled">Aktif</div>
								<div id='btn_non_aktif' class="btn btn-danger disabled">Non Aktif</div>
							<?php }?>
							<?php if (in_array('T',$_smarty_tpl->tpl_vars['array_akses']->value)) {?><div id='btn_add' class="btn btn-primary">Baru</div><?php }?>
							<?php if (in_array('E',$_smarty_tpl->tpl_vars['array_akses']->value)) {?><div id='btn_edit' class="btn btn-success disabled">Edit</div><?php }?>
							<?php if (in_array('H',$_smarty_tpl->tpl_vars['array_akses']->value)) {?><div id='btn_delete' class="btn btn-danger disabled">Hapus</div><?php }?>
						</div>
						<div class="form-group">
							<table style="width: 100%;">
								<tr>
									<td width="20%" style="padding: 8px;"><label>Keyword Pencarian:</label></td>
									<td width="80%">
										<table>
											<tr>
												<td width="100%"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
" class="form-control" name="query" id="query" placeholder="Masukan kata kunci pencarian..." /></td>
												<td width="5px">&nbsp;</td> 
												<td><div id="btn_cari" type="submit" class="btn btn-primary">Cari</div></td>
												<td width="5px">&nbsp;</td> 
												<td><a class="btn btn-default" href="list.php">Reset</a></td>  
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</div>
					</div>
					
					<div class="table-responsive">
						<table class="table table-togglable table-hover">
                                <thead>
                                    <tr>
                                        <th width="1%" class="no-sort"><input type="checkbox" id="select_all"  /></th>
                                        <th data-toggle="false"  style="width: 1% !important;"><div style="text-align: center;">No.</div></th>
                                        <th data-toggle="false" width="10%"><div style="text-align: left;">Nama</div></th>
                                        <th data-hide="phone" width="15%"><div style="text-align: center;">Email</div></th>
                                        <th data-hide="phone" width="10%"><div style="text-align: center;">Username</div></th>
                                        <th data-hide="phone" width="25%"><div style="text-align: center;">Alamat</div></th>
                                        <th data-toggle="false" width="5%"><div style="text-align: center;">Status</div></th>
                                        <th data-hide="phone" width="5%"><div style="text-align: center;">Aksi</div></th>
                                    </tr>

                                </thead>
									<tbody>

                                    <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable(1, null, 0);?>

                                    <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listdetail']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>                                    
                                        <tr id="baris_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
">
                                            <td align="center"><input type="checkbox" id_select="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" name="select_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="select" /></td>
                                            <td align="center"><?php echo $_smarty_tpl->tpl_vars['limitpage']->value*($_smarty_tpl->tpl_vars['currentpage']->value-1)+$_smarty_tpl->tpl_vars['no']->value;?>
</td>
                                            <td align="left"><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
</td>
                                            <td align="left"><?php echo $_smarty_tpl->tpl_vars['entry']->value['email'];?>
</td>
                                            <td align="left"><?php echo $_smarty_tpl->tpl_vars['entry']->value['username'];?>
</td>
                                            <td align="left"><?php echo $_smarty_tpl->tpl_vars['entry']->value['alamat'];?>
<br />No. HP: <?php echo $_smarty_tpl->tpl_vars['entry']->value['phone'];?>
</td>
                                        	<td align="center"><span style="font-weight: bold; color: <?php if ($_smarty_tpl->tpl_vars['entry']->value['aktif']==1) {?>green<?php } else { ?>red<?php }?>;"><?php if ($_smarty_tpl->tpl_vars['entry']->value['aktif']==1) {?>Aktif<?php } else { ?>Tidak Aktif<?php }?></span></td>
                                            <td><div style="text-align: center;  white-space: nowrap;">
												<?php if (in_array('E',$_smarty_tpl->tpl_vars['array_akses']->value)) {?><div id_select="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="btn btn-success edit">Edit</div><?php }?>
												<?php if (in_array('H',$_smarty_tpl->tpl_vars['array_akses']->value)) {?><div id_select="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="btn btn-danger hapus">Hapus</div><?php }?>
											</div></td>            
                                        </tr>
                                        <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>  
                                    <?php } ?>

                                </tbody>

                                <?php if ($_smarty_tpl->tpl_vars['totalpage']->value>1) {?>
                                <tfoot><tr><th colspan="8">
                                    <div style="text-align: center;">
                                        <?php if ($_smarty_tpl->tpl_vars['currentpage']->value>1) {?>                                
                                            <a class="btn btn-default" href="list.php?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value-1;
if ($_smarty_tpl->tpl_vars['query']->value!='') {?>&query=<?php echo $_smarty_tpl->tpl_vars['query']->value;
}?>">&larr; Prev</a>
                                        <?php }?>

                                        <?php $_smarty_tpl->tpl_vars["item"] = new Smarty_variable($_smarty_tpl->tpl_vars['frompage']->value, null, 0);?>
                                        <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['untilpage']->value+1 - ($_smarty_tpl->tpl_vars['frompage']->value) : $_smarty_tpl->tpl_vars['frompage']->value-($_smarty_tpl->tpl_vars['untilpage']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = $_smarty_tpl->tpl_vars['frompage']->value, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                                            <?php if ($_smarty_tpl->tpl_vars['item']->value==$_smarty_tpl->tpl_vars['currentpage']->value) {?>
                                                <span class="btn btn-info"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</span>
                                            <?php } else { ?>
                                                <a class="btn btn-default" href="list.php?page=<?php echo $_smarty_tpl->tpl_vars['item']->value;
if ($_smarty_tpl->tpl_vars['query']->value!='') {?>&query=<?php echo $_smarty_tpl->tpl_vars['query']->value;
}?>"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a>
                                            <?php }?>
                                            <?php $_smarty_tpl->tpl_vars["item"] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value+1, null, 0);?>                                
                                        <?php }} ?>
                                        <?php if ($_smarty_tpl->tpl_vars['totalpage']->value>$_smarty_tpl->tpl_vars['currentpage']->value) {?>                                
                                            <a class="btn btn-default" href="list.php?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value+1;
if ($_smarty_tpl->tpl_vars['query']->value!='') {?>&query=<?php echo $_smarty_tpl->tpl_vars['query']->value;
}?>">Next &rarr;</a>
                                        <?php }?>                                
                                    </div>  
                            </th></tr></tfoot>
                            <?php }?>
						</table>
					</div>
				</div>				
			</div>
	
		<!--Footer -->
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

		<!--/Footer-->
		
	</section>
	<!--/Page Container-->

<a id="scrollTop" href="tables_responsive.htm#top"><i class="icon-arrow-up12"></i></a>	

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
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/tables/footable.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/js/pages/tables_responsive.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/js/jquery-ui/jquery-ui-1.10.3.custom.min.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/blitzer/jquery-ui.css" type="text/css" />

<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/css/loadmask.css" rel="stylesheet" />
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/js/jquery.loadmask.min.js"><?php echo '</script'; ?>
>



    
<!-- /page scripts -->
    <?php echo '<script'; ?>
 type="text/javascript">

        $(function () {

            var delete_selected = "";
            $( "#btn_aktif" ).click(function() {
                updateStatus(delete_selected, 1);
            });

            $( "#btn_non_aktif" ).click(function() {
                updateStatus(delete_selected, 0);
            });
            
            $( "#btn_add" ).click(function() {
                window.location='add.php';
            });
            
            $( "#btn_edit" ).click(function() {
                window.location='edit.php?id='+delete_selected;
            });
            
            $( "#btn_delete" ).click(function() {
                prosesDelete(delete_selected);
            });

            $( ".hapus" ).click(function() {
				var id = this.getAttribute('id_select');
				prosesDelete(id);
			});

			$( ".edit" ).click(function() {
				var id = this.getAttribute('id_select');
				window.location='edit.php?id='+id;
			});
            
            $( "#btn_cari" ).click(function() {
                var query = $( "#query" ).val();
                window.location='list.php'+(query.length>0?'?query='+query:'');
            });

            $( "#select_all" ).change(function() {
                var is_checked = $( "#select_all" ).is(':checked');
                var element = $( ".select" );
                var lengh = element.size();
                delete_selected = '';

                for(var i=0; i<lengh; i++) {
                    var id = element[i].getAttribute('id_select');
                    var nama = element[i].getAttribute('name');
                    $('[name='+nama+']').prop('checked', is_checked);                    
                    if(is_checked) delete_selected+=(delete_selected==''?'':',')+(is_checked?id:"");
                }

                setButton();
            });

            $( ".select" ).change(function() {
                var id = this.getAttribute('id_select');
                var nama = this.getAttribute('name');
                var is_checked = $( '[name='+nama+']').is(':checked');
                var temps = delete_selected.split(',');
                delete_selected='';

                for(var key in temps) {
                    if(temps[key]!=id) delete_selected+=(delete_selected.length>0?",":"")+temps[key];
                }

                delete_selected+=(delete_selected.length>0?",":"")+(is_checked?id:""); 

                setButton();

            });

            function setButton() {

                var temp = new Array();
                if(delete_selected.length>0) temp = delete_selected.split(',');                
                $( "#btn_aktif" ).removeClass('disabled').addClass(temp.length>0?'':'disabled');
                $( "#btn_non_aktif" ).removeClass('disabled').addClass(temp.length>0?'':'disabled');
                $( "#btn_edit" ).removeClass('disabled').addClass(temp.length==1?'':'disabled');
                $( "#btn_delete" ).removeClass('disabled').addClass(temp.length>0?'':'disabled');
            }

            function setMessage(type, message) {
                $('#alert_'+type+' .alert').text(message);
                $('#alert_'+type).show('slow');
                setTimeout(function() {
                    $('#alert_'+type).hide('slow');
                }, 5000);
                $("body, html").animate({ 
                    scrollTop: $('#wrapper').offset().top 
                }, 600);
            }

            function prosesDelete(id) {

                $('<div></div>').appendTo('body')
                .html('<div>Yakin ingin menghapus data?</div>')
                .dialog({
                    modal: true,
                    title: 'Konfirmasi Penghapusan',
                    zIndex: 10000,
                    autoOpen: true,
                    width: 'auto',
                    resizable: false,
                    buttons: {
                        Yes: function () {
                            $('#detail').mask('Hapus...');
                            $.ajax({
                                url: 'delete.php',
                                type: 'POST',
                                dataType: 'json',
                                data: { id: id },
                                success: function(data, textStatus, jqXHR) {
                                    if(data['success']) {
                                        window.location='list.php<?php if ($_smarty_tpl->tpl_vars['query']->value!='') {?>?query=<?php echo $_smarty_tpl->tpl_vars['query']->value;
}?>';
                                    } else {
                                        $('#detail').unmask();
                                        setMessage('error', data['message']);
                                    }
                                },

                                error: function(jqXHR, textStatus, errorThrown) {
                                    $('#detail').unmask();
                                    setMessage('error', 'Terjadi kesalahan system.');
                                }
                            });
                            $(this).dialog("close");
                        },

                        No: function () {
                            //doFunctionForNo();
                            $(this).dialog("close");
                        }
                    },

                    close: function (event, ui) {
                        $(this).remove();
                    }
                });                
            }

            function updateStatus(id, status) {

                $('<div></div>').appendTo('body')
                .html('<div>Yakin ingin merubah status?</div>')
                .dialog({
                    modal: true,
                    title: 'Konfirmasi',
                    zIndex: 10000,
                    autoOpen: true,
                    width: 'auto',
                    resizable: false,
                    buttons: {
                        Yes: function () {
                            $('#detail').mask('Update...');
                            $.ajax({
                                url: 'update.php',
                                type: 'POST',
                                dataType: 'json',
                                data: { id: id, status: status },
                                success: function(data, textStatus, jqXHR) {
                                    if(data['success']) {
                                        window.location='list.php<?php if ($_smarty_tpl->tpl_vars['query']->value!='') {?>?query=<?php echo $_smarty_tpl->tpl_vars['query']->value;
}?>';
                                    } else {
                                        $('#detail').unmask();
                                        setMessage('error', data['message']);
                                    }
                                },

                                error: function(jqXHR, textStatus, errorThrown) {
                                    $('#detail').unmask();
                                    setMessage('error', 'Terjadi kesalahan system.');
                                }
                            });
                            $(this).dialog("close");
                        },

                        No: function () {
                            $(this).dialog("close");
                        }
                    },

                    close: function (event, ui) {
                        $(this).remove();
                    }
                });
            }

            <?php if ($_smarty_tpl->tpl_vars['alert_success']->value!='') {?>setMessage('success', '<?php echo $_smarty_tpl->tpl_vars['alert_success']->value;?>
');<?php }?>        
            <?php if ($_smarty_tpl->tpl_vars['alert_error']->value!='') {?>setMessage('error', '<?php echo $_smarty_tpl->tpl_vars['alert_error']->value;?>
');<?php }?> 
        });

    <?php echo '</script'; ?>
>
</body><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/footer_js.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

</html><?php }} ?>
