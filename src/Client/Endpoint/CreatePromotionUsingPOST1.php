<?php

namespace Jlonom\AllegroSDK\Endpoint;

class CreatePromotionUsingPOST1 extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    /**
    * This endpoint creates a new promotion. You can create promotions only if your base marketplace is `allegro-pl`. Created promotions are visible only on the `allegro-pl` marketplace. You can define the following types of promotions:
    1. Large order discount <br> Only company users will see and be eligible for this type of promotion. In order to create a large order discount, you also have to be a company user. Furthermore, you are allowed to have only one active order discount at a time. Define a promotion with a single benefit of type **LARGE_ORDER_DISCOUNT** and a single criterion of type **ALL_OFFERS**. The benefit specification should contain a list of order value based discount thresholds. Threshold's order value defines the minimum total value of an order for which the threshold is applicable (`lowerBound`). Threshold's discount defines the discount percentage applied when the threshold is applied. The percentage's fractional part must be equal to 0. Only the highest applicable threshold (if any) will be applied to the total value of the order. A threshold with a higher order value than another threshold in the order discount must also have a higher discount. Large order discount is assigned automatically to all seller's offers. Moreover, it will be assigned to all newly added seller's offers once activated. Please note that it may take some time to propagate this type of promotion to all of your offers. Read more: <a href="../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#dodaj-rabat" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#add-large-order-discount" target="_blank">EN</a>.
    2. Wholesale price list <br> Only company users will see and be eligible for this type of promotion. In order to create a wholesale price list, you also have to be a company user. Define a promotion with a single benefit of type **WHOLESALE_PRICE_LIST** and a single criterion of type **OFFERS_ASSIGNED_EXTERNALLY**. The benefit specification should contain a name (it will be visible to you only) and a list of quantity based discount thresholds. Threshold's quantity defines the minimum number of units of an offer for which the threshold is applicable (`lowerBound`). Threshold's discount defines the discount percentage applied when the threshold is applied. The percentage's fractional part must be equal to 0. Only the highest applicable threshold (if any) will be applied to the total price of units of the offer bought. A threshold with a higher quantity than another threshold in the price list must also have a higher discount. In order to assign offers to a wholesale price list, use `discounts` field in <a href="#operation/modificationCommandUsingPUT">batch offer modification</a>. Read more: <a href="../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#dodaj-cennik-hurtowy" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#add-wholesale-price-list" target="_blank">EN</a>.
    3. Multipack <br> In order to create a new multipack, you have to define a promotion with a single benefit of type **UNIT_PERCENTAGE_DISCOUNT** and a single criterion of type **CONTAINS_OFFERS**. The benefit specification should contain a configuration section with a percentage which indicates the specific discount for the discounted offer. This percentage should be an integer value greater than 15 for quantity 2, greater than 30 for quantity 3, greater than 40 for quantity 4, greater than 50 for quantity 5 and lower than or equal to 100. The specification should also contain a trigger section with a field forEachQuantity that defines the amount of items in the multipack which is necessary to trigger the benefit. Additionally, the discountedNumber field must be set to 1 by default as you can only discount one unit in a multipack. Finally, the offer criterion specifies the offer for which the multipack promotion will take effect. Read more: <a href="../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#dodaj-rabat-ilosciowy" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#add-quantitative-discount" target="_blank">EN</a>
    4. Cross-offer multipack <br> A cross-offer multipack is created in the same fashion as a standard multipack. The only difference is that you need to pass more than 1 offer in the offer criterion section. This group of offers is then considered as a pool from which users can pick and choose forEachQuantity offers and the cheapest of them gets a discount.
    *
    * @param \Jlonom\AllegroSDK\Model\SellerCreateRebateRequestDto $requestBody 
    */
    public function __construct(\Jlonom\AllegroSDK\Model\SellerCreateRebateRequestDto $requestBody)
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
        return '/sale/loyalty/promotions';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jlonom\AllegroSDK\Model\SellerCreateRebateRequestDto) {
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
        if (404 === $status) {
        }
        if (412 === $status) {
        }
        if (422 === $status) {
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}