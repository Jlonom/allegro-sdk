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
class SaleDeliveryMethodsGetResponse200DeliveryMethodsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItem();
        if (\array_key_exists('allegroEndorsed', $data) && \is_int($data['allegroEndorsed'])) {
            $data['allegroEndorsed'] = (bool) $data['allegroEndorsed'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('marketplaces', $data)) {
            $values = [];
            foreach ($data['marketplaces'] as $value) {
                $values[] = $value;
            }
            $object->setMarketplaces($values);
            unset($data['marketplaces']);
        }
        if (\array_key_exists('paymentPolicy', $data)) {
            $object->setPaymentPolicy($data['paymentPolicy']);
            unset($data['paymentPolicy']);
        }
        if (\array_key_exists('allegroEndorsed', $data)) {
            $object->setAllegroEndorsed($data['allegroEndorsed']);
            unset($data['allegroEndorsed']);
        }
        if (\array_key_exists('dispatchCountry', $data) && $data['dispatchCountry'] !== null) {
            $object->setDispatchCountry($data['dispatchCountry']);
            unset($data['dispatchCountry']);
        }
        elseif (\array_key_exists('dispatchCountry', $data) && $data['dispatchCountry'] === null) {
            $object->setDispatchCountry(null);
        }
        if (\array_key_exists('destinationCountry', $data)) {
            $object->setDestinationCountry($data['destinationCountry']);
            unset($data['destinationCountry']);
        }
        if (\array_key_exists('shippingRatesConstraints', $data)) {
            $object->setShippingRatesConstraints($this->denormalizer->denormalize($data['shippingRatesConstraints'], \Jlonom\AllegroSDK\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraints::class, 'json', $context));
            unset($data['shippingRatesConstraints']);
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
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('marketplaces') && null !== $data->getMarketplaces()) {
            $values = [];
            foreach ($data->getMarketplaces() as $value) {
                $values[] = $value;
            }
            $dataArray['marketplaces'] = $values;
        }
        if ($data->isInitialized('paymentPolicy') && null !== $data->getPaymentPolicy()) {
            $dataArray['paymentPolicy'] = $data->getPaymentPolicy();
        }
        if ($data->isInitialized('allegroEndorsed') && null !== $data->getAllegroEndorsed()) {
            $dataArray['allegroEndorsed'] = $data->getAllegroEndorsed();
        }
        if ($data->isInitialized('dispatchCountry') && null !== $data->getDispatchCountry()) {
            $dataArray['dispatchCountry'] = $data->getDispatchCountry();
        }
        if ($data->isInitialized('destinationCountry') && null !== $data->getDestinationCountry()) {
            $dataArray['destinationCountry'] = $data->getDestinationCountry();
        }
        if ($data->isInitialized('shippingRatesConstraints') && null !== $data->getShippingRatesConstraints()) {
            $dataArray['shippingRatesConstraints'] = $this->normalizer->normalize($data->getShippingRatesConstraints(), 'json', $context);
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
        return [\Jlonom\AllegroSDK\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItem::class => false];
    }
}