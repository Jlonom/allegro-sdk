<?php

namespace Jlonom\AllegroSDK\Endpoint;

class GetAdvanceShipNoticeLabels extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $id;
    protected $accept;
    /**
     * Use this resource to get labels for Advance Ship Notice after being created with "create labels command". Read more: <a href="../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#wygeneruj-oznaczenia-na-kartony" target="_blank">PL</a> / <a href="../../tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#create-labels-for-boxes" target="_blank">EN</a>.
     *
     * @param string $id An identifier of the Advance Ship Notice.
     * @param array $headerParameters {
     *     @var string $accept Content-type of generated labels.
     * }
     * @param array $accept Accept content header application/pdf|x-application/zpl
     */
    public function __construct(string $id, array $headerParameters = [], array $accept = [])
    {
        $this->id = $id;
        $this->headerParameters = $headerParameters;
        $this->accept = $accept;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/fulfillment/advance-ship-notices/{id}/labels');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/pdf', 'x-application/zpl']];
        }
        return $this->accept;
    }
    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['accept']);
        $optionsResolver->setRequired(['accept']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('accept', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jlonom\AllegroSDK\Exception\GetAdvanceShipNoticeLabelsUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetAdvanceShipNoticeLabelsForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetAdvanceShipNoticeLabelsNotFoundException
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
            throw new \Jlonom\AllegroSDK\Exception\GetAdvanceShipNoticeLabelsUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetAdvanceShipNoticeLabelsForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetAdvanceShipNoticeLabelsNotFoundException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}