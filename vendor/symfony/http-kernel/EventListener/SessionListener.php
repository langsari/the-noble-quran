<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\EventListener;

use Psr\Container\ContainerInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage;
<<<<<<< HEAD
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
=======
use Symfony\Component\HttpKernel\Event\RequestEvent;
>>>>>>> d06c272759e2a4704771ce39cad34d3612d9ba76

/**
 * Sets the session in the request.
 *
 * When the passed container contains a "session_storage" entry which
 * holds a NativeSessionStorage instance, the "cookie_secure" option
 * will be set to true whenever the current main request is secure.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class SessionListener extends AbstractSessionListener
{
    public function __construct(ContainerInterface $container, bool $debug = false)
    {
        parent::__construct($container, $debug);
    }

<<<<<<< HEAD
    public function onKernelRequest(GetResponseEvent $event)
    {
        parent::onKernelRequest($event);

        if (!$event->isMasterRequest() || !$this->container->has('session')) {
=======
    public function onKernelRequest(RequestEvent $event)
    {
        parent::onKernelRequest($event);

        if (!$event->isMainRequest() || !$this->container->has('session')) {
>>>>>>> d06c272759e2a4704771ce39cad34d3612d9ba76
            return;
        }

        if ($this->container->has('session_storage')
            && ($storage = $this->container->get('session_storage')) instanceof NativeSessionStorage
            && ($mainRequest = $this->container->get('request_stack')->getMainRequest())
            && $mainRequest->isSecure()
        ) {
            $storage->setOptions(['cookie_secure' => true]);
        }
    }

    protected function getSession(): ?SessionInterface
    {
        if (!$this->container->has('session')) {
            return null;
        }

        return $this->container->get('session');
    }
}
