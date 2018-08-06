<?php

namespace Symfony\Component\Console\Output;

/**
 * Forces decorated ConsoleOutput.
 *
 * Class DecoratedConsoleOutput
 * @package Symfony\Component\Console\Output
 */
class DecoratedConsoleOutput extends ConsoleOutput
{
    public function __construct($verbosity = self::VERBOSITY_NORMAL, $decorated = true, $formatter = null)
    {
        parent::__construct($verbosity, $decorated = true, $formatter);
    }

    public function setDecorated($decorated)
    {
        parent::setDecorated($decorated = true);
    }
}
