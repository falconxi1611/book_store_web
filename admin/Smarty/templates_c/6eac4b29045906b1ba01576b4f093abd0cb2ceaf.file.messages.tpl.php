<?php /* Smarty version Smarty-3.1.14, created on 2017-07-30 08:48:29
         compiled from "Smarty\templates\messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25330597d9d5daa4264-28905642%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6eac4b29045906b1ba01576b4f093abd0cb2ceaf' => 
    array (
      0 => 'Smarty\\templates\\messages.tpl',
      1 => 1418697632,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25330597d9d5daa4264-28905642',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_597d9d5dab7270_74489387',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597d9d5dab7270_74489387')) {function content_597d9d5dab7270_74489387($_smarty_tpl) {?><div id="messages" style="display: none"> <!-- Messages are shown when a link with these attributes are clicked: href="#messages" rel="modal"  -->
  
  <h3>3 Messages</h3>
  <p> <strong>17th May 2009</strong> by Admin<br />
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. <small><a href="#" class="remove-link" title="Remove message">Remove</a></small> </p>
  <p> <strong>2nd May 2009</strong> by Jane Doe<br />
    Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est. <small><a href="#" class="remove-link" title="Remove message">Remove</a></small> </p>
  <p> <strong>25th April 2009</strong> by Admin<br />
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. <small><a href="#" class="remove-link" title="Remove message">Remove</a></small> </p>
  <form action="#" method="post">
    <h4>New Message</h4>
    <fieldset>
      <textarea class="textarea" name="textfield" cols="79" rows="5"></textarea>
    </fieldset>
    <fieldset>
      <select name="dropdown" class="small-input">
        <option value="option1">Send to...</option>
        <option value="option2">Everyone</option>
        <option value="option3">Admin</option>
        <option value="option4">Jane Doe</option>
      </select>
      <input class="button" type="submit" value="Send" />
    </fieldset>
  </form>
</div>
<!-- End #messages --><?php }} ?>