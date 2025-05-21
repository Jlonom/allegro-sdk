<?php

namespace Jlonom\AllegroSDK\Endpoint;

class PostBadges extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    /**
    * This resource allows you to apply for a badge. Most badges involve additional fee charged.
    Your badge application will be verified and you will be notified about the verification status via e-mail. You can use *Location* provided in header of the response to track your application status. Application will be removed after 30 days when status of the application was changed form PROCESSED or DECLINED.
    Fees will be charged in accordance with Annex No. 1 to the
     <a href="https://allegro.pl/regulaminy/regulamin-strefy-okazji-9dGVAPB69In"
       target="_blank">Daily deals zone terms and conditions</a>.
    By using this resource you agree to the
     <a href="https://allegro.pl/regulaminy/regulamin-strefy-okazji-9dGVAPB69In"
       target="_blank">Daily deals zone terms and conditions</a>
    or
     <a href="https://allegro.pl/regulaminy/regulamin-programu-bonusowego-prowizja-nawet-0-5-0KPkAE7wkcv"
       target="_blank">Commission discount terms and conditions</a>.
    Read more: <a href="../../tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#zglos-oferte-do-kampanii" target="_blank">PL</a> / <a href="../../tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#submit-offer-to-a-campaign" target="_blank">EN</a>.
    *
    * @param null|\Jlonom\AllegroSDK\Model\BadgeApplicationRequest $requestBody 
    */
    public function __construct(?\Jlonom\AllegroSDK\Model\BadgeApplicationRequest $requestBody = null)
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
        return '/sale/badges';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jlonom\AllegroSDK\Model\BadgeApplicationRequest) {
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
        if (202 === $status) {
        }
        if (400 === $status) {
        }
        if (401 === $status) {
        }
        if (403 === $status) {
        }
        if (422 === $status) {
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}