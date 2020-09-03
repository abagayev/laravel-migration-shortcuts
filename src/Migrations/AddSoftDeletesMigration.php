<?php

namespace Abagayev\Laravel\MigrationShortcuts\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

abstract class AddSoftDeletesMigration extends Migration
{
    /** @var string Name of table to operate */
    protected $table = 'table_name';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table($this->table, function (Blueprint $table) {
            $table->softDeletes();
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
            $table->dropSoftDeletes();
        });
    }
}
