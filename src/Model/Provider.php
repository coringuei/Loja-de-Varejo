<?php

namespace APP\Model;

class Provider
{
    private int $cnpj;
    private string $name;
    private Address $address;

    public function __construct(
        int $cnpj,
        string $name,
    )
    {
        $this->name = $name;
        $this->cnpj = $cnpj;
    }
}
