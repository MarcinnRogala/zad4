<?php
/* Smarty version 3.1.39, created on 2021-11-09 11:01:03
  from 'C:\wamp64\www\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_618a46df1013c5_64159192',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ed4b291ed3d8e8515fb90c44b485bd52e15b700' => 
    array (
      0 => 'C:\\wamp64\\www\\themes\\classic\\templates\\page.tpl',
      1 => 1636436055,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_618a46df1013c5_64159192 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1855002393618a46df0e3e69_10647021', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_169175584618a46df0e84c6_50657662 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_2019455874618a46df0e5db4_19335040 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169175584618a46df0e84c6_50657662', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_21121398618a46df0f2ed4_40865382 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_243003296618a46df0f5ba1_02264185 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_323063464618a46df0f1006_04261259 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21121398618a46df0f2ed4_40865382', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_243003296618a46df0f5ba1_02264185', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_1594752277618a46df0fc027_80423077 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_1341029763618a46df0fa1a7_98688493 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1594752277618a46df0fc027_80423077', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_1855002393618a46df0e3e69_10647021 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1855002393618a46df0e3e69_10647021',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_2019455874618a46df0e5db4_19335040',
  ),
  'page_title' => 
  array (
    0 => 'Block_169175584618a46df0e84c6_50657662',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_323063464618a46df0f1006_04261259',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_21121398618a46df0f2ed4_40865382',
  ),
  'page_content' => 
  array (
    0 => 'Block_243003296618a46df0f5ba1_02264185',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_1341029763618a46df0fa1a7_98688493',
  ),
  'page_footer' => 
  array (
    0 => 'Block_1594752277618a46df0fc027_80423077',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2019455874618a46df0e5db4_19335040', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_323063464618a46df0f1006_04261259', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1341029763618a46df0fa1a7_98688493', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
