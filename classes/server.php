

 <?php


    // è definita una classe ‘Movie’
    class Movie
    {
        // => all'interno della classe sono dichiarate delle variabili d'istanza
        public $titolo;
        public $regia;
        public $anno;


        // => all'interno della classe è definito un costruttore
        function __construct($titolo, $regia, $anno)
        {
            $this->titolo = $titolo;
            $this->regia = $regia;
            $this->anno = $anno;
        }


        // => all'interno della classe è definito almeno un metodo
        public function dettagliMovie()
        {
            return $this->titolo . " " ."<br>" . $this->regia;
        }


        // - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
        public function printMovie()
        {
            echo "<h1>" . $this->dettagliMovie() . "</h1>";
            echo "<h2>" . $this->anno . "</h2>";
        }
    }

    ?>