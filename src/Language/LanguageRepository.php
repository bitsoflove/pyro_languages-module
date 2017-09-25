<?php namespace Bitsoflove\LanguagesModule\Language;

use Bitsoflove\LanguagesModule\Language\Contract\LanguageRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class LanguageRepository extends EntryRepository implements LanguageRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var LanguageModel
     */
    protected $model;

    /**
     * Create a new LanguageRepository instance.
     *
     * @param LanguageModel $model
     */
    public function __construct(LanguageModel $model)
    {
        $this->model = $model;
    }
}
