<?php
namespace HuluLabs\HelloWorldController\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;

class Index extends Action
{
    public function execute()
    {
        $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
        $result->setContents("Hello World from HuluLabs HelloWorldController!");
        return $result;
    }
}
