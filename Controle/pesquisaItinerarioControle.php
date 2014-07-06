<?php

require_once '../db/pesquisaItinerarioDb.php';
$iDb = new ItineraryDb();

if (isset($_POST['getEndereco']) && isset($_POST['getEnderecoOD'])) {
    $getEndereco = $_POST['getEndereco'];
    $getEnderecoOD = $_POST['getEnderecoOD'];
    echo $iDb->getItinereryAddress($getEndereco, $getEnderecoOD);
}elseif (isset ($_POST['calculaRotaRegistration']) && isset ($_POST['calculaRotaOD']) && isset ($_POST['calculaRotaAddress'])) {
    $registration = $_POST['calculaRotaRegistration'];
    $calculaRotaOD = $_POST['calculaRotaOD'];
    $address = $_POST['calculaRotaAddress'];
    echo $iDb->getItineraryAddressByRegistration($registration, $calculaRotaOD, $address);
}
?>
