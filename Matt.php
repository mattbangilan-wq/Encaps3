<?php
require 'laptop.php';

$matt1 = new Laptop();
$matt1->set_details('Acer', 'Vivobook 2026', 77000);
echo $matt1->get_details();
echo "<br>";

$matt2 = new Laptop();
$matt2->set_details('MSI', 'UltraVes 2026', 68000);
echo $matt2->get_details();
echo "<br>";

$matt3 = new Laptop();
$matt3->set_details('Hp', 'HyperOS 2026', 72000);
echo $matt3->get_details();
echo "<br>";
?>