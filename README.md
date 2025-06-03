# BikinProject: Laravel Starter Kit

<p align="center">
  <picture>
    <source media="(prefers-color-scheme: dark)" srcset="https://github.com/nuflakbrr/bikinproject/blob/main/assets/BikinProject.jpg?raw=true">
    <source media="(prefers-color-scheme: light)" srcset="https://github.com/nuflakbrr/bikinproject/blob/main/assets/BikinProject.jpg?raw=true">
    <img alt="Banner BikinProject" src="https://github.com/nuflakbrr/bikinproject/blob/main/assets/BikinProject.jpg?raw=true">
  </picture>
</p>

<p align="center">
  <a href="https://badge.fury.io/js/bikinproject.svg">
    <img src="https://badge.fury.io/js/bikinproject.svg" alt="NPM Verion">
  </a>
  <a href="https://www.npmjs.com/package/bikinproject">
    <img src="https://img.shields.io/npm/dt/bikinproject" alt="NPM Downloads">
  </a>
  <a href="https://www.npmjs.com/package/bikinproject">
    <img src="https://img.shields.io/npm/l/bikinproject" alt="NPM License">
  </a>
</p>

> [!TIP]
> Untuk memulai dan menjalankannya dengan cepat, klon repo ini dan jalankan `bash install.sh` (khusus Linux / Mac) di direktori kloning Anda.

## Teknologi Yang Digunakan

