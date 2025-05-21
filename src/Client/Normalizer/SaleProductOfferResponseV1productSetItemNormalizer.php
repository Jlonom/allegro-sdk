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
class SaleProductOfferResponseV1productSetItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\SaleProductOfferResponseV1productSetItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\SaleProductOfferResponseV1productSetItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\SaleProductOfferResponseV1productSetItem();
        if (\array_key_exists('marketedBeforeGPSRObligation', $data) && \is_int($data['marketedBeforeGPSRObligation'])) {
            $data['marketedBeforeGPSRObligation'] = (bool) $data['marketedBeforeGPSRObligation'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('quantity', $data)) {
            $object->setQuantity($this->denormalizer->denormalize($data['quantity'], \Jlonom\AllegroSDK\Model\ProductSetElementQuantityQuantity::class, 'json', $context));
            unset($data['quantity']);
        }
        if (\array_key_exists('product', $data)) {
            $object->setProduct($this->denormalizer->denormalize($data['product'], \Jlonom\AllegroSDK\Model\SaleProductOfferResponseV1productSetItemproduct::class, 'json', $context));
            unset($data['product']);
        }
        if (\array_key_exists('responsiblePerson', $data)) {
            $object->setResponsiblePerson($this->denormalizer->denormalize($data['responsiblePerson'], \Jlonom\AllegroSDK\Model\SaleProductOfferResponseV1productSetItemresponsiblePerson::class, 'json', $context));
            unset($data['responsiblePerson']);
        }
        if (\array_key_exists('responsibleProducer', $data)) {
            $object->setResponsibleProducer($this->denormalizer->denormalize($data['responsibleProducer'], \Jlonom\AllegroSDK\Model\SaleProductOfferResponseV1productSetItemresponsibleProducer::class, 'json', $context));
            unset($data['responsibleProducer']);
        }
        if (\array_key_exists('safetyInformation', $data)) {
            $object->setSafetyInformation($this->denormalizer->denormalize($data['safetyInformation'], \Jlonom\AllegroSDK\Model\ProductSetElementSafetyInformation::class, 'json', $context));
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
        if ($data->isInitialized('quantity') && null !== $data->getQuantity()) {
            $dataArray['quantity'] = $this->normalizer->normalize($data->getQuantity(), 'json', $context);
        }
        if ($data->isInitialized('product') && null !== $data->getProduct()) {
            $dataArray['product'] = $this->normalizer->normalize($data->getProduct(), 'json', $context);
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
        return [\Jlonom\AllegroSDK\Model\SaleProductOfferResponseV1productSetItem::class => false];
    }
}