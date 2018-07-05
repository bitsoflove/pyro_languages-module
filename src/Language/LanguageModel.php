<?php namespace Bitsoflove\LanguagesModule\Language;

use Bitsoflove\LanguagesModule\Language\Contract\LanguageInterface;
use Anomaly\Streams\Platform\Model\Languages\LanguagesLanguagesEntryModel;
use Bitsoflove\LanguagesModule\Language\Handler\Options;

class LanguageModel extends LanguagesLanguagesEntryModel implements LanguageInterface
{

    protected $with = ['translations'];


    public function getMultipleFieldTypeOptionsHandler(){
        return Options::class;
    }

    public function getRelationshipFieldTypeOptionsHandler(){

        return Options::class;
    }
}
