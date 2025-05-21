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
class ParametersForPreviewPriceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\ParametersForPreviewPrice::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\ParametersForPreviewPrice::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\ParametersForPreviewPrice();
        if (\array_key_exists('unitPrice', $data) && \is_int($data['unitPrice'])) {
            $data['unitPrice'] = (double) $data['unitPrice'];
        }
        if (\array_key_exists('hasAnyQuantity', $data) && \is_int($data['hasAnyQuantity'])) {
            $data['hasAnyQuantity'] = (bool) $data['hasAnyQuantity'];
        }
        if (\array_key_exists('shop', $data) && \is_int($data['shop'])) {
            $data['shop'] = (bool) $data['shop'];
        }
        if (\array_key_exists('bold', $data) && \is_int($data['bold'])) {
            $data['bold'] = (bool) $data['bold'];
        }
        if (\array_key_exists('highlight', $data) && \is_int($data['highlight'])) {
            $data['highlight'] = (bool) $data['highlight'];
        }
        if (\array_key_exists('departmentPage', $data) && \is_int($data['departmentPage'])) {
            $data['departmentPage'] = (bool) $data['departmentPage'];
        }
        if (\array_key_exists('emphasized', $data) && \is_int($data['emphasized'])) {
            $data['emphasized'] = (bool) $data['emphasized'];
        }
        if (\array_key_exists('emphasizedHighlightBoldPackage', $data) && \is_int($data['emphasizedHighlightBoldPackage'])) {
            $data['emphasizedHighlightBoldPackage'] = (bool) $data['emphasizedHighlightBoldPackage'];
        }
        if (\array_key_exists('multiVariant', $data) && \is_int($data['multiVariant'])) {
            $data['multiVariant'] = (bool) $data['multiVariant'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('category', $data)) {
            $object->setCategory($this->denormalizer->denormalize($data['category'], \Jlonom\AllegroSDK\Model\Category::class, 'json', $context));
            unset($data['category']);
        }
        if (\array_key_exists('condition', $data)) {
            $object->setCondition($data['condition']);
            unset($data['condition']);
        }
        if (\array_key_exists('duration', $data)) {
            $object->setDuration($data['duration']);
            unset($data['duration']);
        }
        if (\array_key_exists('hasAnyQuantity', $data)) {
            $object->setHasAnyQuantity($data['hasAnyQuantity']);
            unset($data['hasAnyQuantity']);
        }
        if (\array_key_exists('numberOfBigPhotos', $data)) {
            $object->setNumberOfBigPhotos($data['numberOfBigPhotos']);
            unset($data['numberOfBigPhotos']);
        }
        if (\array_key_exists('numberOfPhotos', $data)) {
            $object->setNumberOfPhotos($data['numberOfPhotos']);
            unset($data['numberOfPhotos']);
        }
        if (\array_key_exists('quantity', $data)) {
            $object->setQuantity($data['quantity']);
            unset($data['quantity']);
        }
        if (\array_key_exists('shop', $data)) {
            $object->setShop($data['shop']);
            unset($data['shop']);
        }
        if (\array_key_exists('soldQuantity', $data)) {
            $object->setSoldQuantity($data['soldQuantity']);
            unset($data['soldQuantity']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (\array_key_exists('unitPrice', $data)) {
            $object->setUnitPrice($data['unitPrice']);
            unset($data['unitPrice']);
        }
        if (\array_key_exists('bold', $data)) {
            $object->setBold($data['bold']);
            unset($data['bold']);
        }
        if (\array_key_exists('highlight', $data)) {
            $object->setHighlight($data['highlight']);
            unset($data['highlight']);
        }
        if (\array_key_exists('departmentPage', $data)) {
            $object->setDepartmentPage($data['departmentPage']);
            unset($data['departmentPage']);
        }
        if (\array_key_exists('emphasized', $data)) {
            $object->setEmphasized($data['emphasized']);
            unset($data['emphasized']);
        }
        if (\array_key_exists('emphasizedHighlightBoldPackage', $data)) {
            $object->setEmphasizedHighlightBoldPackage($data['emphasizedHighlightBoldPackage']);
            unset($data['emphasizedHighlightBoldPackage']);
        }
        if (\array_key_exists('multiVariant', $data)) {
            $object->setMultiVariant($data['multiVariant']);
            unset($data['multiVariant']);
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
        $dataArray['category'] = $this->normalizer->normalize($data->getCategory(), 'json', $context);
        if ($data->isInitialized('condition') && null !== $data->getCondition()) {
            $dataArray['condition'] = $data->getCondition();
        }
        if ($data->isInitialized('duration') && null !== $data->getDuration()) {
            $dataArray['duration'] = $data->getDuration();
        }
        if ($data->isInitialized('hasAnyQuantity') && null !== $data->getHasAnyQuantity()) {
            $dataArray['hasAnyQuantity'] = $data->getHasAnyQuantity();
        }
        if ($data->isInitialized('numberOfBigPhotos') && null !== $data->getNumberOfBigPhotos()) {
            $dataArray['numberOfBigPhotos'] = $data->getNumberOfBigPhotos();
        }
        if ($data->isInitialized('numberOfPhotos') && null !== $data->getNumberOfPhotos()) {
            $dataArray['numberOfPhotos'] = $data->getNumberOfPhotos();
        }
        if ($data->isInitialized('quantity') && null !== $data->getQuantity()) {
            $dataArray['quantity'] = $data->getQuantity();
        }
        if ($data->isInitialized('shop') && null !== $data->getShop()) {
            $dataArray['shop'] = $data->getShop();
        }
        if ($data->isInitialized('soldQuantity') && null !== $data->getSoldQuantity()) {
            $dataArray['soldQuantity'] = $data->getSoldQuantity();
        }
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['type'] = $data->getType();
        }
        $dataArray['unitPrice'] = $data->getUnitPrice();
        if ($data->isInitialized('bold') && null !== $data->getBold()) {
            $dataArray['bold'] = $data->getBold();
        }
        if ($data->isInitialized('highlight') && null !== $data->getHighlight()) {
            $dataArray['highlight'] = $data->getHighlight();
        }
        if ($data->isInitialized('departmentPage') && null !== $data->getDepartmentPage()) {
            $dataArray['departmentPage'] = $data->getDepartmentPage();
        }
        if ($data->isInitialized('emphasized') && null !== $data->getEmphasized()) {
            $dataArray['emphasized'] = $data->getEmphasized();
        }
        if ($data->isInitialized('emphasizedHighlightBoldPackage') && null !== $data->getEmphasizedHighlightBoldPackage()) {
            $dataArray['emphasizedHighlightBoldPackage'] = $data->getEmphasizedHighlightBoldPackage();
        }
        if ($data->isInitialized('multiVariant') && null !== $data->getMultiVariant()) {
            $dataArray['multiVariant'] = $data->getMultiVariant();
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
        return [\Jlonom\AllegroSDK\Model\ParametersForPreviewPrice::class => false];
    }
}