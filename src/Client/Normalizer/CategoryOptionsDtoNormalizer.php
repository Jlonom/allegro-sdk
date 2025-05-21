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
class CategoryOptionsDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\CategoryOptionsDto::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\CategoryOptionsDto::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\CategoryOptionsDto();
        if (\array_key_exists('advertisement', $data) && \is_int($data['advertisement'])) {
            $data['advertisement'] = (bool) $data['advertisement'];
        }
        if (\array_key_exists('advertisementPriceOptional', $data) && \is_int($data['advertisementPriceOptional'])) {
            $data['advertisementPriceOptional'] = (bool) $data['advertisementPriceOptional'];
        }
        if (\array_key_exists('variantsByColorPatternAllowed', $data) && \is_int($data['variantsByColorPatternAllowed'])) {
            $data['variantsByColorPatternAllowed'] = (bool) $data['variantsByColorPatternAllowed'];
        }
        if (\array_key_exists('offersWithProductPublicationEnabled', $data) && \is_int($data['offersWithProductPublicationEnabled'])) {
            $data['offersWithProductPublicationEnabled'] = (bool) $data['offersWithProductPublicationEnabled'];
        }
        if (\array_key_exists('productCreationEnabled', $data) && \is_int($data['productCreationEnabled'])) {
            $data['productCreationEnabled'] = (bool) $data['productCreationEnabled'];
        }
        if (\array_key_exists('customParametersEnabled', $data) && \is_int($data['customParametersEnabled'])) {
            $data['customParametersEnabled'] = (bool) $data['customParametersEnabled'];
        }
        if (\array_key_exists('sellerCanRequirePurchaseComments', $data) && \is_int($data['sellerCanRequirePurchaseComments'])) {
            $data['sellerCanRequirePurchaseComments'] = (bool) $data['sellerCanRequirePurchaseComments'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('advertisement', $data)) {
            $object->setAdvertisement($data['advertisement']);
            unset($data['advertisement']);
        }
        if (\array_key_exists('advertisementPriceOptional', $data)) {
            $object->setAdvertisementPriceOptional($data['advertisementPriceOptional']);
            unset($data['advertisementPriceOptional']);
        }
        if (\array_key_exists('variantsByColorPatternAllowed', $data)) {
            $object->setVariantsByColorPatternAllowed($data['variantsByColorPatternAllowed']);
            unset($data['variantsByColorPatternAllowed']);
        }
        if (\array_key_exists('offersWithProductPublicationEnabled', $data)) {
            $object->setOffersWithProductPublicationEnabled($data['offersWithProductPublicationEnabled']);
            unset($data['offersWithProductPublicationEnabled']);
        }
        if (\array_key_exists('productCreationEnabled', $data)) {
            $object->setProductCreationEnabled($data['productCreationEnabled']);
            unset($data['productCreationEnabled']);
        }
        if (\array_key_exists('customParametersEnabled', $data)) {
            $object->setCustomParametersEnabled($data['customParametersEnabled']);
            unset($data['customParametersEnabled']);
        }
        if (\array_key_exists('sellerCanRequirePurchaseComments', $data)) {
            $object->setSellerCanRequirePurchaseComments($data['sellerCanRequirePurchaseComments']);
            unset($data['sellerCanRequirePurchaseComments']);
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
        if ($data->isInitialized('advertisement') && null !== $data->getAdvertisement()) {
            $dataArray['advertisement'] = $data->getAdvertisement();
        }
        if ($data->isInitialized('advertisementPriceOptional') && null !== $data->getAdvertisementPriceOptional()) {
            $dataArray['advertisementPriceOptional'] = $data->getAdvertisementPriceOptional();
        }
        if ($data->isInitialized('variantsByColorPatternAllowed') && null !== $data->getVariantsByColorPatternAllowed()) {
            $dataArray['variantsByColorPatternAllowed'] = $data->getVariantsByColorPatternAllowed();
        }
        if ($data->isInitialized('offersWithProductPublicationEnabled') && null !== $data->getOffersWithProductPublicationEnabled()) {
            $dataArray['offersWithProductPublicationEnabled'] = $data->getOffersWithProductPublicationEnabled();
        }
        if ($data->isInitialized('productCreationEnabled') && null !== $data->getProductCreationEnabled()) {
            $dataArray['productCreationEnabled'] = $data->getProductCreationEnabled();
        }
        if ($data->isInitialized('customParametersEnabled') && null !== $data->getCustomParametersEnabled()) {
            $dataArray['customParametersEnabled'] = $data->getCustomParametersEnabled();
        }
        if ($data->isInitialized('sellerCanRequirePurchaseComments') && null !== $data->getSellerCanRequirePurchaseComments()) {
            $dataArray['sellerCanRequirePurchaseComments'] = $data->getSellerCanRequirePurchaseComments();
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
        return [\Jlonom\AllegroSDK\Model\CategoryOptionsDto::class => false];
    }
}