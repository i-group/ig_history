<?php
namespace Igroup\IgHistory\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Marvin Rudolph <m.rudolph@i-group.de>
 */
class PeriodControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Igroup\IgHistory\Controller\PeriodController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Igroup\IgHistory\Controller\PeriodController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllPeriodsFromRepositoryAndAssignsThemToView()
    {

        $allPeriods = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $periodRepository = $this->getMockBuilder(\Igroup\IgHistory\Domain\Repository\PeriodRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $periodRepository->expects(self::once())->method('findAll')->will(self::returnValue($allPeriods));
        $this->inject($this->subject, 'periodRepository', $periodRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('periods', $allPeriods);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
