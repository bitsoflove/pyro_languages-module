<?php namespace Bitsoflove\LanguagesModule\Http\Controller\Admin;

use Bitsoflove\LanguagesModule\Language\Form\LanguageFormBuilder;
use Bitsoflove\LanguagesModule\Language\Table\LanguageTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class LanguagesController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param LanguageTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(LanguageTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param LanguageFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(LanguageFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param LanguageFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(LanguageFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
