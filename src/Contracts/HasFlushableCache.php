<?php

namespace Ugarit\Pennant\Contracts;

interface HasFlushableCache
{
    /**
     * Flush the cache.
     *
     * @return void
     */
    public function flushCache();
}
