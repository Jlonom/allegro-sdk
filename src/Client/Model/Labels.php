<?php

namespace Jlonom\AllegroSDK\Model;

class Labels extends \ArrayObject
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
     * An URI to file containing labels.
     *
     * @var string
     */
    protected $fileUrl;
    /**
     * An URI to file containing labels.
     *
     * @return string
     */
    public function getFileUrl(): string
    {
        return $this->fileUrl;
    }
    /**
     * An URI to file containing labels.
     *
     * @param string $fileUrl
     *
     * @return self
     */
    public function setFileUrl(string $fileUrl): self
    {
        $this->initialized['fileUrl'] = true;
        $this->fileUrl = $fileUrl;
        return $this;
    }
}