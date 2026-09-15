<?php

namespace Ugarit\Pennant\Migrations;

use Heritage\Database\Migrations\Migration;

abstract class PennantMigration extends Migration
{
    /**
     * Get the migration connection name.
     *
     * @return string
     */
    public function getConnection()
    {
        $connection = config('pennant.stores.database.connection');

        return ($connection === null || $connection === 'null') ? config('database.default') : $connection;
    }
}
