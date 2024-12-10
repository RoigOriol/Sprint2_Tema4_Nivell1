<?php
declare(strict_types=1);

require_once "Employee.php";

// Crear instàncies d'empleats
$empleat1 = new Employee();
$empleat1->initialize("Oriol Roig", 6500);
$empleat1->print();

echo PHP_EOL;

$empleat2 = new Employee();
$empleat2->initialize("Pepito Perez", 4000);
$empleat2->print();
?>