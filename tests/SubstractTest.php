<?php


use \App\ComplexNumber;
use PHPUnit\Framework\TestCase;
use \App\ComplexNumbersCalculator;

class SubstractTest extends TestCase
{
    public function setUp():void { }
    public function tearDown():void { }

    /**
     * @test
     */
    public function canSubstract()
    {
        $calculator = new ComplexNumbersCalculator();
        $aRealPart = 5;
        $aImaginaryPart = 2;
        $bRealPart = 4;
        $bImaginaryPart = 3;
        $expectedSumRealPart = 1;
        $expectedSumImaginaryPart = -1;

        $aComplexNumber = new ComplexNumber($aRealPart, $aImaginaryPart);
        $bComplexNumber = new ComplexNumber($bRealPart, $bImaginaryPart);
        $expectedSumComplexNumber = new ComplexNumber($expectedSumRealPart, $expectedSumImaginaryPart);

        $calculatedComplexSum = $calculator->subtract($aComplexNumber, $bComplexNumber);
        $this->assertEquals($expectedSumComplexNumber, $calculatedComplexSum);
    }

    /**
     * @test
     */
    public function canSubstractWithNegativeNumbers()
    {
        $calculator = new ComplexNumbersCalculator();
        $aRealPart = -5;
        $aImaginaryPart = 2;
        $bRealPart = 4;
        $bImaginaryPart = -3;

        $expectedSumRealPart = -9;
        $expectedSumImaginaryPart = 5;

        $aComplexNumber = new ComplexNumber($aRealPart, $aImaginaryPart);
        $bComplexNumber = new ComplexNumber($bRealPart, $bImaginaryPart);
        $expectedSumComplexNumber = new ComplexNumber($expectedSumRealPart, $expectedSumImaginaryPart);

        $calculatedComplexSum = $calculator->subtract($aComplexNumber, $bComplexNumber);
        $this->assertEquals($expectedSumComplexNumber, $calculatedComplexSum);
    }

    /**
     * @test
     */
    public function canSubstractWithFloatNumbers()
    {
        $calculator = new ComplexNumbersCalculator();
        $aRealPart = -5;
        $aImaginaryPart = 3.5;
        $bRealPart = 4.7;
        $bImaginaryPart = 3;

        $expectedSumRealPart = -9.7;
        $expectedSumImaginaryPart = 0.5;

        $aComplexNumber = new ComplexNumber($aRealPart, $aImaginaryPart);
        $bComplexNumber = new ComplexNumber($bRealPart, $bImaginaryPart);
        $expectedSumComplexNumber = new ComplexNumber($expectedSumRealPart, $expectedSumImaginaryPart);

        $calculatedComplexSum = $calculator->subtract($aComplexNumber, $bComplexNumber);
        $this->assertEquals($expectedSumComplexNumber, $calculatedComplexSum);
    }

    /**
     * @test
     */
    public function falsePositiveSubstractTest()
    {
        $calculator = new ComplexNumbersCalculator();
        $aRealPart = -5;
        $aImaginaryPart = 2;
        $bRealPart = 4;
        $bImaginaryPart = -3;

        $expectedSumRealPart = -9;
        $expectedSumImaginaryPart = 6;

        $aComplexNumber = new ComplexNumber($aRealPart, $aImaginaryPart);
        $bComplexNumber = new ComplexNumber($bRealPart, $bImaginaryPart);
        $expectedSumComplexNumber = new ComplexNumber($expectedSumRealPart, $expectedSumImaginaryPart);

        $calculatedComplexSum = $calculator->subtract($aComplexNumber, $bComplexNumber);
        $this->assertNotEquals($expectedSumComplexNumber, $calculatedComplexSum);
    }
}
