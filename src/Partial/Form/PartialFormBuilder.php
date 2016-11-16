<?php namespace Defr\VueManagerModule\Partial\Form;

use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

class PartialFormBuilder extends FormBuilder
{

   /**
     * The form fields.
     *
     * @var array|string
     */
    protected $fields = [
        'filename',
        'vue_name',
        'enabled',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'html_mode',
        'html' => [
            'config' => [
                'mode' => '{entry.html_mode}',
            ],
        ],
        'css_mode',
        'css' => [
            'config' => [
                'mode' => '{entry.css_mode}',
            ],
        ],
        'script_mode',
        'script' => [
            'config' => [
                'mode' => '{entry.script_mode}',
            ],
        ],
    ];

    /**
     * Fields to skip.
     *
     * @var array|string
     */
    protected $skips = [];

    /**
     * The form actions.
     *
     * @var array|string
     */
    protected $actions = [];

    /**
     * The form buttons.
     *
     * @var array|string
     */
    protected $buttons = [];

    /**
     * The form options.
     *
     * @var array
     */
    protected $options = [];

    /**
     * The form sections.
     *
     * @var array
     */
    protected $sections = [
        'general' => [
            'tabs' => [
                'info' => [
                    'title' => 'Partial Info',
                    'fields' => [
                        'filename',
                        'vue_name',
                        'enabled',
                        'meta_title',
                        'meta_description',
                        'meta_keywords',
                    ],
                ],
                'html' => [
                    'title' => 'Vue Markup',
                    'fields' => [
                        'html_mode',
                        'html',
                    ],
                ],
                'css' => [
                    'title' => 'Vue Style',
                    'fields' => [
                        'css_mode',
                        'css',
                    ],
                ],
                'javascript' => [
                    'title' => 'Vue Code',
                    'fields' => [
                        'script_mode',
                        'script',
                    ],
                ],
            ],
        ],
    ];

    /**
     * The form assets.
     *
     * @var array
     */
    protected $assets = [];

}
