<?php

namespace Abagayev\Laravel\MigrationShortcuts\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

abstract class AddColumnMigration extends Migration
{
    /** @var string Name of table to operate */
    protected $table = 'table_name';

    /** @var string Type of column */
    protected $type = 'string';

    /** @var string Name of column */
    protected $column = 'column_name';

    /** @var array Column definition parameters */
    protected $parameters = [];

    /** @var bool Allow NULL values to be inserted into the column */
    protected $nullable = false;

    /** @var bool Add an index */
    protected $index = false;

    /** @var bool Place the column "after" another column */
    protected $after = false;

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table($this->table, function (Blueprint $table) {
            $blueprint = $table
                ->{$this->type}($this->column, ...$this->parameters)
                ->nullable($this->nullable);

            if (!empty($this->index)) {
                $blueprint->index();
            }

            if (!empty($this->after)) {
                $blueprint->after($this->after);
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table($this->table, function (Blueprint $table) {
            $table->dropColumn($this->column);
        });
    }
}
