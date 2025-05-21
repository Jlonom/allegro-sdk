<?php

namespace Jlonom\AllegroSDK\Endpoint;

class UpdateOfferBundleDiscountUsingPUT extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $bundleId;
    /**
     * Use this resource to update discount per marketplaces associated with bundle specified by its unique identifier. This will override currently set discounts for all marketplaces, so the unchanged discounts also must be specified in request. In case discount for marketplace is not specified in request it will be deleted. Read more: <a href="../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#zmien-rabat-przypisany-do-wybranego-zestawu" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#change-the-discount-for-the-selected-offer-bundle" target="_blank">EN</a>.
     *
     * @param string $bundleId Bundle ID.
     * @param \Jlonom\AllegroSDK\Model\UpdateOfferBundleDiscountDTO $requestBody 
     */
    public function __construct(string $bundleId, \Jlonom\AllegroSDK\Model\UpdateOfferBundleDiscountDTO $requestBody)
    {
        $this->bundleId = $bundleId;
        $this->body = $requestBody;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{bundleId}'], [$this->bundleId], '/sale/bundles/{bundleId}/discount');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jlonom\AllegroSDK\Model\UpdateOfferBundleDiscountDTO) {
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
        if (400 === $status) {
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