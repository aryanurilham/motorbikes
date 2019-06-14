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
 * Tank
 */
class Tank extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * maximum
     * 
     * @var string
     */
    protected $maximum = '';

    /**
     * Returns the maximum
     * 
     * @return string $maximum
     */
    public function getMaximum()
    {
        return $this->maximum;
    }

    /**
     * Sets the maximum
     * 
     * @param string $maximum
     * @return void
     */
    public function setMaximum($maximum)
    {
        $this->maximum = $maximum;
    }
}
