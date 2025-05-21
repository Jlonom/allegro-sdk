<?php

namespace Jlonom\AllegroSDK\Model;

class StockProductItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The product.
     *
     * @var StockProduct
     */
    protected $product;
    /**
     * Represents stock quantity.
     *
     * @var StockQuantity
     */
    protected $quantity;
    /**
     * Represents selling stats of given product in merchant's stock.
     *
     * @var StockSellingStats
     */
    protected $sellingStats;
    /**
     * Contains information about amount of reserve and its sufficiency for next days. If status is set to NOT_ENOUGH_DATA value of will not be sent.
     *
     * @var ReserveInfo
     */
    protected $reserve;
    /**
     * Information about storage fee for a given product in merchant's stock.
     *
     * @var StockStorageFee
     */
    protected $storageFee;
    /**
     * Identifier of the offer currently attached to the product.
     *
     * @var string
     */
    protected $offerId;
    /**
     * The product.
     *
     * @return StockProduct
     */
    public function getProduct(): StockProduct
    {
        return $this->product;
    }
    /**
     * The product.
     *
     * @param StockProduct $product
     *
     * @return self
     */
    public function setProduct(StockProduct $product): self
    {
        $this->initialized['product'] = true;
        $this->product = $product;
        return $this;
    }
    /**
     * Represents stock quantity.
     *
     * @return StockQuantity
     */
    public function getQuantity(): StockQuantity
    {
        return $this->quantity;
    }
    /**
     * Represents stock quantity.
     *
     * @param StockQuantity $quantity
     *
     * @return self
     */
    public function setQuantity(StockQuantity $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * Represents selling stats of given product in merchant's stock.
     *
     * @return StockSellingStats
     */
    public function getSellingStats(): StockSellingStats
    {
        return $this->sellingStats;
    }
    /**
     * Represents selling stats of given product in merchant's stock.
     *
     * @param StockSellingStats $sellingStats
     *
     * @return self
     */
    public function setSellingStats(StockSellingStats $sellingStats): self
    {
        $this->initialized['sellingStats'] = true;
        $this->sellingStats = $sellingStats;
        return $this;
    }
    /**
     * Contains information about amount of reserve and its sufficiency for next days. If status is set to NOT_ENOUGH_DATA value of will not be sent.
     *
     * @return ReserveInfo
     */
    public function getReserve(): ReserveInfo
    {
        return $this->reserve;
    }
    /**
     * Contains information about amount of reserve and its sufficiency for next days. If status is set to NOT_ENOUGH_DATA value of will not be sent.
     *
     * @param ReserveInfo $reserve
     *
     * @return self
     */
    public function setReserve(ReserveInfo $reserve): self
    {
        $this->initialized['reserve'] = true;
        $this->reserve = $reserve;
        return $this;
    }
    /**
     * Information about storage fee for a given product in merchant's stock.
     *
     * @return StockStorageFee
     */
    public function getStorageFee(): StockStorageFee
    {
        return $this->storageFee;
    }
    /**
     * Information about storage fee for a given product in merchant's stock.
     *
     * @param StockStorageFee $storageFee
     *
     * @return self
     */
    public function setStorageFee(StockStorageFee $storageFee): self
    {
        $this->initialized['storageFee'] = true;
        $this->storageFee = $storageFee;
        return $this;
    }
    /**
     * Identifier of the offer currently attached to the product.
     *
     * @return string
     */
    public function getOfferId(): string
    {
        return $this->offerId;
    }
    /**
     * Identifier of the offer currently attached to the product.
     *
     * @param string $offerId
     *
     * @return self
     */
    public function setOfferId(string $offerId): self
    {
        $this->initialized['offerId'] = true;
        $this->offerId = $offerId;
        return $this;
    }
}