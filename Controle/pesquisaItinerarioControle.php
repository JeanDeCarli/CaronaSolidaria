<?php

require_once '../db/pesquisaItinerarioDb.php';
$iDb = new ItineraryDb();

$getEndereco = $_POST['getEndereco'];
$getEnderecoOD = $_POST['getEnderecoOD'];

if ($getEndereco != NULL) {
    echo $iDb->getItinereryAddress($getEndereco, $getEnderecoOD);
}
?>
