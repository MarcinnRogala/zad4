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

class ArkonContentBlocks extends Module
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

        return (parent::install()
            && $this->registerHook('actionFrontControllerSetMedia')
            // INSTALL TAB
            && $this->installTab());
    }

    public function uninstall()
    {
        return (parent::uninstall()
            /// REMOVE TAB
            && $this->uninstallTab());
    }
}
