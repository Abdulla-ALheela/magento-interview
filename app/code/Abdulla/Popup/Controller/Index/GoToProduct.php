<?php
declare(strict_types=1);

namespace Abdulla\Popup\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\Result\RedirectFactory;
use Magento\Framework\Controller\Result\Redirect as ResultRedirect;

class GoToProduct implements HttpGetActionInterface
{
    private RedirectFactory $resultRedirectFactory;

    public function __construct(
        RedirectFactory $resultRedirectFactory
    ) {
        $this->resultRedirectFactory = $resultRedirectFactory;
    }

    public function execute(): ResultRedirect
    {
        $productId = 2;

        $resultRedirect = $this->resultRedirectFactory->create();
        $resultRedirect->setPath('catalog/product/view', ['id' => $productId]);

        return $resultRedirect;
    }
}
