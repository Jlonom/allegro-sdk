<?php

namespace Jlonom\AllegroSDK\Endpoint;

class GetAutomaticPricingRuleByIdUsingGET extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $ruleId;
    /**
     * Use this resource to get automatic pricing rule by id. Rules with property **default** set to **true** are default rules created by Allegro for each merchant and cannot be modified. This resource is rate limited to 5 requests per second. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-pobrac-dostepne-reguly-cenowe" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-retrieve-pricing-rules" target="_blank">EN</a>.
     *
     * @param string $ruleId The rule identifier.
     */
    public function __construct(string $ruleId)
    {
        $this->ruleId = $ruleId;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{ruleId}'], [$this->ruleId], '/sale/price-automation/rules/{ruleId}');
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
     * @throws \Jlonom\AllegroSDK\Exception\GetAutomaticPricingRuleByIdUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetAutomaticPricingRuleByIdUsingGETNotFoundException
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
            throw new \Jlonom\AllegroSDK\Exception\GetAutomaticPricingRuleByIdUsingGETUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetAutomaticPricingRuleByIdUsingGETNotFoundException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}