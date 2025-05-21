<?php

namespace Jlonom\AllegroSDK\Model;

class CompatibilityListTextItem extends CompatibilityListItem
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
     * Text description of the compatible item. Maximum length of the text depends on category where compatible item is used. Should be used in categories where TEXT version of compatible list is supported. See <a href="/documentation/#tag/Compatibility-List/paths/~1sale~1compatibility-list~1supported-categories/get"> supported-categories</a> resource. <a href="../../compatibility_list" target="_blank">Read more</a>.
     *
     * @var string
     */
    protected $text;
    /**
     * Text description of the compatible item. Maximum length of the text depends on category where compatible item is used. Should be used in categories where TEXT version of compatible list is supported. See <a href="/documentation/#tag/Compatibility-List/paths/~1sale~1compatibility-list~1supported-categories/get"> supported-categories</a> resource. <a href="../../compatibility_list" target="_blank">Read more</a>.
     *
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }
    /**
     * Text description of the compatible item. Maximum length of the text depends on category where compatible item is used. Should be used in categories where TEXT version of compatible list is supported. See <a href="/documentation/#tag/Compatibility-List/paths/~1sale~1compatibility-list~1supported-categories/get"> supported-categories</a> resource. <a href="../../compatibility_list" target="_blank">Read more</a>.
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
}