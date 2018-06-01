<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * PollQuestionary
 *
 * @ORM\Table(name="poll_questioner_news")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PollQuestionaryRepository")

 */
class PollQuestionary
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
     *
     * @ORM\Column(name="question", type="text")
     */
    private $question;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_time", type="datetime")
     */
    private $updatedtime;

    /**
     * @var bool
     *
     * @ORM\Column(name="enabled", type="boolean")
     */
    private $enabled;

    /**
     * @var int
     *
     * @ORM\Column(name="position", type="integer")
     */
    private $position;



    /**
    * @ORM\OneToMany(targetEntity="PollOption", mappedBy="question",cascade={"persist", "remove"})
    */
    private $polloptions;

    public function __construct()
    {
        $this->polloptions = new ArrayCollection();
        $this->updatedtime= new \DateTime();
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
     * Set updatedtime
     *
     * @param \DateTime $updatedtime
     * @return Updatedtime
     */
    public function setUpdatedtime($updatedtime)
    {
        $this->updatedtime = $updatedtime;

        return $this;
    }

    /**
     * Get updatedtime
     *
     * @return \DateTime
     */
    public function getUpdatedtime()
    {
        return $this->updatedtime;
    }


    /**
     * Set position
     *
     * @param integer $position
     * @return PollQuestionary
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set question
     *
     * @param string $question
     * @return PollQuestionary
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return string
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return PollQuestionary
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
     * Add polloptions
     *
     * @param PollOption $polloptions
     * @return PollOption
     */
    public function addPollOption(PollOption $polloption)
    {

      $polloption->setQuestion($this);
        $this->polloptions[] = $polloption;

        return $this;
    }

    /**
     * Remove polloptions
     *
     * @param Polloption $polloptions
     */
    public function removePollOption(PollOption $polloption)
    {
        $this->polloptions->removeElement($polloption);
    }

    /**
     * Get polloptions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPollOptions()
    {
        return $this->polloptions;
    }

}
