<?php

namespace Jlonom\AllegroSDK\Model;

class StockStorageFee extends \ArrayObject
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
    * Status of the storage fee.
    * NOT_APPLICABLE - fee for yesterday has not been charged and there are no available items of the product.
    * INCLUDED_IN_SERVICE_PRICE - fee for yesterday has not been charged and there are available items of the product.
    * CHARGED - the fee has been charged on seller's billing.
    * PREDICTION - prediction of upcoming fee, based on yesterday selling stats and quantity.
    
    *
    * @var string
    */
    protected $status;
    /**
     * Date when the fee was charged. Normally we return the data for the day before. However, due to asynchronous nature of fee update process, which are calculated overnight, it is possible to have some outdated entries when querying during fee recalculation process. This value allows to ensure that you work on the most recent data.
     *
     * @var string
     */
    protected $feeStatusAt;
    /**
     * Details about charged storage fee. Only present in case of CHARGED status, null otherwise.
     *
     * @var StockStorageFeeDetails
     */
    protected $details;
    /**
    * Status of the storage fee.
    * NOT_APPLICABLE - fee for yesterday has not been charged and there are no available items of the product.
    * INCLUDED_IN_SERVICE_PRICE - fee for yesterday has not been charged and there are available items of the product.
    * CHARGED - the fee has been charged on seller's billing.
    * PREDICTION - prediction of upcoming fee, based on yesterday selling stats and quantity.
    
    *
    * @return string
    */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
    * Status of the storage fee.
    * NOT_APPLICABLE - fee for yesterday has not been charged and there are no available items of the product.
    * INCLUDED_IN_SERVICE_PRICE - fee for yesterday has not been charged and there are available items of the product.
    * CHARGED - the fee has been charged on seller's billing.
    * PREDICTION - prediction of upcoming fee, based on yesterday selling stats and quantity.
    
    *
    * @param string $status
    *
    * @return self
    */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * Date when the fee was charged. Normally we return the data for the day before. However, due to asynchronous nature of fee update process, which are calculated overnight, it is possible to have some outdated entries when querying during fee recalculation process. This value allows to ensure that you work on the most recent data.
     *
     * @return string
     */
    public function getFeeStatusAt(): string
    {
        return $this->feeStatusAt;
    }
    /**
     * Date when the fee was charged. Normally we return the data for the day before. However, due to asynchronous nature of fee update process, which are calculated overnight, it is possible to have some outdated entries when querying during fee recalculation process. This value allows to ensure that you work on the most recent data.
     *
     * @param string $feeStatusAt
     *
     * @return self
     */
    public function setFeeStatusAt(string $feeStatusAt): self
    {
        $this->initialized['feeStatusAt'] = true;
        $this->feeStatusAt = $feeStatusAt;
        return $this;
    }
    /**
     * Details about charged storage fee. Only present in case of CHARGED status, null otherwise.
     *
     * @return StockStorageFeeDetails
     */
    public function getDetails(): StockStorageFeeDetails
    {
        return $this->details;
    }
    /**
     * Details about charged storage fee. Only present in case of CHARGED status, null otherwise.
     *
     * @param StockStorageFeeDetails $details
     *
     * @return self
     */
    public function setDetails(StockStorageFeeDetails $details): self
    {
        $this->initialized['details'] = true;
        $this->details = $details;
        return $this;
    }
}