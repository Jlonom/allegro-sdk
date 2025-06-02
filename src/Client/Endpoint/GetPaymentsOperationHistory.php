<?php

namespace Jlonom\AllegroSDK\Endpoint;

class GetPaymentsOperationHistory extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    /**
     * Use this endpoint to get the list of the seller payment operations. Read more: <a href="../../tutorials/jak-sprawdzic-oplaty-nn9DOL5PASX#historia-operacji-platniczych" target="_blank">PL</a> / <a href="../../tutorials/how-to-check-the-fees-3An6Wame3Um#payment-operations" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var string $wallet.type Type of the wallet: * AVAILABLE - operations available for payout. * WAITING - operations temporarily suspended for payout.
     *     @var string $wallet.paymentOperator Payment operator: * PAYU - operations processed by PAYU operator. * P24 - operations processed by PRZELEWY24 operator. * AF - operations processed by Allegro Finance operator. * AF_P24 - operations processed by Allegro Finance with PRZELEWY24. * AF_PAYU - operations processed by Allegro Finance with PAYU.
     *     @var string $payment.id The payment ID.
     *     @var string $participant.login Login of the participant. In case of REFUND_INCREASE operation this is the login of the seller, in other cases, of the buyer.
     *     @var string $occurredAt.gte The minimum date and time of operation occurrence in ISO 8601 format.
     *     @var string $occurredAt.lte The maximum date and time of operation occurrence in ISO 8601 format.
     *     @var array $group Group of operation types: * INCOME - CONTRIBUTION, SURCHARGE, CORRECTION, DEDUCTION_INCREASE, COMPENSATION. * OUTCOME - PAYOUT, PAYOUT_CANCEL, DEDUCTION_CHARGE. * REFUND - REFUND_CHARGE, REFUND_CANCEL, REFUND_INCREASE, CORRECTION, PROVIDER_REFUND_TRANSFER_CHARGE, PROVIDER_REFUND_TRANSFER_INCREASE. * BLOCKADES - BLOCKADE, BLOCKADE_RELEASE.
     *     @var string $marketplaceId The marketplace ID where operation was made. When the parameter is omitted, searches for operations with all marketplaces. Note, that there are operations not assigned to any marketplace.
     *     @var string $currency Currency of the operations.
     *     @var int $limit Number of returned operations.
     *     @var int $offset Index of the first returned payment operation from all search results.
     * }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/payments/payment-operations';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/vnd.allegro.public.v1+json']];
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['wallet.type', 'wallet.paymentOperator', 'payment.id', 'participant.login', 'occurredAt.gte', 'occurredAt.lte', 'group', 'marketplaceId', 'currency', 'limit', 'offset']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['wallet.type' => 'AVAILABLE', 'limit' => 50, 'offset' => 0]);
        $optionsResolver->addAllowedTypes('wallet.type', ['string']);
        $optionsResolver->addAllowedTypes('wallet.paymentOperator', ['string']);
        $optionsResolver->addAllowedTypes('payment.id', ['string']);
        $optionsResolver->addAllowedTypes('participant.login', ['string']);
        $optionsResolver->addAllowedTypes('occurredAt.gte', ['string']);
        $optionsResolver->addAllowedTypes('occurredAt.lte', ['string']);
        $optionsResolver->addAllowedTypes('group', ['array']);
        $optionsResolver->addAllowedTypes('marketplaceId', ['string']);
        $optionsResolver->addAllowedTypes('currency', ['string']);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('offset', ['int']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jlonom\AllegroSDK\Exception\GetPaymentsOperationHistoryUnauthorizedException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (401 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetPaymentsOperationHistoryUnauthorizedException($response);
        }
        if (200 === $status) {
        }
        if (422 === $status) {
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}