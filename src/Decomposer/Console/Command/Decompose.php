<?php

declare(strict_types=1);

namespace Decomposer\Console\Command;

use Symfony\Component\Console\Command\Command as BaseCommand;

class Decompose extends BaseCommand
{
    protected static $defaultName = 'decompose';

    protected function configure()
    {
        $this
            ->setDescription('Import code from Composer packages directly into your project')
            ;
    }
}