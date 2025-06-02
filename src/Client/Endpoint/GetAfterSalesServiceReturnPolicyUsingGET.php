<?php

namespace Jlonom\AllegroSDK\Endpoint;

class GetAfterSalesServiceReturnPolicyUsingGET extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $returnPolicyId;
    /**
     * Use this resource to get a return policy details. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-pobrac-warunki-zwrotow-przypisane-do-konta" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-retrieve-return-policies-assigned-to-the-account" target="_blank">EN</a>.
     *
     * @param string $returnPolicyId The ID of the return policy.
     */
    public function __construct(string $returnPolicyId)
    {
        $this->returnPolicyId = $returnPolicyId;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{returnPolicyId}'], [$this->returnPolicyId], '/after-sales-service-conditions/return-policies/{returnPolicyId}');
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
     * @throws \Jlonom\AllegroSDK\Exception\GetAfterSalesServiceReturnPolicyUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetAfterSalesServiceReturnPolicyUsingGETForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetAfterSalesServiceReturnPolicyUsingGETNotFoundException
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
            throw new \Jlonom\AllegroSDK\Exception\GetAfterSalesServiceReturnPolicyUsingGETUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetAfterSalesServiceReturnPolicyUsingGETForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetAfterSalesServiceReturnPolicyUsingGETNotFoundException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}