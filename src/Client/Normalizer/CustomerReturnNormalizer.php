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
class CustomerReturnNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\CustomerReturn::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\CustomerReturn::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\CustomerReturn();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('createdAt', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['createdAt']));
            unset($data['createdAt']);
        }
        if (\array_key_exists('referenceNumber', $data)) {
            $object->setReferenceNumber($data['referenceNumber']);
            unset($data['referenceNumber']);
        }
        if (\array_key_exists('orderId', $data)) {
            $object->setOrderId($data['orderId']);
            unset($data['orderId']);
        }
        if (\array_key_exists('buyer', $data)) {
            $object->setBuyer($this->denormalizer->denormalize($data['buyer'], \Jlonom\AllegroSDK\Model\CustomerReturnBuyer::class, 'json', $context));
            unset($data['buyer']);
        }
        if (\array_key_exists('items', $data)) {
            $values = [];
            foreach ($data['items'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jlonom\AllegroSDK\Model\CustomerReturnItem::class, 'json', $context);
            }
            $object->setItems($values);
            unset($data['items']);
        }
        if (\array_key_exists('refund', $data)) {
            $object->setRefund($this->denormalizer->denormalize($data['refund'], \Jlonom\AllegroSDK\Model\CustomerReturnRefund::class, 'json', $context));
            unset($data['refund']);
        }
        if (\array_key_exists('parcels', $data)) {
            $values_1 = [];
            foreach ($data['parcels'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jlonom\AllegroSDK\Model\CustomerReturnReturnParcel::class, 'json', $context);
            }
            $object->setParcels($values_1);
            unset($data['parcels']);
        }
        if (\array_key_exists('rejection', $data)) {
            $object->setRejection($this->denormalizer->denormalize($data['rejection'], \Jlonom\AllegroSDK\Model\CustomerReturnRejection::class, 'json', $context));
            unset($data['rejection']);
        }
        if (\array_key_exists('marketplaceId', $data)) {
            $object->setMarketplaceId($data['marketplaceId']);
            unset($data['marketplaceId']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('createdAt') && null !== $data->getCreatedAt()) {
            $dataArray['createdAt'] = $data->getCreatedAt()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('referenceNumber') && null !== $data->getReferenceNumber()) {
            $dataArray['referenceNumber'] = $data->getReferenceNumber();
        }
        if ($data->isInitialized('orderId') && null !== $data->getOrderId()) {
            $dataArray['orderId'] = $data->getOrderId();
        }
        if ($data->isInitialized('buyer') && null !== $data->getBuyer()) {
            $dataArray['buyer'] = $this->normalizer->normalize($data->getBuyer(), 'json', $context);
        }
        if ($data->isInitialized('items') && null !== $data->getItems()) {
            $values = [];
            foreach ($data->getItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['items'] = $values;
        }
        if ($data->isInitialized('refund') && null !== $data->getRefund()) {
            $dataArray['refund'] = $this->normalizer->normalize($data->getRefund(), 'json', $context);
        }
        if ($data->isInitialized('parcels') && null !== $data->getParcels()) {
            $values_1 = [];
            foreach ($data->getParcels() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['parcels'] = $values_1;
        }
        if ($data->isInitialized('rejection') && null !== $data->getRejection()) {
            $dataArray['rejection'] = $this->normalizer->normalize($data->getRejection(), 'json', $context);
        }
        if ($data->isInitialized('marketplaceId') && null !== $data->getMarketplaceId()) {
            $dataArray['marketplaceId'] = $data->getMarketplaceId();
        }
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['status'] = $data->getStatus();
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jlonom\AllegroSDK\Model\CustomerReturn::class => false];
    }
}