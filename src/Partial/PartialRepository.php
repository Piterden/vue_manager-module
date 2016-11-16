<?php namespace Defr\VueManagerModule\Partial;

use Defr\VueManagerModule\Partial\Contract\PartialRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class PartialRepository extends EntryRepository implements PartialRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var PartialModel
     */
    protected $model;

    /**
     * Create a new PartialRepository instance.
     *
     * @param PartialModel $model
     */
    public function __construct(PartialModel $model)
    {
        $this->model = $model;
    }
}
