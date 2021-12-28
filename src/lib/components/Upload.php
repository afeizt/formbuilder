<?php

namespace mycm\FormBuilder\lib\components;

class Upload extends FormComponents
{
    protected static $propsRule = [
    ];
    protected $template; //当前组件模板
    protected $html; //已渲染的html
    protected $_type = 'upload';
    protected $_className = 'layui-input layui-col-xs6';
    protected $_multiple = false;
    protected $_upload_allow_ext;
    protected $use_thumb;
    private $thumb_value;
    protected $add_watermark;

    public function __construct($template = '')
    {
        parent::__construct();
        $this->getTemplatePath($template);
        $this->type = 'text';
        $this->class = 'layui-input layui-col-xs6';
    }

    public function getAddWaterMark()
    {
        return $this->add_watermark;
    }

    public function setAddWaterMark($value)
    {
        $this->add_watermark = (bool) $value;

        return $this;
    }

    public function getUseThumb()
    {
        return $this->use_thumb;
    }

    public function setUseThumb($value)
    {
        $this->use_thumb = (bool) $value;

        return $this;
    }

    public function getThumbValue()
    {
        return $this->thumb_value;
    }

    public function setThumbValue($value)
    {
        $this->thumb_value = $value;

        return $this;
    }

    public function getUploadAllowExt()
    {
        return $this->_upload_allow_ext;
    }

    public function setUploadAllowExt($exts)
    {
        if (is_array($exts)) {
            $exts = implode('|', $exts);
        }
        if (strpos($exts, ',')) {
            $exts = str_replace(',', '|', $exts);
        }
        $this->_upload_allow_ext = $exts;

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
