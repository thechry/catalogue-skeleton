<?php

namespace App\Controllers;

use Interop\Container\ContainerInterface;

abstract class BaseController {
    protected $c;
    
    public function __construct(ContainerInterface $c) {
        $this->c = $c;
    }
}
