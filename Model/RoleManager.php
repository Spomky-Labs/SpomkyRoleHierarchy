<?php

namespace Spomky\RoleHierarchyBundle\Model;

use Doctrine\ORM\EntityManager;

class RoleManager implements RoleManagerInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    protected $em;

    /**
     * @var \Doctrine\ORM\EntityRepository
     */
    protected $repository;

    public function __construct(EntityManager $em, $class) {
        $this->em = $em;
        $this->repository = $em->getRepository($class);
    }

    /**
     * {@inheritdoc}
     */
    public function getRepository() {
        return $this->repository;
    }

    /**
     * {@inheritdoc}
     */
    public function getRoles() {
        return $this->getRepository()->findAll();
    }
}