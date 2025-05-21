<?php

namespace Jlonom\AllegroSDK\Model;

class StandardizedDescription extends \ArrayObject
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
     * @var list<DescriptionSection>
     */
    protected $sections;
    /**
     * 
     *
     * @return list<DescriptionSection>
     */
    public function getSections(): array
    {
        return $this->sections;
    }
    /**
     * 
     *
     * @param list<DescriptionSection> $sections
     *
     * @return self
     */
    public function setSections(array $sections): self
    {
        $this->initialized['sections'] = true;
        $this->sections = $sections;
        return $this;
    }
}