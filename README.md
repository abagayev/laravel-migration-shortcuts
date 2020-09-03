# Laravel migration shortcuts

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

### Current shortcuts supported

- Add new column
- Add timestamps
- Add soft deleted
- Insert rows

### Shortcuts coming soon:

- Rename a column
- Change column type
- Delete a column
- Add a table
- Rename a table
- Delete a table

### Features coming soon:

- Command to create migrations
- More examples

### Afterwords

Let's make migrations DRY!