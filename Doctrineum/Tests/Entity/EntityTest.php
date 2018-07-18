<?php
namespace Doctrineum\Tests\Entity;

use Doctrineum\Entity\Entity;
use PHPUnit\Framework\TestCase;

class EntityTest extends TestCase
{
    /**
     * @test
     * @throws \ReflectionException
     */
    public function I_can_use_entity(): void
    {
        $reflection = new \ReflectionClass(Entity::class);
        self::assertTrue(
            $reflection->isInterface(),
            'Expected ' . Entity::class . ' to be an interface'
        );
        $methods = $reflection->getMethods();
        self::assertCount(1, $methods, 'Expected just a single method');
        /** @var \ReflectionMethod $method */
        $method = \current($methods);
        self::assertSame('getId', $method->getName(), "Expected 'getId' method name");
    }
}