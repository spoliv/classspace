<?php

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