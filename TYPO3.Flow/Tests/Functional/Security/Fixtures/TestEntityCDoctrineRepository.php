<?php
namespace TYPO3\Flow\Tests\Functional\Security\Fixtures;

/*
 * This file is part of the TYPO3.Flow package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Doctrine\ORM\Query;
use TYPO3\Flow\Annotations as Flow;

/**
 * @Flow\Scope("singleton")
 */
class TestEntityCDoctrineRepository extends \TYPO3\Flow\Persistence\Doctrine\Repository
{
    /**
     * @var string
     */
    const ENTITY_CLASSNAME = \TYPO3\Flow\Tests\Functional\Security\Fixtures\TestEntityC::class;

    /**
     * Returns all TestEntityC objects from persistence
     * @return array
     */
    public function findAllWithDql()
    {
        $query = $this->createDqlQuery('SELECT n FROM TYPO3\Flow\Tests\Functional\Security\Fixtures\TestEntityC n');
        return $query->getResult();
    }
}
