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
class ReturnPolicyRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\ReturnPolicyRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\ReturnPolicyRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\ReturnPolicyRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('availability', $data)) {
            $object->setAvailability($this->denormalizer->denormalize($data['availability'], \Jlonom\AllegroSDK\Model\ReturnPolicyAvailability::class, 'json', $context));
            unset($data['availability']);
        }
        if (\array_key_exists('withdrawalPeriod', $data)) {
            $object->setWithdrawalPeriod($data['withdrawalPeriod']);
            unset($data['withdrawalPeriod']);
        }
        if (\array_key_exists('returnCost', $data) && $data['returnCost'] !== null) {
            $object->setReturnCost($this->denormalizer->denormalize($data['returnCost'], \Jlonom\AllegroSDK\Model\ReturnPolicyReturnCost::class, 'json', $context));
            unset($data['returnCost']);
        }
        elseif (\array_key_exists('returnCost', $data) && $data['returnCost'] === null) {
            $object->setReturnCost(null);
        }
        if (\array_key_exists('address', $data) && $data['address'] !== null) {
            $object->setAddress($this->denormalizer->denormalize($data['address'], \Jlonom\AllegroSDK\Model\ReturnPolicyAddress::class, 'json', $context));
            unset($data['address']);
        }
        elseif (\array_key_exists('address', $data) && $data['address'] === null) {
            $object->setAddress(null);
        }
        if (\array_key_exists('contact', $data) && $data['contact'] !== null) {
            $object->setContact($this->denormalizer->denormalize($data['contact'], \Jlonom\AllegroSDK\Model\ReturnPolicyContact::class, 'json', $context));
            unset($data['contact']);
        }
        elseif (\array_key_exists('contact', $data) && $data['contact'] === null) {
            $object->setContact(null);
        }
        if (\array_key_exists('options', $data) && $data['options'] !== null) {
            $object->setOptions($this->denormalizer->denormalize($data['options'], \Jlonom\AllegroSDK\Model\ReturnPolicyOptions::class, 'json', $context));
            unset($data['options']);
        }
        elseif (\array_key_exists('options', $data) && $data['options'] === null) {
            $object->setOptions(null);
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
        $dataArray['name'] = $data->getName();
        $dataArray['availability'] = $this->normalizer->normalize($data->getAvailability(), 'json', $context);
        if ($data->isInitialized('withdrawalPeriod') && null !== $data->getWithdrawalPeriod()) {
            $dataArray['withdrawalPeriod'] = $data->getWithdrawalPeriod();
        }
        $dataArray['returnCost'] = $this->normalizer->normalize($data->getReturnCost(), 'json', $context);
        $dataArray['address'] = $this->normalizer->normalize($data->getAddress(), 'json', $context);
        if ($data->isInitialized('contact') && null !== $data->getContact()) {
            $dataArray['contact'] = $this->normalizer->normalize($data->getContact(), 'json', $context);
        }
        $dataArray['options'] = $this->normalizer->normalize($data->getOptions(), 'json', $context);
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jlonom\AllegroSDK\Model\ReturnPolicyRequest::class => false];
    }
}