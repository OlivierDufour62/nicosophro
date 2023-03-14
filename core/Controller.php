<?php

namespace Core;

use Core\Security;

abstract class Controller extends Security
{
    public function render(string $file, array $data = [], string $template = 'default')
    {
        extract($data);
        
        require_once 'views/'.$file.'.php';
    }
}