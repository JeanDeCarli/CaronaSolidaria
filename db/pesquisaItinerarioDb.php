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
        addslashes($desc);
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

    public function getMatriculaPorEndereco($endOrigem, $endDestino) {
        require_once 'Connection.php';
        
        $endOrigem = addslashes($endOrigem);
        $endDestino = addslashes($endDestino);
        
        $endOrigem = "'" . $endOrigem . "'";
        $endDestino = "'" . $endDestino . "'";
        
        $cnn = new Connection();

        $cnn->open();

        $consulta = pg_query('select u."Registration" from "User" u inner join "Itinerary" i on u."Id" = i."IdUser" '
                . 'where i.neighborhood = (select neighborhood from "Itinerary" where "Address" = '. $endOrigem .' limit 1) and "IdType" = 1 '
                . 'intersect '
                . 'select u."Registration" from "User" u inner join "Itinerary" i on u."Id" = i."IdUser" '
                . 'where i.neighborhood = (select neighborhood from "Itinerary" where "Address" = '. $endDestino .' limit 1) and "IdType" = 2;');

        $cnn->close();
        return $consulta;
    }

}

?>