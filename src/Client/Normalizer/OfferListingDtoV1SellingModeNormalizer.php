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
class OfferListingDtoV1SellingModeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\OfferListingDtoV1SellingMode::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\OfferListingDtoV1SellingMode::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\OfferListingDtoV1SellingMode();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('format', $data)) {
            $object->setFormat($data['format']);
            unset($data['format']);
        }
        if (\array_key_exists('price', $data)) {
            $object->setPrice($this->denormalizer->denormalize($data['price'], \Jlonom\AllegroSDK\Model\BuyNowPrice::class, 'json', $context));
            unset($data['price']);
        }
        if (\array_key_exists('priceAutomation', $data)) {
            $object->setPriceAutomation($this->denormalizer->denormalize($data['priceAutomation'], \Jlonom\AllegroSDK\Model\PriceAutomation::class, 'json', $context));
            unset($data['priceAutomation']);
        }
        if (\array_key_exists('minimalPrice', $data)) {
            $object->setMinimalPrice($this->denormalizer->denormalize($data['minimalPrice'], \Jlonom\AllegroSDK\Model\MinimalPrice::class, 'json', $context));
            unset($data['minimalPrice']);
        }
        if (\array_key_exists('startingPrice', $data)) {
            $object->setStartingPrice($this->denormalizer->denormalize($data['startingPrice'], \Jlonom\AllegroSDK\Model\StartingPrice::class, 'json', $context));
            unset($data['startingPrice']);
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
        if ($data->isInitialized('priceAutomation') && null !== $data->getPriceAutomation()) {
            $dataArray['priceAutomation'] = $this->normalizer->normalize($data->getPriceAutomation(), 'json', $context);
        }
        if ($data->isInitialized('minimalPrice') && null !== $data->getMinimalPrice()) {
            $dataArray['minimalPrice'] = $this->normalizer->normalize($data->getMinimalPrice(), 'json', $context);
        }
        if ($data->isInitialized('startingPrice') && null !== $data->getStartingPrice()) {
            $dataArray['startingPrice'] = $this->normalizer->normalize($data->getStartingPrice(), 'json', $context);
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
        return [\Jlonom\AllegroSDK\Model\OfferListingDtoV1SellingMode::class => false];
    }
}