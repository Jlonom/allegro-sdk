<?php

namespace Jlonom\AllegroSDK\Model;

class OfferAttachmentRequest extends \ArrayObject
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
     * offer attachment type
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var AttachmentFileRequest
     */
    protected $file;
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
     * @return AttachmentFileRequest
     */
    public function getFile(): AttachmentFileRequest
    {
        return $this->file;
    }
    /**
     * 
     *
     * @param AttachmentFileRequest $file
     *
     * @return self
     */
    public function setFile(AttachmentFileRequest $file): self
    {
        $this->initialized['file'] = true;
        $this->file = $file;
        return $this;
    }
}