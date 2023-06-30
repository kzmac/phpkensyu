<?php
/* Smarty version 4.3.1, created on 2023-06-29 19:42:04
  from 'C:\xampp\htdocs\php_test\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array(
  'version' => '4.3.1',
  'unifunc' => 'content_649dc26c3d6aa1_15633367',
  'has_nocache_code' => false,
  'file_dependency' =>
  array(
    '29a3cd9933cabb18721facb0b317f6dce45c5776' =>
    array(
      0 => 'C:\\xampp\\htdocs\\php_test\\index.tpl',
      1 => 1688051276,
      2 => 'file',
    ),
  ),
  'includes' =>
  array(),
), false)) {
  function content_649dc26c3d6aa1_15633367(Smarty_Internal_Template $_smarty_tpl)
  {
?>
    <!DOCTYPE html>
    <link rel="stylesheet" type="text/css" href="index.css" />
    <?php echo '<script'; ?>
    src='index.js'><?php echo '</script'; ?>
    >

    <head>
      <meta charset="UTF-8">
    </head>
    <div class="frame">
      <input class="custom-btn btn-1" type='button' id='PUSH' value="現在の時間は?" onclick="nowDatetime();" style="display:block"></input>
      </form>
      <div>
        <class="nowDate" id="nowDate">
      </div>
      </br>
      <button class="custom-btn btn-2">次の給料日は？</button>
    </div>
<?php }
}
?>