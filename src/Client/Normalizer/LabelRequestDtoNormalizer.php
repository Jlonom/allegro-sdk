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
class LabelRequestDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\LabelRequestDto::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\LabelRequestDto::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\LabelRequestDto();
        if (\array_key_exists('cutLine', $data) && \is_int($data['cutLine'])) {
            $data['cutLine'] = (bool) $data['cutLine'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('shipmentIds', $data)) {
            $values = [];
            foreach ($data['shipmentIds'] as $value) {
                $values[] = $value;
            }
            $object->setShipmentIds($values);
            unset($data['shipmentIds']);
        }
        if (\array_key_exists('pageSize', $data)) {
            $object->setPageSize($data['pageSize']);
            unset($data['pageSize']);
        }
        if (\array_key_exists('cutLine', $data)) {
            $object->setCutLine($data['cutLine']);
            unset($data['cutLine']);
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
        $values = [];
        foreach ($data->getShipmentIds() as $value) {
            $values[] = $value;
        }
        $dataArray['shipmentIds'] = $values;
        if ($data->isInitialized('pageSize') && null !== $data->getPageSize()) {
            $dataArray['pageSize'] = $data->getPageSize();
        }
        if ($data->isInitialized('cutLine') && null !== $data->getCutLine()) {
            $dataArray['cutLine'] = $data->getCutLine();
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
        return [\Jlonom\AllegroSDK\Model\LabelRequestDto::class => false];
    }
}