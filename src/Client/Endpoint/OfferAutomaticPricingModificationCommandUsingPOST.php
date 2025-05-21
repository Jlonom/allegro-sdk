<?php

namespace Jlonom\AllegroSDK\Endpoint;

class OfferAutomaticPricingModificationCommandUsingPOST extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    /**
     * Use this resource to modify the automatic pricing rules of multiple offers at the same time. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#reguly-cenowe" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#pricing-rules" target="_blank">EN</a>. This resource is rate limited to 150 000 offer changes per hour or 9000 offer changes per minute.
     *
     * @param \Jlonom\AllegroSDK\Model\OfferAutomaticPricingCommand $requestBody 
     */
    public function __construct(\Jlonom\AllegroSDK\Model\OfferAutomaticPricingCommand $requestBody)
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
        return '/sale/offer-price-automation-commands';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jlonom\AllegroSDK\Model\OfferAutomaticPricingCommand) {
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
     * @throws \Jlonom\AllegroSDK\Exception\OfferAutomaticPricingModificationCommandUsingPOSTBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\OfferAutomaticPricingModificationCommandUsingPOSTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\OfferAutomaticPricingModificationCommandUsingPOSTForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\OfferAutomaticPricingModificationCommandUsingPOSTConflictException
     * @throws \Jlonom\AllegroSDK\Exception\OfferAutomaticPricingModificationCommandUsingPOSTUnprocessableEntityException
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
            throw new \Jlonom\AllegroSDK\Exception\OfferAutomaticPricingModificationCommandUsingPOSTBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\OfferAutomaticPricingModificationCommandUsingPOSTUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\OfferAutomaticPricingModificationCommandUsingPOSTForbiddenException($response);
        }
        if (409 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\OfferAutomaticPricingModificationCommandUsingPOSTConflictException($response);
        }
        if (422 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\OfferAutomaticPricingModificationCommandUsingPOSTUnprocessableEntityException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}