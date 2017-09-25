<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class BitsofloveModuleLanguagesCreateLanguagesStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'languages',
         'title_column' => 'title',
         'translatable' => true,
         'trashable' => true,
         'searchable' => false,
         'sortable' => true,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'title' => [
            'translatable' => true,
            'required' => true,
        ],
        'slug' => [
            'unique' => true,
            'required' => true,
        ],
    ];

}
