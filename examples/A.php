<?php


namespace PlugRoute\Example;


class A
{
    private $dependecy;

    public function __construct(B $b)
    {
        $this->dependecy = $b;
    }

    public function method(D $d)
    {
        echo 'method 1';
    }
}