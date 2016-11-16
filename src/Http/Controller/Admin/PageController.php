<?php namespace Defr\VueManagerModule\Http\Controller\Admin;

use Defr\VueManagerModule\Page\Form\PageFormBuilder;
use Defr\VueManagerModule\Page\Tree\PageTreeBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class PageController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param PageTreeBuilder $tree
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(PageTreeBuilder $tree)
    {
        return $tree->render();
    }

    /**
     * Create a new entry.
     *
     * @param PageFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(PageFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param PageFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(PageFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
