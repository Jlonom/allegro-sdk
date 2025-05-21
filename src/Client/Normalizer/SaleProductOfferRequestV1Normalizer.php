<?php

namespace Jlonom\AllegroSDK\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jlonom\AllegroSDK\Runtime\Normalizer\CheckArray;
use Jlonom\AllegroSDK\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class SaleProductOfferRequestV1Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\SaleProductOfferRequestV1::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\SaleProductOfferRequestV1::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\SaleProductOfferRequestV1();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('productSet', $data)) {
            $values = [];
            foreach ($data['productSet'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jlonom\AllegroSDK\Model\SaleProductOfferRequestV1productSetItem::class, 'json', $context);
            }
            $object->setProductSet($values);
            unset($data['productSet']);
        }
        if (\array_key_exists('b2b', $data)) {
            $object->setB2b($this->denormalizer->denormalize($data['b2b'], \Jlonom\AllegroSDK\Model\B2b::class, 'json', $context));
            unset($data['b2b']);
        }
        if (\array_key_exists('attachments', $data)) {
            $values_1 = [];
            foreach ($data['attachments'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jlonom\AllegroSDK\Model\ProductOfferAttachmentItem::class, 'json', $context);
            }
            $object->setAttachments($values_1);
            unset($data['attachments']);
        }
        if (\array_key_exists('fundraisingCampaign', $data)) {
            $object->setFundraisingCampaign($this->denormalizer->denormalize($data['fundraisingCampaign'], \Jlonom\AllegroSDK\Model\ProductOfferFundraisingCampaignRequest::class, 'json', $context));
            unset($data['fundraisingCampaign']);
        }
        if (\array_key_exists('additionalServices', $data)) {
            $object->setAdditionalServices($this->denormalizer->denormalize($data['additionalServices'], \Jlonom\AllegroSDK\Model\ProductOfferAdditionalServicesRequest::class, 'json', $context));
            unset($data['additionalServices']);
        }
        if (\array_key_exists('stock', $data)) {
            $object->setStock($this->denormalizer->denormalize($data['stock'], \Jlonom\AllegroSDK\Model\SaleProductOffersRequestStock::class, 'json', $context));
            unset($data['stock']);
        }
        if (\array_key_exists('delivery', $data)) {
            $object->setDelivery($this->denormalizer->denormalize($data['delivery'], \Jlonom\AllegroSDK\Model\SaleProductOfferRequestBasedelivery::class, 'json', $context));
            unset($data['delivery']);
        }
        if (\array_key_exists('publication', $data)) {
            $object->setPublication($this->denormalizer->denormalize($data['publication'], \Jlonom\AllegroSDK\Model\SaleProductOfferRequestBasepublication::class, 'json', $context));
            unset($data['publication']);
        }
        if (\array_key_exists('additionalMarketplaces', $data)) {
            $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['additionalMarketplaces'] as $key => $value_2) {
                $values_2[$key] = $this->denormalizer->denormalize($value_2, \Jlonom\AllegroSDK\Model\AdditionalMarketplacesRequestItem::class, 'json', $context);
            }
            $object->setAdditionalMarketplaces($values_2);
            unset($data['additionalMarketplaces']);
        }
        if (\array_key_exists('compatibilityList', $data)) {
            $object->setCompatibilityList($this->denormalizer->denormalize($data['compatibilityList'], \Jlonom\AllegroSDK\Model\SaleProductOfferRequestV1compatibilityList::class, 'json', $context));
            unset($data['compatibilityList']);
        }
        if (\array_key_exists('language', $data)) {
            $object->setLanguage($data['language']);
            unset($data['language']);
        }
        if (\array_key_exists('category', $data)) {
            $values_3 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['category'] as $key_1 => $value_3) {
                $values_3[$key_1] = $value_3;
            }
            $object->setCategory($values_3);
            unset($data['category']);
        }
        if (\array_key_exists('parameters', $data)) {
            $values_4 = [];
            foreach ($data['parameters'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Jlonom\AllegroSDK\Model\ParameterProductOfferRequest::class, 'json', $context);
            }
            $object->setParameters($values_4);
            unset($data['parameters']);
        }
        if (\array_key_exists('afterSalesServices', $data)) {
            $object->setAfterSalesServices($this->denormalizer->denormalize($data['afterSalesServices'], \Jlonom\AllegroSDK\Model\AfterSalesServicesProductOfferRequest::class, 'json', $context));
            unset($data['afterSalesServices']);
        }
        if (\array_key_exists('sizeTable', $data)) {
            $object->setSizeTable($this->denormalizer->denormalize($data['sizeTable'], \Jlonom\AllegroSDK\Model\SizeTable::class, 'json', $context));
            unset($data['sizeTable']);
        }
        if (\array_key_exists('contact', $data)) {
            $object->setContact($this->denormalizer->denormalize($data['contact'], \Jlonom\AllegroSDK\Model\SaleProductOfferRequestBasecontact::class, 'json', $context));
            unset($data['contact']);
        }
        if (\array_key_exists('discounts', $data)) {
            $object->setDiscounts($this->denormalizer->denormalize($data['discounts'], \Jlonom\AllegroSDK\Model\DiscountsProductOfferRequest::class, 'json', $context));
            unset($data['discounts']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('payments', $data)) {
            $object->setPayments($this->denormalizer->denormalize($data['payments'], \Jlonom\AllegroSDK\Model\Payments::class, 'json', $context));
            unset($data['payments']);
        }
        if (\array_key_exists('sellingMode', $data)) {
            $object->setSellingMode($this->denormalizer->denormalize($data['sellingMode'], \Jlonom\AllegroSDK\Model\SellingMode::class, 'json', $context));
            unset($data['sellingMode']);
        }
        if (\array_key_exists('location', $data)) {
            $object->setLocation($this->denormalizer->denormalize($data['location'], \Jlonom\AllegroSDK\Model\Location::class, 'json', $context));
            unset($data['location']);
        }
        if (\array_key_exists('images', $data)) {
            $values_5 = [];
            foreach ($data['images'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setImages($values_5);
            unset($data['images']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($this->denormalizer->denormalize($data['description'], \Jlonom\AllegroSDK\Model\StandardizedDescription::class, 'json', $context));
            unset($data['description']);
        }
        if (\array_key_exists('external', $data)) {
            $object->setExternal($this->denormalizer->denormalize($data['external'], \Jlonom\AllegroSDK\Model\ExternalId::class, 'json', $context));
            unset($data['external']);
        }
        if (\array_key_exists('taxSettings', $data)) {
            $object->setTaxSettings($this->denormalizer->denormalize($data['taxSettings'], \Jlonom\AllegroSDK\Model\OfferTaxSettings::class, 'json', $context));
            unset($data['taxSettings']);
        }
        if (\array_key_exists('messageToSellerSettings', $data)) {
            $object->setMessageToSellerSettings($this->denormalizer->denormalize($data['messageToSellerSettings'], \Jlonom\AllegroSDK\Model\MessageToSellerSettings::class, 'json', $context));
            unset($data['messageToSellerSettings']);
        }
        foreach ($data as $key_2 => $value_6) {
            if (preg_match('/.*/', (string) $key_2)) {
                $object[$key_2] = $value_6;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('productSet') && null !== $data->getProductSet()) {
            $values = [];
            foreach ($data->getProductSet() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['productSet'] = $values;
        }
        if ($data->isInitialized('b2b') && null !== $data->getB2b()) {
            $dataArray['b2b'] = $this->normalizer->normalize($data->getB2b(), 'json', $context);
        }
        if ($data->isInitialized('attachments') && null !== $data->getAttachments()) {
            $values_1 = [];
            foreach ($data->getAttachments() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['attachments'] = $values_1;
        }
        if ($data->isInitialized('fundraisingCampaign') && null !== $data->getFundraisingCampaign()) {
            $dataArray['fundraisingCampaign'] = $this->normalizer->normalize($data->getFundraisingCampaign(), 'json', $context);
        }
        if ($data->isInitialized('additionalServices') && null !== $data->getAdditionalServices()) {
            $dataArray['additionalServices'] = $this->normalizer->normalize($data->getAdditionalServices(), 'json', $context);
        }
        $dataArray['stock'] = $this->normalizer->normalize($data->getStock(), 'json', $context);
        if ($data->isInitialized('delivery') && null !== $data->getDelivery()) {
            $dataArray['delivery'] = $this->normalizer->normalize($data->getDelivery(), 'json', $context);
        }
        if ($data->isInitialized('publication') && null !== $data->getPublication()) {
            $dataArray['publication'] = $this->normalizer->normalize($data->getPublication(), 'json', $context);
        }
        if ($data->isInitialized('additionalMarketplaces') && null !== $data->getAdditionalMarketplaces()) {
            $values_2 = [];
            foreach ($data->getAdditionalMarketplaces() as $key => $value_2) {
                $values_2[$key] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['additionalMarketplaces'] = $values_2;
        }
        if ($data->isInitialized('compatibilityList') && null !== $data->getCompatibilityList()) {
            $dataArray['compatibilityList'] = $this->normalizer->normalize($data->getCompatibilityList(), 'json', $context);
        }
        if ($data->isInitialized('language') && null !== $data->getLanguage()) {
            $dataArray['language'] = $data->getLanguage();
        }
        if ($data->isInitialized('category') && null !== $data->getCategory()) {
            $values_3 = [];
            foreach ($data->getCategory() as $key_1 => $value_3) {
                $values_3[$key_1] = $value_3;
            }
            $dataArray['category'] = $values_3;
        }
        if ($data->isInitialized('parameters') && null !== $data->getParameters()) {
            $values_4 = [];
            foreach ($data->getParameters() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $dataArray['parameters'] = $values_4;
        }
        if ($data->isInitialized('afterSalesServices') && null !== $data->getAfterSalesServices()) {
            $dataArray['afterSalesServices'] = $this->normalizer->normalize($data->getAfterSalesServices(), 'json', $context);
        }
        if ($data->isInitialized('sizeTable') && null !== $data->getSizeTable()) {
            $dataArray['sizeTable'] = $this->normalizer->normalize($data->getSizeTable(), 'json', $context);
        }
        if ($data->isInitialized('contact') && null !== $data->getContact()) {
            $dataArray['contact'] = $this->normalizer->normalize($data->getContact(), 'json', $context);
        }
        if ($data->isInitialized('discounts') && null !== $data->getDiscounts()) {
            $dataArray['discounts'] = $this->normalizer->normalize($data->getDiscounts(), 'json', $context);
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('payments') && null !== $data->getPayments()) {
            $dataArray['payments'] = $this->normalizer->normalize($data->getPayments(), 'json', $context);
        }
        if ($data->isInitialized('sellingMode') && null !== $data->getSellingMode()) {
            $dataArray['sellingMode'] = $this->normalizer->normalize($data->getSellingMode(), 'json', $context);
        }
        if ($data->isInitialized('location') && null !== $data->getLocation()) {
            $dataArray['location'] = $this->normalizer->normalize($data->getLocation(), 'json', $context);
        }
        if ($data->isInitialized('images') && null !== $data->getImages()) {
            $values_5 = [];
            foreach ($data->getImages() as $value_5) {
                $values_5[] = $value_5;
            }
            $dataArray['images'] = $values_5;
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $this->normalizer->normalize($data->getDescription(), 'json', $context);
        }
        if ($data->isInitialized('external') && null !== $data->getExternal()) {
            $dataArray['external'] = $this->normalizer->normalize($data->getExternal(), 'json', $context);
        }
        if ($data->isInitialized('taxSettings') && null !== $data->getTaxSettings()) {
            $dataArray['taxSettings'] = $this->normalizer->normalize($data->getTaxSettings(), 'json', $context);
        }
        if ($data->isInitialized('messageToSellerSettings') && null !== $data->getMessageToSellerSettings()) {
            $dataArray['messageToSellerSettings'] = $this->normalizer->normalize($data->getMessageToSellerSettings(), 'json', $context);
        }
        foreach ($data as $key_2 => $value_6) {
            if (preg_match('/.*/', (string) $key_2)) {
                $dataArray[$key_2] = $value_6;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jlonom\AllegroSDK\Model\SaleProductOfferRequestV1::class => false];
    }
}