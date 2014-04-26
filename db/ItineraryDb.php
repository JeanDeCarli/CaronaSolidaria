<?php

class ItineraryDb extends Connection{
    
    public function getItinerarysDescription()
    {
        $cnn = new Connection();
        
        $cnn->open();
        $consulta=pg_query("SELECT *FROM nomedatabela order by nome ASC");
        $cnn->close();
        return $consulta;
    }
}

?>