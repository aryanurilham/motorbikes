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
 * Suspension
 */
class Suspension extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * endurance
     * 
     * @var string
     */
    protected $endurance = '';

    /**
     * Returns the endurance
     * 
     * @return string $endurance
     */
    public function getEndurance()
    {
        return $this->endurance;
    }

    /**
     * Sets the endurance
     * 
     * @param string $endurance
     * @return void
     */
    public function setEndurance($endurance)
    {
        $this->endurance = $endurance;
    }
}
