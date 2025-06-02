<?php

namespace Jlonom\AllegroSDK\Endpoint;

class CreateAfterSalesServiceImpliedWarrantyUsingPOST extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    /**
     * Use this resource to create an implied warranty definition. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-dodac-informacje-o-warunkach-reklamacji" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-add-implied-warranty-information" target="_blank">EN</a>.
     *
     * @param \Jlonom\AllegroSDK\Model\ImpliedWarrantyRequest $requestBody 
     */
    public function __construct(\Jlonom\AllegroSDK\Model\ImpliedWarrantyRequest $requestBody)
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
        return '/after-sales-service-conditions/implied-warranties';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jlonom\AllegroSDK\Model\ImpliedWarrantyRequest) {
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
     * @throws \Jlonom\AllegroSDK\Exception\CreateAfterSalesServiceImpliedWarrantyUsingPOSTBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\CreateAfterSalesServiceImpliedWarrantyUsingPOSTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\CreateAfterSalesServiceImpliedWarrantyUsingPOSTForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\CreateAfterSalesServiceImpliedWarrantyUsingPOSTUnprocessableEntityException
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
            throw new \Jlonom\AllegroSDK\Exception\CreateAfterSalesServiceImpliedWarrantyUsingPOSTBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\CreateAfterSalesServiceImpliedWarrantyUsingPOSTUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\CreateAfterSalesServiceImpliedWarrantyUsingPOSTForbiddenException($response);
        }
        if (422 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\CreateAfterSalesServiceImpliedWarrantyUsingPOSTUnprocessableEntityException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}