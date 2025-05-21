<?php

namespace Jlonom\AllegroSDK\Endpoint;

class GetVariantSet extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $setId;
    /**
     * Use this resource to get variant set by set id. Read more: <a href="../../tutorials/jak-utworzyc-oferte-wielowariantowa-oA6ZYBg5XFo#edytuj-oferte-wielowariantowa" target="_blank">PL</a> / <a href="../../tutorials/how-to-create-a-multi-variant-offer-nn9DOL3nXs2#update-a-multi-variant-offer" target="_blank">EN</a>.
     *
     * @param string $setId Variant set identifier.
     */
    public function __construct(string $setId)
    {
        $this->setId = $setId;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{setId}'], [$this->setId], '/sale/offer-variants/{setId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/vnd.allegro.public.v1+json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jlonom\AllegroSDK\Exception\GetVariantSetUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetVariantSetForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetVariantSetNotFoundException
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
            throw new \Jlonom\AllegroSDK\Exception\GetVariantSetUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetVariantSetForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetVariantSetNotFoundException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}