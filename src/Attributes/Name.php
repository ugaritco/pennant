<?php

namespace Ugarit\Pennant\Attributes;

use Attribute;
use BackedEnum;
use UnitEnum;

use function Ugarit\Pennant\enum_value;

#[Attribute(Attribute::TARGET_CLASS)]
class Name
{
    /**
     * The feature name.
     */
    public string $name;

    /**
     * Create a new attribute instance.
     */
    public function __construct(BackedEnum|UnitEnum|string $name)
    {
        $this->name = (string) enum_value($name);
    }
}
