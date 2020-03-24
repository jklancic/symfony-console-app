<?php

namespace Console;

use Console\TimeCommand;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;

require_once  './vendor/autoload.php';

class TimeCommandTest extends \PHPUnit_Framework_TestCase {

    public function testGreeting() {

        $application = new Application();
        $application->add(new TimeCommand());

        $command = $application->find('greet');
        $commandTester = new CommandTester($command);
        $commandTester->execute(array(
            'command' => $command->getName(),
            'username' => 'Jernej'
        ));    

        $this->assertRegExp('/Good/', $commandTester->getDisplay());
    }
}
