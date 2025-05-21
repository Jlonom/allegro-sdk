<?php

namespace Jlonom\AllegroSDK\Endpoint;

class DeleteAfterSalesServiceReturnPolicyUsingDELETE extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $returnPolicyId;
    /**
     * Use this resource to delete a return policy definition.
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
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{returnPolicyId}'], [$this->returnPolicyId], '/after-sales-service-conditions/return-policies/{returnPolicyId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jlonom\AllegroSDK\Exception\DeleteAfterSalesServiceReturnPolicyUsingDELETEBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\DeleteAfterSalesServiceReturnPolicyUsingDELETEUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\DeleteAfterSalesServiceReturnPolicyUsingDELETEForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\DeleteAfterSalesServiceReturnPolicyUsingDELETENotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (204 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\DeleteAfterSalesServiceReturnPolicyUsingDELETEBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\DeleteAfterSalesServiceReturnPolicyUsingDELETEUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\DeleteAfterSalesServiceReturnPolicyUsingDELETEForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\DeleteAfterSalesServiceReturnPolicyUsingDELETENotFoundException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}