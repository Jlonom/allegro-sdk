<?php

namespace Jlonom\AllegroSDK\Endpoint;

class GetAutomaticPricingRulesForOfferUsingGET extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $offerId;
    /**
     * Use this resource to get automatic pricing rules for offer. This resource is rate limited to 5 requests per second. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-sprawdzic-aktualnie-przypisane-reguly-przelicznika-cen-w-ofercie" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-check-price-automation-rules-currently-assigned-to-offer" target="_blank">EN</a>.
     *
     * @param string $offerId The offer identifier.
     */
    public function __construct(string $offerId)
    {
        $this->offerId = $offerId;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{offerId}'], [$this->offerId], '/sale/price-automation/offers/{offerId}/rules');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/vnd.allegro.public.v1+json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jlonom\AllegroSDK\Exception\GetAutomaticPricingRulesForOfferUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetAutomaticPricingRulesForOfferUsingGETForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetAutomaticPricingRulesForOfferUsingGETNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
        }
        if (401 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetAutomaticPricingRulesForOfferUsingGETUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetAutomaticPricingRulesForOfferUsingGETForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetAutomaticPricingRulesForOfferUsingGETNotFoundException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}