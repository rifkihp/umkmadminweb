<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-07-20 10:07:03
         compiled from "D:\www\sogiadminweb\templates\back-end\penguin\includes\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:16555923635f150a571d0ad7-87922866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afb03cb1dbd5219937dc43f47bc0dfe72c957259' => 
    array (
      0 => 'D:\\www\\sogiadminweb\\templates\\back-end\\penguin\\includes\\footer.html',
      1 => 1592350430,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16555923635f150a571d0ad7-87922866',
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
  'unifunc' => 'content_5f150a571dfda5_99658314',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f150a571dfda5_99658314')) {function content_5f150a571dfda5_99658314($_smarty_tpl) {?><footer class="footer-container">
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
