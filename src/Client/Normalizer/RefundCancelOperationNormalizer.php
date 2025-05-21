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
class RefundCancelOperationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\RefundCancelOperation::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\RefundCancelOperation::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\RefundCancelOperation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (\array_key_exists('group', $data)) {
            $object->setGroup($data['group']);
            unset($data['group']);
        }
        if (\array_key_exists('wallet', $data)) {
            $object->setWallet($this->denormalizer->denormalize($data['wallet'], \Jlonom\AllegroSDK\Model\Wallet::class, 'json', $context));
            unset($data['wallet']);
        }
        if (\array_key_exists('value', $data)) {
            $object->setValue($this->denormalizer->denormalize($data['value'], \Jlonom\AllegroSDK\Model\OperationValue::class, 'json', $context));
            unset($data['value']);
        }
        if (\array_key_exists('occurredAt', $data)) {
            $object->setOccurredAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['occurredAt']));
            unset($data['occurredAt']);
        }
        if (\array_key_exists('marketplaceId', $data)) {
            $object->setMarketplaceId($data['marketplaceId']);
            unset($data['marketplaceId']);
        }
        if (\array_key_exists('payment', $data)) {
            $object->setPayment($this->denormalizer->denormalize($data['payment'], \Jlonom\AllegroSDK\Model\OperationPayment::class, 'json', $context));
            unset($data['payment']);
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
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['type'] = $data->getType();
        }
        $dataArray['group'] = $data->getGroup();
        $dataArray['wallet'] = $this->normalizer->normalize($data->getWallet(), 'json', $context);
        $dataArray['value'] = $this->normalizer->normalize($data->getValue(), 'json', $context);
        $dataArray['occurredAt'] = $data->getOccurredAt()?->format('Y-m-d\TH:i:sP');
        if ($data->isInitialized('marketplaceId') && null !== $data->getMarketplaceId()) {
            $dataArray['marketplaceId'] = $data->getMarketplaceId();
        }
        if ($data->isInitialized('payment') && null !== $data->getPayment()) {
            $dataArray['payment'] = $this->normalizer->normalize($data->getPayment(), 'json', $context);
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
        return [\Jlonom\AllegroSDK\Model\RefundCancelOperation::class => false];
    }
}