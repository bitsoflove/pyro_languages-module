<?php namespace Bitsoflove\LanguagesModule\Language;

use Bitsoflove\LanguagesModule\Language\Contract\LanguageInterface;
use Anomaly\Streams\Platform\Model\Languages\LanguagesLanguagesEntryModel;

class LanguageModel extends LanguagesLanguagesEntryModel implements LanguageInterface
{

    protected $with = ['translations'];

}
