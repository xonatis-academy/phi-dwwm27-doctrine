<?php

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Medecin {

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
     * @ORM\OneToMany(targetEntity="Rdv", mappedBy="medecin")
     */
    private $rdvs;

    public function getId(): int {
        return $this->id;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function setNom(string $nom): Medecin {
        $this->nom = $nom;
        return $this;
    }

    public function getRdvs(): array {
        return $this->rdvs;
    }

    public function addRdv(Rdv $rdv): Medecin {
        array_push($this->rdvs, $rdv);
        return $this;
    }
}