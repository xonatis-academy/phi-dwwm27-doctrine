<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Rayon {

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
     * @ORM\OneToMany(targetEntity="Produit", mappedBy="rayon")
     */
    private $produits;

    public function getId(): int {
        return $this->id;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function setNom(string $nom): Rayon {
        $this->nom = $nom;
        return $this;
    }

    public function getProduits(): array {
        return $this->produits;
    }

    public function addProduit(Produit $produit): Rayon {
        array_push($this->produits, $produit);
        // Ou bien : $this->produits[] = $produit;
        return $this;
    }

}