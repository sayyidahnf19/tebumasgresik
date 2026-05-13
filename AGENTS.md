# AGENTS.md — Tebu Mas Gresik

Laravel 12 + Vite + Tailwind CSS v4 company profile website (songkok manufacturer).

## Quick start

```bash
composer setup            # full first-time: install → .env → key:generate → migrate → npm install → build
composer dev              # runs 4 concurrent processes: serve, queue:listen, pail (logs), vite
composer test             # config:clear + phpunit (SQLite :memory:)
npm run build             # vite production build
```

## Structure

| Directory | Purpose |
|---|---|
| `app/Http/Controllers/HomeController.php` | Only controller — passes hardcoded data to `home` view |
| `routes/web.php` | 4 routes: `/` (HomeController), `/produk`, `/tentang`, `/kontak` |
| `resources/views/` | Layout `layouts/app.blade.php`, partials, 4 page views |
| `resources/js/`, `resources/css/` | Vite entry at `resources/js/app.js` |
| `api/index.php` | Vercel serverless entry point (requires `public/index.php`) |
| `vercel.json` | Vercel config — routes everything through `api/index.php`, output `public` |

## Key details

- **DB**: SQLite default (dev), MySQL for production (`.env.production`). Migrations for users/cache/jobs exist but are **not used by the app** yet.
- **Data**: All homepage content is hardcoded in `HomeController::index()` as static arrays. Dummy travel-agency placeholder text needs replacement.
- **Views**: `@yield('title')` / `@yield('content')` / `@stack('styles')` / `@stack('scripts')` pattern. `@include('partials.navbar')` and `@include('partials.footer')`.
- **Assets**: `public/img/`, `public/css/`, `public/js/` (compiled copies). Source images at `resources/img/`.
- **Tailwind CSS v4**: Configured via `@tailwindcss/vite` plugin (no `tailwind.config.js`). Use CSS `@import "tailwindcss"` syntax.
- **Vite base**: `/build/` in production, `/` in dev.
- **Tests**: PHPUnit 11, SQLite in-memory. Suites: `tests/Unit/`, `tests/Feature/`. No app-specific tests yet.

## Dev commands

```bash
php artisan serve         # http://localhost:8000
php artisan test          # run all tests
php artisan make:controller NameController
php artisan make:model ModelName
php artisan migrate
php artisan config:clear  # run after .env changes
php artisan key:generate
```

## Vercel deploy

1. `php artisan key:generate --env=production` → copy key to `.env.production`
2. Update `APP_URL`, DB credentials in `.env.production`
3. Push to Git → connect repo in Vercel dashboard
