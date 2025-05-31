<?php
declare(strict_types=1);

namespace Abdulla\Popup\Block\Product\View;

use Magento\Catalog\Block\Product\ProductList\Related;

class CustomRelated extends Related
{
    protected function _prepareLayout()
    {
        $product = $this->getProduct();
        if ($product && !$this->hasData('product')) {
            $this->setProduct($product);
        }
        return parent::_prepareLayout();
    }
}