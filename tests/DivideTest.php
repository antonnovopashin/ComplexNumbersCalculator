<?php


use \App\ComplexNumber;
use PHPUnit\Framework\TestCase;
use \App\ComplexNumbersCalculator;

class DivideTest extends TestCase
{
    public function setUp():void { }
    public function tearDown():void { }

    /**
     * @test
     */
    public function canDivide()
    {
        $calculator = new ComplexNumbersCalculator();
        $aRealPart = 3;
        $aImaginaryPart = 4;
        $bRealPart = 2;
        $bImaginaryPart = 1;
        $expectedSumRealPart = 2;
        $expectedSumImaginaryPart = 1;

        $aComplexNumber = new ComplexNumber($aRealPart, $aImaginaryPart);
        $bComplexNumber = new ComplexNumber($bRealPart, $bImaginaryPart);
        $expectedSumComplexNumber = new ComplexNumber($expectedSumRealPart, $expectedSumImaginaryPart);

        $calculatedComplexSum = $calculator->divide($aComplexNumber, $bComplexNumber);
        $this->assertEquals($expectedSumComplexNumber, $calculatedComplexSum);
    }

    /**
     * @test
     */
    public function cantDivideByNull()
    {
        $calculator = new ComplexNumbersCalculator();
        $aRealPart = 3;
        $aImaginaryPart = 2;
        $bRealPart = 0;
        $bImaginaryPart = 0;

        $aComplexNumber = new ComplexNumber($aRealPart, $aImaginaryPart);
        $bComplexNumber = new ComplexNumber($bRealPart, $bImaginaryPart);
        $this->expectException(\Exception::class);

        $calculator->divide($aComplexNumber, $bComplexNumber);
    }
    /**
     * @test
     */
    public function canDivideWithNegativeNumbers()
    {
        $calculator = new ComplexNumbersCalculator();
        $aRealPart = 3;
        $aImaginaryPart = 4;
        $bRealPart = 6;
        $bImaginaryPart = -8;

        $expectedSumRealPart = -0.14;
        $expectedSumImaginaryPart = 0.48;

        $aComplexNumber = new ComplexNumber($aRealPart, $aImaginaryPart);
        $bComplexNumber = new ComplexNumber($bRealPart, $bImaginaryPart);

        $expectedSumComplexNumber = new ComplexNumber($expectedSumRealPart, $expectedSumImaginaryPart);
        $calculatedComplexSum = $calculator->divide($aComplexNumber, $bComplexNumber);

        $this->assertEquals($expectedSumComplexNumber, $calculatedComplexSum);
    }

    /**
     * @test
     */
    public function falsePositiveDivideTest()
    {
        $calculator = new ComplexNumbersCalculator();
        $aRealPart = 3;
        $aImaginaryPart = 4;
        $bRealPart = 6;
        $bImaginaryPart = -8;

        $expectedSumRealPart = 5;
        $expectedSumImaginaryPart = 0.48;

        $aComplexNumber = new ComplexNumber($aRealPart, $aImaginaryPart);
        $bComplexNumber = new ComplexNumber($bRealPart, $bImaginaryPart);

        $expectedSumComplexNumber = new ComplexNumber($expectedSumRealPart, $expectedSumImaginaryPart);
        $calculatedComplexSum = $calculator->divide($aComplexNumber, $bComplexNumber);

        $this->assertNotEquals($expectedSumComplexNumber, $calculatedComplexSum);
    }
}
