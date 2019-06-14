<?php
namespace Arya\Motorbikes\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class TankTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Arya\Motorbikes\Domain\Model\Tank
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Arya\Motorbikes\Domain\Model\Tank();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getMaximumReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getMaximum()
        );
    }

    /**
     * @test
     */
    public function setMaximumForStringSetsMaximum()
    {
        $this->subject->setMaximum('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'maximum',
            $this->subject
        );
    }
}
