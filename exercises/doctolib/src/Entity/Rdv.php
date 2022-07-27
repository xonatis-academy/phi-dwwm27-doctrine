<?php

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Rdv {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $datetime;

    /**
     * @ORM\ManyToOne(targetEntity="Medecin", inversedBy="rdvs")
     */
    private $medecin;

    /**
     * @ORM\ManyToOne(targetEntity="Patient", inversedBy="rdvs")
     */
    private $patient;

    public function getId(): int {
        return $this->id;
    }

    public function getDateTime(): DateTime {
        return $this->datetime;
    }

    public function setDateTime(DateTime $datetime): Rdv {
        $this->datetime = $datetime;
        return $this;
    }

    public function getMedecin(): Medecin {
        return $this->medecin;
    }

    public function setMedecin(Medecin $medecin): Rdv {
        $this->medecin = $medecin;
        return $this;
    }

    public function getPatient(): Patient {
        return $this->patient;
    }

    public function setPatient(Patient $patient): Rdv {
        $this->patient = $patient;
        return $this;
    }

}