<?php

namespace Jlonom\AllegroSDK\Endpoint;

class CancelRefundApplication extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $claimId;
    /**
     * Use this resource to cancel a refund application. This cannot be undone. Read more: <a href="../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-anulowac-wniosek-o-rabat-transakcyjny" target="_blank">PL</a> / <a href="../../tutorials/process-orders-PgPMlWDr8Cv#how-to-cancel-sale-commission-refund" target="_blank">EN</a>.
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
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{claimId}'], [$this->claimId], '/order/refund-claims/{claimId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jlonom\AllegroSDK\Exception\CancelRefundApplicationBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\CancelRefundApplicationUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\CancelRefundApplicationForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\CancelRefundApplicationNotFoundException
     * @throws \Jlonom\AllegroSDK\Exception\CancelRefundApplicationNotAcceptableException
     * @throws \Jlonom\AllegroSDK\Exception\CancelRefundApplicationUnprocessableEntityException
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
            throw new \Jlonom\AllegroSDK\Exception\CancelRefundApplicationBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\CancelRefundApplicationUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\CancelRefundApplicationForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\CancelRefundApplicationNotFoundException($response);
        }
        if (406 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\CancelRefundApplicationNotAcceptableException($response);
        }
        if (422 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\CancelRefundApplicationUnprocessableEntityException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}