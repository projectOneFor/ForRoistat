<?php
require '../Riostat.php';
require_once "../vendor/autoload.php";
use PHPUnit\Framework\TestCase;

class ExchangerTest extends TestCase
{
    private $exchanger;

    protected function setUp()
    {
        $this->exchanger = new Exchanger();
    }

    protected function tearDown()
    {
        $this->exchanger = NULL;
    }

    public function testRevertPunctuationMarks()
    {

        $result = $this->exchanger->revertPunctuationMarks("Привет! Как твои дела?");
        $this->assertEquals("Привет? Как твои дела!", $result);

        $count = mb_strlen("Привет! Как твои дела?");
        $this->assertEquals(22, $count);

        $this->assertInternalType("string", $result );
    }
}