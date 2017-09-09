<?php
namespace Doctrineum\Tests\Entity\TestsOfTests\InvalidEntities;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;

/**
 * @Entity()
 */
class EntityWithoutIdGetter
{
    /**
     * @var int
     * @Id()
     * @Column(type="integer")
     * @GeneratedValue()
     */
    protected $id;

    /**
     * @return string
     */
    public static function getClass(): string
    {
        return static::class;
    }
}