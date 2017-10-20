<?php /* Smarty version Smarty-3.1.14, created on 2017-07-30 08:48:29
         compiled from "Smarty\templates\pageHead.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3395597d9d5db8b371-28226201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '684f851d2c2c08d0c4d768caa03615f245c68f59' => 
    array (
      0 => 'Smarty\\templates\\pageHead.tpl',
      1 => 1501142664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3395597d9d5db8b371-28226201',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_597d9d5dbec2d1_38399913',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597d9d5dbec2d1_38399913')) {function content_597d9d5dbec2d1_38399913($_smarty_tpl) {?> <h2>Hệ thống Quản trị Nhà Sách FT-Store</h2>
			<p id="page-intro">Chào <?php echo $_SESSION['fullname'];?>
</p>
			<ul class="shortcut-buttons-set">
				
				<li><a class="shortcut-button" href="themtintuc.php"><span>
					<img src="public/layout/resources/images/icons/pencil_48.png" alt="icon" /><br />
					Thêm tin tức
				</span></a></li>
				
				<li><a class="shortcut-button" href="#"><span>
					<img src="public/layout/resources/images/icons/paper_content_pencil_48.png" alt="icon" /><br />
					New Page
				</span></a></li>
				
				<li><a class="shortcut-button" href="#"><span>
					<img src="public/layout/resources/images/icons/image_add_48.png" alt="icon" /><br />
					Upload an Image
				</span></a></li>
				
				<li><a class="shortcut-button" href="#"><span>
					<img src="public/layout/resources/images/icons/clock_48.png" alt="icon" /><br />
					Add an Event
				</span></a></li>
				
				<li><a class="shortcut-button" href="#messages" rel="modal"><span>
					<img src="public/layout/resources/images/icons/comment_48.png" alt="icon" /><br />
					Open Modal
				</span></a></li>
				
			</ul><!-- End .shortcut-buttons-set -->
			
			<?php }} ?>