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
class PromoModificationTaskNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\PromoModificationTask::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\PromoModificationTask::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\PromoModificationTask();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('offer', $data)) {
            $object->setOffer($this->denormalizer->denormalize($data['offer'], \Jlonom\AllegroSDK\Model\OfferId::class, 'json', $context));
            unset($data['offer']);
        }
        if (\array_key_exists('marketplaceId', $data)) {
            $object->setMarketplaceId($data['marketplaceId']);
            unset($data['marketplaceId']);
        }
        if (\array_key_exists('scheduledAt', $data)) {
            $object->setScheduledAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['scheduledAt']));
            unset($data['scheduledAt']);
        }
        if (\array_key_exists('finishedAt', $data)) {
            $object->setFinishedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['finishedAt']));
            unset($data['finishedAt']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('errors', $data)) {
            $values = [];
            foreach ($data['errors'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jlonom\AllegroSDK\Model\Error::class, 'json', $context);
            }
            $object->setErrors($values);
            unset($data['errors']);
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
        if ($data->isInitialized('offer') && null !== $data->getOffer()) {
            $dataArray['offer'] = $this->normalizer->normalize($data->getOffer(), 'json', $context);
        }
        if ($data->isInitialized('marketplaceId') && null !== $data->getMarketplaceId()) {
            $dataArray['marketplaceId'] = $data->getMarketplaceId();
        }
        if ($data->isInitialized('scheduledAt') && null !== $data->getScheduledAt()) {
            $dataArray['scheduledAt'] = $data->getScheduledAt()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('finishedAt') && null !== $data->getFinishedAt()) {
            $dataArray['finishedAt'] = $data->getFinishedAt()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('errors') && null !== $data->getErrors()) {
            $values = [];
            foreach ($data->getErrors() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['errors'] = $values;
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
        return [\Jlonom\AllegroSDK\Model\PromoModificationTask::class => false];
    }
}