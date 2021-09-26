<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-06-26 02:45:42
         compiled from "D:\www\bekamonline\templates\back-end\penguin\includes\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:15539855735ef4fee62903c9-27055625%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a86ea33dfb5cde7af5ad0d6d4fb488beb7abdd4' => 
    array (
      0 => 'D:\\www\\bekamonline\\templates\\back-end\\penguin\\includes\\footer.html',
      1 => 1592350430,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15539855735ef4fee62903c9-27055625',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'homeurl' => 0,
    'appname' => 0,
    'appyear' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ef4fee62a5768_98353875',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ef4fee62a5768_98353875')) {function content_5ef4fee62a5768_98353875($_smarty_tpl) {?><footer class="footer-container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="footer-left">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['appname']->value;?>
</a>&nbsp;<?php echo $_smarty_tpl->tpl_vars['appyear']->value;?>

                </div>
            </div>				
        </div>
    </div>
</footer><?php }} ?>
