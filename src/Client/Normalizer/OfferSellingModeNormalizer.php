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
class OfferSellingModeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\OfferSellingMode::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\OfferSellingMode::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\OfferSellingMode();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('format', $data)) {
            $object->setFormat($data['format']);
            unset($data['format']);
        }
        if (\array_key_exists('price', $data)) {
            $object->setPrice($this->denormalizer->denormalize($data['price'], \Jlonom\AllegroSDK\Model\OfferPrice::class, 'json', $context));
            unset($data['price']);
        }
        if (\array_key_exists('fixedPrice', $data)) {
            $object->setFixedPrice($this->denormalizer->denormalize($data['fixedPrice'], \Jlonom\AllegroSDK\Model\OfferFixedPrice::class, 'json', $context));
            unset($data['fixedPrice']);
        }
        if (\array_key_exists('popularity', $data)) {
            $object->setPopularity($data['popularity']);
            unset($data['popularity']);
        }
        if (\array_key_exists('popularityRange', $data)) {
            $object->setPopularityRange($data['popularityRange']);
            unset($data['popularityRange']);
        }
        if (\array_key_exists('bidCount', $data)) {
            $object->setBidCount($data['bidCount']);
            unset($data['bidCount']);
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
        if ($data->isInitialized('format') && null !== $data->getFormat()) {
            $dataArray['format'] = $data->getFormat();
        }
        if ($data->isInitialized('price') && null !== $data->getPrice()) {
            $dataArray['price'] = $this->normalizer->normalize($data->getPrice(), 'json', $context);
        }
        if ($data->isInitialized('fixedPrice') && null !== $data->getFixedPrice()) {
            $dataArray['fixedPrice'] = $this->normalizer->normalize($data->getFixedPrice(), 'json', $context);
        }
        if ($data->isInitialized('popularity') && null !== $data->getPopularity()) {
            $dataArray['popularity'] = $data->getPopularity();
        }
        if ($data->isInitialized('popularityRange') && null !== $data->getPopularityRange()) {
            $dataArray['popularityRange'] = $data->getPopularityRange();
        }
        if ($data->isInitialized('bidCount') && null !== $data->getBidCount()) {
            $dataArray['bidCount'] = $data->getBidCount();
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
        return [\Jlonom\AllegroSDK\Model\OfferSellingMode::class => false];
    }
}