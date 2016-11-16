<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class DefrModuleVueManagerCreateVueManagerFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'vue_name'         => 'anomaly.field_type.text',
        'filename'         => 'anomaly.field_type.text',
        'entry'            => 'anomaly.field_type.polymorphic',
        'parent'           => [
            'type'   => 'anomaly.field_type.relationship',
            'config' => [
                'related' => 'Defr\VueManagerModule\Page\PageModel',
            ],
        ],
        'route'            => [
            'type'   => 'anomaly.field_type.slug',
            'config' => [
                'slugify' => 'vue_name',
                'type'    => '-',
            ],
        ],
        'html_mode'        => [
            'type'   => 'anomaly.field_type.select',
            'config' => [
                'options'       => [
                    'html' => 'HTML',
                    'jade' => 'Jade/Pug',
                ],
                'default_value' => 'html',
            ],
        ],
        'html'             => [
            'type'   => 'anomaly.field_type.editor',
            'config' => [
                'default_value' => "<div>\n\n\n</div>",
                'mode'          => 'html',
                'theme'         => 'tomorrow_night',
            ],
        ],
        'script_mode'      => [
            'type'   => 'anomaly.field_type.select',
            'config' => [
                'options'       => [
                    'javascript' => 'JavaScript',
                    'coffee'     => 'Coffee',
                ],
                'default_value' => 'html',
            ],
        ],
        'script'           => [
            'type'   => 'anomaly.field_type.editor',
            'config' => [
                'default_value' => '',
                'mode'          => 'javascript',
                'theme'         => 'terminal',
            ],
        ],
        'style_mode'       => [
            'type'   => 'anomaly.field_type.select',
            'config' => [
                'options'       => [
                    'css'  => 'CSS',
                    'sass' => 'SASS',
                ],
                'default_value' => 'css',
            ],
        ],
        'style'            => [
            'type'   => 'anomaly.field_type.editor',
            'config' => [
                'default_value' => '',
                'mode'          => 'css',
                'theme'         => 'pastel_on_dark',
            ],
        ],
        'enabled'          => [
            'type'   => 'anomaly.field_type.boolean',
            'config' => [
                'default_value' => true,
            ],
        ],
        'meta_title'       => 'anomaly.field_type.text',
        'meta_description' => 'anomaly.field_type.textarea',
        'meta_keywords'    => 'anomaly.field_type.tags',
    ];

}
