<?php

namespace Jlonom\AllegroSDK\Model;

class AlleDiscountWithdrawCommandRequestInput extends \ArrayObject
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
     * The id of the offer participation you wish to withdraw. Participation id can be found using `GET /sale/alle-discount/{campaignId}/submitted-offers` or `GET /sale/alle-discount/submit-offer-commands` endpoints.
     *
     * @var string
     */
    protected $participationId;
    /**
     * The id of the offer participation you wish to withdraw. Participation id can be found using `GET /sale/alle-discount/{campaignId}/submitted-offers` or `GET /sale/alle-discount/submit-offer-commands` endpoints.
     *
     * @return string
     */
    public function getParticipationId(): string
    {
        return $this->participationId;
    }
    /**
     * The id of the offer participation you wish to withdraw. Participation id can be found using `GET /sale/alle-discount/{campaignId}/submitted-offers` or `GET /sale/alle-discount/submit-offer-commands` endpoints.
     *
     * @param string $participationId
     *
     * @return self
     */
    public function setParticipationId(string $participationId): self
    {
        $this->initialized['participationId'] = true;
        $this->participationId = $participationId;
        return $this;
    }
}