_You can't be sure if it can be used, until you use it._

But how to test entities by usage automatically?

- by fixtures.

But fot that I need to set database. What if it is just a library for include, **without** a database?
- then use this test framework

Real Doctrine-by SQL persistence, real Doctrine-by SQL fetch.

```php
<?php
namespace MyLibraryWithDoctrineEntities\Tests;

use Doctrine\ORM\EntityManager;
use Doctrineum\Tests\Entity\AbstractDoctrineEntitiesTest;
use MyLibraryWithDoctrineEntities\Entities\SomeEntity;

class PositiveTestOfAbstractDoctrineEntitiesTest extends AbstractDoctrineEntitiesTest
{
    protected function getDirsWithEntities()
    {
        return [
            __DIR__ . '/../Entities'
        ];
    }

    protected function getExpectedEntityClasses()
    {
        return [
            SomeEntity::class,
        ];
    }

    protected function createEntitiesToPersist()
    {
        return [
            new SomeEntity(),
        ];
    }

    protected function fetchEntitiesByOriginals(array $originalEntities, EntityManager $entityManager)
    {
        $original = current($originalEntities);
        $repository = $entityManager->getRepository(SomeValidEntity::class);
        $fetched = $repository->find($original->getId());

        return [
            $fetched
        ];
    }

}
```