<?php

namespace mycm\FormBuilder\lib\components;

class Radio extends FormComponents
{
    protected static $propsRule = [
    ];
    protected $template; //当前组件模板
    protected $html; //已渲染的html
    protected $_type = 'radio';
    protected $_className = 'layui-radio';
    protected $_options = [];

    public function __construct($template = '')
    {
        parent::__construct();
        $this->getTemplatePath($template);
        $this->type = 'radio';
        $this->class = 'layui-radio';
        $this->_options = [];
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
