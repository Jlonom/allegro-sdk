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
class AvailablePromotionPackagesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\AvailablePromotionPackages::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\AvailablePromotionPackages::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\AvailablePromotionPackages();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('marketplaceId', $data)) {
            $object->setMarketplaceId($data['marketplaceId']);
            unset($data['marketplaceId']);
        }
        if (\array_key_exists('basePackages', $data)) {
            $values = [];
            foreach ($data['basePackages'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jlonom\AllegroSDK\Model\AvailablePromotionPackage::class, 'json', $context);
            }
            $object->setBasePackages($values);
            unset($data['basePackages']);
        }
        if (\array_key_exists('extraPackages', $data)) {
            $values_1 = [];
            foreach ($data['extraPackages'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jlonom\AllegroSDK\Model\AvailablePromotionPackage::class, 'json', $context);
            }
            $object->setExtraPackages($values_1);
            unset($data['extraPackages']);
        }
        if (\array_key_exists('additionalMarketplaces', $data)) {
            $values_2 = [];
            foreach ($data['additionalMarketplaces'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Jlonom\AllegroSDK\Model\MarketplaceAvailablePromotionPackages::class, 'json', $context);
            }
            $object->setAdditionalMarketplaces($values_2);
            unset($data['additionalMarketplaces']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('marketplaceId') && null !== $data->getMarketplaceId()) {
            $dataArray['marketplaceId'] = $data->getMarketplaceId();
        }
        if ($data->isInitialized('basePackages') && null !== $data->getBasePackages()) {
            $values = [];
            foreach ($data->getBasePackages() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['basePackages'] = $values;
        }
        if ($data->isInitialized('extraPackages') && null !== $data->getExtraPackages()) {
            $values_1 = [];
            foreach ($data->getExtraPackages() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['extraPackages'] = $values_1;
        }
        if ($data->isInitialized('additionalMarketplaces') && null !== $data->getAdditionalMarketplaces()) {
            $values_2 = [];
            foreach ($data->getAdditionalMarketplaces() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['additionalMarketplaces'] = $values_2;
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jlonom\AllegroSDK\Model\AvailablePromotionPackages::class => false];
    }
}