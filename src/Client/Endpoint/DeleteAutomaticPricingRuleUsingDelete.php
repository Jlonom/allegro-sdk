<?php

namespace Jlonom\AllegroSDK\Endpoint;

class DeleteAutomaticPricingRuleUsingDelete extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $ruleId;
    /**
     * Use this resource to delete automatic pricing rule. This resource is rate limited to 5 requests per second. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-usunac-regule-cenowa" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-delete-a-pricing-rule" target="_blank">EN</a>.
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
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{ruleId}'], [$this->ruleId], '/sale/price-automation/rules/{ruleId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jlonom\AllegroSDK\Exception\DeleteAutomaticPricingRuleUsingDeleteUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\DeleteAutomaticPricingRuleUsingDeleteForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\DeleteAutomaticPricingRuleUsingDeleteNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (204 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\DeleteAutomaticPricingRuleUsingDeleteUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\DeleteAutomaticPricingRuleUsingDeleteForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\DeleteAutomaticPricingRuleUsingDeleteNotFoundException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}