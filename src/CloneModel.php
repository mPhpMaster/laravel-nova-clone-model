<?php

namespace MPhpMaster\LaravelNovaCloneModel;

use Laravel\Nova\ResourceTool;

class CloneModel extends ResourceTool
{
    /**
     * Get the displayable name of the resource tool.
     *
     * @return string
     */
    public function name()
    {
        return 'Clone Model';
    }

    /**
     * Get the component name for the resource tool.
     *
     * @return string
     */
    public function component()
    {
        return 'clone-model';
    }
}
