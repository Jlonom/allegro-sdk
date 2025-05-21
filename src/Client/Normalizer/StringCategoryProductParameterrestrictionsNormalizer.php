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
class StringCategoryProductParameterrestrictionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\StringCategoryProductParameterrestrictions::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\StringCategoryProductParameterrestrictions::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\StringCategoryProductParameterrestrictions();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('minLength', $data)) {
            $object->setMinLength($data['minLength']);
            unset($data['minLength']);
        }
        if (\array_key_exists('maxLength', $data)) {
            $object->setMaxLength($data['maxLength']);
            unset($data['maxLength']);
        }
        if (\array_key_exists('allowedNumberOfValues', $data)) {
            $object->setAllowedNumberOfValues($data['allowedNumberOfValues']);
            unset($data['allowedNumberOfValues']);
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
        if ($data->isInitialized('minLength') && null !== $data->getMinLength()) {
            $dataArray['minLength'] = $data->getMinLength();
        }
        if ($data->isInitialized('maxLength') && null !== $data->getMaxLength()) {
            $dataArray['maxLength'] = $data->getMaxLength();
        }
        if ($data->isInitialized('allowedNumberOfValues') && null !== $data->getAllowedNumberOfValues()) {
            $dataArray['allowedNumberOfValues'] = $data->getAllowedNumberOfValues();
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
        return [\Jlonom\AllegroSDK\Model\StringCategoryProductParameterrestrictions::class => false];
    }
}