<?php

namespace mycm\FormBuilder\lib\components;

class Checkbox extends FormComponents
{
    protected static $propsRule = [
    ];
    protected $template; //当前组件模板
    protected $html; //已渲染的html
    protected $_type = 'checkbox';
    protected $_className = 'layui-checkbox';
    protected $_options = [];

    public function __construct($template = '')
    {
        parent::__construct();
        $this->getTemplatePath($template);
        $this->type = 'checkbox';
        $this->class = 'layui-checkbox';
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
}
