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
class PromotionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\Promotion::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\Promotion::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\Promotion();
        if (\array_key_exists('emphasized1d', $data) && \is_int($data['emphasized1d'])) {
            $data['emphasized1d'] = (bool) $data['emphasized1d'];
        }
        if (\array_key_exists('emphasized10d', $data) && \is_int($data['emphasized10d'])) {
            $data['emphasized10d'] = (bool) $data['emphasized10d'];
        }
        if (\array_key_exists('promoPackage', $data) && \is_int($data['promoPackage'])) {
            $data['promoPackage'] = (bool) $data['promoPackage'];
        }
        if (\array_key_exists('departmentPage', $data) && \is_int($data['departmentPage'])) {
            $data['departmentPage'] = (bool) $data['departmentPage'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('emphasized1d', $data)) {
            $object->setEmphasized1d($data['emphasized1d']);
            unset($data['emphasized1d']);
        }
        if (\array_key_exists('emphasized10d', $data)) {
            $object->setEmphasized10d($data['emphasized10d']);
            unset($data['emphasized10d']);
        }
        if (\array_key_exists('promoPackage', $data)) {
            $object->setPromoPackage($data['promoPackage']);
            unset($data['promoPackage']);
        }
        if (\array_key_exists('departmentPage', $data)) {
            $object->setDepartmentPage($data['departmentPage']);
            unset($data['departmentPage']);
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
        if ($data->isInitialized('emphasized1d') && null !== $data->getEmphasized1d()) {
            $dataArray['emphasized1d'] = $data->getEmphasized1d();
        }
        if ($data->isInitialized('emphasized10d') && null !== $data->getEmphasized10d()) {
            $dataArray['emphasized10d'] = $data->getEmphasized10d();
        }
        if ($data->isInitialized('promoPackage') && null !== $data->getPromoPackage()) {
            $dataArray['promoPackage'] = $data->getPromoPackage();
        }
        if ($data->isInitialized('departmentPage') && null !== $data->getDepartmentPage()) {
            $dataArray['departmentPage'] = $data->getDepartmentPage();
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
        return [\Jlonom\AllegroSDK\Model\Promotion::class => false];
    }
}