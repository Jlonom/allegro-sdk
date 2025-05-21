<?php

namespace Jlonom\AllegroSDK\Endpoint;

class GetWithdrawOfferFromAlleDiscountCommandsStatus extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $commandId;
    /**
     * Use this resource to get information about the withdrawal command execution status. Read more: <a href="../../tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#jak-sprawdzic-status-wycofania-oferty-z-kampanii" target="_blank">PL</a> / <a href="../../tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#how-to-check-the-withdrawal-status-of-an-offer-from-a-campaign" target="_blank">EN</a>.
     *
     * @param string $commandId Command id in UUID format, must be unique.
     */
    public function __construct(string $commandId)
    {
        $this->commandId = $commandId;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{commandId}'], [$this->commandId], '/sale/alle-discount/withdraw-offer-commands/{commandId}');
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
     * @throws \Jlonom\AllegroSDK\Exception\GetWithdrawOfferFromAlleDiscountCommandsStatusUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetWithdrawOfferFromAlleDiscountCommandsStatusNotFoundException
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
            throw new \Jlonom\AllegroSDK\Exception\GetWithdrawOfferFromAlleDiscountCommandsStatusUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetWithdrawOfferFromAlleDiscountCommandsStatusNotFoundException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}