-   [Laravel](https://laravel.com/)
-   [Tailwindcss](https://tailwindcss.com/)
<!-- - [PanPHP](https://github.com/panphp/pan) -->
-   [Laravel SEO](https://github.com/ralphjsmit/laravel-seo)
<!-- - [Solo for Laravel](https://github.com/aarondfrancis/solo) -->

## Mulai Sekarang

### BikinProject

Template ini tersedia di BikinProject! Cara bagaimana untuk menggunakan template ini, ikuti langkah-langkah sederhana berikut:

1. **Instal BikinProject**: Mulailah dengan menginstal BikinProject di komputer Anda.

```bash
  npx bikinproject@latest
```

2. **Beritahu BikinProject Tempat Membuat Proyek**: Masukkan direktori tempat Anda ingin membuat proyek.

```bash
  ┌   create-bikinproject-app
  │
  ◇  Where should we create your project?
  └  ./your-project # Masukkan nama proyek Anda, seperti my-project atau .
```

3. **Pilih Proyek Starter**: Pilih proyek permulaan yang sesuai dengan kebutuhan Anda.

```
  ┌   create-bikinproject-app
  │
  ◇  Where should we create your project?
  │  ./your-project
  │
  ◇  Pick a project type within "./your-project"
  │  ● Laravel Breeze API w/ Next.js App Router (Tailwind + TypeScript)
  │  ○ Laravel Breeze API w/ Next.js App Router (Tailwind + JavaScript)
  │  ○ Laravel + Filament
  │  ○ dll.
  └  # Pilih jenis proyek dengan menggunakan tombol panah
```

4. **Tunggu BikinProject Membuat Proyek**: Tunggu BikinProject membuat proyek untuk Anda.

```
  ┌   create-bikinproject-app
  │
  ◇  Where should we create your project?
  │  ./your-project
  │
  ◇  Pick a project type within "./your-project"
  │  Laravel + Filament
  │
  ◇  ⏳ Creating project...
```

5. **Pilih sertakan instal dependensi**: Pilih untuk menginstal dependensi atau tidak.

> [!NOTE]
> Jika Anda memilih untuk memasang dependensi, BikinProject akan memasang dependensi yang diperlukan untuk Anda. Harap tunggu hingga penginstalan selesai.

```
  ┌   create-bikinproject-app
  │
  ◇  Where should we create your project?
  │  ./your-project
  │
  ◇  Pick a project type within "./your-project"
  │  Laravel + Filament
  │
  ◇  ⏳ Creating project...
  │
  ◇  ✅ Project created successfully!
  │
  ◇  Do you want to install dependencies for ./your-project?
  │  ● Yes / ○ No
  └  # Pilih Yes atau No dengan menggunakan tombol panah
```

6. **Pilih package manager**: Pilih package manager untuk menginstal dependensi.

```
  ┌   create-bikinproject-app
  │
  ◇  Where should we create your project?
  │  ./your-project
  │
  ◇  Pick a project type within "./your-project"
  │  Laravel + Filament
  │
  ◇  ⏳ Creating project...
  │
  ◇  ✅ Project created successfully!
  │
  ◇  Do you want to install dependencies for ./your-project?
  │  Yes
  │
  ◇  Pick a package manager to install dependencies for "./your-project"
  │  ● NPM
  │  ○ Yarn
  │  ○ Bun
  │  ○ PNPM
  └  # Pilih package manager dengan menggunakan tombol panah
```

7. **Tunggu BikinProject untuk install depedensi**: Tunggu BikinProject untuk menginstal dependensi yang diperlukan untuk Anda.

```
  ┌   create-bikinproject-app
  │
  ◇  Where should we create your project?
  │  ./your-project
  │
  ◇  Pick a project type within "./your-project"
  │  Laravel + Filament
  │
  ◇  ⏳ Creating project...
  │
  ◇  ✅ Project created successfully!
  │
  ◇  Do you want to install dependencies for ./your-project?
  │  Yes
  │
  ◇  Pick a package manager to install dependencies for "./your-project"
  │  PNPM
  │
  ◇  📦 Installing dependencies using pnpm...
  │
  ◇  ✅ Dependencies installed successfully!
  │
  ◇  🎉 Project ready to use!
  │
  ◇  Next steps. ───────────────╮
  │                             │
  │  cd ./your-project          │
  │  pnpm run dev               │
  │                             │
  │  Happy Coding!              │
  │                             │
  ├─────────────────────────────╯
  │
  └  Have a Problems? Report to https://github.com/nuflakbrr/bikinproject/issues
```

8. **Mulai Membangun Proyek Anda**: Setelah BikinProject menghasilkan `starter project`, selanjutnya membangun proyek Anda.

### Manual

#### Linux / Mac

Anda dapat mengikuti langkah-langkah di bawah ini untuk menginstal starter kit atau Anda cukup menjalankan `bash install.sh` untuk menginstalnya.

-   Klona repositori ini

```bash
$ npx degit nuflakbrr/fullstack-template#laravel-filament <name_of_project>
```

-   Jalankan perintah berikut untuk menginstal dependensi

```bash
$ composer install
```

-   Jalankan perintah berikut untuk instalasi starter kit

```bash
$ php artisan bikinproject:install
```

#### Windows

-   Klona repositori ini

```bash
$ npx degit nuflakbrr/fullstack-template#laravel-filament <name_of_project>
```

-   Jalankan perintah berikut untuk menginstal dependensi

```bash
$ composer install --ignore-platform-reqs
```

-   Jalankan perintah berikut untuk instalasi starter kit

```bash
$ php artisan bikinproject:install
```

Berikut ini adalah inti dari skrip `install.sh`:

-   Menginstal paket Composer yang dibutuhkan (`composer install`)
-   Menjalankan skrip artisan khusus (`php artisan bikinproject:install`)
-   Menyiapkan lingkungan (file .env)
-   Menginstal dependensi Node.js
-   Membuat kunci aplikasi
-   Menawarkan untuk menjalankan migrasi basis data
-   Mengonfigurasi nama dan URL proyek
-   Menawarkan untuk menghapus file instalasi
-   Memberikan petunjuk untuk memulai server pengembangan lokal

## Tentang Laravel

Laravel adalah kerangka kerja aplikasi web dengan sintaksis yang ekspresif dan elegan. Kami percaya bahwa pengembangan harus menjadi pengalaman yang menyenangkan dan kreatif agar benar-benar memuaskan. Laravel menghilangkan kesulitan dalam pengembangan dengan memudahkan tugas-tugas umum yang digunakan dalam banyak proyek web, seperti:

-   [Mesin perutean yang sederhana dan cepat](https://laravel.com/docs/routing).
-   [Kontainer injeksi dependensi yang kuat](https://laravel.com/docs/container).
-   Beberapa back-end untuk penyimpanan [session](https://laravel.com/docs/session) dan [cache](https://laravel.com/docs/cache).
-   [ORM basis data](https://laravel.com/docs/eloquent) yang ekspresif dan intuitif.
-   [Migrasi skema](https://laravel.com/docs/migrations) yang tidak bergantung pada basis data.
-   [Pemrosesan pekerjaan latar belakang yang tangguh](https://laravel.com/docs/queues).
-   [Penyiaran peristiwa secara real-time](https://laravel.com/docs/broadcasting).

Laravel mudah diakses, canggih, dan menyediakan alat yang dibutuhkan untuk aplikasi yang besar dan tangguh.

## Belajar Laravel

Laravel memiliki [dokumentasi](https://laravel.com/docs) dan pustaka tutorial video terlengkap dan menyeluruh dari semua kerangka kerja aplikasi web modern, sehingga memudahkan Anda untuk memulai menggunakan kerangka kerja tersebut.

Anda juga dapat mencoba [Laravel Bootcamp](https://bootcamp.laravel.com), tempat Anda akan dipandu untuk membangun aplikasi Laravel modern dari awal.

Jika Anda tidak ingin membaca, [Laracasts](https://laracasts.com) dapat membantu. Laracasts berisi ribuan tutorial video tentang berbagai topik termasuk Laravel, PHP modern, pengujian unit, dan JavaScript. Tingkatkan keterampilan Anda dengan mempelajari pustaka video kami yang lengkap.

## Author Templat Ini

Nama kontributor dan info kontak,

Naufal Akbar Nugroho  
[Website](https://nuflakbrr.github.io)
[Github](https://github.com/nuflakbrr)
[Instagram](https://instagram.com/kbrnugroho)
