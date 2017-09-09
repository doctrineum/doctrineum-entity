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
    public function I_can_persist_and_fetch_entities(): array
    {
        return parent::I_can_persist_and_fetch_entities();
    }

    protected function getDirsWithEntities()
    {
        return [
            __DIR__ . DIRECTORY_SEPARATOR . 'InvalidEntities',
        ];
    }

    protected function createEntitiesToPersist(): array
    {
        return [new EntityWithoutIdGetter()];
    }

    /**
     * @param array $originalEntities
     * @param EntityManager $entityManager
     * @codeCoverageIgnore
     */
    protected function fetchEntitiesByOriginals(array $originalEntities, EntityManager $entityManager): array
    {
        throw new \LogicException('Should not reach this code');
    }

}