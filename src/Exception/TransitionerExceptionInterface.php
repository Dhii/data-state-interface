<?php

namespace Dhii\Data\Exception;

use Dhii\Exception\ThrowableInterface;
use Dhii\Data\TransitionerAwareInterface;

/**
 * An exception thrown in relation to a transitioner.
 *
 * @since [*next-version*]
 */
interface TransitionerExceptionInterface extends
    TransitionerAwareInterface,
    ThrowableInterface
{
}
