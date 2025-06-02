<?php

namespace Jlonom\AllegroSDK\Endpoint;

class UpdateAfterSalesServiceWarrantyUsingPUT extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $warrantyId;
    /**
     * Use this resource to modify the warranty details. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-edytowac-informacje-o-gwarancjach" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-update-warranty-information" target="_blank">EN</a>.
     *
     * @param string $warrantyId The ID of the warranty.
     * @param \Jlonom\AllegroSDK\Model\WarrantyRequest $requestBody 
     */
    public function __construct(string $warrantyId, \Jlonom\AllegroSDK\Model\WarrantyRequest $requestBody)
    {
        $this->warrantyId = $warrantyId;
        $this->body = $requestBody;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{warrantyId}'], [$this->warrantyId], '/after-sales-service-conditions/warranties/{warrantyId}');
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
     * @throws \Jlonom\AllegroSDK\Exception\UpdateAfterSalesServiceWarrantyUsingPUTBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\UpdateAfterSalesServiceWarrantyUsingPUTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\UpdateAfterSalesServiceWarrantyUsingPUTForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\UpdateAfterSalesServiceWarrantyUsingPUTNotFoundException
     * @throws \Jlonom\AllegroSDK\Exception\UpdateAfterSalesServiceWarrantyUsingPUTUnprocessableEntityException
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
            throw new \Jlonom\AllegroSDK\Exception\UpdateAfterSalesServiceWarrantyUsingPUTBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\UpdateAfterSalesServiceWarrantyUsingPUTUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\UpdateAfterSalesServiceWarrantyUsingPUTForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\UpdateAfterSalesServiceWarrantyUsingPUTNotFoundException($response);
        }
        if (422 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\UpdateAfterSalesServiceWarrantyUsingPUTUnprocessableEntityException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}