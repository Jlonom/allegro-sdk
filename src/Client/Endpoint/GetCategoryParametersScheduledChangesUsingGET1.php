<?php

namespace Jlonom\AllegroSDK\Endpoint;

class GetCategoryParametersScheduledChangesUsingGET1 extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $accept;
    /**
    * Use this resource to get information about planned changes in category parameters. Please note that in some cases, the returned events may finally not happen in the future.
    At present we support the following changes: - REQUIREMENT_CHANGE - the parameter will be required in the category. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-sprawdzic-przyszle-zmiany-w-parametrach" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-check-future-changes-in-parameters" target="_blank">EN</a>.
    *
    * @param array $queryParameters {
    *     @var string $scheduledFor.gte The minimum date and time from which the change will be effective from in ISO 8601 format. Should be greater than the current date time and less than 3 months from the current date.
    *     @var string $scheduledFor.lte The maximum date and time from which the change will be effective from in ISO 8601 format. Should be greater than the current date time and less than 3 months from the current date.
    *     @var string $scheduledAt.gte The minimum date and time at which the change was scheduled in ISO 8601 format.
    *     @var string $scheduledAt.lte The maximum date and time at which the change was scheduled in ISO 8601 format.
    *     @var array $type The types of changes that will be returned in the response. All types of changes are returned by default.
    *     @var int $offset The offset of elements in the response.
    *     @var int $limit The limit of elements in the response.
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
        return '/sale/category-parameters-scheduled-changes';
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
        $optionsResolver->setDefined(['scheduledFor.gte', 'scheduledFor.lte', 'scheduledAt.gte', 'scheduledAt.lte', 'type', 'offset', 'limit']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['offset' => 0, 'limit' => 100]);
        $optionsResolver->addAllowedTypes('scheduledFor.gte', ['string']);
        $optionsResolver->addAllowedTypes('scheduledFor.lte', ['string']);
        $optionsResolver->addAllowedTypes('scheduledAt.gte', ['string']);
        $optionsResolver->addAllowedTypes('scheduledAt.lte', ['string']);
        $optionsResolver->addAllowedTypes('type', ['array']);
        $optionsResolver->addAllowedTypes('offset', ['int']);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jlonom\AllegroSDK\Exception\GetCategoryParametersScheduledChangesUsingGET1BadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\GetCategoryParametersScheduledChangesUsingGET1UnauthorizedException
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
            throw new \Jlonom\AllegroSDK\Exception\GetCategoryParametersScheduledChangesUsingGET1BadRequestException($serializer->deserialize($body, 'Jlonom\AllegroSDK\Model\ErrorsHolder', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Jlonom\AllegroSDK\Exception\GetCategoryParametersScheduledChangesUsingGET1UnauthorizedException($serializer->deserialize($body, 'Jlonom\AllegroSDK\Model\AuthError', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}