<?php

namespace ScoperBug;

use Pimple\Container;

class Application
{
    public function run()
    {
        $container = new Container();
        
        $container['parameter'] = 'Hello';
        
        echo $container['parameter'], "\n";
    }
}