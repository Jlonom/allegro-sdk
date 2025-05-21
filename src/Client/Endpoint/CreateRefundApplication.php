<?php

namespace Jlonom\AllegroSDK\Endpoint;

class CreateRefundApplication extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    /**
     * Use this resource to create a refund application. Read more: <a href="../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-utworzyc-wniosek-o-rabat-transakcyjny" target="_blank">PL</a> / <a href="../../tutorials/process-orders-PgPMlWDr8Cv#how-to-create-a-sale-commission-refund-application" target="_blank">EN</a>.
     *
     * @param \Jlonom\AllegroSDK\Model\RefundClaimRequest $requestBody 
     */
    public function __construct(\Jlonom\AllegroSDK\Model\RefundClaimRequest $requestBody)
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
        return '/order/refund-claims';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jlonom\AllegroSDK\Model\RefundClaimRequest) {
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
     * @throws \Jlonom\AllegroSDK\Exception\CreateRefundApplicationBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\CreateRefundApplicationUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\CreateRefundApplicationForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\CreateRefundApplicationNotAcceptableException
     * @throws \Jlonom\AllegroSDK\Exception\CreateRefundApplicationUnprocessableEntityException
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
            throw new \Jlonom\AllegroSDK\Exception\CreateRefundApplicationBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\CreateRefundApplicationUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\CreateRefundApplicationForbiddenException($response);
        }
        if (406 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\CreateRefundApplicationNotAcceptableException($response);
        }
        if (422 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\CreateRefundApplicationUnprocessableEntityException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}