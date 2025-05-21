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
class OfferListingDtoV1AdditionalMarketplaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\OfferListingDtoV1AdditionalMarketplace::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\OfferListingDtoV1AdditionalMarketplace::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\OfferListingDtoV1AdditionalMarketplace();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('publication', $data) && $data['publication'] !== null) {
            $object->setPublication($this->denormalizer->denormalize($data['publication'], \Jlonom\AllegroSDK\Model\OfferListingDtoV1AdditionalMarketplacePublication::class, 'json', $context));
            unset($data['publication']);
        }
        elseif (\array_key_exists('publication', $data) && $data['publication'] === null) {
            $object->setPublication(null);
        }
        if (\array_key_exists('sellingMode', $data) && $data['sellingMode'] !== null) {
            $object->setSellingMode($this->denormalizer->denormalize($data['sellingMode'], \Jlonom\AllegroSDK\Model\OfferListingDtoV1AdditionalMarketplaceSellingMode::class, 'json', $context));
            unset($data['sellingMode']);
        }
        elseif (\array_key_exists('sellingMode', $data) && $data['sellingMode'] === null) {
            $object->setSellingMode(null);
        }
        if (\array_key_exists('stats', $data)) {
            $object->setStats($this->denormalizer->denormalize($data['stats'], \Jlonom\AllegroSDK\Model\OfferListingDtoV1AdditionalMarketplaceStats::class, 'json', $context));
            unset($data['stats']);
        }
        if (\array_key_exists('stock', $data) && $data['stock'] !== null) {
            $object->setStock($this->denormalizer->denormalize($data['stock'], \Jlonom\AllegroSDK\Model\OfferListingDtoV1AdditionalMarketplaceStock::class, 'json', $context));
            unset($data['stock']);
        }
        elseif (\array_key_exists('stock', $data) && $data['stock'] === null) {
            $object->setStock(null);
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
        if ($data->isInitialized('publication') && null !== $data->getPublication()) {
            $dataArray['publication'] = $this->normalizer->normalize($data->getPublication(), 'json', $context);
        }
        if ($data->isInitialized('sellingMode') && null !== $data->getSellingMode()) {
            $dataArray['sellingMode'] = $this->normalizer->normalize($data->getSellingMode(), 'json', $context);
        }
        if ($data->isInitialized('stats') && null !== $data->getStats()) {
            $dataArray['stats'] = $this->normalizer->normalize($data->getStats(), 'json', $context);
        }
        if ($data->isInitialized('stock') && null !== $data->getStock()) {
            $dataArray['stock'] = $this->normalizer->normalize($data->getStock(), 'json', $context);
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
        return [\Jlonom\AllegroSDK\Model\OfferListingDtoV1AdditionalMarketplace::class => false];
    }
}