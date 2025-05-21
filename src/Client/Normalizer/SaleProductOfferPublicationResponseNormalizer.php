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
class SaleProductOfferPublicationResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\SaleProductOfferPublicationResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\SaleProductOfferPublicationResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\SaleProductOfferPublicationResponse();
        if (\array_key_exists('republish', $data) && \is_int($data['republish'])) {
            $data['republish'] = (bool) $data['republish'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('duration', $data)) {
            $object->setDuration($data['duration']);
            unset($data['duration']);
        }
        if (\array_key_exists('startingAt', $data)) {
            $object->setStartingAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['startingAt']));
            unset($data['startingAt']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('republish', $data)) {
            $object->setRepublish($data['republish']);
            unset($data['republish']);
        }
        if (\array_key_exists('endingAt', $data)) {
            $object->setEndingAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['endingAt']));
            unset($data['endingAt']);
        }
        if (\array_key_exists('endedBy', $data)) {
            $object->setEndedBy($data['endedBy']);
            unset($data['endedBy']);
        }
        if (\array_key_exists('marketplaces', $data)) {
            $object->setMarketplaces($this->denormalizer->denormalize($data['marketplaces'], \Jlonom\AllegroSDK\Model\SaleProductOfferPublicationMarketplacesResponse::class, 'json', $context));
            unset($data['marketplaces']);
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
        if ($data->isInitialized('duration') && null !== $data->getDuration()) {
            $dataArray['duration'] = $data->getDuration();
        }
        if ($data->isInitialized('startingAt') && null !== $data->getStartingAt()) {
            $dataArray['startingAt'] = $data->getStartingAt()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('republish') && null !== $data->getRepublish()) {
            $dataArray['republish'] = $data->getRepublish();
        }
        if ($data->isInitialized('endingAt') && null !== $data->getEndingAt()) {
            $dataArray['endingAt'] = $data->getEndingAt()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('marketplaces') && null !== $data->getMarketplaces()) {
            $dataArray['marketplaces'] = $this->normalizer->normalize($data->getMarketplaces(), 'json', $context);
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
        return [\Jlonom\AllegroSDK\Model\SaleProductOfferPublicationResponse::class => false];
    }
}