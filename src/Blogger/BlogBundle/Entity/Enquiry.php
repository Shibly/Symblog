<?php

namespace Blogger\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;


/**
 * Enquiry
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Enquiry
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(name="name", type="string", length=255)
     */

    protected $name;

    /**
     * @ORM\Column(name="name", type="string", length=255)
     */

    protected $email;
    /**
     * @ORM\Column(name="name", type="string", length=255)
     */

    protected $subject;
    /**
     * @ORM\Column(name="name", type="string", length=255)
     */

    protected $body;

    /**
     * @param $body
     */

    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * @return mixed
     */

    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->subject;
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

    public static function loadValidatorMetadata(ClassMetaData $metadata)
    {
        $metadata->addPropertyConstraint('name', new NotBlank());
        $metadata->addPropertyConstraint('email', new Email(
            array('message' => 'symblog does not like invalid emails. Give me a real one !')
        ));
        $metadata->addPropertyConstraint('subject', new NotBlank());
    }
}
