# How to drop a column from the existing table with Laravel Migration Shortcut

Use this shortcut to drop a column: 

```php
use Abagayev\Laravel\MigrationShortcuts\Migrations\DropColumnMigration;

class DropNotNeededColumnMigration extends DropColumnMigration
{
    protected $table = 'table_name';
    protected $column = 'column_name';
    protected $addColumnOnRollback = false;
}
```

### Rollback strategy

If you want to use `down` method for recreate a dropped column, you need to take a look at
[Add a new column](./AddColumnMigration.md) migration to see needed parameters
