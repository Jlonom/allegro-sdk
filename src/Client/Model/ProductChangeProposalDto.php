<?php

namespace Jlonom\AllegroSDK\Model;

class ProductChangeProposalDto extends \ArrayObject
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
     * Product change proposal id
     *
     * @var string
     */
    protected $id;
    /**
     * Name proposal status.
     *
     * @var ProductNameProposal
     */
    protected $name;
    /**
     * Name proposal status.
     *
     * @var ProductCategoryProposal
     */
    protected $category;
    /**
     * Note about product changes proposal.
     *
     * @var string
     */
    protected $note;
    /**
     * List of proposed image change statuses.
     *
     * @var list<ProductImageProposal>
     */
    protected $images;
    /**
     * List of proposed product parameter change statuses.
     *
     * @var list<ProductParameterProposal>
     */
    protected $parameters;
    /**
     * Receive an email notification after product changes proposal resolution.
     *
     * @var bool
     */
    protected $notifyViaEmailAfterVerification;
    /**
     * Language of provided suggestion data.
     *
     * @var string
     */
    protected $language;
    /**
     * Product change proposal id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Product change proposal id
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
     * Name proposal status.
     *
     * @return ProductNameProposal
     */
    public function getName(): ProductNameProposal
    {
        return $this->name;
    }
    /**
     * Name proposal status.
     *
     * @param ProductNameProposal $name
     *
     * @return self
     */
    public function setName(ProductNameProposal $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Name proposal status.
     *
     * @return ProductCategoryProposal
     */
    public function getCategory(): ProductCategoryProposal
    {
        return $this->category;
    }
    /**
     * Name proposal status.
     *
     * @param ProductCategoryProposal $category
     *
     * @return self
     */
    public function setCategory(ProductCategoryProposal $category): self
    {
        $this->initialized['category'] = true;
        $this->category = $category;
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
     * List of proposed image change statuses.
     *
     * @return list<ProductImageProposal>
     */
    public function getImages(): array
    {
        return $this->images;
    }
    /**
     * List of proposed image change statuses.
     *
     * @param list<ProductImageProposal> $images
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
     * List of proposed product parameter change statuses.
     *
     * @return list<ProductParameterProposal>
     */
    public function getParameters(): array
    {
        return $this->parameters;
    }
    /**
     * List of proposed product parameter change statuses.
     *
     * @param list<ProductParameterProposal> $parameters
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
     * Language of provided suggestion data.
     *
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }
    /**
     * Language of provided suggestion data.
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