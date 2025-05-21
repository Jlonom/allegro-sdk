<?php

namespace Jlonom\AllegroSDK\Endpoint;

class DeactivateTurnoverDiscountsUsingPUT extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $marketplaceId;
    /**
     * Deactivate turnover discount for a given marketplace. Read more: <a href="../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#deaktywuj-rabat-obrotowy" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#deactivate-turnover-discount" target="_blank">EN</a>. Currently, the only supported marketplace is `allegro-business-cz`. <br/> Turnover discount will stop being cumulated with the end of the current month. Discount based on cumulated turnover will stop being applied with the end of the next month. After that, the discount will be completely deactivated. <br/> When deactivating the discount that still has `ACTIVATING` status, turnover discount is deactivated immediately. In that case, no turnover discount will start being cumulated with the new month.
     *
     * @param string $marketplaceId Marketplace identifier.
     */
    public function __construct(string $marketplaceId)
    {
        $this->marketplaceId = $marketplaceId;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{marketplaceId}'], [$this->marketplaceId], '/sale/turnover-discount/{marketplaceId}/deactivate');
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
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
        }
        if (204 === $status) {
            return null;
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