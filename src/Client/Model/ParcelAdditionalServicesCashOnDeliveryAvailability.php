<?php

namespace Jlonom\AllegroSDK\Model;

class ParcelAdditionalServicesCashOnDeliveryAvailability extends \ArrayObject
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
     * Indicates if Cash On Delivery is available as part of Additional Services for parcel creation for carrier.
     *
     * @var bool
     */
    protected $available;
    /**
     * Postpaid Express service available. Postpaid value is send to parcel sender in one business day after delivery.
     *
     * @var bool
     */
    protected $expressAvailable;
    /**
     * Indicates if Cash On Delivery is available as part of Additional Services for parcel creation for carrier.
     *
     * @return bool
     */
    public function getAvailable(): bool
    {
        return $this->available;
    }
    /**
     * Indicates if Cash On Delivery is available as part of Additional Services for parcel creation for carrier.
     *
     * @param bool $available
     *
     * @return self
     */
    public function setAvailable(bool $available): self
    {
        $this->initialized['available'] = true;
        $this->available = $available;
        return $this;
    }
    /**
     * Postpaid Express service available. Postpaid value is send to parcel sender in one business day after delivery.
     *
     * @return bool
     */
    public function getExpressAvailable(): bool
    {
        return $this->expressAvailable;
    }
    /**
     * Postpaid Express service available. Postpaid value is send to parcel sender in one business day after delivery.
     *
     * @param bool $expressAvailable
     *
     * @return self
     */
    public function setExpressAvailable(bool $expressAvailable): self
    {
        $this->initialized['expressAvailable'] = true;
        $this->expressAvailable = $expressAvailable;
        return $this;
    }
}