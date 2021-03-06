<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class DefrModuleVueManagerCreatePartialStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug'         => 'partial',
        'title_column' => 'vue_name',
        'trashable'    => true,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'filename' => ['required' => true, 'unique' => true],
        'vue_name' => ['required' => true, 'unique' => true],
        'enabled',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'html_mode',
        'html',
        'style_mode',
        'style',
        'script_mode',
        'script',
    ];

}
