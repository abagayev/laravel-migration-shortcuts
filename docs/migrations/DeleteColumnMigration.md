# How to delete a column from the existing table with Laravel Migration Shortcut

Use this shortcut to delete a column: 

```php
use Abagayev\Laravel\MigrationShortcuts\Migrations\DeleteColumnMigration;

class DeleteNotNeededColumnMigration extends DeleteColumnMigration
{
    protected $table = 'table_name';
    protected $column = 'column_name';
    protected $recreateColumn = false;
}
```

### Rollback strategy

If you want to use `down` method for recreate a deleted column, you need to take a look at
[Add a new column](./AddColumnMigration.md) migration to see needed parameters
