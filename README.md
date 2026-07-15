# SIKAD

Sistem Informasi Akademik (SIKAD) berbasis Laravel 13.

## Fitur

- Authentication
- Dashboard
- Manajemen Program Studi
- Manajemen Mahasiswa
- Manajemen Dosen
- Manajemen User
- Role Management
- Dark Mode Theme Browser
- Responsive Design
- Tailwind CSS

---

# Requirement

## Server

| Software | Minimum |
|----------|----------|
| PHP | **8.3** |
| Composer | Latest |
| Node.js | 22+ |
| NPM | Latest |
| MySQL | **8.0+** |
| Git | Latest |

---

# Instalasi

Clone repository

```bash
git clone <repository-url>
cd SIKAD
```

Install dependency PHP

```bash
composer install
```

Install dependency Javascript

```bash
npm install
```

Copy file environment

```bash
cp .env.example .env
```

Generate key

```bash
php artisan key:generate
```

Jalankan migration

```bash
php artisan migrate
```

(Optional)

Jika tersedia seeder

```bash
php artisan db:seed
```

Jalankan Vite

```bash
npm run dev
```

Jalankan Laravel

```bash
php artisan serve
```

---

# Konfigurasi .env

Ubah konfigurasi database.

```env
APP_NAME=SIKAD
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sikad
DB_USERNAME=root
DB_PASSWORD=
```

---

# Menjalankan Menggunakan DDEV (Linux)

Pastikan DDEV sudah terinstall.

Masuk ke folder project

```bash
cd SIKAD
```

Start project

```bash
ddev start
```

Install dependency

```bash
ddev composer install
```

Install dependency frontend

```bash
ddev npm install
```

Copy environment

```bash
cp .env.example .env
```

Generate application key

```bash
ddev artisan key:generate
```

Ubah konfigurasi database pada `.env`

```env
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=db
DB_USERNAME=db
DB_PASSWORD=db
```

Jalankan migration

```bash
ddev artisan migrate
```

Jika menggunakan seeder

```bash
ddev artisan db:seed
```

Jalankan Vite

```bash
ddev npm run dev
```

Membuka project

```bash
ddev launch
```

Atau

```bash
ddev describe
```

untuk melihat URL project.

---

# Menjalankan Menggunakan Windows

## Requirement

- PHP 8.3+
- Composer
- NodeJS 22+
- MySQL 8+
- Git

Install dependency

```bash
composer install
```

```bash
npm install
```

Copy file environment

```bash
copy .env.example .env
```

Generate key

```bash
php artisan key:generate
```

Ubah konfigurasi database

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sikad
DB_USERNAME=root
DB_PASSWORD=
```

Migration

```bash
php artisan migrate
```

Seeder (opsional)

```bash
php artisan db:seed
```

Jalankan aplikasi

Terminal 1

```bash
php artisan serve
```

Terminal 2

```bash
npm run dev
```

Akses

```
http://127.0.0.1:8000
```

---

# Build Production

Install dependency

```bash
composer install --no-dev --optimize-autoloader
```

Build asset

```bash
npm run build
```

Optimasi Laravel

```bash
php artisan optimize
```

Clear cache

```bash
php artisan optimize:clear
```

---

# Demo Account

Setelah menjalankan migration dan seeder, sistem akan membuat beberapa akun demo yang dapat digunakan untuk mencoba aplikasi.

| Role | Email | Password |
|------|-------|----------|
| Admin | admin@poltekborneomedistra.ac.id | password |
| Dosen | fajri@lecturer.poltekborneomedistra.ac.id | password |
| Mahasiswa | 0123456789@student.poltekborneomedistra.ac.id | password |

### Hak Akses

#### Admin
- Login ke sistem
- Mengelola Program Studi
- Mengelola Dosen
- Mengelola Mahasiswa
- Mengelola User
- Melihat seluruh data akademik

#### Dosen
- Login ke sistem
- Melihat data pribadi
- Mengubah data profil
- Melihat data Program Studi

#### Mahasiswa
- Login ke sistem
- Melihat data pribadi
- Mengubah data profil
- Melihat data Program Studi

> **Catatan**
>
> Akun di atas hanya digunakan sebagai akun demo. Untuk penggunaan sebenarnya, seluruh akun dikelola oleh Admin sehingga tidak tersedia fitur registrasi mandiri.

---

# Struktur Project

```
app/
├── Http/
├── Models/
├── Providers/

database/
├── migrations/
├── seeders/

resources/
├── views/
├── css/
└── js/

routes/
storage/
public/
```

---

# Technology

- Laravel 13
- PHP 8.3
- Tailwind CSS
- Vite
- Blade
- MySQL

---

# License

Project ini dibuat untuk kebutuhan Sistem Informasi Akademik (SIKAD).

