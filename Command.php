<?php

namespace Weann\Console;

use Symfony\Component\Console\Command\Command as SymfonyCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Command extends SymfonyCommand
{
    protected $name;
    protected $description;
    protected $hidden = false;
    protected $input;
    protected $output;

    public function __construct()
    {
        parent::__construct($this->name);

        $this->setDescription($this->description);
        $this->setHidden($this->hidden);
    }

    public function run(InputInterface $input, OutputInterface $output)
    {
        return parent::run(
            $this->input = $input, $this->output = $output
        );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        return $this->handle();
    }

    protected function handle() {}
}
