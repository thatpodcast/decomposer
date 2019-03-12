<?php

declare(strict_types=1);

namespace Decomposer\Console\Command;

use Symfony\Component\Console\Command\Command as BaseCommand;

class Sift extends BaseCommand
{
    protected static $defaultName = 'sift';

    protected function configure()
    {
        $this
            ->setDescription('Sift root dependencies for abandoned or small and stable packages')
        ;
    }
}