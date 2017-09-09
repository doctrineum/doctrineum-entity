<?php
namespace Doctrineum\Tests\Entity\TestsOfTests;

use Doctrine\ORM\EntityManager;
use Doctrineum\Tests\Entity\AbstractDoctrineEntitiesTest;

/**
 * @codeCoverageIgnore
 */
class DoctrineEntityUnknownSqlDriverNegativeTest extends AbstractDoctrineEntitiesTest
{
    protected function getSqlExtensionName(): string
    {
        return 'nonsenseSql';
    }

    protected function getDirsWithEntities()
    {
        throw new \LogicException('Should not reach this code');
    }

    protected function createEntitiesToPersist(): array
    {
        throw new \LogicException('Should not reach this code');
    }

    protected function fetchEntitiesByOriginals(array $originalEntities, EntityManager $entityManager): array
    {
        throw new \LogicException('Should not reach this code');
    }

}