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
 * Spy
 */
class Spy extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * pair
     * 
     * @var string
     */
    protected $pair = '';

    /**
     * Returns the pair
     * 
     * @return string $pair
     */
    public function getPair()
    {
        return $this->pair;
    }

    /**
     * Sets the pair
     * 
     * @param string $pair
     * @return void
     */
    public function setPair($pair)
    {
        $this->pair = $pair;
    }
}
