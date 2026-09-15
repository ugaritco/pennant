<?php

namespace Ugarit\Pennant\Contracts;

interface CanListStoredFeatures
{
    /**
     * Retrieve the names of all stored features.
     *
     * @return array<string>
     */
    public function stored(): array;
}
