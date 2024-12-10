<?php

/*Exercici 2
Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea de la forma area().*/

declare(strict_types=1);

require_once 'Triangle.php';
require_once 'Rectangle.php';


function main(): void {
    
    $triangle = new Triangle(10, 5);
    echo "L'àrea del triangle és: " . $triangle->area() . " cm2.\n";

    
    $rectangle = new Rectangle(10, 5);
    echo "L'àrea del rectangle és: " . $rectangle->area() . " cm2.\n";
}


main();

?>
