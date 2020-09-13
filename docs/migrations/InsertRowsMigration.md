# How to insert rows in a Laravel Migration Shortcut

Use this shortcut to insert rows to the table:

```php
use Abagayev\Laravel\MigrationShortcuts\Migrations\InsertRowsMigration;

class InsertRowsToTableMigration extends InsertRowsMigration
{
    protected $table = 'table_name';

    protected $rows = [
        [
            'column1' => 'value1',
            'column2' => 'value2',
        ]
    ];
}
```
### Features

You can override `getRows()` method, if you need to add some values dynamically.

### Rollback strategy

Please note, that there is no rollback strategy for insert migration, so you should implement `down()` method by yourself, if you need it.
