<?php namespace Defr\VueManagerModule\Page;

use Defr\VueManagerModule\Page\Contract\PageRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class PageRepository extends EntryRepository implements PageRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var PageModel
     */
    protected $model;

    /**
     * Create a new PageRepository instance.
     *
     * @param PageModel $model
     */
    public function __construct(PageModel $model)
    {
        $this->model = $model;
    }
}
