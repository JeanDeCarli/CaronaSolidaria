<?php

class ItineraryDb {

    public function getItinerarysDescription($od) {
        require_once 'Connection.php';

        $cnn = new Connection();

        $cnn->open();
        if ($od == 'origem') {
            $consulta = pg_query('select * from "Itinerary" where "IdType" = 1 and "IdUser" = 1;');
        } else {
            $consulta = pg_query('select * from "Itinerary" where "IdType" = 2 and "IdUser" = 1;');
        }

        $cnn->close();

        return $consulta;
    }

    public function getItinereryAddress($desc, $od) {
        require_once 'Connection.php';

        $desc = "'" . $desc . "'";

        $cnn = new Connection();

        $cnn->open();
        if ($od == 'origemBtn') {
            $consulta = pg_query('select * from "Itinerary" where "IdType" = 1 and "IdUser" = 1 and "Description" = ' . $desc . ';');
        } else {
            $consulta = pg_query('select * from "Itinerary" where "IdType" = 2 and "IdUser" = 1 and "Description" = ' . $desc . ';');
        }

        $cnn->close();

        $consulta = pg_fetch_array($consulta);

        echo $consulta['Address'];
    }

}

?>