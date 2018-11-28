<?php
namespace Igroup\IgHistory\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Marvin Rudolph <m.rudolph@i-group.de>
 */
class ElementTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Igroup\IgHistory\Domain\Model\Element
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Igroup\IgHistory\Domain\Model\Element();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getHeadlineReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getHeadline()
        );
    }

    /**
     * @test
     */
    public function setHeadlineForStringSetsHeadline()
    {
        $this->subject->setHeadline('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'headline',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSubheadlineReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSubheadline()
        );
    }

    /**
     * @test
     */
    public function setSubheadlineForStringSetsSubheadline()
    {
        $this->subject->setSubheadline('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'subheadline',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getImagesReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getImages()
        );
    }

    /**
     * @test
     */
    public function setImagesForIntSetsImages()
    {
        $this->subject->setImages(12);

        self::assertAttributeEquals(
            12,
            'images',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );
    }
}
