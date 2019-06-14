<?php
namespace Arya\Motorbikes\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class WheelsTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Arya\Motorbikes\Domain\Model\Wheels
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Arya\Motorbikes\Domain\Model\Wheels();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getSizeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSize()
        );
    }

    /**
     * @test
     */
    public function setSizeForStringSetsSize()
    {
        $this->subject->setSize('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'size',
            $this->subject
        );
    }
}
