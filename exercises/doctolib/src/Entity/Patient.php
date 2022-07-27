<?php

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Patient {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $nom;

    /**
     * @ORM\OneToMany(targetEntity="Rdv", mappedBy="patient")
     */
    private $rdvs;

    public function getId(): int {
        return $this->id;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function setNom(string $nom): Patient {
        $this->nom = $nom;
        return $this;
    }

    public function getRdvs(): array {
        return $this->rdvs;
    }

    public function addRdv(Rdv $rdv): Patient {
        array_push($this->rdvs, $rdv);
        return $this;
    }

}