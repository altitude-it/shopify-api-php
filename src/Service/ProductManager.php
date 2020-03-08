<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Service;

use Slince\Shopify\Model\Product;
use Slince\Shopify\Service\Contracts\ProductManagerInterface;

class ProductManager extends GeneralCurdable implements ProductManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return Product::class;
    }
}
