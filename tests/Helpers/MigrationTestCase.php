<?php

namespace Abagayev\Tests\Helpers;

use Illuminate\Database\ConnectionInterface;
use Illuminate\Database\Migrations\Migration;
use Orchestra\Testbench\TestCase;

abstract class MigrationTestCase extends TestCase
{
    protected ConnectionInterface $connection;

    protected function setUp(): void
    {
        // setup laravel test environment first
        parent::setUp();

        // resolve connection to the database
        $this->connection = app('migrator')->resolveConnection(null);
    }

    /**
     * @return array[] provider contains of migration to be tested and expected up and down queries.
     */
    abstract public static function migrationProvider(): array;

    /**
     * @dataProvider migrationProvider
     */
    public function testUp(Migration $migration, array $expectedUp, array $expectedDown): void
    {
        $actual = array_column($this->connection->pretend(fn() => $migration->up()), 'query');
        $this->assertSame($expectedUp, $actual);
    }

    /**
     * @dataProvider migrationProvider
     */
    public function testDown(Migration $migration, array $expectedUp, array $expectedDown): void
    {
        $actual = array_column($this->connection->pretend(fn() => $migration->down()), 'query');
        $this->assertSame($expectedDown, $actual);
    }
}
