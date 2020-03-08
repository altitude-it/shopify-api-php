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

use Slince\Shopify\Model\Theme;

interface ThemeManagerInterface extends ManagerInterface
{
    /**
     * Gets all themes.
     *
     * @return Theme[]
     */
    public function findAll(array $query = []);

    /**
     * Gets the theme by its id.
     *
     * @param int $id
     *
     * @return Theme
     */
    public function find($id);

    /**
     * Gets the count.
     *
     * @return int
     */
    public function count(array $query = []);

    /**
     * Updates the theme.
     *
     * @param int $id
     *
     * @return bool
     */
    public function update($id, array $data);

    /**
     * Removes the theme.
     *
     * @param int $id
     *
     * @return bool
     */
    public function remove($id);

    /**
     * Creates a theme.
     *
     * @return Theme
     */
    public function create(array $data);
}
