<?php

namespace Abagayev\Tests\Migrations;

use Abagayev\Laravel\MigrationShortcuts\Migrations\AddColumnMigration;
use Abagayev\Tests\Helpers\MigrationTestCase;

/**
 * @covers Abagayev\Laravel\MigrationShortcuts\Migrations\AddColumnMigration
 */
class AddColumnMigrationTest extends MigrationTestCase
{
    public static function migrationProvider(): array
    {
        return [
            'default configuration migration' => [
                new class extends AddColumnMigration {
                    //
                },
                [
                    "alter table `table_name` add `column_name` varchar(255) not null",
                ],
                [
                    "alter table `table_name` drop `column_name`",
                ],
            ],
            'with parameters' => [
                new class extends AddColumnMigration {
                    protected $parameters = [50];
                },
                [
                    "alter table `table_name` add `column_name` varchar(50) not null",
                ],
                [
                    "alter table `table_name` drop `column_name`",
                ],
            ],
            'with nullable' => [
                new class extends AddColumnMigration {
                    protected $nullable = true;
                },
                [
                    "alter table `table_name` add `column_name` varchar(255) null",
                ],
                [
                    "alter table `table_name` drop `column_name`",
                ],
            ],
            'with index' => [
                new class extends AddColumnMigration {
                    protected $index = true;
                },
                [
                    "alter table `table_name` add `column_name` varchar(255) not null",
                    "alter table `table_name` add index `table_name_column_name_index`(`column_name`)",
                ],
                [
                    "alter table `table_name` drop `column_name`",
                ],
            ],
            'with after' => [
                new class extends AddColumnMigration {
                    protected $after = 'after_column';
                },
                [
                    "alter table `table_name` add `column_name` varchar(255) not null after `after_column`",
                ],
                [
                    "alter table `table_name` drop `column_name`",
                ],
            ],
            'everything everywhere all at once' => [
                new class extends AddColumnMigration {
                    protected $parameters = [50];
                    protected $nullable = true;
                    protected $index = true;
                    protected $after = 'after_column';
                },
                [
                    "alter table `table_name` add `column_name` varchar(50) null after `after_column`",
                    "alter table `table_name` add index `table_name_column_name_index`(`column_name`)",
                ],
                [
                    "alter table `table_name` drop `column_name`",
                ],
            ],
        ];
    }
}
