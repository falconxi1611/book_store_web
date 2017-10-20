<?php /* Smarty version Smarty-3.1.14, created on 2017-07-30 09:43:34
         compiled from "views\user\v_user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17604597d9d6eb2a118-36149200%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '973eb21da40656c12bb046435d90b5e37081091a' => 
    array (
      0 => 'views\\user\\v_user.tpl',
      1 => 1501407813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17604597d9d6eb2a118-36149200',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_597d9d6ec2dd34_71796101',
  'variables' => 
  array (
    'tieude' => 0,
    'msg' => 0,
    'users' => 0,
    'user' => 0,
    'loai_users' => 0,
    'loai' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597d9d6ec2dd34_71796101')) {function content_597d9d6ec2dd34_71796101($_smarty_tpl) {?><script>
function Hoi_xoa(id)
{
	if(confirm("Bạn chắc chắn muốn xóa người dùng hiện hành?"))
	{
		window.location='xoauser.php?id=' + id;	
	}	
}
</script>
<div class="content-box-header">
  <h3><?php echo $_smarty_tpl->tpl_vars['tieude']->value;?>
</h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <h3 style="text-align:center; color:red"><?php if (isset($_smarty_tpl->tpl_vars['msg']->value)){?><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
<?php }?> </h3>
    <table>
      <thead>
        <tr>
          <th width="63">ID</th>
          <th width="118">Tài khoản</th>
          <th width="124">Loại người dùng</th>
          <th>Họ Tên</th>
          <th>Email</th>
          <th>Địa chỉ</th>
          <th>Điện thoại</th>
          <th width="162">&nbsp;</th>
        </tr>
      </thead>
      <tfoot>
          <tr>
            <td colspan="9">
            <div class="clear"></div></td>
          </tr>
        </tfoot>
      <tbody>
        
        <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
        <tr>
          
          <td><?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
</td>
          <td><a href="user.php?id=<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" title="Edit"><?php echo $_smarty_tpl->tpl_vars['user']->value->tai_khoan;?>
</a></td>
          <?php  $_smarty_tpl->tpl_vars['loai'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['loai']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['loai_users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['loai']->key => $_smarty_tpl->tpl_vars['loai']->value){
$_smarty_tpl->tpl_vars['loai']->_loop = true;
?>
          <?php if ($_smarty_tpl->tpl_vars['user']->value->id_loai_user==$_smarty_tpl->tpl_vars['loai']->value->id){?>
          <td><?php echo $_smarty_tpl->tpl_vars['loai']->value->ten_loai_nguoi_dung;?>
</td>
          <?php }?>
          <?php } ?>
          <td width="147"><?php echo $_smarty_tpl->tpl_vars['user']->value->ho_ten;?>
</td>
          <td width="147"><?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</td>
          <td width="147"><?php echo $_smarty_tpl->tpl_vars['user']->value->dia_chi;?>
</td>
          <td width="147"><?php echo $_smarty_tpl->tpl_vars['user']->value->dien_thoai;?>
</td>
          <td><!-- Icons --> 
            <a href="suauser.php?id=<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" title="Edit" >
            <img src="public/layout/resources/images/icons/pencil.png" alt="Edit" />
            </a> 
            <a href="javascript:Hoi_xoa(<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
)" title="Delete"> 
            <img src="public/layout/resources/images/icons/cross.png" alt="Delete" />
            </a>
		</td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
   
  </div>
  
</div>
<?php }} ?>