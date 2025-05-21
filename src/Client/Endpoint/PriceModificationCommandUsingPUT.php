<?php

namespace Jlonom\AllegroSDK\Endpoint;

class PriceModificationCommandUsingPUT extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $commandId;
    /**
     * Change price of offers. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#cena" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#price" target="_blank">EN</a>. This resource is rate limited to 150 000 offer changes per hour or 9000 offer changes per minute.
     *
     * @param string $commandId Command identifier.
     * @param \Jlonom\AllegroSDK\Model\OfferPriceChangeCommand $requestBody 
     */
    public function __construct(string $commandId, \Jlonom\AllegroSDK\Model\OfferPriceChangeCommand $requestBody)
    {
        $this->commandId = $commandId;
        $this->body = $requestBody;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{commandId}'], [$this->commandId], '/sale/offer-price-change-commands/{commandId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jlonom\AllegroSDK\Model\OfferPriceChangeCommand) {
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
     * @throws \Jlonom\AllegroSDK\Exception\PriceModificationCommandUsingPUTBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\PriceModificationCommandUsingPUTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\PriceModificationCommandUsingPUTConflictException
     * @throws \Jlonom\AllegroSDK\Exception\PriceModificationCommandUsingPUTUnprocessableEntityException
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
            throw new \Jlonom\AllegroSDK\Exception\PriceModificationCommandUsingPUTBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\PriceModificationCommandUsingPUTUnauthorizedException($response);
        }
        if (409 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\PriceModificationCommandUsingPUTConflictException($response);
        }
        if (422 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\PriceModificationCommandUsingPUTUnprocessableEntityException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}