<?php namespace Defr\VueManagerModule\Http\Controller\Admin;

use Defr\VueManagerModule\Partial\Form\PartialFormBuilder;
use Defr\VueManagerModule\Partial\Table\PartialTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class PartialController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param PartialTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(PartialTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param PartialFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(PartialFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param PartialFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(PartialFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
