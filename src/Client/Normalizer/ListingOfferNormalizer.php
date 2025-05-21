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
class ListingOfferNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\ListingOffer::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\ListingOffer::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\ListingOffer();
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
        if (\array_key_exists('seller', $data)) {
            $object->setSeller($this->denormalizer->denormalize($data['seller'], \Jlonom\AllegroSDK\Model\OfferSeller::class, 'json', $context));
            unset($data['seller']);
        }
        if (\array_key_exists('promotion', $data)) {
            $object->setPromotion($this->denormalizer->denormalize($data['promotion'], \Jlonom\AllegroSDK\Model\OfferPromotion::class, 'json', $context));
            unset($data['promotion']);
        }
        if (\array_key_exists('delivery', $data)) {
            $object->setDelivery($this->denormalizer->denormalize($data['delivery'], \Jlonom\AllegroSDK\Model\OfferDelivery::class, 'json', $context));
            unset($data['delivery']);
        }
        if (\array_key_exists('images', $data)) {
            $values = [];
            foreach ($data['images'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jlonom\AllegroSDK\Model\OfferImages::class, 'json', $context);
            }
            $object->setImages($values);
            unset($data['images']);
        }
        if (\array_key_exists('sellingMode', $data)) {
            $object->setSellingMode($this->denormalizer->denormalize($data['sellingMode'], \Jlonom\AllegroSDK\Model\OfferSellingMode::class, 'json', $context));
            unset($data['sellingMode']);
        }
        if (\array_key_exists('stock', $data)) {
            $object->setStock($this->denormalizer->denormalize($data['stock'], \Jlonom\AllegroSDK\Model\OfferStock::class, 'json', $context));
            unset($data['stock']);
        }
        if (\array_key_exists('vendor', $data)) {
            $object->setVendor($this->denormalizer->denormalize($data['vendor'], \Jlonom\AllegroSDK\Model\OfferVendor::class, 'json', $context));
            unset($data['vendor']);
        }
        if (\array_key_exists('category', $data)) {
            $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['category'] as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $object->setCategory($values_1);
            unset($data['category']);
        }
        if (\array_key_exists('publication', $data)) {
            $object->setPublication($this->denormalizer->denormalize($data['publication'], \Jlonom\AllegroSDK\Model\OfferPublication::class, 'json', $context));
            unset($data['publication']);
        }
        foreach ($data as $key_1 => $value_2) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_2;
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
        if ($data->isInitialized('seller') && null !== $data->getSeller()) {
            $dataArray['seller'] = $this->normalizer->normalize($data->getSeller(), 'json', $context);
        }
        if ($data->isInitialized('promotion') && null !== $data->getPromotion()) {
            $dataArray['promotion'] = $this->normalizer->normalize($data->getPromotion(), 'json', $context);
        }
        if ($data->isInitialized('delivery') && null !== $data->getDelivery()) {
            $dataArray['delivery'] = $this->normalizer->normalize($data->getDelivery(), 'json', $context);
        }
        if ($data->isInitialized('images') && null !== $data->getImages()) {
            $values = [];
            foreach ($data->getImages() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['images'] = $values;
        }
        if ($data->isInitialized('sellingMode') && null !== $data->getSellingMode()) {
            $dataArray['sellingMode'] = $this->normalizer->normalize($data->getSellingMode(), 'json', $context);
        }
        if ($data->isInitialized('stock') && null !== $data->getStock()) {
            $dataArray['stock'] = $this->normalizer->normalize($data->getStock(), 'json', $context);
        }
        if ($data->isInitialized('vendor') && null !== $data->getVendor()) {
            $dataArray['vendor'] = $this->normalizer->normalize($data->getVendor(), 'json', $context);
        }
        if ($data->isInitialized('category') && null !== $data->getCategory()) {
            $values_1 = [];
            foreach ($data->getCategory() as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $dataArray['category'] = $values_1;
        }
        if ($data->isInitialized('publication') && null !== $data->getPublication()) {
            $dataArray['publication'] = $this->normalizer->normalize($data->getPublication(), 'json', $context);
        }
        foreach ($data as $key_1 => $value_2) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jlonom\AllegroSDK\Model\ListingOffer::class => false];
    }
}