<?php
require_once('animal.php');
class perro extends animal{ 
    private $tamaño_bigotes;

    public function __construct($id,$nombre,$tamaño_bigotes)
    {
        parent::__construct($id,$nombre);
        $this->tamaño_bigotes=$tamaño_bigotes;
    }
    public function gettamaño_bigotes(){
        return $this->tamaño_bigotes;
    }
}
$perrito=new perro("1","pochi","5cm");
echo $perrito->getid();
echo "<br>";
echo $perrito->getnombre();
echo "<br>";
echo $perrito->gettamaño_bigotes();

