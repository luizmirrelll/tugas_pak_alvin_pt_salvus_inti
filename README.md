 
# Aplikasi Laravel Admin-Kasir

Ini adalah aplikasi Laravel dengan peran admin dan kasir. Admin dapat mengelola kasir dan memberikan hak akses.

## Prasyarat

- PHP
- Komposer
- Node.js dan npm
- Database server (for example, MySQL)

# Menjalankan Server Laravel
```bash
php artisan serve
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
git clone <repository-url>
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
php generate key:generate
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


# tampilan aplikasi
## login
![Screenshot Aplikasi](images/1.PNG)

## ADMIN
![Screenshot Aplikasi](images/2.PNG)
![Screenshot Aplikasi](images/3.PNG)
![Screenshot Aplikasi](images/4.PNG)
![Screenshot Aplikasi](images/5.PNG)
![Screenshot Aplikasi](images/6.PNG)

## KASIR
![Screenshot Aplikasi](images/7.PNG)
![Screenshot Aplikasi](images/8.PNG)

