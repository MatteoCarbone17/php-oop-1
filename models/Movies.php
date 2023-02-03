<?php 

class Movies{
   
    public $title; // campi(caratteristiche/attributi(variabili)  tipiche)
    public $type;
    public $duration;
    public $plot;

    //costruttore 
    public  function __construct( $_title, $_type,$_duration, $_plot)
    {
        //inizializza una istanza di tipo Movie 
        $this->title= $_title; //  $this->title si riferisce a public $title; |||| mentre $_title si riferisce a  __construct( $_title) 
        $this->type= $_type;
        $this->duration= $_duration;
        $this->plot= $_plot;
        
    }
 
    //methods(capacita condivise)

    public function getMovie(){

    }


}

$movieTheMist = new Movies('The Mist','horror' ,'120 minuti','roba strana dall\'inferno, finale trumatico' );
$movieTitanic = new Movies('Titanic','romatico' ,'dura troppo','Una nave inaffondabile che poi affonda' );

var_dump($movieTheMist,$movieTitanic);

?>