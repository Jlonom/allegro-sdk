<?php

namespace Jlonom\AllegroSDK\Model;

class AfterSalesServicesAttachment extends \ArrayObject
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
     * The Id of the attachment.
     *
     * @var string
     */
    protected $id;
    /**
     * Attachment file name.
     *
     * @var string
     */
    protected $name;
    /**
     * Direct link to the attachment.
     *
     * @var string
     */
    protected $url;
    /**
     * The Id of the attachment.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The Id of the attachment.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Attachment file name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Attachment file name.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Direct link to the attachment.
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
    /**
     * Direct link to the attachment.
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