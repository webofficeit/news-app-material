<?php
// src/AppBundle/Entity/User.php

namespace UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user_news")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /** 
    @ORM\Column(name="name", type="string", length=255, nullable=true) 
    */
    protected $name; 
    /** 
    @ORM\Column(name="type", type="string", length=255, nullable=true) 
    */
    protected $type; 
    
    /**
    * @ORM\OneToMany(targetEntity="UserSubcription", mappedBy="user",cascade={"persist", "remove"})
    */
    private $usersubcriptions;
    
    
    /**
    * Get type
    * @return  
    */
    public function getType()
    {
        return $this->type;
    }
    
    /**
    * Set type
    * @return $this
    */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
    /**
    * Get name
    * @return  
    */
    public function getName()
    {
        return $this->name;
    }
    
    /**
    * Set name
    * @return $this
    */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    public function __construct()
    {
        parent::__construct();
        $this->usersubcriptions = new ArrayCollection();
    }
    public function setEmail($email) 
    {
        $this->email = $email;
        $this->username = $email;
    }
    
      /**
     * Add usersubcriptions
     *
     * @param UserSubcription $usersubcriptions
     * @return User
     */
    public function addUserSubcription(UserSubcription $usersubcriptions)
    {
        $this->usersubcriptions[] = $usersubcriptions;

        return $this;
    }

    /**
     * Remove usersubcriptions
     *
     * @param UserSubcription $usersubcriptions
     */
    public function removeUserSubcription(UserSubcription $usersubcriptions)
    {
        $this->usersubcriptions->removeElement($usersubcriptions);
    }

    /**
     * Get usersubcriptions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUserSubcription()
    {
        return $this->usersubcriptions;
    }
    
    public function __toString()
    {
       return $this->getName();
    }
}