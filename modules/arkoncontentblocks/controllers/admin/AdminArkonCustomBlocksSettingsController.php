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

class AdminArkonCustomBlocksSettingsController extends ModuleAdminController
{
    public function __construct()
    {
        $this->context = Context::getContext();
        $this->context->controller = $this;

        $this->bootstrap = true;
        parent::__construct();

        if (Tools::isSubmit('submitOptionsconfiguration')){
          
            Configuration::updateValue($this->module->name . 'textarea_rich', Tools::getValue($this->module->name . 'textarea_rich'), true);
           
            $languages = Language::getLanguages(false);
    
           
            foreach ($languages as $lang)
            {
                
                $about[(int)$lang['id_lang']] = Tools::getValue($this->module->name . 'textarea_lang_rich_'.(int)$lang['id_lang']);

            }

            Configuration::updateValue($this->module->name . 'textarea_lang_rich',$about);
        }
        // PREPARE CONFIGURATION FORM
        $this->prepareOptions();
    }
    public function prepareOptions()
    {
        $this->fields_options = [
            'general' => [
                'title' => $this->module->l('Module options'),
                'fields' => [
                   
                    $this->module->name . 'text' => [
                        'title' => $this->module->l('Text field'),
                        'type' => 'text',
                    ],
                    $this->module->name . 'color' => [
                        'title' => $this->module->l('Color field'),
                        'type' => 'color',
                        'size' => 2,
                        'name' => 'color'
                    ],
                    $this->module->name . 'text_lang' => [
                        'title' => $this->module->l('Text field lang'),
                        'type' => 'textLang',
                    ],
                    $this->module->name . 'textarea' => [
                        'title' => $this->module->l('Textarea field'),
                        'type' => 'textarea',
                        'cols' => 2,
                        'rows' => 2
                    ],
                    $this->module->name . 'textarea_lang' => [
                        'title' => $this->module->l('Textarea field lang'),
                        'type' => 'textareaLang',
                        'cols' => 2,
                        'rows' => 2
                    ],
                    $this->module->name . 'textarea_rich' => [
                        'title' => $this->module->l('Textarea field'),
                        'type' => 'textarea',
                        'cols' => 2,
                        'rows' => 2,
                        'class' => 'rte',
                        'autoload_rte' => true,
                    ],
                    $this->module->name . 'textarea_lang_rich' => [
                        'title' => $this->module->l('Textarea field lang'),
                        'type' => 'textareaLang',
                        'cols' => 2,
                        'rows' => 2,
                        'autoload_rte' => true
                    ],
                    $this->module->name . 'select' => [
                        'title' => $this->module->l('Select'),
                        'type' => 'select',
                        'cast' => 'intval',
                        'identifier' => 'id_category',
                        'list' => Category::getSimpleCategories($this->context->language->id)
                    ],
                    $this->module->name . 'is_active' => [
                        'title' => $this->module->l('Enable / Disable'),
                        'type' => 'bool',
                        'default' => '0',
                    ],
                ],
                'submit' => [
                    'title' => $this->module->l('Save')
                ],
            ],
        ];
    }
}
