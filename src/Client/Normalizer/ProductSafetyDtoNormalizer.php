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
class ProductSafetyDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\ProductSafetyDto::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\ProductSafetyDto::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\ProductSafetyDto();
        if (\array_key_exists('marketedBeforeGPSRObligation', $data) && \is_int($data['marketedBeforeGPSRObligation'])) {
            $data['marketedBeforeGPSRObligation'] = (bool) $data['marketedBeforeGPSRObligation'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('responsibleProducers', $data) && $data['responsibleProducers'] !== null) {
            $values = [];
            foreach ($data['responsibleProducers'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jlonom\AllegroSDK\Model\ResponsibleProducerResponse::class, 'json', $context);
            }
            $object->setResponsibleProducers($values);
            unset($data['responsibleProducers']);
        }
        elseif (\array_key_exists('responsibleProducers', $data) && $data['responsibleProducers'] === null) {
            $object->setResponsibleProducers(null);
        }
        if (\array_key_exists('safetyInformation', $data)) {
            $object->setSafetyInformation($this->denormalizer->denormalize($data['safetyInformation'], \Jlonom\AllegroSDK\Model\ProductSafetyDtoSafetyInformation::class, 'json', $context));
            unset($data['safetyInformation']);
        }
        if (\array_key_exists('marketedBeforeGPSRObligation', $data) && $data['marketedBeforeGPSRObligation'] !== null) {
            $object->setMarketedBeforeGPSRObligation($data['marketedBeforeGPSRObligation']);
            unset($data['marketedBeforeGPSRObligation']);
        }
        elseif (\array_key_exists('marketedBeforeGPSRObligation', $data) && $data['marketedBeforeGPSRObligation'] === null) {
            $object->setMarketedBeforeGPSRObligation(null);
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
        if ($data->isInitialized('responsibleProducers') && null !== $data->getResponsibleProducers()) {
            $values = [];
            foreach ($data->getResponsibleProducers() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['responsibleProducers'] = $values;
        }
        if ($data->isInitialized('safetyInformation') && null !== $data->getSafetyInformation()) {
            $dataArray['safetyInformation'] = $this->normalizer->normalize($data->getSafetyInformation(), 'json', $context);
        }
        if ($data->isInitialized('marketedBeforeGPSRObligation') && null !== $data->getMarketedBeforeGPSRObligation()) {
            $dataArray['marketedBeforeGPSRObligation'] = $data->getMarketedBeforeGPSRObligation();
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
        return [\Jlonom\AllegroSDK\Model\ProductSafetyDto::class => false];
    }
}