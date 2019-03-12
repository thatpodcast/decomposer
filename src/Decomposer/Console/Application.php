<?php

declare(strict_types=1);

namespace Decomposer\Console;

use Symfony\Component\Console\Application as BaseApplication;

class Application extends BaseApplication
{
    public function __construct()
    {
        parent::__construct('Decomposer', 'unknown');
    }

    protected function getDefaultCommands()
    {
        $commands = array_merge(parent::getDefaultCommands(), [
            new Command\Sift(),
            new Command\Decompose(),

        ]);

        if ('phar:' === substr(__FILE__, 0, 5)) {
            $commands[] = new Command\SelfUpdate();
        }

        return $commands;
    }
}