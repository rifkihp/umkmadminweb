<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-01-22 11:27:20
         compiled from "D:\www\laundry\templates\back-end\penguin\includes\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:16655211065e27cf284670c3-25303683%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '763f5af9b6df3d65c9196da2549ff020b926ea65' => 
    array (
      0 => 'D:\\www\\laundry\\templates\\back-end\\penguin\\includes\\footer.html',
      1 => 1544657450,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16655211065e27cf284670c3-25303683',
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
  'unifunc' => 'content_5e27cf2846b911_02864575',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e27cf2846b911_02864575')) {function content_5e27cf2846b911_02864575($_smarty_tpl) {?><footer class="footer-container">
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
