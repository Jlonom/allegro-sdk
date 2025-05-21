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
class StockStorageFeeDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\StockStorageFeeDetails::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\StockStorageFeeDetails::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\StockStorageFeeDetails();
        if (\array_key_exists('chargedItemsQuantity', $data) && \is_int($data['chargedItemsQuantity'])) {
            $data['chargedItemsQuantity'] = (double) $data['chargedItemsQuantity'];
        }
        if (\array_key_exists('amountGross', $data) && \is_int($data['amountGross'])) {
            $data['amountGross'] = (double) $data['amountGross'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('feePayableAt', $data)) {
            $object->setFeePayableAt($data['feePayableAt']);
            unset($data['feePayableAt']);
        }
        if (\array_key_exists('chargedItemsQuantity', $data)) {
            $object->setChargedItemsQuantity($data['chargedItemsQuantity']);
            unset($data['chargedItemsQuantity']);
        }
        if (\array_key_exists('amountGross', $data)) {
            $object->setAmountGross($data['amountGross']);
            unset($data['amountGross']);
        }
        if (\array_key_exists('currency', $data)) {
            $object->setCurrency($data['currency']);
            unset($data['currency']);
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
        if ($data->isInitialized('feePayableAt') && null !== $data->getFeePayableAt()) {
            $dataArray['feePayableAt'] = $data->getFeePayableAt();
        }
        if ($data->isInitialized('chargedItemsQuantity') && null !== $data->getChargedItemsQuantity()) {
            $dataArray['chargedItemsQuantity'] = $data->getChargedItemsQuantity();
        }
        if ($data->isInitialized('amountGross') && null !== $data->getAmountGross()) {
            $dataArray['amountGross'] = $data->getAmountGross();
        }
        if ($data->isInitialized('currency') && null !== $data->getCurrency()) {
            $dataArray['currency'] = $data->getCurrency();
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
        return [\Jlonom\AllegroSDK\Model\StockStorageFeeDetails::class => false];
    }
}