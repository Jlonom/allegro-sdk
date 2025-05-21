<?php

namespace Jlonom\AllegroSDK\Model;

class ManualTranslationUpdateRequest extends \ArrayObject
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
     * Manual offer description translation
     *
     * @var ManualDescriptionTranslation
     */
    protected $description;
    /**
     * Manual offer title translation
     *
     * @var ManualTitleTranslation
     */
    protected $title;
    /**
     * Manual offer products safety information translations. Updating this resource is in accordance with <a href=" https://datatracker.ietf.org/doc/html/rfc7396/" target="_blank">RFC7396</a> - all or nothing.'
     *
     * @var ManualSafetyInformationTranslation
     */
    protected $safetyInformation;
    /**
     * Manual offer description translation
     *
     * @return ManualDescriptionTranslation
     */
    public function getDescription(): ManualDescriptionTranslation
    {
        return $this->description;
    }
    /**
     * Manual offer description translation
     *
     * @param ManualDescriptionTranslation $description
     *
     * @return self
     */
    public function setDescription(ManualDescriptionTranslation $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Manual offer title translation
     *
     * @return ManualTitleTranslation
     */
    public function getTitle(): ManualTitleTranslation
    {
        return $this->title;
    }
    /**
     * Manual offer title translation
     *
     * @param ManualTitleTranslation $title
     *
     * @return self
     */
    public function setTitle(ManualTitleTranslation $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * Manual offer products safety information translations. Updating this resource is in accordance with <a href=" https://datatracker.ietf.org/doc/html/rfc7396/" target="_blank">RFC7396</a> - all or nothing.'
     *
     * @return ManualSafetyInformationTranslation
     */
    public function getSafetyInformation(): ManualSafetyInformationTranslation
    {
        return $this->safetyInformation;
    }
    /**
     * Manual offer products safety information translations. Updating this resource is in accordance with <a href=" https://datatracker.ietf.org/doc/html/rfc7396/" target="_blank">RFC7396</a> - all or nothing.'
     *
     * @param ManualSafetyInformationTranslation $safetyInformation
     *
     * @return self
     */
    public function setSafetyInformation(ManualSafetyInformationTranslation $safetyInformation): self
    {
        $this->initialized['safetyInformation'] = true;
        $this->safetyInformation = $safetyInformation;
        return $this;
    }
}