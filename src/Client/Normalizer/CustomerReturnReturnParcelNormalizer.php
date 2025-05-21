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
class CustomerReturnReturnParcelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\CustomerReturnReturnParcel::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\CustomerReturnReturnParcel::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\CustomerReturnReturnParcel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('createdAt', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['createdAt']));
            unset($data['createdAt']);
        }
        if (\array_key_exists('waybill', $data)) {
            $object->setWaybill($data['waybill']);
            unset($data['waybill']);
        }
        if (\array_key_exists('transportingWaybill', $data) && $data['transportingWaybill'] !== null) {
            $object->setTransportingWaybill($data['transportingWaybill']);
            unset($data['transportingWaybill']);
        }
        elseif (\array_key_exists('transportingWaybill', $data) && $data['transportingWaybill'] === null) {
            $object->setTransportingWaybill(null);
        }
        if (\array_key_exists('carrierId', $data)) {
            $object->setCarrierId($data['carrierId']);
            unset($data['carrierId']);
        }
        if (\array_key_exists('transportingCarrierId', $data) && $data['transportingCarrierId'] !== null) {
            $object->setTransportingCarrierId($data['transportingCarrierId']);
            unset($data['transportingCarrierId']);
        }
        elseif (\array_key_exists('transportingCarrierId', $data) && $data['transportingCarrierId'] === null) {
            $object->setTransportingCarrierId(null);
        }
        if (\array_key_exists('sender', $data)) {
            $object->setSender($this->denormalizer->denormalize($data['sender'], \Jlonom\AllegroSDK\Model\CustomerReturnParcelSender::class, 'json', $context));
            unset($data['sender']);
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
        if ($data->isInitialized('createdAt') && null !== $data->getCreatedAt()) {
            $dataArray['createdAt'] = $data->getCreatedAt()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('waybill') && null !== $data->getWaybill()) {
            $dataArray['waybill'] = $data->getWaybill();
        }
        if ($data->isInitialized('transportingWaybill') && null !== $data->getTransportingWaybill()) {
            $dataArray['transportingWaybill'] = $data->getTransportingWaybill();
        }
        if ($data->isInitialized('carrierId') && null !== $data->getCarrierId()) {
            $dataArray['carrierId'] = $data->getCarrierId();
        }
        if ($data->isInitialized('transportingCarrierId') && null !== $data->getTransportingCarrierId()) {
            $dataArray['transportingCarrierId'] = $data->getTransportingCarrierId();
        }
        if ($data->isInitialized('sender') && null !== $data->getSender()) {
            $dataArray['sender'] = $this->normalizer->normalize($data->getSender(), 'json', $context);
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
        return [\Jlonom\AllegroSDK\Model\CustomerReturnReturnParcel::class => false];
    }
}