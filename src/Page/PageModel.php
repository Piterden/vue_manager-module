<?php namespace Defr\VueManagerModule\Page;

use Defr\VueManagerModule\Page\Contract\PageInterface;
use Anomaly\Streams\Platform\Model\VueManager\VueManagerPageEntryModel;

class PageModel extends VueManagerPageEntryModel implements PageInterface
{

    /**
     * Always eager load these.
     *
     * @var array
     */
    protected $with = [
        'entry',
        'translations',
    ];


}
