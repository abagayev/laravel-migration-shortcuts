# How to add timestamps with Laravel Migration Shortcut

Use this shortcut to add timestamps: 

```php
use Abagayev\Laravel\MigrationShortcuts\Migrations\AddTimestampsMigration;

class AddTimestampsToTableMigration extends AddTimestampsMigration
{
    protected $table = 'table_name';
}
```
 
 ### Rollback strategy
 
 Timestamp column is going to be dropped on the migration rollback.
 