<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-04-20 13:22:13
         compiled from "..\..\templates\back-end\penguin\pengaturan_aplikasi\list.html" */ ?>
<?php /*%%SmartyHeaderCode:12513802085e9d3f954650d4-55250121%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b019f17522411e1335ab8f7681664e2287f21dd5' => 
    array (
      0 => '..\\..\\templates\\back-end\\penguin\\pengaturan_aplikasi\\list.html',
      1 => 1538456116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12513802085e9d3f954650d4-55250121',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'adminweburl' => 0,
    'sub_title' => 0,
    'tab' => 0,
    'tpl_dir' => 0,
    'array_akses' => 0,
    'data' => 0,
    'query' => 0,
    'listdetail' => 0,
    'entry' => 0,
    'limitpage' => 0,
    'currentpage' => 0,
    'no' => 0,
    'homeurl' => 0,
    'totalpage' => 0,
    'frompage' => 0,
    'untilpage' => 0,
    'item' => 0,
    'alert_success' => 0,
    'alert_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e9d3f9552db22_03900045',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e9d3f9552db22_03900045')) {function content_5e9d3f9552db22_03900045($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

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
/pengaturan_aplikasi/"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
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
                        <li<?php if ($_smarty_tpl->tpl_vars['tab']->value=="general1") {?> class="active"<?php }?>>
                            <a href="#general1" data-toggle="tab"><b>GENERAL 1</b></a>
                        </li>                                 
                        <li<?php if ($_smarty_tpl->tpl_vars['tab']->value=="general2") {?> class="active"<?php }?>>
                            <a href="#general2" data-toggle="tab"><b>GENERAL 2</b></a>
                        </li>                                
                        <li<?php if ($_smarty_tpl->tpl_vars['tab']->value=="shortcut") {?> class="active"<?php }?>>
                            <a href="#shortcut" data-toggle="tab"><b>SHORTCUT</b></a>
                        </li>                                
                        <li<?php if ($_smarty_tpl->tpl_vars['tab']->value=="updateapp") {?> class="active"<?php }?>>
                            <a href="#updateapp" data-toggle="tab"><b>UPDATE APP</b></a>
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
                    <div class="tab-pane fade<?php if ($_smarty_tpl->tpl_vars['tab']->value=="general1") {?> active in<?php }?>" id="general1">
                        
                        <div class="form-group">
                            <label for="admin">Avatar:</label>                        
                            <style type="text/css">
                                .preview-avatar {
                                    border:1px solid #a6bac4;
                                    width: 180px;
                                    height: 180px;
                                    cursor: move;
                                }

                                .post-img-avatar {
                                    width: 180px;
                                    height: 180px;
                                }
                            </style>
                            <div class="image-editor-avatar post-img-avatar">
                                <input id="fileupload_avatar" type="file" name="fileupload_avatar" style="display:none;" class="cropit-image-input" />
                                <div class="cropit-image-preview preview-avatar"></div>
                            </div>
                            <label>Ukuran 180 X 180 px</label><br />   
                            <div id="upload_avatar" class="btn btn-primary">Upload</div>
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
                        
                        <div class="form-group">
                            <label for="bg">Splash Screen:</label>                        
                            <style type="text/css">
                                .preview-bg {
                                    border:1px solid #a6bac4;
                                    width: 320px;
                                    height: 569px;
                                    cursor: move;
                                }

                                .post-img-bg {
                                    width: 320px;
                                    height: 569px;
                                }
                            </style>

                            <div class="image-editor-bg post-img-bg">
                                <input id="fileupload_bg" type="file" name="fileupload_bg" style="display:none;" class="cropit-image-input" />
                                <div class="cropit-image-preview preview-bg"></div>
                            </div>

                            <label>Ukuran 320 X 569 px</label><br />   
                            <div id="upload_bg" class="btn btn-primary">Upload</div>
                        </div>
                        
                        <div class="form-group">&nbsp;</div>

                        <div class="form-group">
                            <div id="i_loading_general1" class="G-btn-animation" style="display: none;"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/img/loading.gif" /></div>                  
                            <?php if (in_array('E',$_smarty_tpl->tpl_vars['array_akses']->value)) {?><div id="btn_simpan_general1" class="btn btn-primary">Update</div><?php }?>
                        </div>
                        
                    </div>
                    
                    <div class="tab-pane fade<?php if ($_smarty_tpl->tpl_vars['tab']->value=="general2") {?> active in<?php }?>" id="general2">
                        
                        <div class="form-group">
                            <label for="landing_page">Landing Page:</label>
                            <table>
                                <tr>
                                    <td>
                                        <label><input type="radio" name="landing_page" value="0" <?php if ($_smarty_tpl->tpl_vars['data']->value[0]['landing_page']==0) {?>checked<?php }?> />&nbsp;&nbsp;<span class="label bg-blue" style="font-size: 9pt;">BERANDA</span>&nbsp;&nbsp;</label>
                                        <label><input type="radio" name="landing_page" value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value[0]['landing_page']==1) {?>checked<?php }?> />&nbsp;&nbsp;<span class="label bg-blue" style="font-size: 9pt;">LOGIN</span>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <div class="form-group">
                            <label for="tampilkan_shortcut">Tampilkan Shortcut:</label>
                            <table>
                                <tr>
                                    <td>
                                        <label><input type="radio" name="tampilkan_shortcut" value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value[0]['tampilkan_shortcut']==1) {?>checked<?php }?> />&nbsp;&nbsp;<span class="label bg-blue" style="font-size: 9pt;">YA</span>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                        <label><input type="radio" name="tampilkan_shortcut" value="0" <?php if ($_smarty_tpl->tpl_vars['data']->value[0]['tampilkan_shortcut']==0) {?>checked<?php }?> />&nbsp;&nbsp;<span class="label bg-blue" style="font-size: 9pt;">TIDAK</span>&nbsp;&nbsp;</label>
                                    </td>
                                </tr>
                            </table>        
                        </div>

                        <div class="form-group">
                            <label for="tampilkan_kategori">Tampilkan Kategori:</label>
                            <table>
                                <tr>
                                    <td>
                                        <label><input type="radio" name="tampilkan_kategori" value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value[0]['tampilkan_kategori']==1) {?>checked<?php }?> />&nbsp;&nbsp;<span class="label bg-blue" style="font-size: 9pt;">YA</span>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                        <label><input type="radio" name="tampilkan_kategori" value="0" <?php if ($_smarty_tpl->tpl_vars['data']->value[0]['tampilkan_kategori']==0) {?>checked<?php }?> />&nbsp;&nbsp;<span class="label bg-blue" style="font-size: 9pt;">TIDAK</span>&nbsp;&nbsp;</label>
                                    </td>
                                </tr>
                            </table> 
                        </div>


                        <div class="form-group">
                            <label for="tampilkan_induk_kategori">Tampilkan Induk Kategori:</label>
                            <table>
                                <tr>
                                    <td>
                                        <label><input type="radio" name="tampilkan_induk_kategori" value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value[0]['tampilkan_induk_kategori']==1) {?>checked<?php }?> />&nbsp;&nbsp;<span class="label bg-blue" style="font-size: 9pt;">YA</span>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                        <label><input type="radio" name="tampilkan_induk_kategori" value="0" <?php if ($_smarty_tpl->tpl_vars['data']->value[0]['tampilkan_induk_kategori']==0) {?>checked<?php }?> />&nbsp;&nbsp;<span class="label bg-blue" style="font-size: 9pt;">TIDAK</span>&nbsp;&nbsp;</label>
                                    </td>
                                </tr>
                            </table> 
                        </div>

                        <div class="form-group">&nbsp;</div>

                        <div class="form-group">
                            <div id="i_loading_general2" class="G-btn-animation" style="display: none;"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/img/loading.gif" /></div>                  
                            <?php if (in_array('E',$_smarty_tpl->tpl_vars['array_akses']->value)) {?><div id="btn_simpan_general2" class="btn btn-primary">Update</div><?php }?>
                        </div>
                    </div>
                    
                    <div class="tab-pane fade<?php if ($_smarty_tpl->tpl_vars['tab']->value=="shortcut") {?> active in<?php }?>" id="shortcut">
                        
                        <div class="panel-body no-padding-bottom">
                            <div class="input-group">
                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
" class="form-control" name="query" id="query" placeholder="Masukan kata kunci pencarian..." />
                                <span class="input-group-btn"><div id="btn_cari" type="submit" class="btn btn-default">Cari</div>
                                <a class="btn btn-default" href="list.php?tab=shortcut">Reset</a></span>                                                  
                            </div>

                            <div class="form-group"></div>

                            <div class="form-group">
                                <?php if (in_array('T',$_smarty_tpl->tpl_vars['array_akses']->value)) {?><div id='btn_add' class="btn btn-primary">Baru</div><?php }?>
                                <?php if (in_array('E',$_smarty_tpl->tpl_vars['array_akses']->value)) {?><div id='btn_edit' class="btn btn-success disabled">Edit</div><?php }?>
                                <?php if (in_array('H',$_smarty_tpl->tpl_vars['array_akses']->value)) {?><div id='btn_delete' class="btn btn-danger disabled">Hapus</div><?php }?>
                            </div>
                        </div>
			
                        <div class="form-group"></div>
                        
                        <div class="table-responsive">
                            <table class="table datatable table-striped">
                                <thead>
                                    <tr>
                                        <th width="1%"><input type="checkbox" id="select_all" /></th>
                                        <th width="1%"><div style="text-align: center;">No.</div></th>
                                        <th width="10%"><div style="text-align: center;">Logo</div></th>
                                        <th width="30%"><div style="text-align: left;">Nama Shortcut</div></th>
                                        <th width="30%"><div style="text-align: left;">Tujuan Shortcut</div></th>
                                        <th width="10%"><div style="text-align: left;">Aksi</div></th>
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
                                            <td align="center">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/shortcut/<?php if ($_smarty_tpl->tpl_vars['entry']->value['icon']!='') {
echo $_smarty_tpl->tpl_vars['entry']->value['icon'];
} else { ?>default.png<?php }?>" width="35" />
                                            </td>
                                            <td align="left"><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
</td>
                                            <td align="left"><?php echo $_smarty_tpl->tpl_vars['entry']->value['direction'];?>
</td>
                                            <td>
                                                <div style="text-align: center;  white-space: nowrap;">
                                                    <?php if (in_array('E',$_smarty_tpl->tpl_vars['array_akses']->value)) {?><div id_select="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="btn btn-success edit">Edit</div><?php }?>
                                                    <?php if (in_array('H',$_smarty_tpl->tpl_vars['array_akses']->value)) {?><div id_select="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="btn btn-danger hapus">Hapus</div><?php }?>                                                         
                                                </div>
                                            </td>                                          
                                        </tr>
                                        <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>  
                                    <?php } ?>
                                </tbody>

                                <?php if ($_smarty_tpl->tpl_vars['totalpage']->value>1) {?>
                                    <tfoot>
                                        <tr>
                                            <th colspan="6">
                                                <div style="text-align: center;">
                                                    <?php if ($_smarty_tpl->tpl_vars['currentpage']->value>1) {?>                                
                                                        <a class="btn btn-default" href="list.php?tab=shortcut&page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value-1;
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
                                                            <a class="btn btn-default" href="list.php?tab=shortcut&page=<?php echo $_smarty_tpl->tpl_vars['item']->value;
if ($_smarty_tpl->tpl_vars['query']->value!='') {?>&query=<?php echo $_smarty_tpl->tpl_vars['query']->value;
}?>"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a>
                                                        <?php }?>
                                                        <?php $_smarty_tpl->tpl_vars["item"] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value+1, null, 0);?>                                
                                                    <?php }} ?>

                                                    <?php if ($_smarty_tpl->tpl_vars['totalpage']->value>$_smarty_tpl->tpl_vars['currentpage']->value) {?>                                
                                                        <a class="btn btn-default" href="list.php?tab=shortcut&page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value+1;
if ($_smarty_tpl->tpl_vars['query']->value!='') {?>&query=<?php echo $_smarty_tpl->tpl_vars['query']->value;
}?>">Next &rarr;</a>
                                                    <?php }?>                                
                                                </div>  
                                            </th>
                                        </tr>
                                    </tfoot>
                                <?php }?>
                            </table>
                        </div>
                    </div>
                    
                    <div class="tab-pane fade<?php if ($_smarty_tpl->tpl_vars['tab']->value=="updateapp") {?> active in<?php }?>" id="updateapp">
                        <div class="form-group">
                            <label for="app_ver_no">Nomer Versi Update:</label>
                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['app_ver_no'];?>
" class="form-control" name="app_ver_no" placeholder="" />
                        </div>

                        <div class="form-group">
                            <label for="app_ver_name">Nama Versi Update:</label>
                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['app_ver_name'];?>
" class="form-control" name="app_ver_name" placeholder="" />
                        </div> 
                         
                        <div class="form-group">
                            <label for="app_desc">Update Description:</label>
                            <textarea class="form-control" name="app_desc" style="height: 150px;" placeholder=""><?php echo $_smarty_tpl->tpl_vars['data']->value[0]['app_desc'];?>
</textarea>
                        </div>
                         
                        <div class="form-group">&nbsp;</div>

                        <div class="form-group">
                            <div id="i_loading_updateapp" class="G-btn-animation" style="display: none;"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/img/loading.gif" /></div>                  
                            <?php if (in_array('E',$_smarty_tpl->tpl_vars['array_akses']->value)) {?><div id="btn_simpan_updateapp" class="btn btn-primary">Update</div><?php }?>
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
        
        var setButton = function() {
            var temp = new Array();
            if(delete_selected.length>0) temp = delete_selected.split(',');                
            $( "#btn_edit" ).removeClass('disabled').addClass(temp.length==1?'':'disabled');
            $( "#btn_delete" ).removeClass('disabled').addClass(temp.length>0?'':'disabled');
        };

        var prosesDelete = function(id) {
            swal({
                title: 'Menghapus Data',
                text: 'Apakah Anda Yakin Akan Menghapus Record Data Ini?',
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus Sekarang!',
                cancelButtonText: 'Batal',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false
            }).then(function () {
                $.ajax({
                    url: 'delete.php',
                    type: 'POST',
                    dataType: 'json',
                    data: { id: id },
                    success: function(data, textStatus, jqXHR) {
                        
                        if(data['success']) {
                            window.location='list.php?tab=shortcut<?php if ($_smarty_tpl->tpl_vars['query']->value!='') {?>&query=<?php echo $_smarty_tpl->tpl_vars['query']->value;
}?>';
                        } else {
                            setMessage('error', data['message']);
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        setMessage('error', 'Terjadi kesalahan system.');
                    }
                }); 
            }, function (dismiss) {
                // dismiss can be 'cancel', 'overlay', 'close', 'timer'
                //if (dismiss === 'cancel') {
                    //swal('Cancelled', 'Record Data Batal Dihapus', 'error');
                //}
            });
        };

        var delete_selected = "";

        $( "#btn_add" ).click(function() {
            window.location='add.php';
        });

        $( "#btn_edit" ).click(function() {
            window.location='edit.php?id='+delete_selected;
        });

        $( "#btn_delete" ).click(function() {
            prosesDelete(delete_selected);
        });

        $( "#btn_cari" ).click(function() {
            var query = $( "#query" ).val();
            window.location='list.php?tab=shortcut'+(query.length>0?'&query='+query:'');
        });

        $( ".hapus" ).click(function() {                
            var id = this.getAttribute('id_select');
            prosesDelete(id);                
        });

        $( ".edit" ).click(function() {
            var id = this.getAttribute('id_select');
            window.location='edit.php?id='+id;
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
            
            
        
        $('#upload_avatar').click(function(){
            $('#fileupload_avatar').trigger('click'); 
            return false;
        });

        $('.image-editor-avatar').cropit({
            smallImage: 'stretch'<?php if ($_smarty_tpl->tpl_vars['data']->value[0]['avatar']!='') {?>,
            imageState: {
                src: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/umum/<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['avatar'];?>
',
            }<?php }?>
        });

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
            
        $('#upload_bg').click(function() {
            $('#fileupload_bg').trigger('click'); 
            return false;
        });

        $('.image-editor-bg').cropit({
          smallImage: 'stretch'<?php if ($_smarty_tpl->tpl_vars['data']->value[0]['bg']!='') {?>,
          imageState: {
            src: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/umum/<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['bg'];?>
',
          }<?php }?>
        });
        
        var landing_page = <?php echo $_smarty_tpl->tpl_vars['data']->value[0]['landing_page'];?>
;        
        $('input[name=landing_page]').on('ifChecked', function(event){
            landing_page = $(this).val();
            //alert("tampilkan_shortcut:" + tampilkan_shortcut);
        });

        var tampilkan_shortcut = <?php echo $_smarty_tpl->tpl_vars['data']->value[0]['tampilkan_shortcut'];?>
;        
        $('input[name=tampilkan_shortcut]').on('ifChecked', function(event){
            tampilkan_shortcut = $(this).val();
            //alert("tampilkan_shortcut:" + tampilkan_shortcut);
        });
        
        var tampilkan_kategori = <?php echo $_smarty_tpl->tpl_vars['data']->value[0]['tampilkan_kategori'];?>
;        
        $('input[name=tampilkan_kategori]').on('ifChecked', function(event){
            tampilkan_kategori = $(this).val();
            //alert("tampilkan_kategori:" + tampilkan_kategori);
        });

        var tampilkan_induk_kategori = <?php echo $_smarty_tpl->tpl_vars['data']->value[0]['tampilkan_induk_kategori'];?>
;        
        $('input[name=tampilkan_induk_kategori]').on('ifChecked', function(event){
            tampilkan_induk_kategori = $(this).val();
            //alert("tampilkan_induk_kategori:" + tampilkan_induk_kategori);
        });
        
        $('#btn_simpan_general1').click(function() {            

            var data = new FormData();
            var imageDataAvatar = $('.image-editor-avatar').cropit('export');
            data.append('filename_avatar', imageDataAvatar==undefined?'':imageDataAvatar);
            var imageDataLogo = $('.image-editor-logo').cropit('export');
            data.append('filename_logo', imageDataLogo==undefined?'':imageDataLogo);
            var imageDataBg = $('.image-editor-bg').cropit('export');
            data.append('filename_bg', imageDataBg==undefined?'':imageDataBg);
            
            setLoading(true, "general1");
            $.ajax({
                type: 'POST',
                url: 'updateGeneral1.php',
                data: data,
                cache: false,
                dataType: 'json',
                processData: false, // Don't process the files
                contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                success: function(data) {
                    setLoading(false, 'general1');
                    if(data['success']) {
                        setMessage('success', data['message']);  
                    } else {
                        setMessage('error', data['message']);                        
                    }
                }, 
                error: function() {
                    setLoading(false, 'general1');
                    setMessage('error', 'Kesalahan server. Mohon diulang kembali!');
                }
            }); 
        });
        
        $('#btn_simpan_general2').click(function() {            

            var data = new FormData();
            data.append('landing_page', landing_page);
            data.append('tampilkan_shortcut', tampilkan_shortcut);
            data.append('tampilkan_kategori', tampilkan_kategori);
            data.append('tampilkan_induk_kategori', tampilkan_induk_kategori);

            setLoading(true, "general2");
            $.ajax({
                type: 'POST',
                url: 'updateGeneral2.php',
                data: data,
                cache: false,
                dataType: 'json',
                processData: false, // Don't process the files
                contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                success: function(data) {
                    setLoading(false, 'general2');
                    if(data['success']) {
                        setMessage('success', data['message']);  
                    } else {
                        setMessage('error', data['message']);                        
                    }
                }, 
                error: function() {
                    setLoading(false, 'general2');
                    setMessage('error', 'Kesalahan server. Mohon diulang kembali!');
                }
            }); 
        });
        
        
        
        
        $('#btn_simpan_updateapp').click(function() {
            var data = new FormData();                
            data.append('app_ver_no', $('[name=app_ver_no]').val());
            data.append('app_desc', $('[name=app_desc]').val());
            data.append('app_ver_name', $('[name=app_ver_name]').val());

            setLoading(true, 'updateapp');
            $.ajax({
                type: 'POST',
                url: 'updateRealease.php',
                data: data,
                cache: false,
                dataType: 'json',
                processData: false, // Don't process the files
                contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                success: function(data) {
                    setLoading(false, 'updateapp');
                    if(data['success']) {
                        setMessage('success', data['message']);  
                    } else {
                        setMessage('error', data['message']);                        
                    }
                }, 

                error: function() {
                    setLoading(false, 'updateapp');
                    setErrorMessage('Kesalahan server. Mohon diulang kembali!');
                }
            }); 
        });
               
        
        <?php if ($_smarty_tpl->tpl_vars['alert_success']->value!='') {?>setMessage('success', '<?php echo $_smarty_tpl->tpl_vars['alert_success']->value;?>
');<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['alert_error']->value!='') {?>setMessage('error', '<?php echo $_smarty_tpl->tpl_vars['alert_error']->value;?>
');<?php }?> 
    });
<?php echo '</script'; ?>
>
</body><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/footer_js.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

</html><?php }} ?>
