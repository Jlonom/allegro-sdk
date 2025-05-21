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
class ThreadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\Thread::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\Thread::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\Thread();
        if (\array_key_exists('read', $data) && \is_int($data['read'])) {
            $data['read'] = (bool) $data['read'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('read', $data)) {
            $object->setRead($data['read']);
            unset($data['read']);
        }
        if (\array_key_exists('lastMessageDateTime', $data) && $data['lastMessageDateTime'] !== null) {
            $object->setLastMessageDateTime(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['lastMessageDateTime']));
            unset($data['lastMessageDateTime']);
        }
        elseif (\array_key_exists('lastMessageDateTime', $data) && $data['lastMessageDateTime'] === null) {
            $object->setLastMessageDateTime(null);
        }
        if (\array_key_exists('interlocutor', $data) && $data['interlocutor'] !== null) {
            $object->setInterlocutor($this->denormalizer->denormalize($data['interlocutor'], \Jlonom\AllegroSDK\Model\Interlocutor::class, 'json', $context));
            unset($data['interlocutor']);
        }
        elseif (\array_key_exists('interlocutor', $data) && $data['interlocutor'] === null) {
            $object->setInterlocutor(null);
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
        $dataArray['id'] = $data->getId();
        $dataArray['read'] = $data->getRead();
        if ($data->isInitialized('lastMessageDateTime') && null !== $data->getLastMessageDateTime()) {
            $dataArray['lastMessageDateTime'] = $data->getLastMessageDateTime()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('interlocutor') && null !== $data->getInterlocutor()) {
            $dataArray['interlocutor'] = $this->normalizer->normalize($data->getInterlocutor(), 'json', $context);
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
        return [\Jlonom\AllegroSDK\Model\Thread::class => false];
    }
}