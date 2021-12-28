<?php

namespace mycm\FormBuilder\lib\components;

class Input extends FormComponents
{
    protected static $propsRule = [
    ];
    protected $template; //当前组件模板
    protected $html; //已渲染的html
    protected $_type = 'input';
    protected $_className='layui-input';
    public function __construct($template = '')
    {
        parent::__construct();
        $this->getTemplatePath($template);
        $this->type = 'text';
        $this->class = 'layui-input';
    }

    // public function getTemplateContent()
    // {
    //     return $this->getTemplate($this->template);
    // }
}
