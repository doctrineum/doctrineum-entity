<?php
namespace Doctrineum\Tests\Entity;

class EntityTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function I_can_use_entity()
    {
        $reflection = new \ReflectionClass('\Doctrineum\Entity\Entity');
        self::assertTrue(
            $reflection->isInterface(),
            'Expected \Doctrineum\Entity\Entity to be interface'
        );
        $methods = $reflection->getMethods();
        self::assertCount(1, $methods, 'Expected just a single method');
        /** @var \ReflectionMethod $method */
        $method = current($methods);
        self::assertSame('getId', $method->getName(), "Expected 'getId' method name");
    }
}