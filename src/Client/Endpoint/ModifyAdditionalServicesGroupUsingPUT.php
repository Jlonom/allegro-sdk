<?php

namespace Jlonom\AllegroSDK\Endpoint;

class ModifyAdditionalServicesGroupUsingPUT extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $groupId;
    /**
     * Use this resource to modify existing additional service group. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-zaktualizowac-grupe-uslug-dodatkowych" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-update-additional-service-group" target="_blank">EN</a>.
     *
     * @param string $groupId Additional service group ID.
     * @param \Jlonom\AllegroSDK\Model\AdditionalServicesGroupRequest $requestBody 
     */
    public function __construct(string $groupId, \Jlonom\AllegroSDK\Model\AdditionalServicesGroupRequest $requestBody)
    {
        $this->groupId = $groupId;
        $this->body = $requestBody;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{groupId}'], [$this->groupId], '/sale/offer-additional-services/groups/{groupId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jlonom\AllegroSDK\Model\AdditionalServicesGroupRequest) {
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
     * @throws \Jlonom\AllegroSDK\Exception\ModifyAdditionalServicesGroupUsingPUTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\ModifyAdditionalServicesGroupUsingPUTNotFoundException
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
            throw new \Jlonom\AllegroSDK\Exception\ModifyAdditionalServicesGroupUsingPUTUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\ModifyAdditionalServicesGroupUsingPUTNotFoundException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}