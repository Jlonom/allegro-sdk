<?php

namespace Jlonom\AllegroSDK\Endpoint;

class UpdateVariantSet extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $setId;
    /**
    * Use this resource to edit variant set.
    
    A valid variant set must consist of three required elements:
    - name:
      - it can't be blank and must not be longer than 75 characters
    - parameters:
      - it should contain parameter identifiers used for offer grouping
      - parameter identifiers from the offers and special `color/pattern` value (for grouping via image) are permitted
      - it must contain at least one element (up to 2)
    - offers:
      - it must contain at least 2 offers (500 at most)
      - `colorPattern` value must be set for every offer if `color/pattern` parameter is used
      - `colorPattern` value can't be blank and must not be longer than 50 characters
      - `colorPattern` can take arbitrary string value like `red`, `b323592c-522f-4ec1-b9ea-3764538e0ac4` (UUID), etc.
      - offers having the same image should have identical `colorPattern` value
      - offers must have `publication.marketplaces.base` equal to `allegro-pl`
    
    
    Let's assume we have 4 offers:
      - offer with id 2 having an image of a red t-shirt and S as a value of parameter with id 21
      - offer with id 3 having an image of a red t-shirt and M as a value of parameter with id 21
      - offer with id 4 having an image of a blue t-shirt and S as a value of parameter with id 21
      - offer with id 5 having an image of a blue t-shirt and M as a value of parameter with id 21
    
    
    You can build a variant set by grouping offers using combination of available parameters - examples are available in <i>Request samples</i>.
    
    
    More general information about variant sets can be found [here](https://allegro.pl/pomoc/faq/wielowariantowosc-jak-polaczyc-oferty-xGgaOByGgTb#dodatkowe-informacje). Read more: <a href="../../tutorials/jak-utworzyc-oferte-wielowariantowa-oA6ZYBg5XFo#edytuj-oferte-wielowariantowa" target="_blank">PL</a> / <a href="../../tutorials/how-to-create-a-multi-variant-offer-nn9DOL3nXs2#update-a-multi-variant-offer" target="_blank">EN</a>.
    *
    * @param string $setId Variant set identifier.
    * @param \Jlonom\AllegroSDK\Model\VariantSet $requestBody 
    */
    public function __construct(string $setId, \Jlonom\AllegroSDK\Model\VariantSet $requestBody)
    {
        $this->setId = $setId;
        $this->body = $requestBody;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{setId}'], [$this->setId], '/sale/offer-variants/{setId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jlonom\AllegroSDK\Model\VariantSet) {
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
     * @throws \Jlonom\AllegroSDK\Exception\UpdateVariantSetUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\UpdateVariantSetForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\UpdateVariantSetUnprocessableEntityException
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
            throw new \Jlonom\AllegroSDK\Exception\UpdateVariantSetUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\UpdateVariantSetForbiddenException($response);
        }
        if (422 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\UpdateVariantSetUnprocessableEntityException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}