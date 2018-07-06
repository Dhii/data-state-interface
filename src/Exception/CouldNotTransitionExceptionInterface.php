<?php

namespace Dhii\Data\Exception;

use Dhii\Data\StateAwareInterface;
use Dhii\Util\String\StringableInterface as Stringable;

/**
 * An exception thrown when a transitioner fails to transition a subject.
 *
 * @since [*next-version*]
 */
interface CouldNotTransitionExceptionInterface extends TransitionerExceptionInterface
{
    /**
     * Retrieves the transition that failed.
     *
     * @since [*next-version*]
     *
     * @return StateAwareInterface|null The subject, if any.
     */
    public function getSubject();

    /**
     * Retrieves the transition that failed.
     *
     * @since [*next-version*]
     *
     * @return string|Stringable|null The transition, if any.
     */
    public function getTransition();
}
