<?php

namespace Jlonom\AllegroSDK\Endpoint;

class GetAfterSalesServiceImpliedWarrantyUsingGET extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $impliedWarrantyId;
    /**
     * Use this resource to get an implied warranty details. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-pobrac-warunki-reklamacji-przypisane-do-konta" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-retrieve-implied-warranties-assigned-to-the-account" target="_blank">EN</a>.
     *
     * @param string $impliedWarrantyId The ID of the implied warranty.
     */
    public function __construct(string $impliedWarrantyId)
    {
        $this->impliedWarrantyId = $impliedWarrantyId;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{impliedWarrantyId}'], [$this->impliedWarrantyId], '/after-sales-service-conditions/implied-warranties/{impliedWarrantyId}');
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
     * @throws \Jlonom\AllegroSDK\Exception\GetAfterSalesServiceImpliedWarrantyUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetAfterSalesServiceImpliedWarrantyUsingGETForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetAfterSalesServiceImpliedWarrantyUsingGETNotFoundException
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
            throw new \Jlonom\AllegroSDK\Exception\GetAfterSalesServiceImpliedWarrantyUsingGETUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetAfterSalesServiceImpliedWarrantyUsingGETForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetAfterSalesServiceImpliedWarrantyUsingGETNotFoundException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}