<?php

namespace Dhii\Data;

use Dhii\Collection\MapInterface;

/**
 * Something that can provide its current state.
 *
 * @since [*next-version*]
 */
interface StateAwareInterface
{
    /**
     * Retrieves the state for this instance.
     *
     * @since [*next-version*]
     *
     * @return MapInterface The state, as a map of data.
     */
    public function getState();
}
