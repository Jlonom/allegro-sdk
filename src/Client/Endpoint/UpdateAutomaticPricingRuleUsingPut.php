<?php

namespace Jlonom\AllegroSDK\Endpoint;

class UpdateAutomaticPricingRuleUsingPut extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $ruleId;
    /**
     * Use this resource to update automatic pricing rule. This resource is rate limited to 5 requests per second. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-edytowac-regule-cenowa" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-modify-a-pricing-rule" target="_blank">EN</a>.
     *
     * @param string $ruleId The rule identifier.
     * @param \Jlonom\AllegroSDK\Model\AutomaticPricingRulePutRequest $requestBody 
     */
    public function __construct(string $ruleId, \Jlonom\AllegroSDK\Model\AutomaticPricingRulePutRequest $requestBody)
    {
        $this->ruleId = $ruleId;
        $this->body = $requestBody;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{ruleId}'], [$this->ruleId], '/sale/price-automation/rules/{ruleId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jlonom\AllegroSDK\Model\AutomaticPricingRulePutRequest) {
            return [['Content-Type' => ['application/vnd.allegro.public.v1+json']], $this->body];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/vnd.allegro.public.v1+json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jlonom\AllegroSDK\Exception\UpdateAutomaticPricingRuleUsingPutBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\UpdateAutomaticPricingRuleUsingPutUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\UpdateAutomaticPricingRuleUsingPutForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\UpdateAutomaticPricingRuleUsingPutNotFoundException
     * @throws \Jlonom\AllegroSDK\Exception\UpdateAutomaticPricingRuleUsingPutConflictException
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
            throw new \Jlonom\AllegroSDK\Exception\UpdateAutomaticPricingRuleUsingPutBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\UpdateAutomaticPricingRuleUsingPutUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\UpdateAutomaticPricingRuleUsingPutForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\UpdateAutomaticPricingRuleUsingPutNotFoundException($response);
        }
        if (409 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\UpdateAutomaticPricingRuleUsingPutConflictException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}