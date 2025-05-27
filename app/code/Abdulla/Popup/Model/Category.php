<?php

declare(strict_types= 1);

namespace App\Code\Abdulla\Popup\Model;

use App\Code\Abdulla\Popup\Api\CategoryInterface;

class Category implements CategoryInterface
{
    public function getName(): string
    {
        return "Category name";
    }
}