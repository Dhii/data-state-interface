<?php

namespace Dhii\Data;

use Dhii\Factory\DataObjectFactoryInterface;

/**
 * Something that can create new stateful objects.
 *
 * @since [*next-version*]
 */
interface StateAwareFactoryInterface extends DataObjectFactoryInterface
{
    /**
     * {@inheritdoc}
     *
     * @since [*next-version*]
     *
     * @param array{
     *     self::K_DATA:array|stdClass|ArrayObject|MapInterface
     * }|
     * stdClass|ArrayAccess|ContainerInterface|null $config The factory config, if any.
     *
     * @return StateAwareInterface The created stateful instance.
     */
    public function make($config = null);
}
