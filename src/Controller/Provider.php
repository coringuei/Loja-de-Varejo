<?php
namespace APP\Controller;

require_once '../../vendor/autoload.php';

use APP\Model\Address;
use APP\Utils\Redirect;
use APP\Model\Validation;
use APP\Model\Provider;

if(empty($_POST)){
    Redirect::redirect(
            type:'error',
            message: 'Requisição inválida!!!'
    );
}
$cnpj = $_POST["cnpj"];
$name = $_POST["name"];
$publicPlace = $_POST["publicPlace"];
$streetNumber = $_POST["streetNumber"];
$neighborhood = $_POST["neighborhood"];
$city = $_POST["city"];
$postalCode = $_POST["postalCode"];

$error = array();

if(!Validation::validateCnpj($cnpj))
{
    array_push($error, 'CNPJ INVÁLIDO!!');
}
if(!Validation::validatePostalCode($postalCode))
{
    array_push($error, 'O CEP deve conter 8 caracteres!!');
}
if($error){
    Redirect::redirect(
        message: $error,
        type: 'warning'
    );
}else{
    $provider = new Provider(
        cnpj: $cnpj,
        name: $name
    );
    var_dump($provider);

    Redirect::redirect(
        message:'Provedor cadastrado com sucesso!!'
    );
}