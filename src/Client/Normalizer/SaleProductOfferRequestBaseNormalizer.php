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
class SaleProductOfferRequestBaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\SaleProductOfferRequestBase::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\SaleProductOfferRequestBase::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\SaleProductOfferRequestBase();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('category', $data)) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['category'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setCategory($values);
            unset($data['category']);
        }
        if (\array_key_exists('parameters', $data)) {
            $values_1 = [];
            foreach ($data['parameters'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jlonom\AllegroSDK\Model\ParameterProductOfferRequest::class, 'json', $context);
            }
            $object->setParameters($values_1);
            unset($data['parameters']);
        }
        if (\array_key_exists('publication', $data)) {
            $object->setPublication($this->denormalizer->denormalize($data['publication'], \Jlonom\AllegroSDK\Model\SaleProductOfferRequestBasepublication::class, 'json', $context));
            unset($data['publication']);
        }
        if (\array_key_exists('delivery', $data)) {
            $object->setDelivery($this->denormalizer->denormalize($data['delivery'], \Jlonom\AllegroSDK\Model\SaleProductOfferRequestBasedelivery::class, 'json', $context));
            unset($data['delivery']);
        }
        if (\array_key_exists('afterSalesServices', $data)) {
            $object->setAfterSalesServices($this->denormalizer->denormalize($data['afterSalesServices'], \Jlonom\AllegroSDK\Model\AfterSalesServicesProductOfferRequest::class, 'json', $context));
            unset($data['afterSalesServices']);
        }
        if (\array_key_exists('sizeTable', $data)) {
            $object->setSizeTable($this->denormalizer->denormalize($data['sizeTable'], \Jlonom\AllegroSDK\Model\SizeTable::class, 'json', $context));
            unset($data['sizeTable']);
        }
        if (\array_key_exists('contact', $data)) {
            $object->setContact($this->denormalizer->denormalize($data['contact'], \Jlonom\AllegroSDK\Model\SaleProductOfferRequestBasecontact::class, 'json', $context));
            unset($data['contact']);
        }
        if (\array_key_exists('discounts', $data)) {
            $object->setDiscounts($this->denormalizer->denormalize($data['discounts'], \Jlonom\AllegroSDK\Model\DiscountsProductOfferRequest::class, 'json', $context));
            unset($data['discounts']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('payments', $data)) {
            $object->setPayments($this->denormalizer->denormalize($data['payments'], \Jlonom\AllegroSDK\Model\Payments::class, 'json', $context));
            unset($data['payments']);
        }
        if (\array_key_exists('sellingMode', $data)) {
            $object->setSellingMode($this->denormalizer->denormalize($data['sellingMode'], \Jlonom\AllegroSDK\Model\SellingMode::class, 'json', $context));
            unset($data['sellingMode']);
        }
        if (\array_key_exists('location', $data)) {
            $object->setLocation($this->denormalizer->denormalize($data['location'], \Jlonom\AllegroSDK\Model\Location::class, 'json', $context));
            unset($data['location']);
        }
        if (\array_key_exists('images', $data)) {
            $values_2 = [];
            foreach ($data['images'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setImages($values_2);
            unset($data['images']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($this->denormalizer->denormalize($data['description'], \Jlonom\AllegroSDK\Model\StandardizedDescription::class, 'json', $context));
            unset($data['description']);
        }
        if (\array_key_exists('external', $data)) {
            $object->setExternal($this->denormalizer->denormalize($data['external'], \Jlonom\AllegroSDK\Model\ExternalId::class, 'json', $context));
            unset($data['external']);
        }
        if (\array_key_exists('taxSettings', $data)) {
            $object->setTaxSettings($this->denormalizer->denormalize($data['taxSettings'], \Jlonom\AllegroSDK\Model\OfferTaxSettings::class, 'json', $context));
            unset($data['taxSettings']);
        }
        if (\array_key_exists('messageToSellerSettings', $data)) {
            $object->setMessageToSellerSettings($this->denormalizer->denormalize($data['messageToSellerSettings'], \Jlonom\AllegroSDK\Model\MessageToSellerSettings::class, 'json', $context));
            unset($data['messageToSellerSettings']);
        }
        foreach ($data as $key_1 => $value_3) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_3;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('category') && null !== $data->getCategory()) {
            $values = [];
            foreach ($data->getCategory() as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['category'] = $values;
        }
        if ($data->isInitialized('parameters') && null !== $data->getParameters()) {
            $values_1 = [];
            foreach ($data->getParameters() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['parameters'] = $values_1;
        }
        if ($data->isInitialized('publication') && null !== $data->getPublication()) {
            $dataArray['publication'] = $this->normalizer->normalize($data->getPublication(), 'json', $context);
        }
        if ($data->isInitialized('delivery') && null !== $data->getDelivery()) {
            $dataArray['delivery'] = $this->normalizer->normalize($data->getDelivery(), 'json', $context);
        }
        if ($data->isInitialized('afterSalesServices') && null !== $data->getAfterSalesServices()) {
            $dataArray['afterSalesServices'] = $this->normalizer->normalize($data->getAfterSalesServices(), 'json', $context);
        }
        if ($data->isInitialized('sizeTable') && null !== $data->getSizeTable()) {
            $dataArray['sizeTable'] = $this->normalizer->normalize($data->getSizeTable(), 'json', $context);
        }
        if ($data->isInitialized('contact') && null !== $data->getContact()) {
            $dataArray['contact'] = $this->normalizer->normalize($data->getContact(), 'json', $context);
        }
        if ($data->isInitialized('discounts') && null !== $data->getDiscounts()) {
            $dataArray['discounts'] = $this->normalizer->normalize($data->getDiscounts(), 'json', $context);
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('payments') && null !== $data->getPayments()) {
            $dataArray['payments'] = $this->normalizer->normalize($data->getPayments(), 'json', $context);
        }
        if ($data->isInitialized('sellingMode') && null !== $data->getSellingMode()) {
            $dataArray['sellingMode'] = $this->normalizer->normalize($data->getSellingMode(), 'json', $context);
        }
        if ($data->isInitialized('location') && null !== $data->getLocation()) {
            $dataArray['location'] = $this->normalizer->normalize($data->getLocation(), 'json', $context);
        }
        if ($data->isInitialized('images') && null !== $data->getImages()) {
            $values_2 = [];
            foreach ($data->getImages() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['images'] = $values_2;
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $this->normalizer->normalize($data->getDescription(), 'json', $context);
        }
        if ($data->isInitialized('external') && null !== $data->getExternal()) {
            $dataArray['external'] = $this->normalizer->normalize($data->getExternal(), 'json', $context);
        }
        if ($data->isInitialized('taxSettings') && null !== $data->getTaxSettings()) {
            $dataArray['taxSettings'] = $this->normalizer->normalize($data->getTaxSettings(), 'json', $context);
        }
        if ($data->isInitialized('messageToSellerSettings') && null !== $data->getMessageToSellerSettings()) {
            $dataArray['messageToSellerSettings'] = $this->normalizer->normalize($data->getMessageToSellerSettings(), 'json', $context);
        }
        foreach ($data as $key_1 => $value_3) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_3;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jlonom\AllegroSDK\Model\SaleProductOfferRequestBase::class => false];
    }
}