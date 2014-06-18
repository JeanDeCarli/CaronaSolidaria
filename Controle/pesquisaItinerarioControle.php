<?php

require_once '../db/pesquisaItinerarioDb.php';
$iDb = new ItineraryDb();

if (isset($_POST['getEndereco']) && isset($_POST['getEnderecoOD'])) {
    $getEndereco = $_POST['getEndereco'];
    $getEnderecoOD = $_POST['getEnderecoOD'];
    echo $iDb->getItinereryAddress($getEndereco, $getEnderecoOD);
}
?>
