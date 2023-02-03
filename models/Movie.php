<?php 


class Movie{
    public $title; // campi(caratteristiche/attributi(variabili)  tipiche)
    public $type;
    public $duration;
    public $plot;
    public $cast;

    //costruttore 
    public  function __construct( $_title, $_type,$_duration, $_plot, Cast $_cast )
    {
        //inizializza una istanza di tipo Movie 
        $this->title= $_title; //  $this->title si riferisce a public $title; |||| mentre $_title si riferisce a  __construct( $_title) 
        $this->type= $_type;
        $this->duration= $_duration;
        $this->plot= $_plot;
        $this->cast= $_cast;
        
    }
 
    //methods(capacita condivise)

    public function getMovie(){

    }


}



?>