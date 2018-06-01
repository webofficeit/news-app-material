<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Device
 *
 * @ORM\Table(name="poll_option_news")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PollOptionRepository")
 */
class PollOption
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
     * @ORM\ManyToOne(targetEntity="PollQuestionary", inversedBy="polloptions")
     * @ORM\JoinColumn(name="question_id", referencedColumnName="id", nullable=false)
     */
    private $question;

    /**
     * @var string
     *
     * @ORM\Column(name="answer", type="text")
     */
    private $answer;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_time", type="datetime")
     */
    private $updatedtime;



    public function __construct()
    {
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
* Set PollQuestionary
*
* @param integer $question
* @return PollOption
*/
public function setQuestion(PollQuestionary $question)
{
  
$this->question = $question;

return $this;
}

/**
* Get PollQuestionary
*
* @return integer
*/
public function getQuestion()
{
return $this->question;
}

/**
 * Set answer
 *
 * @param string $answer
 * @return PollOption
 */
public function setAnswer($answer)
{
    $this->answer = $answer;

    return $this;
}

/**
 * Get answer
 *
 * @return string
 */
public function getAnswer()
{
    return $this->answer;
}

/**
 * Set updatedtime
 *
 * @param \DateTime $updatedtime
 * @return PollOption
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

}
