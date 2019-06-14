<?php
namespace Arya\Motorbikes\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class FrontlampTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Arya\Motorbikes\Domain\Model\Frontlamp
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Arya\Motorbikes\Domain\Model\Frontlamp();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getSizeReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getSize()
        );
    }

    /**
     * @test
     */
    public function setSizeForFloatSetsSize()
    {
        $this->subject->setSize(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'size',
            $this->subject,
            '',
            0.000000001
        );
    }

    /**
     * @test
     */
    public function getFormReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getForm()
        );
    }

    /**
     * @test
     */
    public function setFormForIntSetsForm()
    {
        $this->subject->setForm(12);

        self::assertAttributeEquals(
            12,
            'form',
            $this->subject
        );
    }
}
