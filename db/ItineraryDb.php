<?php

class ItineraryDb extends Connection{
    
    public function getItinerarysDescription()
    {
        $cnn = new Connection();
        
        $cnn->open();
        $consulta=pg_query("select Description from Itinerary;");
        $cnn->close();
        return $consulta;
    }
}

?>