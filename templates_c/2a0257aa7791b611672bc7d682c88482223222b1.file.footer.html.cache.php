<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-06-17 06:37:38
         compiled from "/home/u6060452/public_html/bekamonline/templates/back-end/penguin/includes/footer.html" */ ?>
<?php /*%%SmartyHeaderCode:19890856145ee957c27ec404-75378516%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a0257aa7791b611672bc7d682c88482223222b1' => 
    array (
      0 => '/home/u6060452/public_html/bekamonline/templates/back-end/penguin/includes/footer.html',
      1 => 1592350430,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19890856145ee957c27ec404-75378516',
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
  'unifunc' => 'content_5ee957c27eeda1_77348324',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee957c27eeda1_77348324')) {function content_5ee957c27eeda1_77348324($_smarty_tpl) {?><footer class="footer-container">
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
