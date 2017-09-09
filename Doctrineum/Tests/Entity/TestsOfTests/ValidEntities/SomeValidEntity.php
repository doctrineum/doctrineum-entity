<?php
namespace Doctrineum\Tests\Entity\TestsOfTests\ValidEntities;

use Doctrineum\Entity\Entity;

/**
 * @\Doctrine\ORM\Mapping\Entity()
 */
class SomeValidEntity implements Entity
{
    /**
     * @var int
     * @\Doctrine\ORM\Mapping\Id
     * @\Doctrine\ORM\Mapping\Column(type="integer")
     * @\Doctrine\ORM\Mapping\GeneratedValue()
     */
    private $id;

    /**
     * @var string
     * @\Doctrine\ORM\Mapping\Column(type="string")
     */
    private $value;

    /**
     * @return string
     */
    public static function getClass(): string
    {
        return static::class;
    }

    public function __construct($value)
    {
        $this->value = (string)$value;
    }

    public function getId()
    {
        return $this->id;
    }
}