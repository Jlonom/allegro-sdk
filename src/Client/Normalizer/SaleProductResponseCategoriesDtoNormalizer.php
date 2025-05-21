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
class SaleProductResponseCategoriesDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\SaleProductResponseCategoriesDto::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\SaleProductResponseCategoriesDto::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\SaleProductResponseCategoriesDto();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('subcategories', $data)) {
            $values = [];
            foreach ($data['subcategories'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jlonom\AllegroSDK\Model\ProductsCategorySubcategories::class, 'json', $context);
            }
            $object->setSubcategories($values);
            unset($data['subcategories']);
        }
        if (\array_key_exists('path', $data)) {
            $values_1 = [];
            foreach ($data['path'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jlonom\AllegroSDK\Model\ProductsCategoryPath::class, 'json', $context);
            }
            $object->setPath($values_1);
            unset($data['path']);
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
        if ($data->isInitialized('subcategories') && null !== $data->getSubcategories()) {
            $values = [];
            foreach ($data->getSubcategories() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['subcategories'] = $values;
        }
        if ($data->isInitialized('path') && null !== $data->getPath()) {
            $values_1 = [];
            foreach ($data->getPath() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['path'] = $values_1;
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
        return [\Jlonom\AllegroSDK\Model\SaleProductResponseCategoriesDto::class => false];
    }
}