<?php

namespace Abagayev\Laravel\MigrationShortcuts\Migrations;

abstract class DeleteColumnMigration extends AddColumnMigration
{
    /** @var bool If you need to recreate column in down method */
    protected $recreateColumn = false;

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
        if ($this->recreateColumn) {
            parent::up();
        }
    }
}
