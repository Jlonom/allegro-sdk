<?php

namespace Jlonom\AllegroSDK\Model;

class CompatibilityListSupportedCategoriesDtoSupportedCategoriesItemValidationRules extends \ArrayObject
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
     * Maximum number of items allowed on compatibility list.
     *
     * @var int
     */
    protected $maxRows;
    /**
     * Maximum length of single item on the list.
     *
     * @var int
     */
    protected $maxCharactersPerLine;
    /**
     * Maximum number of items allowed on compatibility list.
     *
     * @return int
     */
    public function getMaxRows(): int
    {
        return $this->maxRows;
    }
    /**
     * Maximum number of items allowed on compatibility list.
     *
     * @param int $maxRows
     *
     * @return self
     */
    public function setMaxRows(int $maxRows): self
    {
        $this->initialized['maxRows'] = true;
        $this->maxRows = $maxRows;
        return $this;
    }
    /**
     * Maximum length of single item on the list.
     *
     * @return int
     */
    public function getMaxCharactersPerLine(): int
    {
        return $this->maxCharactersPerLine;
    }
    /**
     * Maximum length of single item on the list.
     *
     * @param int $maxCharactersPerLine
     *
     * @return self
     */
    public function setMaxCharactersPerLine(int $maxCharactersPerLine): self
    {
        $this->initialized['maxCharactersPerLine'] = true;
        $this->maxCharactersPerLine = $maxCharactersPerLine;
        return $this;
    }
}