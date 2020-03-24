<?php

namespace Console;

use Console\GreetCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class TimeCommand extends GreetCommand {

    public function configure() {
        $this->setName('greet')
            ->setDescription('Greet a user based on the time of the day.')
            ->setHelp('This command allows you to greet a user based on the time of the day...')
            ->addArgument('username', InputArgument::REQUIRED, 'The username of the user.');
    }

    public function execute(InputInterface $input, OutputInterface $output) {
        $this->greetUser($input, $output);

        return true;
    }
}