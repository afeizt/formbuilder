<?php

namespace mycm\FormBuilder\lib\components;

class Select extends FormComponents
{
    protected static $propsRule = [
    ];
    protected $template; //当前组件模板
    protected $html; //已渲染的html
    protected $_type = 'select';
    protected $_className = 'layui-select';
    protected $_options = [];
    protected $_multiple = false;

    public function __construct($template = '')
    {
        parent::__construct();
        $this->getTemplatePath($template);
        $this->type = 'select';
        $this->class = 'layui-select';
        $this->_multiple = false;
    }

    public function getOptions()
    {
        return $this->_options;
    }

    public function setOptions($data)
    {
        $this->_options = $data;

        return $this;
    }

    public function getMultiple()
    {
        return $this->_multiple;
    }

    public function setMultiple($status)
    {
        $this->_multiple = $status;

        return $this;
    }
}
