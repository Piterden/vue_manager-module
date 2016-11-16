<?php namespace Defr\VueManagerModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

class VueManagerModuleServiceProvider extends AddonServiceProvider
{
    protected $plugins    = [];
    protected $middleware = [];
    protected $listeners  = [];
    protected $aliases    = [];
    protected $bindings   = [];
    protected $providers  = [];
    protected $singletons = [];
    protected $mobile     = [];

    protected $overrides  = [
        'anomaly.field_type.editor::input' => 'defr.module.vue_manager::input',
    ];

    protected $routes = [
        'admin/vue_manager'                   => 'Defr\VueManagerModule\Http\Controller\Admin\PageController@index',
        'admin/vue_manager/create'            => 'Defr\VueManagerModule\Http\Controller\Admin\PageController@create',
        'admin/vue_manager/edit/{id}'         => 'Defr\VueManagerModule\Http\Controller\Admin\PageController@edit',
        'admin/vue_manager/partial'           => 'Defr\VueManagerModule\Http\Controller\Admin\PartialController@index',
        'admin/vue_manager/partial/create'    => 'Defr\VueManagerModule\Http\Controller\Admin\PartialController@create',
        'admin/vue_manager/partial/edit/{id}' => 'Defr\VueManagerModule\Http\Controller\Admin\PartialController@edit',
    ];

    public function register()
    {
        }

    public function map()
    {
        }

}
