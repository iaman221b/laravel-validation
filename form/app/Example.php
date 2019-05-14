<?php

namespace App;

class Example{

    protected $foo;

    public function _construct(Foo $foo)
    {
        $this->foo = $foo ;
    }

}