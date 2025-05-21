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
class SubmitCommandOutputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\SubmitCommandOutput::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\SubmitCommandOutput::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (array_key_exists('status', $data) and 'RUNNING' === $data['status']) {
            return $this->denormalizer->denormalize($data, 'Jlonom\AllegroSDK\Model\SubmitRunningCommandOutput', $format, $context);
        }
        if (array_key_exists('status', $data) and 'SUCCESSFUL' === $data['status']) {
            return $this->denormalizer->denormalize($data, 'Jlonom\AllegroSDK\Model\SubmitSuccessfulCommandOutput', $format, $context);
        }
        if (array_key_exists('status', $data) and 'FAILED' === $data['status']) {
            return $this->denormalizer->denormalize($data, 'Jlonom\AllegroSDK\Model\SubmitFailedCommandOutput', $format, $context);
        }
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\SubmitCommandOutput();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
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
        if (null !== $data->getStatus() and 'RUNNING' === $data->getStatus()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getStatus() and 'SUCCESSFUL' === $data->getStatus()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getStatus() and 'FAILED' === $data->getStatus()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        $dataArray['status'] = $data->getStatus();
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jlonom\AllegroSDK\Model\SubmitCommandOutput::class => false];
    }
}