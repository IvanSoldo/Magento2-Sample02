<?php

namespace Inchoo\Sample02\Controller\Test;

class Four extends \Magento\Framework\App\Action\Action
{
    protected $b;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Inchoo\Sample02\Model\B $b
    ) {
        parent::__construct($context);
        $this->b = $b;
    }

    public function execute()
    {
        var_dump($this->b);
    }
}
