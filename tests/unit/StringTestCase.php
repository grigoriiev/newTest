<?php


namespace AppUnitTests;



use App\StringRevert;
use PHPUnit\Framework\TestCase;

/**
 * Class StringTestCase
 * @package AppUnitTests
 */
class StringTestCase extends TestCase
{

    /**
     *
     */
    public function testRevertCharacters():void
    {
        $string= new StringRevert();

        $result = $string->revertCharacters("Привет! Давно не виделись.");

        self::assertSame('Тевирп! Онвад ен ьсиледив.',$result);

    }

}