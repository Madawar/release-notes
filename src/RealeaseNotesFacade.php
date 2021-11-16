<?php

namespace Codedcell\RealeaseNotes;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Codedcell\RealeaseNotes\Skeleton\SkeletonClass
 */
class RealeaseNotesFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'realease-notes';
    }
}
