<?php namespace Bitsoflove\LanguagesModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

class LanguagesModule extends Module
{

    /**
     * The navigation display flag.
     *
     * @var bool
     */
    protected $navigation = true;

    /**
     * The addon icon.
     *
     * @var string
     */
    protected $icon = 'fa fa-language';

    /**
     * The module sections.
     *
     * @var array
     */
    protected $sections = [
        'languages' => [
            'buttons' => [
                'new_language',
            ],
        ],
    ];

}
