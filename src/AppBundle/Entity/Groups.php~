<?php

namespace AppBundle\Entity;

use Sonata\UserBundle\Entity\BaseGroup as BaseGroup;
//use FOS\UserBundle\Entity\Group as BaseGroup;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="groups")
 */
class Groups extends BaseGroup
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
     protected $id;

/**
 * @ORM\ManyToMany(targetEntity="User", mappedBy="groups")
 * 
 */
protected $users;

     
     public function __toString()
     {
        return (string)  $this->name;
     }
 
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add users
     *
     * @param \AppBunle\UserBundle\Entity\User $users
     * @return Groups
     */
    public function addUser(\AppBunle\UserBundle\Entity\User $users)
    {
        $this->users[] = $users;

        return $this;
    }

    /**
     * Remove users
     *
     * @param \AppBunle\UserBundle\Entity\User $users
     */
    public function removeUser(\AppBunle\UserBundle\Entity\User $users)
    {
        $this->users->removeElement($users);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsers()
    {
        return $this->users;
    }
}
