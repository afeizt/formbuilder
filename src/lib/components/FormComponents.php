<?php

namespace mycm\FormBuilder\lib\components;

class FormComponents
{
    protected static $props = [];
    protected $config = [];
    protected $_label = ''; //组件标签显示
    protected $_defaultValue; //默认值
    protected $_placeholder = ''; //默认显示
    protected $_fieldName; //组件字段名
    protected $template;
    protected $_isEditor = false;
    protected $_tips = ''; //提示文字

    public function __construct()
    {
        $this->templateBase = dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR;
    // $this->config['tpl_begin'] = '{';
    // $this->config['tpl_end'] = '}';
    }

    public function getTemplatePath($template)
    {
        if (empty($template))
        {
            $this->template = $this->templateBase . 'input.php';
        }
        else
        {
            $this->template = $this->templateBase . $template;
        }
    }

    public function getTemplateContent()
    {
        if (empty($this->template))
        {
            throw new \Exception('必须提供模板文件名');
        }

        return \file_get_contents($this->template);
    }

    public function setFieldName($name)
    {
        $this->_fieldName = $name;

        return $this;
    }

    public function getTips()
    {
        return $this->_tips;
    }

    public function setTips($value)
    {
        $this->_tips = $value;

        return $this;
    }

    public function getLabel()
    {
        return $this->_label;
    }

    public function getFieldName()
    {
        return $this->_fieldName;
    }

    public function getDefaultValue()
    {
        if (!empty($this->_defaultValue))
        {
            return $this->_defaultValue;
        }
        else
        {
            if (in_array($this->getType(), ['radio', 'select', 'checkbox']))
            {
                return [];
            }
            else
            {
                return '';
            }
        }
    }

    public function setDefaultValue($val)
    {
        if (!empty($val))
        {
            if (in_array($this->getType(), ['radio', 'select', 'checkbox']))
            {
                $val = explode(',', $val);
            }
        }
        else
        {
            if (in_array($this->getType(), ['radio', 'select', 'checkbox']))
            {
                $val = [];
            }
        }

        $this->_defaultValue = $val;

        return $this;
    }

    public function getClassName()
    {
        return $this->_className;
    }

    public function getType()
    {
        return $this->_type;
    }

    public function getPlaceholder()
    {
        return $this->_placeholder;
    }

    public function setLabel($label)
    {
        $this->_label = $label;

        return $this;
    }

    public function getData()
    {
        $data = [];
        switch ($this->getType())
        {
            case 'input':
                $data = ['label' => $this->getLabel(), 'defaultValue' => $this->getDefaultValue(), 'type' => $this->getType(), 'name' => $this->geTFieldName(), 'class' => $this->getClassName(), 'placeholder' => $this->getPlaceholder(), 'tips' => $this->getTips()];
                break;
            case 'textarea':
                $editor = \method_exists($this, 'getEditorStatus') ? $this->getEditorStatus() : false;
                $rows = \method_exists($this, 'getRows') ? $this->getRows() : 5;

                $data = ['label' => $this->getLabel(), 'defaultValue' => $this->getDefaultValue(), 'type' => $this->getType(), 'name' => $this->geTFieldName(), 'class' => $this->getClassName(), 'placeholder' => $this->getPlaceholder(), 'editor' => $editor, 'rows' => $rows, 'tips' => $this->getTips()];
                break;
            case 'radio':
                $options = \method_exists($this, 'getOptions') ? $this->getOptions() : [];

                $data = ['label' => $this->getLabel(), 'defaultValue' => $this->getDefaultValue(), 'type' => $this->getType(), 'name' => $this->geTFieldName(), 'class' => $this->getClassName(), 'placeholder' => $this->getPlaceholder(), 'options' => $options, 'tips' => $this->getTips()];
                break;
            case 'checkbox':
                $options = \method_exists($this, 'getOptions') ? $this->getOptions() : [];

                $data = ['label' => $this->getLabel(), 'defaultValue' => $this->getDefaultValue(), 'type' => $this->getType(), 'name' => $this->geTFieldName(), 'class' => $this->getClassName(), 'placeholder' => $this->getPlaceholder(), 'options' => $options, 'tips' => $this->getTips()];
                break;
            case 'select':
                $options = \method_exists($this, 'getOptions') ? $this->getOptions() : [];
                $multiple = \method_exists($this, 'getMultiple') ? $this->getMultiple() : false;
                // $name = $multiple ? $this->geTFieldName().'[]' : $this->geTFieldName();
                $name = $this->geTFieldName();

                $data = ['label' => $this->getLabel(), 'defaultValue' => $this->getDefaultValue(), 'type' => $this->getType(), 'name' => $name, 'class' => $this->getClassName(), 'placeholder' => $this->getPlaceholder(), 'options' => $options, 'multiple' => $multiple, 'tips' => $this->getTips()];
                break;
            case 'upload':
                $uploadAllowExt = \method_exists($this, 'getUploadAllowExt') ? $this->getUploadAllowExt() : 'jpg|png|gif|webp';
                $use_thumb = \method_exists($this, 'getUseThumb') ? $this->getUseThumb() : false;
                $thumb_value = \method_exists($this, 'getThumbValue') ? $this->getThumbValue() : '';
                $add_watermark = \method_exists($this, 'getAddWaterMark') ? $this->getAddWaterMark() : false;
                $multiple = \method_exists($this, 'getMultiple') ? $this->getMultiple() : false;
                $data = ['label' => $this->getLabel(), 'defaultValue' => $this->getDefaultValue(), 'type' => $this->getType(), 'name' => $this->geTFieldName(), 'class' => $this->getClassName(), 'placeholder' => $this->getPlaceholder(), 'multiple' => $multiple, 'uploadAllowExt' => $uploadAllowExt, 'use_thumb' => $use_thumb, 'add_watermark' => $add_watermark, 'thumb_value' => $thumb_value, 'tips' => $this->getTips()];
                break;
            case 'articleSelect':

                $articles = \method_exists($this, 'getArticlesValue') ? $this->getArticlesValue() : false;
                $multiple = \method_exists($this, 'getMultiple') ? $this->getMultiple() : false;
                $data = ['label' => $this->getLabel(), 'defaultValue' => $this->getDefaultValue(), 'type' => $this->getType(), 'name' => $this->geTFieldName(), 'class' => $this->getClassName(), 'placeholder' => $this->getPlaceholder(), 'multiple' => $multiple, 'articles' => $articles, 'tips' => $this->getTips()];
                break;
            default:
                $data = ['label' => $this->getLabel(), 'defaultValue' => $this->getDefaultValue(), 'type' => $this->getType(), 'name' => $this->geTFieldName(), 'class' => $this->getClassName(), 'placeholder' => $this->getPlaceholder(), 'tips' => $this->getTips()];
                break;
        }

        return $data;
    }
}
