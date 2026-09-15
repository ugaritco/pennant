<?php

namespace Tests\Feature;

use Heritage\Support\Facades\Config;
use Ugarit\Pennant\Concerns\HasFeatures;
use Ugarit\Pennant\Contracts\FeatureScopeable;
use Ugarit\Pennant\Feature;
use Tests\TestCase;

class HasFeatureTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        Config::set('pennant.default', 'array');
    }

    public function test_it_can_check_for_active_features()
    {
        Feature::define('foo', 'foo-value');
        $class = new class implements FeatureScopeable
        {
            use HasFeatures;

            public function toFeatureIdentifier(string $driver): mixed
            {
                return 'scope';
            }
        };

        $value = $class->features()->value('foo');

        $this->assertSame('foo-value', $value);
    }
}
