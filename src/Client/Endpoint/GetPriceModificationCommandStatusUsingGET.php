<?php

namespace Jlonom\AllegroSDK\Endpoint;

class GetPriceModificationCommandStatusUsingGET extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $commandId;
    /**
     * Returns status and summary of particular command execution. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#cena" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#price" target="_blank">EN</a>. This resource is rate limited to retrieving information about 270 000 offer changes per minute.
     *
     * @param string $commandId Command identifier.
     */
    public function __construct(string $commandId)
    {
        $this->commandId = $commandId;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{commandId}'], [$this->commandId], '/sale/offer-price-change-commands/{commandId}');
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
     * @throws \Jlonom\AllegroSDK\Exception\GetPriceModificationCommandStatusUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetPriceModificationCommandStatusUsingGETNotFoundException
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
            throw new \Jlonom\AllegroSDK\Exception\GetPriceModificationCommandStatusUsingGETUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetPriceModificationCommandStatusUsingGETNotFoundException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}