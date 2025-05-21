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
class OfferPromoOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\OfferPromoOptions::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\OfferPromoOptions::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\OfferPromoOptions();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('offerId', $data)) {
            $object->setOfferId($data['offerId']);
            unset($data['offerId']);
        }
        if (\array_key_exists('marketplaceId', $data)) {
            $object->setMarketplaceId($data['marketplaceId']);
            unset($data['marketplaceId']);
        }
        if (\array_key_exists('basePackage', $data)) {
            $object->setBasePackage($this->denormalizer->denormalize($data['basePackage'], \Jlonom\AllegroSDK\Model\OfferPromoOption::class, 'json', $context));
            unset($data['basePackage']);
        }
        if (\array_key_exists('extraPackages', $data)) {
            $values = [];
            foreach ($data['extraPackages'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jlonom\AllegroSDK\Model\OfferPromoOption::class, 'json', $context);
            }
            $object->setExtraPackages($values);
            unset($data['extraPackages']);
        }
        if (\array_key_exists('pendingChanges', $data)) {
            $object->setPendingChanges($this->denormalizer->denormalize($data['pendingChanges'], \Jlonom\AllegroSDK\Model\OfferPromoOptionsPendingChanges::class, 'json', $context));
            unset($data['pendingChanges']);
        }
        if (\array_key_exists('additionalMarketplaces', $data)) {
            $values_1 = [];
            foreach ($data['additionalMarketplaces'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jlonom\AllegroSDK\Model\MarketplaceOfferPromoOption::class, 'json', $context);
            }
            $object->setAdditionalMarketplaces($values_1);
            unset($data['additionalMarketplaces']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('offerId') && null !== $data->getOfferId()) {
            $dataArray['offerId'] = $data->getOfferId();
        }
        if ($data->isInitialized('marketplaceId') && null !== $data->getMarketplaceId()) {
            $dataArray['marketplaceId'] = $data->getMarketplaceId();
        }
        if ($data->isInitialized('basePackage') && null !== $data->getBasePackage()) {
            $dataArray['basePackage'] = $this->normalizer->normalize($data->getBasePackage(), 'json', $context);
        }
        if ($data->isInitialized('extraPackages') && null !== $data->getExtraPackages()) {
            $values = [];
            foreach ($data->getExtraPackages() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['extraPackages'] = $values;
        }
        if ($data->isInitialized('pendingChanges') && null !== $data->getPendingChanges()) {
            $dataArray['pendingChanges'] = $this->normalizer->normalize($data->getPendingChanges(), 'json', $context);
        }
        if ($data->isInitialized('additionalMarketplaces') && null !== $data->getAdditionalMarketplaces()) {
            $values_1 = [];
            foreach ($data->getAdditionalMarketplaces() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['additionalMarketplaces'] = $values_1;
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jlonom\AllegroSDK\Model\OfferPromoOptions::class => false];
    }
}