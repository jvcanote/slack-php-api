<?php

declare(strict_types=1);

/*
 * This file is part of JoliCode's Slack PHP API project.
 *
 * (c) JoliCode <coucou@jolicode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JoliCode\Slack\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class StarsListGetResponse200ItemsItemItem1Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\StarsListGetResponse200ItemsItemItem1' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\StarsListGetResponse200ItemsItemItem1' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!\is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        if (isset($data->{'$recursiveRef'})) {
            return new Reference($data->{'$recursiveRef'}, $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\StarsListGetResponse200ItemsItemItem1();
        if (property_exists($data, 'date_create') && null !== $data->{'date_create'}) {
            $object->setDateCreate($data->{'date_create'});
        } elseif (property_exists($data, 'date_create') && null === $data->{'date_create'}) {
            $object->setDateCreate(null);
        }
        if (property_exists($data, 'file') && null !== $data->{'file'}) {
            $object->setFile($this->denormalizer->denormalize($data->{'file'}, 'JoliCode\\Slack\\Api\\Model\\ObjsFile', 'json', $context));
        } elseif (property_exists($data, 'file') && null === $data->{'file'}) {
            $object->setFile(null);
        }
        if (property_exists($data, 'type') && null !== $data->{'type'}) {
            $object->setType($data->{'type'});
        } elseif (property_exists($data, 'type') && null === $data->{'type'}) {
            $object->setType(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getDateCreate()) {
            $data->{'date_create'} = $object->getDateCreate();
        } else {
            $data->{'date_create'} = null;
        }
        if (null !== $object->getFile()) {
            $data->{'file'} = $this->normalizer->normalize($object->getFile(), 'json', $context);
        } else {
            $data->{'file'} = null;
        }
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        } else {
            $data->{'type'} = null;
        }

        return $data;
    }
}
