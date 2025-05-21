<?php

namespace Jlonom\AllegroSDK\Endpoint;

class UpdateAfterSalesServiceReturnPolicyUsingPUT extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $returnPolicyId;
    /**
     * Use this resource to modify the return policy details. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-edytowac-informacje-o-warunkach-zwrotu" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-update-return-policy-information" target="_blank">EN</a>.
     *
     * @param string $returnPolicyId The ID of the return policy.
     * @param \Jlonom\AllegroSDK\Model\ReturnPolicyRequest $requestBody 
     */
    public function __construct(string $returnPolicyId, \Jlonom\AllegroSDK\Model\ReturnPolicyRequest $requestBody)
    {
        $this->returnPolicyId = $returnPolicyId;
        $this->body = $requestBody;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{returnPolicyId}'], [$this->returnPolicyId], '/after-sales-service-conditions/return-policies/{returnPolicyId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jlonom\AllegroSDK\Model\ReturnPolicyRequest) {
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
     * @throws \Jlonom\AllegroSDK\Exception\UpdateAfterSalesServiceReturnPolicyUsingPUTBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\UpdateAfterSalesServiceReturnPolicyUsingPUTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\UpdateAfterSalesServiceReturnPolicyUsingPUTForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\UpdateAfterSalesServiceReturnPolicyUsingPUTNotFoundException
     * @throws \Jlonom\AllegroSDK\Exception\UpdateAfterSalesServiceReturnPolicyUsingPUTUnprocessableEntityException
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
            throw new \Jlonom\AllegroSDK\Exception\UpdateAfterSalesServiceReturnPolicyUsingPUTBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\UpdateAfterSalesServiceReturnPolicyUsingPUTUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\UpdateAfterSalesServiceReturnPolicyUsingPUTForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\UpdateAfterSalesServiceReturnPolicyUsingPUTNotFoundException($response);
        }
        if (422 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\UpdateAfterSalesServiceReturnPolicyUsingPUTUnprocessableEntityException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}