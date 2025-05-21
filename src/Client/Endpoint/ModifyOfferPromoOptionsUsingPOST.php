<?php

namespace Jlonom\AllegroSDK\Endpoint;

class ModifyOfferPromoOptionsUsingPOST extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $offerId;
    /**
     * Use this resource to modify offer promotion packages. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-dodac-lub-zmienic-opcje-promowania-w-pojedynczej-ofercie" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-add-or-change-promo-options-in-a-single-offer" target="_blank">EN</a>.
     *
     * @param string $offerId Offer identifier.
     * @param \Jlonom\AllegroSDK\Model\PromoOptionsModifications $requestBody 
     */
    public function __construct(string $offerId, \Jlonom\AllegroSDK\Model\PromoOptionsModifications $requestBody)
    {
        $this->offerId = $offerId;
        $this->body = $requestBody;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{offerId}'], [$this->offerId], '/sale/offers/{offerId}/promo-options-modification');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jlonom\AllegroSDK\Model\PromoOptionsModifications) {
            return [['Content-Type' => ['application/vnd.allegro.public.v1+json']], $this->body];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/vnd.allegro.public.v1+json']];
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
        if (401 === $status) {
        }
        if (403 === $status) {
        }
        if (422 === $status) {
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}