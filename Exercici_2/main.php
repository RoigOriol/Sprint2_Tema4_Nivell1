<?php

declare(strict_types=1);

require_once 'Triangle.php';
require_once 'Rectangle.php';


function main(): void {
    // Exemple de Triangle
    $triangle = new Triangle(10, 5);
    echo "L'àrea del triangle és: " . $triangle->area() . " cm2.\n";

    
    $rectangle = new Rectangle(10, 5);
    echo "L'àrea del rectangle és: " . $rectangle->area() . " cm2.\n";
}


main();

?>
