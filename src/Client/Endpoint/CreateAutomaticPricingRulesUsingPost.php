<?php

namespace Jlonom\AllegroSDK\Endpoint;

class CreateAutomaticPricingRulesUsingPost extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    /**
     * Use this resource to create automatic pricing rule. This resource is rate limited to 5 requests per second. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-utworzyc-wlasne-reguly-cenowe" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-create-own-pricing-rules" target="_blank">EN</a>.
     *
     * @param \Jlonom\AllegroSDK\Model\AutomaticPricingRulePostRequest $requestBody 
     */
    public function __construct(\Jlonom\AllegroSDK\Model\AutomaticPricingRulePostRequest $requestBody)
    {
        $this->body = $requestBody;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/sale/price-automation/rules';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jlonom\AllegroSDK\Model\AutomaticPricingRulePostRequest) {
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
     * @throws \Jlonom\AllegroSDK\Exception\CreateAutomaticPricingRulesUsingPostBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\CreateAutomaticPricingRulesUsingPostUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\CreateAutomaticPricingRulesUsingPostForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\CreateAutomaticPricingRulesUsingPostNotFoundException
     * @throws \Jlonom\AllegroSDK\Exception\CreateAutomaticPricingRulesUsingPostConflictException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (201 === $status) {
        }
        if (400 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\CreateAutomaticPricingRulesUsingPostBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\CreateAutomaticPricingRulesUsingPostUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\CreateAutomaticPricingRulesUsingPostForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\CreateAutomaticPricingRulesUsingPostNotFoundException($response);
        }
        if (409 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\CreateAutomaticPricingRulesUsingPostConflictException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}