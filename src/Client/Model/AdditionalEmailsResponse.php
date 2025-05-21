<?php

namespace Jlonom\AllegroSDK\Model;

class AdditionalEmailsResponse extends \ArrayObject
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
     * 
     *
     * @var list<AdditionalEmail>
     */
    protected $additionalEmails;
    /**
     * 
     *
     * @return list<AdditionalEmail>
     */
    public function getAdditionalEmails(): array
    {
        return $this->additionalEmails;
    }
    /**
     * 
     *
     * @param list<AdditionalEmail> $additionalEmails
     *
     * @return self
     */
    public function setAdditionalEmails(array $additionalEmails): self
    {
        $this->initialized['additionalEmails'] = true;
        $this->additionalEmails = $additionalEmails;
        return $this;
    }
}