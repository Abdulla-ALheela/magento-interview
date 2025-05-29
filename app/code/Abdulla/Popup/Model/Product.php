<?php

declare(strict_types= 1);

namespace App\Code\Abdulla\Popup\Model;

use Abdulla\Popup\Api\CategoryInterface;

class Product
{
    function __construct(
        private CategoryInterface $category
    ){}


    function getCategoryName(): string
{
    return $this->category->getName();
}

}

