<?php

namespace Ugarit\Pennant\Concerns;

use Ugarit\Pennant\Feature;
use Ugarit\Pennant\PendingScopedFeatureInteraction;

trait HasFeatures
{
    /**
     * Get a scoped feature interaction for the class.
     *
     * @param  string|null  $store
     * @return PendingScopedFeatureInteraction
     */
    public function features($store = null)
    {
        return Feature::store($store)->for($this);
    }
}
