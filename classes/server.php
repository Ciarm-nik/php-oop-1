<!-- - è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php 

class Movie {
    public $titolo;
    public $regia;
    public $anno;

    function __construct($titolo, $regia, $anno ){
        $this ->titolo = $titolo;
        $this ->regia = $regia;
        $this ->anno = $anno;        
    }
    
}

?>