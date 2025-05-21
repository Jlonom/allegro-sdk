<?php

namespace Jlonom\AllegroSDK\Endpoint;

class GetOffersSubmittedToAlleDiscount extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $campaignId;
    /**
     * Endpoint returning info about offer participations for a given AlleDiscount campaign. With this endpoint you are able to validate if the offer participates in AlleDiscount and if it has lowered price on the platform. Read more: <a href="../../tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#lista-ofert-zgloszonych-do-wybranej-kampanii" target="_blank">PL</a> / <a href="../../tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#list-of-offers-submitted-for-the-selected-campaign" target="_blank">EN</a>.
     *
     * @param string $campaignId Campaign id to list offers from.
     * @param array $queryParameters {
     *     @var int $limit Maximum number of offers returned in the eligibleOffers list; max value is 200.
     *     @var int $offset The number of offers to skip while listing the results.
     *     @var string $offerId ID of an offer; if the offer with the given ID exists, returns at most one element in the submittedOffers list.
     *     @var string $participationId Id of the participation, returns at most one element in the submittedOffers list.
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
        return str_replace(['{campaignId}'], [$this->campaignId], '/sale/alle-discount/{campaignId}/submitted-offers');
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
        $optionsResolver->setDefined(['limit', 'offset', 'offerId', 'participationId']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('offset', ['int']);
        $optionsResolver->addAllowedTypes('offerId', ['string']);
        $optionsResolver->addAllowedTypes('participationId', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jlonom\AllegroSDK\Exception\GetOffersSubmittedToAlleDiscountUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetOffersSubmittedToAlleDiscountForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetOffersSubmittedToAlleDiscountNotFoundException
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
            throw new \Jlonom\AllegroSDK\Exception\GetOffersSubmittedToAlleDiscountUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetOffersSubmittedToAlleDiscountForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetOffersSubmittedToAlleDiscountNotFoundException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}