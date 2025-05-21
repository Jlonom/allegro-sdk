<?php

namespace Jlonom\AllegroSDK\Endpoint;

class ListSellerPromotionsUsingGET1 extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    /**
    * Get a list of promotions defined by the authorized user and filtered by promotion type.
    <p>Restrictions:</p> <p>Filtering by promotion type is required.</p>
    <p>Sum of limit and offset must be equal to or lower than 50000. Limit must be equal to or lower than 5000.</p> <p>Example:</p> <p>offset = 49950 and limit = 50 will return promotions</p> <p>offset = 49950 and limit = 51 will return 422 http error</p> <p>offset = 0 and limit = 5000 will return promotions</p> <p>offset = 0 and limit = 5001 will return 422 http error</p>
    <p>Read more about: Large order discount <a href="../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#pobierz-dostepne-rabaty" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#retrieve-large-order-discount" target="_blank">EN</a>, Wholesale price list <a href="../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#pobierz-dostepne-cenniki" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#retrieve-wholesale-price-lists" target="_blank">EN</a>, Multipack <a href="../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#pobierz-dostepne-rabaty-ilosciowe" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#retrieve-promotional-sets" target="_blank">EN</a>.</p>
    *
    * @param array $queryParameters {
    *     @var int $limit Limit of promotions per page.
    *     @var int $offset Distance between the beginning of the document and the point from which promotions are returned.
    *     @var string $offer.id Filter by offer id. No promotions with `OFFERS_ASSIGNED_EXTERNALLY` or `ALL_OFFERS` criteria will be returned if this parameter is present.
    *     @var string $promotionType Filter by promotion type.
    * }
    */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/sale/loyalty/promotions';
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
        $optionsResolver->setDefined(['limit', 'offset', 'offer.id', 'promotionType']);
        $optionsResolver->setRequired(['promotionType']);
        $optionsResolver->setDefaults(['limit' => 50, 'offset' => 0]);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('offset', ['int']);
        $optionsResolver->addAllowedTypes('offer.id', ['string']);
        $optionsResolver->addAllowedTypes('promotionType', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jlonom\AllegroSDK\Exception\ListSellerPromotionsUsingGET1BadRequestException
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
            throw new \Jlonom\AllegroSDK\Exception\ListSellerPromotionsUsingGET1BadRequestException($response);
        }
        if (401 === $status) {
        }
        if (422 === $status) {
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}