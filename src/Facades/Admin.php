<?php

namespace Eilison\LaAdmin\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Admin.
 *
 * @method static \Eilison\LaAdmin\Grid grid($model, \Closure $callable)
 * @method static \Eilison\LaAdmin\Form form($model, \Closure $callable)
 * @method static \Eilison\LaAdmin\Show show($model, $callable = null)
 * @method static \Eilison\LaAdmin\Tree tree($model, \Closure $callable = null)
 * @method static \Eilison\LaAdmin\Layout\Content content(\Closure $callable = null)
 * @method static \Illuminate\Contracts\View\Factory|\Illuminate\View\View|void css($css = null)
 * @method static \Illuminate\Contracts\View\Factory|\Illuminate\View\View|void js($js = null)
 * @method static \Illuminate\Contracts\View\Factory|\Illuminate\View\View|void script($script = '')
 * @method static \Illuminate\Contracts\Auth\Authenticatable|null user()
 * @method static string title()
 * @method static void navbar(\Closure $builder = null)
 * @method static void registerAuthRoutes()
 * @method static void extend($name, $class)
 * @method static void disablePjax()
 */
class Admin extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Eilison\LaAdmin\Admin::class;
    }
}
