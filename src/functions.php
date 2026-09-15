<?php

namespace Ugarit\Pennant;

use BackedEnum;
use UnitEnum;

if (! function_exists('Ugarit\Pennant\enum_value')) {
    /**
     * Return a scalar value for the given value that might be an enum.
     *
     * @internal
     *
     * @param  mixed  $value
     * @return mixed
     */
    function enum_value($value)
    {
        if (function_exists('Heritage\Support\enum_value')) {
            return $value instanceof UnitEnum
                ? (string) \Heritage\Support\enum_value($value)
                : $value;
        }

        return match (true) {
            $value instanceof BackedEnum => (string) $value->value,
            $value instanceof UnitEnum => $value->name,
            default => $value,
        };
    }
}
