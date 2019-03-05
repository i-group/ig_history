<?php
declare(strict_types=1);
namespace Igroup\IgHistory\Domain\Repository;

/***
 *
 * This file is part of the "History" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 Marvin Rudolph <m.rudolph@i-group.de>, igroup Internetagentur
 *
 ***/

/**
 * The repository for Elements
 */
class ElementRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    /**
     * @var array
     */
    protected $defaultOrderings = [
        'sorting' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_DESCENDING
    ];
}
