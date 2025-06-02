<?php

namespace Jlonom\AllegroSDK\Endpoint;

class DeleteVariantSet extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $setId;
    /**
     * Use this resource to delete variant set by id. Offers included in variant set will not be stopped or modified by this operation. Read more: <a href="../../tutorials/jak-utworzyc-oferte-wielowariantowa-oA6ZYBg5XFo#usun-oferte-wielowariantowa" target="_blank">PL</a> / <a href="../../tutorials/how-to-create-a-multi-variant-offer-nn9DOL3nXs2#remove-a-multi-variant-offer" target="_blank">EN</a>.
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
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{setId}'], [$this->setId], '/sale/offer-variants/{setId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jlonom\AllegroSDK\Exception\DeleteVariantSetUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\DeleteVariantSetForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\DeleteVariantSetNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (204 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\DeleteVariantSetUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\DeleteVariantSetForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\DeleteVariantSetNotFoundException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}