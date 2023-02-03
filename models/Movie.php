<?php 


class Movie{
    public $title; // campi(caratteristiche/attributi(variabili)  tipiche)
    public $type;
    public $duration;
    public $plot;
    public $rating;
    public $cast;

    //costruttore 
    public  function __construct( $_title, $_type,$_duration, $_plot,$_rating, Cast $_cast )
    {
        //inizializza una istanza di tipo Movie 
        $this->title= $_title; //  $this->title si riferisce a public $title; |||| mentre $_title si riferisce a  __construct( $_title) 
        $this->type= $_type;
        $this->duration= $_duration;
        $this->plot= $_plot;
        $this->rating= $_rating;
        $this->cast= $_cast;
        
    }
 
    //methods(capacita condivise)

    public function getRating(){

        if ($this->rating >= 6){
          return 'Valutazione film: '. $this->rating . '/10 ' . 'sufficienza raggiunta' ;
        }else{
            return 'Valutazione film: '. $this->rating . '/10 ' . 'sufficienza non raggiunta' ; 
        };


    }


}



?>