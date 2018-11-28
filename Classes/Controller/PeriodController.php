<?php
declare(strict_types=1);
namespace Igroup\IgHistory\Controller;

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
 * PeriodController
 */
class PeriodController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * periodRepository
     *
     * @var \Igroup\IgHistory\Domain\Repository\PeriodRepository
     * @inject
     */
    protected $periodRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $periods = $this->periodRepository->findAll();
        $this->view->assign('periods', $periods);
    }
}
