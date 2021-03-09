<?php

namespace app\products;


class RehauWindowProduct extends AbstractProduct
{
    public $systemWidth;
    public $cameraNumbers;
    public $heatResistance;
    public $doubleGlazedWindows;
    public $suitableForGlazing;
    public $production;
    public $productionTime;

    public function __toString()
    {
        return serialize([
            'systemWidth' => $this->systemWidth,
            'cameraNumbers' => $this->cameraNumbers,
            'heatResistance' => $this->heatResistance,
            'doubleGlazedWindows' => $this->doubleGlazedWindows,
            'suitableForGlazing' => $this->suitableForGlazing,
            'production' => $this->production,
            'productionTime' => $this->productionTime,
        ]);
    }
}
