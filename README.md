<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<p align="center">
  <a href="https://github.com/CRAVE-BOT/Biz-Consult/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

---

## 🧠 About Biz-Consult

**Biz-Consult** is a Laravel-powered business management dashboard, designed and built by **Motaz Zakria a.k.a. Heshmat** to streamline website content, team members, services, testimonials, subscribers, and messages — all in one unified system.

This project is a significant upgrade from previous ones thanks to:
- ✅ Use of **custom Blade components** for modular design
- 🧼 Clean, maintainable code structure
- 🌍 Full **Localization** support (Arabic & English)
- 🔗 **Slug-based routing** for cleaner URLs (powered by Spatie)
- 🧩 Enhanced project management & UX decisions

---

## 🚀 Features

- ✅ Admin Dashboard
- ✅ Services & Features Management
- ✅ Members Section with Social Links
- ✅ Clients Testimonials
- ✅ Contact Messages
- ✅ Subscribers List
- ✅ Settings Page
- ✅ Blade Components
- ✅ RTL/LTR support (based on locale)
- ✅ Slugs instead of IDs in routes

---

## ⚙️ Tech Stack

- Laravel 10+
- Bootstrap 5
- MySQL
- Blade Templating Engine
- Spatie/laravel-sluggable
- Laravel Localization
- Font Awesome / Feather Icons

---

## 📦 Setup Instructions

```bash
git clone https://github.com/CRAVE-BOT/Biz-Consult.git
cd Biz-Consult

composer install
npm install && npm run dev

cp .env.example .env
php artisan key:generate

# Set your DB credentials inside .env

php artisan migrate --seed
php artisan serve
