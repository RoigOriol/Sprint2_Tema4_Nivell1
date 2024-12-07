<?php
declare(strict_types=1);

class Employee {
    private string $nom;
    private float $sou;

    // Mètode per inicialitzar valors
    public function initialize(string $nom, float $sou): void {
        $this->nom = $nom;
        $this->sou = $sou;
    }

    // Mètode per mostrar informació i comprovar impostos
    public function print(): void {
        echo "Nom: " . $this->nom . PHP_EOL;
        if ($this->sou > 6000) {
            echo "Ha de pagar impostos." . PHP_EOL;
        } else {
            echo "No ha de pagar impostos." . PHP_EOL;
        }
    }
}
