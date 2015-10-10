<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 10.10.2015
 * Time: 23:04
 */

namespace App\view;


use App\Modelky\Storage as Storage;

class View extends Storage
{
    public $template;

    public function __construct($template)
    {
        $this->template = $template;
    }

    public function display()
    {
        foreach ($this as $k => $v) {

            $$k = $v;
        }
        include '/' . $this->template;

    }

} 