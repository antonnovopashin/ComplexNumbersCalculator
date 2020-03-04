<?php


namespace App;


/**
 * Class ComplexNumber
 * @package App
 */
class ComplexNumber
{
    /**
     * @var float
     */
    private $realPart;

    /**
     * @var float
     */
    private $imaginaryPart;

    /**
     * @return int
     */
    public function getImaginaryPart(): float
    {
        return $this->imaginaryPart;
    }

    /**
     * @param float $imaginaryPart
     */
    public function setImaginaryPart(float $imaginaryPart): void
    {
        $this->imaginaryPart = $imaginaryPart;
    }

    /**
     * ComplexNumber constructor.
     * @param float $realPart
     * @param float $imaginaryPart
     */
    public function __construct(float $realPart, float $imaginaryPart)
    {
        $this->realPart = $realPart;
        $this->imaginaryPart = $imaginaryPart;
    }

    /**
     * @return float
     */
    public function getRealPart(): float
    {
        return $this->realPart;
    }

    /**
     * @param float $realPart
     */
    public function setRealPart(float $realPart): void
    {
        $this->realPart = $realPart;
    }
}