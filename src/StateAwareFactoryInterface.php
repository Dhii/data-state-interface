<?php

namespace Dhii\Data;

use Dhii\Factory\FactoryInterface;

/**
 * Something that can create new stateful objects.
 *
 * @since [*next-version*]
 */
interface StateAwareFactoryInterface extends FactoryInterface
{
    /**
     * {@inheritdoc}
     *
     * @since [*next-version*]
     *
     * @return StateAwareInterface The created stateful instance.
     */
    public function make($config = null);
}
