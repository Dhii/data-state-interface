<?php

namespace Dhii\Data\Exception\UnitTest;

use Xpmock\TestCase;
use Dhii\Data\Exception\CouldNotTransitionExceptionInterface as TestSubject;

/**
 * Tests {@see TestSubject}.
 *
 * @since [*next-version*]
 */
class CouldNotTransitionExceptionInterfaceTest extends TestCase
{
    /**
     * The class name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\Data\Exception\CouldNotTransitionExceptionInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return TestSubject
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
                     ->getSubject()
                     ->getTransition()
                     ->getTransitioner()
                     ->getMessage()
                     ->getCode()
                     ->getPrevious()
                     ->getTrace()
                     ->getTraceAsString()
                     ->getFile()
                     ->getLine()
                     ->__toString();

        return $mock->new();
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(
            static::TEST_SUBJECT_CLASSNAME,
            $subject,
            'A valid instance of the test subject could not be created.'
        );

        $this->assertInstanceOf(
            'Dhii\Data\Exception\TransitionerExceptionInterface',
            $subject,
            'Test subject does not implement expected interface.'
        );
    }
}
