<?php namespace Defr\VueManagerModule\Page\Tree;

use Anomaly\Streams\Platform\Ui\Tree\TreeBuilder;

/**
 * Vue PageTreeBuilder class
 */
class PageTreeBuilder extends TreeBuilder
{
    /**
     * The item segments.
     *
     * @var array|string
     */
    protected $segments = [];

    /**
     * The tree buttons.
     *
     * @var array
     */
    protected $buttons = [
        'add'  => [
            'text' => 'anomaly.module.pages::button.create_child_page',
            'href' => 'admin/vue_manager/create?parent={entry.id}',
        ],
        'view' => [
            'target' => '_blank',
        ],
        'delete',
    ];

    /**
     * The tree options.
     *
     * @var array
     */
    protected $options = [];

    /**
     * The tree assets.
     *
     * @var array
     */
    protected $assets = [];

}
