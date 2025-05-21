<?php

namespace Jlonom\AllegroSDK\Model;

class OfferImageLinkUploadRequest extends \ArrayObject
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
     * URL of the image. It has to contain domain name, not an IP address. Currently we support http and https protocols. When using https the certificate chain needs to be valid.
     *
     * @var string
     */
    protected $url;
    /**
     * URL of the image. It has to contain domain name, not an IP address. Currently we support http and https protocols. When using https the certificate chain needs to be valid.
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
    /**
     * URL of the image. It has to contain domain name, not an IP address. Currently we support http and https protocols. When using https the certificate chain needs to be valid.
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
}