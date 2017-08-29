<?php

namespace Sb\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class CreateServiceCommand extends Command
{
    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('service:create')

            // the short description shown while running "php bin/console list"
            ->setDescription('Creates a new service.')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('This command allows you to create a service...')
	     
            // arguments
	    ->addArgument('name', InputArgument::REQUIRED, 'The name of the service.')
	    ->addOption('app', 'a', InputOption::VALUE_REQUIRED, 'App Name')
    	;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
	$name = $input->getArgument('name');
	$app = $input->getOption('app');
	$output->writeln('<error>foo</error>');
	$output->writeln('<fg=green>foo</>');
	return 1;

        // outputs multiple lines to the console (adding "\n" at the end of each line)
    	$output->writeln([
            'Service Creator',
            '============',
            '',
        ]);

        // outputs a message followed by a "\n"
        $output->writeln('Whoa!');

        // outputs a message without adding a "\n" at the end of the line
        $output->write('You are about to ');
        $output->write('create a service.');
    }
}

