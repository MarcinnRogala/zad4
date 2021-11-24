<?php

/**
 * NOTICE OF LICENSE
 *
 * This file is licensed under the Software License Agreement.
 *
 * With the purchase or the installation of the software in your application
 * you accept the licence agreement.
 *
 * You must not modify, adapt or create derivative works of this source code
 *
 * @author Arkonsoft
 * @copyright 2017-2021 Arkonsoft
 */

if (!defined('_PS_VERSION_')) {
    exit;
}

class arkoncontentblocks extends Module
{
    public function __construct()
    {
        $this->name = 'arkoncontentblocks';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Arkonsoft';
        $this->author_uri = 'https://arkonsoft.pl/';
        $this->need_instance = 1;
        $this->bootstrap = 1;

        parent::__construct();

        $this->displayName = $this->l('Custom content blocks');
        $this->description = $this->l('Module allows to add custom blocks to every front-office hook');
        
        $this->confirmUninstall = $this->l('Are you sure? All data will be lost!');

        $this->ps_versions_compliancy = ['min' => '1.7', 'max' => _PS_VERSION_];

    }
    public function installTab()
    {
        // Create new Tab
        $tab = new Tab();
        // Set menu category
        $tab->id_parent = (int)Tab::getIdFromClassName('AdminParentThemes');
        // Prepare name value for multilingual possibility
        $tab->name = [];
        foreach (Language::getLanguages(true) as $lang) {
            // Set name for each language
            $tab->name[$lang['id_lang']] = $this->l('Custom blocks');
        }
        // Set controller class name (without 'Controller' at end)
        $tab->class_name = 'AdminArkonCustomBlocksSettings';
        // Set module name
        $tab->module = $this->name;
        // Set active
        $tab->active = 1;
        // Save tab to database
        return $tab->add();
    }

    public function uninstallTab()
    {
        // Get ID of tab from database
        $id_tab = (int)Tab::getIdFromClassName('AdminArkonCustomBlocksSettings');
        // Create object model instance of Tab
        $tab = new Tab((int)$id_tab);
        // Delete from database
        return $tab->delete();
    }
    public function install()
    {
        if (Shop::isFeatureActive()) {
            Shop::setContext(Shop::CONTEXT_ALL);
        }

        return (parent::install()  &&
             $this->registerHook('displayHome') &&
             $this->registerHook('actionFrontControllerSetMedia') 
        
            && $this->installTab());
    }

    public function uninstall()
    {
        return (parent::uninstall()
            /// REMOVE TAB
            && $this->uninstallTab());
    }

    public function hookDisplayHome($params)
    {
        $this->context->smarty->assign([
            'custom_blocks_text' => Configuration::get($this->name . 'text'),
            'custom_blocks_color' => Configuration::get($this->name . 'color'),
            'custom_blocks_lang' => Configuration::get($this->name . 'text_lang'),
            'custom_blocks_area' => Configuration::get($this->name . 'textarea'),
            'custom_blocks_area_lang' => Configuration::get($this->name . 'textarea_lang'),
            'custom_blocks_rich' => Configuration::get($this->name . 'textarea_rich'),
            'custom_blocks_lang_rich' => Configuration::get($this->name . 'textarea_lang_rich'),
            'custom_blocks_select' => Configuration::get($this->name . 'select'),
            'custom_blocks_is_active' => Configuration::get($this->name . 'is_active'),
            'custom_blocks_Save' => Configuration::get($this->name . 'Save')
        ]);

        return $this->display(__FILE__, 'mymodule.tpl');
    }

    public function hookActionFrontControllerSetMedia()
    {
        $this->context->controller->registerStylesheet(
            'mymodule-style',
            $this->_path.'views/css/mymodule.css',
            [
                'media' => 'all',
                'priority' => 1000,
            ]
        );

        $this->context->controller->registerJavascript(
            'mymodule-javascript',
            $this->_path.'views/js/mymodule.js',
            [
                'position' => 'bottom',
                'priority' => 1000,
            ]
        );
    }
}
