<?php

namespace Manojkiran\MVCRGenerator;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Manojkiran\MVCRGenerator\Skeleton\SkeletonClass
 */
class MVCRGeneratorFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'mvcr-generator';
    }
}
