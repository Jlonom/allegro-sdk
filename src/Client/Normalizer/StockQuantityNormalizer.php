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
class StockQuantityNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\StockQuantity::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\StockQuantity::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\StockQuantity();
        if (\array_key_exists('onOffer', $data) && \is_int($data['onOffer'])) {
            $data['onOffer'] = (double) $data['onOffer'];
        }
        if (\array_key_exists('available', $data) && \is_int($data['available'])) {
            $data['available'] = (double) $data['available'];
        }
        if (\array_key_exists('onOrder', $data) && \is_int($data['onOrder'])) {
            $data['onOrder'] = (double) $data['onOrder'];
        }
        if (\array_key_exists('onHold', $data) && \is_int($data['onHold'])) {
            $data['onHold'] = (double) $data['onHold'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('onOffer', $data)) {
            $object->setOnOffer($data['onOffer']);
            unset($data['onOffer']);
        }
        if (\array_key_exists('available', $data)) {
            $object->setAvailable($data['available']);
            unset($data['available']);
        }
        if (\array_key_exists('onOrder', $data)) {
            $object->setOnOrder($data['onOrder']);
            unset($data['onOrder']);
        }
        if (\array_key_exists('onHold', $data)) {
            $object->setOnHold($data['onHold']);
            unset($data['onHold']);
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
        if ($data->isInitialized('onOffer') && null !== $data->getOnOffer()) {
            $dataArray['onOffer'] = $data->getOnOffer();
        }
        if ($data->isInitialized('available') && null !== $data->getAvailable()) {
            $dataArray['available'] = $data->getAvailable();
        }
        if ($data->isInitialized('onOrder') && null !== $data->getOnOrder()) {
            $dataArray['onOrder'] = $data->getOnOrder();
        }
        if ($data->isInitialized('onHold') && null !== $data->getOnHold()) {
            $dataArray['onHold'] = $data->getOnHold();
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
        return [\Jlonom\AllegroSDK\Model\StockQuantity::class => false];
    }
}