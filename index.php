<?php
return_once('perro.php');

$perrito=new perro("1","pochi","5cm");
echo $perrito->getid();
echo "<br>";
echo $perrito->getnombre();
echo "<br>";
echo $perrito->gettamaño_bigotes();

