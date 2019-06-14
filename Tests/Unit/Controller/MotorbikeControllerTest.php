<?php
namespace Arya\Motorbikes\Tests\Unit\Controller;

/**
 * Test case.
 */
class MotorbikeControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Arya\Motorbikes\Controller\MotorbikeController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Arya\Motorbikes\Controller\MotorbikeController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllMotorbikesFromRepositoryAndAssignsThemToView()
    {

        $allMotorbikes = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $motorbikeRepository = $this->getMockBuilder(\Arya\Motorbikes\Domain\Repository\MotorbikeRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $motorbikeRepository->expects(self::once())->method('findAll')->will(self::returnValue($allMotorbikes));
        $this->inject($this->subject, 'motorbikeRepository', $motorbikeRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('motorbikes', $allMotorbikes);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenMotorbikeToView()
    {
        $motorbike = new \Arya\Motorbikes\Domain\Model\Motorbike();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('motorbike', $motorbike);

        $this->subject->showAction($motorbike);
    }
}
