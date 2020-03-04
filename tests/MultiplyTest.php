<?php


use \App\ComplexNumber;
use PHPUnit\Framework\TestCase;
use \App\ComplexNumbersCalculator;

class MultiplyTest extends TestCase
{
    public function setUp():void { }
    public function tearDown():void { }

    /**
     * @test
     */
    public function canMultiply()
    {
        $calculator = new ComplexNumbersCalculator();
        $aRealPart = 1;
        $aImaginaryPart = -1;
        $bRealPart = 3;
        $bImaginaryPart = 6;
        $expectedSumRealPart = 9;
        $expectedSumImaginaryPart = 3;

        $aComplexNumber = new ComplexNumber($aRealPart, $aImaginaryPart);
        $bComplexNumber = new ComplexNumber($bRealPart, $bImaginaryPart);
        $expectedSumComplexNumber = new ComplexNumber($expectedSumRealPart, $expectedSumImaginaryPart);

        $calculatedComplexSum = $calculator->multiply($aComplexNumber, $bComplexNumber);
        $this->assertEquals($expectedSumComplexNumber, $calculatedComplexSum);
    }

    /**
     * @test
     */
    public function canMultiplyWithNegativeNumbers()
    {
        $calculator = new ComplexNumbersCalculator();
        $aRealPart = 3;
        $aImaginaryPart = 2;
        $bRealPart = 1;
        $bImaginaryPart = 7;

        $expectedSumRealPart = -11;
        $expectedSumImaginaryPart = 23;

        $aComplexNumber = new ComplexNumber($aRealPart, $aImaginaryPart);
        $bComplexNumber = new ComplexNumber($bRealPart, $bImaginaryPart);
        $expectedSumComplexNumber = new ComplexNumber($expectedSumRealPart, $expectedSumImaginaryPart);

        $calculatedComplexSum = $calculator->multiply($aComplexNumber, $bComplexNumber);
        $this->assertEquals($expectedSumComplexNumber, $calculatedComplexSum);
    }

    /**
     * @test
     */
    public function canMultiplyWithFloatNumbers()
    {
        $calculator = new ComplexNumbersCalculator();
        $aRealPart = -5;
        $aImaginaryPart = 3.5;
        $bRealPart = 4.7;
        $bImaginaryPart = 3;

        $expectedSumRealPart = -34;
        $expectedSumImaginaryPart = 1.45;

        $aComplexNumber = new ComplexNumber($aRealPart, $aImaginaryPart);
        $bComplexNumber = new ComplexNumber($bRealPart, $bImaginaryPart);
        $expectedSumComplexNumber = new ComplexNumber($expectedSumRealPart, $expectedSumImaginaryPart);

        $calculatedComplexSum = $calculator->multiply($aComplexNumber, $bComplexNumber);
        $this->assertEquals($expectedSumComplexNumber, $calculatedComplexSum);
    }

    /**
     * @test
     */
    public function falsePositiveMultiplyTest()
    {
        $calculator = new ComplexNumbersCalculator();
        $aRealPart = 1;
        $aImaginaryPart = -1;
        $bRealPart = 3;
        $bImaginaryPart = 6;
        $expectedSumRealPart = 9;
        $expectedSumImaginaryPart = 6;

        $aComplexNumber = new ComplexNumber($aRealPart, $aImaginaryPart);
        $bComplexNumber = new ComplexNumber($bRealPart, $bImaginaryPart);
        $expectedSumComplexNumber = new ComplexNumber($expectedSumRealPart, $expectedSumImaginaryPart);

        $calculatedComplexSum = $calculator->multiply($aComplexNumber, $bComplexNumber);
        $this->assertNotEquals($expectedSumComplexNumber, $calculatedComplexSum);
    }
}
