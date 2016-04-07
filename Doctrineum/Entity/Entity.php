<?php
namespace Doctrineum\Entity;

/**
 * This is not required.
 * Not necessary.
 * It is just recommended.
 * Anyway, every Doctrine entity has to have ID (of any name) and should have getter for it. So why not getId ... ?
 */
interface Entity
{
    /** @return int|float|string|null */
    public function getId();
}