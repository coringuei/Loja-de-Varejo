<?php

namespace APP\Model;

class Validation
{
    public static function validateName(string $name):bool
    {
        return mb_strlen($name) > 4;
    }
    public static function validateNumber(int|float $value)
    {
        return $value > 0;
    }
    public static function validateBarCode(int $barCode):bool
    {
        return mb_strlen($barCode) == 13 && mb_substr($barCode,0,3) == '789';
    }
    public static function validatePostalCode(int|float $postalCode)
    {
        return mb_strlen($postalCode) == 8 ;
    }
    public static function validateCnpj(int|float $cnpj)
    {
        return mb_strlen($cnpj) == 14;
    }
}