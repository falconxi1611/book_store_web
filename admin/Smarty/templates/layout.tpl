{include file="head.tpl"}
<div id="body-wrapper">
<!-- Wrapper for the radial gradient background -->
<div id="sidebar">
  <div id="sidebar-wrapper"> <!-- Sidebar with logo and menu --> 
    {include file="logo_profile.tpl"}			
    {include file="nav.tpl"}
    {include file="messages.tpl"}
  </div>
</div>
<!-- End #sidebar -->
<div id="main-content">
<!-- Main Content Section with everything -->
{*include file="noScript.tpl"*} 
<!-- Page Head --> 
{include file="pageHead.tpl"}
<div class="clear"></div> <!-- End .clear --> 
<!-- End Page Head --> 
<!-- Content --> 
{include file="content.tpl"}
{*include file="content_left.tpl"*}
{*include file="content_right.tpl"*} 
<!-- end Content -->
<div class="clear"></div>
<!-- Start Notifications --> 
{*include file="notification.tpl"*} 
<!-- End Notifications --> 
{include file="footer.tpl"} 