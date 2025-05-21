<?php

namespace Jlonom\AllegroSDK\Endpoint;

class GetPartialProductOffer extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $offerId;
    /**
     * Use this resource to retrieve selected data of the particular product-offer. The model and functionality is a subset of the full product offer get endpoint (`GET /sale/product-offers/{offerId}`), but it is faster and more reliable.
     *
     * @param string $offerId Offer identifier.
     * @param array $queryParameters {
     *     @var array $include Selection of parts intended to retrieve. Multiple parts can be specified at the same time.
     * }
     * @param array $headerParameters {
     *     @var string $Accept-Language Expected language of messages.
     * }
     */
    public function __construct(string $offerId, array $queryParameters = [], array $headerParameters = [])
    {
        $this->offerId = $offerId;
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{offerId}'], [$this->offerId], '/sale/product-offers/{offerId}/parts');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/vnd.allegro.public.v1+json']];
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['include']);
        $optionsResolver->setRequired(['include']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('include', ['array']);
        return $optionsResolver;
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
        if (404 === $status) {
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}