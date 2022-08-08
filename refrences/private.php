<?php

class Movie{

    public $title;
    private $rating;

    function __construct($title, $rating){

        $this->title=$title;
        $this->setRating($rating)==$rating;
    }

    function getRating(){

        return $this->rating;
    }

    function setRating($rating){

        if($rating=="G" || $rating=="PG-13" || $rating=="R" || $rating=="NR"){
            $this->rating=$rating;
        }
        else{
            $this->rating="invalid input";
        }
    }
}

$passionsofTheChrist = new Movie("passions of the christ", "Family Movie");

echo "<br>";
$passionsofTheChrist->setRating("G");

echo $passionsofTheChrist->getRating();

?>