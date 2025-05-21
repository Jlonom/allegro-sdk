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
class OfferPromotionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\OfferPromotion::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\OfferPromotion::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\OfferPromotion();
        if (\array_key_exists('emphasized', $data) && \is_int($data['emphasized'])) {
            $data['emphasized'] = (bool) $data['emphasized'];
        }
        if (\array_key_exists('bold', $data) && \is_int($data['bold'])) {
            $data['bold'] = (bool) $data['bold'];
        }
        if (\array_key_exists('highlight', $data) && \is_int($data['highlight'])) {
            $data['highlight'] = (bool) $data['highlight'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('emphasized', $data)) {
            $object->setEmphasized($data['emphasized']);
            unset($data['emphasized']);
        }
        if (\array_key_exists('bold', $data)) {
            $object->setBold($data['bold']);
            unset($data['bold']);
        }
        if (\array_key_exists('highlight', $data)) {
            $object->setHighlight($data['highlight']);
            unset($data['highlight']);
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
        if ($data->isInitialized('emphasized') && null !== $data->getEmphasized()) {
            $dataArray['emphasized'] = $data->getEmphasized();
        }
        if ($data->isInitialized('bold') && null !== $data->getBold()) {
            $dataArray['bold'] = $data->getBold();
        }
        if ($data->isInitialized('highlight') && null !== $data->getHighlight()) {
            $dataArray['highlight'] = $data->getHighlight();
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
        return [\Jlonom\AllegroSDK\Model\OfferPromotion::class => false];
    }
}