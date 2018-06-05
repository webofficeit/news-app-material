<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use UserBundle\Entity\User;
/**
 * UserSubcription
 *
 * @ORM\Table(name="user_subcription_news")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserSubcriptionRepository")
 */
class UserSubcription
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

   
    /**
     * @Assert\NotNull()
     * @ORM\ManyToOne(targetEntity="Subcription", inversedBy="subcriptionids")
     * @ORM\JoinColumn(name="subcriptionId", referencedColumnName="id", nullable=false)
     */
    private $subcription;

    /**
     * @Assert\NotNull()
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User", inversedBy="usersubcriptions")
     * @ORM\JoinColumn(name="userId", referencedColumnName="id", nullable=false)
     */
    private $user;
    
     /**
     * @var bool
     *
     * @ORM\Column(name="activate", type="boolean")
     */
    private $enabled;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_time", type="datetime")
     */
    private $created;

    public function __construct()
    {
        $this->created= new \DateTime();
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
* Set Subcription
*
* @param integer $subcription
* @return UserSubcription
*/
public function setSubcription(Subcription $subcription)
{
  
$this->subcription = $subcription;

return $this;
}

/**
* Get Subcription
*
* @return integer
*/
public function getSubcription()
{
return $this->subcription;
}

        /**
* Set User
*
* @param integer $user
* @return UserSubcription
*/
public function setUser(User $user)
{
  
$this->user = $user;

return $this;
}

/**
* Get User
*
* @return integer
*/
public function getUser()
{
return $this->user;
}
    
    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return UserSubcription
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

   

     /**
     * Set created
     *
     * @param \DateTime $created
     * @return UserSubcription
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }
   
        public function __toString()
    {
        return $this->title;
    }
}
