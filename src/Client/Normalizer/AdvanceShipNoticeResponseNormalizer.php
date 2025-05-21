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
class AdvanceShipNoticeResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\AdvanceShipNoticeResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\AdvanceShipNoticeResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\AdvanceShipNoticeResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('displayNumber', $data)) {
            $object->setDisplayNumber($data['displayNumber']);
            unset($data['displayNumber']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('createdAt', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['createdAt']));
            unset($data['createdAt']);
        }
        if (\array_key_exists('updatedAt', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updatedAt']));
            unset($data['updatedAt']);
        }
        if (\array_key_exists('items', $data)) {
            $values = [];
            foreach ($data['items'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jlonom\AllegroSDK\Model\ProductItem::class, 'json', $context);
            }
            $object->setItems($values);
            unset($data['items']);
        }
        if (\array_key_exists('handlingUnit', $data)) {
            $object->setHandlingUnit($this->denormalizer->denormalize($data['handlingUnit'], \Jlonom\AllegroSDK\Model\HandlingUnit::class, 'json', $context));
            unset($data['handlingUnit']);
        }
        if (\array_key_exists('labels', $data)) {
            $object->setLabels($this->denormalizer->denormalize($data['labels'], \Jlonom\AllegroSDK\Model\Labels::class, 'json', $context));
            unset($data['labels']);
        }
        if (\array_key_exists('shipping', $data)) {
            $object->setShipping($this->denormalizer->denormalize($data['shipping'], \Jlonom\AllegroSDK\Model\ShippingExtended::class, 'json', $context));
            unset($data['shipping']);
        }
        if (\array_key_exists('submittedAt', $data)) {
            $object->setSubmittedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['submittedAt']));
            unset($data['submittedAt']);
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
        $dataArray['id'] = $data->getId();
        $dataArray['displayNumber'] = $data->getDisplayNumber();
        $dataArray['status'] = $data->getStatus();
        $dataArray['createdAt'] = $data->getCreatedAt()?->format('Y-m-d\TH:i:sP');
        $dataArray['updatedAt'] = $data->getUpdatedAt()?->format('Y-m-d\TH:i:sP');
        $values = [];
        foreach ($data->getItems() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['items'] = $values;
        if ($data->isInitialized('handlingUnit') && null !== $data->getHandlingUnit()) {
            $dataArray['handlingUnit'] = $this->normalizer->normalize($data->getHandlingUnit(), 'json', $context);
        }
        if ($data->isInitialized('labels') && null !== $data->getLabels()) {
            $dataArray['labels'] = $this->normalizer->normalize($data->getLabels(), 'json', $context);
        }
        if ($data->isInitialized('shipping') && null !== $data->getShipping()) {
            $dataArray['shipping'] = $this->normalizer->normalize($data->getShipping(), 'json', $context);
        }
        if ($data->isInitialized('submittedAt') && null !== $data->getSubmittedAt()) {
            $dataArray['submittedAt'] = $data->getSubmittedAt()?->format('Y-m-d\TH:i:sP');
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
        return [\Jlonom\AllegroSDK\Model\AdvanceShipNoticeResponse::class => false];
    }
}