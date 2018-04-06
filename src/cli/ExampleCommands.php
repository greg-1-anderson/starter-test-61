<?php

namespace StarterTest61\Cli;

class ExampleCommands extends \Robo\Tasks
{
    /**
     * @command multiply
     */
    public function multiply($a, $b)
    {
        $model = new \StarterTest61\Example($a);
        $result = $model->multiply($b);

        $this->io()->text("$a times $b is $result");
    }
}
