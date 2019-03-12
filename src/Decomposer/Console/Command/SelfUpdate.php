<?php

declare(strict_types=1);

namespace Decomposer\Console\Command;

use Symfony\Component\Console\Command\Command as BaseCommand;

class SelfUpdate extends BaseCommand
{
    protected static $defaultName = 'self-update';

    protected function configure()
    {
        $this
            ->setDescription('Updates decomposer.phar to the latest version')
        ;
    }
}