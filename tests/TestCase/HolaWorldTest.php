<?php
namespace ThinkAi\Test;

use ThinkAi\HolaWorld\HolaWorld;
use PHPUnit\Framework\TestCase;

/**
 * Class HolaWorldTest
 * @package ThinkAi\Test
 */
class HolaWorldTest extends TestCase
{

    public function testGreet()
    {
        $this->assertEquals("Hola Chica", HolaWorld::greet("Chica"));
        $this->assertEquals("Hola Mr. Saha", HolaWorld::greet("Mr. Saha"));
        $this->assertEquals("Hola Mr. Batabyal", HolaWorld::greet("Mr. Batabyal"));
        $this->assertEquals("Hola Ms. Das", HolaWorld::greet("Ms. Das"));

    }
}
