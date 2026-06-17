# Deploy ke Hostinger Business Web Hosting

Panduan ini dibuat untuk project Laravel ini. Project memakai Laravel 13, Livewire, Vite, dan membutuhkan PHP minimal 8.3 sesuai `composer.json`.

## 1. Siapkan hosting

1. Masuk ke hPanel Hostinger.
2. Buka menu PHP Configuration / PHP Version, lalu pilih PHP 8.3 atau versi lebih baru yang kompatibel.
3. Aktifkan SSH Access untuk domain.
4. Buat database MySQL baru dari hPanel, lalu catat:
   - database name
   - username
   - password
   - host, biasanya `localhost`

## 2. Upload project

Struktur yang disarankan:

```text
domains/domain-anda.com/
  imigrasi-antrian/
    app/
    bootstrap/
    config/
    database/
    public/
    resources/
    routes/
    storage/
    composer.json
    artisan
```

Jangan upload `.env` lokal. Buat `.env` baru di server berdasarkan `.env.hostinger.example`.

## 3. Arahkan domain ke folder public

Laravel harus diarahkan ke folder `public`. Di hPanel, set document root/domain path ke:

```text
domains/domain-anda.com/imigrasi-antrian/public
```

Jika hPanel tidak menyediakan pengaturan document root untuk paket/domain Anda, gunakan opsi alternatif: letakkan isi folder `public` ke `public_html`, lalu ubah path di `public_html/index.php` agar menunjuk ke folder project. Opsi document root ke `public` tetap lebih rapi dan aman.

## 4. Install dependency di server

Masuk SSH ke server, lalu jalankan:

```bash
cd ~/domains/domain-anda.com/imigrasi-antrian
composer install --no-dev --optimize-autoloader
cp .env.hostinger.example .env
php artisan key:generate
```

Edit `.env` di server:

```bash
nano .env
```

Ubah minimal bagian ini:

```env
APP_URL=https://domain-anda.com
DB_DATABASE=nama_database_hostinger
DB_USERNAME=username_database_hostinger
DB_PASSWORD=password_database_hostinger
```

## 5. Build asset frontend

Kalau Node.js tersedia di server:

```bash
npm ci
npm run build
```

Kalau Node.js tidak tersedia, jalankan `npm run build` di laptop, lalu upload folder `public/build` ke server. Folder `public/build` wajib ada karena layout memakai Vite.

## 6. Migrasi dan optimasi Laravel

Jalankan:

```bash
php artisan migrate --force
php artisan storage:link
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

Jika `storage:link` gagal di shared hosting, aplikasi tetap bisa jalan selama tidak menampilkan file dari `storage/app/public`.

## 7. Permission folder

Pastikan folder berikut bisa ditulis aplikasi:

```text
storage/
bootstrap/cache/
```

Jika perlu:

```bash
chmod -R 775 storage bootstrap/cache
```

## 8. Checklist setelah online

- Buka `https://domain-anda.com`.
- Pastikan halaman tidak menampilkan error Vite manifest.
- Coba fitur antrian/survey.
- Jika muncul error 500, cek `storage/logs/laravel.log`.
- Setelah semua aman, pastikan `.env` berisi `APP_DEBUG=false`.

## Catatan penting

- `composer validate --strict` saat dicek lokal hanya memberi warning karena `barryvdh/laravel-dompdf` memakai versi `*`. Deploy tetap bisa, tetapi sebaiknya nanti versi paket dikunci.
- Project saat ini memakai `SESSION_DRIVER=database`, `QUEUE_CONNECTION=database`, dan `CACHE_STORE=database`, jadi `php artisan migrate --force` wajib dijalankan di server.
