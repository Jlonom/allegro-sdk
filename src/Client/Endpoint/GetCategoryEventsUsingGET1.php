<?php

namespace Jlonom\AllegroSDK\Endpoint;

class GetCategoryEventsUsingGET1 extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $accept;
    /**
    * Use this resource to get information about changes in categories. It returns changes that occurred in the last 3 months.
    At present we support the following changes:
     - CATEGORY_CREATED - new category was created.
     - CATEGORY_RENAMED - category name has been changed.
     - CATEGORY_MOVED - category has been moved to a different place in category tree, category parent id field is changed.
     - CATEGORY_DELETED - category is no longer available, category from redirectCategory field should be used instead.
    
     Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#dziennik-zmian-w-kategoriach" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#event-journal-in-categories" target="_blank">EN</a>.
    *
    * @param array $queryParameters {
    *     @var string $from The ID of the last seen event. Changes that occurred after the given event will be returned.
    *     @var int $limit The number of events that will be returned in the response.
    *     @var array $type The types of events that will be returned in the response. All types of events are returned by default.
    * }
    * @param array $accept Accept content header application/vnd.allegro.public.v1+json|application/json
    */
    public function __construct(array $queryParameters = [], array $accept = [])
    {
        $this->queryParameters = $queryParameters;
        $this->accept = $accept;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/sale/category-events';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/vnd.allegro.public.v1+json', 'application/json']];
        }
        return $this->accept;
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['from', 'limit', 'type']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['limit' => 100]);
        $optionsResolver->addAllowedTypes('from', ['string']);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('type', ['array']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jlonom\AllegroSDK\Exception\GetCategoryEventsUsingGET1BadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\GetCategoryEventsUsingGET1UnauthorizedException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Jlonom\AllegroSDK\Exception\GetCategoryEventsUsingGET1BadRequestException($serializer->deserialize($body, 'Jlonom\AllegroSDK\Model\ErrorsHolder', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Jlonom\AllegroSDK\Exception\GetCategoryEventsUsingGET1UnauthorizedException($serializer->deserialize($body, 'Jlonom\AllegroSDK\Model\AuthError', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}