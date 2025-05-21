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
class CheckoutFormDeliveryReferenceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\CheckoutFormDeliveryReference::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\CheckoutFormDeliveryReference::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\CheckoutFormDeliveryReference();
        if (\array_key_exists('smart', $data) && \is_int($data['smart'])) {
            $data['smart'] = (bool) $data['smart'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('address', $data)) {
            $object->setAddress($this->denormalizer->denormalize($data['address'], \Jlonom\AllegroSDK\Model\CheckoutFormDeliveryAddress::class, 'json', $context));
            unset($data['address']);
        }
        if (\array_key_exists('method', $data)) {
            $object->setMethod($this->denormalizer->denormalize($data['method'], \Jlonom\AllegroSDK\Model\CheckoutFormDeliveryMethod::class, 'json', $context));
            unset($data['method']);
        }
        if (\array_key_exists('pickupPoint', $data)) {
            $object->setPickupPoint($this->denormalizer->denormalize($data['pickupPoint'], \Jlonom\AllegroSDK\Model\CheckoutFormDeliveryPickupPoint::class, 'json', $context));
            unset($data['pickupPoint']);
        }
        if (\array_key_exists('cost', $data)) {
            $object->setCost($this->denormalizer->denormalize($data['cost'], \Jlonom\AllegroSDK\Model\Price::class, 'json', $context));
            unset($data['cost']);
        }
        if (\array_key_exists('time', $data)) {
            $object->setTime($this->denormalizer->denormalize($data['time'], \Jlonom\AllegroSDK\Model\CheckoutFormDeliveryTime::class, 'json', $context));
            unset($data['time']);
        }
        if (\array_key_exists('smart', $data)) {
            $object->setSmart($data['smart']);
            unset($data['smart']);
        }
        if (\array_key_exists('cancellation', $data)) {
            $object->setCancellation($this->denormalizer->denormalize($data['cancellation'], \Jlonom\AllegroSDK\Model\CheckoutFormDeliveryCancellation::class, 'json', $context));
            unset($data['cancellation']);
        }
        if (\array_key_exists('calculatedNumberOfPackages', $data)) {
            $object->setCalculatedNumberOfPackages($data['calculatedNumberOfPackages']);
            unset($data['calculatedNumberOfPackages']);
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
        if ($data->isInitialized('address') && null !== $data->getAddress()) {
            $dataArray['address'] = $this->normalizer->normalize($data->getAddress(), 'json', $context);
        }
        if ($data->isInitialized('method') && null !== $data->getMethod()) {
            $dataArray['method'] = $this->normalizer->normalize($data->getMethod(), 'json', $context);
        }
        if ($data->isInitialized('pickupPoint') && null !== $data->getPickupPoint()) {
            $dataArray['pickupPoint'] = $this->normalizer->normalize($data->getPickupPoint(), 'json', $context);
        }
        if ($data->isInitialized('cost') && null !== $data->getCost()) {
            $dataArray['cost'] = $this->normalizer->normalize($data->getCost(), 'json', $context);
        }
        if ($data->isInitialized('time') && null !== $data->getTime()) {
            $dataArray['time'] = $this->normalizer->normalize($data->getTime(), 'json', $context);
        }
        if ($data->isInitialized('smart') && null !== $data->getSmart()) {
            $dataArray['smart'] = $data->getSmart();
        }
        if ($data->isInitialized('cancellation') && null !== $data->getCancellation()) {
            $dataArray['cancellation'] = $this->normalizer->normalize($data->getCancellation(), 'json', $context);
        }
        if ($data->isInitialized('calculatedNumberOfPackages') && null !== $data->getCalculatedNumberOfPackages()) {
            $dataArray['calculatedNumberOfPackages'] = $data->getCalculatedNumberOfPackages();
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
        return [\Jlonom\AllegroSDK\Model\CheckoutFormDeliveryReference::class => false];
    }
}