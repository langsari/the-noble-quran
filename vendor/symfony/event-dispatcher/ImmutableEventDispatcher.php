<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\EventDispatcher;

/**
 * A read-only proxy for an event dispatcher.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ImmutableEventDispatcher implements EventDispatcherInterface
{
    private EventDispatcherInterface $dispatcher;

    public function __construct(EventDispatcherInterface $dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(object $event, string $eventName = null): object
    {
        return $this->dispatcher->dispatch($event, $eventName);
    }

    /**
     * {@inheritdoc}
     */
<<<<<<< Updated upstream
    public function addListener(string $eventName, $listener, int $priority = 0)
=======
    public function addListener(string $eventName, callable|array $listener, int $priority = 0)
>>>>>>> Stashed changes
    {
        throw new \BadMethodCallException('Unmodifiable event dispatchers must not be modified.');
    }

    /**
     * {@inheritdoc}
     */
    public function addSubscriber(EventSubscriberInterface $subscriber)
    {
        throw new \BadMethodCallException('Unmodifiable event dispatchers must not be modified.');
    }

    /**
     * {@inheritdoc}
     */
<<<<<<< Updated upstream
    public function removeListener(string $eventName, $listener)
=======
    public function removeListener(string $eventName, callable|array $listener)
>>>>>>> Stashed changes
    {
        throw new \BadMethodCallException('Unmodifiable event dispatchers must not be modified.');
    }

    /**
     * {@inheritdoc}
     */
    public function removeSubscriber(EventSubscriberInterface $subscriber)
    {
        throw new \BadMethodCallException('Unmodifiable event dispatchers must not be modified.');
    }

    /**
     * {@inheritdoc}
     */
<<<<<<< Updated upstream
    public function getListeners(string $eventName = null)
=======
    public function getListeners(string $eventName = null): array
>>>>>>> Stashed changes
    {
        return $this->dispatcher->getListeners($eventName);
    }

    /**
     * {@inheritdoc}
     */
<<<<<<< Updated upstream
    public function getListenerPriority(string $eventName, $listener)
=======
    public function getListenerPriority(string $eventName, callable|array $listener): ?int
>>>>>>> Stashed changes
    {
        return $this->dispatcher->getListenerPriority($eventName, $listener);
    }

    /**
     * {@inheritdoc}
     */
<<<<<<< Updated upstream
    public function hasListeners(string $eventName = null)
=======
    public function hasListeners(string $eventName = null): bool
>>>>>>> Stashed changes
    {
        return $this->dispatcher->hasListeners($eventName);
    }
}
