<?php

namespace Jlonom\AllegroSDK\Model;

class AlleDiscountEligibleOfferDtoAlleDiscountCampaignConditionsViolationsItem extends \ArrayObject
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
     * Code of the violation.
     *
     * @var string
     */
    protected $code;
    /**
     * Violation description.
     *
     * @var string
     */
    protected $message;
    /**
     * Code of the violation.
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    /**
     * Code of the violation.
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Violation description.
     *
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    /**
     * Violation description.
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
}