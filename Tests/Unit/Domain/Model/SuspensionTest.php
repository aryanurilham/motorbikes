<?php
namespace Arya\Motorbikes\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class SuspensionTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Arya\Motorbikes\Domain\Model\Suspension
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Arya\Motorbikes\Domain\Model\Suspension();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getEnduranceReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getEndurance()
        );
    }

    /**
     * @test
     */
    public function setEnduranceForStringSetsEndurance()
    {
        $this->subject->setEndurance('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'endurance',
            $this->subject
        );
    }
}
