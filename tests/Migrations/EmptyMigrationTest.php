<?php

namespace Abagayev\Tests\Migrations;

use Abagayev\Laravel\MigrationShortcuts\Migrations\EmptyMigration;
use Abagayev\Tests\Helpers\MigrationTestCase;

/**
 * @covers Abagayev\Laravel\MigrationShortcuts\Migrations\EmptyMigration
 */
class EmptyMigrationTest extends MigrationTestCase
{
    public static function migrationProvider(): array
    {
        return [
            [
                new class extends EmptyMigration {
                    //
                },
                [
                    //
                ],
                [
                    //
                ],
            ],
        ];
    }
}
