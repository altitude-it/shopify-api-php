<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Service\Contracts;

use Slince\Shopify\Model\SmartCollection;

interface SmartCollectionManagerInterface extends ManagerInterface
{
    /**
     * Gets all custom collections.
     *
     * @return SmartCollection[]
     */
    public function findAll(array $query = []);

    /**
     * Gets the custom collection by its id.
     *
     * @param int $id
     *
     * @return SmartCollection
     */
    public function find($id);

    /**
     * Gets the count.
     *
     * @return int
     */
    public function count(array $query = []);

    /**
     * Removes the custom collection.
     *
     * @param int $id
     *
     * @return bool
     */
    public function remove($id);

    /**
     * Creates a smart collection.
     *
     * @return SmartCollection
     */
    public function create(array $data);
}
