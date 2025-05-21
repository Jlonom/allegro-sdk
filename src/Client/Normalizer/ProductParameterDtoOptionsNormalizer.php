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
class ProductParameterDtoOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\ProductParameterDtoOptions::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\ProductParameterDtoOptions::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\ProductParameterDtoOptions();
        if (\array_key_exists('identifiesProduct', $data) && \is_int($data['identifiesProduct'])) {
            $data['identifiesProduct'] = (bool) $data['identifiesProduct'];
        }
        if (\array_key_exists('isGTIN', $data) && \is_int($data['isGTIN'])) {
            $data['isGTIN'] = (bool) $data['isGTIN'];
        }
        if (\array_key_exists('isTrusted', $data) && \is_int($data['isTrusted'])) {
            $data['isTrusted'] = (bool) $data['isTrusted'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('identifiesProduct', $data)) {
            $object->setIdentifiesProduct($data['identifiesProduct']);
            unset($data['identifiesProduct']);
        }
        if (\array_key_exists('isGTIN', $data)) {
            $object->setIsGTIN($data['isGTIN']);
            unset($data['isGTIN']);
        }
        if (\array_key_exists('isTrusted', $data)) {
            $object->setIsTrusted($data['isTrusted']);
            unset($data['isTrusted']);
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
        $dataArray['identifiesProduct'] = $data->getIdentifiesProduct();
        if ($data->isInitialized('isGTIN') && null !== $data->getIsGTIN()) {
            $dataArray['isGTIN'] = $data->getIsGTIN();
        }
        if ($data->isInitialized('isTrusted') && null !== $data->getIsTrusted()) {
            $dataArray['isTrusted'] = $data->getIsTrusted();
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
        return [\Jlonom\AllegroSDK\Model\ProductParameterDtoOptions::class => false];
    }
}