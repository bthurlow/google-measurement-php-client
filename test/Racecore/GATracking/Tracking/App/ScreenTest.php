<?php
namespace Racecore\GATracking\Tracking\App;

/**
 * Class ScreenTest
 *
 * @author      Marco Rieger
 * @package     Racecore\GATracking\Tracking\App
 */
class ScreenTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var Screen
     */
    private $screen;

    public function setUp()
    {
        $this->screen  = new Screen();
    }

    public function testPaketEqualsSpecification()
    {
        $screen = $this->screen;

        $screen->setAppName('Test App');
        $screen->setAppVersion('1.0');
        $screen->setContentDescription('Test Description');

        $packet = $screen->getPaket();

        $this->assertSame(
            array(
                't' => 'appview',
                'an' => 'Test App',
                'av' => '1.0',
                'cd' => 'Test Description'
            ),
            $packet
        );
    }

}
 