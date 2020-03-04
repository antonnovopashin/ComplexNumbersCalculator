<?php


use \App\ComplexNumber;
use PHPUnit\Framework\TestCase;
use \App\ComplexNumbersCalculator;

class SumTest extends TestCase
{
    public function setUp():void { }
    public function tearDown():void { }

    /**
     * @test
     */
    public function canSum()
    {
        $calculator = new ComplexNumbersCalculator();
        $aRealPart = 5;
        $aImaginaryPart = 2;
        $bRealPart = 4;
        $bImaginaryPart = 3;
        $expectedSumRealPart = 9;
        $expectedSumImaginaryPart = 5;

        $aComplexNumber = new ComplexNumber($aRealPart, $aImaginaryPart);
        $bComplexNumber = new ComplexNumber($bRealPart, $bImaginaryPart);
        $expectedSumComplexNumber = new ComplexNumber($expectedSumRealPart, $expectedSumImaginaryPart);

        $calculatedComplexSum = $calculator->add($aComplexNumber, $bComplexNumber);
        $this->assertEquals($expectedSumComplexNumber, $calculatedComplexSum);
    }

    /**
     * @test
     */
    public function canSumWithNegativeNumbers()
    {
        $calculator = new ComplexNumbersCalculator();
        $aRealPart = -5;
        $aImaginaryPart = 2;
        $bRealPart = 4;
        $bImaginaryPart = -3;

        $expectedSumRealPart = -1;
        $expectedSumImaginaryPart = -1;

        $aComplexNumber = new ComplexNumber($aRealPart, $aImaginaryPart);
        $bComplexNumber = new ComplexNumber($bRealPart, $bImaginaryPart);
        $expectedSumComplexNumber = new ComplexNumber($expectedSumRealPart, $expectedSumImaginaryPart);

        $calculatedComplexSum = $calculator->add($aComplexNumber, $bComplexNumber);
        $this->assertEquals($expectedSumComplexNumber, $calculatedComplexSum);
    }

    /**
     * @test
     */
    public function canSumWithFloatNumbers()
    {
        $calculator = new ComplexNumbersCalculator();
        $aRealPart = -5;
        $aImaginaryPart = 3.5;
        $bRealPart = 4.7;
        $bImaginaryPart = 3;

        $expectedSumRealPart = -0.3;
        $expectedSumImaginaryPart = 6.5;

        $aComplexNumber = new ComplexNumber($aRealPart, $aImaginaryPart);
        $bComplexNumber = new ComplexNumber($bRealPart, $bImaginaryPart);
        $expectedSumComplexNumber = new ComplexNumber($expectedSumRealPart, $expectedSumImaginaryPart);

        $calculatedComplexSum = $calculator->add($aComplexNumber, $bComplexNumber);
        $this->assertEquals($expectedSumComplexNumber, $calculatedComplexSum);
    }

    /**
     * @test
     */
    public function falsePositiveSumTest()
    {
        $calculator = new ComplexNumbersCalculator();
        $aRealPart = -5;
        $aImaginaryPart = 2;
        $bRealPart = 4;
        $bImaginaryPart = -3;

        $expectedSumRealPart = -2;
        $expectedSumImaginaryPart = -1;

        $aComplexNumber = new ComplexNumber($aRealPart, $aImaginaryPart);
        $bComplexNumber = new ComplexNumber($bRealPart, $bImaginaryPart);
        $expectedSumComplexNumber = new ComplexNumber($expectedSumRealPart, $expectedSumImaginaryPart);

        $calculatedComplexSum = $calculator->add($aComplexNumber, $bComplexNumber);
        $this->assertNotEquals($expectedSumComplexNumber, $calculatedComplexSum);
    }
}
