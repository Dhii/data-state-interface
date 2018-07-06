<?php

namespace Dhii\Data;

use Dhii\Factory\FactoryInterface;

/**
 * Something that can create new transitioner instances.
 *
 * @since [*next-version*]
 */
interface TransitionerFactoryInterface extends FactoryInterface
{
    /**
     * {@inheritdoc}
     *
     * @since [*next-version*]
     *
     * @return TransitionerInterface The created transitioner instance.
     */
    public function make($config = null);
}
