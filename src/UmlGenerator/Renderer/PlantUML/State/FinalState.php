<?php

namespace UmlGenerator\Renderer\PlantUML\State;

/**
 * Description of FinalState
 *
 * @author rruiter
 */
class FinalState extends Element
{
    public function _render()
    {
        return '[*]';
    }

    public function getId()
    {
        return 'state_final';
    }

}
