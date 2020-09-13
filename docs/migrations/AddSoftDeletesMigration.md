# How to add soft deletes migration with Laravel Migration Shortcut

Use this shortcut to add soft deletes: 

```php
use Abagayev\Laravel\MigrationShortcuts\Migrations\AddSoftDeletesMigration;

class AddSoftDeletesToTableMigration extends AddSoftDeletesMigration
{
    protected $table = 'table_name';
}
```

Don't forget to add soft deletes trait to the model:

```php
use Illuminate\Database\Eloquent\SoftDeletes;

class MyModel
{
    use SoftDeletes;
}
```

### Rollback strategy

Soft delete columns are going to be dropped on the migration rollback.
