# How to make migration empty with Laravel Migration Shortcut

Sometimes you need to avoid running migration in different environments, but still not removing it from the codebase.   

Use this shortcut to void a migration:

```php
use Abagayev\Laravel\MigrationShortcuts\Migrations\EmptyMigration;

class VeryImportantMigration extends EmptyMigration
{
    //
}
```
