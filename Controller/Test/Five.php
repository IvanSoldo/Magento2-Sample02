<?php

namespace Inchoo\Sample02\Controller\Test;

/**
 * Class Three
 * @package Inchoo\Sample02\Controller\Test
 *
 * What if we need more than one Dummy instance in our class?
 * We use Factory (Magento will generate that class for us)
 */
class Five extends \Magento\Framework\App\Action\Action
{
    /**
     * @var \Inchoo\Sample02\Model\BFactory
     */
    protected $bFactory;

    /**
     * Controller constructor.
     * @param \Magento\Framework\App\Action\Context $context
     * @param \Inchoo\Sample02\Model\BFactory $bFactory
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Inchoo\Sample02\Model\BFactory $bFactory
    ) {
        parent::__construct($context);
        $this->bFactory = $bFactory;
    }

    /**
     * Controller action.
     */
    public function execute()
    {
        $b = $this->bFactory->create();
        var_dump($b);
    }
}
