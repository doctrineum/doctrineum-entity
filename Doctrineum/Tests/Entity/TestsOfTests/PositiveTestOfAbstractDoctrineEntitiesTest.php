<?php
namespace Doctrineum\Tests\Entity\TestsOfTests;

use Doctrineum\Tests\Entity\AbstractDoctrineEntitiesTest;
use Doctrineum\Tests\Entity\TestsOfTests\ValidEntities\SomeValidEntity;

class PositiveTestOfAbstractDoctrineEntitiesTest extends AbstractDoctrineEntitiesTest
{
    protected function getDirsWithEntities()
    {
        return [
            __DIR__ . DIRECTORY_SEPARATOR . 'ValidEntities'
        ];
    }

    protected function getExpectedEntityClasses()
    {
        return [
            SomeValidEntity::getClass(),
        ];
    }

    protected function createEntitiesToPersist()
    {
        return [
            new SomeValidEntity('foo'),
        ];
    }
}
