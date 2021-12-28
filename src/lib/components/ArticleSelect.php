<?php

namespace mycm\FormBuilder\lib\components;

class ArticleSelect extends FormComponents
{
    protected static $propsRule = [
    ];
    protected $template; //当前组件模板
    protected $html; //已渲染的html
    protected $_type = 'articleSelect';
    protected $_className = 'layui-input layui-col-xs6';
    protected $_multiple = false;
    protected $_articles;

    public function __construct($template = '')
    {
        parent::__construct();
        $this->getTemplatePath($template);
        $this->type = 'text';
        $this->class = 'layui-input layui-col-xs6';
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
    public function getArticlesValue()
    {
        return $this->_articles;
    }

    public function setArticlesValue($value)
    {
        $this->_articles = $value;
        return $this;
    }

}
