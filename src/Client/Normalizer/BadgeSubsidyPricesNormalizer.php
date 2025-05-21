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
class BadgeSubsidyPricesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\BadgeSubsidyPrices::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\BadgeSubsidyPrices::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\BadgeSubsidyPrices();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('targetPrice', $data)) {
            $object->setTargetPrice($this->denormalizer->denormalize($data['targetPrice'], \Jlonom\AllegroSDK\Model\BadgeApplicationSubsidyTargetPrice::class, 'json', $context));
            unset($data['targetPrice']);
        }
        if (\array_key_exists('sellerPrice', $data)) {
            $object->setSellerPrice($this->denormalizer->denormalize($data['sellerPrice'], \Jlonom\AllegroSDK\Model\BadgeApplicationSubsidySellerPrice::class, 'json', $context));
            unset($data['sellerPrice']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('targetPrice') && null !== $data->getTargetPrice()) {
            $dataArray['targetPrice'] = $this->normalizer->normalize($data->getTargetPrice(), 'json', $context);
        }
        if ($data->isInitialized('sellerPrice') && null !== $data->getSellerPrice()) {
            $dataArray['sellerPrice'] = $this->normalizer->normalize($data->getSellerPrice(), 'json', $context);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jlonom\AllegroSDK\Model\BadgeSubsidyPrices::class => false];
    }
}