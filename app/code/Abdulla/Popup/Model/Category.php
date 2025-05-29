<?php

declare(strict_types=1);

namespace Abdulla\Popup\Model;

use Abdulla\Popup\Api\CategoryInterface;

class Category implements CategoryInterface
{
    public function getName(): string
    {
        return "Category name";
    }
}