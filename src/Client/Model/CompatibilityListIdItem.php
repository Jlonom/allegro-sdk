<?php

namespace Jlonom\AllegroSDK\Model;

class CompatibilityListIdItem extends CompatibilityListItem
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
     * Id of the compatible item. Should be used in categories where ID version of compatible list is supported. See <a href="/documentation/#tag/Compatibility-List/paths/~1sale~1compatibility-list~1supported-categories/get"> supported-categories</a> resource. <a href="../../compatibility_list" target="_blank">Read more</a>.
     *
     * @var string
     */
    protected $id;
    /**
     * Text description of the compatible item. When creating (Post) or updating (Put) a compatibility list the field is ignored.
     *
     * @var string
     */
    protected $text;
    /**
     * Details of the compatible item represented by ID.
     *
     * @var list<CompatibilityListIdItemAdditionalInfo>
     */
    protected $additionalInfo;
    /**
     * Id of the compatible item. Should be used in categories where ID version of compatible list is supported. See <a href="/documentation/#tag/Compatibility-List/paths/~1sale~1compatibility-list~1supported-categories/get"> supported-categories</a> resource. <a href="../../compatibility_list" target="_blank">Read more</a>.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Id of the compatible item. Should be used in categories where ID version of compatible list is supported. See <a href="/documentation/#tag/Compatibility-List/paths/~1sale~1compatibility-list~1supported-categories/get"> supported-categories</a> resource. <a href="../../compatibility_list" target="_blank">Read more</a>.
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
     * Text description of the compatible item. When creating (Post) or updating (Put) a compatibility list the field is ignored.
     *
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }
    /**
     * Text description of the compatible item. When creating (Post) or updating (Put) a compatibility list the field is ignored.
     *
     * @param string $text
     *
     * @return self
     */
    public function setText(string $text): self
    {
        $this->initialized['text'] = true;
        $this->text = $text;
        return $this;
    }
    /**
     * Details of the compatible item represented by ID.
     *
     * @return list<CompatibilityListIdItemAdditionalInfo>
     */
    public function getAdditionalInfo(): array
    {
        return $this->additionalInfo;
    }
    /**
     * Details of the compatible item represented by ID.
     *
     * @param list<CompatibilityListIdItemAdditionalInfo> $additionalInfo
     *
     * @return self
     */
    public function setAdditionalInfo(array $additionalInfo): self
    {
        $this->initialized['additionalInfo'] = true;
        $this->additionalInfo = $additionalInfo;
        return $this;
    }
}