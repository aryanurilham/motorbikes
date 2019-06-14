<?php
namespace Arya\Motorbikes\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class SpyTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Arya\Motorbikes\Domain\Model\Spy
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Arya\Motorbikes\Domain\Model\Spy();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getPairReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPair()
        );
    }

    /**
     * @test
     */
    public function setPairForStringSetsPair()
    {
        $this->subject->setPair('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'pair',
            $this->subject
        );
    }
}
