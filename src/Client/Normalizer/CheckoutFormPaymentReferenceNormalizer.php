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
class CheckoutFormPaymentReferenceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\CheckoutFormPaymentReference::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\CheckoutFormPaymentReference::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\CheckoutFormPaymentReference();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (\array_key_exists('provider', $data)) {
            $object->setProvider($data['provider']);
            unset($data['provider']);
        }
        if (\array_key_exists('finishedAt', $data)) {
            $object->setFinishedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['finishedAt']));
            unset($data['finishedAt']);
        }
        if (\array_key_exists('paidAmount', $data)) {
            $object->setPaidAmount($this->denormalizer->denormalize($data['paidAmount'], \Jlonom\AllegroSDK\Model\Price::class, 'json', $context));
            unset($data['paidAmount']);
        }
        if (\array_key_exists('reconciliation', $data)) {
            $object->setReconciliation($this->denormalizer->denormalize($data['reconciliation'], \Jlonom\AllegroSDK\Model\Price::class, 'json', $context));
            unset($data['reconciliation']);
        }
        if (\array_key_exists('features', $data)) {
            $values = [];
            foreach ($data['features'] as $value) {
                $values[] = $value;
            }
            $object->setFeatures($values);
            unset($data['features']);
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
        $dataArray['type'] = $data->getType();
        if ($data->isInitialized('provider') && null !== $data->getProvider()) {
            $dataArray['provider'] = $data->getProvider();
        }
        if ($data->isInitialized('finishedAt') && null !== $data->getFinishedAt()) {
            $dataArray['finishedAt'] = $data->getFinishedAt()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('paidAmount') && null !== $data->getPaidAmount()) {
            $dataArray['paidAmount'] = $this->normalizer->normalize($data->getPaidAmount(), 'json', $context);
        }
        if ($data->isInitialized('reconciliation') && null !== $data->getReconciliation()) {
            $dataArray['reconciliation'] = $this->normalizer->normalize($data->getReconciliation(), 'json', $context);
        }
        if ($data->isInitialized('features') && null !== $data->getFeatures()) {
            $values = [];
            foreach ($data->getFeatures() as $value) {
                $values[] = $value;
            }
            $dataArray['features'] = $values;
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
        return [\Jlonom\AllegroSDK\Model\CheckoutFormPaymentReference::class => false];
    }
}