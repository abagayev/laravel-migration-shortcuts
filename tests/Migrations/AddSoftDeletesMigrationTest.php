<?php

namespace Abagayev\Tests\Migrations;

use Abagayev\Laravel\MigrationShortcuts\Migrations\AddSoftDeletesMigration;
use Abagayev\Tests\Helpers\MigrationTestCase;

/**
 * @covers Abagayev\Laravel\MigrationShortcuts\Migrations\AddSoftDeletesMigration
 */
class AddSoftDeletesMigrationTest extends MigrationTestCase
{
    public static function migrationProvider(): array
    {
        return [
            [
                new class extends AddSoftDeletesMigration {
                    //
                },
                [
                    "alter table `table_name` add `deleted_at` timestamp null"
                ],
                [
                    "alter table `table_name` drop `deleted_at`"
                ],
            ],
        ];
    }
}
