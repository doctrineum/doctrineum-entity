<?php
namespace Doctrineum\Tests\Entity\TestsOfTests;

use Doctrine\ORM\EntityManager;
use Doctrineum\Tests\Entity\TestsOfTests\InvalidEntities\EntityWithoutIdGetter;
use Doctrineum\Tests\Entity\AbstractDoctrineEntitiesTest;

class DoctrineEntityWithoutIdGetterNegativeTest extends AbstractDoctrineEntitiesTest
{
    /**
     * @test
     * @expectedException \LogicException
     * @expectedExceptionMessageRegExp ~getId~
     * @codeCoverageIgnore
     */
    public function I_can_persist_and_fetch_entities()
    {
        parent::I_can_persist_and_fetch_entities();
    }

    protected function getDirsWithEntities()
    {
        return [
            __DIR__ . DIRECTORY_SEPARATOR . 'InvalidEntities',
        ];
    }

    protected function createEntitiesToPersist()
    {
        return [
            new EntityWithoutIdGetter('foo'),
        ];
    }

    /**
     * @param array $originalEntities
     * @param EntityManager $entityManager
     * @codeCoverageIgnore
     */
    protected function fetchEntitiesByOriginals(array $originalEntities, EntityManager $entityManager)
    {
        throw new \LogicException('Should not reach this code');
    }

}