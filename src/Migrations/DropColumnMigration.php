<?php

namespace Abagayev\Laravel\MigrationShortcuts\Migrations;

abstract class DropColumnMigration extends AddColumnMigration
{
    /** @var bool */
    protected $addColumnOnRollback = false;

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        parent::down();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if ($this->addColumnOnRollback) {
            parent::up();
        }
    }
}
