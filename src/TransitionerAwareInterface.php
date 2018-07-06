<?php

namespace Dhii\Data;

/**
 * Something that is aware of, and can provide, a transitioner.
 *
 * @since [*next-version*]
 */
interface TransitionerAwareInterface
{
    /**
     * Retrieves the transitioner associated with this instance.
     *
     * @since [*next-version*]
     *
     * @return TransitionerInterface|null The transitioner instance, if any.
     */
    public function getTransitioner();
}
