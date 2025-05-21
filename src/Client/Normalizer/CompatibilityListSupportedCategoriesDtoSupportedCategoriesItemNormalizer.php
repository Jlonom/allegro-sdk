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
class CompatibilityListSupportedCategoriesDtoSupportedCategoriesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\CompatibilityListSupportedCategoriesDtoSupportedCategoriesItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\CompatibilityListSupportedCategoriesDtoSupportedCategoriesItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\CompatibilityListSupportedCategoriesDtoSupportedCategoriesItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('categoryId', $data)) {
            $object->setCategoryId($data['categoryId']);
            unset($data['categoryId']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('itemsType', $data)) {
            $object->setItemsType($data['itemsType']);
            unset($data['itemsType']);
        }
        if (\array_key_exists('inputType', $data)) {
            $object->setInputType($data['inputType']);
            unset($data['inputType']);
        }
        if (\array_key_exists('validationRules', $data)) {
            $object->setValidationRules($this->denormalizer->denormalize($data['validationRules'], \Jlonom\AllegroSDK\Model\CompatibilityListSupportedCategoriesDtoSupportedCategoriesItemValidationRules::class, 'json', $context));
            unset($data['validationRules']);
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
        if ($data->isInitialized('categoryId') && null !== $data->getCategoryId()) {
            $dataArray['categoryId'] = $data->getCategoryId();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('itemsType') && null !== $data->getItemsType()) {
            $dataArray['itemsType'] = $data->getItemsType();
        }
        if ($data->isInitialized('inputType') && null !== $data->getInputType()) {
            $dataArray['inputType'] = $data->getInputType();
        }
        if ($data->isInitialized('validationRules') && null !== $data->getValidationRules()) {
            $dataArray['validationRules'] = $this->normalizer->normalize($data->getValidationRules(), 'json', $context);
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
        return [\Jlonom\AllegroSDK\Model\CompatibilityListSupportedCategoriesDtoSupportedCategoriesItem::class => false];
    }
}