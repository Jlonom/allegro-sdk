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
class ProductChangeProposalRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\ProductChangeProposalRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\ProductChangeProposalRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\ProductChangeProposalRequest();
        if (\array_key_exists('notifyViaEmailAfterVerification', $data) && \is_int($data['notifyViaEmailAfterVerification'])) {
            $data['notifyViaEmailAfterVerification'] = (bool) $data['notifyViaEmailAfterVerification'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('note', $data)) {
            $object->setNote($data['note']);
            unset($data['note']);
        }
        if (\array_key_exists('category', $data)) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['category'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setCategory($values);
            unset($data['category']);
        }
        if (\array_key_exists('images', $data)) {
            $values_1 = [];
            foreach ($data['images'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jlonom\AllegroSDK\Model\ImageUrl::class, 'json', $context);
            }
            $object->setImages($values_1);
            unset($data['images']);
        }
        if (\array_key_exists('parameters', $data)) {
            $values_2 = [];
            foreach ($data['parameters'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Jlonom\AllegroSDK\Model\ProductParameter::class, 'json', $context);
            }
            $object->setParameters($values_2);
            unset($data['parameters']);
        }
        if (\array_key_exists('notifyViaEmailAfterVerification', $data)) {
            $object->setNotifyViaEmailAfterVerification($data['notifyViaEmailAfterVerification']);
            unset($data['notifyViaEmailAfterVerification']);
        }
        if (\array_key_exists('language', $data)) {
            $object->setLanguage($data['language']);
            unset($data['language']);
        }
        foreach ($data as $key_1 => $value_3) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_3;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['name'] = $data->getName();
        if ($data->isInitialized('note') && null !== $data->getNote()) {
            $dataArray['note'] = $data->getNote();
        }
        $values = [];
        foreach ($data->getCategory() as $key => $value) {
            $values[$key] = $value;
        }
        $dataArray['category'] = $values;
        $values_1 = [];
        foreach ($data->getImages() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $dataArray['images'] = $values_1;
        $values_2 = [];
        foreach ($data->getParameters() as $value_2) {
            $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
        }
        $dataArray['parameters'] = $values_2;
        if ($data->isInitialized('notifyViaEmailAfterVerification') && null !== $data->getNotifyViaEmailAfterVerification()) {
            $dataArray['notifyViaEmailAfterVerification'] = $data->getNotifyViaEmailAfterVerification();
        }
        $dataArray['language'] = $data->getLanguage();
        foreach ($data as $key_1 => $value_3) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_3;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jlonom\AllegroSDK\Model\ProductChangeProposalRequest::class => false];
    }
}