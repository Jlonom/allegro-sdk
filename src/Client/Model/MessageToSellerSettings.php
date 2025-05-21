<?php

namespace Jlonom\AllegroSDK\Model;

class MessageToSellerSettings extends \ArrayObject
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
     * Specify message to seller type.
     * `OPTIONAL`: buyer is able to enter a message for the seller
     * `HIDDEN`: there is no message box for the seller
     * `REQUIRED`: buyer is forced to enter a message for the seller (limited to categories with `sellerCanRequirePurchaseComments` option)
     *
     * @var string
     */
    protected $mode;
    /**
     * Specify hint for REQUIRED message displayed for buyer
     *
     * @var string
     */
    protected $hint;
    /**
     * Specify message to seller type.
     * `OPTIONAL`: buyer is able to enter a message for the seller
     * `HIDDEN`: there is no message box for the seller
     * `REQUIRED`: buyer is forced to enter a message for the seller (limited to categories with `sellerCanRequirePurchaseComments` option)
     *
     * @return string
     */
    public function getMode(): string
    {
        return $this->mode;
    }
    /**
     * Specify message to seller type.
     * `OPTIONAL`: buyer is able to enter a message for the seller
     * `HIDDEN`: there is no message box for the seller
     * `REQUIRED`: buyer is forced to enter a message for the seller (limited to categories with `sellerCanRequirePurchaseComments` option)
     *
     * @param string $mode
     *
     * @return self
     */
    public function setMode(string $mode): self
    {
        $this->initialized['mode'] = true;
        $this->mode = $mode;
        return $this;
    }
    /**
     * Specify hint for REQUIRED message displayed for buyer
     *
     * @return string
     */
    public function getHint(): string
    {
        return $this->hint;
    }
    /**
     * Specify hint for REQUIRED message displayed for buyer
     *
     * @param string $hint
     *
     * @return self
     */
    public function setHint(string $hint): self
    {
        $this->initialized['hint'] = true;
        $this->hint = $hint;
        return $this;
    }
}