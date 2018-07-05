<?php namespace Bitsoflove\LanguagesModule\Language\Handler;

use Anomaly\MultipleFieldType\MultipleFieldType;
use Anomaly\Streams\Platform\Model\EloquentCollection;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class Related
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class Options
{

    /**
     * Handle the options.
     *
     * @param  $fieldType
     * @return array
     */
    public function handle($fieldType)
    {
        $model = $fieldType->getRelatedModel();

        /* @var Builder $query */
        $query = $model->newQuery();

        /* @var EloquentCollection $results */
        $results = $query->get();

        $fieldType->setOptions(
            $results->sortBy(function ($item) {
                return $item->title;
            })->pluck(
                $fieldType->config('title_name', $model->getTitleName()),
                $fieldType->config('key_name', $model->getKeyName())
            )->all()
        );
    }
}
