<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Fournisseur { 
    
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
     * @ORM\ManyToMany(targetEntity="Produit", inversedBy="fournisseurs")
     */
    private $produits;

    public function getId(): int {
        return $this->id;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function setNom(string $nom): Fournisseur {
        $this->nom = $nom;
        return $this;
    }

    public function getProduits(): array {
        return $this->produits;
    }

    public function addProduit(Produit $produit): Fournisseur {
        array_push($this->produits, $produit);
        return $this;
    }

}