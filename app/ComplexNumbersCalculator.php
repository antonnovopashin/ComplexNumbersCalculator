<?php

namespace App;

/**
 * Class ComplexNumbersCalculator
 */
class ComplexNumbersCalculator
{
    /**
     * @param ComplexNumber $a
     * @param ComplexNumber $b
     * @return ComplexNumber
     */
    public function add(ComplexNumber $a, ComplexNumber $b): ComplexNumber {
        $resultRealPart = $a->getRealPart() + $b->getRealPart();
        $resultImaginaryPart = $a->getImaginaryPart() + $b->getImaginaryPart();

        return new ComplexNumber($resultRealPart, $resultImaginaryPart);
    }

    public function subtract(ComplexNumber $a, ComplexNumber $b): ComplexNumber {
        $resultRealPart = $a->getRealPart() - $b->getRealPart();
        $resultImaginaryPart = $a->getImaginaryPart() - $b->getImaginaryPart();

        return new ComplexNumber($resultRealPart, $resultImaginaryPart);
    }

    public function divide(ComplexNumber $a, ComplexNumber $b): ComplexNumber {
        $resultRealPart = $a->getRealPart() / $b->getRealPart();
        $resultImaginaryPart = $a->getImaginaryPart() / $b->getImaginaryPart();

        return new ComplexNumber($resultRealPart, $resultImaginaryPart);
    }

    public function multiply(ComplexNumber $a, ComplexNumber $b): ComplexNumber {
        $firstPart = $a->getRealPart() * $b->getRealPart();
        $secondPart = $a->getRealPart() * $b->getImaginaryPart();
        $thirdPart = $a->getImaginaryPart() * $b->getRealPart();
        $fourthPart = -($a->getImaginaryPart() * $b->getImaginaryPart());

        $resultImaginaryPart = $secondPart + $thirdPart;
        $resultRealPart = $firstPart + $fourthPart;

        return new ComplexNumber($resultRealPart, $resultImaginaryPart);
    }
}