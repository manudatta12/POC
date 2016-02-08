<?php

namespace First\UserBundle\EventListener;

use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\HttpKernel\HttpKernel;
use Doctrine\ORM\EntityManager;
use AppBundle\Entity\User;


class RequestListener
{
	/**
     * @var \Symfony\Component\Security\Core\SecurityContextInterface
     */
    protected $securityContext;

	protected $em;

	protected $articleService;

    /**
     * Container
     *
     * @var ContainerInterface
     */
    protected $container;

    /**
     * Listener constructor
     *
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container, SecurityContextInterface $securityContext, EntityManager $em, $articleService)
    {
        $this->container = $container;
        $this->securityContext = $securityContext;
        $this->em = $em;
        $this->articleService = $articleService;
    }

    /**
     * kernel.request Event
     *
     * @param GetResponseEvent $event
     */
    public function onKernelRequest(GetResponseEvent $event)
    {
		$request  = $event->getRequest();
	}
}
