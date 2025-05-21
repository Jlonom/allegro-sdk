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
class GetSaleProductsResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\GetSaleProductsResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\GetSaleProductsResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\GetSaleProductsResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('products', $data)) {
            $values = [];
            foreach ($data['products'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jlonom\AllegroSDK\Model\BaseSaleProductResponseDto::class, 'json', $context);
            }
            $object->setProducts($values);
            unset($data['products']);
        }
        if (\array_key_exists('categories', $data)) {
            $object->setCategories($this->denormalizer->denormalize($data['categories'], \Jlonom\AllegroSDK\Model\SaleProductResponseCategoriesDto::class, 'json', $context));
            unset($data['categories']);
        }
        if (\array_key_exists('filters', $data)) {
            $values_1 = [];
            foreach ($data['filters'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jlonom\AllegroSDK\Model\ListingResponseFilters::class, 'json', $context);
            }
            $object->setFilters($values_1);
            unset($data['filters']);
        }
        if (\array_key_exists('nextPage', $data)) {
            $object->setNextPage($this->denormalizer->denormalize($data['nextPage'], \Jlonom\AllegroSDK\Model\GetSaleProductsResponseNextPage::class, 'json', $context));
            unset($data['nextPage']);
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
        $values = [];
        foreach ($data->getProducts() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['products'] = $values;
        if ($data->isInitialized('categories') && null !== $data->getCategories()) {
            $dataArray['categories'] = $this->normalizer->normalize($data->getCategories(), 'json', $context);
        }
        if ($data->isInitialized('filters') && null !== $data->getFilters()) {
            $values_1 = [];
            foreach ($data->getFilters() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['filters'] = $values_1;
        }
        if ($data->isInitialized('nextPage') && null !== $data->getNextPage()) {
            $dataArray['nextPage'] = $this->normalizer->normalize($data->getNextPage(), 'json', $context);
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
        return [\Jlonom\AllegroSDK\Model\GetSaleProductsResponse::class => false];
    }
}