<?php

namespace Jlonom\AllegroSDK\Model;

class RequirementChange extends CategoryParametersScheduledBaseChange
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
     * Category parameter scheduled change category data.
     *
     * @var CategoryParametersScheduledBaseChangeCategory
     */
    protected $category;
    /**
     * Category parameter scheduled change parameter data.
     *
     * @var CategoryParametersScheduledBaseChangeParameter
     */
    protected $parameter;
    /**
     * Category parameter scheduled change category data.
     *
     * @return CategoryParametersScheduledBaseChangeCategory
     */
    public function getCategory(): CategoryParametersScheduledBaseChangeCategory
    {
        return $this->category;
    }
    /**
     * Category parameter scheduled change category data.
     *
     * @param CategoryParametersScheduledBaseChangeCategory $category
     *
     * @return self
     */
    public function setCategory(CategoryParametersScheduledBaseChangeCategory $category): self
    {
        $this->initialized['category'] = true;
        $this->category = $category;
        return $this;
    }
    /**
     * Category parameter scheduled change parameter data.
     *
     * @return CategoryParametersScheduledBaseChangeParameter
     */
    public function getParameter(): CategoryParametersScheduledBaseChangeParameter
    {
        return $this->parameter;
    }
    /**
     * Category parameter scheduled change parameter data.
     *
     * @param CategoryParametersScheduledBaseChangeParameter $parameter
     *
     * @return self
     */
    public function setParameter(CategoryParametersScheduledBaseChangeParameter $parameter): self
    {
        $this->initialized['parameter'] = true;
        $this->parameter = $parameter;
        return $this;
    }
}