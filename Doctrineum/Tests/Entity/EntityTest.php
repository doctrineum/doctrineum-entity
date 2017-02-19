<?php
namespace Doctrineum\Tests\Entity;

use Doctrineum\Entity\Entity;
use PHPUnit\Framework\TestCase;

class EntityTest extends TestCase
{
    /**
     * @test
     */
    public function I_can_use_entity()
    {
        $reflection = new \ReflectionClass(Entity::class);
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