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
class OfferListingDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\OfferListingDto::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\OfferListingDto::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\OfferListingDto();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('category', $data)) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['category'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setCategory($values);
            unset($data['category']);
        }
        if (\array_key_exists('primaryImage', $data)) {
            $object->setPrimaryImage($this->denormalizer->denormalize($data['primaryImage'], \Jlonom\AllegroSDK\Model\OfferListingDtoImage::class, 'json', $context));
            unset($data['primaryImage']);
        }
        if (\array_key_exists('sellingMode', $data)) {
            $object->setSellingMode($this->denormalizer->denormalize($data['sellingMode'], \Jlonom\AllegroSDK\Model\OfferListingDtoV1SellingMode::class, 'json', $context));
            unset($data['sellingMode']);
        }
        if (\array_key_exists('saleInfo', $data)) {
            $object->setSaleInfo($this->denormalizer->denormalize($data['saleInfo'], \Jlonom\AllegroSDK\Model\OfferListingDtoV1SaleInfo::class, 'json', $context));
            unset($data['saleInfo']);
        }
        if (\array_key_exists('stock', $data)) {
            $object->setStock($this->denormalizer->denormalize($data['stock'], \Jlonom\AllegroSDK\Model\OfferListingDtoV1Stock::class, 'json', $context));
            unset($data['stock']);
        }
        if (\array_key_exists('stats', $data) && $data['stats'] !== null) {
            $object->setStats($this->denormalizer->denormalize($data['stats'], \Jlonom\AllegroSDK\Model\OfferListingDtoV1Stats::class, 'json', $context));
            unset($data['stats']);
        }
        elseif (\array_key_exists('stats', $data) && $data['stats'] === null) {
            $object->setStats(null);
        }
        if (\array_key_exists('publication', $data)) {
            $object->setPublication($this->denormalizer->denormalize($data['publication'], \Jlonom\AllegroSDK\Model\OfferListingDtoV1Publication::class, 'json', $context));
            unset($data['publication']);
        }
        if (\array_key_exists('afterSalesServices', $data)) {
            $object->setAfterSalesServices($this->denormalizer->denormalize($data['afterSalesServices'], \Jlonom\AllegroSDK\Model\AfterSalesServices::class, 'json', $context));
            unset($data['afterSalesServices']);
        }
        if (\array_key_exists('additionalServices', $data)) {
            $object->setAdditionalServices($this->denormalizer->denormalize($data['additionalServices'], \Jlonom\AllegroSDK\Model\OfferAdditionalServices::class, 'json', $context));
            unset($data['additionalServices']);
        }
        if (\array_key_exists('external', $data)) {
            $object->setExternal($this->denormalizer->denormalize($data['external'], \Jlonom\AllegroSDK\Model\ExternalId::class, 'json', $context));
            unset($data['external']);
        }
        if (\array_key_exists('delivery', $data)) {
            $object->setDelivery($this->denormalizer->denormalize($data['delivery'], \Jlonom\AllegroSDK\Model\OfferListingDtoV1Delivery::class, 'json', $context));
            unset($data['delivery']);
        }
        if (\array_key_exists('b2b', $data)) {
            $object->setB2b($this->denormalizer->denormalize($data['b2b'], \Jlonom\AllegroSDK\Model\OfferListingDtoV1B2b::class, 'json', $context));
            unset($data['b2b']);
        }
        if (\array_key_exists('fundraisingCampaign', $data)) {
            $object->setFundraisingCampaign($this->denormalizer->denormalize($data['fundraisingCampaign'], \Jlonom\AllegroSDK\Model\JustId::class, 'json', $context));
            unset($data['fundraisingCampaign']);
        }
        if (\array_key_exists('additionalMarketplaces', $data)) {
            $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['additionalMarketplaces'] as $key_1 => $value_1) {
                $values_1[$key_1] = $this->denormalizer->denormalize($value_1, \Jlonom\AllegroSDK\Model\OfferListingDtoV1AdditionalMarketplace::class, 'json', $context);
            }
            $object->setAdditionalMarketplaces($values_1);
            unset($data['additionalMarketplaces']);
        }
        foreach ($data as $key_2 => $value_2) {
            if (preg_match('/.*/', (string) $key_2)) {
                $object[$key_2] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('category') && null !== $data->getCategory()) {
            $values = [];
            foreach ($data->getCategory() as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['category'] = $values;
        }
        if ($data->isInitialized('primaryImage') && null !== $data->getPrimaryImage()) {
            $dataArray['primaryImage'] = $this->normalizer->normalize($data->getPrimaryImage(), 'json', $context);
        }
        if ($data->isInitialized('sellingMode') && null !== $data->getSellingMode()) {
            $dataArray['sellingMode'] = $this->normalizer->normalize($data->getSellingMode(), 'json', $context);
        }
        if ($data->isInitialized('saleInfo') && null !== $data->getSaleInfo()) {
            $dataArray['saleInfo'] = $this->normalizer->normalize($data->getSaleInfo(), 'json', $context);
        }
        if ($data->isInitialized('stock') && null !== $data->getStock()) {
            $dataArray['stock'] = $this->normalizer->normalize($data->getStock(), 'json', $context);
        }
        if ($data->isInitialized('stats') && null !== $data->getStats()) {
            $dataArray['stats'] = $this->normalizer->normalize($data->getStats(), 'json', $context);
        }
        if ($data->isInitialized('publication') && null !== $data->getPublication()) {
            $dataArray['publication'] = $this->normalizer->normalize($data->getPublication(), 'json', $context);
        }
        if ($data->isInitialized('afterSalesServices') && null !== $data->getAfterSalesServices()) {
            $dataArray['afterSalesServices'] = $this->normalizer->normalize($data->getAfterSalesServices(), 'json', $context);
        }
        if ($data->isInitialized('additionalServices') && null !== $data->getAdditionalServices()) {
            $dataArray['additionalServices'] = $this->normalizer->normalize($data->getAdditionalServices(), 'json', $context);
        }
        if ($data->isInitialized('external') && null !== $data->getExternal()) {
            $dataArray['external'] = $this->normalizer->normalize($data->getExternal(), 'json', $context);
        }
        if ($data->isInitialized('delivery') && null !== $data->getDelivery()) {
            $dataArray['delivery'] = $this->normalizer->normalize($data->getDelivery(), 'json', $context);
        }
        if ($data->isInitialized('b2b') && null !== $data->getB2b()) {
            $dataArray['b2b'] = $this->normalizer->normalize($data->getB2b(), 'json', $context);
        }
        if ($data->isInitialized('fundraisingCampaign') && null !== $data->getFundraisingCampaign()) {
            $dataArray['fundraisingCampaign'] = $this->normalizer->normalize($data->getFundraisingCampaign(), 'json', $context);
        }
        if ($data->isInitialized('additionalMarketplaces') && null !== $data->getAdditionalMarketplaces()) {
            $values_1 = [];
            foreach ($data->getAdditionalMarketplaces() as $key_1 => $value_1) {
                $values_1[$key_1] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['additionalMarketplaces'] = $values_1;
        }
        foreach ($data as $key_2 => $value_2) {
            if (preg_match('/.*/', (string) $key_2)) {
                $dataArray[$key_2] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jlonom\AllegroSDK\Model\OfferListingDto::class => false];
    }
}