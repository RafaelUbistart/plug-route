<?php


namespace PlugRoute\Example;


class B
{
    private $dependecy;

    public function __construct(C $c)
    {
        $this->dependecy = $c;
    }
}