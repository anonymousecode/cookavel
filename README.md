# 🍽️ CookaVel - Laravel Recipe App

**CookaVel** is a Laravel-powered recipe search application that fetches meals from [TheMealDB API](https://www.themealdb.com/) and displays detailed cooking instructions, ingredients, and YouTube tutorials.

---

## 🔧 Features

- 🔍 Search recipes by name
- 🔤 Filter meals by alphabet (A–Z)
- 🧾 Detailed recipe view with:
  - Ingredients and measurements
  - Instructions
  - YouTube video
- 🖼️ Recipe thumbnails
- Responsive UI using Bootstrap

---

## 🚀 Live Demo

👉 [cookavel.onrender.com](https://cookavel.onrender.com)

---

## 🛠️ Tech Stack

- PHP 8.2
- Laravel 10+
- Bootstrap 5
- Blade templates
- TheMealDB API
- Render (for hosting)

---

## ⚙️ Local Setup

```bash
git clone https://github.com/anonymousecode/cookavel.git
cd cookavel

composer install
cp .env.example .env
php artisan key:generate

# Set your APP_URL in .env to http://localhost:8000

php artisan serve
