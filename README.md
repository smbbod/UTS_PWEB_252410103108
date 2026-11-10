# UTS Pemrograman Web - JeeSign Studio

Aplikasi web portal klien dan pengelolaan draf foto profesional yang dibangun menggunakan framework Laravel.

## 🛠 Tech Stack
- **Framework:** Laravel (MVC Architecture)
- **Templating:** Blade Engine & Blade Components (`<x-navbar>`, `<x-footer>`)
- **Styling:** Tailwind CSS (Theme Ratio 60:30:10 - Zinc, Cream, Amber)
- **Database / Server:** MySQL via Laragon

## 📸 Screenshots
<img width="1867" height="1033" alt="Cuplikan layar 2026-11-10 221722" src="https://github.com/user-attachments/assets/1d88c0f8-b2f0-4160-910f-6f10abeea9c8" />
<img width="1868" height="1030" alt="Cuplikan layar 2026-11-10 221742" src="https://github.com/user-attachments/assets/37aad839-7395-44d9-8855-44678655cf3a" />
<img width="1867" height="1027" alt="Cuplikan layar 2026-11-10 221814" src="https://github.com/user-attachments/assets/477112f0-1071-435f-87f9-76746dd7006f" />
<img width="1869" height="1028" alt="Cuplikan layar 2026-11-10 221924" src="https://github.com/user-attachments/assets/a7278343-1ce3-4ca0-8d74-cd37754b1a46" />


## 🚀 Cara Menjalankan Project
1. Clone repository ini ke folder `laragon/www/`.
2. Buka terminal dan jalankan `composer install`.
3. Salin file `.env.example` menjadi `.env`, lalu sesuaikan koneksi database MySQL (`jeesign_uts`).
4. Jalankan migrasi: `php artisan migrate`
5. Jalankan server lokal: `php artisan serve`
