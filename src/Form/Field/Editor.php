<?php

namespace Eilison\LaAdmin\Form\Field;

use Eilison\LaAdmin\Form\Field;

class Editor extends Field
{
    protected static $js = [
        '//cdn.ckeditor.com/4.5.10/standard-all/ckeditor.js',
    ];

    public function render()
    {
        $this->script = "CKEDITOR.replace('{$this->id}');";

        return parent::render();
    }
}
