<?php

namespace Inchoo\Sample02\Model;

class B
{
    protected $a;

    public function __construct(\Inchoo\Sample02\Model\A $a)
    {
        $this->a = $a;
    }
}
