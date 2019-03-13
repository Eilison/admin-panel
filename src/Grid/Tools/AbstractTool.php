<?php

namespace Eilison\LaAdmin\Grid\Tools;

use Eilison\LaAdmin\Grid;
use Illuminate\Contracts\Support\Renderable;

abstract class AbstractTool implements Renderable
{
    /**
     * @var Grid
     */
    protected $grid;

    /**
     * @var bool
     */
    protected $disabled = false;

    /**
     * Toggle this button.
     *
     * @param bool $disable
     *
     * @return $this
     */
    public function disable(bool $disable = true)
    {
        $this->disabled = $disable;

        return $this;
    }

    /**
     * If the tool is allowed.
     */
    public function allowed()
    {
        return !$this->disabled;
    }

    /**
     * Set parent grid.
     *
     * @param Grid $grid
     *
     * @return $this
     */
    public function setGrid(Grid $grid)
    {
        $this->grid = $grid;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    abstract public function render();

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->render();
    }
}
