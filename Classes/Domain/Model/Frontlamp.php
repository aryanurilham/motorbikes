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
 * Frontlamp
 */
class Frontlamp extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * size
     * 
     * @var float
     */
    protected $size = 0.0;

    /**
     * form
     * 
     * @var int
     */
    protected $form = 0;

    /**
     * Returns the size
     * 
     * @return float $size
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Sets the size
     * 
     * @param float $size
     * @return void
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * Returns the form
     * 
     * @return int $form
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * Sets the form
     * 
     * @param int $form
     * @return void
     */
    public function setForm($form)
    {
        $this->form = $form;
    }
}
