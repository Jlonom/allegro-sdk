<?php

namespace Jlonom\AllegroSDK\Endpoint;

class CreateAfterSalesServiceWarrantyUsingPOST extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    /**
     * Use this resource to create a warranty definition. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-dodac-informacje-o-gwarancjach" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-add-warranty-information" target="_blank">EN</a>.
     *
     * @param \Jlonom\AllegroSDK\Model\WarrantyRequest $requestBody 
     */
    public function __construct(\Jlonom\AllegroSDK\Model\WarrantyRequest $requestBody)
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
        return '/after-sales-service-conditions/warranties';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jlonom\AllegroSDK\Model\WarrantyRequest) {
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
     * @throws \Jlonom\AllegroSDK\Exception\CreateAfterSalesServiceWarrantyUsingPOSTBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\CreateAfterSalesServiceWarrantyUsingPOSTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\CreateAfterSalesServiceWarrantyUsingPOSTForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\CreateAfterSalesServiceWarrantyUsingPOSTUnprocessableEntityException
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
            throw new \Jlonom\AllegroSDK\Exception\CreateAfterSalesServiceWarrantyUsingPOSTBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\CreateAfterSalesServiceWarrantyUsingPOSTUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\CreateAfterSalesServiceWarrantyUsingPOSTForbiddenException($response);
        }
        if (422 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\CreateAfterSalesServiceWarrantyUsingPOSTUnprocessableEntityException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}