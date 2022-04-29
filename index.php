<?php

/*
    Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
    metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
    - è definita una classe ‘Movie’
        => all'interno della classe sono dichiarate delle variabili d'istanza
        => all'interno della classe è definito un costruttore
        => all'interno della classe è definito almeno un metodo
    - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
*/

class Movie 
{
    private $title;
    private $genre;
    private $year;
    private $actors;
    private $comment = '';

    public function __construct($_title, $_genre) {
        $this->title = $_title;
        $this->genre = $_genre;
    }

    //get functions solo per vedere le variabili private
    public function getTitle() {
        return $this->title;
    }

    public function getGenre() {
        return $this->genre;
    }

    public function getComment() {
        return $this->comment;
    }

    // public function getComment() {
    //     return $this->comment;
    // }

    public function getTitlePrint() {
        return $this->title;
    }

    public function getGenrePrint() {
        return $this->genre;
    }

    
    // set functions puoi modificare le variabili
    public function setComment($_comment) {
        $this->comment;
        return 'il tuo commento é: ' . $_comment;
    }

}

$ritornoAlFuturo = new Movie('Ritorno Al Futuro', 'Fantascienza');
$inception = new Movie('Inception', 'Thriller');
$thePrestige = new Movie('The Prestige', 'Mystery');

?>

<div class="container">
    <div class="card">
        <h1>
            Titolo: <?=  $ritornoAlFuturo->getTitlePrint() ?>
        </h1>

        <h2>
            Genere: <?=  $ritornoAlFuturo->getGenrePrint() ?>
        </h2>

        <!-- <form method="get">
            scrivi un commento sul film <br>
            <input type="text" name="comment">
            <input type="submit">
        </form>

        <h3 class="result">
            <?php
                // if (isset($_GET['comment'])) {
                //     echo $ritornoAlFuturo->setComment($_GET['comment']);
                // }
            ?>
        </h3> -->
    </div>
</div>

<div class="container">
    <div class="card">
        <h1>
            Titolo: <?=  $inception->getTitlePrint() ?>
        </h1>

        <h2>
            Genere: <?=  $inception->getGenrePrint() ?>
        </h2>

        <!-- <form method="get">
            scrivi un commento sul film <br>
            <input type="text" name="comment">
            <input type="submit">
        </form>

        <h3 class="result">
            <?php
                // if (isset($_GET['comment'])) {
                //     echo $inception->setComment($_GET['comment']);
                // }
            ?>
        </h3> -->
    </div>
</div>

<div class="container">
    <div class="card">
        <h1>
            Titolo: <?=  $thePrestige->getTitlePrint() ?>
        </h1>

        <h2>
            Genere: <?=  $thePrestige->getGenrePrint() ?>
        </h2>

        <!-- <form method="get">
            scrivi un commento sul film <br>
            <input type="text" name="comment">
            <input type="submit">
        </form>

        <h3 class="result">
            <?php
                // if (isset($_GET['comment'])) {
                //     echo $thePrestige->setComment($_GET['comment']);
                // }
            ?>
        </h3> -->
    </div>
</div>

<style>
    .card {
        width: 600px;
        margin: 5rem;
        padding: 2rem;
        border: 1px solid black;
    }
</style>