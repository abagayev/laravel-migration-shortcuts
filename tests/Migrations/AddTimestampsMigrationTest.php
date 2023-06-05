<?php

namespace Migrations;

use Abagayev\Laravel\MigrationShortcuts\Migrations\AddTimestampsMigration;
use Orchestra\Testbench\TestCase;

class AddTimestampsMigrationTest extends TestCase
{
    public function testUp()
    {
        $migration = new class extends AddTimestampsMigration {
            //
        };

        $migrator = app('migrator');
        $db = $migrator->resolveConnection(null);
        $queries = array_column($db->pretend(fn() => $migration->up()), 'query');

        $this->assertEquals(["alter table `table_name` add `created_at` timestamp null, add `updated_at` timestamp null"], $queries);
    }
}
