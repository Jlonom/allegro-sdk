<?php

namespace Jlonom\AllegroSDK\Endpoint;

class GetRefundApplication extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $claimId;
    /**
     * Use this resource to get refund application details. Read more: <a href="../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-pobrac-pojedynczy-wniosek-o-rabat-transakcyjny" target="_blank">PL</a> / <a href="../../tutorials/process-orders-PgPMlWDr8Cv#how-to-retrieve-single-sale-commission-refund" target="_blank">EN</a>.
     *
     * @param string $claimId Refund application ID.
     */
    public function __construct(string $claimId)
    {
        $this->claimId = $claimId;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{claimId}'], [$this->claimId], '/order/refund-claims/{claimId}');
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
     * @throws \Jlonom\AllegroSDK\Exception\GetRefundApplicationBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\GetRefundApplicationUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetRefundApplicationForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetRefundApplicationNotFoundException
     * @throws \Jlonom\AllegroSDK\Exception\GetRefundApplicationNotAcceptableException
     * @throws \Jlonom\AllegroSDK\Exception\GetRefundApplicationUnprocessableEntityException
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
            throw new \Jlonom\AllegroSDK\Exception\GetRefundApplicationBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetRefundApplicationUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetRefundApplicationForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetRefundApplicationNotFoundException($response);
        }
        if (406 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetRefundApplicationNotAcceptableException($response);
        }
        if (422 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetRefundApplicationUnprocessableEntityException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}