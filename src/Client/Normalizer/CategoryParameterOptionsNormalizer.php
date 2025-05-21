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
class CategoryParameterOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\CategoryParameterOptions::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\CategoryParameterOptions::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\CategoryParameterOptions();
        if (\array_key_exists('variantsAllowed', $data) && \is_int($data['variantsAllowed'])) {
            $data['variantsAllowed'] = (bool) $data['variantsAllowed'];
        }
        if (\array_key_exists('variantsEqual', $data) && \is_int($data['variantsEqual'])) {
            $data['variantsEqual'] = (bool) $data['variantsEqual'];
        }
        if (\array_key_exists('describesProduct', $data) && \is_int($data['describesProduct'])) {
            $data['describesProduct'] = (bool) $data['describesProduct'];
        }
        if (\array_key_exists('customValuesEnabled', $data) && \is_int($data['customValuesEnabled'])) {
            $data['customValuesEnabled'] = (bool) $data['customValuesEnabled'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('variantsAllowed', $data)) {
            $object->setVariantsAllowed($data['variantsAllowed']);
            unset($data['variantsAllowed']);
        }
        if (\array_key_exists('variantsEqual', $data)) {
            $object->setVariantsEqual($data['variantsEqual']);
            unset($data['variantsEqual']);
        }
        if (\array_key_exists('ambiguousValueId', $data) && $data['ambiguousValueId'] !== null) {
            $object->setAmbiguousValueId($data['ambiguousValueId']);
            unset($data['ambiguousValueId']);
        }
        elseif (\array_key_exists('ambiguousValueId', $data) && $data['ambiguousValueId'] === null) {
            $object->setAmbiguousValueId(null);
        }
        if (\array_key_exists('dependsOnParameterId', $data) && $data['dependsOnParameterId'] !== null) {
            $object->setDependsOnParameterId($data['dependsOnParameterId']);
            unset($data['dependsOnParameterId']);
        }
        elseif (\array_key_exists('dependsOnParameterId', $data) && $data['dependsOnParameterId'] === null) {
            $object->setDependsOnParameterId(null);
        }
        if (\array_key_exists('describesProduct', $data)) {
            $object->setDescribesProduct($data['describesProduct']);
            unset($data['describesProduct']);
        }
        if (\array_key_exists('customValuesEnabled', $data)) {
            $object->setCustomValuesEnabled($data['customValuesEnabled']);
            unset($data['customValuesEnabled']);
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
        if ($data->isInitialized('variantsAllowed') && null !== $data->getVariantsAllowed()) {
            $dataArray['variantsAllowed'] = $data->getVariantsAllowed();
        }
        if ($data->isInitialized('variantsEqual') && null !== $data->getVariantsEqual()) {
            $dataArray['variantsEqual'] = $data->getVariantsEqual();
        }
        if ($data->isInitialized('ambiguousValueId') && null !== $data->getAmbiguousValueId()) {
            $dataArray['ambiguousValueId'] = $data->getAmbiguousValueId();
        }
        if ($data->isInitialized('dependsOnParameterId') && null !== $data->getDependsOnParameterId()) {
            $dataArray['dependsOnParameterId'] = $data->getDependsOnParameterId();
        }
        if ($data->isInitialized('describesProduct') && null !== $data->getDescribesProduct()) {
            $dataArray['describesProduct'] = $data->getDescribesProduct();
        }
        if ($data->isInitialized('customValuesEnabled') && null !== $data->getCustomValuesEnabled()) {
            $dataArray['customValuesEnabled'] = $data->getCustomValuesEnabled();
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
        return [\Jlonom\AllegroSDK\Model\CategoryParameterOptions::class => false];
    }
}