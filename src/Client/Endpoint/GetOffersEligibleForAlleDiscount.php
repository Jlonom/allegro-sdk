<?php

namespace Jlonom\AllegroSDK\Endpoint;

class GetOffersEligibleForAlleDiscount extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $campaignId;
    /**
     * Endpoint returning info about offers that can be submitted to a given AlleDiscount campaign. Only offer linked to the product in published list of goods (products) can be submitted to a given AlleDiscount campaign. Read more: <a href="../../tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#lista-ofert-kwalifikujacych-sie-do-kampanii" target="_blank">PL</a> / <a href="../../tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#list-of-offers-eligible-for-the-selected-campaign" target="_blank">EN</a>.
     *
     * @param string $campaignId Campaign id to list offers from.
     * @param array $queryParameters {
     *     @var int $limit Maximum number of offers returned in the eligibleOffers list; max value is 200.
     *     @var int $offset The number of offers to skip while listing the results.
     *     @var bool $meetsConditions If true, filters offers that only meet conditions of the campaign.
     *     @var string $offerId ID of an offer; if the offer with the given ID exists, returns at most one element in the eligibleOffers list.
     * }
     */
    public function __construct(string $campaignId, array $queryParameters = [])
    {
        $this->campaignId = $campaignId;
        $this->queryParameters = $queryParameters;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{campaignId}'], [$this->campaignId], '/sale/alle-discount/{campaignId}/eligible-offers');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/vnd.allegro.public.v1+json']];
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['limit', 'offset', 'meetsConditions', 'offerId']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('offset', ['int']);
        $optionsResolver->addAllowedTypes('meetsConditions', ['bool']);
        $optionsResolver->addAllowedTypes('offerId', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jlonom\AllegroSDK\Exception\GetOffersEligibleForAlleDiscountUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetOffersEligibleForAlleDiscountForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetOffersEligibleForAlleDiscountNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
        }
        if (400 === $status) {
        }
        if (401 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetOffersEligibleForAlleDiscountUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetOffersEligibleForAlleDiscountForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetOffersEligibleForAlleDiscountNotFoundException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}