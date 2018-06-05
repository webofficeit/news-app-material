<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
/**
 * Category
 *
 * @ORM\Table(name="subcription_master_news")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SubcriptionMasterRepository")
 * @UniqueEntity(fields={"title"})

 */
class Subcription
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
     * @var string
     * @Assert\NotBlank()
     * @Assert\Length(
     *      min = 3,
     *      max = 25,
     * )
     * @ORM\Column(name="title", type="string", length=255, unique=true))
     */
    private $title;

    /**
     * @var int
     *
     * @ORM\Column(name="period_days", type="integer")
     */
    private $period;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_time", type="datetime")
     */
    private $created;
    
        /**
    * @ORM\OneToMany(targetEntity="UserSubcription", mappedBy="subcription",cascade={"persist", "remove"})
    */

    private $subcriptionids;

    public function __construct()
    {
        $this->created= new \DateTime();
        $this->subcriptionids = new ArrayCollection();
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
     * Set title
     *
     * @param string $title
     * @return Subcription
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set period
     *
     * @param integer $period
     * @return Subcription
     */
    public function setPeriod($period)
    {
        $this->period = $position;

        return $this;
    }

    /**
     * Get period
     *
     * @return integer 
     */
    public function getPeriod()
    {
        return $this->period;
    }

     /**
     * Set created
     *
     * @param \DateTime $created
     * @return Subcription
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
    
    /**
     * Add subcriptionids
     *
     * @param UserSubcription $subcriptionids
     * @return Subcription
     */
    public function addUserSubcription(UserSubcription $subcriptionids)
    {
        $this->subcriptionids[] = $subcriptionids;

        return $this;
    }

    /**
     * Remove subcriptionids
     *
     * @param UserSubcription $subcriptionids
     */
    public function removeUserSubcription(UserSubcription $subcriptionids)
    {
        $this->subcriptionids->removeElement($subcriptionids);
    }

    /**
     * Get subcriptionids
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUserSubcription()
    {
        return $this->subcriptionids;
    }
   
        public function __toString()
    {
        return $this->title;
    }
}
