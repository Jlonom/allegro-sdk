<?php

namespace Jlonom\AllegroSDK\Model;

class BaseSaleProductResponseDto extends \ArrayObject
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
     * Name of the product.
     *
     * @var string
     */
    protected $name;
    /**
     * The description section cannot have more than 40000 bytes in length.
     *
     * @var StandardizedDescription
     */
    protected $description;
    /**
     * Category in which the product can be listed for sale
     *
     * @var ProductCategoryWithPath
     */
    protected $category;
    /**
     * 
     *
     * @var list<ImageUrl>
     */
    protected $images;
    /**
     * 
     *
     * @var list<ProductParameterDto>
     */
    protected $parameters;
    /**
     * Flag that informs if product is waiting for resolution of basic parameters change proposal.
     *
     * @var bool
     */
    protected $isDraft;
    /**
     * Each path will point to a specific field in object which is co-created by AI.
     *
     * @var AiCoCreatedContent
     */
    protected $aiCoCreatedContent;
    /**
     * Each path will point to a specific field in the product object, indicating that given product part data originates directly from the manufacturer, its representative, or a trusted source.
     *
     * @var TrustedContent
     */
    protected $trustedContent;
    /**
     * Flag that informs if product is a part of a protected brand's assortment and its use may be restricted.
     *
     * @var bool
     */
    protected $hasProtectedBrand;
    /**
     * Suggested product safety data in accordance with GPSR. **Note:** Allegro does not assume responsibility for the accuracy of this data. It is the merchant's responsibility to verify its applicability to their product.
     *
     * @var ProductSafetyDto|null
     */
    protected $productSafety;
    /**
     * 
     *
     * @var BaseSaleProductResponseDtoPublication
     */
    protected $publication;
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
     * Name of the product.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of the product.
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
     * The description section cannot have more than 40000 bytes in length.
     *
     * @return StandardizedDescription
     */
    public function getDescription(): StandardizedDescription
    {
        return $this->description;
    }
    /**
     * The description section cannot have more than 40000 bytes in length.
     *
     * @param StandardizedDescription $description
     *
     * @return self
     */
    public function setDescription(StandardizedDescription $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Category in which the product can be listed for sale
     *
     * @return ProductCategoryWithPath
     */
    public function getCategory(): ProductCategoryWithPath
    {
        return $this->category;
    }
    /**
     * Category in which the product can be listed for sale
     *
     * @param ProductCategoryWithPath $category
     *
     * @return self
     */
    public function setCategory(ProductCategoryWithPath $category): self
    {
        $this->initialized['category'] = true;
        $this->category = $category;
        return $this;
    }
    /**
     * 
     *
     * @return list<ImageUrl>
     */
    public function getImages(): array
    {
        return $this->images;
    }
    /**
     * 
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
     * 
     *
     * @return list<ProductParameterDto>
     */
    public function getParameters(): array
    {
        return $this->parameters;
    }
    /**
     * 
     *
     * @param list<ProductParameterDto> $parameters
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
     * Flag that informs if product is waiting for resolution of basic parameters change proposal.
     *
     * @return bool
     */
    public function getIsDraft(): bool
    {
        return $this->isDraft;
    }
    /**
     * Flag that informs if product is waiting for resolution of basic parameters change proposal.
     *
     * @param bool $isDraft
     *
     * @return self
     */
    public function setIsDraft(bool $isDraft): self
    {
        $this->initialized['isDraft'] = true;
        $this->isDraft = $isDraft;
        return $this;
    }
    /**
     * Each path will point to a specific field in object which is co-created by AI.
     *
     * @return AiCoCreatedContent
     */
    public function getAiCoCreatedContent(): AiCoCreatedContent
    {
        return $this->aiCoCreatedContent;
    }
    /**
     * Each path will point to a specific field in object which is co-created by AI.
     *
     * @param AiCoCreatedContent $aiCoCreatedContent
     *
     * @return self
     */
    public function setAiCoCreatedContent(AiCoCreatedContent $aiCoCreatedContent): self
    {
        $this->initialized['aiCoCreatedContent'] = true;
        $this->aiCoCreatedContent = $aiCoCreatedContent;
        return $this;
    }
    /**
     * Each path will point to a specific field in the product object, indicating that given product part data originates directly from the manufacturer, its representative, or a trusted source.
     *
     * @return TrustedContent
     */
    public function getTrustedContent(): TrustedContent
    {
        return $this->trustedContent;
    }
    /**
     * Each path will point to a specific field in the product object, indicating that given product part data originates directly from the manufacturer, its representative, or a trusted source.
     *
     * @param TrustedContent $trustedContent
     *
     * @return self
     */
    public function setTrustedContent(TrustedContent $trustedContent): self
    {
        $this->initialized['trustedContent'] = true;
        $this->trustedContent = $trustedContent;
        return $this;
    }
    /**
     * Flag that informs if product is a part of a protected brand's assortment and its use may be restricted.
     *
     * @return bool
     */
    public function getHasProtectedBrand(): bool
    {
        return $this->hasProtectedBrand;
    }
    /**
     * Flag that informs if product is a part of a protected brand's assortment and its use may be restricted.
     *
     * @param bool $hasProtectedBrand
     *
     * @return self
     */
    public function setHasProtectedBrand(bool $hasProtectedBrand): self
    {
        $this->initialized['hasProtectedBrand'] = true;
        $this->hasProtectedBrand = $hasProtectedBrand;
        return $this;
    }
    /**
     * Suggested product safety data in accordance with GPSR. **Note:** Allegro does not assume responsibility for the accuracy of this data. It is the merchant's responsibility to verify its applicability to their product.
     *
     * @return ProductSafetyDto|null
     */
    public function getProductSafety(): ?ProductSafetyDto
    {
        return $this->productSafety;
    }
    /**
     * Suggested product safety data in accordance with GPSR. **Note:** Allegro does not assume responsibility for the accuracy of this data. It is the merchant's responsibility to verify its applicability to their product.
     *
     * @param ProductSafetyDto|null $productSafety
     *
     * @return self
     */
    public function setProductSafety(?ProductSafetyDto $productSafety): self
    {
        $this->initialized['productSafety'] = true;
        $this->productSafety = $productSafety;
        return $this;
    }
    /**
     * 
     *
     * @return BaseSaleProductResponseDtoPublication
     */
    public function getPublication(): BaseSaleProductResponseDtoPublication
    {
        return $this->publication;
    }
    /**
     * 
     *
     * @param BaseSaleProductResponseDtoPublication $publication
     *
     * @return self
     */
    public function setPublication(BaseSaleProductResponseDtoPublication $publication): self
    {
        $this->initialized['publication'] = true;
        $this->publication = $publication;
        return $this;
    }
}