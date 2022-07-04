<?php

namespace APP\Model;

class Product
{
    private int $barCode;
    private string $name;
    private float $price;
    private int $quantity;
    private Provider $provider;
    private bool $isActive; //true or false

    public function __construct(
        float $cost,
        float $tributes,
        float $fixedCost,
        int $barCode,
        int $quantity,
        string $name,
        float $lucre = 0.2,
        bool $isActive = true
    )
    {
        //inicializando as propriedades
        $this->barCode = $barCode;
        $this->name = $name;
        $this->quantity = $quantity;
        $this->isActive = $isActive;

        //calcular o preço de venda
        self::calculateSalePrice(
            tributes: $tributes,
            cost: $cost,
            lucre: $lucre,
            fixedCost: $fixedCost
        );
    }
    
    private function calculateSalePrice(float $cost, float $tributes, float $fixedCost, float $lucre=0.4):void
    {
        $this->price = ($cost+$tributes+$fixedCost) / (1- $lucre);
    }

    public function calculateMarkup($cost):float
    {
        return $this ->price /$cost;
    }
}