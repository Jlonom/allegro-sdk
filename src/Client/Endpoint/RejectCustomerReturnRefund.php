<?php

namespace Jlonom\AllegroSDK\Endpoint;

class RejectCustomerReturnRefund extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $customerReturnId;
    /**
     * Use this resource to reject customer return refund with provided reason. Read more: <a href="../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-odmowic-zwrotu-wplaty" target="_blank">PL</a> / <a href="../../tutorials/process-orders-PgPMlWDr8Cv#how-to-reject-customer-return-refund" target="_blank">EN</a>.
     *
     * @param string $customerReturnId Id of the customer return.
     * @param \Jlonom\AllegroSDK\Model\CustomerReturnRefundRejectionRequest $requestBody 
     */
    public function __construct(string $customerReturnId, \Jlonom\AllegroSDK\Model\CustomerReturnRefundRejectionRequest $requestBody)
    {
        $this->customerReturnId = $customerReturnId;
        $this->body = $requestBody;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{customerReturnId}'], [$this->customerReturnId], '/order/customer-returns/{customerReturnId}/rejection');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jlonom\AllegroSDK\Model\CustomerReturnRefundRejectionRequest) {
            return [['Content-Type' => ['application/vnd.allegro.beta.v1+json']], $this->body];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/vnd.allegro.beta.v1+json']];
    }
    /**
     * {@inheritdoc}
     *
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
        }
        if (401 === $status) {
        }
        if (403 === $status) {
        }
        if (406 === $status) {
        }
        if (422 === $status) {
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}