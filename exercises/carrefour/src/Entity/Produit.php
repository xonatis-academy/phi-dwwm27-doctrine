<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Produit {

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
     * @ORM\Column(type="float")
     */
    private $price;

    /**
     * @ORM\ManyToOne(targetEntity="Rayon", inversedBy="produits")
     */
    private $rayon;

    /**
     * @ORM\ManyToMany(targetEntity="Fournisseur", mappedBy="produits")
     */
    private $fournisseurs;

    public function getId(): int {
        return $this->id;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function setNom(string $nom): Produit {
        $this->nom = $nom;
        return $this;
    }

    public function getPrice(): float {
        return $this->price;
    }

    public function setPrice(float $price): Produit {
        $this->price = $price;
        return $this;
    }

    public function getRayon(): Rayon {
        return $this->rayon;
    }

    public function setRayon(Rayon $rayon): Produit {
        $this->rayon = $rayon;
        return $this;
    }

    public function getFournisseurs(): array {
        return $this->fournisseurs;
    }

    public function addFournisseur(Fournisseur $fournisseur): Produit {
        array_push($this->fournisseurs, $fournisseur);
        return $this;
    }
}