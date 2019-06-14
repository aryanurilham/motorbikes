<?php
namespace Arya\Motorbikes\Domain\Model;


/***
 *
 * This file is part of the "motorbike" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 
 *
 ***/
/**
 * Handlebar
 */
class Handlebar extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * size
     * 
     * @var string
     */
    protected $size = '';

    /**
     * Returns the size
     * 
     * @return string $size
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Sets the size
     * 
     * @param string $size
     * @return void
     */
    public function setSize($size)
    {
        $this->size = $size;
    }
}
