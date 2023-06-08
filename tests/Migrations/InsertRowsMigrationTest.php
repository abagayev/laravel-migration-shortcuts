<?php

namespace Abagayev\Tests\Migrations;

use Abagayev\Laravel\MigrationShortcuts\Migrations\InsertRowsMigration;
use Abagayev\Tests\Helpers\MigrationTestCase;

/**
 * @covers Abagayev\Laravel\MigrationShortcuts\Migrations\InsertRowsMigration
 */
class InsertRowsMigrationTest extends MigrationTestCase
{
    public static function migrationProvider(): array
    {
        return [
            'default configuration migration' => [
                new class extends InsertRowsMigration {
                    //
                },
                [
                    "insert into `table_name` (`column1`, `column2`) values (?, ?)"
                ],
                [
                    //
                ],
            ],
            'overridden rows getter' => [
                new class extends InsertRowsMigration {
                    protected function getRows()
                    {
                        return [
                            [
                                'column3' => 'value3',
                                'column4' => 'value4',
                            ]
                        ];
                    }
                },
                [
                    "insert into `table_name` (`column3`, `column4`) values (?, ?)"
                ],
                [
                    //
                ],
            ],
            'a few rows migration' => [
                new class extends InsertRowsMigration {
                    protected $rows = [
                        [
                            'column5' => 'value5',
                            'column6' => 'value6',
                        ],
                        [
                            'column7' => 'value7',
                            'column8' => 'value8',
                        ],
                    ];
                },
                [
                    "insert into `table_name` (`column5`, `column6`) values (?, ?)",
                    "insert into `table_name` (`column7`, `column8`) values (?, ?)",
                ],
                [
                    //
                ],
            ],
        ];
    }
}
