<?php
/* Smarty version 3.1.39, created on 2021-11-09 11:32:29
  from 'C:\wamp64\www\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_618a4e3d8ac879_13661263',
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
function content_618a4e3d8ac879_13661263 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2027842142618a4e3d88b214_00065977', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_543538940618a4e3d88fa07_70049584 extends Smarty_Internal_Block
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
class Block_272724143618a4e3d88d3c2_72579547 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_543538940618a4e3d88fa07_70049584', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_1919257685618a4e3d89c3f0_30753888 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_735138612618a4e3d89fb22_06758671 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_2109607739618a4e3d89a4b2_99129237 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1919257685618a4e3d89c3f0_30753888', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_735138612618a4e3d89fb22_06758671', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_585612820618a4e3d8a6b46_64089266 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_1864920904618a4e3d8a48f3_04658096 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_585612820618a4e3d8a6b46_64089266', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_2027842142618a4e3d88b214_00065977 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2027842142618a4e3d88b214_00065977',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_272724143618a4e3d88d3c2_72579547',
  ),
  'page_title' => 
  array (
    0 => 'Block_543538940618a4e3d88fa07_70049584',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_2109607739618a4e3d89a4b2_99129237',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1919257685618a4e3d89c3f0_30753888',
  ),
  'page_content' => 
  array (
    0 => 'Block_735138612618a4e3d89fb22_06758671',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_1864920904618a4e3d8a48f3_04658096',
  ),
  'page_footer' => 
  array (
    0 => 'Block_585612820618a4e3d8a6b46_64089266',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_272724143618a4e3d88d3c2_72579547', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2109607739618a4e3d89a4b2_99129237', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1864920904618a4e3d8a48f3_04658096', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
