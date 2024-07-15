 
# Aplikasi Laravel Admin-Kasir

Ini adalah aplikasi Laravel dengan peran admin dan kasir. Admin dapat mengelola kasir dan memberikan hak akses.

## Prasyarat

- PHP
- Komposer
- Node.js dan npm
- Server basis data (misalnya, MySQL)

# Menjalankan Server Laravel
```bash
Menjalankan server Laravel
```

# Mengakses Aplikasi
```bash
http://127.0.0.1:8000
```
# Login dan Pengujian

## Login sebagai Admin
```bash
Email: admin@example.com
Kata sandi: kata sandi
```
## Login sebagai Kasir
```bash
Email: admin@example.com
Kata sandi: kata sandi
```


## Instalasi

### 1. Mengkloning Proyek

``` bash
git mengkloning <repository-url>
cd <project-folder>
```

# Menginstal Ketergantungan
```bash
composer install
npm install
```

# Mengkonfigurasi Lingkungan
## Salin berkas .env.example ke .env:

``` bash
cp .env.example .env
```

## Perbarui berkas .env dengan konfigurasi basis data Anda
```bash
DB_CONNECTION = mysql
DB_HOST = 127.0.0.1
DB_PORT=3306
DB_DATABASE = basis data Anda
DB_USERNAME = nama_pengguna Anda
DB_PASSWORD = kata sandi Anda
```

# Menghasilkan Kunci Aplikasi
``` bash
php kunci pengrajin:generate
```

# Menjalankan Migrasi dan Penyemai
```bash
php artisan migrasi
php artisan db:seed --class=RoleSeeder
php artisan db:seed --class=UserSeeder
```

# Menyiapkan Otentikasi
## Menginstal Laravel UI:
``` bash
composer require laravel/ui
```

## Buat perancah untuk autentikasi:
```bash
php artisan ui vue --auth
npm install && npm run dev
php artisan migrasi
```
