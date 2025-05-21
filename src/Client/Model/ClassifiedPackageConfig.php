<?php

namespace Jlonom\AllegroSDK\Model;

class ClassifiedPackageConfig extends \ArrayObject
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
     * @var list<ClassifiedExtension>
     */
    protected $extensions;
    /**
     * The classifieds package ID.
     *
     * @var string
     */
    protected $id;
    /**
     * The classifieds package name.
     *
     * @var string
     */
    protected $name;
    /**
     * A list of additional promotions included in the package.
     *
     * @var list<ClassifiedPromotion>
     */
    protected $promotions;
    /**
     * 
     *
     * @var ClassifiedPublication
     */
    protected $publication;
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @return list<ClassifiedExtension>
     */
    public function getExtensions(): array
    {
        return $this->extensions;
    }
    /**
     * 
     *
     * @param list<ClassifiedExtension> $extensions
     *
     * @return self
     */
    public function setExtensions(array $extensions): self
    {
        $this->initialized['extensions'] = true;
        $this->extensions = $extensions;
        return $this;
    }
    /**
     * The classifieds package ID.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The classifieds package ID.
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
     * The classifieds package name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The classifieds package name.
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
     * A list of additional promotions included in the package.
     *
     * @return list<ClassifiedPromotion>
     */
    public function getPromotions(): array
    {
        return $this->promotions;
    }
    /**
     * A list of additional promotions included in the package.
     *
     * @param list<ClassifiedPromotion> $promotions
     *
     * @return self
     */
    public function setPromotions(array $promotions): self
    {
        $this->initialized['promotions'] = true;
        $this->promotions = $promotions;
        return $this;
    }
    /**
     * 
     *
     * @return ClassifiedPublication
     */
    public function getPublication(): ClassifiedPublication
    {
        return $this->publication;
    }
    /**
     * 
     *
     * @param ClassifiedPublication $publication
     *
     * @return self
     */
    public function setPublication(ClassifiedPublication $publication): self
    {
        $this->initialized['publication'] = true;
        $this->publication = $publication;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * 
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
}