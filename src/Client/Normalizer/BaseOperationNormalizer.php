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
class BaseOperationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\BaseOperation::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\BaseOperation::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (array_key_exists('type', $data) and 'CORRECTION' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Jlonom\AllegroSDK\Model\CorrectionOperation', $format, $context);
        }
        if (array_key_exists('type', $data) and 'CONTRIBUTION' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Jlonom\AllegroSDK\Model\ContributionOperation', $format, $context);
        }
        if (array_key_exists('type', $data) and 'PAYOUT' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Jlonom\AllegroSDK\Model\PayoutOperation', $format, $context);
        }
        if (array_key_exists('type', $data) and 'PAYOUT_CANCEL' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Jlonom\AllegroSDK\Model\PayoutOperationCancel', $format, $context);
        }
        if (array_key_exists('type', $data) and 'REFUND_INCREASE' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Jlonom\AllegroSDK\Model\RefundIncreaseOperation', $format, $context);
        }
        if (array_key_exists('type', $data) and 'REFUND_CHARGE' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Jlonom\AllegroSDK\Model\RefundChargeOperation', $format, $context);
        }
        if (array_key_exists('type', $data) and 'REFUND_CANCEL' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Jlonom\AllegroSDK\Model\RefundCancelOperation', $format, $context);
        }
        if (array_key_exists('type', $data) and 'SURCHARGE' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Jlonom\AllegroSDK\Model\SurchargeOperation', $format, $context);
        }
        if (array_key_exists('type', $data) and 'DEDUCTION_CHARGE' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Jlonom\AllegroSDK\Model\DeductionChargeOperation', $format, $context);
        }
        if (array_key_exists('type', $data) and 'DEDUCTION_INCREASE' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Jlonom\AllegroSDK\Model\DeductionIncreaseOperation', $format, $context);
        }
        if (array_key_exists('type', $data) and 'BLOCKADE' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Jlonom\AllegroSDK\Model\BlockadeOperation', $format, $context);
        }
        if (array_key_exists('type', $data) and 'BLOCKADE_RELEASE' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Jlonom\AllegroSDK\Model\BlockadeReleaseOperation', $format, $context);
        }
        if (array_key_exists('type', $data) and 'PROVIDER_REFUND_TRANSFER_CHARGE' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Jlonom\AllegroSDK\Model\ProviderRefundTransferChargeOperation', $format, $context);
        }
        if (array_key_exists('type', $data) and 'PROVIDER_REFUND_TRANSFER_INCREASE' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Jlonom\AllegroSDK\Model\ProviderRefundTransferIncreaseOperation', $format, $context);
        }
        if (array_key_exists('type', $data) and 'COMPENSATION' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Jlonom\AllegroSDK\Model\CompensationOperation', $format, $context);
        }
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\BaseOperation();
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
        if (null !== $data->getType() and 'CORRECTION' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() and 'CONTRIBUTION' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() and 'PAYOUT' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() and 'PAYOUT_CANCEL' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() and 'REFUND_INCREASE' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() and 'REFUND_CHARGE' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() and 'REFUND_CANCEL' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() and 'SURCHARGE' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() and 'DEDUCTION_CHARGE' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() and 'DEDUCTION_INCREASE' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() and 'BLOCKADE' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() and 'BLOCKADE_RELEASE' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() and 'PROVIDER_REFUND_TRANSFER_CHARGE' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() and 'PROVIDER_REFUND_TRANSFER_INCREASE' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() and 'COMPENSATION' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        $dataArray['type'] = $data->getType();
        $dataArray['group'] = $data->getGroup();
        $dataArray['wallet'] = $this->normalizer->normalize($data->getWallet(), 'json', $context);
        $dataArray['value'] = $this->normalizer->normalize($data->getValue(), 'json', $context);
        $dataArray['occurredAt'] = $data->getOccurredAt()?->format('Y-m-d\TH:i:sP');
        if ($data->isInitialized('marketplaceId') && null !== $data->getMarketplaceId()) {
            $dataArray['marketplaceId'] = $data->getMarketplaceId();
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
        return [\Jlonom\AllegroSDK\Model\BaseOperation::class => false];
    }
}