<?php

namespace mycm\FormBuilder;

use mycm\FormBuilder\lib\components\Checkbox;
use mycm\FormBuilder\lib\components\Input;
use mycm\FormBuilder\lib\components\Radio;
use mycm\FormBuilder\lib\components\Select;
use mycm\FormBuilder\lib\components\Textarea;
use mycm\FormBuilder\lib\components\Upload;
use mycm\FormBuilder\lib\components\ArticleSelect;

class FormElement
{
    public function __constructor()
    {
        // parent::__constructor();
    }

    public static function input($template = '')
    {
        return new Input('input.php');
    }

    public static function checkbox($template = '')
    {
        return new Checkbox('checkbox.php');
    }

    public static function select($template = '')
    {
        return new Select('select.php');
    }

    public static function radio($template = '')
    {
        return new Radio('radio.php');
    }

    public static function upload($template = '')
    {
        return new Upload('upload.php');
    }

    public static function textarea($template = '')
    {
        return new Textarea('textarea.php');
    }
    public static function articleselect($template = '')
    {
        return new ArticleSelect('articleselect.php');
    }
}
