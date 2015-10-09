<?php


namespace App\Modelky;

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