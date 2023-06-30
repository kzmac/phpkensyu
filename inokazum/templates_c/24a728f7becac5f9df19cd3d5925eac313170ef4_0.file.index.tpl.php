<?php
/* Smarty version 4.3.1, created on 2023-06-30 01:50:18
  from 'C:\xampp\htdocs\inokazum\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_649e18ba3b7779_31138086',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24a728f7becac5f9df19cd3d5925eac313170ef4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\inokazum\\templates\\index.tpl',
      1 => 1688082261,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_649e18ba3b7779_31138086 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ja">
<link rel="stylesheet" type="text/css" href="../css/index.css" />
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src='../js/nowDatetime.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src='../js/salaryDate.js'><?php echo '</script'; ?>
>
<head>
  <meta charset="UTF-8" /> </head>
<div class="frame1"> <input class="custom-btn btn-1" type="button" value="現在の時間は?" onclick="nowDatetime();" /> <output class="outPutToDate" id="nowDate" /> </div>
<div class="frame2"> <input class="custom-btn btn-2" type="button" value="次の給料日は？" onclick="salaryDate();" /> <output class="outPutSalaryDate" id="salaryDate" /> </div>
</html><?php }
}
?>