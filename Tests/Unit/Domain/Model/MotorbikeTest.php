<?php
namespace Arya\Motorbikes\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class MotorbikeTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Arya\Motorbikes\Domain\Model\Motorbike
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Arya\Motorbikes\Domain\Model\Motorbike();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getModelnameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getModelname()
        );
    }

    /**
     * @test
     */
    public function setModelnameForStringSetsModelname()
    {
        $this->subject->setModelname('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'modelname',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getProducerReturnsInitialValueForProducer()
    {
        self::assertEquals(
            null,
            $this->subject->getProducer()
        );
    }

    /**
     * @test
     */
    public function setProducerForProducerSetsProducer()
    {
        $producerFixture = new \Arya\Motorbikes\Domain\Model\Producer();
        $this->subject->setProducer($producerFixture);

        self::assertAttributeEquals(
            $producerFixture,
            'producer',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTankReturnsInitialValueForTank()
    {
        self::assertEquals(
            null,
            $this->subject->getTank()
        );
    }

    /**
     * @test
     */
    public function setTankForTankSetsTank()
    {
        $tankFixture = new \Arya\Motorbikes\Domain\Model\Tank();
        $this->subject->setTank($tankFixture);

        self::assertAttributeEquals(
            $tankFixture,
            'tank',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSuspensionReturnsInitialValueForSuspension()
    {
        self::assertEquals(
            null,
            $this->subject->getSuspension()
        );
    }

    /**
     * @test
     */
    public function setSuspensionForSuspensionSetsSuspension()
    {
        $suspensionFixture = new \Arya\Motorbikes\Domain\Model\Suspension();
        $this->subject->setSuspension($suspensionFixture);

        self::assertAttributeEquals(
            $suspensionFixture,
            'suspension',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getWheelsReturnsInitialValueForWheels()
    {
        self::assertEquals(
            null,
            $this->subject->getWheels()
        );
    }

    /**
     * @test
     */
    public function setWheelsForWheelsSetsWheels()
    {
        $wheelsFixture = new \Arya\Motorbikes\Domain\Model\Wheels();
        $this->subject->setWheels($wheelsFixture);

        self::assertAttributeEquals(
            $wheelsFixture,
            'wheels',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getHandlebarReturnsInitialValueForHandlebar()
    {
        self::assertEquals(
            null,
            $this->subject->getHandlebar()
        );
    }

    /**
     * @test
     */
    public function setHandlebarForHandlebarSetsHandlebar()
    {
        $handlebarFixture = new \Arya\Motorbikes\Domain\Model\Handlebar();
        $this->subject->setHandlebar($handlebarFixture);

        self::assertAttributeEquals(
            $handlebarFixture,
            'handlebar',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getFrontlampReturnsInitialValueForFrontlamp()
    {
        self::assertEquals(
            null,
            $this->subject->getFrontlamp()
        );
    }

    /**
     * @test
     */
    public function setFrontlampForFrontlampSetsFrontlamp()
    {
        $frontlampFixture = new \Arya\Motorbikes\Domain\Model\Frontlamp();
        $this->subject->setFrontlamp($frontlampFixture);

        self::assertAttributeEquals(
            $frontlampFixture,
            'frontlamp',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getRearlightReturnsInitialValueForRearlight()
    {
        self::assertEquals(
            null,
            $this->subject->getRearlight()
        );
    }

    /**
     * @test
     */
    public function setRearlightForRearlightSetsRearlight()
    {
        $rearlightFixture = new \Arya\Motorbikes\Domain\Model\Rearlight();
        $this->subject->setRearlight($rearlightFixture);

        self::assertAttributeEquals(
            $rearlightFixture,
            'rearlight',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSpyReturnsInitialValueForSpy()
    {
        self::assertEquals(
            null,
            $this->subject->getSpy()
        );
    }

    /**
     * @test
     */
    public function setSpyForSpySetsSpy()
    {
        $spyFixture = new \Arya\Motorbikes\Domain\Model\Spy();
        $this->subject->setSpy($spyFixture);

        self::assertAttributeEquals(
            $spyFixture,
            'spy',
            $this->subject
        );
    }
}
