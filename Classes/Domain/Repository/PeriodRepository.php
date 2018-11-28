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
 *  (c) 2018 Marvin Rudolph <m.rudolph@i-group.de>, igroup Internetagentur
 *
 ***/

/**
 * The repository for Periods
 */
class PeriodRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    /**
     * @var array
     */
    protected $defaultOrderings = [
        'year_start' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_DESCENDING
    ];
}
