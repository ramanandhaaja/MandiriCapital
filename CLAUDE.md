# CLAUDE.md - Mandiri Capital Codebase Guide

## Build & Development Commands
- `php artisan serve` - Start development server
- `npm run dev` - Run Vite development server for frontend assets
- `composer run dev` - Run all services (server, queue, logs, vite)
- `php artisan test` - Run all tests
- `php artisan test --filter=TestName` - Run a specific test
- `php artisan test tests/Feature/SpecificTest.php` - Run tests in a specific file
- `php artisan make:test NewTestName` - Create a new test
- `php artisan pint` - Lint and fix code style (Laravel Pint)

## Code Style Guidelines
- **PSR-12** coding standards for PHP
- DocBlocks use PHPDoc format with types (e.g., `@param array<int, string> $param`)
- Type declarations for properties, parameters, and return values
- Models use traits pattern (HasFactory, Notifiable)
- Protected properties for models' attributes (fillable, hidden, casts)
- Use Laravel Pint for code formatting
- Prefix test methods with `test_` (e.g., `test_feature_works()`)
- Use camelCase for methods and properties, PascalCase for classes
- Proper exception handling with contextual messages

## Project Structure
- Filament resources in `app/Filament/Resources/`
- Blade templates in `resources/views/`
- CSS files in `public/css/` and `resources/css/`
- JavaScript in `public/js/` and `resources/js/`