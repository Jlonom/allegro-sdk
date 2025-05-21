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
class PromoOptionsCommandModificationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\PromoOptionsCommandModification::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\PromoOptionsCommandModification::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\PromoOptionsCommandModification();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('basePackage', $data)) {
            $object->setBasePackage($this->denormalizer->denormalize($data['basePackage'], \Jlonom\AllegroSDK\Model\PromoOptionsCommandModificationBasePackage::class, 'json', $context));
            unset($data['basePackage']);
        }
        if (\array_key_exists('extraPackages', $data)) {
            $values = [];
            foreach ($data['extraPackages'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jlonom\AllegroSDK\Model\PromoOptionsCommandModificationPackage::class, 'json', $context);
            }
            $object->setExtraPackages($values);
            unset($data['extraPackages']);
        }
        if (\array_key_exists('modificationTime', $data)) {
            $object->setModificationTime($data['modificationTime']);
            unset($data['modificationTime']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('basePackage') && null !== $data->getBasePackage()) {
            $dataArray['basePackage'] = $this->normalizer->normalize($data->getBasePackage(), 'json', $context);
        }
        if ($data->isInitialized('extraPackages') && null !== $data->getExtraPackages()) {
            $values = [];
            foreach ($data->getExtraPackages() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['extraPackages'] = $values;
        }
        if ($data->isInitialized('modificationTime') && null !== $data->getModificationTime()) {
            $dataArray['modificationTime'] = $data->getModificationTime();
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jlonom\AllegroSDK\Model\PromoOptionsCommandModification::class => false];
    }
}