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
class CheckoutFormLineItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\CheckoutFormLineItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\CheckoutFormLineItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\CheckoutFormLineItem();
        if (\array_key_exists('quantity', $data) && \is_int($data['quantity'])) {
            $data['quantity'] = (double) $data['quantity'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('offer', $data)) {
            $object->setOffer($this->denormalizer->denormalize($data['offer'], \Jlonom\AllegroSDK\Model\OfferReference::class, 'json', $context));
            unset($data['offer']);
        }
        if (\array_key_exists('quantity', $data)) {
            $object->setQuantity($data['quantity']);
            unset($data['quantity']);
        }
        if (\array_key_exists('originalPrice', $data)) {
            $object->setOriginalPrice($this->denormalizer->denormalize($data['originalPrice'], \Jlonom\AllegroSDK\Model\Price::class, 'json', $context));
            unset($data['originalPrice']);
        }
        if (\array_key_exists('price', $data)) {
            $object->setPrice($this->denormalizer->denormalize($data['price'], \Jlonom\AllegroSDK\Model\Price::class, 'json', $context));
            unset($data['price']);
        }
        if (\array_key_exists('reconciliation', $data)) {
            $object->setReconciliation($this->denormalizer->denormalize($data['reconciliation'], \Jlonom\AllegroSDK\Model\LineItemReconciliation::class, 'json', $context));
            unset($data['reconciliation']);
        }
        if (\array_key_exists('selectedAdditionalServices', $data)) {
            $values = [];
            foreach ($data['selectedAdditionalServices'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jlonom\AllegroSDK\Model\CheckoutFormAdditionalService::class, 'json', $context);
            }
            $object->setSelectedAdditionalServices($values);
            unset($data['selectedAdditionalServices']);
        }
        if (\array_key_exists('vouchers', $data)) {
            $values_1 = [];
            foreach ($data['vouchers'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jlonom\AllegroSDK\Model\LineItemVoucher::class, 'json', $context);
            }
            $object->setVouchers($values_1);
            unset($data['vouchers']);
        }
        if (\array_key_exists('tax', $data)) {
            $object->setTax($this->denormalizer->denormalize($data['tax'], \Jlonom\AllegroSDK\Model\CheckoutFormLineItemTax::class, 'json', $context));
            unset($data['tax']);
        }
        if (\array_key_exists('boughtAt', $data)) {
            $object->setBoughtAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['boughtAt']));
            unset($data['boughtAt']);
        }
        if (\array_key_exists('discounts', $data)) {
            $values_2 = [];
            foreach ($data['discounts'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Jlonom\AllegroSDK\Model\LineItemDiscount::class, 'json', $context);
            }
            $object->setDiscounts($values_2);
            unset($data['discounts']);
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
        $dataArray['offer'] = $this->normalizer->normalize($data->getOffer(), 'json', $context);
        $dataArray['quantity'] = $data->getQuantity();
        $dataArray['originalPrice'] = $this->normalizer->normalize($data->getOriginalPrice(), 'json', $context);
        $dataArray['price'] = $this->normalizer->normalize($data->getPrice(), 'json', $context);
        if ($data->isInitialized('reconciliation') && null !== $data->getReconciliation()) {
            $dataArray['reconciliation'] = $this->normalizer->normalize($data->getReconciliation(), 'json', $context);
        }
        if ($data->isInitialized('selectedAdditionalServices') && null !== $data->getSelectedAdditionalServices()) {
            $values = [];
            foreach ($data->getSelectedAdditionalServices() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['selectedAdditionalServices'] = $values;
        }
        if ($data->isInitialized('vouchers') && null !== $data->getVouchers()) {
            $values_1 = [];
            foreach ($data->getVouchers() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['vouchers'] = $values_1;
        }
        if ($data->isInitialized('tax') && null !== $data->getTax()) {
            $dataArray['tax'] = $this->normalizer->normalize($data->getTax(), 'json', $context);
        }
        if ($data->isInitialized('boughtAt') && null !== $data->getBoughtAt()) {
            $dataArray['boughtAt'] = $data->getBoughtAt()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('discounts') && null !== $data->getDiscounts()) {
            $values_2 = [];
            foreach ($data->getDiscounts() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['discounts'] = $values_2;
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
        return [\Jlonom\AllegroSDK\Model\CheckoutFormLineItem::class => false];
    }
}