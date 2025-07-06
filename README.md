# Aplikasi Toko - UAS Pemrograman Web Lanjut

Aplikasi Toko ini merupakan sistem penjualan sederhana berbasis web yang dibuat menggunakan **CodeIgniter 4**. Proyek ini mendukung pengelolaan transaksi, diskon, login pengguna, serta penyediaan webservice (API) yang dapat digunakan oleh aplikasi lain seperti dashboard monitoring.

---

## 🧩 Fitur

Berikut adalah fitur-fitur yang tersedia dalam aplikasi ini:

### ✅ Manajemen Transaksi
- Menampilkan daftar transaksi pembelian
- Detail transaksi: username, alamat, total harga, ongkir, status, dan tanggal transaksi
- Status transaksi: "Belum Selesai" / "Sudah Selesai"

### ✅ Web Service (API)
- Menyediakan endpoint API yang dapat diakses melalui `http://localhost:8080/api`
- API mengembalikan data JSON seluruh transaksi, termasuk jumlah item dari tabel `detail_transaksi`

### ✅ Dashboard Monitoring (Client)
- Aplikasi tambahan (`dashboard-toko`) yang mengambil data transaksi melalui API
- Menampilkan informasi transaksi secara visual dalam bentuk tabel
- Menampilkan jumlah item yang dibeli per transaksi

### ✅ Autentikasi Login (Jika diaktifkan)
- Login admin untuk mengelola data diskon atau user
- Session-based authentication

### ✅ Diskon (Jika diaktifkan)
- Menyimpan informasi diskon dalam tabel khusus
- Diskon akan diterapkan saat transaksi berjalan

---

## ⚙️ Instalasi

Langkah-langkah untuk menjalankan aplikasi ini secara lokal:

### 1. Clone Repository

```bash
git clone https://github.com/username/toko-ci4.git
cd toko-ci4
