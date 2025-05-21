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
class ModificationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\Modification::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\Modification::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\Modification();
        if (\array_key_exists('marketedBeforeGPSRObligation', $data) && \is_int($data['marketedBeforeGPSRObligation'])) {
            $data['marketedBeforeGPSRObligation'] = (bool) $data['marketedBeforeGPSRObligation'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('additionalServicesGroup', $data)) {
            $object->setAdditionalServicesGroup($this->denormalizer->denormalize($data['additionalServicesGroup'], \Jlonom\AllegroSDK\Model\AdditionalServicesGroup::class, 'json', $context));
            unset($data['additionalServicesGroup']);
        }
        if (\array_key_exists('delivery', $data)) {
            $object->setDelivery($this->denormalizer->denormalize($data['delivery'], \Jlonom\AllegroSDK\Model\ModificationDelivery::class, 'json', $context));
            unset($data['delivery']);
        }
        if (\array_key_exists('discounts', $data)) {
            $object->setDiscounts($this->denormalizer->denormalize($data['discounts'], \Jlonom\AllegroSDK\Model\ModificationDiscounts::class, 'json', $context));
            unset($data['discounts']);
        }
        if (\array_key_exists('location', $data)) {
            $object->setLocation($this->denormalizer->denormalize($data['location'], \Jlonom\AllegroSDK\Model\Location::class, 'json', $context));
            unset($data['location']);
        }
        if (\array_key_exists('payments', $data)) {
            $object->setPayments($this->denormalizer->denormalize($data['payments'], \Jlonom\AllegroSDK\Model\ModificationPayments::class, 'json', $context));
            unset($data['payments']);
        }
        if (\array_key_exists('sizeTable', $data)) {
            $object->setSizeTable($this->denormalizer->denormalize($data['sizeTable'], \Jlonom\AllegroSDK\Model\SizeTable::class, 'json', $context));
            unset($data['sizeTable']);
        }
        if (\array_key_exists('publication', $data)) {
            $object->setPublication($this->denormalizer->denormalize($data['publication'], \Jlonom\AllegroSDK\Model\ModificationPublication::class, 'json', $context));
            unset($data['publication']);
        }
        if (\array_key_exists('responsiblePerson', $data)) {
            $object->setResponsiblePerson($this->denormalizer->denormalize($data['responsiblePerson'], \Jlonom\AllegroSDK\Model\ModificationResponsiblePerson::class, 'json', $context));
            unset($data['responsiblePerson']);
        }
        if (\array_key_exists('responsibleProducer', $data)) {
            $object->setResponsibleProducer($this->denormalizer->denormalize($data['responsibleProducer'], \Jlonom\AllegroSDK\Model\ModificationResponsibleProducer::class, 'json', $context));
            unset($data['responsibleProducer']);
        }
        if (\array_key_exists('safetyInformation', $data)) {
            $object->setSafetyInformation($this->denormalizer->denormalize($data['safetyInformation'], \Jlonom\AllegroSDK\Model\ModificationSafetyInformation::class, 'json', $context));
            unset($data['safetyInformation']);
        }
        if (\array_key_exists('marketedBeforeGPSRObligation', $data) && $data['marketedBeforeGPSRObligation'] !== null) {
            $object->setMarketedBeforeGPSRObligation($data['marketedBeforeGPSRObligation']);
            unset($data['marketedBeforeGPSRObligation']);
        }
        elseif (\array_key_exists('marketedBeforeGPSRObligation', $data) && $data['marketedBeforeGPSRObligation'] === null) {
            $object->setMarketedBeforeGPSRObligation(null);
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
        if ($data->isInitialized('additionalServicesGroup') && null !== $data->getAdditionalServicesGroup()) {
            $dataArray['additionalServicesGroup'] = $this->normalizer->normalize($data->getAdditionalServicesGroup(), 'json', $context);
        }
        if ($data->isInitialized('delivery') && null !== $data->getDelivery()) {
            $dataArray['delivery'] = $this->normalizer->normalize($data->getDelivery(), 'json', $context);
        }
        if ($data->isInitialized('discounts') && null !== $data->getDiscounts()) {
            $dataArray['discounts'] = $this->normalizer->normalize($data->getDiscounts(), 'json', $context);
        }
        if ($data->isInitialized('location') && null !== $data->getLocation()) {
            $dataArray['location'] = $this->normalizer->normalize($data->getLocation(), 'json', $context);
        }
        if ($data->isInitialized('payments') && null !== $data->getPayments()) {
            $dataArray['payments'] = $this->normalizer->normalize($data->getPayments(), 'json', $context);
        }
        if ($data->isInitialized('sizeTable') && null !== $data->getSizeTable()) {
            $dataArray['sizeTable'] = $this->normalizer->normalize($data->getSizeTable(), 'json', $context);
        }
        if ($data->isInitialized('publication') && null !== $data->getPublication()) {
            $dataArray['publication'] = $this->normalizer->normalize($data->getPublication(), 'json', $context);
        }
        if ($data->isInitialized('responsiblePerson') && null !== $data->getResponsiblePerson()) {
            $dataArray['responsiblePerson'] = $this->normalizer->normalize($data->getResponsiblePerson(), 'json', $context);
        }
        if ($data->isInitialized('responsibleProducer') && null !== $data->getResponsibleProducer()) {
            $dataArray['responsibleProducer'] = $this->normalizer->normalize($data->getResponsibleProducer(), 'json', $context);
        }
        if ($data->isInitialized('safetyInformation') && null !== $data->getSafetyInformation()) {
            $dataArray['safetyInformation'] = $this->normalizer->normalize($data->getSafetyInformation(), 'json', $context);
        }
        if ($data->isInitialized('marketedBeforeGPSRObligation') && null !== $data->getMarketedBeforeGPSRObligation()) {
            $dataArray['marketedBeforeGPSRObligation'] = $data->getMarketedBeforeGPSRObligation();
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
        return [\Jlonom\AllegroSDK\Model\Modification::class => false];
    }
}