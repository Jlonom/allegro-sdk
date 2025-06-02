<?php

namespace Jlonom\AllegroSDK\Endpoint;

class CancelAdvanceShipNotice extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Use this resource to cancel an Advance Ship Notice in IN_TRANSIT status. Read more: <a href="../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#anuluj-awizo" target="_blank">PL</a> / <a href="../../tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#cancel-advance-ship-notice" target="_blank">EN</a>.
     *
     * @param string $id An identifier of the Advance Ship Notice to cancel.
     */
    public function __construct(string $id = '0b488a23-bc99-470d-8842-0c585adf2479')
    {
        $this->id = $id;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/fulfillment/advance-ship-notices/{id}/cancel');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jlonom\AllegroSDK\Exception\CancelAdvanceShipNoticeUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\CancelAdvanceShipNoticeForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\CancelAdvanceShipNoticeNotFoundException
     * @throws \Jlonom\AllegroSDK\Exception\CancelAdvanceShipNoticeUnprocessableEntityException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\CancelAdvanceShipNoticeUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\CancelAdvanceShipNoticeForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\CancelAdvanceShipNoticeNotFoundException($response);
        }
        if (422 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\CancelAdvanceShipNoticeUnprocessableEntityException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}