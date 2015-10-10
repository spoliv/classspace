<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 10.10.2015
 * Time: 22:19
 */

namespace App\Controllers;


abstract class AController
{

    public function action($name)
    {
        $actionName = 'action' . ucfirst($name);
        if(method_exists($this, $actionName)) {
            $this->$actionName();//метод с именем в переменной $actionName
        }
    }

} 