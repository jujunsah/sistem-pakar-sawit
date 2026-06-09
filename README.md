# Sistem Pakar Kelapa Sawit — macOS Developer Pro Edition

Aplikasi web Sistem Pakar sederhana berbasis kecerdasan buatan (*Artificial Intelligence*) yang menerapkan metode inferensi **Forward Chaining**. Sistem ini dirancang khusus untuk mensimulasikan kepakaran ahli pertanian dalam melakukan diagnosis dini dan memberikan keputusan medikasi secara mandiri bagi *end user* (petani/praktisi perkebunan) terhadap penyakit kritis pada tanaman kelapa sawit.

Aplikasi ini mengadopsi bahasa desain **macOS Pro App Workspace** dengan pendekatan arsitektur *split-view panel* (Xcode/VS Code Style) untuk menghasilkan antarmuka teknis yang bersih (*clean*), ergonomis, dan presisi tinggi.

---

## 🚀 Fitur Premium & Interaksi Mikro

1. **macOS Split-View & UI Vibrancy:** Tata letak 2-kolom responsif yang memisahkan status metadata konsol sistem di sisi kiri dengan ruang kerja utama (*workspace*) di sisi kanan. Menggunakan teknik *glassmorphism* (`backdrop-blur-3xl`) putih susu transparan untuk menjaga kontras ketajaman teks.
2. **Native Dialog Sheets (Custom Alert):** Validasi *client-side* modern menggunakan ES6+ yang mencegat pengiriman form kosong tanpa merusak estetika dengan meluncurkan komponen modal *alert sheet* kustom beranimasi *spring bounce* khas Apple OS.
3. **Logo Hidup (Glow Pulse Effect):** Efek pendaran gradien sirkuit (*Emerald-to-Teal*) yang berdenyut tenang secara konstan di sekitar ikon utama untuk memberikan indikasi visual bahwa mesin inferensi aktif.
4. **Unix Tipografi System:** Sinkronisasi *font stack* bawaan Apple (`SF Pro Display` dan `SF Pro Text`) dengan perataan subpixel rendering anti-alias untuk kenyamanan membaca, dikombinasikan dengan `SF Mono` untuk token penanda gejala (`G01`, `G02`, dst.).
5. **Dinamis Output State:** Halaman konsol output (`backend.php`) yang adaptif, secara otomatis mengubah pendaran piringan pemicu medikasi menjadi hijau *emerald* jika aturan terpenuhi, atau *amber gold* premium jika gejala tidak dikenali.

---

## 🛠️ Arsitektur Teknologi (Tech Stack)

* **Front-End Engine:** HTML5, Tailwind CSS (Utility Framework via CDN), Custom CSS3.
* **Client-Side Logic:** Vanilla JavaScript ES6+ (Array Prototyping `.some()` & Arrow Functions).
* **Back-End Engine:** Native PHP 8.x Core (Array Intersect Computation & Logical Verification).
* **Environment:** Linux Mint OS Desktop Workspace.

---

## 📁 Struktur Direktori Proyek

```text
sistem-pakar-sawit/
├── assets/
│   ├── css/
│   │   └── style.css      # Kompilasi Font Apple, Keyframes Animasi & Micro-interactions
│   ├── img/
│   │   ├── background.jpg # Wallpaper digital biological network graph (1920x1080)
│   │   └── logo.png       # Ikon perisai utama kelapa sawit
│   └── js/
│       └── script.js      # Validator ES6+ & Generator Komponen macOS Dialog Sheet
├── backend.php            # Mesin inferensi logika komputasi Forward Chaining (Server-Side)
├── index.html             # Antarmuka Workspace Pengumpulan Gejala (Client-Side)
└── README.md              # Dokumentasi teknis repositori aplikasi