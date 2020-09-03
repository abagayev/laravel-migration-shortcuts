<?php

namespace Abagayev\Laravel\MigrationShortcuts\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

abstract class InsertRowsMigration extends Migration
{
    /** @var string Name of table to operate */
    protected $table = 'table_name';

    /** @var array Rows for migration */
    protected $rows = [
        [
            'column1' => 'value1',
            'column2' => 'value2',
        ]
    ];

    /**
     * Get rows for migration
     * Override to add logic or dynamic values
     *
     * @return array
     */
    protected function getRows()
    {
        return $this->rows;
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $rows = $this->getRows();

        array_walk($rows, function ($row) {
            DB::table($this->table)->insert($row);
        });
    }

    /**
     * Reverse the migrations.
     * Override too add custom logic or uncomment to truncate table
     *
     * @return void
     */
    public function down()
    {
        // DB::table($this->table)->truncate();
    }
}
