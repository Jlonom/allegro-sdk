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
class AfterSalesServicesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\AfterSalesServices::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\AfterSalesServices::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\AfterSalesServices();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('impliedWarranty', $data)) {
            $object->setImpliedWarranty($this->denormalizer->denormalize($data['impliedWarranty'], \Jlonom\AllegroSDK\Model\ImpliedWarranty::class, 'json', $context));
            unset($data['impliedWarranty']);
        }
        if (\array_key_exists('returnPolicy', $data)) {
            $object->setReturnPolicy($this->denormalizer->denormalize($data['returnPolicy'], \Jlonom\AllegroSDK\Model\ReturnPolicy::class, 'json', $context));
            unset($data['returnPolicy']);
        }
        if (\array_key_exists('warranty', $data)) {
            $object->setWarranty($this->denormalizer->denormalize($data['warranty'], \Jlonom\AllegroSDK\Model\Warranty::class, 'json', $context));
            unset($data['warranty']);
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
        if ($data->isInitialized('impliedWarranty') && null !== $data->getImpliedWarranty()) {
            $dataArray['impliedWarranty'] = $this->normalizer->normalize($data->getImpliedWarranty(), 'json', $context);
        }
        if ($data->isInitialized('returnPolicy') && null !== $data->getReturnPolicy()) {
            $dataArray['returnPolicy'] = $this->normalizer->normalize($data->getReturnPolicy(), 'json', $context);
        }
        if ($data->isInitialized('warranty') && null !== $data->getWarranty()) {
            $dataArray['warranty'] = $this->normalizer->normalize($data->getWarranty(), 'json', $context);
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
        return [\Jlonom\AllegroSDK\Model\AfterSalesServices::class => false];
    }
}