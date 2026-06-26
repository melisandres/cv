# Mélisandre Schofield — portfolio

Personal site: projects, bio, education, experience, contact. English / French.

**Live:** https://www.melisandre.ca

Laravel 10 · Blade · Vite

## Run locally

```bash
composer install
npm install
composer serve      # (uses PHP 8.2 in composer.json) http://127.0.0.1:8000
npm run dev         # only when editing CSS/JS
```

Uses PHP 8.2 via `composer serve` (Laravel 10 + PHP 8.4 = deprecation noise).

Copy `.env.example` to `.env` if needed. Contact form needs SMTP in `.env`.
