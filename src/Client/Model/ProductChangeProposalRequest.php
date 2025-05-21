<?php

namespace Jlonom\AllegroSDK\Model;

class ProductChangeProposalRequest extends \ArrayObject
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
     * Proposed product name.
     *
     * @var string
     */
    protected $name;
    /**
     * Note about product changes proposal.
     *
     * @var string
     */
    protected $note;
    /**
     * Product category
     *
     * @var array<string, mixed>
     */
    protected $category;
    /**
     * List of product images. At least one image is required.
     *
     * @var list<ImageUrl>
     */
    protected $images;
    /**
     * List of product parameters.
     *
     * @var list<ProductParameter>
     */
    protected $parameters;
    /**
     * Receive an email notification after product changes proposal resolution.
     *
     * @var bool
     */
    protected $notifyViaEmailAfterVerification;
    /**
     * Language of provided proposal data.
     *
     * @var string
     */
    protected $language = 'pl-PL';
    /**
     * Proposed product name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Proposed product name.
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
     * Note about product changes proposal.
     *
     * @return string
     */
    public function getNote(): string
    {
        return $this->note;
    }
    /**
     * Note about product changes proposal.
     *
     * @param string $note
     *
     * @return self
     */
    public function setNote(string $note): self
    {
        $this->initialized['note'] = true;
        $this->note = $note;
        return $this;
    }
    /**
     * Product category
     *
     * @return array<string, mixed>
     */
    public function getCategory(): iterable
    {
        return $this->category;
    }
    /**
     * Product category
     *
     * @param array<string, mixed> $category
     *
     * @return self
     */
    public function setCategory(iterable $category): self
    {
        $this->initialized['category'] = true;
        $this->category = $category;
        return $this;
    }
    /**
     * List of product images. At least one image is required.
     *
     * @return list<ImageUrl>
     */
    public function getImages(): array
    {
        return $this->images;
    }
    /**
     * List of product images. At least one image is required.
     *
     * @param list<ImageUrl> $images
     *
     * @return self
     */
    public function setImages(array $images): self
    {
        $this->initialized['images'] = true;
        $this->images = $images;
        return $this;
    }
    /**
     * List of product parameters.
     *
     * @return list<ProductParameter>
     */
    public function getParameters(): array
    {
        return $this->parameters;
    }
    /**
     * List of product parameters.
     *
     * @param list<ProductParameter> $parameters
     *
     * @return self
     */
    public function setParameters(array $parameters): self
    {
        $this->initialized['parameters'] = true;
        $this->parameters = $parameters;
        return $this;
    }
    /**
     * Receive an email notification after product changes proposal resolution.
     *
     * @return bool
     */
    public function getNotifyViaEmailAfterVerification(): bool
    {
        return $this->notifyViaEmailAfterVerification;
    }
    /**
     * Receive an email notification after product changes proposal resolution.
     *
     * @param bool $notifyViaEmailAfterVerification
     *
     * @return self
     */
    public function setNotifyViaEmailAfterVerification(bool $notifyViaEmailAfterVerification): self
    {
        $this->initialized['notifyViaEmailAfterVerification'] = true;
        $this->notifyViaEmailAfterVerification = $notifyViaEmailAfterVerification;
        return $this;
    }
    /**
     * Language of provided proposal data.
     *
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }
    /**
     * Language of provided proposal data.
     *
     * @param string $language
     *
     * @return self
     */
    public function setLanguage(string $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;
        return $this;
    }
}