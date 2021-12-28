<?php

namespace mycm\FormBuilder;

class Form
{
    protected $components = [];
    protected $templateEngineConfig = ['tpl_dir' => __DIR__ . '/template', 'cache_dir' => __DIR__ . '/cache']; //模板引擎配置

    public function __construct($options = [])
    {
        $this->options = $options;
        \epii\template\View::setEngine($this->templateEngineConfig);
    }

    public function addComponents($component)
    {
        $this->components[] = $component;
    }

    public function input()
    {
        $input = FormElement::input();
        $this->addComponents($input);

        return $input;
    }

    public function checkbox()
    {
        $checkbox = FormElement::checkbox();
        $this->addComponents($checkbox);

        return $checkbox;
    }

    public function radio()
    {
        $radio = FormElement::radio();
        $this->addComponents($radio);

        return $radio;
    }

    public function select()
    {
        $select = FormElement::select();
        $this->addComponents($select);

        return $select;
    }

    public function upload()
    {
        $upload = FormElement::upload();
        $this->addComponents($upload);

        return $upload;
    }

    public function textarea()
    {
        $textarea = FormElement::textarea();
        $this->addComponents($textarea);

        return $textarea;
    }
    public function articleselect()
    {
        $articleselect = FormElement::articleselect();
        $this->addComponents($articleselect);

        return $articleselect;
    }
    public function render()
    {
        $html = '';
        foreach ($this->components as $component) {
            $templateContent = $component->getTemplateContent();
            $data = $component->getData();
            $html .= $this->parseTemplate($templateContent, $data);
        }

        return $html;
    }

    public function parseTemplate($content = '', $data)
    {
        $html = \epii\template\View::fetchContent($content, $data);

        return $html;
    }
}
