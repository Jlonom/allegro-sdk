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
class RefundDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\RefundDetails::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\RefundDetails::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\RefundDetails();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('payment', $data)) {
            $object->setPayment($this->denormalizer->denormalize($data['payment'], \Jlonom\AllegroSDK\Model\RefundPayment::class, 'json', $context));
            unset($data['payment']);
        }
        if (\array_key_exists('reason', $data)) {
            $object->setReason($data['reason']);
            unset($data['reason']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('createdAt', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['createdAt']));
            unset($data['createdAt']);
        }
        if (\array_key_exists('totalValue', $data)) {
            $object->setTotalValue($this->denormalizer->denormalize($data['totalValue'], \Jlonom\AllegroSDK\Model\RefundTotalValue::class, 'json', $context));
            unset($data['totalValue']);
        }
        if (\array_key_exists('lineItems', $data)) {
            $values = [];
            foreach ($data['lineItems'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jlonom\AllegroSDK\Model\RefundLineItem::class, 'json', $context);
            }
            $object->setLineItems($values);
            unset($data['lineItems']);
        }
        if (\array_key_exists('delivery', $data)) {
            $object->setDelivery($this->denormalizer->denormalize($data['delivery'], \Jlonom\AllegroSDK\Model\RefundDetailsDelivery::class, 'json', $context));
            unset($data['delivery']);
        }
        if (\array_key_exists('overpaid', $data)) {
            $object->setOverpaid($this->denormalizer->denormalize($data['overpaid'], \Jlonom\AllegroSDK\Model\RefundDetailsOverpaid::class, 'json', $context));
            unset($data['overpaid']);
        }
        if (\array_key_exists('surcharges', $data)) {
            $values_1 = [];
            foreach ($data['surcharges'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jlonom\AllegroSDK\Model\PaymentsSurcharge::class, 'json', $context);
            }
            $object->setSurcharges($values_1);
            unset($data['surcharges']);
        }
        if (\array_key_exists('additionalServices', $data)) {
            $object->setAdditionalServices($this->denormalizer->denormalize($data['additionalServices'], \Jlonom\AllegroSDK\Model\RefundDetailsAdditionalServices::class, 'json', $context));
            unset($data['additionalServices']);
        }
        if (\array_key_exists('sellerComment', $data)) {
            $object->setSellerComment($data['sellerComment']);
            unset($data['sellerComment']);
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
        $dataArray['id'] = $data->getId();
        $dataArray['payment'] = $this->normalizer->normalize($data->getPayment(), 'json', $context);
        $dataArray['reason'] = $data->getReason();
        $dataArray['status'] = $data->getStatus();
        $dataArray['createdAt'] = $data->getCreatedAt()?->format('Y-m-d\TH:i:sP');
        $dataArray['totalValue'] = $this->normalizer->normalize($data->getTotalValue(), 'json', $context);
        if ($data->isInitialized('lineItems') && null !== $data->getLineItems()) {
            $values = [];
            foreach ($data->getLineItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['lineItems'] = $values;
        }
        if ($data->isInitialized('delivery') && null !== $data->getDelivery()) {
            $dataArray['delivery'] = $this->normalizer->normalize($data->getDelivery(), 'json', $context);
        }
        if ($data->isInitialized('overpaid') && null !== $data->getOverpaid()) {
            $dataArray['overpaid'] = $this->normalizer->normalize($data->getOverpaid(), 'json', $context);
        }
        if ($data->isInitialized('surcharges') && null !== $data->getSurcharges()) {
            $values_1 = [];
            foreach ($data->getSurcharges() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['surcharges'] = $values_1;
        }
        if ($data->isInitialized('additionalServices') && null !== $data->getAdditionalServices()) {
            $dataArray['additionalServices'] = $this->normalizer->normalize($data->getAdditionalServices(), 'json', $context);
        }
        if ($data->isInitialized('sellerComment') && null !== $data->getSellerComment()) {
            $dataArray['sellerComment'] = $data->getSellerComment();
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
        return [\Jlonom\AllegroSDK\Model\RefundDetails::class => false];
    }
}