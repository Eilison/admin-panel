<?php

namespace Eilison\LaAdmin\Grid\Filter\Presenter;

use Eilison\LaAdmin\Facades\Admin;

class Checkbox extends Radio
{
    protected function prepare()
    {
        $script = "$('.{$this->filter->getId()}').iCheck({checkboxClass:'icheckbox_minimal-blue'});";

        Admin::script($script);
    }
}
