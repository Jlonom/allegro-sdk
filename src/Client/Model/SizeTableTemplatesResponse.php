<?php

namespace Jlonom\AllegroSDK\Model;

class SizeTableTemplatesResponse extends \ArrayObject
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
     * size tables templates
     *
     * @var list<SizeTableTemplateResponse>
     */
    protected $templates;
    /**
     * size tables templates
     *
     * @return list<SizeTableTemplateResponse>
     */
    public function getTemplates(): array
    {
        return $this->templates;
    }
    /**
     * size tables templates
     *
     * @param list<SizeTableTemplateResponse> $templates
     *
     * @return self
     */
    public function setTemplates(array $templates): self
    {
        $this->initialized['templates'] = true;
        $this->templates = $templates;
        return $this;
    }
}