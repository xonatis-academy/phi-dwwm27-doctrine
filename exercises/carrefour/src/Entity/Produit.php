<?php

class Produit {

    private $id;
    private $nom;
    private $price;
    private $rayon;
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