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
class CheckoutFormNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\CheckoutForm::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\CheckoutForm::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\CheckoutForm();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('messageToSeller', $data)) {
            $object->setMessageToSeller($data['messageToSeller']);
            unset($data['messageToSeller']);
        }
        if (\array_key_exists('buyer', $data)) {
            $object->setBuyer($this->denormalizer->denormalize($data['buyer'], \Jlonom\AllegroSDK\Model\CheckoutFormBuyerReference::class, 'json', $context));
            unset($data['buyer']);
        }
        if (\array_key_exists('payment', $data)) {
            $object->setPayment($this->denormalizer->denormalize($data['payment'], \Jlonom\AllegroSDK\Model\CheckoutFormPaymentReference::class, 'json', $context));
            unset($data['payment']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('fulfillment', $data)) {
            $object->setFulfillment($this->denormalizer->denormalize($data['fulfillment'], \Jlonom\AllegroSDK\Model\CheckoutFormFulfillment::class, 'json', $context));
            unset($data['fulfillment']);
        }
        if (\array_key_exists('delivery', $data)) {
            $object->setDelivery($this->denormalizer->denormalize($data['delivery'], \Jlonom\AllegroSDK\Model\CheckoutFormDeliveryReference::class, 'json', $context));
            unset($data['delivery']);
        }
        if (\array_key_exists('invoice', $data)) {
            $object->setInvoice($this->denormalizer->denormalize($data['invoice'], \Jlonom\AllegroSDK\Model\CheckoutFormInvoiceInfo::class, 'json', $context));
            unset($data['invoice']);
        }
        if (\array_key_exists('lineItems', $data)) {
            $values = [];
            foreach ($data['lineItems'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jlonom\AllegroSDK\Model\CheckoutFormLineItem::class, 'json', $context);
            }
            $object->setLineItems($values);
            unset($data['lineItems']);
        }
        if (\array_key_exists('surcharges', $data)) {
            $values_1 = [];
            foreach ($data['surcharges'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jlonom\AllegroSDK\Model\CheckoutFormPaymentReference::class, 'json', $context);
            }
            $object->setSurcharges($values_1);
            unset($data['surcharges']);
        }
        if (\array_key_exists('discounts', $data)) {
            $values_2 = [];
            foreach ($data['discounts'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Jlonom\AllegroSDK\Model\CheckoutFormDiscount::class, 'json', $context);
            }
            $object->setDiscounts($values_2);
            unset($data['discounts']);
        }
        if (\array_key_exists('note', $data)) {
            $object->setNote($this->denormalizer->denormalize($data['note'], \Jlonom\AllegroSDK\Model\CheckoutFormNoteReference::class, 'json', $context));
            unset($data['note']);
        }
        if (\array_key_exists('marketplace', $data)) {
            $object->setMarketplace($this->denormalizer->denormalize($data['marketplace'], \Jlonom\AllegroSDK\Model\CheckoutFormMarketplace::class, 'json', $context));
            unset($data['marketplace']);
        }
        if (\array_key_exists('summary', $data)) {
            $object->setSummary($this->denormalizer->denormalize($data['summary'], \Jlonom\AllegroSDK\Model\CheckoutFormSummary::class, 'json', $context));
            unset($data['summary']);
        }
        if (\array_key_exists('updatedAt', $data)) {
            $object->setUpdatedAt($data['updatedAt']);
            unset($data['updatedAt']);
        }
        if (\array_key_exists('revision', $data)) {
            $object->setRevision($data['revision']);
            unset($data['revision']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        if ($data->isInitialized('messageToSeller') && null !== $data->getMessageToSeller()) {
            $dataArray['messageToSeller'] = $data->getMessageToSeller();
        }
        $dataArray['buyer'] = $this->normalizer->normalize($data->getBuyer(), 'json', $context);
        if ($data->isInitialized('payment') && null !== $data->getPayment()) {
            $dataArray['payment'] = $this->normalizer->normalize($data->getPayment(), 'json', $context);
        }
        $dataArray['status'] = $data->getStatus();
        if ($data->isInitialized('fulfillment') && null !== $data->getFulfillment()) {
            $dataArray['fulfillment'] = $this->normalizer->normalize($data->getFulfillment(), 'json', $context);
        }
        if ($data->isInitialized('delivery') && null !== $data->getDelivery()) {
            $dataArray['delivery'] = $this->normalizer->normalize($data->getDelivery(), 'json', $context);
        }
        if ($data->isInitialized('invoice') && null !== $data->getInvoice()) {
            $dataArray['invoice'] = $this->normalizer->normalize($data->getInvoice(), 'json', $context);
        }
        $values = [];
        foreach ($data->getLineItems() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['lineItems'] = $values;
        $values_1 = [];
        foreach ($data->getSurcharges() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $dataArray['surcharges'] = $values_1;
        $values_2 = [];
        foreach ($data->getDiscounts() as $value_2) {
            $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
        }
        $dataArray['discounts'] = $values_2;
        if ($data->isInitialized('note') && null !== $data->getNote()) {
            $dataArray['note'] = $this->normalizer->normalize($data->getNote(), 'json', $context);
        }
        if ($data->isInitialized('marketplace') && null !== $data->getMarketplace()) {
            $dataArray['marketplace'] = $this->normalizer->normalize($data->getMarketplace(), 'json', $context);
        }
        $dataArray['summary'] = $this->normalizer->normalize($data->getSummary(), 'json', $context);
        if ($data->isInitialized('updatedAt') && null !== $data->getUpdatedAt()) {
            $dataArray['updatedAt'] = $data->getUpdatedAt();
        }
        if ($data->isInitialized('revision') && null !== $data->getRevision()) {
            $dataArray['revision'] = $data->getRevision();
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jlonom\AllegroSDK\Model\CheckoutForm::class => false];
    }
}