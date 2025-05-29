<?php
declare(strict_types=1);

namespace Abdulla\Popup\Block\Product\View;

use Magento\Catalog\Block\Product\View;
use Magento\Catalog\Block\Product\ProductList\Related;

class TestTab extends View
{

    public function getRelatedProductsHtml()
    {
        /** @var Related $relatedBlock 
        $relatedBlock = $this->getLayout()->createBlock(Related::class, 'custom.related.products');

      
        $relatedBlock->setProduct($this->getProduct());

   
        $relatedBlock->setTemplate('Magento_Catalog::product/list/items.phtml');

        return $relatedBlock->toHtml();
    }
}
