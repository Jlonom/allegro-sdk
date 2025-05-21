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
class BillingEntryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\BillingEntry::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\BillingEntry::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\BillingEntry();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('occurredAt', $data)) {
            $object->setOccurredAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['occurredAt']));
            unset($data['occurredAt']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($this->denormalizer->denormalize($data['type'], \Jlonom\AllegroSDK\Model\BillingEntryType::class, 'json', $context));
            unset($data['type']);
        }
        if (\array_key_exists('offer', $data)) {
            $object->setOffer($this->denormalizer->denormalize($data['offer'], \Jlonom\AllegroSDK\Model\BillingEntryOffer::class, 'json', $context));
            unset($data['offer']);
        }
        if (\array_key_exists('value', $data)) {
            $object->setValue($this->denormalizer->denormalize($data['value'], \Jlonom\AllegroSDK\Model\BillingEntryValue::class, 'json', $context));
            unset($data['value']);
        }
        if (\array_key_exists('tax', $data)) {
            $object->setTax($this->denormalizer->denormalize($data['tax'], \Jlonom\AllegroSDK\Model\BillingEntryTax::class, 'json', $context));
            unset($data['tax']);
        }
        if (\array_key_exists('balance', $data)) {
            $object->setBalance($this->denormalizer->denormalize($data['balance'], \Jlonom\AllegroSDK\Model\BillingEntryBalance::class, 'json', $context));
            unset($data['balance']);
        }
        if (\array_key_exists('order', $data)) {
            $object->setOrder($this->denormalizer->denormalize($data['order'], \Jlonom\AllegroSDK\Model\BillingEntryOrder::class, 'json', $context));
            unset($data['order']);
        }
        if (\array_key_exists('additionalInfo', $data)) {
            $values = [];
            foreach ($data['additionalInfo'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jlonom\AllegroSDK\Model\BillingEntryAdditionalInfoItem::class, 'json', $context);
            }
            $object->setAdditionalInfo($values);
            unset($data['additionalInfo']);
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
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('occurredAt') && null !== $data->getOccurredAt()) {
            $dataArray['occurredAt'] = $data->getOccurredAt()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['type'] = $this->normalizer->normalize($data->getType(), 'json', $context);
        }
        if ($data->isInitialized('offer') && null !== $data->getOffer()) {
            $dataArray['offer'] = $this->normalizer->normalize($data->getOffer(), 'json', $context);
        }
        if ($data->isInitialized('value') && null !== $data->getValue()) {
            $dataArray['value'] = $this->normalizer->normalize($data->getValue(), 'json', $context);
        }
        if ($data->isInitialized('tax') && null !== $data->getTax()) {
            $dataArray['tax'] = $this->normalizer->normalize($data->getTax(), 'json', $context);
        }
        if ($data->isInitialized('balance') && null !== $data->getBalance()) {
            $dataArray['balance'] = $this->normalizer->normalize($data->getBalance(), 'json', $context);
        }
        if ($data->isInitialized('order') && null !== $data->getOrder()) {
            $dataArray['order'] = $this->normalizer->normalize($data->getOrder(), 'json', $context);
        }
        if ($data->isInitialized('additionalInfo') && null !== $data->getAdditionalInfo()) {
            $values = [];
            foreach ($data->getAdditionalInfo() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['additionalInfo'] = $values;
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
        return [\Jlonom\AllegroSDK\Model\BillingEntry::class => false];
    }
}