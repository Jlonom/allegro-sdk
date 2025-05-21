<?php

namespace Jlonom\AllegroSDK\Endpoint;

class GetOfferSmartClassificationGET extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $offerId;
    /**
     * Use this resource to get a full Smart! offer classification report of one of your offers. Please keep in mind you have to meet Smart! seller conditions first - for more details, use *GET /sale/smart*. To learn more about Smart! offer requirements, see our knowledge base article: [PL](https://allegro.pl/pomoc/dla-sprzedajacych/informacje-dla-sprzedajacych/co-zrobic-aby-moje-oferty-byly-oznaczone-ikona-allegro-smart-lDkP8VbKncV) / [EN](https://allegro.pl/help/for-sellers/allegro-smart-for-sellers/how-can-i-make-my-offers-be-marked-with-the-allegro-smart-badge-rKD1RV30jFM). Read more: <a href="../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#kwalifikacja-oferty" target="_blank">PL</a> / <a href="../../tutorials/account-and-user-data-management-jn9vBjqjnsw#offer-qualification" target="_blank">EN</a>.
     *
     * @param string $offerId Offer identifier.
     * @param array $queryParameters {
     *     @var string $marketplaceId Marketplace for which offer classification report will be returned. If not specified, the result of the offer's base marketplace will be returned.
     * }
     */
    public function __construct(string $offerId, array $queryParameters = [])
    {
        $this->offerId = $offerId;
        $this->queryParameters = $queryParameters;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{offerId}'], [$this->offerId], '/sale/offers/{offerId}/smart');
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
        $optionsResolver->setDefined(['marketplaceId']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('marketplaceId', ['string']);
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
        if (422 === $status) {
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}