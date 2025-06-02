<?php

namespace Jlonom\AllegroSDK\Endpoint;

class GetListOfDisputesUsingGET extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    /**
     * Use this resource to get the list of your disputes ordered by descending opened date. Read more: <a href="../../tutorials/jak-zarzadzac-dyskusjami-E7Zj6gK7ysE#dyskusje-na-koncie" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-discussions-VL6Yr40e5t5#all-discussions" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var string $checkoutForm.id Checkout form identifier.
     *     @var int $limit The maximum number of disputes in a response.
     *     @var int $offset Index of first returned dispute.
     *     @var array $status Filter disputes with given set of statuses.
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
        return '/sale/disputes';
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
        $optionsResolver->setDefined(['checkoutForm.id', 'limit', 'offset', 'status']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['limit' => 10, 'offset' => 0]);
        $optionsResolver->addAllowedTypes('checkoutForm.id', ['string']);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('offset', ['int']);
        $optionsResolver->addAllowedTypes('status', ['array']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jlonom\AllegroSDK\Exception\GetListOfDisputesUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetListOfDisputesUsingGETNotFoundException
     * @throws \Jlonom\AllegroSDK\Exception\GetListOfDisputesUsingGETUnprocessableEntityException
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
            throw new \Jlonom\AllegroSDK\Exception\GetListOfDisputesUsingGETUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetListOfDisputesUsingGETNotFoundException($response);
        }
        if (422 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetListOfDisputesUsingGETUnprocessableEntityException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}