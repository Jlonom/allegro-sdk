<?php

namespace Jlonom\AllegroSDK\Endpoint;

class CreateOfferBundleUsingPOST extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    /**
    * You can create <a href="https://help.allegro.com/sell/en/a/how-to-create-offer-bundles-rj9eAL2XnhK?marketplaceId=allegro-pl" target="_blank">offer bundle</a> using this endpoint. Bundle has to contain at least two offers and at least one of them has to be set as an entry point. Bundle will be shown on offers' pages which are marked as entry points. You can also specify how many units of each offer will be in bundle using `requiredQuantity` property.
    <br> Additionally, discount can be specified for each marketplace separately. If you do not want to set discount, set `discounts` property to `null` or empty array. Also, you do not have to specify discount on all marketplaces. Fill marketplaces in 'discounts' array accordingly to your needs.
    <br> Read more: <a href="../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#utworz-zestaw-ofert" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#create-an-offer-bundle" target="_blank">EN</a>.
    *
    * @param \Jlonom\AllegroSDK\Model\CreateOfferBundleDTO $requestBody 
    */
    public function __construct(\Jlonom\AllegroSDK\Model\CreateOfferBundleDTO $requestBody)
    {
        $this->body = $requestBody;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/sale/bundles';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jlonom\AllegroSDK\Model\CreateOfferBundleDTO) {
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
        if (201 === $status) {
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