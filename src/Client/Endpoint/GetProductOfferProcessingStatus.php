<?php

namespace Jlonom\AllegroSDK\Endpoint;

class GetProductOfferProcessingStatus extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $offerId;
    protected $operationId;
    /**
     * The URI for the resource given by Location header of POST /sale/product-offers and PATCH /sale/product-offers/{offerId}. Use this resource to check processing status of a POST or PATCH request. Read more: <a href="../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#publikacja-oferty-w-asynchronicznym-api" target="_blank">PL</a> / <a href="../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#offer-publication-in-asynchronous-api" target="_blank">EN</a>.
     *
     * @param string $offerId Offer identifier.
     * @param string $operationId Operation identifier provided in location header of POST or PATCH request.
     * @param array $headerParameters {
     *     @var string $Accept-Language Expected language of messages.
     * }
     */
    public function __construct(string $offerId, string $operationId, array $headerParameters = [])
    {
        $this->offerId = $offerId;
        $this->operationId = $operationId;
        $this->headerParameters = $headerParameters;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{offerId}', '{operationId}'], [$this->offerId, $this->operationId], '/sale/product-offers/{offerId}/operations/{operationId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/vnd.allegro.public.v1+json']];
    }
    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['Accept-Language']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('Accept-Language', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jlonom\AllegroSDK\Exception\GetProductOfferProcessingStatusBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\GetProductOfferProcessingStatusUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetProductOfferProcessingStatusForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetProductOfferProcessingStatusNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (202 === $status) {
        }
        if (303 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetProductOfferProcessingStatusBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetProductOfferProcessingStatusUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetProductOfferProcessingStatusForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetProductOfferProcessingStatusNotFoundException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}