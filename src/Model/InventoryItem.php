<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Model;


use DateTime;

class InventoryItem extends Model
{
    use AdminGraphqlApiId;

    /**
     * @var string
     */
    protected $sku;

    /**
     * @var float
     */
    protected $cost;

    /**
     * @var boolean
     */
    protected $tracked;

    /**
     * @var DateTime
     */
    protected $createdAt;

    /**
     * @var DateTime
     */
    protected $updatedAt;

    /**
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param string $sku
     *
     * @return InventoryItem
     */
    public function setSku($sku)
    {
        $this->sku = $sku;


    }

    /**
     * @return float
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @param float $cost
     *
     * @return InventoryItem
     */
    public function setCost($cost)
    {
        $this->cost = $cost;


    }

    /**
     * @return bool
     */
    public function isTracked()
    {
        return $this->tracked;
    }

    /**
     * @param bool $tracked
     *
     * @return InventoryItem
     */
    public function setTracked($tracked)
    {
        $this->tracked = $tracked;


    }

    /**
     * @return string
     */
    public function getAdminGraphqlApiId()
    {
        return $this->adminGraphqlApiId;
    }

    /**
     * @param string $adminGraphqlApiId
     *
     * @return InventoryItem
     */
    public function setAdminGraphqlApiId($adminGraphqlApiId)
    {
        $this->adminGraphqlApiId = $adminGraphqlApiId;


    }

    /**
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param DateTime $createdAt
     *
     * @return InventoryItem
     */
    public function setCreatedAt(DateTime $createdAt)
    {
        $this->createdAt = $createdAt;


    }

    /**
     * @return DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param DateTime $updatedAt
     *
     * @return InventoryItem
     */
    public function setUpdatedAt(DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;


    }
}