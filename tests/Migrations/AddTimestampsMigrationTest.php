<?php

namespace Abagayev\Tests\Migrations;

use Abagayev\Laravel\MigrationShortcuts\Migrations\AddTimestampsMigration;
use Abagayev\Tests\Helpers\MigrationTestCase;

/**
 * @covers Abagayev\Laravel\MigrationShortcuts\Migrations\AddTimestampsMigration
 */
class AddTimestampsMigrationTest extends MigrationTestCase
{
    public static function migrationProvider(): array
    {
        return [
            [
                new class extends AddTimestampsMigration {
                    //
                },
                [
                    "alter table `table_name` add `created_at` timestamp null, add `updated_at` timestamp null"
                ],
                [
                    "alter table `table_name` drop `created_at`, drop `updated_at`"
                ],
            ],
        ];
    }
}
