<?php

namespace Jlonom\AllegroSDK\Endpoint;

class CreateOrModifyTurnoverDiscountUsingPUT extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $marketplaceId;
    /**
     * Create or modify the turnover discount for the specified marketplace. Currently, the only supported marketplace is `allegro-business-cz`. <br/> Turnover discount is assigned to all offers available on the given marketplace. Only B2B users will see and be eligible for this discount. In order to create a turnover discount definition, you also have to be a B2B user. <br/> Created turnover discount becomes visible for B2B users with the first day of the next month. Since that day, B2B users begin cumulating their spending on your offers they purchased. Turnover cumulated within the month translate into appropriate percentage of the discount for all orders of your offers in the following month. <br/> Turnover discount created in a given month is susceptible for change only until the end of that month. After that, as mentioned before, turnover discount becomes available for the users and can no longer be modified instantly. Modifying turnover discount in such case will result in creation of the new definition of the discount. This new definition will become available for the users on the same basis that the previously created one, with the start of the next month. Also, similarly, newly created definition can be modified only until the the end of the month. Read more: <a href="../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#utworz-lub-edytuj-rabat-obrotowy" target="_blank">PL</a> / <a href="../..//tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#create-or-edit-turnover-discount" target="_blank">EN</a>.
     *
     * @param string $marketplaceId Marketplace identifier.
     * @param \Jlonom\AllegroSDK\Model\TurnoverDiscountRequest $requestBody 
     */
    public function __construct(string $marketplaceId, \Jlonom\AllegroSDK\Model\TurnoverDiscountRequest $requestBody)
    {
        $this->marketplaceId = $marketplaceId;
        $this->body = $requestBody;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{marketplaceId}'], [$this->marketplaceId], '/sale/turnover-discount/{marketplaceId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jlonom\AllegroSDK\Model\TurnoverDiscountRequest) {
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