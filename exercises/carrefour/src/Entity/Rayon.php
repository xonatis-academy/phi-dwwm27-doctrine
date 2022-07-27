<?php

class Rayon {

    private $id;
    private $nom;
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