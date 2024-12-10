<?php

/*
Exercici 1
Crea una classe Employee, defineix com a atributs el seu nom i sou. Definir un mètode initialize que rebi com a paràmetres el nom i sou. Plantejar un segon mètode print que imprimeixi el nom i un missatge si ha de pagar o no impostos (si el sou supera 6000, paga impostos).
*/

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
