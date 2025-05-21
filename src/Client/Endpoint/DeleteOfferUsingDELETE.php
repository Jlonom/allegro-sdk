<?php

namespace Jlonom\AllegroSDK\Endpoint;

class DeleteOfferUsingDELETE extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $offerId;
    /**
     * Use this resource to delete a draft offer. Read more: <a href="../../news/nowy-zasob-do-usuwania-draftow-ofert-aMDnGka2RuL" target="_blank">PL</a> / <a href="../../news/new-resource-draft-delete-yPy9lq6myh0" target="_blank">EN</a>.
     *
     * @param string $offerId Offer identifier.
     */
    public function __construct(string $offerId)
    {
        $this->offerId = $offerId;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{offerId}'], [$this->offerId], '/sale/offers/{offerId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jlonom\AllegroSDK\Exception\DeleteOfferUsingDELETEUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\DeleteOfferUsingDELETEForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\DeleteOfferUsingDELETENotFoundException
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
            throw new \Jlonom\AllegroSDK\Exception\DeleteOfferUsingDELETEUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\DeleteOfferUsingDELETEForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\DeleteOfferUsingDELETENotFoundException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}