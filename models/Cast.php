<?php 


class Cast{

    public $mainActor; 
    public $secondActor;
    public $villain;

    public  function __construct( $_nameMainActor, $_nameSecondActor,$_nameVillain)
    {
        //inizializza una istanza di tipo Movie 
        $this->mainActor=  $_nameMainActor; //  $this->title si riferisce a public $title; |||| mentre $_title si riferisce a  __construct( $_title) 
        $this->secondActor= $_nameSecondActor;
        $this->villain= $_nameVillain;

    }


}


?>