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
class ListingResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\ListingResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\ListingResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\ListingResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('items', $data)) {
            $object->setItems($this->denormalizer->denormalize($data['items'], \Jlonom\AllegroSDK\Model\ListingResponseOffers::class, 'json', $context));
            unset($data['items']);
        }
        if (\array_key_exists('categories', $data)) {
            $object->setCategories($this->denormalizer->denormalize($data['categories'], \Jlonom\AllegroSDK\Model\ListingResponseCategories::class, 'json', $context));
            unset($data['categories']);
        }
        if (\array_key_exists('filters', $data)) {
            $values = [];
            foreach ($data['filters'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jlonom\AllegroSDK\Model\ListingResponseFilters::class, 'json', $context);
            }
            $object->setFilters($values);
            unset($data['filters']);
        }
        if (\array_key_exists('searchMeta', $data)) {
            $object->setSearchMeta($this->denormalizer->denormalize($data['searchMeta'], \Jlonom\AllegroSDK\Model\ListingResponseSearchMeta::class, 'json', $context));
            unset($data['searchMeta']);
        }
        if (\array_key_exists('sort', $data)) {
            $values_1 = [];
            foreach ($data['sort'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jlonom\AllegroSDK\Model\ListingResponseSort::class, 'json', $context);
            }
            $object->setSort($values_1);
            unset($data['sort']);
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
        if ($data->isInitialized('items') && null !== $data->getItems()) {
            $dataArray['items'] = $this->normalizer->normalize($data->getItems(), 'json', $context);
        }
        if ($data->isInitialized('categories') && null !== $data->getCategories()) {
            $dataArray['categories'] = $this->normalizer->normalize($data->getCategories(), 'json', $context);
        }
        if ($data->isInitialized('filters') && null !== $data->getFilters()) {
            $values = [];
            foreach ($data->getFilters() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['filters'] = $values;
        }
        if ($data->isInitialized('searchMeta') && null !== $data->getSearchMeta()) {
            $dataArray['searchMeta'] = $this->normalizer->normalize($data->getSearchMeta(), 'json', $context);
        }
        if ($data->isInitialized('sort') && null !== $data->getSort()) {
            $values_1 = [];
            foreach ($data->getSort() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['sort'] = $values_1;
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
        return [\Jlonom\AllegroSDK\Model\ListingResponse::class => false];
    }
}