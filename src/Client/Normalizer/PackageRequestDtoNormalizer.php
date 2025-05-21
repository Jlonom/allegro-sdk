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
class PackageRequestDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\PackageRequestDto::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\PackageRequestDto::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\PackageRequestDto();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (\array_key_exists('length', $data)) {
            $object->setLength($this->denormalizer->denormalize($data['length'], \Jlonom\AllegroSDK\Model\DimensionValue::class, 'json', $context));
            unset($data['length']);
        }
        if (\array_key_exists('width', $data)) {
            $object->setWidth($this->denormalizer->denormalize($data['width'], \Jlonom\AllegroSDK\Model\DimensionValue::class, 'json', $context));
            unset($data['width']);
        }
        if (\array_key_exists('height', $data)) {
            $object->setHeight($this->denormalizer->denormalize($data['height'], \Jlonom\AllegroSDK\Model\DimensionValue::class, 'json', $context));
            unset($data['height']);
        }
        if (\array_key_exists('weight', $data)) {
            $object->setWeight($this->denormalizer->denormalize($data['weight'], \Jlonom\AllegroSDK\Model\WeightValue::class, 'json', $context));
            unset($data['weight']);
        }
        if (\array_key_exists('textOnLabel', $data)) {
            $object->setTextOnLabel($data['textOnLabel']);
            unset($data['textOnLabel']);
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
        $dataArray['type'] = $data->getType();
        $dataArray['length'] = $this->normalizer->normalize($data->getLength(), 'json', $context);
        $dataArray['width'] = $this->normalizer->normalize($data->getWidth(), 'json', $context);
        $dataArray['height'] = $this->normalizer->normalize($data->getHeight(), 'json', $context);
        $dataArray['weight'] = $this->normalizer->normalize($data->getWeight(), 'json', $context);
        if ($data->isInitialized('textOnLabel') && null !== $data->getTextOnLabel()) {
            $dataArray['textOnLabel'] = $data->getTextOnLabel();
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
        return [\Jlonom\AllegroSDK\Model\PackageRequestDto::class => false];
    }
}