<?php
class animal{ 
    private $id;
    private $nombre;
    private $peso;

    public function __construct($id,$nombre){ 
        $this->id=$id;
        $this->nombre=$nombre;
    }
    
    public function getid(){
        return $this->id;
    }
    public function getnombre(){
        return $this->nombre;
    }
    
    public function setpeso($peso){
        $this->peso=$peso;
    }
    public function getpeso(){
        return $this->peso;
    }
}
