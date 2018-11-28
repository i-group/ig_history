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
 * Element
 */
class Element extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * headline
     *
     * @var string
     */
    protected $headline = '';

    /**
     * subheadline
     *
     * @var string
     */
    protected $subheadline = '';

    /**
     * images
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @cascade remove
     */
    protected $images = null;

    /**
     * description
     *
     * @var string
     */
    protected $description = '';

    /**
     * Returns the headline
     *
     * @return string $headline
     */
    public function getHeadline()
    {
        return $this->headline;
    }

    /**
     * Sets the headline
     *
     * @param string $headline
     * @return void
     */
    public function setHeadline($headline)
    {
        $this->headline = $headline;
    }

    /**
     * Returns the subheadline
     *
     * @return string $subheadline
     */
    public function getSubheadline()
    {
        return $this->subheadline;
    }

    /**
     * Sets the subheadline
     *
     * @param string $subheadline
     * @return void
     */
    public function setSubheadline($subheadline)
    {
        $this->subheadline = $subheadline;
    }

    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the images
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage $images
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Sets the images
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $images
     * @return void
     */
    public function setImages(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $images)
    {
        $this->images = $images;
    }

    /**
     * Adds an Image
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     * @return void
     */
    public function addImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image)
    {
        $this->images->attach($image);
    }

    /**
     * Removes an Image
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $imageToRemove
     * @return void
     */
    public function removeImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $imageToRemove)
    {
        $this->images->detach($imageToRemove);
    }
}
