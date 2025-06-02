<?php

namespace Jlonom\AllegroSDK\Endpoint;

class DeleteAdvanceShipNotice extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Use this resource to delete an Advance Ship Notice. Read more: <a href="../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#jak-usunac-awizo" target="_blank">PL</a> / <a href="../../tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#how-to-delete-advance-ship-notice" target="_blank">EN</a>.
     *
     * @param string $id An identifier of the Advance Ship Notice to delete.
     */
    public function __construct(string $id = '0b488a23-bc99-470d-8842-0c585adf2479')
    {
        $this->id = $id;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/fulfillment/advance-ship-notices/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jlonom\AllegroSDK\Exception\DeleteAdvanceShipNoticeUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\DeleteAdvanceShipNoticeForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\DeleteAdvanceShipNoticeNotFoundException
     * @throws \Jlonom\AllegroSDK\Exception\DeleteAdvanceShipNoticeUnprocessableEntityException
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
        if (401 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\DeleteAdvanceShipNoticeUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\DeleteAdvanceShipNoticeForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\DeleteAdvanceShipNoticeNotFoundException($response);
        }
        if (422 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\DeleteAdvanceShipNoticeUnprocessableEntityException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}