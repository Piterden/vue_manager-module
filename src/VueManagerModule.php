<?php namespace Defr\VueManagerModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

class VueManagerModule extends Module
{
    /**
     * The module sections.
     *
     * @var array
     */
    protected $sections = [
        'pages'    => [
            'href' => '/admin/vue_manager',
            'buttons' => [
                'new_vue_page',
            ],
        ],
        'partials' => [
            'href' => '/admin/vue_manager/partial',
            'buttons' => [
                'new_vue_partial',
            ],
        ],
    ];
}
