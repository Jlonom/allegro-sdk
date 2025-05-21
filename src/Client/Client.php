<?php

namespace Jlonom\AllegroSDK;

class Client extends \Jlonom\AllegroSDK\Runtime\Client\Client
{
    /**
     * Use this resource to create offer based on product. Read more: <a href="https://developer.allegro.pl/tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#jak-wystawic-oferte-z-produktem-za-pomoca-zasobu-sale-product-offers" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#how-to-list-an-offer-with-a-product-via-sale-product-offers-resource" target="_blank">EN</a>. Note that requests may be limited.
     *
     * @param \Jlonom\AllegroSDK\Model\SaleProductOfferRequestV1 $requestBody 
     * @param array $headerParameters {
     *     @var string $Accept-Language Expected language of messages.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createProductOffers(\Jlonom\AllegroSDK\Model\SaleProductOfferRequestV1 $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\CreateProductOffers($requestBody, $headerParameters), $fetch);
    }
    /**
     * Use this resource to retrieve all data of the particular product-offer. Read more: <a href="https://developer.allegro.pl/tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#publikacja-oferty-w-asynchronicznym-api" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#offer-publication-in-asynchronous-api" target="_blank">EN</a>.
     *
     * @param string $offerId Offer identifier.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getProductOffer(string $offerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetProductOffer($offerId), $fetch);
    }
    /**
     * Use this resource to edit offer. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#edycja-pojedynczej-oferty" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#editing-single-offer" target="_blank">EN</a>. Note that requests may be limited.
     *
     * @param string $offerId The offer identifier.
     * @param \Jlonom\AllegroSDK\Model\SaleProductOfferPatchRequestV1 $requestBody 
     * @param array $headerParameters {
     *     @var string $Accept-Language Expected language of messages.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function editProductOffers(string $offerId, \Jlonom\AllegroSDK\Model\SaleProductOfferPatchRequestV1 $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\EditProductOffers($offerId, $requestBody, $headerParameters), $fetch);
    }
    /**
     * Use this resource to retrieve selected data of the particular product-offer. The model and functionality is a subset of the full product offer get endpoint (`GET /sale/product-offers/{offerId}`), but it is faster and more reliable.
     *
     * @param string $offerId Offer identifier.
     * @param array $queryParameters {
     *     @var array $include Selection of parts intended to retrieve. Multiple parts can be specified at the same time.
     * }
     * @param array $headerParameters {
     *     @var string $Accept-Language Expected language of messages.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getPartialProductOffer(string $offerId, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetPartialProductOffer($offerId, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * The URI for the resource given by Location header of POST /sale/product-offers and PATCH /sale/product-offers/{offerId}. Use this resource to check processing status of a POST or PATCH request. Read more: <a href="https://developer.allegro.pl/tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#publikacja-oferty-w-asynchronicznym-api" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#offer-publication-in-asynchronous-api" target="_blank">EN</a>.
     *
     * @param string $offerId Offer identifier.
     * @param string $operationId Operation identifier provided in location header of POST or PATCH request.
     * @param array $headerParameters {
     *     @var string $Accept-Language Expected language of messages.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetProductOfferProcessingStatusBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\GetProductOfferProcessingStatusUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetProductOfferProcessingStatusForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetProductOfferProcessingStatusNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getProductOfferProcessingStatus(string $offerId, string $operationId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetProductOfferProcessingStatus($offerId, $operationId, $headerParameters), $fetch);
    }
    /**
    * Use this resource to get the list of the seller's offers. You can use different query parameters to filter the list. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-pobrac-moje-oferty-w-rest-api" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#list-of-offers" target="_blank">EN</a>.
    *
    * @param array $queryParameters {
    *     @var array $offer.id Offer ID.
    *     @var string $name The text to search in the offer title.
    *     @var float $sellingMode.price.amount.gte The lower threshold of price.
    
    If additionally a `publication.marketplace` is provided, searches using the price on the given marketplace.
    *     @var float $sellingMode.price.amount.lte The upper threshold of price.
    
    If additionally a `publication.marketplace` is provided, searches using the price on the given marketplace.
    *     @var string $sellingMode.priceAutomation.rule.id The ID of price automation rule. Returns offers with given price automation rule ID.
    
    If additionally a `publication.marketplace` is provided, searches using the price automation rule on the given marketplace.
    *     @var bool $sellingMode.priceAutomation.rule.id.empty Allows to filter offers by existence of price automation rule ID. Passing 'false' will return offers with any price automation rule, passing 'true' will return offers without any price automation rules.
    
    If additionally a `publication.marketplace` is provided, searches using the price automation rule on the given marketplace.
    *     @var array $publication.status The publication status of the offer. Passing more than one value will search for offers with any of the given statuses. By default all statuses are included. Example: `publication.status=INACTIVE&publication.status=ACTIVE` - returns offers with status `INACTIVE` or `ACTIVE`.
    *     @var string $publication.marketplace Either the base marketplace or an additional marketplace of the offer.
    
    When passing the parameter `publication.marketplace`, searches for offers with the given marketplace as either its base marketplace or one of its additional marketplaces. When the parameter is omitted, searches for offers with all marketplaces.
    
    In addition to searching, passing the parameter also influences the functionality of other query parameter by searching and sorting by data (e.g. price) on the given marketplace.
    *     @var array $sellingMode.format The offer's selling format. Passing more than one value will search for offers with any of the given formats. By default all formats are included. Example: `sellingMode.format=BUY_NOW&sellingMode.format=ADVERTISEMENT` - returns offers with with format `BUY_NOW` or `ADVERTISEMENT`.
    *     @var array $external.id The ID from the client's external system. Passing more than one value will search for offers with any of the given IDs. By default no ID is included. Example: `external.id=1233&external.id=1234` - returns offers with ID `1233` or `1234`. Single ID length shouldn't exceed 100 characters.
    *     @var string $delivery.shippingRates.id The ID of shipping rates. Returns offers with given shipping rates ID.
    *     @var bool $delivery.shippingRates.id.empty Allows to filter offers by existence of shipping rates ID.
    *     @var string $sort The results' sorting order. No prefix in the value means ascending order. `-` prefix means descending order. If you don't provide the sort parameter, the list is sorted by offer creation time, descending.
    
    If additionally a `publication.marketplace` is provided, sorts by price and `stock.sold` using the data on the given marketplace.
    *     @var int $limit The maximum number of offers returned in the response.
    *     @var int $offset Index of the first returned offer from all search results. Maximum sum of offset and limit is 10 000 000.
    *     @var string $category.id The identifier of the category, where you want to search for offers.
    *     @var bool $product.id.empty Allows to filter offers by existence of product ID.
    *     @var bool $productizationRequired Allows to search for offers from categories where productization is required.
    *     @var bool $b2b.buyableOnlyByBusiness Allows to search for offers buyable only by businesses.
    *     @var string $fundraisingCampaign.id ID of the charity fundraising campaign that benefits from this offer.
    *     @var bool $fundraisingCampaign.id.empty Allows to search for charity or commercial offers.
    *     @var string $afterSalesServices.returnPolicy.id The ID of return policy. Returns offers with given return policy ID.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function searchOffersUsingGET(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\SearchOffersUsingGET($queryParameters), $fetch);
    }
    /**
     * Use this resource to delete a draft offer. Read more: <a href="https://developer.allegro.pl/news/nowy-zasob-do-usuwania-draftow-ofert-aMDnGka2RuL" target="_blank">PL</a> / <a href="https://developer.allegro.pl/news/new-resource-draft-delete-yPy9lq6myh0" target="_blank">EN</a>.
     *
     * @param string $offerId Offer identifier.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\DeleteOfferUsingDELETEUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\DeleteOfferUsingDELETEForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\DeleteOfferUsingDELETENotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteOfferUsingDELETE(string $offerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\DeleteOfferUsingDELETE($offerId), $fetch);
    }
    /**
     * Use this resource to change the Buy Now price in a single offer. Read more: <a href="https://developer.allegro.pl/news/mozliwosc-zmiany-ceny-kup-teraz-2YzrKRrr3Sl" target="_blank">PL</a> / <a href="https://developer.allegro.pl/news/possibility-to-change-the-buy-it-now-price-q018mq8D2hW" target="_blank">EN</a>.
     *
     * @param string $offerId The offer identifier.
     * @param string $commandId The unique command id generated by you.
     * @param \Jlonom\AllegroSDK\Model\ChangePriceWithoutOutput $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createChangePriceCommandUsingPUT(string $offerId, string $commandId, \Jlonom\AllegroSDK\Model\ChangePriceWithoutOutput $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\CreateChangePriceCommandUsingPUT($offerId, $commandId, $requestBody), $fetch);
    }
    /**
     * Get offer translation for given language or all present. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#tlumaczenia-ofert" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#offer-translations" target="_blank">EN</a>.
     *
     * @param string $offerId Offer identifier.
     * @param array $queryParameters {
     *     @var string $language Language for translation to retrieve. If not provided, all translations as well as base content for offer will be returned.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOfferTranslationUsingGET(string $offerId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetOfferTranslationUsingGET($offerId, $queryParameters), $fetch);
    }
    /**
     * Delete single element or entire manual translation. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#tlumaczenia-ofert" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#offer-translations" target="_blank">EN</a>.
     *
     * @param string $language Language of the translation to delete.
     * @param string $offerId Offer identifier.
     * @param array $queryParameters {
     *     @var string $element Offer element for which translation should be deleted. If not provided, translations for all elements will be deleted.
     *     @var string $products.id ProductId for which safety information translation should be deleted. If not provided, safety information translations for all products in offer will be deleted.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteManualTranslationUsingDELETE(string $language, string $offerId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\DeleteManualTranslationUsingDELETE($language, $offerId, $queryParameters), $fetch);
    }
    /**
     * Update manual translation for offer. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#tlumaczenia-ofert" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#offer-translations" target="_blank">EN</a>.
     *
     * @param string $language Language of the provided translation.
     * @param string $offerId Offer identifier.
     * @param \Jlonom\AllegroSDK\Model\ManualTranslationUpdateRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateOfferTranslationUsingPATCH(string $language, string $offerId, \Jlonom\AllegroSDK\Model\ManualTranslationUpdateRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\UpdateOfferTranslationUsingPATCH($language, $offerId, $requestBody), $fetch);
    }
    /**
     * This endpoint returns daily statistics collected for a list of advertisements in a given date range for logged user. Read more: <a href="https://developer.allegro.pl/tutorials/jak-wystawic-i-zarzadzac-ogloszeniem-K6r3Z47dKcy#statystyki-wszystkich-ogloszen-sprzedawcy" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/listing-and-managing-classified-ads-5Ln0r6wkWs7#statistics-of-seller-s-classified-ads" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var string $date.gte The maximum date and time from which the events will be fetched in ISO 8601 format. The value should be less than the current date time. The difference between date.gte and date.lte should be less than 3 months.
     *     @var string $date.lte The minimum date and time from which the events will be fetched in ISO 8601 format. The value should be less than the current date time and greater than date.lte. The difference between date.gte and date.lte should be less than 3 months.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\ClassifiedSellerOfferStatsGETBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\ClassifiedSellerOfferStatsGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\ClassifiedSellerOfferStatsGETForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\ClassifiedSellerOfferStatsGETNotFoundException
     * @throws \Jlonom\AllegroSDK\Exception\ClassifiedSellerOfferStatsGETUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function classifiedSellerOfferStatsGET(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\ClassifiedSellerOfferStatsGET($queryParameters), $fetch);
    }
    /**
     * This endpoint returns daily statistics collected for a list of advertisements in a given date range. Read more: <a href="https://developer.allegro.pl/tutorials/jak-wystawic-i-zarzadzac-ogloszeniem-K6r3Z47dKcy#statystyki-wybranych-ogloszen" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/listing-and-managing-classified-ads-5Ln0r6wkWs7#statistics-of-selected-classified-ads" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var array $offer.id List of offer Ids, maximum 50 values.
     *     @var string $date.gte The maximum date and time from which the events will be fetched in ISO 8601 format. The value should be less than the current date time. The difference between date.gte and date.lte should be less than 3 months.
     *     @var string $date.lte The minimum date and time from which the events will be fetched in ISO 8601 format. The value should be less than the current date time and greater than date.lte. The difference between date.gte and date.lte should be less than 3 months.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\ClassifiedOffersStatsGETBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\ClassifiedOffersStatsGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\ClassifiedOffersStatsGETForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\ClassifiedOffersStatsGETNotFoundException
     * @throws \Jlonom\AllegroSDK\Exception\ClassifiedOffersStatsGETUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function classifiedOffersStatsGET(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\ClassifiedOffersStatsGET($queryParameters), $fetch);
    }
    /**
     * Use this resource to retrieve information about the offer listing statuses. You will receive a summary with a number of correctly listed offers and errors. Read more: <a href="https://developer.allegro.pl/tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#zestawienie-zadan" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#task-list" target="_blank">EN</a>. This resource is rate limited to retrieving information about 270 000 offer changes per minute.
     *
     * @param string $commandId Command identifier.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetPublicationReportUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetPublicationReportUsingGETForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetPublicationReportUsingGETNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getPublicationReportUsingGET(string $commandId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetPublicationReportUsingGET($commandId), $fetch);
    }
    /**
     * Use this resource to modify multiple offers publication at once. Read more: <a href="https://developer.allegro.pl/tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#publikacja-oferty" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#offer-publication" target="_blank">EN</a>. This resource is rate limited to 250 000 offer changes per hour or 9000 offer changes per minute.
     *
     * @param string $commandId Command identifier.
     * @param \Jlonom\AllegroSDK\Model\PublicationChangeCommandDto $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\ChangePublicationStatusUsingPUTBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\ChangePublicationStatusUsingPUTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\ChangePublicationStatusUsingPUTForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\ChangePublicationStatusUsingPUTNotFoundException
     * @throws \Jlonom\AllegroSDK\Exception\ChangePublicationStatusUsingPUTConflictException
     * @throws \Jlonom\AllegroSDK\Exception\ChangePublicationStatusUsingPUTUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function changePublicationStatusUsingPUT(string $commandId, \Jlonom\AllegroSDK\Model\PublicationChangeCommandDto $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\ChangePublicationStatusUsingPUT($commandId, $requestBody), $fetch);
    }
    /**
     * Use this resource to retrieve information about the offer statuses on the site (Defaults: limit = 100, offset = 0). Read more: <a href="https://developer.allegro.pl/tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#informacje-o-publikacji" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#information-about-publication" target="_blank">EN</a>. This resource is rate limited to retrieving information about 270 000 offer changes per minute.
     *
     * @param string $commandId Command identifier.
     * @param array $queryParameters {
     *     @var int $limit The limit of elements in the response.
     *     @var int $offset The offset of elements in the response.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetPublicationTasksUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetPublicationTasksUsingGETForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetPublicationTasksUsingGETNotFoundException
     * @throws \Jlonom\AllegroSDK\Exception\GetPublicationTasksUsingGETUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getPublicationTasksUsingGET(string $commandId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetPublicationTasksUsingGET($commandId, $queryParameters), $fetch);
    }
    /**
     * Use this resource to retrieve classified packages currently assigned to an offer. Read more: <a href="https://developer.allegro.pl/tutorials/jak-wystawic-i-zarzadzac-ogloszeniem-K6r3Z47dKcy#dodatkowe-opcje-promowania" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/listing-and-managing-classified-ads-5Ln0r6wkWs7#additional-promo-options" target="_blank">EN</a>.
     *
     * @param string $offerId Offer ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getClassifiedPackagesUsingGET(string $offerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetClassifiedPackagesUsingGET($offerId), $fetch);
    }
    /**
     * Use this resource to assign classified packages to an offer. Read more: <a href="https://developer.allegro.pl/tutorials/jak-wystawic-i-zarzadzac-ogloszeniem-K6r3Z47dKcy#dodatkowe-opcje-promowania" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/listing-and-managing-classified-ads-5Ln0r6wkWs7#additional-promo-options" target="_blank">EN</a>.
     *
     * @param string $offerId The offer ID.
     * @param \Jlonom\AllegroSDK\Model\ClassifiedPackages $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function assignClassifiedPackagesUsingPUT(string $offerId, \Jlonom\AllegroSDK\Model\ClassifiedPackages $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\AssignClassifiedPackagesUsingPUT($offerId, $requestBody), $fetch);
    }
    /**
     * Use this resource to retrieve configurations of classifieds packages for a category. Read more: <a href="https://developer.allegro.pl/tutorials/jak-wystawic-i-zarzadzac-ogloszeniem-K6r3Z47dKcy#lista-pakietow-i-opcji-dodatkowych" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/listing-and-managing-classified-ads-5Ln0r6wkWs7#list-of-promo-options" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var string $category.id The category ID.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getClassifiedPackageConfigurationsForCategoryUsingGET(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetClassifiedPackageConfigurationsForCategoryUsingGET($queryParameters), $fetch);
    }
    /**
     * Use this resource to retrieve the configuration of a classifieds package. Read more: <a href="https://developer.allegro.pl/tutorials/jak-wystawic-i-zarzadzac-ogloszeniem-K6r3Z47dKcy#lista-pakietow-i-opcji-dodatkowych" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/listing-and-managing-classified-ads-5Ln0r6wkWs7#list-of-promo-options" target="_blank">EN</a>.
     *
     * @param string $packageId The classifieds package ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getClassifiedPackageConfigurationUsingGET(string $packageId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetClassifiedPackageConfigurationUsingGET($packageId), $fetch);
    }
    /**
     * Use this resource to receive feedback statistics. Read more: <a href="https://developer.allegro.pl/news/nowe-zasoby-ktorymi-pobierzesz-informacje-o-ocenach-ZM9L1WPBbUb" target="_blank">PL</a> / <a href="https://developer.allegro.pl/news/new-resources-to-download-sales-feedback-d2VYERBMRiz" target="_blank">EN</a>.
     *
     * @param string $userId The ID of the user.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/vnd.allegro.public.v1+json|application/vnd.allegro.beta.v1+json
     * @throws \Jlonom\AllegroSDK\Exception\GetUserSummaryUsingGETNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getUserSummaryUsingGET(string $userId, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetUserSummaryUsingGET($userId, $accept), $fetch);
    }
    /**
     * Use this resource to receive your sales ratings sorted by last change date, starting from the latest. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-pobrac-informacje-o-ocenie-sprzedazy" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-retrieve-user-s-ratings-data" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var string $recommended Filter by recommended.
     *     @var string $lastChangedAt.gte Last change (creation or latest edition) date time in ISO 8601 format. The lower bound of date time range from which ratings will be fetched.
     *     @var string $lastChangedAt.lte Last change (creation or latest edition) date time in ISO 8601 format. The upper bound of date time range from which ratings will be fetched.
     *     @var int $offset The offset of elements in the response.
     *     @var int $limit The limit of elements in the response.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetUserRatingsUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetUserRatingsUsingGETForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetUserRatingsUsingGETNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getUserRatingsUsingGET(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetUserRatingsUsingGET($queryParameters), $fetch);
    }
    /**
     * Use this resource to receive your sales rating by given rating id. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-pobrac-informacje-o-ocenie-sprzedazy" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-retrieve-user-s-ratings-data" target="_blank">EN</a>.
     *
     * @param string $ratingId The ID of the rating.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetUserRatingUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetUserRatingUsingGETForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetUserRatingUsingGETNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getUserRatingUsingGET(string $ratingId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetUserRatingUsingGET($ratingId), $fetch);
    }
    /**
     * Use this resource to answer for received rating. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-dodac-odpowiedz-na-ocene" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-answer-for-user-rating" target="_blank">EN</a>.
     *
     * @param string $ratingId ID of the rating.
     * @param \Jlonom\AllegroSDK\Model\UserRatingAnswerRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\AnswerUserRatingUsingPUTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\AnswerUserRatingUsingPUTForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\AnswerUserRatingUsingPUTNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function answerUserRatingUsingPUT(string $ratingId, \Jlonom\AllegroSDK\Model\UserRatingAnswerRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\AnswerUserRatingUsingPUT($ratingId, $requestBody), $fetch);
    }
    /**
     * Use this resource to request removal of received rating. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-wyslac-prosbe-o-usuniecie-oceny" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-send-a-request-to-remove-user-rating" target="_blank">EN</a>.
     *
     * @param string $ratingId ID of the rating.
     * @param \Jlonom\AllegroSDK\Model\UserRatingRemovalRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\UserRatingRemovalUsingPUTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\UserRatingRemovalUsingPUTForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\UserRatingRemovalUsingPUTNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function userRatingRemovalUsingPUT(string $ratingId, \Jlonom\AllegroSDK\Model\UserRatingRemovalRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\UserRatingRemovalUsingPUT($ratingId, $requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetSaleQualityUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetSaleQualityUsingGETForbiddenException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getSaleQualityUsingGET(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetSaleQualityUsingGET(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function meGET(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\MeGET(), $fetch);
    }
    /**
     * Use this resource to retrieve a list of groups with additional services available to a given user which you may assign to offers. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-pobrac-liste-grup-uslug-dodatkowych-na-koncie" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-retrieve-a-list-of-additional-services-groups-for-the-account" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var int $offset The offset of elements in the response.
     *     @var int $limit The limit of elements in the response.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetListOfAdditionalServicesGroupsUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetListOfAdditionalServicesGroupsUsingGETForbiddenException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getListOfAdditionalServicesGroupsUsingGET(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetListOfAdditionalServicesGroupsUsingGET($queryParameters), $fetch);
    }
    /**
     * Use this resource to create a group of additional services. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-dodac-nowa-grupe-uslug-dodatkowych" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-add-a-new-additional-service-group" target="_blank">EN</a>.
     *
     * @param \Jlonom\AllegroSDK\Model\AdditionalServicesGroupRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\CreateAdditionalServicesGroupUsingPOSTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\CreateAdditionalServicesGroupUsingPOSTUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createAdditionalServicesGroupUsingPOST(\Jlonom\AllegroSDK\Model\AdditionalServicesGroupRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\CreateAdditionalServicesGroupUsingPOST($requestBody), $fetch);
    }
    /**
    * You can fetch page of seller's offer bundles using this endpoint.
    <br> Paging: <br> To move to next page, specify `page.id` parameter with value obtained in response from previous request. Number of offer bundles on single page can be specified using `limit` parameter.
    <br> Filtering: <br> Offer bundles can be filtered to bundles which contain offer specified in `offer.id` parameter. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#pobierz-liste-zestawow-ofert" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#retrieve-offer-bundles-list" target="_blank">EN</a>.
    *
    * @param array $queryParameters {
    *     @var int $limit Limit of bundles per page.
    *     @var string $offer.id Filter bundles which contains offer.
    *     @var string $page.id ID of page which will be retrieved.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function listSellersOfferBundlesUsingGET(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\ListSellersOfferBundlesUsingGET($queryParameters), $fetch);
    }
    /**
    * You can create <a href="https://help.allegro.com/sell/en/a/how-to-create-offer-bundles-rj9eAL2XnhK?marketplaceId=allegro-pl" target="_blank">offer bundle</a> using this endpoint. Bundle has to contain at least two offers and at least one of them has to be set as an entry point. Bundle will be shown on offers' pages which are marked as entry points. You can also specify how many units of each offer will be in bundle using `requiredQuantity` property.
    <br> Additionally, discount can be specified for each marketplace separately. If you do not want to set discount, set `discounts` property to `null` or empty array. Also, you do not have to specify discount on all marketplaces. Fill marketplaces in 'discounts' array accordingly to your needs.
    <br> Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#utworz-zestaw-ofert" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#create-an-offer-bundle" target="_blank">EN</a>.
    *
    * @param \Jlonom\AllegroSDK\Model\CreateOfferBundleDTO $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function createOfferBundleUsingPOST(\Jlonom\AllegroSDK\Model\CreateOfferBundleDTO $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\CreateOfferBundleUsingPOST($requestBody), $fetch);
    }
    /**
     * Use this resource to delete offer bundle by its unique identifier. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#usun-wybrany-zestaw" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#remove-the-selected-offer-bundle" target="_blank">EN</a>.
     *
     * @param string $bundleId Bundle ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteOfferBundleUsingGET(string $bundleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\DeleteOfferBundleUsingGET($bundleId), $fetch);
    }
    /**
     * Use this resource to retrieve offer bundle by its unique identifier. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#pobierz-szczegoly-wybranego-zestawu" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#retrieve-details-of-the-selected-offer-bundle" target="_blank">EN</a>.
     *
     * @param string $bundleId Bundle ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOfferBundleUsingGET(string $bundleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetOfferBundleUsingGET($bundleId), $fetch);
    }
    /**
     * Use this resource to update discount per marketplaces associated with bundle specified by its unique identifier. This will override currently set discounts for all marketplaces, so the unchanged discounts also must be specified in request. In case discount for marketplace is not specified in request it will be deleted. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#zmien-rabat-przypisany-do-wybranego-zestawu" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#change-the-discount-for-the-selected-offer-bundle" target="_blank">EN</a>.
     *
     * @param string $bundleId Bundle ID.
     * @param \Jlonom\AllegroSDK\Model\UpdateOfferBundleDiscountDTO $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateOfferBundleDiscountUsingPUT(string $bundleId, \Jlonom\AllegroSDK\Model\UpdateOfferBundleDiscountDTO $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\UpdateOfferBundleDiscountUsingPUT($bundleId, $requestBody), $fetch);
    }
    /**
    * Get a list of promotions defined by the authorized user and filtered by promotion type.
    <p>Restrictions:</p> <p>Filtering by promotion type is required.</p>
    <p>Sum of limit and offset must be equal to or lower than 50000. Limit must be equal to or lower than 5000.</p> <p>Example:</p> <p>offset = 49950 and limit = 50 will return promotions</p> <p>offset = 49950 and limit = 51 will return 422 http error</p> <p>offset = 0 and limit = 5000 will return promotions</p> <p>offset = 0 and limit = 5001 will return 422 http error</p>
    <p>Read more about: Large order discount <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#pobierz-dostepne-rabaty" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#retrieve-large-order-discount" target="_blank">EN</a>, Wholesale price list <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#pobierz-dostepne-cenniki" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#retrieve-wholesale-price-lists" target="_blank">EN</a>, Multipack <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#pobierz-dostepne-rabaty-ilosciowe" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#retrieve-promotional-sets" target="_blank">EN</a>.</p>
    *
    * @param array $queryParameters {
    *     @var int $limit Limit of promotions per page.
    *     @var int $offset Distance between the beginning of the document and the point from which promotions are returned.
    *     @var string $offer.id Filter by offer id. No promotions with `OFFERS_ASSIGNED_EXTERNALLY` or `ALL_OFFERS` criteria will be returned if this parameter is present.
    *     @var string $promotionType Filter by promotion type.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Jlonom\AllegroSDK\Exception\ListSellerPromotionsUsingGET1BadRequestException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function listSellerPromotionsUsingGET1(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\ListSellerPromotionsUsingGET1($queryParameters), $fetch);
    }
    /**
    * This endpoint creates a new promotion. You can create promotions only if your base marketplace is `allegro-pl`. Created promotions are visible only on the `allegro-pl` marketplace. You can define the following types of promotions:
    1. Large order discount <br> Only company users will see and be eligible for this type of promotion. In order to create a large order discount, you also have to be a company user. Furthermore, you are allowed to have only one active order discount at a time. Define a promotion with a single benefit of type **LARGE_ORDER_DISCOUNT** and a single criterion of type **ALL_OFFERS**. The benefit specification should contain a list of order value based discount thresholds. Threshold's order value defines the minimum total value of an order for which the threshold is applicable (`lowerBound`). Threshold's discount defines the discount percentage applied when the threshold is applied. The percentage's fractional part must be equal to 0. Only the highest applicable threshold (if any) will be applied to the total value of the order. A threshold with a higher order value than another threshold in the order discount must also have a higher discount. Large order discount is assigned automatically to all seller's offers. Moreover, it will be assigned to all newly added seller's offers once activated. Please note that it may take some time to propagate this type of promotion to all of your offers. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#dodaj-rabat" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#add-large-order-discount" target="_blank">EN</a>.
    2. Wholesale price list <br> Only company users will see and be eligible for this type of promotion. In order to create a wholesale price list, you also have to be a company user. Define a promotion with a single benefit of type **WHOLESALE_PRICE_LIST** and a single criterion of type **OFFERS_ASSIGNED_EXTERNALLY**. The benefit specification should contain a name (it will be visible to you only) and a list of quantity based discount thresholds. Threshold's quantity defines the minimum number of units of an offer for which the threshold is applicable (`lowerBound`). Threshold's discount defines the discount percentage applied when the threshold is applied. The percentage's fractional part must be equal to 0. Only the highest applicable threshold (if any) will be applied to the total price of units of the offer bought. A threshold with a higher quantity than another threshold in the price list must also have a higher discount. In order to assign offers to a wholesale price list, use `discounts` field in <a href="#operation/modificationCommandUsingPUT">batch offer modification</a>. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#dodaj-cennik-hurtowy" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#add-wholesale-price-list" target="_blank">EN</a>.
    3. Multipack <br> In order to create a new multipack, you have to define a promotion with a single benefit of type **UNIT_PERCENTAGE_DISCOUNT** and a single criterion of type **CONTAINS_OFFERS**. The benefit specification should contain a configuration section with a percentage which indicates the specific discount for the discounted offer. This percentage should be an integer value greater than 15 for quantity 2, greater than 30 for quantity 3, greater than 40 for quantity 4, greater than 50 for quantity 5 and lower than or equal to 100. The specification should also contain a trigger section with a field forEachQuantity that defines the amount of items in the multipack which is necessary to trigger the benefit. Additionally, the discountedNumber field must be set to 1 by default as you can only discount one unit in a multipack. Finally, the offer criterion specifies the offer for which the multipack promotion will take effect. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#dodaj-rabat-ilosciowy" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#add-quantitative-discount" target="_blank">EN</a>
    4. Cross-offer multipack <br> A cross-offer multipack is created in the same fashion as a standard multipack. The only difference is that you need to pass more than 1 offer in the offer criterion section. This group of offers is then considered as a pool from which users can pick and choose forEachQuantity offers and the cheapest of them gets a discount.
    *
    * @param \Jlonom\AllegroSDK\Model\SellerCreateRebateRequestDto $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function createPromotionUsingPOST1(\Jlonom\AllegroSDK\Model\SellerCreateRebateRequestDto $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\CreatePromotionUsingPOST1($requestBody), $fetch);
    }
    /**
     * Use this resource to deactivate the requested promotion. You need to use its unique id. <br> Read more about: Large order discount <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#usun-rabat" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#remove-large-order-discount" target="_blank">EN</a>, Wholesale price list <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#usun-cennik" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#remove-wholesale-price-list" target="_blank">EN</a>, Multipack <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#usun-rabat-ilosciowy" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#remove-an-quantitative-discount" target="_blank">EN</a>.
     *
     * @param string $promotionId Promotion identifier.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/vnd.allegro.public.v1+json|*\/*
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deactivatePromotionUsingDELETE(string $promotionId, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\DeactivatePromotionUsingDELETE($promotionId, $accept), $fetch);
    }
    /**
     * <br> Use this resource to return the requested promotion. You need to use its unique id. <br> Read more about: Large order discount <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#pobierz-informacje-o-rabacie" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#retrieve-information-about-large-order-discount" target="_blank">EN</a>, Wholesale price list <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#pobierz-informacje-o-cenniku" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#retrieve-information-about-wholesale-price-list" target="_blank">EN</a>, Multipack <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#pobierz-informacje-o-rabacie-ilosciowym" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#information-about-an-quantitative-discount" target="_blank">EN</a>.
     *
     * @param string $promotionId Promotion identifier.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getPromotionUsingGET(string $promotionId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetPromotionUsingGET($promotionId), $fetch);
    }
    /**
     * Use this resource to update a promotion by its unique id. <br> It supports editing bundle's discount, wholesale price lists and large order discounts. Read more about: Large order discount <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#edytuj-progi-rabatowe" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#edit-discount-thresholds" target="_blank">EN</a>, Wholesale price list <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#edytuj-cennik" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#edit-wholesale-price-list" target="_blank">EN</a>.
     *
     * @param string $promotionId Promotion identifier.
     * @param \Jlonom\AllegroSDK\Model\SellerCreateRebateRequestDto $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updatePromotionUsingPUT(string $promotionId, \Jlonom\AllegroSDK\Model\SellerCreateRebateRequestDto $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\UpdatePromotionUsingPUT($promotionId, $requestBody), $fetch);
    }
    /**
     * Create or modify the turnover discount for the specified marketplace. Currently, the only supported marketplace is `allegro-business-cz`. <br/> Turnover discount is assigned to all offers available on the given marketplace. Only B2B users will see and be eligible for this discount. In order to create a turnover discount definition, you also have to be a B2B user. <br/> Created turnover discount becomes visible for B2B users with the first day of the next month. Since that day, B2B users begin cumulating their spending on your offers they purchased. Turnover cumulated within the month translate into appropriate percentage of the discount for all orders of your offers in the following month. <br/> Turnover discount created in a given month is susceptible for change only until the end of that month. After that, as mentioned before, turnover discount becomes available for the users and can no longer be modified instantly. Modifying turnover discount in such case will result in creation of the new definition of the discount. This new definition will become available for the users on the same basis that the previously created one, with the start of the next month. Also, similarly, newly created definition can be modified only until the the end of the month. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#utworz-lub-edytuj-rabat-obrotowy" target="_blank">PL</a> / <a href="https://developer.allegro.pl//tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#create-or-edit-turnover-discount" target="_blank">EN</a>.
     *
     * @param string $marketplaceId Marketplace identifier.
     * @param \Jlonom\AllegroSDK\Model\TurnoverDiscountRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createOrModifyTurnoverDiscountUsingPUT(string $marketplaceId, \Jlonom\AllegroSDK\Model\TurnoverDiscountRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\CreateOrModifyTurnoverDiscountUsingPUT($marketplaceId, $requestBody), $fetch);
    }
    /**
    * Get a list of turnover discounts for all supported marketplaces. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#pobierz-liste-rabatow-obrotowych" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#retrieve-the-list-of-turnover-discounts" target="_blank">EN</a>. Currently, the only supported marketplace is `allegro-business-cz`. <br/> Turnover discount for the marketplace can have one of the three statuses:
    1. `ACTIVATING` - neither accumulation of the turnover, nor applying of the discount has started yet. Turnover will be being accumulated from the beginning of the next month.
    2. `ACTIVE` - there is ongoing accumulation of the turnover and/or applying of the discount. The latest discount definition does not have fields `cumulatingToDate` and `spendingToDate` set to a specific date. There may be multiple (up to 3) definitions of the discount returned for each marketplace. Only one definition can be accumulated against, and only one definition can be applied at the same time - appropriate periods from different definitions will not overlap.
    3. `DEACTIVATING` - there is ongoing accumulation of the turnover and/or applying of the discount. Accumulation of the turnover will be continued until `cumulatingToDate` of the last definition. Applying of the discount will be continued until `spendingToDate` of the last definition.
    *
    * @param array $queryParameters {
    *     @var array $marketplaceId List of marketplace identifiers. Only turnover discounts for specified marketplaces are returned. <br/> Currently, only `allegro-business-cz` is supported.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function getTurnoverDiscountsUsingGET(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetTurnoverDiscountsUsingGET($queryParameters), $fetch);
    }
    /**
     * Deactivate turnover discount for a given marketplace. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#deaktywuj-rabat-obrotowy" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#deactivate-turnover-discount" target="_blank">EN</a>. Currently, the only supported marketplace is `allegro-business-cz`. <br/> Turnover discount will stop being cumulated with the end of the current month. Discount based on cumulated turnover will stop being applied with the end of the next month. After that, the discount will be completely deactivated. <br/> When deactivating the discount that still has `ACTIVATING` status, turnover discount is deactivated immediately. In that case, no turnover discount will start being cumulated with the new month.
     *
     * @param string $marketplaceId Marketplace identifier.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deactivateTurnoverDiscountsUsingPUT(string $marketplaceId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\DeactivateTurnoverDiscountsUsingPUT($marketplaceId), $fetch);
    }
    /**
     * Provides information about fee and commission for an offer. This resource is limited to 25 requests per second for a single user. Read more: <a href="https://developer.allegro.pl/tutorials/jak-sprawdzic-oplaty-nn9DOL5PASX#kalkulator-oplat" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-check-the-fees-3An6Wame3Um#fee-calculator" target="_blank">EN</a>.
     *
     * @param \Jlonom\AllegroSDK\Model\PublicOfferPreviewRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function calculateFeePreviewUsingPOST(\Jlonom\AllegroSDK\Model\PublicOfferPreviewRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\CalculateFeePreviewUsingPOST($requestBody), $fetch);
    }
    /**
     * Use this resource to find out how many offers were edited within one {commandId}. You will receive a summary with a number of successfully edited offers. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#edycja-wielu-ofert-jednoczesnie" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#editing-many-offers" target="_blank">EN</a>. This resource is rate limited to retrieving information about 270 000 offer changes per minute.
     *
     * @param string $commandId Command identifier.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetGeneralReportUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetGeneralReportUsingGETForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetGeneralReportUsingGETNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getGeneralReportUsingGET(string $commandId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetGeneralReportUsingGET($commandId), $fetch);
    }
    /**
     * Use this resource to modify multiple offers at once. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#edycja-wielu-ofert-jednoczesnie" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#editing-many-offers" target="_blank">EN</a>. This resource is rate limited to 250 000 offer changes per hour or 9000 offer changes per minute.
     *
     * @param string $commandId Command identifier.
     * @param \Jlonom\AllegroSDK\Model\OfferChangeCommand $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\ModificationCommandUsingPUTBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\ModificationCommandUsingPUTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\ModificationCommandUsingPUTForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\ModificationCommandUsingPUTNotFoundException
     * @throws \Jlonom\AllegroSDK\Exception\ModificationCommandUsingPUTConflictException
     * @throws \Jlonom\AllegroSDK\Exception\ModificationCommandUsingPUTUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function modificationCommandUsingPUT(string $commandId, \Jlonom\AllegroSDK\Model\OfferChangeCommand $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\ModificationCommandUsingPUT($commandId, $requestBody), $fetch);
    }
    /**
     * Use this resource to retrieve a detailed summary of changes introduced within one {commandId} (defaults: limit = 100, offset = 0). Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#edycja-wielu-ofert-jednoczesnie" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#editing-many-offers" target="_blank">EN</a>. This resource is rate limited to retrieving information about 270 000 offer changes per minute.
     *
     * @param string $commandId Command identifier.
     * @param array $queryParameters {
     *     @var int $limit The limit of elements in the response.
     *     @var int $offset The offset of elements in the response.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetTasksUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetTasksUsingGETForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetTasksUsingGETNotFoundException
     * @throws \Jlonom\AllegroSDK\Exception\GetTasksUsingGETUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getTasksUsingGET(string $commandId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetTasksUsingGET($commandId, $queryParameters), $fetch);
    }
    /**
     * Returns status and summary of particular command execution. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#cena" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#price" target="_blank">EN</a>. This resource is rate limited to retrieving information about 270 000 offer changes per minute.
     *
     * @param string $commandId Command identifier.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetPriceModificationCommandStatusUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetPriceModificationCommandStatusUsingGETNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getPriceModificationCommandStatusUsingGET(string $commandId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetPriceModificationCommandStatusUsingGET($commandId), $fetch);
    }
    /**
     * Change price of offers. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#cena" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#price" target="_blank">EN</a>. This resource is rate limited to 150 000 offer changes per hour or 9000 offer changes per minute.
     *
     * @param string $commandId Command identifier.
     * @param \Jlonom\AllegroSDK\Model\OfferPriceChangeCommand $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\PriceModificationCommandUsingPUTBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\PriceModificationCommandUsingPUTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\PriceModificationCommandUsingPUTConflictException
     * @throws \Jlonom\AllegroSDK\Exception\PriceModificationCommandUsingPUTUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function priceModificationCommandUsingPUT(string $commandId, \Jlonom\AllegroSDK\Model\OfferPriceChangeCommand $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\PriceModificationCommandUsingPUT($commandId, $requestBody), $fetch);
    }
    /**
     * Defaults: limit = 100, offset = 0. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#cena" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#price" target="_blank">EN</a>. This resource is rate limited to retrieving information about 270 000 offer changes per minute.
     *
     * @param string $commandId Command identifier.
     * @param array $queryParameters {
     *     @var int $limit The limit of elements in the response.
     *     @var int $offset The offset of elements in the response.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetPriceModificationCommandTasksStatusesUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetPriceModificationCommandTasksStatusesUsingGETNotFoundException
     * @throws \Jlonom\AllegroSDK\Exception\GetPriceModificationCommandTasksStatusesUsingGETUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getPriceModificationCommandTasksStatusesUsingGET(string $commandId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetPriceModificationCommandTasksStatusesUsingGET($commandId, $queryParameters), $fetch);
    }
    /**
     * Returns status and summary of the command. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#liczba-przedmiotow" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#quantity" target="_blank">EN</a>. This resource is rate limited to retrieving information about 270 000 offer changes per minute.
     *
     * @param string $commandId Command identifier.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetQuantityModificationCommandStatusUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetQuantityModificationCommandStatusUsingGETNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getQuantityModificationCommandStatusUsingGET(string $commandId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetQuantityModificationCommandStatusUsingGET($commandId), $fetch);
    }
    /**
     * Change quantity of multiple offers. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#liczba-przedmiotow" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#quantity" target="_blank">EN</a>. This resource is rate limited to 250 000 offer changes per hour or 9000 offer changes per minute.
     *
     * @param string $commandId Command identifier.
     * @param \Jlonom\AllegroSDK\Model\OfferQuantityChangeCommand $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\QuantityModificationCommandUsingPUTBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\QuantityModificationCommandUsingPUTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\QuantityModificationCommandUsingPUTConflictException
     * @throws \Jlonom\AllegroSDK\Exception\QuantityModificationCommandUsingPUTUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function quantityModificationCommandUsingPUT(string $commandId, \Jlonom\AllegroSDK\Model\OfferQuantityChangeCommand $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\QuantityModificationCommandUsingPUT($commandId, $requestBody), $fetch);
    }
    /**
     * Defaults: limit = 100, offset = 0. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#liczba-przedmiotow" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#quantity" target="_blank">EN</a>. This resource is rate limited to retrieving information about 270 000 offer changes per minute.
     *
     * @param string $commandId Command identifier.
     * @param array $queryParameters {
     *     @var int $limit The limit of elements in the response.
     *     @var int $offset The offset of elements in the response.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetQuantityModificationCommandTasksStatusesUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetQuantityModificationCommandTasksStatusesUsingGETNotFoundException
     * @throws \Jlonom\AllegroSDK\Exception\GetQuantityModificationCommandTasksStatusesUsingGETUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getQuantityModificationCommandTasksStatusesUsingGET(string $commandId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetQuantityModificationCommandTasksStatusesUsingGET($commandId, $queryParameters), $fetch);
    }
    /**
     * Use this resource to modify the automatic pricing rules of multiple offers at the same time. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#reguly-cenowe" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#pricing-rules" target="_blank">EN</a>. This resource is rate limited to 150 000 offer changes per hour or 9000 offer changes per minute.
     *
     * @param \Jlonom\AllegroSDK\Model\OfferAutomaticPricingCommand $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\OfferAutomaticPricingModificationCommandUsingPOSTBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\OfferAutomaticPricingModificationCommandUsingPOSTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\OfferAutomaticPricingModificationCommandUsingPOSTForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\OfferAutomaticPricingModificationCommandUsingPOSTConflictException
     * @throws \Jlonom\AllegroSDK\Exception\OfferAutomaticPricingModificationCommandUsingPOSTUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function offerAutomaticPricingModificationCommandUsingPOST(\Jlonom\AllegroSDK\Model\OfferAutomaticPricingCommand $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\OfferAutomaticPricingModificationCommandUsingPOST($requestBody), $fetch);
    }
    /**
     * Returns status and summary of the offer-price-automation-command. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#reguly-cenowe" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#pricing-rules" target="_blank">EN</a>. This resource is rate limited to retrieving information about 270 000 offer changes per minute.
     *
     * @param string $commandId Command identifier.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetofferAutomaticPricingModificationCommandStatusUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetofferAutomaticPricingModificationCommandStatusUsingGETForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetofferAutomaticPricingModificationCommandStatusUsingGETNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getofferAutomaticPricingModificationCommandStatusUsingGET(string $commandId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetofferAutomaticPricingModificationCommandStatusUsingGET($commandId), $fetch);
    }
    /**
     * Defaults: limit = 100, offset = 0. Returns status and report of the offer-price-automation-command. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#reguly-cenowe" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#pricing-rules" target="_blank">EN</a>. This resource is rate limited to retrieving information about 270 000 offer changes per minute.
     *
     * @param string $commandId Command identifier.
     * @param array $queryParameters {
     *     @var int $limit The limit of elements in the response.
     *     @var int $offset The offset of elements in the response.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetofferAutomaticPricingModificationCommandTasksStatusesUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetofferAutomaticPricingModificationCommandTasksStatusesUsingGETForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetofferAutomaticPricingModificationCommandTasksStatusesUsingGETNotFoundException
     * @throws \Jlonom\AllegroSDK\Exception\GetofferAutomaticPricingModificationCommandTasksStatusesUsingGETUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getofferAutomaticPricingModificationCommandTasksStatusesUsingGET(string $commandId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetofferAutomaticPricingModificationCommandTasksStatusesUsingGET($commandId, $queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetAutomaticPricingRulesUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetAutomaticPricingRulesUsingGETForbiddenException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getAutomaticPricingRulesUsingGET(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetAutomaticPricingRulesUsingGET(), $fetch);
    }
    /**
     * Use this resource to create automatic pricing rule. This resource is rate limited to 5 requests per second. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-utworzyc-wlasne-reguly-cenowe" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-create-own-pricing-rules" target="_blank">EN</a>.
     *
     * @param \Jlonom\AllegroSDK\Model\AutomaticPricingRulePostRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\CreateAutomaticPricingRulesUsingPostBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\CreateAutomaticPricingRulesUsingPostUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\CreateAutomaticPricingRulesUsingPostForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\CreateAutomaticPricingRulesUsingPostNotFoundException
     * @throws \Jlonom\AllegroSDK\Exception\CreateAutomaticPricingRulesUsingPostConflictException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createAutomaticPricingRulesUsingPost(\Jlonom\AllegroSDK\Model\AutomaticPricingRulePostRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\CreateAutomaticPricingRulesUsingPost($requestBody), $fetch);
    }
    /**
     * Use this resource to delete automatic pricing rule. This resource is rate limited to 5 requests per second. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-usunac-regule-cenowa" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-delete-a-pricing-rule" target="_blank">EN</a>.
     *
     * @param string $ruleId The rule identifier.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\DeleteAutomaticPricingRuleUsingDeleteUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\DeleteAutomaticPricingRuleUsingDeleteForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\DeleteAutomaticPricingRuleUsingDeleteNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteAutomaticPricingRuleUsingDelete(string $ruleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\DeleteAutomaticPricingRuleUsingDelete($ruleId), $fetch);
    }
    /**
     * Use this resource to get automatic pricing rule by id. Rules with property **default** set to **true** are default rules created by Allegro for each merchant and cannot be modified. This resource is rate limited to 5 requests per second. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-pobrac-dostepne-reguly-cenowe" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-retrieve-pricing-rules" target="_blank">EN</a>.
     *
     * @param string $ruleId The rule identifier.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetAutomaticPricingRuleByIdUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetAutomaticPricingRuleByIdUsingGETNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getAutomaticPricingRuleByIdUsingGET(string $ruleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetAutomaticPricingRuleByIdUsingGET($ruleId), $fetch);
    }
    /**
     * Use this resource to update automatic pricing rule. This resource is rate limited to 5 requests per second. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-edytowac-regule-cenowa" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-modify-a-pricing-rule" target="_blank">EN</a>.
     *
     * @param string $ruleId The rule identifier.
     * @param \Jlonom\AllegroSDK\Model\AutomaticPricingRulePutRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\UpdateAutomaticPricingRuleUsingPutBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\UpdateAutomaticPricingRuleUsingPutUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\UpdateAutomaticPricingRuleUsingPutForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\UpdateAutomaticPricingRuleUsingPutNotFoundException
     * @throws \Jlonom\AllegroSDK\Exception\UpdateAutomaticPricingRuleUsingPutConflictException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateAutomaticPricingRuleUsingPut(string $ruleId, \Jlonom\AllegroSDK\Model\AutomaticPricingRulePutRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\UpdateAutomaticPricingRuleUsingPut($ruleId, $requestBody), $fetch);
    }
    /**
     * Use this resource to get automatic pricing rules for offer. This resource is rate limited to 5 requests per second. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-sprawdzic-aktualnie-przypisane-reguly-przelicznika-cen-w-ofercie" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-check-price-automation-rules-currently-assigned-to-offer" target="_blank">EN</a>.
     *
     * @param string $offerId The offer identifier.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetAutomaticPricingRulesForOfferUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetAutomaticPricingRulesForOfferUsingGETForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetAutomaticPricingRulesForOfferUsingGETNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getAutomaticPricingRulesForOfferUsingGET(string $offerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetAutomaticPricingRulesForOfferUsingGET($offerId), $fetch);
    }
    /**
     * Use this resource to traverse the Allegro categories tree. It returns the list of the given category's children or a list of the main Allegro categories. Read more: <a href="https://developer.allegro.pl/tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#uzupelnij-kategorie-i-parametry" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#provide-category-and-parameters" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var string $parent.id The ID of the category which children should be returned. If omitted, the list of main Allegro categories will be returned.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getCategoriesUsingGET(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetCategoriesUsingGET($queryParameters), $fetch);
    }
    /**
     * Use this resource to get the details of a specific category. Read more: <a href="https://developer.allegro.pl/tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#jak-utworzyc-nowy-produkt" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#how-to-create-a-product" target="_blank">EN</a>.
     *
     * @param string $categoryId The category ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getCategoryUsingGET1(string $categoryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetCategoryUsingGET1($categoryId), $fetch);
    }
    /**
     * Use this resource to get the list of parameters that are supported by the given category. Read more: <a href="https://developer.allegro.pl/tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#parametry-ofertowe" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#offer-parameters" target="_blank">EN</a>.
     *
     * @param string $categoryId The category ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getFlatParametersUsingGET2(string $categoryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetFlatParametersUsingGET2($categoryId), $fetch);
    }
    /**
     * Use this resource to get the list of product parameters available in given category. You can use these parameters to create a new product. Read more: <a href="https://developer.allegro.pl/tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#jak-utworzyc-nowy-produkt" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#how-to-create-a-product" target="_blank">EN</a>.
     *
     * @param string $categoryId The category ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getFlatProductParametersUsingGET(string $categoryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetFlatProductParametersUsingGET($categoryId), $fetch);
    }
    /**
    * Use this resource to get information about planned changes in category parameters. Please note that in some cases, the returned events may finally not happen in the future.
    At present we support the following changes: - REQUIREMENT_CHANGE - the parameter will be required in the category. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-sprawdzic-przyszle-zmiany-w-parametrach" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-check-future-changes-in-parameters" target="_blank">EN</a>.
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
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/vnd.allegro.public.v1+json|application/json
    * @throws \Jlonom\AllegroSDK\Exception\GetCategoryParametersScheduledChangesUsingGET1BadRequestException
    * @throws \Jlonom\AllegroSDK\Exception\GetCategoryParametersScheduledChangesUsingGET1UnauthorizedException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function getCategoryParametersScheduledChangesUsingGET1(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetCategoryParametersScheduledChangesUsingGET1($queryParameters, $accept), $fetch);
    }
    /**
    * Use this resource to get information about changes in categories. It returns changes that occurred in the last 3 months.
    At present we support the following changes:
     - CATEGORY_CREATED - new category was created.
     - CATEGORY_RENAMED - category name has been changed.
     - CATEGORY_MOVED - category has been moved to a different place in category tree, category parent id field is changed.
     - CATEGORY_DELETED - category is no longer available, category from redirectCategory field should be used instead.
    
     Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#dziennik-zmian-w-kategoriach" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#event-journal-in-categories" target="_blank">EN</a>.
    *
    * @param array $queryParameters {
    *     @var string $from The ID of the last seen event. Changes that occurred after the given event will be returned.
    *     @var int $limit The number of events that will be returned in the response.
    *     @var array $type The types of events that will be returned in the response. All types of events are returned by default.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/vnd.allegro.public.v1+json|application/json
    * @throws \Jlonom\AllegroSDK\Exception\GetCategoryEventsUsingGET1BadRequestException
    * @throws \Jlonom\AllegroSDK\Exception\GetCategoryEventsUsingGET1UnauthorizedException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function getCategoryEventsUsingGET1(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetCategoryEventsUsingGET1($queryParameters, $accept), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetListOfAdditionalServicesDefinitionsCategoriesUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetListOfAdditionalServicesDefinitionsCategoriesUsingGETForbiddenException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getListOfAdditionalServicesDefinitionsCategoriesUsingGET(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetListOfAdditionalServicesDefinitionsCategoriesUsingGET(), $fetch);
    }
    /**
     * Use this resource to get a list of seller's shipping rates. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-pobrac-cennik-dostaw" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-retrieve-shipping-rates" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var string $marketplace Allows to filter shipping rates by marketplace that they are qualified for.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getListOfShippingRatestUsingGET(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetListOfShippingRatestUsingGET($queryParameters), $fetch);
    }
    /**
     * Use this resource to create a new seller's shipping rates set. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-dodac-cennik-dostaw" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-add-shipping-rates" target="_blank">EN</a>.
     *
     * @param \Jlonom\AllegroSDK\Model\ShippingRatesSet $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createShippingRatesSetUsingPOST(\Jlonom\AllegroSDK\Model\ShippingRatesSet $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\CreateShippingRatesSetUsingPOST($requestBody), $fetch);
    }
    /**
     * Use this resource to get details of the given shipping rates set. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-pobrac-cennik-dostaw" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-retrieve-shipping-rates" target="_blank">EN</a>.
     *
     * @param string $id Shipping rates set identifier.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getShippingRatesSetUsingGET(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetShippingRatesSetUsingGET($id), $fetch);
    }
    /**
     * Use this resource to edit a new seller's shipping rates set. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-edytowac-cennik-dostaw" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-modify-shipping-rates" target="_blank">EN</a>.
     *
     * @param string $id Shipping rates set identifier.
     * @param \Jlonom\AllegroSDK\Model\ShippingRatesSet $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function modifyShippingRatesSetUsingPUT(string $id, \Jlonom\AllegroSDK\Model\ShippingRatesSet $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\ModifyShippingRatesSetUsingPUT($id, $requestBody), $fetch);
    }
    /**
     * Use this resource to get the delivery settings declared by the seller. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-pobrac-ustawienia-dostawy" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-get-delivery-settings" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var string $marketplace.id Marketplace for which delivery settings will be returned. By default (if the marketplace parameter is not set) the marketplace on which the seller has registered is used. However, we recommend that the marketplace.id query parameter should always be explicitly set.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getSaleDeliverySettings(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetSaleDeliverySettings($queryParameters), $fetch);
    }
    /**
     * Use this resource to modify the delivery settings declared by the seller. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-edytowac-ustawienia-dostawy" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-edit-delivery-settings" target="_blank">EN</a>.
     *
     * @param \Jlonom\AllegroSDK\Model\DeliverySettingsRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putSaleDeliverySettings(\Jlonom\AllegroSDK\Model\DeliverySettingsRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\PutSaleDeliverySettings($requestBody), $fetch);
    }
    /**
     * Use this resource to get a list of points of service by seller ID. Read more: <a href="https://developer.allegro.pl/news/punkty-odbioru-osobistego-8dmlj8qk7ik" target="_blank">PL</a> / <a href="https://developer.allegro.pl/news/points-of-service-Rdoz09ZE7sW" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var string $seller.id User identifier.
     *     @var string $countryCode Country code identifier in ISO format. In case of incorrect or unsupported country code, empty list is returned. If missing, list of all defined points is returned. If present, correct and supported, list of all points with given country code for the user is returned.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetPOSListUsingGETUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getPOSListUsingGET(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetPOSListUsingGET($queryParameters), $fetch);
    }
    /**
     * Use this resource to create a point of service. Read more: <a href="https://developer.allegro.pl/news/punkty-odbioru-osobistego-8dmlj8qk7ik" target="_blank">PL</a> / <a href="https://developer.allegro.pl/news/points-of-service-Rdoz09ZE7sW" target="_blank">EN</a>.
     *
     * @param \Jlonom\AllegroSDK\Model\Pos $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\CreatePOSUsingPOSTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\CreatePOSUsingPOSTForbiddenException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createPOSUsingPOST(\Jlonom\AllegroSDK\Model\Pos $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\CreatePOSUsingPOST($requestBody), $fetch);
    }
    /**
     * Use this resource to delete a point of service. Read more: <a href="https://developer.allegro.pl/news/punkty-odbioru-osobistego-8dmlj8qk7ik" target="_blank">PL</a> / <a href="https://developer.allegro.pl/news/points-of-service-Rdoz09ZE7sW" target="_blank">EN</a>.
     *
     * @param string $id Point of service ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\DeletePOSUsingDELETEUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\DeletePOSUsingDELETEForbiddenException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deletePOSUsingDELETE(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\DeletePOSUsingDELETE($id), $fetch);
    }
    /**
     * Use this resource to get a details of a point of service for a given ID. Read more: <a href="https://developer.allegro.pl/news/punkty-odbioru-osobistego-8dmlj8qk7ik" target="_blank">PL</a> / <a href="https://developer.allegro.pl/news/points-of-service-Rdoz09ZE7sW" target="_blank">EN</a>.
     *
     * @param string $id Point of service ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetPOSDataUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetPOSDataUsingGETForbiddenException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getPOSDataUsingGET(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetPOSDataUsingGET($id), $fetch);
    }
    /**
     * Use this resource to modify a point of service. Read more: <a href="https://developer.allegro.pl/news/punkty-odbioru-osobistego-8dmlj8qk7ik" target="_blank">PL</a> / <a href="https://developer.allegro.pl/news/points-of-service-Rdoz09ZE7sW" target="_blank">EN</a>.
     *
     * @param string $id Point of service ID. Must match values with 'id' property from the body.
     * @param \Jlonom\AllegroSDK\Model\Pos $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\ModifyPOSUsingPUTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\ModifyPOSUsingPUTForbiddenException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function modifyPOSUsingPUT(string $id, \Jlonom\AllegroSDK\Model\Pos $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\ModifyPOSUsingPUT($id, $requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetListOfContactsUsingGETBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\GetListOfContactsUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetListOfContactsUsingGETForbiddenException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getListOfContactsUsingGET(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetListOfContactsUsingGET(), $fetch);
    }
    /**
     * Use this resource to create a new contact. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-utworzyc-nowy-kontakt" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-create-new-contact" target="_blank">EN</a>.
     *
     * @param \Jlonom\AllegroSDK\Model\ContactRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\CreateContactUsingPOSTBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\CreateContactUsingPOSTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\CreateContactUsingPOSTForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\CreateContactUsingPOSTUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createContactUsingPOST(\Jlonom\AllegroSDK\Model\ContactRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\CreateContactUsingPOST($requestBody), $fetch);
    }
    /**
     * Use this resource to get contact details. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-pobrac-szczegoly-danego-kontaktu" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-retrieve-contact-details" target="_blank">EN</a>.
     *
     * @param string $id Contact identifier.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetContactUsingGETBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\GetContactUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetContactUsingGETForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetContactUsingGETNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getContactUsingGET(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetContactUsingGET($id), $fetch);
    }
    /**
     * Use this resource to modify contact details. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-zmienic-dane-kontaktu" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-change-contact-data" target="_blank">EN</a>.
     *
     * @param string $id Contact identifier.
     * @param \Jlonom\AllegroSDK\Model\ContactRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\ModifyContactUsingPUTBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\ModifyContactUsingPUTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\ModifyContactUsingPUTForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\ModifyContactUsingPUTNotFoundException
     * @throws \Jlonom\AllegroSDK\Exception\ModifyContactUsingPUTUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function modifyContactUsingPUT(string $id, \Jlonom\AllegroSDK\Model\ContactRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\ModifyContactUsingPUT($id, $requestBody), $fetch);
    }
    /**
     * Use this resource to get a list of responsible persons for the compliance of the product with EU regulations. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#osoba-odpowiedzialna-za-zgodnosc-produktu-z-przepisami-unijnymi" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/account-and-user-data-management-jn9vBjqjnsw#responsible-persons-for-the-compliance-of-the-product-with-eu-regulations" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var int $offset Index of first returned responsible persons data from all search results.
     *     @var int $limit Number of returned responsible persons data.
     * }
     * @param array $headerParameters {
     *     @var string $Accept Acceptable representation of the response.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/vnd.allegro.public.v1+json|application/json
     * @throws \Jlonom\AllegroSDK\Exception\ResponsiblePersonsGETBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\ResponsiblePersonsGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\ResponsiblePersonsGETForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\ResponsiblePersonsGETUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function responsiblePersonsGET(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\ResponsiblePersonsGET($queryParameters, $headerParameters, $accept), $fetch);
    }
    /**
     * Use this resource to create a new responsible person for the compliance of the product with EU regulations. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#osoba-odpowiedzialna-za-zgodnosc-produktu-z-przepisami-unijnymi" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/account-and-user-data-management-jn9vBjqjnsw#responsible-persons-for-the-compliance-of-the-product-with-eu-regulations" target="_blank">EN</a>.
     *
     * @param \Jlonom\AllegroSDK\Model\CreateResponsiblePersonRequest $requestBody 
     * @param array $headerParameters {
     *     @var string $Accept Acceptable representation of the response.
     *     @var string $Content-Type Content type of the request body.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/vnd.allegro.public.v1+json|application/json
     * @throws \Jlonom\AllegroSDK\Exception\ResponsiblePersonsPOSTBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\ResponsiblePersonsPOSTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\ResponsiblePersonsPOSTForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\ResponsiblePersonsPOSTUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function responsiblePersonsPOST(\Jlonom\AllegroSDK\Model\CreateResponsiblePersonRequest $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\ResponsiblePersonsPOST($requestBody, $headerParameters, $accept), $fetch);
    }
    /**
     * Use this resource to update the responsible person for the compliance of the product with EU regulations. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#osoba-odpowiedzialna-za-zgodnosc-produktu-z-przepisami-unijnymi" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/account-and-user-data-management-jn9vBjqjnsw#responsible-persons-for-the-compliance-of-the-product-with-eu-regulations" target="_blank">EN</a>.
     *
     * @param string $id Responsible person ID.
     * @param \Jlonom\AllegroSDK\Model\UpdateResponsiblePersonRequest $requestBody 
     * @param array $headerParameters {
     *     @var string $Accept Acceptable representation of the response.
     *     @var string $Content-Type Content type of the request body.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/vnd.allegro.public.v1+json|application/json
     * @throws \Jlonom\AllegroSDK\Exception\ResponsiblePersonsPUTBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\ResponsiblePersonsPUTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\ResponsiblePersonsPUTForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\ResponsiblePersonsPUTUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function responsiblePersonsPUT(string $id, \Jlonom\AllegroSDK\Model\UpdateResponsiblePersonRequest $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\ResponsiblePersonsPUT($id, $requestBody, $headerParameters, $accept), $fetch);
    }
    /**
     * Use this resource to get a list of responsible producers for the compliance of the product with EU regulations. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#dane-teleadresowe-producenta" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/account-and-user-data-management-jn9vBjqjnsw#responsible-producers-contact-information" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var int $offset Index of first returned responsible producers data from all search results.
     *     @var int $limit Number of returned responsible producers data.
     * }
     * @param array $headerParameters {
     *     @var string $Accept Acceptable representation of the response.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/vnd.allegro.public.v1+json|application/json
     * @throws \Jlonom\AllegroSDK\Exception\ResponsibleProducersGETBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\ResponsibleProducersGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\ResponsibleProducersGETForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\ResponsibleProducersGETUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function responsibleProducersGET(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\ResponsibleProducersGET($queryParameters, $headerParameters, $accept), $fetch);
    }
    /**
     * Use this resource to create a new responsible producer for the compliance of the product with EU regulations. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#dane-teleadresowe-producenta" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/account-and-user-data-management-jn9vBjqjnsw#responsible-producers-contact-information" target="_blank">EN</a>.
     *
     * @param \Jlonom\AllegroSDK\Model\CreateResponsibleProducerRequest $requestBody 
     * @param array $headerParameters {
     *     @var string $Accept Acceptable representation of the response.
     *     @var string $Content-Type Content type of the request body.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/vnd.allegro.public.v1+json|application/json
     * @throws \Jlonom\AllegroSDK\Exception\ResponsibleProducersPOSTBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\ResponsibleProducersPOSTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\ResponsibleProducersPOSTForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\ResponsibleProducersPOSTUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function responsibleProducersPOST(\Jlonom\AllegroSDK\Model\CreateResponsibleProducerRequest $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\ResponsibleProducersPOST($requestBody, $headerParameters, $accept), $fetch);
    }
    /**
     * Use this resource to get a responsible producer for the compliance of the product with EU regulations. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#dane-teleadresowe-producenta" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/account-and-user-data-management-jn9vBjqjnsw#responsible-producers-contact-information" target="_blank">EN</a>.
     *
     * @param string $id Responsible producer ID.
     * @param array $headerParameters {
     *     @var string $Accept Acceptable representation of the response.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/vnd.allegro.public.v1+json|application/json
     * @throws \Jlonom\AllegroSDK\Exception\ResponsibleProducerGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\ResponsibleProducerGETForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\ResponsibleProducerGETNotFoundException
     * @throws \Jlonom\AllegroSDK\Exception\ResponsibleProducerGETUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function responsibleProducerGET(string $id, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\ResponsibleProducerGET($id, $headerParameters, $accept), $fetch);
    }
    /**
     * Use this resource to update the responsible producer for the compliance of the product with EU regulations. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#dane-teleadresowe-producenta" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/account-and-user-data-management-jn9vBjqjnsw#responsible-producers-contact-information" target="_blank">EN</a>.
     *
     * @param string $id Responsible producer ID.
     * @param \Jlonom\AllegroSDK\Model\UpdateResponsibleProducerRequest $requestBody 
     * @param array $headerParameters {
     *     @var string $Accept Acceptable representation of the response.
     *     @var string $Content-Type Content type of the request body.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/vnd.allegro.public.v1+json|application/json
     * @throws \Jlonom\AllegroSDK\Exception\ResponsibleProducersPUTBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\ResponsibleProducersPUTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\ResponsibleProducersPUTForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\ResponsibleProducersPUTUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function responsibleProducersPUT(string $id, \Jlonom\AllegroSDK\Model\UpdateResponsibleProducerRequest $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\ResponsibleProducersPUT($id, $requestBody, $headerParameters, $accept), $fetch);
    }
    /**
     * Use this resource to get a list of all delivery methods currently available on the platform, as well as those that have already been discontinued. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-dodac-cennik-dostaw" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-add-shipping-rates" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var string $marketplace Allows to filter delivery methods by marketplace id.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getListOfDeliveryMethodsUsingGET(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetListOfDeliveryMethodsUsingGET($queryParameters), $fetch);
    }
    /**
     * Use this resource to get additional services group for a given ID. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-pobrac-wybrana-grupe-uslug-dodatkowych" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-retrieve-a-group-of-additional-services-for-a-given-id" target="_blank">EN</a>.
     *
     * @param string $groupId Additional Service Group ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetAdditionalServicesGroupUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetAdditionalServicesGroupUsingGETNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getAdditionalServicesGroupUsingGET(string $groupId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetAdditionalServicesGroupUsingGET($groupId), $fetch);
    }
    /**
     * Use this resource to modify existing additional service group. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-zaktualizowac-grupe-uslug-dodatkowych" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-update-additional-service-group" target="_blank">EN</a>.
     *
     * @param string $groupId Additional service group ID.
     * @param \Jlonom\AllegroSDK\Model\AdditionalServicesGroupRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\ModifyAdditionalServicesGroupUsingPUTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\ModifyAdditionalServicesGroupUsingPUTNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function modifyAdditionalServicesGroupUsingPUT(string $groupId, \Jlonom\AllegroSDK\Model\AdditionalServicesGroupRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\ModifyAdditionalServicesGroupUsingPUT($groupId, $requestBody), $fetch);
    }
    /**
     * Use this resource to get translations for additional service group. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#tlumaczenia-uslug-dodatkowych" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#additional-services-translations" target="_blank">EN</a>.
     *
     * @param string $groupId Additional Service Group ID.
     * @param array $queryParameters {
     *     @var string $language IETF language tag. When provided, the response will contain translations in only that language (if exists).
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetAdditionalServiceGroupTranslationsUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetAdditionalServiceGroupTranslationsNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getAdditionalServiceGroupTranslations(string $groupId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetAdditionalServiceGroupTranslations($groupId, $queryParameters), $fetch);
    }
    /**
     * Use this resource to delete the translation for specified additional service group and language. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#tlumaczenia-uslug-dodatkowych" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#additional-services-translations" target="_blank">EN</a>.
     *
     * @param string $groupId Additional service group ID.
     * @param string $language IETF Language tag.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\DeleteAdditionalServiceGroupTranslationUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\DeleteAdditionalServiceGroupTranslationForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\DeleteAdditionalServiceGroupTranslationNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteAdditionalServiceGroupTranslation(string $groupId, string $language, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\DeleteAdditionalServiceGroupTranslation($groupId, $language), $fetch);
    }
    /**
     * Use this resource to create/update translation for additional service group and specified language. It is allowed to provide an incomplete list of services that belong to the group. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#tlumaczenia-uslug-dodatkowych" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#additional-services-translations" target="_blank">EN</a>.
     *
     * @param string $groupId Additional Service Group ID.
     * @param string $language IETF Language tag.
     * @param \Jlonom\AllegroSDK\Model\AdditionalServicesGroupTranslationRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\UpdateAdditionalServiceGroupTranslationUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\UpdateAdditionalServiceGroupTranslationNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateAdditionalServiceGroupTranslation(string $groupId, string $language, \Jlonom\AllegroSDK\Model\AdditionalServicesGroupTranslationRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\UpdateAdditionalServiceGroupTranslation($groupId, $language, $requestBody), $fetch);
    }
    /**
     * Use this resource to get selected size table. Read more: <a href="https://developer.allegro.pl/news/tabele-rozmiarow-w-rest-api-LRV05q2dGtV" target="_blank">PL</a> / <a href="https://developer.allegro.pl/news/size-tables-in-rest-api-D7KP4DE1BH3" target="_blank">EN</a>.
     *
     * @param string $tableId Table identifier.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetTableUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetTableUsingGETForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetTableUsingGETNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getTableUsingGET(string $tableId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetTableUsingGET($tableId), $fetch);
    }
    /**
     * Use this resource to update selected size table. Read more: <a href="https://developer.allegro.pl/news/tabele-rozmiarow-zmieniamy-istniejacy-zasob-i-dodajemy-nowe-zasoby-do-ich-obslugi-k1nyd21A4fP" target="_blank">PL</a> / <a href="https://developer.allegro.pl/news/size-tables-we-change-the-existing-resource-and-add-new-resources-to-handle-them-jn91bynlbC9" target="_blank">EN</a>.
     *
     * @param string $tableId Table identifier.
     * @param \Jlonom\AllegroSDK\Model\SizeTablePutRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\ModifyTableUsingPUTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\ModifyTableUsingPUTForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\ModifyTableUsingPUTNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function modifyTableUsingPUT(string $tableId, \Jlonom\AllegroSDK\Model\SizeTablePutRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\ModifyTableUsingPUT($tableId, $requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetTablesUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetTablesUsingGETForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetTablesUsingGETNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getTablesUsingGET(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetTablesUsingGET(), $fetch);
    }
    /**
     * Use this resource to create size table. Read more: <a href="https://developer.allegro.pl/news/tabele-rozmiarow-zmieniamy-istniejacy-zasob-i-dodajemy-nowe-zasoby-do-ich-obslugi-k1nyd21A4fP" target="_blank">PL</a> / <a href="https://developer.allegro.pl/news/size-tables-we-change-the-existing-resource-and-add-new-resources-to-handle-them-jn91bynlbC9" target="_blank">EN</a>.
     *
     * @param \Jlonom\AllegroSDK\Model\SizeTablePostRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\CreateTableUsingPOSTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\CreateTableUsingPOSTForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\CreateTableUsingPOSTNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createTableUsingPOST(\Jlonom\AllegroSDK\Model\SizeTablePostRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\CreateTableUsingPOST($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetTablesTemplatesUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetTablesTemplatesUsingGETForbiddenException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getTablesTemplatesUsingGET(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetTablesTemplatesUsingGET(), $fetch);
    }
    /**
     * Use this resource to get seller return policies listing. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-pobrac-warunki-zwrotow-przypisane-do-konta" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-retrieve-return-policies-assigned-to-the-account" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var int $limit The limit of elements in the response.
     *     @var int $offset The offset of elements in the response.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetPublicSellerListingUsingGET1UnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetPublicSellerListingUsingGET1ForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetPublicSellerListingUsingGET1NotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getPublicSellerListingUsingGET1(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetPublicSellerListingUsingGET1($queryParameters), $fetch);
    }
    /**
     * Use this resource to create a return policy definition. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-dodac-informacje-o-warunkach-zwrotow" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-add-return-policy-information" target="_blank">EN</a>.
     *
     * @param \Jlonom\AllegroSDK\Model\ReturnPolicyRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\CreateAfterSalesServiceReturnPolicyUsingPOSTBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\CreateAfterSalesServiceReturnPolicyUsingPOSTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\CreateAfterSalesServiceReturnPolicyUsingPOSTForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\CreateAfterSalesServiceReturnPolicyUsingPOSTUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createAfterSalesServiceReturnPolicyUsingPOST(\Jlonom\AllegroSDK\Model\ReturnPolicyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\CreateAfterSalesServiceReturnPolicyUsingPOST($requestBody), $fetch);
    }
    /**
     * Use this resource to delete a return policy definition.
     *
     * @param string $returnPolicyId The ID of the return policy.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\DeleteAfterSalesServiceReturnPolicyUsingDELETEBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\DeleteAfterSalesServiceReturnPolicyUsingDELETEUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\DeleteAfterSalesServiceReturnPolicyUsingDELETEForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\DeleteAfterSalesServiceReturnPolicyUsingDELETENotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteAfterSalesServiceReturnPolicyUsingDELETE(string $returnPolicyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\DeleteAfterSalesServiceReturnPolicyUsingDELETE($returnPolicyId), $fetch);
    }
    /**
     * Use this resource to get a return policy details. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-pobrac-warunki-zwrotow-przypisane-do-konta" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-retrieve-return-policies-assigned-to-the-account" target="_blank">EN</a>.
     *
     * @param string $returnPolicyId The ID of the return policy.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetAfterSalesServiceReturnPolicyUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetAfterSalesServiceReturnPolicyUsingGETForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetAfterSalesServiceReturnPolicyUsingGETNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getAfterSalesServiceReturnPolicyUsingGET(string $returnPolicyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetAfterSalesServiceReturnPolicyUsingGET($returnPolicyId), $fetch);
    }
    /**
     * Use this resource to modify the return policy details. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-edytowac-informacje-o-warunkach-zwrotu" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-update-return-policy-information" target="_blank">EN</a>.
     *
     * @param string $returnPolicyId The ID of the return policy.
     * @param \Jlonom\AllegroSDK\Model\ReturnPolicyRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\UpdateAfterSalesServiceReturnPolicyUsingPUTBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\UpdateAfterSalesServiceReturnPolicyUsingPUTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\UpdateAfterSalesServiceReturnPolicyUsingPUTForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\UpdateAfterSalesServiceReturnPolicyUsingPUTNotFoundException
     * @throws \Jlonom\AllegroSDK\Exception\UpdateAfterSalesServiceReturnPolicyUsingPUTUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateAfterSalesServiceReturnPolicyUsingPUT(string $returnPolicyId, \Jlonom\AllegroSDK\Model\ReturnPolicyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\UpdateAfterSalesServiceReturnPolicyUsingPUT($returnPolicyId, $requestBody), $fetch);
    }
    /**
     * Use this resource to get seller implied warranties listing. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-pobrac-warunki-reklamacji-przypisane-do-konta" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-retrieve-implied-warranties-assigned-to-the-account" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var int $limit The limit of elements in the response.
     *     @var int $offset The offset of elements in the response.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetPublicSellerListingUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetPublicSellerListingUsingGETForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetPublicSellerListingUsingGETNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getPublicSellerListingUsingGET(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetPublicSellerListingUsingGET($queryParameters), $fetch);
    }
    /**
     * Use this resource to create an implied warranty definition. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-dodac-informacje-o-warunkach-reklamacji" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-add-implied-warranty-information" target="_blank">EN</a>.
     *
     * @param \Jlonom\AllegroSDK\Model\ImpliedWarrantyRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\CreateAfterSalesServiceImpliedWarrantyUsingPOSTBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\CreateAfterSalesServiceImpliedWarrantyUsingPOSTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\CreateAfterSalesServiceImpliedWarrantyUsingPOSTForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\CreateAfterSalesServiceImpliedWarrantyUsingPOSTUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createAfterSalesServiceImpliedWarrantyUsingPOST(\Jlonom\AllegroSDK\Model\ImpliedWarrantyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\CreateAfterSalesServiceImpliedWarrantyUsingPOST($requestBody), $fetch);
    }
    /**
     * Use this resource to get an implied warranty details. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-pobrac-warunki-reklamacji-przypisane-do-konta" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-retrieve-implied-warranties-assigned-to-the-account" target="_blank">EN</a>.
     *
     * @param string $impliedWarrantyId The ID of the implied warranty.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetAfterSalesServiceImpliedWarrantyUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetAfterSalesServiceImpliedWarrantyUsingGETForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetAfterSalesServiceImpliedWarrantyUsingGETNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getAfterSalesServiceImpliedWarrantyUsingGET(string $impliedWarrantyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetAfterSalesServiceImpliedWarrantyUsingGET($impliedWarrantyId), $fetch);
    }
    /**
     * Use this resource to modify the implied warranty details. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-edytowac-informacje-o-warunkach-reklamacji" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-update-implied-warranty-information" target="_blank">EN</a>.
     *
     * @param string $impliedWarrantyId The ID of the implied warranty.
     * @param \Jlonom\AllegroSDK\Model\ImpliedWarrantyRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\UpdateAfterSalesServiceImpliedWarrantyUsingPUTBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\UpdateAfterSalesServiceImpliedWarrantyUsingPUTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\UpdateAfterSalesServiceImpliedWarrantyUsingPUTForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\UpdateAfterSalesServiceImpliedWarrantyUsingPUTNotFoundException
     * @throws \Jlonom\AllegroSDK\Exception\UpdateAfterSalesServiceImpliedWarrantyUsingPUTUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateAfterSalesServiceImpliedWarrantyUsingPUT(string $impliedWarrantyId, \Jlonom\AllegroSDK\Model\ImpliedWarrantyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\UpdateAfterSalesServiceImpliedWarrantyUsingPUT($impliedWarrantyId, $requestBody), $fetch);
    }
    /**
     * Use this resource to get seller warranties listing. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-pobrac-informacje-o-gwarancjach-przypisanych-do-konta" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-retrieve-warranties-assigned-to-the-account" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var int $limit The limit of elements in the response.
     *     @var int $offset The offset of elements in the response.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetPublicSellerListingUsingGET2UnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetPublicSellerListingUsingGET2ForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetPublicSellerListingUsingGET2NotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getPublicSellerListingUsingGET2(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetPublicSellerListingUsingGET2($queryParameters), $fetch);
    }
    /**
     * Use this resource to create a warranty definition. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-dodac-informacje-o-gwarancjach" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-add-warranty-information" target="_blank">EN</a>.
     *
     * @param \Jlonom\AllegroSDK\Model\WarrantyRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\CreateAfterSalesServiceWarrantyUsingPOSTBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\CreateAfterSalesServiceWarrantyUsingPOSTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\CreateAfterSalesServiceWarrantyUsingPOSTForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\CreateAfterSalesServiceWarrantyUsingPOSTUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createAfterSalesServiceWarrantyUsingPOST(\Jlonom\AllegroSDK\Model\WarrantyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\CreateAfterSalesServiceWarrantyUsingPOST($requestBody), $fetch);
    }
    /**
     * Use this resource to get a warranty details. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-pobrac-informacje-o-gwarancjach-przypisanych-do-konta" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-retrieve-warranties-assigned-to-the-account" target="_blank">EN</a>.
     *
     * @param string $warrantyId The ID of the warranty.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetAfterSalesServiceWarrantyUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetAfterSalesServiceWarrantyUsingGETForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetAfterSalesServiceWarrantyUsingGETNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getAfterSalesServiceWarrantyUsingGET(string $warrantyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetAfterSalesServiceWarrantyUsingGET($warrantyId), $fetch);
    }
    /**
     * Use this resource to modify the warranty details. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-edytowac-informacje-o-gwarancjach" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-update-warranty-information" target="_blank">EN</a>.
     *
     * @param string $warrantyId The ID of the warranty.
     * @param \Jlonom\AllegroSDK\Model\WarrantyRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\UpdateAfterSalesServiceWarrantyUsingPUTBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\UpdateAfterSalesServiceWarrantyUsingPUTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\UpdateAfterSalesServiceWarrantyUsingPUTForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\UpdateAfterSalesServiceWarrantyUsingPUTNotFoundException
     * @throws \Jlonom\AllegroSDK\Exception\UpdateAfterSalesServiceWarrantyUsingPUTUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateAfterSalesServiceWarrantyUsingPUT(string $warrantyId, \Jlonom\AllegroSDK\Model\WarrantyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\UpdateAfterSalesServiceWarrantyUsingPUT($warrantyId, $requestBody), $fetch);
    }
    /**
    * You can attach PDF files to warranties.
    Uploading attachments flow:
     1. Create an attachment object to receive an upload URL (*POST /after-sales-service-conditions/attachments*),
     2. Use the upload URL to submit the PDF file (*PUT /after-sales-service-conditions/attachments/{attachmentId}*),
     3. Create (or update) warranty with attachment (*POST /after-sales-service-conditions/warranties*).
    
     Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-dodac-zalacznik-do-informacji-o-gwarancjach" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-add-attachment-to-warranty-information" target="_blank">EN</a>.
    *
    * @param \Jlonom\AllegroSDK\Model\AfterSalesServiceConditionsAttachmentsPostBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Jlonom\AllegroSDK\Exception\CreateAfterSalesServiceConditionsAttachmentUsingPOSTBadRequestException
    * @throws \Jlonom\AllegroSDK\Exception\CreateAfterSalesServiceConditionsAttachmentUsingPOSTUnauthorizedException
    * @throws \Jlonom\AllegroSDK\Exception\CreateAfterSalesServiceConditionsAttachmentUsingPOSTForbiddenException
    * @throws \Jlonom\AllegroSDK\Exception\CreateAfterSalesServiceConditionsAttachmentUsingPOSTUnsupportedMediaTypeException
    * @throws \Jlonom\AllegroSDK\Exception\CreateAfterSalesServiceConditionsAttachmentUsingPOSTUnprocessableEntityException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function createAfterSalesServiceConditionsAttachmentUsingPOST(\Jlonom\AllegroSDK\Model\AfterSalesServiceConditionsAttachmentsPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\CreateAfterSalesServiceConditionsAttachmentUsingPOST($requestBody), $fetch);
    }
    /**
    * Upload an after sale services attachment.
    This operation should be used after creating an offer attachment with *POST /sale/offer-attachments*
    **Important!** You can find the URL address to upload the file to our server in the *Location* response header of *POST /after-sales-service-conditions/attachments*. The URL is unique and one-time. As its format may change in time, you should always use the address from the header. Do not compose the address on your own. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-dodac-zalacznik-do-informacji-o-gwarancjach" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-add-attachment-to-warranty-information" target="_blank">EN</a>.
    *
    * @param string $attachmentId The ID of the attachment.
    * @param null|string|resource|\Psr\Http\Message\StreamInterface $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Jlonom\AllegroSDK\Exception\UploadAfterSalesServiceConditionsAttachmentUsingPUTBadRequestException
    * @throws \Jlonom\AllegroSDK\Exception\UploadAfterSalesServiceConditionsAttachmentUsingPUTUnauthorizedException
    * @throws \Jlonom\AllegroSDK\Exception\UploadAfterSalesServiceConditionsAttachmentUsingPUTForbiddenException
    * @throws \Jlonom\AllegroSDK\Exception\UploadAfterSalesServiceConditionsAttachmentUsingPUTNotFoundException
    * @throws \Jlonom\AllegroSDK\Exception\UploadAfterSalesServiceConditionsAttachmentUsingPUTRequestEntityTooLargeException
    * @throws \Jlonom\AllegroSDK\Exception\UploadAfterSalesServiceConditionsAttachmentUsingPUTUnprocessableEntityException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function uploadAfterSalesServiceConditionsAttachmentUsingPUT(string $attachmentId, $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\UploadAfterSalesServiceConditionsAttachmentUsingPUT($attachmentId, $requestBody), $fetch);
    }
    /**
     * This endpoint returns current offer quotes (listing and promo fees) cycles for authenticated user and list of offers. Read more: <a href="https://developer.allegro.pl/tutorials/jak-sprawdzic-oplaty-nn9DOL5PASX#data-naliczenia-kolejnej-oplaty" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-check-the-fees-3An6Wame3Um#check-when-a-fee-is-charged" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var array $offer.id List of offer Ids, maximum 20 values.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\OfferQuotesPublicUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\OfferQuotesPublicUsingGETForbiddenException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function offerQuotesPublicUsingGET(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\OfferQuotesPublicUsingGET($queryParameters), $fetch);
    }
    /**
     * Use this resource to get created variant sets. The returned variant sets are ordered by name. Read more: <a href="https://developer.allegro.pl/tutorials/jak-utworzyc-oferte-wielowariantowa-oA6ZYBg5XFo#pobierz-liste-ofert-wielowariantowych" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-create-a-multi-variant-offer-nn9DOL3nXs2#retrieve-a-multi-variant-offer" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var int $offset Index of first returned variant set.
     *     @var int $limit Maximum number of returned variant sets.
     *     @var string $query Filter variant sets by name or offer id.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetVariantSetsUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetVariantSetsForbiddenException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getVariantSets(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetVariantSets($queryParameters), $fetch);
    }
    /**
    * Use this resource to create variant set.
    
    A valid variant set must consist of three required elements:
    - name:
      - it can't be blank and must not be longer than 75 characters
    - parameters:
      - it should contain parameter identifiers used for offer grouping
      - parameter identifiers from the offers and special `color/pattern` value (for grouping via image) are permitted
      - it must contain at least one element (up to 2)
    - offers:
      - it must contain at least 2 offers (500 at most)
      - `colorPattern` value must be set for every offer if `color/pattern` parameter is used
      - `colorPattern` value can't be blank and must not be longer than 50 characters
      - `colorPattern` can take arbitrary string value like `red`, `b323592c-522f-4ec1-b9ea-3764538e0ac4` (UUID), etc.
      - offers having the same image should have identical `colorPattern` value
      - offers must have `publication.marketplaces.base` equal to `allegro-pl`
    
    
    Let's assume we have 4 offers:
      - offer with id 2 having an image of a red t-shirt and S as a value of parameter with id 21
      - offer with id 3 having an image of a red t-shirt and M as a value of parameter with id 21
      - offer with id 4 having an image of a blue t-shirt and S as a value of parameter with id 21
      - offer with id 5 having an image of a blue t-shirt and M as a value of parameter with id 21
    
    
    You can build a variant set by grouping offers using combination of available parameters - examples are available in <i>Request samples</i>.
    
    
    More general information about variant sets can be found [here](https://allegro.pl/pomoc/faq/wielowariantowosc-jak-polaczyc-oferty-xGgaOByGgTb#dodatkowe-informacje). Read more: <a href="https://developer.allegro.pl/tutorials/jak-utworzyc-oferte-wielowariantowa-oA6ZYBg5XFo#utworz-oferte-wielowariantowa" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-create-a-multi-variant-offer-nn9DOL3nXs2#create-a-multi-variant-offer" target="_blank">EN</a>.
    *
    * @param \Jlonom\AllegroSDK\Model\VariantSet $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Jlonom\AllegroSDK\Exception\CreateVariantSetUnauthorizedException
    * @throws \Jlonom\AllegroSDK\Exception\CreateVariantSetForbiddenException
    * @throws \Jlonom\AllegroSDK\Exception\CreateVariantSetUnprocessableEntityException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function createVariantSet(\Jlonom\AllegroSDK\Model\VariantSet $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\CreateVariantSet($requestBody), $fetch);
    }
    /**
     * Use this resource to delete variant set by id. Offers included in variant set will not be stopped or modified by this operation. Read more: <a href="https://developer.allegro.pl/tutorials/jak-utworzyc-oferte-wielowariantowa-oA6ZYBg5XFo#usun-oferte-wielowariantowa" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-create-a-multi-variant-offer-nn9DOL3nXs2#remove-a-multi-variant-offer" target="_blank">EN</a>.
     *
     * @param string $setId Variant set identifier.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\DeleteVariantSetUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\DeleteVariantSetForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\DeleteVariantSetNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteVariantSet(string $setId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\DeleteVariantSet($setId), $fetch);
    }
    /**
     * Use this resource to get variant set by set id. Read more: <a href="https://developer.allegro.pl/tutorials/jak-utworzyc-oferte-wielowariantowa-oA6ZYBg5XFo#edytuj-oferte-wielowariantowa" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-create-a-multi-variant-offer-nn9DOL3nXs2#update-a-multi-variant-offer" target="_blank">EN</a>.
     *
     * @param string $setId Variant set identifier.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetVariantSetUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetVariantSetForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetVariantSetNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getVariantSet(string $setId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetVariantSet($setId), $fetch);
    }
    /**
    * Use this resource to edit variant set.
    
    A valid variant set must consist of three required elements:
    - name:
      - it can't be blank and must not be longer than 75 characters
    - parameters:
      - it should contain parameter identifiers used for offer grouping
      - parameter identifiers from the offers and special `color/pattern` value (for grouping via image) are permitted
      - it must contain at least one element (up to 2)
    - offers:
      - it must contain at least 2 offers (500 at most)
      - `colorPattern` value must be set for every offer if `color/pattern` parameter is used
      - `colorPattern` value can't be blank and must not be longer than 50 characters
      - `colorPattern` can take arbitrary string value like `red`, `b323592c-522f-4ec1-b9ea-3764538e0ac4` (UUID), etc.
      - offers having the same image should have identical `colorPattern` value
      - offers must have `publication.marketplaces.base` equal to `allegro-pl`
    
    
    Let's assume we have 4 offers:
      - offer with id 2 having an image of a red t-shirt and S as a value of parameter with id 21
      - offer with id 3 having an image of a red t-shirt and M as a value of parameter with id 21
      - offer with id 4 having an image of a blue t-shirt and S as a value of parameter with id 21
      - offer with id 5 having an image of a blue t-shirt and M as a value of parameter with id 21
    
    
    You can build a variant set by grouping offers using combination of available parameters - examples are available in <i>Request samples</i>.
    
    
    More general information about variant sets can be found [here](https://allegro.pl/pomoc/faq/wielowariantowosc-jak-polaczyc-oferty-xGgaOByGgTb#dodatkowe-informacje). Read more: <a href="https://developer.allegro.pl/tutorials/jak-utworzyc-oferte-wielowariantowa-oA6ZYBg5XFo#edytuj-oferte-wielowariantowa" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-create-a-multi-variant-offer-nn9DOL3nXs2#update-a-multi-variant-offer" target="_blank">EN</a>.
    *
    * @param string $setId Variant set identifier.
    * @param \Jlonom\AllegroSDK\Model\VariantSet $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Jlonom\AllegroSDK\Exception\UpdateVariantSetUnauthorizedException
    * @throws \Jlonom\AllegroSDK\Exception\UpdateVariantSetForbiddenException
    * @throws \Jlonom\AllegroSDK\Exception\UpdateVariantSetUnprocessableEntityException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function updateVariantSet(string $setId, \Jlonom\AllegroSDK\Model\VariantSet $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\UpdateVariantSet($setId, $requestBody), $fetch);
    }
    /**
    * Upload image to our servers.
    You can choose from two upload options:
     * \- provide a link and we will download an image for you
     * \- send an image as binary data
    **Important!** Remember to use dedicated domain for upload, i.e.
     * \- https://upload.allegro.pl for Production
     * \- https://upload.allegro.pl.allegrosandbox.pl for Sandbox
    Read more about the rules for photos in an offer's gallery and description: <a href="https://help.allegro.com/pl/sell/a/zasady-dla-zdjec-w-galerii-i-w-opisie-8dvWz3eo4T5?marketplaceId=allegro-pl" target="_blank">PL</a> / <a href="https://help.allegro.com/en/sell/a/rules-for-images-in-the-gallery-and-in-descriptions-8dvWB8Y2PIq" target="_blank">EN</a>.
    *
    * @param \Jlonom\AllegroSDK\Model\OfferImageLinkUploadRequest|string|resource|\Psr\Http\Message\StreamInterface $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Jlonom\AllegroSDK\Exception\UploadOfferImageUsingPOSTBadRequestException
    * @throws \Jlonom\AllegroSDK\Exception\UploadOfferImageUsingPOSTUnauthorizedException
    * @throws \Jlonom\AllegroSDK\Exception\UploadOfferImageUsingPOSTForbiddenException
    * @throws \Jlonom\AllegroSDK\Exception\UploadOfferImageUsingPOSTRequestEntityTooLargeException
    * @throws \Jlonom\AllegroSDK\Exception\UploadOfferImageUsingPOSTUnsupportedMediaTypeException
    * @throws \Jlonom\AllegroSDK\Exception\UploadOfferImageUsingPOSTUnprocessableEntityException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function uploadOfferImageUsingPOST($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\UploadOfferImageUsingPOST($requestBody), $fetch);
    }
    /**
    * You can attach pdf, jpeg or png files to your offers. We will present them under the offer description in the Additional information section.
    You can attach up to 9 files to one offer – one per each type from the list:
     * Guide (MANUAL). Allowed media types: PDF
     * Special offer terms (SPECIAL_OFFER_RULES). Allowed media types: PDF
     * Competition terms (COMPETITION_RULES). Allowed media types: PDF
     * Book excerpt (BOOK_EXCERPT). Allowed media types: PDF
     * Manual (USER_MANUAL). Allowed media types: PDF
     * Installation manual (INSTALLATION_INSTRUCTIONS). Allowed media types: PDF
     * Game manual (GAME_INSTRUCTIONS). Allowed media types: PDF
     * Energy label (ENERGY_LABEL). Allowed media types: JPEG, JPG, PNG
     * Product information sheet (PRODUCT_INFORMATION_SHEET). Allowed media types: PDF
     * Tire label (TIRE_LABEL). Allowed media types: JPEG, JPG, PNG
    You can attach up to 20 files to one product for:
     * Safety information manual (SAFETY_INFORMATION_MANUAL). Allowed media types: PDF, JPEG, JPG, PNG
    Uploading attachments flow:
     1. Create an attachment object to receive an upload URL (*POST /sale/offer-attachments*),
     2. Use the upload URL to submit the file (*PUT /sale/offer-attachments/{attachmentId}*),
     3. Add attachments to the offer (*PATCH /sale/product-offers/{offerId}*).
    Read more: <a href="https://developer.allegro.pl/tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#zalaczniki" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#attachments" target="_blank">EN</a>.
    *
    * @param \Jlonom\AllegroSDK\Model\OfferAttachmentRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Jlonom\AllegroSDK\Exception\CreateOfferAttachmentUsingPOSTBadRequestException
    * @throws \Jlonom\AllegroSDK\Exception\CreateOfferAttachmentUsingPOSTUnauthorizedException
    * @throws \Jlonom\AllegroSDK\Exception\CreateOfferAttachmentUsingPOSTUnsupportedMediaTypeException
    * @throws \Jlonom\AllegroSDK\Exception\CreateOfferAttachmentUsingPOSTUnprocessableEntityException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function createOfferAttachmentUsingPOST(\Jlonom\AllegroSDK\Model\OfferAttachmentRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\CreateOfferAttachmentUsingPOST($requestBody), $fetch);
    }
    /**
     * Get details of an offer attachments, including download link, by attachment identifier ("attachmentId"). The attachment id can be retrieved by querying a particular offer, for example by using <a href="#operation/getProductOffer">`GET /sale/product-offers/{offerId}`</a>.
     *
     * @param string $attachmentId The ID of the attachment.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetOfferAttachmentForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetOfferAttachmentNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOfferAttachment(string $attachmentId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetOfferAttachment($attachmentId), $fetch);
    }
    /**
    * Upload an offer attachment.
    This operation should be used after creating an offer attachment with *POST /sale/offer-attachments*
    **Important!** You can find the URL address to upload the file to our server in the *Location* response header of *POST /sale/offer-attachments*. The URL is unique and one-time. As its format may change in time, you should always use the address from the header. Do not compose the address on your own. Read more: <a href="https://developer.allegro.pl/tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#zalaczniki" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#attachments" target="_blank">EN</a>.
    *
    * @param string $attachmentId The ID of the attachment.
    * @param null|string|resource|\Psr\Http\Message\StreamInterface $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Jlonom\AllegroSDK\Exception\UploadOfferAttachmentUsingPUTBadRequestException
    * @throws \Jlonom\AllegroSDK\Exception\UploadOfferAttachmentUsingPUTUnauthorizedException
    * @throws \Jlonom\AllegroSDK\Exception\UploadOfferAttachmentUsingPUTUnsupportedMediaTypeException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function uploadOfferAttachmentUsingPUT(string $attachmentId, $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\UploadOfferAttachmentUsingPUT($attachmentId, $requestBody), $fetch);
    }
    /**
    * <a href="https://developer.allegro.pl/listing/" target="_blank">Access for verified applications only</a>. Use this resource to get a list of offers based on the provided query parameters. At least one of: phrase, seller.id or category.id is required. Additional available parameters vary depending on category.id. The parameters are defined in the filters entity.
    Changing the marketplace, country of delivery, currency or language may impact the availability of offers and filters. Note that requests for closed offers may be limited.
    
    Read more: <a href="https://developer.allegro.pl/tutorials/jak-wyszukiwac-przegladac-oferty-ZM9YAKAwgfk" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-search-and-browse-offers-XxWm2ykMYHl" target="_blank">EN</a>.
    *
    * @param array $queryParameters {
    *     @var string $category.id The identifier of the category, where you want to search for offers.
    *     @var string $phrase The search phrase. The phrase is searched in different fields of the offers depending on the value of the `searchMode` parameter.
    *     @var string $seller.id The identifier of a seller, to limit the results to offers from this seller. May be provided more than once. Should not be provided when seller.login is given.
    *     @var string $seller.login The login of a seller, to limit the results to offers from this seller. May be provided more than once. Should not be provided when seller.id is given.
    *     @var string $marketplaceId Id of a marketplace where offers are visible.
    *Acceptable values* : `allegro-pl`, `allegro-cz`, `allegro-sk`, `allegro-hu`.
    *     @var string $shipping.country Expected language of messages.
    *     @var string $currency Currency of the offer prices.
    *Default value* : depends on marketplace, for allegro-pl: `PLN`, for allegro-cz: `CZK`, for allegro-sk: `EUR`.
    Check endpoint GET /marketplaces for acceptable currency values.
    *     @var string $searchMode Defines where the given phrase should be searched in. Allowed values:
    
     - *REGULAR* - searching for a phrase in the title,
     - *CLOSED* - searching for a phrase in the title of closed offers. Available only for `allegro-pl` marketplace.
    *     @var int $offset Index of the first returned offer from all search results. Max offset is `600 - <limit>`.
    *     @var int $limit The maximum number of offers in a response.
    *     @var string $sort Search results sorting order. `+` or no prefix in the value means ascending order. `-` prefix means descending order.
    *     @var string $include Specify parts of the response that should be included in the output. Allowed values are the names of top level entities and *all* as an alias to all entities. By default, all top level entities are included. Use `-` prefix to exclude an entity.
    Example:
    `include=-all&include=filters&include=sort` - returns only filters and sort entities.
    *     @var bool $fallback Defines the behaviour of the search engine when no results with exact phrase match are found:
    
     - *true* - related (not exact) results are returned,
     - *false* - empty results are returned.
    *     @var string $Dynamic filters You can filter and customize your search results to find exactly what you need by applying filters ids and their dictionary values to query according to the flowing pattern: id=value. When the filter definition looks like:
     ````
       {
         "id": "parameter.11323",
         "type": "MULTI",
         "name": "Stan",
         "values": [{
             "value": "11323_1",
             "name": "nowe",
             "count": 21,
             "selected": false
           },
           {
             "value": "11323_2",
             "name": "używane",
             "count": 157,
             "selected": false
           },
           {
             "value": "11323_238066",
             "name": "po zwrocie",
             "count": 1,
             "selected": false
           }
         ]
       }
     ````
    You can use 'Stan' filter to query results, i.e.:
     * `parameter.11323=11323_1` for "nowe"
     * `parameter.11323=11323_2` for "używane"
     * `parameter.11323=11323_238066` for "po zwrocie".
    * }
    * @param array $headerParameters {
    *     @var string $Accept-Language Limits offers to the only translated to specified language. Also expected language of messages.
    *Default value* : depends on marketplace, for allegro-pl: `pl-PL`, for allegro-cz: `cs-CZ`, for allegro-sk: `sk-SK`.
    Check endpoint GET /marketplaces for acceptable language values.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function getListing(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetListing($queryParameters, $headerParameters), $fetch);
    }
    /**
     * Use this resource to return events that allow you to monitor actions which clients perform, i.e. making a purchase, filling in the checkout form (FOD), finishing payment process, making a surcharge. Read more: <a href="https://developer.allegro.pl/tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#dziennik-zdarzen" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/process-orders-PgPMlWDr8Cv#event-log" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var string $from You can use the event ID to retrieve subsequent chunks of events.
     *     @var array $type Specify array of event types for filtering. Allowed values are:
     * `BOUGHT`: purchase without checkout form filled in
     * `FILLED_IN`: checkout form filled in but payment is not completed yet so data could still change
     * `READY_FOR_PROCESSING`: payment completed. Purchase is ready for processing
     * `BUYER_CANCELLED`: purchase was cancelled by buyer
     * `FULFILLMENT_STATUS_CHANGED`: fulfillment status changed
     * `AUTO_CANCELLED`: purchase was cancelled automatically by Allegro.
     *     @var int $limit The maximum number of events returned in the response.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetOrderEventsUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetOrderEventsUsingGETForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetOrderEventsUsingGETUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOrderEventsUsingGET(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetOrderEventsUsingGET($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetOrderEventsStatisticsUsingGETUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOrderEventsStatisticsUsingGET(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetOrderEventsStatisticsUsingGET(), $fetch);
    }
    /**
     * Use this resource to get an order list. Read more: <a href="https://developer.allegro.pl/tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#lista-zamowien" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/process-orders-PgPMlWDr8Cv#order-list" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var int $offset Index of first returned checkout-form from all search results.
     *     @var int $limit Maximum number of checkout-forms in response.
     *     @var string $status Specify status value that checkout-forms must have to be included in the output. Allowed values are:
     * `BOUGHT`: purchase without checkout form filled in.
     * `FILLED_IN`: checkout form filled in but payment is not completed yet so data could still change.
     * `READY_FOR_PROCESSING`: payment completed. Purchase is ready for processing.
     * `CANCELLED`: purchase cancelled by buyer.
     *     @var string $fulfillment.status Specify seller status value that checkout-forms must have to be included in the output. Allowed values are:
     * `NEW`
     * `PROCESSING`
     * `READY_FOR_SHIPMENT`
     * `READY_FOR_PICKUP`
     * `SENT`
     * `PICKED_UP`
     * `CANCELLED`
     * `SUSPENDED`
     * `RETURNED`.
     *     @var string $fulfillment.shipmentSummary.lineItemsSent Specify filter for line items sending status. Allowed values are:
     * `NONE`: none of line items have tracking number specified
     * `SOME`: some of line items have tracking number specified
     * `ALL`: all of line items have tracking number specified.
     *     @var string $lineItems.boughtAt.lte Latest line item bought date. The upper bound of date time range from which checkout forms will be taken.
     *     @var string $lineItems.boughtAt.gte Latest line item bought date. The lower bound of date time range from which checkout forms will be taken.
     *     @var string $payment.id Find checkout-forms having specified payment id.
     *     @var string $surcharges.id Find checkout-forms having specified surcharge id.
     *     @var string $delivery.method.id Find checkout-forms having specified delivery method id.
     *     @var string $buyer.login Find checkout-forms having specified buyer login.
     *     @var string $marketplace.id Find checkout-forms of orders purchased on specified marketplace.
     *     @var string $updatedAt.lte Checkout form last modification date. The upper bound of date time range from which checkout forms will be taken.
     *     @var string $updatedAt.gte Checkout form last modification date. The lower bound of date time range from which checkout forms will be taken.
     *     @var string $sort The results' sorting order. No prefix in the value means ascending order. `-` prefix means descending order. If you don't provide the sort parameter, the list is sorted by line item boughtAt date, descending.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetListOfOrdersUsingGETBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\GetListOfOrdersUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetListOfOrdersUsingGETNotAcceptableException
     * @throws \Jlonom\AllegroSDK\Exception\GetListOfOrdersUsingGETUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getListOfOrdersUsingGET(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetListOfOrdersUsingGET($queryParameters), $fetch);
    }
    /**
     * Use this resource to get an order details. Read more: <a href="https://developer.allegro.pl/tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#szczegoly-zamowienia" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/process-orders-PgPMlWDr8Cv#order-details" target="_blank">EN</a>.
     *
     * @param string $id Checkout form identifier.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetOrdersDetailsUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetOrdersDetailsUsingGETNotFoundException
     * @throws \Jlonom\AllegroSDK\Exception\GetOrdersDetailsUsingGETNotAcceptableException
     * @throws \Jlonom\AllegroSDK\Exception\GetOrdersDetailsUsingGETUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOrdersDetailsUsingGET(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetOrdersDetailsUsingGET($id), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetOrdersCarriersUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetOrdersCarriersUsingGETNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOrdersCarriersUsingGET(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetOrdersCarriersUsingGET(), $fetch);
    }
    /**
     * Get a list of parcel tracking numbers currently assigned to the order. Orders can be retrieved using REST API resource GET /order/checkout-forms. Please note that the shipment list may contain parcel tracking numbers added through other channels such as Moje Allegro or by the carrier that delivers the parcel. Read more: <a href="https://developer.allegro.pl/tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-pobrac-numery-przesylek-dodane-do-zamowienia" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/process-orders-PgPMlWDr8Cv#retrieving-tracking-numbers" target="_blank">EN</a>.
     *
     * @param string $id Order identifier.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOrderShipmentsUsingGET(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetOrderShipmentsUsingGET($id), $fetch);
    }
    /**
     * Add a parcel tracking number (shipment) to given order line items. Read more: <a href="https://developer.allegro.pl/tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-dodac-numer-przesylki-do-przedmiotu-w-zamowieniu" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/process-orders-PgPMlWDr8Cv#add-tracking-number-to-order" target="_blank">EN</a>.
     *
     * @param string $id Order identifier.
     * @param \Jlonom\AllegroSDK\Model\CheckoutFormAddWaybillRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createOrderShipmentsUsingPOST(string $id, \Jlonom\AllegroSDK\Model\CheckoutFormAddWaybillRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\CreateOrderShipmentsUsingPOST($id, $requestBody), $fetch);
    }
    /**
     * Use to set seller order status. Read more: <a href="https://developer.allegro.pl/tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#zmiana-statusu-realizacji-zamowienia" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/process-orders-PgPMlWDr8Cv#order-fulfillment-status-change" target="_blank">EN</a>.
     *
     * @param string $id Order identifier.
     * @param \Jlonom\AllegroSDK\Model\CheckoutFormFulfillment $requestBody 
     * @param array $queryParameters {
     *     @var string $checkoutForm.revision Checkout form revision.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\SetOrderFulfillmentUsingPUTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\SetOrderFulfillmentUsingPUTNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function setOrderFulfillmentUsingPUT(string $id, \Jlonom\AllegroSDK\Model\CheckoutFormFulfillment $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\SetOrderFulfillmentUsingPUT($id, $requestBody, $queryParameters), $fetch);
    }
    /**
     * Use to get invoices details including antivirus scan results and EPT invoice verification status. Read more: <a href="https://developer.allegro.pl/tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-pobrac-informacje-o-fakturach-dodanych-do-zamowienia" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/process-orders-PgPMlWDr8Cv#retrieve-information-about-invoices" target="_blank">EN</a>.
     *
     * @param string $id Order identifier.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOrderInvoicesDetails(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetOrderInvoicesDetails($id), $fetch);
    }
    /**
     * Use to add new invoice metadata. Before you send an invoice file, you need to initialize the invoice instance with the required parameters. Read more: <a href="https://developer.allegro.pl/tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-dodac-fakture-do-zamowienia" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/process-orders-PgPMlWDr8Cv#add-an-invoice-to-the-order" target="_blank">EN</a>.
     *
     * @param string $id Order identifier.
     * @param \Jlonom\AllegroSDK\Model\CheckFormsNewOrderInvoice $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function addOrderInvoicesMetadata(string $id, \Jlonom\AllegroSDK\Model\CheckFormsNewOrderInvoice $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\AddOrderInvoicesMetadata($id, $requestBody), $fetch);
    }
    /**
     * Use to upload invoice file to match created invoice metadata. Read more: <a href="https://developer.allegro.pl/tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-dodac-fakture-do-zamowienia" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/process-orders-PgPMlWDr8Cv#add-an-invoice-to-the-order" target="_blank">EN</a>.
     *
     * @param string $id Order identifier.
     * @param string $invoiceId Invoice identifier.
     * @param null|string|resource|\Psr\Http\Message\StreamInterface $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function uploadOrderInvoiceFile(string $id, string $invoiceId, $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\UploadOrderInvoiceFile($id, $invoiceId, $requestBody), $fetch);
    }
    /**
     * Get a list of Allegro pickup drop off points. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-przesylkami-przez-wysylam-z-allegro-LRVjK7K21sY#jak-pobrac-liste-punktow-allegro" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-parcels-via-ship-with-allegro-ZM9YAyGKWTV#how-to-retrieve-list-of-allegro-pickup-drop-off-points" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var array $carriers List of carrier ids to filter the drop off/pick up points to only the ones where any of the listed carriers operate. In case of an empty list, all points are returned.
     * }
     * @param array $headerParameters {
     *     @var string $If-Modified-Since Date of last data modification. If data has been modified after specified date, full set of data is returned. If header is not specified, full set of data is returned. Date has to be provided in HTTP-date format. Information about date (the same HTTP-date format) of last modified data is available in response - `Last-Modified`.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetAllegroPickupDropOffPointsGETBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\GetAllegroPickupDropOffPointsGETUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getAllegroPickupDropOffPointsGET(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetAllegroPickupDropOffPointsGET($queryParameters, $headerParameters), $fetch);
    }
    /**
     * Get tracking history for parcels. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-przesylkami-przez-wysylam-z-allegro-LRVjK7K21sY#jak-pobrac-historie-statusow-przesylek" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-parcels-via-ship-with-allegro-ZM9YAyGKWTV#how-to-retrieve-parcels-statuses-history" target="_blank">EN</a>.
     *
     * @param string $carrierId Carrier identifier.
     * @param array $queryParameters {
     *     @var array $waybill Waybill number (parcel tracking number). Example: `waybill=AAA0000E5D201&waybill=BBB00000E5D202` - returns parcel tracking history for `AAA0000E5D201` as well as for `BBB00000E5D202`.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetParcelTrackingUsingGETBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\GetParcelTrackingUsingGETUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getParcelTrackingUsingGET(string $carrierId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetParcelTrackingUsingGET($carrierId, $queryParameters), $fetch);
    }
    /**
     * Use this resource to get the list of your disputes ordered by descending opened date. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-dyskusjami-E7Zj6gK7ysE#dyskusje-na-koncie" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-discussions-VL6Yr40e5t5#all-discussions" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var string $checkoutForm.id Checkout form identifier.
     *     @var int $limit The maximum number of disputes in a response.
     *     @var int $offset Index of first returned dispute.
     *     @var array $status Filter disputes with given set of statuses.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetListOfDisputesUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetListOfDisputesUsingGETNotFoundException
     * @throws \Jlonom\AllegroSDK\Exception\GetListOfDisputesUsingGETUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getListOfDisputesUsingGET(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetListOfDisputesUsingGET($queryParameters), $fetch);
    }
    /**
     * Use this resource to get a single dispute. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-dyskusjami-E7Zj6gK7ysE#szczegolowe-informacje-o-dyskusji" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-discussions-VL6Yr40e5t5#information-about-a-particular-discussion" target="_blank">EN</a>.
     *
     * @param string $disputeId Dispute identifier.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetDisputeUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetDisputeUsingGETForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetDisputeUsingGETNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getDisputeUsingGET(string $disputeId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetDisputeUsingGET($disputeId), $fetch);
    }
    /**
     * Use this resource to get the list of messages within dispute. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-dyskusjami-E7Zj6gK7ysE#wiadomosci-z-dyskusji" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-discussions-VL6Yr40e5t5#all-messages-within-a-discussion" target="_blank">EN</a>.
     *
     * @param string $disputeId Dispute identifier.
     * @param array $queryParameters {
     *     @var int $limit The maximum number of messages within dispute returned in a response.
     *     @var int $offset Index of first returned message within dispute.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetMessagesFromDisputeUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetMessagesFromDisputeUsingGETForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetMessagesFromDisputeUsingGETNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getMessagesFromDisputeUsingGET(string $disputeId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetMessagesFromDisputeUsingGET($disputeId, $queryParameters), $fetch);
    }
    /**
     * Use this resource to post a message in certain dispute. At least one of fields: 'text', 'attachment' has to be present. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-dyskusjami-E7Zj6gK7ysE#nowa-wiadomosc-w-dyskusji" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-discussions-VL6Yr40e5t5#add-a-new-message-in-the-discussion" target="_blank">EN</a>.
     *
     * @param string $disputeId Dispute identifier.
     * @param \Jlonom\AllegroSDK\Model\MessageRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\AddMessageToDisputeUsingPOSTBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\AddMessageToDisputeUsingPOSTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\AddMessageToDisputeUsingPOSTForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\AddMessageToDisputeUsingPOSTNotFoundException
     * @throws \Jlonom\AllegroSDK\Exception\AddMessageToDisputeUsingPOSTConflictException
     * @throws \Jlonom\AllegroSDK\Exception\AddMessageToDisputeUsingPOSTUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function addMessageToDisputeUsingPOST(string $disputeId, \Jlonom\AllegroSDK\Model\MessageRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\AddMessageToDisputeUsingPOST($disputeId, $requestBody), $fetch);
    }
    /**
     * Use this resource to post an attachment declaration. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-dyskusjami-E7Zj6gK7ysE#deklaracja-zalacznika" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-discussions-VL6Yr40e5t5#attachment-declaration" target="_blank">EN</a>.
     *
     * @param \Jlonom\AllegroSDK\Model\AttachmentDeclaration $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\CreateAnAttachmentUsingPOSTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\CreateAnAttachmentUsingPOSTForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\CreateAnAttachmentUsingPOSTUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createAnAttachmentUsingPOST(\Jlonom\AllegroSDK\Model\AttachmentDeclaration $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\CreateAnAttachmentUsingPOST($requestBody), $fetch);
    }
    /**
     * Use this resource to get an attachment. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-dyskusjami-E7Zj6gK7ysE#pobranie-zalacznika" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-discussions-VL6Yr40e5t5#attachment-related-to-the-discussion" target="_blank">EN</a>.
     *
     * @param string $attachmentId Attachment identifier.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetAttachmentUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetAttachmentUsingGETForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetAttachmentUsingGETNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getAttachmentUsingGET(string $attachmentId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetAttachmentUsingGET($attachmentId), $fetch);
    }
    /**
    * Upload a dispute message attachment.
    This operation should be used after creating an attachment declaration with *POST /sale/dispute-attachments*
    **Important!** You can find the URL address to upload the file to our server in the *Location* response header of *POST /sale/dispute-attachments*. The URL is unique and one-time. As its format may change in time, you should always use the address from the header. Do not compose the address on your own. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-dyskusjami-E7Zj6gK7ysE#dodanie-zalacznika" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-discussions-VL6Yr40e5t5#adding-an-attachment" target="_blank">EN</a>.
    *
    * @param string $attachmentId Attachment identifier.
    * @param string|resource|\Psr\Http\Message\StreamInterface $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Jlonom\AllegroSDK\Exception\UploadDisputeAttachmentUsingPUTBadRequestException
    * @throws \Jlonom\AllegroSDK\Exception\UploadDisputeAttachmentUsingPUTUnauthorizedException
    * @throws \Jlonom\AllegroSDK\Exception\UploadDisputeAttachmentUsingPUTRequestEntityTooLargeException
    * @throws \Jlonom\AllegroSDK\Exception\UploadDisputeAttachmentUsingPUTUnsupportedMediaTypeException
    * @throws \Jlonom\AllegroSDK\Exception\UploadDisputeAttachmentUsingPUTUnprocessableEntityException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function uploadDisputeAttachmentUsingPUT(string $attachmentId, $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\UploadDisputeAttachmentUsingPUT($attachmentId, $requestBody), $fetch);
    }
    /**
     * Use this resource to get a list of tags defined by the specified user (Defaults: limit = 1000, offset = 0). Read more: <a href="https://developer.allegro.pl/news/nowe-zasoby-zarzadzaj-tagami-i-zalacznikami-w-ofertach-1nzlmKLPyHl" target="_blank">PL</a> / <a href="https://developer.allegro.pl/news/new-resources-manage-tags-and-attachments-in-offers-WvGz12BXrHL" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var int $limit The limit of elements in the response.
     *     @var int $offset The offset of elements in the response.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function listSellerTagsGET1(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\ListSellerTagsGET1($queryParameters), $fetch);
    }
    /**
     * Use this resource to create a new tag. You can create up to 100 tags. Read more: <a href="https://developer.allegro.pl/news/nowe-zasoby-zarzadzaj-tagami-i-zalacznikami-w-ofertach-1nzlmKLPyHl" target="_blank">PL</a> / <a href="https://developer.allegro.pl/news/new-resources-manage-tags-and-attachments-in-offers-WvGz12BXrHL" target="_blank">EN</a>.
     *
     * @param \Jlonom\AllegroSDK\Model\TagRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createTagPOST1(\Jlonom\AllegroSDK\Model\TagRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\CreateTagPOST1($requestBody), $fetch);
    }
    /**
     * Use this resource to delete the tag. Read more: <a href="https://developer.allegro.pl/news/nowe-zasoby-zarzadzaj-tagami-i-zalacznikami-w-ofertach-1nzlmKLPyHl" target="_blank">PL</a> / <a href="https://developer.allegro.pl/news/new-resources-manage-tags-and-attachments-in-offers-WvGz12BXrHL" target="_blank">EN</a>.
     *
     * @param string $tagId Tag identifier.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header *\/*|application/vnd.allegro.public.v1+json
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteTagUsingDELETE(string $tagId, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\DeleteTagUsingDELETE($tagId, $accept), $fetch);
    }
    /**
     * Use this resource to update a tag. Read more: <a href="https://developer.allegro.pl/news/nowe-zasoby-zarzadzaj-tagami-i-zalacznikami-w-ofertach-1nzlmKLPyHl" target="_blank">PL</a> / <a href="https://developer.allegro.pl/news/new-resources-manage-tags-and-attachments-in-offers-WvGz12BXrHL" target="_blank">EN</a>. This resource is rate limited to 1 million changes per hour.
     *
     * @param string $tagId Tag identifier.
     * @param \Jlonom\AllegroSDK\Model\TagRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateTagPUT(string $tagId, \Jlonom\AllegroSDK\Model\TagRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\UpdateTagPUT($tagId, $requestBody), $fetch);
    }
    /**
     * Use this resource to get a list of tags assigned to offer. Read more: <a href="https://developer.allegro.pl/news/nowe-zasoby-zarzadzaj-tagami-i-zalacznikami-w-ofertach-1nzlmKLPyHl" target="_blank">PL</a> / <a href="https://developer.allegro.pl/news/new-resources-manage-tags-and-attachments-in-offers-WvGz12BXrHL" target="_blank">EN</a>.
     *
     * @param string $offerId Offer identifier.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function listAssignedOfferTagsGET(string $offerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\ListAssignedOfferTagsGET($offerId), $fetch);
    }
    /**
     * Use this resource to assign a tag to offer. Read more: <a href="https://developer.allegro.pl/news/nowe-zasoby-zarzadzaj-tagami-i-zalacznikami-w-ofertach-1nzlmKLPyHl" target="_blank">PL</a> / <a href="https://developer.allegro.pl/news/new-resources-manage-tags-and-attachments-in-offers-WvGz12BXrHL" target="_blank">EN</a>.
     *
     * @param string $offerId Offer identifier.
     * @param \Jlonom\AllegroSDK\Model\TagIdsRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function assignTagToOfferPOST(string $offerId, \Jlonom\AllegroSDK\Model\TagIdsRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\AssignTagToOfferPOST($offerId, $requestBody), $fetch);
    }
    /**
     * Use this resource to get offer rating. Read more: <a href="https://developer.allegro.pl/news/nowy-zasob-do-pobrania-oceny-produktu-q018mmPe0H7" target="_blank">PL</a> / <a href="https://developer.allegro.pl/news/new-resource-to-retrieve-product-rating-q018mmPrWUX" target="_blank">EN</a>.
     *
     * @param string $offerId Offer identifier.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\OfferRatingGETForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\OfferRatingGETNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function offerRatingGET(string $offerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\OfferRatingGET($offerId), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getAvailableOfferPromotionPackages(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetAvailableOfferPromotionPackages(), $fetch);
    }
    /**
     * Use this resource to modify offer promotion packages. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-dodac-lub-zmienic-opcje-promowania-w-pojedynczej-ofercie" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-add-or-change-promo-options-in-a-single-offer" target="_blank">EN</a>.
     *
     * @param string $offerId Offer identifier.
     * @param \Jlonom\AllegroSDK\Model\PromoOptionsModifications $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function modifyOfferPromoOptionsUsingPOST(string $offerId, \Jlonom\AllegroSDK\Model\PromoOptionsModifications $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\ModifyOfferPromoOptionsUsingPOST($offerId, $requestBody), $fetch);
    }
    /**
     * Use this resource to get promotion packages assigned to an offer. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-pobrac-opcje-promowania-przypisane-do-oferty" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-retrieve-promo-options-assigned-to-an-offer" target="_blank">EN</a>.
     *
     * @param string $offerId Offer identifier.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOfferPromoOptionsUsingGET(string $offerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetOfferPromoOptionsUsingGET($offerId), $fetch);
    }
    /**
     * Use this resource to retrieve promo options for seller offers. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-pobrac-opcje-promowania-dla-wielu-ofert" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-retrieve-available-promo-options-for-multiple-offers" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var int $limit Limit of promo options per page.
     *     @var int $offset Distance between the beginning of the document and the point from which promo options are returned.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getPromoOptionsForSellerOffersUsingGET(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetPromoOptionsForSellerOffersUsingGET($queryParameters), $fetch);
    }
    /**
     * Use this resource to find out how many offers were edited within one {commandId}. You will receive a summary with a number of successfully edited offers and errors. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-dodac-lub-edytowac-opcje-promowania-na-wielu-ofertach" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-add-or-change-promo-options-in-multiple-offers" target="_blank">EN</a>.
     *
     * @param string $commandId Command identifier.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getPromoModificationCommandResultUsingGET(string $commandId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetPromoModificationCommandResultUsingGET($commandId), $fetch);
    }
    /**
     * Use this resource to modify promotion packages on multiple offers at once. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-dodac-lub-edytowac-opcje-promowania-na-wielu-ofertach" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-add-or-change-promo-options-in-multiple-offers" target="_blank">EN</a>.
     *
     * @param string $commandId Command identifier. Must be a UUID.
     * @param \Jlonom\AllegroSDK\Model\PromoOptionsCommand $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function promoModificationCommandUsingPUT(string $commandId, \Jlonom\AllegroSDK\Model\PromoOptionsCommand $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\PromoModificationCommandUsingPUT($commandId, $requestBody), $fetch);
    }
    /**
     * Use this resource to retrieve the result of an offer modification command. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-sprawdzic-szczegolowy-raport-zadania" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-check-a-detailed-report-of-your-task" target="_blank">EN</a>.
     *
     * @param string $commandId Command identifier.
     * @param array $queryParameters {
     *     @var int $limit The limit of returned items.
     *     @var int $offset The offset of returned items.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getPromoModificationCommandDetailedResultUsingGET(string $commandId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetPromoModificationCommandDetailedResultUsingGET($commandId, $queryParameters), $fetch);
    }
    /**
     * Use this resource to get a full Smart! offer classification report of one of your offers. Please keep in mind you have to meet Smart! seller conditions first - for more details, use *GET /sale/smart*. To learn more about Smart! offer requirements, see our knowledge base article: [PL](https://allegro.pl/pomoc/dla-sprzedajacych/informacje-dla-sprzedajacych/co-zrobic-aby-moje-oferty-byly-oznaczone-ikona-allegro-smart-lDkP8VbKncV) / [EN](https://allegro.pl/help/for-sellers/allegro-smart-for-sellers/how-can-i-make-my-offers-be-marked-with-the-allegro-smart-badge-rKD1RV30jFM). Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#kwalifikacja-oferty" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/account-and-user-data-management-jn9vBjqjnsw#offer-qualification" target="_blank">EN</a>.
     *
     * @param string $offerId Offer identifier.
     * @param array $queryParameters {
     *     @var string $marketplaceId Marketplace for which offer classification report will be returned. If not specified, the result of the offer's base marketplace will be returned.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOfferSmartClassificationGET(string $offerId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetOfferSmartClassificationGET($offerId, $queryParameters), $fetch);
    }
    /**
    * Use this resource to get a list of products according to provided parameters. At least ean or phrase parameter is required. Read more: <a href="https://developer.allegro.pl/tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#jak-znalezc-produkt" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#how-to-find-a-product" target="_blank">EN</a>. This resource is limited with Leaky Bucket mechanism, read more <a href="https://developer.allegro.pl/tutorials/informacje-podstawowe-b21569boAI1#ograniczenie-liczby-zapytan-limity" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/basic-information-VL6YelvVKTn#limiting-the-number-of-queries-limits" target="_blank">EN</a>.
    *
    * @param array $queryParameters {
    *     @var string $ean The EAN values can include EAN, ISBN, and UPC identifier types. Parameter is depracated and will be removed in the future. Please use combination of phrase and mode (`GTIN`) parameters instead.
    *     @var string $phrase Search phrase.
    *     @var string $mode Search mode. If not specified, we are searching by GTIN, MPN, product's name, parameters, etc.
    - `GTIN` - restricts the search filtering to GTINs (Global Trade Item Number), e.g. EAN, ISBN, UPC.
    - `MPN` - restricts the search filtering to MPNs (Manufacturer Part Number).
    *     @var string $language Language indicates the language for searching products. Allows to specify the language of the given phrase.
    *     @var string $category.id The category identifier to filter results. This can only be used when searching by phrase.
    *     @var string $Dynamic filters You can filter and customize your search results to find exactly what you need by applying filters ids and their dictionary values to query according to the flowing pattern: id=value. When the filter definition looks like:
     ````
     {
       "id": "127448",
       "name": "Kolor",
       "type": "SINGLE",
       "values": [
         {
           "name": "biały",
           "value": "127448_2"
         },
         {
           "name": "czarny",
           "value": "127448_1"
         }
       ]
     }
     ````
    You can use 'Kolor' filter to query results, i.e.:
     * `127448=127448_2` for "biały"
     * `127448=127448_1` for "czarny".
    *     @var string $page.id A "cursor" to the next set of results.
    *     @var string $searchFeatures Enables additional search options: - *SIMILAR_CATEGORIES* - searching in the indicated category (category.id) and in 'similar categories' (works only if category.id is a leaf category).
    *     @var bool $includeDrafts Include products in draft state.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function getSaleProducts(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetSaleProducts($queryParameters), $fetch);
    }
    /**
     * Use this resource to retrieve all data of the particular product. Read more: <a href="https://developer.allegro.pl/tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#jak-pobrac-pelne-dane-o-produkcie" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#how-to-retrieve-product-data" target="_blank">EN</a>. This resource is limited with <a href="https://developer.allegro.pl/tutorials/basic-information-VL6YelvVKTn#limiting-the-number-of-queries-limits" target="_blank">Leaky Bucket</a> mechanism.
     *
     * @param string $productId The product identifier.
     * @param array $queryParameters {
     *     @var string $category.id The similar category identifier. You can choose a category from 'similar categories' to filter the list of parameters available in the category context.
     *     @var bool $includeDrafts Return also if product is in draft state.
     *     @var string $language The language version of product. You can indicate the language for the returned product data.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getSaleProduct(string $productId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetSaleProduct($productId, $queryParameters), $fetch);
    }
    /**
     * Use this resource to propose a product. Read more: <a href="https://developer.allegro.pl/tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#jak-utworzyc-nowy-produkt" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#how-to-create-a-product" target="_blank">EN</a>.
     *
     * @param \Jlonom\AllegroSDK\Model\ProductProposalsRequest $requestBody 
     * @param array $headerParameters {
     *     @var string $Accept-Language Expected language of messages.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function proposeSaleProduct(\Jlonom\AllegroSDK\Model\ProductProposalsRequest $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\ProposeSaleProduct($requestBody, $headerParameters), $fetch);
    }
    /**
     * Use this resource to propose changes in product. Read more: <a href="https://developer.allegro.pl/tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#jak-zglosic-blad-w-produkcie" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#how-to-report-incorrect-data-in-a-product" target="_blank">EN</a>. This resource is limited to 100 suggestions per day for a single user.
     *
     * @param string $productId The product identifier.
     * @param \Jlonom\AllegroSDK\Model\ProductChangeProposalRequest $requestBody 
     * @param array $headerParameters {
     *     @var string $Accept-Language Expected language of messages.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function productChangeProposal(string $productId, \Jlonom\AllegroSDK\Model\ProductChangeProposalRequest $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\ProductChangeProposal($productId, $requestBody, $headerParameters), $fetch);
    }
    /**
     * Use this resource to retrieve all data of the particular product changes proposal. Read more: <a href="https://developer.allegro.pl/tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#jak-zglosic-blad-w-produkcie" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#how-to-report-incorrect-data-in-a-product" target="_blank">EN</a>.
     *
     * @param string $changeProposalId The product changes proposal identifier.
     * @param array $headerParameters {
     *     @var string $Accept-Language Expected language of messages.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getProductChangeProposal(string $changeProposalId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetProductChangeProposal($changeProposalId, $headerParameters), $fetch);
    }
    /**
     * Use this resource to get information about required parameters or parameters scheduled to become required that are not filled in offers. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-sprawdzic-nieuzupelnione-parametry-w-ofertach" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-check-unfilled-parameters-in-offers" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var array $offer.id List of offer ids. If empty all offers with unfilled parameters will be returned.
     *     @var string $parameterType Filter by parameter type.
     *     @var int $offset The offset of elements in the response.
     *     @var int $limit The limit of elements in the response.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetOffersUnfilledParametersUsingGET1BadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\GetOffersUnfilledParametersUsingGET1UnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetOffersUnfilledParametersUsingGET1ForbiddenException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOffersUnfilledParametersUsingGET1(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetOffersUnfilledParametersUsingGET1($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetCategoriesThatSupportCompatibilityListUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getCategoriesThatSupportCompatibilityList(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetCategoriesThatSupportCompatibilityList(), $fetch);
    }
    /**
     * Resource allows to fetch compatibility list suggestion for given offer or product. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-sekcja-pasuje-do-E7Zj6gAEGil#jak-wyszukac-sugerowana-sekcje-compatibilitylist" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-the-compatibility-section-v8WbL1wV0Hz#how-to-search-for-the-suggested-compatibility-section" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var string $offer.id Offer id on the basis of which we will return the suggested compatibility list.
     *     @var string $product.id Product id on the basis of which we will return the suggested compatibility list.
     *     @var string $language Locale on the basis of which we will return the suggested compatibility list. For product-based suggestions if missing pl-PL will be used. For offer-based suggestions if missing offer language will be used.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/vnd.allegro.public.v1+json|application/json
     * @throws \Jlonom\AllegroSDK\Exception\GetCompatibilityListSuggestionBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\GetCompatibilityListSuggestionUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetCompatibilityListSuggestionNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getCompatibilityListSuggestion(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetCompatibilityListSuggestion($queryParameters, $accept), $fetch);
    }
    /**
     * Compatible products are organized in groups, this resource allows to browse these groups. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-sekcja-pasuje-do-E7Zj6gAEGil#jak-zarzadzac-sekcja-pasuje-do-zintegrowana-z-baza-pojazdow" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-the-compatibility-section-v8WbL1wV0Hz#managing-the-compatibility-section-compatibilitylist-integrated-vehicle-database" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var string $type Type of compatible products. You can find available types in the response for the GET <a href="/documentation/#tag/Compatibility-List/paths/~1sale~1compatibility-list~1supported-categories/get">supported-categories</a> resource. You can use value provided in `itemsType`, for categories where `inputType=ID`.
     *     @var int $limit The limit of returned items.
     *     @var int $offset The offset of returned items.
     * }
     * @param array $headerParameters {
     *     @var string $If-Modified-Since Date of last data modification. If data has been modified after specified date, full set of data is returned. If header is not specified, full set of data is returned. Date has to be provided in HTTP-date format.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/vnd.allegro.public.v1+json|application/json
     * @throws \Jlonom\AllegroSDK\Exception\GetCompatibleProductsGroupsBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\GetCompatibleProductsGroupsUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetCompatibleProductsGroupsUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getCompatibleProductsGroups(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetCompatibleProductsGroups($queryParameters, $headerParameters, $accept), $fetch);
    }
    /**
     * Resource allows to fetch compatible products of given type. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-sekcja-pasuje-do-E7Zj6gAEGil#jak-zarzadzac-sekcja-pasuje-do-zintegrowana-z-baza-pojazdow" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-the-compatibility-section-v8WbL1wV0Hz#managing-the-compatibility-section-compatibilitylist-integrated-vehicle-database" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var string $type Type of compatible products. You can find available types in the response for the GET <a href="/documentation/#tag/Compatibility-List/paths/~1sale~1compatibility-list~1supported-categories/get">supported-categories</a> resource. You can use value provided in `itemsType`, for categories where `inputType=ID`.
     *     @var string $group.id Group identifier from `/sale/compatible-products/groups` resource. Parameter is required when parameter `tecdoc.kTypNr` or `tecdoc.nTypNr` or `phrase` is not specified.
     *     @var string $tecdoc.kTypNr Identifier of passenger vehicle (kTypNr) from TecDoc database. When used, `group.id` parameter is ignored.
     *     @var string $tecdoc.nTypNr Identifier of commercial vehicle (nTypNr) from TecDoc database. When used, `group.id` parameter is ignored.
     *     @var string $phrase Query for compatible products. When used, parameters: `group.id`, `limit`, `offset` and header `If-Modified-Since` are ignored.
     *     @var int $limit The limit of returned items. If `phrase` parameter is present, parameter is ignored and maximum value is set to `200`.
     *     @var int $offset The offset of returned items. If `phrase` parameter is present, parameter is ignored.
     * }
     * @param array $headerParameters {
     *     @var string $If-Modified-Since Date of last data modification. If data has been modified after specified date, full set of data is returned. If header is not specified, full set of data is returned. Date has to be provided in HTTP-date format. Header is ignored if `phrase` parameter is used.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/vnd.allegro.public.v1+json|application/json
     * @throws \Jlonom\AllegroSDK\Exception\GetCompatibleProductsBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\GetCompatibleProductsUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetCompatibleProductsUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getCompatibleProducts(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetCompatibleProducts($queryParameters, $headerParameters, $accept), $fetch);
    }
    /**
     * Use this resource to get a list of all additional email addresses assigned to account. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-pobrac-adresy-e-mail" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-retrieve-email-addresses" target="_blank">EN</a>.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/vnd.allegro.public.v1+json|*\/*
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getListOfAdditionalEmailsUsingGET(string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetListOfAdditionalEmailsUsingGET($accept), $fetch);
    }
    /**
     * Use this resource to add a new additional email address to account. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-dodac-adres-e-mail" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-add-an-additional-email" target="_blank">EN</a>.
     *
     * @param \Jlonom\AllegroSDK\Model\AdditionalEmailRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/vnd.allegro.public.v1+json|*\/*
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function addAdditionalEmailUsingPOST(\Jlonom\AllegroSDK\Model\AdditionalEmailRequest $requestBody, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\AddAdditionalEmailUsingPOST($requestBody, $accept), $fetch);
    }
    /**
     * Use this resource to delete one of additional emails. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-usunac-adres-e-mail" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-remove-e-mail" target="_blank">EN</a>.
     *
     * @param string $emailId Id of the additional email to be deleted.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/vnd.allegro.public.v1+json|*\/*
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteAdditionalEmailUsingDELETE(string $emailId, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\DeleteAdditionalEmailUsingDELETE($emailId, $accept), $fetch);
    }
    /**
     * Use this resource to retrieve a single additional email. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-pobrac-szczegolowe-informacje-o-adresie-e-mail" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-retrieve-e-mail-details" target="_blank">EN</a>.
     *
     * @param string $emailId Id of the additional email.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/vnd.allegro.public.v1+json|*\/*
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getAdditionalEmailUsingGET(string $emailId, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetAdditionalEmailUsingGET($emailId, $accept), $fetch);
    }
    /**
     * Use this endpoint to get the list of the seller payment operations. Read more: <a href="https://developer.allegro.pl/tutorials/jak-sprawdzic-oplaty-nn9DOL5PASX#historia-operacji-platniczych" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-check-the-fees-3An6Wame3Um#payment-operations" target="_blank">EN</a>.
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
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetPaymentsOperationHistoryUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getPaymentsOperationHistory(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetPaymentsOperationHistory($queryParameters), $fetch);
    }
    /**
     * Get current user's bid information. Read more: <a href="https://developer.allegro.pl/news/nowe-zasoby-zloz-oferte-kupna-w-licytacji-q018m02vDT1" target="_blank">PL</a> / <a href="https://developer.allegro.pl/news/new-resources-place-a-bid-in-an-auction-rjWwEj1e7sG" target="_blank">EN</a>.
     *
     * @param string $offerId The offer ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getBid(string $offerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetBid($offerId), $fetch);
    }
    /**
     * Place a bid in an auction. Read more: <a href="https://developer.allegro.pl/news/nowe-zasoby-zloz-oferte-kupna-w-licytacji-q018m02vDT1" target="_blank">PL</a> / <a href="https://developer.allegro.pl/news/new-resources-place-a-bid-in-an-auction-rjWwEj1e7sG" target="_blank">EN</a>.
     *
     * @param string $offerId The offer ID.
     * @param null|\Jlonom\AllegroSDK\Model\BiddingOffersOfferIdBidPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function placeBid(string $offerId, ?\Jlonom\AllegroSDK\Model\BiddingOffersOfferIdBidPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\PlaceBid($offerId, $requestBody), $fetch);
    }
    /**
    * Use this endpoint to get events from the last 24 hours concerning changes in the authorized seller's offers.
    At present we support the following events:
     - OFFER_ACTIVATED - offer is visible on site and available for purchase, occurs when offer status changes from ACTIVATING to ACTIVE.
     - OFFER_CHANGED - occurs when offer's fields has been changed e.g. description or photos.
     - OFFER_ENDED - offer is no longer available for purchase, occurs when offer status changes from ACTIVE to ENDED.
     - OFFER_STOCK_CHANGED - stock in an offer was changed either via purchase or by seller.
     - OFFER_PRICE_CHANGED - occurs when price in an offer was changed.
     - OFFER_ARCHIVED - offer is no longer available on listing and has been archived.
     - OFFER_BID_PLACED - bid was placed on the offer.
     - OFFER_BID_CANCELED - bid for offer was canceled.
     - OFFER_TRANSLATION_UPDATED - translation of offer was updated.
     - OFFER_VISIBILITY_CHANGED - visibility of offer was changed on marketplaces.
    Returned events may occur by actions made via browser or API. The resource allows you to get events concerning active offers and offers scheduled for activation (status ACTIVE and ACTIVATING). Returned events do not concern offers in INACTIVE and ENDED status (the exception is OFFER_ARCHIVED event). External id is returned for all event types except OFFER_BID_PLACED and OFFER_BID_CANCELED. Please note that one change may result in more than one event. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#dziennik-zdarzen-w-ofertach-sprzedawcy" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#event-journal-concerning-changes-in-seller-s-offers" target="_blank">EN</a>.
    *
    * @param array $queryParameters {
    *     @var string $from The ID of the last seen event. Events that occured after the given event will be returned.
    *     @var int $limit The number of events that will be returned in the response.
    *     @var array $type The types of events that will be returned in the response. All types of events are returned by default.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/vnd.allegro.public.v1+json|application/json
    * @throws \Jlonom\AllegroSDK\Exception\GetOfferEventsBadRequestException
    * @throws \Jlonom\AllegroSDK\Exception\GetOfferEventsUnauthorizedException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function getOfferEvents(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetOfferEvents($queryParameters, $accept), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function badgeCampaignsGetAll(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\BadgeCampaignsGetAll(), $fetch);
    }
    /**
     * Use this resource to get a list of badges in authorized seller's offers. Read more: <a href="https://developer.allegro.pl/tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#kampanie-przypisane-do-ofert" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#check-badges-assigned-to-offers" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var string $offer.id Offer ID.
     *     @var int $offset Offset.
     *     @var int $limit The maximum number of badges returned in the response.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getBadges(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetBadges($queryParameters), $fetch);
    }
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
    Read more: <a href="https://developer.allegro.pl/tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#zglos-oferte-do-kampanii" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#submit-offer-to-a-campaign" target="_blank">EN</a>.
    *
    * @param null|\Jlonom\AllegroSDK\Model\BadgeApplicationRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function postBadges(?\Jlonom\AllegroSDK\Model\BadgeApplicationRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\PostBadges($requestBody), $fetch);
    }
    /**
     * Use this resource to get a badge application details. Read more: <a href="https://developer.allegro.pl/tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#pobierz-dane-zgloszenie" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#retrieve-campaign-application" target="_blank">EN</a>.
     *
     * @param string $applicationId Badge application ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function badgeApplicationsGetOne(string $applicationId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\BadgeApplicationsGetOne($applicationId), $fetch);
    }
    /**
     * Use this resource to get a list of badge applications. Read more: <a href="https://developer.allegro.pl/tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#pobierz-swoje-zgloszenia" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#retrieve-all-campaign-applications" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var string $campaign.id Campaign ID.
     *     @var string $offer.id Offer ID.
     *     @var int $offset Offset.
     *     @var int $limit The maximum number of applications returned in the response.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function badgeApplicationsGetAll(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\BadgeApplicationsGetAll($queryParameters), $fetch);
    }
    /**
     * Use this resource to get badge operation details. Read more: <a href="https://developer.allegro.pl/tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#zmiana-ceny-i-zakonczenie-oznaczenia" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#change-price-and-finish-badge" target="_blank">EN</a>.
     *
     * @param string $operationId Badge operation ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function badgeOperationsGetOne(string $operationId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\BadgeOperationsGetOne($operationId), $fetch);
    }
    /**
    * This resource allows you to update a campaign badge for the given offer. You can use *Location* provided in header of the response to track your update status. Update offer price in a campaign or finish marking an offer in a campaign.
    Read more: <a href="https://developer.allegro.pl/tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#zmiana-ceny-i-zakonczenie-oznaczenia" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#change-price-and-finish-badge" target="_blank">EN</a>.
    *
    * @param string $offerId Offer ID.
    * @param string $campaignId Campaign ID.
    * @param null|mixed $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function patchBadge(string $offerId, string $campaignId, $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\PatchBadge($offerId, $campaignId, $requestBody), $fetch);
    }
    /**
     * Get a list of refunded payments. Read more: <a href="https://developer.allegro.pl/tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-pobrac-liste-zwrotow-platnosci" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/process-orders-PgPMlWDr8Cv#how-to-retrieve-a-list-of-refunded-payment" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var int $limit Number of returned operations.
     *     @var int $offset Index of the first returned payment operation from all search results.
     *     @var string $id ID of the refund.
     *     @var string $payment.id ID of the payment.
     *     @var string $occurredAt.gte Minimum date and time when the refund occurred provided in ISO 8601 format.
     *     @var string $occurredAt.lte Maximum date and time when the refund occurred provided in ISO 8601 format.
     *     @var array $status Current status of payment refund.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getRefundedPayments(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetRefundedPayments($queryParameters), $fetch);
    }
    /**
     * Use this endpoint to initiate a refund of a payment. Read more: <a href="https://developer.allegro.pl/tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-wykonac-zwrot-platnosci" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/process-orders-PgPMlWDr8Cv#how-to-refund-a-payment" target="_blank">EN</a>.
     *
     * @param null|\Jlonom\AllegroSDK\Model\InitializeRefund $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function initiateRefund(?\Jlonom\AllegroSDK\Model\InitializeRefund $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\InitiateRefund($requestBody), $fetch);
    }
    /**
     * The billing entries are sorted in a descending order (newest first) by date on which they occurred. Read more: <a href="https://developer.allegro.pl/tutorials/jak-sprawdzic-oplaty-nn9DOL5PASX#historia-operacji-billingowych" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-check-the-fees-3An6Wame3Um#billing-operations" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var string $marketplaceId The marketplace ID where operation was made. By default the marketplace ID where the user is registered. **Note:** Business marketplace is not a separate user's billing and defaults back to the main marketplace for given country.
     *     @var string $occurredAt.gte Date from which billing entries are filtered. If occurredAt.lte is also set, occurredAt.gte cannot be later.
     *     @var string $occurredAt.lte Date to which billing entries are filtered. If occurredAt.gte is also set, occurredAt.lte cannot be earlier.
     *     @var array $type.id List of billing types by which billing entries are filtered.
     *     @var string $offer.id Offer ID by which billing entries are filtered.
     *     @var string $order.id Order UUID by which billing entries are filtered.
     *     @var int $limit Number of returned operations.
     *     @var int $offset Index of the first returned payment operation from all search results.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getBillingEntries(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetBillingEntries($queryParameters), $fetch);
    }
    /**
     * List of all billing types. Type names are localized according to "Accept-Language" header. Read more: <a href="https://developer.allegro.pl/tutorials/jak-sprawdzic-oplaty-nn9DOL5PASX#historia-operacji-billingowych" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-check-the-fees-3An6Wame3Um#billing-operations" target="_blank">EN</a>.
     *
     * @param array $headerParameters {
     *     @var string $Accept-Language Expected language of name translations.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getBillingTypes(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetBillingTypes($headerParameters), $fetch);
    }
    /**
     * Use this resource to cancel a refund application. This cannot be undone. Read more: <a href="https://developer.allegro.pl/tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-anulowac-wniosek-o-rabat-transakcyjny" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/process-orders-PgPMlWDr8Cv#how-to-cancel-sale-commission-refund" target="_blank">EN</a>.
     *
     * @param string $claimId Refund application ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\CancelRefundApplicationBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\CancelRefundApplicationUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\CancelRefundApplicationForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\CancelRefundApplicationNotFoundException
     * @throws \Jlonom\AllegroSDK\Exception\CancelRefundApplicationNotAcceptableException
     * @throws \Jlonom\AllegroSDK\Exception\CancelRefundApplicationUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function cancelRefundApplication(string $claimId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\CancelRefundApplication($claimId), $fetch);
    }
    /**
     * Use this resource to get refund application details. Read more: <a href="https://developer.allegro.pl/tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-pobrac-pojedynczy-wniosek-o-rabat-transakcyjny" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/process-orders-PgPMlWDr8Cv#how-to-retrieve-single-sale-commission-refund" target="_blank">EN</a>.
     *
     * @param string $claimId Refund application ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetRefundApplicationBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\GetRefundApplicationUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetRefundApplicationForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetRefundApplicationNotFoundException
     * @throws \Jlonom\AllegroSDK\Exception\GetRefundApplicationNotAcceptableException
     * @throws \Jlonom\AllegroSDK\Exception\GetRefundApplicationUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getRefundApplication(string $claimId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetRefundApplication($claimId), $fetch);
    }
    /**
     * Use this resource to get a list of refund applications based on the provided query parameters. Read more: <a href="https://developer.allegro.pl/tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-pobrac-liste-utworzonych-wnioskow-o-rabat-transakcyjny" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/process-orders-PgPMlWDr8Cv#how-to-retrieve-list-of-sale-commission-refunds" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var string $lineItem.offer.id ID of the offer associated with the refund application.
     *     @var string $buyer.login Login of the buyer that made the purchase associated with the refund application.
     *     @var string $status Status of the refund application.
     *     @var int $limit Maximum number of returned refund applications in response.
     *     @var int $offset Index of the first returned refund application from all search results.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetRefundApplicationsBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\GetRefundApplicationsUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetRefundApplicationsForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetRefundApplicationsNotAcceptableException
     * @throws \Jlonom\AllegroSDK\Exception\GetRefundApplicationsUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getRefundApplications(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetRefundApplications($queryParameters), $fetch);
    }
    /**
     * Use this resource to create a refund application. Read more: <a href="https://developer.allegro.pl/tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-utworzyc-wniosek-o-rabat-transakcyjny" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/process-orders-PgPMlWDr8Cv#how-to-create-a-sale-commission-refund-application" target="_blank">EN</a>.
     *
     * @param \Jlonom\AllegroSDK\Model\RefundClaimRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\CreateRefundApplicationBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\CreateRefundApplicationUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\CreateRefundApplicationForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\CreateRefundApplicationNotAcceptableException
     * @throws \Jlonom\AllegroSDK\Exception\CreateRefundApplicationUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createRefundApplication(\Jlonom\AllegroSDK\Model\RefundClaimRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\CreateRefundApplication($requestBody), $fetch);
    }
    /**
     * Use this resource to search fundraising campaigns. Read more: <a href="https://developer.allegro.pl/news/wystaw-oferte-charytatywna-na-allegro-MR87PBxZySY" target="_blank">PL</a> / <a href="https://developer.allegro.pl/news/list-a-charity-offer-on-allegro-LRV0572GOhr" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var int $limit Maximum number of returned results.
     *     @var string $phrase Fundraising campaign name or it's Organization name prefix to search for.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function searchFundraisingCampaigns(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\SearchFundraisingCampaigns($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getDeliveryServices(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetDeliveryServices(), $fetch);
    }
    /**
     * Use this resource to create shipment for delivery. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-przesylkami-przez-wysylam-z-allegro-LRVjK7K21sY#jak-utworzyc-nowa-paczke" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-parcels-via-ship-with-allegro-ZM9YAyGKWTV#how-to-create-a-new-shipment" target="_blank">EN</a>.
     *
     * @param \Jlonom\AllegroSDK\Model\ShipmentCreateCommandDto $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createNewShipment(\Jlonom\AllegroSDK\Model\ShipmentCreateCommandDto $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\CreateNewShipment($requestBody), $fetch);
    }
    /**
     * Use this resource to get shipment creation status. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-przesylkami-przez-wysylam-z-allegro-LRVjK7K21sY#jak-sprawdzic-status-utworzenia-paczki" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-parcels-via-ship-with-allegro-ZM9YAyGKWTV#how-to-check-the-creation-status-of-a-shipment" target="_blank">EN</a>.
     *
     * @param string $commandId Command UUID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetShipmentCreationStatusNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getShipmentCreationStatus(string $commandId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetShipmentCreationStatus($commandId), $fetch);
    }
    /**
     * Use this resource to cancel parcel. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-przesylkami-przez-wysylam-z-allegro-LRVjK7K21sY#jak-anulowac-paczke" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-parcels-via-ship-with-allegro-ZM9YAyGKWTV#how-to-cancel-a-shipment" target="_blank">EN</a>.
     *
     * @param \Jlonom\AllegroSDK\Model\ShipmentCancelCommandDto $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function cancelShipment(\Jlonom\AllegroSDK\Model\ShipmentCancelCommandDto $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\CancelShipment($requestBody), $fetch);
    }
    /**
     * Use this resource to get parcel cancellation status. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-przesylkami-przez-wysylam-z-allegro-LRVjK7K21sY#jak-sprawdzic-status-anulowania-paczki" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-parcels-via-ship-with-allegro-ZM9YAyGKWTV#how-to-check-shipment-cancellation-status" target="_blank">EN</a>.
     *
     * @param string $commandId Command UUID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetShipmentCancellationStatusNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getShipmentCancellationStatus(string $commandId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetShipmentCancellationStatus($commandId), $fetch);
    }
    /**
     * Use this resource to get parcel details. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-przesylkami-przez-wysylam-z-allegro-LRVjK7K21sY#jak-pobrac-szczegolowe-informacje-o-paczce" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-parcels-via-ship-with-allegro-ZM9YAyGKWTV#how-to-retrieve-shipment-details" target="_blank">EN</a>.
     *
     * @param string $shipmentId Shipment id.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getShipmentDetails(string $shipmentId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetShipmentDetails($shipmentId), $fetch);
    }
    /**
     * Use this resource to get label for created shipment. <br/>Returned content type depends on created shipment. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-przesylkami-przez-wysylam-z-allegro-LRVjK7K21sY#jak-utworzyc-etykiete-na-paczke" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-parcels-via-ship-with-allegro-ZM9YAyGKWTV#how-to-create-a-label-for-shipment" target="_blank">EN</a>.
     *
     * @param \Jlonom\AllegroSDK\Model\LabelRequestDto $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/octet-stream|application/vnd.allegro.public.v1+json
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getShipmentLabels(\Jlonom\AllegroSDK\Model\LabelRequestDto $requestBody, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetShipmentLabels($requestBody, $accept), $fetch);
    }
    /**
     * Protocol availability depends on Carrier. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-przesylkami-przez-wysylam-z-allegro-LRVjK7K21sY#jak-pobrac-protokol-nadania-przesylek" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-parcels-via-ship-with-allegro-ZM9YAyGKWTV#how-to-retrieve-shipment-protocol" target="_blank">EN</a>.
     *
     * @param \Jlonom\AllegroSDK\Model\ShipmentIdsDto $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/octet-stream|application/vnd.allegro.public.v1+json
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getShipmentProtocol(\Jlonom\AllegroSDK\Model\ShipmentIdsDto $requestBody, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetShipmentProtocol($requestBody, $accept), $fetch);
    }
    /**
     * Use this resource to get parcels pickup date proposals. Pickup takes place, when courier arrives to take parcels for shipment. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-przesylkami-przez-wysylam-z-allegro-LRVjK7K21sY#jak-sprawdzic-proponowana-date-odbioru-paczek-przez-kuriera" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-parcels-via-ship-with-allegro-ZM9YAyGKWTV#how-to-check-pickup-date-proposals" target="_blank">EN</a>.
     *
     * @param \Jlonom\AllegroSDK\Model\PickupProposalsRequestDto $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getPickupProposals(\Jlonom\AllegroSDK\Model\PickupProposalsRequestDto $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetPickupProposals($requestBody), $fetch);
    }
    /**
     * Use this resource to request a pickup of shipments. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-przesylkami-przez-wysylam-z-allegro-LRVjK7K21sY#jak-zamowic-odbior-paczek-przez-kuriera" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-parcels-via-ship-with-allegro-ZM9YAyGKWTV#how-to-request-shipment-pickup-by-a-courier" target="_blank">EN</a>.
     *
     * @param \Jlonom\AllegroSDK\Model\PickupCreateCommandDto $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createPickup(\Jlonom\AllegroSDK\Model\PickupCreateCommandDto $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\CreatePickup($requestBody), $fetch);
    }
    /**
     * Use this resource to get pickup request status. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-przesylkami-przez-wysylam-z-allegro-LRVjK7K21sY#jak-sprawdzic-status-zamowienia-odbioru-paczek" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-parcels-via-ship-with-allegro-ZM9YAyGKWTV#how-to-check-shipment-pickup-request-status" target="_blank">EN</a>.
     *
     * @param string $commandId Command UUID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\CreatePickupStatusNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createPickupStatus(string $commandId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\CreatePickupStatus($commandId), $fetch);
    }
    /**
     * Use this resource to receive suggested categories for given phrase. Read more: <a href="https://developer.allegro.pl/news/udostepnilismy-nowy-zasob-dzieki-ktoremu-sprawdzisz-sugerowane-kategorie-dla-podanej-frazy-4RAl9jwX1FW" target="_blank">PL</a> / <a href="https://developer.allegro.pl/news/we-have-introduced-a-new-resource-that-allows-you-to-retrieve-the-suggested-categories-for-the-given-phrase-v8Wdy1EOyF0" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var string $name Product name for which you want to get suggested categories.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function categorySuggestionUsingGET(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\CategorySuggestionUsingGET($queryParameters), $fetch);
    }
    /**
     * Use this resource to receive tax settings for given category. Based on received settings you may set VAT tax settings for your offers. Read more: <a href="https://developer.allegro.pl/tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#opcje-faktury-i-stawki-vat" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#invoice-and-vat-settings" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var string $category.id An identifier of a category for which all available tax settings will be returned.
     *     @var array $countryCode Country code for which tax settings will be returned. If not provided settings for all countries will be returned.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/vnd.allegro.public.v1+json|application/vnd.allegro.beta.v1+json
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getTaxSettingsForCategory(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetTaxSettingsForCategory($queryParameters, $accept), $fetch);
    }
    /**
     * Use this resource to get the current Allegro Prices consent value for the offer on each of the available marketplaces. Read more: <a href="https://developer.allegro.pl/tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#allegro-ceny-jak-zarzadzac-zgodami-na-uczestnictwo-w-programie" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#allegro-prices-how-to-manage-program-participation-consents" target="_blank">EN</a>.
     *
     * @param string $offerId The offer ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getAllegroPricesConsentForOffer(string $offerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetAllegroPricesConsentForOffer($offerId), $fetch);
    }
    /**
     * Use this resource to update the Allegro Prices consent value for the offer on chosen marketplaces. Read more: <a href="https://developer.allegro.pl/tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#allegro-ceny-jak-zarzadzac-zgodami-na-uczestnictwo-w-programie" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#allegro-prices-how-to-manage-program-participation-consents" target="_blank">EN</a>.
     *
     * @param string $offerId The offer ID.
     * @param \Jlonom\AllegroSDK\Model\AllegroPricesOfferChangeRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateAllegroPricesConsentForOffer(string $offerId, \Jlonom\AllegroSDK\Model\AllegroPricesOfferChangeRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\UpdateAllegroPricesConsentForOffer($offerId, $requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getAllegroPricesEligibilityForAccount(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetAllegroPricesEligibilityForAccount(), $fetch);
    }
    /**
     * Use this resource to update the Allegro Prices consent value for the account on chosen marketplaces. Read more: <a href="https://developer.allegro.pl/tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#allegro-ceny-jak-zarzadzac-zgodami-na-uczestnictwo-w-programie" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#allegro-prices-how-to-manage-program-participation-consents" target="_blank">EN</a>.
     *
     * @param \Jlonom\AllegroSDK\Model\AllegroPricesAccountChangeRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateAllegroPricesConsentForAccount(\Jlonom\AllegroSDK\Model\AllegroPricesAccountChangeRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\UpdateAllegroPricesConsentForAccount($requestBody), $fetch);
    }
    /**
     * Use this resource to create a command for submitting an offer. Offer will be submitted to the AlleDiscount campaign only if command is processed successfully. Read more: <a href="https://developer.allegro.pl/tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#jak-zglosic-oferte-do-kampanii" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#how-to-submit-an-offer-to-a-campaign" target="_blank">EN</a>.
     *
     * @param \Jlonom\AllegroSDK\Model\AlleDiscountSubmitCommandRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\SubmitOfferToAlleDiscountCommandsUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\SubmitOfferToAlleDiscountCommandsConflictException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function submitOfferToAlleDiscountCommands(\Jlonom\AllegroSDK\Model\AlleDiscountSubmitCommandRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\SubmitOfferToAlleDiscountCommands($requestBody), $fetch);
    }
    /**
     * Use this resource to get information about the submit offer command execution status. Read more: <a href="https://developer.allegro.pl/tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#jak-sprawdzic-status-zgloszenia-oferty-do-kampanii" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#how-to-check-the-status-of-an-offer-submission-to-a-campaign" target="_blank">EN</a>.
     *
     * @param string $commandId Command id in UUID format, must be unique.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetSubmitOfferToAlleDiscountCommandsStatusUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetSubmitOfferToAlleDiscountCommandsStatusNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getSubmitOfferToAlleDiscountCommandsStatus(string $commandId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetSubmitOfferToAlleDiscountCommandsStatus($commandId), $fetch);
    }
    /**
     * Use this resource to create a command for withdrawing an offer from specific campaign. Offer will be withdrawn from the AlleDiscount campaign only if command is processed successfully. Read more: <a href="https://developer.allegro.pl/tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#jak-wycofac-oferte-z-kampanii" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#how-to-withdraw-an-offer-from-a-campaign" target="_blank">EN</a>.
     *
     * @param \Jlonom\AllegroSDK\Model\AlleDiscountWithdrawCommandRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\WithdrawOfferFromAlleDiscountCommandsUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\WithdrawOfferFromAlleDiscountCommandsConflictException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function withdrawOfferFromAlleDiscountCommands(\Jlonom\AllegroSDK\Model\AlleDiscountWithdrawCommandRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\WithdrawOfferFromAlleDiscountCommands($requestBody), $fetch);
    }
    /**
     * Use this resource to get information about the withdrawal command execution status. Read more: <a href="https://developer.allegro.pl/tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#jak-sprawdzic-status-wycofania-oferty-z-kampanii" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#how-to-check-the-withdrawal-status-of-an-offer-from-a-campaign" target="_blank">EN</a>.
     *
     * @param string $commandId Command id in UUID format, must be unique.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetWithdrawOfferFromAlleDiscountCommandsStatusUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetWithdrawOfferFromAlleDiscountCommandsStatusNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getWithdrawOfferFromAlleDiscountCommandsStatus(string $commandId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetWithdrawOfferFromAlleDiscountCommandsStatus($commandId), $fetch);
    }
    /**
     * Endpoint returning info about offers that can be submitted to a given AlleDiscount campaign. Only offer linked to the product in published list of goods (products) can be submitted to a given AlleDiscount campaign. Read more: <a href="https://developer.allegro.pl/tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#lista-ofert-kwalifikujacych-sie-do-kampanii" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#list-of-offers-eligible-for-the-selected-campaign" target="_blank">EN</a>.
     *
     * @param string $campaignId Campaign id to list offers from.
     * @param array $queryParameters {
     *     @var int $limit Maximum number of offers returned in the eligibleOffers list; max value is 200.
     *     @var int $offset The number of offers to skip while listing the results.
     *     @var bool $meetsConditions If true, filters offers that only meet conditions of the campaign.
     *     @var string $offerId ID of an offer; if the offer with the given ID exists, returns at most one element in the eligibleOffers list.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetOffersEligibleForAlleDiscountUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetOffersEligibleForAlleDiscountForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetOffersEligibleForAlleDiscountNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOffersEligibleForAlleDiscount(string $campaignId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetOffersEligibleForAlleDiscount($campaignId, $queryParameters), $fetch);
    }
    /**
     * Endpoint returning info about offer participations for a given AlleDiscount campaign. With this endpoint you are able to validate if the offer participates in AlleDiscount and if it has lowered price on the platform. Read more: <a href="https://developer.allegro.pl/tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#lista-ofert-zgloszonych-do-wybranej-kampanii" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#list-of-offers-submitted-for-the-selected-campaign" target="_blank">EN</a>.
     *
     * @param string $campaignId Campaign id to list offers from.
     * @param array $queryParameters {
     *     @var int $limit Maximum number of offers returned in the eligibleOffers list; max value is 200.
     *     @var int $offset The number of offers to skip while listing the results.
     *     @var string $offerId ID of an offer; if the offer with the given ID exists, returns at most one element in the submittedOffers list.
     *     @var string $participationId Id of the participation, returns at most one element in the submittedOffers list.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetOffersSubmittedToAlleDiscountUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetOffersSubmittedToAlleDiscountForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetOffersSubmittedToAlleDiscountNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOffersSubmittedToAlleDiscount(string $campaignId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetOffersSubmittedToAlleDiscount($campaignId, $queryParameters), $fetch);
    }
    /**
     * List current AlleDiscount campaigns. Each campaign has its own list of goods (products) that indicate which offers can be submitted to it. Read more: <a href="https://developer.allegro.pl/tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#lista-dostepnych-kampanii-alleobnizka" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#list-of-available-allediscount-campaigns" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var string $campaignId Id of the searched campaign. If present, returns at most one entry.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetAlleDiscountCampaignsUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getAlleDiscountCampaigns(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetAlleDiscountCampaigns($queryParameters), $fetch);
    }
    /**
     * Use this resource to get a full Smart! seller classification report. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#kwalifikacja-sprzedawcy" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/account-and-user-data-management-jn9vBjqjnsw#seller-qualification" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var string $marketplaceId Marketplace for which seller classification report will be returned. If not specified, the classification result for the seller's registration marketplace will be returned.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getSellerSmartClassificationGET(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetSellerSmartClassificationGET($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function marketplacesGET(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\MarketplacesGET(), $fetch);
    }
    /**
     * Use this resource to get the list of user threads sorted by last message date, starting from newest. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-centrum-wiadomosci-XxWm2K890Fk#lista-watkow-na-koncie" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-the-message-center-g05avyGlZUW#list-of-threads" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var int $limit The maximum number of threads returned in the response.
     *     @var int $offset Index of the first returned thread from all results.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\ListThreadsGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\ListThreadsGETUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function listThreadsGET(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\ListThreadsGET($queryParameters), $fetch);
    }
    /**
     * Use this resource to get thread with provided identifier. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-centrum-wiadomosci-XxWm2K890Fk#szczegolowe-informacje-o-danym-watku" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-the-message-center-g05avyGlZUW#information-about-a-particular-thread" target="_blank">EN</a>.
     *
     * @param string $threadId Identifier of thread to get.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetThreadGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetThreadGETNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getThreadGET(string $threadId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetThreadGET($threadId), $fetch);
    }
    /**
     * Use this resource to mark thread with provided identifier as read. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-centrum-wiadomosci-XxWm2K890Fk#szczegolowe-informacje-o-wiadomosci" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-the-message-center-g05avyGlZUW#information-about-a-particular-message" target="_blank">EN</a>.
     *
     * @param string $threadId Identifier of thread to be marked.
     * @param \Jlonom\AllegroSDK\Model\ThreadReadFlag $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\ChangeReadFlagOnThreadPUTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\ChangeReadFlagOnThreadPUTForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\ChangeReadFlagOnThreadPUTNotFoundException
     * @throws \Jlonom\AllegroSDK\Exception\ChangeReadFlagOnThreadPUTUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function changeReadFlagOnThreadPUT(string $threadId, \Jlonom\AllegroSDK\Model\ThreadReadFlag $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\ChangeReadFlagOnThreadPUT($threadId, $requestBody), $fetch);
    }
    /**
     * Use this resource to write new message to recipient. This resource is rate limited to 1 request per second for a user. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-centrum-wiadomosci-XxWm2K890Fk#nowa-wiadomosc" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-the-message-center-g05avyGlZUW#add-a-new-message" target="_blank">EN</a>.
     *
     * @param \Jlonom\AllegroSDK\Model\NewMessage $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\NewMessagePOSTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\NewMessagePOSTUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function newMessagePOST(\Jlonom\AllegroSDK\Model\NewMessage $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\NewMessagePOST($requestBody), $fetch);
    }
    /**
     * Use this resource to list messages in thread with provided identifier. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-centrum-wiadomosci-XxWm2K890Fk#lista-wiadomosci-dla-wybranego-watku" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-the-message-center-g05avyGlZUW#list-of-the-messages-for-the-particular-thread" target="_blank">EN</a>.
     *
     * @param string $threadId Identifier of thread to get messages from.
     * @param array $queryParameters {
     *     @var int $limit The maximum number of messages returned in the response.
     *     @var int $offset Index of the first returned message from all results.
     *     @var string $before Message creation date before filter parameter (exclusive) - cannot be used with offset.
     *     @var string $after Message creation date after filter parameter (exclusive).
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\ListMessagesGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\ListMessagesGETForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\ListMessagesGETNotFoundException
     * @throws \Jlonom\AllegroSDK\Exception\ListMessagesGETUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function listMessagesGET(string $threadId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\ListMessagesGET($threadId, $queryParameters), $fetch);
    }
    /**
     * Use this resource to write new message in existing thread. This resource is rate limited to 1 request per second for a user. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-centrum-wiadomosci-XxWm2K890Fk#nowa-wiadomosc" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-the-message-center-g05avyGlZUW#add-a-new-message" target="_blank">EN</a>.
     *
     * @param string $threadId Identifier of thread to write message to.
     * @param \Jlonom\AllegroSDK\Model\NewMessageInThread $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\NewMessageInThreadPOSTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\NewMessageInThreadPOSTForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\NewMessageInThreadPOSTNotFoundException
     * @throws \Jlonom\AllegroSDK\Exception\NewMessageInThreadPOSTUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function newMessageInThreadPOST(string $threadId, \Jlonom\AllegroSDK\Model\NewMessageInThread $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\NewMessageInThreadPOST($threadId, $requestBody), $fetch);
    }
    /**
     * Use this resource to delete message with provided identifier. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-centrum-wiadomosci-XxWm2K890Fk#usuniecie-wiadomosci" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-the-message-center-g05avyGlZUW#delete-a-message" target="_blank">EN</a>.
     *
     * @param string $messageId Identifier of the message to delete.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\DeleteMessageDELETEUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\DeleteMessageDELETEForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\DeleteMessageDELETENotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteMessageDELETE(string $messageId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\DeleteMessageDELETE($messageId), $fetch);
    }
    /**
     * Use this resource to get message with provided identifier. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-centrum-wiadomosci-XxWm2K890Fk#szczegolowe-informacje-o-wiadomosci" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-the-message-center-g05avyGlZUW#information-about-a-particular-message" target="_blank">EN</a>.
     *
     * @param string $messageId Identifier of message to be returned.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetMessageGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetMessageGETNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getMessageGET(string $messageId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetMessageGET($messageId), $fetch);
    }
    /**
     * Use this resource to add attachment declaration before uploading. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-centrum-wiadomosci-XxWm2K890Fk#deklaracja-zalacznika" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-the-message-center-g05avyGlZUW#attachment-declaration" target="_blank">EN</a>.
     *
     * @param \Jlonom\AllegroSDK\Model\NewAttachmentDeclaration $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\NewAttachmentDeclarationPOSTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\NewAttachmentDeclarationPOSTUnsupportedMediaTypeException
     * @throws \Jlonom\AllegroSDK\Exception\NewAttachmentDeclarationPOSTUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function newAttachmentDeclarationPOST(\Jlonom\AllegroSDK\Model\NewAttachmentDeclaration $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\NewAttachmentDeclarationPOST($requestBody), $fetch);
    }
    /**
     * Use this resource to download attachment with provided identifier. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-centrum-wiadomosci-XxWm2K890Fk#pobranie-zalacznika" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-the-message-center-g05avyGlZUW#attachment-related-to-the-message" target="_blank">EN</a>.
     *
     * @param string $attachmentId Identifier of the attachment that will be downloaded.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\DownloadAttachmentGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\DownloadAttachmentGETNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function downloadAttachmentGET(string $attachmentId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\DownloadAttachmentGET($attachmentId), $fetch);
    }
    /**
     * Use this resource to upload attachment using identifier that was declared. Read more: <a href="https://developer.allegro.pl/tutorials/jak-zarzadzac-centrum-wiadomosci-XxWm2K890Fk#dodanie-zalacznika" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/how-to-manage-the-message-center-g05avyGlZUW#add-an-attachment" target="_blank">EN</a>.
     *
     * @param string $attachmentId The identifier of attachment that will be uploaded.
     * @param string|resource|\Psr\Http\Message\StreamInterface $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\UploadAttachmentPUTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\UploadAttachmentPUTForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\UploadAttachmentPUTNotFoundException
     * @throws \Jlonom\AllegroSDK\Exception\UploadAttachmentPUTRequestEntityTooLargeException
     * @throws \Jlonom\AllegroSDK\Exception\UploadAttachmentPUTUnsupportedMediaTypeException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function uploadAttachmentPUT(string $attachmentId, $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\UploadAttachmentPUT($attachmentId, $requestBody), $fetch);
    }
    /**
     * Use this resource to get all customer returns filtered by query parameters. Read more: <a href="https://developer.allegro.pl/tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-pobrac-liste-zwrotow" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/process-orders-PgPMlWDr8Cv#how-to-retrieve-customer-returns-list" target="_blank">EN</a>. This resource is limited to 25 requests per second for a single user and 50 requests per second for clientId.
     *
     * @param array $queryParameters {
     *     @var string $customerReturnId One or more customer return id's.
     *     @var string $orderId One or more order id's.
     *     @var string $buyer.email One or more buyer emails.
     *     @var string $buyer.login One or more buyer logins.
     *     @var string $items.offerId One or more returned item offer id's.
     *     @var string $items.name One or more item names.
     *     @var string $parcels.waybill One or more waybill id's.
     *     @var string $parcels.transportingWaybill Waybill ids as generated by carriers physically transporting the parcel. Will be null if there's only one carrier involved in a parcel shipment.
     *     @var string $parcels.carrierId One or more carrier id's.
     *     @var string $parcels.transportingCarrierId Carrier id of a carrier physically transporting the parcel. Will be null if there's only one carrier involved in a parcel shipment.
     *     @var string $parcels.sender.phoneNumber One or more phone numbers.
     *     @var string $referenceNumber One or more reference numbers.
     *     @var string $from The ID of the last seen customer return. Customer returns created after the given customer return will be returned.
     *     @var string $createdAt.gte Date of the return in ISO 8601 format to search by greater or equal.
     *     @var string $createdAt.lte Date of the return in ISO 8601 format to search by lower or equal.
     *     @var string $marketplaceId The marketplace ID where operation was made. When the parameter is omitted, searches for operations with all marketplaces.
     *     @var string $status Current return timeline statuses. The allowed values are:
     * CREATED
     * DISPATCHED
     * IN_TRANSIT
     * DELIVERED
     * FINISHED
     * FINISHED_APT
     * REJECTED
     * COMMISSION_REFUND_CLAIMED
     * COMMISSION_REFUNDED
     * WAREHOUSE_DELIVERED
     * WAREHOUSE_VERIFICATION.
     *     @var int $limit Limit of customer returns per page.
     *     @var int $offset The offset of elements in the response.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomerReturns(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetCustomerReturns($queryParameters), $fetch);
    }
    /**
     * Use this resource to get customer returns by its identifier. Read more: <a href="https://developer.allegro.pl/tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-pobrac-szczegolowe-informacje-o-zwrocie" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/process-orders-PgPMlWDr8Cv#how-to-retrieve-detailed-information-about-customer-return" target="_blank">EN</a>.
     *
     * @param string $customerReturnId Id of the customer return.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomerReturnById(string $customerReturnId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetCustomerReturnById($customerReturnId), $fetch);
    }
    /**
     * Use this resource to reject customer return refund with provided reason. Read more: <a href="https://developer.allegro.pl/tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-odmowic-zwrotu-wplaty" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/process-orders-PgPMlWDr8Cv#how-to-reject-customer-return-refund" target="_blank">EN</a>.
     *
     * @param string $customerReturnId Id of the customer return.
     * @param \Jlonom\AllegroSDK\Model\CustomerReturnRefundRejectionRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function rejectCustomerReturnRefund(string $customerReturnId, \Jlonom\AllegroSDK\Model\CustomerReturnRefundRejectionRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\RejectCustomerReturnRefund($customerReturnId, $requestBody), $fetch);
    }
    /**
     * Use this resource to get a list of Advance Ship Notices. The list is ordered by **createdAt** property. Default **offset** is 0, default **limit** is 50. A list can be filtered by statuses. Multiple status query parameters are allowed. In such cases, filters are joined with **OR** logical operator. Read more: <a href="https://developer.allegro.pl/tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#jak-przegladac-utworzone-awizo" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#how-to-get-created-advance-ship-notices" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var int $offset The offset of elements in the response.
     *     @var int $limit Maximum number of elements in response.
     *     @var array $status A status of the Advance Ship Notices in the response.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/vnd.allegro.public.v1+json|application/json
     * @throws \Jlonom\AllegroSDK\Exception\GetAdvanceShipNoticesUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetAdvanceShipNoticesForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetAdvanceShipNoticesUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getAdvanceShipNotices(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetAdvanceShipNotices($queryParameters, $accept), $fetch);
    }
    /**
     * Use this resource to create an Advance Ship Notice. Read more: <a href="https://developer.allegro.pl/tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#utworz-draft-awizo" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#create-a-draft-of-the-advance-ship-notice" target="_blank">EN</a>.
     *
     * @param \Jlonom\AllegroSDK\Model\CreateAdvanceShipNoticeRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/vnd.allegro.public.v1+json|application/json
     * @throws \Jlonom\AllegroSDK\Exception\CreateAdvanceShipNoticeBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\CreateAdvanceShipNoticeUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\CreateAdvanceShipNoticeForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\CreateAdvanceShipNoticeUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createAdvanceShipNotice(\Jlonom\AllegroSDK\Model\CreateAdvanceShipNoticeRequest $requestBody, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\CreateAdvanceShipNotice($requestBody, $accept), $fetch);
    }
    /**
     * Use this resource to delete an Advance Ship Notice. Read more: <a href="https://developer.allegro.pl/tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#jak-usunac-awizo" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#how-to-delete-advance-ship-notice" target="_blank">EN</a>.
     *
     * @param string $id An identifier of the Advance Ship Notice to delete.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\DeleteAdvanceShipNoticeUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\DeleteAdvanceShipNoticeForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\DeleteAdvanceShipNoticeNotFoundException
     * @throws \Jlonom\AllegroSDK\Exception\DeleteAdvanceShipNoticeUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteAdvanceShipNotice(string $id = '0b488a23-bc99-470d-8842-0c585adf2479', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\DeleteAdvanceShipNotice($id), $fetch);
    }
    /**
     * Use this resource to get an Advance Ship Notice. Read more: <a href="https://developer.allegro.pl/tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#jak-przegladac-utworzone-awizo" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#how-to-get-created-advance-ship-notices" target="_blank">EN</a>.
     *
     * @param string $id The identifier of returned Advance Ship Notice.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetAdvanceShipNoticeUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetAdvanceShipNoticeForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetAdvanceShipNoticeNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getAdvanceShipNotice(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetAdvanceShipNotice($id), $fetch);
    }
    /**
    * Use this resource to update an Advance Ship Notice. Any content property update will clear labels property. Use Create labels command to create new labels for provided content.
    If a client wants to update read-only property, an error is returned (only in cases when sent value will be different than actual on the server). Read more: <a href="https://developer.allegro.pl/tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#uzupelnij-dane-o-awizo" target="_blank">PL</a> / <a href="https://developer.allegro.pl/one-fulfillment-by-allegro-4R9dXyMPlc9#complete-the-data-of-advance-ship-notice" target="_blank">EN</a>.
    *
    * @param string $id An identifier of Advance Ship Notice.
    * @param \Jlonom\AllegroSDK\Model\AdvanceShipNotice $requestBody 
    * @param array $headerParameters {
    *     @var string $if-match A current version of Advance Ship Notice (e.g. from etag header obtained via get).
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/vnd.allegro.public.v1+json|application/json
    * @throws \Jlonom\AllegroSDK\Exception\UpdateAdvanceShipNoticeBadRequestException
    * @throws \Jlonom\AllegroSDK\Exception\UpdateAdvanceShipNoticeUnauthorizedException
    * @throws \Jlonom\AllegroSDK\Exception\UpdateAdvanceShipNoticeForbiddenException
    * @throws \Jlonom\AllegroSDK\Exception\UpdateAdvanceShipNoticePreconditionFailedException
    * @throws \Jlonom\AllegroSDK\Exception\UpdateAdvanceShipNoticeUnprocessableEntityException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function updateAdvanceShipNotice(string $id, \Jlonom\AllegroSDK\Model\AdvanceShipNotice $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\UpdateAdvanceShipNotice($id, $requestBody, $headerParameters, $accept), $fetch);
    }
    /**
     * Use this resource to cancel an Advance Ship Notice in IN_TRANSIT status. Read more: <a href="https://developer.allegro.pl/tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#anuluj-awizo" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#cancel-advance-ship-notice" target="_blank">EN</a>.
     *
     * @param string $id An identifier of the Advance Ship Notice to cancel.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\CancelAdvanceShipNoticeUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\CancelAdvanceShipNoticeForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\CancelAdvanceShipNoticeNotFoundException
     * @throws \Jlonom\AllegroSDK\Exception\CancelAdvanceShipNoticeUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function cancelAdvanceShipNotice(string $id = '0b488a23-bc99-470d-8842-0c585adf2479', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\CancelAdvanceShipNotice($id), $fetch);
    }
    /**
     * Use this resource to get labels for Advance Ship Notice after being created with "create labels command". Read more: <a href="https://developer.allegro.pl/tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#wygeneruj-oznaczenia-na-kartony" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#create-labels-for-boxes" target="_blank">EN</a>.
     *
     * @param string $id An identifier of the Advance Ship Notice.
     * @param array $headerParameters {
     *     @var string $accept Content-type of generated labels.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/pdf|x-application/zpl
     * @throws \Jlonom\AllegroSDK\Exception\GetAdvanceShipNoticeLabelsUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetAdvanceShipNoticeLabelsForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetAdvanceShipNoticeLabelsNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getAdvanceShipNoticeLabels(string $id, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetAdvanceShipNoticeLabels($id, $headerParameters, $accept), $fetch);
    }
    /**
     * Use this resource to get submit status of the Advance Ship Notice. Read more: <a href="https://developer.allegro.pl/tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#zakoncz-edycje-i-wyslij-awizo" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#finish-editing-and-submit-the-advance-ship-notice" target="_blank">EN</a>.
     *
     * @param string $commandId An identifier of the command.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/vnd.allegro.public.v1+json|application/json
     * @throws \Jlonom\AllegroSDK\Exception\GetSubmitCommandUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetSubmitCommandForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetSubmitCommandUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getSubmitCommand(string $commandId = '882202c8-15ab-4a83-aeef-29ea505bf0d0', string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetSubmitCommand($commandId, $accept), $fetch);
    }
    /**
     * Use this resource to submit the Advance Ship Notice. After this operation, updates of the Advance Ship Notice are limited to selected properties only. See <a href="https://developer.allegro.pl/documentation#operation/updateSubmittedAdvanceShipNotice">PUT /fulfillment/advance-ship-notices/{id}/submitted</a>. Read more: <a href="https://developer.allegro.pl/tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#zakoncz-edycje-i-wyslij-awizo" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#finish-editing-and-submit-the-advance-ship-notice" target="_blank">EN</a>.
     *
     * @param string $commandId The identifier of the command.
     * @param \Jlonom\AllegroSDK\Model\SubmitCommand $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/vnd.allegro.public.v1+json|application/json
     * @throws \Jlonom\AllegroSDK\Exception\SubmitCommandUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\SubmitCommandUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function submitCommand(string $commandId = '725432a9-ae9e-43de-b8c5-7430606a81a4', \Jlonom\AllegroSDK\Model\SubmitCommand $requestBody, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\SubmitCommand($commandId, $requestBody, $accept), $fetch);
    }
    /**
    * Use this resource to update already submitted Advance Ship Notice. Update is allowed only when Advance Ship Notice is in "IN_TRANSIT" status. Modifications are limited to:
     - changing items quantity
     - removing items
     - changing handling unit amount
     - changing shipping courier id, name, tracking numbers or vehicle licence plate or third party delivery details (depending on the selected shipping method in the submitted advance ship notice)
    Handling unit's amount property update clears labels property. Use Create labels command to create new labels for provided content. Read more: <a href="https://developer.allegro.pl/tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#edytuj-zakonczone-awizo" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#edit-advance-ship-notice" target="_blank">EN</a>.
    *
    * @param string $id An identifier of Advance Ship Notice.
    * @param \Jlonom\AllegroSDK\Model\UpdateSubmittedAdvanceShipNoticeRequest $requestBody 
    * @param array $headerParameters {
    *     @var string $if-match A current version of Advance Ship Notice (e.g. from etag header obtained via get).
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/vnd.allegro.public.v1+json|application/json
    * @throws \Jlonom\AllegroSDK\Exception\UpdateSubmittedAdvanceShipNoticeBadRequestException
    * @throws \Jlonom\AllegroSDK\Exception\UpdateSubmittedAdvanceShipNoticeUnauthorizedException
    * @throws \Jlonom\AllegroSDK\Exception\UpdateSubmittedAdvanceShipNoticeForbiddenException
    * @throws \Jlonom\AllegroSDK\Exception\UpdateSubmittedAdvanceShipNoticePreconditionFailedException
    * @throws \Jlonom\AllegroSDK\Exception\UpdateSubmittedAdvanceShipNoticeUnprocessableEntityException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function updateSubmittedAdvanceShipNotice(string $id, \Jlonom\AllegroSDK\Model\UpdateSubmittedAdvanceShipNoticeRequest $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\UpdateSubmittedAdvanceShipNotice($id, $requestBody, $headerParameters, $accept), $fetch);
    }
    /**
    * Use this resource to get a list of the products belonging to the seller, which are in Allegro Warehouse. Read more: <a href="https://developer.allegro.pl/tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#jak-pobrac-aktualne-stany-magazynowe" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#get-available-stock" target="_blank">EN</a>.
    *
    * @param array $queryParameters {
    *     @var int $offset The offset of elements in the response. Ignored for text/csv content type.
    *     @var int $limit Maximum number of elements in response. Ignored for text/csv content type.
    *     @var string $phrase Filtering search results by product name.
    *     @var string $sort Defines how elements are sorted in response. Minus sign can be added to imply descending sort order. Ignored for text/csv content type.
    Possible values for the "sort" parameter:
     * -available - sorting by quantity of available products (descending)
     * available - sorting by quantity of available products (ascending)
     * -unfulfillable - sorting by quantity of unfulfillable products (descending)
     * unfulfillable - sorting by quantity of unfulfillable products (ascending)
     * -name - sorting by product’s name (descending)
     * name - sorting by product’s name (ascending)
     * lastWeekSalesAverage - sorting by product last week average sales (ascending)
     * -lastWeekSalesAverage - sorting by product last week average sales (descending)
     * reserve - sorting by reserve.outOfStockIn field (ascending)
     * -reserve - sorting by reserve.outOfStockIn field (descending)
     * lastThirtyDaysSalesSum - sorting by product last month sum sales (ascending)
     * -lastThirtyDaysSalesSum - sorting by product last month sum sales (descending)
     * storageFee - sorting by storage fee (ascending). The order by fee status is: NOT_APPLICABLE, then INCLUDED_IN_STORAGE_FEE, then PREDICTION, then CHARGED ordered by amountGross ascending.
     * -storageFee - sorting by storage fee (descending). The order by fee status is: CHARGED ordered by amountGross descending, then PREDICTION, then INCLUDED_IN_STORAGE_FEE, then NOT_APPLICABLE.
    *     @var string $productId Filtering search results by fulfillment product identifier. Ignored for text/csv content type.
    *     @var array $productAvailability Filtering search results by availability.
    *     @var string $productStatus Filtering search results by status.
    *     @var string $asnStatus Filtering search results by ASN status. Following values are allowed: SUBMITTED - Advanced Ship Notice document has been submitted and it contains a particular product. Only the products that have ASN with products on it are returned. NOT_FOUND - Advanced Ship Notice that contains a particular product was not found. It has not been submitted, may be expired, or products have already been delivered to the warehouse. Only the products that don't have related ASN with products on it are returned.
    *     @var int $outOfStockInFrom Filter by products with outOfStockIn greater than or equal.
    *     @var int $outOfStockInTo Filter by products with outOfStockIn less than or equal.
    * }
    * @param array $headerParameters {
    *     @var string $Accept-Language Expected language of product name translation.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/vnd.allegro.public.v1+json|text/csv|application/json
    * @throws \Jlonom\AllegroSDK\Exception\GetFulfillmentStockUnauthorizedException
    * @throws \Jlonom\AllegroSDK\Exception\GetFulfillmentStockForbiddenException
    * @throws \Jlonom\AllegroSDK\Exception\GetFulfillmentStockUnprocessableEntityException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function getFulfillmentStock(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetFulfillmentStock($queryParameters, $headerParameters, $accept), $fetch);
    }
    /**
     * Use this resource to get list of parcels and included items for a given order. Items include detailed information such as expiration dates and serial numbers. Read more: <a href="https://developer.allegro.pl/tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#jak-obslugiwac-zamowienia" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#how-to-handle-orders" target="_blank">EN</a>.
     *
     * @param string $orderId The Allegro's platform order identifier.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetFulfillmentOrderParcelsNotFoundException
     * @throws \Jlonom\AllegroSDK\Exception\GetFulfillmentOrderParcelsUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getFulfillmentOrderParcels(string $orderId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetFulfillmentOrderParcels($orderId), $fetch);
    }
    /**
     * Use this resource to get a list of products that can be added to Advance Ship Notice. The list contains products for which the seller has created offers and is ordered by product's name. Read more: <a href="https://developer.allegro.pl/tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#sprawdz-dostepne-produkty-do-awizacji" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#check-available-products-for-asn" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var int $offset The offset of elements in the response.
     *     @var int $limit Maximum number of elements in response.
     * }
     * @param array $headerParameters {
     *     @var string $Accept-Language Expected language of product name translation.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/vnd.allegro.public.v1+json|application/json
     * @throws \Jlonom\AllegroSDK\Exception\GetAvailableProductsUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetAvailableProductsForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetAvailableProductsUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getAvailableProducts(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetAvailableProducts($queryParameters, $headerParameters, $accept), $fetch);
    }
    /**
     * Use this resource to check the state of Advance Ship Notice receiving in Fulfillment Center in real time. The response contains a receiving progress and information about particular items - their quantities and conditions. While the Advance Ship Notice is in UNPACKING state, report is updated dynamically, which might result in different responses even at short time intervals. Read more: <a href="https://developer.allegro.pl/tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#sprawdz-postep-odbioru-awizo-przez-magazyn" target="_blank">PL</a> / <a href="https://developer.allegro.pl/tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#check-current-state-and-details-of-advance-ship-notice-receiving" target="_blank">EN</a>.
     *
     * @param string $id An identifier of advance ship notice.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetAdvanceShipNoticeReceivingStateUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetAdvanceShipNoticeReceivingStateForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetAdvanceShipNoticeReceivingStateNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getAdvanceShipNoticeReceivingState(string $id = '712fa46c-7d4a-4ba0-b094-b5d1d4f6155d', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetAdvanceShipNoticeReceivingState($id), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\GetTaxIdUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetTaxIdForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetTaxIdNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getTaxId(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\GetTaxId(), $fetch);
    }
    /**
     * Use this resource to add tax identification number. For international sellers only.
     *
     * @param \Jlonom\AllegroSDK\Model\TaxIdRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\AddTaxIdUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\AddTaxIdForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\AddTaxIdNotFoundException
     * @throws \Jlonom\AllegroSDK\Exception\AddTaxIdUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function addTaxId(\Jlonom\AllegroSDK\Model\TaxIdRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\AddTaxId($requestBody), $fetch);
    }
    /**
     * Use this resource to update tax identification number. For international sellers only.
     *
     * @param \Jlonom\AllegroSDK\Model\TaxIdRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jlonom\AllegroSDK\Exception\UpdateTaxIdUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\UpdateTaxIdForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\UpdateTaxIdUnprocessableEntityException
     * @throws \Jlonom\AllegroSDK\Exception\UpdateTaxIdNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateTaxId(\Jlonom\AllegroSDK\Model\TaxIdRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jlonom\AllegroSDK\Endpoint\UpdateTaxId($requestBody), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUriFactory()->createUri('https://api.{environment}');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jlonom\AllegroSDK\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}