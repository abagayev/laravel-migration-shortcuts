# How to add a new column to the existing table with Laravel Migration Shortcut

Use this shortcut to add a new column: 

```php
use Abagayev\Laravel\MigrationShortcuts\Migrations\AddColumnMigration;

class AddNewColumnMigration extends AddColumnMigration
{
    protected $table = 'table_name';
    protected $column = 'column_name';
    protected $type = 'string';
}
```

### Features

Use the next list of params to add details to the migration

- `parameters` to describe the column (like string length)
- `nullable` to make it nullable
- `index` to add index to the column
- `after` to place the column next to defined in the parameter

### Rollback strategy

Column is going to be dropped on the migration rollback.
