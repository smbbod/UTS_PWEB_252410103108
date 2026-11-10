# UTS Pemrograman Web - JeeSign Studio

Aplikasi web portal klien dan pengelolaan draf foto profesional yang dibangun menggunakan framework Laravel.

## 🛠 Tech Stack
- **Framework:** Laravel (MVC Architecture)
- **Templating:** Blade Engine & Blade Components (`<x-navbar>`, `<x-footer>`)
- **Styling:** Tailwind CSS (Theme Ratio 60:30:10 - Zinc, Cream, Amber)
- **Database / Server:** MySQL via Laragon

## 📸 Screenshots
*(Lampirkan screenshot tampilan Login, Dashboard, dan Pengelolaan Galeri di sini)*

## 🚀 Cara Menjalankan Project
1. Clone repository ini ke folder `laragon/www/`.
2. Buka terminal dan jalankan `composer install`.
3. Salin file `.env.example` menjadi `.env`, lalu sesuaikan koneksi database MySQL (`jeesign_uts`).
4. Jalankan migrasi: `php artisan migrate`
5. Jalankan server lokal: `php artisan serve`
