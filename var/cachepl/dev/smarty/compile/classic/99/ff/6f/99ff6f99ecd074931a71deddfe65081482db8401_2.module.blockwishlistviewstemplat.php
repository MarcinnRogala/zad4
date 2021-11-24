<?php
/* Smarty version 3.1.39, created on 2021-11-09 13:02:15
  from 'module:blockwishlistviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_618a634799fa62_36019100',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99ff6f99ecd074931a71deddfe65081482db8401' => 
    array (
      0 => 'module:blockwishlistviewstemplat',
      1 => 1636436079,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_618a634799fa62_36019100 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin C:\wamp64\www/modules/blockwishlist/views/templates/components/modals/login.tpl -->
<div
  class="wishlist-login"
  data-login-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Modules.Blockwishlist.Shop'),$_smarty_tpl ) );?>
"
  data-cancel-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','d'=>'Modules.Blockwishlist.Shop'),$_smarty_tpl ) );?>
"
>
  <div
    class="wishlist-modal modal fade"
    
      :class="{show: !isHidden}"
    
    tabindex="-1"
    role="dialog"
    aria-modal="true"
  >
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Modules.Blockwishlist.Shop'),$_smarty_tpl ) );?>
</h5>
          <button
            type="button"
            class="close"
            @click="toggleModal"
            data-dismiss="modal"
            aria-label="Close"
          >
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <p class="modal-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You need to be logged in to save products in your wishlist.','d'=>'Modules.Blockwishlist.Shop'),$_smarty_tpl ) );?>
</p>
        </div>
        <div class="modal-footer">
          <button
            type="button"
            class="modal-cancel btn btn-secondary"
            data-dismiss="modal"
            @click="toggleModal"
          >
            ((cancelText))
          </button>

          <a
            type="button"
            class="btn btn-primary"
            :href="prestashop.urls.pages.authentication"
          >
            ((loginText))
          </a>
        </div>
      </div>
    </div>
  </div>

  <div
    class="modal-backdrop fade"
    
      :class="{in: !isHidden}"
    
  >
  </div>
</div>

<!-- end C:\wamp64\www/modules/blockwishlist/views/templates/components/modals/login.tpl --><?php }
}