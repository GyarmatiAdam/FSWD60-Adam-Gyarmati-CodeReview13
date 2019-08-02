<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Events
 *
 * @ORM\Table(name="events")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EventsRepository")
 */
class Events
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
     * @ORM\Column(name="eventName", type="string", length=155)
     */
    private $eventName;

    /**
     * @var string
     *
     * @ORM\Column(name="eventDesc", type="string", length=255)
     */
    private $eventDesc;

    /**
     * @var string
     *
     * @ORM\Column(name="eventImg", type="string", length=255, nullable=true)
     */
    private $eventImg;

    /**
     * @var int
     *
     * @ORM\Column(name="eventCapacity", type="integer")
     */
    private $eventCapacity;

    /**
     * @var string
     *
     * @ORM\Column(name="eventEmail", type="string", length=155, nullable=true)
     */
    private $eventEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="eventPhone", type="string", length=150, nullable=true)
     */
    private $eventPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="eventAdd", type="string", length=200, nullable=true)
     */
    private $eventAdd;

    /**
     * @var string
     *
     * @ORM\Column(name="eventUrl", type="string", length=255, nullable=true)
     */
    private $eventUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="eventType", type="string", length=50, nullable=true)
     */
    private $eventType;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set eventName
     *
     * @param string $eventName
     *
     * @return Events
     */
    public function setEventName($eventName)
    {
        $this->eventName = $eventName;

        return $this;
    }

    /**
     * Get eventName
     *
     * @return string
     */
    public function getEventName()
    {
        return $this->eventName;
    }

    /**
     * Set eventDesc
     *
     * @param string $eventDesc
     *
     * @return Events
     */
    public function setEventDesc($eventDesc)
    {
        $this->eventDesc = $eventDesc;

        return $this;
    }

    /**
     * Get eventDesc
     *
     * @return string
     */
    public function getEventDesc()
    {
        return $this->eventDesc;
    }

    /**
     * Set eventImg
     *
     * @param string $eventImg
     *
     * @return Events
     */
    public function setEventImg($eventImg)
    {
        $this->eventImg = $eventImg;

        return $this;
    }

    /**
     * Get eventImg
     *
     * @return string
     */
    public function getEventImg()
    {
        return $this->eventImg;
    }

    /**
     * Set eventCapacity
     *
     * @param integer $eventCapacity
     *
     * @return Events
     */
    public function setEventCapacity($eventCapacity)
    {
        $this->eventCapacity = $eventCapacity;

        return $this;
    }

    /**
     * Get eventCapacity
     *
     * @return int
     */
    public function getEventCapacity()
    {
        return $this->eventCapacity;
    }

    /**
     * Set eventEmail
     *
     * @param string $eventEmail
     *
     * @return Events
     */
    public function setEventEmail($eventEmail)
    {
        $this->eventEmail = $eventEmail;

        return $this;
    }

    /**
     * Get eventEmail
     *
     * @return string
     */
    public function getEventEmail()
    {
        return $this->eventEmail;
    }

    /**
     * Set eventPhone
     *
     * @param string $eventPhone
     *
     * @return Events
     */
    public function setEventPhone($eventPhone)
    {
        $this->eventPhone = $eventPhone;

        return $this;
    }

    /**
     * Get eventPhone
     *
     * @return string
     */
    public function getEventPhone()
    {
        return $this->eventPhone;
    }

    /**
     * Set eventAdd
     *
     * @param string $eventAdd
     *
     * @return Events
     */
    public function setEventAdd($eventAdd)
    {
        $this->eventAdd = $eventAdd;

        return $this;
    }

    /**
     * Get eventAdd
     *
     * @return string
     */
    public function getEventAdd()
    {
        return $this->eventAdd;
    }

    /**
     * Set eventUrl
     *
     * @param string $eventUrl
     *
     * @return Events
     */
    public function setEventUrl($eventUrl)
    {
        $this->eventUrl = $eventUrl;

        return $this;
    }

    /**
     * Get eventUrl
     *
     * @return string
     */
    public function getEventUrl()
    {
        return $this->eventUrl;
    }

    /**
     * Set eventType
     *
     * @param string $eventType
     *
     * @return Events
     */
    public function setEventType($eventType)
    {
        $this->eventType = $eventType;

        return $this;
    }

    /**
     * Get eventType
     *
     * @return string
     */
    public function getEventType()
    {
        return $this->eventType;
    }
}

