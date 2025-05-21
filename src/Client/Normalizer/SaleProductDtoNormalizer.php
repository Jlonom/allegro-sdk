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
class SaleProductDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\SaleProductDto::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\SaleProductDto::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\SaleProductDto();
        if (\array_key_exists('isDraft', $data) && \is_int($data['isDraft'])) {
            $data['isDraft'] = (bool) $data['isDraft'];
        }
        if (\array_key_exists('hasProtectedBrand', $data) && \is_int($data['hasProtectedBrand'])) {
            $data['hasProtectedBrand'] = (bool) $data['hasProtectedBrand'];
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
        if (\array_key_exists('category', $data)) {
            $object->setCategory($this->denormalizer->denormalize($data['category'], \Jlonom\AllegroSDK\Model\ProductCategoryWithPath::class, 'json', $context));
            unset($data['category']);
        }
        if (\array_key_exists('images', $data)) {
            $values = [];
            foreach ($data['images'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jlonom\AllegroSDK\Model\ImageUrl::class, 'json', $context);
            }
            $object->setImages($values);
            unset($data['images']);
        }
        if (\array_key_exists('parameters', $data)) {
            $values_1 = [];
            foreach ($data['parameters'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jlonom\AllegroSDK\Model\ProductParameterDto::class, 'json', $context);
            }
            $object->setParameters($values_1);
            unset($data['parameters']);
        }
        if (\array_key_exists('offerRequirements', $data)) {
            $object->setOfferRequirements($this->denormalizer->denormalize($data['offerRequirements'], \Jlonom\AllegroSDK\Model\OfferRequirements::class, 'json', $context));
            unset($data['offerRequirements']);
        }
        if (\array_key_exists('compatibilityList', $data)) {
            $object->setCompatibilityList($this->denormalizer->denormalize($data['compatibilityList'], \Jlonom\AllegroSDK\Model\SaleProductCompatibilityList::class, 'json', $context));
            unset($data['compatibilityList']);
        }
        if (\array_key_exists('tecdocSpecification', $data)) {
            $object->setTecdocSpecification($this->denormalizer->denormalize($data['tecdocSpecification'], \Jlonom\AllegroSDK\Model\TecdocSpecification::class, 'json', $context));
            unset($data['tecdocSpecification']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($this->denormalizer->denormalize($data['description'], \Jlonom\AllegroSDK\Model\StandardizedDescription::class, 'json', $context));
            unset($data['description']);
        }
        if (\array_key_exists('isDraft', $data)) {
            $object->setIsDraft($data['isDraft']);
            unset($data['isDraft']);
        }
        if (\array_key_exists('aiCoCreatedContent', $data)) {
            $object->setAiCoCreatedContent($this->denormalizer->denormalize($data['aiCoCreatedContent'], \Jlonom\AllegroSDK\Model\AiCoCreatedContent::class, 'json', $context));
            unset($data['aiCoCreatedContent']);
        }
        if (\array_key_exists('trustedContent', $data)) {
            $object->setTrustedContent($this->denormalizer->denormalize($data['trustedContent'], \Jlonom\AllegroSDK\Model\TrustedContent::class, 'json', $context));
            unset($data['trustedContent']);
        }
        if (\array_key_exists('hasProtectedBrand', $data)) {
            $object->setHasProtectedBrand($data['hasProtectedBrand']);
            unset($data['hasProtectedBrand']);
        }
        if (\array_key_exists('publication', $data)) {
            $object->setPublication($this->denormalizer->denormalize($data['publication'], \Jlonom\AllegroSDK\Model\SaleProductDtoPublication::class, 'json', $context));
            unset($data['publication']);
        }
        if (\array_key_exists('productSafety', $data) && $data['productSafety'] !== null) {
            $object->setProductSafety($this->denormalizer->denormalize($data['productSafety'], \Jlonom\AllegroSDK\Model\ProductSafetyDto::class, 'json', $context));
            unset($data['productSafety']);
        }
        elseif (\array_key_exists('productSafety', $data) && $data['productSafety'] === null) {
            $object->setProductSafety(null);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        $dataArray['name'] = $data->getName();
        $dataArray['category'] = $this->normalizer->normalize($data->getCategory(), 'json', $context);
        if ($data->isInitialized('images') && null !== $data->getImages()) {
            $values = [];
            foreach ($data->getImages() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['images'] = $values;
        }
        if ($data->isInitialized('parameters') && null !== $data->getParameters()) {
            $values_1 = [];
            foreach ($data->getParameters() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['parameters'] = $values_1;
        }
        if ($data->isInitialized('offerRequirements') && null !== $data->getOfferRequirements()) {
            $dataArray['offerRequirements'] = $this->normalizer->normalize($data->getOfferRequirements(), 'json', $context);
        }
        if ($data->isInitialized('compatibilityList') && null !== $data->getCompatibilityList()) {
            $dataArray['compatibilityList'] = $this->normalizer->normalize($data->getCompatibilityList(), 'json', $context);
        }
        if ($data->isInitialized('tecdocSpecification') && null !== $data->getTecdocSpecification()) {
            $dataArray['tecdocSpecification'] = $this->normalizer->normalize($data->getTecdocSpecification(), 'json', $context);
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $this->normalizer->normalize($data->getDescription(), 'json', $context);
        }
        if ($data->isInitialized('isDraft') && null !== $data->getIsDraft()) {
            $dataArray['isDraft'] = $data->getIsDraft();
        }
        if ($data->isInitialized('aiCoCreatedContent') && null !== $data->getAiCoCreatedContent()) {
            $dataArray['aiCoCreatedContent'] = $this->normalizer->normalize($data->getAiCoCreatedContent(), 'json', $context);
        }
        if ($data->isInitialized('trustedContent') && null !== $data->getTrustedContent()) {
            $dataArray['trustedContent'] = $this->normalizer->normalize($data->getTrustedContent(), 'json', $context);
        }
        if ($data->isInitialized('hasProtectedBrand') && null !== $data->getHasProtectedBrand()) {
            $dataArray['hasProtectedBrand'] = $data->getHasProtectedBrand();
        }
        if ($data->isInitialized('publication') && null !== $data->getPublication()) {
            $dataArray['publication'] = $this->normalizer->normalize($data->getPublication(), 'json', $context);
        }
        if ($data->isInitialized('productSafety') && null !== $data->getProductSafety()) {
            $dataArray['productSafety'] = $this->normalizer->normalize($data->getProductSafety(), 'json', $context);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jlonom\AllegroSDK\Model\SaleProductDto::class => false];
    }
}