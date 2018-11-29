<?php
declare(strict_types=1);
namespace Igroup\IgHistory\User;

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

use \TYPO3\CMS\Backend\Utility\BackendUtility;

/**
 * TcaLabels
 */
class TcaLabels
{
    /**
     * Builds the backend label for the periods
     *
     * @param array $parameters
     * @return void
     */
    public function periodLabel(&$parameters)
    {
        $record = $this->getRecord($parameters);

        if ($record) {
            $title = $record['year_start'];

            if ($record['year_end'] != '') {
                $title .= ' - ' . $record['year_end'];
            }

            $parameters['title'] = $title;
        }
    }

    /**
     * Returns the current record
     *
     * @param array $parameters
     * @return array | null
     */
    protected function getRecord(&$parameters)
    {
        return BackendUtility::getRecord($parameters['table'], $parameters['row']['uid']);
    }
}
