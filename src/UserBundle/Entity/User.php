<?php
// src/AppBundle/Entity/User.php

namespace UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

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
        // your own logic
    }
    public function setEmail($email) 
    {
        $this->email = $email;
        $this->username = $email;
    }
    public function __toString()
    {
       return $this->getName();
    }
}