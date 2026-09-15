<?php

namespace Ugarit\Pennant;

use Ugarit\Pennant\Contracts\FeatureScopeSerializeable;

class GlobalScope implements FeatureScopeSerializeable
{
    /**
     * Serialize the feature scope for storage.
     */
    public function featureScopeSerialize(): string
    {
        return '__ugarit_global';
    }
}
