<?php

namespace Jlonom\AllegroSDK\Endpoint;

class GetAfterSalesServiceWarrantyUsingGET extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $warrantyId;
    /**
     * Use this resource to get a warranty details. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-pobrac-informacje-o-gwarancjach-przypisanych-do-konta" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-retrieve-warranties-assigned-to-the-account" target="_blank">EN</a>.
     *
     * @param string $warrantyId The ID of the warranty.
     */
    public function __construct(string $warrantyId)
    {
        $this->warrantyId = $warrantyId;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{warrantyId}'], [$this->warrantyId], '/after-sales-service-conditions/warranties/{warrantyId}');
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
     * @throws \Jlonom\AllegroSDK\Exception\GetAfterSalesServiceWarrantyUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetAfterSalesServiceWarrantyUsingGETForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetAfterSalesServiceWarrantyUsingGETNotFoundException
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
            throw new \Jlonom\AllegroSDK\Exception\GetAfterSalesServiceWarrantyUsingGETUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetAfterSalesServiceWarrantyUsingGETForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetAfterSalesServiceWarrantyUsingGETNotFoundException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}