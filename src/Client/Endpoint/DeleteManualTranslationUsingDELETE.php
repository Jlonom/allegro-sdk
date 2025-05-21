<?php

namespace Jlonom\AllegroSDK\Endpoint;

class DeleteManualTranslationUsingDELETE extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $language;
    protected $offerId;
    /**
     * Delete single element or entire manual translation. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#tlumaczenia-ofert" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#offer-translations" target="_blank">EN</a>.
     *
     * @param string $language Language of the translation to delete.
     * @param string $offerId Offer identifier.
     * @param array $queryParameters {
     *     @var string $element Offer element for which translation should be deleted. If not provided, translations for all elements will be deleted.
     *     @var string $products.id ProductId for which safety information translation should be deleted. If not provided, safety information translations for all products in offer will be deleted.
     * }
     */
    public function __construct(string $language, string $offerId, array $queryParameters = [])
    {
        $this->language = $language;
        $this->offerId = $offerId;
        $this->queryParameters = $queryParameters;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{language}', '{offerId}'], [$this->language, $this->offerId], '/sale/offers/{offerId}/translations/{language}');
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
        $optionsResolver->setDefined(['element', 'products.id']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('element', ['string']);
        $optionsResolver->addAllowedTypes('products.id', ['string']);
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
            return null;
        }
        if (204 === $status) {
            return null;
        }
        if (401 === $status) {
        }
        if (403 === $status) {
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}