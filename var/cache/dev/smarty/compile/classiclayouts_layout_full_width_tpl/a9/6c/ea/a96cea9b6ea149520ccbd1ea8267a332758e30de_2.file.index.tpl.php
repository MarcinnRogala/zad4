<?php
/* Smarty version 3.1.39, created on 2021-11-09 11:32:29
  from 'C:\wamp64\www\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_618a4e3d874af3_27775567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a96cea9b6ea149520ccbd1ea8267a332758e30de' => 
    array (
      0 => 'C:\\wamp64\\www\\themes\\classic\\templates\\index.tpl',
      1 => 1636436055,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_618a4e3d874af3_27775567 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1483369084618a4e3d8675a0_55504401', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_168930851618a4e3d869492_63606269 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_290965713618a4e3d86de25_43836059 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_268466693618a4e3d86c2b8_72440286 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_290965713618a4e3d86de25_43836059', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1483369084618a4e3d8675a0_55504401 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_1483369084618a4e3d8675a0_55504401',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_168930851618a4e3d869492_63606269',
  ),
  'page_content' => 
  array (
    0 => 'Block_268466693618a4e3d86c2b8_72440286',
  ),
  'hook_home' => 
  array (
    0 => 'Block_290965713618a4e3d86de25_43836059',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_168930851618a4e3d869492_63606269', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_268466693618a4e3d86c2b8_72440286', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
