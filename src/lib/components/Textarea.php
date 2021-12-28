<?php

namespace mycm\FormBuilder\lib\components;

class Textarea extends FormComponents
{
    protected static $propsRule = [
    ];
    protected $template; //当前组件模板
    protected $html; //已渲染的html
    protected $rows = 5;
    protected $_type = 'textarea';
    protected $_className = 'layui-textarea';
    protected $_rows = '3';

    public function __construct($template = '')
    {
        parent::__construct();
        $this->getTemplatePath($template);
        $this->_type = 'textarea';
        $this->_classNme = 'layui-textarea';
        $this->_rows = '3';
    }

    public function getRows()
    {
        return $this->_rows;
    }

    public function setRows($num)
    {
        $this->_rows = intval($num);

        return $this;
    }

    public function setTextareaRows($rows)
    {
        $this->rows = $rows;

        return $this;
    }

    public function setEditorStatus($status)
    {
        $this->_isEditor = $status;

        return $this;
    }

    public function getEditorStatus()
    {
        return $this->_isEditor;
    }
}
