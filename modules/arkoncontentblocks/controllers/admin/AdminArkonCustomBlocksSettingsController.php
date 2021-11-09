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

        $this->prepareOptions();
    }
    public function prepareOptions()
    {
        $this->fields_options = [
            /* Form name */
            'general' => [
                /* Form label */
                'title' => $this->module->l('Module options'),
                'info' => 'Form info',
                'fields' => [
                    /* Single field name */
                    $this->module->name . 'is_active' => [
                        'title' => $this->module->l('Enable / Disable'),
                        'desc' => 'Field description',
                        'hint' => 'Field hint',
                        'validation' => 'isBool|isUnsignedInt|isGenericName',
                        /* Field title */
                        'cast' => 'intval',
                        /* Field type */
                        'type' => 'bool|text|textLang|select|textarea|textareaLang|color',
                        /* Field default value */
                        'default' => '0',
                        'identifier' => 'id_category',
                        'list' => array(),
                        'visibility' => 'true|false',
                        'autoload_rte' => 'true|false',
                        'cols' => '2',
                        'rows' => '2',
                        'required' => 'true|false',
                        'ajax' => 'true|false',
                        'size' => '255',
                        'languages' => $array,
                        'value' => $value
                    ],
                ],
                /* Submit button */
                'submit' => [
                    'title' => $this->module->l('Save')
                ],
            ],
        ];
    }
    public function prepareOptions()
    {
        $this->fields_options = [
            'general' => [
                'title' => $this->module->l('Module options'),
                'fields' => [
                    $this->module->name . 'is_active' => [
                        'title' => $this->module->l('Enable / Disable'),
                        'type' => 'bool',
                        'default' => '0',
                    ],
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
                        'autoload_rte' => true
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
                ],
                'submit' => [
                    'title' => $this->module->l('Save')
                ],
            ],
        ];
    }
}
