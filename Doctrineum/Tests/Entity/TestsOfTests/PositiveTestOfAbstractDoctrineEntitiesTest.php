<?php
namespace Doctrineum\Tests\Entity\TestsOfTests;

use Doctrine\ORM\EntityManager;
use Doctrineum\Tests\Entity\AbstractDoctrineEntitiesTest;
use Doctrineum\Tests\Entity\TestsOfTests\ValidEntities\SomeValidEntity;
use Doctrineum\Entity\Entity;

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

    protected function fetchEntitiesByOriginals(array $originalEntities, EntityManager $entityManager)
    {
        /** @var Entity $original */
        $original = current($originalEntities);
        $repository = $entityManager->getRepository(SomeValidEntity::getClass());
        $fetched = $repository->find($original->getId());

        return [
            $fetched
        ];
    }

}
