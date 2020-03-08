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

class ShippingLine extends Model
{
    /**
     * @var string
     */
    protected $code;

    /**
     * @var float
     */
    protected $price;

    /**
     * @var string
     */
    protected $source;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var array
     */
    protected $taxLines;

    /**
     * @var string
     */
    protected $carrierIdentifier;

    /**
     * @var string
     */
    protected $requestedFulfillmentServiceId;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     *
     * @return ShippingLine
     */
    public function setCode($code)
    {
        $this->code = $code;


    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     *
     * @return ShippingLine
     */
    public function setPrice($price)
    {
        $this->price = $price;


    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param string $source
     *
     * @return ShippingLine
     */
    public function setSource($source)
    {
        $this->source = $source;


    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return ShippingLine
     */
    public function setTitle($title)
    {
        $this->title = $title;


    }

    /**
     * @return array
     */
    public function getTaxLines()
    {
        return $this->taxLines;
    }

    /**
     * @param array $taxLines
     *
     * @return ShippingLine
     */
    public function setTaxLines($taxLines)
    {
        $this->taxLines = $taxLines;


    }

    /**
     * @return string
     */
    public function getCarrierIdentifier()
    {
        return $this->carrierIdentifier;
    }

    /**
     * @param string $carrierIdentifier
     *
     * @return ShippingLine
     */
    public function setCarrierIdentifier($carrierIdentifier)
    {
        $this->carrierIdentifier = $carrierIdentifier;


    }

    /**
     * @return string
     */
    public function getRequestedFulfillmentServiceId()
    {
        return $this->requestedFulfillmentServiceId;
    }

    /**
     * @param string $requestedFulfillmentServiceId
     *
     * @return ShippingLine
     */
    public function setRequestedFulfillmentServiceId($requestedFulfillmentServiceId)
    {
        $this->requestedFulfillmentServiceId = $requestedFulfillmentServiceId;


    }
}