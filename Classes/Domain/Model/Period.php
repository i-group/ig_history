<?php
declare(strict_types=1);
namespace Igroup\IgHistory\Domain\Model;

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
 * Period
 */
class Period extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * yearStart
     *
     * @var int
     */
    protected $yearStart = 0;

    /**
     * yearEnd
     *
     * @var int
     */
    protected $yearEnd = 0;

    /**
     * elements
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Igroup\IgHistory\Domain\Model\Element>
     * @cascade remove
     */
    protected $elements = null;

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->elements = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the yearStart
     *
     * @return int $yearStart
     */
    public function getYearStart()
    {
        return $this->yearStart;
    }

    /**
     * Sets the yearStart
     *
     * @param int $yearStart
     * @return void
     */
    public function setYearStart($yearStart)
    {
        $this->yearStart = $yearStart;
    }

    /**
     * Returns the yearEnd
     *
     * @return int $yearEnd
     */
    public function getYearEnd()
    {
        return $this->yearEnd;
    }

    /**
     * Sets the yearEnd
     *
     * @param int $yearEnd
     * @return void
     */
    public function setYearEnd($yearEnd)
    {
        $this->yearEnd = $yearEnd;
    }

    /**
     * Adds a Element
     *
     * @param \Igroup\IgHistory\Domain\Model\Element $element
     * @return void
     */
    public function addElement(\Igroup\IgHistory\Domain\Model\Element $element)
    {
        $this->elements->attach($element);
    }

    /**
     * Removes a Element
     *
     * @param \Igroup\IgHistory\Domain\Model\Element $elementToRemove The Element to be removed
     * @return void
     */
    public function removeElement(\Igroup\IgHistory\Domain\Model\Element $elementToRemove)
    {
        $this->elements->detach($elementToRemove);
    }

    /**
     * Returns the elements
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Igroup\IgHistory\Domain\Model\Element> $elements
     */
    public function getElements()
    {
        return $this->elements;
    }

    /**
     * Sets the elements
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Igroup\IgHistory\Domain\Model\Element> $elements
     * @return void
     */
    public function setElements(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $elements)
    {
        $this->elements = $elements;
    }
}
