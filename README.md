 
# Aplikasi Laravel Admin-Kasir

Ini adalah aplikasi Laravel dengan peran admin dan kasir. Admin dapat mengelola kasir dan memberikan hak akses.

## DAFTAR ISI
1. [Prasyarat](#prasyarat)
2. [Mengakses Aplikasi](#mengakses-aplikasi)
3. [Instalasi](#instalasi)
4. [Mengkonfigurasi Lingkungan](#mengkonfigurasi-lingkungan)
5. [Login dan Pengujian](#login-dan-pengujian)
   - [Login sebagai Admin](#login-sebagai-admin)
   - [Login sebagai Kasir](#login-sebagai-kasir)
6. [ERD Database](#erd-database)
7. [Tampilan Aplikasi](#tampilan-aplikasi)
   - [Login](#login)
   - [ADMIN](#admin)
   - [KASIR](#kasir)


## Prasyarat

- PHP
- Komposer
- Node.js dan npm
- Database server (for example, MySQL)




## Mengakses Aplikasi
```bash
http://127.0.0.1:8000
```
# Login dan Pengujian

## Login sebagai Admin
```bash
Email: admin@example.com
password: password
```
## Login sebagai Kasir
```bash
Email: kasir@example.com
password: password
```


## Instalasi

### Mengkloning Proyek

``` bash
git clone <repository-url>
cd <project-folder>
```
## Menginstal Ketergantungan
```bash
composer install
npm install
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
## Mengkonfigurasi Lingkungan
## Salin berkas .env.example ke .env:

``` bash
cp .env.example .env
```
# Menjalankan Server Laravel
```bash
php artisan migrate --seed
php artisan serve
```
# Menghasilkan Kunci Aplikasi
``` bash
php generate key:generate
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
php artisan serve
```

# ERD Database
![Screenshot Aplikasi](images/9.PNG)

# Database Schema

Diagram ini menggambarkan skema basis data yang terdiri dari beberapa tabel dengan relasi antar tabel. Berikut adalah penjelasan masing-masing tabel dan kolom yang ada.

## Tabel `users`
Tabel ini menyimpan informasi pengguna.
- **id**: Integer, primary key, auto-increment.
- **name**: String, nama pengguna.
- **email**: String, alamat email pengguna.
- **email_verified_at**: Timestamp, waktu verifikasi email.
- **password**: String, kata sandi pengguna.
- **remember_token**: String, token untuk remember me.
- **created_at**: Timestamp, waktu pembuatan data.
- **updated_at**: Timestamp, waktu update terakhir.

## Tabel `roles`
Tabel ini menyimpan informasi peran pengguna.
- **id**: Integer, primary key, auto-increment.
- **name**: String, nama peran.
- **created_at**: Timestamp, waktu pembuatan data.
- **updated_at**: Timestamp, waktu update terakhir.

## Tabel `user_role`
Tabel ini menghubungkan pengguna dengan peran mereka.
- **id**: Integer, primary key, auto-increment.
- **user_id**: Integer, foreign key ke tabel `users`.
- **role_id**: Integer, foreign key ke tabel `roles`.
- **created_at**: Timestamp, waktu pembuatan data.
- **updated_at**: Timestamp, waktu update terakhir.

## Tabel `migrations`
Tabel ini menyimpan informasi migrasi basis data.
- **id**: Integer, primary key, auto-increment.
- **migration**: String, nama migrasi.
- **batch**: Integer, nomor batch migrasi.

## Tabel `password_reset_tokens`
Tabel ini menyimpan token reset password.
- **email**: String, alamat email pengguna.
- **token**: String, token reset password.
- **created_at**: Timestamp, waktu pembuatan token.

## Tabel `password_resets`
Tabel ini menyimpan reset password.
- **email**: String, alamat email pengguna.
- **token**: String, token reset password.
- **created_at**: Timestamp, waktu pembuatan token.

## Tabel `failed_jobs`
Tabel ini menyimpan informasi pekerjaan yang gagal.
- **id**: Integer, primary key, auto-increment.
- **uuid**: String, UUID pekerjaan.
- **connection**: String, koneksi yang digunakan.
- **queue**: String, antrian pekerjaan.
- **payload**: Text, payload pekerjaan.
- **exception**: Text, pengecualian yang terjadi.
- **failed_at**: Timestamp, waktu kegagalan pekerjaan.

## Tabel `personal_access_tokens`
Tabel ini menyimpan token akses personal.
- **id**: Integer, primary key, auto-increment.
- **tokenable_type**: String, tipe entitas yang dapat di-token.
- **tokenable_id**: Integer, ID entitas yang dapat di-token.
- **name**: String, nama token.
- **token**: String, token akses.
- **abilities**: Text, kemampuan token.
- **last_used_at**: Timestamp, waktu terakhir penggunaan.
- **expires_at**: Timestamp, waktu kedaluwarsa token.
- **created_at**: Timestamp, waktu pembuatan token.
- **updated_at**: Timestamp, waktu update terakhir.



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

