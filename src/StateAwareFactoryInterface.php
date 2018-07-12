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
     * The factory config key for the state map.
     *
     * @since [*next-version*]
     */
    const K_STATE = 'state';

    /**
     * {@inheritdoc}
     *
     * @since [*next-version*]
     *
     * @return StateAwareInterface The created stateful instance.
     */
    public function make($config = null);
}
