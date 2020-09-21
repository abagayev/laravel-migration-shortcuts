# Laravel migration shortcuts

![Migration](./docs/migration.jpg)

This package is here to make migrations DRY again. 

For example, add soft deletes migration in a super short way: 

```php
use Abagayev\Laravel\MigrationShortcuts\Migrations\AddSoftDeletesMigration;

class AddSoftDeletesToTableMigration extends AddSoftDeletesMigration
{
    protected $table = 'table_name';
}
```

### Current shortcuts supported

- [Add a new column](./docs/migrations/AddColumnMigration.md)
- [Add timestamps](./docs/migrations/AddTimestampsMigration.md)
- [Add soft deleted](./docs/migrations/AddSoftDeletesMigration.md)
- [Insert rows](./docs/migrations/InsertRowsMigration.md)
- [Drop a column](./docs/migrations/DropColumnMigration.md)

### Shortcuts coming soon:

- Rename a column
- Change column type
- Add a table
- Rename a table
- Delete a table
- Empty migration

### Features coming soon:

- Command to create migrations

### Contribution

Feel free to add comments, issues, pull requests or buy me a coffee:
https://www.buymeacoffee.com/tonybug
