<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\CustomCollection;

use Slince\Shopify\Common\Manager\ManagerInterface;

interface CustomCollectionManagerInterface extends ManagerInterface
{
    /**
     * Gets all custom collections.
     *
     * @param array $query
     *
     * @return CustomCollection[]
     */
    public function findAll(array $query = []);

    /**
     * Gets the custom collection by its id.
     *
     * @param int $id
     *
     * @return CustomCollection
     */
    public function find($id);

    /**
     * Gets the count.
     *
     * @param array $query
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
     * Creates a blog.
     *
     * @param array $data
     *
     * @return CustomCollection
     */
    public function create(array $data);
}