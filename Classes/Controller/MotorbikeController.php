<?php
namespace Arya\Motorbikes\Controller;


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
 * MotorbikeController
 */
class MotorbikeController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * motorbikeRepository
     * 
     * @var \Arya\Motorbikes\Domain\Repository\MotorbikeRepository
     * @inject
     */
    protected $motorbikeRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $motorbikes = $this->motorbikeRepository->findAll();
        $this->view->assign('motorbikes', $motorbikes);
    }

    /**
     * action show
     * 
     * @param \Arya\Motorbikes\Domain\Model\Motorbike $motorbike
     * @return void
     */
    public function showAction(\Arya\Motorbikes\Domain\Model\Motorbike $motorbike)
    {
        $this->view->assign('motorbike', $motorbike);
    }
}
