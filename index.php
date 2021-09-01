<!-- è definita una classe ‘Movie’ 
=> all'interno della classe sono dichiarate delle variabili d'istanza 
=> all'interno della classe è definito un costruttore 
=> all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->


<?php

    // header('Content-Type: application/json');

    //definire classe
    class Movie {

        // dichiarare variabili di istanza
        public $titolo;
        public $genere;
        public $prezzo;
        public $sconto = 'Nessuno sconto';
        public $sconto_studente = 'Nessuno sconto';


        // definire un construttore 
        function __construct($_titolo, $_genere, $_prezzo) {

            $this->titolo = $_titolo;
            $this->genere = $_genere;
            $this->prezzo = (int)$_prezzo;

        }


        // definire un metodo

        //dare a studente true o false 

        public function setStudente($studente) {

            if($studente === true) {

                $this->sconto_studente = 'scontato';
                $this->sconto = $this->prezzo - 3 . ' ' . 'Euro';

            } 

        }

        public function getStudente($studente) {

            return $this->sconto_studente & $this->sconto;

        }
        
    }


    // Instanziare due oggetti 

    //Primo oggetto
    $harry_potter = new Movie('Harry potter', 'Fantasy', 10 . ' ' . 'Euro');

    $harry_potter->setStudente(true);
  
    var_dump( $harry_potter );


    
    //Secondo oggetto
    $annabelle = new Movie('Annabelle', 'Horror', 10 . ' ' . 'Euro');

    $annabelle->setStudente(false);

    var_dump($annabelle);

    