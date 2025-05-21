<?php

namespace Jlonom\AllegroSDK\Model;

class OfferImageUploadResponse extends \ArrayObject
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
     * Date of file expiration (removal from the server). We will remove it unless you use it in your offer.
     *
     * @var \DateTime
     */
    protected $expiresAt;
    /**
     * Link to the uploaded image
     *
     * @var string
     */
    protected $location;
    /**
     * Date of file expiration (removal from the server). We will remove it unless you use it in your offer.
     *
     * @return \DateTime
     */
    public function getExpiresAt(): \DateTime
    {
        return $this->expiresAt;
    }
    /**
     * Date of file expiration (removal from the server). We will remove it unless you use it in your offer.
     *
     * @param \DateTime $expiresAt
     *
     * @return self
     */
    public function setExpiresAt(\DateTime $expiresAt): self
    {
        $this->initialized['expiresAt'] = true;
        $this->expiresAt = $expiresAt;
        return $this;
    }
    /**
     * Link to the uploaded image
     *
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }
    /**
     * Link to the uploaded image
     *
     * @param string $location
     *
     * @return self
     */
    public function setLocation(string $location): self
    {
        $this->initialized['location'] = true;
        $this->location = $location;
        return $this;
    }
}