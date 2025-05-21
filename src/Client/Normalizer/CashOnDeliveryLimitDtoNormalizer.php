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
class CashOnDeliveryLimitDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\CashOnDeliveryLimitDto::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\CashOnDeliveryLimitDto::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\CashOnDeliveryLimitDto();
        if (\array_key_exists('limit', $data) && \is_int($data['limit'])) {
            $data['limit'] = (double) $data['limit'];
        }
        if (\array_key_exists('forceRequireIban', $data) && \is_int($data['forceRequireIban'])) {
            $data['forceRequireIban'] = (bool) $data['forceRequireIban'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('limit', $data)) {
            $object->setLimit($data['limit']);
            unset($data['limit']);
        }
        if (\array_key_exists('currency', $data)) {
            $object->setCurrency($data['currency']);
            unset($data['currency']);
        }
        if (\array_key_exists('paymentType', $data)) {
            $object->setPaymentType($data['paymentType']);
            unset($data['paymentType']);
        }
        if (\array_key_exists('forceRequireIban', $data)) {
            $object->setForceRequireIban($data['forceRequireIban']);
            unset($data['forceRequireIban']);
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
        if ($data->isInitialized('limit') && null !== $data->getLimit()) {
            $dataArray['limit'] = $data->getLimit();
        }
        if ($data->isInitialized('currency') && null !== $data->getCurrency()) {
            $dataArray['currency'] = $data->getCurrency();
        }
        if ($data->isInitialized('paymentType') && null !== $data->getPaymentType()) {
            $dataArray['paymentType'] = $data->getPaymentType();
        }
        if ($data->isInitialized('forceRequireIban') && null !== $data->getForceRequireIban()) {
            $dataArray['forceRequireIban'] = $data->getForceRequireIban();
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
        return [\Jlonom\AllegroSDK\Model\CashOnDeliveryLimitDto::class => false];
    }
}