<?php

namespace Abagayev\Tests\Migrations;

use Abagayev\Laravel\MigrationShortcuts\Migrations\DropColumnMigration;
use Abagayev\Tests\Helpers\MigrationTestCase;

/**
 * @covers Abagayev\Laravel\MigrationShortcuts\Migrations\DropColumnMigration
 */
class DropColumnMigrationTest extends MigrationTestCase
{
    public static function migrationProvider(): array
    {
        return [
            'default configuration migration' => [
                new class extends DropColumnMigration {
                    //
                },
                [
                    "alter table `table_name` drop `column_name`",
                ],
                [
                    //
                ],
            ],
            'with add column on rollback' => [
                new class extends DropColumnMigration {
                    protected $addColumnOnRollback = true;
                },
                [
                    "alter table `table_name` drop `column_name`",
                ],
                [
                    "alter table `table_name` add `column_name` varchar(255) not null",
                ],
            ],
        ];
    }
}
