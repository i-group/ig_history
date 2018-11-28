<?php
namespace Igroup\IgHistory\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Marvin Rudolph <m.rudolph@i-group.de>
 */
class PeriodTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Igroup\IgHistory\Domain\Model\Period
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Igroup\IgHistory\Domain\Model\Period();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getYearStartReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getYearStart()
        );
    }

    /**
     * @test
     */
    public function setYearStartForIntSetsYearStart()
    {
        $this->subject->setYearStart(12);

        self::assertAttributeEquals(
            12,
            'yearStart',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getYearEndReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getYearEnd()
        );
    }

    /**
     * @test
     */
    public function setYearEndForIntSetsYearEnd()
    {
        $this->subject->setYearEnd(12);

        self::assertAttributeEquals(
            12,
            'yearEnd',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getElementsReturnsInitialValueForElement()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getElements()
        );
    }

    /**
     * @test
     */
    public function setElementsForObjectStorageContainingElementSetsElements()
    {
        $element = new \Igroup\IgHistory\Domain\Model\Element();
        $objectStorageHoldingExactlyOneElements = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneElements->attach($element);
        $this->subject->setElements($objectStorageHoldingExactlyOneElements);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneElements,
            'elements',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addElementToObjectStorageHoldingElements()
    {
        $element = new \Igroup\IgHistory\Domain\Model\Element();
        $elementsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $elementsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($element));
        $this->inject($this->subject, 'elements', $elementsObjectStorageMock);

        $this->subject->addElement($element);
    }

    /**
     * @test
     */
    public function removeElementFromObjectStorageHoldingElements()
    {
        $element = new \Igroup\IgHistory\Domain\Model\Element();
        $elementsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $elementsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($element));
        $this->inject($this->subject, 'elements', $elementsObjectStorageMock);

        $this->subject->removeElement($element);
    }
}
