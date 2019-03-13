<?php

namespace Eilison\LaAdmin\Form\Field;

use Eilison\LaAdmin\Form\Field;

class Nullable extends Field
{
    public function __construct()
    {
    }

    public function __call($method, $parameters)
    {
        return $this;
    }
}
