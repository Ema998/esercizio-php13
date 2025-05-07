<?php  

require_once __DIR__ . '/Categories.php';

class Post extends Categories{
    public $titolo;
    public $categoria;
    public $tag;

    public function __construct($titolo, $categoria, $tag){
        $this->titolo = $titolo;
        $this->categoria = $categoria;
        $this->tag = $tag;
    }

    public function printArticolo(){
        echo $this->titolo . "<br>";
        echo $this->categoria . "<br>";
        echo $this->tag . "<br>";
    }
}

$articolo1 = new Post("Il mio primo articolo", "Sport", "calcio, basket, tennis");
$articolo2 = new Post("Il mio secondo articolo", "Cucina", "pasta, pizza, dolci");
$articolo3 = new Post("Il mio terzo articolo", "Tecnologia", "smartphone, computer, tablet");
$articolo4 = new Post("Il mio quarto articolo", "Viaggi", "mare, montagna, città");

$articolo1->printArticolo();
$articolo2->printArticolo();
$articolo3->printArticolo();
$articolo4->printArticolo();

?>