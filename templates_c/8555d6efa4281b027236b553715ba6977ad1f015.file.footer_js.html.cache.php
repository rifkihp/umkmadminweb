<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-03-29 03:47:45
         compiled from "D:\www\laundry\templates\back-end\penguin\includes\footer_js.html" */ ?>
<?php /*%%SmartyHeaderCode:11609470245e7fb7f1be7b30-14095014%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8555d6efa4281b027236b553715ba6977ad1f015' => 
    array (
      0 => 'D:\\www\\laundry\\templates\\back-end\\penguin\\includes\\footer_js.html',
      1 => 1538456120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11609470245e7fb7f1be7b30-14095014',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_chatting' => 0,
    'id_head' => 0,
    'homeurl' => 0,
    'tpl_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e7fb7f1bf3280_22827100',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e7fb7f1bf3280_22827100')) {function content_5e7fb7f1bf3280_22827100($_smarty_tpl) {?>    <?php echo '<script'; ?>
 type="text/javascript">
        $( document ).ready(function() {
            var load_data_dashboard = function() {
                setTimeout(function() {
                    var data = new FormData();
                    data.append('last_id_order', $('[name=last_id_order]').val());
                    data.append('last_id_konfirmasi', $('[name=last_id_konfirmasi]').val());
                    data.append('last_id_pelanggan', $('[name=last_id_pelanggan]').val());
                
                    <?php if ($_smarty_tpl->tpl_vars['is_chatting']->value==true) {?>
                        data.append('id_head_komentar', '<?php echo $_smarty_tpl->tpl_vars['id_head']->value;?>
');
                        data.append('last_id_komentar', $('[name=last_id_komentar]').val());
                    <?php }?>
                        
                    $.ajax({
                        type: 'POST',
                        url: '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/store/notifDataStore.php',
                        data: data,
                        cache: false,
                        dataType: 'json',
                        processData: false, // Don't process the files
                        contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                        success: function(data) {

                            <?php if ($_smarty_tpl->tpl_vars['is_chatting']->value==true) {?>
                                if(data['data_komentar']) {
                                    var last_id_komentar = data['data_komentar']['last_id_komentar'];
                                    var list_komentar    = data['data_komentar']['list_new_komentar'];
                                    for(var key in list_komentar) {
                                        var message = list_komentar[key];        
                                        $( ".direct-chat-messages" ).append( '<div class="direct-chat-msg">' +
                                                '<div class="direct-chat-info clearfix">' +
                                            '<span class="direct-chat-name pull-right">'+message['nama']+'</span>' +
                                            '<span class="direct-chat-timestamp pull-left">'+message['tanggal_komentar']+'</span>' +
                                            '</div>' +
                                            '<img class="direct-chat-img" src="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/member/'+message['photo']+'" alt="">' +
                                            '<div class="direct-chat-text">' +
                                            message['komentar'] +
                                            '</div' +
                                            '</div>' 
                                        );
                                    }
                                    
                                    if(list_komentar.length>0) {
                                        $('#last_id_komentar').val(last_id_komentar);
                                        $('.direct-chat-messages').animate( { scrollTop: $('.direct-chat-messages').prop("scrollHeight") } , 500);
                                        $('embed').remove();
                                        $('body').append('<embed src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/assets/sound/filling_your_inbox.mp3" autostart="true" hidden="true" loop="false">');
                                        //alert('new '+ last_id_komentar);
                                    }
                                }                      
                            <?php }?>


                            if(data['success']) {
                                //BELUM LUNAS
                                $('#total_notif_belum_lunas').text(data['total_belum_lunas']);
                                if(data['total_belum_lunas']>0) {
                                    $('#total_notif_belum_lunas').show();
                                } else {
                                    $('#total_notif_belum_lunas').hide();
                                }
                                
                                //KONFIRMASI BAYAR
                                $('#total_notif_konfirmasi_bayar').text(data['total_konfirmasi_bayar']);
                                if(data['total_konfirmasi_bayar']>0) {
                                    $('#total_notif_konfirmasi_bayar').show();
                                } else {
                                    $('#total_notif_konfirmasi_bayar').hide();
                                }
                                
                                //PERLU KEMAS
                                $('#total_notif_perlu_kemas').text(data['total_perlu_kemas']);
                                if(data['total_perlu_kemas']>0) {
                                    $('#total_notif_perlu_kemas').show();
                                } else {
                                    $('#total_notif_perlu_kemas').hide();
                                }
                                
                                //PELANGGAN BARU
                                $('#total_notif_pelanggan_baru').text(data['total_pelanggan_baru']);
                                if(data['total_pelanggan_baru']>0) {
                                    $('#total_notif_pelanggan_baru').show();
                                } else {
                                    $('#total_notif_pelanggan_baru').hide();
                                }
                                
                                //PESAN BARU
                                $('#total_notif_pesan_baru').text(data['total_pesan_baru']);
                                if(data['total_pesan_baru']>0) {
                                    $('#total_notif_pesan_baru').show();
                                } else {
                                    $('#total_notif_pesan_baru').hide();
                                }
                            }        
                                
                                    
                            load_data_dashboard();
                        }, 
                        error: function() {
                            load_data_dashboard();
                        }
                    }); 
                }, 5000);
            };

            load_data_dashboard();
        });
    <?php echo '</script'; ?>
><?php }} ?>
