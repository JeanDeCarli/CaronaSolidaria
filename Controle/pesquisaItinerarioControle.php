<?php

require_once '../db/pesquisaItinerarioDb.php';
$iDb = new ItineraryDb();

if (isset($_POST['getEndereco']) && isset($_POST['getEnderecoOD'])) {
    $getEndereco = $_POST['getEndereco'];
    $getEnderecoOD = $_POST['getEnderecoOD'];
    echo $iDb->getItinereryAddress($getEndereco, $getEnderecoOD);
} elseif (isset($_POST['getMatriculaOrigem']) && isset($_POST['getMatriculaDestino'])) {
    $getMatriculaOrigem = $_POST['getMatriculaOrigem'];
    $getMatriculaDestino = $_POST['getMatriculaDestino'];
    echo $iDb->getMatriculaPorEndereco($getMatriculaOrigem, $getMatriculaDestino);
}
?>
