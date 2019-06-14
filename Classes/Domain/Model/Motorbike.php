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
 * Motorbike
 */
class Motorbike extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * modelname
     * 
     * @var string
     */
    protected $modelname = '';

    /**
     * producer
     * 
     * @var \Arya\Motorbikes\Domain\Model\Producer
     */
    protected $producer = null;

    /**
     * tank
     * 
     * @var \Arya\Motorbikes\Domain\Model\Tank
     */
    protected $tank = null;

    /**
     * suspension
     * 
     * @var \Arya\Motorbikes\Domain\Model\Suspension
     */
    protected $suspension = null;

    /**
     * wheels
     * 
     * @var \Arya\Motorbikes\Domain\Model\Wheels
     */
    protected $wheels = null;

    /**
     * handlebar
     * 
     * @var \Arya\Motorbikes\Domain\Model\Handlebar
     */
    protected $handlebar = null;

    /**
     * frontlamp
     * 
     * @var \Arya\Motorbikes\Domain\Model\Frontlamp
     */
    protected $frontlamp = null;

    /**
     * rearlight
     * 
     * @var \Arya\Motorbikes\Domain\Model\Rearlight
     */
    protected $rearlight = null;

    /**
     * spy
     * 
     * @var \Arya\Motorbikes\Domain\Model\Spy
     */
    protected $spy = null;

    /**
     * Returns the modelname
     * 
     * @return string $modelname
     */
    public function getModelname()
    {
        return $this->modelname;
    }

    /**
     * Sets the modelname
     * 
     * @param string $modelname
     * @return void
     */
    public function setModelname($modelname)
    {
        $this->modelname = $modelname;
    }

    /**
     * Returns the producer
     * 
     * @return \Arya\Motorbikes\Domain\Model\Producer $producer
     */
    public function getProducer()
    {
        return $this->producer;
    }

    /**
     * Sets the producer
     * 
     * @param \Arya\Motorbikes\Domain\Model\Producer $producer
     * @return void
     */
    public function setProducer(\Arya\Motorbikes\Domain\Model\Producer $producer)
    {
        $this->producer = $producer;
    }

    /**
     * Returns the tank
     * 
     * @return \Arya\Motorbikes\Domain\Model\Tank $tank
     */
    public function getTank()
    {
        return $this->tank;
    }

    /**
     * Sets the tank
     * 
     * @param \Arya\Motorbikes\Domain\Model\Tank $tank
     * @return void
     */
    public function setTank(\Arya\Motorbikes\Domain\Model\Tank $tank)
    {
        $this->tank = $tank;
    }

    /**
     * Returns the suspension
     * 
     * @return \Arya\Motorbikes\Domain\Model\Suspension $suspension
     */
    public function getSuspension()
    {
        return $this->suspension;
    }

    /**
     * Sets the suspension
     * 
     * @param \Arya\Motorbikes\Domain\Model\Suspension $suspension
     * @return void
     */
    public function setSuspension(\Arya\Motorbikes\Domain\Model\Suspension $suspension)
    {
        $this->suspension = $suspension;
    }

    /**
     * Returns the wheels
     * 
     * @return \Arya\Motorbikes\Domain\Model\Wheels $wheels
     */
    public function getWheels()
    {
        return $this->wheels;
    }

    /**
     * Sets the wheels
     * 
     * @param \Arya\Motorbikes\Domain\Model\Wheels $wheels
     * @return void
     */
    public function setWheels(\Arya\Motorbikes\Domain\Model\Wheels $wheels)
    {
        $this->wheels = $wheels;
    }

    /**
     * Returns the handlebar
     * 
     * @return \Arya\Motorbikes\Domain\Model\Handlebar $handlebar
     */
    public function getHandlebar()
    {
        return $this->handlebar;
    }

    /**
     * Sets the handlebar
     * 
     * @param \Arya\Motorbikes\Domain\Model\Handlebar $handlebar
     * @return void
     */
    public function setHandlebar(\Arya\Motorbikes\Domain\Model\Handlebar $handlebar)
    {
        $this->handlebar = $handlebar;
    }

    /**
     * Returns the frontlamp
     * 
     * @return \Arya\Motorbikes\Domain\Model\Frontlamp $frontlamp
     */
    public function getFrontlamp()
    {
        return $this->frontlamp;
    }

    /**
     * Sets the frontlamp
     * 
     * @param \Arya\Motorbikes\Domain\Model\Frontlamp $frontlamp
     * @return void
     */
    public function setFrontlamp(\Arya\Motorbikes\Domain\Model\Frontlamp $frontlamp)
    {
        $this->frontlamp = $frontlamp;
    }

    /**
     * Returns the rearlight
     * 
     * @return \Arya\Motorbikes\Domain\Model\Rearlight $rearlight
     */
    public function getRearlight()
    {
        return $this->rearlight;
    }

    /**
     * Sets the rearlight
     * 
     * @param \Arya\Motorbikes\Domain\Model\Rearlight $rearlight
     * @return void
     */
    public function setRearlight(\Arya\Motorbikes\Domain\Model\Rearlight $rearlight)
    {
        $this->rearlight = $rearlight;
    }

    /**
     * Returns the spy
     * 
     * @return \Arya\Motorbikes\Domain\Model\Spy $spy
     */
    public function getSpy()
    {
        return $this->spy;
    }

    /**
     * Sets the spy
     * 
     * @param \Arya\Motorbikes\Domain\Model\Spy $spy
     * @return void
     */
    public function setSpy(\Arya\Motorbikes\Domain\Model\Spy $spy)
    {
        $this->spy = $spy;
    }
}
