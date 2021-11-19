<?php
/* Smarty version 3.1.39, created on 2021-11-19 13:48:49
  from 'C:\wamp64\www\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61979d31e04451_82329576',
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
function content_61979d31e04451_82329576 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_192018840661979d31df7342_82039443', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_63850456361979d31df91f2_86989833 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_174234669061979d31dfd703_72771114 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_88777764161979d31dfbad0_84980669 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174234669061979d31dfd703_72771114', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_192018840661979d31df7342_82039443 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_192018840661979d31df7342_82039443',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_63850456361979d31df91f2_86989833',
  ),
  'page_content' => 
  array (
    0 => 'Block_88777764161979d31dfbad0_84980669',
  ),
  'hook_home' => 
  array (
    0 => 'Block_174234669061979d31dfd703_72771114',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_63850456361979d31df91f2_86989833', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88777764161979d31dfbad0_84980669', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
