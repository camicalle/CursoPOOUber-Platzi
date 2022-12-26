<!-- Para visualizar el contenido de este archivo en el navegador se escribe en consola: php -S localhost:8000 -->
<!-- Nota: Este comando se hace dentro de la carpeta PHP. -->

<h1>Hello World</h1>

<?php
// require_once("account.php");
// require_once("car.php");

// $car = new Car("ASD123", new Account("Andrés Herrera", "1234"));
// echo $car->printDataCar();

require_once("car.php");
require_once("uberX.php");
require_once("uberPool.php");
require_once("uberVan.php");
require_once("user.php");
require_once("account.php");

$car = new Car("CVD121", new Account("Andrés Herrera", "123123"), "Chevrolet", "Spark");
$car->setPassenger(5);
$car->printDataCar();

echo '<br>';

$uberX = new UberX("CVD121", new Account("Andrés Herrera", "123123"), "Chevrolet", "Spark");
$uberX->setPassenger(4);
$uberX->printDataCar();

echo '<br>';

$uberPool = new UberPool("ASD123", new Account("Andrea Montes", "123456"), "Dodge", "Mia");
$uberPool->setPassenger(3);
$uberPool->printDataCar();

echo '<br>';

$uberVan = new UberVan("OJL395", new Account("Raúl Ramírez", "AND456"), "Nissan", "Versa");
$uberVan->setPassenger(6);
$uberVan->printDataCar();

echo '<br>';

$user = new User("Carlos", "12323");
$user->printDataAccount();

?>