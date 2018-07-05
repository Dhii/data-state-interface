<?php

namespace Dhii\Data;

use Dhii\Util\String\StringableInterface as Stringable;

/**
 * Something that can transition stateful objects.
 *
 * @since [*next-version*]
 */
interface TransitionerInterface
{
    /**
     * Transitions the subject with a given transition.
     *
     * @since [*next-version*]
     *
     * @param StateAwareInterface   $subject    The subject.
     * @param int|string|Stringable $transition The transition.
     *
     * @return StateAwareInterface The resulting stateful object.
     */
    public function transition(StateAwareInterface $subject, $transition);
}
