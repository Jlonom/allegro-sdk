<?php

namespace Jlonom\AllegroSDK\Model;

class OfferAttachment extends \ArrayObject
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
     * @var string
     */
    protected $id;
    /**
     * offer attachment type
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var AttachmentFile
     */
    protected $file;
    /**
     * 
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * 
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
     * offer attachment type
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * offer attachment type
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return AttachmentFile
     */
    public function getFile(): AttachmentFile
    {
        return $this->file;
    }
    /**
     * 
     *
     * @param AttachmentFile $file
     *
     * @return self
     */
    public function setFile(AttachmentFile $file): self
    {
        $this->initialized['file'] = true;
        $this->file = $file;
        return $this;
    }
}